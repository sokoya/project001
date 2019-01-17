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
		$page_data['user'] = $this->user->get_profile($this->session->userdata('logged_id'));
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
                $message .= "Sorry, the product " . $product['name']. " is presently out of stock";
			}
		}
        $this->session->set_flashdata('error_msg', $message);
		$items = $this->cart->total_items();
//		$page_data['methods'] =  ;
		if( empty($items) ) redirect( base_url() );
		if (!$this->agent->is_mobile()) {
            $this->load->view('landing/checkout', $page_data);
        } else {
            $page_data['page'] = 'mobile-checkout';
            $this->load->view('landing/mobile-checkout', $page_data);
        }
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
				'uid' => $this->session->userdata('logged_id')
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

    /*
     * Set user default address*/
	function set_default_address(){
		if (!$this->input->post()) redirect(base_url());
		$uid = $this->session->userdata('logged_id');
		$address_id = cleanit($this->input->post('address_id'));
		$price = $this->user->update_billing_address(array('uid' => $uid) , $address_id);
		if( $price != false ) {
			echo $price->price;
		} else {
			echo false;
		}
		exit;
	}

    /*
     * Save user orders to the DB
     * */
	function checkout_confirm() {
	    if( $this->input->is_ajax_request() ){
            $address_id = cleanit( $this->input->post('selected_address', true) );
            $billing_amount = $this->product->get_billing_amount($address_id);
            if( !$billing_amount ) $billing_amount = 500; // Default Billnng Address

            $message = ''; $error = 0; $data = $return = array();
            $order_code = $this->product->generate_code('orders', 'order_code');
            $order_date = get_now();
            $order_status = array( 'processing' => array( 'msg' => 'Order is under process.','datetime' => get_now()) );
            $order_status = json_encode( $order_status);
            $active_status = 'pending';
            $total = $this->input->post('total_charge', true);

            $payment_method = $this->input->post('payment_method', true);
            $delivery_charge = $this->input->post('delivery_charge', true);
            $buyer_id = $this->session->userdata('logged_id');
            foreach( $this->cart->contents() as $product ){
                $detail = $this->product->get_cart_details($product['id']);
                $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
                $price = $this->product->get_commission( $product['id'] );
                $commission = ( $price / 100 ) * (int)$product['subtotal'];

                if($variation_detail->quantity < 1 || $product['qty'] > $variation_detail->quantity || in_array( $detail->product_status, array('suspended', 'blocked', 'pending' ))){
                    $return['status'] = 'error';
                    $error++;
                    $return['message'] = "Sorry, one of the item(s) is out of stock.";
                    // Remove the Item
                    $cid = $product['rowid'];
                    try {
                        // remove from cart
                        $this->cart->remove($cid);
                        // remove the amount

                    }catch (Exception $x ){
                        $error_array = array('error_action' => 'Cart Removal Error', 'error_message' => 'On checkout when performing checks on cart item');
                        $this->product->insert_data('error_logs', $error_array);
                    }
                }else{
                    // Populate the Order table data
                    $data['buyer_id'] = $buyer_id;
                    $data['seller_id'] = $detail->seller_id;
                    $data['order_code'] = $order_code;
                    $data['order_date'] = $order_date;
                    $data['payment_method'] = $payment_method;
                    $data['status'] = $order_status;
                    $data['active_status'] = $active_status;
                    $data['product_id'] = $product['id'];
                    $data['qty'] = $product['qty'];
                    $data['product_variation_id'] = $product['options']['variation_id'];
                    $data['billing_address_id'] = $address_id;
                    $data['delivery_charge'] = $delivery_charge;
                    $data['commission'] = $commission;
                    $data['amount'] = $product['subtotal'];
                    $this->product->insert_data('orders', $data);
                }
                unset( $data );
            }
            if(  $error > 0 ){
                $return['message'] = $error;
                echo json_encode( $return );
                exit;
            }
            // We need to confirm if there is still an item in the cart
            $item_left = $this->cart->total_items();
            if( !empty( $item_left ) && !empty( $total) ){
                $this->session->set_userdata(array('order_code' => $order_code, 'amount' => $total));
                $return['status'] = 'success';
                $return['order'] = $order_code;
                echo json_encode( $return );
                exit;
            }

        }else{
	        redirect(base_url());
        }
    }

	public function order_completed(){
        $page_data['page'] = 'order_completed';
        $page_data['title'] = "Order Invoice";
        $email = $this->session->userdata('email');
        $order = $this->session->userdata('order_code');
        $uid = $this->session->userdata('logged_id');
        $page_data['profile'] = $this->user->get_profile( $uid );
        $orders = $this->user->get_my_lastorders($order, $uid);
        if( $uid && $order && $orders ){
            // Send mail to the user
            $page_data['order_code'] = $order;
            $page_data['orders'] = $orders->result();
            // Remove all session
            $this->load->view('landing/order_completed', $page_data);
        }else{
            $this->session->set_flashdata('error_msg', 'Start shopping...');
            redirect(base_url());
        }
    }

    public function stripe(){
        $page_data['page'] = 'stripe';
        $page_data['title'] = "Stripe Payment Gateway";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $this->load->view('landing/stripe/product_form', $page_data);
    }

    public function check(){
        //check whether stripe token is not empty
        if(!empty($_POST['stripeToken'])){
            //get token, card and user info from the form
            $email = $this->session->userdata('email');
            $order = $this->session->userdata('order_code');
            $amount = $this->session->userdata('amount');
//            die( $amount . ' - ' . $email . ' - ' . $order);
            $token = $this->input->post('stripeToken', true);
            //include Stripe PHP library
            require_once APPPATH."third_party/stripe/init.php";
            //set api key
            $stripe = array(
                "secret_key"      => "sk_test_j1NHfDoinTtxm25PyGNuV4xw",
                "publishable_key" => "pk_test_nod5swtRu9mKvMZB28838BY8"
            );

            \Stripe\Stripe::setApiKey($stripe['secret_key']);
            //add customer to stripe
            $customer = \Stripe\Customer::create(array(
                'email' => $email,
                'source'  => $token
            ));

            //item information
            $itemPrice = $amount * 100 ;
            $currency = "ngn";

            //charge a credit or a debit card
            $charge = \Stripe\Charge::create(array(
                'customer' => $customer->id,
                'amount'   => $itemPrice,
                'currency' => $currency,
                'description' => "Payment for order -" . $order,
                'metadata' => array(
                    'order_code' => $order,
                    'buyer_id'   => $this->session->userdata('logged_id')
                )
            ));
            //retrieve charge details
            $chargeJson = $charge->jsonSerialize();
            //check whether the charge is successful
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
                //order details
                $amount = $chargeJson['amount'];
                $balance_transaction = $chargeJson['balance_transaction'];
                $status = $chargeJson['status'];
                $date = date("Y-m-d H:i:s");
                $data = array(
                    'paid_amount' => $amount/100,
                    'transaction_id' => $balance_transaction,
                    'payment_status' => $status,
                    'payment_created' => $date,
                    'payment_modified' => $date
                );
                // Update
                if( $this->product->update_items( $order, $data )){
                    $this->session->userdata('success_msg', "Order completed.");
                    redirect('checkout/order_completed');
                }else{
                    $this->session->userdata('error_msg', "Transaction failed.Please try again.");
                    redirect(base_url());
                }
            }else{
                $this->session->userdata('error_msg', "Invalid Transaction Token.");
                redirect('checkout');
            }
        }else{
            redirect(base_url());
        }
    }
}
