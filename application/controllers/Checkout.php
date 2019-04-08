<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_userdata('referred_from', current_url());
			redirect('login/');
		}
		$items = $this->cart->total_items();
		if (empty( $items )) {
			redirect(base_url());
		}
		$this->load->library('sitelib');
	}

    public function index(){
	    if( !$this->session->tempdata('checkout') ) {
	        $this->session->set_flashdata('success_msg', 'Your cart has been updated');
	        redirect('cart/');
        }
		$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
	    $page_data['page'] = 'checkout';
		$page_data['title'] = 'Checkout';
		$this->load->model('user_model', 'user');
		$page_data['user'] = $this->user->get_profile($this->session->userdata('logged_id'));

		$page_data['addresses'] = $this->user->get_user_billing_address($page_data['user']->id);
		$page_data['pickups'] = $this->user->get_pickup_address();
		$page_data['address_set'] = $this->user->is_address_set($page_data['user']->id);
		// Returns the default area Id
		$user_area_id = $this->user->get_default_address_area($page_data['user']->id);
		// Get the area id price associated with the weight

		// Lets make a check that the product is valid to be here
        $message = ''; $total = $error = $weight_total = 0; $weight_price = 500;
        $weight_array = array();
		foreach( $this->cart->contents() as $product ){
			$detail = $this->product->get_cart_details($product['id']);
			$variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
            if($variation_detail->quantity < 1 || $product['qty'] > $variation_detail->quantity || in_array( $detail->product_status, array('suspended', 'blocked', 'pending' ))){
                $error++;
                $message .= "Sorry, the product " . $product['name']. " is presently out of stock";
                // Remove the Item
                $cid = $product['rowid'];
                $this->cart->remove($cid);
            }
            // Total Amount
            $total += $product['subtotal'];
            // Get Weight Price
            $weight_result = $this->product->get_product_weight_price( $detail->weight, $user_area_id );

            if( $weight_result )  $weight_price = $weight_result->amount;
            $weight_total = (int)$weight_price;

            // Make a list of the product weight- pass it to the view
            array_push($weight_array, $detail->weight );
		}
		if( $error > 0 ){
		    $this->session->set_flashdata('error_msg', $message);
		    redirect('cart');
        }

        $page_data['delivery_charge'] = $weight_total;
		$weight['weight'] = $weight_array;
		$page_data['weights'] = json_encode($weight, true);
        $this->session->set_flashdata('error_msg', $message);
		$items = $this->cart->total_items();
		$page_data['methods'] = $this->product->get_results('payment_methods', '*', "(status = 1)");
		if( empty($items) || $total < 0 ) {
		    redirect( base_url() );
        }
		$page_data['total'] = $total;
		if (!$this->agent->is_mobile()) {
            $this->load->view('landing/checkout', $page_data);
        } else {
            $page_data['page'] = 'mobile-checkout';
            $this->load->view('landing/mobile-checkout', $page_data);
        }
	}

	// Add billing address for customer
	function add_address()
	{
        header('Content-type: text/json');
        header('Content-type: application/json');
		$status['status'] = 'error';
		$this->form_validation->set_rules('first_name', 'First name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
		$this->form_validation->set_rules('area', 'Area', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$status['message'] = validation_errors('<span>', '</span><br/>');
			echo json_encode($status);
			exit;
		} else {
			$data = array(
				'first_name' => cleanit($this->input->post('first_name', true)),
				'last_name' => cleanit($this->input->post('last_name', true)),
				'phone' => cleanit($this->input->post('phone', true)),
				'sid' => cleanit($this->input->post('state', true)),
				'address' => cleanit($this->input->post('address', true)),
				'aid' => cleanit($this->input->post('area', true)),
				'uid' => $this->session->userdata('logged_id')
			);
			if (is_int($this->user->create_account($data, 'billing_address'))) {
				$status['status'] = 'success';
				$status['message'] = 'Success: The address has been added to your account.';
				echo json_encode($status);
				exit;
			} else {
				$status['message'] = 'Error: There was an error adding the address to your account.';
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
        $billing_id = cleanit($this->input->post('billing_id'));

		$weights = $this->input->post('weight');
		$result = $this->user->update_billing_address(array('uid' => $uid) , $address_id, $weights,$billing_id);
		if( $result != false ) {
		    echo $result;
		} else {
			echo 500;
		}
		exit;
	}

    /*
     * Save user orders to the DB
     *
     * */
	function checkout_confirm() {

	    if( $this->input->is_ajax_request() ){
	        /*  Note the seller might have checked pickup address or billing address */
            $charge = 0;
            // Check either pickup or delivery
            $pickup_id = $address_id = 0;
            $weights = $this->input->post('weight');

            if( $this->input->post('pickup_address') ) {
                $pickup_id = $this->input->post('pickup_address');
                $charge = $this->product->get_billing_amount($pickup_id, 'pickup');
            }else{
                $address_id = cleanit( $this->input->post('selected_address', true) );
                $charge = $this->product->get_billing_amount($address_id,'billing', $weights);
            }
            if( $charge == false ) $charge = 500;
            $error = $subtotal = 0; $data = $return = array();
            $order_code = $this->product->generate_code('orders', 'order_code');
            $order_date = get_now();
            $order_status = array( 'processing' => array( 'msg' => 'Order is under process.','datetime' => get_now()) );
            $order_status = json_encode( $order_status);
            $active_status = 'pending';
            $total = $this->input->post('total_charge', true);
            $payment_method = $this->input->post('payment_method', true);
            $qty = $this->input->post('qty', true);
            $billing_amount = $charge * $qty;
            $buyer_id = $this->session->userdata('logged_id');
            $txn_ref = 'TX-'.$order_code.'-'.time();
            foreach( $this->cart->contents() as $product ){
                $detail = $this->product->get_cart_details($product['id']);
                $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
                if($variation_detail->quantity < 1 || $product['qty'] > $variation_detail->quantity || in_array( $detail->product_status, array('suspended', 'blocked', 'pending' ))){
                    $error++;
                    $return['status'] = 'error';
                    $return['message'] = "Sorry, one of the item(s) is out of stock.";
                    // Remove the Item
                    $cid = $product['rowid'];
                    try {
                        // Lets remove from cart...
                        $this->cart->remove($cid);
                    }catch (Exception $x ){
                        $error_array = array('error_action' => 'Cart Removal Error', 'error_message' => 'On checkout when performing checks on cart item');
                        $this->product->insert_data('error_logs', $error_array);
                    }
                }else{
                    $commission_rate = $this->product->get_commission( $product['id'] );
                    $commission = ( $commission_rate / 100 ) * (int)$product['price'];
                    // Populate the Order table data
                    $res['buyer_id'] = $buyer_id;
                    $res['seller_id'] = $detail->seller_id;
                    $res['order_code'] = $order_code;
                    $res['order_date'] = $order_date;
                    $res['payment_method'] = $payment_method;
                    $res['status'] = $order_status;
                    $res['active_status'] = $active_status;
                    $res['product_id'] = $product['id'];
                    $res['qty'] = $product['qty'];
                    $res['product_variation_id'] = $product['options']['variation_id'];
                    $res['pickup_location_id'] = $pickup_id;
                    $res['billing_address_id'] = $address_id;
                    $res['delivery_charge'] = $billing_amount;
                    $res['commission'] = $commission;
                    $res['payment_made'] = 'pending';
                    $res['amount'] = $product['price'];
                    $res['txnref'] = $txn_ref;
                    array_push( $data, $res );
                }
                $subtotal += $product['subtotal'];
            }

            $item_left = $this->cart->total_items();
            if(  $error > 0 ){
                $return['message'] = $error;
                echo json_encode($return);
                exit;
            }elseif( !empty($item_left) && !empty( $total) ){
                $total = $subtotal + $billing_amount;
                    // Lets insert our orders into the database
                if(  $this->product->insert_batch( 'orders', $data ) ){
                    unset( $data); // Fore data leaching...
                    // check the payment method, if Interswitch (2) compile the array session
                    $token = simple_crypt( $txn_ref, 'e');
                    $amt = $total * 100 ;
                    if( (int)$payment_method == 2 ){
                        $redirect_url =  base_url('interswitch/response/?t=' . $token);

                        $hash = hash('SHA512', $txn_ref.INTERSWITCH_PRODUCT_ID.INTERSWITCH_PAY_ITEM_ID.$amt.$redirect_url.INTERSWITCH_MAC_KEY) ;

                        $profile = $this->product->get_row('users', 'first_name, last_name', array('id' => $buyer_id));
                        $name = $profile->first_name . ' '. $profile->last_name;
                        $interswitch_session = array(
                            'product_id'    =>  INTERSWITCH_PRODUCT_ID,
                            'pay_item_id'   =>  INTERSWITCH_PAY_ITEM_ID,
                            'amount'        =>  $amt,
                            'currency'      =>  566,
                            'site_redirect_url' => $redirect_url,
                            'txn_ref'       =>  $txn_ref,
                            'cust_id'       => $buyer_id,
                            'cust_name'     => $name,
                            'hash'          => $hash
                        );
                        $this->session->set_userdata(array('inter' => $interswitch_session));
                    }

                    // Send mail to admin
                    $this->session->set_userdata(array('order_code' => $order_code, 'txn_ref' => $txn_ref, 'amount' => $amt));
                    $return['status'] = 'success';
                    echo json_encode($return);
                    exit;
                }else{
                    $return['message'] = 'There was an error processing your order.';
                    echo json_encode($return);
                    exit;
                }
            }
        }else{
	        redirect(base_url());
        }
    }

    /*
     * Checkout completed for payment on delivery
     * */
	public function order_completed(){
        $order = $this->session->userdata('order_code');
        $page_data['page'] = 'order_completed';
        $page_data['title'] = "Order Invoice - {$order}";
        $uid = $this->session->userdata('logged_id');
        $page_data['profile'] = $user = $this->user->get_profile( $uid );
        $orders = $this->user->get_my_lastorders($order, $uid);
        if( $uid && $order && $orders ){
            foreach( $orders->result() as $key ){
                $this->product->set_field('product_variation', 'quantity', "quantity-{$key->qty}", array('id' => $key->product_variation_id));
            }
            $page_data['order_code'] = $order;
            $page_data['orders'] = $orders->result();
            $page_data['ordersingledetail'] = $detail = $this->user->get_last_singleorder($order, $uid);
            try {
                // Send mail to the user
                // Remove all session relating to the Order
                $this->session->unset_tempdata('checkout');
                $this->session->unset_userdata(array('inter', 'order_code', 'txn_ref', 'amount', 'cart_contents'));
                // Send SMS
                $link = base_url('account/orderstatus/') . $order;
                if( SMS_FOR_ORDERS ) {
                    $short_url = get_bitly_short_url( $link , BITLY_USERNAME, BITLY_API);
                    $seller_message = "Hello {$detail->legal_company_name}, a new order has just been confirmed. Login to your portal for details.";
//                    {$short_url}
                    $buyer_message = "Dear " .ucfirst($user->first_name) . ", your order {$order} has been confirmed! Visit your account and check your email for complete details. Thank you!";
                    $sms_array = array( $detail->seller_phone => $seller_message,$user->phone => $buyer_message);
                    $this->load->library('AfricaSMS', $sms_array);
                    $this->africasms->sendsms();
                }
                // Send Mail
                $this->load->model('email_model','myemail');
                // send mail to the buyer
                $recipent['name'] = ucwords($page_data['profile']->first_name . ' ' . $page_data['profile']->last_name);
                $recipent['email'] = $page_data['profile']->email;
                try {
                    $this->myemail->orderCompleted($orders->result(),$order, $recipent );
//                    $sellerdetails = $this->user->get_sellers_details($order);
//                    $this->myemail->sendSellerOrder($sellerdetails);
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
            $this->session->set_flashdata('error_msg', 'Error with you order. Start shopping...');
            redirect(base_url());
        }
    }

    // Interswitch webpay
    public function interswitch(){
	    if( $this->session->userdata('inter') ){
            $this->load->view('landing/interswitch/webpay');
        }else{
            $this->session->set_flashdata('error', 'Please update your cart...');
            redirect('cart/');
        }
    }

    /*
     * Response from Interswitch Payment Gateway
     * @param : t = encrypted txn_ref
     * */
    public function response(){
	    // Check the txn_ref session and validate the token
        $token = $this->input->get('t', true);
        $txn_ref = $this->session->userdata('txn_ref');
        $is_token = simple_crypt( $token, 'd');


	    if( $txn_ref && ( $txn_ref == $is_token ) ) {
            // Check the ResponseCode
            $amount = $this->session->userdata('amount');
            $order_code = $this->session->userdata('order_code');
            $curl_info_data  = array( 'txn_ref'   => $txn_ref, 'amount'    => $amount, 'order_code' =>  $order_code );
            $response = $this->sitelib->interswitch_curl( $curl_info_data ); // return a JSON
            switch ($response['ResponseCode']) {
                case '00':
                    // Confirm. Payment made successfully. :)
                    $this->update_payment_status( $response );
                    break;
                case 'Z0':
                    // Transaction not completed status - Requery
                    $response = $this->sitelib->interswitch_curl( $curl_info_data );
                    if( $response['ResponseCode'] == '00' ){
                        // We can't requery again... I am weak. Notify unsuccessful payment
                        $this->update_payment_status( $response, false );
                    }else{
                        $this->update_payment_status( $response );
                    }
                    break;
                default:
                    // Order Payment was Not Successful
//                    var_dump( $response ); exit;
                    $this->update_payment_status( $response, false );
                    break;
            }
        }else{
	        $this->session->set_flashdata('error_msg', 'There was an error valdating your transansaction.');
	        redirect( base_url() );
        }
    }

    /*
     * @param; response: Interswitch JSON response
     * status : boolean ( true - successful or false - unsuccessful )
     * */
    function update_payment_status( $response, $status = true ){
        // We are good to go
        $order_code = $this->session->userdata('order_code');
        $this->load->model('email_model','myemail');
        $uid = $this->session->userdata('logged_id');
        $profile = $this->product->get_row('users', 'first_name, last_name, email, phone', array('id' => $uid));
        if( $status ){
            // Success
            $PaymentReference = (isset($response['PaymentReference'])) ? $response['PaymentReference'] : null;
            $RetrievalReferenceNumber = (isset($response['RetrievalReferenceNumber'])) ? $response['RetrievalReferenceNumber'] : null;
            $row = $this->product->get_row('orders', 'status', array('order_code' => $order_code));
            $json_array = json_decode($row->status, true);
            $array = array("success" => array('msg' => "Order payment was successful: {$response['ResponseDescription']}", 'datetime' => get_now()));
            $status_array = array_merge($json_array, $array);
            $status_array = json_encode($status_array);
            $update_data = array(
                'active_status' => 'certified',
                'payment_made' => 'success',
                'status'  => $status_array,
                'paymentDesc'   => $response['ResponseDescription'],
                'payRef'        => $PaymentReference,
                'retRef'        => $RetrievalReferenceNumber,
                'apprAmt'       => $response['Amount']/100,
                'responseCode'  => $response['ResponseCode']
            );

            // Insert the record to payment table

            // show order complete page
            try {
                $this->product->update_items($order_code, $update_data);
                $this->session->set_flashdata('success_msg', 'Thank you for shopping with us, your order has been received.');
                redirect('order_completed');
            } catch (Exception $e) {
            }
        }else{
            $PaymentReference = (isset($response['PaymentReference'])) ? $response['PaymentReference'] : null;
            $RetrievalReferenceNumber = (isset($response['RetrievalReferenceNumber'])) ? $response['RetrievalReferenceNumber'] : null;

            $row = $this->product->get_row('orders', 'status', array('order_code' => $order_code));
            $json_array = json_decode($row->status, true);
            $array = array("cancelled" => array('msg' => "Order was marked as cancelled : {$response['ResponseDescription']}", 'datetime' => get_now()));
            $status_array = array_merge($json_array, $array);
            $status_array = json_encode($status_array);

            $update_data = array(
                'active_status' => 'cancelled',
                'status'  => $status_array,
                'payment_made' => 'fail',
                'paymentDesc'   => $response['ResponseDescription'],
                'payRef'        => $PaymentReference,
                'retRef'        => $RetrievalReferenceNumber,
                'apprAmt'       => $response['Amount']/100,
                'responseCode'  => $response['ResponseCode']
            );
            try {
                $this->product->update_items($order_code, $update_data);
                $buyer['name'] = $profile->first_name . ' '. $profile->last_name;
                $buyer['email'] = $profile->email;
//                @TODO
                $this->myemail->paymentUncompleted( $order_code, $buyer);
                // Lets also send a message
                if( SMS_FOR_ORDERS) {
                    $buyer_message = "Dear " .ucfirst($profile->first_name) . ", your order {$order_code} payment was not successful: {$response['ResponseDescription']}. check your email for complete details. Thank you!";
                    $sms_array = array( $profile->phone => $buyer_message );
                    $this->load->library('AfricaSMS', $sms_array);
                    $this->africasms->sendsms();
                }
            } catch (Exception $e) {

            }
            $txn_ref = $this->session->userdata('txn_ref');
            $this->session->set_flashdata('error_msg', "We couldn't validate the payment, please try again. Reason: {$response['ResponseDescription']}, Transaction Reference: {$txn_ref}. If error persist please contact us.");
            $this->session->unset_userdata(array('inter', 'order_code', 'txn_ref', 'amount'));
            redirect(base_url());
        }
    }


}
