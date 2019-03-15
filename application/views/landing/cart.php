<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body class="cart-row">
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
		<?php $cart_contents = $this->cart->contents();
        $excludes = array(); # This is used to exludes product from recently viewed
		if (!empty($cart_contents)) :  ?>
			<header class="page-header">
				<h1 style="color:#00000082;">Cart Overview</h1>
			</header>
			<div class="row">
				<div class="col-md-10">
					<?php $this->load->view('landing/msg_view'); ?>
					<?= form_open('', 'id="cart-form"'); ?>
					<table class="table table-bordered table-striped table-shopping-cart">
						<thead>
						<tr>
							<th class="text-center">Product</th>
							<th class="text-center">Product Name</th>
							<th class="text-center">Variation</th>
							<th class="text-center">Price</th>
							<th class="text-center">Quantity</th>
							<th class="text-center">Total</th>
							<th>Remove</th>
						</tr>
						</thead>
						<tbody>
						<?php $x = 0;
						$total = 0;

						foreach ($this->cart->contents() as $product): ?>
							<?php
                            array_push($excludes, $product['id']);
							$detail = $this->product->get_cart_details($product['id']);
							$variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
							?>
							<tr>
								<td class="table-shopping-cart-img text-center">
									<?php echo form_hidden($x . '[rowid]', $product['rowid']); ?>
									<a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
										<img class="lazy"
											 src="<?= PRODUCTS_IMAGE_PATH . $detail->image; ?>"
											 alt="<?= $product['name'] ?>"
											 title="<?= $product['name']; ?>"/>
									</a>
								</td>
								<td class="table-shopping-cart-title">
									<a
										href="<?= base_url(urlify($product['name'], $product['id'])); ?>"><?= htmlentities($product['name']); ?></a><br/>
									<span
										class="text text-sm">Seller: <?= !empty($detail->legal_company_name) ? $detail->legal_company_name : $detail->name; ?></span>
								</td>
								<?php if ($variation_detail && ( $variation_detail->quantity < 1 || in_array($detail->product_status, array('suspended', 'blocked', 'pending'))) )
									: ?>
									<td colspan="4">
										<span class="text-center text-semibold text-danger"><strong>This product variation is out of stock. or no longer available.</strong></span>
									</td>
								<?php elseif (in_array($detail->is_seller, array('suspended', 'blocked', 'pending'))) : ?>
									<td colspan="4">
										<span class="text-center text-semibold text-danger"><strong>The seller of this product is not available at the moment.</strong></span>
									</td>
								<?php else: ?>
									<td class="text-center">
										<?= !empty($product['options']['variation']) ? ucfirst($product['options']['variation']) : '-'; ?>
									</td>
									<td><?= ngn($product['price']); ?></td>
									<td>
										<ul>
											<?php $value = ($product['qty'] > $variation_detail->quantity) ? $variation_detail->quantity : $product['qty']; ?>
											<li class="product-page-qty-item">
												<button type="button" data-cid="<?= $product['rowid']; ?>"
														class="product-page-qty product-page-qty-minus">-
												</button>
												<input data-range="<?= $variation_detail->quantity; ?>" name="quantity"
													   id="quan"
													   class="product-page-qty product-page-qty-input quantity product-<?= $product['rowid']; ?>"
													   type="text"
													   value="<?= $value; ?>" disabled/>
												<button type="button" data-cid="<?= $product['rowid']; ?>"
														class="product-page-qty product-page-qty-plus">+
												</button>
											</li>
										</ul>
										<?php $total += $product['subtotal']; ?>
									</td>
									<td><?php echo ngn($product['subtotal']); ?></td>
								<?php endif; ?>
                                <td class="text-center">
                                    <a title="Remove <?= $product['name']; ?> from the cart"
                                       class="fas fa-times table-shopping-remove"
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
					<a class="btn btn-primary col-md-12 col-xs-12 col-sm-12" href="<?= base_url('checkout'); ?>">Checkout</a>
				</div>
			</div>
			<ul class="list-inline">
				<li><a class="btn btn-default" href="<?= base_url(); ?>">Continue Shopping</a>
				</li>
			</ul>
		<?php else: ?>
			<div class="custom-fa-cover">
				<!--<i class="fas fa-cart-arrow-down empty-cart-icon custom-fa text-center"></i>-->
				<img class="img-responsive text-center" style="padding: 10px; margin-top: 10px !important;"
					 src="<?= base_url('assets/img/empty_cart.png') ?>"/>
			</div>
			<div class="text-center">

				<p class="lead custom-text">You haven't fill your shopping cart yet</p>
				<a class="btn btn-primary btn-lg" href="<?= base_url(); ?>">Start Shopping<i
						class="fas fa-long-arrow-right"></i></a>
			</div>
		<?php endif; ?>
	</div>
	<div class="lds-spinner cst-loader " style="display: none;">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="gap"></div>

    <!--  Products recently viewed   -->


    <div class="gap"></div>
	<?php $this->load->view('landing/resources/footer'); ?>
</div>
<script>
	if (!base_url) {
		let base_url = "<?= base_url(); ?>";
	}
</script>
<?php $this->load->view('landing/resources/script'); ?>
<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
	$(function () {
		$('.lazy').Lazy();
	});

	function bind_market(src, destination) {
		$(`.${destination}`).html(src);
	}

	let quantity = $('#quan');
	let count = quantity.data('range');
	let plus = $('.product-page-qty-plus');
	let minus = $('.product-page-qty-minus');
	plus.on('click', function () {
		$('.cst-loader').show();
		let cid = $(this).data('cid');
		let qty = $(`.product-${cid}`).val() * 1;
		plus.prop('disabled', true);
		minus.prop("disabled", false);
		$.ajax({
			url: 'ajax/update_cart_item',
			method: 'POST',
			data: {cid: cid, qty: qty},
			success: function (response) {
				$('.cst-loader').hide();
				if (response) {
					let x = ($('.cart-read').text() * 1) + 1;
					notification_message('The Product quantity has been updated.', 'fas fa-info-circle', 'success');
					bind_market(x, 'cart-read');
					if (quantity.val() >= 1) {
						plus.prop("disabled", true);
					} else {
						minus.prop("disabled", false);
					}
					$('.cart-row').load(base_url + 'cart');
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
		$('.cst-loader').show();
		let cid = $(this).data('cid');
		let qty = $(`.product-${cid}`).val() * 1;
		minus.prop('disabled', true);
		plus.prop("disabled", false);
		if (quantity.val() <= 1) {
			minus.prop("disabled", true);
		}
		$.ajax({
			url: 'ajax/update_cart_item',
			method: 'POST',
			data: {cid: cid, qty: qty},
			success: function (response) {
				$('.cst-loader').hide();
				if (response) {
					let x = ($('.cart-read').text() * 1) - 1;
					notification_message('The Product quantity has been updated.', 'fas fa-info-circle', 'warning');
					bind_market(x, 'cart-read');
					if (quantity.val() <= 1) {
						minus.prop("disabled", true);
					} else {
						minus.prop("disabled", false);
					}
					$('.cart-row').load(base_url + 'cart', function (response, status, xhr) {
						// $(function () {
						// 	$('.lazy').Lazy();
						// });

						$('.lazy').Lazy({
							scrollDirection: 'vertical',
							effect: 'fadeIn',
							visibleOnly: true
						});
					});
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
