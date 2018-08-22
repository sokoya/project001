<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

	public function __construct(){
        // @todo
        // Check if the user is already logged in
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        if( $this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            if( !empty($this->session->userdata('referred_from')) ) redirect($this->session->userdata('referred_from'));
            redirect(base_url());
        }        
    }

	public function index(){
		$this->load->view('landing/resetpassword');
	}

	function process(){
		$this->form_validation->set_rules('resetemail','Email Address', 'trim|required|min_length[3]|valid_email');
		$email = cleanit($this->input->post('email'));
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_msg', validation_errors());
		} else {
			$activation_token = generate_token(25);
			
		}
		redirect('resetpassword');
	}
}
