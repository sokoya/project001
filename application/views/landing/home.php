<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<style>
    .pro_ad {
        min-height: auto !important;
    }
    .card-max {
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .home_slider img {
        margin: auto;
        width: 100%;
        max-height: 500px;
        height: auto;
        min-height: auto;
    }

    .home_slider {
        height: auto;
        max-height: 450px;
        min-height: auto;
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
        display: none;
        margin-top: -180px;
        margin-left: 2px;
        position: absolute;
        border-radius: 10px;
        height: 90%;
        width: 90%;
        padding: 20px;
        text-align: center;
        background: rgba(0, 0, 0, 0.6);
    }

    .card-max-price {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 18px;
        color: #ffffff;
        font-weight: 600;
        margin: auto;
    }

    .card-max-discount {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #fafafa;
        font-weight: 500;
        margin: auto;
        margin-top: 20px;
        text-decoration: line-through;
    }

    .card-max-view-more {
        float: right;
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #444;
        z-index: 1;
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
        padding-top: 30px;
        height: auto;
        width: auto;
        min-height: 200px;
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

    .max-card-link > .col-md-10 {
        color: #333;
    }

    .max-card-link > .col-md-10:hover {
        color: #0b6427;
    }

    .btn-dark {
        border-radius: 0;
        background: #07aa5e;
        color: #fff;
        padding: 10px;
        left: -3px;
        width: 223px;
        height: 42px;
    }

    .btn-dark:hover, .btn-dark:focus {
        color: #fff;
    }

    .hot-row {
        margin-bottom: 10px;
        padding: 10px;
    }

    .btn_view_product {
        color: #ffffff;
        border: 2px solid #fff;
        text-decoration: none;
        padding: 10px;
        position: absolute;
        width: fit-content;
        margin-left: -63px;
        margin-top: 20px;
    }

    .btn_view_product:hover {
        color: #000000;
        font-weight: bold;
        background-color: #ffffff;
        text-decoration: none;
        padding: 10px;
        cursor: pointer;
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
                <div style="background-color: rgb(12,23,44)">
                    <div class="container">
                        <img src="<?= SLIDER_IMAGE_PATH . $slider->image; ?>" alt="Onitshamrket"/>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <div class="card-max">
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
                        <a class="btn_view_product" href="//image_url"><i class="fa fa-search"></i>View Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale4.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦155,000</p>
                        <p class="card-max-price">₦66,000</p>
                        <a class="btn_view_product" href="//image_url"><i class="fa fa-search"></i>View Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale2.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦90,000</p>
                        <p class="card-max-price">₦47,000</p>
                        <a class="btn_view_product" href="//image_url"><i class="fa fa-search"></i>View Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale7.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦125,000</p>
                        <p class="card-max-price">₦80,000</p>
                        <a class="btn_view_product" href="//image_url"><i class="fa fa-search"></i>View Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale0.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦120,000</p>
                        <p class="card-max-price">₦56,000</p>
                        <a class="btn_view_product" href="//image_url"><i class="fa fa-search"></i>View Product</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-4 hot-row">
                    <img class="card-max-img" src="<?= base_url('assets/img/home/hotsale5.png'); ?>"/>
                    <div class="card-max-text">
                        <p class="card-max-discount">₦95,000</p>
                        <p class="card-max-price">₦75,000</p>
                        <a class="btn_view_product" href="//image_url"><i class="fa fa-search"></i>View Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $categories = $this->product->desktop_display(); ?>
    <?php foreach ($categories as $category) : ?>
        <div class="container" style="margin-top: 50px">
            <div class="card-max-header" style="margin-bottom: -20px;">
                <p class="card-max-title"><?= $category->name; ?>
                    <a href="<?= base_url('catalog/' . $category->slug . '/'); ?>" class="card-max-view-more"
                       style="top: 20px !important">View More</a></p>
            </div>
            <?php $banners = json_decode($category->content); ?>
            <div class="card-max max-inverse">
                <div class="row">
                    <?php foreach( $banners as $banner ) : ?>
                        <?php if(in_array($banner->position, array('left1', 'left2'))) :?>
                            <div class="col-md-4" style="padding-right: 0; margin-right: -43px !important">
                                <img class="card-max-side lazy"
                                     data-src="<?= CATEGORY_IMAGE_PATH . $banner->img ; ?>"
                                     src="<?= base_url('assets/load.gif'); ?>"/>
                            </div>
                        <?php endif;?>
                    <?php endforeach; ?>
                    <div class="col-md-6">
                        <div class="row"
                             style="border-bottom: 1px solid #dadada; background: url(<?= base_url('assets/img/home/dimension.png') ?>) repeat;">
                            <?php foreach ($banners as $banner):
                                if (in_array($banner->position, array('top1', 'top2'))) : ?>
                                    <a href="<?= $banner->link; ?>">
                                        <div class="col-md-6">
                                            <div class="max-img">
                                                <img class="img-responsive lazy"
                                                     data-src="<?= CATEGORY_IMAGE_PATH .  $banner->img;?>"
                                                     src="<?= base_url('assets/load.gif') ?>"/>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="row" style="padding-top:35px;">
                            <?php foreach ($banners as $banner): if (in_array($banner->position, array('bottom1', 'bottom2', 'bottom3'))) : ?>
                                <div class="col-md-4">
                                    <a href="<?= $banner->link; ?>">
                                        <img class="card-max-shade lazy"
                                             data-src="<?= CATEGORY_IMAGE_PATH . $banner->img; ?>"
                                             src="<?= base_url('assets/load.gif') ?>"
                                             alt="<?= lang('app_name'); ?>"/>
                                        <p class="card-max-shade-text">Swifter Solar Energy</p>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php $randoms = $this->product->randomproducts((int)$category->category_id, 7); ?>
                    <div class="col-md-2 max-product-category">
                        <?php foreach ($randoms as $random) : ?>
                            <div class="row max-product-row">
                                <div class="col-md-2">
                                    <img class="max-card-product-img lazy"
                                         src="<?= base_url('assets/img/load.gif'); ?>"
                                         data-src="<?= PRODUCTS_IMAGE_PATH . $random->image_name; ?>"/>
                                </div>
                                <a class="max-card-link"
                                   href="<?= base_url(urlify($random->product_name, $random->id)); ?>">
                                    <div class="col-md-10">
                                        <p class="max-card-product"><?= character_limiter($random->product_name, 10) ?></p>
                                        <?php if (discount_check($random->discount_price, $random->start_date, $random->end_date)) : ?>
                                            <p class="max-card-product-price"><?= ngn($random->discount_price) ?>
                                                <span class="pull-md-right pull-lg-right"><?= $random->item_left ?> item left</span>
                                            </p>
                                        <?php else: ?>
                                            <p class="max-card-product-price"><?= ngn($random->sale_price) ?>
                                                <span
                                                        class="pull-md-right pull-lg-right text-danger"><?= $random->item_left ?>
                                                    item left</span>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <button style="" class="btn btn-dark btn-block">See More</button>
                    </div>
                </div>
            </div>
            <img src="<?= base_url('assets/img/home/banner1.png'); ?>" width="100%">
        </div>
    <?php endforeach; ?>

    <div class="gap">
        <div class="container">
            <p class="text-center">Onitshamarket.com is a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria. Beyond online shop; our unique focus of creating a virtual mall that interfaces with the largest market in Africa gives us an advantage over the competition. <br /> Giving customers the benefit of buying and selling quality and genuine goods from the biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within a 24hrs lead time. </p>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').Lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true
        });
    });
    $(document).ready(function () {
        $('.home_slider').css({"visibility": "visible"})
        $('.home_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            infinite: true,
            speed: 500,
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 3000
        });
    });
    $('.card-max-img').hover(
        function () {
            let self = $(this);
            self.siblings('.card-max-text').css({"display": "block"});
        },
        function () {
            let self = $(this);
            setTimeout(
                function () {
                    self.siblings('.card-max-text').css({"display": "none"});
                },
                2000
            );
        }
    )
</script>
</body>
</html>
