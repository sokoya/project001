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
                    <div class="col-sm-6 col-xs-12">
                        <h4>Product Quality</h4>
                        <div class="progress" style="margin-top:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 65%;background-color: #f12345;"
                                 aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                            </div>
                        </div>
                    </div>

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
                            if( $seller_detail->total_rate ) :
                                $count = $seller_detail->totaluser;
                                $average_float = round($seller_detail->total_rate/$count , 1, PHP_ROUND_HALF_UP);
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
                                            <img class="product-img lazy cat-lazy"
                                                 data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                                 style=""
                                                 src="data:image/gif;base64,R0lGODlhcgE4AqIEAJmZmf///93d3bu7u////wAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0IxMDI4NTIwMEQ1MTFFMkI1Q0JCQjdCNkJCOTU5MjMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0IxMDI4NTMwMEQ1MTFFMkI1Q0JCQjdCNkJCOTU5MjMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3QjEwMjg1MDAwRDUxMUUyQjVDQkJCN0I2QkI5NTkyMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3QjEwMjg1MTAwRDUxMUUyQjVDQkJCN0I2QkI5NTkyMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDP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"
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
        var allimages = document.getElementsByTagName('img');
        for (var i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
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
