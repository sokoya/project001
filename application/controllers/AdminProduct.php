<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProduct extends CI_Controller {

	public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('admin_model', 'admin');
        $this->output->enable_profiler(TRUE);
        // if( $this->session->userdata('logged_in') ){
        //     // Ursher the person to where he is coming from
        //     if( !empty($this->session->userdata('referred_from')) ) redirect($this->session->userdata('referred_from'));
        //     redirect(base_url());
        // } 
    }

	public function index(){

		$this->load->view('landing/admin_product');
	}

	
}
