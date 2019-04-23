<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendors extends MY_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $page_data['page'] = 'seller';
        $page_data['title'] = "Seller on Onitshamarket";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $this->load->view('landing/vendors', $page_data);
    }
}
