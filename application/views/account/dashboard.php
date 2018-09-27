<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container carrito-dashboard-cover">
		
		<?php $this->load->view('account/includes/sidebar'); ?>
		<div class="col-md-8">
			<?php $this->load->view('account/includes/sidebar-mobile'); ?>

			<h3 class="carrito-sidebar-header-r hidden-sm hidden-md hidden-xs">Overview</h3>
			<hr class="carrito-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>
			<p class="carrito-dashboard-welcome-text">Hello <?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?></p>
			<p class="carrito-dashboard-welcome-text-body">From your My Account Dashboard you have the ability to view a
				snapshot of your recent account activity and update your account information. Select a link below to
				view or edit information.</p>
			<div class="row ">
				<div class="col-md-4">
					<div class="carrito-dashboard-card">
						<h4>My Orders</h4>
						<hr/>
						<p>
							Check order status make a return or write a review
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="carrito-dashboard-card">
						<h4>Account Settings</h4>
						<hr/>
						<p>
							Change personal information, update address book and add authorized users
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="carrito-dashboard-card">
						<h4>My Saved Items</h4>
						<hr/>
						<p>
							Manage your saved items all from one location
						</p>
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
