<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/landing/css/home.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/seller/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/seller/plugins/slick/slick-theme.css'); ?>">
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
    .products-slider h5{
        font-size: 11px;
        margin-bottom:auto;
    }
    .home_banner{
        height:80px;
        background: #ffe5d7;
        text-align: center;
        padding-top:35px;
        font-size: 10px;
        font-weight: bolder;
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
    <div class="gap_small"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Electronics</span></h5>
        <div class="products-slider text-center">
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product1</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product2</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product3</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product4</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product5</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product6</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product7</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product8</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product9</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product0</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
        </div>
    </div>
    <div class="gap_small"></div>
    <div class="home_banner">banner 1</div>
    <div class="gap_small"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Fashion</span></h5>
        <div class="products-slider text-center">
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product1</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product2</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product3</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product4</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product5</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product6</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product7</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product8</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product9</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product0</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
        </div>
    </div>
    <div class="gap_small"></div>
    <div class="home_banner">banner 2</div>
    <div class="gap_small"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Gadgets</span></h5>
        <div class="products-slider text-center">
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product1</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product2</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product3</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product4</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product5</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product6</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product7</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product8</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product9</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product0</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
        </div>
    </div>
    <div class="gap_small"></div>
    <div class="home_banner">banner 3</div>
    <div class="gap_small"></div>
    <div class="container">
        <h5>Top Selling <span style="color:#575745">Laptops</span></h5>
        <div class="products-slider text-center">
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product1</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product2</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product3</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product4</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product5</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product6</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/2.jpg'); ?>" class="prod_img"/>
                <span>product7</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product8</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/1.jpg'); ?>" class="prod_img"/>
                <span>product9</span>
                <h5>&#8358; 23,450</h5>
            </div>
            <div style="">
                <img src="<?= base_url('assets/landing/img/tprod/3.jpg'); ?>" class="prod_img"/>
                <span>product0</span>
                <h5>&#8358; 23,450 <small style="text-decoration: line-through;color:#e48b84">&#8358; 27,000</small></h5>
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
