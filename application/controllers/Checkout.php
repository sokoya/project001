<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_userdata('referred_from', current_url());
			redirect('login');
		}
		if (empty($this->cart->total_items())) {
			redirect(base_url());
		}
	}

	public function index(){
		// @TODO : Check the product variation quantity and price
		$page_data['title'] = 'Checkout';
		$this->load->model('user_model', 'user');
		$page_data['user'] = $this->user->get_profile(base64_decode($this->session->userdata('logged_id')));
		$page_data['addresses'] = $this->user->get_user_billing_address( $page_data['user']->id);
		$this->load->view('landing/checkout', $page_data);
	}

	function fetch_states(){
		$states = $this->user->get_states();
		header('Content-type: text/json');
		header('Content-type: application/json');
		echo json_encode($states);
        exit;
	}

	function fetch_areas(){
		if( $this->input->get('sid') ){
			$sid = $this->input->get('sid');
			$areas = $this->user->get_area( $sid );
			header('Content-type: text/json');
			header('Content-type: application/json');
			echo json_encode($areas);
	        exit;
		}
		redirect(base_url());
	}
}
