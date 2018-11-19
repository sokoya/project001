<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index(){
		// get the categories 
		$page_data['title'] = 'Online shopping | Buy Electronics, Phones, Fashions in Nigeria';
		$page_data['page'] = 'homepage';
		$this->load->view('landing/home', $page_data);
	}
}
