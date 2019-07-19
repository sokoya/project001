<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jobs extends MY_Controller {
    public function __construct(){
        parent::__construct();
    }


    //Jobs at onitshamarket
    public function index(){
        $page_data['page'] = 'jobs';
        $page_data['title'] = "Jobs At Onitshamarket";
        $page_data['description'] = "Find current jobs in Onitshamarket.com (Nigeria) together we build the largest e-commerce in Nigeria.";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $page_data['jobs'] = $this->product->get_results('jobs', '*', array('active' => 1));
        $this->load->view('landing/jobs/job_list', $page_data);
    }

    // single jobs on onitshamarket
    public function job_detail(){
        $page_data['page'] = "jobs";
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $job_code = $this->uri->segment(3);
        $job_code = cleanit( $job_code );

        $page_data['job'] = $this->product->get_row('jobs', '*', array('job_code' => $job_code));
        if( $page_data['job'] ){
            $page_data['title'] = $page_data['job']->job_title;
            $page_data['description'] = word_limiter($page_data['job']->job_description, 30);
            $this->load->view('landing/jobs/job_detail', $page_data);
        }else{
            redirect('404');
        }
    }
}
