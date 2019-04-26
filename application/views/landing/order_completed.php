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
                            <img style="height:40px;"
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
                <div id="invoice">
                <div class="col-md-12 col-sm-12 table-responsive">
                    <table align="center" border=0" cellpadding="0" cellspacing="0" width="600"
                           style="border-collapse: collapse;border: 1px solid #cccccc;">

                        <tr>
                            <td align="center" style="padding: 10px 0 10px 0; display: block">
                                <a href="<?= base_url(); ?>"><img style="width: 50%;" src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>" alt="Onitsha market logo" width="150"
                                                                  height="44"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 30px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
                                <p>Dear <?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?>,</p>
                                <p>Thank you for shopping with us. Your order <b><?= $order_code; ?></b> has been placed successfully  here is the
                                    summary of the order:
                                </p>
                                <p>If you have any questions about this order, please contact us at <b>+234 813 680 3006</b>
                                    Remember to include your reference number - <b><?= $order_code; ?></b> when contacting us.</p>
                                <p><b>Note</b><br>A copy of this invoice has also be sent to the email attached to your account.</p>
                            </td>
                        </tr>
                        <tr>
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
                                            VARIATION
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            QUANTITY
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            PRICE
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            TOTAL
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $subtotal = $shipping = 0; foreach( $orders as $order ) : ?>
                                        <tr>
                                            <td><img align="center" style="width: 50%" src="<?= PRODUCTS_IMAGE_PATH,$order->image_name; ?>" alt="Onitshamarket"></td>
                                            <td width="80%" align="center"><?= ucwords($order->product_name);?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= $order->variation; ?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= $order->qty; ?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($order->amount); ?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($order->amount  * $order->qty); ?></td>
                                            <?php
                                            $subtotal += $order->amount * $order->qty;
                                            $shipping = $order->delivery_charge;
                                            ?>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($subtotal); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SHIPPING FEE</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($shipping);?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">Payment Method</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= $ordersingledetail->paymentname;?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2" style="font-weight: 800;">GRAND TOTAL</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($subtotal + $shipping);?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <br/>
                                <br />
                                <p>If you would like to know more about our services, please also refer to these <a href="<?= lang('shopping_help_url'); ?>" target="_blank">FAQ</a> from our
                                    customers.</p>
                                <p>Happy Shopping!</p>
                                <p><b>Onitshamarket Team</b></p>
                            </td>
                        </tr>

                        <tr style="color: #153643; font-family: Arial, sans-serif; font-size: 12px;">
                            <td style="padding: 10px 10px 10px 10px; border: 1px solid #cccccc;" align="center">
                                Schoolville Limited, 530A Aina Akingbala Street, omole phase 2. Ikeja, Lagos State, Ikeja, Lagos, 282828,
                                Nigeria, https://www.onitshamarket.com
                            </td>
                        </tr>

                    </table>

                </div>
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