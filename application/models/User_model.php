<?php

Class User_model extends CI_Model{

	// Login Customer
	function login($data = array(), $table_name = 'users'){
		if(!empty($data)) {
            $email = cleanit($data['email']);
            $this->db->where('email', $data['email']);
            if ($this->db->get($table_name)->row()){
                $this->db->where('email',$data['email']);
                $salt = $this->db->get($table_name)->row()->salt;
                if ($salt) {
                    $password = shaPassword($data['password'], $salt);
                    $this->db->where('email', $data['email']);
                    $this->db->where('password', $password);
                    $result = $this->db->get('users');
                    if ($result->num_rows() == 1) {
                    	$c_update = array('last_login' => get_now(), 'ip' => $_SERVER['REMOTE_ADDR'] );
                    	$this->db->where('email', $data['email']);
                    	$this->db->update($table_name, $c_update);
                        return $result->row(0)->id;
                    } else {
                        return false;
                    }
                }
            }
        }
	}

	// Create An Account for user

	function create_account( $data = array(), $table_name = 'users'){
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

    // Update table
    function update_data( $access = '' , $data = array(), $table_name = 'users'){
        $this->db->where('id', $access);
        $this->db->or_where('email', $access);
        return $this->db->update( $table_name, $data );
    }

    // check if the password is correct

    function cur_pass_match($password = null, $access = '', $table = 'users'){
        if ($password) {
            $this->db->where('id', $access);
            $this->db->or_where('email', $access);
            $salt = $this->db->get('users')->row()->salt;
            $this->db->where('id', $access);
            $this->db->or_where('email', $access);
            $curpassword = $this->db->get($table)->row()->password;
            $password = shaPassword($password, $salt);
            if ($password === $curpassword) {
                return true;
            } else {
                return false;
            }
        }
    }

    // Change Password 
    function change_password($password, $access = '', $table = 'users'){
        if($access == '') $access = $this->session->userdata('logged_id');
        $salt = salt(50);
        $password = shaPassword($password, $salt);
        $data = array(
            'password' => $password,
            'salt' => $salt
        );
        $this->db->where(['id'=> $access]);
        $this->db->or_where(['email'=> $access]);
        return $this->db->update($table, $data);
    }

}

?>