<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('seller_model', 'seller');
        if( !$this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            $from = $this->session->userdata('referred_from');
            if( !empty($from) ) redirect($this->session->userdata('referred_from'));
            redirect('seller/login');
        }  

        $user = $this->seller->get_profile( base64_decode($this->session->userdata('logged_id')) );
        if( $user->is_seller == 'false' ){
            $this->session->set_flashdata('success_msg','Please complete the below form to become a seller!');
            redirect('seller/application');
        }elseif( $user->is_seller == 'pending'){
            $this->session->set_flashdata('success_msg','Your account is under review.');
            redirect('seller/application/status');
        }        
    }

    public function index(){
        $status = cleanit($this->input->get('type'));
        $page_data['page_title'] = 'Manage all orders - ' . lang('app_name');
        $page_data['pg_name'] = 'orders';
        $page_data['sub_name'] = 'order_'.$status;
        $page_data['profile'] = $this->seller->get_profile_details(base64_decode($this->session->userdata('logged_id')),
            'first_name,last_name,email,profile_pic');
        // get product
        $page_data['orders'] = $this->seller->get_orders( base64_decode($this->session->userdata('logged_id')), $status
            );
        $this->load->view('seller/orders', $page_data);
    }
}
