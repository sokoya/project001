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
        padding:10px;
        font-size: 11px;
    }

    .panel-bordered-warning {
        border: 1px solid #9b6a00;
        color: #9b6a00 !important;
        padding:10px;
        font-size: 11px;
    }

    a:hover, a:active, a::selection {
        text-decoration: none;
    }
    @media screen and (max-width: 991px){
        .mar_top {
            margin-top:20px;
        }
    }
    @media screen and (max-width: 768px) and (min-width: 500px){
        .market-board{
            width:80%;
        }
        .ipad_pad{
            width:10%;
        }
        .inline_flex{
            display:inline-flex;
            width:100%;
        }
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;">
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
                    <div class="col-md-12 inline_flex">
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
                            <div class="row text-center" style="margin-top:40px;margin-bottom: 20px;">
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
                                    <a href="<?= base_url(lang('forgot_password_link')); ?>"
                                       class=" panel-bordered-warning"><?= lang('forgot_password'); ?></a>
                                </div>
                                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 mar_top">
                                        <a href="<?= base_url('create'); ?>" class="panel-bordered-primary"> Create an
                                            account</a>
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
