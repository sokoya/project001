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
		<header class="page-header">
			<ol class="breadcrumb page-breadcrumb">
				<li><a href="<?= base_url(); ?>">Home</a>
				</li>
				<li class="active"><?= ucwords($category_detail->name); ?>
				</li>
			</ol>
			<div class="category-selections clearfix">
				<button class="btn btn-custom-primary">Newest First</button>
				<button class="btn btn-custom-primary">Best Sellers</button>
				<button class="btn btn-custom-primary filter-btn"><i class="fa fa-filter"
																	 aria-hidden="true"></i> Filter
				</button>
			</div>
		</header>
		<div class="row">
			<!-- <div class="col-md-3">
                <aside class="category-filters">
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Category</h3>
                        <ul class="cateogry-filters-list">
                            <li><a href="#">Clothing</a>
                            </li>
                            <li><a href="#">Shoes</a>
                            </li>
                            <li><a href="#">Accessories</a>
                            </li>
                            <li><a href="#">Jewerly</a>
                            </li>
                            <li><a href="#">Watches</a>
                            </li>
                            <li><a href="#">Fine Jewerly</a>
                            </li>
                        </ul>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Price</h3>
                        <input type="text" id="price-slider" />
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Relese Date</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Last 30 days<span class="category-filters-amount">(73)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Last 90 days<span class="category-filters-amount">(79)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Comming Soon<span class="category-filters-amount">(76)</span>
                            </label>
                        </div>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Brand</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />191 United<span class="category-filters-amount">(22)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Adidas<span class="category-filters-amount">(87)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Balmain<span class="category-filters-amount">(33)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Diesel<span class="category-filters-amount">(90)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Enzo<span class="category-filters-amount">(97)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Gap<span class="category-filters-amount">(94)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Hanes<span class="category-filters-amount">(76)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Jockey<span class="category-filters-amount">(39)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Just Cavalli<span class="category-filters-amount">(40)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Lacoste<span class="category-filters-amount">(10)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Lee<span class="category-filters-amount">(70)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Nike<span class="category-filters-amount">(40)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Paul Jones<span class="category-filters-amount">(72)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Puma<span class="category-filters-amount">(54)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Shark<span class="category-filters-amount">(27)</span>
                            </label>
                        </div>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Discount</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(13)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(20)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(92)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(30)</span>
                            </label>
                        </div>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Features</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />New<span class="category-filters-amount">(12)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Featured<span class="category-filters-amount">(69)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />On Sale<span class="category-filters-amount">(20)</span>
                            </label>
                        </div>
                    </div>
                </aside>
            </div> -->
			<div id="ont_filter" class="filterbar">
				<div class="w-bg top_menu">
					<a href="javascript:void(0)" class="update_fil filter_btn_submit" style="float: right">Update
						Filter</a>
					<p><span class="filter_close_btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></span> &nbsp;Filter
					</p>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading filter-head filter-first">Price</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-4" style="padding-right: 3px">
								<input type="text" class="form-control price_min" placeholder="&#8358; Min">
							</div>
							<div class="col-xs-4" style="padding-left:  3px !important; padding-right: 3px;">
								<input type="text" class="form-control price_max" placeholder="&#8358; Max">
							</div>
							<div class="col-xs-4">
								<input type="submit" class="price-submit" value="Go">
							</div>
						</div>
					</div>
				</div>

				<!--Brands-->
				<?php if (!empty($brands)): ?>
					<div class="panel panel-default">
						<div
							class="panel-heading filter-head">Brand
							<span style="color: #4c4c4c !important; float: right"><i class="fa fa-minus close-panel"
																					 aria-hidden="true"
																					 data-target="brand_static_vl"></i></span>
						</div>
						<div class="panel-body" id="brand_static_vl">
							<?php foreach ($brands as $brand) : ?>
								<div class="carrito-checkbox">
									<label class="list-label">
										<input class="filter" type="checkbox" name="filterset"
											   data-type="brand_name"
											   data-value="<?= trim($brand->brand_name); ?>"/><?= ucfirst($brand->brand_name); ?>
										<span class="checkmark"></span>
									</label>
								</div>
								<hr class="panel-line"/>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

				<!--Main Colour-->
				<?php if (!empty($colours)) : ?>
					<div class="panel panel-default">
						<div
							class="panel-heading filter-head">Main Colour
							<span style="color: #4c4c4c !important; float: right"><i class="fa fa-minus close-panel"
																					 aria-hidden="true"
																					 data-target="color_static_vl"></i></span>
						</div>
						<div class="panel-body" id="color_static_vl">
							<?php foreach ($colours as $colour) : ?>
								<div class="carrito-checkbox">
									<label class="list-label">
										<input class="filter" type="checkbox" name="filterset"
											   data-type="main_colour"
											   data-value="<?= trim($colour->colour_name); ?>"/><?= ucfirst($colour->colour_name); ?>
										<span class="checkmark"></span>
									</label>
								</div>
								<hr class="panel-line"/>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

				<!--Features-->
				<?php if ($features) : ?>
					<?php $x = 1;
					foreach ($features as $feature => $feature_value) : ?>
						<div class="panel panel-default">
							<div
								class="panel-heading filter-head"><?= preg_replace("/[^A-Za-z 0-9]/", ' ', $feature); ?>
								<span style="color: #4c4c4c !important; float: right"><i class="fa fa-minus close-panel"
																						 aria-hidden="true"
																						 data-target="<?= $feature ?>_vl"></i></span>
							</div>
							<div class="panel-body" id="<?= $feature ?>_vl">
								<?php foreach ($feature_value as $key => $value) : ?>
									<div class="carrito-checkbox">
										<label class="list-label">
											<input class="filter" type="checkbox" name="filterset"
												   data-type="<?= trim($feature); ?>"
												   data-value="<?= trim(preg_replace("/[^A-Za-z0-9-]/", '_', $value)) ?>"/><?= $value; ?>
											<span class="checkmark"></span>
										</label>
									</div>
									<hr class="panel-line"/>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>


			</div>
			<div id="category_body">
				<div class="">
					<div class="row row-sm-gap" data-gutter="10">
						<?php foreach ($products as $product) : ?>
							<div class="col-md-3">
								<div class="product product-sm-left ">
									<ul class="product-labels"></ul>
									<div class="product-img-wrap">
										<img class="product-img"
											 src="<?= base_url('data/products/' . $product->id . '/' . $product->image_name); ?>"
											 alt="<?= $product->product_name; ?>"
											 title="<?= $product->product_name; ?>"/>
									</div>
									<a class="product-link"
									   href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>
									<div class="product-caption">
										<ul class="product-caption-rating">

											<?php
											$rating_counts = $this->product->get_rating_counts($product->id);
											if ($rating_counts) {
												$overall_rating = product_overall_rating($rating_counts);
												$rating_rounded = round($overall_rating);
												for ($i = 1; $i <= $rating_rounded; $i++) {
													?>
													<li class="rated"><i class="fa fa-star"></i>
													</li>
													<?php
												}
												if ($rating_rounded < 5) {
													for ($i = 0; $i < (5 - $rating_rounded); $i++) { ?>
														<li><i class="fa fa-star"></i></li>
														<?php
													}
												}
											} else {
												?>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<?php
											}
											?>
										</ul>
										<h5 class="product-caption-title"><?= word_limiter(ucwords($product->product_name), 14, '...'); ?></h5>
										<h4 class="product-caption-title">
											<strong>Seller: </strong><?= ucfirst($product->first_name); ?></h4>
										<div class="product-caption-price">
											<?php if (!empty($product->discount_price)) : ?> <span
												class="product-caption-price-old"><?= ngn($product->sale_price); ?></span>
												<span
													class="product-caption-price-new"><?= ngn($product->discount_price); ?></span>
											<?php else : ?>

												<span
													class="product-caption-price-new"><?= ngn($product->sale_price); ?></span>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div><!-- col-md-9 -->
			</div>
		</div> <!-- // row -->
	</div>
	<div class="gap"></div>

	<?php $this->load->view('landing/resources/footer'); ?>
</div>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/ionrangeslider.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript"
		src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script>
	let current_url = "<?= current_url()?>";
</script>
<script src="<?= base_url('assets/landing/js/search.js'); ?>"></script>
<script>
	$(document).ready(function () {
		let _category_body = $('#category_body');

		function doReplaceState(url) {
			let state = {current_url: url},
				title = "Carrito MarketPlace";
			history.replaceState(state, title, url);
		}

		function load_page(url) {

			$(_category_body).load(`${url} #category_body`, function (response, status, xhr) {
				if (status === "error") {
					let msg = "Sorry but there was an error: ";
					alert(msg + xhr.status + " " + xhr.statusText);
				}

				doReplaceState(url.toLowerCase());

				$('#processing').hide();
				$(_category_body).show();
			});
		}

		let url = '';
		let filter_string = '';
		$('.filter').change(function () {
			if ($('input[name=filterset]').is(':checked')) {
				let filter_list = {};
				url = '';
				filter_string = '';
				$(_category_body).hide();
				$('#processing').show();
				let items = $('input[name=filterset]:checked');

				items.each(function () {
					let value = $(this).data('value');
					let key = $(this).data('type');

					if (filter_list[key]) {
						if (jQuery.inArray(value, filter_list[key]) !== -1) {
						} else {
							filter_list[key].push(value)
						}
					} else {
						filter_list[key] = [value];
					}
					url = '';
					jQuery.each(filter_list, function (obj) {
						filter_string = '';
						jQuery.each(filter_list[obj], function (id, values) {
							if (filter_string === '') {
								filter_string += values;
							} else {
								filter_string += ',' + values;
							}
						});
						if (url === '') {
							url += `?${obj}=${filter_string}`
						} else {
							url += `&${obj}=${filter_string}`
						}
					});
					// load_page(url);
					console.log(url);

				});
			} else {
				load_page(current_url);
			}
		});
		$('.filter_btn_submit').on('click', function () {
			filterBarClose(load_page, url);
			// console.log(url + 'Current index');
			// load_page(url);
		});
	});


	$('.close-panel').on('click', function () {
		let target = $(this).data('target');
		$(this).toggleClass("fa-minus fa-plus");
		$(`#${target}`).toggle()
	});

	$('.filter_close_btn').on('click', function () {
		filterBarClose();
	});
	// filterBarOpen();
	$('.filter-btn').on('click', function () {
		filterBarOpen();
	});

	// Side bar
	function filterBarOpen() {
		// $('#ont_filter').css({'width': '100%'});
		$('#ont_filter').show();
	}

	function filterBarClose(callback = '', value = '') {
		// $('#ont_filter').css({'width': 0});
		$('#ont_filter').fadeOut(function () {
			if (callback) {
				callback(value);
			}
		});

	}
</script>
</body>
</html>
