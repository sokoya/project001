<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller
{

	public function __construct()
	{
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

	public function index(){}

	function fetch_states(){
		$states = $this->user->get_states();
		header('Content-type: text/json');
		header('Content-type: application/json');
		echo json_encode($states);
		exit;
	}

	function fetch_areas(){
		if ($this->input->get('sid')) {
			$sid = $this->input->get('sid');
			$areas = $this->user->get_area($sid);
			header('Content-type: text/json');
			header('Content-type: application/json');
			echo json_encode($areas);
			exit;
		}
		redirect(base_url());
	}

	function search_complete(){
		$search = cleanit( $this->input->post('search') );
		$results = $this->product->search_query( $search );
	}

}
