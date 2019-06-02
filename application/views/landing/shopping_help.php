<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
<style>
    .view_constraint{
        padding-top: 50px;
        padding-bottom: 50px;
        min-height:calc(100vh - 629px);
    }

    .text-content > p {
        padding-bottom: 10px;
    }

    @media screen and (max-width:991px){
        .view_constraint{
            min-height: calc(100vh - 167px) !important;
        }
        .img_cart_404{
            margin: -20px auto auto !important;
        }
        .content-box{
            margin-bottom:0 !important;
        }
        .hide_it_sm{
            display:none !important;
        }
    }
</style>
</head>
<body style="background: #fff;">
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>


<div class="container view_constraint">

    <div class="col-xl-12 col-md-12" style="margin-bottom:-100px;">
        <div class="inner">
            <h2 class="category-header">
                <b>Shopping Help</b>
            </h2>
            <hr />
            <div class="text-content">
                <p>
                    Experience an easy, simple and comfortable shopping with us
                    Onitshamarket.com SHIPS within Nigeria WITH an efficient logistic firm, for a quick and safe good(s) DELIVERY of good(s) anywhere within Nigeria.
                    Customers’ Orders will be available for shipping within 3 days.
                </p>
                <p>
                    Delivery available Monday to Friday. Your package will require a signature from you or someone you know. If you’re unavailable to sign for your parcel, your logistic carrier will leave you a notice, and you’ll be informed of the nearest pickup point.
                </p>
                <p>
                    <h3><b>How long will it take to receive my order </b></h3>
                    Delivery of your order should get to you between 2-7 days
                </p>
                <p>
                    <h3><b>Will I receive updates on my order status?</b></h3>
                    Yes, we will update you during each stage of delivery process by e-mail and SMS. You can as well track your order on your <a href="<?= base_url('account/order_track/');?>">dashboard</a>
                </p>
            </div>
        </div>
    </div>
</div>

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
        <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').Lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true
        });
    });
</script>
</body>
</html>
