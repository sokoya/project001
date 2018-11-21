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
                                    <div class="pad-all">
                                        <?php if($top_views) : foreach( $top_views as $top_view ) : ?>
                                            <p class="mar-no">
                                                <span class="pull-right text-bold"><?= $top_view->views; ?></span> <?= character_limiter($top_view->product_name, 30);?>
                                            </p>
                                        <?php  endforeach; endif; ?>
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
                                <!--Sparkline pie chart -->
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
                                <!--Sparkline pie chart -->
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
                                    <h3 class="text-danger">No Data Available!</h3>
                                <?php endif; ?>
							</div>

							<!--Chart information-->
							<div class="panel-body">
								<div class="pad-all">
									<div id="sellerchart" style="height: 250px; margin-bottom: 40px;"></div>
								</div>

								<div class="row">
									<div class="col-lg-3">
										<p class="text-semibold text-uppercase text-main">Today</p>
										<div class="row">
											<div class="col-xs-12">
												<div class="media">
													<div class="media-left">
                                                        <span class="text-3x text-thin text-main"
															  style="font-size:18px;font-weight:bolder;">&#8358; 25,000</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">

										<div class="col-xs-12 text-sm" style="margin-top:5px;">
											<p>
												<span>Min Sale</span>
												<span class="pad-lft text-semibold">
					                                        <span class="text-lg">&#8358;22,000</span>
					                                        <span class="labellabel-danger mar-lft">
					                                            <i class="pci-caret-down text-success"></i>
					                                            <smal>+ &#8358;3000</smal>
					                                        </span>
					                                        </span>
											</p>
											<p>
												<span>Max Sale</span>
												<span class="pad-lft text-semibold">
					                                        <span class="text-lg">&#8358;52,000</span>
					                                        <span class="labellabel-success mar-lft">
					                                            <i class="pci-caret-up text-danger"></i>
					                                            <smal>- &#8358;27,000</smal>
					                                        </span>
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
															  style="font-size: 18px;">&#8358;750,000</span>
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

							<!--Data Table-->
							<!--===================================================-->
							<div class="panel-body">
								<div id="demo-dt-basic_wrapper"
									 class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<div class="row">
										<div class="col-sm-6">
											<div class="dataTables_length" id="demo-dt-basic_length"><label>Show <select
														name="demo-dt-basic_length" aria-controls="demo-dt-basic"
														class="form-control input-sm">
														<option value="5">5</option>
														<option value="10">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select> entries</label></div>
										</div>
										<div class="col-sm-6">
											<div id="demo-dt-basic_filter" class="dataTables_filter pull-right">
												<label><input type="search" class="form-control input-sm"
															  placeholder="Search"
															  aria-controls="demo-dt-basic"></label></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table id="demo-dt-basic"
												   class="table table-striped dataTable no-footer dtr-inline collapsed"
												   cellspacing="0" width="100%" role="grid"
												   aria-describedby="demo-dt-basic_info" style="width: 100%;">
												<thead>
												<tr>
													<th>Invoice</th>
													<th>User</th>
													<th>Order date</th>
													<th>Amount</th>
													<th class="text-center">Status</th>
													<th class="text-center">Tracking Number</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td><a href="#" class="btn-link"> Order #53431</a></td>
													<td>Steve N. Horton</td>
													<td><span class="text-muted">Oct 22, 2014</span></td>
													<td>&#8358; 45.00</td>
													<td class="text-center">
														<div class="label label-table label-success">Paid</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td><a href="#" class="btn-link"> Order #53434</a></td>
													<td>Teresa L. Doe</td>
													<td><span class="text-muted">Oct 15, 2014</span></td>
													<td>&#8358; 77.99</td>
													<td class="text-center">
														<div class="label label-table label-info">Shipped</div>
													</td>
													<td class="text-center">CGX0089734574</td>
												</tr>
												<tr>
													<td><a href="#" class="btn-link"> Order #53435</a></td>
													<td>Teresa L. Doe</td>
													<td><span class="text-muted">Oct 12, 2014</span></td>
													<td>&#8358; 18.00</td>
													<td class="text-center">
														<div class="label label-table label-success">Paid</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td><a href="#" class="btn-link">Order #53437</a></td>
													<td>Charles S Boyle</td>
													<td><span class="text-muted">Oct 17, 2014</span></td>
													<td>&#8358; 658.00</td>
													<td class="text-center">
														<div class="label label-table label-danger">Refunded</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td><a href="#" class="btn-link">Order #536584</a></td>
													<td>Scott S. Calabrese</td>
													<td><span class="text-muted">Oct 19, 2014</span></td>
													<td>&#8358; 45.58</td>
													<td class="text-center">
														<div class="label label-table label-warning">Unpaid</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5">
											<div class="dataTables_info" id="demo-dt-basic_info" role="status"
												 aria-live="polite">Showing 1 to 5 of 57 entries
											</div>
										</div>
										<div class="col-sm-7">
											<div class="dataTables_paginate paging_simple_numbers"
												 id="demo-dt-basic_paginate">
												<ul class="pagination">
													<li class="paginate_button previous disabled"
														id="demo-dt-basic_previous"><a href="#"
																					   aria-controls="demo-dt-basic"
																					   data-dt-idx="0" tabindex="0"><i
																class="demo-psi-arrow-left"></i></a></li>
													<li class="paginate_button active"><a href="#"
																						  aria-controls="demo-dt-basic"
																						  data-dt-idx="1"
																						  tabindex="0">1</a></li>
													<li class="paginate_button "><a href="#"
																					aria-controls="demo-dt-basic"
																					data-dt-idx="2" tabindex="0">2</a>
													</li>
													<li class="paginate_button "><a href="#"
																					aria-controls="demo-dt-basic"
																					data-dt-idx="3" tabindex="0">3</a>
													</li>
													<li class="paginate_button disabled" id="demo-dt-basic_ellipsis"><a
															href="#" aria-controls="demo-dt-basic" data-dt-idx="4"
															tabindex="0">…</a></li>
													<li class="paginate_button "><a href="#"
																					aria-controls="demo-dt-basic"
																					data-dt-idx="5" tabindex="0">6</a>
													</li>
													<li class="paginate_button next" id="demo-dt-basic_next"><a href="#"
																												aria-controls="demo-dt-basic"
																												data-dt-idx="6"
																												tabindex="0"><i
																class="demo-psi-arrow-right"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--===================================================-->
							<!--End Data Table-->

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
