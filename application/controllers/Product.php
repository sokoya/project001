<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model', 'product');
        $this->load->helper('text');
//        $this->load->helper('site');
    }

	public function index(){
	    $uri = $this->uri->segment(1);
        $index = substr($uri, strrpos($uri, '-') + 1);
        // sanitize
        if( !is_numeric( cleanit($index) ) ) redirect(base_url());
        $page_data['product'] = $this->product->get_product( $index );
        if( !empty($page_data['product']) ){
            $page_data['variation'] = $this->product->get_variation($index);
            $page_data['gallery'] = $this->product->get_gallery($index);
            $this->load->view('landing/product', $page_data);
        }else{
            redirect(base_url());
        }
	}
}
