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

	.product-price > span {
		float: right;
		padding: 10px;
		background: #c9ffd3;
		color: #55a455;
		font-weight: 600;
		font-size: 15px;
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

	.mobile-menu {
		font-family: "Open Sans", cursive;
		font-weight: 600;

	}

	.mobile-menu > div > p {
		margin: 0;
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

	.menu-bg {
		background: #fff;
		padding: 8px 5px 13px;
		-webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
		box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
	}

	.menu-bg-text {
		position: relative;
		top: 2px;
		left: 10px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-size: 20px;
		font-weight: 500;
		color: #222;
	}

	.text-break {
		margin-bottom: -6px;
		padding-top: 8px;
		padding-bottom: 8px;
		color: #000;
		font-weight: 500
	}

	.comment-user {
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-size: 12px;
		color: #6e6e6e;
		font-weight: 500;
		position: relative;
		bottom: 10px;
	}
</style>
<body style="background: #efefef">

<div>
	<div class="menu-bg mobile-menu">
		<div style="margin-left: 10px; margin-right: 10px;">
			<a style="text-decoration: none" href="<?= base_url('product/samsung-galaxy-s9-black-dual-sim-official-warranty-1'); ?>"><p><span
						class="filter_close_btn"> <img src="<?= base_url('assets/landing/svg/left-arrow.svg'); ?>"
													   alt="Back button"
													   style="height: 14px; width: 14px; margin-right: 8px; margin-bottom: 2px;"></span>
			</a>
			<span class="menu-bg-text">Rating & Reviews</span>
			</p>
		</div>
	</div>

	<!--Section Title [Customer Ratings]-->
	<div class="container"><p class="text-break" style="">Customer Ratings</p></div>

	<div class="custom-card">
		<div class="container">
			<ul class="product-rate-list">
				<li>
					<p class="product-rate-list-item">5 Stars</p>
					<div class="product-rate-list-bar">
						<div style="width:60%;"></div>
					</div>
					<p class="product-rate-list-count">156</p>
				</li>
				<li>
					<p class="product-rate-list-item">4 Stars</p>
					<div class="product-rate-list-bar">
						<div style="width:35%;"></div>
					</div>
					<p class="product-rate-list-count">70</p>
				</li>
				<li>
					<p class="product-rate-list-item">3 Stars</p>
					<div class="product-rate-list-bar">
						<div style="width:10%;"></div>
					</div>
					<p class="product-rate-list-count">15</p>
				</li>
				<li>
					<p class="product-rate-list-item">2 Stars</p>
					<div class="product-rate-list-bar">
						<div style="width:15%;"></div>
					</div>
					<p class="product-rate-list-count">20</p>
				</li>
				<li>
					<p class="product-rate-list-item">1 Stars</p>
					<div class="product-rate-list-bar">
						<div style="width:2%;"></div>
					</div>
					<p class="product-rate-list-count">1</p>
				</li>
			</ul>
			<a href="javascript:void(0)" class="block-title" style="color: #000;">
				<ul style="display: inline-block; position: relative; top: 5px;" class="product-caption-rating">
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>

				</ul>
				(156 ratings) <a href="<?= base_url('product/samsung-galaxy-s9-black-dual-sim-official-warranty-1/add_rating_review'); ?>"
								 style="color: #0b6427; float: right; font-size: 14px; position: relative; top: 1px; text-decoration: none">Write
					a review</a></a>
		</div>
	</div>

	<!--Section Title [Customer Reviews]-->
	<div class="container"><p class="text-break" style="">Product Reviews (14)</p></div>

	<div class="custom-card">
		<div class="container">
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
			<p class="comment-user">by Sokoya Philip</p>
			<hr class="comment-line"/>
			<div class="comment-block">
				<ul style="display: inline-block" class="product-caption-rating">
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>

				</ul>
				<span style="float: right;" class="comment-date">22 November 2018</span>
			</div>
			<p class="comment-title">Lovely System</p>
			<p class="comment-detail">Wonderful system my grand daughter loves it </p>
			<p class="comment-user">by Jeffrey Chidi</p>
			<hr class="comment-line"/>
			<div class="comment-block">
				<ul style="display: inline-block" class="product-caption-rating">
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li><i class="fa fa-star"></i></li>

				</ul>
				<span style="float: right;" class="comment-date">22 November 2018</span>
			</div>
			<p class="comment-title">Excellent Speed</p>
			<p class="comment-detail">The System boots up so fast</p>
			<p class="comment-user">by Mark Jonathan</p>
			<hr class="comment-line"/>
			<div class="comment-block">
				<ul style="display: inline-block" class="product-caption-rating">
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>
					<li class="rated"><i class="fa fa-star"></i></li>

				</ul>
				<span style="float: right;" class="comment-date">24 November 2018</span>
			</div>
			<p class="comment-title">Buggy Sound System</p>
			<p class="comment-detail">The systems sound system is buggy</p>
			<p class="comment-user">by Cynthia Willson</p>
			<hr class="comment-line"/>
		</div>

		<p style="text-align: center;" class="block-title">Show more comments</p>
	</div>

</body>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
</html>
