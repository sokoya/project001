<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		// Get the general settings
		$general_settings = $this->db->get('general_settings')->row();
		define('FACEBOOK_LINK', $general_settings->facebook_link);
		define('INSTAGRAM_LINK', $general_settings->instagram_link);
		define('TWITTER_LINK', $general_settings->twitter_link);
		define('DESCRIPTION', $general_settings->description);
		define('KEYWORD', $general_settings->keywords);
	}
}