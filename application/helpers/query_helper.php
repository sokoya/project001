<?php
// Query helper functions
// This helper functions helps in fecthing the DB in instance

if (!function_exists('get_root_category_name')){
    function get_root_category_name( $id ){
        $CI =& get_instance();
        $CI->db->from(ROOT_CATEGORY_TABLE);
        $CI->db->where('root_category_id', $id);
        return $CI->db->get()->row()->name;
    }
}



if( !function_exists('get_specifications_tables')){
    /**
     * @return mixed
     */
    function get_specifications_tables(){
		$CI =& get_instance();
		return $CI->db->query("SHOW TABLES FROM " .DB_NAME. " LIKE '%" .str_replace("_", "", TABLE_PREFIX) . "\_%' ")->result_array();
	}
}



if (!function_exists('get_categories_by_root_id')){
    /**
     * @param $id
     * @return mixed
     */
    function get_categories_by_root_id($id){
        $CI =& get_instance();
        $CI->db->select('category_id, name');
        $CI->db->from(CATEGORY_TABLE);
        $CI->db->where('root_category_id', $id);
        return $CI->db->get()->result();
    }
}


if (!function_exists('get_subcategories_by_root_id')){
    /**
     * @param $id
     * @return mixed
     */
    function get_subcategories_by_root_id($id){
        $CI =& get_instance();
        $CI->db->select('sub_category_id, name');
        $CI->db->from(SUB_CATEGORY_TABLE);
        $CI->db->where('category_id', $id);
        return $CI->db->get()->result();
    }
}


if (!function_exists('get_specifications_fields')){
	/**
     * @param $sub_cat_id
     * @return mixed (form builder label)
     */
    function get_specifications_fields($sub_cat_id){
        $CI =& get_instance();
        $CI->db->select('specifications');
        $CI->db->from(SUB_CATEGORY_TABLE);
        $CI->db->where('sub_category_id', $sub_cat_id);
        $specifications = $CI->db->get()->row()->specifications;
        $specs = json_decode($specifications);
        // $spec_array = $main_array = array();
        $option_array =  array();
        foreach ($specs as $spec) {
        	$CI->db->select('*');
        	$CI->db->from(TABLE_PREFIX.$spec);
        	$options = $CI->db->get()->result_array();
        	if( !empty($options)) {
	        	foreach( $options as $option){
	        		$opt['id'] = $option[$spec .'_id'];
	        		$opt['name'] = $option[$spec .'_name'];
	        		array_push( $option_array, $opt);
	        	}
        	}
	        $spec_array[][$spec] = $option_array;
        }       
        echo json_encode( $spec_array );
        exit;
    }
}
?>