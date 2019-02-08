<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
        $page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
        $page_data['title'] = 'My cart';
        $page_data['page'] = 'cart';
        $this->session->set_tempdata('checkout','checkout_time',600);
        if( $this->cart->contents() ) {
            foreach ($this->cart->contents() as $product){
                $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
                if( $variation_detail && $variation_detail->quantity < $product['qty'] ){
                    $qty_array = array('qty' => $variation_detail->quantity , 'rowid' => $product['rowid']);
                    try {
                        $this->update_cart_item( $qty_array );
                        $this->session->set_flashdata('success_msg', "Your cart has been updated.");
                    } catch (Exception $e) {
                    }
                }
            }
        }
        if (!$this->agent->is_mobile()) {
            $this->load->view('landing/cart', $page_data);
        } else {
            $page_data['page'] = 'mobile-cart';
            $this->load->view('landing/mobile-cart', $page_data);
        }
    }

    // remove cart
    public function remove(){
        if( $this->cart->remove($this->uri->segment(3)) ){
            $this->session->set_flashdata('success_msg', 'The item has been removed from your cart successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'The item no longer exist on your cart.');
        }
        redirect('cart');
    }

    // Update Cart quantity
    function update_cart_item( $data ){
        $this->cart->update($data);
    }

}
