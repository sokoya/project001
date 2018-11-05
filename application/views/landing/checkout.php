<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

		<div class="container">
            <header class="page-header">
                <h1 class="page-title">Checkout Order</h1>
            </header>
            <?php $this->load->view('landing/msg_view'); ?>
            <div class="row row-col-gap" data-gutter="60">
            	<?= form_open(); ?>
	                <div class="col-md-4">
	                    <h3 class="widget-title">Order Info</h3>
	                    <div class="box">
	                        <table class="table">
	                            <thead>
	                                <tr>
	                                    <th>Product</th>
	                                    <th>QTY</th>
	                                    <th>Price</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<?php $subtotal = $x = 0; foreach ($this->cart->contents() as $cart): ?>                                    
	                                <tr>
	                                    <td><?= word_limiter(ucwords($cart['name']), 7, '...'); ?></td>
	                                    <td><?= $cart['qty']; ?></td>
	                                    <td>
	                                    	<?= ngn($cart['price']); ?>
	                                    	
	                                    	<input type="hidden" name="order[]" value="<?= base64_encode($user->id) .'|'.$cart['id'].'|'.base64_encode($cart['options']['seller']).'|'.$cart['qty'].'|'.'Variation: '. $cart['options']['variation'] . '/ Colour:' . $cart['options']['colour'].'|'.$cart['price']?>">
	                                    </td>
	                                    <?php $subtotal += ($cart['qty'] * $cart['price'])?>
	                                </tr>
	                            	<?php $x++; endforeach; ?>
	                                <tr>
	                                    <td>Subtotal</td>
	                                    <td></td>
	                                    <td><?= ngn($subtotal); ?></td>
	                                </tr>
	                                <tr>
	                                    <td>Total</td>
	                                    <td></td>
	                                    <td>
	                                    	<?= ngn($this->cart->total()); ?>
	                                    	<?= form_hidden('total', $this->cart->total()); ?>
	                                    </td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <h3 class="widget-title">Billng Details</h3>
	                    <div class="form-group">
	                        <label>First &amp; Last Name</label>
	                        <input class="form-control" required="" autofocus="" type="text" name="customer_name" value="<?= $user->first_name. ' ' . $user->last_name; ?>" />
	                    </div>
	                    <div class="form-group">
	                        <label>E-mail</label>
	                        <input class="form-control" type="text" disabled name="customer_email" required value="<?= $user->email; ?>" />
	                    </div>
	                    <div class="form-group">
	                        <label>Phone Number</label>
	                        <input class="form-control" type="text" name="customer_phone" required value="<?= $user->phone; ?>" />
	                    </div>
	                    
	                    <div class="row">
	                        <div class="col-md-8">
	                            <div class="form-group">
	                                <label>City</label>
	                                <input class="form-control" type="text" name="city" value="<?= $user->city;?>" />
	                            </div>
	                        </div>
	                        <div class="col-md-4">
	                            <div class="form-group">
	                                <label>Zip/Postal</label>
	                                <input class="form-control" type="text" name="zip_code" value="<?= $user->zip_code; ?>" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Address</label>
	                        <input class="form-control" type="text" name="address" required value="<?= $user->address; ?>" />
	                    </div>
	                </div>
	                <div class="col-md-4">
	                	<h3 class="widget-title">Payment</h3>
	                    <div class="cc-form">
	                        <div class="clearfix">
	                            <div class="form-group form-group-cc-number">
	                                <label>Card Number</label>
	                                <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" required type="text" name="card_number" /><span class="cc-card-icon"></span>
	                            </div>
	                            <div class="form-group form-group-cc-cvc">
	                                <label>CVC</label>
	                                <input class="form-control" placeholder="xxxx" type="number" name="cvc" />
	                            </div>
	                        </div>
	                        <div class="clearfix">
	                            <div class="form-group form-group-cc-name">
	                                <label>Cardholder Name</label>
	                                <input class="form-control" type="text" name="cardholder_name" />
	                            </div>
	                            <div class="form-group form-group-cc-date">
	                                <label>Valid Thru</label>
	                                <input class="form-control" placeholder="mm/yy" type="date" name="valid_through" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="gap gap-small"></div>
	                    <img src="img/paypal.png" alt="Image Alternative text" title="Image Title" />
	                    <p>Important: You will be redirected to Paystack's website to securely complete your payment.</p>
	                    <button type="submit" class="btn btn-primary">Pay With PayStack</button>
	                </div>
                <?= form_close(); ?>
            </div>
        </div>
        <div class="gap"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
