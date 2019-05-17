<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
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

    .quick_view_link:hover{
        color:#0b6427;
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
            <div class="cat-notify" style="padding: 30px;">
                <p class="n-head">New Arrivals - Best Deal</p>
<!--                <p class="n-body"><strong>--><?//= $total_count . ' results'; ?><!--</strong></p>-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="processing"
                         style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                        <div class="text"
                             style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                            <img src="<?= base_url('assets/load.gif'); ?>" alt="Processing...">
                            Processing your request. <strong
                                    style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">Please
                                Wait! </strong>
                        </div>
                    </div>
                    <?php if( count( $products) < 1 ): ?>
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
                                            <div class="product-quick-view-cover">
                                                <div style="position: relative; left: -50%;">
                                                    <!--                                                    --><?php //$image_name = explode('/', $product->image_name); ?>
                                                    <button data-title="<?= $product->product_name ?>"
                                                            data-pr_id="<?= $product->id; ?>"
                                                            data-qv="<?php if ($p_count % 5 == 0) { ?>true<?php } ?>"
                                                            data-qvc="<?php echo $p_count ?>"
                                                            data-image="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?=$product->image_name; ?>"
                                                            data-arrow="arrow-<?= $product->id ?>"
                                                            data-url="<?= base_url(urlify($product->product_name, $product->id)); ?>"
                                                            class="btn btn-primary product-quick-view-btn">Quick view
                                                    </button>
                                                </div>
                                            </div>
                                            <img class="product-img lazy cat-lazy"
                                                 data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?=$product->image_name; ?>"
                                                 style="max-width: 50px; max-height: 50px; margin-top: 50px; margin-right: auto; margin-left: auto;margin-bottom:40px;"
                                                 src="<?= base_url('assets/img/imageloader.gif'); ?>"
                                                 alt="<?= $product->product_name; ?>"
                                                 title="<?= $product->product_name; ?>">
                                        </div>
                                        <a class="product-link" title="<?= $product->product_name ?>"
                                           href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>

                                        <div class="product-caption">
                                            <?php if($product->from_overseas == 1) :  ?>
                                                <span><small><i class="fas fa-plane-arrival text-success"></i> Shipped From Overseas</small></span>
                                            <?php else : ?>
                                                <br />
                                            <?php endif; ?>
                                            <ul class="product-caption-rating">
                                                <?php
                                                $rating_counts = $this->product->get_rating_counts($product->id);
                                                echo rating_star_generator($rating_counts);
                                                ?>
                                                <span class="text-sm pull-right"><strong><?= ($product->brand_name == 'others' || empty($product->brand_name)) ? 'Universal' : $product->brand_name; ?></strong></span>
                                            </ul>
                                            <h5 class="cs-title"><?= character_limiter(ucwords(str_replace('generic', '',$product->product_name)), 10, '...'); ?></h5>
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
                                        <br />

                                    </div>
                                    <div id="arrow-<?= $product->id ?>" class="arrow-up"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <?= $pagination ?>
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
            allimages[i].setAttribute('src', '');
            if (allimages[i].getAttribute('data-src')) {
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
