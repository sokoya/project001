<?php
if(!function_exists('salt')){
 	function salt($length) {
	     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789;:?.>,<!@#$%^&*()-_=+|';
	     $randStringLen = $length;

	     $randString = "";
	     for ($i = 0; $i < $randStringLen; $i++) {
	         $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
	     }

	     return $randString;
	}
}

if(!function_exists('generate_token')){
 	function generate_token($length) {
	     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	     $randStringLen = $length;

	     $randString = "";
	     for ($i = 0; $i < $randStringLen; $i++) {
	         $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
	     }

	     return $randString;
	}
}

if (!function_exists('shaPassword')) {
	function shaPassword($field = "", $salt = "")  {
		if($field) {
			return hash('sha256', $field.$salt);
		}
	}
}

if (!function_exists('plushrs')) {
	function plushrs($dt, $hrs){
		$pure = strtotime($dt);
		$plus = ($pure + 60*60*$hrs);
		$newPure = date('Y-m-d H:i:s', $plus);
		return $newPure;
	}
}

if (!function_exists('ngn')) {
	function ngn($amt = ''){
        if ($amt == '') $amt = '0';
           return '₦'.number_format($amt, 2, '.', ',');
	}
}

if (!function_exists('get_now')) {
	function get_now(){
		return gmdate("Y-m-d H:i:s", time());
	}
}

function get_percentage($total, $number){
 	if ( $total > 0 ) {
 		return round($number / ($total / 100),2);
  	} else {
    	return 0;
  	}
}

function ago($time){
	$time = strtotime($time);
	$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	$lengths = array("60","60","24","7","4.35","12","10");

	$now = time();

	   $difference     = $now - $time;
	   $tense         = "ago";

	for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	   $difference /= $lengths[$j];
	}

	$difference = round($difference);

	if($difference != 1) {
	   $periods[$j].= "s";
	}

	return "$difference $periods[$j] ago ";
}


function cleanit($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Clean phone number
function phoneclean($num) {
    $num = preg_replace('/\D/', '', $num);
   	$len = strlen($num);
   	$accurate = $len - 10;
   	$realNUM = substr($num,$accurate);
   	return '0'.$realNUM;
}

function urlify($string){
    return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
}

function clean_specification($string){
	$str = explode("_", $string);
	return ucfirst($str[1]);
}

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

    function get_specifications_fields($sub_cat_id){
        $CI =& get_instance();
        $CI->db->select('specifications');
        $CI->db->from(SUB_CATEGORY_TABLE);
        $CI->db->where('sub_category_id', $sub_cat_id);
        $specifications = $CI->db->get()->row();
        $specs = json_decode( $specifications, TRUE );
        foreach ($specs as $spec) {
        	$CI->db->select(TABLE_PREFIX.$spec);
        	$CI->db->get();
        }
        // foreach( $CI->db->get()->result as $specifications ){

        // }

        // 
        // return $CI->db->get()->result();
    }
}





?>
