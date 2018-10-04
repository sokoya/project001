<?php

Class Product_model extends CI_Model{
    // Update table
    function update_data( $access = '' , $data = array(), $table_name = 'users'){
        $this->db->where('id', $access);
        $this->db->or_where('email', $access);
        return $this->db->update( $table_name, $data );
    }

    function get_product( $id = ''){
        return $this->db->query('SELECT id, sku, seller_id, rootcategory, category, subcategory, sku, product_name, brand_name, model,
                                main_colour, product_description, in_the_box, highlights, product_line, colour_family, main_material,
                                dimensions, weight, attributes, product_warranty, warranty_type, warranty_address, certifications, 
                                product_status FROM products WHERE id = ? ', $id )->row();
    }


    function get_menu_categories(){
        $select = "SELECT root.root_category_id, root.icon, root.title, root.name AS root_name, cat.name AS category_name, GROUP_CONCAT(sub.name SEPARATOR ', ') AS sub_name
        FROM root_category root
        JOIN (SELECT GROUP_CONCAT(c.name SEPARATOR ', ') AS name, c.root_category_id AS id, c.category_id AS cid FROM category c GROUP BY cid) AS cat ON (cat.id = root.root_category_id)
        JOIN sub_category AS sub ON (cat.cid = sub.category_id)
        GROUP BY root.root_category_id";
        return $this->db->query( $select )->result();
    }

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

    function get_variation( $id = ''){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ?', $id)->row();
    }

    function get_variations( $id ){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ? ', $id)->result();
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
        $select_query = "SELECT p.id, p.product_name, p.seller_id, v.sale_price, v.discount_price,g.image_name,s.first_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN sellers AS s ON p.seller_id = s.id ";
        if( $d['str'] != '' ){
            $select_query .= " WHERE ( MATCH(p.rootcategory) AGAINST('{$d['str']}') "; 

            if( isset($gets) && count($gets) ){
                if( isset($gets['page']) ) unset($gets['page']);
                foreach( $gets as $key => $value ){
                    $explode = explode(',', $value);
                    if( count($explode) > 1 ){
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
                        $select_query .= " AND JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%' ";
                    }                    
                }
            } 

            $select_query .= " )";

            $select_query .= " OR (MATCH(p.category) AGAINST('{$d['str']}') ";

            if( isset($gets) && count($gets) ){
                if( isset($gets['page']) ) unset($gets['page']);
                foreach( $gets as $key => $value ){
                    $explode = explode(',', $value);
                    if( count($explode) > 1 ){
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
                        $select_query .= " AND JSON_EXTRACT(`attributes`, '$.\"$key\"') LIKE '%{$value}%' ";
                    }                    
                }
            }

            $select_query .= " )";

            $select_query .= " OR (MATCH(p.subcategory) AGAINST('{$d['str']}') ";

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
        return $products_query;
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
        return $this->db->query('SELECT s.first_name name, i.image_name image FROM sellers s JOIN product_gallery i ON (s.id = i.product_id AND i.featured_image = 1) ')->row();
    }
}
