<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
    .fa.checked {
        color: orange;
    }
    .feature-attribute:hover {
        cursor: pointer;
    }

    .product {
        min-height: 300px !important;
        max-height: 300px !important;
    }

    .col-xs-5ths,
    .col-sm-5ths,
    .col-md-5ths,
    .col-lg-5ths {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .quick_view_link:hover {
        color: #0b6427;
    }

    .col-xs-5ths {
        width: 20%;
        float: left;
    }

    @media (min-width: 768px) {
        .col-sm-5ths {
            width: 20%;
            float: left;
        }
    }
    @media (max-width: 767px) {
        .shop_rating{
            height:280px !important;
        }
    }

    @media (min-width: 992px) {
        .col-md-5ths {
            width: 20%;
            float: left;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-5ths {
            width: 20%;
            float: left;
        }
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

    <?php if (empty($products)) : ?>
        <div class="container">
            <div class="row">
                <div style="height:168px"></div>
                <h2 class="text-center">Oops! Sorry, we couldn't find products on this section.</h2>
                <p class="text-center">
                    Please check your spelling for typographic error.<br/>
                    <span class="text-danger">You can also:</span>
                <ul class="text-center">
                    <li style="list-style-type: none">Try a different keyword search.</li>
                </ul>
                </p>
                <p class="text-muted text-sm text-center">You can browse for more product <a
                            style="text-decoration: none; color: #0b6427;" href="<?= base_url(); ?>">Find
                        product</a> or <a href="<?= PAGE_CONTACT_US ?>">contact us</a> if still not working.</p>
                <div style="height:110px"></div>
            </div>
        </div>
    <?php else : ?>

        <div class="container">
            <div class="cat-notify" style="padding:30px 30px 0px 30px;">
                <p class="n-head"><?= $pgtitle ?></p>
            </div>
            <div class="col-sm-12 shop_rating" style="background: #fff;margin-bottom: 20px;padding:20px 0 0 0;">
                <div class="col-sm-6 col-xs-12">
<!--                    <div class="col-sm-6 col-xs-12">-->
<!--                        <h4>Product Quality</h4>-->
<!--                        <div class="progress" style="margin-top:5px;">-->
<!--                            <div class="progress-bar" role="progressbar" style="width: 65%;background-color: #f12345;"-->
<!--                                 aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">96%-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="col-sm-6 col-xs-12 pull-right">
                        <h4>Successful Sales</h4>
                        <div class="progress" style="margin-top:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #5aa352;"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?= ($seller_detail->quantity_sold == '') ? 0 : $seller_detail->quantity_sold; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h4 class="col-sm-6 col-xs-12" style="margin-top: 5px;">
                        <svg height="39" viewBox="0 0 39 39" width="39" class="" name="scale-badge">
                            <g fill="none" fill-rule="nonzero">
                                <path d="M37.2 19.5l1.72-4.46c.19-.5.04-1.05-.37-1.39l-3.71-3-.75-4.72C34 5.4 33.59 5 33.07 4.9l-4.72-.75-3-3.7c-.33-.42-.9-.57-1.38-.38L19.5 1.8 15.04.1a1.22 1.22 0 0 0-1.38.36l-3.01 3.72-4.72.75C5.4 5 5 5.4 4.9 5.92l-.75 4.73-3.7 3c-.42.34-.57.9-.38 1.39L1.8 19.5.1 23.96c-.2.5-.05 1.05.36 1.39l3.71 3 .75 4.72c.09.52.5.93 1.02 1.02l4.72.75 3 3.7c.34.42.9.57 1.39.38l4.46-1.71 4.46 1.71a1.22 1.22 0 0 0 1.39-.37l3-3.71 4.72-.75c.53-.09.94-.5 1.02-1.02l.75-4.72 3.7-3c.42-.34.57-.9.38-1.39L37.2 19.5z"
                                      fill="#1f6c54"></path>
                                <path d="M19.54 28.34h-5.46c-.2 0-.41-.03-.59-.1-.35-.14-.5-.44-.47-.8.03-.39.33-.72.7-.72.4.01.46-.18.45-.51v-1.85c0-.64.24-1.16.66-1.63l2.35-2.64c.57-.65.57-1.19.01-1.82-.77-.9-1.56-1.77-2.35-2.64a2.36 2.36 0 0 1-.67-1.67v-1.89c0-.28-.05-.45-.4-.45-.41 0-.72-.33-.77-.74-.03-.35.23-.72.62-.83.15-.04.32-.05.48-.05h10.93c.13 0 .27 0 .4.03.4.1.7.47.68.83a.82.82 0 0 1-.8.76c-.29 0-.38.13-.37.39v1.89a2.4 2.4 0 0 1-.69 1.74c-.73.8-1.43 1.63-2.17 2.42-.73.77-.74 1.44.01 2.23.75.78 1.44 1.62 2.18 2.42.43.48.67 1.01.67 1.67v1.89c0 .28.05.45.4.45.4 0 .72.34.77.73.03.33-.22.7-.59.82a1.8 1.8 0 0 1-.51.06l-5.47.01zm0-1.63h3.38c.3 0 .44-.09.43-.4-.02-.6.02-1.19-.02-1.77a1.3 1.3 0 0 0-.28-.72c-.77-.9-1.57-1.8-2.37-2.68a2.84 2.84 0 0 1 .02-3.96c.8-.88 1.6-1.77 2.36-2.68.16-.17.26-.44.27-.68.04-.6 0-1.2.02-1.8 0-.3-.12-.4-.41-.4-2.25.01-4.5.02-6.75 0-.35 0-.44.14-.43.46.01.55-.03 1.1.02 1.64.02.29.13.61.3.83.77.91 1.58 1.79 2.37 2.68 1 1.14 1.03 2.71.04 3.83-.7.8-1.39 1.6-2.12 2.36-.45.47-.7.96-.61 1.62.04.34 0 .7 0 1.04 0 .63 0 .63.61.63h3.17z"
                                      fill="#FFF"></path>
                            </g>
                        </svg>
                        <span style="position: absolute;margin-left:10px;"><?= ago( $seller_detail->date_applied);?><br/>
                            Selling on OM</span>
                    </h4>
                    <div class="col-sm-6 col-xs-12 pull-right">
                        <?php
                            if( $total_rate ) :
                                $count = $total_reviews;
                                $average_float = round($total_rate/$count , 1, PHP_ROUND_HALF_UP);
                                $average_int = (int)$average_float;
                        ?>
                            <h4>
                                <?php
                                    for ($i = 1; $i <= $average_int; $i++) {
                                        echo '<span class="fa fa-star checked"></span>';
                                    }if ($average_int < 5) {
                                        for ($i = 0; $i < (5 - $average_int); $i++) {
                                            echo '<span class="fa fa-star"></span>';
                                        }
                                    }
                                ?>
                            </h4>
                            <h5>
                                <?= $average_float ?> Rating from <?= $count; ?> Reviews
                            </h5>
                        <?php else : ?>
                                <h4>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </h4>
                                <h5>
                                    0 Rating
                                </h5>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (count($products) < 1): ?>
                        <h2 class="text-center">Oops! No active product on this section, please filter again.</h2>
                    <?php endif; ?>
                    <div id="category_body">
                        <div class="row filter_data" data-gutter="15">
                            <?php $p_count = 0;
                            foreach ($products as $product) : ?>
                                <?php $p_count++; ?>
                                <div class="col-md-5ths col-lg-5ths col-sm-5ths col-xs-6 <?php if ($p_count % 5 == 0) { ?> product_div <?php } ?> product-<?php echo $p_count ?> v-items clearfix">
                                    <div class="product">
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                            <ul class="product-labels">
                                                <li style="text-transform: capitalize;"><?= get_discount($product->sale_price, $product->discount_price); ?></li>
                                            </ul>
                                        <?php endif; ?>

                                        <div class="product-img-wrap">
                                            <?php if( !$this->agent->is_mobile()) :?>
                                            <div class="product-quick-view-cover">
                                                <div style="position: relative; left: -50%;">
                                                    <!--                                                    --><?php //$image_name = explode('/', $product->image_name); ?>
                                                    <button data-title="<?= $product->product_name ?>"
                                                            data-pr_id="<?= $product->id; ?>"
                                                            data-qv="<?php if ($p_count % 5 == 0) { ?>true<?php } ?>"
                                                            data-qvc="<?php echo $p_count ?>"
                                                            data-image="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                                            data-arrow="arrow-<?= $product->id ?>"
                                                            data-url="<?= base_url(urlify($product->product_name, $product->id)); ?>"
                                                            class="btn btn-primary product-quick-view-btn">Quick view
                                                    </button>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                            <img class="product-img lazy cat-lazy"
                                                 data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                                 style=""
                                                 src="<?= base_url('assets/img/imageloader.gif'); ?>"
                                                 alt="<?= $product->product_name; ?>"
                                                 title="<?= $product->product_name; ?>">
                                        </div>
                                        <a class="product-link" title="<?= $product->product_name ?>"
                                           href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>

                                        <div class="product-caption">
                                            <?php if ($product->from_overseas == 1) : ?>
                                                <span><small><i class="fas fa-plane-arrival text-success"></i> Shipped From Overseas</small></span>
                                            <?php else : ?>
                                                <br/>
                                            <?php endif; ?>
                                            <ul class="product-caption-rating">
                                                <?php
                                                $rating_counts = $this->product->get_rating_counts($product->id);
                                                echo rating_star_generator($rating_counts);
                                                ?>
                                                <span class="text-sm pull-right"><strong><?= ($product->brand_name == 'others' || empty($product->brand_name)) ? 'Universal' : $product->brand_name; ?></strong></span>
                                            </ul>
                                            <h5 class="cs-title"><?= character_limiter(ucwords(str_replace('generic', '', $product->product_name)), 19, '...'); ?></h5>
                                            <div class="product-caption-price">
                                                <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->discount_price); ?></span>
                                                    <span class="cs-price-tl-discount"><sup><?= ngn($product->sale_price); ?> </sup></span>
                                                <?php else : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->sale_price); ?> </span>
                                                <?php endif; ?>

                                                <?php if (!$this->session->userdata('logged_in')) : ?>
                                                    <a href="<?= base_url('login'); ?>">
                                                        <span style="margin-right:5px;"
                                                              class="pull-right category-favorite">
                                                                <i class="fas fa-heart"
                                                                   title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                                        </span>
                                                    </a>
                                                <?php else : ?>
                                                    <?php if ($this->product->is_favourited($profile->id, $product->id)) : ?>
                                                        <span style="margin-right:3px;"
                                                              class="pull-right category-favorite wishlist-btn"
                                                              data-pid="<?= $product->id; ?>">
                                                            <i class="fas fa-heart"
                                                               title="Remove <?= $product->product_name; ?> from your wishlist"></i>
                                                        </span>
                                                    <?php else : ?>
                                                        <span style="margin-right:3px;"
                                                              class="pull-right category-favorite wishlist-btn"
                                                              data-pid="<?= $product->id; ?>">
                                                            <i class="fas fa-heart"
                                                               title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                        <br/>

                                    </div>
                                    <div id="arrow-<?= $product->id ?>" class="arrow-up"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <?= $pagination; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="gap"></div>
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
    <?php endif; ?>
</div>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
    let current_url = "<?= current_url()?>";
</script>
<script src="<?= $this->user->auto_version('assets/js/quick-view.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script>
    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', '');
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
        setTimeout(function(){
            for (let i = 0; i < allimages.length; i++) {
                if (allimages[i].getAttribute('data-src')) {
                    allimages[i].setAttribute('style', '');
                }
            }
        }, 300);
    }, false);
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

</script>
</body>
</html>
