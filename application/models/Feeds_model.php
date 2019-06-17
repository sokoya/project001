<?php

Class Feeds_model extends CI_Model{


    function get_new_arrival( $array ){
        $select_query = "SELECT p.id, p.product_name, p.brand_name, p.seller_id, p.from_overseas, v.sale_price, v.discount_price, v.start_date,v.end_date, 
        SUM(v.quantity) item_left, g.image_name,s.store_name
            FROM products p";
        // Variation
        $select_query .= " JOIN (SELECT var.product_id, var.discount_price, var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var 
            WHERE var.quantity > 0 ORDER BY var.id) AS v ON (p.id = v.product_id)";

        // gallery
        $select_query .= " JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN sellers AS s ON p.seller_id = s.uid ";

        if( $array['is_limit'] == true ){
            $select_query .=" AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC LIMIT {$array['offset']},{$array['limit']}";
        }else{
            $select_query .=" AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC";
        }
        $products_query = $this->db->query( $select_query )->result();
        return $products_query;
    }


    // Get single product
    function get_product( $id = ''){
        return $this->db->query('SELECT p.*, u.legal_company_name, v.quantity 
        FROM products AS p 
        LEFT JOIN sellers AS u ON (p.seller_id = u.uid) 
        LEFT JOIN (SELECT var.product_id, SUM(var.qty) quantity FROM orders var) AS v ON ( p.id = v.product_id) 
        WHERE p.id = ? ', $id )->row();
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
//        die( $select_query );
        return $this->db->query($select_query)->result();
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

    /*
     * Get seller product
     * */

    function get_seller_products( $array ){
        $seller_id = $array['seller_id'];
        $query = "SELECT p.id, p.product_name,p.from_overseas,p.brand_name, v.sale_price, v.discount_price, v.start_date, v.end_date ,     
        SUM(v.quantity) as item_left, g.image_name
        FROM products p JOIN (SELECT var.product_id, var.discount_price,var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var
        WHERE var.quantity > 0 ORDER BY var.id) AS v on(p.id = v.product_id) 
        JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1)
        WHERE p.seller_id = {$seller_id}";

        if( $array['is_limit'] ){
            $query .= " AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC LIMIT {$array['offset']},{$array['limit']}  ";
        }else{
            $query .= " AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC ";
        }
        return $this->db->query( $query )->result();
    }

    /*
     * Get Seller Statictics
     * */
    function get_seller_statistics( $sid ){
        $query = "SELECT s.date_applied, s.store_name, s.date_applied, ov.quantity_sold
                FROM sellers s 
                LEFT JOIN (SELECT SUM(o.qty) quantity_sold, o.seller_id,o.product_id FROM orders o WHERE (o.payment_made = 'success' OR o.active_status ='completed') GROUP BY o.product_id) 
                AS ov ON (ov.seller_id = s.uid)
                WHERE s.uid = {$sid}";
        return $this->db->query( $query )->row();
    }

    /*
     * Get Seller rate
     * */
    function get_seller_rate( $sid ){
        $query = "SELECT p.id, ra.total_rate, ra.total_reviews FROM products p 
        LEFT JOIN (SELECT SUM(r.rating_score) total_rate, COUNT(r.product_id) total_reviews, r.product_id FROM product_rating r ) AS ra ON(ra.product_id = p.id) 
        WHERE p.seller_id = {$sid}";
        return $this->db->query( $query )->result_array();
    }

    /*
     * Fetch all the products relating to made in Nigeria
     * */
    function made_in_nigeria_products( $queries = '' , $gets = array() ){
        // $this->db->cache_on();
        // Lets confirm the slug is valid
        $this->load->model('product_model');
        if( isset($queries['str']) && !empty($queries['str']) ) {
            $select_query = "SELECT p.id, p.product_name, p.brand_name, p.seller_id, p.from_overseas, v.sale_price, v.discount_price, v.start_date,v.end_date, SUM(v.quantity) item_left, g.image_name,s.store_name
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

            $select_query .= " WHERE p.nigeria_state = '{$queries['str']}'";
            
            if( isset($gets['q']) && !empty($gets['q']) ) {
                $q = xss_clean( $gets['q']);
                $q = preg_replace("/[^a-z]/", ' ', $q);
                $select_query .= " AND p.product_name LIKE '%{$q}%' "; unset($gets['q']);
            }
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
                $select_query .=" AND p.nigeria = 1 AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC LIMIT {$queries['offset']},{$queries['limit']} ";
            }else{
                $select_query .=" AND p.nigeria = 1 AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC";
            }
            $products_query = $this->db->query( $select_query );
            if( $products_query ){
                return $products_query->result();
            }else{
                return '';
            }
        }else{

            $select_query = "SELECT p.id, p.product_name, p.brand_name, p.seller_id, p.from_overseas, v.sale_price, v.discount_price, v.start_date,v.end_date, SUM(v.quantity) item_left, g.image_name,s.store_name
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

            $select_query .= " WHERE p.nigeria = 1";

            if( isset($gets['q']) && !empty($gets['q']) ) {
                $q = xss_clean( $gets['q']);
                $q = preg_replace("/[^a-z]/", ' ', $q);
                $select_query .= " AND p.product_name LIKE '%{$q}%' "; unset($gets['q']);
            }
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
                $select_query .=" AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC LIMIT {$queries['offset']},{$queries['limit']} ";
            }else{
                $select_query .=" AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC";
            }
            $products_query = $this->db->query( $select_query )->result();
            return $products_query;
        }
    }


    function get_features($str){
        $select_query = "SELECT  json_unquote(json_extract(`attributes`, '$')) AS feature_value FROM products WHERE nigeria_state = '{$str}' AND product_status = 'approved' ";
        $query = $this->db->query( $select_query );
        if( $query ) {
            return $query->result_array();
        }else{
            return '';
        }
    }


    function get_brands( $str = '')
    {
        $select_query = "SELECT COUNT(*) AS `brand_count`, `brand_name` FROM `products` p  WHERE nigeria_state = '{$str}' AND product_status = 'approved' GROUP BY `brand_name` ORDER BY `brand_name`";
        $query = $this->db->query( $select_query );
        if ($query) {
            return $query->result();
        } else {
            return '';
        }
    }


    function get_colours( $str){
        $select_query = "SELECT DISTINCT(COUNT(*)) AS `colour_count`, `main_colour` AS `colour_name` FROM `products` p WHERE nigeria_state = '{$str}' AND product_status = 'approved' GROUP BY `colour_name` ORDER BY `colour_name`  ";
        $query = $this->db->query( $select_query );
        if( $query ){
            return $query->result();
        }else{
            return '';
        }
    }

    function get_categories( $str = ''){
        // Get all the i
        $array = $this->slug($str);
        $query = $this->db->query("SELECT name, slug FROM categories WHERE id IN ('". implode("','",$array). "') LIMIT 10 ");
        if( $query->num_rows() >= 1 ) {
            return $query->result();
        }else{
            // Select all categories then
            $query = $this->db->query("SELECT name, slug FROM categories LIMIT 10");
            return $query->result();
        }
    }

    function single_state_detail( $str ){
        $query = "SELECT c.description, c.name, c.title, c.slug, p.category_id FROM products p LEFT JOIN categories c ON(c.id = p.category_id) WHERE nigeria_state = ? ORDER BY RAND() LIMIT 1";
        $result = $this->db->query( $query , array($str));
        if( $result ){
            return $result->row();
        }else{
            return $result->row();
        }
    }

}

