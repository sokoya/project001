<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/landing/css/checkout.css'); ?>"/>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-white">Product Information</div>
                    <div class="card-body bg-light">
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oops!</strong>
                                <?php echo validation_errors() ;?>
                            </div>
                        <?php endif ?>
                        <div id="payment-errors"></div>
                        <form method="post" id="paymentFrm" enctype="multipart/form-data" onsubmit="return false;" action="<?php echo base_url('checkout/check'); ?>">
                            <div class="form-group">
                                <input type="number" name="card_num" id="card_num" class="form-control" placeholder="Card Number" autocomplete="off" value="<?php echo set_value('card_num'); ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" value="<?php echo set_value('exp_year'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="cvc" id="card-cvc" maxlength="3" class="form-control" autocomplete="off" placeholder="CVC" value="<?php echo set_value('cvc'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-secondary" type="reset">Reset</button>
                                <button type="button" id="payBtn" class="btn btn-success">Submit Payment</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Test credentials
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Card </th>
                                <th>Brand</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="card-number"> 4242 4242 4242 4242 </td>
                                <td>Visa</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h6 class="card-header bg-primary text-white">
                        Some Help?
                    </h6>
                    <div class="card-body">
                        <p>Get some real help by browsing these guide from offical source.</p>
                        <ol>
                            <li> <a href="https://stripe.com/docs" target="_blank">Stripe Docs</a> </li>
                            <li> <a href="https://stripe.com/docs/checkout" target="_blank">Stripe Checkout</a></li>

                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="gap"></div>
</div>
<?php $this->load->view('landing/resources/script'); ?>
<script src="<?= base_url('assets/landing/js/checkout.js'); ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>

</script>
</body>
</html>
