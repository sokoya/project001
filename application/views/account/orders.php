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

			<h3 class="carrito-sidebar-header-r hidden-sm hidden-md hidden-xs">My Orders & Returns</h3>
			<hr class="carrito-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="carrito-dashboard-card">
						<div class="table-responsive">
							<table style="width: 100%" class="table table-stripped">
								<thead>
									<tr>
										<th class="text-center">S/N</th>
										<th class="text-center">Product</th>
										<th class="text-center">Description</th>
										<th class="text-center">Date</th>
										<th class="text-center">Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td class="text-center">Denin Top Jean(5 in 1 - Multi Bundle)</td>
										<td class="text-center">Bundle Pack</td>
										<td class="text-center">Thurs, 07, 2018 (6:02am) </td>
										<td class="text-center">Delivered</td>
									</tr>
									<tr>
										<td>2</td>
										<td class="text-center">4 Burner Gas Cooker (50 x 50) -BGC:5040</td>
										<td class="text-center">White</td>
										<td class="text-center">Thurs, 07, 2018 (6:02am) </td>
										<td class="text-center">Processing</td>
									</tr>
									<tr>
										<td>3</td>
										<td class="text-center">Galaxy Brand Prime Plus 5.0 Inch(1.5GB, 8GB ROM)...</td>
										<td class="text-center">Gold</td>
										<td class="text-center">Thurs, 07, 2018 (6:02am) </td>
										<td class="text-center">Delivered</td>
									</tr>
								</tbody>
							</table>
							<div class="gap gap-small"></div>
							<span class="pull-right">
								<ul id="table-pagination">
									<li>Prev</li>
									<li>8</li>
									<li>9</li>
									<li>10</li>
									<li>11</li>
									<li>Next</li>
								</ul>
							</span>
						</div>
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
