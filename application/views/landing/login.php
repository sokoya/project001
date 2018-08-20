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
	<div class="navbar-before mobile-hidden">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="navbar-before-sign">Everything You Need is theBox</p>
				</div>
				<div class="col-md-6">
					<ul class="nav navbar-nav navbar-right navbar-right-no-mar">
						<li><a href="#">About Us</a>
						</li>
						<li><a href="#">Blog</a>
						</li>
						<li><a href="#">Contact Us</a>
						</li>
						<li><a href="#">FAQ</a>
						</li>
						<li><a href="#">Wishlist</a>
						</li>
						<li><a href="#">Help</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
		<h3 class="widget-title">Member Login</h3>
		<p>Welcome back, friend. Login to get started</p>
		<hr/>
		<form>
			<div class="form-group">
				<label>Email or Username</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="checkbox">
				<label>
					<input class="i-check" type="checkbox"/>Remember Me</label>
			</div>
			<input class="btn btn-primary" type="submit" value="Sign In"/>
		</form>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
			</li>
			<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
			</li>
		</ul>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
		<h3 class="widget-title">Create TheBox Account</h3>
		<p>Ready to get best offers? Let's get started!</p>
		<hr/>
		<form>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="form-group">
				<label>Repeat Password</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="checkbox">
				<label>
					<input class="i-check" type="checkbox"/>Subscribe to the Newsletter</label>
			</div>
			<input class="btn btn-primary" type="submit" value="Create Account"/>
		</form>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-login-dialog" class="popup-text">Already Member</a>
			</li>
		</ul>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
		<h3 class="widget-title">Password Recovery</h3>
		<p>Enter Your Email and We Will Send the Instructions</p>
		<hr/>
		<form>
			<div class="form-group">
				<label>Your Email</label>
				<input class="form-control" type="text"/>
			</div>
			<input class="btn btn-primary" type="submit" value="Recover Password"/>
		</form>
	</div>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<!-- Start your conytainer class here get reference from the theme -->
	<div class="container">
		<div class="row ">
			<div class="col-md-10 col-md-offset-1">
				<?php $this->load->view('landing/msg_view'); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="box-lg" style="margin-top: 14px;">
					<div class="row" data-gutter="60">
						<div class="alert-notif"></div>
						<div class="col-md-7" style="margin-bottom: 40px;">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Sign in</h3>
                            <form id="login-form" action="<?= base_url('account/login'); ?>" method="post">
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
							</form>
							<br />
							<div class="form_end">
								<a href="<?= base_url('resetpassword'); ?>">Forgot Your Password?</a>
							</div>
						</div>                        
						<div class="col-md-5">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Don't Have An Account? </h3>
							<div class="form-group">
								<a href="<?= base_url('account/create'); ?>" class="carrito_btn_create col-md-12 col-sm-12 col-xs-12">Create An Account.</a>
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


<script>
	Carrito Login validation
	$('document').ready(function () {
		/* validation */
		$("#login-form").validate({
			rules:
				{
					loginemail: {
						required: true,
						email: true
					},
					loginpassword: {
						required: true,
					},
				},
			messages:
				{
					loginpassword: {
						required: "Provide a Password",
						minlength: "Password Needs To Be Minimum of 6 Characters"
					},
					loginemail: "Enter a Valid Email",
				},
			submitHandler: submitLoginForm
		});
		// End Validation

		// Carrito form submit
		

		function submitLoginForm() {
			$.ajax({

				type: 'POST',
				url: base_url + 'account/alogin',
				data: data,

				success: function (data) {
                    console.log(data);
					if (data.status === "success") {
                        $('.alert-notif').html('<p>' + data.message + '</p>');
						console.log("Success")

					}
					else if (data.status === "error") {
						$('.alert-notif').html('<p>' + data.message + '</p>');
                        console.log("Error")
					}
					else {
						console.log("An unknown error occurred")
					}
				}
			});
			return false;
		}
	});

</script>
</body>
</html>
