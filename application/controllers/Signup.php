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
        $this->form_validation->set_rules('email_address', 'Email Address','trim|required|xss_clean|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password','trim|required|xss_clean|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE) {
            $output_array['status'] = 'error';
            $output_array['message'] = 'There was an error with the account creation. Please fix the following <pre>' . $this->form_validation->error_array() . '</pre>';
        }else{
            $email = $this->input->post('email_address');
            $post_password = $this->input->post('password');
            $registration_date = gmdate('Y-m-d H:i:s', time());
            $hashed_password = $this->user->generate_password_hash($post_password);
            $registration_key = sha1($registration_date . ';;' . $post_email_address . ';;' . $hashed_password[0]);

            // Develop the array of post data for sending to the model.
            $data = array(
                'email' => $this->input->post('email_address'),
                'password' => $hashed_password[0],
                'password_hash' => $hashed_password[1],
                'registration_date' => $registration_date,
                'registration_key' => $registration_key
            );

            $user_id = $this->user->create_user($data);
        }
    }
}

