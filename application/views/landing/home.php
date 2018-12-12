<?php $this->load->view('landing/resources/head_base'); ?>
<!--<link rel="stylesheet" href="--><? //= base_url('assets/landing/css/home.css'); ?><!--">-->
<style>
	.pro_ad {
		min-height: auto !important;
	}

	.card-max {
		margin-top: 30px;
		margin-bottom: 30px;
	}

	.card-max-header {
		text-align: left;
	}

	.card-max-title {
		color: #1c1c1c;
		font-size: 27px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-weight: 600;
		margin-bottom: 2px;
	}

	.card-max-subtitle {
		color: #1c1c1c;
		font-size: 17px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	}

	.card-max-img {
		height: auto;
		width: auto;
		max-width: 180px;
		max-height: 180px;
		border-radius: 10px;
	}

	.card-max-img:hover {
		-webkit-filter: brightness(96%);
		filter: brightness(96%);
		-webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
		box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
		cursor: pointer;
	}

	.card-max-text {
		margin-top: 10px;
	}

	.card-max-price {
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 18px;
		color: #0b0b0b;
		font-weight: 600;
		margin-bottom: 1px;
	}

	.card-max-discount {
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 14px;
		color: #444444;
		font-weight: 500;
		margin-bottom: 1px;
		text-decoration: line-through;
	}

	.card-max-view-more {
		float: right;
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		color: #444;
		z-index: 100;
		position: relative;
		top: 45px;
	}

	.card-max-view-more:hover {
		text-decoration: none;
		color: #0b6427;
	}
</style>
</head>
<body>

<div class="global-wrapper clearfix" id="global-wrapper">
	<?php if ($this->agent->is_mobile()) : ?>
		<?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
	<?php else: ?>
		<?php $this->load->view('landing/resources/head_img') ?>
		<?php $this->load->view('landing/resources/head_category') ?>

		<?php $this->load->view('landing/resources/head_menu') ?>
	<?php endif; ?>
	<div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true}'>
		<div class="owl-item">
			<div class="slider-item" style="background-color:#3D3D3D;">
				<div class="container">
					<div class="slider-item-inner">
						<div class="slider-item-caption-left slider-item-caption-white">
							<h4 class="slider-item-caption-title">Save up to &#8358;1,500 on Your Next Laptop</h4>
							<p class="slider-item-caption-desc">I'm Not Gonna Pay A Lot For This Laptop.</p><a
								class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
						</div>
						<img class="slider-item-img-right"
							 src="<?= base_url('assets/landing/img/test_slider/1.png'); ?>" alt="Image Alternative text"
							 title="Image Title" style="top: 60%; width: 56%;"/>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-item">
			<div class="slider-item"
				 style="background-image:url(<?= base_url('assets/landing/img/concert_2_1200x500.jpg'); ?>);">
				<div class="container">
					<div class="slider-item-inner">
						<div class="slider-item-caption-right slider-item-caption-white">
							<h4 class="slider-item-caption-title">World Top Guitars from $350</h4>
							<p class="slider-item-caption-desc">Fill It To The Rim With Guitar.</p><a
								class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
						</div>
						<img class="slider-item-img-left" src="<?= base_url('assets/landing/img/test_slider/2.png'); ?>"
							 alt="Image Alternative text" title="Image Title"
							 style="transform:translateY(-50%) rotate(14deg); width: 55%;"/>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-item">
			<div class="slider-item" style="background-color:#93282B;">
				<div class="container">
					<div class="slider-item-inner">
						<div class="slider-item-caption-left slider-item-caption-white">
							<h4 class="slider-item-caption-title">Run! Run! Run!</h4>
							<p class="slider-item-caption-desc">Your Running Shoes, Right Away.</p><a
								class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
						</div>
						<img class="slider-item-img-right"
							 src="<?= base_url('assets/landing/img/test_slider/2.png'); ?>" alt="Image Alternative text"
							 title="Image Title"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="card-max">
			<div class="card-max-header">
				<p class="card-max-title">Hot Sales<a href="#" class="card-max-view-more">View more</a></p>
				<p class="card-max-subtitle">Great items, Affordable Prices</p>
			</div>


			<div class="row">
				<div class="col-md-2">
					<img class="card-max-img" src="<?= base_url('assets/landing/img/home/p1.jpg'); ?>"/>
					<div class="card-max-text">
						<p class="card-max-price">₦27,450</p>
						<p class="card-max-discount">₦55,000</p>
					</div>
				</div>
				<div class="col-md-2">
					<img class="card-max-img" src="<?= base_url('assets/landing/img/home/p2.jpg'); ?>"/>
					<div class="card-max-text">
						<p class="card-max-price">₦66,000</p>
						<p class="card-max-discount">₦155,000</p>
					</div>
				</div>
				<div class="col-md-2">
					<img class="card-max-img" src="<?= base_url('assets/landing/img/home/p3.jpg'); ?>"/>
					<div class="card-max-text">
						<p class="card-max-price">₦47,000</p>
						<p class="card-max-discount">₦90,000</p>
					</div>
				</div>
				<div class="col-md-2">
					<img class="card-max-img" src="<?= base_url('assets/landing/img/home/p7.jpg'); ?>"/>
					<div class="card-max-text">
						<p class="card-max-price">₦80,000</p>
						<p class="card-max-discount">₦125,000</p>
					</div>
				</div>
				<div class="col-md-2">
					<img class="card-max-img" src="<?= base_url('assets/landing/img/home/p5.jpg'); ?>"/>
					<div class="card-max-text">
						<p class="card-max-price">₦56,000</p>
						<p class="card-max-discount">₦120,000</p>
					</div>
				</div>
				<div class="col-md-2">
					<img class="card-max-img" src="<?= base_url('assets/landing/img/home/p6.jpg'); ?>"/>
					<div class="card-max-text">
						<p class="card-max-price">₦75,000</p>
						<p class="card-max-discount">₦95,000</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="card-max">
			<div class="row">
				<div class="col-md-3">
					<p>Card Locations</p>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<p>Card Locations</p>
						</div>
						<div class="col-md-6">
							<p>Card Locations</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<p>Card Locations</p>
						</div>
						<div class="col-md-4">
							<p>Card Locations</p>
						</div>
						<div class="col-md-4">
							<p>Card Locations</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<p>Card Locations</p>
				</div>
			</div>
		</div>
	</div>


	<?php if ($this->agent->is_mobile()) : ?>
		<?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
	<?php else: ?>
		<?php $this->load->view('landing/resources/footer'); ?>
		<?php $this->load->view('landing/resources/script'); ?>
	<?php endif; ?>
</div>

<?php if ($this->agent->is_mobile()) : ?>
	<script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
<?php endif; ?>
</body>
</html>
