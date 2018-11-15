<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}

	public function index(){
		var_dump( $this->get_category_children( 'no-slug-8' ) );
		exit;
	}


	function get_category_children( $slug ) {
        $select = "SELECT pid FROM dummy_table WHERE slug LIKE '%$slug%' ";
        $result = $this->db->query($select)->row();

        $category_result = $this->db->query("SELECT id FROM dummy_table WHERE pid = ?", $result->pid )->result();
        $real_result = array();
        if( $category_result ) {
        	
            foreach( $category_result as $key ){
            	echo $key->id . ' <br />';
                // $real_result[] = $this->recussive( $key->id );
            }
        }else{
            $real_result[] = $result->id;
        }

        return $real_result;
    }

    // public $recussive_array = array();
    function recussive( $key ){
    	$array = array();
        $select = "SELECT id FROM dummy_table WHERE pid = $key";
        // die( $select );
        $query_result = $this->db->query($select);
        var_dump( $query_result );
        if( $query_result ){
        	$id = $query_result->row()->id;
            array_push( $array, $id);
            $this->recussive( $id);
        }else{
            return $array;
        }
    }

}
