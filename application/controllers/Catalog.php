<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model', 'product');
        $this->load->helper('text');
        // $this->output->enable_profiler(TRUE);
    }

    /* Expecting either of the following as the first arguement
    - Root category
    - Category
    - sub category
    */

    // List Product Page

	public function index(){
	    $str = $this->uri->segment(2); // root category, category, sub category
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



    
}
