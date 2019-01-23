<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Seo extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        $this->load->database();
        $query = $this->db->get("products");
        $data['products'] = $query->result();
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view('sitemap', $data);
    }

    public function media(){

    }

    public function categories(){

    }


    public function robots(){
        $this->load->view('robots.txt');
    }
}