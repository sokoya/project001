<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_userdata('referred_from', current_url());
			redirect('login');
		}
		$items = $this->cart->total_items();
		if (empty( $items )) {
			redirect(base_url());
		}
	}

    public function index(){
	    $page_data['page'] = 'checkout';
		$page_data['title'] = 'Checkout';
		$this->load->model('user_model', 'user');
		$page_data['user'] = $this->user->get_profile(base64_decode($this->session->userdata('logged_id')));
		$page_data['addresses'] = $this->user->get_user_billing_address($page_data['user']->id);
		$page_data['pickups'] = $this->user->get_pickup_address();
		$page_data['address_set'] = $this->user->is_address_set($page_data['user']->id);
		$result = $this->user->get_default_address_price($page_data['user']->id);
		$page_data['delivery_charge'] = (  !$result ) ? 500 : $result;
		// Lets make a check that the product is valid to be here
        $message = '';
		foreach( $this->cart->contents() as $product ){
			$detail = $this->product->get_cart_details($product['id']);
			$variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
			if($variation_detail->quantity < 1 || $product['qty'] > $variation_detail->quantity || in_array( $detail->product_status, array('suspended', 'blocked', 'pending' ))){
				// we have an issue with this product
                $message .= "< br/> Sorry, the product " . $product['name']. " is presently out of stock";
			}
		}
        $this->session->set_flashdata('error_msg', $message);
		$items = $this->cart->total_items();
		if( empty($items) ) redirect( base_url() );
		$this->load->view('landing/checkout', $page_data);
	}

	function add_address()
	{
		$status['status'] = 'error';
		$this->form_validation->set_rules('first_name', 'First name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
		$this->form_validation->set_rules('area', 'Area', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_msg', 'Please correct the following errors ' . validation_errors());
			$status['message'] = 'Please correct the following errors ' . validation_errors();
			echo json_encode($status);
			exit;
		} else {
			$data = array(
				'first_name' => cleanit($this->input->post('first_name')),
				'last_name' => cleanit($this->input->post('last_name')),
				'phone' => cleanit($this->input->post('phone')),
				'sid' => cleanit($this->input->post('state')),
				'address' => cleanit($this->input->post('address')),
				'aid' => cleanit($this->input->post('area')),
				'uid' => base64_decode($this->session->userdata('logged_id'))
			);
			if (is_int($this->user->create_account($data, 'billing_address'))) {
				$status['status'] = 'success';
				$status['message'] = 'Success: The address has been added to your account.';
				echo json_encode($status);
				exit;
				$this->session->set_flashdata('success_msg', 'Success: The address has been added to your account.');
			} else {
				$status['message'] = 'Success: There was an error adding the address to your account.';
			}
			echo json_encode($status);
			exit;
		}
	}


	function set_default_address(){
		if (!$this->input->post()) redirect(base_url());
		$uid = base64_decode($this->session->userdata('logged_id'));
		$address_id = cleanit($this->input->post('address_id'));
		$price = $this->user->update_billing_address(array('uid' => $uid) , $address_id);
		if( $price != false ) {
			echo $price->price;
		} else {
			echo false;
		}
		exit;
	}

	function checkout_confirm() {
	    if( $this->input->is_ajax_request() ){
            $address_id = cleanit( $this->input->post('selected_address') );
//            $billing_amount = $this->product->get_billing_amount($address_id);
//            if( !$billing_amount ) $billing_amount = 500; // Default Billnng Address
            $message = ''; $error = 0;
            $data = array();
            $order_code = $this->product->generate_code('orders', 'order_code');
            $order_date = get_now();
            $order_status = 'ordered';
            $payment_method = 1;
            $buyer_id = base64_decode($this->session->userdata('logged_id'));
            foreach( $this->cart->contents() as $product ){
                $detail = $this->product->get_cart_details($product['id']);
                $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);

                if($variation_detail->quantity < 1 || $product['qty'] > $variation_detail->quantity || in_array( $detail->product_status, array('suspended', 'blocked', 'pending' ))){
                    $error++;
                    $message .= "Sorry the product " . $product['name'] . " is out of stock <br />";
                }else{
                    // lets use the opportunity to gather our order table for testing purpose.
                    $data['buyer_id'] = $buyer_id;
                    $data['order_code'] = $order_code;
                    $data['order_date'] = $order_date;
                    $data['payment_method'] = $payment_method;
                    $data['status'] = $order_status;
                    $data['seller_id'] = $product['options']['seller'];
                    $data['product_id'] = $product['id'];
                    $data['qty'] = $product['qty'];
                    $data['product_variation_id'] = $product['options']['variation_id'];
                    $data['billing_address_id'] = $address_id;
                    $data['amount'] = $product['subtotal'];
                    $this->product->insert_data('orders', $data);
                }
                unset( $data );
            }
            if( count( $error ) > 0 ){
                $this->session->set_flashdata('error_msg', $message);
                redirect(base_url('cart'));
            }
        }else{
	        redirect(base_url());
        }
    }

	public function order_completed(){
        $page_data['page'] = 'order_completed';
        $page_data['title'] = "Order Invoice";
        $page_data['orders'] = $this->user->get_my_orders( base64_decode($this->session->userdata('logged_id')) );
        $page_data['profile'] = $this->user->get_profile( base64_decode($this->session->userdata('logged_id')) );
        $this->load->view('landing/order_completed', $page_data);
    }

}
