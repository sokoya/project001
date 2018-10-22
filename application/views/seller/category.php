<?php $this->load->view('templates/meta_tags'); ?>
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php $this->load->view('templates/head_navbar')?>
    <!--===================================================-->
    <!--END NAVBAR-->

	<div class="boxed">
		<!--CONTENT CONTAINER-->
		<!--===================================================-->
		<div id="content-container">
			<div id="page-head">

				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Category</h1>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->
				<!--Breadcrumb-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<ol class="breadcrumb">
					<li><a href="#"><i class="demo-pli-home"></i></a></li>
					<li><a href="#">Sellers</a></li>
					<li class="active">Category</li>
				</ol>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End breadcrumb-->
			</div>

			<!--Page content-->
			<!--===================================================-->
			<div id="page-content">

				<hr class="new-section-sm bord-no">
				<div class="row">
					<div class="col-lg-12">
                        <?php $this->load->view('msg_view'); ?>
						<div class="panel panel-body text-center">
							<div class="panel-heading">
								<h3>Select A Product Category</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4" style="margin-bottom: 20px;">
										<h5 style="color: #232323;">Select Root Category</h5>
										<select class="rootcat form-control" name="state">
											<option value="el">Electronics</option>
											<option value="WY">Fashion</option>
											<option value="WY">Cars</option>
											<option value="WY">Gadgets and accessories</option>
										</select>
									</div>

									<div class="col-md-4" style="margin-bottom: 20px;">
										<h5 style="color: #232323;">Select Category</h5>
										<select class="subcat form-control" name="state">
											<option value="AL">Mobile Phones</option>
											<option value="WY">Smart Phones</option>
										</select>
									</div>

									<div class="col-md-4" style="margin-bottom: 20px;">
										<h5 style="color: #232323;">Select Sub Category</h5>
										<select class="cat form-control" name="state">
											<option value="AL">Apple Phones</option>
											<option value="WY">Andriod Phones</option>
											<option value="WY">Symbian phones</option>
										</select>
									</div>
								</div>
								<button class="btn btn-primary btn-block" style="margin-top: 40px;">Submit</button>
							</div>
						</div>
					</div>
				</div>


			</div>
			<!--===================================================-->
			<!--End page content-->

		</div>
		<!--===================================================-->
		<!--END CONTENT CONTAINER-->


        <!--ASIDE-->
        <!--===================================================-->
        <?php $this->load->view('templates/aside_menu');?>
        <!--===================================================-->
        <!--END ASIDE-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->

        <!--Menu-->
        <!--================================-->
        <?php $this->load->view('templates/menu'); ?>
        <!--================================-->
        <!--End menu-->
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

	</div>
    <!-- FOOTER -->
    <!--===================================================-->
    <?php $this->load->view('templates/footer'); ?>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
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
