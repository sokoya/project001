<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}

	public function index()
	{
		redirect(base_url());
	}


	// Fetch all states
	function fetch_states()
	{
		if ($this->input->is_ajax_request()) {
			$states = $this->user->get_states();
			header('Content-type: text/json');
			header('Content-type: application/json');
			echo json_encode($states);
			exit;
		} else {
			redirect(base_url());
		}
	}


	// function to get all areas base on
	// the user selected state
	function fetch_areas()
	{
		if ($this->input->is_ajax_request()) {
			$sid = $this->input->get('sid');
			$areas = $this->user->get_area($sid);
			header('Content-type: text/json');
			header('Content-type: application/json');
			echo json_encode($areas);
			exit;
		} else {
			redirect(base_url());
		}
	}


	// Function to make an auto complete search
	function search_complete()
	{
		if ($this->input->is_ajax_request() && $this->input->post()) {
			$search = cleanit($this->input->post('search'));
			$category = $this->input->post('category');
			$results = $this->product->search_query($search, $category);
			$output = array();
			header('Content-type: text/json');
			header('Content-type: application/json');
			if ($results) {
				foreach ($results as $result) {
					$res['image_path'] = base_url('data/products/' . $result->id . '/' . $result->image_name);
					$res['product_name'] = $result->product_name;
					$res['url'] = urlify($result->product_name, $result->id);
					$price = (!empty($result->discount_price)) ? $result->discount_price . '<span class="search-price-discount"> ' . $result->sale_price . '</span>' : $result->sale_price;
					$res['price'] = $price;
					array_push($output, $res);
				}
				echo json_encode($output, JSON_UNESCAPED_SLASHES);
				exit;
			} else {
				echo json_encode('');
				exit;
			}

		} else {
			redirect(base_url());
		}
	}

 	// Single product favourite
	function fav(){
		// function favourite( $uid, $pid, $action, $table_name = 'favourite', $fid='' ){
		if (!$this->session->userdata('logged_in') || !$this->input->is_ajax_request() || !$this->input->post()) redirect(base_url());

		if ($this->user->favourite(base64_decode($this->session->userdata('logged_id')), base64_decode($this->input->post('pid')),
			$this->input->post('action'))) {
			echo true;
			exit;
		} else {
			echo false;
			exit;
		}
	}

	// Remove product from whichlist
	function remove_whichlist()
	{
		if ($this->input->is_ajax_request() && $this->input->post()) {
			$id = $this->input->post('id');
			if ($this->user->favourite('', '', '', 'favourite', $id)) {
				echo json_encode(array('status' => 'success', 'message' => 'The product has been removed from your whichlist'));
				exit;
			} else {
				echo json_encode(array('status' => 'error', 'message' => 'There was an error removing the product from your whichlist.'));
				exit;
			}
		} else {
			redirect(base_url());
		}
	}

	function quick_view()
	{
		if ($this->input->is_ajax_request() && $this->input->post()) {
			$pid = $this->input->post('product_id');
			$results = $this->product->get_quick_view_details($pid);
			echo json_encode($results, JSON_UNESCAPED_SLASHES);
			exit;
		}
	}

}
