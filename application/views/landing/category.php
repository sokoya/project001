<?php $this->load->view('landing/resources/head_base'); ?>

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
				<li class="active">Cell Phones <span class="text-dark"><strong><?= number_format(count($products)) .' results'; ?></strong></span> </li>
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
					</div>
					<?php if(!empty($brands)): ?>
					<div class="category-filters-section">
						<h3 class="widget-title-sm">Brand</h3>
						<?php foreach( $brands as $brand ) :?>
						<div class="checkbox">
							<label>
								<input class="i-check" type="checkbox"/><?= ucfirst($brand->brand_name); ?><span
									class="category-filters-amount">(<?= $brand->brand_count; ?>)</span>
							</label>
						</div>
						<?php endforeach ;?>
					</div>
					<?php endif; ?>
					<?php if(!empty($colours)) :?>
					<div class="category-filters-section">
						<h3 class="widget-title-sm">Main Colour</h3>
						<?php foreach( $colours as $colour ) :?>
						<div class="checkbox">
							<label>
								<input class="i-check" type="checkbox"/><?= ucfirst($colour->colour_name); ?><span
									class="category-filters-amount">(<?= $colour->colour_count; ?>)</span>
							</label>
						</div>
						<?php endforeach ;?>
					</div>
					<?php endif; ?>
					<!-- Features -->
					<div class="category-filters-section">
						<?php foreach($features as $feature => $feature_value) :?>
						<div class="accordion" id="<?=trim($feature);?>">
							<div class="panel">
								<div class="panel-header">
									<h3 class="widget-title-sm" >
										<a href="#" data-toggle="collapse" onclick="javascript:void(0);" data-target="#<?= trim($feature).'-1'; ?>" araia-expanded="true" arial-controls="<?= trim($feature).'-1'; ?>">
											<?= $feature; ?>											
										</a>	
									</h3>
								</div>
								<div id="<?= trim($feature).'-1'; ?>" class="collapse" aria-labeledby="<?= $feature; ?>" data-parent="#<?= trim($feature); ?>">
									<div class="panel-body">
										<?php foreach($feature_value as $key => $value ) :?>
											<div class="checkbox">
												<label>
													<input class="i-check" type="checkbox"/><?= $value; ?>
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
				<div class="row" data-gutter="15">
					<?php foreach( $products as $product ) : ?>
						<div class="col-md-4">
							<div class="product">
								<?php  if( !empty($product->discount_price )): ?>
									<ul class="product-labels">
										<li><?= get_discount( $product->sale_price, $product->discount_price);?></li>
										<!-- Call the discount calculator her -->
									</ul>
								<?php endif; ?>
								<div class="product-img-wrap">
									<img class="product-img"
										 src="<?= base_url('assets/landing/img/test_product/29.jpg'); ?>"
										 alt="Image Alternative text" title="Image Title"/>
								</div>
								<a class="product-link" target="_blank;" href="<?= base_url(urlify($product->product_name, $product->id)); ?>" ></a>
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
									<h5 class="product-caption-title"><?= word_limiter(ucwords($product->product_name), 7,'...');  ?></h5>
									<div class="product-caption-price">
										<?php if(!empty( $product->discount_price)) :?>
											<span class="product-caption-price-new"><?= ngn($product->discount_price); ?></span>
											<span class="product-caption-price-old"><sup><?= ngn($product->sale_price);?> </sup></span>
										<?php else : ?>
											<span class="product-caption-price-new"><?= ngn($product->sale_price);?> </span>
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
	<div class="gap"></div>
</div>

<?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
