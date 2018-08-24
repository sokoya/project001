<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	 public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        // parent::__construct();
        $this->load->model('admin_model', 'admin');
        // if( $this->session->userdata('logged_in') ){
        //     // Ursher the person to where he is coming from
        //     if( !empty($this->session->userdata('referred_from')) ) redirect($this->session->userdata('referred_from'));
        //     redirect(base_url());
        // } 
    }

	public function index(){
		$this->load->view('landing/admin');
	}

	// Root Category
	public function root_category(){
		if( !$this->input->post() ){
			// fetch all the root category data 
			$page_data['root_categories'] = $this->admin->read_all_data('root_category');
			$this->load->view('landing/admin_root_category', $page_data);
		}
		$this->form_validation->set_rules('root_category', 'Root Category','trim|required|xss_clean|is_unique[root_category.name]');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error_msg','<strong>There was an error creating the root category.</strong> <br />' . validation_errors());
			$this->load->view('landing/admin_root_category');
		}else{
			// Insert 
			$root_id = $this->admin->insert_data('root_category', array('name' => $this->input->post('root_category')));
			if( !is_numeric($root_id) ){
				$this->session->set_flashdata('error_msg','Oops, there was an error creating the root category' . validation_errors());
				redirect('admin/root_category');
			}



		}
	}

	// Category
	public function category(){
		$this->load->view('landing/admin_category');
	}

	// Sub Category
	public function sub_category(){
		$this->load->view('landing/admin_sub_category');
	}


	// Sub Category
	public function sub_category(){
		$this->load->view('landing/admin_specification');
	}
	
}
