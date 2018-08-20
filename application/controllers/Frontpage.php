<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	public function index(){
		$this->session->set_flashdata('success_msg','You are now logged in!');
		$this->load->view('landing/home');
	}
}
