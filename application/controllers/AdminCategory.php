<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCategory extends CI_Controller {

	public function index(){
		$this->load->view('landing/admin_category');
	}
}
