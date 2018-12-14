<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/landing/css/home.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/seller/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/seller/plugins/slick/slick-theme.css'); ?>">
<style>
    .pro_ad {
        min-height: auto !important;
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

    .slide_float {
        margin-top: -120px;
        margin-left: auto;
        margin-right: auto;
        color: white;
    }

    .btn-shopnow, .btn-shopnow:active, .btn-shopnow::selection {
        border: 1px solid white;
        text-decoration: none;
        color: white;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <div class="main-slider row text-center" style="height:150px;">
        <div style="background: rgb(85, 49, 79);height:192px;">
            <img src="<?= base_url('assets/landing/img/test_slider/1.png'); ?>" class="img-responsive"
                 style="max-width:240px;margin:auto;padding:20px;"/>
            <div class="slide_float">
                Low Price Rate Alert<br/><a class="btn btn-shopnow">Shop Now</a>
            </div>
        </div>
        <div style="background: rgb(142, 138, 136);height:192px;">
            <img src="<?= base_url('assets/landing/img/test_slider/13.png'); ?>" class="img-responsive"
                 style="max-width:240px;margin:auto;padding:20px;"/>
            <div class="slide_float">
                Low Price Rate Alert<br/><a class="btn btn-shopnow">Shop Now</a>
            </div>
        </div>
        <div style="background: rgb(175, 171, 149);height:192px;">
            <img src="<?= base_url('assets/landing/img/test_slider/3.png'); ?>" class="img-responsive"
                 style="max-width:210px;margin:auto;padding:20px;"/>
            <div class="slide_float">
                Low Price Rate Alert<br/><a class="btn btn-shopnow">Shop Now</a>
            </div>
        </div>
        <div style="background: rgb(62, 63, 62);height:192px;">
            <img src="<?= base_url('assets/landing/img/test_slider/14.png'); ?>" class="img-responsive"
                 style="max-width:240px;margin:auto;padding:20px;"/>
            <div class="slide_float">
                Low Price Rate Alert<br/><a class="btn btn-shopnow">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="gap"></div>
<!--    //top categories slider-->
    <div class="container">
        <h5>Top <span style="color:#575745">Categories</span></h5>
        <div class="categories-slider text-center">
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/028-smartphones.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Mobile Devices</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/television.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Electronics</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/cable.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Phone Accessories</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/t-shirt.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Men's Fashion</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/050-monitor.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Computers</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/hairdryer.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Lady's Fashion</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/036-laptop.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Laptops</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/keyboard.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">PC Accessories</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/market.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Real Estate</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/002-chair.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Furniture</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/001-duck.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Kids</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/004-gamer.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Console</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/smartwatch.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Wearable</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/003-camera.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Camera</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/005-tablet.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Tablets</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/washing-machine.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Appliances</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/cat_icons/headphones.png'); ?>"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Headsets</span>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Electronics</span></h5>
    </div>
    <div class="gap"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Fashion</span></h5>
    </div>
    <div class="gap"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Gadgets</span></h5>
    </div>
    <div class="gap"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Laptops</span></h5>
    </div>
    <div class="gap"></div>
    <div class="container">
        <div class="row" data-gutter="15">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="owl-carousel owl-loaded owl-nav-dots-inner"
                     data-options='{"items":1,"loop":true,"nav":true}'>
                    <div class="owl-item">
                        <div class="slider-item"
                             style="background-image:url(<?= base_url('assets/landing/img/onitshamarket/left-slider/adventure-deals.jpg'); ?>);">
                            <div class="slider-item-task"></div>
                            <div class="container">
                                <div class="slider-item-inner">
                                    <div class="slider-item-caption-left slider-item-caption-white">
                                        <h4 class="slider-item-caption-title">Adventure Deals</h4>
                                        <p class="slider-item-caption-desc">From Under N999.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="slider-item"
                             style="background-image:url(<?= base_url('assets/landing/img/onitshamarket/left-slider/top-bags-and-shoes.jpg'); ?>);">
                            <div class="slider-item-task"></div>
                            <div class="container">
                                <div class="slider-item-inner">
                                    <div class="slider-item-caption-right">
                                        <h4 class="slider-item-caption-title">Top Bags And Shoes</h4>
                                        <p class="slider-item-caption-desc">Save Upto 50% Off.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="slider-item"
                             style="background-image:url(<?= base_url('assets/landing/img/onitshamarket/left-slider/home-essentials.jpg'); ?>);">
                            <div class="slider-item-task"></div>
                            <div class="container">
                                <div class="slider-item-inner">
                                    <div class="slider-item-caption-left slider-item-caption-white">
                                        <h4 class="slider-item-caption-title">Home Essentials</h4>
                                        <p class="slider-item-caption-desc">ILIFE A6 @ N5999.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 clearfix hide_mob">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="product">
                            <div class="product-caption text-center"><strong>Stir up your appetite
                                    with <?= lang('app_name'); ?> Fresh
                                    Fruits!</strong> <span>Keep healthy with our fresh fruits for less than N200</span>
                            </div>
                            <div class="product-img-wrap text-center">
                                <img class="product-img-small img-responsive" style="margin: 0 auto;"
                                     src="<?= base_url('assets/landing/img/onitshamarket/fresh-fruit.png'); ?>"
                                     alt="fresh-fruit" title="Let <?= lang('app_name'); ?> Shopper do it for you"/>
                            </div>
                            <a class="product-link" href="#"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product">
                            <div class="product-caption text-center"><strong>One packed of assorted
                                    wears</strong><br/><span> Male</span></div>
                            <div class="product-img-wrap text-center">
                                <img class="product-img-small img-responsive" style="margin: 0 auto; width: 70%"
                                     src="<?= base_url('assets/landing/img/onitshamarket/assorted-wears.png'); ?>"
                                     alt="fresh-fruit" title="Let <?= lang('app_name'); ?> Shopper do it for you"/>
                            </div>
                            <a class="product-link" href="#"></a>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product product-half product-fit3 pro_ad">
                            <div class="product-img-wrap text-center">
                                <img class="product-img-small img-responsive" style="margin: 0 auto; width: 80%"
                                     src="<?= base_url('assets/landing/img/onitshamarket/wrist-watch.jpg'); ?>"
                                     alt="Wrstwatch" title="Wrist watch"/>
                            </div>
                            <ul class="product-labels"></ul>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <a href="#"><h5 class="text-center">Naviforce 9044 Military Style <br/> <span>Men Japan Quartz</span>
                                    </h5></a>
                                <div class="product-caption-price">N18,900</div>
                                <ul class="product-caption-feature-list">
                                    <li>45 left</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product product-half product-fit3 pro_ad">
                            <div class="product-img-wrap text-center">
                                <img class="product-img-small img-responsive" style="margin: 0 auto; width: 80%"
                                     src="<?= base_url('assets/landing/img/onitshamarket/bag.jpg'); ?>" alt="Bag"
                                     title="Gift Cards"/>
                            </div>
                            <ul class="product-labels"></ul>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <a href="#"><h5 class="text-center"><span>Douguyan 14 inch Laptop Backpack</span></h5>
                                </a>
                                <div class="product-caption-price">N3,500</div>
                                <ul class="product-caption-feature-list">
                                    <li>45 left</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product product-half product-fit3 pro_ad">
                            <div class="product-img-wrap text-center">
                                <img class="product-img-small img-responsive" style="margin: 0 auto; width: 80%"
                                     src="<?= base_url('assets/landing/img/onitshamarket/touchlight.jpg'); ?>"
                                     alt="Touchlight" title="Gift Cards"/>
                            </div>
                            <ul class="product-labels"></ul>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <a href="#"><h5 class="text-center"><span>Nitecore Concept 1 C1 Flashlight</span></h5>
                                </a>
                                <div class="product-caption-price">N2,699</div>
                                <ul class="product-caption-feature-list">
                                    <li>216 left</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product product-half product-fit3 pro_ad">
                            <div class="product-img-wrap text-center">
                                <img class="product-img-small img-responsive" style="margin: 0 auto; width: 70%"
                                     src="<?= base_url('assets/landing/img/onitshamarket/vacuum-cleaner.jpg'); ?>"
                                     alt="vacuum-cleaner" title="vacuum-cleaner"/>
                            </div>
                            <ul class="product-labels"></ul>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <a href="#"><h5 class="text-center"><span>ILIFE A6 Smart Robotic Vacuum Cleaner </span>
                                    </h5></a>
                                <div class="product-caption-price">N76,999</div>
                                <ul class="product-caption-feature-list">
                                    <li>10 left</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding:30px;">
        <hr class="hr-text" data-content="Why Choose Us">
        <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/largest.png'); ?>" alt="Largest"
                         title="Largest in the market"/>
                    <h5 class="banner-category-title">Largest</h5>
                    <p class="banner-category-desc">Range of products to choose from.</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/carrito-shopper.png'); ?>"
                         alt="<?= lang('app_name'); ?> Shopper" title="<?= lang('app_name'); ?> Shopper"/>
                    <h5 class="banner-category-title">Jewelry</h5>
                    <p class="banner-category-desc">Automated shopping assistant</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/secured-payment.png'); ?>"
                         alt="secured-payment" title="secured-payment"/>
                    <h5 class="banner-category-title">Secured Payment</h5>
                    <p class="banner-category-desc">On all your debit/credit cards</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/incredible-discounts.png'); ?>"
                         alt="Incredible Discounts" title="Discounts"/>
                    <h5 class="banner-category-title">Incredible Discounts</h5>
                    <p class="banner-category-desc">On all products, all season.</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/pay-on-delivery.png') ?>"
                         alt="Pay on delivery" title="Pay on delivery"/>
                    <h5 class="banner-category-title">Pay On Delivery</h5>
                    <p class="banner-category-desc">On all products</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/fast-delivery.png') ?>"
                         alt="Fast Delivery"
                         title="Fast Delivery"/>
                    <h5 class="banner-category-title">Fast Delivery</h5>
                    <p class="banner-category-desc">Mationwide Same Day</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/genuine-brands.png') ?>"
                         alt="Genuine Brands"
                         title="Genuine Brands"/>
                    <h5 class="banner-category-title">Genuine Brands</h5>
                    <p class="banner-category-desc">From all over the world</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/landing/img/why-onitshamarket/247.png') ?>"
                         alt="247 Active Support" title="247 Active Support"/>
                    <h5 class="banner-category-title">24/7</h5>
                    <p class="banner-category-desc">Customer Agents Waiting To Help You.</p>
                </a>
            </div>
        </div>
    </div>
    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <script src="<?= base_url('assets/seller/plugins/slick/slick.js') ?>"></script>
</div>
<script>
    $(document).ready(function () {
        $('.main-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 8000,
            arrows: true,
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
    });
</script>
</body>
</html>
