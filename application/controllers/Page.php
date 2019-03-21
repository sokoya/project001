<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
    public function __construct(){
        parent::__construct();
    }


    //Terms
    public function index(){
        redirect('page/terms');
    }

    public function terms(){
        $page_data['page'] = 'terms';
        $page_data['title'] = "Terms &amp; Conditions";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $page_data['terms'] = $this->user->get_row('page_contents', 'content, date_modified', "(type = 'terms')")->content;
        $this->load->view('landing/tnc', $page_data);
    }



    public function privacy(){
        $page_data['page'] = 'privacy';
        $page_data['title'] = "Privacy &amp; Security";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $page_data['privacy'] = $this->user->get_row('page_contents', 'content', "(type='privacy')")->content;
        $this->load->view('landing/privacy', $page_data);
    }

    public function social_responsibility(){
        $page_data['page'] = 'social';
        $page_data['title'] = "Social Responsibility";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $page_data['social'] = $this->user->get_row('page_contents', 'content', "(type='social')")->content;
        $this->load->view('landing/social', $page_data);
    }


    public function contact(){
        $page_data['page'] = 'contact';
        $page_data['title'] = "Contact";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $this->load->view('landing/contact', $page_data);
    }


    public function agreement(){
        $page_data['page'] = 'agreement';
        $page_data['title'] = "Registration Agreement";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $page_data['agreement'] = $this->user->get_row('page_contents', 'content', "(type='agreement')")->content;
        $this->load->view('landing/agreement', $page_data);
    }

    // SHopping help and FAq
    public function shopping_help(){
        $page_data['page'] = 'shopping_help';
        $page_data['title'] = "Shopping Help On Onitshamarket.com";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
//        $page_data['privacy'] = $this->user->get_row('page_contents', 'content', "(type='shopping_help')")->content;
        $this->load->view('landing/shopping_help', $page_data);
    }

    // About onitshamarket
    public function about_onitshamarket(){
        $page_data['page'] = 'about_onitshamarket';
        $page_data['title'] = "About Onitshamarket.com";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
//        $page_data['privacy'] = $this->user->get_row('page_contents', 'content', "(type='about_us')")->content;
        $this->load->view('landing/about_onitshamarket', $page_data);
    }

}
