<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
    .feature-attribute:hover {
        cursor: pointer;
    }

    .product {
        min-height: 300px !important;
        max-height: 300px !important;
    }

    .carrito-checkbox {
        display: block;
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        cursor: pointer;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .carrito-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        padding: 3px;
        margin-top: 2px;
        height: 15px;
        width: 15px;
        border: solid 1px #74c68366;;
        background-color: #fff;
    }

    .carrito-checkbox:hover input ~ .checkmark {
        border-color: #74c68366;
    }

    .carrito-checkbox input:checked ~ .checkmark {
        background-color: #74c683;
    }

    .quick_view_link:hover {
        color: #0b6427;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .carrito-checkbox input:checked ~ .checkmark:after {
        display: block;
        color: white;
    }

    /* Style the checkmark/indicator */
    .carrito-checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
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
            <?php if( $this->uri->segment(2)) : ?>
            <div class="row">
                <header class="page-header">
                    <ol class="breadcrumb page-breadcrumb">
                        <li><a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="active"><?= ucwords($category_detail->name); ?>
                        </li>
                    </ol>
                    <div class="category-selections clearfix">
                        <a class="btn btn-custom-primary"
                           href="<?= base_url('catalog/' . urlify($category_detail->name) . '/?order_by=best_rating'); ?>">Best
                            Rating</a>
                        <a class="btn btn-custom-primary" title="Filter by best seller" href="<?= current_url(); ?>">Best
                            Seller</a>
                    </div>
                </header>
            </div>
            <div class="cat-notify">
                <p class="n-head"><?= $category_detail->name; ?></p>
                <p class="n-body"><strong><?= $total_count . ' results'; ?></strong></p>
            </div>
            <?php else : ?>
            <div class="row">
                <div class="gap"></div>
                <div class="cat-notify">
                    <p class="n-head">Proudly Made In Nigeria</p>
                    <p class="n-body"><strong><?= $total_count . ' results'; ?></strong></p>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-3">
                    <?php $this->load->view('landing/resources/category_filter'); ?>
                </div>
                <div class="col-md-9">
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
                    <?php if (count($products) < 1): ?>
                        <h2 class="text-center">Oops! No active product on this section, please filter again.</h2>
                    <?php endif; ?>
                    <div id="category_body">
                        <div class="row filter_data" data-gutter="15">
                            <?php $p_count = 0;
                            foreach ($products as $product) : ?>
                                <?php $p_count++; ?>
                                <div class="col-md-3 <?php if ($p_count % 4 == 0) { ?> product_div <?php } ?> product-<?php echo $p_count ?> v-items clearfix">
                                    <div id="arrow-<?= $product->id ?>" class="arrow-up"></div>
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
                                                            data-qv="<?php if ($p_count % 4 == 0) { ?>true<?php } ?>"
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
                                                 src="<?= base_url('assets/img/load.gif'); ?>"
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
                                            <h5 class="cs-title"><?= character_limiter(ucwords(str_replace('generic', '', $product->product_name)), 10, '...'); ?></h5>
                                            <div class="product-caption-price">
                                                <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->discount_price); ?></span>
                                                    <span class="cs-price-tl-discount"><sup><?= ngn($product->sale_price); ?> </sup></span>
                                                <?php else : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->sale_price); ?> </span>
                                                <?php endif; ?>

                                                <?php if (!$this->session->userdata('logged_in')) : ?>
                                                    <a href="<?= base_url('login'); ?>">
                                                        <span style="margin-right:3px;"
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
                                                <br/>
                                            </div>
                                        </div>

                                    </div>
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
    <?php $this->load->view('landing/resources/footer'); ?>
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
    catalog_url = "<?= base_url('catalog/' . $category_detail->slug . '/') ?>";

</script>
<script src="<?= $this->user->auto_version('assets/js/quick-view.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script>
    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
    }, false);
    <?php //?>
    $(window).on('scroll', function() {
        if ((document.documentElement.scrollTop > 260) && (document.documentElement.scrollTop < ($('#category_body').outerHeight() - 230))) {
            $('.category-filters').css({
                "height": "96vh",
                "position":"fixed",
                "overflow-y":"scroll",
                "overflow-x":"hidden",
                "width":"280px",
                "top": 10,
            });
        } else {
            $('.category-filters').css({
                "height": "unset",
                "position":"unset",
                "overflow-y":"unset",
                "overflow-x":"unset",
                "top": "unset",
            });
        }
    });
    $("#price-range").ionRangeSlider({
        type: "double",
        min: <?= $min ?>,
        max: <?= $max; ?>,
        grid: true,
        prefix: "&#8358;",
        onFinish: function (data) {
            let main_location = window.location.href;
            let location = main_location.split("?");
            let fs = location[1];
            let nu_loc = "";
            if (fs != undefined) {
                if (main_location.indexOf("?price_min") !== -1) {
                    let reg_match = main_location.match(/price_min=(.*)&price_max=(.*)&/);
                    if (reg_match !== null) {
                        nu_loc = main_location.replace(/price_min=(.*)&price_max=(.*)&/, "");
                    } else {
                        nu_loc = main_location.replace(/\?price_min=(.*)&price_max=(.*)/, "");
                    }
                } else if (main_location.indexOf("&price_min") !== -1) {
                    let reg_match = main_location.match(/&price_min=(.*)&price_max=(.*)&/);
                    if (reg_match !== null) {
                        nu_loc = main_location.replace(/&price_min=(.*)&price_max=(.*)&/, "&");
                    } else {
                        nu_loc = main_location.replace(/&price_min=(.*)&price_max=(.*)/, "");
                    }
                }
                let test_location = nu_loc.split("?");
                if (test_location[1] === undefined) {
                    window.location = nu_loc + '?price_min=' + data.from + '&price_max=' + data.to;
                } else {
                    window.location = nu_loc + '&price_min=' + data.from + '&price_max=' + data.to;
                }
            } else {
                window.location = catalog_url + '?price_min=' + data.from + '&price_max=' + data.to;
            }
        }
    });

    let my_range = $("#price-range").data("ionRangeSlider");
    let min = '<?= $price_min; ?>';
    let max = '<?= $price_max; ?>';
    if (min != '' && max != '') {
        my_range.update({
            from: min,
            to: max
        });
    }

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
        let main_location = window.location.href;
        let location = main_location.split("?");
        let filtering_settings = location[1];
        if (filtering_settings != undefined) {
            let fs_array = filtering_settings.split("&");
            for (let w = 0; w < fs_array.length; w++) {
                let kv = fs_array[w].split("=");
                let checks = kv[1].split(",");
                for (let z = 0; z < checks.length; z++) {
                    $("#" + (unescape(checks[z]).toLowerCase()).replace(/\s+/g, '_')).prop("checked", true);
                }
            }
        }

        function load_page(url) {
            window.location = url;
        }

        let url = '';
        let filter_string = '';
        let filter_list = {};
        $('.filter').change(function () {
            let location = main_location.split("?");
            let filtering_settings = location[1];
            if (filtering_settings != undefined) {
                let fs_array = filtering_settings.split("&");
                for (let w = 0; w < fs_array.length; w++) {
                    let kv = fs_array[w].split("=");
                    let key = kv[0];
                    filter_list[key] = kv[1].split(",");
                }
            }
            <?php // console.log("fiter_list" + JSON.stringify(filter_list));?>
            filter_string = '';
            let value = $(this).data('value');
            let key = $(this).data('type');
            if (filter_list[key]) {
                if (jQuery.inArray(escape(value), filter_list[key]) !== -1) {
                    let index = filter_list[key].indexOf(escape(value));
                    filter_list[key].splice(index, 1);
                    if (filter_list[key].length < 1) {
                        delete filter_list[key];
                    }
                } else {
                    filter_list[key].push(value)
                }
            } else {
                filter_list[key] = [value];
            }
            console.log(filter_list);
            url = '';
            jQuery.each(filter_list, function (obj) {
                filter_string = '';
                jQuery.each(filter_list[obj], function (id, values) {
                    if (filter_string === '') {
                        filter_string += values;
                    } else {
                        filter_string += ',' + values;
                    }
                });
                if (url === '') {
                    url += `?${obj}=${filter_string}`
                } else {
                    url += `&${obj}=${filter_string}`
                }
                <?php // console.log(url);
                // console.log("fiter_list after" + JSON.stringify(filter_list));?>
            });
            url = (url === "") ? catalog_url : url;
            load_page(url);
        });

        $('#clear_filter').on('click', function () {
            window.location = catalog_url;
        });
    });
</script>
</body>
</html>
