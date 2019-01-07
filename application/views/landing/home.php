<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .pro_ad {
        min-height: auto !important;
    }

    .card-max {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .card-max-header {
        text-align: left;
    }

    .card-max-title {
        color: #1c1c1c;
        font-size: 27px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .card-max-subtitle {
        color: #1c1c1c;
        font-size: 17px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .card-max-img {
        height: auto;
        width: auto;
        max-width: 180px;
        max-height: 180px;
        border-radius: 10px;
    }

    .card-max-img:hover {
        -webkit-filter: brightness(96%);
        filter: brightness(96%);
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        cursor: pointer;
    }

    .card-max-side {
        height: auto;
        width: auto;
        max-width: 330px;
        max-height: 610px;
    }

    .card-max-text {
        margin-top: 10px;
    }

    .card-max-price {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 18px;
        color: #0b0b0b;
        font-weight: 600;
        margin-bottom: 1px;
    }

    .card-max-discount {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #444444;
        font-weight: 500;
        margin-bottom: 1px;
        text-decoration: line-through;
    }

    .card-max-view-more {
        float: right;
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #444;
        z-index: 100;
        position: relative;
        top: 45px;
    }

    .card-max-view-more:hover {
        text-decoration: none;
        color: #0b6427;
    }

    .max-inverse {
        background: #fff;
        border: 1px solid #dadada;
    }

    .card-max-shade {
        height: 100% !important;
        width: 100%;
        margin-top: 20px;
        max-width: 150px;
        max-height: 150px;
    }

    .card-max-shade:hover {
        -webkit-filter: brightness(96%);
        filter: brightness(96%);
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        cursor: pointer;
    }

    .card-max-shade-text {
        font-size: 14px;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
        color: #0b0b0b;
        margin-bottom: 0 !important;
        text-align: center;
    }

    .max-img {
        margin-right: -15px;
        margin-left: -15px;
        padding-bottom: 62.5%;
        background: no-repeat 50% 50%;
        background-size: cover;
        height: auto;
        width: auto;
        min-height: 200px;
        border-bottom: 1px solid #dadada;
        cursor: pointer;
        transition: transform .2s; /* Animation */
    }

    .max-img:hover {
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        z-index: 99999;
        transform: scale(1.02);
    }

    .max-top {
        color: #222;
        font-weight: 600;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .max-card-product {
        position: relative;
        top: 6px;
        left: -3px;
        margin: 0;
        font-size: 13px;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
    }

    .max-card-product-img {
        width: 40px;
        height: 40px;
        position: relative;
        left: -12px;
    }

    .max-product-category {
        padding-left: 3px;
        padding-right: 0;
        margin-bottom: 0;
        padding-bottom: 0;

    }

    .max-product-row {
        padding-left: 5px;
        padding-top: 3px;
        padding-bottom: 4px;
        border-bottom: 1px solid #dadada;
        border-left: 1px solid #dadada;
        position: relative;
        left: 12px;
    }

    .max-card-product-price {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        position: relative;
        left: -3px;
        top: 4px;
        font-weight: 600;
    }

    .btn-dark {
        border-radius: 0;
        background: #07aa5e;
        color: #fff;
        padding: 10px;
        left: -3px;
        width: 223px;
        height: 45px;
    }

    .btn-dark:hover, .btn-dark:focus {
        color: #fff;
    }

    .hot-row {
        margin-bottom: 10px;
    }
</style>
</head>
<body>

<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_category') ?>

        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>
    <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true}'>
        <div class="owl-item">
            <div class="slider-item" style="background-color:#3D3D3D;">
                <div class="container">
                    <div class="slider-item-inner">
                        <div class="slider-item-caption-left slider-item-caption-white">
                            <h4 class="slider-item-caption-title">Save up to &#8358;1,500 on Your Next Laptop</h4>
                            <p class="slider-item-caption-desc">I'm Not Gonna Pay A Lot For This Laptop.</p><a
                                    class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                        </div>
                        <img class="slider-item-img-right"
                             src="<?= base_url('assets/landing/img/test_slider/1.png'); ?>" alt="Image Alternative text"
                             title="Image Title" style="top: 60%; width: 56%;"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="slider-item"
                 style="background-image:url(<?= base_url('assets/landing/img/concert_2_1200x500.jpg'); ?>);">
                <div class="container">
                    <div class="slider-item-inner">
                        <div class="slider-item-caption-right slider-item-caption-white">
                            <h4 class="slider-item-caption-title">World Top Guitars from $350</h4>
                            <p class="slider-item-caption-desc">Fill It To The Rim With Guitar.</p><a
                                    class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                        </div>
                        <img class="slider-item-img-left" src="<?= base_url('assets/landing/img/test_slider/2.png'); ?>"
                             alt="Image Alternative text" title="Image Title"
                             style="transform:translateY(-50%) rotate(14deg); width: 55%;"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="slider-item" style="background-color:#93282B;">
                <div class="container">
                    <div class="slider-item-inner">
                        <div class="slider-item-caption-left slider-item-caption-white">
                            <h4 class="slider-item-caption-title">Run! Run! Run!</h4>
                            <p class="slider-item-caption-desc">Your Running Shoes, Right Away.</p><a
                                    class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                        </div>
                        <img class="slider-item-img-right"
                             src="<?= base_url('assets/landing/img/test_slider/2.png'); ?>" alt="Image Alternative text"
                             title="Image Title"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-max">
            <div class="card-max-header">
                <p class="card-max-title">Hot Sales<a href="#" class="card-max-view-more">View more</a></p>
                <p class="card-max-subtitle">Great items, Affordable Prices</p>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/landing/img/home/p1.jpg'); ?>"/>
                    <!--					<div class="card-max-text">-->
                    <!--						<p class="card-max-price">₦27,450</p>-->
                    <!--						<p class="card-max-discount">₦55,000</p>-->
                    <!--					</div>-->
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/landing/img/home/p2.jpg'); ?>"/>
                    <!--					<div class="card-max-text">-->
                    <!--						<p class="card-max-price">₦66,000</p>-->
                    <!--						<p class="card-max-discount">₦155,000</p>-->
                    <!--					</div>-->
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/landing/img/home/p3.jpg'); ?>"/>
                    <!--					<div class="card-max-text">-->
                    <!--						<p class="card-max-price">₦47,000</p>-->
                    <!--						<p class="card-max-discount">₦90,000</p>-->
                    <!--					</div>-->
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/landing/img/home/p7.jpg'); ?>"/>
                    <!--					<div class="card-max-text">-->
                    <!--						<p class="card-max-price">₦80,000</p>-->
                    <!--						<p class="card-max-discount">₦125,000</p>-->
                    <!--					</div>-->
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/landing/img/home/p5.jpg'); ?>"/>
                    <!--					<div class="card-max-text">-->
                    <!--						<p class="card-max-price">₦56,000</p>-->
                    <!--						<p class="card-max-discount">₦120,000</p>-->
                    <!--					</div>-->
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/landing/img/home/p6.jpg'); ?>"/>
                    <!--					<div class="card-max-text">-->
                    <!--						<p class="card-max-price">₦75,000</p>-->
                    <!--						<p class="card-max-discount">₦95,000</p>-->
                    <!--					</div>-->
                </div>
            </div>
        </div>
    </div>

    <?php foreach( $categories as $category ) : ?>
        <div class="container" style="margin-top: 50px">
            <div class="card-max-header" style="margin-bottom: -20px;">
                <p class="card-max-title"><?= $category->name; ?>
                    <a href="<?= base_url('catalog/' . $category->slug . '/'); ?>" class="card-max-view-more" style="top: 20px !important">View More</a></p>
            </div>
            <?php $banners = json_decode( $category->content); ?>
            <div class="card-max max-inverse">
                <div class="row">
                    <div class="col-md-4" style="padding-right: 0; margin-right: -43px !important">
                        <img class="card-max-side" src="http://localhost/project001/assets/landing/img/home/side.jpg"/>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <?php  foreach( $banners as $banner ):
                                if( in_array( $banner->position, array('top1', 'top2'))) :  ?>
                                    <a href="<?= $banner->link; ?>">
                                        <div class="col-md-6">
                                            <div class="max-img"
                                                 style="background-image: url(<?= './../contents/home/' . $banner->img; ?>);"></div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                                <?php  endforeach; ?>
                        </div>
                        <div class="row">
                            <?php  foreach( $banners as $banner ): if( in_array( $banner->position, array('bottom1', 'bottom2', 'bottom3'))  ) : ?>
                                    <div class="col-md-4">
                                        <a href="<?= $banner->link; ?>">
                                            <img class="card-max-shade"
                                                 src="<?= './../contents/home/' . $banner->img; ?>" alt="<?= lang('app_name'); ?>"/>
                                            <p class="card-max-shade-text">Swifter Solar Energy</p>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php $randoms = $this->product->randomproducts( (int)$category->category_id, 6); ?>
                    <div class="col-md-2 max-product-category">
                        <?php foreach( $randoms as $random ) :?>
                            <div class="row max-product-row">
                                <div class="col-md-2"><img class="max-card-product-img"
                                                           src="<?= PRODUCTS_IMAGE_PATH . $random->image_name; ?>"/></div>
                                <div class="col-md-10">
                                    <p class="max-card-product"><?= character_limiter($random->product_name, 20)?></p>
                                    <?php
                                    if( discount_check( $random->discount_price, $random->start_date, $random->end_date )) :
                                        ?>
                                        <p class="max-card-product-price"><?= ngn($random->discount_price)?>
                                            <sub class="max-card-product-price"><?= ngn($random->sale_price); ?></sub>
                                            <span class="pull-md-right pull-lg-right"><?= $random->item_left?> item left</span>
                                        </p>
                                    <?php else: ?>
                                        <p class="max-card-product-price"><?= ngn($random->sale_price)?>
                                            <span class="pull-md-right pull-lg-right text-danger"><?= $random->item_left?> item left</span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <button class="btn btn-dark btn-block">See More</button>
                    </div>
                </div>
            </div>
            <img src="http://localhost/project001/assets/landing/img/home/ad.jpg " width="100%">
        </div>
    <?php endforeach; ?>

    <!--    Why choose us-->
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

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>

<?php if ($this->agent->is_mobile()) : ?>
    <script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
<?php endif; ?>
</body>
</html>
