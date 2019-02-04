<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
    .feature-attribute:hover {
        cursor: pointer;
    }

    .product{
        min-height: unset !important;
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

    ;

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
                Please check your spelling for typographic error.<br />
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
            <div class="row">
                <header class="page-header">
                    <ol class="breadcrumb page-breadcrumb">
                        <li><a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="active"><?= ucwords($category_detail->name); ?>
                        </li>
                    </ol>
                    <div class="category-selections clearfix">
                        <button class="btn btn-custom-primary">Newest First</button>
                        <button class="btn btn-custom-primary">Best Sellers</button>
                    </div>
                </header>
            </div>
            <div class="cat-notify">
                <p class="n-head"><?= $category_detail->name; ?></p>
                <p class="n-body"><strong><?= number_format(count($products)) . ' results'; ?></strong></p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <aside class="category-filters">
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm custom-widget-text">Category</h3>
                            <ul class="cateogry-filters-list">
                                <li></li>
                                <?php foreach ($sub_categories as $category) : ?>
                                    <li>
                                        <a href="<?= base_url('catalog/' . urlify($category->name) .'/'); ?>">
                                            <?= $category->name; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm custom-widget-text">Price</h3>
                            <div id="price-range"></div>
                        </div>
                        <?php if (!empty($brands)): ?>
                            <div class="category-filters-section">
                                <h3 class="widget-title-sm custom-widget-text">Brand</h3>
                                <?php foreach ($brands as $brand) : ?>
                                    <div class="carrito-checkbox">
                                        <label class="tree-input">
                                            <input class="filter" type="checkbox" data-type="brand_name"
                                                   name="filterset"
                                                   data-value="<?= trim($brand->brand_name); ?>"><?= ucfirst($brand->brand_name); ?>
                                            <span class="checkmark"></span>
                                            <span class="category-filters-amount">(<?= $brand->brand_count; ?>)</span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($colours)) : ?>
                            <div class="category-filters-section">
                                <h3 class="widget-title-sm custom-widget-text">Main Colour</h3>
                                <?php foreach ($colours as $colour) : ?>
                                    <div class="carrito-checkbox">
                                        <label class="tree-input">
                                            <input class="filter" type="checkbox" data-type="main_colour"
                                                   name="filterset"
                                                   data-value="<?= trim($colour->colour_name); ?>"/><?= ucfirst($colour->colour_name); ?>
                                            <span class="checkmark"></span>
                                            <span class="category-filters-amount">(<?= $colour->colour_count; ?>)</span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($features) : ?>
                            <div class="category-filters-section">
                                <?php $x = 1;
                                foreach ($features

                                as $feature => $feature_value) : ?>
                                <div class="accordion" id="<?= trim($feature); ?>">
                                    <div class="panel no-outline feature-attribute">
                                        <div class="panel-header feature-attribute">
                                            <div class="panel-title" data-toggle="collapse"
                                                 data-target="#<?= trim($feature) . '-1'; ?>" aria-expanded="true"
                                                 aria-controls="<?= trim($feature) . '-1'; ?>">
                                                <h3 class="widget-title-sm custom-widget-text tree-root">
                                                    <?= preg_replace("/[^A-Za-z 0-9]/", ' ', $feature); ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="<?= trim($feature) . '-1'; ?>" class="collapse"
                                             aria-labeledby="<?= $feature; ?>" data-parent="#<?= trim($feature); ?>">
                                            <div class="panel-body">
                                                <?php foreach ($feature_value as $key => $value) : ?>
                                                    <div class="carrito-checkbox">
                                                        <label class="tree-input">
                                                            <input class="filter" type="checkbox" name="filterset"
                                                                   data-type="<?= trim($feature); ?>"
                                                                   data-value="<?= trim(preg_replace("/[^A-Za-z0-9-]/", '_', $value)) ?>"/><?= $value; ?>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>

                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <hr class="tree-line"/>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div>

                <div class="col-md-9">
                    <div id="processing"
                         style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                        <div class="text"
                             style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                            <img src="<?= base_url('assets/load.gif'); ?>" alt="Processing...">
                            Processing your request. <strong style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">Please Wait! </strong>
                        </div>
                    </div>
                    <div id="category_body">
                        <div class="row filter_data" data-gutter="15">
                            <?php $p_count = 0; foreach ($products as $product) : ?>
                                <?php $p_count++; ?>
                                <div class="col-md-3 <?php if ($p_count % 4 == 0) { ?> product_div <?php } ?> product-<?php echo $p_count ?> v-items clearfix">
                                    <div class="product">
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                            <ul class="product-labels">
                                                <li><?= get_discount($product->sale_price, $product->discount_price); ?></li>
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
                                                            data-image="<?= PRODUCTS_IMAGE_PATH . $product->image_name; ?>"
                                                            class="btn btn-primary product-quick-view-btn">Quick view
                                                    </button>
                                                </div>
                                            </div>
                                            <img class="product-img lazy cat-lazy"
                                                 data-src="<?= PRODUCTS_IMAGE_PATH . $product->image_name; ?>"
                                                 style=""
                                                 src="<?= base_url('assets/img/load.gif'); ?>"
                                                 alt="<?= $product->product_name; ?>"
                                                 title="<?= $product->product_name; ?>">
                                        </div>
                                        <a class="product-link" title="<?= $product->product_name ?>"
                                           href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>
                                        <div class="product-caption">
                                            <ul class="product-caption-rating">
                                                <?php
                                                $rating_counts = $this->product->get_rating_counts($product->id);
                                                echo rating_star_generator($rating_counts);
                                                ?>
                                                <span
                                                        class="text-sm pull-right"><strong>Seller: </strong><?= ucfirst($product->first_name); ?></span>
                                            </ul>
                                            <h5 class="cs-title"><?= character_limiter(ucwords($product->product_name), 10, '...'); ?></h5>
                                            <div class="product-caption-price">

                                                <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->discount_price); ?></span>
                                                    <span class="cs-price-tl-discount"><sup><?= ngn($product->sale_price); ?> </sup></span>
                                                <?php else : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->sale_price); ?> </span>
                                                <?php endif; ?>

                                                <?php if( !$this->session->userdata('logged_in')) :?>
                                                    <a href="<?= base_url('login'); ?>">
                                                        <span style="margin-right:3px;" class="pull-right category-favorite">
                                                                <i class="fa fa-heart" title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                                        </span>
                                                    </a>
                                                <?php else :?>
                                                    <?php if($this->product->is_favourited($profile->id, $product->id)) : ?>
                                                        <span style="margin-right:3px;" class="pull-right category-favorite wishlist-btn" data-pid="<?= $product->id;?>">
                                                            <i class="fa fa-heart" title="Remove <?= $product->product_name; ?> from your wishlist"></i>
                                                        </span>
                                                    <?php else : ?>
                                                        <span style="margin-right:3px;" class="pull-right category-favorite wishlist-btn" data-pid="<?= $product->id;?>">
                                                            <i class="fa fa-heart-o" title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>

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
    if (!base_url) { let base_url = "<?= base_url(); ?>";}
    let current_url = "<?= current_url()?>";
    let url = "<?= base_url('catalog/' . $category_detail->slug .'/') ?>";

</script>
<script src="<?= base_url('assets/js/quick-view.js'); ?>"></script>
<script src="<?= base_url('assets/js/search.js'); ?>"></script>
<script>
    $(function () {
        $('.lazy').Lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true
        });
    });

    $("#price-range").ionRangeSlider({
        type: "double",
        min: <?= $min ?>,
        max: <?= $max; ?>,
        grid: true,
        prefix: "&#8358;",
        onFinish: function (data) {
            window.location = url + '?price_min='+data.from+'&price_max='+data.to;
        }
    });

    let my_range = $("#price-range").data("ionRangeSlider");
    let min = '<?= $price_min ; ?>';
    let max = '<?= $price_max ; ?>';
    if( min != '' && max != '') {
        my_range.update({
            from : min,
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
                    // _this.find('i').removeClass('fa-heart', function () {
                    //     $(this).addClass('fa-heart-o');
                    // })
                } else {
                    _this.removeClass('category-favorite').addClass('.category-favorite-active');
                    _this.find('i').attr('title', 'Remove from your wishlist');
                    // _this.find('i').removeClass('fa-heart-o', function () {
                    //     $(this).addClass('fa-heart');
                    // })
                }
                notification_message(parsed_response.msg, 'fa fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again. ', 'fa fa-info-circle', error);
            }
        })
    });

    $(document).ready(function () {
        let _category_body = $('#category_body');

        function doReplaceState(url) {
            let state = {current_url: url},
                title = "Onitshamarket";
            history.replaceState(state, title, url);
        }

        function load_page(url) {
            $('.cat-notify').load(`${url} .cat-notify`);
            $(_category_body).load(`${url} #category_body`, function (response, status, xhr) {
                if (status === "error") {
                    let msg = "Sorry but there was an error: ";
                    alert(msg + xhr.status + " " + xhr.statusText);
                    window.location = current_url;
                }
                $('.lazy').Lazy({
                    scrollDirection: 'vertical',
                    effect: 'fadeIn',
                    visibleOnly: true
                });
                $('.product-quick-view-btn').on('click', get_view);
                doReplaceState(url);

                $('#processing').hide();
                $(_category_body).show();
            });
        }

        let url = '';
        let filter_string = '';
        $('.filter').change(function () {
            if ($('input[name=filterset]').is(':checked')) {
                let filter_list = {};
                url = '';
                filter_string = '';
                $(_category_body).hide();
                $('#processing').show();
                let items = $('input[name=filterset]:checked');

                items.each(function () {
                    let value = $(this).data('value');
                    let key = $(this).data('type');
                    if (filter_list[key]) {
                        if (jQuery.inArray(value, filter_list[key]) !== -1) {
                        } else {
                            filter_list[key].push(value)
                        }
                    } else {
                        filter_list[key] = [value];
                    }
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
                    });
                    load_page(url);
                });
            } else {
                load_page(current_url);
            }
        });
    });
</script>
</body>
</html>
