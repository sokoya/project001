<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * A general site library .
 * */
class Sitelib {
    public function __construct() {}

    /*
     * Interswitch requery and API query
     * @param : array - Necessary credentials for curl
     * */
    function interswitch_curl( $data = array()){
        $parameters = array(
            "productid" => INTERSWITCH_PRODUCT_ID,
            "transactionreference"  =>  $data['txn_ref'],
            "amount"    =>  $data['amount']
        );
        $thash = INTERSWITCH_PRODUCT_ID.$data['txn_ref'].INTERSWITCH_MAC_KEY;
        $ponmo = http_build_query($parameters);
        $url = INTERSWITCH_RESPONSE_URL .'?'. $ponmo; // json
        $host = INTERSWITCH_HOST_URL;
        $headers = array(
            "GET /HTTP/1.1",
            "Host: $host",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept: */* ",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Connection: keep-alive",
            "Hash: " . $thash
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POST, false );
        $response = curl_exec($ch);
        $response = json_decode( $response , TRUE);
        curl_close( $ch );
        return $response;
    }


}