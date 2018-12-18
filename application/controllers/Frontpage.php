<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index(){
        $this->output->cache(60);
		$page_data['title'] = 'Online shopping | Buy Electronics, Phones, Fashions in Nigeria';
		$page_data['page'] = 'homepage';
        if ($this->agent->is_mobile()) {
            $this->load->view('landing/mobile-home', $page_data);
        } else {
            // make a call
            $page_data['categories'] = $this->product->desktop_display();
            $this->load->view('landing/home', $page_data);
        }
	}
}
