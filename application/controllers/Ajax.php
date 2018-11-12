<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}

    public $product_name_rules = '\w \-\. ()\:"';

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

// $date1 = new DateTime("now");
// $date2 = new DateTime("tomorrow");

// var_dump($date1 == $date2);
// var_dump($date1 < $date2);
// var_dump($date1 > $date2);


	// Quick view panel
	function quick_view()
	{
		if ($this->input->is_ajax_request() && $this->input->post()) {
			$pid = $this->input->post('product_id');
			$result = $this->product->get_quick_view_details($pid);
			$variations = $this->product->get_variations( $pid );

			$now =date_create(date("Y-m-d"));
			$results = array();
			foreach( $variations as $variation ){
				$res['vid'] = $variation['id'];
				$res['discount_price'] = $variation['discount_price'];
				$res['sale_price'] = $variation['sale_price'];
				$res['quantity'] = $variation['quantity'];
				$res['variation_name']	= $variation['variation'];


				$end_date = date_create( $variation['end_date'] );
				$start_date = date_create( $variation['start_date'] );
				$end_date_diff = date_diff( $end_date, $now );
				$start_date_diff = date_diff( $start_date, $now );
				$intend_diff = $end_date_diff->format("%R%a");
				$intstart_diff = $start_date_diff->format("%R%a");

				if( $intend_diff > 0  || $intstart_diff < 0 ){
					$res['discount_price'] = $res['sale_price'];
				}

				$res['description'] = $result->product_description;
				array_push( $results, $res);
			}
			// get_variations
			echo json_encode($results, JSON_UNESCAPED_SLASHES);
			exit;
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


    function add_to_cart(){
       if( $this->input->is_ajax_request() && $this->input->post() ){
           $colour = $this->input->post('colour');
           $variation = $this->input->post('variation');
           $variation = empty($variation) ? '' : $this->input->post('variation');
           $colour = empty($colour) ? '' : $this->input->post('colour');
           $name = cleanit($this->input->post('product_name'));
           $name = preg_replace('/^['.$this->product_name_rules.']+$/i', " ", $name);
           // contain a product ID, quantity, price, and name.
//           die( $name );
           $data = array(
               'id' => base64_decode($this->input->post('product_id')),
               'qty' => $this->input->post('quantity'),
               'price' => $this->input->post('product_price'),
               'name' => $name,
               'options' =>
                   array(
                       'variation' => $variation,
                       'colour' => $colour,
                       'seller' => base64_decode($this->input->post('seller'))
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



//<li>
//<a class="dropdown-menu-shipping-cart-img" href="#">
//<img src="img/cart/4.jpg" alt="Image Alternative text" title="Image Title" />
//</a>
//<div class="dropdown-menu-shipping-cart-inner">
//<p class="dropdown-menu-shipping-cart-price">$77</p>
//<p class="dropdown-menu-shipping-cart-item"><a href="#">Fossil Women's Original Boyfriend</a>
//        </p>
//    </div>
//</li>
//<li>
//    <p class="dropdown-menu-shipping-cart-total">Total: $150</p>
//    <button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>
//</li>


}
