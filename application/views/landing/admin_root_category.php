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
						Create Root Category</h3>
					<form>
						<div class="alert-notif"></div>
						<div class="form-group">
							<label for="root-category-name">Root Category Name *</label>
							<input class="form-control" type="text" name="root-category-name"

								   placeholder="Electronics" required/>
						</div>

						<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
							   value="Create Root Category"/>
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
