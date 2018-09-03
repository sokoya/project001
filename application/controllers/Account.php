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
		$page_data['page'] = 'information';
		$this->load->view('account/information', $page_data);
	}

	// Saved and Wishlist
	public function saved(){
		$page_data['page'] = 'saved';
		$this->load->view('account/saved', $page_data);
	}

	// Settings
	public function settings(){
		$page_data['page'] = 'settings';
		$this->load->view('account/settings', $page_data);
	}


}
