<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model', 'product');
        $this->load->helper('text');
    }

	public function index(){
        $this->session->set_userdata('referred_from', current_url());
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
    public function catalog(){
        $str = $this->uri->segment(2); 
        $str = preg_replace("/[^A-Za-z0-9-]/","",cleanit($str) );
        $str = preg_replace("/[^A-Za-z0-9]/"," ",cleanit($str) ); // Convert the - to space 
        if( $str == '' ) redirect(base_url());      
        
        $features = $this->product->get_features($str);
        $output_array = array();
        foreach($features as $feature => $values ){
            foreach ($values as $key => $value) {
                $variables = json_decode( $value );
                foreach ($variables as $new_key => $new_value) {
                    if( is_array($new_value) ){
                        $new_value = array_map("unserialize", array_unique(array_map("serialize", $new_value)));
                        foreach ($new_value as $inkey => $invalue) $output_array[$new_key][] = $invalue;
                        $output_array[$new_key] = array_unique($output_array[$new_key], SORT_REGULAR);
                    }else{
                        $output_array[$new_key][] = $new_value;
                        $output_array[$new_key] = array_unique($output_array[$new_key], SORT_REGULAR);
                    }
                }
            }
        }
        // pagination
        $count = $this->product->num_of_products($str);
        $this->load->library('pagination');
        $this->config->load('pagination'); // Load d config
        $config = $this->config->item('pagination');
        $config['base_url'] = current_url() ;
        $config['total_rows'] = $count;
        $config['per_page'] = 1;    
        $config["num_links"] = 5;
        $this->pagination->initialize($config); 

        $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
        if( $page > 1 ) $page -= 1;
        $page_data['features'] = $output_array;
        $array = array('str' => $str,'limit' => $config['per_page'],'offset' => $page);
        $page_data['pagination'] = $this->pagination->create_links();        
        $page_data['products'] = $this->product->get_products( $array, $this->input->get() );
        $page_data['brands'] = $this->product->get_brands($str);
        $page_data['colours'] = $this->product->get_colours($str);
        $page_data['sub_categories'] = $this->product->get_sub_categories($str);
        $this->load->view('landing/category', $page_data);

    }


    // Fetch data base on search Ajax
    public function fetch_data(){
        // var_dump( $_POST['filters']);
    }


    public function cart(){
        $this->load->library('cart');
        $data = array(
            'id' => base64_decode($this->input->post('product_id')),
            'qty' => $this->input->post('quantity'),
            'price' => $this->input->post('product_price'),
            'name' => $this->input->post('product_name'),
            'options' => array('Size' => $this->input->post('variation'), 'Colour' => $this->input->post('colour'))
        );
        var_dump($data);
    }


}
