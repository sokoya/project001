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
        $email_msg = '<!DOCTYPE html><html lang="en"><head> <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <title>Invoice | onitshamarket.com</title> <style type="text/css"> *{margin: 0; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;}img{max-width: 100%;}body{-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;}table td{vertical-align: middle;}body{background-color: #ecf0f5; color: #6c7b88}.body-wrap{background-color: #ecf0f5; width: 100%;}.container{display: block !important; max-width: 600px !important; margin: 0 auto !important; /* makes it centered */ clear: both !important;}.content{max-width: 600px; margin: 0 auto; display: block; padding: 20px;}.main{background-color: #fff; border-bottom: 2px solid #d7d7d7;}.content-wrap{padding: 20px;}.content-block{padding: 0 0 20px;}.header{width: 100%; margin-bottom: 20px;}.footer{width: 100%; clear: both; color: #999; padding: 20px;}.footer p, .footer a, .footer td{color: #999; font-size: 12px;}h1, h2, h3{font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; color: #1a2c3f; margin: 30px 0 0; line-height: 1.2em; font-weight: 400;}h1{font-size: 32px; font-weight: 500;}h2{font-size: 24px;}h3{font-size: 18px;}h4{font-size: 14px; font-weight: 600;}p, ul, ol{margin-bottom: 10px; font-weight: normal;}p li, ul li, ol li{margin-left: 5px; list-style-position: inside;}.btn-primary{text-decoration: none; color: #FFF; background-color: #2BA27D; border: solid #2BA27D; border-width: 10px 20px; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; text-transform: capitalize;}td a, td a:hover, td a::selection{text-decoration: none; color: white;}tr.menu{height: 50px;}.last{margin-bottom: 0;}.first{margin-top: 0;}.aligncenter{text-align: center;}.alignright{text-align: right;}.alignleft{text-align: left;}.clear{clear: both;}.alert{font-size: 16px; color: #fff; font-weight: 500; padding: 20px; text-align: center;}.alert a{color: #fff; text-decoration: none; font-weight: 500; font-size: 16px;}.alert.alert-warning{background-color: #FFA726;}.alert.alert-bad{background-color: #ef5350;}.alert.alert-good{background-color: #8BC34A;}.invoice{margin: 25px auto; text-align: left; width: 100%;}.invoice td{padding: 5px 0;}.invoice .invoice-items{width: 100%;}.invoice .invoice-items td{border-top: #eee 1px solid;}.invoice .invoice-items .total td{border-top: 2px solid #6c7b88; font-weight: 600; font-size: 16px;}@media screen and (max-width: 767px){.electronic{display: none !important;}}@media screen and (max-width: 420px){.toy{display: none !important;}}@media screen and (max-width: 360px){.grocery{display: none !important;}}@media screen and (max-width: 240px){.fashion{display: none !important;}}@media only screen and (max-width: 640px){body{padding: 0 !important;}.menu td a{font-size: 8px !important;}tr.menu{height: auto !important;}h1, h2, h3, h4{font-weight: 600 !important; margin: 20px 0 5px !important;}h1{font-size: 22px !important;}h2{font-size: 18px !important;}h3{font-size: 16px !important;}.container{padding: 0 !important; width: 100% !important;}.content{padding: 0 !important;}.content-wrap{padding: 10px !important;}.invoice{width: 100% !important;}}@media screen and (max-width: 380px){.price{display: none !important;}.total td{font-size: 14px !important;}}</style></head><body><table class="body-wrap"> <tr> <td></td><td class="container" width="600"> <div class="content"> <table class="main" width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td class="content-wrap"> <table width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="1"> <tr style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;"> <td colspan="6" style="text-align: center; background: white; margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <img src="https://www.onitshamarket.com/assets/logo.png" style="margin: 0px; max-width: 100%; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;" alt="Onitshamaket.com"> </td></tr><tr style="background: rgb(43, 162, 125); color: white; text-align: center; margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; height: 50px;" class="menu"> <td class="electronic" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/electonics/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Electronics</a></td><td class="fashion" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/fashion/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Fashion</a></td><td class="grocery" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/gloceries/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Groceries</a></td><td class="computer" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/computers/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Computers</a></td><td class="phone" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/phones/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Phones</a></td><td class="toy" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Kids Toys</a></td></tr></table> </td></tr><tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td class="content-block aligncenter"> <table class="invoice">';
        $email_msg .= '<tr><td>Dear ' .$recipent['name']. ',<br/><b>Shipping To:</b> '.$detail->billingname.'<br/><b>Order Number:</b>'.$order_code.'<br><b>Shipping Address:</b>'.$detail->billingaddress.'<br></td></tr>';
        $email_msg .= '<b>Payment Method:</b> '.$detail->paymentname.'<br><h3>Order Summary</h3>';
        $email_msg .= '<tr><td><table class="invoice-items" cellpadding="0" cellspacing="0"><thead><tr><th>#</th><th>Item</th><th class="aligncenter price">Price</th><th class="aligncenter">Quantity</th><th class="alignright">Total</th></tr></thead>';
        $email_msg .= '<tbody>';
        $x = 1;
        foreach( $orders as $order ){
            $loop .= '<tr>';
                $loop .= '<td>0'. $x . '</td>';
                $loop .= '<td>';
                $pr = urlify($order->product_name, $order->id);
                if( $order->variation ) {
                    $pr .= ' '. $order->variation;
                }
                $loop .= $pr .'</td>';
                $loop .= '<td class="aligncenter price">&#8358; ' . $order->amount/$order->qty. '</td>';
                $loop .= '<td class="aligncenter">' .$order->qty .'</td>';
                $loop .= '<td class="alignright">&#8358; ' .$order->amount .'</td>';

            $subtotal += $order->amount;
            $shipping = $order->delivery_charge;
            $loop .= '</tr>';
            $x++;
        }
        $email_msg .= $loop;
        $email_msg .= '<tr class="total"><td colspan="2"></td><td class="price"></td><td class="aligncenter">Delivery Fee</td>';
        $email_msg .= '<td class="alignright">&#8358; ' . $shipping .'</td></tr>';
        $email_msg .= '<tr class="total"><td colspan="2"></td> <td class="price"></td><td class="aligncenter">Total</td><td class="alignright">&#8358;'.$subtotal.'</td></tr>';
        $email_msg .= '</tbody></table></td></tr></table></td></tr></table></td></tr>';
        $email_msg .= '<tr><td class="content-block aligncenter"><a href="' .$link .'" class="btn-primary">View in browser</a></td></tr>';
        $email_msg .= '<tr><td class="content-block aligncenter">In case of any question or help feel free to contact our sales support representatives through <span style="text-decoration: none; color: #0b6427;">sales@onitshamarket.com</span></td></tr>';
        $email_msg .= '</table></td></tr></tbody></table></td></tr></tbody></table>';
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
        $msg .= '<img src="'. base_url('assets/img/onitshamarket-logo.png').'" style="margin:auto;max-width: 60%;" alt="Onitshamaket.com"> </td></tr></table> </td></tr><tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td class="content-block aligncenter"> <table class="invoice" style="margin-top:-40px;"> <tr> <td class="content-block"> <h3>New Order Request</h3> </td></tr><tr> <td> Dear Seller, <br>This is to notify you that your item(s) has been ordered and should be made available for shipping in less than 2 days.<br><h3>Requested Items</h3> </td></tr>';
        $msg .= '<tr><td><table class="invoice-items" cellpadding="0" cellspacing="0"><thead><tr><th></th><th>Item</th><th class="alignright">Qty</th></tr></thead><tbody>';

        $loop = '<tr>';
        foreach( $selleretails['products'] as $product) {
            $loop .= '<td><img width="30%" src="'.PRODUCTS_IMAGE_PATH.$product['image_name'].'" alt="Image"></td>';
            $loop .= '<td><a href="' .base_url(urlify($product['product_name'], $product['product_id'])). '"> ' .character_limiter($product['product_name'], 10).  ' </a></td>';
            $loop .= '<td>' .$product['qty']. '</td>';
        }
        $loop .='</tr>';
        $msg .= $loop;
        $msg .= '</tbody></table></td></tr>';
        $msg .='</table> </td></tr><tr> <td class="content-block aligncenter"> <a href="' .$link. '" style="text-decoration: none;" class="btn-primary">View In Your Dashboard</a> </td></tr>';
        $msg .= '<tr> <td class="content-block aligncenter"> In case of any question or help feel free to contact our customer sales support representatives through <a href="mailto:sales@onitshamarket.com" style="text-decoration: none; color: #0b6427;">sales@onitshamarket.com</a> </td></tr></table> </td></tr></tbody> </table> </td></tr></tbody> </table> <div class="footer"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td style="text-align: center;"> <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/facebook.png?width=120&height=120&name=facebook.png" alt="Facebook"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/twitter-1.png?width=120&height=120&name=twitter-1.png" alt="Twitter"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/sm-icons-instagram-app-icon.png?width=120&height=120&name=sm-icons-instagram-app-icon.png" alt="Instagram"/> </td></tr><tr> <td style="font-family:\'Open Sans\', Arial, sans-serif; font-size:11px; line-height:18px; color:#999999;" valign="top" align="center"><a href="#" target="_blank" style="color:#999999; text-decoration:underline;">PRIVACY STATEMENT</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">TERMS OF SERVICE</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">RETURNS</a><br>© 2018 Onitshamarket.com. All Rights Reserved.<br>If you do not wish to receive any further emails from us, please <a href="#" target="_blank" style="text-decoration:none; color:#999999;">unsubscribe</a> </td></tr></tbody> </table> </div></div></td><td></td></tr></table></body></html>';
        return $this->do_email($msg , 'Congrats! New Order Request. ' , $selleretails['email'], 'sales@onitshamarket.com');
    }


    /*
     *Send payment uncompleted notifucation to buyer
     * */
    function paymentUncompleted( $order_code , $uid, $buyer ){
        $orders = $this->get_my_lastorders( $order_code, $uid);
        //  head
        $msg = '<!DOCTYPE html><html lang="en"><head> <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <title>Payment Uncompleted | onitshamarket.com</title> <style type="text/css"> *{margin: 0; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px;}img{max-width: 100%;}body{-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;}table td{vertical-align: middle;}body{background-color: #ecf0f5; color: #6c7b88}.body-wrap{background-color: #ecf0f5; width: 100%;}.container{display: block !important; max-width: 600px !important; margin: 0 auto !important; /* makes it centered */ clear: both !important;}.content{max-width: 600px; margin: 0 auto; display: block; padding: 20px;}.main{background-color: #fff; border-bottom: 2px solid #d7d7d7;}.content-wrap{padding: 20px;}.content-block{padding: 0 0 20px;}.header{width: 100%; margin-bottom: 20px;}.footer{width: 100%; clear: both; color: #999; padding: 20px;}.footer p, .footer a, .footer td{color: #999; font-size: 12px;}h1, h2, h3{font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; color: #1a2c3f; margin: 30px 0 0; line-height: 1.2em; font-weight: 400;}h1{font-size: 32px; font-weight: 500;}h2{font-size: 24px;}h3{font-size: 18px;}h4{font-size: 14px; font-weight: 600;}p, ul, ol{margin-bottom: 10px; font-weight: normal;}p li, ul li, ol li{margin-left: 5px; list-style-position: inside;}.btn-primary{text-decoration: none; color: #FFF; background-color: #2BA27D; border: solid #2BA27D; border-width: 10px 20px; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; text-transform: capitalize;}td a, td a:hover, td a::selection{text-decoration: none; color: white;}tr.menu{height: 50px;}.last{margin-bottom: 0;}.first{margin-top: 0;}.aligncenter{text-align: center;}.alignright{text-align: right;}.alignleft{text-align: left;}.clear{clear: both;}.alert{font-size: 16px; color: #fff; font-weight: 500; padding: 20px; text-align: center;}.alert a{color: #fff; text-decoration: none; font-weight: 500; font-size: 16px;}.alert.alert-warning{background-color: #FFA726;}.alert.alert-bad{background-color: #ef5350;}.alert.alert-good{background-color: #8BC34A;}.invoice{margin: 25px auto; text-align: left; width: 100%;}.invoice td{padding: 5px 0;}.invoice .invoice-items{width: 100%;}.invoice .invoice-items td{border-top: #eee 1px solid;}.invoice .invoice-items .total td{border-top: 2px solid #6c7b88; font-weight: 600; font-size: 16px;}@media screen and (max-width: 767px){.electronic{display: none !important;}}@media screen and (max-width: 420px){.toy{display: none !important;}}@media screen and (max-width: 360px){.grocery{display: none !important;}}@media screen and (max-width: 240px){.fashion{display: none !important;}}@media only screen and (max-width: 640px){body{padding: 0 !important;}.menu td a{font-size: 8px !important;}tr.menu{height: auto !important;}h1, h2, h3, h4{font-weight: 600 !important; margin: 20px 0 5px !important;}h1{font-size: 22px !important;}h2{font-size: 18px !important;}h3{font-size: 16px !important;}.container{padding: 0 !important; width: 100% !important;}.content{padding: 0 !important;}.content-wrap{padding: 10px !important;}.invoice{width: 100% !important;}}@media screen and (max-width: 380px){.price{display: none !important;}.total td{font-size: 14px !important;}}</style></head>';
        //  Body begins
        $msg .= '<body><table class="body-wrap"> <tr> <td></td><td class="container" width="600"> <div class="content"> <table class="main" width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td class="content-wrap"> <table width="100%" cellpadding="0" cellspacing="0"> <tbody> <tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="1"> <tr> <td colspan="6" style="text-align: center;background:white;"> <a href="{base_url}"><img src="https://api.elasticemail.com/userfile/a603f65b-75bf-48f3-a106-46670487a6d8/newlogo.png" alt="Onitshamarket" style="border-width: 0px; border-style: solid; max-width: 256px; width: 100%;" width="256"></a> </td></tr><tr style="background: rgb(43, 162, 125); color: white; text-align: center; margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; height: 50px;" class="menu"> <td class="electronic" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/electonics/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Electronics</a></td><td class="fashion" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/fashion/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Fashion</a></td><td class="grocery" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/gloceries/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Groceries</a></td><td class="computer" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/computers/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Computers</a></td><td class="phone" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a href="https://www.onitshamarket.com/phones/" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Phones</a></td><td class="toy" style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: middle;"> <a style="margin: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; text-decoration: none; color: white;">Kids Toys</a></td></tr></table> </td></tr>';

        $msg .= '<tr> <td style="padding: 10px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td class="content-block aligncenter"> <table class="invoice"> <tr> <td> Dear '. $buyer['name'] .', <br><div> Thank you for shopping with us. Unfortunately, we were unable to process your payment for order <b>\'. $order_code.\'</b>.<br>This could have happened because: <ul style="margin-left:-10px;"> <li> You attempted to pay via international Debit/Credit card but we only accept local cards. </li><li> You attempted to pay via Debit/Credit Card but wrongly introduced the PIN code or your card is not profiled for online payment. </li><li> You have not registered/activated your bank\'s 3D Secure system. </li><li> You have insufficient funds. </li></ul> If any amount was debited from your mobile money/bank account, please fill our Contact Us form or call our customer representatives for the refund. </div><h3>Order Summary</h3> </td></tr>';
        // Main product list
        $loop = ''; $x = 1; $subtotal = $shipping = 0;
        $loop = '<tr><td><table class="invoice-items" cellpadding="0" cellspacing="0"> <thead><tr> <th>Item</th><th class="aligncenter price">Price</th><th class="aligncenter">Quantity</th><th class="alignright">Total</th></tr></thead><tbody>';
        foreach( $orders as $order ){
            $loop .= '<tr>';
            $loop .= '<td>' .base_url(urlify($order->product_name), $order->id).  '</td>';
            $loop .= '<td class="aligncenter price">&#8358; ' .$order->amount/$order->qty . '</td>';
            $loop .= '<td class="aligncenter">' . $order->qty . '</td>';
            $loop .= '<td class="alignright">&#8358; '. $order->amount. '</td>';
            $loop .= '</tr>';
            $subtotal += $order->amount;
            $shipping = $order->delivery_charge;
        }
        $loop .= '</tbody></table></td></tr>';
        $loop .= '<tr class="total"><td colspan="3"></td><td class="price"></td><td class="aligncenter">Delivery Charge</td><td class="alignright">&#8358;' . $shipping .'</td></tr>';
        $loop .= '<tr class="total"><td colspan="3"></td><td class="price"></td><td class="aligncenter">Total</td><td class="alignright">&#8358;' . $subtotal .'</td></tr>';
        $msg .= $loop;
        $msg .= '</table> </td></tr><tr> <td class="content-block aligncenter"> <a href="'. base_url() .'" class="btn-primary">Continue Shopping</a> </td></tr><tr> <td class="content-block aligncenter"> In case of any question or help feel free to contact our sales support representatives through <span style="text-decoration: none; color: #0b6427;">sales@onitshamarket.com</span> </td></tr></table> </td></tr>';
        // Body end
        $msg .= '</tbody> </table> </td></tr></tbody> </table> <div class="footer"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td style="text-align: center;"> <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/facebook.png?width=120&height=120&name=facebook.png" alt="Facebook"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/twitter-1.png?width=120&height=120&name=twitter-1.png" alt="Twitter"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img style="width:20px" src="https://www.sendible.com/hs-fs/hubfs/Imported_Blog_Media/sm-icons-instagram-app-icon.png?width=120&height=120&name=sm-icons-instagram-app-icon.png" alt="Instagram"/> </td></tr><tr> <td style="font-family:\'Open Sans\', Arial, sans-serif; font-size:11px; line-height:18px; color:#999999;" valign="top" align="center"><a href="#" target="_blank" style="color:#999999; text-decoration:underline;">PRIVACY STATEMENT</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">TERMS OF SERVICE</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">RETURNS</a><br>© 2018 Onitshamarket.com. All Rights Reserved.<br>If you do not wish to receive any further emails from us, please <a href="#" target="_blank" style="text-decoration:none; color:#999999;">unsubscribe</a> </td></tr></tbody> </table> </div></div></td><td></td></tr></table></body></html>';
        return $this->do_email($msg, 'Your Order - '. $order_code .' payment could not be completed.', $buyer['email'], 'sales@onitshamarket.com');

    }
    /***custom email sender****/

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