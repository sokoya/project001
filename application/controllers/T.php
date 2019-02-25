<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * This T class will validate short url for the site
 * */
class T extends CI_Controller {
    /**
     * Index Page for this controller.
     */
    public function index(){ redirect(base_url()); }

    public function code(){
        $code = cleanit($this->uri->segment(2));
        if( !$code ) redirect( base_url() );

        $length = count( $code );
        switch ($length) {
            case 5:
                break;
            case 6:
                break;
            default:
                break;
        }

    }
}