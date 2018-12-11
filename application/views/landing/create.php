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
</style>
</head>
<body style="background-color: #ffffff;">
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;padding-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 market-box">
                <p class="text-center">
                    <a href="<?= base_url(); ?>"><img
                                src="<?= base_url('assets/landing/img/onitshamarket-logo.png') ?>" width="20%"
                                alt="market logo Image"></a>
                </p>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 inline_flex">
                        <?php $this->load->view('landing/msg_view'); ?>
                        <div class="ipad_pad"></div>
                        <div class="market-board login-box">
                            <?= form_open('create/process', 'autocorrect="off", id="register-form"'); ?>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="signupfirstname"
                                               value="<?php if (isset($_POST['signupfirstname'])) echo $_POST['signupfirstname']; ?>"
                                               placeholder="First name" autofocus required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="signuplastname"
                                               value="<?php if (isset($_POST['signuplastname'])) echo $_POST['signuplastname']; ?>"
                                               placeholder="Last Name" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="number" name="signup-phone" name="phone"
                                       value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"
                                       placeholder="08022334455" required/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="signup-email" name="signupemail"
                                       value="<?php if (isset($_POST['signupemail'])) echo $_POST['signupemail']; ?>"
                                       placeholder="Email Address" required/>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="signup-password"
                                               name="signuppassword"
                                               placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="signup-repeat-password"
                                               name="signuprepeatpassword" placeholder="Confirm Password"
                                               required/>
                                    </div>
                                </div>
                            </div>
                            <div class="well text-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                        I agree to <?= lang('app_name'); ?> <a href="<?= base_url('pages/terms'); ?>"
                                                                               target="_blank" style="color:#0ac392;">Terms
                                            & Conditions</a> | <a href="<?= base_url('pages/privacy'); ?>"
                                                                  target="_blank" style="color:#0ac392;">
                                            Policy.</a></label>
                                </div>
                            </div>
                            <input class="market_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
                                   value="Create Account"/>
                            <?= form_close(); ?>
                            <br/><br/><br/><br/>
                            <a href="<?= base_url(lang('login_link')); ?>"
                               class="panel-bordered-primary col-md-12 col-xs-12 text-center" style="margin-top:-30px;">Already
                                Have An Account?</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 text-center"
                         style="display: inline-flex;margin-top:10px;">
                        <img src="<?= base_url('assets/landing/img/payment/ssl-logo.png'); ?>" class="img-responsive"
                             style="margin-left:auto;"
                             alt="Image Alternative text" title="Pay with Mastercard"/>
                        <img src="<?= base_url('assets/landing/img/payment/interswitch.png'); ?>" class="img-responsive"
                             alt="Image Alternative text" title="Pay with Mastercard"/>
                        <img src="<?= base_url('assets/landing/img/payment/allcards.jpg'); ?>" class="img-responsive"
                             style="margin-right:auto;"
                             alt="Image Alternative text" title="Pay with Mastercard"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center" style="margin-top:10px;">
                        <p style="color:#4b4b4bb8 !important; font-size:12px; ">&copy; 2015
                            - <?= date('Y'); ?> <?= lang('company_name'); ?>. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
