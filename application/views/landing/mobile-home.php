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
        max-width: 50px;
        margin: auto;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <div class="main-slider row text-center" style="height:150px;">
        <div style="background: rgb(85, 49, 79);height:192px;"><img
                    src="<?= base_url('assets/landing/img/test_slider/1.png'); ?>" class="img-responsive"
                    style="max-width:240px;margin:auto;padding:20px;"/></div>
        <div style="background: rgb(142, 138, 136);height:192px;"><img
                    src="<?= base_url('assets/landing/img/test_slider/13.png'); ?>" class="img-responsive"
                    style="max-width:240px;margin:auto;padding:20px;"/></div>
        <div style="background: rgb(175, 171, 149);height:192px;"><img
                    src="<?= base_url('assets/landing/img/test_slider/3.png'); ?>" class="img-responsive"
                    style="max-width:210px;margin:auto;padding:20px;"/></div>
        <div style="background: rgb(62, 63, 62);height:192px;"><img
                    src="<?= base_url('assets/landing/img/test_slider/14.png'); ?>" class="img-responsive"
                    style="max-width:240px;margin:auto;padding:20px;"/></div>
    </div>
    <div class="gap"></div>
    <div class="container">
        <h5>Top <span style="color:#575745">Categories</span></h5>
        <div class="categories-slider text-center">
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/mobile.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Mobile Devices</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/laptop-2.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Laptops</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/tv.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Electronics</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/hdd.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">PC Accessories</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/house.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Real Estate</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/fashion.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Fashion</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/mobile.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Furniture</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/toy.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Kids</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/camera.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Camera</span>
            </div>
            <div class="cat_board">
                <img class="cat_img"
                     src="<?= base_url('assets/landing/img/why-onitshamarket/Home-Electronics-Appliances-2.jpg'); ?>" class="img-responsive"
                     alt="img">
                <span style="font-size:10px;margin-bottom:auto;">Appliances</span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" data-gutter="15">
        <div class="col-md-3 clearfix hide_mob">
            <div class="product product-half pro_ad" style="margin-bottom: 10px;">
                <div class="product-caption text-center">Let <strong><?= lang('app_name') ?></strong> do all
                    the shopping
                    for you free.
                </div>
                <div class="product-img-wrap text-center">
                    <img class="product-img-small" style="margin: 0 auto;"
                         src="<?= base_url('assets/landing/img/onitshamarket/carrito_shopper.png'); ?>"
                         alt="<?= lang('app_name'); ?> Shoppers"
                         title="Let <?= lang('app_name'); ?> Shopper do it for you"/>
                </div>
                <ul class="product-labels"></ul>
                <a class="product-link" href="#"></a>
                <div class="product-caption">
                    <a href="#"><h5 class="product-caption-title text-center">
                            <span>Click Here to go to Shop Now</h5></a>
                </div>
            </div>
            <div class="product product-half pro_ad">
                <div class="product-img-wrap text-center">
                    <img class="product-img-small" style="margin: 0 auto; width: 70%"
                         src="<?= base_url('assets/landing/img/onitshamarket/gift_cards.png'); ?>"
                         alt="<?= lang('app_name'); ?> Gift Cards" title="Gift Cards"/>
                </div>
                <ul class="product-labels"></ul>
                <a class="product-link" href="#"></a>
                <div class="product-caption">
                    <a href="#"><h5 class="product-caption-title text-center">
                            <span>Want Exclusive Discounts? Shop Now</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 hide_mob">
            <div class="product product-fit">
                <ul class="product-labels"></ul>
                <div class="product-caption">
                    <h5><strong><?= lang('app_name'); ?> Essentials</strong></h5>
                </div>
                <div class="product-img-wrap">
                    <a href="<?= base_url('catalog'); ?>"> <img class="product-img"
                                                                style="margin: 0 auto; height: 150px; width: 100% "
                                                                src="<?= base_url('assets/landing/img/onitshamarket/carrito_essential_per_food.png'); ?>"
                                                                alt="<?= lang('app_name'); ?> Essential Market"
                                                                title="<?= lang('app_name'); ?> Essential"/></a>
                </div>
                <div class="product-caption text-center"><strong>Pet foods</strong></div>

                <div class="product-img-wrap product-pt4">
                    <a href="<?= base_url('catalog'); ?>"> <img class="product-img"
                                                                style="margin: 0 auto; height: 150px; width: 100%"
                                                                src="<?= base_url('assets/landing/img/onitshamarket/carrito_essential_newest_gadget.png'); ?>"
                                                                alt="<?= lang('app_name'); ?>_essential_newest_gadget"
                                                                title="<?= lang('app_name'); ?> "/></a>
                </div>
                <div class="product-caption text-center"><strong>Newest Gadget</strong></div>
            </div>
        </div>
        <div class="col-md-3 hide_mob">
            <div class="product product-fit">
                <ul class="product-labels"></ul>
                <div class="product-caption">
                    <h5><strong>Your dressing your style.</strong></h5>
                </div>

                <div class="product-img-wrap" style="height:auto !important;overflow: visible;">
                    <img class="product-img img-responsive prd_img" style="margin: 0 auto;"
                         src="<?= base_url('assets/landing/img/onitshamarket/female_wears.png'); ?>"
                         alt="female_wears"
                         title="female_wears"/>
                </div>
                <a class="product-link" href="<?= base_url('category'); ?>"></a>
                <div class="product-caption">
                    <h5 class="product-caption-title text-center"><strong>Shop all female dresses</strong></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 hide_mob">
            <div class="product product-fit">
                <ul class="product-labels"></ul>
                <div class="product-caption text-center">
                    <h5><strong>Be The modern Man!</strong></h5>
                </div>
                <div class="product-img-wrap" style="height:auto !important;overflow: visible;">
                    <img class="product-img img-responsive prd_img img_man" style="margin: 0 auto;"
                         src="<?= base_url('assets/landing/img/onitshamarket/male_wears.png'); ?>"
                         alt="male wears"
                         title="male wears"/>
                </div>
                <a class="product-link" href="<?= base_url('category'); ?>"></a>
                <div class="product-caption">
                    <h5 class="product-caption-title"><strong>Shop all male clothing</strong></h5>
                    <span style="">Let's dress you for that perfect occassion for less than N5,000</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
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
<div class="gap"></div>
<div class="container">
    <h3 class="widget-title-sm text-center"><strong>
            Online Shopping at <?= lang('app_name'); ?>: widest selection of quality products at the wholesale
            prices
            online.</strong>
    </h3>
    <h5 class="text-center"> Our extensive and affordable range of products features the very latest, with the
        finest quality.</h5>
</div>
<div class="gap"></div>
<div class="container">
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
<div class="gap"></div>
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
