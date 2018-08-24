<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/admin_head') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 3px;">
				<?php $this->load->view('landing/msg_view'); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="box-lg" style="margin-top: 14px;">
					<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
						Create New Product</h3>
					<form>
						<div class="alert-notif"></div>
						<div class="form-group">
							<label for="sel1">Select Product Category*</label>
							<select class="form-control" id="sel1">
								<option>Computers</option>
								<option>Laptops</option>
								<option>Phones</option>
								<option>Cameras</option>
							</select>
						</div>
						<div class="form-group">
							<label for="sel1">Product Seller</label>
							<select class="form-control" id="sel1">
								<option>Philip</option>
								<option>Jeffrey</option>
								<option>Paul</option>
								<option>Jogn</option>
							</select>
						</div>
						<div class="form-group">
							<label for="sel1">Select SKU*</label>
							<select class="form-control" id="sel1">
								<option>Sku 1</option>
								<option>Sku 2</option>
								<option>Sku 3</option>
								<option>Sku 4</option>
							</select>
						</div>
						<div class="form-group">
							<label for="product-name">Product Name *</label>
							<input class="form-control" type="text" name="product-name"
								   placeholder="Samsung S7" required/>
						</div>
						<div class="form-group">
							<label for="comment">Description *</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>

						<div class="form-group">
							<label for="product-name">Regular price *</label>
							<input class="form-control" type="text" name="product-name"
								   placeholder="&#8358;1,800" required/>
						</div>

						<div class="form-group">
							<label for="product-name">Discounted price *</label>
							<input class="form-control" type="text" name="product-name"
								   placeholder="&#8358;1,200"/>
						</div>

						<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
							   value="Create Product"/>
					</form>
					<br/>
					<div class="form_end">
						<a href="<?= base_url('admin'); ?>">Discard Form</a>
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
