<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/home.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<style>
    .gap_small {
        height: 20px;
    }
    .cat_board {
        background-color: #fff;
        padding: 10px;
        height: 96px;
    }

    .cat_img {
        max-width: 58px;
        margin: auto;
    }

    .prod_img {
        max-width: 80px;
        margin: auto;
    }

    .products-slider {
        background: #fff;
        padding: 10px;
    }

    .products-slider span {
        font-size: 10px;
    }

    .products-slider h5 {
        font-size: 11px;
        margin-bottom: auto;
    }

    .home_banner {
        height: auto;
        text-align: center;
        font-size: 10px;
        font-weight: bolder;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php if ($this->session->flashdata('error_msg') && $page == 'homepage') : ?>
        <div class="container text-center">
            <?php $this->load->view('msg_view'); ?>
        </div>
    <?php endif; ?>
    <div class="main-slider text-center slider_show" style="height:150px;visibility: hidden;">
        <?php foreach ($sliders as $slider) : ?>
            <a href="<?= $slider->img_link; ?>">
                <img src="<?= SLIDER_IMAGE_PATH . $slider->image; ?>" class="img-responsive"
                     style="margin:auto;padding:20px;"/>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="gap"></div>
    <div class="gap_small"></div>
    <!--    //top categories slider-->
    <div class="container">
        <h5>Top <span style="color:#575745">Categories</span></h5>
        <div class="categories-slider text-center slider_show" style="visibility: hidden;">
            <?php foreach ($main_categories as $category) : ?>
                <div class="cat_board">
                    <a style="color: #0b0b0b;" href="<?= base_url('catalog/' . $category->slug . '/'); ?>">
                        <img class="cat_img"
                             src="<?= base_url('assets/img/cat_icons/028-smartphones.png'); ?>"

                             alt="Shop for <?= $category->name; ?>">
                        <span style="font-size:10px;margin-bottom:auto;"><?= $category->name; ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="gap"></div>
    <?php foreach ($category_listing as $listing) :
        $products = $this->product->randomproducts((int)$listing->category_id, 12);
        ?>
        <div class="gap-small"></div>
        <div class="container">
            <h5>Top Selling <span style="color:#575745"><a
                            href="<?= base_url('catalog/' . $listing->slug . '/'); ?>"><?= $listing->name ?></a></span>
            </h5>
            <div class="products-slider text-center slider_show" style="visibility: hidden;">
                <?php foreach ($products as $product) : ?>
                    <a style="color: #0b0b0b" href="<?= base_url(urlify($product->product_name, $product->id)); ?>">
                        <div style="">

                            <img src="<?= PRODUCTS_IMAGE_PATH . $product->image_name ?>" class="prod_img"/>
                            <span><?= character_limiter($product->product_name, 15) ?></span>
                            <?php
                            if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                <h5><?= ngn($product->discount_price); ?>
                                    <small style="text-decoration: line-through;color:#e48b84"><?= ngn($product->sale_price); ?></small>
                                </h5>
                                <h5>
                                    <small class="pull-right text-danger"><?= $product->item_left; ?> Item left</small>
                                </h5>
                            <?php else : ?>
                                <h5><?= ngn($product->sale_price); ?>
                                    <small class="pull-right text-danger"><?= $product->item_left; ?> Item left</small>
                                </h5>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="gap-small"></div>
        <div class="home_banner container">
            <img src="<?= base_url('assets/img/home/banner2.png'); ?> " class="img-responsive">
        </div>
    <?php endforeach; ?>
    <div class="gap">
        <div class="container">
            <p class="text-center">Onitshamarket.com is a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria. Beyond online shop; our unique focus of creating a virtual mall that interfaces with the largest market in Africa gives us an advantage over the competition. <br /> Giving customers the benefit of buying and selling quality and genuine goods from the biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within a 24hrs lead time. </p>
        </div>
    </div>
    <?php $this->load->view('landing/resources/why-onitshamarket'); ?>


    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <script src="<?= base_url('assets/plugins/slick/slick.js') ?>"></script>
</div>
<script>
    $(document).ready(function () {
        $('.slider_show').css({"visibility":"visible"})
        $('.main-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false,
            mobileFirst: true
        });
        $('.categories-slider').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 2,
            lazyLoad: 'ondemand',
            arrows: false,
            mobileFirst: true,
            variableWidth: true
        });
        $('.products-slider').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            arrows: false,
            mobileFirst: true,
        });
    });
</script>
</body>
</html>
