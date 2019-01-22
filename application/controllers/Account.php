<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Buyers profile account
class Account extends MY_Controller {
	public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('user_model', 'user');
        if( !$this->session->userdata('logged_in') ){
            $this->session->set_flashdata('error_msg', 'You need to login to access the page.');
            // Ursher the person to where he is coming from
            $referred_from = $this->session->userdata('referred_from');
            if( !empty($referred_from) ) redirect($referred_from);
            redirect(base_url('login'));
        } 
    }


	// Control panel
	public function index(){
		$page_data['page'] = 'dashboard';
		$page_data['title'] = "My dashboard";
		$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
		$this->load->view('account/dashboard', $page_data);
	}

	// Orders
	public function orders(){
		$page_data['page'] = 'orders';
		$page_data['title'] = "My Orders";
		$time = '';
        $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
        if ($page > 1) $page -= 1;
        $id = $this->session->userdata('logged_id');
        $time = cleanit($this->input->get('time'));

        $array = array('time' => $time, 'is_limit' => false);
        $x = (array)$this->user->get_my_orders( $id ,$array);
        $count = (count($x));
        $this->load->library('pagination');
        $this->config->load('pagination');
        $config = $this->config->item('pagination');
        $config['base_url'] = current_url();
        $config['total_rows'] = $count;
        $config['per_page'] = 10;
        $config["num_links"] = 5;
        $this->pagination->initialize($config);
        $array['limit'] = $config['per_page'];
        $array['offset'] = $page;
        $array['is_limit'] = true;
        $page_data['pagination'] = $this->pagination->create_links();

        $page_data['orders'] = $this->user->get_my_orders( $id, $array );
        $page_data['profile'] = $this->user->get_profile( $id );
		$this->load->view('account/orders', $page_data);
	}

	public function orderstatus(){
	    $order_code =  cleanit( $this->uri->segment(3));
	    if( empty( $order_code) ) redirect($_SERVER['HTTP_REFERER']);
        $page_data['page'] = 'orders';
        $page_data['title'] = "My Orders";
        $page_data['order_code'] = $order_code;
        $page_data['orders'] = $this->user->get_my_order_status( $this->session->userdata('logged_id'), $order_code );
//        var_dump($page_data['orders']);
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $this->load->view('account/orderstatus', $page_data);
    }

	// Personal Information and Change password
	public function information(){
		$page_data['title'] = "My information";
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
		$page_data['title'] = "My saved items";
        $id = $this->session->userdata('logged_id');
        $page_data['profile'] = $this->user->get_profile( $id);

        $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
        if ($page > 1) $page -= 1;
        $array = array('is_limit' => false);
        $x = (array)$this->user->get_saved_items( $id ,$array);
        $count = (count($x));
        $this->load->library('pagination');
        $this->config->load('pagination');
        $config = $this->config->item('pagination');
        $config['base_url'] = current_url();
        $config['total_rows'] = $count;
        $config['per_page'] = 1;
        $config["num_links"] = 5;
        $this->pagination->initialize($config);
        $array['limit'] = $config['per_page'];
        $array['offset'] = $page;
        $array['is_limit'] = true;
        $page_data['pagination'] = $this->pagination->create_links();

		$page_data['saved'] = $this->user->get_saved_items( $id, $array);
		$this->load->view('account/saved', $page_data);
	}

    // Billing Address Function
    public function billing(){
    	$page_data['page'] = 'billing';
    	$page_data['title'] = "My Billing Address";
    	$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
    	$page_data['addresses'] = $this->user->get_user_billing_address( $page_data['profile']->id); 
        if( $this->input->post() ){
        	$status['status'] = 'error';
			$this->form_validation->set_rules('first_name', 'First name','trim|required|xss_clean');
			$this->form_validation->set_rules('last_name', 'Last name','trim|required|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone','trim|required|xss_clean');
			$this->form_validation->set_rules('state', 'State','trim|required|xss_clean');
            $this->form_validation->set_rules('area', 'Area','trim|required|xss_clean');
            $this->form_validation->set_rules('address', 'Address','trim|required|xss_clean');
			if( $this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('error_msg', 'Please correct the following errors '. validation_errors());
				$status['message'] = 'Please fix the following errors ' . validation_errors();
				echo json_encode($status);
				exit;
			}else{
				$phone2 = $this->input->post('phone2');
				$phone2 = !empty($phone2) ? $phone2 : '';
				$data = array(
					'first_name' => cleanit($this->input->post('first_name')),
					'last_name' => cleanit($this->input->post('last_name')),
					'phone' => cleanit($this->input->post('phone')),
					'sid' => cleanit($this->input->post('state')),
                    'aid' => cleanit($this->input->post('area')),
                    'address' => cleanit($this->input->post('address')),
					'phone2' => $phone2,
				);
				$uid = $this->session->userdata('logged_id');
				if( $this->input->post('address_type') == 'new'){					
					$data['uid'] = $uid;
					$this->user->create_account($data,'billing_address');
				}else{
					// update
					$this->user->update_data($this->input->post('update_aid'), $data, 'billing_address');
				}
				$status['status'] = 'success';
				echo json_encode( $status );
				exit;
			}
        }else{
        	$page_data['page'] = 'billing';
        	$page_data['title'] = "My Billing Address";
        	$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        	$this->load->view('account/billing', $page_data);
        }
    }

	// Settings
	public function settings(){
		$page_data['title'] = "Account Settings";
		$this->load->model('user_model');
		if( !$this->input->post()){
			$page_data['page'] = 'settings';
			$page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id'));
			$page_data['categories'] = $this->product->get_results('categories', 'id,name', "( pid = 0 )");
			$this->load->view('account/settings', $page_data);
		}else{
			if($this->user_model->update_data(
				$this->input->post('user'),
				array('newsletter' => $this->input->post('preference')))){
				$this->session->set_flashdata('success_msg','Success, your prefence has been updated');
			}else{
				$this->session->set_flashdata('error_msg','Error, There was an error updating your preference, please try again later');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

    public function order_track(){
        $page_data['page'] = 'order_track';
        $page_data['title'] = "Order Tracking";
        $array = array('time' =>'' , 'is_limit' => false);
        $id = $this->session->userdata('logged_id');
        $page_data['orders'] = $this->user->get_my_orders( $id , $array );
        $page_data['profile'] = $this->user->get_profile( $id );
        $this->load->view('account/order_track', $page_data);
    }

}
