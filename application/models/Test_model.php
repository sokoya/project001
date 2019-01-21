<?php
/**
 * Created by PhpStorm.
 * User: SokoyaPhilip
 * Date: 1/18/2019
 * Time: 10:24 PM
 */
Class Test_model extends CI_Model{

    function insert_data( $table = 'products', $data = array() ){
        try {
            $this->db->insert($table, $data);
            $result = $this->db->insert_id();
            return $result;
        } catch (Exception $e) {
            die( $e );
        }
        return false;
    }
    function get_products(){
        $this->db->where('product_status', 'approved');
        return $this->db->get('products')->result();
    }


    function get_variations( $id ){
        $this->db->where('product_id', $id);
        return $this->db->get('product_variation')->result();
    }


    function get_images( $id ){
        $this->db->where('product_id', $id);
        return $this->db->get('product_gallery')->result();
    }
}