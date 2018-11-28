<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	#product-name{
		text-decoration: none;
	}
	#product-name:hover{
		color: green;
	}
</style>
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
			<div id="status"></div>
			<div class="table-responsive">
				<div id="favourite-div">
					<?php if( count($saved)) :?>
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
							<?php 
							
								foreach($saved as $item ): ?>
								<tr>
									<td style="padding: 20px;">
										<div class="row">
											<div class="col-md-1 col-xs-1">									
												<a href="javascript:void(0)" class="delete" data-id="<?= $item->fav_id; ?>" data-name="<?= $item->product_name; ?>" title="Remove <?= $item->product_name;?> from your whislist"><i class="fa fa-trash market-trash"></i></a>
											</div>
											<div class="col-md-9 col-xs-9">
												<img src="<?= base_url('data/products/'.$item->id.'/'.$item->image_name); ?>"
													 class="market-left-l"
													 title="<?= $item->product_name; ?>"
													 style="width: 80px; height: 100%; padding-right: 4px;">
													 <span><a id="product-name" href="<?= base_url().urlify($item->product_name, $item->id); ?>"><?= $item->product_name; ?></a></span>
											</div>
										</div>
									</td>
									<td class="market-table-center"><?= ($item->quantity > 0 && $item->product_status =='approved') ? 'In Stock' : 'Out of stock/Inactive';  ?></td>
									<td class="market-table-center"><span style="white-space: nowrap"><?= (!empty($item->discount_price)) ? ngn($item->discount_price) : ngn($item->sale_price); ?></span>
										<br/>
										<?php if(!empty($item->discount_price)): ?>
											<span style="text-decoration: line-through; white-space: nowrap">&#8358; <?= $item->sale_price; ?></span>
										<?php endif; ?>
									</td>
									<td class="market-table-center">
										<span style="white-space: nowrap"><?= neatDate($item->date_saved); ?></span>
									</td>
								</tr>
							<?php endforeach;?>

						</tbody>
					</table>
					<?php else :?>
						<p class="market-dashboard-welcome-text">You have no product on your whishlist <a style="text-decoration: none; color: green;" href="<?= base_url(); ?>">Browse for products</a></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="confirmation" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Confirmation</h4>
					</div>
					<div class="modal-body">
						<p id="product-title">
							Please confirm you will like to remove the item
							<span class="text text-danger" id="product_name"></span> from your wishlist
						</p>
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-block btn-danger" id="remove">Remove</button>
							</div>
						</div>
							<!-- <div class="col-md-6">
								<button type="button" id="cart" class="btn btn-block btn-success">Go to Cart</button>
							</div> -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
	</div>
</div>
<div class="gap gap-small"></div>
<?php $this->load->view('landing/resources/footer'); ?>
<?php $this->load->view('landing/resources/script'); ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function() {
        $('.lazy').Lazy();
    });
</script>
<script>
	$('.delete').on('click', function(){
		let id = $(this).data('id');
		let name = $(this).data('name');
		$('#confirmation').modal('show');
		$('#product_name').html(name);
		$('#remove').on('click', function(){
			$('#confirmation').modal('hide');
			$.ajax({
				url: base_url + "ajax/favourite",
				method: "POST",
				data: {'id' : id},
                success: response => {
                    let parsed_response = JSON.parse(response);
                    if (parsed_response.action === 'remove') {
                        $('.wishlist-cta').html('Add to Wishlist');
                    } else {
                        $('.wishlist-cta').html('Remove from Wishlist');
                    }
                    notification_message(parsed_response.msg, 'fa fa-info-circle', parsed_response.status);
                },
                error: () => {
                    notification_message('Sorry an error occurred please try again ', 'fa fa-info-circle', error);
                }
			});
		});
	});
</script>
</body>
</html>
