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
    <style>
        @media screen and (max-width: 360px) {
            .market-board{
                margin-bottom: 5px;
                padding: 10px;
            }
        }
        @media screen and (max-width: 885px) and (min-width: 500px) {
            .market-board {
                width: 80%;
            }

            .ipad_pad {
                width: 10%;
            }

            .inline_flex {
                display: inline-flex;
                width: 100%;
            }
        }
    </style>
</head>
<body style="font-family: 'Roboto', Tahoma, Arial, helvetica, sans-serif;">
<div id="invoice" class="container">
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

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="text-center"><strong>Thank you for your order. You will receive a confirmation email shortly.</strong></h3>
            <div class="alert alert-info" style="padding: 30px; margin: 20px">
                <p>
                    <h4>Your Order Number is : <strong><?= $order_code; ?></strong></h4>
                </p>
            </div>

            <div class="panel">
                <div class="panel-heading"></div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
</html>