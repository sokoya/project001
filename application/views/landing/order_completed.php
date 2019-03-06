<!DOCTYPE HTML>
<html>
<head>
    <title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : ''; ?>"/>
    <meta name="description" content="<?= !empty($description) ? $description : ''; ?>">
    <meta name="robots" content="nofollow,noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <style>
        #invoice {
            padding: 30px;
        }

        a {
            color: #49a251;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            font-size: 18px;
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #49a251
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
            border: 1px solid;
        }

        .invoice table td, .invoice table th {
            padding: 15px;
            border-bottom: 1px solid #aaa;
            border-top: 1px solid #aaa
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 800;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            font-size: 1.2em
        }

        .invoice table .qty, .invoice table .total, .invoice table .var, .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .var {
            text-align: center;
        }

        .invoice table .no {
            font-size: 1.6em;
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            font-size: 1.4em;
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice > div:last-child {
                page-break-before: always
            }
        }
    </style>
</head>
<body style="font-family: 'Roboto', Tahoma, Arial, helvetica, sans-serif;">
<div id="invoice" class="container">
    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
        </div>
        <hr>
    </div>
    <div class="invoice">
        <div class="main_invoice">
            <header>
                <div class="row">
                    <div class="col-xs-12 col-md-4 "></div>
                    <div class="col-xs-12 col-md-4 text-center">
                        <a title="Go back home" href="<?= base_url(); ?>">
                            <img style="height:100px;"
                                 src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>"
                                 data-holder-rendered="true"/>
                        </a>
                    </div>
                    <p class="text-center">
                        <a style="text-decoration: none; color:#009848" href="<?= base_url(); ?>">Go back to onitshamarket.com</a>
                    </p>
                    <div class="col-xs-12 col-md-4 "></div>
                </div>
            </header>
                <div class="row contacts">
                    <div class="col-md-12" style="font-weight:500;font-size:14px;">Thank you for shopping with us at
                        onitshamarket.com! If you experience any problems related to this order contact
                        <a href="mailto:sales@onitshamarket.com">sales@onitshamarket.com</a> referring to the invoice number <b><?= $order_code?></b>
                    </div>
                    <div style="margin-top: 20px;"></div>
                    <div class="col-md-6 col-xs-12 invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"
                            style="font"><?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?></h2>
                        <br />
                        <?php if( $ordersingledetail->billing_address_id != 0 ) : $address = $this->product->get_shipping_type( $ordersingledetail->billing_address_id, 'shipping') ?>
                            <p>
                                <strong>Shipping Type ( Billing Address ): </strong>
                            </p>
                            <div class="name"><?= $address->billingname; ?></div>
                            <div class="phone"><?= $address->billingphone; ?></div>
                            <div class="address"><?= $address->billingaddress; ?>.</div>
                        <?php else : $address = $this->product->get_shipping_type( $ordersingledetail->pickup_location_id, 'pickup'); ?>
                            <p><strong>Shipping Type ( Pickup Location  ): </strong></p>
                            <div class="name"><?= $address->title; ?></div>
                            <div class="phone"><?= $address->phones . ' <br />Email : ' . $address->emails; ?></div>
                            <div class="address"><?= $address->address; ?>.</div>
                        <?php endif;?>
                        <div class="email"><a href="mailto:<?= $profile->email; ?>"><?= $profile->email; ?></a></div>
                    </div>
                    <div class="col-md-6 col-xs-12 invoice-details">
                        <h4>Order ID: <span><?= $order_code; ?></span></h4>
                        <?php if( !is_null($ordersingledetail->payRef)) : ?>
                            <h4>Payment Reference: <span><?= $ordersingledetail->payRef; ?></span></h4>
                        <?php endif; ?>
                        <?php if( !is_null($ordersingledetail->txnref)) : ?>
                            <h4>Transaction Reference: <span><?= $ordersingledetail->txnref; ?></span></h4>
                        <?php endif; ?>
                        <div class="date">Date of Invoice: <span class="invoice_date"><?= date('Y-m-d H:i:s', strtotime($ordersingledetail->order_date) ); ?></span></div>
                    </div>
                </div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A copy of this invoice has been sent to the email attached to your account <b>( <?= $profile->email ?> )</b>.
                    </div>
                </div>
                <br/>
                <div class="table-responsive">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">PRODUCT</th>
                            <th class="text-right">VARIATION</th>
                            <th class="text-right">QUANTITY</th>
                            <th class="text-right">PRICE</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1; $subtotal = $shipping = 0; foreach( $orders as $order ) : ?>
                                <tr>
                                    <td class="no">0<?= $x; ?></td>
                                    <td class="text-left">
                                        <img src="<?= PRODUCTS_IMAGE_PATH,$order->image_name; ?>" alt="Item Image" width="40" height="40">
                                        <h3><?= ucwords($order->product_name);?></h3>
                                    </td>
                                    <td class="var"><?= $order->variation; ?></td>
                                    <td class="qty"><?= $order->qty; ?></td>
                                    <td class="unit"><?= ngn($order->amount); ?></td>
                                    <td class="total"><?= ngn($order->amount  * $order->qty); ?></td>
                                    <?php
                                        $subtotal += $order->amount * $order->qty;
                                        $shipping = $order->delivery_charge;
                                    ?>
                                </tr>
                            <?php $x++; endforeach;?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td><?= ngn($subtotal); ?></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2">SHIPPING FEE</td>
                            <td><?= ngn($shipping);?></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2">Payment Method</td>
                            <td><?= $ordersingledetail->paymentname;?></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2" style="font-weight: 800;">GRAND TOTAL</td>
                            <td><?= ngn($subtotal + $shipping);?></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            <footer>
                <p style="font-size: 14px;"><?= lang('copyright'); ?></p>
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>

<script>
    $('#printInvoice').click(function () {
        window.print();
    });
</script>
</body>
</html>