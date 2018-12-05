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
        padding: 10px 60px;
        font-size: 11px;
    }

    .panel-bordered-warning {
        border: 1px solid #ffb300;
        color: #ffb300 !important;
        padding: 10px 50px;
        font-size: 11px;
    }

    a:hover, a:active, a::selection {
        text-decoration: none;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="container-fluid" style="width: 100%">
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 3px;"></div>
            <div class="col-md-12 col-lg-12" style="background: #fff;">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-5 market-box">
                        <p class="text-center">
                            <a href="<?= base_url(); ?>" title="Go to homepage"><img
                                        src="<?= base_url('assets/landing/img/onitshamarket-logo.png') ?>" width="20%"
                                        alt="market logo Image"></a>
                        </p>
                        <h3 class="widget-title text-center text-bold">
                            Login to your account
                        </h3>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <?php $this->load->view('landing/msg_view'); ?>
                                <div class="market-board login-box">
                                    <?= form_open('login/process', 'id="login-form" autocorrect="off", autocomplete="off"'); ?>
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
                                    <div class="text-center " style="margin-top: 30px">
                                        <a href="<?= base_url(lang('forgot_password_link')); ?>"
                                           class=" panel-bordered-warning"><?= lang('forgot_password'); ?></a>
                                    </div>
                                    <hr class="hr-text" data-content="OR" style="margin-top: 10px">
                                    <p class="text-center form_end text-d" style="font-size: 14px; margin-top: -35px;">
                                        <a href="<?= base_url('create'); ?>" class="panel-bordered-primary"> Create an
                                            account</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
