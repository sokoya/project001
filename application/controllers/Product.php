<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}

	public function index()
	{
		// $this->output->cache(60);
		$uri = $this->uri->segment(1);
		$index = substr($uri, strrpos($uri, '-') + 1);
		// sanitize
		if (!is_numeric(cleanit($index))) redirect(base_url());
		$page_data['product'] = $this->product->get_product($index);
		$page_data['variation'] = $this->product->get_variation($index);
		$page_data['variations'] = $this->product->get_variations($index);
		$page_data['gallery'] = $this->product->get_gallery($index);
		$page_data['favourited'] = $this->product->is_favourited(base64_decode($this->session->userdata('logged_id')), $index);
		$page_data['likes'] = $this->product->get_also_likes($index);
		$page_data['title'] = preg_replace("/[^A-Za-z0-9]/", " ", $uri);
		$page_data['keywords'] = $page_data['title'] . ' , ' . $page_data['product']->rootcategory . ', ' . $page_data['product']->subcategory . ', ' . $page_data['product']->category . ' ,' . $page_data['product']->brand_name;
		$page_data['description'] = $this->product->get_category_detail($page_data['product']->rootcategory, 'root_category')->description;
		$page_data['profile'] = $this->user->get_profile(base64_decode($this->session->userdata('logged_id')));
		$this->add_count($index);
		$this->load->view('landing/product', $page_data);
	}


	public function fav()
	{
		if (!$this->session->userdata('logged_in')) redirect(base_url());
		$this->load->model('user_model');
		if ($this->user_model->favourite(base64_decode($this->session->userdata('logged_id')), base64_decode($this->input->post('pid')),
			$this->input->post('action'))) {
			echo true;
			exit;
		} else {
			echo false;
			exit;
		}
	}


	// List Product Page
	public function catalog()
	{
		$str = $this->uri->segment(2);
		$str = preg_replace("/[^A-Za-z0-9-]/", "", cleanit($str));
		$page_data['searched'] = $str = preg_replace("/[^A-Za-z0-9]/", " ", cleanit($str)); // Convert the - to space
		if ($str == '') redirect(base_url());
		$page_data['title'] = ucwords($str);
		$features = $this->product->get_features($str);
		$output_array = array();
		foreach ($features as $feature => $values) {
			foreach ($values as $key => $value) {
				$variables = json_decode($value);
				foreach ($variables as $new_key => $new_value) {
					if (is_array($new_value)) {
						$new_value = array_map("unserialize", array_unique(array_map("serialize", $new_value)));
						foreach ($new_value as $inkey => $invalue) $output_array[$new_key][] = $invalue;
						$output_array[$new_key] = array_unique($output_array[$new_key], SORT_REGULAR);
					} else {
						$output_array[$new_key][] = $new_value;
						$output_array[$new_key] = array_unique($output_array[$new_key], SORT_REGULAR);
					}
				}
			}
		}
		// pagination
		$page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
		if ($page > 1) $page -= 1;

		$array = array('str' => $str, 'is_limit' => false);
		$x = (array)$this->product->get_products($array, $this->input->get());
		$count = (count($x));

		$this->load->library('pagination');
		$this->config->load('pagination');
		$config = $this->config->item('pagination');
		$config['base_url'] = current_url();
		$config['total_rows'] = $count;
		$config['per_page'] = 50;
		$config["num_links"] = 5;
		$this->pagination->initialize($config);

		$page_data['features'] = $output_array;
		$array['limit'] = $config['per_page'];
		$array['offset'] = $page;
		$array['is_limit'] = true;
		$page_data['pagination'] = $this->pagination->create_links();
		$page_data['products'] = $this->product->get_products($array, $this->input->get());
		$page_data['brands'] = $this->product->get_brands($str);
		$page_data['colours'] = $this->product->get_colours($str);
		$page_data['sub_categories'] = $this->product->get_sub_categories($str);
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
		$page_data['description'] = $this->product->category_description($str);
		$this->load->view('landing/category', $page_data);
	}


	public function cart()
	{
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
		$page_data['title'] = 'My cart';
		$page_data['title'] = 'My cart';
		if ($this->input->post()) {
			// update
			$data = $this->input->post();
			if ($this->cart->update($data)) {
				$this->session->set_flashdata('success_msg', 'Your cart has been successfully updated.');
				redirect('cart');
			} else {
				$this->session->set_flashdata('error_msg', 'There was an error updating the cart');
				redirect('cart');
			}
		} else {
			$this->load->view('landing/cart', $page_data);
		}
	}


	public function remove_cart()
	{
		$this->cart->remove($this->uri->segment(3));
		redirect('cart');
	}


	public function add_to_cart()
	{
		$this->load->library('cart');
		$size = empty($this->input->post('variation')) ? 'null' : $this->input->post('variation');
		$colour = empty($this->input->post('colour')) ? 'null' : $this->input->post('colour');
		$name = preg_replace("/[^A-Za-z0-9- ]/", "", cleanit($this->input->post('product_name')));
		$data = array(
			'id' => base64_decode($this->input->post('product_id')),
			'qty' => $this->input->post('quantity'),
			'price' => $this->input->post('product_price'),
			'name' => $name,
			'options' =>
				array(
					'size' => $size,
					'colour' => $colour,
					'seller' => base64_decode($this->input->post('seller'))
				)
		);

		$this->cart->insert($data);
		echo true;
		exit;
	}


	/**
	 * @param $vid - variation id
	 * @return JSON
	 */

	function check_variation()
	{
		$vid = $this->input->post('vid');
		if (!$vid) exit;
		$result = $this->product->check_variation($vid);
		if (!empty($result['start_date']) && (date('Y-m-d', strtotime($result['start_date']) < get_now()) || date('Y-m-d', strtotime($result['start_date']) > get_now()))) $result['discount_price'] = '';
		header('Content-type: text/json');
		header('Content-type: application/json');
		echo json_encode($result);
		exit;
	}

	/**
	 * @param $id - product id
	 * @return null
	 */
	function add_count($id)
	{
		if (!empty($id)) {
			$this->load->helper('cookie');
			$check_visitor = $this->input->cookie($id, FALSE);
			// get the visitor Ip address
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
				$cookie = array(
					"name" => $id,
					"value" => $ip,
					"secure" => false
				);
				$this->input->set_cookie($cookie);
				$this->product->set_field('products', 'views', 'views+1', array('id' => $id));
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
		if ($this->input->post()) {
			$status['status'] = 'error';
			$data = array(
				'product_id' => $this->input->post('product_id'),
				'user_id' => $this->input->post('user_id'),
				'rating_score' => $this->input->post('count')
			);
			// check if the user bought the product
			if ($this->product->has_bought($data['product_id'], $data['user_id'])) {
				$status['message'] = 'You need to be a verified buyer before first.';
				echo json_encode($status);
			}

			if (is_int($this->product->insert_data('product_rating', $data))) {
				$status['status'] = 'success';
				echo json_encode($status);
			}
			exit;
		}
	}


}
