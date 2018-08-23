<?php $this->load->view('landing/resources/head_base'); ?>
<style>

	.well {
		padding: 5px;
		font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
	}

</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

	<!-- Start your conytainer class here get reference from the theme -->
	<div class="container">
		<div class="row ">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 3px;">
				<?php $this->load->view('landing/msg_view'); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="box-lg" style="margin-top: 14px;">
					<div class="row" data-gutter="60">
						<div class="alert-notif"></div>
						<div class="col-md-7" style="margin-bottom: 40px;">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Sign in</h3>
                            <?= form_open('login/process', 'id="login-form"'); ?>
								<div class="form-group">
									<label>Email Address*</label>
									<input class="form-control" type="email" name="loginemail" placeholder="Enter your email" required/>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password" name="loginpassword" placeholder="Enter your password" required/>
								</div>
								<div class="checkbox">
									<label>
										<input class="i-check" type="checkbox"/>Remember me</label>
								</div>
								<input class="carrito_btn_sign col-md-12 col-sm-12 col-xs-12" type="submit"
									   value="Sign in"/>
							<?= form_close(); ?>
							<br />
							<div class="form_end">
								<a href="<?= base_url(lang('forgot_password_link')); ?>"><?= lang('forgot_password'); ?></a>
							</div>
						</div>                        
						<div class="col-md-5">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Don't Have An Account? </h3>
							<div class="form-group">
								<a href="<?= base_url(lang('create_account_link')); ?>" class="carrito_btn_create col-md-12 col-sm-12 col-xs-12">Create An Account.</a>
							</div>
						</div>
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
