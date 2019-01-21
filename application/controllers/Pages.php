<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends MY_Controller {
    public function __construct(){
        parent::__construct();
    }


    //Terms
    public function index(){
        redirect('pages/terms');
    }

    public function terms(){
        $page_data['page'] = 'terms';
        $page_data['title'] = "Terms &amp; Conditions";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('landing/tnc', $page_data);
    }
    public function privacy(){
        $page_data['page'] = 'privacy';
        $page_data['title'] = "Privacy &amp; Security";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
//        $page_data['privacy'] = $this->user->get_row('page_contents', 'content', "(type='privacy')")->content;
        $this->load->view('landing/privacy', $page_data);
    }
    public function contact(){
        $page_data['page'] = 'contact';
        $page_data['title'] = "Contact";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('landing/contact', $page_data);
    }


    public function agreement(){
        $page_data['page'] = 'agreement';
        $page_data['title'] = "Registration Agreement";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('landing/agreement', $page_data);
    }

}
