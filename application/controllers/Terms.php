<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Buyers profile account
class Terms extends MY_Controller {
    public function __construct(){
        // @todo
        parent::__construct();
        $this->load->model('user_model', 'user');

    }


    //Terms
    public function index(){
        $page_data['page'] = 'terms';
        $page_data['title'] = "Terms &amp; Conditions";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('landing/tnc', $page_data);
    }

    public function privacy(){
        $page_data['page'] = 'privacy';
        $page_data['title'] = "Privacy &amp; Security";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('landing/privacy', $page_data);
    }

}
