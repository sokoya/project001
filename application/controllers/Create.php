<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller{

    public function __construct(){
        // @todo
        // Check if the user is already logged in
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('user_model', 'user');
        
        if( $this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            if( !empty($this->session->userdata('referred_from')) ) redirect($this->session->userdata('referred_from'));
            redirect(base_url());
        }        
    }

    public function index(){
        $this->load->view('landing/create');
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
            $this->load->view('landing/create');
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
                // check if site is live
                // if( $lang['site_state'] == 'development' ) {
                //     $output_array['message'] = $user_id;
                // }
                $this->session->set_flashdata('error_msg','Sorry! There was an error creating your account.' . $user_id);
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                // @TODO
                // Congrats we have a new registered user
                // Add user session
                // Send a Welcoming Mail to the user
                // Check if he was trying to check out and ursher them there
                // Any other action to perform. 
                $data = array(
                    'email' => $this->input->post('signupemail'),
                    'password' => $this->input->post('signuppassword')
                );
                $user = $this->user->login($data);
                $session_data = array('logged_in' => true, 'logged_id' => $user->id, 'email', 'is_seller' => $user->is_seller, 'email' => $this->input->post('email'));
                $this->session->set_userdata($session_data);
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

