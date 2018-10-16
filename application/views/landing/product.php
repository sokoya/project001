<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
        <?php if( $product->product_status !== 'pending' ) : ?>
            <div class="row">
                <div class="gap-large"></div>
                <h2 class="text-center">Oops! The product you looking for is not active.</h2>
                <p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find product</a></p>
            </div>
        <?php elseif(empty($product) || empty($variation) || empty($variations) || empty($gallery)): ?>
            <div class="row">
                <div class="gap-large"></div>
                <h2 class="text-center">Oops! The product you looking does not exist.</h2>
                <p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find product</a></p>
            </div>
		<?php else : ?>
            <header class="page-header">
                <ol class="breadcrumb page-breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="<?= base_url('catalog/' .urlify($product->rootcategory)); ?>"><?= ucwords($product->rootcategory); ?></a>
                    </li>
                    <li><a href="<?= base_url('catalog/' .urlify($product->category)); ?>"><?= ucwords($product->category); ?></a>
                    </li>
                    <?php if( !empty($product->brand_name)): ?>
                        <li><a title="<?=$product->brand_name;?>" href="<?= base_url('catalog/brand/') . strtolower($product->brand_name); ?>"><?= ucwords($product->brand_name); ?></a>
                        </li>
                    <?php endif;?>
                    <li class="active"><?= ucwords($product->product_name);  ?></li>
                </ol>
            </header>
            <div class="row">
                <div class="col-md-5">
                    <div class="product-page-product-wrap jqzoom-stage">
                        <div class="clearfix">
                            <a href="<?= base_url('assets/landing/img/test_product_page/xperia/1-b.jpg'); ?>" id="jqzoom"
                               data-rel="gal-1">
                                <img src="<?= base_url('assets/landing/img/test_product_page/xperia/1.jpg'); ?>"
                                     alt="<?= $product->product_name; ?>"
                                     title="<?= ucwords($product->product_name)?>"/>
                            </a>
                        </div>
                    </div>
                    <ul class="jqzoom-list">
                        <li>
                            <a class="zoomThumbActive" href="javascript:void(0)"
                               data-rel="{gallery:'gal-1', smallimage: '<?= base_url('assets/landing/img/test_product_page/xperia/1.jpg'); ?>', largeimage: '<?= base_url('assets/landing/img/test_product_page/xperia/1-b.jpg'); ?>'}">
                                <img src="<?= base_url('assets/landing/img/test_product_page/xperia/1-s.jpg'); ?>"
                                     alt="Image Alternative text"
                                     title="Image Title"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               data-rel="{gallery:'gal-1', smallimage: '<?= base_url('assets/landing/img/test_product_page/xperia/2-s.jpg'); ?>', largeimage: '<?= base_url('assets/landing/img/test_product_page/xperia/2-s.jpg'); ?>'}">
                                <img src="<?= base_url('assets/landing/img/test_product_page/xperia/2-s.jpg'); ?>"
                                     alt="Image Alternative text"
                                     title="Image Title"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               data-rel="{gallery:'gal-1', smallimage: '<?= base_url('assets/landing/img/test_product_page/xperia/3.jpg'); ?>', largeimage: '<?= base_url('assets/landing/img/test_product_page/xperia/3-b.jpg'); ?>'}">
                                <img src="<?= base_url('assets/landing/img/test_product_page/xperia/3-s.jpg'); ?>"
                                     alt="Image Alternative text"
                                     title="Image Title"/>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               data-rel="{gallery:'gal-1', smallimage: '<?= base_url('assets/landing/img/test_product_page/xperia/4.jpg'); ?>', largeimage: '<?= base_url('assets/landing/img/test_product_page/xperia/4-b.jpg'); ?>'}">
                                <img src="<?= base_url('assets/landing/img/test_product_page/xperia/4-s.jpg'); ?>"
                                     alt="Image Alternative text"
                                     title="Image Title"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="row" data-gutter="10">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-5">
                                        <ul class="product-page-product-rating">
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
                                        </ul>
                                        <p class="product-page-product-rating-sign">
                                            <a href="#">238 customer reviews</a> |  <strong> 34 SOLDS</strong>
                                        </p>
                                        <p class="product-page-desc"><strong><?= word_limiter(ucwords($product->product_name), 7,'...'); ?></strong></p>
                                        <p class="text-muted text-sm text-uppercase">Product ID : <?= $product->sku;?> | Seller : <a href="#">Sokoya Philip</a></p>
                                        <span class="text-sm text-sm-center">
                                            <?php if(!empty($product->dimensions) ):  ?>
                                                <strong>Measurement: </strong><?= $product->dimensions; ?>cm
                                            <?php endif; ?>
                                            <?php if(!empty( $product->weight) ) : ?>
                                                <strong> - Weight: </strong><?= $product->weight; ?>kg
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                    <div class="col-md-7">
                                        <table class="table table-hover product-page-features-table">
                                            <tbody>
                                            <?php if(!empty($product->model)) : ?>
                                            <tr>
                                                <td>Model:</td>
                                                <td><?= ucwords($product->model);?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if(!empty($product->main_colour)): ?>
                                            <tr>
                                                <td>Main Colour:</td>
                                                <td><?= ucwords($product->main_colour); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if(!empty($product->colour_family)): ?>
                                                <tr>
                                                    <td>Colour Family:</td>
                                                    <td><?php $colour_family = json_decode($product->colour_family);
                                                        foreach($colour_family as $family ) echo trim($family ).', ';
                                                    ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if(!empty($product->main_material)): ?>
                                                <tr>
                                                    <td>Main Material:</td>
                                                    <td><?= ucwords($product->main_material); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if( !empty($product->attributes)) : ?>
                                            <tr>
                                                <td>Features:</td>
                                                <td><a href="#tab-2">See more...</a></td>
                                            </tr>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><br />                                
                                <p class="product-page-price">
                                    <?php if( !empty($variation->discount_price)) : ?>
                                        <strong><?= ngn($variation->discount_price); ?></strong>
                                        <span class="product-page-price-list"><?= ngn($variation->sale_price); ?></span>
                                    <?php else: ?>
                                        <span class="product-page-price-list"><?= ngn($variation->sale_price); ?></span>
                                    <?php endif; ?>
                                </p><br />
                                <div class="product-variation">
                                    <?= form_open('', 'id="variation-form"'); ?>
                                        <div class="row">
                                            <?php if(!empty($product->colour_family)) : ?>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Colour Family</label>
                                                        <select class="form-control" name="colour">
                                                            <option value="">-- Choose Colour --</option>
                                                            <?php $colour_family = json_decode($product->colour_family); 
                                                                foreach( $colour_family as $colour):
                                                            ?>
                                                                    <option value="<?= trim($colour); ?>"><?= $colour; ?></option>
                                                                <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( count( $variations ) > 1 ) :  ?>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="product_variation">Select Variation</label>
                                                        <select class="form-control" name="variation">
                                                            <option value="">--Select Variation--</option>
                                                            <?php foreach( $variations as $variation ): ?>
                                                                <option value="<?= trim($variation->variation);?>" <?php if($variation->quantity == 0 ) echo'disabled'; ?> >
                                                                    <?= trim($variation->variation); ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <input type="hidden" name="product_id" value="<?= base64_encode($product->id); ?>">
                                            <input type="hidden" name="product_name" value="<?= $product->product_name; ?>">
                                            <?php if(!empty($variation->discount_price)): ?>
                                                <input type="hidden" name="product_price" value="<?= $variation->discount_price; ?>">
                                            <?php else :?>
                                                <input type="hidden" name="product_price" value="<?= $variation->sale_price; ?>">
                                            <?php endif; ?>
                                            <input type="hidden" name="seller" value="<?= base64_encode( $product->seller_id)?>">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input type="number" name="quantity" required min="1" max="10" value="1" class="form-control quantity">
                                                </div>
                                            </div>
                                        </div>  
                                        <button type="submit" style="display: none;">Submit</button>                                      
                                    <?= form_close(); ?>
                                </div>
                                <div id="status"></div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 clearfix">
                                        <button class="btn btn-block btn-primary add-to-cart" type="button" <?php if(!empty($product->colour_family)) echo 'data-colour="colour"'; ?> <?php if(count($variations)) echo 'data-variation="variation"'; ?> >
                                            <i class="fa fa-shopping-cart"></i> Add to Cart
                                        </button>
                                    </div>
                                    <?php if( $this->session->userdata('logged_in') ):
                                            if( $favourited ) :
                                    ?>

                                                <div class="col-md-6 col-lg-6">
                                                    <a class="btn btn-block btn-default fav" data-action="unsave" data-pid="<?= base64_encode($product->id);?>" href="javascript:void(0)"><i class="fa fa-heart"></i>Liked</a>
                                                </div>
                                            <?php else : ?>
                                                <div class="col-md-6 col-lg-6">
                                                    <a class="btn btn-block btn-default fav" data-action="save" data-pid="<?= base64_encode($product->id)?>" href="javascript:void(0)"><i class="fa fa-heart-o"></i>Like</a>
                                                </div>
                                            <?php endif; ?>
                                    <?php else :?>
                                        <div class="col-md-6 col-lg-6">
                                            <a class="btn btn-block btn-default" href="<?= base_url('login'); ?>"><i class="fa fa-heart-o"></i>Like</a>
                                        </div>
                                    <?php endif; ?>
                                </div>  <br />
                                <hr class="text-center" style="width: 80%" />
                                <h3 class="title">Product Description</h3>
                                <p class="text-dark text-muted text-sm">
                                    <?= $product->highlights; ?>
                                </p>                                
                                <div class="product-page-side-section">
                                    <h5 class="product-page-side-title">Share This Product</h5>
                                    <ul class="product-page-share-item">
                                        <li>
                                            <a class="fa fa-facebook" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="fa fa-twitter" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="fa fa-pinterest" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="fa fa-instagram" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="fa fa-google-plus" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap"></div>
            <div class="tabbable product-tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-list nav-tab-icon"></i>Overview</a>
                    </li>
                    <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-cogs nav-tab-icon"></i>Full Specs</a>
                    </li>
                    <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-star nav-tab-icon"></i>Rating and Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                        <div class="product-overview-section gap-top">
                            <?php if(!empty($product->product_line)) : ?>
                                <h3 class="product-overview-title"> Product Frontline</h3>
                                <div class="product-overview-desc">
                                    <p><?= $product->product_line; ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty($product->product_description) ): ?>
                                <h3 class="product-overview-title">Product Description</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->product_description; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty($product->in_the_box) ): ?>
                                <h3 class="product-overview-title">What you will find in the box</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->in_the_box; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty($product->certifications) ): ?>
                                <h3 class="product-overview-title">Certifications</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?php
                                        $certifications = json_decode($product->certifications);
                                        foreach( $certifications as $type ) echo '<strong>' . $type .'</strong> ';
                                        ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty($product->warranty_type) ): ?>
                                <h3 class="product-overview-title">Warranty Type</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        This product has the following warranty :
                                        <?php
                                            $warranty_type = json_decode($product->warranty_type);
                                            foreach( $warranty_type as $type ) echo '<strong>' . $type .'</strong> ';
                                        ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty($product->product_warranty) ): ?>
                                <h3 class="product-overview-title">Product Warranty</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->product_warranty; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty($product->warranty_address) ): ?>
                                <h3 class="product-overview-title">Warranty Address</h3>
                                <div class="product-overview-desc">
                                    <p style="text-wrap: normal">
                                        <?= $product->warranty_address; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Specs:</th>
                                <th>Details:</th>
                                <th>Description:</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $specifications = json_decode( $product->attributes );
                                    foreach ( $specifications as $specification => $specification_value ): ?>
                                        <tr>
                                            <td class="product-page-features-table-specs"><?= ucwords(trim( $specification )); ?></td>
                                            <td class="product-page-features-table-details">
                                                <?php
                                                    if(is_array( $specification_value )):
                                                        foreach($specification_value as $key ) echo ucwords(trim($key)) .', ';
                                                    else: echo ucwords(trim( $specification_value ));
                                                    endif;
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                                <ul class="product-page-product-rating product-rating-big">
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
                                    <li class="count">4.9</li>
                                </ul>
                                <small>238 customer reviews</small>
                                <p><strong>98%</strong> of reviewers would recommend this product</p><a
                                        class="btn btn-primary" href="#">Write a Review</a>
                            </div>
                            <div class="col-md-5">
                                <ul class="product-rate-list">
                                    <li>
                                        <p class="product-rate-list-item">Camera</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:95%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">95%</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">Sound Quality</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:90%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">90%</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">Screen</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:100%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">100%</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">Battery Life</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:95%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">95%</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">Look & Feel</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:100%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">100%</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="product-rate-list">
                                    <li>
                                        <p class="product-rate-list-item">5 Stars</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:96%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">210</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">4 Stars</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:3%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">10</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">3 Stars</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:0%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">0</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">2 Stars</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:2%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">6</p>
                                    </li>
                                    <li>
                                        <p class="product-rate-list-item">1 Star</p>
                                        <div class="product-rate-list-bar">
                                            <div style="width:1%;"></div>
                                        </div>
                                        <p class="product-rate-list-count">3</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr/>
                        <article class="product-review">
                            <div class="product-review-author">
                                <img class="product-review-author-img"
                                     src="<?= base_url('assets/landing/img/amaze_70x70.jpg'); ?>"
                                     alt="Image Alternative text" title="Image Title"/>
                            </div>
                            <div class="product-review-content">
                                <h5 class="product-review-title">Terrific Buy!</h5>
                                <ul class="product-page-product-rating">
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
                                </ul>
                                <p class="product-review-meta">by Joseph Hudson on 08/14/2015</p>
                                <p class="product-review-body">Amet mauris ipsum nullam congue porttitor velit natoque
                                    malesuada laoreet quam mus ut at eros per odio laoreet ligula massa fermentum tincidunt
                                    sed cursus dolor et</p>
                                <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a
                                        friend!</strong>
                                </p>
                                <ul class="list-inline product-review-actions">
                                    <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-review-side">
                                <p><strong>8</strong> out of <strong>8</strong> found this review helpful</p>
                                <p class="product-review-side-sign">Was this review helpful?</p><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>8</a><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                            </div>
                        </article>
                        <article class="product-review">
                            <div class="product-review-author">
                                <img class="product-review-author-img"
                                     src="<?= base_url('assets/landing/img/chiara_70x70.jpg'); ?>"
                                     alt="Image Alternative text" title="Image Title"/>
                            </div>
                            <div class="product-review-content">
                                <h5 class="product-review-title">Too Big. Unusable.</h5>
                                <ul class="product-page-product-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="product-review-meta">by Ava McDonald on 08/14/2015</p>
                                <p class="product-review-body">Morbi inceptos scelerisque interdum convallis rhoncus vivamus
                                    pulvinar tellus sed dictum ipsum taciti primis elit inceptos potenti eros mauris curae
                                    malesuada nullam sollicitudin per sit mi</p>
                                <p class="text-danger"><strong><i class="fa fa-close"></i> No, I would not recommend this to
                                        a friend.</strong>
                                </p>
                                <ul class="list-inline product-review-actions">
                                    <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-review-side">
                                <p><strong>1</strong> out of <strong>2</strong> found this review helpful</p>
                                <p class="product-review-side-sign">Was this review helpful?</p><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>1</a><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>1</a>
                            </div>
                        </article>
                        <article class="product-review">
                            <div class="product-review-author">
                                <img class="product-review-author-img"
                                     src="<?= base_url('assets/landing/img/bubbles_70x70.jpg'); ?>"
                                     alt="Image Alternative text" title="Image Title"/>
                            </div>
                            <div class="product-review-content">
                                <h5 class="product-review-title">Worth it</h5>
                                <ul class="product-page-product-rating">
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
                                </ul>
                                <p class="product-review-meta">by Carl Butler on 08/14/2015</p>
                                <p class="product-review-body">Natoque aenean malesuada nostra varius aenean odio tincidunt
                                    eu interdum euismod cum</p>
                                <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a
                                        friend!</strong>
                                </p>
                                <ul class="list-inline product-review-actions">
                                    <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-review-side">
                                <p><strong>7</strong> out of <strong>7</strong> found this review helpful</p>
                                <p class="product-review-side-sign">Was this review helpful?</p><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>7</a><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                            </div>
                        </article>
                        <article class="product-review">
                            <div class="product-review-author">
                                <img class="product-review-author-img"
                                     src="<?= base_url('assets/landing/img/me_with_the_uke_70x70.jpg'); ?>"
                                     alt="Image Alternative text" title="Image Title"/>
                            </div>
                            <div class="product-review-content">
                                <h5 class="product-review-title">Great Affordable Phone</h5>
                                <ul class="product-page-product-rating">
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
                                </ul>
                                <p class="product-review-meta">by Bernadette Cornish on 08/14/2015</p>
                                <p class="product-review-body">Nisi nulla nec aliquet integer erat convallis per ultricies
                                    tempus risus ligula et porttitor gravida himenaeos aenean lectus dictumst tellus</p>
                                <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a
                                        friend!</strong>
                                </p>
                                <ul class="list-inline product-review-actions">
                                    <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-review-side">
                                <p><strong>2</strong> out of <strong>2</strong> found this review helpful</p>
                                <p class="product-review-side-sign">Was this review helpful?</p><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>2</a><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                            </div>
                        </article>
                        <article class="product-review">
                            <div class="product-review-author">
                                <img class="product-review-author-img"
                                     src="<?= base_url('assets/landing/img/afro_70x70.jpg'); ?>"
                                     alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <div class="product-review-content">
                                <h5 class="product-review-title">Excellent</h5>
                                <ul class="product-page-product-rating">
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
                                </ul>
                                <p class="product-review-meta">by Frank Mills on 08/14/2015</p>
                                <p class="product-review-body">Quisque morbi feugiat cursus proin varius lectus sollicitudin
                                    nisi dignissim suspendisse id auctor parturient arcu suspendisse himenaeos dapibus
                                    accumsan</p>
                                <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a
                                        friend!</strong>
                                </p>
                                <ul class="list-inline product-review-actions">
                                    <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-review-side">
                                <p><strong>7</strong> out of <strong>7</strong> found this review helpful</p>
                                <p class="product-review-side-sign">Was this review helpful?</p><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>7</a><a
                                        class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                            </div>
                        </article>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="category-pagination-sign">238 customer reviews found. Showing 1 - 5</p>
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
            <h3 class="widget-title">You Might Also Like</h3>
            <div class="row" data-gutter="15">
                <?php foreach( $likes as $like ): ?>
                    <div class="col-md-3">
                        <div class="product ">
                            <!-- <ul class="product-labels">
                                <li>hot</li>
                            </ul> -->
                            <div class="product-img-wrap">
                                <!-- <img class="product-img"
                                     src="<?= base_url('assets/landing/img/test_product/35.jpg'); ?>"
                                     alt="Image Alternative text"
                                     title="Image Title"/> -->
                                    <?php $image_name = $like->image_name;
                                    $split = explode('|', $image_name)
                                    ?>
                                    <img class="product-img"
                                         src="https://res.cloudinary.com/philo001/image/upload/h_400,w_400,q_auto,f_auto,fl_lossy,dpr_auto/v<?= $split[0] . '/' . $split[1]; ?>"
                                         alt="<?= $like->product_name; ?>"
                                         title="<?= $like->product_name; ?>">
                            </div>
                            <a class="product-link" href="<?= base_url(urlify($like->product_name, $like->id)); ?>"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title"><?= word_limiter(ucwords($like->product_name), 7, '...'); ?></h5>
                                <div class="product-caption-price">
                                    <?php if (!empty($like->discount_price)) : ?>
                                        <span
                                            class="product-caption-price-new"><?= ngn($like->discount_price); ?></span>
                                        <span
                                            class="product-caption-price-old"><sup><?= ngn($like->sale_price); ?> </sup></span>
                                    <?php else : ?>
                                        <span
                                            class="product-caption-price-new"><?= ngn($like->sale_price); ?> </span>
                                    <?php endif; ?>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Free Shipping</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
	</div>
	<div class="gap gap-small"></div>
    <!-- Modal -->
    
    <div id="prod-confirmation" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p id="product-title">
                        This is a confirmation that the product <span class="text text-danger"><?= ucwords($product->product_name); ?></span> has been added to the cart
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-block btn-danger"  data-dismiss="modal">Continue Shopping</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" id="cart" class="btn btn-block btn-success">Go to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
	<?php $this->load->view('landing/resources/footer'); ?>
</div>
window.<script type="text/javascript">let base_url = "<?= base_url(); ?>"</script>
<?php $this->load->view('landing/resources/script'); ?>
<script>
    $('.fav').on('click', function(e) {
        e.preventDefault();
        _this = $(this);
        pid = _this.data('pid');
        action = _this.data('action');
        $.ajax({
            url: base_url + "product/fav",
            method: "POST",
            data: {pid:pid, action:action},
            success:function(data) {                    
                if( data == true ){
                    if( action == 'save') {
                        _this.find("i").addClass('fa-heart');
                        _this.find("i").removeClass('fa-heart-o');
                        _this.attr('data-action', 'unsave');
                        $('#status').html('<p class="alert alert-success">The product has been saved, go to your dashboard to view.</p>').slideDown('fast').delay(3000).slideUp('slow');
                    }else {
                        _this.find("i").removeClass('fa-heart');
                        _this.find("i").addClass('fa-heart-o');
                        _this.attr('data-action', 'save');
                        $('#status').html('<p class="alert alert-success">The product has been removed from your wishlist</p>').slideDown('fast').delay(3000).slideUp('slow');
                    }
                }else {
                    $('#status').html('<p class="alert alert-danger">There was an error saving the product.</p>');
                }
            },
            error: function(error){
                console.log(error);
            }
        }); // ajax
    });
    $('.add-to-cart').on('click', function(){
        _btn = $(this);
        _btn.prop('disabled', 'disabled');
        let colour = $('select[name="colour"]').val();
        let variation = $('select[name="variation"]').val();
        if( _btn.data('colour') != '' && colour == ''){
            $('#status').html('<p class="alert alert-danger">Please select a colour.</p>').slideDown('fast').delay(3000).slideUp('slow');
            _btn.prop('disabled', '');
            return false;
        }
        if( _btn.data('variation') != '' && variation == ''){
            $('#status').html('<p class="alert alert-danger">Please select a variation.</p>').slideDown('fast').delay(3000).slideUp('slow');
            _btn.prop('disabled', '');
            return false;
        }

        _btn.prop('disabled', '');

        $('#prod-confirmation').modal('show');
        $.ajax({
            url: base_url + "product/add_to_cart",
            method: "POST",
            data: $('#variation-form').serialize(),
            success: function( response ){
                if( response ){
                    let x = $('.cart-read').text() * 1;
                    let y = $('.quantity').val() * 1;
                    $('.cart-read').text(x+y);
                    console.log(response);
                }
            }
        });

        $('#cart').on('click', function(){
            window.location.href = base_url + 'cart';
        });


    });
</script>
</body>
</html>
