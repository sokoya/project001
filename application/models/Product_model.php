<?php

Class Product_model extends CI_Model{
    // Update table
    function update_data( $access = '' , $data = array(), $table_name = 'users'){
        $this->db->where('id', $access);
        $this->db->or_where('email', $access);
        return $this->db->update( $table_name, $data );
    }

    function get_product( $id = ''){
        return $this->db->query('SELECT seller_id, rootcategory, category, subcategory, sku, product_name, brand_name, model,
                                main_colour, product_description, in_the_box, highlights, product_line, colour_family, main_material,
                                dimensions, weight, attributes, product_warranty, warranty_type, warranty_address, certifications, 
                                product_status FROM products WHERE id = ? ', $id )->row();
    }

    function get_variation( $id = ''){
        return $this->db->query('SELECT * FROM product_variation WHERE product_id = ? LIMIT 1', $id)->row();
    }

    function get_gallery( $id ){
        $this->db->where('product_id', $id);
        $this->db->select('*');
        $this->db->from('product_gallery');
        $this->db->group_by('product_id');
        return $this->db->get();
    }

    function get_products( $str ='' ){
        $select_query = "SELECT p.id, p.product_name, p.seller_id, v.sale_price, v.discount_price,g.image_name,s.first_name
            FROM products p                        
            JOIN product_variation AS v ON (p.id = v.product_id) 
            JOIN product_gallery AS g ON ( p.id = g.product_id AND g.featured_image = 1 )                
            JOIN sellers AS s ON p.seller_id = s.id ";
        if( $str != '' ){
            $select_query .= " 
            WHERE MATCH(p.rootcategory) AGAINST('$str') OR
            MATCH(p.category) AGAINST('$str') OR
            MATCH(p.subcategory) AGAINST('$str') OR
            MATCH(p.brand_name) AGAINST('$str')
            GROUP BY p.id";
        }
        $products_query = $this->db->query( $select_query )->result();
        return $products_query;
    }

    function get_brands( $str ='' ){
        $select_query = "SELECT COUNT(*) AS `brand_count`, `brand_name` FROM `products` p ";
        if( $str != ''){
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
        // SELECT DISTINCT JSON_UNQUOTE(JSON_EXTRACT(`attributes` , '$.*')) AS feature_value FROM products
        $select_query = "SELECT DISTINCT JSON_UNQUOTE(JSON_EXTRACT(`attributes`, '$')) AS feature_value FROM products";
        if( $str != ''){
            $select_query .= " WHERE MATCH(rootcategory) AGAINST('$str') OR
            MATCH(category) AGAINST('$str') OR
            MATCH(subcategory) AGAINST('$str') OR
            MATCH(brand_name) AGAINST('$str')";
        }
        return $this->db->query( $select_query )->result_array();
    }
}
