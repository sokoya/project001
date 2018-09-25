<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Routes to this controller for  (:any)
class Category extends CI_Controller {

	public function index(){
	    // where the action lies
        /*
         * Sanitize the data coming in :
         * Targeting the following keys first
         *      = root category
         *      = category
         *      = sub category
         * */
		$this->load->view('landing/category');
	}
}
