<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRootCategory extends CI_Controller {

	public function index(){
		$this->load->view('landing/admin_root_category');
	}
}
