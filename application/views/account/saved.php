<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container market-dashboard-cover">

		<?php $this->load->view('account/includes/sidebar'); ?>

		<div class="col-md-8">
			<?php $this->load->view('account/includes/sidebar-mobile'); ?>

			<h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">My Saved Items</h3>
			<hr class="market-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>
			<?php if(!empty($saved)) :?>
			<div class="table-responsive">
				<table class="table table-bordered table-hover market-saved-table">
					<thead>
					<tr id="market-table-head">
						<th>Product Name</th>
						<th>Availability</th>
						<th>Price</th>
						<th>Saved On</th>
					</tr>
					</thead>
					<tbody>
						<?php foreach($saved as $item ): ?>
					<tr>
						<td style="padding: 20px;">
							<div class="row">
								<div class="col-md-1 col-xs-1">									
									<a href="javascript:void(0)" class="delete" data-pid="<?= $item->fav_id; ?>"><i class="fa fa-trash market-trash"></i></a>
								</div>
								<div class="col-md-9 col-xs-9">
									<img src="<?= base_url('data/products/'.$item->id.'/'.$item->image_name); ?>"
										 class="market-left-l"
										 title="<?= $item->product_name; ?>"
										 style="width: 60px; height: 100%; padding-right: 4px;">
										 <span><?= $item->product_name; ?></span>
								</div>
							</div>
						</td>
						<td class="market-table-center"><?= ($item->quantity > 0 && $item->product_status =='active') ? 'In Stock' : 'Out of stock/Inactive';  ?></td>
						<td class="market-table-center"><span style="white-space: nowrap">&#8358; <?= (!empty($item->discount_price)) ? $item->discount_price : $item->sale_price; ?></span>
							<br/>
							<?php if(!empty($item->discount_price)): ?>
								<span style="text-decoration: line-through; white-space: nowrap">&#8358; <?= $item->sale_price; ?></span>
							<?php endif; ?>
						</td>
						<td class="market-table-center">
							<span style="white-space: nowrap"><?= neatDate($item->date_saved); ?></span>
						</td>
					</tr>
					<?php endforeach; ?>

					</tbody>
				</table>
			</div>
			<?php else : ?>

			<?php endif; ?>
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
