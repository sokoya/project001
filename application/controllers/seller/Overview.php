<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('seller_model', 'seller');
        if (!$this->session->userdata('logged_in')) {
            redirect('seller/login');
        }


        // die( base64_decode($this->session->userdata('logged_id')) );
        $user = $this->seller->get_profile(base64_decode($this->session->userdata('logged_id')));
        if ($user->is_seller == 'false') {
            $this->session->set_flashdata('success_msg', 'Please complete the below form to become a seller!');
            redirect('seller/application');
        } elseif ($user->is_seller == 'pending') {
            $this->session->set_flashdata('success_msg', 'Your account is under review.');
            redirect('seller/application/status');
        }

    }

    public function index()
    {
        $status = cleanit($this->uri->segment(2));
        $uid = base64_decode($this->session->userdata('logged_id'));
        $page_data['page_title'] = 'Seller Dashboard';
        $page_data['pg_name'] = 'overview';
        $page_data['sub_name'] = $status;
        $page_data['profile'] = $this->seller->get_profile_details($uid,
            'first_name,last_name,email,profile_pic');
        $page_data['completed_orders'] = $this->seller->run_sql("SELECT COUNT(*) FROM orders o INNER JOIN products p WHERE o.product_id = p.id AND p.seller_id = {$uid} AND o.status = 'completed'")->row();
        $page_data['other_orders'] = $this->seller->run_sql("SELECT COUNT(*) FROM orders o INNER JOIN products p WHERE o.product_id = p.id AND p.seller_id = {$uid} AND o.status != 'completed'")->row();
        $page_data['top_views'] = $this->seller->run_sql("SELECT product_name, views FROM products WHERE seller_id = {$uid} ORDER BY views DESC LIMIT 3")->result();
        $page_data['sales_chart'] = $this->seller->run_sql("SELECT COUNT(*) sales, DATE_FORMAT(order_date,'%Y-%m') omonth 
          FROM orders o INNER JOIN products p WHERE o.product_id = p.id AND p.seller_id = {$uid} AND o.status != 'completed' GROUP BY omonth ORDER BY omonth DESC LIMIT 4")->result();
//        var_dump($page_data['sales_chart'] );
        $this->load->view('seller/dashboard', $page_data);
    }
}
