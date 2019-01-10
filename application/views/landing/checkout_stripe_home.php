<?php $this->load->view('landing/resources/head_base'); ?>

</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/head_img') ?>
    <?php $this->load->view('landing/resources/head_category') ?>
    <?php $this->load->view('landing/resources/head_menu') ?>
    <div class="container text-center">
        <div class="row text-justify" style="padding: 20px;background: #fff;margin-top:20px;">
            <h2 class="terms_head text-center">Stripe Payment</h2>
            <div style="height:15px;"></div>

            <form action="<?php echo base_url('checkout/stripe_payment') ?>" method="post" id="payment-form">
                <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <div id="card-expiry-element" class="field">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <div id="card-cvc-element" class="field">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <button>Submit Payment</button>
            </form>

        </div>
        <div style="height:15px;"></div>
        <div style="height:15px;"></div>
    </div>
    <?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>

</body>
</html>

