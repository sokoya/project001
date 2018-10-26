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

        $user = $this->seller->get_profile( base64_decode($this->session->userdata('logged_id')) );
        if($user->is_seller == 'approved'){
            $this->session->set_flashdata('success_msg','Welcome to your seller dashboard.');
            redirect('seller/overview');
        }
    }

    public function index(){        
        $page_data['page_title'] = 'Seller Application Form';
        $page_data['pg_name'] = 'application';
        $page_data['sub_name'] = 'application_form';
        $page_data['categories'] = $this->seller->get_category_name('','root_category');
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
        if($this->input->post()){
            $this->form_validation->set_rules('legal_company_name', 'Legal Company name','trim|required|xss_clean');
            $this->form_validation->set_rules('address', 'Address','trim|required|xss_clean');
            $this->form_validation->set_rules('main_category', 'Main Category','trim|required|xss_clean');
            $this->form_validation->set_rules('own_brand', 'Do you own your brand','trim|required|xss_clean');
            $this->form_validation->set_rules('license_to_sell', 'Do you have license to sell','trim|required|xss_clean');
            $this->form_validation->set_rules('license_to_sell', 'Do you have license to sell','trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_msg','There was an error with the information. Please fix the following <br />' . validation_errors() );
                redirect('seller/application');
            }else{
                $data = array();
                foreach ($_POST as $key => $value) {
                    $data[$key] = cleanit($value);
                }
                $data['uid'] = base64_decode($this->session->userdata('logged_id'));
                $data['date_applied'] = get_now();
                $insert = $this->seller->insert_data('sellers', $data);
                if( is_numeric( $insert )){
                    // update the seller status to pending
                    $user_data['is_seller'] = 'pending';
                    $this->seller->update_data(array('id' => $data['uid']), $user_data, 'users');
                    $this->session->set_flashdata('success_msg','Congrats! Your application has been received, we will get back to you shortly.');
                    redirect('seller/application/status');
                }else{
                    $this->session->set_flashdata('error_msg','There was an error submitting the form. Please try again or contact support for assistance.');
                    redirect($_SERVER['HTTP_RERFFER']);
                }
            }
        }else{
            $this->session->set_flashdata('error_msg','You need to fill the form with appropriate data.');
            redirect('seller/application');
        }
    }

    function status(){
        $user = $this->seller->get_profile( base64_decode($this->session->userdata('logged_id')) );
        if( $user->is_seller == 'false'){
            $this->session->set_flashdata('success_msg','Please fill in the form to become a seller');
            redirect('seller/application');
        }
        $page_data['status'] = $this->seller->get_seller_status(base64_decode($this->session->userdata('logged_id')));
        $page_data['page_title'] = 'Seller Application Status';
        $page_data['pg_name'] = 'application';
        $page_data['sub_name'] = 'application_status';
        $page_data['meta_tags'] = array( 'css/bootstrap.min.css','css/nifty.min.css','css/nifty-demo-icons.min.css','css/nifty-demo.min.css');
        $page_data['scripts'] = array('js/jquery.min.js','js/bootstrap.min.js', 'js/nifty.min.js');
        $this->load->view('seller/application_status', $page_data);

    }
}
