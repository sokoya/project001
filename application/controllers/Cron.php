<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * This T class will validate short url for the site
 * */
class Cron extends CI_Controller {
    /**
     * Index Page for this controller.
     */
    public function index(){ redirect(base_url()); }

    /*
     * Clear an uncompleted order
     * */
    public function uncompleted_order(){
        /*
         * Logic: check uncompleted payment order that was made with interswitch payment and has passed 120 min (2 Hrs) and payment status is not 00
         * Or for one reason the buyer leave the URL
         * */
//        if( $this->input->is_cli_request() ){
            $query = "SELECT id, buyer_id, order_code, qty, delivery_charge, status, SUM(amount) amount, txnref, product_variation_id, paymentDesc, responseCode FROM orders WHERE payment_method = 2 
            AND (responseCode IS NULL || responseCode != '00' ) 
            AND order_date <= DATE_SUB(NOW(), INTERVAL 2 HOUR) 
            AND active_status != 'cancelled' GROUP BY order_code ";
            $results = $this->db->query( $query )->result();
            if( $results ){
                foreach ($results as $result){

                    // Let's make a requery of this transaction
                    $this->load->library('sitelib');
                    $amount = ( $result->amount + $result->delivery_charge) * 100;
                    $curl_data = array('amount' => $amount, 'txn_ref' => $result->txnref);
                    $response = $this->sitelib->interswitch_curl( $curl_data );
                    $PaymentReference = (isset($response['PaymentReference'])) ? $response['PaymentReference'] : null;
                    $RetrievalReferenceNumber = (isset($response['RetrievalReferenceNumber'])) ? $response['RetrievalReferenceNumber'] : null;
                    if( $response && $response['ResponseCode'] == '00' && !is_null($response) ){
                        // This is certified
                        $update_array = array(
//                        'status' => $status_array,
                            'active_status' => 'certified',
                            'payment_made' => 'success',
                            'paymentDesc'   => $response['ResponseDescription'],
                            'payRef'        => $PaymentReference,
                            'retRef'        => $RetrievalReferenceNumber,
                            'apprAmt'       => $response['Amount'] / 100,
                            'responseCode'  => $response['ResponseCode']
                        );
                        $this->product->update_items($result->order_code, $update_array);
                    }else{
                        // The payment is having an issue...
                        // We don't want this kinda order in our table
                        // Return the order qty back to the product_variation
                        // Lets log this issue
                        $reason = (!is_null($result->paymentDesc)) ? $result->paymentDesc : 'Timeout, Close Tab, Close Session.';
                        $error_array = array(
                            "error_action" => "Online Payment Error",
                            "error_message" => "An online payment was unsuccessful from, initiated by a buyer ({$result->buyer_id}) with the reason(s) - {$reason} and Error code: {$result->responseCode}",
                            'datetime' => get_now()
                        );
                        $this->product->set_field('product_variation', 'quantity', "quantity+{$result->qty}", array('id' => $result->product_variation_id));
                        $this->product->insert_data('error_logs', $error_array);
                        // @todo: Lets send them mail again,  for the purpose of those that close the tab.
                        $ResponseDescription = (isset($response['ResponseDescription'])) ? $response['ResponseDescription'] : 'Payment was not successful';
                        $json_array = json_decode($result->status, true);
                        $array = array("cancelled" => array('msg' => "Order was marked as cancelled : {$ResponseDescription}", 'datetime' => get_now()));
                        $status_array = array_merge($json_array, $array);
                        $status_array = json_encode($status_array);
                        $update_array = array(
                            'status' => $status_array,
                            'active_status' => 'cancelled',
                            'payment_made' => 'fail',
                            'paymentDesc'   => $ResponseDescription,
                            'payRef'        => $PaymentReference,
                            'responseCode'  => $response['ResponseCode']
                        );
                        $this->product->update_items($result->order_code, $update_array);
                        // $this->db->where('order_code', $result->order_code);
                        // $this->db->delete('orders');
                    }
                }
            }
//        }else{
//            $this->session->set_flashdata('error_msg', 'You do not have access to this page');
//            redirect( base_url() );
//        }
    }
}