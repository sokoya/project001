<?php $this->load->view('seller/templates/meta_tags'); ?>
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

	<!--NAVBAR-->
	<!--===================================================-->
	<?php $this->load->view('seller/templates/head_navbar'); ?>
	<!--===================================================-->
	<!--END NAVBAR-->

	<div class="boxed">

		<!--CONTENT CONTAINER-->
		<!--===================================================-->
		<div id="content-container">
			<div id="page-head">

				<div class="pad-all text-center">
					<h3>Hello <?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?></h3>
					<p>Welcome back to your dashboard!</p>
				</div>
			</div>


			<!--Page content-->
			<!--===================================================-->
			<div id="page-content">

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-bordered-info panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="demo-psi-cart-coin icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">Top Viewed Products</p>
                                <!--Sparkline pie chart -->
                                <div>
                                    <div class="pad-all text-center">
                                        <?php if($top_views) : foreach( $top_views as $top_view ) : ?>
                                            <p class="mar-no">
                                                <span class="pull-right text-bold"><?= $top_view->views; ?></span> <?= character_limiter($top_view->product_name, 30);?>
                                            </p>
                                        <?php  endforeach; else: ?>
                                        <h5 class="text-dark">You have no product!</h5>
                                            <span><a href="<?= base_url('seller/product/create');?>">Create Product Now</a> </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-bordered-mint panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="demo-psi-credit-card-2 icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">2841</p>
                                <p class="mar-no">Sales</p>
                                <div>
                                    <div class="pad-all">
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">34</span> Completed
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">79</span> Total
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-bordered-purple panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="demo-psi-refresh icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">1</p>
                                <p class="mar-no">Disputes</p>
                                <div>
                                    <div class="pad-all">
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">34</span> Completed
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">79</span> Total
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
				<div class="row">
					<div class="col-lg-6">
						<div id="demo-panel-network" class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Sales Track</h3>
                                <?php if(!$sales_chart) : ?>
                                    <h3 class="text-danger text-center">No Data Available!</h3>
                                <?php endif; ?>
							</div>
							<!--Chart information-->
							<div class="panel-body">
								<div id="sellerchart" style="height: 250px; margin-bottom: 40px;"></div>
								<div class="row">
									<div class="col-lg-3">
										<p class="text-semibold text-uppercase text-main">Today</p>
										<div class="row">
											<div class="col-xs-12">
												<div class="media">
<!--													<div class="media-left">-->
<!--                                                        <span class="text-3x text-thin text-main"-->
<!--															  style="font-size:18px;font-weight:bolder;">&#8358; 25,000</span>-->
<!--													</div>-->
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">

										<div class="col-xs-12 text-sm" style="margin-top:5px;">
											<p>
												<span>Min Sale :</span>
												<span class="pad-lft text-semibold">
					                                        <span class="text-lg"><?= ngn($sales->min_sale); ?></span>
					                                        </span>
											</p>
											<p>
												<span>Max Sale :</span>
												<span class="pad-lft text-semibold">
					                                        <span class="text-lg"><?= ngn($sales->max_sale); ?></span>
					                                        </span>
											</p>
										</div>
									</div>

									<div class="col-lg-3">
										<p class="text-uppercase text-semibold text-main">Total Sales</p>
										<ul class="list-unstyled">
											<li>
												<div class="media pad-btm">
													<div class="media-left">
														<span class=" text-thin text-main text-bold"
															  style="font-size: 18px;"><?= ngn($sales->total_amount); ?></span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--===================================================-->
						<!--End network line chart-->

					</div>
					<div class="col-lg-6">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Order Status</h3>
							</div>
                            <div class="panel-body">
                                <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Order Code</th>
                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Amount</th>
                                        <th class="min-tablet">Ordered On</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($orders as $order) : ?>
                                        <tr>
                                            <td><a href="#" class="btn-link"><?= '#'.$order->order_code; ?></a></td>
                                            <td><?= character_limiter($order->product_name, 30)?></td>
                                            <td><?= $order->qty; ?></td>
                                            <td><?= ngn( $order->amount); ?></td>
                                            <td><?= neatDate($order->order_date); ?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!--===================================================-->
			<!--End page content-->

		</div>
		<!--MAIN NAVIGATION-->
		<!--===================================================-->
		<?php $this->load->view('seller/templates/menu'); ?>
		<!--===================================================-->
		<!--END MAIN NAVIGATION-->

	</div>


	<!-- FOOTER -->
	<!--===================================================-->
	<?php $this->load->view('seller/templates/footer'); ?>
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


<?php $this->load->view('seller/templates/scripts'); ?>
<script>
    $(document).ready(function (x) {
        $('#demo-dt-basic').dataTable( {
            "responsive": true,
            "language": {
                "paginate": {
                    "previous": '<i class="demo-psi-arrow-left"></i>',
                    "next": '<i class="demo-psi-arrow-right"></i>'
                }
            }
        } );
    });
</script>
<script>
	var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	new Morris.Line({
		// ID of the element in which to draw the chart.
		element: 'sellerchart',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
			<?php foreach( $sales_chart as $chart) : ?>
			{month: '<?= $chart->omonth; ?>', value: <?= $chart->sales; ?>},
			<?php endforeach;?>
		],
		// The name of the data record attribute that contains x-values.
		xkey: 'month',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['value'],

		// Custom Formatter for months
		xLabelFormat: function (x) {
			return months[x.getMonth()];
		},
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Sales']
	});
</script>
</body>
</html>
