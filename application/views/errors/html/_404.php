<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
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
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>


<div class="container view_constraint text-center">
<img src="<?= base_url('assets/img/404cart.jpg'); ?>" class="img-responsive img_cart_404" style="margin:auto;max-width:200px;"/>
    <h2 class="hide_it_sm">Uh Oh!!</h2>
    <h5>You seem to have gone down the wrong aisle...</h5>
    <h5 style="margin-bottom:auto;" class="hide_it_sm">Go Back <a style="color: #0b6427;" href="<?=base_url()?>">Home</a></h5>
    <div class="col-xl-12 col-md-12 content-box" style="margin-bottom:-100px;">
        <div>

            <?php
                $products = $this->product->randomproducts();
                if( $products ) : ?>
                    <div class="col-xl-12 box-title ">
                        <div class="inner">
                            <h4 class="category-header">
                                Recommended For You
                        </div>
                    </div>
                    <div style="clear: both"></div>
            <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'
                 style="    margin-top: 10px;">
                <?php foreach($products as $product ) : ?>
                    <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="<?= base_url(urlify( $product->product_name, $product->id)); ?>">
                        <img class="banner-category-img img-responsive lazy" style="height:45px;"
                             data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                             src="<?= base_url('assets/img/load.gif'); ?>" alt="<?= $product->product_name; ?>"
                             title="<?= $product->product_name ?>"/>
                        <h5 class="banner-category-title"><?= character_limiter($product->product_name, 20); ?></h5>
                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                            <p class="banner-category-desc itm_price"><?= ngn($product->discount_price);?><span
                                        class="itm_disc"><?= ngn($product->sale_price); ?></span>
                                <span class="text-danger pull-right"><?= $product->item_left ?> Left</span>
                            </p>
                        <?php else : ?>
                            <p class="banner-category-desc itm_price text-center"><?= ngn($product->sale_price); ?>
                                <span class="text-danger pull-right"><?= $product->item_left ?> Left</span>
                            </p>
                        <?php endif; ?>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
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
