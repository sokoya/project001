<?php $this->load->view('landing/resources/head_base'); ?>
<meta name="google-site-verification" content="xGjxCwvClqtUIevfyrQ-HWU7OcjspMEVmXMAPcpzz7Y"/>
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

    <!-- Slider -->
    <div class="container-fluid">
        <div class="row">
            <div class="card-max">
                <div class="home_slider text-center" style="visibility: hidden;">
                    <?php foreach ($sliders as $slider) : ?>
                        <div>
                            <a href="<?= $slider->img_link; ?>" target="_blank">
                                <img style="width: 100%; object-fit: cover " src="<?= SLIDER_IMAGE_PATH . $slider->image; ?>" alt="Onitshamrket"/>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Hot Sales -->
        <div class="card-max" style="margin-top: -10px">
            <div class="row">
                <div class="card-max">
                    <div class="card-max-header">
                        <p class="card-max-title">Hot Sales
                        </p>
                        <p class="card-max-subtitle">Great Items</p>
                    </div>
                    <br/>
                    <div class="brand-slide">
                        <div class="row">
                            <div style="padding: 0px;" class="col-md-12 <?php if(count($recommendeds ) >= 6) echo 'slick-slider'; ?>">
                                <?php
                                foreach ( $recommendeds as $product) : ?>
                                    <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>" class="col-md-2 col-sm-3 col-xs-6  card-product">
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
            </div>
        </div>

        <!-- Top Categories -->
        <div class="row">
            <div class="card-max">
                <div class="card-max-header">
                    <p class="card-max-title">Top Categories</p>
                    <p class="card-max-subtitle">Discover top categories, you won't want to miss</p>
                </div>
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <img alt="Online shopping for electronics, fashion,health and beauty products" src="<?= base_url('assets/img/home/categories/left_pane1.jpg'); ?>" style="max-height: 100%;">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <a href="https://www.onitshamarket.com/catalog/women-s-wear/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Fashion</p>
                                    <img alt="Shop for trending fashion" src="<?= base_url('assets/img/categories/fashion.jpg'); ?>">
                                </div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/phones-tablets/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Phones & Tablets</p>
                                    <img alt="Shop for Phones , tablets and accessories"
                                         src="<?= base_url('assets/img/categories/phone-tablets.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/electronics/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Electronics</p>
                                    <img alt="Shop for electronics products"
                                         src="<?= base_url('assets/img/categories/electronics.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/computing/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Computing & Accessories</p><img alt="Shop for computer accessories"
                                                                                           src="<?= base_url('assets/img/categories/computing.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/grocery/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Grocery</p><img alt="Shop for phones and tablets online"
                                                                                       src="<?= base_url('assets/img/categories/grocery.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/baby-products/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Baby Products</p>
                                    <img alt="Shop for Home and office products"
                                         src="<?= base_url('assets/img/categories/baby-product.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/health-beauty/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Health Beauty</p>
                                    <img alt="Shop for Health & Beauty Category"
                                         src="<?= base_url('assets/img/categories/health-beauty.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/home-office/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Home & Office</p>
                                    <img alt="Shop for computing"
                                         src="<?= base_url('assets/img/categories/home-office.jpg'); ?>"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advert Section 1 -->
        <div class="gap-small"></div>
        <div class="row">
            <div class="card-max">
                <a class="gap-top" href="https://www.onitshamarket.com/product/lg-3d-blu-ray-home-theater-arx5500-2768/" title="Get Drones">
                    <img class="img-responsive" src="<?= base_url('assets/img/home/lg3d.png'); ?>">
                </a>
            </div>
        </div>

        <!-- Top Brands -->
        <div class="row">
            <div class="card-max">
                <div class="card-max-header">
                    <p class="card-max-title">Top Brands</p>
                    <p class="card-max-subtitle">Discover top brands, you won't want to miss</p>
                </div>
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <img src="<?= base_url('assets/img/home/categories/left_pane1.jpg'); ?>" style="max-height: 100%;">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <a href="https://www.onitshamarket.com/catalog/macbooks/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Macbook Products</p>
                                    <img alt="Shop Apple products" src="<?= base_url('assets/img/brands/apple.jpg'); ?>">
                                </div>
                            </a>

                            <a href="https://www.onitshamarket.com/catalog/clothing-597213/?brand_name=ralph%20lauren">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Ralph Lauren</p>
                                    <img alt="Shop for electronics product"
                                         src="<?= base_url('assets/img/brands/ralph-lauren.jpg'); ?>"></div>
                            </a>

                            <a href="https://www.onitshamarket.com/catalog/drones/?brand_name=dji">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Dji Drones</p>
                                    <img alt="Shop for computer accessories" src="<?= base_url('assets/img/brands/drone.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/phones-tablets/?brand_name=infinix">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Infinix Phones</p>
                                    <img alt="Shop OM for infinix phones" src="<?= base_url('assets/img/brands/phone.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/hp-laptops/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">HP Products</p>
                                    <img alt="Shop online for HP Products"
                                         src="<?= base_url('assets/img/brands/hp.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/projectors/?brand_name=dellemc">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Delmic Projector</p>
                                    <img alt="Shop oline for Delmic products"
                                         src="<?= base_url('assets/img/brands/projector.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/bluetooth-speakers/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Bluetooth Speakers</p>
                                    <img alt="Shop for bluethooth speakers"
                                         src="<?= base_url('assets/img/home/categories/prod7.jpg'); ?>"></div>
                            </a>
                            <a href="https://www.onitshamarket.com/catalog/computing/">
                                <div class="col-md-3 col-sm-3 col-xs-3 padding-0 card-cat">
                                    <p class="card-cat-text">Computing</p>
                                    <img alt="Shop for computing"
                                         src="<?= base_url('assets/img/home/categories/prod8.jpg'); ?>"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advert Section 2 -->
        <div class="gap-small"></div>
        <div class="row">
            <div class="card-max">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xs-6 padding-0 card-cat">
                        <a class="gap-top" href="https://www.onitshamarket.com/catalog/shave-hair-removal/" title="This hair clipper suitable for home use, also for professional salon ,">
                            <img class="img-responsive" style="padding-left: 4px;!important;" alt="This hair clipper suitable for home use, also for professional salon ," src="<?= base_url('assets/img/home/cat_features/kiki-rechargable-clipper.png'); ?>">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-6 padding-0 card-cat">
                        <a class="gap-top" href="https://www.onitshamarket.com/catalog/gym/" title="Gym and accessories">
                            <img class="img-responsive" style="padding-left: 4px;!important;" alt="high-capacity-fitness-folding-electric-treadmill-motorized.png" src="<?= base_url('assets/img/home/cat_features/high-capacity-fitness-folding-electric-treadmill-motorized.png'); ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1-->
        <?php if( $fashions ) :  ?>
        <div class="card-max" style="margin-top: -10px">
            <div class="row">
                <div class="card-max">
                    <div class="card-max-header">
                        <p class="card-max-title">Recommended Products - Fashion
                        </p>
                        <p class="card-max-subtitle">Up-to 48% Discount</p>
                    </div>
                    <br/>
                    <div class="brand-slide">
                        <div class="row">
                            <div  style="padding: 0px;" class="col-md-12 slick-slider">
                                <?php
                                foreach ( $fashions as $product) : ?>
                                    <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>" class="col-md-2 col-sm-3 col-xs-6  card-product">
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
            </div>
        </div>
        <?php endif; ?>

        <!-- Recently viewed -->
        <?php if ($this->session->userdata('logged_in')) :
            $recently_viewed = $this->user->get_recently_viewed($this->session->userdata('logged_id'));
            if ($recently_viewed && count($recently_viewed)) :
                ?>
            <div class="card-max" style="margin-top: -10px">
                <div class="row">
                    <div class="card-max">
                    <div class="card-max-header">
                        <p class="card-max-title">Recently Viewed Items </p>
                        <p class="card-max-subtitle">Items are still available.</p>
                    </div>
                    <br/>
                    <div class="brand-slide">
                        <div class="row">
                            <div style="padding: 0px;" class="col-md-12 slick-slider">
                                <?php
                                foreach ( $recently_viewed as $viewed) : ?>
                                    <a href="<?= base_url(urlify($viewed->product_name, $viewed->id)); ?>" class="col-md-2 col-sm-3 col-xs-6  card-product">
                                        <div>
                                            <?php if (discount_check($viewed->discount_price, $viewed->start_date, $viewed->end_date)): ?>
                                                <p class="product-discount-overlay"><?= get_discount($viewed->sale_price, $viewed->discount_price); ?></p>
                                            <?php endif; ?>
                                            <img class="card-product-img"
                                                 src="<?=base_url("assets/img/load.gif")?>"
                                                 data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $viewed->image_name; ?>"
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
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Advert Section 2 -->
        <div class="gap-small"></div>

        <div class="row">
            <div class="card-max">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xs-6 padding-0 card-cat">
                        <a class="gap-top" href="https://www.onitshamarket.com/product/pine-sol-multi-surface-cleaner-lemon-175-oz-1259/" title="PINE SOL SCENT: Deodorise and wipe out odour causing bacteria with the long lasting fresh scent of lemon in a dilutable formula to tackle any job." >
                            <img class="img-responsive" style="padding-left: 4px;!important;" alt="pine-sol-multi-surface-cleaner-lemon.png" src="<?= base_url('assets/img/home/cat_features/pine-sol-multi-surface-cleaner-lemon.png'); ?>">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-6 padding-0 card-cat">
                        <a class="gap-top" href="https://www.onitshamarket.com/catalog/spirits-wines-beers/" title="Shop OM for spirit wines and beers">
                            <img class="img-responsive" style="padding-left: 4px;!important;" alt="hennessy" src="<?= base_url('assets/img/home/cat_features/hennessy.png'); ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="card-max">
            <div class="row">
                <div class="card-max">
                    <div class="card-max-header">
                        <p class="card-max-title">Hot Sales Products on Electronics</p>
                        <p class="card-max-subtitle">Great Items</p>
                    </div>
                    <br/>
                    <div class="brand-slide">
                        <div class="row">
                            <div style="padding: 0px;" class="col-md-12 slick-slider">
                                <?php foreach ( $electronics as $product) : ?>
                                    <a href="<?= base_url(urlify($product->product_name, $product->id)); ?>" class="col-md-2 col-sm-3 col-xs-6 card-product">
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
            </div>
        </div>
    </div>

    <div class="gap">
        <div class="container">
            <p class="about-text">Internet Onitshamarketing Ltd. trading online as Onitshamarket.com is a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria and rest of the world.  Beyond online market; our unique focus of creating a virtual mall and ultra modern experience centres that interfaces with the largest market in Africa gives us an advantage over the competition, thereby giving customers the benefit of buying and selling quality and genuine goods from the biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within a 24hrs lead time.</p>
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
                        slidesToShow: 5,
                    }}
            ]
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
