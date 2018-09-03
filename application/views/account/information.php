<?php $this->load->view('landing/resources/head_base'); ?>

</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container carrito-dashboard-cover">

		<?php $this->load->view('account/includes/sidebar'); ?>

		<div class="col-md-8">
			<?php $this->load->view('account/includes/sidebar-mobile'); ?>

			<h3 class="carrito-sidebar-header-r hidden-sm hidden-md hidden-xs">Account Information</h3>
			<hr class="carrito-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="carrito-dashboard-card">
						<ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#edit">Edit Information</a></li>
						  <li><a data-toggle="tab" href="#change">Change Password</a></li>
						</ul>
						<div class="tab-content" style="padding:16px;">
						  	<div id="edit" class="tab-pane fade in active">
						    	<?= form_open(); ?>
							    	<div class="form-group row">
							    		<label class="col-sm-3 col-form-label"><h4>Full name:</h4></label>
							    		<div class="col-sm-9">
							    			<input class="form-control" type="text" name="name" placeholder="Sokoya Philip"/>
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-3 col-form-label"><h4>Email:</h4></label>
							    		<div class="col-sm-9">
							    			<input class="form-control" readonly type="email" name="name" value="philip.sokoya@schoolville.com"/>
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-3 col-form-label"><h4>Display Name:</h4></label>
							    		<div class="col-sm-9">
							    			<input class="form-control" name="name" placeholder="Sokoya Philip"/>
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-3 col-form-label"><h4>Phone:</h4></label>
							    		<div class="col-sm-9">
							    			<input class="form-control" type="tel" name="name" placeholder="Sokoya Philip"/>
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-3 col-form-label"><h4>Gener:</h4></label>
							    		<div class="col-sm-9">
							    			<select class="form-control" name="gender">
							    				<option value="male">Male</option>
							    				<option value="female">Female</option>
							    			</select>
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-3 col-form-label"></label>
							    		<div class="col-sm-9">
							    			<button type="submit" class="btn btn-danger col-md-12">SAVE INFORMATION</button>
							    		</div>
							    	</div>
								<?= form_close();?>
						  	</div>
							<div id="change" class="tab-pane fade">
							    <?= form_open(); ?>
							    	<div class="form-group row">
							    		<label class="col-sm-4 col-form-label"><h4>Old Password:</h4></label>
							    		<div class="col-sm-8">
							    			<input class="form-control" type="password" name="old_password" />
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-4 col-form-label"><h4>Email:</h4></label>
							    		<div class="col-sm-8">
							    			<input class="form-control" type="password" name="new_password" />
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-4 col-form-label"><h4>Confirm Password:</h4></label>
							    		<div class="col-sm-8">
							    			<input class="form-control" type="password" name="confirm_password" />
							    		</div>
							    	</div>
							    	<div class="form-group row">
							    		<label class="col-sm-4 col-form-label"></label>
							    		<div class="col-sm-8">
							    			<button type="submit" class="btn btn-danger col-md-12">SAVE INFORMATION</button>
							    		</div>
							    	</div>
								<?= form_close();?>
							</div>
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
