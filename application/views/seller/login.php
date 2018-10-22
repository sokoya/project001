<?php $this->load->view('seller/templates/meta_tags.php'); ?>
</head>
<body>
    <div id="container" class="cls-container">
        
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3 text-2x">Login</h1>
		                <p class="text-semibold">Sign In to your seller account</p>
                        <?php $this->load->view('msg_view'); ?>
		            </div>
		            <?= form_open('seller/login/process'); ?>
		                <div class="form-group">
		                    <input type="email" class="form-control" placeholder="Username" name="email" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" name="password" placeholder="Password">
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">Remember me</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
		            <?= form_close(); ?>
		        </div>
		
		        <div class="pad-all">
		            <a href="<?= base_url('seller/reset'); ?>" class="btn-link mar-rgt">Forgot password ?</a>
		            <a href="<?= base_url('seller/register'); ?>" class="btn-link mar-lft">Create an account</a>
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
        <script src="<?= base_url('assets/') . $tag; ?>"></script>
    <?php endforeach;?>
</body>
</html>
