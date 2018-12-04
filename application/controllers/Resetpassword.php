<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

	public function __construct(){
        // @todo
        // Check if the user is already logged in
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        if( $this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            $from = $this->session->userdata('referred_from');
            if( !empty( $from ) ) redirect( $from );
            redirect(base_url());
        }        
    }

	public function index(){
		$page_data['title'] = 'Reset Password';
        $page_data['page'] = 'register_password';
		$this->load->view('landing/resetpassword',$page_data);
	}

	function process(){
		if( $this->input->post() ){
			$this->form_validation->set_rules('resetemail','Email Address', 'trim|required|min_length[3]|valid_email');
			$email = cleanit($this->input->post('email'));
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_msg', validation_errors());
			} else {
				// is email existing
				$activation_token = generate_token(25);
				$where = array('email' => $email);
				$user = $this->user->get_row('users', $where);

				$data = array(
					'recover_code' => $activation_token
				);

				$update_token = $this->user->update_data($user->id,$data,'users');

				if ($user->num_rows() > 0 && $update_token) {
					if ($this->user->recover_email($email, $user->row()->name, $activation_token)) 
						$this->session->set_flashdata('success_msg','A recovery link has been sent to your email... Please check your email for the recovery link to complete the process!');
				} else {
					$this->session->set_flashdata('error_msg','Email doest not exist in our records');
				}
				
			}
			redirect('resetpassword');
		}
	}
	
}
