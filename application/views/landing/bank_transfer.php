<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .well {
        padding: 5px;
        font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .market-box {
        margin-left: 0px !important;
    }

    .img-bg > img {
        width: 100%;
        position: relative;
        opacity: 0.95;
        background: no-repeat center;
        background-size: cover;
    }

    .login-box {
        padding: 20px 15px 30px;
    }

    .market-box {
        margin-top: 50px;
        background: #fff;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }

    .panel-bordered-primary {
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        border: 1px solid #1ca28b;
        color: #1cbb86 !important;
        padding: 10px 50px;
        font-size: 11px;
    }

    a:hover, a:active, a::selection {
        text-decoration: none;
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

    @media screen and (max-width: 360px) {
        .market-box {
            margin-top: 0 !important;
        }

        .market-board {
            margin-bottom: 5px;
        }

        div.market-board.login-box {
            padding: 10px;
        }

        input.form-control {
            padding: 3px 8px !important;
            font-size: 12px !important;
        }
    }
    .market-board{
        height: 690px;
    }
</style>
</head>
<body class="cart-row" style="background-color: #ffffff;">
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;padding-top:20px;">
    <div class="container">
        <p class="text-center" style="margin-top:30px;">
            <a href="<?= base_url(); ?>"><img style="width: 40%;"
                        src="<?= base_url('assets/img/onitshamarket-logo.png') ?>"
                        alt="market logo Image"></a>
        </p>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 inline_flex" style="background: #fff;">
                <div class="ipad_pad"></div>
                <div class="market-board">
                    <?php $this->load->view('landing/msg_view'); ?>
                    <header style="margin:20px 0 20px;">
                        <h3 style="color:#00000082;text-transform: capitalize;" class="text-center">Please confirm your
                            payment below</h3>
                    </header>
                    <div class="well">
                        <p class="">
                            <b>
                                <span>Bank Name: </span>GT Bank Plc<br/>
                                <span>Account Name: </span>Internet Onitshamarketing Ltd<br/>
                                <span>Account Number: </span>0449870887<br/>
                                <span>Account Type: </span>Current Account<br/>
                                <span>Sort Code: </span>058244135
                            </b>
                        </p>
                    </div>
                    <?= form_open_multipart(base_url('checkout/bank_transfer'), 'id="bank-transfer-form"'); ?>
                        <div class="form-group">
                            <label for="bank">Please select the bank you paid from</label>
                            <select class="form-control" name="bank" required>
                                <?php $banks = explode(',', lang('banks')); ?>
                                <option value="">-- Select Bank --</option>
                                <?php foreach ($banks as $bank) : ?>
                                    <option value="<?= trim($bank); ?>" <?= set_select('bank', $bank); ?> ><?= $bank; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('bank') ?>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" disabled name="amount" value="<?= $this->session->userdata('amount') / 100; ?>"
                                   class="form-control">
                            <?= form_error('amount') ?>
                        </div>

                        <div class="form-group">
                            <label class="deposit_type">Deposit Type</label>
                            <select name="deposit_type" class="form-control" required>
                                <option value="Cash Deposit" <?= set_select('deposit_type', 'Cash Deposit'); ?> >Cash Deposit
                                </option>
                                <option value="Mobile Banking" <?= set_select('deposit_type', 'Mobile Banking'); ?> >Mobile
                                    Banking
                                </option>
                                <option value="Internet Banking Transfer" <?= set_select('deposit_type', 'Internet Banking Transfer'); ?> >
                                    Internet Banking Transfer
                                </option>
                            </select>
                            <?= form_error('deposit_type'); ?>
                        </div>


                        <div class="form-group">
                            <label for="remark">Remark</label>
                            <textarea name="remark" class="form-control" rows="3"><?= set_value('remark', ''); ?></textarea>
                            <?= form_error('remark') ?>
                        </div>

                        <div class="form-group">
                            <label for="pop">Proof of payment</label>
                            <input type="file" name="pop" required>
                        </div>

                        <input type="hidden" name="order" value="<?= $this->session->userdata('order_code'); ?>"/>
                        <input type="hidden" name="amount" value="<?= $this->session->userdata('amount'); ?>"/>

                        <div class="" style="margin-top:0px;">
                            <button type="submit" class="btn btn-success btn-md">Submit</button>
                            <div class="pull-right">
                                <a href="<?= base_url('checkout/bank_transfer/?order=' . $this->session->userdata('order_code') . '&cancel=true') ?>"
                                   class="btn btn-danger">Cancel My Order</a>
                            </div>
                        </div>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 text-center"
                 style="display: inline-flex;margin-top:10px;">
                <img src="<?= base_url('assets/img/payment/ssl-logo.png'); ?>" class="img-responsive"
                     style="margin-left:auto;"
                     alt="Image Alternative text" title="Pay with Mastercard"/>
                <img src="<?= base_url('assets/img/payment/interswitch.png'); ?>" class="img-responsive"
                     alt="Pay with Interswitch" title="Pay with interswitch"/>
                <img src="<?= base_url('assets/img/payment/allcards.jpg'); ?>" class="img-responsive"
                     style="margin-right:auto;"
                     alt="Image Alternative text" title="Pay with Mastercard"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top:10px;">
                <p style="color:#4b4b4bb8 !important; font-size:12px; "><?= lang('copyright'); ?></p>
            </div>
        </div>
    </div>
</div>
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
</script>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
