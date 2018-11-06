<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/landing/css/checkout.css'); ?>"/>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="gap"></div>
	<div class="container">
		<h4 class="pr-over" style="font-size: 16px; color: #a0a0a0">Checkout</h4>
		<div id="status"></div>
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default" id="delivery-method">
					<div class="panel-heading custom-panel-head">
						<h3 class="panel-title"><i class="fa fa-truck"></i>&nbsp;&nbsp; Delivery / Pickup Method
							<button class="btn-custom-primary btn-new-address">New Address</button>
							<button class="btn-custom-primary">Select Pickup Location</button>
						</h3>
					</div>
					<div class="panel-body" id="register_address" style="display: none">
						<div class="row">
							<div class="col-md-12">
								<?= form_open('','id="new-address-form"'); ?>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group ">
												<label class="checkout-form-input-label" for="first_name">First Name:</label>
												<input type="text" class="form-control checkout-form-input" id="fname" name="first_name" required="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="checkout-form-input-label" for="lname">Last Name:</label>
												<input type="text" class="form-control checkout-form-input" id="lname" name="last_name" required="">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="checkout-form-input-label" for="number_">Mobile Number</label>
												<input type="text" class="form-control checkout-form-input" id="number_" name="phone" required>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="checkout-form-input-label" for="street">Street Address</label>
												<input type="text" class="form-control checkout-form-input" id="street" name="address" required>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<div class="form-group">
													<label class="checkout-form-input-label" for="state">State</label>
													<select class="form-control checkout-form-input" id="state" name="state" required=""><option value="">-- Select Sate --</option>
													</select>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<div class="form-group">
													<label class="checkout-form-input-label" for="city">City</label>
													<select class="form-control checkout-form-input" id="city" name="area" required="">
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<button type="submit" class="btn btn-primary btn-block create-address-btn">
												Submit
											</button>
										</div>
									</div>
								<?= form_close(); ?>
							</div>
						</div>
					</div>
					<div class="panel-body" id="delivery_address">
						<div class="alert alert-warning text-center delivery-warning">Select an existing address or
							create a new address
							to continue
						</div>
						<div class="row" id="delivery_address_box">
							<?php
								if( $addresses) :
									foreach($addresses as $address) : ?>
									<div class="col-md-6">
										<div class="panel panel-default custom-panel pickup-address">
											<div class="panel-heading sub-custom-panel-head">
												<h3 class="panel-title">
													<div class="form-check">
														<input class="form-check-input delivery-box" type="radio"
															   name="address_radio1"
															   id="address_radio1" value="option1">
														<label class="form-check-label" for="address_radio1">
															Select this address
														</label>
													</div>
													<span>Edit</span>
												</h3>
											</div>
											<div class="panel-body">
												<p class="panel-details"><i class="fa fa-user"></i><?= ucfirst($address->first_name) . ' ' . ucfirst($address->last_name)?></p>
												<p class="panel-details"><i class="fa fa-map-marker"></i><?= $address->address; ?></p>
												<p class="panel-details"><i class="fa fa-phone"></i><?= $address->phone; ?> <?= !empty($address->phone2) ? ','.$address->phone2 : ''; ?></p>
											</div>
										</div>
									</div>
							<?php 
								endforeach; 
								endif; ?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading custom-panel-head">
						<h3 class="panel-title"><i class="fa fa-credit-card"></i>&nbsp;&nbsp; Payment Method</h3>
					</div>
					<div class="panel-body pay-method" style="display: none">
						<div class="panel panel-default custom-panel">
							<div class="panel-body pay-panel">
								<div class="form-check">
									<form>
										<p class="form-check-label pay-gate">
											<input class="form-check-input payment-radio" type="radio"
												   name="address_radio1"
												   id="exampleRadios1" value="option1">
											Pay with paystack
											<img src="<?= base_url('assets/landing/img/paystack.png'); ?>">
										</p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading custom-panel-head">
						<h3 class="panel-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp; Review Order</h3>
					</div>
					<div class="panel-body">
						<div class="panel panel-default ">
							<table class="table">
								<tbody>
								<tr>
									<td><img class="panel-pr-image"
											 src="<?= base_url('assets/landing/img/test_product_page/pd.jpg'); ?>">
									</td>
									<td class="parent-block panel-product-title">Sony Xperia Pro 32
										<br/>
										<span>Sold by <span>Philip</span> </span>
									</td>
									<td class="parent-block">
										<ul>
											<li class="product-page-qty-item">
												<button type="button"
														class="product-page-qty product-page-qty-minus">-
												</button>
												<input data-range="10" name="quantity"
													   id="quan"
													   class="product-page-qty product-page-qty-input quantity"
													   type="text"
													   value="1" disabled/>
												<button type="button"
														class="product-page-qty product-page-qty-plus">+
												</button>
											</li>
										</ul>
									</td>
									<td class="parent-block panel-product-price"><span class="pr-price"
																					   data-amount="40200">&#8358;40,200</span>
										<br/>
										<span class="discount">&#8358;40,200 x</span> <span
											class="discount-count">1</span><span class="discount"> item(s)</span></td>
									<td class="parent-block panel-product-action"><a href="javascript:void(0)">Remove
											Item</a><br/>
										<a href="javascript:void(0)">Save for later</a></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading custom-panel-head">
						<h3 class="panel-title summary-title sum-pad">Order Summary <span
								class="panel-summary-quantity"><span class="pr-summary-count">1</span> item(s)</span>
						</h3>
					</div>
					<ul class="list-group cs-sum-grp">
						<li class="list-group-item cs-sm-m">Subtotal: <span class="total-sum">&#8358;40,200</span></li>
						<li class="list-group-item cs-sm-m">Delivery Charges: <span class="charges" data-amount="1250">&#8358;1,250</span>
						</li>
						<li class="list-group-item cs-sm-t">Total: <span class="total-sum-charges">&#8358;41,450</span>
						</li>
						<li class="list-group-item">
							<button class="btn btn-block btn-custom-dark continue-btn" disabled>Continue to Payment
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="gap"></div>

	<?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
<script src="<?= base_url('assets/landing/js/checkout.js'); ?>"></script>
<script> let base_url = "<?= base_url(); ?>"; </script>
</body>
</html>
