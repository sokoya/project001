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

	.option-disabled {
		color: #bebebe;
		text-decoration: line-through;
	}

	.variation-option-list {
		margin-top: -3px;
	}

	.buy-btn {
		margin-top: 3px;
		background: #468c46;
		color: #fff;
		padding: 13px;
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
	}

	.delivery-text {
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
		top: -33px;
		left: 43px;
	}

	.body_text {
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
	}

	.product-image {
		width: 200px;
		height: 260px;
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
		padding: 13px;
	}
</style>
</head>
<body style="background: #e5e5e5">
<div class="global-wrapper clearfix" id="global-wrapper" style="margin-bottom: 3px;">
	<?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
</div>

<?php if( $product->product_status !== 'approved' ): ?>
	<div class="row">
		<h2 class="text-center">Oops! The product you looking for is not active.</h2>
		<p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find
				product</a></p>
	</div>
<?php elseif (empty($product) || empty($var) || empty($gallery)): ?>
	<div class="row">
		<div class="gap-large"></div>
		<h2 class="text-center">Oops! The product you looking does not exist.</h2>
		<p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find
				product</a></p>
	</div>
<?php else : ?>
<!--Top menu back button-->
<div class="custom-card">
    <div class="container">
        <a style="text-decoration: none;" href="<?= base_url('catalog/' . $category_detail->slug); ?>"><p
                    class="margin-0"><img src="<?= base_url('assets/landing/svg/back.svg'); ?>" alt="Back button"
                                          style="height: 14px; width: 14px; margin-right: 8px;"><span
                        class="redirect-text">Go back to <?= ucwords($category_detail->name); ?></span>
            </p></a>
    </div>
</div>
<!--Gallery section-->
<div class="custom-card">
	<div class="container">
		<div class="owl-carousel">
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
		</div>
	</div>
</div>

<!--Main Description card-->
<div class="custom-card">
	<div class="container">
		<p class="seller-name"><?= ucwords($product->first_name . ' ' . $product->last_name); ?></p>
		<p class="product-name"><?= character_limiter(ucwords($product->product_name), 50, '...'); ?></p>
		<div style="margin-top: 4px; margin-left: 2px">

			<?php
			if ($rating_counts) {
				$overall_rating = product_overall_rating($rating_counts);
			}
			?>
			<span class="rating-count"><?= isset($overall_rating) ? $overall_rating : ''; ?></span>
			<ul style="display: inline-block" class="product-caption-rating">
				<?php
				if ($rating_counts) {
					$overall_rating = product_overall_rating($rating_counts);
					$rating_rounded = round($overall_rating);
					for ($i = 1; $i <= $rating_rounded; $i++) {
						?>
						<li class="rated"><i class="fa fa-star"></i>
						</li>
						<?php
					}
					if ($rating_rounded < 5) {
						for ($i = 0; $i < (5 - $rating_rounded); $i++) { ?>
							<li><i class="fa fa-star"></i></li>
							<?php
						}
					}
				} else {?>
					<li><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>
				<?php } ?>
				<span style="margin-left: 5px; color: #0b6427;" class="rating-total-count"><?= !empty($rating_counts) ? ' ('. count( $rating_counts ) .')' : 'O rating'?></span>
			</ul>
		</div>
		<?php if (!empty($var->discount_price)) : ?>
			<p class="product-price"><?= ngn($var->discount_price); ?>
				<span><?= get_discount($var->sale_price, $var->discount_price) ?></span></p>
			<p class="product-discount-price"><?= ngn($var->sale_price); ?></p>
		<?php else: ?>
			<p class="product-price"><?= ngn($var->sale_price); ?></p>
		<?php endif; ?>

	</div>
</div>

<!--Buy Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<?php if (!empty($var->discount_price)) : ?>
			<p class="block-title">Buy Now <span><?= ngn($var->discount_price); ?></span></p>
		<?php else: ?>
			<p class="block-title">Buy Now <span><?= ngn($var->sale_price); ?></span></p>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-7">
				<p class="custom-product-page-option-title">Quantity:</p>
				<ul>
					<li class="product-page-qty-item">
						<button type="button"
								class="product-page-qty product-page-qty-minus">-
						</button>
						<input data-range="<?= $var->quantity?>" name="quantity"
							   id="quan"
							   class="product-page-qty product-page-qty-input quantity"
							   type="text"
							   value="1"/>
						<button type="button"
								class="product-page-qty product-page-qty-plus">+
						</button>
					</li>
				</ul>
			</div>

		</div>

		<div class="row" style="margin-top: 10px;">
            <?php if( count($variations) > 1 ) : ?>
			<div class="col-xs-12">
				<p class="custom-product-page-option-title">Variation: </p>
				<div class="row variation-option-list">
					<?php foreach($variations as $variation ) : ?>
						<div class="col-xs-3"><p data-vid="<?= $variation['id']; ?>" class="variation-option <?php if($variation['quantity'] < 1) echo 'option-disabled';?>" ><?= ucfirst($variation['variation']); ?></p></div>
					<?php endforeach; ?>
				</div>
			</div>
            <?php else: ?>
            	<input type="hidden" name="variation_id" value="<?= $var->id; ?>">
            <?php endif; ?>

		</div>
		<button class="btn btn-block buy-btn">
			Add to Cart
		</button>
		<p class="wishlist-cta">Save to Wishlist</p>
	</div>
</div>

<!--Delivery Information Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<p class="block-title">Delivery Information</p>
		<div class="row">
			<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
				<img src="<?= base_url('assets/landing/svg/delivery-truck.svg'); ?>" alt="Delivery Truck"
					 style="height: 30px; width: 35px;">
			</div>
			<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
				<p class="delivery-text">Onitsha Market delivery available, get it within 5 business days of order</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
				<img src="<?= base_url('assets/landing/svg/return.svg'); ?>" alt="Delivery Truck"
					 style="height: 30px; width: 35px;">
			</div>
			<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
				<p class="delivery-text">Free 7 day return if available</p>
			</div>
		</div>
		<div class="row" style="margin-top: 14px;">
			<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
				<img src="<?= base_url('assets/landing/svg/warranty.svg'); ?>" alt="Warranty"
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

<!--Section Title [Overview]-->
<div class="container"><p class="text-break" style="">Overview</p></div>

<!--Product Description Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<?php if(!empty($product->product_line)) :?>
		<p class="block-title close-panel" data-target="title_vl" style="margin-top: 5px;">Product Shop <span
				style="color: #4c4c4c !important; float: right"><i
					class="fa fa-minus close-panel"
					aria-hidden="true"
					data-target="title_vl"></i></span></p>
		<p class="body_text" id="title_vl"><?= $product->product_line; ?></p>
		<hr/>
		<?php endif; ?>
		<?php if( !empty($product->product_description) ) : ?>
		<p class="block-title close-panel" data-target="description_vl">Product Description <span
				style="color: #4c4c4c !important; float: right"><i
					class="fa fa-minus close-panel"
					aria-hidden="true"
					data-target="description_vl"></i></span></p>
		<p id="description_vl" class="body_text">
            <?=  word_limiter($product->product_description, 80); ?>
		</p>
		<hr/>
		<?php endif; ?>
		<?php if(!empty($product->in_the_box)) : ?>
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

<!--Section Title [Full Specifications]-->
<div class="container"><p class="text-break" style="">Full Specifications</p></div>

<!--Product Specification Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Specification</th>
				<th>Details</th>
			</tr>
            <?php  $specs= json_decode($product->attributes);?>

			</thead>
			<tbody>
            <?php if(!empty( $specs )): foreach( $specs as $spec => $value  ) : ?>
                <tr>
                    <td><?= trim( $spec ); ?></td>
                    <td><?php if(is_array( $value)) : foreach( $value as $val ) echo ucwords($val) . ', '; else: echo ucwords( $value); endif; ?></td>
                </tr>
            <?php endforeach; else : ?>
                <td colspan="2">No Specification for this item</td>
            <?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<!--Section Title [Ratings and Reviews]-->
<div class="container"><p class="text-break" style="">Ratings and Reviews</p></div>

<!--Product Ratings And Reviews-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<p class="block-title" style="margin-top: 5px;">Total Ratings</p>
		<div style="margin-top: 4px; margin-left: 2px">
			<span class="rating-count">5/5</span>
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<span style="margin-left: 5px;" class="rating-total-count">(8 ratings)</span>
			</ul>
		</div>
		<hr style="margin-top: -4px;"/>
		<p class="block-title" style="margin-top: 5px;">All Reviews</p>
		<div class="comment-block">
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>

			</ul>
			<span style="float: right;" class="comment-date">22 November 2018</span>
		</div>
		<p class="comment-title">Great Product</p>
		<p class="comment-detail">This is a great product I can't stop using it</p>
		<hr class="comment-line"/>
		<div class="comment-block">
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>

			</ul>
			<span style="float: right;" class="comment-date">22 November 2018</span>
		</div>
		<p class="comment-title">Lovely System</p>
		<p class="comment-detail">Wonderful system my grand daughter loves it </p>
		<hr class="comment-line"/>
		<div class="comment-block">
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>

			</ul>
			<span style="float: right;" class="comment-date">22 November 2018</span>
		</div>
		<p class="comment-title">Good Battery</p>
		<p class="comment-detail">Excellent battery service, lasts longer than my previous systems</p>
		<hr class="comment-line"/>
	</div>
</div>
<button class="btn btn-block rating-btn">View all reviews</button>
<?php endif; ?>

<!--Scripts-->
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/search.js'); ?>"></script>
<script>
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

		$(".owl-carousel").owlCarousel({
			items: 1,
			lazyLoad: true,
			loop: true,
		});
	});
</script>
<script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
<?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
</body>
</html>
