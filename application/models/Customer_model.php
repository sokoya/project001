<?php

Class Customer_model extends CI_Model{

	// Login Customer
	function login($email = '', $password = '', $table_name = 'customers'){
		if($email && $password) {
            $email = cleanit($email);
            $this->db->where(['email' => $email]);
            if ($this->db->get($table_name)->row()){
                $this->db->where(['email' => $email]);
                $salt = $this->db->get($table_name)->row()->salt;
                if ($salt) {
                    $password = shaPassword($password, $salt);
                    $this->db->where('email', $email
                    $this->db->where('password', $password);
                    $result = $this->db->get('users');
                    if ($result->num_rows() == 1) {
                        return $result->row(0)->id;
                    } else {
                        return false;
                    }
                }
            }
        }
	}

	// Create An Account for Customers

	function create_account( $data = array(), $table_name = 'customers'){
		$result = '';
		if(!empty($data)){
			try {
				$this->db->insert($table_name, $data);
				$result = $this->db->insert_id();
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}
	}

}