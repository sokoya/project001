<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('text');
        if( !$this->session->userdata('logged_in') ){
            $this->session->set_userdata('referred_from', current_url());
            redirect('login');
        }
        if( empty($this->cart->total_items()) ){
            redirect(base_url());
        }
    }

	public function index(){
        if( !$this->input->post() ){
            $this->load->model('user_model', 'user');
            $page_data['user'] = $this->user->get_profile($this->session->userdata('logged_id'));
            $this->load->view('landing/checkout', $page_data);
        }else{
            // Form validation
            // $this->form_validation->set_rules('customer_email', 'Email address','trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('customer_name', 'Name','trim|required|xss_clean');
            // $this->form_validation->set_rules('customer_phone', 'Phone number','trim|required|xss_clean');
            // $this->form_validation->set_rules('address', 'Delivery address','trim|required|xss_clean');
            // $this->form_validation->set_rules('card_number', 'Card number', 'trim|required|xss_clean');
            // $this->form_validation->set_rules('cvc', 'CVC', 'trim|required|xss_clean');
            // $this->form_validation->set_rules('cardholder_name', 'Card holder name', 'trim|required|xss_clean');
            if( $this->form_validation->run() == FALSE ){
                $this->session->set_flashdata('error_msg','There was an error with the form. Please fix the following <br />' . validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }
            // Check payment status from
            // if payment successful
            $this->load->helper('string');
            $code  = $this->product->generate_code('orders', 'order_code');
            $data = array(
                'buyer_id' => base64_decode($this->input->post('userid')),
                'card_number' => cleanit($this->input->post('card_number')),
                'cvc' => cleanit($this->input->post('cvc')),
                'cardholder_name' => cleanit($this->input->post('cardholder_name')),
                'valid_through' => $this->input->post('valid_through'),
                'customer_name' => $this->input->post('customer_name'),
                'customer_phone'    => $this->input->post('customer_phone'),
                'city'  => $this->input->post('city'),
                'zip_code' => $this->input->post('zip_code'),
                'address' => $this->input->post('address'),
                'status' => 'ordered',
                'order_code' => $code
            );

            $count = $x = 0;
            // count, sizeof not working for array, Imporovised
            foreach( $this->input->post('order') as $key){
                $count++;
            }
            do {
                // $_POST['order'] = 'userid|product_id|seller_id|qty|desc'
                $order = explode('|', $_POST['order'][$x]);
                $data['buyer_id'] = base64_decode($order[0]);
                $data['product_id'] = $order[1];
                $data['seller_id'] = base64_decode($order[2]);
                $data['qty'] = $order[3];
                $data['product_desc'] = $order[4];
                $this->product->insert_data('orders', $data);
                $x++;
            } while ( $x < $count);
            $this->session->set_flashdata('success_msg', 'Thank you for the order, your order is in progress. Your order tracking code is  #'.$code);
            // clear the cart session
            $this->cart->destroy();
            redirect('account');
        }
	}

}
