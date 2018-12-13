<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/landing/css/home.css'); ?>">
<style>
    .view_constraint{
        min-height:calc(100vh - 629px);
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
        <?php $this->load->view('landing/resources/head_category') ?>

        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>


<div class="container view_constraint text-center">
<img src="<?= base_url('assets/landing/img/404cart.jpg'); ?>" class="img-responsive img_cart_404" style="margin:auto;max-width:200px;"/>
    <h2 class="hide_it_sm">Uh Oh!!</h2>
    <h5>You seem to have gone down the wrong aisle...</h5>
    <h5 style="margin-bottom:auto;" class="hide_it_sm">Go Back <a href="<?=base_url()?>">Home</a></h5>
    <div class="col-xl-12 col-md-12 content-box" style="margin-bottom:-100px;">
        <div>
            <div class="col-xl-12 box-title ">
                <div class="inner"><h4 class="category-header"><span class="title">You </span>
                        <span class="subtitle">
                                May Like
                            </span></h4>
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'
                 style="    margin-top: 10px;">
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/mobile.jpg'); ?>" alt="Largest"
                             title="Largest in the market"/>
                        <h5 class="banner-category-title">iPhone X</h5>
                        <p class="banner-category-desc itm_price">&#8358;300,000<span
                                class="itm_disc">&#8358;365,000</span></p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/toy.jpg'); ?>"
                             alt="<?= lang('app_name'); ?> Shopper" title="<?= lang('app_name'); ?> Shopper"/>
                        <h5 class="banner-category-title">Rocking Horse</h5>
                        <p class="banner-category-desc itm_price">&#8358;65,000<span
                                class="itm_disc">&#8358;188,000</span>
                        </p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/tv.jpg'); ?>"
                             alt="secured-payment" title="secured-payment"/>
                        <h5 class="banner-category-title">Led TV</h5>
                        <p class="banner-category-desc itm_price">&#8358;450,000<span
                                class="itm_disc">&#8358;467,000</span></p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/camera.jpg'); ?>"
                             alt="secured-payment" title="secured-payment"/>
                        <h5 class="banner-category-title">HD Cam 80MP Auto</h5>
                        <p class="banner-category-desc itm_price">&#8358;250,000<span
                                class="itm_disc">&#8358;288,000</span></p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/mobile.jpg'); ?>"
                             alt="Incredible Discounts" title="Discounts"/>
                        <h5 class="banner-category-title">Samsung S9+</h5>
                        <p class="banner-category-desc itm_price">&#8358;325,000
                        </p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/mobile.jpg') ?>"
                             alt="Pay on delivery" title="Pay on delivery"/>
                        <h5 class="banner-category-title">HTC Desire Z</h5>
                        <p class="banner-category-desc itm_price">&#8358;188,000<span class="itm_disc">&#8358;197,000</span>
                        </p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/laptop-2.jpg') ?>"
                             alt="Pay on delivery" title="Pay on delivery"/>
                        <h5 class="banner-category-title">HP Envy XI</h5>
                        <p class="banner-category-desc itm_price">&#8358;389,000</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img img-responsive" style="height:45px;"
                             src="<?= base_url('assets/landing/img/why-onitshamarket/Home-Electronics-Appliances-2.jpg') ?>"
                             alt="Pay on delivery" title="Pay on delivery"/>
                        <h5 class="banner-category-title">Home Essential 5.0</h5>
                        <p class="banner-category-desc itm_price">&#8358;95,000<span
                                class="itm_disc">&#8358;123,000</span>
                        </p>
                    </a>
                </div>
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
</body>
</html>
