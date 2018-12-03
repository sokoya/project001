<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}

    public $product_name_rules = '.+';

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

    // Called from Account Table
    function fetch_single_address(){
        if( !$this->input->get('address_id') || !$this->input->is_ajax_request() ) redirect(base_url());
        $address_id = cleanit($this->input->get('address_id'));
        $result = $this->user->get_single_address( $this->session->userdata('logged_id'), $address_id);
        header('Content-type: text/json');
        header('Content-type: application/json');
        echo json_encode($result);
        exit;
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
			$output = array();
            if( empty($category) ) {
                $results = $this->product->search_query_categories( $search );
                $x = 0;
                foreach( $results as $result ){
                    $output['categories'][$x]['name'] = $result->name;
                    $output['categories'][$x]['url'] = base_url('catalog/') . $result->slug .'/?q='. $search;
                    $output['categories'][$x]['total_count'] = $result->total_count;
                    $x++;
                }
            }
            $products = $this->product->search_query($search, $category);
            $x = 0;
            foreach ($products as $result) {
                $output['products'][$x]['image_path'] = PRODUCTS_IMAGE_PATH . $result->image_name;
                $output['products'][$x]['product_name'] = $result->product_name;
                $output['products'][$x]['url'] = urlify($result->product_name, $result->id);
                $price = (!empty($result->discount_price)) ? $result->discount_price :  $result->sale_price ;
                $output['products'][$x]['price'] = $price;
                $x++;
            }
            header('Content-type: text/json');
            header('Content-type: application/json');
            echo json_encode( $output, JSON_UNESCAPED_SLASHES);
            exit;
		} else {
			redirect(base_url());
		}
	}

	// Favourite and Unfavourite A Product

	function favourite(){
		if ($this->input->is_ajax_request() && $this->input->post()) {
			$pid = $this->input->post('id');
			$return = $this->user->favourite_action( $pid );
			echo json_encode( $return );
		} else {
			redirect(base_url());
		}
	}


	// Function to generate quick view on each product
	function quick_view(){
		if ($this->input->is_ajax_request() && $this->input->post('product_id')) {
			$pid = $this->input->post('product_id');
			$results  = array();
			$desc = $this->product->get_quick_view_details($pid);
			$results['description'] = character_limiter($desc->product_description, 278);
			$results['seller'] = $desc->seller_id;
			$variation = $this->product->get_variation( $pid );
			$results['default_vid'] = $variation->id;
			$results['default_vname'] = $variation->variation;
			$results['default_qty'] = $variation->quantity;
			$results['default_price'] = $variation->sale_price;
			$results['default_discount_price'] = $variation->discount_price;

			if( discount_check($variation->discount_price, $variation->start_date, $variation->end_date)) {
                $results['default_discount_price'] = $variation->discount_price;
            }else{
                $results['default_discount_price'] = $variation->sale_price;
            }
			$results['avg_rating'] = $results['total_rating'] = 0;
			$rating_counts = $this->product->get_rating_counts( $pid );
//            rating_star_generator($rating_counts);
			if( $rating_counts ){
				// Total rating count
				foreach( $rating_counts as $counts ){
					$results['total_rating'] += $counts['occurence'];
				}
				$results['avg_rating'] = round(product_overall_rating($rating_counts));
			}
			$variations = $this->product->get_variations( $pid );
			if( $variations ) {
				$x = 0;
				foreach( $variations as $variation ){
					$results['variation'][$x]['vid'] = $variation['id'];
					$results['variation'][$x]['discount_price'] = $variation['discount_price'];
					$results['variation'][$x]['sale_price'] = $variation['sale_price'];
					$results['variation'][$x]['quantity'] = $variation['quantity'];
					$results['variation'][$x]['variation_name'] = $variation['variation'];
                    if( discount_check($variation['discount_price'], $variation['start_date'], $variation['end_date'])) {
                        $results['variation'][$x]['discount_price'] = $variation['discount_price'];
                    }else{
                        $results['variation'][$x]['discount_price'] = $variation['sale_price'];
                    }
					$x++;
				}
			}
			echo json_encode($results, JSON_UNESCAPED_SLASHES);
			exit;
		}else{
			redirect(base_url());
		}
	}
	/*
	 * This function handles all "add to cart" in the system called by ajax and return response.
	 * */
	function quick_view_add(){
       if( $this->input->is_ajax_request() && $this->input->post() ){
           $pid = $this->input->post('product_id');
           $vid = $this->input->post('variation_id');
           $qty = $this->input->post('quantity');
           $result = $this->product->get_product_item( $pid, $vid, $qty );
           if( $result['status'] == 'success' ){
               $return = $result['msg'];
               $name = preg_replace('/^['.$this->product_name_rules.']+$/i', " ", $return->product_name);
               $price = (empty($return->discount_price) ) ? $return->sale_price : $return->discount_price;
               $data = array(
                   'id' => $pid,
                   'qty' => $qty,
                   'name' => $name,
                   'price' => $price,
                   'options' => array(
                       'seller' => $return->seller_id,
                       'variation_id' => $vid
                   )
               );
               if( $this->cart->insert($data) ){
                   $this->session->set_flashdata('success',  'The product ' . $return->product_name .' has been added to your cart successfully.');
                   echo json_encode( array('status' => 'success' , 'msg' => 'The product ' . $return->product_name .' has been added to your cart successfully.'));
               }else{
                   $this->session->set_flashdata('error',  'There was an error adding the product to your cart,');
                   echo json_encode(array('status' => 'error', 'msg' => 'There was an error adding the product to the cart'));
               }
               exit;
           }else{
               echo json_encode( $result );
           }
           exit;
       }else{
           redirect(base_url());
       }
    }
    /**
     * @param $vid - variation id
     * @return JSON
     */

    function check_variation(){
        if( $this->input->is_ajax_request() && $this->input->post()){
            $vid = $this->input->post('vid');
            if (!$vid) exit;
            $result = $this->product->check_variation($vid);
            if (!empty($result['start_date']) && (date('Y-m-d', strtotime($result['start_date']) < get_now()) || date('Y-m-d', strtotime($result['start_date']) > get_now()))) $result['discount_price'] = '';
            header('Content-type: text/json');
            header('Content-type: application/json');
            echo json_encode($result);
            exit;
        }else{
            redirect(base_url());
        }
    }

    // Add product to cart
    function add_to_cart(){
       if( $this->input->is_ajax_request() && $this->input->post() ){
           $name = cleanit($this->input->post('product_name'));
           $name = preg_replace('/^['.$this->product_name_rules.']+$/i', " ", $name);
           // Added to make checks if product still remains
           $variation_id = $this->input->post('variation_id', true);
           $data = array(
               'id' => $this->input->post('product_id'),
               'qty' => $this->input->post('quantity'),
               'price' => $this->input->post('product_price'),
               'name' => $name,
               'options' =>
                   array(
                       'seller' => $this->input->post('seller'),
                       'variation_id' => $variation_id
                   )
           );
           if( $this->cart->insert($data)){
               echo true;
               exit;
           }else{
               echo false;
               exit;
           }
       }else{
           redirect(base_url());
       }
    }


    // Update Cart quantity
    function update_cart_item(){
    	if( !$this->input->post() || !$this->input->is_ajax_request() ){ redirect(base_url());}
    	$cid = $this->input->post('cid', true);
    	$qty = $this->input->post('qty', true);
    	$data = array('rowid' => cleanit($cid), 'qty' => $qty);
    	if( $this->cart->update($data) ){
    		echo true;
    	}else{
    	    echo false;
    	}
    	exit;
    }


    function cart_items(){
        $cart_contents = $this->cart->contents();
        if( !empty( $cart_contents ) ){
            $x = 1;
            $product = '';
            foreach( $this->cart->contents() as $content ){
                $x++;
                $detail = $this->product->get_cart_details($content['id']);
                $product .= '<li>';
                $product .= '<a class="dropdown-menu-shipping-cart-img" href="' .base_url(urlify($content["name"], $content["id"])) .'"';
                $product .= '<img src="' .base_url('data/products/' . $content["id"] . '/' . $detail->image) .'"
											alt="Onitshamarket ' .$content['name'].'"
											title="' . $content['name']. '"/>';
                $product .= '</a>';
                $product .= '<div class="dropdown-menu-shipping-cart-inner">';
                $product .= '<p class="dropdown-menu-shipping-cart-price">' .ngn($content['price']). ' </p>';
                $product .= '<p class="dropdown-menu-shipping-cart-item"><a href="' .base_url(urlify($content["name"], $content["id"])) .'">'. $content["name"].'</a>';
                $product .= '</p>';
                $product .= '</div>';
                $product .= '</li>';
                if( $x == 4 ){
                    $product .= '<li>';
                    $product .= '<p class="dropdown-menu-shipping-cart-total"> Total : ' . $content["total"] . '</p>';
                    $product .= '<button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>';
                    $product .= '</li>';
                }
            }
            echo $product;
            exit;
        }
    }

    /**
     * @param $product_id - product id
     * @return 
     */

    function get_reviews(){
        // $id = $_GET['id'];
        if( $this->input->is_ajax_request() && $this->input->post('pid')){
        	$id = $this->input->post('pid');
            $results = $this->product->get_reviews($id);
            $return = array();
            foreach( $results as $key => $values ) {
                $res = array();
                foreach( $values as $new_key){
                    $res['display_name'] = ucwords($values['display_name']);
                    $res['published_date'] = neatDate($values['published_date']);
                    $res['content'] = $values['content'];
                    $res['title'] = $values['title'];
                    $res['rating_score'] = $values['rating_score'];
                }
                array_push( $return, $res );
                if( count($return) >= 10 ){
                	array_push( $return, array('is_next' => true) );
                }
            }
            header('Content-type: text/json');
			header('Content-type: application/json');
			echo json_encode($return);
            exit;
        }else{
            redirect(base_url());
        }
    }


}
