<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Interswitch Webpay - Onitshamarket.com</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content=""/>
    <meta name="description" content="">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600|Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <meta name="theme-color" content="#2a9651" />
    <style>
        body { font-family: 'Oxygen', sans-serif !important; }
    </style>
    <script> let base_url = "<?= base_url(); ?>"</script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-lg-10 col-lg-offset-1">
                <p style="padding-top: 20px; margin: 15px;"><img style="40%" src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>" alt="Onitshamarket.com"/> </p>
                <h2><strong>Please wait a moment, we are re-directing you to Interswitch secure online payment... Do not refresh this page.</strong></h2>
                <form name="webpay_form" id="webpay_form" action="<?= INTERSWITCH_ACTION_URL ?>" method="post">
                    <?php foreach($this->session->userdata('inter') as $key => $value ): ?>
                        <input name="<?= $key ?>" type="hidden" value="<?= $value?>" />
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>

<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script>
    $(document).ready(function () {
        setTimeout(function(){
            $("#webpay_form").submit();
        }, 300);
    });
</script>
</body>
</html>