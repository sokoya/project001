<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Errors extends MY_Controller {

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
