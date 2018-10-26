<?php

Class User_model extends CI_Model{


    function get_profile( $id ='' , $table = 'users'){
        $this->db->where('id', $id );
        $this->db->or_where('email', $id);
        return $this->db->get($table)->row();
    }

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
                        return $result->row(0);
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
        $this->db->where('id',  $access);
        $this->db->or_where('email',$access);
        return $this->db->update($table, $data);
    }

    // Save and unsave property
    function favourite( $uid, $pid, $action, $table_name = 'favourite' ){
        if( $action == 'save'){
            try {
                if( $this->db->insert($table_name, array('uid' => $uid, 'product_id' => $pid))) 
                    return true;
            } catch (Exception $e) {
                $result = $e->getMessage();
            }
            return $result;
        }else{
            $this->db->where('uid', $uid);
            $this->db->where('product_id', $pid);
            return $this->db->delete($table_name);
        }
    }

    // get all wishlist products
    function get_saved_items( $id ){
        $query = $this->db->query("SELECT p.id, p.product_name, p.product_status, v.discount_price, v.sale_price,v.quantity, g.image_name, f.id as fav_id, f.date_saved
            FROM products p
            JOIN (SELECT variation.sale_price AS sale_price, variation.discount_price AS discount_price, variation.product_id , SUM(variation.quantity) AS quantity FROM product_variation variation GROUP BY variation.product_id) AS v ON( v.product_id = p.id)
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )
            JOIN favourite AS f ON (f.product_id = p.id )
            WHERE f.uid = $id GROUP BY p.id ORDER BY f.date_saved")->result();
        return $query; 
    }

    function get_my_orders( $id ){
        $query = $this->db->query("SELECT p.id as pid, p.name, g.image_name, o.order_date, o.order_code, o.status, o.product_desc
        FROM orders o
        JOIN (SELECT prod.id AS id, prod.product_name AS name FROM products AS prod) AS p ON (p.id = o.product_id)
        JOIN product_gallery AS g ON (o.product_id = g.product_id AND g.featured_image = 1 )
        WHERE buyer_id = $id ORDER BY o.id DESC LIMIT 10")->result();
        return $query; 
    }

    
}
