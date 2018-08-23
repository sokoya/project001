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
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 3px;">
				<?php $this->load->view('landing/msg_view'); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="box-lg" style="margin-top: 14px;">
					<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
						Create An Account</h3>
					<?= form_open('create/process', 'autocorrect="off", id="register-form"'); ?>
					<div class="alert-notif"></div>
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
	<div class="gap gap-small"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
