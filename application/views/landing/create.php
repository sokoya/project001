<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.well {
		padding: 5px;
		font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	.img-bg{
		padding: 0px !important;
		margin-right: 0px;
	}
	.carrito-box{
		margin-left: 0px !important;
	}

	.img-bg> img {
		width: 100%;		
		position: relative;
		opacity: 0.95;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.carrito-login-box{
		margin-left: -48px;
		margin-right: 0px;
		width: auto;
	}

	.login-box{
		padding: 15px;
	}
	.carrito-box{
		margin-top: 50px;
		background: #fff;
		-webkit-border-radius: 3px;
		border-radius: 3px;
	}
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container-fluid" style="width: 100%">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 3px;"></div>
			<div class="col-md-12 col-lg-12" style="background: #fff;">
				<div class="row">
					<div class="col-md-6 img-bg hidden-xs">
						<img src="<?= base_url('assets/landing/cover-photo.png')?>">
					</div>
					<div class="col-md-6 carrito-box">
						<p class="text-center">
							<img src="<?= base_url('assets/landing/img/carrito-logo.png')?>" width="20%" alt="Carrito logo Image">
						</p>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<?php $this->load->view('landing/msg_view'); ?>
								<div class="carrito-board login-box">
									<?= form_open('create/process', 'autocorrect="off", id="register-form"'); ?>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="first_name">First Name*</label>
												<input class="form-control" type="text" name="signupfirstname"
													   value="<?php if (isset($_POST['signupfirstname'])) echo $_POST['signupfirstname']; ?>"
													   placeholder="First name" required/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="lastname_name">Last Name*</label>
												<input class="form-control" type="text" name="signuplastname"
													   value="<?php if (isset($_POST['signuplastname'])) echo $_POST['signuplastname']; ?>"
													   placeholder="Last Name" required/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="phone_number">Phone Number*</label>
										<input class="form-control" type="number" name="signup-phone" name="phone"
											   value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"
											   placeholder="08022334455" required/>
									</div>
									<div class="form-group">
										<label>Email Address*</label>
										<input class="form-control" type="text" id="signup-email" name="signupemail"
											   value="<?php if (isset($_POST['signupemail'])) echo $_POST['signupemail']; ?>"
											   placeholder="Email Address" required/>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Password*</label>
												<input class="form-control" type="password" id="signup-password" name="signuppassword"
													   placeholder="Password" required/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Repeat Password*</label>
												<input class="form-control" type="password" id="signup-repeat-password"
													   name="signuprepeatpassword" placeholder="Confirm Password" required/>
											</div>
										</div>
									</div>
									<div class="well text-center">
										<div class="checkbox">
											<label>
												<input class="i-check" type="checkbox"/>
												I agree to Carrito <a href="#">Terms & Conditions</a> | <a href="#">
													Policy.</a></label>
										</div>
									</div>
									<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
										   value="Create Account"/>
									<?= form_close(); ?>
									<br/>
									<div class="form_end">
										<a href="<?= base_url(lang('login_link')); ?>">Already Have An Account</a>
									</div>
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
