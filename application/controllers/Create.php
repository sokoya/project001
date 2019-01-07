<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends MY_Controller{

    public function __construct(){
        // @todo
        // Check if the user is already logged in
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('user_model', 'user');
        
        if( $this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            $from = $this->session->userdata('referred_from');
            if( !empty( $from ) ) redirect($this->session->userdata('referred_from'));
            redirect(base_url());
        }        
    }

    public function index(){
        $page_data['title'] = "Create Account";
        $page_data['page'] = 'create';
        $this->load->view('landing/create', $page_data);
    }

    /*
     * @Incoming : accepts the signup POST paramters
     * result : string (success | error )
     * */
    function process(){  
        // $this->output->enable_profiler(TRUE);    
        $this->form_validation->set_rules('signupfirstname', 'First Name','trim|required|xss_clean');
        $this->form_validation->set_rules('signuplastname', 'Last Name','trim|required|xss_clean');
        $this->form_validation->set_rules('signupemail', 'Email Address','trim|required|xss_clean|valid_email|is_unique[users.email]',array('is_unique' => 'Sorry! This %s has already been registered!'));
        // $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_rules('signuppassword', 'Password','trim|required|xss_clean|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('signuprepeatpassword', 'Password','trim|required|xss_clean|min_length[8]|max_length[15]|matches[signuppassword]');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error_msg','<strong>There was an error with the account creation. Please fix the following</strong> <br />' . validation_errors());
            $page_data['title'] = "Create Account";
            $page_data['page'] = 'create';
            $this->load->view('landing/create', $page_data);
        }else{
            $salt = salt(50);
            $data = array(
                'first_name' => $this->input->post('signupfirstname'),
                'last_name' => $this->input->post('signuplastname'),
                'email' => $this->input->post('signupemail'),
                'salt' => $salt,
                'password' => shaPassword($this->input->post('signuppassword'), $salt),
                'ip' => $_SERVER['REMOTE_ADDR'],
                'date_registered' => get_now(),
                'last_login' => get_now(),
                'is_seller' => 'false'
            );

            $user_id = $this->user->create_account($data, 'users');
            if( !is_numeric($user_id) ) {
                $this->session->set_flashdata('error_msg','Sorry! There was an error creating your account.' . $user_id);
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $this->load->model('email_model','email');
                $email_array = array(
                    'email' => $data['email'],
                    'recipent' => 'Dear '. $data['first_name'] . ' ' . $data['last_name']
                );

                try {
                    $this->email->welcome_user( $email_array );
                } catch (Exception $e) {
                    $error_action = array(
                        'error_action' => 'Create controller - Welcome mail',
                        'error_message' => $e->getMessage()
                    );
                    $this->email->insert_data('error_logs', $error_action);
                }
                $data = array(
                    'email' => $this->input->post('signupemail'),
                    'password' => $this->input->post('signuppassword')
                );
                $user = $this->user->login($data);
                $session_data = array('logged_in' => true, 'logged_id' => $user->id, 'is_seller' => 'false', 'email' => $this->input->post('email'));
                $this->session->set_userdata($session_data);
                unset($session_data);unset($data); unset($error_action);
                $this->session->set_flashdata('success_msg','Account created and logged in successfully!');
                // To ursher them to where they are coming from...
                redirect(base_url());               
            }
        } 
    }
}


// User was successfully created and the user needs to verify their account.
// Send registered an email informing them how to validate their account.
// $company_name = $this->config->item('company_name');
// $company_email_address = $this->config->item('company_email');

// $this->load->library('email');
// $this->email->from($company_email_address, $company_name);
// $this->email->to($post_email_address);
// $this->email->subject($company_name.' Registration');
// $message = 'Welcome to '.$company_name.','."\r\n \r\n";
// $message .= 'Thank you for joining the '.$company_name.' Team. ';
// $message .= 'We have listed your registration details below. Make sure you save this email.';
// $message .= 'To verify this account please click the following link.'."\r\n \r\n";
// $message .= anchor('register/verify/'.$registration_key, 'Click Here To Activate Your Account', '')."\r\n";
// $message .= 'Please verfiy your account within 2 hours, otherwise your registration will become invalid and you will have to register again.'."\r\n \r\n";
// $message .= 'Your email address: '.$post_email_address."\r\n";
// $message .= 'Your Password: '.$post_password."\r\n \r\n";
// $message .= 'Enjoy your stay here at '.$company_name.'.'."\r\n \r\n";
// $message .= 'The '.$company_name.' Team';
// $this->email->message($message);
// $this->email->send();

