<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
		<div class="gap gap-small"></div>
		<div class="row row-col-border" data-gutter="60"">
			<div class="col-md-4">
				<!-- Menu Section -->
				<ul>
					<li>
						<h4><a href="<?= base_url('account'); ?>">Overview</a></h4>
					</li>
					<li>
						<h4><a href="<?= base_url('account/information'); ?>">Information</a></h4>
					</li>
					<li>
						<h4><a href="<?= base_url('account/my_orders'); ?>">My Orders</a></h4>
					</li>
					<li>
						<h4><a href="<?= base_url('account/reviews'); ?>">My Reviews & Ratings</a></h4>
					</li>
					<li>
						<h4><a href="<?= base_url('account/saved'); ?>">My Saved Items</a></h4>
					</li>
					<li>
						<h4><a href="<?= base_url('account/settings'); ?>">Account Settings</a></h4>
					</li>
				</ul>
				<div class="gap gap-small"></div>
			</div>
			<div class="col-md-8">
				<!-- Control panel -->
				<p>Welcome here too</p>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>
	<?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
