<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .custom-card {
        background: #fff;
        padding-top: 8px;
        padding-bottom: 8px;
        margin-bottom: 2px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .margin-0 {
        margin: 0;
    }

    .redirect-text {
        font-size: 13px;
        color: #49A251;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .seller-name {
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #292929;
        margin-bottom: 2px;
    }

    .product-name {
        font-size: 14px;
        color: #030303;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
    }

    .rating-count {
        position: relative;
        bottom: 9px;
        right: 2px;
        color: #dda61d;
        font-size: 14px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .rating-total-count {
        position: relative;
        bottom: 2px;
        color: #6b57ff;
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .product-price {
        font-size: 21px;
        font-weight: 700;
        color: #55a455;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        position: relative;
        top: -8px;
    }

    .product-price > span {
        float: right;
        padding: 10px;
        background: #c9ffd3;
        color: #55a455;
        font-weight: 600;
        font-size: 15px;
    }

    .product-discount-price {
        font-size: 12px;
        font-weight: 600;
        color: #b0b0b0;
        text-decoration: line-through;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: relative;
        top: -18px;
    }

    .variation-option {
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #242424;
        outline: 1px solid #d0d0d0;
        padding: 3px;
        width: 100%;
        text-align: center;
    }

    .option-selected {
        outline: 1px solid #0b6427;
        color: #0b6427;
    }

    .option-disabled {
        color: #bebebe;
        text-decoration: line-through;
    }

    .variation-option-list {
        margin-top: -3px;
    }

    .buy-btn {
        margin-top: 3px;
        background: #3d8c4d;
        color: #fff;
        padding: 13px;
    }

    .buy-btn:hover, .buy-btn:focus {
        color: #fff;
    }

    .block-title {
        color: #468c46;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 13px;
    }

    .block-title > span {
        float: right;
        color: #2e2e2e;
    }

    .wishlist-cta {
        text-align: center;
        margin-top: 4px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 13px;
        color: #468c46;
    }

    .delivery-text {
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        position: relative;
        top: 2px;
        left: 10px;
    }

    .body_text {
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        position: relative;
    }

    .product-image {
        height: auto;
        width: auto;
        margin: auto;
        max-width: 250px;
        max-height: 250px;
    }

    .suggested-image {
        height: auto;
        width: auto;
        margin: auto;
        max-width: 200px;
        max-height: 200px;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-weight: 500
    }

    .comment-date {
        color: #777;
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .comment-title {
        color: #333;
        font-size: 14px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .comment-detail {
        color: #404040;
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        position: relative;
        top: -5px;
    }

    .comment-line {

        margin-top: -10px;
        margin-bottom: 16px;
    }

    .comment-block {
        margin-top: ;
    }

    .rating-btn {
        background: #468c46;
        color: #fff;
        border-radius: 0;
    }

    .suggested-image-text {
        color: #000;
        font-weight: 600;
        text-align: center;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 14px;
    }

    .suggested-image-text:hover {
        color: #468c46;
    }

    .comment-user {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 12px;
        color: #6e6e6e;
        font-weight: 500;
        position: relative;
        bottom: 10px;
    }
    .global-wrapper{
        min-height:0 !important;
    }
</style>
</head>
<body style="background: #e5e5e5">
<div class="global-wrapper clearfix" id="global-wrapper" style="margin-bottom: 3px;">
    <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
</div>
<?php if ($product->product_status !== 'approved'): ?>
    <div class="row">
        <p class="text-center">Oops! The product you looking for is not active.</p>
        <p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find
                product</a></p>
    </div>
<?php elseif (empty($product) || empty($galleries)): ?>
    <div class="row">
        <div class="gap-large"></div>
        <h2 class="text-center">Oops! The product you looking does not exist.</h2>
        <p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find
                product</a></p>
    </div>
<?php else : ?>
    <div class="custom-card">
        <div class="container">
            <a style="text-decoration: none;" href="<?= base_url('catalog/' . $category_detail->slug); ?>"><p
                        class="margin-0"><img src="<?= base_url('assets/landing/svg/back.svg'); ?>" alt="Back button"
                                              style="height: 14px; width: 14px; margin-right: 8px;"><span
                            class="redirect-text">Go back to <?= ucwords($category_detail->name); ?></span>
                </p></a>
        </div>
    </div>
    <div class="custom-card">
        <div class="container">
            <div class="owl-carousel products-gallery">
                <?php foreach ($galleries as $gallery) : ?>
                    <img class="product-image lazy" src="<?= base_url('assets/landing/img/load.gif'); ?>"
                         data-src="<?= PRODUCTS_IMAGE_PATH . $gallery->image_name; ?> "
                         alt="<?= $product->product_name; ?>"/>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="custom-card">
        <div class="container">
            <p class="seller-name">Seller - <?= ucwords($product->first_name . ' ' . $product->last_name); ?></p>
            <p class="product-name"><?= character_limiter(ucwords($product->product_name), 50, '...'); ?></p>
            <div style="margin-top: 4px; margin-left: 2px">
                <?php
                if ($rating_counts) {
                    $overall_rating = product_overall_rating($rating_counts);
                }
                ?>
                <span class="rating-count"><?= isset($overall_rating) ? $overall_rating : ''; ?></span>
                <ul style="display: inline-block" class="product-caption-rating">
                    <?= rating_star_generator($rating_counts); ?>
                    <span style="margin-left: 5px; color: #0b6427;"
                          class="rating-total-count"><?= !empty($rating_counts) ? ' (' . count($rating_counts) . ') ratings' : '' ?></span>
                </ul>
            </div>
            <?php if (discount_check($var->discount_price, $var->start_date, $var->end_date)) : ?>
                <p class="product-price"><?= ngn($var->discount_price); ?>
                    <span><?= get_discount($var->sale_price, $var->discount_price) ?></span></p>
            <?php else : ?>
                <p class="product-price"><?= ngn($var->sale_price); ?></p>
                <p class="product-discount-price"></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="custom-card" style="margin-top: 5px;">
        <?= form_open('', 'id="cart-form"'); ?>
        <div class="container">
            <?php if (!empty($var->discount_price)) : ?>
                <p class="block-title">Buy Now <span class="price-mini"><?= ngn($var->discount_price); ?></span></p>
            <?php else: ?>
                <p class="block-title">Buy Now <span class="price-mini"><?= ngn($var->sale_price); ?></span></p>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-7">
                    <p class="custom-product-page-option-title">Quantity:</p>
                    <ul>
                        <li class="product-page-qty-item">
                            <button type="button"
                                    class="product-page-qty product-page-qty-minus">-
                            </button>
                            <input data-range="<?= $var->quantity ?>" name="quantity"
                                   id="quan"
                                   class="product-page-qty product-page-qty-input quantity"
                                   type="text"
                                   value="1" disabled/>
                            <button type="button"
                                    class="product-page-qty product-page-qty-plus">+
                            </button>
                        </li>
                    </ul>
                    <input type="hidden" name="seller" class="seller_id"
                           value="<?= $product->seller_id ?>">

                    <input type="hidden" name="product_id" class="product_id"
                           value="<?= $product->id; ?>">

                    <input type="hidden" name="product_name" class="product_name" value="<?= $product->product_name ?>">
                    <input type="hidden" name="truncated_product_name" class="truncated_product_name"
                           value="<?= character_limiter(ucwords($product->product_name), 50, '...'); ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <?php if (count($variations) > 1) : ?>
                    <div class="col-xs-12">
                        <p class="custom-product-page-option-title">Variation: </p>
                        <div class="row variation-option-list">
                            <?php $qty_stock_check = 0 ;?>
                            <?php foreach ($variations as $variation) : ?>
                                <div class="col-xs-3">
                                    <p data-price="<?= $variation['sale_price']; ?>"
                                        <?php if (discount_check($variation['discount_price'], $variation['start_date'], $variation['end_date'])) : ?>
                                            data-discount="<?= $variation['discount_price']; ?>"
                                        <?php else : ?>
                                            data-discount="empty"
                                        <?php endif; ?>
                                       data-vid="<?= $variation['id']; ?>"
                                       data-quantity='<?= $variation['quantity'] ?>'
                                       data-vname="<?= $variation['variation'] ?>"
                                       class="variation-option <?php if ($variation['quantity'] < 1) echo 'option-disabled'; ?>
									    <?php if ($variations[0]['id'] == $variation['id']) echo 'option-selected'; ?>">
                                        <?= ucfirst($variation['variation']); ?>
                                    </p>
                                </div>
                                <?php if( $variation['quantity'] < 1 ) $qty_stock_check++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <input type="hidden" class="variation_id" name="variation_id" value="<?= $var->id; ?>">
                <input type="hidden" class="variation_name" name="variation_name" value="<?= $var->variation; ?>">
                <?php if ($var->discount_price != '') : ?>
                    <input type="hidden" name="product_price"
                           value="<?= $var->discount_price; ?>"
                           class="pr_price_hidden"/>
                <?php else: ?>
                    <input type="hidden" name="product_price"
                           value="<?= $var->sale_price; ?>"
                           class="pr_price_hidden"/>
                <?php endif; ?>
            </div>

            <?php
//            Make A check to confirm if the product is still in stock
            if($qty_stock_check == count( $variations)) :?>
            <button class="btn btn-block" disabled>
                Out of Stock
            </button>
            <?php else :?>
            <button class="btn btn-block buy-btn submit-cart">
                Add to Cart
            </button>
            <?php endif; ?>

            <?php if ($this->session->userdata('logged_in')) : ?>
                <?php if (!$favourite): ?>
                    <p class="wishlist-cta">Add to Wishlist</p>
                <?php else: ?>
                    <p class="wishlist-cta">Remove from Wishlist</p>
                <?php endif; ?>
            <?php else: ?>
                <a style="text-decoration: none" href="<?= base_url('login') ?>"><p class="wishlist-cta">Add to
                        Wishlist</p></a>
            <?php endif; ?>
        </div>
        <?= form_close(); ?>
    </div>
    <div class="custom-card" style="margin-top: 5px;">
        <div class="container">
            <p class="block-title">Delivery Information</p>
            <div class="row">
                <div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
                    <img class="lazy" src="<?= base_url('assets/landing/img/load.gif'); ?>"
                         data-src="<?= base_url('assets/landing/svg/delivery-truck.svg'); ?>" alt="Delivery Truck"
                         style="height: 30px; width: 35px;">
                </div>
                <div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
                    <p class="delivery-text">Onitsha Market delivery available, get it within 5 business days of
                        order</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
                    <img class="lazy" src="<?= base_url('assets/landing/img/load.gif'); ?>"
                         data-src="<?= base_url('assets/landing/svg/return.svg'); ?>" alt="Delivery Truck"
                         style="height: 30px; width: 35px;">
                </div>
                <div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
                    <p class="delivery-text">Free 7 day return if available</p>
                </div>
            </div>
            <div class="row" style="margin-top: 14px;">
                <div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
                    <img class="lazy" src="<?= base_url('assets/landing/img/load.gif'); ?>"
                         data-src="<?= base_url('assets/landing/svg/warranty.svg'); ?>" alt="Warranty"
                         style="height: 30px; width: 35px;">
                </div>
                <div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
                    <p class="delivery-text">This product has the following warranty
                        : Repair by vendor
                        <br/>
                        <a href="javascript:void(0)">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container"><p class="text-break" style="">Overview</p></div>
    <div class="custom-card" style="margin-top: 5px;">
        <div class="container">
            <?php if (!empty($product->product_line)) : ?>
                <p class="block-title close-panel" data-target="title_vl" style="margin-top: 5px;">Product Shop <span
                            style="color: #4c4c4c !important; float: right"><i
                                class="fa fa-minus close-panel"
                                aria-hidden="true"
                                data-target="title_vl"></i></span></p>
                <p class="body_text" id="title_vl"><?= $product->product_line; ?></p>
                <hr/>
            <?php endif; ?>
            <?php if (!empty($product->product_description)) : ?>
                <p class="block-title close-panel" data-target="description_vl">Product Description <span
                            style="color: #4c4c4c !important; float: right"><i
                                class="fa fa-minus close-panel"
                                aria-hidden="true"
                                data-target="description_vl"></i></span></p>
                <p id="description_vl" class="body_text">
                    <?= word_limiter($product->product_description, 80); ?>
                    <?php if (str_word_count($product->product_description, 0) > 50) : ?>
                        <span><a
                                    style="text-decoration: none; color: #0b6427"
                                    href="<?= base_url(urlify($product->product_name, $product->id) . 'description'); ?>">Read More</a> </span>
                    <?php endif; ?>
                </p>
                <hr/>
            <?php endif; ?>
            <?php if (!empty($product->in_the_box)) : ?>
                <p class="block-title close-panel" data-target="box_vl">What you will find in the box <span
                            style="color: #4c4c4c !important; float: right"><i
                                class="fa fa-plus close-panel"
                                aria-hidden="true"
                                data-target="box_vl"></i></span></p>
                <p class="body_text" style="display: none" id="box_vl">
                    <?= $product->in_the_box; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container"><p class="text-break" style="">Full Specifications</p></div>
    <div class="custom-card" style="margin-top: 5px;">
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Specification</th>
                    <th>Details</th>
                </tr>
                <?php $specs = json_decode($product->attributes); ?>

                </thead>
                <tbody>
                <?php if (!empty($specs)): foreach ($specs as $spec => $value) : ?>
                    <tr>
                        <td><?= trim($spec); ?></td>
                        <td><?php if (is_array($value)) : foreach ($value as $val) echo ucwords($val) . ', '; else: echo ucwords($value); endif; ?></td>
                    </tr>
                <?php endforeach; else : ?>
                    <td colspan="2">No Specification for this item</td>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container"><p class="text-break" style="">Ratings and Reviews</p></div>
    <div class="custom-card" style="margin-top: 5px;">
        <div class="container">
            <p class="block-title" style="margin-top: 5px;">Total Ratings <span><a
                            style="text-decoration: none; color: #0b6427"
                            href="<?= base_url(urlify($product->product_name, $product->id) . 'add_rating_review'); ?>">Write a review</a> </span>
            </p>
            <div style="margin-top: 4px; margin-left: 2px">
                <ul style="display: inline-block" class="product-caption-rating">
                    <?= rating_star_generator($rating_counts); ?>
                    <span style="margin-left: 5px; color: #0b6427;"
                          class="rating-total-count">(<?= product_overall_rating($rating_counts) . '/5'; ?> average rating)</span>
                </ul>
            </div>
            <hr style="margin-top: -4px;"/>
            <?php if ($reviews) : ?><p class="block-title" style="margin-top: 5px;">All Reviews</p><?php endif; ?>
            <?php $x = 1;
            if ($reviews) : foreach ($reviews as $review) : ?>
                <div class="comment-block">
                    <ul style="display: inline-block" class="product-caption-rating">
                        <?= single_user_rate($review['rating_score']); ?>
                    </ul>
                    <span style="float: right;" class="comment-date"><?= neatDate($review['published_date']); ?></span>
                </div>
                <p class="comment-title"><?= $review['title']; ?></p>
                <p class="comment-detail"><?= $review['content']; ?></p>
                <p class="comment-user"><strong>Reviewed by:</strong> <?= $review['display_name']; ?></p>
                <hr class="comment-line"/>
                <?php if ($x == 3) : ?>
                    <a style="text-decoration: none; color: #fff;"
                       href="<?= base_url(urlify($product->product_name, $product->id) . 'reviews'); ?>">
                        <button class="btn btn-block rating-btn">View all reviews</button>
                    </a>
                    <?php break; endif; ?>
                <?php $x++; endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if (count($likes)) : ?>
        <div class="container" style="margin-bottom: 5px;"><p class="text-break" style="">You might also like</p></div>
        <div class="custom-card">
            <div class="">
                <div class="owl-carousel suggested-products">
                    <?php foreach ($likes as $like) : ?>
                        <a style="text-decoration: none"
                           href="<?= base_url(urlify($like->product_name, $like->id)); ?>">
                            <img class="suggested-image lazy" src="<?= base_url('assets/landing/img/load.gif'); ?>"
                                 data-src="<?= PRODUCTS_IMAGE_PATH . $like->image_name; ?> "/>
                            <p class="suggested-image-text"><?= character_limiter($like->product_name, 15); ?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<script type="text/javascript"> let csrf_token = '<?= $this->security->get_csrf_hash(); ?>';</script>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/search.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').Lazy();
    });
    // owl carousel initialization
    $(document).ready(function () {
        $('.close-panel').on('click', function () {
            let target = $(this).data('target');
            if ($(this).hasClass('fa')) {
                $(this).toggleClass("fa-minus fa-plus");
                $(`#${target}`).toggle()
            }
            $(this).find('.fa').toggleClass("fa-minus fa-plus");
            $(`#${target}`).toggle()

        });
        $(".products-gallery").owlCarousel({
            items: 1,
            lazyLoad: true,
        });
        $(".suggested-products").owlCarousel({
            loop: true,
            center: true,
            items: 2,
            lazyLoad: true,

            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
    });
    let quantity = $('#quan');
    let count = quantity.data('range');
    let plus = $('.product-page-qty-plus');
    let minus = $('.product-page-qty-minus');
    let selected_variation_id = $('.variation_id').val();
    let selected_variation_name = $('.variation_name').val();
    $('.variation-option').on('click', function () {
        $('.variation-option').removeClass('option-selected');
        selected_variation_name = $(this).data('vname');
        if ($(this).hasClass('option-disabled')) {
            notification_message('Sorry this variation is out of stock', 'fa fa-info-circle', 'warning')
        } else {
            let id = $(this).data('vid');
            let discount_price = $(this).data('discount');
            let price = $(this).data('price');
            let quantity_instance = $(this).data('quantity');
            if (discount_price !== 'empty') {
                bind_method(format_currency(discount_price), 'price-mini');
                $('.product-price').html(`
								${format_currency(discount_price)}
									<span>${get_discount(price, discount_price)}</span>
								`);
                bind_method(format_currency(price), 'product-discount-price');
                console.log(format_currency(price));
                $('.product-discount-price').show();
                $('.pr_price_hidden').val(discount_price);
            } else {
                $('.pr_price_hidden').val(price);
                bind_method(format_currency(price), 'price-mini');
                bind_method(format_currency(price), 'product-price');
                $('.product-discount-price').hide();
            }
            count = quantity_instance * 1;
            quantity.val(1);
            minus.prop("disabled", true);
            plus.prop("disabled", false);
            selected_variation_id = $(this).data('vid');
            $(this).addClass('option-selected');
        }
    });

    // noinspection JSJQueryEfficiency
    $(".product-page-qty-plus").on('click', function () {
        var currentVal = parseInt($(this).prev(".product-page-qty-input").val(), 10);

        if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;

        $(this).prev(".product-page-qty-input").val(currentVal + 1);
    });

    // noinspection JSJQueryEfficiency
    $(".product-page-qty-minus").on('click', function () {
        var currentVal = parseInt($(this).next(".product-page-qty-input").val(), 10);
        if (currentVal == "NaN") currentVal = 1;
        if (currentVal > 1) {
            $(this).next(".product-page-qty-input").val(currentVal - 1);
        }
    });
    plus.on('click', function () {
        minus.prop("disabled", false);
        if (quantity.val() >= count) {
            plus.prop("disabled", true);
        }
    });
    minus.on('click', function () {
        plus.prop("disabled", false);
        if (quantity.val() <= 1) {
            minus.prop("disabled", true);
        }
    });
    quantity.on('input', function () {
        if (quantity.val() > count) {
            quantity.val(count)
        } else if (quantity.val() === '0') {
            quantity.val(1)
        }
    });
    $('.submit-cart').on('click', function (e) {
        e.preventDefault();
        let quantity_instance = quantity.val();
        let variation_id = selected_variation_id;
        let product_id = $('.product_id').val();
        $.ajax({
            url: base_url + 'ajax/quick_view_add',
            method: 'POST',
            data: {
                product_id: product_id,
                variation_id: variation_id,
                quantity: quantity_instance
            },
            success: () => {
                window.location.href = base_url + 'cart';
            },
            error: () => {
                notification_message('Sorry an error occurred somewhere', 'fa fa-info-circle', 'warning');
            }
        })

    });

    $('.wishlist-cta').on('click', function () {
        let product_id = $('.product_id').val();
        $.ajax({
            url: base_url + 'ajax/favourite',
            method: 'POST',
            data: {
                id: product_id
            },
            success: response => {
                let parsed_response = JSON.parse(response);
                if (parsed_response.action === 'remove') {
                    $('.wishlist-cta').html('Add to Wishlist');
                } else {
                    $('.wishlist-cta').html('Remove from Wishlist');
                }
                notification_message(parsed_response.msg, 'fa fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again ', 'fa fa-info-circle', error);
            }
        })
    })
</script>
<?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
</body>
</html>
