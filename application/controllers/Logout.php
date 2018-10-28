<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {	

	// Logout all session and take the user to the frontpage
	public function index(){
		// // $this->session->sess_destroy();
		// $this->session->unset_userdata('logged_in');
		// $this->session->unset_userdata('email');
		// $this->session->unset_userdata('logged_id');
		// $this->session->unset_userdata('referred_from');
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
