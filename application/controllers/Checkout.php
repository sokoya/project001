<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
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
	    if( !$this->session->tempdata('checkout') ) {
	        $this->session->set_flashdata('success_msg', 'Your cart has been updated');
	        redirect('cart');
        }
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
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
		$page_data['methods'] = $this->product->get_results('payment_methods', '*', "(status = 1)");
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
//        $this->session->unset_tempdata('item');
	    if( $this->input->is_ajax_request() ){

            $address_id = cleanit( $this->input->post('selected_address', true) );
            $billing_amount = $this->product->get_billing_amount($address_id);
            if( !$billing_amount ) $billing_amount = 500; // Default Billnng Address

            $error = $subtotal = 0; $data = $return = array();
            $order_code = $this->product->generate_code('orders', 'order_code');
            $order_date = get_now();
            $order_status = array( 'processing' => array( 'msg' => 'Order is under process.','datetime' => get_now()) );
            $order_status = json_encode( $order_status);
            $active_status = 'pending';
            $total = $this->input->post('total_charge', true);
//            first_name=&last_name=&phone=&address=&state=&selected_address=6&payment_method=1&total_charge=601800&delivery_charge=1800
            $payment_method = $this->input->post('payment_method', true);
            $qty = $this->input->post('qty', true);
            $billing_amount = $billing_amount * $qty;
            $buyer_id = $this->session->userdata('logged_id');
            foreach( $this->cart->contents() as $product ){

                $detail = $this->product->get_cart_details($product['id']);
                $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);

                if($variation_detail->quantity < 1 || $product['qty'] > $variation_detail->quantity || in_array( $detail->product_status, array('suspended', 'blocked', 'pending' ))){
                    $return['status'] = 'error';
                    $error++;
                    $return['message'] = "Sorry, one of the item(s) is out of stock.";
                    // Remove the Item
                    $cid = $product['rowid'];
                    try {
                        // remove from cart
                        $this->cart->remove($cid);
                    }catch (Exception $x ){
                        $error_array = array('error_action' => 'Cart Removal Error', 'error_message' => 'On checkout when performing checks on cart item');
                        $this->product->insert_data('error_logs', $error_array);
                    }
                }else{
                    $price = $this->product->get_commission( $product['id'] );
                    $commission = ( $price / 100 ) * (int)$product['subtotal'];
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
                    $data['delivery_charge'] = $billing_amount;
                    $data['commission'] = $commission;
                    $data['amount'] = $product['subtotal'];
                    $this->product->insert_data('orders', $data);
                }
                unset( $data );
                $subtotal += $product['subtotal'];
            }
            if(  $error > 0 ){
                $return['message'] = $error;
                echo json_encode( $return );
                exit;
            }
            // We need to confirm if there is still an item in the cart
            $item_left = $this->cart->total_items();
            if( !empty( $item_left ) && !empty( $total) ){
                $total = $subtotal + $billing_amount;
                $this->session->set_userdata(array('order_code' => $order_code, 'amount' => $total));
                $return['status'] = 'success';
                echo json_encode( $return );
                exit;
            }

        }else{
	        redirect(base_url());
        }
    }

    // Order completed
	public function order_completed(){
        $order = $this->session->userdata('order_code');
        $page_data['page'] = 'order_completed';
        $page_data['title'] = "Order Invoice - {$order}";
        $uid = $this->session->userdata('logged_id');
        $page_data['profile'] = $user = $this->user->get_profile( $uid );
        $orders = $this->user->get_my_lastorders($order, $uid);
        if( $uid && $order && $orders ){
            $page_data['order_code'] = $order;
            $page_data['orders'] = $orders->result();
            $page_data['ordersingledetail'] = $detail = $this->user->get_last_singleorder($order, $uid);
            try {
                // Send mail to the user
                // Remove all session relating to the Order
                $this->session->unset_tempdata('checkout');
                $this->session->unset_userdata(array('cart_contents','order_code','amount'));
                // Send SMS
                $link = base_url('account/orderstatus/') . $order;
                if( SMS_FOR_ORDERS ) {
                    $short_url = get_bitly_short_url( $link , BITLY_USERNAME, BITLY_API);
                    $seller_message = "Hello {$detail->legal_company_name}, a new order has just been confirmed. Login to your portal for details.";
                    $buyer_message = "Dear " .ucfirst($user->first_name) . ", your order {$order} has been confirmed! Visit {$short_url} and check your email for complete details. Thank you!";
                    $sms_array = array( $detail->seller_phone => $seller_message,$user->phone => $buyer_message);
                    $this->load->library('AfricaSMS', $sms_array);
                    $this->africasms->sendsms();
                }
                // Send Mail
                $this->load->model('email_model','myemail');
                $sellerdetails = $this->user->get_sellers_details($order);
//                var_dump( $sellerdetails);
                // send mail to the buyer
                $recipent['name'] = ucwords($page_data['profile']->first_name . ' ' . $page_data['profile']->last_name);
                $recipent['email'] = $page_data['profile']->email;
                try {
                    $this->myemail->sendBuyerOrder($orders->result(), $detail, $order, $link, $recipent );
                    $this->myemail->sendSellerOrder($sellerdetails);
                } catch (Exception $e) {
                    $error_action = array(
                        'error_action' => 'Checkout controller - Sending mail to the buyer',
                        'error_message' => $e->getMessage()
                    );
                    $this->user->create_account($error_action, 'error_logs');
                }
            } catch (Exception $e) {
            }
            $this->load->view('landing/order_completed', $page_data);
        }else{
            $this->session->set_flashdata('error_msg', 'Error with you order. Staet shopping...');
            redirect(base_url());
        }
    }

    public function stripe(){
        $page_data['page'] = 'stripe';
        $page_data['title'] = "Stripe Payment Gateway";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $this->load->view('landing/stripe/product_form', $page_data);
    }

    // Payment Check for Interswitch (Stripe)
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
            // Payment uncompleted
            $order = $this->session->userdata('order_code');
            $uid = $this->session->userdata('logged_id');
            $profile = $this->user->get_profile($uid);
            $buyer['name'] =  'Dear ' . ucwords( $profile->first_name . ' ' . $profile->last_name);
            $buyer['email'] = $profile->email;
            // Send mail ro the user
            $this->load->model('email_model','myemail');
            try {
                $this->myemail->paymentUncompleted( $order, $uid , $buyer);
                $this->session->set_flashdata('error_msg','Your payment could not be completed.');

            } catch (Exception $e) {
            }
            redirect(base_url());
        }
    }

}
