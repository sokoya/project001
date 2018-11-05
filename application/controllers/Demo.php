<?php
/**
 * Created by PhpStorm.
 * User: Chidi Jeffrey
 * Date: 11/5/2018
 * Time: 10:23 AM
 */

class Demo extends CI_Controller
{
	public function index()
	{
		$page_data['title'] = 'Online shopping | Buy Electronics, Phones, Fashions in Nigeria';
		$this->load->view('landing/demo', $page_data);
	}
}
