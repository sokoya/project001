<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/eazyzoom/easyzoom.css'); ?>">
<style>
    .variation-option {
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #242424;
        outline: 1px solid #d0d0d0;
        padding: 3px;
        width: 100%;
        text-align: center;
    }

    .seemore-btn {
        background: #468c46;
        color: #fff;
        border-radius: 0;
    }

    .option-selected, .variation-option:hover {
        outline: 1px solid #0b6427;
        color: #0b6427;
        cursor: pointer;
    }

    .option-disabled {
        color: #bebebe;
        text-decoration: line-through;
    }

    .variation-option-list {
        position: relative;
        top: 7px;
    }

    .option-selected, .variation-option:hover {
        outline: 1px solid #0b6427;
        color: #0b6427;
        cursor: pointer;
    }

    .option-disabled {
        color: #bebebe;
        text-decoration: line-through;
    }

    .product {
        min-height: unset !important;
    }

    a {
        color: #0b6427;
    }

    a:hover {
        color: #0b6427;
    }

    a:visited {
        color: #0b6427;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/head_img') ?>
    <?php $this->load->view('landing/resources/head_menu') ?>
    <div class="container">
        <?php if ($product->product_status !== 'approved') : ?>
            <div class="row">
                <div class="gap-large"></div>
                <h2 class="text-center">Oops! The product you looking for is not active.</h2>
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
            <header class="page-header">
                <ol class="breadcrumb page-breadcrumb c-brc">
                    <li><a href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('catalog/' . $category_detail->slug . '/'); ?>"><?= ucwords($category_detail->name); ?></a>
                    </li>
                    <li class="active c-a-brc"><?= ucwords($product->product_name); ?></li>
                </ol>
            </header>
            <div class="row">
                <div class="col-md-5" style="height:450px;">
                    <div class="product-slider-for" style="visibility: hidden ;height: 400px;">
                        <div class="">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="<?= PRODUCTS_IMAGE_PATH . $featured_image->image_name; ?>"
                                   class="">
                                    <img
                                            style="max-width:95%"
                                            src="https://res.cloudinary.com/onitshamarket/image/upload/w_510,h_500,c_pad/onitshamarket/product/<?= $featured_image->image_name; ?>"
                                            alt="<?= $product->product_name; ?>"
                                            title="<?= ucwords($product->product_name) ?>"/>
                                </a>
                            </div>
                        </div>
                        <?php if (count($galleries) > 1) : ?>
                            <?php foreach ($galleries as $gallery) : ?>
                                <?php if ($featured_image->image_name != $gallery->image_name): ?>
                                    <div class="">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="<?= PRODUCTS_IMAGE_PATH . $gallery->image_name; ?>"
                                               class=""
                                               title="<?= ucwords($product->product_name) ?>">
                                                <img
                                                        style="width:95%"
                                                        src="https://res.cloudinary.com/onitshamarket/image/upload/w_510,h_500,c_pad/onitshamarket/product/<?= $gallery->image_name; ?>"
                                                        alt="Onitshamarket <?= $category_detail->name; ?>"
                                                        title="<?= ucwords($product->product_name) ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if (count($galleries) > 1) : ?>
                        <div class="product-slider-nav" style="visibility: hidden ;height: 50px;margin-top:40px;">
                            <div style="margin:auto;">
                                <img
                                        style="max-width:40px;"
                                        src="https://res.cloudinary.com/onitshamarket/image/upload/w_510,h_500,c_pad/onitshamarket/product/<?= $featured_image->image_name; ?>"
                                        alt="<?= character_limiter($product->product_name, 10); ?>"
                                        title="<?= ucwords($product->product_name) ?>"/>
                            </div>
                            <?php if (count($galleries) > 1) : ?>
                                <?php foreach ($galleries as $gallery) : ?>
                                    <?php if ($featured_image->image_name != $gallery->image_name): ?>
                                        <div>
                                            <img
                                                    style="max-width:40px;"
                                                    src="<?= PRODUCTS_IMAGE_PATH . $gallery->image_name; ?>"
                                                    alt="<?= character_limiter($product->product_name, 5); ?>"
                                                    title="<?= ucwords($product->product_name) ?>"/>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-7" style="height:450px;">
                    <div class="row" data-gutter="10">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-5">
                                        <ul class="product-page-product-rating">
                                            <?= rating_star_generator($rating_counts); ?>
                                        </ul>
                                        <p class="product-page-product-rating-sign">
                                            <?php if (count($rating_counts)) : ?>
                                                <a href="#description-tab"><?= count($rating_counts); ?> customer
                                                    reviews</a> <strong></strong>
                                            <?php else : ?>
                                                <a href="#description-tab">Be the first to rate this product</a><br />
                                                <strong><?= is_null($product->quantity) ? 0 : $product->quantity; ?>
                                                    SOLD</strong>
                                            <?php endif; ?>
                                        </p>
                                        <p class="product-page-desc">
                                            <strong
                                                    class="custom-product-title"><?= character_limiter(ucwords($product->product_name), 60, '...'); ?></strong>
                                        </p>
                                        <p class="text-sm pr-id">
                                            <strong>Product ID :</strong> <?= $product->sku; ?>
<!--                                            <a href="#" id="to_sell">Have an item like this to sell? Create One.</a>-->
                                        </p>
                                        <p class="text-sm text-uppercase">
                                            <strong>Seller : </strong><a href="#" id="pr-seller">
                                                <?= ucwords($product->legal_company_name); ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <table class="table table-hover table-striped product-page-features-table">
                                            <tbody>
                                            <?php if (!empty($product->model)) : ?>
                                                <tr>
                                                    <td>Model:</td>
                                                    <td><?= ucwords($product->model); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if (!empty($product->main_colour)): ?>
                                                <tr>
                                                    <td>Main Colour:</td>
                                                    <td><?= ucwords($product->main_colour); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if (!empty($product->colour_family)): ?>
                                                <tr>
                                                    <td>Colour Family:</td>
                                                    <td><?php $colour_family = json_decode($product->colour_family);
                                                        foreach ($colour_family as $family) echo trim(ucfirst($family)) . ', ';
                                                        ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if (!empty($product->main_material)): ?>
                                                <tr>
                                                    <td>Main Material:</td>
                                                    <td><?= ucwords($product->main_material); ?>
                                                        <?php if (!empty($product->attributes)) : ?>
                                                            <a href="#description-tab">See more...</a>
                                                        <?php endif;?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                        <?php if( $product->from_overseas == 1) :?>
                                            <div class="well well-sm">
                                                <span class="delivery-message">
                                                    <i class="fas fa-plane-arrival text-success"></i><b class="text-success">Shipped from overseas</b> <br />* No cancellation after ordering. Return allowed only for wrong and defective item <br />* No warranty, * Payment on demand
                                                </span>
                                            </div>
                                        <?php else: ?>
                                            <div class="well well-sm">
                                                <div class="row">
                                                    <div class="col-sm-4 delivery-message" style="padding-right: 0px;">
                                                        <img src="<?= base_url('assets/svg/delivery-truck.svg'); ?>" alt="Delivery Truck"
                                                             style="height: 30px; width: 35px;">
                                                        <span class="text-sm">Fast, reliable delivery from warehouses</span>
                                                    </div>
                                                    <div class="col-sm-4 delivery-message" style="padding-right: 0px;">
                                                        <img src="<?= base_url('assets/svg/return.svg'); ?>" alt="Delivery Truck"
                                                             style="height: 30px; width: 35px;">
                                                        <span class="text-sm">100% product quality <?php if( !empty( $product->product_warranty)) echo 'with warranty'; ?></span>
                                                    </div>
                                                    <div class="col-sm-4 delivery-message" style="padding-right: 0px;">
                                                        <img src="<?= base_url('assets/svg/warranty.svg'); ?>" alt="Warranty"
                                                             style="height: 30px; width: 35px;">
                                                        <span class="text-sm">Quick, reliable & cost-effective</span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>

                                </div>
                                <hr class="product-line"/>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p class="product-page-price">
                                            <?php if (discount_check($var->discount_price, $var->start_date, $var->end_date)) : ?>
                                                <span class="price-cs ds-price"><?= ngn($var->discount_price); ?></span>
                                                <span
                                                        class="product-page-price-list price-lower dn-price"><?= ngn($var->sale_price); ?></span>
                                            <?php else : ?>
                                                <span class="price-cs ds-price"></span>
                                                <span class="price-cs dn-price"><?= ngn($var->sale_price); ?></span>
                                            <?php endif; ?>

                                            <input type="hidden" name="variation_id" class="variation_id"
                                                   value="<?= $var->id; ?>">
                                            <input type="hidden" name="product_id" class="product_id"
                                                   value="<?= $product->id; ?>">
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <ul style="float: right; padding: 7px;" class="product-page-price product-page-share-item">
                                            <li>
                                                <a target="_blank" title="Share <?= $product->product_name;?> on WhatsApp" style="font-size: 30px; padding: 10px;color:#075e54;" href="whatsapp://send?text=<?= current_url(); ?>" data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li>
                                                <a target="_blank" title="Share <?= $product->product_name;?> on facebook" style="font-size: 30px; padding: 10px;color:#4267b2;" href="http://www.facebook.com/sharer.php?u=<?= current_url(); ?>" target="_blank" ><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a target="_blank" title="Share <?= $product->product_name;?> on Twitter" style="font-size: 30px; padding: 10px;color:#38A1F3;" href="https://twitter.com/home?status=<?= current_url(); ?>&amp;text=<?= $product->product_name; ?>&amp;hashtags=onitshamarket"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a target="_blank" title="Share <?= $product->product_name;?> on Telegram" style="font-size: 30px; padding: 10px;color:#0088cc;" href="tg://msg_url?url=<?= current_url(); ?>&text=<?= $product->product_name; ?>+Visit+<?= current_url(); ?>"><i class="fab fa-telegram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="product-line"/>
                                
                                <div class="product-variation">
                                    <?= form_open('', 'id="variation-form"'); ?>
                                    <?php if(in_array(strtolower($category_detail->name), array('fashion', 'clothing', 'jewelry', 'shoes'))) :?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5 class="custom-product-page-option-title">Size / Color:</h5>
                                            </div>
                                        </div>
                                    <?php endif?>
                                    <div class="row">
                                        <?php if (count($variations) > 0) : ?>
                                            <div class="col-md-7">
                                                <div class="row">

                                                    <div class="col-md-9">
                                                        <div class="row variation-option-list">
                                                            <?php $qty_stock_check = 0; ?>
                                                            <?php foreach ($variations as $variation): ?>
                                                                <div class="col-xs-6">
                                                                    <p title="<?= $variation['variation']; ?>"
                                                                       data-price="<?= $variation['sale_price']; ?>"
                                                                        <?php if (discount_check($variation['discount_price'], $variation['start_date'], $variation['end_date'])) : ?>
                                                                            data-discount="<?= $variation['discount_price']; ?>"
                                                                        <?php else : ?>
                                                                            data-discount="empty"
                                                                        <?php endif; ?>
                                                                       data-vid="<?= $variation['id'] ?>"
                                                                       data-quantity='<?= $variation['quantity'] ?>'
                                                                       data-vname="<?= $variation['variation'] ?>"
                                                                       class="variation-option <?php if (count($variations) == 1) echo 'option-selected'; ?> <?php if ($variation['quantity'] == 0) echo 'option-disabled'; ?>">
                                                                        <b><?= trim($variation['variation']); ?></b>
                                                                    </p>
                                                                </div>
                                                                <?php if ($variation['quantity'] < 1) $qty_stock_check++; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-md-5 quan-u">
                                            <h5 class="custom-product-page-option-title">Quantity:</h5>
                                            <ul>
                                                <li class="product-page-qty-item">
                                                    <button type="button"
                                                            class="product-page-qty product-page-qty-minus">-
                                                    </button>
                                                    <input data-range="<?= $var->quantity; ?>" name="quantity"
                                                           id="quan"
                                                           class="product-page-qty product-page-qty-input quantity"
                                                           type="text"
                                                           value="1"/>
                                                    <button type="button"
                                                            class="product-page-qty product-page-qty-plus">+
                                                    </button>
                                                </li>
                                                <span class="text-sm text-danger" id="quantity-text"></span>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" style="display: none;">Submit</button>
                                    <?= form_close(); ?>
                                </div>
                                <div id="status"></div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 clearfix">
                                        <?php
                                        // Make A check to confirm if the product is still in stock
                                        if ($qty_stock_check == count($variations)) : ?>
                                            <button class="btn btn-block btn-primary c-hover" style="background:#49a251;border-color: #5ebd6f;" disabled
                                                    type="button">
                                                <i class="fa fa-shopping-cart"></i> Out of Stock
                                            </button>
                                        <?php else : ?>
                                            <button class="btn btn-block btn-primary add-to-cart c-hover"
                                                    type="button" <?php if (!empty($product->colour_family)) echo 'data-colour="colour"'; ?> <?php if (count($variations)) echo 'data-variation="variation"'; ?> >
                                                <i class="fa fa-shopping-cart"></i> Add to Cart
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($this->session->userdata('logged_in')):
                                        if ($favourite) :
                                            ?>
                                            <div class="col-md-6 col-lg-6">
                                                <a class="btn btn-block btn-default wishlist-cta"
                                                   data-pid="<?= $product->id; ?>"
                                                   href="javascript:void(0)"><i class="fa fa-star"></i>Remove From
                                                    Wishlist</a>
                                            </div>
                                        <?php else : ?>
                                            <div class="col-md-6 col-lg-6">
                                                <a class="btn btn-block btn-default wishlist-cta c-hover"
                                                   data-pid="<?= $product->id; ?>"
                                                   href="javascript:void(0)"><i class="fa fa-star-o"></i>Add to Wishlist</a>
                                            </div>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <div class="col-md-6 col-lg-6">
                                            <a class="btn btn-block btn-default c-hover"
                                               href="<?= base_url('login'); ?>"><i
                                                        class="fa fa-star-o"></i>Add to Wishlist</a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Specification details -->
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="tabbable product-tabs" id="description-tab">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#overview" data-toggle="tab"><i class="fa fa-cogs nav-tab-icon"></i>Overview</a>
                    </li>
                    <?php if (!empty($product->product_description)) : ?>
                        <li><a href="#full-spec" data-toggle="tab"><i class="fa fa-list nav-tab-icon"></i>Full
                                Description</a>
                        </li>
                    <?php endif; ?>
                    <li><a href="#review" data-toggle="tab"><i class="fa fa-star nav-tab-icon"></i>Rating
                            and
                            Reviews</a>
                    </li>
                    <li><a href="#customer_qa" data-toggle="tab"><i class="fa fa-comment nav-tab-icon"></i>Customer Q&A</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="overview">
                        <div class="product-overview-section">
                            <?php if (!empty($product->product_line)) : ?>
                                <h3 class="product-overview-title pr-over"> Product Frontline</h3>
                                <div class="product-overview-desc">
                                    <p><?= $product->product_line; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($product->dimensions)): ?>
                                <h3 class="product-overview-title pr-over">Measurement</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->dimensions; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product->weight)) : ?>
                                <h3 class="product-overview-title pr-over">Weight</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->weight; ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($product->in_the_box)): ?>
                                <h3 class="product-overview-title pr-over">What you will find in the box</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->in_the_box; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product->highlights)): ?>
                                <h3 class="product-overview-title pr-over">Highlights</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->highlights; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php $specifications = json_decode($product->attributes);
                            if (!empty($specifications)) : ?>
                                <table class="table prod_description">
                                    <thead>
                                    <tr>
                                        <th class="pr-over">Specs:</th>
                                        <th class="pr-over">Details:</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($specifications as $specification => $specification_value): ?>
                                        <tr>
                                            <td class="product-page-features-table-specs"><?= ucwords(trim($specification)); ?></td>
                                            <td class="product-page-features-table-details">
                                                <?php
                                                if (is_array($specification_value)):
                                                    foreach ($specification_value as $key) echo ucwords(trim($key)) . ', ';
                                                else: echo ucwords(trim($specification_value));
                                                endif;
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>

                            <?php if (!empty($product->certifications)): ?>
                                <h3 class="product-overview-title pr-over">Certifications</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?php
                                        $certifications = json_decode($product->certifications);
                                        if ($certifications) {
                                            foreach ($certifications as $type) echo '<strong>' . $type . '</strong> ';
                                        }
                                        ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product->warranty_type)): ?>
                                <h3 class="product-overview-title pr-over">Warranty Type</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        This product has the following warranty :
                                        <?php
                                        $warranty_type = json_decode($product->warranty_type);
                                        foreach ($warranty_type as $type) echo '<strong>' . $type . '</strong> ';
                                        ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product->product_warranty)): ?>
                                <h3 class="product-overview-title pr-over">Product Warranty</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->product_warranty; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product->warranty_address)): ?>
                                <h3 class="product-overview-title pr-over">Warranty Address</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->warranty_address; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="full-spec">

                        <?php if (!empty($product->product_description)): ?>
                            <h3 class="product-overview-title pr-over">Product Description</h3>
                            <div class="product-overview-desc">
                                <p style="text-wrap: normal">
                                    <?= $product->product_description; ?>
                                </p>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="tab-pane fade" id="review">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                                <ul class="product-page-product-rating product-rating-big">
                                    <?= rating_star_generator($rating_counts); ?>
                                    <li class="count">
                                        <?php $overall_rating = product_overall_rating($rating_counts); ?>
                                        <?= isset($overall_rating) ? $overall_rating : ''; ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="product-rate-list">
                                    <?= rating_bar_display($rating_counts); ?>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <?php
                                    if ($this->session->userdata('logged_in')) :
                                        $user = $this->product->get_rating_review('product_rating', 'rating_score', $profile->id, $product->id);
                                        if (!$user):
                                            ?>
                                            <div class="col-md-6">
                                                <div class='starrr' id='star1'></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-text"></div>
                                            </div>
                                        <?php elseif ($user): ?>
                                            <div id="starr-rating">
                                                <ul class="product-page-product-rating product-rating-big">
                                                    <?= single_user_rate($user->rating_score); ?>
                                                    <li class=""><span class="text-bold" style="font-size: 12px;"><a
                                                                    href="javascript:void(0)" class="update_rating">Update Rating</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="starr-rating-active" style="display: none;">
                                                <div class="col-md-6">
                                                    <div class='starrr' id='star1'></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-text"></div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="col-md-6">
                                                <div class='starrr' id='star1'></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-text"></div>
                                            </div>
                                        <?php endif; endif; ?>
                                </div>
                                <div id="review_submit"></div>
                                <form id="review_form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title of review*</label>
                                                <input type="text" name="title" placeholder="Title of the review"
                                                       id="review_title"
                                                       class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Display name*</label>
                                                <input type="text" name="display_name" placeholder="Display name"
                                                       id="review_name"
                                                       value="<?= !is_null($profile) ? (!empty($profile->display_name)) ? $profile->display_name : $profile->first_name . ' ' . $profile->last_name : ''; ?>"
                                                       class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Review</label>
                                        <textarea title="review" id="review_detail" name="review" rows="2"
                                                  class="form-control" required
                                                  placeholder="Write your review on this product."></textarea>
                                    </div>
                                    <?php if (is_null($profile)) : ?>
                                        <a href="<?= base_url('login'); ?>" class="btn btn-success"
                                           id="review_submit_button">Post Review</a>
                                    <?php else : ?>
                                        <input type="submit" class="btn btn-success" id="review_submit_button"
                                               value="Post Review">
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                        <article class="product-review">
                            <?php
                            if ($reviews) : $x = 1;
                                foreach ($reviews as $review) : ?>
                                    <div class="comment-block">
                                        <ul style="display: inline-block" class="product-caption-rating">
                                            <?= single_user_rate($review['rating_score']); ?>
                                        </ul>
                                    </div>
                                    <p class="comment-user"><strong>Reviewed
                                            by : </strong> <?= $review['display_name']; ?> <b> on :</b> <span
                                                class="comment-date"><?= neatDate($review['published_date']); ?></span>
                                    </p>
                                    <p class="comment-title"><strong>Title: </strong><?= $review['title']; ?></p>
                                    <p class="comment-detail"><strong>Content: </strong><?= $review['content']; ?></p>
                                    <hr class="comment-line"/>
                                    <?php if ($x == 50) : ?>
                                        <a style="text-decoration: none; color: #fff;"
                                           href="<?= base_url(urlify($product->product_name, $product->id) . 'reviews'); ?>">
                                            <button class="btn btn-block ">View all reviews</button>
                                        </a>
                                        <?php break; endif; ?>
                                    <?php $x++; endforeach; ?>
                            <?php endif; ?>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="customer_qa">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
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
                                                   data-user="<?= ($this->session->userdata('logged_in')) ? empty($profile->display_name) ? $profile->first_name . ' ' . $profile->last_name : $profile->display_name : ''; ?>"
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
                                                    <?php if ($this->session->userdata('logged_in')) : ?>
                                                        <a class="product-review-rate pull-right upvote"
                                                           data-qid="<?= $question->id; ?>" href="javascript:void(0)"
                                                           title="Find this question helpful?"><i
                                                                    class="fa fa-thumbs-up"></i><?= ($question->upvotes != 0) ? $question->upvotes : ''; ?>
                                                        </a>
                                                    <?php endif; ?>
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
                                            <?php if ($x == 10): ?>
                                                <div class="gap-small">
                                                    <a style="text-decoration: none; color: #fff;"
                                                       href="<?= base_url(urlify($product->product_name, $product->id) . 'reviews'); ?>">
                                                        <button class="btn btn-block seemore-btn">View all question and
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
                </div>
            </div>

            <div class="gap"></div>
            <?php $excludes = array(); ?>
            <?php if (count($likes))  : ?>
                <div class="container">
                    <h3 class="widget-title">You Might Also Like</h3>
                    <div class="row" data-gutter="15">
                        <?php foreach ($likes as $like): ?>
                            <div class="col-md-2 col-md-12">
                                <div class="product">
                                    <?php if ($like->views >= 100): ?>
                                        <ul class="product-labels">
                                            <li>hot deal</li>
                                        </ul>
                                    <?php endif; ?>
                                    <?php if (discount_check($like->discount_price, $like->start_date, $like->end_date)): ?>
                                        <ul class="product-labels">
                                            <li><?= get_discount($like->sale_price, $like->discount_price); ?></li>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="product-img-wrap">
                                        <img class="product-img lazy"
                                             src="<?= base_url('assets/load.gif'); ?>"
                                             data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?=$like->image_name; ?>"
                                             alt="<?= $like->product_name; ?>"
                                             title="<?= $like->product_name; ?>">
                                    </div>
                                    <a class="product-link"
                                       href="<?= base_url(urlify($like->product_name, $like->id)); ?>"></a>
                                    <div class="product-caption">
                                        <ul class="product-caption-rating">
                                            <?php
                                            $overall_rating = $this->product->get_rating_counts($like->id);
                                            echo rating_star_generator($overall_rating);
                                            ?>
                                            <li class="pull-right"><span class="text-danger"
                                                                         style="font-size: 12px;"><strong><?= $like->item_left; ?>
                                                        left</strong></span></li>
                                        </ul>
                                        <h5 class="product-caption-title"><?= character_limiter(ucwords($like->product_name), 30, '...'); ?></h5>
                                        <div class="product-caption-price">
                                            <?php if (discount_check($like->discount_price, $like->start_date, $like->end_date)) : ?>
                                                <span class="product-caption-price-new"
                                                      style="font-size:12px;"><?= ngn($like->discount_price); ?></span>
                                                <span class="product-caption-price-old pull-right"
                                                      style="font-size:12px;"><?= ngn($like->sale_price); ?></span>
                                            <?php else : ?>
                                                <span class="product-caption-price-new"
                                                      style="font-size:12px;"><?= ngn($like->sale_price); ?> </span>
                                            <?php endif; ?>
                                        </div>
                                        <ul class="product-caption-feature-list">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php array_push($excludes, $like->id); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($this->session->userdata('logged_in')):
                array_push($excludes, $product->id);
                $recently_viewed = $this->user->get_recently_viewed($this->session->userdata('logged_id'), $excludes);
                if ($recently_viewed && count($recently_viewed)) : ?>
                    <div class="gap gap-small"></div>
                    <div class="container">
                        <h3 class="widget-title">Products you recently viewed</h3>
                        <div class="row" data-gutter="15">
                            <?php foreach ($recently_viewed as $viewed): ?>
                                <div class="col-md-2">
                                    <div class="product">
                                        <?php if ($viewed->views >= 100): ?>
                                            <ul class="product-labels">
                                                <li>hot</li>
                                            </ul>
                                        <?php endif; ?>
                                        <div class="product-img-wrap">
                                            <img class="product-img lazy"
                                                 src="<?= base_url('assets/img/load.gif'); ?>"
                                                 data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?=$viewed->image_name; ?>"
                                                 alt="<?= $viewed->product_name; ?>"
                                                 title="<?= $viewed->product_name; ?>">
                                        </div>
                                        <a class="product-link"
                                           href="<?= base_url(urlify($viewed->product_name, $viewed->id)); ?>"></a>
                                        <div class="product-caption">
                                            <ul class="product-caption-rating">
                                                <?php
                                                $overall_rating = $this->product->get_rating_counts($viewed->id);
                                                echo rating_star_generator($overall_rating);
                                                ?>
                                                <li class="pull-right"><span class="text-danger"
                                                                             style="font-size: 12px;"><strong><?= $viewed->item_left; ?>
                                                            left</strong></span></li>
                                            </ul>
                                            <h5 class="product-caption-title"><?= character_limiter(ucwords($viewed->product_name), 30, '...'); ?></h5>
                                            <div class="product-caption-price">
                                                <?php if (discount_check($viewed->discount_price, $viewed->start_date, $viewed->end_date)) : ?>
                                                    <span class="product-caption-price-new"
                                                          style="font-size:12px;"><?= ngn($viewed->discount_price); ?></span>
                                                    <span class="product-caption-price-old pull-right"
                                                          style="font-size:12px;"><?= ngn($viewed->sale_price); ?></span>
                                                <?php else : ?>
                                                    <span class="product-caption-price-new"
                                                          style="font-size:12px;"><?= ngn($viewed->sale_price); ?> </span>
                                                <?php endif; ?>
                                            </div>
                                            <ul class="product-caption-feature-list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php
                    // recently_viewed and count
                endif; ?>
            <?php
                // Logged in check
            endif; ?>
        <?php
            // /endif product is valid
        endif; ?>
    </div>
    <div class="gap gap-small"></div>

    <div id="prod-confirmation" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p id="product-title">
                        This is a confirmation that the product <span
                                class="text text-danger"><?= ucwords($product->product_name); ?></span> has been added
                        to your cart
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Continue
                                Shopping
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" id="cart" class="btn btn-block btn-success">Go to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <?php $this->load->view('landing/resources/footer'); ?>
</div>

<?php $this->load->view('landing/resources/modal_popup'); ?>
<?php $this->load->view('landing/resources/script'); ?>
<script src="<?= base_url('assets/plugins/slick/slick.js') ?>"></script>
<script src="<?= base_url('assets/plugins/eazyzoom/easyzoom.js') ?>"></script>

<script type="text/javascript"> let csrf_token = '<?= $this->security->get_csrf_hash(); ?>';</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript">
    let product_id = <?= $product->id;?>;
    let data = "<?= ($this->session->userdata('logged_in')) ? $profile->email : ''; ?>";
    let user = "<?= !is_null($profile) ? $profile->id : '' ?>";
</script>
<script src="<?= $this->user->auto_version('assets/js/rating.js'); ?>"></script>
<script>
    var $easyzoom = $('.easyzoom').easyZoom();
    $(function () {
        $('.lazy').Lazy();
        $('.prod_description img').each(function () {
            $(this).addClass('img-responsive');
            $(this).attr('Onitshamarket');
        });
    });
    let quantity = $('#quan');
    let selected_variation_id = $('.variation_id').val();
    let count = quantity.data('range');
    let plus = $('.product-page-qty-plus');
    let minus = $('.product-page-qty-minus');

    function format_currency(str) {
        return '₦' + str.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
    }

    $('.variation-select').on('change', function () {
        let id = $(this).children(":selected").data('id');
        let quantity = $('#quan');
        $('.variation_id').val(id);
        // let count = quantity.data('range');
        $.ajax({
            url: base_url + "ajax/check_variation",
            method: "POST",
            data: {vid: id, 'csrf_carrito': csrf_token},
            success: function (response) {
                $.each(response, function (i, v) {
                    // change the variation id
                    if (v.discount_price) {
                        $('.ds-price').html(format_currency(v.discount_price));
                        $('.dn-price').show();
                        $('.dn-price').html(format_currency(v.sale_price));
                        $('.pr_price_hidden').val(v.discount_price);
                    } else {
                        $('.pr_price_hidden').val(v.sale_price);
                        $('.ds-price').html(format_currency(v.sale_price));
                        $('.dn-price').hide();
                    }
                    count = v.quantity * 1;
                    quantity.val(1);
                    minus.prop("disabled", true);
                    plus.prop("disabled", false);
                });
            },
            error: function (response) {
                alert('An error occurred')
            }
        });
    });


    $('.variation-option').on('click', function () {
        $('.variation-option').removeClass('option-selected');
        selected_variation_name = $(this).data('vname');
        if ($(this).hasClass('option-disabled')) {
            notification_message('Sorry this variation is out of stock', 'fas fa-info-circle', 'warning')
        } else {
            let discount_price = $(this).data('discount');
            let price = $(this).data('price');
            let quantity_instance = $(this).data('quantity');
            if (discount_price !== 'empty') {
                $('.ds-price').html(format_currency(discount_price));
                $('.dn-price').show();
                $('.dn-price').html(format_currency(price));
                $('.pr_price_hidden').val(discount_price);
                console.log(format_currency(price));
            } else {
                $('.pr_price_hidden').val(price);
                $('.ds-price').html(format_currency(price));
                $('.dn-price').hide();
            }
            count = quantity_instance * 1;
            quantity.val(1);
            minus.prop("disabled", true);
            plus.prop("disabled", false);
            selected_variation_id = $(this).data('vid');
            $(this).addClass('option-selected');
        }
    });


    $('.wishlist-cta').on('click', function () {
        let product_id = $(this).data('pid');
        $.ajax({
            url: base_url + 'ajax/favourite',
            method: 'POST',
            data: {
                id: product_id
            },
            success: response => {
                let parsed_response = JSON.parse(response);
                if (parsed_response.action === 'remove') {
                    $('.wishlist-cta').text('Add to Wishlist');
                } else {
                    $('.wishlist-cta').text('Remove from Wishlist');
                }
                notification_message(parsed_response.msg, 'fas fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again. ', 'fas fa-info-circle', error);
            }
        })
    });

    $('.add-to-cart').on('click', function () {
        if (!$(`p.variation-option`).hasClass('option-selected')) {
            notification_message("Please select a variation.", 'fas fa-info-circle', 'error');
            return false;
        }
        let quantity_instance = $('#quan').val();
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
                notification_message('Sorry an error occurred while adding to cart, please contact support if problem persist.', 'fas fa-info-circle', 'warning');
            }
        })
    });

    document.querySelector("#quan").addEventListener("keypress", function (evt) {
        if (evt.which < 48 || evt.which > 57) {
            evt.preventDefault();
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
        $('#quantity-text').html('');
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
                    'data': data
                },
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
    $('#modal_popup').on('hide.bs.modal', function () {
        let btn = $('.qna-btn');
        btn.prop('disabled', false);
        btn.val("Ask");
        btn.removeClass('btn-default').addClass('btn-primary');
    });
    $(document).ready(function () {
        $('.product-slider-for').css({"visibility": "visible"});
        $('.product-slider-nav').css({"visibility": "visible"});
        $('.product-slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            lazyLoad: 'ondemand',
            asNavFor: '.product-slider-nav'
        });
        $('.product-slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.product-slider-for',
            dots: false,
            infinite: true,
            lazyLoad: 'ondemand',
            focusOnSelect: true
        });
    });
</script>
</body>
</html>
