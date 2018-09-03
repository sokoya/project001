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

			<h3 class="carrito-sidebar-header-r hidden-sm hidden-md hidden-xs">My Saved Items</h3>
			<hr class="carrito-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>

			<div class="table-responsive ">
				<table class="table table-bordered table-hover carrito-saved-table">
					<thead>
					<tr id="carrito-table-head">
						<th>Product Name</th>
						<th>Availability</th>
						<th>Price</th>
						<th>Saved On</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td style="padding: 20px;">
							<div class="row">
								<div class="col-md-1 col-xs-1">
									<i class="fa fa-trash carrito-trash"></i>
								</div>
								<div class="col-md-2 col-xs-2">

									<img src="<?= base_url('assets/landing/img/saved-img.jpg'); ?>"
										 class="carrito-left-l"
										 title="Sensational Cotton Club Perfume For Men - 100Ml"
										 style="width: 60px; height: 100%">
								</div>
								<div class="col-md-9 col-xs-9">
									Sensational Cotton Club Perfume For Men - 100Ml
								</div>
							</div>
						</td>
						<td class="carrito-table-center">In Stock</td>
						<td class="carrito-table-center"><span style="white-space: nowrap">&#8358; 1,300</span>
							<br/>

							<span style="text-decoration: line-through; white-space: nowrap">&#8358; 3,500</span>
						</td>
						<td class="carrito-table-center"><span
								style="white-space: nowrap">Thurs 02, 2018</span><br/><span style="text-align: center">5:28pm</span>
						</td>
					</tr>

					</tbody>
				</table>
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
