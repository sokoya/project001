<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model', 'product');
        $this->load->helper('text');
    }

	public function index(){
	    $uri = $this->uri->segment(1);
        $index = substr($uri, strrpos($uri, '-') + 1);
        // sanitize
        if( !is_numeric( cleanit($index) ) ) redirect(base_url());
        $page_data['product'] = $this->product->get_product( $index );
        $page_data['variation'] = $this->product->get_variation($index);
        $page_data['variations'] = $this->product->get_variations($index);
        $page_data['gallery'] = $this->product->get_gallery($index);
        $page_data['favourited'] = $this->product->is_favourited($this->session->userdata('logged_id'), $index);
        $this->load->view('landing/product', $page_data);
	}

    public function fav(){
        if( !$this->session->userdata('logged_in')) redirect(base_url());        
        $this->load->model('user_model');
        if($this->user_model->favourite( $this->session->userdata('logged_id'), base64_decode($this->input->post('pid')),
            $this->input->post('action') )){
            echo true;
            exit;
        }else{
            echo false;
            exit;
        }
                   
    }

    
    // List Product Page
    public function catalog( ){
        // @TODO: Not fetching the right category feeds
        $str = $this->uri->segment(2); 
        $str = preg_replace("/[^A-Za-z0-9-]/","",cleanit($str) );
        $str = preg_replace("/[^A-Za-z0-9]/"," ",cleanit($str) ); // Convert the - to space
        
        $page_data['products'] = $this->product->get_products( $str );
        $page_data['brands'] = $this->product->get_brands($str);
        $page_data['colours'] = $this->product->get_colours($str);
        $features = $this->product->get_features($str);
        $output_array = array();
        foreach($features as $feature => $values ){
            foreach ($values as $key => $value) {
                $variables = json_decode( $value );
                foreach ($variables as $new_key => $new_value) {
                    if( is_array($new_value) ){
                        foreach ($new_value as $inkey => $invalue) $output_array[$new_key][] = $invalue;
                    }else{
                        $output_array[$new_key][] = $new_value;
                    }
                }
            }
        }
        $output_array = array_map("unserialize", array_unique(array_map("serialize", $output_array)));
        $page_data['features'] = $output_array;
        // var_dump($page_data['features']);
        // exit;
        $this->load->view('landing/category', $page_data);
    }


    // Fetch data base on search Ajax
    public function fetch_data(){

        // if( $this->input->post('action')){
        //     var_dump( $_POST);
        //     exit;
        // }
    }


}
