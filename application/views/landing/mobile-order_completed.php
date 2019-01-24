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
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">

</head>
<body style="font-family: 'Roboto', Tahoma, Arial, helvetica, sans-serif;">
<div id="invoice" class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-info" style="padding: 30pxl">

            </div>
        </div>
    </div>

    <div class="invoice">
        <div class="main_invoice">
            <header>
                <div class="row">
                    <div class="col-xs-12 col-md-4 "></div>
                    <div class="col-xs-12 col-md-4 text-center">
                        <a href="<?= base_url(); ?>">
                            <img style="height:100px;"
                                 src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>"
                                 data-holder-rendered="true"/>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 "></div>
                </div>
            </header>



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
                                    <td class="text-left"><h3><?= ucwords($order->product_name);?></h3></td>
                                    <td class="var"><?= $order->variation; ?></td>
                                    <td class="qty"><?= $order->qty; ?></td>
                                    <td class="unit"><?= ngn($order->amount / $order->qty); ?></td>
                                    <td class="total"><?= ngn($order->amount); ?></td>
                                    <?php
                                        $subtotal += $order->amount ;
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
                            <td colspan="2">SHIPPING</td>
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
        <div></div>
    </div>
</div>
</body>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
</html>