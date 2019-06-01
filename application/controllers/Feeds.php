<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feeds extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('feeds_model', 'feeds');
	}


	public function index()
	{
	    base_url();
    }

	// New Arrival Post...
	public function new_arrivals()
    {
        $this->session->set_userdata('referred_from', current_url());
        $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
		if ($page > 1) $page -= 1;
		$this->load->library('pagination');
		$this->config->load('pagination');
		$config = $this->config->item('pagination');
		$config['base_url'] = current_url();
		$config['total_rows'] = 120;
		$config['per_page'] = 40;
		$this->pagination->initialize($config);
		$array['limit'] = $config['per_page'];
		$array['offset'] = $page;
		$array['is_limit'] = true;
		$page_data['pagination'] = $this->pagination->create_links();
		$page_data['products'] = $this->feeds->get_new_arrival($array);
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
		$page_data['page'] = 'new_arrival';
		$page_data['title'] = "New trending fashion, computer, phones, gadgets, accessories";
//		print_r($page_data['products']); exit;
        $this->load->view('landing/new_arrival', $page_data);
    }

	// Explore Product Post...
	public function explore()
    {
        $this->session->set_userdata('referred_from', current_url());
        $page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
        $page_data['page'] = 'new_arrival';
        $page_data['title'] = "Explore trending fashion, computer, phones, gadgets, accessories";
        $page_data['justforyou'] = $this->product->randomproducts(array(31,33,36,53,1,2,3,4,5,6,7,8,9,10,11,23,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,61,62,63,64,65,66,67,68,69,70), 12); // Just for you
        $page_data['recommendeds'] = $this->user->recommendedproducts($this->session->userdata('logged_id'));
        $this->load->view('landing/explore', $page_data);
    }
    


	/**
     * Fetch all category categories and products that relates to made In Nigeria
	 * Made In Nigeria Concept
	 */
	public function made_in_nigeria(){
        $page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
        $this->session->set_userdata('referred_from', current_url());
        $str = cleanit($this->uri->segment(2));
        if ($str == '') {
            $this->load->helper('array');
            $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
            if ($page > 1) $page -= 1;
            $array = array('is_limit' => false);
            $catalog_products = $this->feeds->made_in_nigeria_products($array,array());
            $x = (array)$this->feeds->made_in_nigeria_products($array, $this->input->get());
            $page_data['count_in_total'] = count($catalog_products);
            $count = $page_data['total_count'] =  (count($x));
            $this->load->library('pagination');
            $this->config->load('pagination');
            $config = $this->config->item('pagination');
            $config['base_url'] = current_url();
            $config['total_rows'] = $count;
            $config['per_page'] = 32;
            $this->pagination->initialize($config);
            $array['limit'] = $config['per_page'];
            $array['offset'] = $page * 32;
            $array['is_limit'] = true;
            $page_data['pagination'] = $this->pagination->create_links();
            $page_data['products'] = $this->feeds->made_in_nigeria_products($array, $this->input->get());
            $query = $this->input->get('q');
            $q = (isset($query) && !empty($query)) ? cleanit($query) : '';
            $page_data['price_min'] = cleanit($this->input->get('price_min',true));
            $page_data['price_max'] = cleanit($this->input->get('price_max',true));
            $page_data['sub_categories'] = $this->product->get_results('categories', 'id, name, slug, description', array('pid' => 0));
            $category_detail = (array)$page_data['sub_categories'];
            $x = random_element( $category_detail);
            $page_data['category_detail'] = $this->product->category_details( $x->slug );
            $page_data['colours'] = '';
            $page_data['brands'] = '';
            $page_data['features'] = '';
            $page_data['description'] = "Search varieties of Nigeria made items ranging from Phones, Electronics, Computing, Fashion, Health, Toys & Games. Proudly made In Nigeria products - Cheap -Quality - Affordable - 100% Customer satisfactory";
            $page_data['title'] = 'Shop for affordable and quality made in nigeria products';
            $page_data['page'] = 'made_in_nigeria';
            $page_data['min'] = $page_data['max'] = '';
            if( $page_data['products'] ){
                $array = (array) $catalog_products;
                $page_data['min'] = min(array_map(function($array) { return $array->sale_price; }, $array));
                $page_data['max'] = max(array_map(function($array) { return $array->sale_price; }, $array));
            }
        }else{
            $features = $this->product->get_features($str);
            $output_array = array();
            if ($features) {
                foreach ($features as $feature => $values) {
                    foreach ($values as $key => $value) {
                        $variables = json_decode($value);
                        foreach ($variables as $new_key => $new_value) {
//					    echo( $new_value);
//					    echo '<br />';
                            if (is_array($new_value)) {
                                $new_value = array_map("unserialize", array_unique(array_map("serialize", $new_value)));
                                foreach ($new_value as $inkey => $invalue) {
                                    $invalue = strtolower( $invalue );
                                    $output_array[$new_key][] = $invalue;
                                }
                                $output_array[$new_key] = array_unique($output_array[$new_key], SORT_REGULAR);
                            } else {
                                $new_value = strtolower( $new_value );
                                $output_array[$new_key][] = $new_value;
                                $output_array[$new_key] = array_unique($output_array[$new_key], SORT_REGULAR);
                            }
                        }
                    }
                }
            }
            // pagination
            $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
            if ($page > 1) $page -= 1;
            $array = array('str' => $str, 'is_limit' => false);
            $catalog_products = $this->feeds->made_in_nigeria_products($array,array());
            $x = (array)$this->feeds->made_in_nigeria_products($array, $this->input->get());
            $page_data['count_in_total'] = count($catalog_products);
            $count = $page_data['total_count'] =  (count($x));
            $this->load->library('pagination');
            $this->config->load('pagination');
            $config = $this->config->item('pagination');
            $config['base_url'] = current_url();
            $config['total_rows'] = $count;
            $config['per_page'] = 32;
            $this->pagination->initialize($config);
            $page_data['features'] = $output_array;
            $array['limit'] = $config['per_page'];
            $array['offset'] = $page * 32;
            $array['is_limit'] = true;
            $page_data['pagination'] = $this->pagination->create_links();
            $page_data['products'] = $this->feeds->made_in_nigeria_products($array, $this->input->get());
            $query = $this->input->get('q');
            $q = (isset($query) && !empty($query)) ? cleanit($query) : '';
            $page_data['brands'] = $this->product->get_brands($str, $q);
            $page_data['price_min'] = cleanit($this->input->get('price_min',true));
            $page_data['price_max'] = cleanit($this->input->get('price_max',true));
            $page_data['colours'] = $this->product->get_colours($str, $q);
            $page_data['sub_categories'] = $this->product->get_categories($str, $q);
            $page_data['category_detail'] = $this->product->category_details($str);
            if( $page_data['category_detail'] ) {
                $page_data['description'] = $page_data['category_detail']->description;
                $page_data['title'] = $page_data['category_detail']->title;
            }else{
                $page_data['description'] = DESCRIPTION;
                $page_data['title'] = 'Category can not be found';
            }
            $page_data['page'] = 'made_in_nigeria';
            $page_data['min'] = $page_data['max'] = '';
            if( $page_data['products'] ){
                $array = (array) $catalog_products;
                $page_data['min'] = min(array_map(function($array) { return $array->sale_price; }, $array));
                $page_data['max'] = max(array_map(function($array) { return $array->sale_price; }, $array));
            }
        }
        $this->load->view('landing/made_in_nigeria', $page_data);
    }

}
