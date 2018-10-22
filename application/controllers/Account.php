<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Buyers profile account
class Account extends CI_Controller {
	public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('user_model', 'user');
        if( !$this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            $referred_from = $this->session->userdata('referred_from');
            if( !empty($referred_from) ) redirect($referred_from);
            redirect(base_url());
        } 
        $this->load->helper('query_helper');
    }


	// Control panel
	public function index(){
		$page_data['page'] = 'dashboard';
		$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
		$this->load->view('account/dashboard', $page_data);
	}

	// Orders
	public function orders(){
		$page_data['page'] = 'orders';
		$page_data['orders'] = $this->user->get_my_orders( $this->session->userdata('logged_id') );
		$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
		$this->load->view('account/orders', $page_data);
	}

	// Personal Information and Change password
	public function information(){
		if( !$this->input->post() ){
			$page_data['page'] = 'information';
			$page_data['profile'] = $this->user->get_profile($this->session->userdata('logged_id') );
			$this->load->view('account/information', $page_data);
		}else{
			$this->load->model('user_model');
			switch ( $this->input->post('info_type')) {
				case 'information_set':
					$this->form_validation->set_rules('display_name', 'Display name','trim|xss_clean');
					$this->form_validation->set_rules('phone', 'Phone','trim|xss_clean');
					$this->form_validation->set_rules('gender', 'gender','trim|xss_clean');
					if ($this->form_validation->run() === FALSE) {
						// There was an error
						$this->session->set_flashdata('error_msg','<strong>Please fix the following errors</strong> <br />' . validation_errors());
						redirect($_SERVER['HTTP_REFERER']);
					}else{
						// update data
						if( $this->user_model->update_data(
							base64_decode($this->input->post('user')), 
							array(
								'display_name' => $this->input->post('display_name'),
								'phone' => $this->input->post('phone'),
								'gender' => $this->input->post('gender')
								), 
							'users'
							)
						){
							$this->session->set_flashdata('success_msg','<strong>Success, your information has been updated.</strong> <br />');
							redirect($_SERVER['HTTP_REFERER']);
						}else{
							$this->session->set_flashdata('error_msg','<strong>Error: There was an error updating the information</strong> <br />');
							redirect($_SERVER['HTTP_REFERER']);
						}
					}
					break;				
				case 'password_set':
					// Change password
					$this->form_validation->set_rules('current_password', 'Current Password','trim|xss_clean|min_length[3]');
						$this->form_validation->set_rules('new_password', 'New Password','trim|xss_clean|min_length[5]');
						$this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|xss_clean|min_length[5]|matches[new_password]');
						if ($this->form_validation->run() === FALSE) {
							// There was an error
							$this->session->set_flashdata('error_msg','<strong>Please fix the following errors</strong> <br />' . validation_errors());
							redirect($_SERVER['HTTP_REFERER']);
						}else{							
							if($this->user_model->cur_pass_match($this->input->post('current_password'),$this->session->userdata('logged_id'))){
								
								if($this->user_model->change_password($this->input->post('new_password'),$this->session->userdata('logged_id'))){$this->session->set_flashdata('success_msg','Success, your password has been reset.');
								}else{
									$this->session->set_flashdata('error_msg','Sorry! There was an error updating the password, please try after some time...');									
								}
							}else{
								$this->session->set_flashdata('error_msg','Sorry! The current password is incorrect');
							}
							redirect($_SERVER['HTTP_REFERER']);

						}
				break;
				default:
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	// Saved and Wishlist
	public function saved(){
		$page_data['page'] = 'saved';
		$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
		$page_data['saved'] = $this->user->get_saved_items( $this->session->userdata('logged_id'));
		$this->load->view('account/saved', $page_data);
	}

	// Settings
	public function settings(){
		$this->load->model('user_model');
		if( !$this->input->post()){
			// var_dump($this->input->post('preference'));
			$page_data['page'] = 'settings';
			$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
			$this->load->view('account/settings', $page_data);
		}else{
//			var_dump($this->input->post('preference'));
			if($this->user_model->update_data(
				base64_decode($this->input->post('user')), 
				array('newsletter' => $this->input->post('preference')))){
				$this->session->set_flashdata('success_msg','Success, your prefence has been updated');
			}else{
				$this->session->set_flashdata('error_msg','Error, There was an error updating your preference, please try again later');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

}
