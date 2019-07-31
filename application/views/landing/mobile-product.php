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
    .body_text > img {
        width: auto;
        position: center;
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
            <a style="text-decoration: none;" href="<?= base_url('catalog/' . $category_detail->slug.'/'); ?>"><p
                        class="margin-0"><img src="<?= base_url('assets/svg/back.svg'); ?>" alt="Back button"
                                              style="height: 14px; width: 14px; margin-right: 8px;"><span
                            class="redirect-text">Go back to <?= ucwords($category_detail->name); ?></span>
                </p></a>
        </div>
    </div>
    <div class="custom-card">
        <div class="container">
            <div class="owl-carousel products-gallery">
                <?php foreach ($galleries as $gallery) : ?>
                    <div>
                        <img class="product-image" src="<?= PRODUCTS_IMAGE_PATH . $gallery->image_name; ?> "
                             alt="<?= $product->product_name; ?>"/>
                    </div>
                <?php endforeach; ?>
<!--                <span class="product-discount-overlay" style="z-index: 10000" id="counter"></span>-->
            </div>
        </div>
    </div>
    <div class="custom-card">
        <div class="container">
            <p class="seller-name">Seller - <a href="<?= base_url('seller/' .siteurlify( $product->store_name, $product->seller_id)); ?>" title="<?= $product->store_name; ?>"><?= ucwords($product->store_name); ?></a></p>
            <p class="product-name"><?= ucwords($product->product_name); ?></p>
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
                <p class="product-price">
                    <?= ngn($var->discount_price); ?>
                    <span><?= get_discount($var->sale_price, $var->discount_price) ?></span></p>
                <span class="product-discount-price"><?= ngn($var->sale_price); ?></span>
            <?php else : ?>
                <p class="product-price"><?= ngn($var->sale_price); ?></p>
                <p class="product-discount-price"></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="custom-card" style="margin-top: 5px;">
        <?= form_open('', 'id="cart-form"'); ?>
        <div class="container">
            <?php if (!empty($var->discount_price) && discount_check($var->discount_price, $var->start_date, $var->end_date)) : ?>
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
                            <input title="Add" data-range="<?= $var->quantity ?>" name="quantity"
                                   id="quan"
                                   class="product-page-qty product-page-qty-input quantity"
                                   type="text"
                                   value="1" disabled/>
                            <button type="button"
                                    class="product-page-qty product-page-qty-plus">+
                            </button>
                        </li>
                    </ul>
                    <span class="text-sm text-danger" id="quantity-text"></span>
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
                <?php $qty_stock_check = 0 ;?>
                <?php if (count($variations) > 1) : ?>
                    <div class="col-xs-12">
                        <p class="custom-product-page-option-title">Variation: </p>
                        <div class="row variation-option-list">
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
            // Product still in stock
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
                    <p style="cursor: pointer;" class="wishlist-cta">Add to Wishlist</p>
                <?php else: ?>
                    <p style="cursor: pointer;" class="wishlist-cta">Remove from Wishlist</p>
                <?php endif; ?>
            <?php else: ?>
                <a style="text-decoration: none; cursor: pointer;" href="<?= base_url('login') ?>"><p class="wishlist-cta">Add to
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
                    <img src="<?= base_url('assets/svg/delivery-truck.svg'); ?>" alt="Delivery Truck"
                         style="height: 30px; width: 35px;">
                </div>
                <div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
                    <p class="delivery-text">Onitshamarket delivery available, get it within 5 business days of
                        order</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
                    <img src="<?= base_url('assets/svg/return.svg'); ?>" alt="Delivery Truck"
                         style="height: 30px; width: 35px;">
                </div>
                <div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
                    <p class="delivery-text">Free 7 day return.</p>
                </div>
            </div>
            <?php if( !empty( $product->product_warranty) ) : ?>
                <div class="row" style="margin-top: 14px;">
                    <div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
                        <img src="<?= base_url('assets/svg/warranty.svg'); ?>" alt="Warranty"
                             style="height: 30px; width: 35px;">
                    </div>
                    <div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
                        <p class="delivery-text">This product has the following warranty</p>
                        <p class="editor-text"><?= html_entity_decode($product->product_warranty); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="container close-panel" data-target="overview_data">
        <p class="text-break" style="">
            Overview
            <span style="color: #4c4c4c !important; float: right">
                <i class="fas fa-minus close-panel" aria-hidden="true" data-target="overview_data"></i>
            </span>
        </p>
    </div>

    <div class="custom-card" id="overview_data" style="margin-top: 5px;">
        <div class="container">
            <?php if (!empty($product->product_line)) : ?>
                <p class="block-title close-panel" data-target="title_vl" style="margin-top: 5px;">Product Shop <span
                            style="color: #4c4c4c !important; float: right"><i
                                class="fas fa-minus close-panel"
                                aria-hidden="true"
                                data-target="title_vl"></i></span></p>
                <p class="body_text" id="title_vl"><?= $product->product_line; ?></p>
                <hr/>
            <?php endif; ?>

            <?php if (!empty($product->product_description)) : ?>
                <p class="block-title close-panel" data-target="description_vl">Product Description <span
                            style="color: #4c4c4c !important; float: right"><i
                                class="fas fa-minus close-panel"
                                aria-hidden="true"
                                data-target="description_vl"></i></span></p>
                <p id="description_vl" class="body_text" style="font-size: 13px;">
                    <?= word_limiter(html_entity_decode($product->product_description), 80); ?>
                    <?php if (str_word_count($product->product_description, 0) > 40) : ?>
                        <span><a style="text-decoration: none; color: #0b6427" href="<?= base_url( urlify($product->product_name, $product->id) . 'description/'); ?>">Read More</a> </span>
                    <?php endif; ?>
                </p>
                <hr/>
            <?php endif; ?>

            <?php if (!empty($product->in_the_box)) : ?>
                <p class="block-title close-panel" data-target="box_vl">What you will find in the box <span
                            style="color: #4c4c4c !important; float: right"><i
                                class="fas fa-plus close-panel"
                                aria-hidden="true"
                                data-target="box_vl"></i></span></p>
                <p class="body_text" style="display: none; font-max-size: 13px;" id="box_vl">
                    <?= html_entity_decode($product->in_the_box); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
    <?php $specs = json_decode($product->attributes); ?>
    <?php if(!empty( $specs ) ) :  ?>
        <div class="container close-panel" data-target="full_spec">
            <p class="text-break">
                Full Specifications
                <span style="color: #4c4c4c !important; float: right">
                    <i class="fas fa-minus close-panel" aria-hidden="true" data-target="full_spec"></i>
                </span>
            </p></div>
        <div class="custom-card" id="full_spec" style="margin-top: 5px;">
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Specification</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php if (!empty($specs)): foreach ($specs as $spec => $value) : ?>
                    <tr style="font-max-size: 13px;">
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
    <?php endif; ?>

    <div class="container close-panel" data-target="rating_overview">
        <p class="text-break" style="">
            Ratings and Reviews
            <span style="color: #4c4c4c !important; float: right">
                <i class="fas fa-minus close-panel" aria-hidden="true" data-target="rating_overview"></i>
            </span>
        </p>
    </div>
    <div class="custom-card" id="rating_overview" style="margin-top: 5px;">
        <div class="container">
            <p class="block-title" style="margin-top: 5px;">Total Ratings <span><a
                            style="text-decoration: none; color: #0b6427"
                            href="<?= base_url(urlify($product->product_name, $product->id) . 'add_rating_review/'); ?>">Write a review</a> </span>
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
    <div class="container close-panel" data-target="customer_qa">
        <p class="text-break" style="">
            Customer Questions
            <span style="color: #4c4c4c !important; float: right">
                <i class="fas fa-minus close-panel" aria-hidden="true" data-target="customer_qa"></i>
            </span>
        </p>
    </div>
    <div class="custom-card" id="customer_qa" style="margin-top: 5px;">
        <div class="container">
            <div>
                <?php if (count($questions) < 1) : ?>
                    <div class="gap">
                        <h4 class="text-center">No question has been asked on this product yet, be the
                            first to ask. </h4>
                    </div>
                <?php endif ?>
                <form class="product-page-qa-form" id="question_form" onsubmit="javascript:void(0);">
                    <div class="row" data-gutter="10">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input class="form-control" type="text" required id="question"
                                       placeholder="Have a question? Feel free to ask."/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input class="btn btn-primary btn-block qna-btn"
                                   data-user="<?= !is_null($profile) ? (!empty( $profile->display_name)) ? $profile->display_name :  $profile->first_name . ' ' . $profile->last_name : ''; ?>"
                                   type="submit" value="Ask"/>
                        </div>
                    </div>
                </form>
                <?php if (count($questions)):
                    $x = 1;
                    foreach ($questions as $question) : ?>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">
                                    <?= $question->question ?>
                                    <a class="product-review-rate pull-right upvote"
                                       data-qid="<?= $question->id; ?>" href="javascript:void(0)"
                                       title="Find this question helpful?"><i
                                                class="fas fa-thumbs-up"></i><?= $question->upvotes; ?>
                                    </a>
                                </p>
                                <p class="product-page-qa-meta">asked by <?= $question->display_name ?>
                                    on <?= neatDate($question->qtimestamp) . ' ' . neatTime($question->qtimestamp); ?></p>
                            </div>
                            <?php if (!empty($question->answer)) : ?>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text"><?= $question->answer; ?></p>
                                    <p class="product-page-qa-meta">answered
                                        on <?= neatDate($question->atimestamp); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ($x == 3): ?>
                                <div class="gap-small">
                                    <a style="text-decoration: none; color: #fff;"
                                       href="<?= base_url(urlify($product->product_name, $product->id) . 'reviews'); ?>">
                                        <button class="btn btn-block btn-default seemore-btn">View all question and
                                            answers
                                        </button>
                                    </a>
                                </div>
                                <?php break; endif; ?>
                        </article>
                        <?php $x++;
                    endforeach;
                endif; ?>
            </div>
        </div>
    </div>

    <!-- You might also like-->
    <?php $excludes = array(); if (count($likes)) :   ?>
        <div class="container" style="margin-bottom: 5px;"><p class="text-break" style="">You might also like</p></div>
        <div class="custom-card">
            <div class="">
                <div class="owl-carousel suggested-products" data-count="<?= count($likes); ?>">
                    <?php foreach ($likes as $like) : ?>
                        <a style="text-decoration: none"
                           href="<?= base_url(urlify($like->product_name, $like->id)); ?>">
                            <img class="suggested-image" style="width: 80px"
                                 src="<?= PRODUCTS_IMAGE_PATH . $like->image_name; ?> "/>
                            <p class="suggested-image-text"><?= character_limiter($like->product_name, 15); ?></p>
                            <span class="text-bold text-center"><?= $like->item_left; ?> left</span>
                        </a>
                    <?php
                        array_push($excludes, $like->id);
                    endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- /You might also like-->

    <!-- Recently viewed-->
    <?php
    array_push($excludes, $product->id);
        if ($this->session->userdata('logged_in')):
        $recently_viewed = $this->user->get_recently_viewed($this->session->userdata('logged_id'), $excludes);
            if( count( $excludes ) && count( $recently_viewed)) : ?>
            <div class="gap-top"></div>
            <div class="container" style="margin-bottom: 5px;"><p class="text-break" style="">Recently Viewed</p></div>
            <div class="custom-card">
                <div class="">
                    <div class="owl-carousel suggested-products" data-count="<?= count($recently_viewed); ?>">
                        <?php foreach ($recently_viewed as $viewed) : ?>
                            <a style="text-decoration: none"
                               href="<?= base_url(urlify($viewed->product_name, $viewed->id)); ?>">
                                <img class="suggested-image" style="width: 80px"
                                     src="<?= PRODUCTS_IMAGE_PATH . $viewed->image_name; ?> "/>
                                <p class="suggested-image-text"><?= character_limiter($viewed->product_name, 15); ?></p>
                                <span class="text-bold text-center"><?= $viewed->item_left; ?> left</span>
                            </a>
                            <?php
                        endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <!--Recently viewed-->

<?php endif; ?>
<?php $this->load->view('landing/resources/modal_popup'); ?>
<script type="text/javascript"> let csrf_token = '<?= $this->security->get_csrf_hash(); ?>';</script>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/mobile.js'); ?>"></script>
<script>
    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
        let x = 1;
        $('.overview_data > .container > div').find('img').each(function(){
            console.log( x ); x++;
            $(this).css({'max-width' : '40%', 'position' : 'center'});
        });
    }, false);

    $(document).ready(function () {
        $('.close-panel').on('click', function () {
            let target = $(this).data('target');
            if ($(this).hasClass('fas')) {
                $(this).toggleClass("fa-minus fa-plus");
                $(`#${target}`).toggle()
            }
            $(this).find('.fa').toggleClass("fa-minus fa-plus");
            $(`#${target}`).toggle()

        });
        $(".products-gallery").owlCarousel({
            items: 1,
            loop: true,
            autoplay: 2000,
            lazyLoad: true,
            onInitialized : counter,
            onTranslated: counter
        });

        function counter(event) {
            let element   = event.target;       
            let items     = event.item.count;     
            let item      = event.item.index + 1; 
            $('#counter').html(item+" of "+items)
        }

        let loop = true;
        var x =  $('.suggested-products').data('count');
        if( x <= 3 ) {loop = false;}
        $(".suggested-products").owlCarousel({
            loop: loop,
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
        $('#quantity-text').text(''); 
        $('.variation-option').removeClass('option-selected');
        selected_variation_name = $(this).data('vname');
        if ($(this).hasClass('option-disabled')) {
            notification_message('Sorry this variation is out of stock', 'fas fa-info-circle', 'warning')
        } else {
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

    $(".product-page-qty-plus").on('click', function () {
        var currentVal = parseInt($(this).prev(".product-page-qty-input").val(), 10);

        if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;
        $(this).prev(".product-page-qty-input").val(currentVal + 1);
    });

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
            $('#quantity-text').html('There are only ' + count + ' item(s) left');
            plus.prop("disabled", true);
        }
    });
    minus.on('click', function () {
        $('#quantity-text').text('');
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
                notification_message('Sorry an error occurred somewhere', 'fas fa-info-circle', 'warning');
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
                notification_message(parsed_response.msg, 'fas fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again ', 'fas fa-info-circle', error);
            }
        })
    });
    $('.upvote').on('click', function () {
        var qid = $(this).data('qid');
        $.ajax({
            url: base_url + 'ajax/upvote',
            method: 'POST',
            data: {qid: qid},
            success: response => {
                let parsed_response = JSON.parse(response);
                notification_message(parsed_response.msg, 'fas fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again. ', 'fas fa-info-circle', "error");
            }
        })

    });
    $('#question_form').on('submit', function (e) {
        e.preventDefault();
        let question = $('#question').val();
        var btn = $('.qna-btn');
        btn.val("Processing...");
        btn.removeClass('btn-primary').addClass('btn-default');
        btn.prop('disabled', true);
        let display_name = btn.data('user');
        if (display_name === "") {
            $('#modal_popup').modal('show');
        } else {
            $.ajax({
                url: base_url + 'ajax/ask_a_question',
                method: 'POST',
                data: {
                    'pid': product_id,
                    'display_name': display_name,
                    'question': question,
                    'data': data},
                success: response => {
                    let parsed_response = JSON.parse(response);
                    $('#question').val("");
                    btn.prop('disabled', false);
                    btn.val("Ask");
                    btn.removeClass('btn-default').addClass('btn-primary');
                    notification_message(parsed_response.msg, 'fas fa-info-circle', parsed_response.status);
                },
                error: () => {
                    notification_message('An error occurred while submitting your question. Try again.', 'fas fa-info-circle', "error");
                    btn.prop('disabled', false);
                    btn.val("Ask");
                    btn.removeClass('btn-default').addClass('btn-primary');
                }
            })
        }
    });
    $('#form_ask_id').on('submit', function (e) {
        e.preventDefault();
        let question = $('#question').val();
        var btn = $('.qna-btn');
        let display_name = $('#question_display_name').val();
        data = $('#question_data').val();
        $.ajax({
            url: base_url + 'ajax/ask_a_question',
            method: 'POST',
            data: {'pid': product_id, 'display_name': display_name, 'question': question, 'data': data},
            success: response => {
                let parsed_response = JSON.parse(response);
                $('#modal_popup').modal('hide');
                $('#question').val("");
                btn.prop('disabled', false);
                btn.value = "Ask";
                btn.removeClass('btn-default').addClass('btn-primary');
                notification_message(parsed_response.msg, 'fas fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('An error occurred while submitting your question. Try again.', 'fas fa-info-circle', "error");
                btn.prop('disabled', false);
                btn.value = "Ask";
                btn.removeClass('btn-default').addClass('btn-primary');
            }
        })
    });
    $('#modal_popup').on('hide.bs.modal', function(){
        let btn = $('.qna-btn');
        btn.prop('disabled', false);
        btn.val("Ask");
        btn.removeClass('btn-default').addClass('btn-primary');
    });
</script>
<?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
</body>
</html>
