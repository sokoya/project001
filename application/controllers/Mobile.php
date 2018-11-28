<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends MY_Controller
{

	public function __construct(){
        if (!$this->agent->is_mobile()) {
            redirect($_SERVER['HTTP_REFERER']);
        }
	}


	public function index(){
        redirect(base_url());
    }
    // Product Warranty
    public function warranty(){

    }

    public function reviews(){
        $uri = cleanit( $this->uri->segment(2));
        $index = substr($uri, strrpos($uri, '-') + 1);
        $page_data['rating_counts'] = $this->product->get_rating_counts($index);
        $page_data['reviews'] = $this->product->get_reviews($index);
        $this->load->view('mobile/reviews', $page_data);
    }

    public function add_rating(){
        $product_code = cleanit( $this->uri->segment(3));
    }
}
