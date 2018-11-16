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


    // Get single product
    function get_product( $id = ''){
        return $this->db->query('SELECT p.*, u.first_name, u.last_name FROM products AS p LEFT JOIN users AS u ON (p.seller_id = u.id) WHERE p.id = ? ', $id )->row();
    }

    // Get featured_image
    function get_featured_image( $id =''){
        $this->db->select('image_name');
        $this->db->where('product_id', $id);
        $this->db->where('featured_image', 1);
        return $this->db->get('product_gallery')->row();
    }


    // To get the respective categories or sub
    // Function used for the category page
    function get_sub_categories( $str = ''){
        // Get all the i
        $array = $this->slug($str);
        $query = $this->db->query("SELECT name FROM categories WHERE id IN ('". implode("','",$array). "') LIMIT 10 ");
        if( $query->num_rows() >= 1 ) {
            return $query->result();
        }else{
            // Select all categories then
            $query = $this->db->query("SELECT name FROM categories LIMIT 10");
            return $this->query( $query )->result();
        }
    }


    // Category Description for SEO
    function category_description( $str = '', $search_like = '' ){
        $result = '';
        if( $str != '' ){
            $id = $this->category_id( $category);
            $select = "SELECT description FROM categories WHERE id = {$id} LIMIT 1";
            $result = $this->db->query($select)->row();
            if( $result ){
                return $result->description;
            }else{
                // Get the setting description and return
            }
        }else{
            // That means its coming from search
            $array = $this->slug($str);
            $query = "SELECT c.description, p.id FROM products p LEFT JOIN categories c ON (c.id = p.category_id) WHERE p.product_name LIKE '%{$search_like}%' LIMIT 1";
            return $this->db->query( $query )->description;
        }
    }

    // Get single variation
    function get_variation( $id = ''){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ? LIMIT 1', $id)->row();
    }

    // Single product, get all the product variation
    function get_variations( $id ='' ){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ? ', $id)->result_array();
    }


    // Check if the single product has variation
    function check_variation( $id ){
        $this->db->select('quantity,sale_price,discount_price');
        $this->db->where('id', $id);
        $this->db->limit(1);
        return $this->db->get('product_variation')->result_array();
    }

    // Get all product Images
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


    function slug( $slug ) : array {
        $GLOBALS['array_var'] = array();
        $select_category = "SELECT id FROM categories WHERE slug = ?";
        $id = $this->db->query($select_category, array($slug))->row()->id;
        $this->recurssive( $id );
        $array = array_filter($GLOBALS['array_var']);
        $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
        $new_array = array();
        foreach( $it as $v ){ array_push( $new_array, $v); }
        array_push( $new_array, $id ); // Lets push its own ID also
        return $new_array;
    }

    function recurssive( $id ){
        $category_id = $id;
        $total_categories = $this->db->get('categories')->result_array();
        $count = count( $total_categories );

        $data =  array();
        for ($i=0; $i < $count; $i++) { 
            if( $total_categories[$i]['pid'] == $category_id ){
                array_push( $data , $total_categories[$i]['id'] );
            }
        }
        array_push( $GLOBALS['array_var'], $data);
        foreach ($data as $key => $value) {
            $this->recurssive($value);
        }
    }

    // "SELECT column1 FROM table WHERE column1 IN ('".implode("','",$array)."')";
    // Main Category prouduct listings
    function get_products( $queries = '' , $gets = array() ){
        // $this->db->cache_on();
        $select_query = "SELECT p.id, p.product_name, p.seller_id, v.sale_price, v.discount_price,g.image_name,s.first_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN users AS s ON p.seller_id = s.id ";

            // WHERE p.category_id IN (3,4,5,6,7,7,8,8)
            $array = $this->slug($queries['str']);
            $select_query .= " WHERE p.category_id IN ('".implode("','",$array)."')";


        if( count($gets) ){
            // check for brand name
            if( isset($gets['brand_name']) && !empty($gets['brand_name'])) {
                $brand_name = xss_clean($gets['brand_name']);
                $select_query .= " ( AND p.brand_name = '{$brand_name}') "; unset($gets['brand_name']);
            }
            // check for main colour
            if( isset($gets['main_colour']) && !empty($gets['main_colour']) ){
                $main_colour = xss_clean($gets['main_colour']);
                $$select_query .= " (AND p.brand_name = '{$main_colour}') "; unset($gets['main_colour']);
            }
            // unset the page key
            unset( $gets['page'] );

            // Here comes the features
            // check for get count again
            if( count( $gets ) ){
                foreach( $gets as $key => $value ){
                    $explode = explode(',', $value);
                    if( count($explode) > 1 ){
                        $select_query .= " OR ( ";
                        $array_value = array_values($explode);
                        $last = end($array_value);
                        $key = xss_clean( $key );
                        foreach( $explode as $exp ){
                            $exp = preg_replace("/[^A-Za-z.0-9-]/", ' ', $exp);
                            $last = preg_replace("/[^A-Za-z.0-9-]/", ' ', $last);
                            if( $exp === $last ){
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%')";
                            }else{
                                $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%' OR";
                            }
                        }
//                        $select_query .= " ) ";
                    }else{
                        $value = xss_clean($value);
                        $value = preg_replace("/[^A-Za-z.0-9-]/", ' ', $value);
                        $select_query .= " OR (JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%') ";
                    }
                }
            }
        }

        if( $queries['is_limit'] == true ){
            $select_query .=" AND p.product_status = 'approved' GROUP BY p.id LIMIT {$queries['offset']},{$queries['limit']} ";
//                     die( $select_query );
        }else{
            $select_query .=" AND p.product_status = 'approved' GROUP BY p.id";
        }    
//         die( $select_query );
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
        $select_query = "SELECT p.id,p.views, p.product_name, v.sale_price, v.discount_price,g.image_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1) 
            WHERE p.id != '$id' AND p.subcategory = '$product_detail->subcategory'
            GROUP BY p.id ORDER BY RAND() LIMIT 4";
        $result = $this->db->query( $select_query )->result();
        return $result;
    }

    // Get a slpecific category id by its slug
    function category_id( $slug ){
        $query = "SELECT id FROM categories WHERE slug = ?";
        return $this->db->query( $query, $slug);
    }


    // Get products brands
    function get_brands( $category = '', $search_like = ''){
        $select_query = "SELECT COUNT(*) AS `brand_count`, `brand_name` FROM `products` p ";

        if( $search_like != '' ){
            if( $category != '' ){
                $id = $this->category_id( $category);
                $select_query .= " WHERE category_id = {$id} AND product_name LIKE '%{$search_like}%'";
            }else{
                $select_query .= " WHERE product_name LIKE '%{$search_like}%'";
            }
        }else{
            $id = $this->category_id( $category);
            $select_query .= "WHERE p.category_id = {$id}";
        }
        $select_query .= " GROUP BY `brand_name` ORDER BY `brand_name` ";
        return $this->db->query( $select_query )->result();
    }

    // Get products colours
    function get_colours( $category ='', $search_like = ''){
        $select_query = "SELECT COUNT(*) AS `colour_count`, `main_colour` AS `colour_name` FROM `products` p ";
        if( $search_like != '' ){
            if( $category != '' ){
                $id = $this->category_id( $category);
                $select_query .= " WHERE category_id = {$id} AND product_name LIKE '%{$search_like}%'";
            }else{
                $select_query .= " WHERE product_name LIKE '%{$search_like}%'";
            }
        }else{
            $select_query .= " WHERE category_id = {$id}";
        }
        $select_query .= " GROUP BY `colour_name` ORDER BY `colour_name` ";
        return $this->db->query( $select_query )->result();
    }

    // Get products attributes. used in main category
    function get_features($category = '', $search_like = ''){
        $select_query = "SELECT DISTINCT JSON_UNQUOTE(JSON_EXTRACT(`attributes`, '$')) AS feature_value FROM products";
        if( $search_like != '' ){
            if( $category != '' ){
                $array = $this->slug($category);
                $select_query .= " WHERE category_id IN ('".implode("','",$array)."') AND product_name LIKE '%{$search_like}%'";
            }else{
                $select_query .= " WHERE product_name LIKE '%{$search_like}%'";
            }
        }else{
            $array = $this->slug($category);
            $select_query .= "WHERE category_id IN ('".implode("','",$array)."')";
        }
        return $this->db->query( $select_query )->result_array();
    }

    // Generic single product detail
    function get_cart_details( $id ){
        $select = "SELECT p.product_status, p.seller_id, u.first_name name, s.legal_company_name, s.status, i.image_name image FROM products p
                LEFT JOIN sellers s ON (s.id = p.seller_id)
                LEFT JOIN users u ON (u.id = p.seller_id)
                LEFT JOIN product_gallery i ON (i.product_id = p.id )
                WHERE p.id = $id";
        return $this->db->query($select)->row();
    }


    // Get the status of variation
    function get_variation_status( $id ){
        return $this->db->query("SELECT quantity, sale_price, discount_price, start_date, end_date FROM product_variation WHERE id = $id")->row();
    }


    /**
     * Generic function 
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


    // increase view
    function set_field( $table, $field, $set, $where ){
        $this->db->where($where);
        $this->db->set($field, $set, false);
        $this->db->update($table);
    }

    // check if user has bought a product
    function has_bought( $pid ='', $uid =''){
        $this->db->where('product_id', $pid);
        $this->db->where('buyer_id', $uid);
        if( $this->db->get('orders')->num_rows() > 0 ) return true;
        return false;
    }

    // check nom rows and return the id if found
    function num_rows_count( $table_name, $where ){
        $this->db->where($where);
        if($this->db->get($table_name)->num_rows()){
            $this->db->where($where);
            return $this->db->get($table_name)->row()->id;
        }else{
            return false;
        }        
    }

    // Select on rating || review
    function get_rating_review($table, $select, $uid, $pid ){
        $this->db->select($select);
        $this->db->where('product_id', $pid);
        $this->db->where('user_id', $uid);
        return $this->db->get($table)->row();
    }

    // Fetch single profuct reviews with its rating
    function get_reviews( $id = '' ){
        $select = "SELECT review.*, rating.rating_score FROM product_review review LEFT JOIN product_rating rating ON (rating.product_id = review.product_id AND rating.user_id = review.user_id) WHERE review.product_id = $id";
        return $this->db->query($select)->result_array();
    }


    // Rating score for single product page
    function get_rating_counts( $pid = ''){
        $select = "SELECT COUNT(*) as occurence, rating_score FROM product_rating WHERE product_id = $pid GROUP BY rating_score ORDER BY rating_score DESC";
        return $this->db->query($select)->result_array();
    }

    // Seacrh autocomplete query
    function search_query($search = '', $category =''){
        // $select = "SELECT product_name FROM products WHERE product_name LIKE '%{$search}%'";
        $select  = "SELECT p.id, p.product_name, g.image_name, v.sale_price, v.discount_price FROM products p 
        LEFT JOIN product_gallery g ON (g.product_id = p.id AND g.featured_image = 1)
        INNER JOIN (SELECT va.sale_price, va.discount_price,va.product_id vid FROM product_variation va  WHERE va.quantity > 0) v ON (v.vid = p.id)
                    WHERE p.product_name LIKE '%{$search}%' AND p.product_status = 'approved'";
        if( $category != '' ) $select .= "AND p.rootcategory = '$category' ";
        $select .= "GROUP BY p.id ORDER BY p.id LIMIT 5";
        return $this->db->query($select)->result();
    }

    //  Quick view query
    function get_quick_view_details( $id ){
        $select = "SELECT product_description,seller_id FROM products WHERE id = $id";
        return $this->db->query( $select)->row();
    }



    function get_search_products( $queries = array() , $gets = array() ){
        $select_query = "SELECT p.id, p.product_name, p.seller_id, v.sale_price, v.discount_price,g.image_name,s.first_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN users AS s ON p.seller_id = s.id ";

        if( $queries['product_name'] ) {
            $select_query .= " WHERE p.product_name LIKE '%{$queries["product_name"]}%' ";
        }
        if( $queries['category'] && !empty($queries['category'])){
            $select_query .= " AND MATCH (p.rootcategory) AGAINST ('{$queries["category"]}') ";
        }
        // unset the product name and category from the get
        unset($gets['category']);
        unset($gets['product_name']);
        unset($gets['q']);
        // Brand name
        if( isset($gets['brand_name']) ){
            $brand_name = cleanit($gets['brand_name']);
            unset($gets['brand_name']);
            $select_query .= " AND p.brand_name = '{$brand_name}' ";
        }
        // main colour
        if( isset($gets['main_colour']) ){
            $main_colour = cleainit($gets['main_colour']);
            unset($gets['main_colour']);
            $select_query .= " AND p.main_colour = '{$main_colour}' ";
        }

        if( isset($gets['page']) ) unset($gets['page']);

        //  Check if we still have any get parameter
        if( count( $gets ) ){
            foreach( $gets as $key => $value ){
                $explode = explode(',', $value);
                if( count($explode) > 1 ){
                    $select_query .= " OR ( ";
                    $array_value = array_values($explode);
                    $last = end($array_value);
                    $key = xss_clean( $key );
                    foreach( $explode as $exp ){
                        $exp = preg_replace("/[^A-Za-z.0-9-]/", ' ', $exp);
                        $last = preg_replace("/[^A-Za-z.0-9-]/", ' ', $last);
                        if( $exp === $last ){
                            $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%')";
                        }else{
                            $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%' OR";
                        }
                    }
//                        $select_query .= " ) ";
                }else{
                    $value = xss_clean($value);
                    $value = preg_replace("/[^A-Za-z.0-9-]/", ' ', $value);
                    $select_query .= " OR (JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%') ";
                }
            }
        }

        if( $queries['is_limit'] == true ){
            $select_query .=" GROUP BY p.id LIMIT {$queries['offset']},{$queries['limit']} ";
        }else{
            $select_query .=" GROUP BY p.id";
        }
//         die( $select_query );
        $products_query = $this->db->query( $select_query )->result();
        // $this->db->cache_off();
        return $products_query;
    }



}


