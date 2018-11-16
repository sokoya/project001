<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}
	public function index( ){ }


	function categories( $s ){
		$slug = $s;
		$GLOBALS['array_var'] = array();
		$select_category = "SELECT id FROM dummy_table WHERE slug = ?";
		$id = $this->db->query($select_category, $slug)->row()->id;
		$this->new_function( $id );
		$array = array_filter($GLOBALS['array_var']);
		$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
		$new_array = array();
		foreach( $it as $v ){ array_push( $new_array, $v); }
		array_push( $new_array, $id );
		var_dump( $new_array );
	}

	function new_function( $id ){
		$category_id = $id;
		$total_categories = $this->db->get('dummy_table')->result_array();
		$count = count( $total_categories );

		$data =  array();
		for ($i=0; $i < $count; $i++) { 
			if( $total_categories[$i]['pid'] == $category_id ){
				array_push( $data , $total_categories[$i]['id'] );
			}
		}
		array_push( $GLOBALS['array_var'], $data);
		foreach ($data as $key => $value) {
			$this->new_function($value);
		}
	}
}
