<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<style>
    .card-max-img:hover, .card-max-shade:hover {
        -webkit-box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1);
        cursor: pointer;
        box-shadow: 0 5px 5px 0 rgba(176, 177, 193, .1)
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
        filter: brightness(96%)
    }

    .card-max-side {
        height: auto;
        width: auto;
        max-width: 330px;
        max-height: 610px
    }

    .card-max-text {
        top: 0;
        left: 0;
        display: none;
        position: absolute;
        height: 100%;
        width: 100%;
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
        filter: brightness(96%)
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
        padding: 10px;
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
                <p class="card-max-title">Hot Sales
                    <!--                    <a href="#" class="card-max-view-more">View more</a>-->
                </p>
                <p class="card-max-subtitle">Great items, Affordable Prices</p>
            </div>
            <div class="row">
                <?php
                $excludes = array();
                $products = $this->product->randomproducts(array(105, 14, 106,), 6);

                foreach ($products as $product):
                    ?>
                    <!--                    <div style="background-color: #fff;">-->
                    <div class="col-md-2 col-xs-4 hot-row"
                         style="background-color: #fff; border-right: 2px solid #f6f6f6; position: relative;">

                        <img class="card-max-img"
                             src="https://res.cloudinary.com/onitshamarket/image/upload/w_260,h_280,c_pad/onitshamarket/product/<?= $product->image_name; ?>"/>
                        <div class="card-max-text">
                            <div style="margin-top: 40px">
                                <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                    <p class="card-max-discount"><?= ngn($product->sale_price); ?></p>
                                    <p class="card-max-price"><?= ngn($product->discount_price); ?></p>
                                    <a class="btn_view_product"
                                       href="<?= base_url(urlify($product->product_name, $product->id)); ?>"><i
                                                class="fa fa-search"></i>View
                                        Product</a>
                                <?php else : ?>
                                    <p class="card-max-price"><?= ngn($product->discount_price); ?></p>
                                    <a class="btn_view_product"
                                       href="<?= base_url(urlify($product->product_name, $product->id)); ?>"><i
                                                class="fa fa-search"></i>View
                                        Product</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!--                    </div>-->
                    <?php array_push($excludes, $product->id); ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Top Categories
                    <!--                    <a href="#" class="card-max-view-more">View more</a>-->
                </p>
                <p class="card-max-subtitle">Discover top categories, you won't want to miss</p>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2 hidden-sm hidden-xs">
                    <img src="<?= base_url('assets/img/home/categories/left_pane1.jpg'); ?>" style="max-height: 100%;">
                </div>
                <div class="col-md-10">
                    <div class="row" style="margin-left: 1px">

                        <a href="https://www.onitshamarket.com/catalog/women-s-wear/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Women's Fashion</p>
                                <img src="<?= base_url('assets/img/home/categories/prod1.jpg'); ?>">
                            </div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/accessories/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Phones Accessories</p>
                                <img
                                        src="<?= base_url('assets/img/home/categories/prod2.jpg'); ?>"></div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/electronics/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Electronics</p>
                                <img
                                        src="<?= base_url('assets/img/home/categories/prod3.jpg'); ?>"></div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/computer-accessories/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Computing Accessories</p><img
                                        src="<?= base_url('assets/img/home/categories/prod4.jpg'); ?>"></div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/phones-tablets/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Phone and Tablets</p><img
                                        src="<?= base_url('assets/img/home/categories/prod5.jpg'); ?>"></div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/home-office/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Home and Office</p>
                                <img
                                        src="<?= base_url('assets/img/home/categories/prod6.jpg'); ?>"></div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/bluetooth-speakers/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Bluetooth Speakers</p>
                                <img
                                        src="<?= base_url('assets/img/home/categories/prod7.jpg'); ?>"></div>
                        </a>
                        <a href="https://www.onitshamarket.com/catalog/computing/">
                            <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                <p class="card-cat-text">Computing</p>
                                <img
                                        src="<?= base_url('assets/img/home/categories/prod8.jpg'); ?>"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-responsive" src="<?= base_url('assets/img/home/banner_ad.png'); ?>">
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Top Brands
                    <!--                    <a href="#" class="card-max-view-more">View more</a>-->
                </p>
                <p class="card-max-subtitle">Top brands top quality.</p>
            </div>
            <br/>
            <div class="brand-slide">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <img class="top_brand_image" src="<?= base_url('assets/img/home/top_brands.png'); ?>"
                             style="display: block; height: 310px; width: auto; max-width: 400px; object-fit: contain">
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
                <!--                <div class="row">-->
                <!--                    <div class="col-md-4 hidden-sm hidden-xs">-->
                <!--                        <img src="--><? //= base_url('assets/img/home/gdp.jpg'); ?><!--"-->
                <!--                             style="display: block; height: 310px; width: auto; max-width: 400px; object-fit: cover">-->
                <!--                    </div>-->
                <!--                    <div class="col-md-8">-->
                <!--                        <div class="row" style="margin-left: 10px">-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Electronics</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ef.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Computing Accessories</p><img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/eg.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Phone and Tablets</p><img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/em.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Home and Office</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ek.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Bluetooth Speakers</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ea.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Computing</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ex.jpg'); ?><!--"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="row">-->
                <!--                    <div class="col-md-4 hidden-sm hidden-xs">-->
                <!--                        <img src="--><? //= base_url('assets/img/home/alfa.jpg'); ?><!--"-->
                <!--                             style="display: block; height: 310px; width: auto; max-width: 400px; object-fit: cover">-->
                <!--                    </div>-->
                <!--                    <div class="col-md-8">-->
                <!--                        <div class="row" style="margin-left: 10px">-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Electronics</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ef.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Computing Accessories</p><img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/eg.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Phone and Tablets</p><img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/em.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Home and Office</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ek.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Bluetooth Speakers</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ea.jpg'); ?><!--"></div>-->
                <!--                            <div class="col-md-4 col-sm-4 col-xs-4 padding-0 card-cat">-->
                <!--                                <p class="card-cat-text">Computing</p>-->
                <!--                                <img-->
                <!--                                        src="-->
                <? //= base_url('assets/img/home/ex.jpg'); ?><!--"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Super Deals
                    <!--                    <a href="#" class="card-max-view-more">View more</a>-->
                </p>
                <p class="card-max-subtitle">Great Deals at amazing prices</p>
            </div>
            <br/>
            <div class="brand-slide">
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/left_pane_2.jpg'); ?>" style="min-height: 320px">
                    </div>
                    <div class="col-md-10">
                        <div class="row" style="margin-left: 10px">
                            <?php
                            $products = $this->product->randomproducts(array(31, 33, 36, 53, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 23, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70), 4); // Just for you
                            foreach ($products as $product) : ?>
                                <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>">
                                    <div class="col-md-3 col-sm-3 col-xs-3  card-product card-product-alt">
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                            <p class="product-discount-overlay"><?= get_discount($product->sale_price, $product->discount_price); ?></p>
                                        <?php endif; ?>
                                        <img class="card-product-img"
                                             src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
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

        </div>

        <?php if ($this->session->userdata('logged_in')) :
            $recently_viewed = $this->user->get_recently_viewed($this->session->userdata('logged_id'), $excludes);
            if ($recently_viewed && count($recently_viewed)) :
                ?>
                <div class="card-max">
                    <div class="card-max-header">
                        <p class="card-max-title">Recently Viewed Items </p>
                        <p class="card-max-subtitle">Items are still available.</p>
                    </div>
                    <br/>
                    <div class="brand-slide">
                        <div class="row">
                            <div class="col-md-2 hidden-sm hidden-xs">
                                <img src="<?= base_url('assets/img/home/left_pane_2.jpg'); ?>"
                                     style="min-height: 320px">
                            </div>
                            <div class="col-md-10">
                                <div class="row" style="margin-left: 10px">
                                    <?php
                                    $x = 0;
                                    foreach ($recently_viewed as $viewed) : ?>
                                        <a href="<?= base_url(urlify($viewed->product_name, $viewed->id)); ?>">
                                            <div class="col-md-3 col-sm-3 col-xs-3  card-product card-product-alt">
                                                <?php if (discount_check($viewed->discount_price, $viewed->start_date, $viewed->end_date)): ?>
                                                    <p class="product-discount-overlay"><?= get_discount($viewed->sale_price, $viewed->discount_price); ?></p>
                                                <?php endif; ?>
                                                <img class="card-product-img"
                                                     src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $viewed->image_name; ?>"
                                                     alt="<?= $viewed->product_name; ?>"
                                                     title="<?= $viewed->product_name; ?>">
                                                <p class="card-product-title"><?= character_limiter($viewed->product_name, 30); ?></p>
                                                <?php if (discount_check($viewed->discount_price, $viewed->start_date, $viewed->end_date)) : ?>
                                                    <p class="card-product-price"><?= ngn($viewed->discount_price); ?> </p>
                                                    <p class="card-product-price-discount"> <?= ngn($viewed->sale_price); ?></p>
                                                <?php else : ?>
                                                    <p class="card-product-price"> <?= ngn($viewed->sale_price); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                        <?php $x++;
                                        if ($x == 4) break; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>

    <div class="gap">
        <div class="container">
            <p class="about-text">Internet Onitshamarketing Ltd trading online as Onitshamarket.com is a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria and rest of the world.  Beyond online market; our unique focus of creating a virtual mall and ultra modern experience centres that interfaces with the largest market in Africa gives us an advantage over the competition.
                <br /> customers the benefit of buying and selling quality and genuine goods from the biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within a 24hrs lead time.</p>
        </div>
    </div>

    <?php $this->load->view('landing/resources/review_modal'); ?>
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
<script>
    let review = JSON.parse('<?=$review;?>');
    product_id = review.product_id;
    user = review.user_id;
    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
    }, false);
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
        $('.brand-slide').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
            cssEase: 'linear',
            draggable: true,
        });
        <?php if ($this->session->userdata('logged_in')) :?>
        if (JSON.stringify(review) === '[]') {
        } else {
            $("#review_modal")
                .find('.modal-header h3 b#username')
                .text(review.username).end()
                .find('img#product_image').prop("src", review.img_path).end()
                .find('b#item_name')
                .text(review.product_name).end()
                .modal('show');
            $('#home_review_form').on('submit', function (e) {
                e.preventDefault();
                let home_detail = $('#home_review_detail').val();
                let home_title = $('#home_review_title').val();
                let review_dn = review.username;
                $.ajax({
                    url: base_url + "product/add_review",
                    method: "POST",
                    data: {title: home_title, name: review_dn, detail: home_detail, 'product_id': product_id, 'user_id': user},
                    success: function (response) {
                        $('#review_modal').modal('hide');
                        notification_message('Thanks for your feedback','fas fa-thumbs-up','success');
                    },
                    error: function (response) {
                        notification_message('Error submitting feedback, please contact webmaster','fas fa-remove','error');
                    }
                });
            });
        }
        <?php endif?>
    });
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function () {
            navigator.serviceWorker.register("<?= base_url('sw.js');?>")
                .then(function (registration) {
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function (err) {
                    console.log('ServiceWorker registration failed: ', err);
                });
        });
    }
</script>
<script src="<?= $this->user->auto_version('assets/js/rating.js'); ?>"></script>
</body>
</html>
