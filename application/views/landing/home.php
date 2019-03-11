<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<style>
    .card-max-img:hover, .card-max-shade:hover {
        -webkit-box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1);
        cursor: pointer
    }

    .pro_ad {
        min-height: auto !important
    }

    .card-max {
        margin-top: 30px;
        margin-bottom: 30px
    }

    .home_slider img {
        margin: auto;
        width: 100%;
        max-height: 500px;
        height: auto;
        min-height: auto
    }

    .home_slider {
        height: auto;
        max-height: 450px;
        min-height: auto
    }

    .card-max-header {
        text-align: left
    }

    .card-max-title {
        color: #0a0a0a;
        font-size: 24px;
        font-family: Cabin, sans-serif;
        text-transform: uppercase;
        margin-bottom: 2px
    }

    .card-max-subtitle {
        color: #3d3d3d;
        font-size: 17px;
        font-family: HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    }

    .card-max-discount, .card-max-price {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    }

    .card-max-img {
        height: auto;
        width: auto;
        max-width: 180px;
        max-height: 180px;
        border-radius: 10px
    }

    .card-max-img:hover {
        -webkit-filter: brightness(96%);
        filter: brightness(96%);
        box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1)
    }

    .card-max-side {
        height: auto;
        width: auto;
        max-width: 330px;
        max-height: 610px
    }

    .card-max-text {
        display: none;
        margin-top: -180px;
        margin-left: 2px;
        position: absolute;
        border-radius: 10px;
        height: 90%;
        width: 90%;
        padding: 20px;
        text-align: center;
        background: rgba(0, 0, 0, .6)
    }

    .card-max-price {
        font-size: 18px;
        color: #fff;
        font-weight: 600;
        margin: auto
    }

    .card-max-discount {
        font-size: 14px;
        color: #fafafa;
        font-weight: 500;
        margin: 20px auto auto;
        text-decoration: line-through
    }

    .card-max-view-more {
        float: right;
        font-size: 13px;
        font-family: HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #444;
        z-index: 1;
        position: relative;
        top: 45px
    }

    .card-max-shade-text, .max-card-product, .max-card-product-price, .max-top {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600
    }

    .card-max-view-more:hover {
        text-decoration: none;
        color: #0b6427
    }

    .max-inverse {
        background: #fff;
        border: 1px solid #dadada
    }

    .card-max-shade {
        height: 100% !important;
        width: 100%;
        margin-top: 20px;
        max-width: 150px;
        max-height: 150px
    }

    .card-max-shade:hover {
        -webkit-filter: brightness(96%);
        filter: brightness(96%);
        box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1)
    }

    .card-max-shade-text {
        font-size: 14px;
        color: #0b0b0b;
        margin-bottom: 0 !important;
        text-align: center
    }

    .max-img {
        margin-right: -15px;
        margin-left: -15px;
        padding-top: 30px;
        height: auto;
        width: auto;
        min-height: 200px;
        cursor: pointer;
        transition: transform .2s
    }

    .max-img:hover {
        -webkit-box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1);
        box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1);
        z-index: 99999;
        transform: scale(1.02)
    }

    .max-top {
        color: #222
    }

    .max-card-product {
        position: relative;
        top: 6px;
        left: -3px;
        margin: 0;
        font-size: 13px
    }

    .max-card-product-img {
        width: 40px;
        height: 40px;
        position: relative;
        left: -12px
    }

    .max-product-category {
        padding-left: 3px;
        padding-right: 0;
        margin-bottom: 0;
        padding-bottom: 0
    }

    .max-product-row {
        padding-left: 5px;
        padding-top: 3px;
        padding-bottom: 4px;
        border-bottom: 1px solid #dadada;
        border-left: 1px solid #dadada;
        position: relative;
        left: 12px
    }

    .max-card-product-price {
        font-size: 12px;
        position: relative;
        left: -3px;
        top: 4px
    }

    .max-card-link > .col-md-10 {
        color: #333
    }

    .max-card-link > .col-md-10:hover {
        color: #0b6427
    }

    .btn-dark, .btn-dark:focus, .btn-dark:hover {
        color: #fff
    }

    .btn-dark {
        border-radius: 0;
        background: #07aa5e;
        padding: 10px;
        left: -3px;
        width: 223px;
        height: 42px
    }

    .hot-row {
        margin-bottom: 10px;
        padding: 10px
    }

    .btn_view_product {
        color: #fff;
        border: 2px solid #fff;
        text-decoration: none;
        padding: 10px;
        position: absolute;
        width: fit-content;
        margin-left: -63px;
        margin-top: 20px
    }

    .btn_view_product:hover {
        color: #000;
        font-weight: 700;
        background-color: #fff;
        text-decoration: none;
        padding: 10px;
        cursor: pointer
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
    <div class="home_slider text-center" style="visibility: hidden;">
        <?php foreach ($sliders as $slider) : ?>
            <div>
                <img style="width: 100%; object-fit: cover " src="<?= SLIDER_IMAGE_PATH . $slider->image; ?>"
                     alt="Onitshamrket"/>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <div class="card-max" style="margin-top: -10px">
            <div class="card-max-header">
                <p class="card-max-title">Hot Sales<a href="#" class="card-max-view-more">View more</a></p>
                <p class="card-max-subtitle">Great items, Affordable Prices</p>
            </div>
            <div class="row">

                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale8.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦55,000</p>
                        <p class="card-max-price">₦27,450</p>
                        <a class="btn_view_product" href="javascript:void(0)"><i class="fa fa-search"></i>View
                            Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale4.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦155,000</p>
                        <p class="card-max-price">₦66,000</p>
                        <a class="btn_view_product" href="javascript:void(0)"><i class="fa fa-search"></i>View
                            Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale2.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦90,000</p>
                        <p class="card-max-price">₦47,000</p>
                        <a class="btn_view_product" href="javascript:void(0)"><i class="fa fa-search"></i>View
                            Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale7.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦125,000</p>
                        <p class="card-max-price">₦80,000</p>
                        <a class="btn_view_product" href="javascript:void(0)"><i class="fa fa-search"></i>View
                            Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale0.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦120,000</p>
                        <p class="card-max-price">₦56,000</p>
                        <a class="btn_view_product" href="javascript:void(0)"><i class="fa fa-search"></i>View
                            Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale5.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦95,000</p>
                        <p class="card-max-price">₦75,000</p>
                        <a class="btn_view_product" href="javascript:void(0)"><i class="fa fa-search"></i>View
                            Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Top Categories<a href="#" class="card-max-view-more">View more</a></p>
                <p class="card-max-subtitle">Discover top categories, you won't want to miss</p>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2 hidden-sm hidden-xs">
                    <img src="<?= base_url('assets/img/home/splash.webp'); ?>" style="max-height: 100%;">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Women's Fashion</p>
                            <img
                                    src="<?= base_url('assets/img/home/ee.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Phones Accessories</p>
                            <img
                                    src="<?= base_url('assets/img/home/ed.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Electronics</p>
                            <img
                                    src="<?= base_url('assets/img/home/ef.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Computing Accessories</p><img
                                    src="<?= base_url('assets/img/home/eg.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Phone and Tablets</p><img
                                    src="<?= base_url('assets/img/home/em.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Home and Office</p>
                            <img
                                    src="<?= base_url('assets/img/home/ek.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Bluetooth Speakers</p>
                            <img
                                    src="<?= base_url('assets/img/home/ea.jpg'); ?>"></div>
                        <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                            <p class="card-cat-text">Computing</p>
                            <img
                                    src="<?= base_url('assets/img/home/ex.jpg'); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/img/home/bbdre.jpg'); ?>">
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Top Brands<a href="#" class="card-max-view-more">View more</a></p>
                <p class="card-max-subtitle">Top brands top quality.</p>
            </div>
            <br/>
            <div class="brand-slide">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/alfa.jpg'); ?>"
                             style="display: block; height: 310px; width: auto; max-width: 400px; object-fit: cover">
                    </div>
                    <div class="col-md-8">
                        <div class="row" style="margin-left: 10px">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Electronics</p>
                                <img
                                        src="<?= base_url('assets/img/home/ef.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Computing Accessories</p><img
                                        src="<?= base_url('assets/img/home/eg.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Phone and Tablets</p><img
                                        src="<?= base_url('assets/img/home/em.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Home and Office</p>
                                <img
                                        src="<?= base_url('assets/img/home/ek.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Bluetooth Speakers</p>
                                <img
                                        src="<?= base_url('assets/img/home/ea.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Computing</p>
                                <img
                                        src="<?= base_url('assets/img/home/ex.jpg'); ?>"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/gdp.jpg'); ?>"
                             style="display: block; height: 310px; width: auto; max-width: 400px; object-fit: cover">
                    </div>
                    <div class="col-md-8">
                        <div class="row" style="margin-left: 10px">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Electronics</p>
                                <img
                                        src="<?= base_url('assets/img/home/ef.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Computing Accessories</p><img
                                        src="<?= base_url('assets/img/home/eg.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Phone and Tablets</p><img
                                        src="<?= base_url('assets/img/home/em.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Home and Office</p>
                                <img
                                        src="<?= base_url('assets/img/home/ek.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Bluetooth Speakers</p>
                                <img
                                        src="<?= base_url('assets/img/home/ea.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Computing</p>
                                <img
                                        src="<?= base_url('assets/img/home/ex.jpg'); ?>"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/alfa.jpg'); ?>"
                             style="display: block; height: 310px; width: auto; max-width: 400px; object-fit: cover">
                    </div>
                    <div class="col-md-8">
                        <div class="row" style="margin-left: 10px">
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Electronics</p>
                                <img
                                        src="<?= base_url('assets/img/home/ef.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Computing Accessories</p><img
                                        src="<?= base_url('assets/img/home/eg.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Phone and Tablets</p><img
                                        src="<?= base_url('assets/img/home/em.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Home and Office</p>
                                <img
                                        src="<?= base_url('assets/img/home/ek.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Bluetooth Speakers</p>
                                <img
                                        src="<?= base_url('assets/img/home/ea.jpg'); ?>"></div>
                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">
                                <p class="card-cat-text">Computing</p>
                                <img
                                        src="<?= base_url('assets/img/home/ex.jpg'); ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Super Deals<a href="#" class="card-max-view-more">View more</a></p>
                <p class="card-max-subtitle">Great Deals at amazing prices</p>
            </div>
            <br/>
            <div class="brand-slide">
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/splash.webp'); ?>" style="min-height: 320px">
                    </div>
                    <div class="col-md-10">
                        <div class="row" style="margin-left: 10px">
                            <?php
                            $products = $this->product->randomproducts(53, 4);
                            foreach ($products as $product) : ?>
                                <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                    <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                        <p class="product-discount-overlay"><?= get_discount($product->sale_price, $product->discount_price); ?></p>
                                    <?php endif; ?>
                                    <img class="card-product-img lazy"
                                         data-src="<?= PRODUCTS_IMAGE_PATH . $product->image_name; ?>"
                                         style="max-width: 220px; max-height: 170px !important;"
                                         src="<?= base_url('assets/img/load.gif'); ?>"
                                         alt="<?= $product->product_name; ?>"
                                         title="<?= $product->product_name; ?>">
                                    <p class="card-product-title"><?= character_limiter($product->product_name, 20); ?></p>
                                    <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                        <p class="card-product-price"> <?= ngn($product->sale_price); ?> </p>
                                        <p class="card-product-price-discount"> <?= ngn($product->discount_price); ?> </p>
                                    <?php else : ?>
                                        <p class="card-product-price"> <?= ngn($product->sale_price); ?> </p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/splash.webp'); ?>" style="min-height: 320px">
                    </div>
                    <div class="col-md-10">
                        <div class="row" style="margin-left: 10px">
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">32% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 95,000 </p>
                                <p class="card-product-price">&#8358; 12,000 </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">9% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 52,000 </p>
                                <p class="card-product-price">&#8358; 31,000 </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">5% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 55,000 </p>
                                <p class="card-product-price">&#8358; 18,000 </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">6% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 45,000 </p>
                                <p class="card-product-price">&#8358; 30,000 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/splash.webp'); ?>" style="min-height: 320px">
                    </div>
                    <div class="col-md-10">
                        <div class="row" style="margin-left: 10px">
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">6% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 45,000 </p>
                                <p class="card-product-price">&#8358; 30,000 </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">6% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 45,000 </p>
                                <p class="card-product-price">&#8358; 30,000 </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">6% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 45,000 </p>
                                <p class="card-product-price">&#8358; 30,000 </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3  card-product">
                                <p class="product-discount-overlay">6% <span>off</span></p>
                                <img class="card-product-img" src="<?= base_url('assets/img/home/tab.jpg'); ?>">
                                <p class="card-product-title">Teclast P80 Pro Tablet 3GB + 32GB </p>
                                <p class="card-product-price-discount">&#8358; 45,000 </p>
                                <p class="card-product-price">&#8358; 30,000 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="gap">
        <div class="container">
            <p class="text-center about-text">Onitshamarket.com is a dynamic e-commerce platform that is designed to
                provide the
                most convenient experience for buying and selling in Nigeria. Beyond online shop; our unique focus of
                creating a virtual mall that interfaces with the largest market in Africa gives us an advantage over the
                competition. <br/> Giving customers the benefit of buying and selling quality and genuine goods from the
                biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within
                a 24hrs lead time. </p>
        </div>
    </div>

    <?php $this->load->view('landing/resources/why-onitshamarket'); ?>

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>

<?php if ($this->agent->is_mobile()) : ?>
    <script src="<?= base_url('assets/js/mobile.js'); ?>"></script>
<?php endif; ?>
<script src="<?= base_url('assets/plugins/slick/slick.js') ?>"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').Lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true
        });
    });
    $(document).ready(function () {
        $('.home_slider').css({"visibility": "visible"});
        $('.home_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            speed: 500,
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
            cssEase: 'linear',
        });
    });
    $(document).ready(function () {
        $('.brand-slide').slick({
            infinite: true,
            // autoplay: true,
            // autoplaySpeed: 3000,
            fade: true,
            cssEase: 'linear',
            draggable: true,
        });
    });
</script>
</body>
</html>
