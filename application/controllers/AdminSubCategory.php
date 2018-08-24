<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSubCategory extends CI_Controller {

	public function index(){
		$this->load->view('landing/admin_sub_category');
	}
}
