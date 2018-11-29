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

}
