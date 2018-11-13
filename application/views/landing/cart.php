<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
		<?php if (!empty($this->cart->contents())) : ?>
			<header class="page-header">
				<h1 class="page-title">Cart Overview</h1>
			</header>
			<div class="row">
				<div class="col-md-10">
					<?php $this->load->view('landing/msg_view'); ?>
					<?= form_open('', 'id="cart-form"'); ?>
					<table class="table table table-shopping-cart">
						<thead>
						<tr>
							<th>Product</th>
							<th>Title</th>
							<th>Variation/Colour</th>
							<th>Price</th>
							<th>Quality</th>
							<th>Total</th>
							<th>Remove</th>
						</tr>
						</thead>
						<tbody>
						<?php $x = 0;
						$total = 0;
						foreach ($this->cart->contents() as $product): ?>
							<?php 
								$detail = $this->product->get_cart_details($product['id']);
								$variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
							?>
							<tr>
								<td class="table-shopping-cart-img">
									<?php echo form_hidden($x . '[rowid]', $product['rowid']); ?>
									<a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
										<img
											src="<?= base_url('data/products/' . $product['id'] . '/' . $detail->image); ?> ?>"
											alt="Onitsha Market place <?= $product['name']; ?>"
											title="<?= $product['name']; ?>"/>
									</a>
								</td>
								<td class="table-shopping-cart-title"><a
										href="<?= base_url(urlify($product['name'], $product['id'])); ?>"><?= htmlentities($product['name']); ?></a><br/>
									<span class="text text-sm">Seller: <?= $detail->name; ?></span>
								</td>
								<td>
									<?= $product['options']['variation'] . '/' . $product['options']['colour'];
									?>
								</td>
								<td><?= ngn($product['price']); ?></td>
								<td>
									<ul>
										<li class="product-page-qty-item">
											<button type="button" data-cid="<?= $product['rowid']; ?>"
													class="product-page-qty product-page-qty-minus">-
											</button>
											<input data-range="<?= $variation_detail->quantity; ?>" name="quantity"
												   id="quan"
												   class="product-page-qty product-page-qty-input quantity"
												   type="text"
												   value="<?= $product['qty']; ?>" disabled/>
											<button type="button" data-cid="<?= $product['rowid']; ?>"
													class="product-page-qty product-page-qty-plus">+
											</button>
										</li>
									</ul>
								</td>
								<td><?php echo ngn($product['subtotal']);
									$total += $product['subtotal']; ?></td>
								<td>
									<a class="fa fa-close table-shopping-remove"
									   href="<?= base_url('cart/remove/' . $product['rowid']); ?>"></a>
								</td>
							</tr>
							<?php
							$x++;
						endforeach; ?>
						</tbody>
					</table>
					<button type="submit" style="display: none;"></button>
					<?= form_close(); ?>
					<div class="gap gap-small"></div>
				</div>
				<div class="col-md-2">
					<ul class="shopping-cart-total-list">
						<li><span>Sub-total :</span><span>(<?= $this->cart->total_items(); ?>) items</span>
						</li>
						<li><span>Total :</span><span><?= ngn($total); ?></span>
						</li>
					</ul>
					<span class="text-sm text-danger"><strong>Delivery fee not included.</strong></span><br/>
					<br/>
					<a class="btn btn-primary" href="<?= base_url('checkout'); ?>">Checkout</a>
				</div>
			</div>
			<ul class="list-inline">
				<li><a class="btn btn-default" href="<?= base_url(); ?>">Continue Shopping</a>
				</li>
			</ul>
		<?php else: ?>
			<div class="custom-fa-cover">
				<i class="fa fa-cart-arrow-down empty-cart-icon custom-fa text-center"></i>
			</div>
			<div class="text-center">

				<p class="lead custom-text">You haven't fill your shopping cart yet</p>
				<a class="btn btn-primary btn-lg" href="<?= base_url(); ?>">Start Shopping<i
						class="fa fa-long-arrow-right"></i></a>
			</div>
		<?php endif; ?>
	</div>
	<div class="gap"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<script>
	if (!base_url) {
		let base_url = "<?= base_url(); ?>";
	}
</script>
<?php $this->load->view('landing/resources/script'); ?>
<script>
	
	let quantity = $('#quan');
	let count = quantity.data('range');
	let plus = $('.product-page-qty-plus');
	let minus = $('.product-page-qty-minus');
	let cid = $('.product-page-qty').data('cid');

	plus.on('click', function () {
		plus.prop('disabled', true);
		minus.prop("disabled", false);
		$.ajax({
			url: 'ajax/update_cart_item',
			method: 'POST',
			data: {cid:cid,qty:quantity.val()},
			success: function (response) {
				console.log(response);
				if (quantity.val() >= count) {
					plus.prop("disabled", true);
				} else {
					plus.prop("disabled", false);
				}
			},
			error: response => {
				console.log(response);
				if (quantity.val() >= count) {
					plus.prop("disabled", true);
				} else {
					plus.prop("disabled", false);
				}
			}
		});
	});

	minus.on('click', function () {
		minus.prop('disabled', true);
		plus.prop("disabled", false);
		if (quantity.val() <= 1) {
			minus.prop("disabled", true);
		}
		$.ajax({
			url: 'ajax/update_cart_item',
			method: 'POST',
			data: {cid:cid,qty:quantity.val()},
			success: () => {
				if (quantity.val() <= 1) {
					minus.prop("disabled", true);
				} else {
					minus.prop("disabled", false);
				}
			},
			error: () => {
				if (quantity.val() <= 1) {
					minus.prop("disabled", true);
				} else {
					minus.prop("disabled", false);
				}
			}
		});
	});

	quantity.on('input', function () {
		if (quantity.val() > count) {
			quantity.val(count)
		} else if (quantity.val() === '0') {
			quantity.val(1)
		}
	});

</script>
</body>
</html>
