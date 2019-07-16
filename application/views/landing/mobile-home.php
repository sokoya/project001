<?php $this->load->view('landing/resources/head_base'); ?>
<meta name="google-site-verification" content="xGjxCwvClqtUIevfyrQ-HWU7OcjspMEVmXMAPcpzz7Y" />
<link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/home.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<style>
    .gap_small {
        height: 40px;
    }
    .category-favorite > i {
        font-size: 15px;
        color: #4e4e4e;
        border-radius: unset;
        left: unset;
        bottom: unset;
        z-index: 993;
        cursor: pointer;
    }
    .card-product {
        background: #fff;
        border: 1px solid #eee;
        padding-top: 20px;
    }
    .card-product {
        min-height: 215px !important;
        max-height: 215px !important;
    }
    .card-product-small {
        background: #fff;
        border: 1px solid #eee;
        padding-top: 20px;
        min-height: 215px;
    }

    .card-product-small > img {
        margin: auto;
    }
    .card-product-img {
        min-width: unset !important;
        max-width: unset !important;
        height: 17vh;
        margin-left:-8px;
    }
    @media screen and (min-width: 555px;) {
        .gap_small {
            height: 85px !important;
        }

        .col-img-3 {
            height: auto !important;
        }
    }

    .img-responsive{
        height: 12vh;
        width:100%;
        margin:auto;
    }

    .gap_wide {
        height: 55px;
    }

    .col-img-3:hover, .col-img-3 > img:hover {
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .15);
    }

    .col-img-3 > p {
        position: absolute;
        font-size: 10px;
        margin-top: 5px;
        margin-left: 5px;
        color: #888888;
        font-weight: 700;
    }

    .col-img-3 {
        display: inline-flex;
        width: 24%;
        margin-bottom: 3px;
        height: 70px;
    }

    .cat_board {
        background-color: #fff;
        padding: 10px;
        height: 66px;
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

    .about-text {
        font-size: 14px;
        color: #333;
    }

    .card-cat > img {
        margin-left: unset !important;
    }
    .category-favorite{
        position:absolute;
        top:20px;
        background-color:#fff;
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

    <div class="main-slider text-center slider_show row" style="height:calc(13vh - 1em);visibility: hidden;">
        <?php foreach ($sliders as $slider) : ?>
            <a href="<?= $slider->img_link; ?>">
                <img src="<?= SLIDER_IMAGE_PATH . $slider->image; ?>" class="img-responsive"
                     style="height: auto; width: 100%"/>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="gap_wide hidden-xs"></div>
    <div class="row">
        <h5 class="col-md-12" style="margin-left:10px;">Top <span style="color:#575745">Categories</span></h5>
        <div class="categories-slider text-center slider_show" style="visibility: hidden;margin-left:10px;">
            <?php foreach ($main_categories as $category) :

                ?>
                <div class="cat_board">
                    <a style="color: #0b0b0b;" href="<?= base_url('catalog/' . $category->slug . '/'); ?>">
                        <img class="cat_img"
                             <?php if( $category->slug == "other-categories") : ?>
                                 src="<?= base_url('assets/img/cat_icons/market.png'); ?>"
                             <?php else :?>
                                 src="<?= base_url('assets/img/cat_icons/') . $category->slug . '.png'; ?>"
                             <?php endif; ?>
                             style="width:30px;"
                             alt="Shop for <?= $category->name; ?>">
                        <span style="font-size:10px;margin-bottom:auto;"><?= $category->name; ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="gap_small"></div>

    <div class="card-max container">
        <div class="card-max-header">
            <h5 style="margin-left:-5px;">Hand Picked <span style="color:#575745">Categories</span></h5>
        </div>
        <div class="row">
            <a href="https://www.onitshamarket.com/catalog/beauty-personal-care/">
                <div class="col-img-3">
                    <p>Beauty & Personal<br/> Care</p>
                    <img alt="Women's Fashion"
                            src="<?= base_url('assets/img/home/ee.jpg'); ?>" class="img-responsive"></div>
            </a>

            <a href="https://www.onitshamarket.com/catalog/iphone-accessories/">
                <div class="col-img-3">
                    <p>iPhone<br/>Accessories</p>
                    <img alt="iPhones & Accessories"
                            src="<?= base_url('assets/img/home/ed.jpg'); ?>" class="img-responsive"></div>
            </a>

            <a href="https://www.onitshamarket.com/catalog/digital-cameras/">
                <div class="col-img-3">
                    <p>Digital Cameras <br/>Drones</p>
                    <img alt="Buy Digital Cameras & Drones"
                            src="<?= base_url('assets/img/home/ef.jpg'); ?>" class="img-responsive"></div>
            </a>
            <a href="https://www.onitshamarket.com/catalog/gaming/">
                <div class="col-img-3">
                    <p>Gaming & <br/>Accessories</p>
                    <img alt="Gaming & Accessories"
                            src="<?= base_url('assets/img/home/eg.jpg'); ?>" class="img-responsive"></div>
            </a>

            <a href="https://www.onitshamarket.com/catalog/office-products/">
                <div class="col-img-3">
                    <p>Office Products</p>
                    <img alt="Shop online for Office products"
                            src="<?= base_url('assets/img/home/em.jpg'); ?>" class="img-responsive"></div>
            </a>

            <a href="https://www.onitshamarket.com/catalog/home-and-furniture/">
                <div class="col-img-3">
                    <p>Home Tools</p>
                    <img alt="Online Shopping for Home Tools"
                            src="<?= base_url('assets/img/home/ek.jpg'); ?>" class="img-responsive"></div>
            </a>

            <a href="https://www.onitshamarket.com/catalog/home-theaters/">
                <div class="col-img-3">
                    <p>Home Theater,<br/>Bluetooth</p>
                    <img alt="Shop for Bluetooth & Speakers"
                            src="<?= base_url('assets/img/home/ea.jpg'); ?>" class="img-responsive"></div>
            </a>
            <a href="https://www.onitshamarket.com/catalog/toys-games/">
                <div class="col-img-3">
                    <p>Toys &<br/>Games</p>
                    <img alt="Shop for toys and games on onitshamarket.com"
                            src="<?= base_url('assets/img/home/ex.jpg'); ?>" class="img-responsive"></div>
            </a>
        </div>
    </div>
    <div class="gap_small"></div>

    <?php if($fashions ) : ?>
    <div class="card-max container">
        <div class="card-max-header">
            <h5 style="margin-left:-5px;">Fashion Sales <span style="color:#575745">- Just For You</span></h5>
        </div>
        <div class="row">
            <?php foreach ( $fashions as $product ) : ?>

                <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>">
                    <div class="col-img-3" style="background-color: #fff;">
                        <p><?= character_limiter($product->product_name, 10); ?><br/>
                            <span class="text-danger">
                                <?= (discount_check($product->discount_price, $product->start_date, $product->end_date))
                                    ? ngn($product->discount_price) :
                                    ngn($product->sale_price);?>
                            </span>
                        </p>
                        <img alt="<?= $product->product_name?>"
                             src="https://res.cloudinary.com/onitshamarket/image/upload/w_180,h_150,c_pad/onitshamarket/product/<?= $product->image_name; ?>" class="img-responsive"></div>
                </a>

            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="card-max container">
        <div class="card-max-header">
            <h5 style="margin-left:-5px;">Deals <span style="color:#575745">of the day</span></h5>
        </div>
        <br/>
        <div class="brand-slide">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        $products = $this->product->generalrandom(12);
                        foreach ($products as $product) : ?>
                            <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>">
                                <div class="col-xs-6 col-sm-3  card-product-small  card-product-alt">
                                    <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                        <p class="product-discount-overlay"><?= get_discount($product->sale_price, $product->discount_price); ?></p>
                                    <?php endif; ?>
                                    <img class="card-product-img"
                                         src="https://res.cloudinary.com/onitshamarket/image/upload/w_180,h_140,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                         alt="<?= $product->product_name; ?>"
                                         title="<?= $product->product_name; ?>">
                                    <p class="card-product-title"><?= character_limiter($product->product_name, 10); ?></p>
                                    <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                        <p class="card-product-price-small" style="font-max-size: 10px;">
                                            <?= ngn($product->discount_price); ?>
                                            <small class="card-product-price-discount pull-right" style="position:absolute;right:10px;font-size:11px;color:#ee1111;"><?= ngn($product->sale_price); ?></small>
                                        </p>
                                    <?php else : ?>
                                        <p class="card-product-price-small"> <?= ngn($product->sale_price); ?> </p>
                                    <?php endif; ?>
                                    <?php if (!$this->session->userdata('logged_in')) : ?>
                                        <a href="<?= base_url('login'); ?>">
                                            <span class="pull-right category-favorite">
                                                    <i class="fas fa-heart"
                                                        title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                            </span>
                                        </a>
                                    <?php else : ?>
                                        <?php if ($this->product->is_favourited($profile->id, $product->id)) : ?>
                                            <span class="pull-right category-favorite wishlist-btn"
                                                    data-pid="<?= $product->id; ?>">
                                                <i class="fas fa-heart"
                                                    title="Remove <?= $product->product_name; ?> from your wishlist"></i>
                                            </span>
                                        <?php else : ?>
                                            <span class="pull-right category-favorite wishlist-btn"
                                                    data-pid="<?= $product->id; ?>">
                                                <i class="fas fa-heart"
                                                    title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                            </span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
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

                            <img alt="<?= $product->product_name;?>" src="<?= PRODUCTS_IMAGE_PATH . $product->image_name ?>" class="prod_img"/>
                            <span><?= character_limiter($product->product_name, 30) ?></span>
                            <?php
                            if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                <h5><?= ngn($product->discount_price); ?>
                                    <small style="text-decoration: line-through;color:#e48b84"><?= ngn($product->sale_price); ?></small>
                                </h5>
                                <h5>
                                    <small class="pull-right text-danger"><?= $product->item_left; ?> Item left</small>
                                </h5>
                            <?php else : ?>
                                <h5><?= ngn($product->sale_price); ?></h5><h5>
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
            <img alt="Affordable and quality shopping on onitshamarket" src="<?= base_url('assets/img/home/banner2.png'); ?> " class="img-responsive">
        </div>
    <?php endforeach; ?>

    <div class="gap-small">
        <div class="container">
<!--            <h3 class="title">Onitshamarket.com</h3>-->
            <p class="about-text">Internet Onitshamarketing Ltd. trading online as Onitshamarket.com is a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria and rest of the world.  Beyond online market; our unique focus of creating a virtual mall and ultra modern experience centres that interfaces with the largest market in Africa gives us an advantage over the competition, thereby giving customers the benefit of buying and selling quality and genuine goods from the biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within a 24hrs lead time.</p>
        </div>
    </div>

    <div class="container" style="padding:40px;">
        <hr class="hr-text" data-content="Why Choose Us">
        <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/largest.png'); ?>" alt="Largest"
                         title="Largest in the market"/>
                    <h5 class="banner-category-title">Largest</h5>
                    <p class="banner-category-desc">Range of products to choose from.</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/carrito-shopper.png'); ?>"
                         alt="<?= lang('app_name'); ?> Shopper" title="<?= lang('app_name'); ?> Shopper"/>
                    <h5 class="banner-category-title">OM Shopper</h5>
                    <p class="banner-category-desc">Automated shopping assistant</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/secured-payment.png'); ?>"
                         alt="secured-payment" title="secured-payment"/>
                    <h5 class="banner-category-title">Secured Payment</h5>
                    <p class="banner-category-desc">On all your debit/credit cards</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/incredible-discounts.png'); ?>"
                         alt="Incredible Discounts" title="Discounts"/>
                    <h5 class="banner-category-title">Incredible Discounts</h5>
                    <p class="banner-category-desc">On all products, all season.</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/pay-on-delivery.png') ?>"
                         alt="Pay on delivery" title="Pay on delivery"/>
                    <h5 class="banner-category-title">Pay On Delivery</h5>
                    <p class="banner-category-desc">On all products</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/fast-delivery.png') ?>"
                         alt="Fast Delivery"
                         title="Fast Delivery"/>
                    <h5 class="banner-category-title">Fast Delivery</h5>
                    <p class="banner-category-desc">Mationwide Same Day</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/genuine-brands.png') ?>"
                         alt="Genuine Brands"
                         title="Genuine Brands"/>
                    <h5 class="banner-category-title">Genuine Brands</h5>
                    <p class="banner-category-desc">From all over the world</p>
                </a>
            </div>
            <div class="owl-item">
                <a class="banner-category owl-item-slide" href="#">
                    <img class="banner-category-img"
                         src="<?= base_url('assets/img/why-onitshamarket/247.png') ?>"
                         alt="247 Active Customer Support" title="247 Active Support"/>
                    <h5 class="banner-category-title">24/7</h5>
                    <p class="banner-category-desc">Customer Agents Waiting To Help You.</p>
                </a>
            </div>
        </div>
    </div>


    <?php $this->load->view('landing/resources/review_modal'); ?>
    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <script src="<?= base_url('assets/plugins/slick/slick.js') ?>"></script>
</div>
<script>
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
    $(document).ready(function () {
        $('.slider_show').css({"visibility": "visible"});
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
            dots: false,
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
if ('serviceWorker' in navigator) {
window.addEventListener('load', function() {
    navigator.serviceWorker.register("<?= base_url('sw.js');?>")
	.then(function(registration) {
    console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
    console.log('ServiceWorker registration failed: ', err);
    });
});
}
</script>
</body>
</html>
