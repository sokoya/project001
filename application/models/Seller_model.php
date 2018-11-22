<?php

Class Seller_model extends CI_Model{

    // Insert data
    function insert_data($table = 'users', $data = array() ){
        try {
            $this->db->insert($table, $data);
            $result = $this->db->insert_id();
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return $result;
    }

	// Login Customer
	function login($data = array(), $table_name = 'users'){
		if(!empty($data)) {
            $this->db->where('email', $data['email']);
            if ($this->db->get($table_name)->row()){
                $this->db->where('email',$data['email']);
                $salt = $this->db->get($table_name)->row()->salt;
                if ($salt) {
                    $password = shaPassword($data['password'], $salt);
                    $this->db->where('email', cleanit($data['email']));
                    $this->db->where('password', $password);
                    $result = $this->db->get('users');
                    if ($result->num_rows() == 1) {
                    	$c_update = array('last_login' => get_now(), 'ip' => $_SERVER['REMOTE_ADDR'] );
                    	$this->db->where('email', $data['email']);
                    	$this->db->update($table_name, $c_update);
                        return $result->row();
                    }
                }
            }
        }
        return false;
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
        }
        return $result;
    }

    // Update table
    function update_data( $access , $data = array(), $table_name = 'sellers'){
        try{
            $this->db->where($access);
            $result = $this->db->update( $table_name, $data );
        }catch (Exception $e){
            $result = $e->getMessage();
        }
        return $result;
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
        $this->db->where('id', $access);
        return $this->db->update($table, $data);
    }

    /**
     * @param $access : id
     * @param $details : string of data you only want to retrieve
     * @return mixed
     */
    function get_profile_details($access, $details = "*"){
        $this->db->select($details);
        $this->db->where('id', $access);
        return $this->db->get('users')->row();
    }
    /**
     * @param $access : id
     * @param $details : Get all login user  profile details
     * @return mixed
     */
    function get_profile( $access ){
        $query = "SELECT * FROM users u 
                LEFT JOIN sellers s ON (u.id = s.uid)
                WHERE u.id = $access";
        return $this->db->query($query)->row();
    }

    /**
     * @param $access : id
     * @param $details : Get all login user  profile details
     * @return mixed
     */
    function get_seller_status( $access ){
        $this->db->select("is_seller,first_name,last_name");
        $this->db->where('id', $access);
        return $this->db->get('users')->row();
    }



    function get_product($id, $status = ''){
        $query = "SELECT p.product_name, p.id, p.sku, p.created_on, p.product_status, AVG(v.sale_price) AS sale_price, AVG(v.discount_price) AS discount_price 
        FROM products AS p JOIN product_variation AS v ON v.product_id = p.id ";
        if( $status !== '' AND $status !== 'missing_images' ) { $query .= " AND p.product_status = '$status'";}
        // elseif( $status == 'missing_images') { $query .=  JOIN product_gallery AS g }
        $query .= " WHERE p.seller_id = $id GROUP BY p.id ";
        $output = $this->db->query( $query )->result_array();
        return $output;
    }

    /**
     * @param $id
     * @param $label
     * @return DB_result_array
     */


    function get_main_categories(){
        $this->db->select('id, name');
        $this->db->where('pid', 0);
        return $this->db->get('categories')->result();
    }

    /**
     * @param $id
     * @param $label
     * @return DB_result_array
     */

    function get_category_children( $pid ){
        $this->db->select('id, name');
        $this->db->where('pid', $pid);
        return $this->db->get('categories')->result();
    }

    // Function to confirm if the category has a child
    function has_child( $id ){
        $this->db->where('pid', $id);
        if( $this->db->get('categories')->num_rows() > 0 ){
            return true;
        }else{
            return false;
        }
    }

    /*
    *Function to get the parent category of a particular category
    *Called the parent_recurssive
    */
    function parent_slug_top( $id ){
        // Select category
        $GLOBALS['array_variable'] = array();
        $select_category = "SELECT pid, slug FROM categories WHERE id = {$id}";
        $result = $this->db->query($select_category);
        if( $result->num_rows() >= 1 ){
            $pid = $result->row()->pid;
            $this->parent_recurssive( $pid );
            $array = array_filter($GLOBALS['array_variable']);
            $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
            $new_array = array();
            foreach( $it as $v ){ array_push( $new_array, $v); }
            array_push( $new_array, $id ); // Lets push its own ID also
            return $new_array;
        }else{
            return $GLOBALS['array_variable'];
        }

    }

    /*
        Return an object (name, slug, description, specifications) of all the parent of a category
    */
    function get_parent_details( $id ){
        $array = $this->parent_slug_top( $id );
        return $this->db->query("SELECT name, slug, description, specifications FROM categories WHERE id IN ('".implode("','",$array)."')")->result();
    }


    /*
    *Called by the parent_slug top, helps to generate the parent id
    */
    function parent_recurssive( $pid ){
        $category_pid = $pid;
        $total_categories = $this->db->get('categories')->result_array();
        $count = count( $total_categories );

        $data = array();
        for ($i=0; $i < $count; $i++) { 
            if( $total_categories[$i]['id'] == $category_pid ){
                array_push( $data , $total_categories[$i]['pid'] );
            }
        }
        array_push( $GLOBALS['array_variable'], $data);
        foreach ($data as $key => $value) {
            $this->parent_recurssive($value);
        }
    }


    // Get a slpecific category id by its slug
    function category_id( $slug ){
        $query = "SELECT id FROM categories WHERE slug = ? OR name = ?";
        return $this->db->query( $query, array($slug, $slug));
    }


    /**
     * @param $table
     * @return string
     */
    function generate_code($table = 'products'){
        do {
            $number = random_string('nozero', 6);
            $this->db->where('sku = ', $number);
            $this->db->from($table);
            $count = $this->db->count_all_results();
        } while ($count >= 1);
            return $number;
    }


    /**
     * Confirm if the person accessing thr product is the owner
     * @param $user_id|product_id
     * @return num_rows
     */
    
    function is_product_owner( $uid ='', $pid = ""){
        $this->db->where('seller_id', $uid);
        $this->db->where('id', $pid);
        return $this->db->get('products')->num_rows();
    }

    /**
     * @param $name - productsubcategory
     * @return CI_DB_result_array
     */

    function get_specifications( $spec_id ){

        $this->db->select('spec_name,options,multiple_options,description');
        $this->db->where('id', $spec_id);
        $result = $this->db->get('specifications')->row();
        return $result;
    }


    /**
     * @param $oroduct_id
     * @return CI_DB_result_array
     */

    function get_product_gallery( $id ){
        $this->db->select('image_name,featured_image');
        $this->db->where('product_id', $id);
        return $this->db->get('product_gallery')->result();
    }

    /**
     * @param $productid
     * @return CI_DB_result_array
     */
    function get_orders( $id = '', $status= '' ){
        $query = "SELECT p.product_name,p.id pid, p.created_on created_on, o.order_date,o.id orid, g.image_name, o.customer_name, o.qty,o.amount, o.product_desc, o.status
                FROM products p LEFT JOIN orders o ON (p.id = o.product_id)
                LEFT JOIN product_gallery g ON (g.product_id = p.id AND g.featured_image = 1)
                WHERE o.seller_id = $id";
                // AND o.status = ????
        return $this->db->query($query)->result();
    }


    /**
     * @param $sid
     * @return CI_DB_int
     */

    function get_unread_message($sid){
        $this->db->where('seller_id', $sid);
        $this->db->where('is_read', 0);
        return $this->db->get('sellers_notification_message')->num_rows();

    }

    function get_message($sid = '', $type = 'all', $id = ''){
        if( $type == 'all' ){
            $this->db->where('seller_id', $sid);
            $this->db->order_by('created_on', 'ASC');
            return $this->db->get('sellers_notification_message');
        }else{
            $this->db->where('seller_id', $sid);
            $this->db->where('id', $id);
            if( $this->db->update( 'sellers_notification_message', array('is_read' => 1) ) ){
                $this->db->select('title,content,created_on');
                $this->db->where('seller_id', $sid);
                $this->db->where('id', $id);
                return $this->db->get('sellers_notification_message')->row_array();
            }
        }
    }
    // Get row
    // Get a row of a paticular table
    // Return CI_row
    function get_row( $table_name, $select ='', $condition = '' ){
        if( $select != '' ){
            $this->db->select($select);
        }
        if( !empty( $condition ) ){
            $this->db->where( $condition );
        }
        return $this->db->get( $table_name )->row();
    }
    /**
     * @param $table_name
     * @param array $condition
     * @return array
     */
    function get_results($table_name = '', $select = '' , $condition = '' ){
        if( $select != '' ){
            $this->db->select( $select );
        }
        if( !empty( $condition) ){
            $this->db->where( $condition );
        }
        return $this->db->get( $table_name )->result();
    }

    /**
     * Run a general SQL
     * @param $query
     * @return mixed
     */
    function run_sql($query ){
        return $this->db->query( $query );
    }





}
