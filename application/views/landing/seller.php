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
                    <p class="n-head">Vendor Name - Best Deal</p>
<!--                <p class="n-body"><strong>--><?//= $total_count . ' results'; ?><!--</strong></p>-->
            </div>
            <div class="row">
                <div class="col-md-12">
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
                                                 style=""
                                                 src="data:image/gif;base64,R0lGODlhcgE4AqIEAJmZmf///93d3bu7u////wAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/wtYTVAgRGF0YVhNUDw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0IxMDI4NTIwMEQ1MTFFMkI1Q0JCQjdCNkJCOTU5MjMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0IxMDI4NTMwMEQ1MTFFMkI1Q0JCQjdCNkJCOTU5MjMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3QjEwMjg1MDAwRDUxMUUyQjVDQkJCN0I2QkI5NTkyMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3QjEwMjg1MTAwRDUxMUUyQjVDQkJCN0I2QkI5NTkyMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDP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"
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
    window.addEventListener('load', function(){
    var allimages= document.getElementsByTagName('img');
    for (var i=0; i<allimages.length; i++) {
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
