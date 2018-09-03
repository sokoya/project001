<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Buyers profile account
class Account extends CI_Controller {

	// Control panel
	public function index(){
		$page_data['page'] = 'dashboard';
		$this->load->view('account/dashboard', $page_data);
	}

	// Orders
	public function orders(){
		$page_data['page'] = 'orders';
		$this->load->view('account/orders', $page_data);
	}

	// Personal Information and Change password
	public function information(){

	}

	// Saved and Wishlist
	public function saved(){

	}

	// Settings
	public function settings(){

	}


}
