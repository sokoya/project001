<?php $this->load->view('landing/resources/head_base'); ?>
<style>
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
        padding: 15px;
    }

    .market-box {
        margin-top: 50px;
        background: #fff;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }

    .panel-bordered-primary {
        border: 1px solid #1ca28b;
        color: #1cbb86 !important;
        padding: 10px;
        font-size: 11px;
    }

    .panel-bordered-warning {
        border: 1px solid #9b6a00;
        color: #9b6a00 !important;
        padding: 10px;
        font-size: 11px;
    }

    a:hover, a:active, a::selection {
        text-decoration: none;
    }

    @media screen and (max-width: 991px) {
        .mar_top {
            margin-top: 20px;
        }

        .revert_normal {
            margin-left: 0 !important;
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
<body>
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;padding-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 market-box">
                <p class="text-center">
                    <a href="<?= base_url(); ?>" title="Go to homepage"><img
                                src="<?= base_url('assets/landing/img/onitshamarket-logo.png') ?>" width="20%"
                                alt="market logo Image"></a>
                </p>
                <h3 class="widget-title text-center text-bold">
                    Login to your account
                </h3>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 inline_flex">
                        <?php $this->load->view('landing/msg_view'); ?>
                        <div class="ipad_pad"></div>
                        <div class="market-board login-box">
                            <?= form_open('login/process', 'id="login-form"'); ?>
                            <div class="form-group">
                                <label><h5>Email Address*</h5></label>
                                <input class="form-control" type="email" name="loginemail"
                                       placeholder="Enter your email" autofocus="" required/>
                            </div>
                            <div class="form-group">
                                <label><h5>Password</h5></label>
                                <input class="form-control" type="password" name="loginpassword"
                                       placeholder="Enter your password" required/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="col-md-12 col-sm-12 col-xs-12 btn btn-success">
                                    <strong>LOGIN</strong></button>
                            </div>
                            <br/>
                            <?= form_close(); ?>
                            <hr class="hr-text" data-content="OR">
                            <div class="row text-center" style="padding:20px;margin-top:-20px;">
                                <a href="<?= base_url(lang('forgot_password_link')); ?>"
                                   class=" panel-bordered-warning col-md-6 col-xs-12 col-lg-6 col-sm-12 revert_normal"
                                   style="margin-left:-5px;"><?= lang('forgot_password'); ?></a>
                                <a href="<?= base_url('create'); ?>"
                                   class="panel-bordered-primary col-md-6 col-xs-12 col-lg-6 col-sm-12 mar_top revert_normal"
                                   style="margin-left:5px;"> Create an
                                    account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 text-center" style="display: inline-flex;margin-top:10px;">
                        <img src="<?= base_url('assets/landing/img/payment/ssl-logo.png'); ?>" class="img-responsive" style="margin-left:auto;"
                             alt="Image Alternative text" title="Pay with Mastercard"/>
                        <img src="<?= base_url('assets/landing/img/payment/interswitch.png'); ?>" class="img-responsive"
                             alt="Image Alternative text" title="Pay with Mastercard"/>
                        <img src="<?= base_url('assets/landing/img/payment/allcards.jpg'); ?>" class="img-responsive" style="margin-right:auto;"
                             alt="Image Alternative text" title="Pay with Mastercard"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center" style="margin-top:10px;">
                        <p style="color:#4b4b4bb8 !important; font-size:12px; ">&copy; 2015 - <?= date('Y'); ?> <?= lang('company_name'); ?>. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
