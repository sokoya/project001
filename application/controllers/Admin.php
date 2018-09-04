<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('admin_model', 'admin');
        // $this->output->enable_profiler(TRUE);
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
		$this->load->helper('query_helper');
		if( !$this->input->post() ){
			// fetch all the root category data 
			$page_data['root_categories'] = $this->admin->read_all_data(ROOT_CATEGORY_TABLE);
			$this->load->view('landing/admin_root_category', $page_data);
		}else{
			$this->form_validation->set_rules('root_category', 'Root Category','trim|required|xss_clean|is_unique[root_category.name]',array('is_unique' => 'Sorry! This %s has already been registered!'));
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error_msg','<strong>There was an error creating the root category.</strong> <br />' . validation_errors());
				redirect('admin/root_category');
			}else{
				// Insert 
				$root_id = $this->admin->insert_data( ROOT_CATEGORY_TABLE,
					array(
						'name' => $this->input->post('root_category'),
						'inserted_at' => get_now()
				));
				if( !is_numeric($root_id) ){
					$this->session->set_flashdata('error_msg','Oops, there was an error creating the root category' . validation_errors());
				}else{
					$this->session->set_flashdata('success_msg','Success, the root category has been added.');
					redirect('admin/category');
				}
				redirect('admin/root_category');
			}
		}
	}

	// Category
	public function category(){
		$this->load->helper('query_helper');
		if( !$this->input->post() ){
			$page_data['categories'] = $this->admin->read_all_data(CATEGORY_TABLE);
			$page_data['root_categories'] = $this->admin->read_all_data(ROOT_CATEGORY_TABLE);
			$this->load->view('landing/admin_category', $page_data);
		}else{
			$this->form_validation->set_rules('category_name', 'Category Name','trim|required|xss_clean|is_unique[category.name]',array('is_unique' => 'Sorry! This %s has already been registered!'));
			$this->form_validation->set_rules('category_name', 'Category Name','trim|required|xss_clean|is_unique[category.name]',array('is_unique' => 'Sorry! This %s has already been registered!'));
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error_msg','<strong>There was an error creating the category.</strong> <br />' . validation_errors());
				redirect('admin/category');
			}else{
				// Insert 
				$root_id = $this->admin->insert_data( CATEGORY_TABLE, array(
					'name' => $this->input->post('category_name'),
					'root_category_id' => $this->input->post('root_category_id'),
					'inserted_at' => get_now()
				));
				if( !is_numeric($root_id) ){
					$this->session->set_flashdata('error_msg','Oops, there was an error creating the root category');
				}else{
					$this->session->set_flashdata('success_msg','Success, the category has been added.');
					redirect('admin/category');
				}
			}
		}
	}

	// Sub Category
	public function sub_category(){
		$this->load->helper('query_helper');
		if( !$this->input->post() ){
			$page_data['specifications'] = get_specifications_tables(); 
			$page_data['root_categories'] = $this->admin->read_all_data(ROOT_CATEGORY_TABLE);
			$page_data['categories'] = $this->admin->read_all_data(CATEGORY_TABLE);
			$this->load->view('landing/admin_sub_category', $page_data);
		}else{
			$this->form_validation->set_rules('sub_category_name', 'Sub Category Name','trim|required|xss_clean|is_unique[sub_category.name]',array('is_unique' => 'Sorry! This %s has already been registered!'));
			$this->form_validation->set_rules('root_category_id', 'Root Category','trim|required|xss_clean');
			$this->form_validation->set_rules('category_id', 'Category','trim|required|xss_clean');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error_msg','<strong>There was an error creating the category.</strong> <br />' . validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				// Insert 
				if( empty($this->input->post('specifications')) || count($this->input->post('specifications')) < 1 ){
					$this->session->set_flashdata('error_msg','Oops, you need to select atleast one specification.');
					redirect($_SERVER['HTTP_REFERER']);
				}

                $sub_id = $this->admin->insert_data( SUB_CATEGORY_TABLE, array(
					'root_category_id' => $this->input->post('root_category_id'),
					'category_id' => $this->input->post('category_id'),
					'name' => $this->input->post('sub_category_name'),
					'specifications' => json_encode($this->input->post('specifications'))
				));
				if( !is_numeric($sub_id) ){
					$this->session->set_flashdata('error_msg','Oops, there was an error creating the sub category.');
				}else{
					$this->session->set_flashdata('success_msg','Success, the sub category has been added.');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
	}

	// Sub Category


    /**
     *
     */
    public function category_specification(){
    	$this->load->helper('query_helper');
		if( !$this->input->post() ){
			$page_data['tables'] = get_specifications_tables(); 
			$this->load->view('landing/admin_specification', $page_data);
		}else{
			$this->form_validation->set_rules('specification_name', 'Specification Name','trim|required|xss_clean');
			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('error_msg','<strong>There was an error creating the specification.</strong> <br />' . validation_errors());
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				if( empty($this->input->post('specification_field')) || count($this->input->post('specification_field')) < 1 ){
					$this->session->set_flashdata('error_msg','Oops, the specification can not be empty.');
					redirect($_SERVER['HTTP_REFERER']);
				}
				// model to check if table exists
				// if not create table with its associated fields
				$this->admin->create_specification($this->input->post('specification_name'), $this->input->post('specification_field'));
					$this->session->set_flashdata('success_msg','Category specification has been created successfully.');
					redirect($_SERVER['HTTP_REFERER']);
				// }else{
					$this->session->set_flashdata('error_msg','Error: The specification already exist.');
					redirect($_SERVER['HTTP_REFERER']);
				// }
			}
		}
	}

	public function product(){
		$this->load->helper('query_helper');
		$page_data['root_categories'] = $this->admin->read_all_data(ROOT_CATEGORY_TABLE);
		$this->load->view('landing/admin_product', $page_data);
	}


    /**
     * @param: int root category
     */
    public function get_category(){
    	$this->load->helper('query_helper');
		if( isset($_GET['root_category']) && !empty(get_categories_by_root_id($_GET['root_category']))){
			// fetch the category for the root category id
			echo json_encode(get_categories_by_root_id($_GET['root_category']), JSON_UNESCAPED_SLASHES);
			exit;
		}
		// echo get_categories_by_root_id($id);
	}

    /**
     * @param int : root_category_id
     * @return: sub categories id, name
     */
    public function get_sub_category(){
    	$this->load->helper('query_helper');
		if( isset($_GET['category_id']) && !empty(get_subcategories_by_root_id($_GET['category_id'])) ){
			// fetch the category for the root category id
			echo json_encode(get_subcategories_by_root_id($_GET['category_id']) , JSON_UNESCAPED_SLASHES);
			exit;
		}
	}

    /**
     * @param int : row id of the sub category
     * @return : JSON specification fields
     */
    function get_specifications_fields(){
    	$this->load->helper('query_helper');
		if( isset($_GET['sub_category_id']) && !empty(get_specifications_fields($_GET['sub_category_id']))){
			echo json_encode(get_specifications_fields($_GET['sub_category_id']));
			exit;
		}
	}	
}
