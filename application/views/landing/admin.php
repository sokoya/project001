<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.shadow {
		-webkit-box-shadow: 3px 3px 5px 6px #ccc; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
		-moz-box-shadow: 3px 3px 5px 6px #ccc; /* Firefox 3.5 - 3.6 */
		box-shadow: 3px 3px 5px 6px #ccc; /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
	}

	.carrito_box_yellow {
		padding: 40px;
		border-radius: 7px;
		background: #e5d24d;
		margin: 20px 20px 3px;
		color: #fff;
		cursor: pointer;
	}

	.carrito_box_blue {
		padding: 40px;
		border-radius: 7px;
		background: #46b3ee;
		margin: 20px 20px 3px;
		color: #fff;
		cursor: pointer;
	}

	.carrito_box_purple {
		padding: 40px;
		border-radius: 7px;
		background: #d680d2;
		margin: 20px 20px 3px;
		color: #fff;
		cursor: pointer;
	}

	.carrito_box_dark_blue {
		padding: 40px;
		border-radius: 7px;
		background: #35bbaa;
		margin: 20px 20px 3px;
		color: #fff;
		cursor: pointer;
	}

	.carrito_box_dark_blue:hover, .carrito_box_purple:hover, .carrito_box_yellow:hover, .carrito_box_blue:hover {
		border-top: 2px solid #fff;
	}

	.carrito_box_dark_blue, .carrito_box_purple, .carrito_box_yellow, .carrito_box_blue {
		font-size: 20px;
		font-family: "Lucida Sans", serif;

	}
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/admin_head') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>


	<div class="container" style="margin-top: 40px;">

		<div class="well" style="background: #fff ; margin-left:110px; margin-right: 100px;">
			<p style="font-weight: bold; font-size: 20px;">Welcome Admin</p> Manage and control the pages from here
		</div>


		<div class="row col-md-offset-1" style="margin-bottom: 10px;">
			<a href="#">
				<div class="col-md-5 carrito_box_blue shadow">

					<div class="col-md-12">
						<i class="fa fa-user"></i>
						Manage Users
					</div>

				</div>
			</a>

			<a href="<?= base_url('admin/root_category'); ?>">
				<div class="col-md-5 carrito_box_yellow shadow">
					<div class="col-md-12">
						<i class="fa fa-folder"></i>
						Create Root Category
					</div>
				</div>
			</a>
		</div>
		<div class="row col-md-offset-1">
			<a href="<?= base_url('admin/category'); ?>">
				<div class="col-md-5 carrito_box_purple shadow">
					<div class="col-md-12">
						<i class="fa fa-folder-open"></i>
						Create Category
					</div>

				</div>
			</a>

			<a href="<?= base_url('admin/sub_category'); ?>">
				<div class="col-md-5 carrito_box_dark_blue shadow">
					<div class="col-md-12">
						<i class="fa fa-files-o"></i>
						Create SubCategory
					</div>
				</div>
			</a>
		</div>
		<div class="row col-md-offset-1">
			<a href="<?= base_url('admin/category_specification'); ?>">
				<div class="col-md-5 carrito_box_purple shadow" style="background: #7d695b">
					<div class="col-md-12">
						<i class="fa fa-file-code-o"></i>
						Create Specifications
					</div>
				</div>
			</a>

			<a href="<?= base_url('adminproduct'); ?>">
				<div class="col-md-5 carrito_box_dark_blue shadow" style="background: #c54e53">
					<div class="col-md-12">
						<i class="fa fa-sitemap"></i>
						Create Products
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="gap gap-small"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
