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

	.delivery-text {
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
		bottom: 2px;
		left: 10px;
	}

	.product-price > span {
		float: right;
		padding: 10px;
		background: #c9ffd3;
		color: #55a455;
		font-weight: 600;
		font-size: 15px;
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

	.body_text {
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
	}
</style>
<body style="background: #efefef">

<div>
	<div class="menu-bg mobile-menu">
		<div style="margin-left: 10px; margin-right: 10px;">
			<a style="text-decoration: none"
			   href="<?= base_url('product/samsung-galaxy-s9-black-dual-sim-official-warranty-1'); ?>"><p><span
						class="filter_close_btn"> <img src="<?= base_url('assets/landing/svg/left-arrow.svg'); ?>"
													   alt="Back button"
													   style="height: 14px; width: 14px; margin-right: 8px; margin-bottom: 2px;"></span>
			</a>
			<span class="menu-bg-text">Product Warranty</span>
			</p>
		</div>
	</div>

	<!--Section Title [Product Description]-->
	<div class="container"><p class="text-break">Warranty Type</p></div>

	<div class="custom-card">
		<div class="container">
			<div class="row" style="margin-top: 14px;">
				<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
					<img class="lazy" src="<?= base_url('assets/landing/img/load.gif'); ?>"
						 data-src="<?= base_url('assets/landing/svg/warranty.svg'); ?>" alt="Warranty"
						 style="height: 30px; width: 35px;">
				</div>
				<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
					<p class="delivery-text">This product has the following warranty
						: Repair by vendor
					</p>
				</div>
			</div>
		</div>
	</div>


	<!--Section Title [Warranty Description]-->
	<div class="container"><p class="text-break">Warranty Description</p></div>
	<div class="custom-card">
		<div class="container">
			<p class="body_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet blanditiis
				dolorem esse explicabo inventore ipsum itaque magnam nam nemo nihil, nobis numquam odio perferendis quis
				quo reiciendis vel veniam.</p>
		</div>
	</div>

</body>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
	$(function () {
		$('.lazy').Lazy();
	});
</script>
</html>
