<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('product_model', 'product');
    }

	public function index(){
		// get the categories 
		$page_data['title'] = 'Browse, buy ladies wears, men wears, kids wears, home electronics at affordable prices';
		$this->load->view('landing/home', $page_data);
	}
}
