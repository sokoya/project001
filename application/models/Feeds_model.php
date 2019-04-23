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
     * Get seller product*/

    function get_seller_products( $array ){
        $seller_id = $array['seller_id'];
        $query = "SELECT p.id, p.product_name,p.from_overseas,p.brand_name, v.sale_price, v.discount_price, v.start_date, v.end_date ,     
        SUM(v.quantity) as item_left, g.image_name, ov.quantity_sold
        FROM products p JOIN (SELECT var.product_id, var.discount_price,var.sale_price, var.start_date, var.end_date, var.quantity FROM product_variation var
        WHERE var.quantity > 0 ORDER BY var.id) AS v on(p.id = v.product_id) 
        JOIN product_gallery AS g ON (p.id = g.product_id AND g.featured_image = 1)
        LEFT JOIN (SELECT SUM(o.qty) quantity_sold, o.seller_id FROM orders o WHERE  (o.payment_made = 'success' OR o.active_status ='completed')) AS ov ON (ov.seller_id = p.seller_id)
        WHERE p.seller_id = {$seller_id}";

        if( $array['is_limit'] ){
            $query .= " AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC LIMIT {$array['offset']},{$array['limit']}  ";
        }else{
            $query .= " AND p.product_status = 'approved' GROUP BY p.id ORDER BY p.id DESC ";
        }
        return $this->db->query( $query )->result();
    }


    /*
     * Get single row detail
     * */
    function get_row( $table_name, $select ='', $condition = '' ){
        if( $select != '' ){
            $this->db->select($select);
        }
        if( !empty( $condition ) ){
            $this->db->where( $condition );
        }
        return $this->db->get( $table_name )->row();
    }
}

