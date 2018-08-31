<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Buyers profile account
class Account extends CI_Controller {

	// Control panel
	public function index(){
		$this->load->view('account/dashboard');
	}
}
