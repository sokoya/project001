<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}


	public function index()
	{
		// $this->output->cache(60);
        $this->session->set_userdata('referred_from', current_url());
		$uri = $this->uri->segment(2);
		$index = substr($uri, strrpos($uri, '-') + 1);
		// sanitize
		if (!is_numeric(cleanit($index))) redirect(base_url());
		$page_data['product'] = $this->product->get_product($index);
		$page_data['var'] = $this->product->get_variation($index);
		$page_data['variations'] = $this->product->get_variations($index);
		$page_data['galleries'] = $this->product->get_gallery($index);
		$page_data['favourite'] = $this->product->is_favourited($this->session->userdata('logged_id'), $index);
		$page_data['likes'] = $this->product->get_also_likes($index);
		$page_data['category_detail'] = $this->product->single_category_detail( $page_data['product']->category_id );
        $page_data['title'] = 'Buy ' . $page_data['product']->product_name;
        $page_data['keywords'] = $page_data['title'] . ' , ' . $page_data['product']->brand_name;
        $page_data['description'] = "Online shopping - Buy " .$page_data['product']->product_name . " " . html_entity_decode($page_data['product']->product_description);
        $page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
        $this->add_count($index);
		$page_data['page'] = 'product';
		$page_data['rating_counts'] = $this->product->get_rating_counts($index);
		$page_data['featured_image'] = $this->product->get_featured_image($index);
        if( $this->session->userdata('logged_in')){
            $this->user->recently_viewed($page_data['product']->id , $this->session->userdata('logged_id'));
        }

        $page_data['categories_name'] = $this->product->get_parent_details( $page_data['product']->category_id );

        $page_data['questions'] = $this->product->get_results('qna', "*", "( status = 'approved' && pid = {$index}) ");
        $this->add_count($page_data['product']->id);
		$page_data['reviews'] = $this->product->get_reviews($index);
		if (!$this->agent->is_mobile()) {
			$this->load->view('landing/product', $page_data);
		} else {
			$page_data['page'] = 'mobile-product';
			$this->load->view('landing/mobile-product', $page_data);
		}
	}

	// List Product Page
	public function catalog()
	{
        $this->session->set_userdata('referred_from', current_url());
		$str = $this->uri->segment(2);
		$str = preg_replace("/[^A-Za-z0-9\-]/", "", cleanit($str));
		$str = cleanit($str);
		if ($str == '') redirect(base_url());
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
		$catalog_products = $this->product->get_products($array,array());
		$x = (array)$this->product->get_products($array, $this->input->get());
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
		$page_data['products'] = $this->product->get_products($array, $this->input->get());
		$query = $this->input->get('q');
		$q = (isset($query) && !empty($query)) ? cleanit($query) : '';
		$page_data['brands'] = $this->product->get_brands($str, $q);
		$page_data['price_min'] = cleanit($this->input->get('price_min',true));
		$page_data['price_max'] = cleanit($this->input->get('price_max',true));
		$page_data['colours'] = $this->product->get_colours($str, $q);
		$page_data['sub_categories'] = $this->product->get_categories($str, $q);
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
		$page_data['category_detail'] = $this->product->category_details($str);
		if( $page_data['category_detail'] ) {
            $page_data['description'] = $page_data['category_detail']->description;
            $page_data['title'] = $page_data['category_detail']->title;
//            $page_data['footer_content'] = $this->product->get_root_category( $page_data['category_detail']->id );
            $page_data['footer_content'] = '';
        }else{
            $page_data['description'] = DESCRIPTION;
            $page_data['title'] = 'Category can not be found';
        }
		$page_data['page'] = 'category';
		$page_data['min'] = $page_data['max'] = '';
		if( $page_data['products'] ){
            $array = (array) $catalog_products;
            $page_data['min'] = min(array_map(function($array) { return $array->sale_price; }, $array));
            $page_data['max'] = max(array_map(function($array) { return $array->sale_price; }, $array));
        }
		if (!$this->agent->is_mobile()) {
			$this->load->view('landing/category', $page_data);
		} else {
			$page_data['page'] = 'mobile-category';
			$this->load->view('landing/mobile-category', $page_data);
		}
	}

	/**
	 * @param $id - product id
	 * @return null
	 */
    function add_count($id){
        $this->load->helper('cookie');
        $check_visitor = $this->input->cookie($id, FALSE);
        // get the visitor Ip address
        $ip = $this->input->ip_address();
        $expire = (int) 7200;
        if ($check_visitor == false) {
            $cookie = array(
                "name"   => $id,
                "value"  => $ip,
                "expire" =>  $expire,
                "secure" => false
            );
            $this->input->set_cookie($cookie);
            $this->product->set_field('products', 'views','views+1',array('id' => $id));
        }
    }

	/**
	 * @param $product_id - product id
	 * @param $user_id - user id
	 * @param $title - title
	 * @param $display_name - display_name
	 * @param $content - content
	 * @return null
	 */
	function add_review()
	{
        $this->session->set_userdata('referred_from', current_url());
		if ($this->input->post()) {
			$status['status'] = 'error';
			$data = array(
				'product_id' => $this->input->post('product_id'),
				'user_id' => $this->input->post('user_id'),
				'title' => cleanit($this->input->post('title')),
				'display_name' => cleanit($this->input->post('name')),
				'content' => cleanit($this->input->post('detail')),
				'published_date' => get_now()
			);

			if (is_int($this->product->insert_data('product_review', $data))) {
				$status['status'] = 'success';
				$status['title'] = ucwords($data['title']);
				$status['detail'] = ucwords($data['content']);
				$status['name'] = ucwords($data['display_name']);
				echo json_encode($status);
				exit;
			} else {
				echo json_encode($status);
			}
		}
		exit;
	}

	// Search
	public function search()
	{
        $this->session->set_userdata('referred_from', current_url());
//        http://localhost/project001/search?category=Phones+%26+Tablets&q=sam
		if (!$this->input->get('q', true)) redirect(base_url());
		$category = cleanit($this->input->get('category', true));
		$product_name = $page_data['searched'] = cleanit($this->input->get('q', true));
		$page_data['queries'] = array('category' => $category, 'q' => $page_data['searched']);

		$page_data['title'] = ucwords($category . ' ' . $product_name . ' Search Results');
		$features = $this->product->get_features($category, $product_name);
		$feature_array = array();
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
		$array = array('category' => $category, 'product_name' => $product_name, 'is_limit' => false);
        $catalog_products = $this->product->get_search_products($array,array())->result();
		$x = $this->product->get_search_products($array, $this->input->get())->result();
        $page_data['count_in_total'] = count($catalog_products);
        $count = $page_data['total_count'] =  (count($x));

		$this->load->library('pagination');
		$this->config->load('pagination');
		$config = $this->config->item('pagination');
		$config['base_url'] = current_url();
		$config['total_rows'] = $count;
		$config['per_page'] = 32;
		$page_data['features'] = $feature_array;
		$array['limit'] = $config['per_page'];
        $array['offset'] = $page * 32;
		$array['is_limit'] = true;
		$page_data['pagination'] = $this->pagination->create_links();
		$page_data['products'] = $this->product->get_search_products($array, $this->input->get())->result();
		$page_data['brands'] = $this->product->get_brands($category, $product_name);
		$page_data['colours'] = $this->product->get_colours($category, $product_name);
        $page_data['price_min'] = $this->input->get('price_min',true);
        $page_data['price_max'] = $this->input->get('price_max',true);
		$page_data['sub_categories'] = $this->product->get_categories($category);
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
		$page_data['category_detail'] = $this->product->category_details($category);
		if ($page_data['category_detail']) {
            $page_data['description'] = $page_data['category_detail']->description;
		} else {
			$page_data['description'] = DESCRIPTION;
		}
		$page_data['page'] = 'search';
		$this->pagination->initialize($config);
        $page_data['min'] = $page_data['max'] = '';
//        var_dump( $page_data['products']->result());exit;
        if( $page_data['products'] &&  $page_data['products'] != '' ){
            $array = (array) $catalog_products;
            $page_data['min'] = min(array_map(function($array) { return $array->sale_price; }, $array));
            $page_data['max'] = max(array_map(function($array) { return $array->sale_price; }, $array));
        }

		$this->load->library('user_agent');
		if (!$this->agent->is_mobile()) {
			$this->load->view('landing/search', $page_data);
		} else {
			$page_data['page'] = 'mobile-search';
			$this->load->view('landing/mobile-search', $page_data);
		}
	}
	/*
     * Learn more about the warranty type
	 * Used for mobile devices
     * */
	public function warranty()
	{
        $this->session->set_userdata('referred_from', current_url());
		$uri = cleanit($this->uri->segment(2));
		$index = substr($uri, strrpos($uri, '-') + 1);
		if( !$index ) redirect(base_url());
		$page_data['descriptions'] = $this->product->get_results('products', 'product_warranty, warranty_type, warranty_address', "(id = {$index})");
		$page_data['page'] = 'warranty';
		$this->load->view('landing/mobile/warranty', $page_data);
	}

	/*
     * Product description with the specification
	 * Used for mobile devices
     * */
    public function description(){
        $this->session->set_userdata('referred_from', current_url());
        $uri = cleanit( $this->uri->segment(2));
        $index = substr($uri, strrpos($uri, '-') + 1);
        if( !$index ) redirect( base_url());
        $page_data['url'] = base_url('product/'.$uri .'/');
        $page_data['description'] = DESCRIPTION;
        $page_data['title'] = "Product Specification and Description for  " . $uri;
        $page_data['product_description'] = $this->product->get_row('products', 'product_description, in_the_box, attributes', "(id = {$index})");
        $page_data['page'] = "mobile-description";
        $this->load->view('landing/mobile/description', $page_data);
    }

	/*
     * Show all rating and reviews
	 * Used for Mobile deviced
     * */
    public function reviews(){
        $this->session->set_userdata('referred_from', current_url());
        $uri = cleanit( $this->uri->segment(2));
        $index = substr($uri, strrpos($uri, '-') + 1);
        if( !$index) redirect(base_url());
        $page_data['rating_counts'] = $this->product->get_rating_counts($index);
        $page_data['reviews'] = $this->product->get_reviews($index);
        $page_data['title'] = "Reviews For " . $uri;
        $page_Data['description'] = DESCRIPTION;
        $page_data['page'] = 'mobile-reviews';
        $page_data['url'] = base_url('product/' . $uri.'/');
        $this->load->view('landing/mobile/reviews', $page_data);
    }

	/*
     * Add rating and review form
     * */
    public function add_rating_review(){
        $this->session->set_userdata('referred_from', current_url());
        $uri = cleanit( $this->uri->segment(2));
        $page_data['id'] = substr($uri, strrpos($uri, '-') + 1);
//        if( !$page_data['id'] || !is_int($page_data['id'])) redirect(base_url());
        $page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
		$page_data['page'] = 'add-rating';
		$page_data['title'] = "Write rating and reviews for " . $uri;
		$page_data['description'] = DESCRIPTION;
		$page_data['url'] = base_url('product/' . $uri.'/');
        if( !$this->input->post() ){
            $this->load->view('landing/mobile/add-rating', $page_data);
        }else{
            // process the form
            if( !$this->session->userdata('logged_in') ){
                $this->session->set_flashdata('error_msg', 'Sorry, you need to login before writing a review');
                $this->session->set_userdata('referred_from', current_url());
                redirect( 'login');
            }
            $this->form_validation->set_rules('title', 'Title','trim|required|xss_clean');
            $this->form_validation->set_rules('content', 'Review Content','trim|required|xss_clean');
            if( $this->form_validation->run() == false ){
                $this->session->set_flashdata('error_msg','There was an error, please fix <br />' . validation_errors() );
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $data = array(
                    'product_id' => $page_data['id'],
                    'user_id' => $this->session->userdata('logged_id'),
                    'display_name' => $this->input->post('display_name'),
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content')
                );
                $this->product->create_edit($page_data['id'], $this->session->userdata('logged_id'), $data, 'product_review');
                redirect($page_data['url']);
            }
        }
    }
    /**
     * @param $product_id - product id
     * @param $user_id - user id
     * @param $count - rating count
     * @return null
     */
    function add_rating()
    {
        $this->session->set_userdata('referred_from', current_url());
        if ($this->input->post()) {
            $status['status'] = 'error';
            if( !$this->session->userdata('logged_in')){
                $this->session->set_flashdata('error_msg' ,'You need to login before you can rate.');
                $this->session->set_userdata('referred_from', current_url());
                redirect('login');
            }
            $data = array(
                'product_id' => $this->input->post('product_id'),
                'user_id' => $this->input->post('user_id'),
                'rating_score' => $this->input->post('count')
            );
//            if (!$this->product->has_bought($data['product_id'], $data['user_id'])) {
//                $status['message'] = 'You need to be a verified buyer before rating.';
//                echo json_encode($status);
//                exit;
//            }
            // check if the user bought the product
            if($this->product->create_edit($this->input->post('product_id'), $this->session->userdata('logged_id'), $data, 'product_rating')){
                $status['status'] = 'success';
                echo json_encode($status);
                exit;
            }
        }
    }

}
