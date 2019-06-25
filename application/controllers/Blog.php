<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('date');
        $this->load->model('feeds_model', 'feeds');
    }

    public function index(){
        $this->session->set_userdata('referred_from', current_url());
        $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
        if ($page > 1) $page -= 1;
        $this->load->library('pagination');
        $this->config->load('pagination');
        $config = $this->config->item('pagination');
        $config['base_url'] = current_url();
        $config['total_rows'] = 120;
        $config['per_page'] = 40;
        $this->pagination->initialize($config);
        $array['limit'] = $config['per_page'];
        $array['offset'] = $page;
        $array['is_limit'] = true;
        $page_data['pagination'] = $this->pagination->create_links();
        $page_data['products'] = $this->feeds->get_new_arrival($array);
        $page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id'));
        $page_data['page'] = 'new_arrival';
        $page_data['title'] = "Onitshamarket Blog | How To | Product Reviews | Latest News On Tech, Fashion, Gadgets";
        $this->load->view('blog/posts', $page_data);
    }
}
