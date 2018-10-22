<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
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
										<th class="text-center">Product</th>
										<th class="text-center">Tracking #</th>
										<th class="text-center">Desc.</th>
										<th class="text-center">Date</th>
										<th class="text-center">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach( $orders as $order) : ?>
										<?php
		                        			$split = explode("|", $order->image_name);
		                        		?>
										<tr>
											<td>

												<img src="https://res.cloudinary.com/philo001/image/upload/h_400,w_400,q_auto,f_auto,fl_lossy,dpr_auto/v<?= $split[0] . '/' . $split[1]; ?>"
										 		class="carrito-left-l"
										 		title="<?= $order->name; ?>"
										 		style="width: 60px; height: 100%; padding-right: 4px;">
										 		<span><a href="<?= base_url(urlify($order->name, $order->pid)); ?>"><?= word_limiter(ucwords($order->name), 7, '...'); ?></a></span>												
											</td>
											<td><?= $order->order_code; ?></td>
											<td><?= $order->product_desc; ?></td>
											<td><?= neatDate($order->order_date) ?></td>
											<td><?= ucfirst($order->status); ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<div class="gap gap-small"></div>
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
