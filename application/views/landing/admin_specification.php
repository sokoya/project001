<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.remove_field {
		position: relative;
		font-size: 13px;
		color: #ff5b27;
		bottom: 15px;
		margin-left: 2px;
	}
</style>
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
						Create New Specification</h3>


					<form>
						<div class="alert-notif"></div>

						<div class="form-group">
							<label for="-name">Specification Name *</label>
							<input class="form-control" type="text" name="specification-name"
								   placeholder="Brand" required/>
						</div>
						<div class="well">
							<div class="row">
								<div class="col-md-8"><p
										style="font-weight: bold; position: relative; top: 3px;color:#27AE61;">Enter the
										specification fields</p></div>
								<div class="col-md-4">
									<button class="add_field_button btn btn-primary"
											style="float: right; position: relative;bottom: 1px;">Add New Field
									</button>
								</div>
							</div>


						</div>

						<div class="carrito_wrapper">
						</div>

						<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
							   value="Create Specification"/>
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
	$(document).ready(function () {
		let max_fields = 10;
		const wrapper = $(".carrito_wrapper");
		const add_button = $(".add_field_button");

		let x = 1;
		$(add_button).click(function (e) {
			e.preventDefault();
			if (x < max_fields) {
				x++;
				$(wrapper).append('<div><div class="form-group">\n' +
					'\t\t\t\t\t\t\t<label for="-name">Specification Field *</label>\n' +
					'\t\t\t\t\t\t\t<input class="form-control" type="text" name="specification-field"\n' +
					'\t\t\t\t\t\t\t\t   placeholder="Samsung" required/>\n' +
					'\t\t\t\t\t\t</div><a href="#" class="remove_field">Remove</a></div>');
			}
		});

		$(wrapper).on("click", ".remove_field", function (e) {
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
		})
	});
</script>
</body>
</html>
