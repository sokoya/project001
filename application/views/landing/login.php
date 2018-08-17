<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.carrito_btn_sign {
		font-weight: bold;
		color: #fff;
		text-align: center;
		background: #0070A3;
		border: 1px solid #005F8B;
		padding: 10px;
	}

	.carrito_btn_create {
		font-weight: bold;
		color: #fff;
		text-align: center;
		background: #27AE61;
		border: 1px solid #219452;
		padding: 10px;
	}

	.form_end {
		padding-top: 25px !important;
		color: #444;
		text-align: center;
		font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
	}

	.hr-text {
		line-height: 1em;
		position: relative;
		outline: 0;
		border: 0;
		color: black;
		text-align: center;
		height: 1.5em;
		opacity: .5;
	}

	.hr-text:before {
		content: '';
		background: linear-gradient(to right, transparent, #818078, transparent);
		position: absolute;
		left: 0;
		top: 50%;
		width: 100%;
		height: 1px;
	}

	.hr-text:after {
		content: attr(data-content);
		position: relative;
		display: inline-block;
		color: black;
		padding: 0 .5em;
		line-height: 1.5em;
		/*color: #818078;*/
		background-color: #fcfcfa;
	}
	.well{
		padding: 5px;
		font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
	}

</style>
</head>
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
					<input class="i-check" type="checkbox"/>Remeber Me</label>
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
			<li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
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
			<div class="col-md-8 col-md-offset-2 ">
				<div class="box-lg" style="margin-top: 14px;">
					<div class="row" data-gutter="60">
						<div class="col-md-6" style="margin-bottom: 40px;">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Sign in</h3>
							<form>
								<div class="form-group">
									<label>Email Address*</label>
									<input class="form-control" type="text"/>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="text"/>
								</div>
								<div class="checkbox">
									<label>
										<input class="i-check" type="checkbox"/>Remember me</label>
								</div>
								<input class="carrito_btn_sign col-md-12 col-sm-12 col-xs-12" type="submit"
									   value="Sign in"/>
							</form>
							<div class="form_end">
								<a href="#">Forgot Your Password?</a>
							</div>
						</div>
						<hr class="hr-text hidden-lg hidden-md" data-content="OR">
						<!--						<span></span>-->
						<div class="col-md-6">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Create Account</h3>
							<form>
								<div class="form-group">
									<label>Email Address*</label>
									<input class="form-control" type="text"/>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Password*</label>
											<input class="form-control" type="text"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Repeat Password*</label>
											<input class="form-control" type="text"/>
										</div>
									</div>
								</div>
								<div class="well text-center">
									<div class="checkbox">
										<label>
											<input class="i-check" type="checkbox"/>
											I agree to Carrito <a href="#">Terms & Conditions</a> | <a href="#"> Policy.</a></label>
									</div>
								</div>
								<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
									   value="Create Account"/>

								
							</form>
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
