<?php $this->load->view('templates/meta_tags'); ?>
</head>
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <?php $this->load->view('templates/head_navbar'); ?>
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
                        <h1 class="page-header text-overflow">Product</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="demo-pli-home"></i></a></li>
                        <li><a href="#">Product</a></li>
                        <li class="active">Add product</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->
                </div>
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <?php if ($this->session->userdata('category_id') == null ): ?>
                        <!-- Is category set -->
                        <div class="col-lg-12">
                            <div class="panel panel-body text-center">
                                <div class="panel-heading">
                                    <h3>Select A Product Category</h3>
                                    <h5 class="text-semibold">Please select the appropriate categories and sub categories for the product.</h5>
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
                    <?php else: ?>
                        <hr class="new-section-sm bord-no">
                        <div class="col-lg-12">
                            <hr class="new-section-sm bord-no">
                            <h4 class="text-main pad-btm bord-btm">Add new product</h4>
                            <div class="panel">
                                <!-- Form wizard with Validation -->
                                <!--===================================================-->
                                <div id="demo-bv-wz">
                                    <div class="wz-heading pad-top">
                                        <!--Nav-->
                                        <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#tab1">
                                                    <span class="text-danger text-2x"><i class="fas fa-bookmark"></i></span>
                                                    <p class="text-semibold mar-no">Basic Information</p>
                                                </a>
                                            </li>
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#tab2">
                                                    <span class="text-warning text-2x"><i class="fab fa-product-hunt"></i></span>
                                                    <p class="text-semibold mar-no">Product Specification & Attributes</p>
                                                </a>
                                            </li>
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#tab3">
                                                    <span class="text-info text-2x"><i class="fas fa-money-check"></i></span>
                                                    <p class="text-semibold mar-no">Product Pricing</p>
                                                </a>
                                            </li>
                                            <li class="col-xs-3">
                                                <a data-toggle="tab" href="#tab4">
                                                    <span class="text-success text-2x"><i class="fas fa-images"></i></span>
                                                    <p class="text-semibold mar-no">Image</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--progress bar-->
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-primary"></div>
                                    </div>
                                    <!--Form demo-bv-wz-form -->
                                    <form id="" class="form-horizontal">
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <!--First tab-->
                                                <div id="tab1" class="tab-pane">
                                                    <div class="panel-group accordion" id="accordion">
                                                        <div class="panel">
                                                            <!--Accordion title-->
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-parent="#accordion" data-toggle="collapse" href="#general-info">
                                                                        General information &nbsp;&nbsp;<i class="fas fa-arrow-up"></i>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <!--Accordion content-->
                                                            <div class="panel-collapse collapse in" id="general-info">
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Product Name *</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" class="form-control" required name="product_name" placeholder="Product name">
                                                                            <span class="text-sm text-dark">Name of the product. For a better listing quality, the name should consist the actual product name, if available colour, edition, speciality</span>
                                                                            <span class="text-sm text-dark">Wide Angle Camera 10 MP - Black, Galaxy Tab A Leather Flip Case - Red</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Brand Name *</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" class="form-control" required name="brand_name" placeholder="Eg: Apple, Chanel, Random House. Add under ''Generic'' brand if your product is unbranded.">
                                                                            <span class="text-sm text-dark">Brand of the product. If brand does not exist, please copy https://goo.gl/Hw8vma into your browser and fill accordingly.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Model</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" class="form-control" required name="brand_name" placeholder="Eg:  iPhone 4S Samsung TV 4T">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Main Colour</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" class="form-control" name="main_colour" placeholder="Eg: royal blue, mint green, Peach red">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Product Specs: Optional fields-->
                                                    <!--Accordion title-->
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-parent="#accordion" data-toggle="collapse" href="#prod-desc">
                                                                Product Description &nbsp;&nbsp;<i class="fas fa-arrow-up"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <!--Accordion content-->
                                                    <div class="panel-collapse" id="prod-desc">
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <label class="col-lg-3 control-label">Product Description </label>
                                                                <div class="col-lg-7">
                                                                    <textarea placeholder="Product description" data-provide="markdown" rows="8" name="product_description" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-3 control-label">YouTube ID</label>
                                                                <div class="col-lg-7">
                                                                    <input type="email" class="form-control" name="youtube_id" placeholder="YouTube ID">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-3 control-label">What's in the box?</label>
                                                                <div class="col-lg-7">
                                                                    <textarea placeholder="Any information in the box" data-provide="markdown" name="in_the_box" rows="8" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-3 control-label">Note</label>
                                                                <div class="col-lg-7">
                                                                    <textarea placeholder="Additional info" name="note" data-provide="markdown" rows="8" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!--Second tab-->
                                                <div id="tab2" class="tab-pane fade">

                                                    <div class="panel-group accordion" id="accordion">
                                                        <div class="panel">
                                                            <!--Accordion title-->
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title text-dark">
                                                                    <a data-parent="#accordion" data-toggle="collapse" href="#prod-spec">Product Specification</a>
                                                                </h4>
                                                            </div>
                                                            <!--Accordion content-->
                                                            <div class="panel-collapse collapse in" id="prod-spec">
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Product Line</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" placeholder="Enter In Here Your Store Name" name="product_line" class="form-control">
                                                                            <span class="text-sm text-dark">Eg: Fouani Nigeria, Trendy Woman Ltd, SEOLAK</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Colour Family</label>
                                                                        <div class="col-lg-7">
                                                                            <select name="colour_family[]" class="selectpicker" multiple title="Choose colour family..." data-width="100%">
                                                                                <option name="green">Green</option>
                                                                                <option name="red">Red</option>
                                                                                <option name="yellow">Yellow</option>
                                                                            </select>
                                                                            <span class="text-sm text-dark">Add a generalisation of the main color, to help customers find the product using the provided color-filter in the shop</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Type</label>
                                                                        <div class="col-lg-7">
                                                                            <select name="type[]" class="selectpicker" multiple title="Choose type..." data-width="100%">
                                                                                <option name="ceramics">Ceramics</option>
                                                                                <option name="glass">Glass</option>
                                                                                <option name="leather">Leather</option>
                                                                                <option name="metal">Metal</option>
                                                                                <option name="natural fibre">Natural Fibre</option>
                                                                                <option name="plume">Plume</option>
                                                                                <option name="resin">Resin</option>
                                                                                <option name="silicon">Silicon</option>
                                                                                <option name="stone">Stone</option>
                                                                                <option name="synthetic">Synthetic</option>
                                                                                <option name="textile">Textile</option>
                                                                                <option name="wood">Wood</option>
                                                                            </select>
                                                                            <span class="text-sm text-dark">Eg: Leather</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel">
                                                            <!--Accordion title-->
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title text-dark">
                                                                    <a data-parent="#accordion" data-toggle="collapse" href="#measurement">Measurement</a>
                                                                </h4>
                                                            </div>
                                                            <!--Accordion content-->
                                                            <div class="panel-collapse " id="measurement">
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Dimension</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" placeholder="Example: 12 x 3 x 90" name="dimension" class="form-control">
                                                                            <span class="text-sm text-dark">Measurement of the product</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Weight *</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" required placeholder="Weight of the product. eg 10" name="weight" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel">
                                                            <!--Accordion title-->
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title text-dark">
                                                                    <a data-parent="#accordion" data-toggle="collapse" href="#attribute">Elect. Attribute</a>
                                                                </h4>
                                                            </div>
                                                            <!--Accordion content-->
                                                            <div class="panel-collapse " id="attribute">
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Display Features</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" placeholder="Display features" name="display_feature" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Display Size</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" placeholder="Display size" name="display_size" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Refresh Rate</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" placeholder="Refresh Rate" name="display_rate" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Features</label>
                                                                        <div class="col-lg-7">
                                                                            <select name="features[]" class="selectpicker" multiple title="Choose features..." data-width="100%">
                                                                                <option name="3D">3D</option>
                                                                                <option name="3G">3G</option>
                                                                                <option name="4G">4G</option>
                                                                                <option name="blacklit keyboard">Blacklit Keyboard</option>
                                                                                <option name="bluray">Blu-ray</option>
                                                                                <option name="bluethooth">Bluethooth</option>
                                                                                <option name="cdma">CDMA</option>
                                                                                <option name="camera">Camera</option>
                                                                                <option name="cordless">Cordless</option>
                                                                                <option name="dvd">DVD</option>
                                                                                <option name="dvd rw">DVD RW</option>
                                                                                <option name="sual core">Dual Core</option>
                                                                                <option name="fm player">FM player</option>
                                                                                <option name="gps">GPS</option>
                                                                            </select>
                                                                            <span class="text-sm text-dark">Eg: FM player, Dual Core</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/Accordion content-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ Second tab-->

                                                <!--Third tab-->
                                                <div id="tab3" class="tab-pane">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter mar-top pricing_table">
                                                            <thead>
                                                            <tr>
                                                                <th class="min-w-td">Variation</th>
                                                                <th>Seller SKU</th>
                                                                <th>EAN / UPC / ISBN</th>
                                                                <th>Quantity</th>
                                                                <th>Price*</th>
                                                                <th>Start date</th>
                                                                <th>End date</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="variation_body">
                                                            <tr data-row-id="0">
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="variation" type="text" class="form-control" name="variation[]" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="Seller SKU" type="text" class="form-control" name="seller_sku[]" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="EAN / UPC / ISBN" type="text" class="form-control" name="isbn[]" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="Quantity" type="number" min="1" max="100" class="form-control" name="quantity[]" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="Price" type="text" class="form-control" required name="price[]" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="Starting date for this variation" type="date" class="form-control" name="start_date[]" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group-sm">
                                                                        <input title="End date for this variation" type="date" class="form-control" name="end_date[]" />
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-sm btn-default btn-hover-success demo-psi-pen-5 add-tooltip add-more" href="#" data-original-title="Add Another Variation" data-container="body"></a>
                                                                        <a class="btn btn-sm btn-default btn-hover-danger demo-pli-trash add-tooltip delete_row" href="#" data-original-title="Delete This Variation" data-container="body"></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <!--Fourth tab-->
                                                <div id="tab4" class="tab-pane mar-btm">

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Upload Images</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <!--Dropzonejs using Bootstrap theme-->
                                                            <!--===================================================-->
                                                            <p>You can upload images up-to 8.</p>
                                                            <div class="bord-top pad-ver">
                                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                                <span class="btn btn-success fileinput-button dz-clickable">
                                                                    <i class="fa fa-plus"></i>
                                                                    <span>Add files...</span>
                                                                </span>
                                                                <div class="btn-group pull-right">
                                                                    <button id="dz-upload-btn" class="btn btn-primary" type="submit" disabled="">
                                                                        <i class="fa fa-upload-cloud"></i> Upload
                                                                    </button>
                                                                    <button id="dz-remove-btn" class="btn btn-danger cancel" type="reset" disabled="">
                                                                        <i class="demo-psi-trash"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div id="dz-previews">
                                                                <div id="dz-template" class="pad-top bord-top">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <!--This is used as the file preview template-->
                                                                            <div class="media-block">
                                                                                <div class="media-left">
                                                                                    <img class="dz-img" data-dz-thumbnail>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <p class="text-main text-bold mar-no text-overflow" data-dz-name></p>
                                                                                    <span class="dz-error text-danger text-sm" data-dz-errormessage></span>
                                                                                    <p class="text-sm" data-dz-size></p>
                                                                                    <div id="dz-total-progress" style="opacity:0">
                                                                                        <div class="progress progress-xs active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-right">
                                                                            <button data-dz-remove class="btn btn-xs btn-danger dz-cancel"><i class="demo-psi-trash"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--===================================================-->
                                                            <!--End Dropzonejs using Bootstrap theme-->
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!--Footer button-->
                                        <div class="panel-footer text-center">
                                            <div class="box-inline">
                                                <button type="button" class="previous btn btn-primary">Previous</button>
                                                <button type="button" class="next btn btn-primary">Next</button>
                                                <button type="button" class="finish btn btn-warning" disabled>Finish</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pad-btm" style="margin-bottom: 30px;"></div>
                                <!--===================================================-->
                                <!-- End Form wizard with Validation -->

                            </div>
                        </div>
                    <?php endif; ?>

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
    <?php $this->load->view('templates/scripts'); ?>

    <script type="text/javascript">
        $.fn.rowCount = function() {
            return $('tr', $(this).find('tbody')).length;
        };
        $('.add-more').click(function (x) {
            // check if the number of variation row exceeds limit
            let row_id = $('.pricing_table').rowCount() * 1 ;
            let new_id = row_id + 1;
            let new_row = '<tr data-row-id="'+new_id+'"><td><div class="form-group-sm"><input title="variation" type="text" class="form-control" name="variation[]" /></div></td><td><div class="form-group-sm"><input title="Seller SKU" type="text" class="form-control" name="seller_sku[]" /></div></td><td><div class="form-group-sm"><input title="EAN / UPC / ISBN" type="text" class="form-control" name="isbn[]" /></div></td><td><div class="form-group-sm"><input title="Quantity" type="number" min="1" max="100" class="form-control" name="quantity[]" /></div></td><td><div class="form-group-sm"><input title="Price" type="text" required class="form-control" name="price[]" /></div></td><td><div class="form-group-sm"><input title="Starting date for this variation" type="date" class="form-control" name="start_date[]" /></div></td><td><div class="form-group-sm"><input title="End date for this variation" type="date" class="form-control" name="end_date[]" /></div></td><td class=""><div class="btn-group"><a class="btn btn-sm btn-default btn-hover-success demo-psi-pen-5 add-tooltip add-more" href="#" data-original-title="Add Another Variation" data-container="body"></a><a class="btn btn-sm btn-default btn-hover-danger demo-pli-trash add-tooltip delete-row" href="#" data-original-title="Delete This Variation" data-container="body"></a></div></td></tr>'
            $('.pricing_table tbody').append(new_row);
        });
        $('.delete_row').on('click', function (x) {
            // check the number of row
            $(this).closest('.variation_body').fadeOut().remove();
        });

        $(".panel-title").click(function (x) {
            $(this).find("<i>").toggleClass("fa-arrow-down");
        });
    </script>
</body>
</html>
