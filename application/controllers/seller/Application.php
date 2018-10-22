<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('seller_model', 'seller');
        if( !$this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            if( !empty($this->session->userdata('referred_from')) ) redirect($this->session->userdata('referred_from'));
            redirect('seller/login');
        }
    }

    public function index(){        
        $page_data['page_title'] = 'Seller Application Form';
        $page_data['pg_name'] = 'application';
        $page_data['sub_name'] = 'application_form';
        $this->load->helper('query');
        $page_data['categories'] = get_categories();
        $page_data['meta_tags'] = array( 'css/bootstrap.min.css','css/nifty.min.css','css/nifty-demo-icons.min.css','css/nifty-demo.min.css');
        $page_data['scripts'] = array('js/jquery.min.js','js/bootstrap.min.js', 'js/nifty.min.js');
        $status = $this->seller->get_seller_status(base64_decode($this->session->userdata('logged_id')));
        if( $status->is_seller == 'false' ){
            $this->load->view('seller/application_form', $page_data);
        }else{
            redirect('seller/application/status');
        }
    }

    public function process(){
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = cleanit($value);
        }
        $data['uid'] = base64_decode($this->session->userdata('logged_id'));
        $insert = $this->seller->insert_data('sellers', $data);
        if( is_numeric( $insert )){
            // update the seller status to pending
            $user_data['is_seller'] = 'pending';
            $this->seller->update_data($data['uid'], $user_data, 'users');
            redirect('seller/application/status');
        }else{
            $this->session->set_flashdata('error_msg','There was an error submitting the form.');
            redirect($_SERVER['HTTP_RERFFER']);
        }
    }

    function status(){
        $page_data['status'] = $this->seller->get_seller_status(base64_decode($this->session->userdata('logged_id')));
        $page_data['page_title'] = 'Seller Application Status';
        $page_data['pg_name'] = 'application';
        $page_data['sub_name'] = 'application_status';
        $page_data['meta_tags'] = array( 'css/bootstrap.min.css','css/nifty.min.css','css/nifty-demo-icons.min.css','css/nifty-demo.min.css');
        $page_data['scripts'] = array('js/jquery.min.js','js/bootstrap.min.js', 'js/nifty.min.js');
        $this->load->view('seller/application_status', $page_data);

    }
}
