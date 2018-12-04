<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .well {
        padding: 5px;
        font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .img-bg {
        padding: 0px !important;
        margin-right: 0px;
    }

    .market-box {
        margin-left: 0px !important;
    }

    .img-bg > img {
        width: 100%;
        position: relative;
        opacity: 0.95;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .market-login-box {
        margin-left: -48px;
        margin-right: 0px;
        width: auto;
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
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/head_menu') ?>
    <div class="container-fluid" style="width: 100%">
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 3px;"></div>
            <div class="col-md-12 col-lg-12" style="background: #fff;">
                <div class="row">
                    <div class="col-md-6 market-box">
                        <p class="text-center">
                            <a href="<?= base_url(); ?>" title="Go to homepage"><img
                                        src="<?= base_url('assets/landing/img/onitshamarket-logo.png') ?>" width="20%"
                                        alt="market logo Image"></a>
                        </p>
                        <h3 class="widget-title text-center text-bold">
                            Forgot Password <small>Enter Valid Email</small>
                        </h3>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <?php $this->load->view('landing/msg_view'); ?>
                                <div class="market-board login-box">
                                    <?= form_open('resetpassword/process', 'id="reset-form"'); ?>
                                    <div class="form-group">
                                        <label><h5>Email Address*</h5></label>
                                        <input class="form-control" type="email" name="email"
                                               placeholder="Enter your email" autofocus="" required/>
                                    </div>
                                    <button type="submit" class="col-md-12 col-sm-12 col-xs-12 btn btn-success">
                                        <strong>RESET PASSWORD</strong></button>
                                </div>
                                <br/>
                                <?= form_close(); ?>
                                <div class="text-center" style="margin-top: 25px">
                                    <a href="<?= base_url('login'); ?>">Login</a>
                                </div>
                                <hr class="hr-text" data-content="OR" style="margin-top: 10px">
                                <p class="text-center form_end text-d" style="font-size: 14px; margin-top: -40px;">
                                    <a href="<?= base_url('create'); ?>"> Create an account</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 img-bg hidden-xs">
                        <img src="<?= base_url('assets/landing/cover-photo.png') ?>">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
