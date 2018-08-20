<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller{

    public function __construct(){
        // @todo
        // Check if the user is already loggedin
        // Also check where the user is coming from
        parent::__construct();
        $this->load->model('user_model', 'user');
    }
}

public function index(){
    $this->load->view('landing/login');
}

/*
 * @Incoming : accepts the signup POST paramters
 * result : string (success | error )
 * */

function process(){
        $this->form_validation->set_rules('signupfirstname', 'First Name','trim|required|xss_clean');
        $this->form_validation->set_rules('signuplastname', 'Last Name','trim|required|xss_clean');
        $this->form_validation->set_rules('signupemail', 'Email Address','trim|required|xss_clean|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('signuppassword', 'Password','trim|required|xss_clean|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('signuprepeatpassword', 'Password','trim|required|xss_clean|min_length[8]|max_length[15]|matches[signuppassword]');

        if ($this->form_validation->run() == FALSE) {
            $output_array['status'] = 'error';
            $output_array['message'] = 'There was an error with the account creation. Please fix the following <pre>' . $this->form_validation->error_array() . '</pre>';
        }else{
            $data = array(
                'email' => $this->input->post('signupemail'),
                'password' => $hashed_password[0],
                'password_hash' => $hashed_password[1],
                'registration_date' => get_now(),
                'registration_key' => $registration_key
            );
            $user_id = $this->user->create_user($data);
        }
    }
}



// public function register_user($register_data = null){



//         if($register_data) {



//             $register_data['salt'] = salt(50);



//             $register_data['pwd'] = shaPassword($register_data['pwd'], $register_data['salt']);







//             $this->db->insert('users', $register_data);



//             return true;



//         }



//     }



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

