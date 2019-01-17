<?php
use AfricasTalking\SDK\AfricasTalking;
defined('BASEPATH') OR exit('No direct script access allowed');
class AfricaSMS {

    public function sendsms(){
// Set your app credentials
        $username   = "ArtisansUsers";
//        $username   = "onitshamarket";
//        $apikey     = "d69b04b7fd1cf8b156a2fc04139b37dbef25c8acc990718aae7d3ed11db2d141";
        $apikey     = "2825a7e7a5988803c97852627500f5fc658964550c8cfe5616305acb352f127a";
// Initialize the SDK
        $AT         = new AfricasTalking($username, $apikey);
// Get the SMS service
        $sms        = $AT->sms();
// Set the numbers you want to send to in international format
        $recipients = "+2347087949904";
// Set your message
        $message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";
        try {
            $result = $sms->send(
                array(
                    'to' => $recipients,
                    'message' => $message,
                    'enqueue' => true
                ));
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}
