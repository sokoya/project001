<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
<style type="text/css">
	.feature-attribute:hover {
		cursor: pointer;
	}

	.carrito-checkbox {
		display: block;
		position: relative;
		padding-left: 25px;
		margin-bottom: 10px;
		cursor: pointer;
		font-size: 14px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	.carrito-checkbox input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
	}

	.checkmark {
		cursor: pointer;
		position: absolute;
		top: 0;
		left: 0;
		padding: 3px;
		margin-top: 2px;
		height: 15px;
		width: 15px;
		border: solid 1px #74c68366;;
		background-color: #fff;
	}

	.carrito-checkbox:hover input ~ .checkmark {
		border-color: #74c68366;
	}

	.carrito-checkbox input:checked ~ .checkmark {
		background-color: #74c683;
	}

	;

	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.carrito-checkbox input:checked ~ .checkmark:after {
		display: block;
		color: white;
	}

	/* Style the checkmark/indicator */
	.carrito-checkbox .checkmark:after {
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}
</style>
</head>
<body>

<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category'); ?>
	<?php $this->load->view('landing/resources/head_menu'); ?>

	<div class="container">
		<?php if (empty($products)) : ?>
			<div class="row">
				<div class="gap-large"></div>
				<h2 class="text-center">Oops! Sorry, we couldn't find products on this section.</h2>
				<p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find
						product</a></p>
			</div>
		<?php else : ?>
			<header class="page-header">
				<ol class="breadcrumb page-breadcrumb">
					<li><a href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="active">Cell Phones <span
							class="text-dark"><strong><?= number_format(count($products)) . ' results'; ?></strong></span>
					</li>
				</ol>
				<ul class="category-selections clearfix">
					<li><span class="category-selections-sign">Sort by :</span>
						<select class="category-selections-select">
							<option selected>Newest First</option>
							<option>Best Sellers</option>
							<option>Trending Now</option>
							<option>Best Raited</option>
							<option>Price : Lowest First</option>
							<option>Price : Highest First</option>
							<option>Title : A - Z</option>
							<option>Title : Z - A</option>
						</select>
					</li>
				</ul>
			</header>
			<div class="row">

				<div class="col-md-3">
					<aside class="category-filters">
						<div class="category-filters-section">
							<h3 class="widget-title-sm">Category</h3>
							<ul class="cateogry-filters-list">
								<li><a href="#">Tv, Audio &amp; Home Theater</a>
								</li>
								<li><a href="#">Camera, Photo &amp; Video</a>
								</li>
								<li><a href="#">Computers &amp; Accessories</a>
								</li>
								<li><a href="#">Cell Phones &amp; Accessories</a>
								</li>
								<li><a href="#">Business &amp; Office</a>
								</li>
								<li><a href="#">Car &amp; GPS</a>
								</li>
								<li><a href="#">Audio & Accessories</a>
								</li>
								<li><a href="#">Software</a>
								</li>
								<li><a href="#">Video Games</a>
								</li>
							</ul>
						</div>
						<div class="category-filters-section">
							<h3 class="widget-title-sm">Price</h3>
							<input type="text" id="price-slider"/>
							<input type="hidden" id="hidden_minimum_price" name="">
							<input type="hidden" id="hidden_maximum_price" name="">
						</div>
						<?php if (!empty($brands)): ?>
							<div class="category-filters-section">
								<h3 class="widget-title-sm">Brand</h3>
								<?php foreach ($brands as $brand) : ?>
									<div class="carrito-checkbox">
										<label>

											<input class="filter" type="checkbox" data-type="brand_name"
												   name="filterset"
												   data-value="<?= trim($brand->brand_name); ?>"><?= ucfirst($brand->brand_name); ?>
											<span class="checkmark"></span>
											<span class="category-filters-amount">(<?= $brand->brand_count; ?>)</span>
										</label>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<?php if (!empty($colours)) : ?>
							<div class="category-filters-section">
								<h3 class="widget-title-sm">Main Colour</h3>
								<?php foreach ($colours as $colour) : ?>
									<div class="carrito-checkbox">
										<label>
											<input class="filter" type="checkbox" data-type="main_colour"
												   name="filterset"
												   data-value="<?= trim($colour->colour_name); ?>"/><?= ucfirst($colour->colour_name); ?>
											<span class="checkmark"></span>
											<span class="category-filters-amount">(<?= $colour->colour_count; ?>)</span>
										</label>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<!-- Features -->
						<div class="category-filters-section">
							<?php foreach ($features as $feature => $feature_value) : ?>
								<div class="accordion" id="<?= trim($feature); ?>">
									<div class="panel feature-attribute">
										<div class="panel-header feature-attribute">
											<div class="panel-title" data-toggle="collapse"
												 data-target="#<?= trim($feature) . '-1'; ?>" araia-expanded="true"
												 arial-controls="<?= trim($feature) . '-1'; ?>">
												<h3 class="widget-title-sm">
													<?= $feature; ?>
												</h3>
											</div>
										</div>
										<div id="<?= trim($feature) . '-1'; ?>" class="collapse"
											 aria-labeledby="<?= $feature; ?>" data-parent="#<?= trim($feature); ?>">
											<div class="panel-body">
												<?php foreach ($feature_value as $key => $value) : ?>
													<div class="carrito-checkbox">
														<label>

															<input class="filter" type="checkbox" name="filterset"
																   data-type="<?= trim($feature); ?>"
																   data-value="<?= trim($value) ?>"/><?= $value; ?>
															<span class="checkmark"></span>
														</label>
													</div>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</aside>
				</div>
				<div class="col-md-9">
					<div id="processing"
						 style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
						<div class="text"
							 style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
							<img src="<?= base_url('assets/landing/img/load.gif'); ?>" alt="Processing...">
							Processing your request. <strong
								style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">Please
								Wait! </strong>
						</div>
					</div>
					<div id="category_body">
						<div class="row filter_data" data-gutter="15">
							<?php foreach ($products as $product) : ?>
								<div class="col-md-4">
									<div class="product">
										<?php if (!empty($product->discount_price)): ?>
											<ul class="product-labels">
												<li><?= get_discount($product->sale_price, $product->discount_price); ?></li>
												<!-- Call the discount calculator her -->
											</ul>
										<?php endif; ?>
										<div class="product-img-wrap">
											<img class="product-img"
												 src="<?= base_url('assets/landing/img/test_product/29.jpg'); ?>"
												 alt="Image Alternative text" title="Image Title">
										</div>
										<a class="product-link"
										   href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>
										<div class="product-caption">
											<!-- <ul class="product-caption-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                            </ul> -->
											<h5 class="product-caption-title"><?= word_limiter(ucwords($product->product_name), 7, '...'); ?></h5>
											<div class="product-caption-price">
												<?php if (!empty($product->discount_price)) : ?>
													<span
														class="product-caption-price-new"><?= ngn($product->discount_price); ?></span>
													<span
														class="product-caption-price-old"><sup><?= ngn($product->sale_price); ?> </sup></span>
												<?php else : ?>
													<span
														class="product-caption-price-new"><?= ngn($product->sale_price); ?> </span>
												<?php endif; ?>
											</div>
											<!-- <ul class="product-caption-feature-list">
                                                <li>Available for pickup</li>
                                            </ul> -->
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p class="category-pagination-sign">58 items found in Cell Phones. Showing 1 - 12</p>
							</div>
							<div class="col-md-6">
								<nav>
									<ul class="pagination category-pagination pull-right">
										<li class="active"><a href="#">1</a>
										</li>
										<li><a href="#">2</a>
										</li>
										<li><a href="#">3</a>
										</li>
										<li><a href="#">4</a>
										</li>
										<li><a href="#">5</a>
										</li>
										<li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<div class="gap"></div>
</div>

<?php $this->load->view('landing/resources/footer'); ?>
</div>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/ionrangeslider.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>let base_url = "<?= base_url('catalog'); ?>"</script>
<script>
	// price slider
	// $("#price-slider").ionRangeSlider({
	//     min: 1000,
	//     max: 50000,
	//     type: 'double',
	//     prefix: "&#8358;",
	//     prettify: false,
	//     hasGrid: true
	// });
	$(document).ready(function () {
		let filter_list = [];
		$('.filter').change(function () {
			let action = 'fetch_data';
			$('#category_body').hide();
			$('#processing').show();
			let items = $('input[name=filterset]:checked');
			items.each(function () {
				let value = $(this).data('value'); // apple
				let key = $(this).data('type'); // brand_name

				if (filter_list[key]) {
					if (jQuery.inArray(value, filter_list[key]) !== -1) {
					} else {
						filter_list[key].push(value)
					}
				} else {
					filter_list[key] = [value];
				}
			});

			console.log(filter_list);

			$.ajax({
				type: "POST",
				url: base_url + '/product/fetch_data',
				data: {
					action: action,
					filters: filter_list
				},
				success: function (response) {
					console.log(`Successful ${response}`);
					$('#category_body').show();
					$('#processing').hide();
				},
				error: function (response) {
					console.log(`Failed ${response}`);
					$('#category_body').show();
					$('#processing').hide();
				},

			});
		});


		// function filter_data(){
		// 	$('.processing').show();
		// 	let action = 'fetch_data';
		// 	// price
		// 	// let minimum_price = $('#hidden_minimum_price').val();
		// 	// let maximum_price = $('#hidden_maximum_price').val();
		// 	let filters = get_filter('filter');
		//
		// 	$.ajax({
		// 		url: base_url +'/product/fetch_data',
		// 		method: "POST",
		// 		data: {
		// 			action:action,filters:filters
		// 		},
		// 		success: function(data){
		//
		// 			$('.filter_data').html(data)
		// 		}
		// 	});
		// }

		function get_filter(class_name) {
			let filter = [];
			$(`.${class_name}:checked`).each(function () {
				let value = $(this).data('value'); // apple
				let key = $(this).data('type'); // brand_name
				// filter[key] = value + ',';
				// console.log(filter);
				if (!(key in filter)) {
					filter[key] = value;
					// filter.push($(this).val('data-value'));
				} else {
					$.extend(filter, {key: "," + value});
					// filter.key = value +',';
				}
				console.log(filter);

			});
			return filter;
		}
	});
</script>
</body>
</html>
