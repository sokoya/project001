<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripe extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        var_dump( $_POST );
        exit;
//        \Stripe\Stripe::setApiKey("sk_test_j1NHfDoinTtxm25PyGNuV4xw");
//
//        $charge = \Stripe\Charge::create(array(
//                "amount" => 2000,
//                "currency" => "usd",
//                "source" => "tok_mastercard", // obtained with Stripe.js
//                "description" => "Charge for jenny.rosen@example.com"
//            ));
//        var_dump( $charge );
//        exit;

    }
}
