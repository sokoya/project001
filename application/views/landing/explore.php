<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<style type="text/css">
    .card-product-img{
        /* width:100%; */
        height:auto;
        min-width:unset !important;
        max-width:180px !important;
        max-height:140px !important;
    }
    .slick-slider{
        visibility:hidden;
    }
    .card-product {
        min-height: 285px !important;
        max-height: 285px !important;
    }
    .card-max-title{
        font-weight:800;
        font-size:18px;
        width:50%;
    }
    .card-max-subtitle{
        font-weight:500;
        font-size:14px;
        line-height:26px;
        width:50%;
        text-align:right;
    }
    .card-max-header{
        background:#201616;
        color:#fff;
        margin-top:20px;
        padding:10px 10px 0;
        display:inline-flex;
        width:100%;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <div class="container">
        <div class="cat-notify" style="padding: 30px;">
            <p class="n-head">Explore Onitsha Market</p>
        </div>

        <div class="card-max" style="margin-top:-50px;">
            <div class="card-max-header">
                <p class="card-max-title">Suggested Products For You
                </p>
                <p class="card-max-subtitle">Great Deals at amazing prices</p>
            </div>
            <br/>
            <div class="brand-slide">
                <div class="row">
                    <div class="col-md-12 slick-slider">
                        <?php foreach ($justforyou as $product) : ?>
                            <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>" class="col-md-2 col-sm-3 col-xs-6  card-product card-product-alt">
                                <div>
                                    <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                        <p class="product-discount-overlay"><?= get_discount($product->sale_price, $product->discount_price); ?></p>
                                    <?php endif; ?>
                                    <img class="card-product-img"
                                         src="<?=base_url("assets/img/load.gif")?>"
                                         data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                         alt="<?= $product->product_name; ?>"
                                         title="<?= $product->product_name; ?>">
                                    <p class="card-product-title"><?= character_limiter($product->product_name, 30); ?></p>
                                    <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                        <p class="card-product-price"><?= ngn($product->discount_price); ?> </p>
                                        <p class="card-product-price-discount"> <?= ngn($product->sale_price); ?></p>
                                    <?php else : ?>
                                        <p class="card-product-price"> <?= ngn($product->sale_price); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if( $recommendeds ) : ?>
            <div class="card-max">
                <div class="card-max-header">
                    <p class="card-max-title">Recommended Buy
                    </p>
                    <p class="card-max-subtitle">Great Deals at amazing prices</p>
                </div>
                <br/>
                <div class="brand-slide">
                    <div class="row">
                        <div class="col-md-12 <?php if(count($recommendeds ) >= 6) echo 'slick-slider'; ?>">
                            <?php
                            foreach ( $recommendeds as $product) : ?>
                                <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>" class="col-md-2 col-sm-3 col-xs-6  card-product card-product-alt">
                                    <div>
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                            <p class="product-discount-overlay"><?= get_discount($product->sale_price, $product->discount_price); ?></p>
                                        <?php endif; ?>
                                        <img class="card-product-img"
                                            src="<?=base_url("assets/img/load.gif")?>"
                                            data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                            alt="<?= $product->product_name; ?>"
                                            title="<?= $product->product_name; ?>">
                                        <p class="card-product-title"><?= character_limiter($product->product_name, 30); ?></p>
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                            <p class="card-product-price"><?= ngn($product->discount_price); ?> </p>
                                            <p class="card-product-price-discount"> <?= ngn($product->sale_price); ?></p>
                                        <?php else : ?>
                                            <p class="card-product-price"> <?= ngn($product->sale_price); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>

        <?php if($this->session->userdata('logged_in')) :
            $products = $this->user->get_recently_viewed( $this->session->userdata('logged_id'));
                if( $products ):
            ?>
                <div class="card-max">
                <div class="card-max-header">
                    <p class="card-max-title">Recently Viewed</p>
                    <p class="card-max-subtitle">Great Deals at amazing prices</p>
                </div>
                <br/>
                <div class="brand-slide">
                    <div class="row">
                        <div class="col-md-12 <?php if(count($products) >= 6 ) echo 'slick-slider';?>">
                            <?php

                            foreach ($products as $product) : ?>
                                <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>" class="col-md-2 col-sm-3 col-xs-6  card-product card-product-alt">
                                    <div>
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                            <p class="product-discount-overlay"><?= get_discount($product->sale_price, $product->discount_price); ?></p>
                                        <?php endif; ?>
                                        <img class="card-product-img"
                                             style="max-width: 50px; max-height: 50px; margin-top: 50px; margin-right: auto; margin-left: auto;margin-bottom:40px;"
                                             src="<?= base_url('assets/img/imageloader.gif'); ?>"
                                            data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                            alt="<?= $product->product_name; ?>"
                                            title="<?= $product->product_name; ?>">
                                        <p class="card-product-title"><?= character_limiter($product->product_name, 30); ?></p>
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                            <p class="card-product-price"><?= ngn($product->discount_price); ?> </p>
                                            <p class="card-product-price-discount"> <?= ngn($product->sale_price); ?></p>
                                        <?php else : ?>
                                            <p class="card-product-price"> <?= ngn($product->sale_price); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php
                endif;
            endif;
        ?>
            
    </div>

    <div class="gap"></div>
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
    <?php endif; ?>
</div>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
    let current_url = "<?= current_url()?>";
</script>
<script src="<?= $this->user->auto_version('assets/js/quick-view.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/slick/slick.js') ?>"></script>
<script>
    $(document).ready(function () {
        $('.slick-slider').css({"visibility": "visible"});
        $('.slick-slider').slick({
            infinite: true,
            speed: 500,
            slidesToShow: 6,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            arrows: true,
            cssEase: 'linear',
            responsive: [
                { breakpoint: 640, settings: {
                    slidesToShow: 2,
                }},
                { breakpoint: 913, settings: {
                    slidesToShow: 4,
                }}
            ]
        });
    });

    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', '');
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
        setTimeout(function(){
            for (let i = 0; i < allimages.length; i++) {
                if (allimages[i].getAttribute('data-src')) {
                    allimages[i].setAttribute('style', '');
                }
            }
        }, 300);
    }, false);

    $('.wishlist-btn').on('click', function () {
        let product_id = $(this).data('pid');
        let _this = $(this);
        $.ajax({
            url: base_url + 'ajax/favourite',
            method: 'POST',
            data: {
                id: product_id
            },
            success: response => {
                let parsed_response = JSON.parse(response);
                if (parsed_response.action === 'remove') {
                    _this.removeClass('category-favorite-active').addClass('.category-favorite');
                    _this.find('i').attr('title', 'Add to your wishlist');
                    
                } else {
                    _this.removeClass('category-favorite').addClass('.category-favorite-active');
                    _this.find('i').attr('title', 'Remove from your wishlist');
                
                }
                notification_message(parsed_response.msg, 'fa fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again. ', 'fa fa-info-circle', error);
            }
        })
    });
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("header-f");
    var sticky = header.offsetTop;
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
