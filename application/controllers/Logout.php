<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {	

	// Logout all session and take the user to the frontpage
	public function index(){
		// $this->session->sess_destroy();
		// redirect(base_url());
		$sessions = $this->session->all_userdata();
		foreach( $sessions as $key => $value ) {
			if( $key != 'cart_contents' ) {
				$this->session->unset_userdata($key);
			}
		}
		redirect(base_url('seller/login'));
	}

}
