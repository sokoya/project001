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
		                <h1 class="h3 text-2x">Application Status</h1>
		                <p class="text text-dark"><strong>Hello <?= ucwords($status->first_name . ' ' .$status->last_name)?>, your seller account is on <span clas="text-text-info"><?= ($status->is_seller == 'false') ? 'Review' : ucfirst($status->is_seller); ?></span></strong></p>

                        <?php $this->load->view('msg_view'); ?>
		            </div>
		        </div>
		        
                <div class="pad-all">
                    <a href="<?= base_url(); ?>" class="btn-link mar-rgt">Go to Homepage</a>
                    <!-- <a href="<?= base_url('seller/register'); ?>" class="btn-link mar-lft">Create a seller account</a> -->
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
