<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends MY_Controller
{

	public function __construct(){
	}


	public function index(){
        redirect(base_url());
    }
    // Product Warranty
    public function warranty(){

    }

    public function reviews(){
        $product_code = cleanit( $this->uri->segment(2));

    }

    public function add_rating(){

    }
}
