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

    /*
     * Insert multiple rows */
    function insert_batch( $table = 'orders', $data ){
        try {
            return $this->db->insert_batch($table, $data);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    // Update table
    function update_data( $access = '' , $data = array(), $table_name = 'users'){
        $this->db->where('id', $access);
        return $this->db->update( $table_name, $data );
    }


    // Get single product
    function get_product( $id = ''){
        return $this->db->query('SELECT p.*, u.legal_company_name, v.quantity 
        FROM products AS p 
        LEFT JOIN sellers AS u ON (p.seller_id = u.uid) 
        LEFT JOIN (SELECT var.product_id, SUM(var.qty) quantity FROM orders var) AS v ON ( p.id = v.product_id) 
        WHERE p.id = ? ', $id )->row();
    }

    // Get featured_image
    function get_featured_image( $id =''){
        $this->db->select('image_name');
        $this->db->where('product_id', $id);
        $this->db->where('featured_image', 1);
        return $this->db->get('product_gallery')->row();
    }

    // Get all product Images
    function get_gallery( $id ){
        $this->db->where('product_id', $id);
        $this->db->select('*');
        $this->db->from('product_gallery');
        $this->db->order_by('featured_image', 'DESC');
        return $this->db->get()->result();
    }


    // To get the respective categories or sub
    // Function used for the category page
    function get_categories( $str = ''){
        // Get all the i
        $array = $this->slug($str);
        $query = $this->db->query("SELECT name FROM categories WHERE id IN ('". implode("','",$array). "') LIMIT 10 ");
        if( $query->num_rows() >= 1 ) {
            return $query->result();
        }else{
            // Select all categories then
            $query = $this->db->query("SELECT name FROM categories LIMIT 10");
            return $query->result();
        }
    }

    // Get single variation
    function get_variation( $id = ''){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ? ORDER BY id,quantity LIMIT 1', $id)->row();
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

    /**
     * @param $id
     * @return mixed
     */
    function get_variation_status($id ){
        return $this->db->query("SELECT quantity, sale_price, discount_price, start_date, end_date FROM product_variation WHERE id = $id")->row();
    }

    /*
     *The function helps to make a secondary check on a product before adding to cart
     * */
    function get_product_item( $pid, $vid, $qty ){
        // check if the variation item is still available
        $check1 = $this->get_variation_status( $vid );
        if( empty( $check1 ) || $qty > $check1->quantity ){
            return array('status' => 'error', 'msg' => 'The product variation quantity you selected is not available.' . $check1->quantity . ' item remaining.' );
        }
        // check2 : is the seller on vacation
        $query = "SELECT p.seller_id, p.product_name, v.discount_price, v.sale_price, v.variation FROM products p INNER JOIN product_variation v ON (v.id = {$vid} AND v.product_id = p.id) WHERE p.id = {$pid} AND p.product_status = 'approved' ";
        $result = $this->db->query( $query )->row();
        if( !empty($result) ){
            return array('status' => 'success', 'msg' => $result);
        }else{
            return array('status' => 'error', 'msg' => 'Sorry, the product is no longer active.');
        }
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

    /*
    *This function is to call the recurssive function and
    *return the children id
    */
    function slug( $slug ) : array {
        $GLOBALS['array_var'] = array();
        $select_category = "SELECT id FROM categories WHERE slug = ? ";
        $query = $this->db->query($select_category, array($slug));

        if( $query->num_rows() >= 1 ){
            $id = $query->row()->id;
            $this->recurssive( $id );
            $array = array_filter($GLOBALS['array_var']);
            $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
            $new_array = array();
            foreach( $it as $v ){ array_push( $new_array, $v); }
            array_push( $new_array, $id ); // Lets push its own ID also
            return $new_array;
        }else{
            return $GLOBALS['array_var'];
        }
    }
    /*
    *Called by slug
    *To get the children id
    */
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
    /*
    *Function to get the parent category of a particular category
    *Called the parent_recurssive
    */
    function parent_slug_top( $id ){
        // Select category
        $GLOBALS['array_variable'] = array();
        $select_category = "SELECT id, slug FROM categories WHERE id = {$id}";
        $result = $this->db->query($select_category);
        if( $result->num_rows() >= 1 ){
            $pid = $result->row()->id;
            $this->parent_recurssive( $pid );
            $array = array_filter($GLOBALS['array_variable']);
            $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
            $new_array = array();
            foreach( $it as $v ){ array_push( $new_array, $v); }
            array_push( $new_array, $id ); // Lets push its own ID also
            // return $new_array;
        }else{
            return $GLOBALS['array_variable'];
        }

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

    function check_slug_availability( $slug ){
        $this->db->where( 'slug', $slug);
        if( $this->db->get('categories')->num_rows() ){
            return true;
        }else{
            return false;
        }
    }

    // Get category details by its id
    function single_category_detail( $id ){
        $this->db->select('description, name, title, slug');
        $this->db->where('id', $id);
        return $this->db->get('categories')->row();
    }

    // Category Description for SEO Used for Catalog and Search Controller
    function category_details( $str = '', $search_like = '' ){
        $result = '';
        if( $str != '' ){
            if( $this->check_slug_availability( $str ) ){
                $select = "SELECT description, name, image, title,slug FROM categories WHERE slug = '{$str}' LIMIT 1";
                $result = $this->db->query($select)->row();
                return $result;
            }
        }else{
            // That means its coming from search
            $query = "SELECT c.description,c.name,c.title,c.image,c.slug, p.id FROM products p LEFT JOIN categories c ON (c.id = p.category_id) WHERE p.product_name LIKE '%{$search_like}%' LIMIT 1";
            return $this->db->query( $query )->row();
        }
    }

    // Get a slpecific category id by its slug
    // return CI_row
    function category_id( $slug ){
        $query = "SELECT id FROM categories WHERE slug = ? OR name = ?";
        return $this->db->query( $query, array($slug, $slug))->row()->id;
    }

    /*
        Return an object (name, slug, description, specifications) of all the parent of a category
        return CI_result
    */
    function get_parent_details( $id ){
        $array = $this->parent_slug_top( $id );
        return $this->db->query("SELECT name, slug, description, specifications FROM categories WHERE id IN ('".implode("','",$array)."')")->result();
    }

    // "SELECT column1 FROM table WHERE column1 IN ('".implode("','",$array)."')";
    // Main Category prouduct listings
    // Return CI_results
    function get_products( $queries = '' , $gets = array() ){
        // $this->db->cache_on();
        // Lets confirm the slug is valid
        if( $this->check_slug_availability( $queries['str'] ) ) {
            $select_query = "SELECT p.id, p.product_name, p.brand_name, p.seller_id, v.sale_price, v.discount_price, v.start_date,v.end_date, SUM(v.quantity) item_left, g.image_name,s.store_name
            FROM products p";
            if( isset($gets['price_min']) && !empty($gets['price_min']) && isset($gets['price_max']) && !empty($gets['price_max']) ){
                $min = xss_clean($gets['price_min']); $max = xss_clean($gets['price_max']);
                $min = preg_replace("/[^0-9]/", '', $min);
                $max = preg_replace("/[^0-9]/", '', $max);
                if( $min == '' ) $min = 0; if( $max == '' ) $max == 0;
                $select_query .= " JOIN (SELECT var.product_id, var.discount_price, var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var 
            WHERE var.quantity > 0 AND var.sale_price BETWEEN {$min} AND {$max} ORDER BY var.id) AS v ON (p.id = v.product_id) ";
                unset($gets['price_min']); unset($gets['price_max']);
            }else{
                $select_query .= " JOIN (SELECT var.product_id, var.discount_price, var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var 
            WHERE var.quantity > 0 ORDER BY var.id) AS v ON (p.id = v.product_id) ";
            }
            $select_query .= " JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN sellers AS s ON p.seller_id = s.uid ";

            $array = $this->slug($queries['str']);
            $select_query .= " WHERE p.category_id IN ('".implode("','",$array)."')";

            if( isset($gets['q']) && !empty($gets['q']) ) {$select_query .= " AND p.product_name LIKE '%{$gets["q"]}%' "; unset($gets['q']); }
            if( count($gets) ){
                // check for brand name
                if( isset($gets['brand_name']) && !empty($gets['brand_name'])) {
                    $brand_name = xss_clean($gets['brand_name']);
                    $brands = explode(',', $brand_name);
                    if( count($brands) > 1 ){
                        $select_query .= " AND p.brand_name IN ('".implode("','",$brands)."') ";
                    }else{
                        $select_query .= " AND p.brand_name = '{$brand_name}' ";
                    }
                    unset($gets['brand_name']);
                }
                // check for main colour
                if( isset($gets['main_colour']) && !empty($gets['main_colour']) ){
                    $main_colour = xss_clean($gets['main_colour']);
                    $colours = explode(',', $main_colour);
                    if( count( $colours ) ){
                        $select_query .= " AND p.main_colour IN ('".implode("','",$colours)."') ";
                    }else{
                        $select_query .= " AND p.main_colour = '{$main_colour}' ";
                    }
                    unset($gets['main_colour']);
                }
                // Best rating
//                if( isset($gets['order_by']) && !empty($gets['order_by']) ){
//                    $order_by = xss_clean($gets['order_by']);
//                    switch ($order_by) {
//                        case 'best_rating':
//                            $select_query .= " JOIN "
//                            break;
//
//                    }
//                    unset($gets['sort']);
//                }
                // unset the page key
                unset( $gets['page'] );
                // Here comes the features
                // check for get count again
                if( count( $gets ) ){
                    // $select_query .= " AND ";
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
                                if( $key == '' ) $key = 0; if( $last == '') $last = 0;
                                if( $exp === $last ){
                                    $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%')";
                                }else{
                                    $select_query .= " JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$exp}%' OR";
                                }
                            }
                            // $select_query .= " ) ";
                        }else{
                            $value = xss_clean($value);
                            $value = preg_replace("/[^A-Za-z.0-9-]/", ' ', $value);
                            $select_query .= " AND (JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%') ";
                        }
                    }
                }
            }
            if( $queries['is_limit'] == true ){
                $select_query .=" AND p.product_status = 'approved' GROUP BY p.id LIMIT {$queries['offset']},{$queries['limit']} ";
            }else{
                $select_query .=" AND p.product_status = 'approved' GROUP BY p.id";
            }
            $products_query = $this->db->query( $select_query )->result();
            return $products_query;
        }else{
            return '';
        }
    }


    // @param (id) - id of the present product
    // return objects

    function get_also_likes( $id = ''){
        // Get the category of this product
        $this->db->select('category_id');
        $this->db->where('id', $id);
        $p_cat = $this->db->get('products')->row();
        if( $p_cat ){
            $product_detail_category_id = $p_cat->category_id;
            $select_query = "SELECT p.id,p.views, p.product_name, v.sale_price, v.discount_price, v.start_date, v.end_date, SUM(v.quantity) as item_left, g.image_name
                FROM products p JOIN (SELECT var.product_id, var.discount_price, var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var 
                WHERE var.quantity > 0 ORDER BY var.id) AS v ON (p.id = v.product_id) JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1) 
                WHERE p.id != '$id' AND product_status = 'approved' AND p.category_id = '{$product_detail_category_id}' GROUP BY p.id ORDER BY RAND() LIMIT 6";
            $result = $this->db->query( $select_query )->result();
            return $result;
        }else{
            return '';
        }
    }

    // Get products brands
    function get_brands( $category = '', $search_like = ''){
        $select_query = "SELECT COUNT(*) AS `brand_count`, `brand_name` FROM `products` p ";
        if( $search_like != '' ){
            if( $category != '' ){
                if( $this->check_slug_availability($category) ){
                    $array = $this->slug($category);
                    $select_query .= " WHERE category_id IN ('".implode("','",$array)."') GROUP BY `brand_name` ORDER BY `brand_name` ";
                    return $this->db->query( $select_query )->result();
                }
            }else{
                $select_query .= " WHERE product_name LIKE '%{$search_like}%' GROUP BY `brand_name` ORDER BY `brand_name` ";
                return $this->db->query( $select_query )->result();
            }
        }else{
            if( $this->check_slug_availability($category)) {
                $array = $this->slug($category);
                $select_query .= " WHERE category_id IN ('".implode("','",$array)."') GROUP BY `brand_name` ORDER BY `brand_name` ";
                return $this->db->query( $select_query )->result();
            }
        }
        return '';
    }
    // Get products colours
    function get_colours( $category ='', $search_like = ''){
        $select_query = "SELECT COUNT(*) AS `colour_count`, `main_colour` AS `colour_name` FROM `products` p ";
        if( $search_like != '' ){
            if( $category != '' ){
                if( $this->check_slug_availability( $category )) {
                    $array = $this->slug($category);
                    $select_query .= " WHERE category_id IN ('".implode("','",$array)."') AND product_name LIKE '%{$search_like}%' GROUP BY `colour_name` ORDER BY `colour_name` ";
                    return $this->db->query( $select_query )->result();
                }
            }else{
                $select_query .= " WHERE product_name LIKE '%{$search_like}%' GROUP BY `colour_name` ORDER BY `colour_name` ";
                return $this->db->query( $select_query )->result();
            }
        }else{
            if( $this->check_slug_availability( $category )) {
                $array = $this->slug($category);
                $select_query .= " WHERE category_id IN ('".implode("','",$array)."') ";
                return $this->db->query( $select_query )->result();
            }
        }
        return '';
    }

    // Get products attributes. used in main category
    function get_features($category = '', $search_like = ''){
        $select_query = "SELECT DISTINCT ( json_unquote(json_extract(`attributes`, '$'))) AS feature_value FROM products";
        if( $search_like != '' ){
            if( $category != '' ){
                if( $this->check_slug_availability( $category ) ){
                    $array = $this->slug($category);
                    $select_query .= " WHERE category_id IN ('".implode("','",$array)."') AND product_name LIKE '%{$search_like}%'";
                    return $this->db->query( $select_query )->result_array();
                }
            }else{
                $select_query .= " WHERE product_name LIKE '%{$search_like}%'";
                return $this->db->query( $select_query )->result_array();
            }
        }elseif($this->check_slug_availability( $category )) {
            $array = $this->slug($category);
            $select_query .= " WHERE category_id IN ('".implode("','",$array)."')";
            return $this->db->query( $select_query )->result_array();
        }else{
            return '';
        }
    }

    // Generic single product detail
    function get_cart_details( $id ){
        $select = "SELECT p.product_status, p.seller_id, u.first_name firt_name, s.legal_company_name, s.store_name name, u.is_seller, i.image_name image FROM products p
                LEFT JOIN sellers s ON (s.uid = p.seller_id)
                LEFT JOIN users u ON (u.id = p.seller_id)
                LEFT JOIN product_gallery i ON (i.product_id = p.id )
                WHERE p.id = $id";
        return $this->db->query($select)->row();
    }

    /**
     * Generic function
     * @param $table
     * @return string
     */
    function generate_code($table = 'orders', $field = 'order_code'){
        do {
            $number = random_string('nozero', 9);
            $this->db->where( $field, $number);
            $this->db->from($table);
            $count = $this->db->count_all_results();
        } while ($count >= 1);
        return $number;
    }

    // increase view or dynamically set a value
    function set_field( $table, $field, $set, $where ){
        $this->db->where($where);
        $this->db->set($field, $set, false);
        return $this->db->update($table);
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
        $select = "SELECT review.display_name, review.title,review.title, review.content, review.published_date, rating.rating_score 
        FROM product_review review LEFT JOIN product_rating rating ON (rating.product_id = review.product_id AND rating.user_id = review.user_id) WHERE review.product_id = $id";
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
        if( $category != '' ) { $id = $this->category_id( $category ); $select .= "AND p.category_id = '{$id}' ";}
        $select .= "GROUP BY p.id ORDER BY p.id LIMIT 5";
        return $this->db->query($select)->result();
    }

    function search_query_categories( $search ){
        $select = "SELECT DISTINCT(p.category_id),count(*) total_count, c.name, c.slug FROM products p 
        INNER JOIN categories c ON(c.id = p.category_id) WHERE p.product_name LIKE '%{$search}%' AND p.product_status = 'approved' GROUP BY p.category_id LIMIT 5";
        return $this->db->query( $select )->result();
    }

    //  Quick view query
    function get_quick_view_details( $id ){
        $select = "SELECT product_description,seller_id FROM products WHERE id = $id";
        return $this->db->query( $select)->row();
    }


    // SEARCH CATEGORY PRODUCTS PAGE
    function get_search_products( $queries = array() , $gets = array() ){
        $select_query = "SELECT p.id, p.product_name, p.brand_name, p.seller_id, v.sale_price, v.discount_price, v.start_date,v.end_date, SUM(v.quantity) item_left,  g.image_name,s.store_name
            FROM products p";
        if( isset($gets['price_min']) && !empty($gets['price_min']) && isset($gets['price_max']) && !empty($gets['price_max']) ){
            $min = xss_clean($gets['price_min']); $max = xss_clean($gets['price_max']);
            $min = preg_replace("/[^0-9]/", '', $min);
            $max = preg_replace("/[^0-9]/", '', $max);
            $select_query .= " JOIN (SELECT var.product_id, var.discount_price, var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var 
            WHERE var.quantity > 0 AND var.sale_price BETWEEN {$min} AND {$max} ORDER BY var.id) AS v ON (p.id = v.product_id) ";
            unset($gets['price_min']); unset($gets['price_max']);
        }else{
            $select_query .= " JOIN (SELECT var.product_id, var.discount_price, var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var 
            WHERE var.quantity > 0 ORDER BY var.id) AS v ON (p.id = v.product_id) ";
        }
        $select_query .= " JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN sellers AS s ON p.seller_id = s.uid ";

        if( $queries['product_name'] ) {
            $select_query .= " WHERE p.product_status = 'approved' AND p.product_name LIKE '%{$queries["product_name"]}%' ";
        }
        if( $queries['category'] && !empty($queries['category'])){
            $id = $this->category_id( $queries['category'] );
            $select_query .= " AND p.category_id = {$id} ";
        }
        // unset the product name and category from the get
        unset($gets['category']);
        unset($gets['product_name']);
        unset($gets['q']);
        // Brand name
        if( isset($gets['brand_name']) && !empty($gets['brand_name'])) {
            $brand_name = xss_clean($gets['brand_name']);
            $brands = explode(',', $brand_name);
            if( count($brands) > 1 ){
                $select_query .= " AND p.brand_name IN ('".implode("','",$brands)."') ";
            }else{
                $select_query .= " AND p.brand_name = '{$brand_name}' ";
            }
            unset($gets['brand_name']);
        }
        // check for main colour
        if( isset($gets['main_colour']) && !empty($gets['main_colour']) ){
            $main_colour = xss_clean($gets['main_colour']);
            $colours = explode(',', $main_colour);
            if( count( $colours ) ){
                $select_query .= " AND p.main_colour IN ('".implode("','",$colours)."') ";
            }else{
                $select_query .= " AND p.main_colour = '{$main_colour}' ";
            }
            unset($gets['main_colour']);
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
                    // $select_query .= " ) ";
                }else{
                    $value = xss_clean($value);
                    $value = preg_replace("/[^A-Za-z.0-9-]/", ' ', $value);
                    $select_query .= " AND (JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%') ";
                }
            }
        }

        if( $queries['is_limit'] == true ){
            $select_query .=" GROUP BY p.id LIMIT {$queries['offset']},{$queries['limit']} ";
        }else{
            $select_query .=" GROUP BY p.id";
        }

        $products_query = $this->db->query( $select_query )->result();
        return $products_query;
        // $this->db->cache_off();
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
     * Get an amount of an address, for checkout calculation
     * @param $address_id
     * @return mixed
     */
    function get_billing_amount($id, $type = 'billing' ){
        if( $type == 'pickup' ){
            // Getting result for pickup
            $select = "SELECT charge FROM pickup_address WHERE id = {$id}";
            return $this->db->query( $select )->row()->charge;
        }else{
            $select = "SELECT b.aid, a.price FROM billing_address b LEFT JOIN area a ON (b.aid = a.id ) WHERE b.id = {$id}";
            return $this->db->query( $select )->row()->price;
        }

    }

    /*
     * Function fot user to create or edit rating and review
     * */
    function create_edit( $pid, $uid, $data = array(), $table_name){
        switch ($table_name){
            case 'product_review':
                $row = $this->get_row( $table_name, 'id', array('product_id' => $pid, 'user_id' => $uid) );
                if(!$row){
                    $this->insert_data($table_name, $data);
                }else{
                    $this->update_data($row->id, $data, $table_name);
                }
                return true;
                break;
            case 'product_rating':
                $row = $this->get_row( $table_name, 'id', array('product_id' => $pid, 'user_id' => $uid) );
                if(!$row){
                    $this->insert_data($table_name, $data);
                }else{
                    $this->update_data($row->id, $data, $table_name);
                }
                return true;
                break;
        }
    }

    /*
     * Get a random products
     * Used for places like error 404
     * @params we can take category as id = 1,2,3,4, or string 'electronics' or as an array of category eg array(2,5,8,9)
     * */
    /**
     * @param string $category
     * @param string $count
     * @return mixed
     */
    function randomproducts($category = '', $count =''){
        $select_query = " SELECT p.id, p.product_name, v.sale_price, v.discount_price, v.start_date, v.end_date, SUM(v.quantity) as item_left, g.image_name
        FROM products p JOIN (SELECT var.product_id, var.discount_price,var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var
        WHERE var.quantity > 0 ORDER BY var.id) AS v on(p.id = v.product_id) JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1)";
        if( $category != '' ){
            if( is_int( $category) ){
                $select_query .= " WHERE p.category_id = {$category}";
            }elseif( is_array( $category) ){
                $select_query .= " WHERE p.category_id IN ('". implode("','",$category). "') ";
            }else{
                // coming as a name or slug
                $id = $this->category_id( $category );
                $select_query .= " WHERE p.category_id = {$id} ";
            }
        }
        if( $count != '' ){
            $select_query .= " AND product_status = 'approved' GROUP BY p.id ORDER BY RAND() LIMIT {$count} ";
        }else{
            $select_query .= " AND product_status = 'approved' GROUP BY p.id ORDER BY RAND() LIMIT 12";
        }
        return $this->db->query($select_query)->result();
    }
    /*
     * Lets get all the queries for desktop views at the frontpage
     * */
    function desktop_display(){
        $select = "SELECT h.*, c.name, c.slug FROM homepage_setting h LEFT JOIN categories c ON (c.id = h.category_id) WHERE h.status = 'active' ORDER BY h.position LIMIT 1";
        return $this->db->query( $select)->result();
    }

    /*
     * Run your SQL as you wish
     * */
    function run_sql( $sql ){
        return $this->db->query( $sql )->result();
    }

    /*
     * Get commisssion price for a certain product
     * */
    function get_commission( $pid ){
        $category_id = $this->get_row('products', 'category_id', array( 'id' => $pid))->category_id;
        $price = $this->get_row('categories', 'commission', array('id' => $category_id))->commission;
        return $price;
    }

    /*
     * Update order item with code number*/
    function update_items( $order_code, $data) {
        try {
            $this->db->where('order_code', $order_code);
            return $this->db->update('orders', $data);
        } catch (Exception $e) {
            $error_array = array('error_action' => 'Failed to Update Order', 'error_message' => "A payment was successful for {$order_code} but could'nt update.");
            $this->product->insert_data('error_logs', $error_array);
        }
        return false;
    }

    function get_shipping_type( $id, $type ){
        switch ($type) {
            case 'shipping':
                $query = "SELECT CONCAT(b.first_name, ' ', b.last_name) billingname , CONCAT(b.phone, ' ', b.phone2) billingphone,
                CONCAT(b.address, ' ', s.name , ', ', a.name) billingaddress FROM billing_address b
                LEFT JOIN states s ON(s.id = b.sid)
                LEFT JOIN area a ON(a.id = b.aid) WHERE b.id = ?";
                return $this->db->query( $query, array( $id ))->row();
                break;
            case 'pickup':
                $query = "SELECT title, phones, emails, address FROM pickup_address WHERE id = ? ";
                return $this->db->query( $query, array( $id ))->row();
                break;
        }
    }

    /*
    * Top sales algorithm for homepage
    * Condition : views, no of sales , added whishlist , time posted
    * */
    function get_top_sales(){
        $query = "SELECT p.id, p.sku, p.category_id FROM products p 
              JOIN orders o ON (o.product_id = p.id) WHERE 
              p.product_status = 'approved' AND o.order_date <= DATE_SUB(CURDATE() ,INTERVAL 1 DAY) 
              GROUP BY p.id ORDER BY o.order_date, o.qty LIMIT 0,6";
        return $this->db->query( $query )->result();
    }


}

