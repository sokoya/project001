<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends MY_Controller {

	public function __construct(){
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
        $page_data['page'] = 'reset_password';
        $page_data['description'] = DESCRIPTION;
	    if( $this->input->post() ){
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean|valid_email');
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error_msg', '<strong>Please fix the error</strong> <br />' . validation_errors());
            }else{
                $email = $this->input->post('email');
                $user = $this->user->get_row('users', 'id, first_name', "email = '$email'");
                if( $user ){
                    $data['code'] = $code = $this->user->generate_code( 'users', 'code');
                    if( $this->user->update_data("{$user->id}", $data, 'users')) {
                        $this->load->model('email_model', 'email');
                        $email_array = array(
                            'email' => $email,
                            'reset_link' => base_url('resetpassword/activate?token='.$code),
                            'recipent' => 'Hello '
                        );
                        try {
                            $u = $this->email->reset_password( $email_array);
                            $this->session->set_flashdata('success_msg', "Reset mail has been sent to <strong>" . $email . "</strong> please click on the link in your email to reset your password.");
                        } catch (Exception $e) {
                            $error_action = array(
                                'error_action' => 'Create controller - Welcome mail',
                                'error_message' => 'There was an error sending an email - ' .$e
                            );
                        }
                        redirect('login');
                        unset($email_array); unset($error_action);
                    } else {
                        $this->session->set_flashdata('error_msg', "There was an error updating your account, please try again, and if persist, contact support.");
                        redirect('resetpassword');
                    }
                }else{
                    $this->session->set_flashdata('error_msg', "Sorry we can't find your email in our record. Create an account or contact our support team.");
                    redirect('create');
                }
            }
        }
		$this->load->view('landing/resetpassword',$page_data);
	}

    public function activate(){
        $token = cleanit($this->input->get('token'));
        if( $token && !empty( $token )){
            $user = $this->user->get_row('users', 'id,email', array('code' => $token));
            if( $user ){
                $this->session->set_userdata('id', $user->id);
                $this->session->set_userdata('email', $user->email);
                $this->session->userdata('success_msg', 'Token confirmed! Please set a new password');
                redirect('resetpassword/reset_password');
            }else{
                $this->session->userdata('error_msg', 'Incorrect recovery token or has expired, please contact support team for more assistance.');
            }
        }
        redirect('resetpassword');
    }

    public function reset_password(){
        $page_data['title'] = 'Change Password';
        $page_data['page'] = 'reset_password';
        $page_data['description'] = DESCRIPTION;
        if( !$this->session->userdata('id')) redirect('resetpassword');
        if( $this->input->post() ){
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error_msg', '<strong>Please fix the error</strong> <br />' . validation_errors());
            }else{
                $id = $this->session->userdata('id');
                $email = $this->session->userdata('email');
                $password = cleanit($this->input->post('password'));
                if($this->user->change_password($password, $id, 'users')){
                    // delete the token
                    $this->user->update_data($id, array('code' => ''), 'users' );
                    $this->session->unset_userdata('id');
                    $this->session->unset_userdata('email');

                    $user_data = array(
                        'logged_id' => $id,
                        'email' => $email,
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    $this->user->last_login();
                    $this->session->userdata('success_msg', 'Password changed successfully, and you have been logged in.');
                    $from = $this->session->userdata('referred_from');
                    !empty( $from ) ? redirect( $from ) : redirect('account');
                }
                $this->session->userdata('error_msg', 'Error updating your new password, please contact support.');
            }
            redirect('resetpassword/reset_password');
        }else{
            $this->load->view('landing/reset_password_change', $page_data);
        }
    }

    // Auto login te user
    public function autoLogin($email = '')
    {
        $user = $this->user_model->get_email(urldecode($email));

        if ($user) {
            $user_data = array(
                'user_id' => $user->id,
                'email' => $user->email,
                'logged_in' => true
            );

            $this->session->set_userdata($user_data);
            $this->user_model->last_login();
            $this->session->set_flashdata('success_msg','Congrats! Your account has been activated, welcome to your dashboard');
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error_msg', 'Incorrect activation link, please contact our support team for more assistance.');
            redirect('register');
        }
    }
	
}
