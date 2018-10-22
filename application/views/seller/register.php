<?php $this->load->view('seller/templates/meta_tags.php'); ?>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">
        
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
		
		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3 text-2x">Create a New Account</h1>
		                <p class="text text-dark">Come join the Carrito community! Let's set up your account.</p>

                        <?php $this->load->view('msg_view'); ?>
		            </div>
		            <?= form_open('seller/register/process')?>
		                <div class="row">
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="First name" required autofocus name="firstname">
		                        </div>
		                    </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First name" required name="lastname">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-mail" required name="email">
                                </div>
                            </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="password" class="form-control" placeholder="Password" required name="password">
		                        </div>
		                    </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                                </div>
                            </div>
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and Conditions</a></label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
		            <?= form_close(); ?>
		        </div>
		        <div class="pad-all">
		            Already have an account ? <a href="<?= base_url('seller/login'); ?>" class="btn-link mar-rgt text-bold">Sign In</a>
		        </div>
		    </div>
		</div>
		<!--===================================================-->
		
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


        
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <?php foreach ($scripts as $tag ) : ?>
        <script src="<?= base_url('assets/js/') . $tag; ?>"></script>
    <?php endforeach;?>
</body>
</html>
