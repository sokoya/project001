<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stripe {

    protected $recipents;
    public function __construct( $recipents = array()){
        $this->recipents = $recipents;
    }

    public function sendsms(){
// Set your app credentials
        // $username   = "onitshamarket";
        // $apikey     = "d69b04b7fd1cf8b156a2fc04139b37dbef25c8acc990718aae7d3ed11db2d141";
        $username   = "ArtisansUsers";
        $apikey     = "2825a7e7a5988803c97852627500f5fc658964550c8cfe5616305acb352f127a";
        $AT         = new AfricasTalking($username, $apikey);
        $sms        = $AT->sms();
        if( is_array($this->recipents) && !empty($this->recipents)){
            foreach( $this->recipents as $key => $message  ){
                // remove the preceeding
                if( !empty( $key ) || !is_null($key) ){
                    $recipent = $this->remove( $key );
                    $message = $this->message;
                    try {
                        $sms->send(array(
                            'to' => $recipent,
                            'message' => $message,
                            'enqueue' => true
                        ));
                    } catch (Exception $e) {
                    }
                }
            }
        }
    }

    function remove( $recipent ){
        $recipent = preg_replace('/^0/','+234',$recipent);
        return $recipent;
    }
}
