<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller{

    public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        // $this->session->set_userdata('referred_from', current_url());
        parent::__construct();
        $this->load->model('customer_model', 'customer');
        $this->load->helper('url'); 
        if( $this->session->userdata('logged_in')){
            die();
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
        $this->form_validation->set_rules('signupemail', 'Email Address','trim|required|xss_clean|valid_email|is_unique[customers.email]');
        $this->form_validation->set_rules('signuppassword', 'Password','trim|required|xss_clean|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('signuprepeatpassword', 'Password','trim|required|xss_clean|min_length[8]|max_length[15]|matches[signuppassword]');
        $output_array['status'] = 'error';
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error_msg','There was an error with the account creation. Please fix the following <br />' . validation_errors());
            redirect('create');
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
                'last_login' => get_now()
            );

            $customer_id = $this->customer->create_account($data, 'customers');
            if( !is_numeric($customer_id) ) {
                // check if site is live
                // if( $lang['site_state'] == 'development' ) {
                //     $output_array['message'] = $customer_id;
                // }
                $this->session->set_flashdata('error_msg','Sorry! There was an error creating your account.' . $customer_id);
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                // @TODO
                // Congrats we have a new registered customer
                // Add customer session
                // Send a Welcoming Mail to the user
                // Check if he was trying to check out and ursher them there
                // Any other action to perform. 
                $data = array(
                    'email' => $this->input->post('signupemail'),
                    'password' => $this->input->post('signuppassword')
                );
                $id = $this->customer->login($data);
                $session_data = array('logged_in' => true, 'logged_id' => $id);
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

