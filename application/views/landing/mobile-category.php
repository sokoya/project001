<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
</head>
<body>

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
                    <li class="active"><?= ucwords($searched); ?>
                    </li>
                </ol>
                <div class="category-selections clearfix">
                    <button class="btn btn-custom-primary">Newest First</button>
                    <button class="btn btn-custom-primary">Best Sellers</button>
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
                <div class="col-md-9">
                    <div class="row" data-gutter="15">
                        <div class="col-md-4">
                            <div class="product product-md-left">
                                <ul class="product-labels"></ul>
                                <div class="product-img-wrap">
                                    <img class="product-img" src="img/test_product/man_fashion/11.jpg" alt="Image Alternative text" title="Image Title" />
                                </div>
                                <a class="product-link" href="#"></a>
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
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-caption-title">Military Shoulder Tactical Backpack Rucksacks Sport Travel Hiking Trekking Bag</h5>
                                    <div class="product-caption-price"><span class="product-caption-price-new">$138</span>
                                    </div>
                                    <ul class="product-caption-feature-list">
                                        <li>Free Shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product product-sm-left ">
                                <ul class="product-labels"></ul>
                                <div class="product-img-wrap">
                                    <img class="product-img" src="img/test_product/man_fashion/5.jpg" alt="Image Alternative text" title="Image Title" />
                                </div>
                                <a class="product-link" href="#"></a>
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
                                    <h5 class="product-caption-title">FootJoy FJ Sport Golf Shoes White Mens Closeout 53255 New</h5>
                                    <div class="product-caption-price"><span class="product-caption-price-new">$53</span>
                                    </div>
                                    <ul class="product-caption-feature-list">
                                        <li>Free Shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product product-sm-left ">
                                <ul class="product-labels"></ul>
                                <div class="product-img-wrap">
                                    <img class="product-img" src="img/test_product/man_fashion/8.jpg" alt="Image Alternative text" title="Image Title" />
                                </div>
                                <a class="product-link" href="#"></a>
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
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-caption-title">FootJoy Contour Casual Spikeless Golf Shoes Black Mens Closeout 54284 New</h5>
                                    <div class="product-caption-price"><span class="product-caption-price-new">$51</span>
                                    </div>
                                    <ul class="product-caption-feature-list">
                                        <li>2 left</li>
                                        <li>Free Shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col-md-9 -->
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
        let base_url = "<?= base_url(); ?>";
        let current_url = "<?= current_url()?>";
    </script>
    <script src="<?= base_url('assets/landing/js/quick-view.js'); ?>"></script>
    <script src="<?= base_url('assets/landing/js/search.js'); ?>"></script>
    <script>
        $("#price-slider").ionRangeSlider({
            min: 1000,
            max: 50000,
            type: 'double',
            prefix: "&#8358;",
            prettify: false,
            hasGrid: true
        });
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

                    doReplaceState(url);

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
                        load_page(url);

                    });
                } else {
                    load_page(current_url);
                }
            });
        });
    </script>
</body>
</html>
