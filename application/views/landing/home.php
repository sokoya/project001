<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="navbar-before mobile-hidden navbar-before-inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <p class="navbar-before-sign">Everything You Need is Carrito</p>

                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Contact Us</a>
                            </li>
                            <li><a href="#">FAQ</a>
                            </li>
                            <li><a href="#">Wishlist</a>
                            </li>
                            <li><a href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
            <h3 class="widget-title">Member Login</h3>
            <p>Welcome back, friend. Login to get started</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Email or Username</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" />Remeber Me</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Sign In" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
                </li>
                <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Create Carritos Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Create Account" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
            <h3 class="widget-title">Password Recovery</h3>
            <p>Enter Your Email and We Will Send the Instructions</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" />
                </div>
                <input class="btn btn-primary" type="submit" value="Recover Password" />
            </form>
        </div>
        <?php $this->load->view('landing/resources/head_category') ?>

        <?php $this->load->view('landing/resources/head_menu') ?>        

        <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true}'>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#3D3D3D;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Save up to $150 on Your Next Laptop</h4>
                                <p class="slider-item-caption-desc">I'm Not Gonna Pay A Lot For This Laptop.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-right" src="<?= base_url('assets/landing/img/test_slider/1.png');?>" alt="Image Alternative text" title="Image Title" style="top: 60%; width: 56%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-image:url(<?= base_url('assets/landing/img/concert_2_1200x500.jpg');?>);">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-right slider-item-caption-white">
                                <h4 class="slider-item-caption-title">World Top Guitars from $350</h4>
                                <p class="slider-item-caption-desc">Fill It To The Rim With Guitar.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-left" src="<?= base_url('assets/landing/img/test_slider/2.png'); ?>" alt="Image Alternative text" title="Image Title" style="transform:translateY(-50%) rotate(14deg); width: 55%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#93282B;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Run! Run! Run!</h4>
                                <p class="slider-item-caption-desc">Your Running Shoes, Right Away.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-right" src="<?= base_url('assets/landing/img/test_slider/3.png');?>" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="container">
            <div class="gap"></div>

            <!-- <h3 class="widget-title-lg">Weekly Featured</h3> -->
            
            <div class="row" data-gutter="15">
                <div class="col-md-3 clearfix">
                    <div class="product product-half" style="margin-bottom: 10px;">
                        <div class="product-caption text-center">Let <strong>Carrito Shopper</strong> do all the shopping for you free.</div>
                        <div class="product-img-wrap text-center">
                            <img class="product-img-small" style="margin: 0 auto;" src="<?= base_url('assets/landing/img/carrito/carrito_shopper.png'); ?>" alt="Carrito Shoppers" title="Let Carrito Shopper do it for you"/>
                        </div>
                        <ul class="product-labels"></ul>
                        <a class="product-link" href="#"></a>
                        <div class="product-caption">
                            <a href="#"><h5 class="product-caption-title text-center"><span>Click to use </span>Carrito Shopper</h5></a>
                        </div>
                    </div>

                    <div class="product product-half">
                        <div class="product-img-wrap text-center">
                            <img class="product-img-small" style="margin: 0 auto; width: 70%" src="<?= base_url('assets/landing/img/carrito/gift_cards.png'); ?>" alt="Carrito Gift Cards" title="Gift Cards"/>
                        </div>
                        <ul class="product-labels"></ul>
                        <a class="product-link" href="#"></a>
                        <div class="product-caption">
                            <a href="#"><h5 class="product-caption-title text-center"><span>Want Exclusive Discounts? Get Carrito Gift Cards </span>Carrito Shopper</h5></a>
                        </div>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="product product-fit">

                        <ul class="product-labels"></ul>
                        <div class="product-caption">
                            <h5><strong>Carrito Essentials</strong></h5>
                        </div>
                        <div class="product-img-wrap">
                            <img class="product-img"  style="margin: 0 auto; height: 150px; width: 100% " src="<?= base_url('assets/landing/img/carrito/carrito_essential_per_food.png');?>" alt="carrito_essential_per_food" title="Image Title" />
                        </div>
                        <div class="product-caption text-center"><strong>Pet foods</strong></div>

                        <div class="product-img-wrap product-pt4">
                            <img class="product-img"  style="margin: 0 auto; height: 150px; width: 100%" src="<?= base_url('assets/landing/img/carrito/carrito_essential_newest_gadget.png');?>" alt="carrito_essential_newest_gadget" title="Image Title" />
                        </div>
                        <div class="product-caption text-center"><strong>Newest Gadget</strong></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product product-fit">
                        <ul class="product-labels"></ul>
                        <div class="product-caption">
                            <h5><strong>Your dressing your style.</strong></h5>
                        </div>
                        <div class="gap"></div>
                        
                        <div class="product-img-wrap">
                            <img class="product-img"  style="margin: 0 auto; width: 100%;" src="<?= base_url('assets/landing/img/carrito/female_wears.png');?>" alt="female_wears" title="female_wears" />
                        </div>
                        <a class="product-link" href="#"></a>
                        <div class="product-caption">
                            <h5 class="product-caption-title text-center"><strong>Shop all female dresses</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product product-fit">
                        <ul class="product-labels"></ul>
                        <div class="product-caption text-center">
                            <h5><strong>Be The modern Man!</strong></h5>
                            <span style="">Let's dress you for that perfect occassion for less than N5,000</span>
                        </div>
                        <div class="product-img-wrap">
                            <img class="product-img"  style="margin: 0 auto; width: 100%; height: 370px;" src="<?= base_url('assets/landing/img/carrito/male_wears.png');?>" alt="female_wears" title="female_wears" />
                        </div>
                        <a class="product-link" href="#"></a>
                        <div class="product-caption">
                            <h5 class="product-caption-title"><strong>Shop all male clothing</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gap"></div>      
        </div>
        <div class="gap"></div>
        <div class="container">
            <!-- <h3 class="widget-title-lg">Best of Tech</h3> -->
            <div class="row" data-gutter="15">
                <div class="col-md-4">
                    <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true,"nav":true}'>
                        <div class="owl-item">
                            <div class="slider-item" style="background-image:url(<?= base_url('assets/landing/img/carrito/left-slider/adventure-deals.jpg');?>);">
                                <div class="slider-item-task"></div>
                                <div class="container">
                                    <div class="slider-item-inner">
                                        <div class="slider-item-caption-left slider-item-caption-white">
                                            <h4 class="slider-item-caption-title">Adventure Deals</h4>
                                            <p class="slider-item-caption-desc">From Under N999.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="slider-item" style="background-image:url(<?= base_url('assets/landing/img/carrito/left-slider/top-bags-and-shoes.jpg');?>);">
                                <div class="slider-item-task"></div>
                                <div class="container">
                                    <div class="slider-item-inner">
                                        <div class="slider-item-caption-right">
                                            <h4 class="slider-item-caption-title">Top Bags And Shoes</h4>
                                            <p class="slider-item-caption-desc">Save Upto 50% Off.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="slider-item" style="background-image:url(<?= base_url('assets.landing/img/carrito/left-slider/home-essentials.jpg');?>);">
                                <div class="slider-item-task"></div>
                                <div class="container">
                                    <div class="slider-item-inner">
                                        <div class="slider-item-caption-left slider-item-caption-white">
                                            <h4 class="slider-item-caption-title">Home Essentials</h4>
                                            <p class="slider-item-caption-desc">ILIFE A6 @ N5999.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="product">
                                <div class="product-caption text-center"><strong>Stir up your appetite with Carrito Fresh Fruits!</strong> <span>Keep healthy with our fresh fruits for less than N200</span></div>
                                <div class="product-img-wrap text-center">
                                    <img class="product-img-small" style="margin: 0 auto;" src="<?= base_url('assets/landing/img/carrito/fresh-fruit.png');?>" alt="fresh-fruit" title="Let Carrito Shopper do it for you" />
                                </div>
                                <a class="product-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product">
                                <div class="product-caption text-center"><strong>One packed of assorted wears</strong><br /><span> Male</span></div>
                                <div class="product-img-wrap text-center">
                                    <img class="product-img-small" style="margin: 0 auto; width: 70%" src="<?= base_url('assets/landing/img/carrito/assorted-wears.png');?>" alt="fresh-fruit" title="Let Carrito Shopper do it for you" />
                                </div>
                                <a class="product-link" href="#"></a>
                            </div>
                        </div>
                    </div> 
                    <br />
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product product-half product-fit3">
                                <div class="product-img-wrap text-center">
                                    <img class="product-img-small" style="margin: 0 auto; width: 80%" src="<?= base_url('assets/landing/img/carrito/wrist-watch.jpg');?>" alt="Wrstwatch" title="Wrist watch" />
                                </div>
                                <ul class="product-labels"></ul>
                                <a class="product-link" href="#"></a>
                                <div class="product-caption">
                                    <h5 class="text-center">Naviforce 9044 Military Style <br /> <span>Men Japan Quartz</span></h5>
                                    <div class="product-caption-price">N18,900</div>
                                    <ul class="product-caption-feature-list">
                                        <li>45 left</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product product-half product-fit3">
                                <div class="product-img-wrap text-center">
                                    <img class="product-img-small" style="margin: 0 auto; width: 80%" src="<?= base_url('assets/landing/img/carrito/bag.jpg'); ?>" alt="Bag" title="Gift Cards" />
                                </div>
                                <ul class="product-labels"></ul>
                                <a class="product-link" href="#"></a>
                                <div class="product-caption">
                                    <a href="#"><h5 class="text-center"><span>Douguyan 14 inch Laptop Backpack</span></h5></a>
                                    <div class="product-caption-price">N3,500</div>
                                    <ul class="product-caption-feature-list">
                                        <li>45 left</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product product-half product-fit3">
                                <div class="product-img-wrap text-center">
                                    <img class="product-img-small" style="margin: 0 auto; width: 80%" src="<?= base_url('assets/landing/img/carrito/touchlight.jpg'); ?>" alt="Touchlight" title="Gift Cards" />
                                </div>
                                <ul class="product-labels"></ul>
                                <a class="product-link" href="#"></a>
                                <div class="product-caption">
                                    <a href="#"><h5 class="text-center"><span>Nitecore Concept 1 C1 Flashlight</span></h5></a>
                                    <div class="product-caption-price">N2,699</div>
                                    <ul class="product-caption-feature-list">
                                        <li>216 left</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product product-half product-fit3">
                                <div class="product-img-wrap text-center">
                                    <img class="product-img-small" style="margin: 0 auto; width: 70%" src="<?= base_url('assets/landing/img/carrito/vacuum-cleaner.jpg'); ?>" alt="vacuum-cleaner" title="vacuum-cleaner" />
                                </div>
                                <ul class="product-labels"></ul>
                                <a class="product-link" href="#"></a>
                                <div class="product-caption">
                                    <a href="#"><h5 class="text-center"><span>ILIFE A6 Smart Robotic Vacuum Cleaner </span></h5></a>
                                    <div class="product-caption-price">N76,999</div>
                                    <ul class="product-caption-feature-list">
                                        <li>10 left</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="container">
            <h3 class="widget-title-sm text-center"><strong>
                Online Shopping at Carrito.com: widest selection of quality products at the wholesale prices online.</strong>
            </h3>
            <h5 class="text-center"> Our extensive and affordable range of products features the very latest, with the finest quality.</h5>
        </div>
        <div class="gap"></div>
        <div class="container">
            <hr class="hr-text" data-content="Why Choose Us">
            <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/largest.png'); ?>" alt="Largest" title="Largest in the market" />
                        <h5 class="banner-category-title">Largest</h5>
                        <p class="banner-category-desc">Range of products to choose from.</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/carrito-shopper.png');?>" alt="Carrito Shopper" title="Carrito Shopper" />
                        <h5 class="banner-category-title">Jewelry</h5>
                        <p class="banner-category-desc">Automated shopping assistant</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/secured-payment.png'); ?>" alt="secured-payment" title="secured-payment" />
                        <h5 class="banner-category-title">Secured Payment</h5>
                        <p class="banner-category-desc">On all your debit/credit cards</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/incredible-discounts.png');?>" alt="Incredible Discounts" title="Discounts" />
                        <h5 class="banner-category-title">Incredible Discounts</h5>
                        <p class="banner-category-desc">On all products, all season.</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/pay-on-delivery.png') ?>" alt="Pay on delivery" title="Pay on delivery" />
                        <h5 class="banner-category-title">Pay On Delivery</h5>
                        <p class="banner-category-desc">On all products</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/fast-delivery.png') ?>" alt="Fast Delivery" title="Fast Delivery" />
                        <h5 class="banner-category-title">Fast Delivery</h5>
                        <p class="banner-category-desc">Mationwide Same Day</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/genuine-brands.png') ?>" alt="Genuine Brands" title="Genuine Brands" />
                        <h5 class="banner-category-title">Genuine Brands</h5>
                        <p class="banner-category-desc">From all over the world</p>
                    </a>
                </div>
                <div class="owl-item">
                    <a class="banner-category owl-item-slide" href="#">
                        <img class="banner-category-img" src="<?= base_url('assets/landing/img/why-carrito/237.png') ?>" alt="247 Active Support" title="247 Active Support" />
                        <h5 class="banner-category-title">247</h5>
                        <p class="banner-category-desc">Customer Agents Waiting To Help You.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="gap"></div>

        <?php $this->load->view('landing/resources/footer'); ?> 
        
    </div>
    <?php $this->load->view('landing/resources/script'); ?> 
</body>
</html>
