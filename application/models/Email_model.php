<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email_model extends CI_Model {
    // Insert data
    function insert_data($table = 'error_logs', $data = array()){
        try {
            $this->db->insert($table, $data);
            $result = $this->db->insert_id();
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return $result;
    }

    function reset_password( $data ){
        $post = array(
            'subject' => 'Reset Password Confirmation',
            'to' => $data['email'],
            'from' => 'info@onitshamarket.com',
            'template' => 'UserPasswordReset',
            'merge_recipent' => $data['recipent'],
            'merge_reset_link' => $data['reset_link'],
            'isTransactional' => false
        );
        return $this->send_now($post);

    }

    // Welcome user for new account creates
    function welcome_user( $data ){
        $post = array(
            'subject' => 'Welcome to ' . lang('app_name'),
            'to' => $data['email'],
            'from' => 'info@onitshamarket.com',
            'template' => 'WelcomeNewUser',
            'merge_recipent' => $data['recipent'],
            'isTransactional' => false
        );
        return $this->send_now($post);
    }

    // Order completed
    function order_completed(){}

    // Curl function to send
    function send_now($post){
        $url = 'https://api.elasticemail.com/v2/email/send';
        try{

            $post['from'] = isset( $post['from']) ? $post['from'] : 'noreply@onitshamarket.com';
            $post['fromName'] = 'Onitshamarket';
            $post['apikey'] = ELASTIC_EMAIL_API;
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $post,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_SSL_VERIFYPEER => false
            ));
            $result = curl_exec($ch);
            curl_close ($ch);
            return $result;
        }catch(Exception $ex){
            $this->session->set_flashdata('error_msg',$ex->getMessage());
            return false;
        }
    }

    /*
     * Notify the seller that they have a new order request
     * */
    function sendBuyerOrder( $orders, $detail, $order_code, $link, $recipent){

        $loop = ''; $x = 1; $subtotal = $shipping = 0;
        $email_msg = '<!DOCTYPE html><html lang="en"><head> <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <title>Invoice | Onitshamarket.com</title> <style type="text/css"> 
            *{margin: 0; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;}img{max-width: 100%;}body{-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;}table td{vertical-align: middle;}body{background-color: #ecf0f5; color: #6c7b88}.body-wrap{background-color: #ecf0f5; width: 100%;}.container{display: block !important; max-width: 600px !important; margin: 0 auto !important; /* makes it centered */ clear: both !important;}.content{max-width: 600px; margin: 0 auto; display: block; padding: 20px;}.main{background-color: #fff; border-bottom: 2px solid #d7d7d7;}.content-wrap{padding: 20px;}.content-block{padding: 0 0 20px;}.header{width: 100%; margin-bottom: 20px;}.footer{width: 100%; clear: both; color: #999; padding: 20px;}.footer p, .footer a, .footer td{color: #999; font-size: 12px;}h1, h2, h3{font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; color: #1a2c3f; margin: 30px 0 0; line-height: 1.2em; font-weight: 400;}h1{font-size: 32px; font-weight: 500;}h2{font-size: 24px;}h3{font-size: 18px;}h4{font-size: 14px; font-weight: 600;}p, ul, ol{margin-bottom: 10px; font-weight: normal;}p li, ul li, ol li{margin-left: 5px; list-style-position: inside;}.btn-primary{text-decoration: none; color: #FFF; background-color: #2BA27D; border: solid #2BA27D; border-width: 10px 20px; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; text-transform: capitalize;}td a, td a:hover, td a::selection{text-decoration: none; color: white;}tr.menu{height: 50px;}.last{margin-bottom: 0;}.first{margin-top: 0;}.aligncenter{text-align: center;}.alignright{text-align: right;}.alignleft{text-align: left;}.clear{clear: both;}.alert{font-size: 16px; color: #fff; font-weight: 500; padding: 20px; text-align: center;}.alert a{color: #fff; text-decoration: none; font-weight: 500; font-size: 16px;}.alert.alert-warning{background-color: #FFA726;}.alert.alert-bad{background-color: #ef5350;}.alert.alert-good{background-color: #8BC34A;}.invoice{margin: 25px auto; text-align: left; width: 100%;}.invoice td{padding: 5px 0;}.invoice .invoice-items{width: 100%;}.invoice .invoice-items td{border-top: #eee 1px solid;}.invoice .invoice-items .total td{border-top: 2px solid #6c7b88; font-weight: 600; font-size: 16px;}@media screen and (max-width: 767px){.electronic{display: none !important;}}@media screen and (max-width: 420px){.toy{display: none !important;}}@media screen and (max-width: 360px){.grocery{display: none !important;}}@media screen and (max-width: 240px){.fashion{display: none !important;}}@media only screen and (max-width: 640px){body{padding: 0 !important;}.menu td a{font-size: 8px !important;}tr.menu{height: auto !important;}h1, h2, h3, h4{font-weight: 600 !important; margin: 20px 0 5px !important;}h1{font-size: 22px !important;}h2{font-size: 18px !important;}h3{font-size: 16px !important;}.container{padding: 0 !important; width: 100% !important;}.content{padding: 0 !important;}.content-wrap{padding: 10px !important;}.invoice{width: 100% !important;}}@media screen and (max-width: 380px){.price{display: none !important;}.total td{font-size: 14px !important;}}</style></head><body><table class="body-wrap"> <tr> <td></td><td class="container" width="600"> <div class="content"> <table class="main" width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td class="content-wrap"> <table width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="1"> <tr style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;"> <td colspan="6" style="text-align: center; background: white; margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <img src="https://www.onitshamarket.com/assets/img/onitshamarket-logo.png" style="margin: 0px; max-width: 40%; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;" alt="Onitshamaket.com"> </td></tr><tr style="background: rgb(43, 162, 125); color: white; text-align: center; margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; height: 50px;" class="menu"> <td class="electronic" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/catalog/electonics/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Electronics</a></td><td class="fashion" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/catalog/fashion/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Fashion</a></td><td class="grocery" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/catalog/gloceries/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Groceries</a></td><td class="computer" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/catalog/computers/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Computers</a></td><td class="phone" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/catalog/phones/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Phones</a></td><td class="toy" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Kids Toys</a></td></tr></table> </td></tr><tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td class="content-block aligncenter"> 
            <table class="invoice">';
        $email_msg .= '<tr><td>Dear ' .$recipent['name']. ',<br/></td></tr>';
        $email_msg .= '<b>Payment Method:</b> '.$detail->paymentname.'<br><h3>Order Summary</h3>';
        $shipping_info = '';
        $shipping_type_result = $this->user->get_last_singleorder( $order_code, $this->session->userdata('logged_id'));
        if( $shipping_type_result->billing_address_id != 0 ) {
            $address = $this->product->get_shipping_type( $shipping_type_result->billing_address_id, 'shipping');
            $shipping_info = '<tr>Shipping Type : ( Billing Address ) : ' . $address->billingname . ', ' . $address->billingphone.', <br />' . $address->billingaddress.'</tr>';
        }else{
            $address = $this->product->get_shipping_type( $shipping_type_result->pickup_location_id, 'pickup');
            $shipping_info = '<tr>Shipping Type ( Pickup Location ) : ' . $address->title.', ' .$address->phones. ', Email :' . $address->emails. '</tr>';
        }

        $email_msg .= '<tr><td><table class="invoice-items" cellpadding="0" cellspacing="0"><thead><tr><th>#</th><th>Item</th><th class="aligncenter price">Price</th><th class="aligncenter">Quantity</th><th class="alignright">Total</th></tr></thead>';
        $email_msg .= '<tbody>';
        $x = 1;
        foreach( $orders as $order ){
            $loop .= '<tr>';
                $loop .= '<td>0'. $x . '</td>';
                $loop .= '<td><a href="' .base_url(urlify($order->product_name, $order->id)). '">';
                $pr = character_limiter($order->product_name, 10);
                if( $order->variation ) {
                    $pr .= ' - '. $order->variation;
                }
                $loop .= $pr .'</a></td>';
                $loop .= '<td class="aligncenter price">' . ngn($order->amount) . '</td>';
                $loop .= '<td class="aligncenter">' .$order->qty .'</td>';
                $loop .= '<td class="alignright">' .ngn($order->amount * $order->qty) .'</td>';
            $subtotal += $order->amount * $order->qty;
            $shipping = $order->delivery_charge;
            $loop .= '</tr>';
            $x++;
        }

        $email_msg .= $loop;
        $email_msg .= '<tr class="total"><td colspan="2"></td><td class="price"></td><td>Delivery Fee</td>';
        $email_msg .= '<td class="alignright">' . ngn($shipping).'</td></tr>';
        $email_msg .= '<tr class="total"><td colspan="2"></td> <td class="price"></td><td class="">Total</td><td class="">'.ngn($subtotal + $shipping).'</td></tr>';
        $email_msg .= '</tbody></table></td></tr></table></td></tr></table></td></tr>';
        $email_msg .= '<tr><td class="content-block aligncenter"><a href="' .$link .'">View in browser</a></td></tr>';
        $email_msg .= '<tr><td class="content-block aligncenter">In case of any question or help feel free to contact our sales support representatives through <span style="text-decoration: none; color: #0b6427;">sales@onitshamarket.com</span></td></tr>';
        $email_msg .= '</table></td></tr></tbody></table></td></tr>';
        $email_msg .= '<tr>'. $shipping_info. '</tr></tbody></table>';
        $email_msg .= '<div class="footer"><table width="100%" cellspacing="0" cellpadding="0"><tbody>
                        <tr>
                            <td style="text-align: center;">
                                <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/facebook.png?width=120&height=120&name=facebook.png" alt="Facebook"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/twitter-1.png?width=120&height=120&name=twitter-1.png" alt="Twitter"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/sm-icons-instagram-app-icon.png?width=120&height=120&name=sm-icons-instagram-app-icon.png" alt="Instagram"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:\'Open Sans\', Arial, sans-serif; font-size:11px; line-height:18px; color:#999999;"
                                valign="top" align="center"><a href="#" target="_blank" style="color:#999999; text-decoration:underline;">PRIVACY STATEMENT</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">TERMS OF
                                SERVICE</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">RETURNS</a><br>
                                '.lang("copyright").'.<br> If you do not wish to receive any further emails from us, please <a href="#" target="_blank" style="text-decoration:none; color:#999999;">unsubscribe</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>';
        $email_msg .= '</div></td><td></td></tr></table></body></html>';
        return $this->do_email($email_msg , 'Your Onitshamarket Order - ' . $order_code. ' has been confirmed.', $recipent['email'], 'sales@onitshamarket.com');
        	
    }

    // Send mail to sellers about the new orders
    function sendSellerOrder( $selleretails ){
//        $link = lang('sellers_url') . 'orders/';
        $link = "https://seller.onitshamarket.com/orders/";
        $msg = '<!DOCTYPE html><html lang="en"><head> <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <title>Order Request | onitshamarket.com</title> <style type="text/css"> *{margin: 0; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;}img{max-width: 100%;}body{-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;}table td{vertical-align: middle;}body{background-color: #ecf0f5; color: #6c7b88}.body-wrap{background-color: #ecf0f5; width: 100%;}.container{display: block !important; max-width: 600px !important; margin: 0 auto !important; /* makes it centered */ clear: both !important;}.content{max-width: 600px; margin: 0 auto; display: block; padding: 20px;}.main{background-color: #fff; border-bottom: 2px solid #d7d7d7;}.content-wrap{padding: 20px;}.content-block{padding: 0 0 20px;}.header{width: 100%; margin-bottom: 20px;}.footer{width: 100%; clear: both; color: #999; padding: 20px;}.footer p, .footer a, .footer td{color: #999; font-size: 12px;}h1, h2, h3{font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; color: #1a2c3f; margin: 30px 0 0; line-height: 1.2em; font-weight: 400;}h1{font-size: 32px; font-weight: 500;}h2{font-size: 24px;}h3{font-size: 18px;}h4{font-size: 14px; font-weight: 600;}p, ul, ol{margin-bottom: 10px; font-weight: normal;}p li, ul li, ol li{margin-left: 5px; list-style-position: inside;}.btn-primary{text-decoration: none; color: #FFF; background-color: #2BA27D; border: solid #2BA27D; border-width: 10px 20px; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; text-transform: capitalize;}td a, td a:hover, td a::selection{text-decoration: none; color: white;}tr.menu{height: 50px;}.last{margin-bottom: 0;}.first{margin-top: 0;}.aligncenter{text-align: center;}.alignright{text-align: right;}.alignleft{text-align: left;}.clear{clear: both;}.alert{font-size: 16px; color: #fff; font-weight: 500; padding: 20px; text-align: center;}.alert a{color: #fff; text-decoration: none; font-weight: 500; font-size: 16px;}.alert.alert-warning{background-color: #FFA726;}.alert.alert-bad{background-color: #ef5350;}.alert.alert-good{background-color: #8BC34A;}.invoice{margin: 25px auto; text-align: left; width: 100%;}.invoice td{padding: 5px 0;}.invoice .invoice-items{width: 100%;}.invoice .invoice-items td{border-top: #eee 1px solid;}.invoice .invoice-items .total td{border-top: 2px solid #6c7b88; font-weight: 600; font-size: 16px;}@media screen and (max-width: 767px){.electronic{display: none !important;}}@media screen and (max-width: 420px){.toy{display: none !important;}}@media screen and (max-width: 360px){.grocery{display: none !important;}}@media screen and (max-width: 240px){.fashion{display: none !important;}}@media only screen and (max-width: 640px){body{padding: 0 !important;}.menu td a{font-size: 8px !important;}tr.menu{height: auto !important;}h1, h2, h3, h4{font-weight: 600 !important; margin: 20px 0 5px !important;}h1{font-size: 22px !important;}h2{font-size: 18px !important;}h3{font-size: 16px !important;}.container{padding: 0 !important; width: 100% !important;}.content{padding: 0 !important;}.content-wrap{padding: 10px !important;}.invoice{width: 100% !important;}}@media screen and (max-width: 380px){.price{display: none !important;}.total td{font-size: 14px !important;}}</style></head><body><table class="body-wrap"> <tr> <td></td><td class="container" width="600"> <div class="content"> <table class="main" width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td class="content-wrap"> <table width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="1"> <tr> <td colspan="6" style="text-align: center;background:white;">';
        $msg .= '<img src="'. base_url('assets/img/onitshamarket-logo.png').'" style="margin:auto;max-width: 60%;" alt="Onitshamaket.com"> </td></tr></table> </td></tr><tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td class="content-block aligncenter"> <table class="invoice" style="margin-top:-40px;"> <tr> <td class="content-block"> <h3>New Order Request</h3> </td></tr><tr> <td> Dear Seller, <br>This is to notify you that your item(s) has been ordered and should be made available for shipping in less than 2 days.<br><h3>Requested Item(s)</h3> </td></tr>';
        $msg .= '<tr><td><table class="invoice-items" cellpadding="0" cellspacing="0"><thead><tr><th></th><th>Item</th><th class="alignright">Qty</th></tr></thead><tbody>';

        $loop = '<tr>';
        foreach( $selleretails['products'] as $product) {
            $loop .= '<td><img width="20%" src="'.PRODUCTS_IMAGE_PATH.$product['image_name'].'" alt="Product Image"></td>';
            $loop .= '<td><a style="color: #0b6427; text-decoration: none;" href="' .base_url(urlify($product['product_name'], $product['product_id'])). '"> ' .character_limiter($product['product_name'], 20).  ' </a></td>';
            $loop .= '<td>' .$product['qty']. '</td>';
        }
        $loop .='</tr>';
        $msg .= $loop;
        $msg .= '</tbody></table></td></tr>';
        $msg .='</table> </td></tr><tr> <td class="content-block aligncenter"> <a href="' .$link. '" style="text-decoration: none;" class="btn-primary">View In Your Dashboard</a> </td></tr>';
        $msg .= '<tr> <td class="content-block aligncenter"> In case of any question or help feel free to contact our customer sales support representatives through <a href="mailto:sales@onitshamarket.com" style="text-decoration: none; color: #0b6427;">sales@onitshamarket.com</a> </td></tr></table> </td></tr></tbody> </table> </td></tr></tbody> </table> <div class="footer"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td style="text-align: center;"> <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/facebook.png?width=120&height=120&name=facebook.png" alt="Facebook"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/twitter-1.png?width=120&height=120&name=twitter-1.png" alt="Twitter"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/sm-icons-instagram-app-icon.png?width=120&height=120&name=sm-icons-instagram-app-icon.png" alt="Instagram"/> </td></tr><tr> <td style="font-family:\'Open Sans\', Arial, sans-serif; font-size:11px; line-height:18px; color:#999999;" valign="top" align="center"><a href="#" target="_blank" style="color:#999999; text-decoration:underline;">PRIVACY STATEMENT</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">TERMS OF SERVICE</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">RETURNS</a><br>© 2018 Onitshamarket.com. All Rights Reserved.<br>If you do not wish to receive any further emails from us, please <a href="#" target="_blank" style="text-decoration:none; color:#999999;">unsubscribe</a> </td></tr></tbody> </table> </div></div></td><td></td></tr></table></body></html>';
        return $this->do_email($msg , 'Congrats! New Order Request. ' , $selleretails['email'], 'sales@onitshamarket.com');
    }

    function orderCompleted( $orders, $order_code, $buyer){
        //  Head
        $mail_template = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Order Completed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<br/>
<table align="center" border=0" cellpadding="0" cellspacing="0" width="600"
       style="border-collapse: collapse;border: 1px solid #cccccc;">
    <tr>
        <td align="center" style="padding: 10px 0 10px 0; display: block">
            <img src="https://www.onitshamarket.com/assets/img/newlogo.png" alt="Onitsha market logo" width="200"
                 height="44"/>
        </td>
    </tr>';
        // Menu link
        $mail_template .= '<tr>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                   style="border-collapse: collapse; border: 1px solid #cccccc; border-left: none; border-right: none">
                <tr>
                    <td style="padding: 10px 10px 10px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                               style="color: #333333; font-family: Arial, sans-serif; font-size: 11px; font-weight: lighter; border-collapse: collapse;">
                            <tr>
                                <th style="text-align:center;"><a href="'.base_url('catalog/fashion/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Fashion</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/phones/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Phones</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/computers/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Computers</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/electronics/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Electronics</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/home-appliances/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Home
                                    appliances</span></a></th>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>';
        // Introduction
        $link = base_url('account/orderstatus/') . $order_code .'/';
        $mail_template .= '<tr>
        <td style="padding: 30px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
            <p>Dear ' .$buyer["name"]. ',</p>
            <p>Thank you for shopping with us. Your order <b>'. $order_code.'</b> has been placed successfully  here is the
                summary of the order:
            </p>
            <p>If you have any questions about this order, please contact us at <b>' . lang("contact_no"). '</b> or visit our '. anchor(base_url("pages/faq/"), "FAQ").'.
                Remember to include your reference number - <b>' . $order_code. '</b>.</p>
            <p>Track your order with this link <b>' . anchor( $link, "Track Order"). '</b>.</p>    
        </td>
    </tr>';
        // Orders
        $mail_template .= '<tr>
        <td style="padding: 3px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
            <p><b>You ordered for:</b></p>
            <table cellpadding="0" cellspacing="0" border="0" width="100%"
                   style="border-collapse: collapse; border: 1px solid #cccccc;">
                <thead>
                <tr>
                    <th style="background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px"></th>
                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                        ITEM
                    </th>
                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                        QUANTITY
                    </th>
                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                        PRICE
                    </th>
                </tr>
                </thead>
                <tbody>';

        $delivery_fee = $total = $payment_method = $subtotal = $order_loop = $payment_reference = $txn_ref = $payment_description = '';
        foreach( $orders as $order ){
            $name = character_limiter( $order->product_name, 10);
            $order_loop .= '
                    <tr style="padding-bottom: 3px; border-bottom: 1px solid #cccccc;">
                        <td align="center">
                            <img src="'.PRODUCTS_IMAGE_PATH.$order->image_name. '" alt="Product" height="40" width="40"/>
                        </td>
                        <td width="50%" align="center">'.$name.'</td>
                        <td align="center">'.$order->qty.'</td><td align="center">₦ ' .$order->amount. '</td>
                    </tr>';
            $delivery_fee = $order->delivery_charge;
            $total += $order->amount * $order->qty;
            $payment_method = $order->payment_method;
            $payment_reference = $order->payRef;
            $txn_ref = $order->txnref;
            $payment_description = $order->paymentDesc;
        }
        $mail_template .= $order_loop;

        $mail_template .='
                </tbody>
            </table>
            <br/>
            
            <table cellpadding="0" cellspacing="0" border="0" width="100%"
                   style="font-size: 13px;border-collapse: collapse; border: 1px solid #cccccc">
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>SHIPPING COST</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">₦ ' .$delivery_fee. '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>DISCOUNT</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">₦ 0</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>TOTAL</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">₦ ' . ( $total + $delivery_fee). '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>PAYMENT METHOD</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' . $payment_method. '</td>
                </tr>
            </table><br />';
        // Transaction reference purposes
        $mail_template .= '<table cellpadding="0" cellspacing="0" border="0" width="100%"
                   style="font-size: 13px;border-collapse: collapse; border: 1px solid #cccccc">
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>Transaction Reference</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' .$txn_ref. '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>Payment Reference</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' .$payment_reference. '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>Reason </b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' .$payment_description. '</td>
                </tr>
            </table>';

        $mail_template .= '<p>If you would like to know more about our services, please also refer to these FAQs from our
                customers.</p>
            <p>Happy Shopping!</p>
            <p><b>Onitshamarket Team</b></p>
        </td>
    </tr>';
        // Footer
        $mail_template .= '<tr style="color: #153643; font-family: Arial, sans-serif; font-size: 12px;">
        <td style="padding: 10px 10px 10px 10px; border: 1px solid #cccccc;" align="center">
            ' .lang("office_address"). ', ' .lang("domain"). '
        </td>
    </tr>';
        // The end
        $mail_template .= '</table><br/><br/></body></html>';

        return $this->do_email($mail_template, 'Your Order - '. $order_code .' payment was successful.', $buyer['email'], 'sales@onitshamarket.com');
    }

    /*
     *  Send payment uncompleted notifucation to buyer
     * */
    function paymentUncompleted($order_code , $buyer){
        $mail_template = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Payment Unsuccessful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<br/>
<table align="center" border=0" cellpadding="0" cellspacing="0" width="600"
       style="border-collapse: collapse;border: 1px solid #cccccc;">
    <tr>
        <td align="center" style="padding: 10px 0 10px 0; display: block">
            <img src="https://www.onitshamarket.com/assets/img/newlogo.png" alt="Onitsha market logo" width="200"
                 height="44"/>
        </td>
    </tr>';
        // Menu link
        $mail_template .= '<tr>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                   style="border-collapse: collapse; border: 1px solid #cccccc; border-left: none; border-right: none">
                <tr>
                    <td style="padding: 10px 10px 10px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                               style="color: #333333; font-family: Arial, sans-serif; font-size: 11px; font-weight: lighter; border-collapse: collapse;">
                            <tr>
                                <th style="text-align:center;"><a href="'.base_url('catalog/fashion/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Fashion</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/phones/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Phones</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/computers/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Computers</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/electronics/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Electronics</span></a></th>
                                <th style="text-align:center;"><a href="'.base_url('catalog/home-appliances/').'"
                                                                  style="text-decoration:none; color: #333333;"><span
                                        color="#333333">Home
                                    appliances</span></a></th>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>';
        // Introduction
        $mail_template .= '<tr>
        <td style="padding: 30px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
            <p>Dear ' .$buyer["name"]. ',</p>
            <p>Thank you for shopping with us. Unfortunately, your order <b>'. $order_code.'</b> payment was unsuccessful,
            </p>
            <p><b>This could have happened because:</b></p>
            <ul>
                <li style="padding-bottom: 7px">You attempted to pay via international Debit/Credit card but we only
                    accept local cards.
                </li>
                <li style="padding-bottom: 7px">You attempted to pay via Debit/Credit Card but wrongly introduced the
                    PIN code or your card is not
                    profiled for online payment.
                </li>
                <li style="padding-bottom: 7px">You have not registered/activated your bank\'s 3D Secure system.</li>
                <li style="padding-bottom: 7px">You have insufficient funds.</li>
            </ul>
            <p>If any amount was debited from your mobile money/bank account, please fill our Contact Us form or call
                '.lang("contact_no").' for the refund.</p>
        </td>
    </tr>';
        // Orders
        $mail_template .= '<tr>
        <td style="padding: 3px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
            <p><b>You ordered for:</b></p>
            <table cellpadding="0" cellspacing="0" border="0" width="100%"
                   style="border-collapse: collapse; border: 1px solid #cccccc;">
                <thead>
                <tr>
                    <th style="background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px"></th>
                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                        ITEM
                    </th>
                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                        QUANTITY
                    </th>
                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                        PRICE
                    </th>
                </tr>
                </thead>
                <tbody>';

        $delivery_fee = $total = $payment_method = $subtotal = $order_loop = $payment_reference = $txn_ref = $payment_description = '';
        $uid = $this->session->userdata('logged_id');
        $orders = $this->get_my_lastorders( $order_code, $uid );
        foreach( $orders->result() as $order ){
            $name = character_limiter( $order->product_name, 10);
            $order_loop .= '
                    <tr style="padding-bottom: 3px; border-bottom: 1px solid #cccccc;">
                        <td align="center">
                            <img src="'.PRODUCTS_IMAGE_PATH.$order->image_name. '" alt="Product" height="40" width="40"/>
                        </td>
                        <td width="50%" align="center">'.$name.'</td>
                        <td align="center">'.$order->qty.'</td><td align="center">₦ ' .$order->amount. '</td>
                    </tr>';
            $delivery_fee = $order->delivery_charge;
            $total += $order->amount;
            $payment_method = $order->payment_method;
            $payment_reference = $order->payRef;
            $txn_ref = $order->txnref;
            $payment_description = $order->paymentDesc;
        }
        $mail_template .= $order_loop;

        $mail_template .='
                </tbody>
            </table>
            <br/>
            <table cellpadding="0" cellspacing="0" border="0" width="100%"
                   style="font-size: 13px;border-collapse: collapse; border: 1px solid #cccccc">
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>SHIPPING COST</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">₦ ' .$delivery_fee. '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>DISCOUNT</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">₦ 0</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>TOTAL</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">₦ ' . ( $total + $delivery_fee). '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>PAYMENT METHOD</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' . $payment_method. '</td>
                </tr>
            </table><br />';
        // Transaction reference purposes
        $mail_template .= '<table cellpadding="0" cellspacing="0" border="0" width="100%"
                   style="font-size: 13px;border-collapse: collapse; border: 1px solid #cccccc">
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>Transaction Reference</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' .$txn_ref. '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>Payment Reference</b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' .$payment_reference. '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>Reason </b></td>
                    <td style="padding: 6px 6px 6px 6px" align="right">' .$payment_description. '</td>
                </tr>
            </table>';

        $mail_template .= '<p>If you would like to know more about our services, please also refer to these FAQs from our
                customers.</p>
            <p>Happy Shopping!</p>
            <p><b>Onitshamarket Team</b></p>
        </td>
    </tr>';
        // Footer
        $mail_template .= '<tr style="color: #153643; font-family: Arial, sans-serif; font-size: 12px;">
        <td style="padding: 10px 10px 10px 10px; border: 1px solid #cccccc;" align="center">
            ' .lang("office_address"). ', ' .lang("domain"). '
        </td>
    </tr>';
        // The end
        $mail_template .= '</table><br/><br/></body></html>';
        return $this->do_email($mail_template, 'Your Order - '. $order_code .' payment was unsuccessful.', $buyer['email'], 'sales@onitshamarket.com');
    }
    /***custom email sender****/


    /*
    * Get most recent order for invoice
    * */
    function get_my_lastorders($order, $buyer_id)
    {
        $query = "SELECT p.id, p.product_name, o.seller_id, o.product_id, u.email selleremail, o.amount, o.pickup_location_id, o.billing_address_id, o.order_date, 
        o.delivery_charge, o.qty,o.product_variation_id, o.txnref, o.payRef, o.paymentDesc,
        v.variation, g.image_name, pay.name payment_method FROM orders o
        JOIN product_variation v ON (o.product_variation_id = v.id)
        JOIN products p ON (o.product_id = p.id) 
        JOIN product_gallery g ON (g.product_id = p.id AND g.featured_image = 1)
        JOIN users u ON (u.id = o.seller_id)
        JOIN payment_methods pay ON ( pay.id = o.payment_method)
        WHERE o.order_code = {$order} AND o.buyer_id = {$buyer_id}";
        return $this->db->query($query);
    }

    /*
     * Get just one single row of the last order to send SMS and mail
     * */
    function get_last_singleorder($order, $buyer_id)
    {
        $query = "SELECT o.amount,o.pickup_location_id, o.billing_address_id, p.name paymentname, o.order_date, o.payment_method,
        se.seller_phone, se.legal_company_name
        FROM orders o 
        LEFT JOIN payment_methods p ON (o.payment_method = p.id)
        LEFT JOIN sellers se ON (se.uid = o.seller_id)
        WHERE o.order_code = {$order} AND o.buyer_id = {$buyer_id} ORDER BY o.id DESC LIMIT 1";
        return $this->db->query($query)->row();
    }


    function do_email($msg=NULL, $sub=NULL, $to=NULL, $from=NULL){

        $config = array();
        $config['useragent']	= "CodeIgniter";
//        $config['mailpath']		= "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']		= "smtp";
        $config['smtp_host']	= "localhost";
        $config['smtp_port']	= "25";
        $config['mailtype']		= 'html';
        $config['charset']		= 'utf-8';
        $config['newline']		= "\r\n";
        $config['wordwrap']		= TRUE;
        $this->load->library('email');
//        $this->email->clear();
        $this->email->initialize($config);
        $system_name	=	lang('app_name');
        if($from == NULL)
            $from		=	'noreply@onitshamarket.com';
        $this->email->from($from, $system_name);
        $this->email->to($to);
        $this->email->subject($sub);
        $this->email->message($msg);
        $this->email->send();
        return true;
    }
}