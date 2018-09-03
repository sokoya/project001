<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container carrito-dashboard-cover">

		<?php $this->load->view('account/includes/sidebar'); ?>

		<div class="col-md-8">
			<?php $this->load->view('account/includes/sidebar-mobile'); ?>

			<h3 class="carrito-sidebar-header-r hidden-sm hidden-md hidden-xs">Account Settings</h3>
			<hr class="carrito-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>

			<p id="carrito-newsletter-settings">Newsletter Preference</p>
			<hr id="carrito-newsletter-settings-line"/>
			<div class="carrito-newsletter-text">
				<p>We occasionally send exclusive offers by mail with even greater savings to select customers.
					Everyone does not receive the same offer. You would automatically be eligible to receive these great
					offers as a meeber of the Carrito family</p>
				<div class="row">
					<div class="col-md-6">
						<p><input type="radio" title="label"> Yes I want to receive daily
							<select style=" display : inline;" class="carrito-select">
								<option>Electronics</option>
								<option>Clothing</option>
								<option>Books</option>
								<option>Apps & Games</option>
								<option>Software</option>
								<option>Movies & Tv</option>
								<option>Digital Music</option>
							</select> offers
						</p>
					</div>
					<div class="col-md-6"><p><input type="radio" title="label"> I would like to unsubscribe from all the
							offers</div>
				</div>
			</div>

		</div>
	</div>

</div>
</div>
<div class="gap gap-small"></div>
<?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
