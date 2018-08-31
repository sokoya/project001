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
							<label for="sel1">Select Product Root Category*</label>
							<select class="form-control" id="root_cat">
								<option selected="selected">-------------- Select------------------</option>
								<?php $x = 1;
								foreach ($root_categories as $root_category) : ?>
									<option
										value="<?= $root_category->root_category_id; ?>"><?= $root_category->name; ?></option>
									<?php $x++; endforeach; ?>
							</select>
						</div>

						<div class="form-group" id="pr_cat" style="display: none">
							<label for="sel1">Select Product Category*</label>
							<select class="form-control" id="product_cat">
								<option selected="selected">-------------- Select------------------</option>
							</select>
						</div>

						<div class="form-group" id="sr_cat" style="display: none">
							<label for="sel1">Select Product Sub Category*</label>
							<select class="form-control" id="sub_cat">
								<option selected="selected">-------------- Select------------------</option>
							</select>
						</div>

						<div class="form-group spec-fm">

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
<script>

	$("#product_cat").change(function () {
		let product_category = this.value;
		// alert(product_category);

		$('#sr_cat')
			.find('option')
			.remove()
			.end(),
			$.ajax({
				type: 'GET',
				url: base_url + 'admin/get_sub_category',
				data: {
					category_id: product_category
				},
				success: function (data) {
					$("#sr_cat").css("display", "block");
					$('#sub_cat').append('<option  selected="selected">-------------- Select------------------</option>');
					$.each(JSON.parse(data), function (index, element) {
						console.log(element);
						$('#sub_cat').append($('<option>', {
							value: element.sub_category_id,
							text: element.name
						}));
					});
				},
				error: function (response) {
					alert('ERROR' + response);
				}
			});

	});

	$("#sub_cat").change(function () {
		let product_category = this.value;

		$.ajax({
			type: 'GET',
			url: base_url + 'admin/get_specifications_fields',
			data: {
				sub_category_id: product_category
			},
			success: function (data) {
				$.each(JSON.parse(data), function (i, item) {
					console.log(item);
					$.each(item, function (x, y) {
						$(".spec-fm").append(`<div class="form-group">
							<label for="sel1">${x.substr(0, 1).toUpperCase() + x.substr(1)}*</label>
							<div id = "${x}"></div>
						</div>`);
						let sel = $('<select class="form-control">').appendTo(`#${x}`);
						$.each(y, function (a, b) {
							sel.append($("<option>").attr('value', b.name).text(b.name));
						});
					});
				});
			},
			error: function (response) {
				alert('ERROR' + response);
			}
		});

	});

	$("#root_cat").change(function () {
		let root = this.value;
		$('#pr_cat')
			.find('option')
			.remove()
			.end(),
			$.ajax({
				type: 'GET',
				url: base_url + 'admin/get_category',
				data: {
					root_category: root
				},
				success: function (data) {
					$("#pr_cat").css("display", "block");
					$('#product_cat').append('<option  selected="selected">-------------- Select------------------</option>');
					$.each(JSON.parse(data), function (index, element) {
						$('#product_cat').append($('<option>', {
							value: element.category_id,
							text: element.name
						}));
					});
				},
				error: function (response) {
					alert('ERROR' + response);
				}
			});
	});

</script>
</body>
</html>
