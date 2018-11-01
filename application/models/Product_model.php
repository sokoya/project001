<?php

Class Product_model extends CI_Model{

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


    // Update table
    function update_data( $access = '' , $data = array(), $table_name = 'users'){
        $this->db->where('id', $access);
        $this->db->or_where('email', $access);
        return $this->db->update( $table_name, $data );
    }

    // Update table
    function product_update_data( $access = '' , $data = array(), $table_name = 'products'){
        $this->db->where('id', $access);
        return $this->db->update( $table_name, $data );
    }

    function get_product( $id = ''){
        return $this->db->query('SELECT p.*, u.first_name, u.last_name FROM products AS p LEFT JOIN users AS u ON (p.seller_id = u.id) WHERE p.id = ? ', $id )->row();
    }


    // function get_menu_categories(){
    //     $select = "SELECT root.root_category_id, root.icon, root.title, root.name AS root_name, cat.name AS category_name, GROUP_CONCAT(sub.name SEPARATOR ', ') AS sub_name
    //     FROM root_category root
    //     JOIN (SELECT GROUP_CONCAT(c.name SEPARATOR ', ') AS name, c.root_category_id AS id, c.category_id AS cid FROM category c GROUP BY cid) AS cat ON (cat.id = root.root_category_id)
    //     JOIN sub_category AS sub ON (cat.cid = sub.category_id)
    //     GROUP BY root.root_category_id";
    //     // var_dump( $this->db->query( $select )->result() );
    //     return $this->db->query( $select )->result();

    // }

    // To get the respective categories or sub
    function get_sub_categories( $str = ''){
        $output = '';
        //check in root_category
        $query = $this->db->query("SELECT root_category_id AS id FROM root_category WHERE MATCH(name) AGAINST('$str') LIMIT 1");
        if( $query->num_rows() == 1 ){
            $this->db->where('root_category_id', $query->row()->id );
            $this->db->limit(10);
            $output = $this->db->get('category')->result();
        }else{
            $query = $this->db->query("SELECT category_id AS id FROM category WHERE MATCH(name) AGAINST('$str') LIMIT 1");
            if( $query->num_rows() == 1 ){
                $this->db->where('category_id', $query->row()->id );
                $this->db->limit(10);
                $output = $this->db->get('sub_category')->result();
            }else{
                // just return all the categories
                $output = $this->db->query('SELECT name FROM root_category LIMIT 10')->result();

            }
        }
        return $output;
    }

    function category_description( $str = '' ){
        $result = '';
        $select = "SELECT description FROM root_category WHERE MATCH(name) AGAINST('$str') LIMIT 1";

        $result = $this->db->query($select)->row();
        if( count($result) ){
            return $result->description;
        }else{
            $select = "SELECT root_category_id FROM category WHERE MATCH(name) AGAINST('$str') LIMIT 1";
            $id = $this->db->query($select)->row();
            if( count( $id ) ){
                $this->db->select('description');
                $this->db->where('root_category_id', $id->root_category_id);
                $result = $this->db->get('root_category')->row()->description;
            }else{
                $select = "SELECT r.description FROM root_category r LEFT JOIN sub_category s ON (r.root_category_id = s.root_category_id ) 
                WHERE MATCH(s.name) AGAINST('$str') LIMIT 1";
                $result = $this->db->query($select)->row()->description;
            }
        }
        return $result;
    }

    function get_variation( $id = ''){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ?', $id)->row();
    }

    function get_variations( $id ){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ? ', $id)->result();
    }

    function check_variation( $id ){
        $this->db->select('quantity,sale_price,discount_price');
        $this->db->where('id', $id);
        $this->db->limit(1);
        return $this->db->get('product_variation')->result_array();
    }

    function get_gallery( $id ){
        $this->db->where('product_id', $id);
        $this->db->select('*');
        $this->db->from('product_gallery');
        $this->db->group_by('product_id');
        return $this->db->get();
    }

    // Get user has favourite this property

    function is_favourited($uid ='', $product_id =''){
        if( $uid ){
            $this->db->where('uid', $uid);
            $this->db->where('product_id', $product_id);
            if( $this->db->get('favourite')->num_rows() == 1 ){
                return true;
            }
        }
        return false;
    }

    function get_products( $d = '' , $gets = array() ){
        // $this->db->cache_on();
        $select_query = "SELECT p.id, p.product_name, p.seller_id, v.sale_price, v.discount_price,g.image_name,s.first_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN users AS s ON p.seller_id = s.id ";
        if( $d['str'] != '' ){
            $select_query .= " WHERE ( MATCH(p.rootcategory) AGAINST('{$d['str']}') "; 
            // Brand name
            if( isset($gets['brand_name']) ){
                $brand_name = $gets['brand_name'];
                unset($gets['brand_name']);
                $select_query .= " AND p.brand_name = '{$brand_name}' ";
            }

            if( isset($gets['main_colour']) ){
                $main_colour = $gets['main_colour'];
                unset($gets['main_colour']);
                $select_query .= " AND p.main_colour = '{$main_colour}' ";
            }

            if( isset($gets) && count($gets) ){
                if( isset($gets['page']) ) unset($gets['page']);
                foreach( $gets as $key => $value ){
                    $explode = explode(',', $value);
                    if( count($explode) > 1 ){
                        $select_query .= " AND ( ";
                        $array_value = array_values($explode);
                        $last = end($array_value);
                        foreach( $explode as $exp ){
                            $exp = preg_replace("/[^A-Za-z.0-9-]/", ' ', $exp);
                            if( $exp == $last ){ 
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%')";
                            }else{
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%' OR";
                            }
                        }                            
                    }else{
                        $value = trim($value);
                        $value = preg_replace("/[^A-Za-z.0-9-]/", ' ', $value);
                        $select_query .= " AND JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%' ";
                    }                    
                }
            } 

            $select_query .= " )";

            $select_query .= " OR (MATCH(p.category) AGAINST('{$d['str']}') ";
            // Brand name
            if( isset($gets['brand_name']) ){
                $brand_name = $gets['brand_name'];
                unset($gets['brand_name']);
                $select_query .= " AND p.brand_name = '{$brand_name}' ";
            }

            if( isset($gets['main_colour']) ){
                $main_colour = $gets['main_colour'];
                unset($gets['main_colour']);
                $select_query .= " AND p.main_colour = '{$main_colour}' ";
            }

            if( isset($gets) && count($gets) ){
                if( isset($gets['page']) ) unset($gets['page']);
                foreach( $gets as $key => $value ){
                    $explode = explode(',', $value);
                    if( count($explode) > 1 ){
                        $select_query .= " AND ( ";
                        $array_value = array_values($explode);
                        $last = end($array_value);
                        foreach( $explode as $exp ){
                            $exp = preg_replace("/[^A-Za-z.0-9-]/", ' ', $exp);
                            if( $exp == $last ){ 
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%')";
                            }else{
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%' OR";
                            }
                        }                            
                    }else{
                        $value = trim($value);
                        $value = preg_replace("/[^A-Za-z.0-9]/", ' ', $value);
                        $select_query .= " AND JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%' ";
                    }                    
                }
            }

            $select_query .= " )";

            $select_query .= " OR (MATCH(p.subcategory) AGAINST('{$d['str']}') ";
            // Brand name
            if( isset($gets['brand_name']) ){
                $brand_name = $gets['brand_name'];
                unset($gets['brand_name']);
                $select_query .= " AND p.brand_name = '{$brand_name}' ";
            }
            if( isset($gets['main_colour']) ){
                $main_colour = $gets['main_colour'];
                unset($gets['main_colour']);
                $select_query .= " AND p.main_colour = '{$main_colour}' ";
            }

            if( isset($gets) && count($gets) ){
                if( isset($gets['page']) ) unset($gets['page']);
                foreach( $gets as $key => $value ){
                    $explode = explode(',', $value);
                    if( count($explode) > 1){
                        $select_query .= " AND ( ";
                        $array_value = array_values($explode);
                        $last = end($array_value);
                        foreach( $explode as $exp ){
                            $exp = preg_replace("/[^A-Za-z.0-9]/", ' ', $exp);
                            if( $exp == $last ){ 
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%')";
                            }else{
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%' OR";
                            }
                        }                            
                    }else{
                        $value = trim($value);
                        $value = preg_replace("/[^A-Za-z.0-9]/", ' ', $value);
                        $select_query .= " AND JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%'";
                    }                    
                }
            }

            $select_query .= " )";
            
        }    
        if( $d['is_limit'] == true ){
            $select_query .=" GROUP BY p.id LIMIT {$d['offset']},{$d['limit']} ";
        }else{
            $select_query .=" GROUP BY p.id";
        }    
        // die( $select_query );
        $products_query = $this->db->query( $select_query )->result();
        // $this->db->cache_off();
        return $products_query;
    }


    // @param (id) - id of the present product
    // return objects
    function get_also_likes( $id = ''){
        // Get the category of this product
        $this->db->select('subcategory');
        $this->db->where('id', $id);
        $product_detail = $this->db->get('products')->row();

        $select_query = "SELECT p.id, p.product_name, v.sale_price, v.discount_price,g.image_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1) 
            WHERE p.id != '$id' AND p.subcategory = '$product_detail->subcategory'
            GROUP BY p.id ORDER BY RAND() LIMIT 4";
        $result = $this->db->query( $select_query )->result();
        return $result;
    }

    function get_brands( $str ='' ){
        $select_query = "SELECT COUNT(*) AS `brand_count`, `brand_name` FROM `products` p ";
        if( $str != '' ){
            $select_query .= " WHERE MATCH(rootcategory) AGAINST('$str') OR
            MATCH(category) AGAINST('$str') OR
            MATCH(subcategory) AGAINST('$str') OR
            MATCH(brand_name) AGAINST('$str')";
        }
        $select_query .= " GROUP BY `brand_name` ORDER BY `brand_name` ";
        return $this->db->query( $select_query )->result();
    }

    function get_colours( $str = ''){
        $select_query = "SELECT COUNT(*) AS `colour_count`, `main_colour` AS `colour_name` FROM `products` p ";
        if( $str != ''){
            $select_query .= " WHERE MATCH(rootcategory) AGAINST('$str') OR
            MATCH(category) AGAINST('$str') OR
            MATCH(subcategory) AGAINST('$str') OR
            MATCH(brand_name) AGAINST('$str')";
        }
        $select_query .= " GROUP BY `colour_name` ORDER BY `colour_name` ";
        return $this->db->query( $select_query )->result();
    }

    function get_features( $str = '' ){
        $select_query = "SELECT DISTINCT JSON_UNQUOTE(JSON_EXTRACT(`attributes`, '$')) AS feature_value FROM products";
        if( $str != ''){
            $select_query .= " WHERE MATCH(rootcategory) AGAINST('$str') OR
            MATCH(category) AGAINST('$str') OR
            MATCH(subcategory) AGAINST('$str') OR
            MATCH(brand_name) AGAINST('$str')";
        }
        return $this->db->query( $select_query )->result_array();
    }

    function get_cart_details( $id ){
        return $this->db->query("SELECT s.first_name name, i.image_name image 
            FROM users s 
            LEFT JOIN product_gallery i ON (i.product_id = $id AND i.featured_image = 1) ")->row();
    }


    /**
     * @param $table
     * @return string
     */
    function generate_code($table = 'orders', $field = 'order_code'){
        do {
            $number = random_string('nozero', 6);
            $this->db->where( $field, $number);
            $this->db->from($table);
            $count = $this->db->count_all_results();
        } while ($count >= 1);
            return $number;
    }


    /**
     * @param $id
     * @param $label
     * @return array|string
     */
    function get_category_detail($field ='' , $label ='' ){
        switch ($label){
            case 'root_category' :
                $this->db->select('name,root_category_id,description');
                if( $field != '') {
                    $this->db->where('root_category_id', $field);
                    $this->db->or_where('name', $field);
                }
                return $this->db->get('root_category')->row();
                break;
            case 'category':
                $this->db->select('name,category_id');
                if($field != '' ) {
                    $this->db->where('category_id', $field);
                    $this->db->or_where('name', $field);
                }
                return $this->db->get('category')->row();
                break;
            case 'sub_category' :
                $this->db->select('name,sub_category_id');
                if($field != '') {
                    $this->db->where('sub_category_id', $field);
                    $this->db->or_where('name', $field);
                }
                return $this->db->get('sub_category')->row();
                break;
            default:
                return '';
                break;
        }
    }


    function set_field( $table, $field, $set, $where ){
        $this->db->where($where);
        $this->db->set($field, $set, false);
        $this->db->update($table);
    }

    function has_bought( $pid ='', $uid =''){
        $this->db->where('product_id', $pid);
        $this->db->where('buyer_id', $uid);
        if( $this->db->get('orders')->num_rows() > 0 ) return true;
        return false;
    }

    function num_rows_count( $table_name, $where ){
        $this->db->where($where);
        if($this->db->get($table_name)->num_rows()){
            $this->db->where($where);
            return $this->db->get($table_name)->row()->id;
        }else{
            return false;
        }
        
    }
}


