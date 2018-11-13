<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('seller_model', 'seller');
        if( !$this->session->userdata('logged_in') ){
            redirect('seller/login');
        }

        $user = $this->seller->get_profile( base64_decode($this->session->userdata('logged_id')) );
        if( $user->is_seller == 'false' ){
            $this->session->set_flashdata('success_msg','Please complete the below form to become a seller!');
            redirect('seller/application');
        }elseif( $user->is_seller == 'pending' ){
            $this->session->set_flashdata('success_msg','Your account is under review.');
            redirect('seller/application/status');
        }

    }

    public function index(){
        $page_data['page_title'] = 'My Messages';
        $page_data['pg_name'] = 'message';
        $page_data['sub_name'] = 'message';
        $page_data['profile'] = $this->seller->get_profile_details(base64_decode($this->session->userdata('logged_id')),
            'first_name,last_name,email,profile_pic');        
        $page_data['messages'] = $this->seller->get_message( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('seller/message', $page_data);
    }

    function message_detail(){
        if( !$this->input->is_ajax_request() ){ 
            redirect(base_url()); 
        }
        $mid = $this->input->post('mid');
        $result = $this->seller->get_message(base64_decode($this->session->userdata('logged_id')),'', $mid);
        $output = array();
        $output['title'] = $result['title'];
        $output['content'] = $result['content'];
        $output['created_on'] = neatDate( $result['created_on'] ) . ' ' . neatTime($result['created_on']);
        echo json_encode( $result , JSON_UNESCAPED_SLASHES);
        exit;

    }
}
