<?php

Class User_model extends CI_Model
{

    /**
     * @param string $id
     * @param string $table
     * @return mixed
     */
    function get_profile($id = '', $table = 'users')
    {
        $this->db->where('id', $id);
        $this->db->or_where('email', $id);
        return $this->db->get($table)->row();
    }

    /**
     * @param array $data
     * @param string $table_name
     * @return bool|mixed
     */
    function login($data = array(), $table_name = 'users')
    {
        if (!empty($data)) {
            $email = cleanit($data['email']);
            $this->db->where('email', $data['email']);
            if ($this->db->get($table_name)->row()) {
                $this->db->where('email', $data['email']);
                $salt = $this->db->get($table_name)->row()->salt;
                if ($salt) {
                    $password = shaPassword($data['password'], $salt);
                    $this->db->where('email', $data['email']);
                    $this->db->where('password', $password);
                    $result = $this->db->get('users');
                    if ($result->num_rows() == 1) {
                        $c_update = array('last_login' => get_now(), 'ip' => $_SERVER['REMOTE_ADDR']);
                        $this->db->where('email', $data['email']);
                        $this->db->update($table_name, $c_update);
                        return $result->row();
                    } else {
                        return false;
                    }
                }
            }
        }
    }


    public function last_login()
    {
        if ($this->session->userdata('logged_id')) {
            $array = array(
                'last_login' => get_now(),
                'ip' => $_SERVER['REMOTE_ADDR']
            );
            $this->db->set($array);
            $this->db->where('id', $this->session->userdata('logged_id'));
            $this->db->update('users');
        }
    }


    public function login_user($email, $password)
    {
        if ($email && $password) {
            $email = cleanit($email);
            $this->db->where(array('email' => $email));
            if ($this->db->get('users')->row()) {
                $this->db->where(array('email' => $email));
                $salt = $this->db->get('users')->row()->salt;
                if ($salt) {
                    $password = shaPassword($password, $salt);
                    $this->db->where('email', $email);
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

    /**
     * @param string $where
     * @param $bid
     * @return bool
     */
    function update_billing_address($where = '', $aid, $weights = array(), $billing_id = '')
    {
        $this->db->where($where);
        $this->db->set('primary_address', 0, false);
        if ($this->db->update('billing_address')) {
            $this->db->where('id', $billing_id);
            $this->db->update('billing_address', array('primary_address' => 1));
            if( !empty($weights) ){

                $total_weight_value = 0;
                $count = count( $weights );
                for( $i = 0 ; $i < $count; $i++){
                    $this->db->where('aid', $aid);
                    $this->db->where('weight', $weights[$i]);
                    $amount = $this->db->get('delivery_amount')->row();
                    if( $amount ){
                        $total_weight_value = $amount->amount;
                    }
                }
                return $total_weight_value;
            }
            return false;
        }
        return false;
    }

    /**
     * @param null $password
     * @param string $access
     * @param string $table
     * @return bool
     */
    function cur_pass_match($password = null, $access = '', $table = 'users')
    {
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

    /**
     * @param $password
     * @param string $access
     * @param string $table
     * @return bool
     */
    function change_password($password, $access = '', $table = 'users')
    {
        if ($access == '') $access = $this->session->userdata('logged_id');
        $salt = salt(50);
        $password = shaPassword($password, $salt);
        $data = array(
            'password' => $password,
            'salt' => $salt
        );
        $this->db->where('id', $access);
        $this->db->or_where('email', $access);
        return $this->db->update($table, $data);
    }

    function favourite_action($pid)
    {
        $uid = $this->session->userdata('logged_id');
        $this->db->select('id');
        $this->db->where('product_id', $pid);
        $this->db->where('uid', $uid);
        $result = $this->db->get('favourite')->row();
        if ($result) {
            $this->db->where('id', $result->id);
            if ($this->db->delete('favourite')) {
                return array('status' => 'success', 'action' => 'remove', 'msg' => 'The product has been removed from your wishlist');
            } else {
                return array('status' => 'error', 'msg' => 'There was an error removing the product from your wishlist');
            }
        } else {
            $data = array('uid' => $uid, 'product_id' => $pid, 'date_saved' => get_now());
            if ($this->create_account($data, 'favourite')) {
                return array('status' => 'success', 'action' => 'save', 'msg' => 'The product has been added to your wishlist');
            } else {
                return array('status' => 'error', 'msg' => 'There was an error adding the product to your wishlist');
            }
        }
    }

    /**
     * @param array $data
     * @param string $table_name
     * @return int|string
     */
    function create_account($data = array(), $table_name = 'users')
    {
        $result = '';
        if (!empty($data)) {
            try {
                $this->db->insert($table_name, $data);
                $result = $this->db->insert_id();
            } catch (Exception $e) {
                $result = $e->getMessage();
            }
            return $result;
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    function get_saved_items($id, $array = array())
    {
        $sql = "SELECT p.id, p.product_name, p.product_status, v.discount_price, v.sale_price,v.quantity, v.start_date,v.end_date, g.image_name, f.id as fav_id, f.date_saved
            FROM products p
            JOIN (SELECT variation.sale_price AS sale_price, variation.discount_price AS discount_price, variation.start_date,variation.end_date, variation.product_id , SUM(variation.quantity) AS quantity FROM product_variation variation GROUP BY variation.product_id) AS v ON( v.product_id = p.id)
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )
            JOIN favourite AS f ON (f.product_id = p.id )
            WHERE f.uid = $id ";
        $limit = $array['is_limit'];
        if ($limit == true) {
            $sql .= " GROUP BY p.id ORDER BY f.date_saved LIMIT " . $array['offset'] . "," . $array['limit'];
        } else {
            $sql .= ' GROUP BY p.id ORDER BY f.date_saved';
        }
        $query = $this->db->query($sql)->result();
        return $query;
    }

    /**
     * @param $id
     * @return mixed
     */
    function get_my_order_status($id, $order_code)
    {
        $query = $this->db->query("SELECT p.id as pid, p.name, g.image_name, o.order_date, pay.name payment_method,o.responseCode, o.status, o.active_status, o.qty,o.amount, o.billing_address_id, o.pickup_location_id
        FROM orders o
        JOIN (SELECT prod.id AS id, prod.product_name AS name FROM products AS prod) AS p ON (p.id = o.product_id)
        JOIN product_gallery AS g ON (o.product_id = g.product_id AND g.featured_image = 1 )
        LEFT JOIN payment_methods pay ON (pay.id = o.payment_method)
        WHERE o.buyer_id = ? AND o.order_code = ? GROUP BY o.product_id ORDER BY o.id DESC", array($id, $order_code))->result();
        return $query;
    }

    function get_my_orders($id, $array = array())
    {
        $query = "SELECT order_code, SUM(amount) as amount, SUM(qty) as qty, order_date FROM orders WHERE buyer_id = $id";
        if ($array['time'] != '') {
            switch ($array['time']) {
                case 'last-6-month':
                    $query .= " AND order_date > DATE_SUB(NOW(), INTERVAL 6 MONTH) ";
                    break;
                case 'this-year':
                    $query .= " AND order_date > DATE_SUB(NOW(), INTERVAL 12 MONTH) ";
                    break;
                case 'previous-year':
                    $query .= " AND order_date < DATE_SUB(NOW(), INTERVAL 12 MONTH) ";
                    break;
                default:
                    $query .= '';
                    break;
            }
        } else {
            $query .= " AND MONTH(order_date) = EXTRACT(month FROM (NOW())) AND year(order_date) = EXTRACT(year FROM (NOW())) ";
        }
        $limit = $array['is_limit'];
        if ($limit == true) {
            $query .= " GROUP BY order_code ORDER BY id DESC LIMIT " . $array['offset'] . "," . $array['limit'];
        } else {
            $query .= ' GROUP BY order_code ORDER BY id DESC';
        }
        return $this->db->query($query, array($id))->result();
    }

    /*
     * Get users orders
     * */

    function get_states()
    {
        return $this->db->get('states')->result_array();
    }

    // Get states

    function get_area($sid = ''){
        $this->db->select('id,name');
        $this->db->where('sid', $sid);
        return $this->db->get('area')->result_array();
    }

    // Get the user area

    function generate_code($table = 'users', $label)
    {
        do {
            $number = generate_token(20);
            $this->db->where($label, $number);
            $this->db->from($table);
            $count = $this->db->count_all_results();
        } while ($count >= 1);
        return $number;
    }

    function recover_email()
    {
    }

    function get_user_billing_address($id)
    {
        return $this->db->query("SELECT b.*, s.name state, a.name area, a.id area_id FROM billing_address b LEFT JOIN states s ON (s.id = b.sid) LEFT JOIN area a ON (a.id = b.aid) WHERE b.uid = $id")->result();
    }

    function is_address_set($id)
    {
        $this->db->where('uid', $id);
        $this->db->where('primary_address', 1);
        if ($this->db->get('billing_address')->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /*
    * @param id = user id
    * @return CI_result
    */

    /**
     * @param string $uid
     * @param $address_id
     * @return array
     */
    function get_single_address($uid = '', $address_id)
    {
        if ($uid != '') $this->db->where('uid', $uid);
        $this->db->where('id', $address_id);
        return $this->db->get('billing_address')->result_array();
    }

    function get_pickup_address(){
        $this->db->where('enable', 1);
        return $this->db->get('pickup_address')->result();
    }

    /**
     * @param $id
     * @return string
     */
    function get_default_address_area($id)
    {
        $select = "SELECT aid FROM billing_address b WHERE b.primary_address = 1 AND b.uid = {$id}";
        $result = $this->db->query($select);
        if ($result->row()) {
            return $result->row()->aid;
        } else {
            return '';
        }
    }

    function recently_viewed($pid, $user_id)
    {
        // Does product exist in the record
        $products = array();
        $user = $this->get_row('recently_viewed', 'id,product_ids', "user_id = $user_id");
        if ($user) {
            $product_ids = json_decode($user->product_ids);
            if (!in_array($pid, $product_ids)) {
                array_push($product_ids, $pid);
                $product_ids = json_encode($product_ids);
                $this->update_data($user->id, array('product_ids' => $product_ids), 'recently_viewed');
            }
        } else {
            $products[] = $pid;
            $data = array(
                'user_id' => $user_id,
                'product_ids' => json_encode($products),
                'viewed_date' => get_now()
            );
            $this->create_account($data, 'recently_viewed');
        }
    }

    /**
     * @param string $table_name
     * @param $where
     * @return mixed
     */
    function get_row($table_name = 'users', $select, $where)
    {
        $this->db->select($select);
        $this->db->where($where);
        return $this->db->get($table_name)->row();
    }

    /*
     * Add or update the user recently viewed
     * */

    /**
     * @param string $access
     * @param array $data
     * @param string $table_name
     * @return bool
     */
    function update_data($access = '', $data = array(), $table_name = 'users')
    {
        $this->db->where('id', $access);
        return $this->db->update($table_name, $data);
    }

    function toPlainArray($array)
    {
        $output = '';
        foreach ($array as $arr) {
            $output .= $arr . ", ";
        }
        return (array)substr($output, 0, -2);
    }

    /*
     * Get recently viewed products if found else return false based on the user
     * excludes contains the present product id and probably the get_also_likes product_id
     * */
    function get_recently_viewed($user_id, $excludes = array())
    {
        $this->db->where('user_id', $user_id);
        $ids = $this->db->get('recently_viewed')->row()->product_ids;
        if ($ids) {
            $ids = json_decode($ids, true);
            if (!empty($excludes)) {
                foreach ($excludes as $exclude => $value) {
                    if (($key = array_search($value, $ids)) !== false) {
                        unset($ids[$key]);
                    }
                }
            }
            $select_query = "SELECT p.id, p.product_name,p.views, v.sale_price, v.discount_price, v.start_date, v.end_date, SUM(v.quantity) as item_left, g.image_name
            FROM products p JOIN (SELECT var.product_id, var.discount_price,var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var
            WHERE var.quantity > 0 ORDER BY var.id) AS v ON (p.id = v.product_id) JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1)
            WHERE p.id IN ('" . implode("','", $ids) . "') GROUP BY p.id ORDER BY RAND() LIMIT 6 ";
            return $this->db->query($select_query)->result();
        } else {
            return false;
        }
    }

    /*
     * Recommended product:
     * Is user logged in? We sought base on last orders (payment made != 'success'), search ...*/
    function recommendedproducts( $user_id = '' ){
        if( $user_id != '' ){
            $select = "SELECT * FROM (SELECT p.id, p.product_name, v.sale_price, v.discount_price, v.start_date, v.end_date, SUM(v.quantity) as item_left, g.image_name
            FROM products p 
            JOIN (SELECT var.product_id, var.discount_price,var.sale_price, var.start_date, var.end_date, var.quantity 
            FROM product_variation var
            WHERE var.quantity > 0 ORDER BY var.id) AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1)
            WHERE EXISTS (select 1 from orders o where p.id = o.product_id AND buyer_id = {$user_id} AND payment_made != 'success') 
            GROUP BY p.id ORDER BY p.id DESC LIMIT 6 ) t WHERE t.product_name IS NOT NULL";
            return $this->db->query( $select )->result();
        }else{
            return '';
        }
    }

    /*
     * Get most recent order for invoice
     * */
    /*
   * Get most recent order for invoice
   * */
    function get_my_lastorders($order, $buyer_id)
    {
        $query = "SELECT p.id, p.product_name, o.seller_id, o.product_id, u.email selleremail, o.amount, o.pickup_location_id, o.billing_address_id, o.order_date, 
        o.delivery_charge, o.qty,o.product_variation_id, o.txnref, o.payRef, o.paymentDesc,
        v.variation, g.image_name, pay.name payment_method FROM orders o
        JOIN product_variation v ON (o.product_variation_id = v.id)
        JOIN products p ON (o.product_id = p.id) 
        JOIN product_gallery g ON (g.product_id = p.id AND g.featured_image = 1)
        JOIN users u ON (u.id = o.seller_id)
        JOIN payment_methods pay ON ( pay.id = o.payment_method)
        WHERE o.order_code = {$order} AND o.buyer_id = {$buyer_id}";
        return $this->db->query($query);
    }

    /*
     * Get just one single row of the last order to send SMS and mail
     * */
    function get_last_singleorder($order, $buyer_id)
    {
        $query = "SELECT o.amount,o.payRef, o.txnref, o.pickup_location_id, o.billing_address_id, p.name paymentname, o.order_date, o.payment_method,
        se.seller_phone, se.legal_company_name
        FROM orders o 
        LEFT JOIN payment_methods p ON (o.payment_method = p.id)
        LEFT JOIN sellers se ON (se.uid = o.seller_id)
        WHERE o.order_code = {$order} AND o.buyer_id = {$buyer_id} ORDER BY o.id DESC LIMIT 1";
        return $this->db->query($query)->row();
    }

    /*
     * Get all orders for this order_code and the seller id
     * For email purpose.
     * */

    /**
     * @param $order
     * @return array
     */
    function get_sellers_details($order)
    {
        $sellers = $this->get_sellers_by_code($order);
        $res = array();
        foreach ($sellers as $seller) {
            $res['email'] = $seller->email;
            $query = "SELECT o.product_id,o.qty, p.product_name, g.image_name FROM orders o JOIN products p ON(p.id = o.product_id)
            JOIN product_gallery g ON(g.product_id = o.product_id AND g.featured_image = 1 )
            WHERE o.seller_id = {$seller->seller_id} AND o.order_code = {$order}";
            $details = $this->db->query($query)->result();
            $x = 0;
            foreach ($details as $detail) {
                $res['products'][$x]['qty'] = $detail->qty;
                $res['products'][$x]['product_id'] = $detail->product_id;
                $res['products'][$x]['product_name'] = $detail->product_name;
                $res['products'][$x]['image_name'] = $detail->image_name;
                $x++;
            }
        }
        return $res;
    }

    /*
     * Generate the seller details */

    /**
     * @param $order
     * @return mixed
     */
    function get_sellers_by_code($order)
    {
        $query = "SELECT DISTINCT(o.seller_id), u.email FROM orders o JOIN users u ON (u.id = o.seller_id) WHERE order_code = {$order}";
        return $this->db->query($query)->result();
    }

    function auto_version($file = '')
    {
        if (!file_exists($file)):
            return $file;
        else:
            $mtime = filemtime($file);
            return base_url() . $file . '?' . $mtime;
        endif;
    }

    function get_shipping_type( $id , $type = 'delivery'){
        if( $type  == 'delivery'){
            $select = "SELECT b.first_name, b.last_name, b.phone, b.phone2, b.address, s.name state, a.name area FROM billing_address b
            LEFT JOIN states s ON (s.id = b.sid)
            LEFT JOIN area a ON (a.id = b.aid) WHERE b.id = {$id}";
            return $this->db->query( $select )->row();
        }else{
            // Pickup Location
            $select = "SELECT title, phones, emails, address FROM pickup_address WHERE id = {$id}";
            return $this->db->query( $select )->row();
        }
    }

}
