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
			<span class="menu-bg-text">Product Description</span>
			</p>
		</div>
	</div>

	<!--Section Title [Product Description]-->
	<div class="container"><p class="text-break">Description</p></div>

	<div class="custom-card">
		<div class="container">
			<p class="body_text">Display: 5.8”, Quad HD+ sAMOLED Single Sim Option Camera Main: Super Speed Dual Pixel
				12 MP OIS (F1.5/F2.4) Camera Front: 8MP AF (F1.7) Processor: 10nm, Octa-core (2.7GHz Quad + 1.7GHz Quad)
				Memory: 4GB RAM and 64GB Internal storage, External Memory: MicroSD™ up to 400 GB Battery: 3000mAh
				Security: Intelligent Scan (Iris + Face), Fingerprint Scanner, Water and Dust Resistance: IP68 (1.5 m &
				30 min)</p>
		</div>
	</div>

	<!--Section Title [Product Specification]-->
	<div class="container"><p class="text-break">Specifications</p></div>

	<div class="custom-card">
		<div class="container">
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Specification</th>
					<th>Details</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Sim-Type</td>
					<td>Dual SIM</td>
				</tr>
				<tr>
					<td>OS-Type</td>
					<td>Android OS</td>
				</tr>
				<tr>
					<td>Battery-Capacity</td>
					<td>3000mAh</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<!--Section Title [What's in the box]-->
	<div class="container"><p class="text-break">What's in the box</p></div>
	<div class="custom-card">
		<div class="container">
			<p class="body_text">4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina
				HD display Splash, water, and dust resistant 12MP camera with Optical image stabilization and
				Six?element lens 4K video recording at 24 fps, 30 fps, or 60 fps All new glass design with A
				color?matched, aerospace?grade aluminum band</p>
		</div>
	</div>

</body>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/mobile.js'); ?>"></script>
</html>
