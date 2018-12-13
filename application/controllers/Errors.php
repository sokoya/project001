<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Errors extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $general_settings = $this->db->get('general_settings')->row();
        define('FACEBOOK_LINK', $general_settings->facebook_link);
        define('INSTAGRAM_LINK', $general_settings->instagram_link);
        define('TWITTER_LINK', $general_settings->twitter_link);
        define('DESCRIPTION', $general_settings->description);
        define('KEYWORD', $general_settings->keywords);
    }


    public function index(){
        redirect('errors/_404');
    }

    public function _404(){
        $page_data['page'] = 'error_404';
        $page_data['title'] = "Page Not Found";
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('errors/html/_404', $page_data);
    }
}
