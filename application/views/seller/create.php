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
                        <li><?= $this->session->userdata('new_rootcategory'); ?></li>
                        <li><?= $this->session->userdata('new_category'); ?></li>
                        <li class="active"><?= $this->session->userdata('new_subcategory'); ?></li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->
                </div>
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

					    <div class="row">
                            <div class="col-lg-12">
                                <?php $this->load->view('msg_view'); ?>
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
                                        <div id="status"></div>
                                        <!--progress bar-->
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary"></div>
                                        </div>
                                        <!--Form demo-bv-wz-form -->

                                        <form id="product-post" class="form-horizontal add_product_form" novalidate  method="POST" action="" enctype="multipart/form-data">
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
                                                                            General information
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <!--Accordion content-->
                                                                <div class="panel-collapse collapse in" id="general-info">
                                                                    <div class="panel-body">
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Product Name *</label>
                                                                            <div class="col-lg-7">
                                                                                <input type="text" class="form-control" autofocus required name="product_name" value="<?= isset($_POST['product_name']) ? $_POST['product_name']: ''; ?>" placeholder="Product name">
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
                                                                                <input type="text" class="form-control" required name="model" placeholder="Eg:  iPhone 4S Samsung TV 4T">
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
                                                                            <label class="col-lg-3 control-label">Main Material</label>
                                                                            <div class="col-lg-7">
                                                                                <select name="main_material" class="selectpicker" title="Choose type..." data-width="100%">
                                                                                    <option value="ceramics">Ceramics</option>
                                                                                    <option value="glass">Glass</option>
                                                                                    <option value="leather">Leather</option>
                                                                                    <option value="metal">Metal</option>
                                                                                    <option value="natural fibre">Natural Fibre</option>
                                                                                    <option value="plume">Plume</option>
                                                                                    <option value="resin">Resin</option>
                                                                                    <option value="silicon">Silicon</option>
                                                                                    <option value="stone">Stone</option>
                                                                                    <option value="synthetic">Synthetic</option>
                                                                                    <option value="textile">Textile</option>
                                                                                    <option value="wood">Wood</option>
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
                                                                    <h4 class="panel-title">
                                                                        <a data-parent="#accordion" data-toggle="collapse" href="#prod-desc">
                                                                            Product Description
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
                                                                                <span class="text-sm text-dark">Example: e.g. http://www.youtube.com/watch?v=htlgaXRAe2k it is: htlgaXRAe2k</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">What's in the box?</label>
                                                                            <div class="col-lg-7">
                                                                                <textarea placeholder="Any information in the box" data-provide="markdown" name="in_the_box" rows="8" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Highlights</label>
                                                                            <div class="col-lg-7">
                                                                                <textarea placeholder="Additional info" name="highlights" data-provide="markdown" rows="8" class="form-control"></textarea>
                                                                                <span class="text-sm text-dark">Enter short major highlights of the product, to make the purchase decision for the customer easier.</span>
                                                                                <span class="text-sm text-dark">Example: Best expierience ever - super fast and easy navigation - better control</span>
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
                                                                                <input type="text" placeholder="Example: 12 x 3 x 90" name="dimensions" class="form-control">
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
                                                            <?php
                                                                if( isset( $specifications) && !empty( $specifications)) :
                                                            ?>
                                                            <div class="panel">
                                                                <!--Accordion title-->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title text-dark">
                                                                        <a data-parent="#accordion" data-toggle="collapse" href="#attribute">Product Attribute</a>
                                                                    </h4>
                                                                </div>
                                                                <!--Accordion content-->
                                                                <div class="panel-collapse " id="attribute">
                                                                    <div class="panel-body">
                                                                        <?php $x = 1;  foreach ($specifications as $specification ) :?>
                                                                                <div class="form-group">
                                                                                    <label class="col-lg-3 control-label"><?= ucwords($specification['spec_name']); ?></label>
                                                                                    <div class="col-lg-7">
                                                                                        <?php if( !empty($specification['options']) ) :
                                                                                            $options = json_decode($specification['options']);
                                                                                        ?>
                                                                                            <select class="selectpicker"
                                                                                                    <?php if($specification['multiple_options']) {
                                                                                                        echo 'name="attribute_' . str_replace(' ','-',$specification["spec_name"]) .'[]"';
                                                                                                        echo ' multiple';
                                                                                                    }else {
                                                                                                        echo 'name="attribute_' . str_replace(' ','-',$specification["spec_name"]).'"' ;
                                                                                                    } ?>
                                                                                                    title="Choose <?= $specification['spec_name']; ?>"
                                                                                                    data-width="100%">
                                                                                            <?php foreach ($options as $key => $value ) : ?>
                                                                                                <option value="<?= trim($value); ?>"><?= ucwords(trim($value)); ?></option>
                                                                                            <?php endforeach; ?>
                                                                                            </select>
                                                                                        <?php else: ?>
                                                                                            <input type="text" placeholder="<?= $specification['spec_name']; ?>" name="attribute_<?= str_replace(' ','-',$specification['spec_name']); ?>" class="form-control">
                                                                                        <?php endif; ?>
                                                                                        <span class="text-sm text-dark"><?= $specification['description']; ?></span>
                                                                                    </div>
                                                                                </div>
                                                                        <?php $x++;  endforeach; ?>
                                                                    </div>
                                                                </div>
                                                                <!--/Accordion content-->
                                                            </div>
                                                            <?php endif; ?>

                                                            <div class="panel">
                                                                <!--Accordion title-->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title text-dark">
                                                                        <a data-parent="#accordion" data-toggle="collapse" href="#additional_product_attribute">Additional Product Attribute</a>
                                                                    </h4>
                                                                </div>
                                                                <!--Accordion content-->
                                                                <div class="panel-collapse " id="additional_product_attribute">
                                                                    <div class="panel-body">
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Cerification</label>
                                                                            <div class="col-lg-7">
                                                                                <select name="certifications[]" class="selectpicker" multiple title="Example: Organic, Suitable for Allergics Fair Trade..." data-width="100%">
                                                                                    <option name="AFRDI Leather">AFRDI Leather</option>
                                                                                    <option name="AFRDI - Australian Furnishing Research & Development Institute">AFRDI - Australian Furnishing Research & Development Institute</option>
                                                                                    <option name="ASTM Certified">ASTM Certified</option>
                                                                                    <option name="Australian Made">Australian Made</option>
                                                                                    <option name="Eco Friendly">Eco Friendly</option>
                                                                                    <option name="FSC - Forest Stewardship Council">FSC - Forest Stewardship Council</option>
                                                                                    <option name="Fair Trade">Fair Trade</option>
                                                                                    <option name="GECA - Good Environmental Choice Australia">GECA Good Environmental Choice Australia</option>
                                                                                    <option name="Organic">Organic</option>
                                                                                    <option name="PEFC - Programme for the Endorcement of Forest Certification">PEFC -Programme for the Endorcement of Forest Certification</option>
                                                                                    <option name="PEFC">Timber Certificate</option>
                                                                                    <option name="Suitable for Allergic">Suitable For Allergic</option>
                                                                                </select>
                                                                                <span class="text-sm text-dark">Select different certifications, that the product owns, or with which certifications the product was marked</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Product Warranty</label>
                                                                            <div class="col-lg-7">
                                                                                <textarea placeholder="Detailed product waranty for this product" name="product_warranty" data-provide="markdown" rows="8" class="form-control"></textarea>
                                                                                <span class="text-sm text-dark">Example: Provide the warranty validity period eg. 1 Year Warranty, N/A</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Waranty Type</label>
                                                                            <div class="col-lg-7">
                                                                                <select name="warranty_type[]" class="selectpicker" multiple title="Choose warranty type..." data-width="100%">
                                                                                    <option name="service center">Service Center</option>
                                                                                    <option name="Repair by vendor">Repair by vendor</option>
                                                                                    <option name="replacement by vendor">Replacement by vendor</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Warranty address</label>
                                                                            <div class="col-lg-7">
                                                                                <textarea placeholder="Warranty address" name="warranty_address" data-provide="markdown" rows="8" placeholder="Enter the Service Centre Address. If you have multi-options selected in the Warranty Type use the sample format for addresses." class="form-control"></textarea>
                                                                                <span class="text-sm text-dark">Example: Service Center Address: 20b Caro Road, Ikeja. Lagos | Repair by Vendor Address: 5 Paris Street, Yaba. Lagos.</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
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
                                                                    <th>Discounted Price*</th>
                                                                    <th>Start date</th>
                                                                    <th>End date</th>
                                                                    <th class="text-center">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody class="variation_body">
                                                                <tr data-row-id="1">
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                            <label class="">Variation</label>
                                                                            <input title="variation" type="text" class="form-control" name="variation[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                            <label class="">SKU</label>
                                                                            <input title="Seller SKU" type="text" class="form-control" name="sku[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                            <label class="">ISBN </label>
                                                                            <input title="EAN / UPC / ISBN" type="text" class="form-control" name="isbn[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                            <label class="">Quantity </label>
                                                                            <input title="Quantity" type="number" min="1" max="100" class="form-control" name="quantity[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                                <label class="">Sale Price* </label>
                                                                                <input title="Price" type="text" class="form-control" name="sale_price[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="">Discount Price </label>
                                                                            <input title="Discounted price" type="text" class="form-control" required name="discount_price[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                            <label class="">Discount Start Date</label>
                                                                            <input title="Starting date for this variation" type="date" class="form-control" name="start_date[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group-sm">
                                                                            <label class="">Discount End Date</label>
                                                                            <input title="End date for this variation" type="date" class="form-control" name="end_date[]" />
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="btn-group">
                                                                            <a class="btn btn-sm btn-default btn-hover-success demo-psi-add add-tooltip add_more" href="javascript:void(0);" data-original-title="Add Another Variation" data-container="body"></a>
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
                                                                <div class="dz-max-files-reached"></div>
                                                                <div class="bord-top pad-ver">
                                                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                                                    <span class="btn btn-success fileinput-button dz-clickable">
                                                                    <i class="fa fa-plus"></i>
                                                                    <span>Add files...</span>
                                                                </span>
                                                                    <div class="btn-group pull-right">
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
                                                    <button type="button" class="preview btn btn-primary">Preview</button>
                                                    <button type="submit" class="finish btn btn-warning">Finish</button>
                                                </div>
                                            </div>
                                            <div id="processing" style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                                                <div class="text" style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                                                    <img src="<?= base_url('assets/seller/img/load.gif'); ?>" alt="Processing...">
                                                    Processing the data. Please Wait! <Br>Meanwhile Please <b style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">BE ONLINE</b>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="pad-btm" style="margin-bottom: 30px;"></div>
                                    <!--===================================================-->
                                    <!-- End Form wizard with Validation -->

                                </div>
                            </div>
                        </div>
					    
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

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
    <!--JAVASCRIPT-->
    <!--=================================================-->


    <script src="<?= base_url('assets/seller/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/js/nifty.min.js');?>"></script>
    <script src="<?= base_url('assets/seller/js/demo/nifty-demo.min.js'); ?>"></script>
    <script type="text/javascript"> base_url = '<?= base_url(); ?>';</script>
    <script src="<?= base_url('assets/seller/plugins/dropzone/dropzone.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-validator/bootstrapValidator.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/js/demo/form-wizard.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-markdown/js/bootstrap-markdown.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-select/bootstrap-select.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>

    <script type="text/javascript">
        $(document).on('nifty.ready', function() {
            Dropzone.autoDiscover = false;
            // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
            let previewNode = document.querySelector("#dz-template");
            previewNode.id = "";
            let previewTemplate = previewNode.parentNode.innerHTML;

            previewNode.parentNode.removeChild(previewNode);
            let uplodaBtn = $('.finish');
            let removeBtn = $('#dz-remove-btn');
            let maxImageWidth = 2000,
                maxImageHeight = 2000,
                minImageWidth = 200,
                minImageHeight = 200;
            var myDropzone = new Dropzone(document.body,{ // Make the whole body a dropzone
                url: base_url + "seller/product/process", // Set the url
                autoProcessQueue: false,
                addRemoveLinks: true,
                autoDiscover: false,
                paramName: 'file',
                maxFiles: 8,
                thumbnailWidth: 50,
                thumbnailHeight: 50,
                maxFilesize: 20000,
                previewTemplate: previewTemplate,
                previewsContainer: "#dz-previews", // Define the container to display the previews
                clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
                acceptedFiles: "image/*",
                uploadMultiple: true,
                parallelUploads: 100,
                accept: function(file, done) {
                    file.acceptDimensions = done;
                    file.rejectDimensions = function() { done(`Invalid file dimension, atleast 200 X 200 and maximum of 2000 X 2000. But image is having ${file.width} X ${file.height}. File won't be uploaded.`); };
                }
            });


            myDropzone.on("addedfile", function(file) {
                // Hookup the button
                uplodaBtn.prop('disabled', false);
                removeBtn.prop('disabled', false);
                file._captionLabel = Dropzone.createElement("<span class='text-sm text-dark'> &nbsp; Make this the featured Image &nbsp; </span>");
                file._captionBox = Dropzone.createElement(`<input id="${file.name}" type='radio' name='featured_image' value="${file.name}">`);
                file.previewElement.appendChild(file._captionBox);
                file.previewElement.appendChild(file._captionLabel);
            });

            myDropzone.on("sendingmultiple", function(file, xhr, formData) {
                // Show the total progress bar when upload starts
                let formDataArray = $('.add_product_form').serializeArray();
                for(let i = 0; i < formDataArray.length; i++){
                    let formDataItem = formDataArray[i];
                    formData.append(formDataItem.name, formDataItem.value);
                }
            });

            uplodaBtn.on('click', function(e) {
                $('#processing').show();
                e.preventDefault();
                // e.stopPropagation();
                setTimeout(function(){
                    myDropzone.processQueue();
                }, 10);
                //Upload all files
                // console.log(myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED)));
            });
            myDropzone.on("successmultiple", function(files, response) {
                // Gets triggered when the files have successfully been sent.
                // Redirect user or notify of success.
                $('#processing').hide();
                // alert(response);
                if( response.startus == 'error' ){
                    $('#processing').hide();
                    $('#status').html(`<p class="alert alert-error">There was an error posting the property. <br /> ${response.message} </p>`).slideDown('fast').delay(4000).slideUp('slow');
                }else{
                    $('#processing').hide();
                    $('.add_product_form').trigger('reset');
                    $('#status').html(`<p class="alert alert-success">Congrats the property has been posted successfully.</p>`).slideDown('fast').delay(5000).slideUp('slow');
                }
                console.log(response);
            });
            myDropzone.on("errormultiple", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                $('#processing').hide();
                alert('There was an error sending the images' + response);
            });

            myDropzone.on('thumbnail', function(file){
                if( (file.width > maxImageWidth || file.height > maxImageHeight ) || (minImageWidth > file.width || minImageHeight > file.height) ){
                    file.rejectDimensions();
                }else{
                    file.acceptDimensions();
                }
            });
            removeBtn.on('click', function() {
                myDropzone.removeAllFiles(true);
                uplodaBtn.prop('disabled', true);
                removeBtn.prop('disabled', true);
            });

        });
    </script>
    <script type="text/javascript">
        $.fn.rowCount = function() {
            return $('tr', $(this).find('tbody')).length;
        };

        initit();
        function initit(){

            $('.add_more').on('click', function (x) {
                // check if the number of variation row exceeds limit
                let row_id = $('.pricing_table').rowCount() * 1;
                let new_id = row_id + 1;
                let new_row = `<tr data-row-id="${new_id}">
                                <td>
                                    <div class="form-group-sm">
                                        <label class="">Variation</label>
                                        <input title="variation" type="text" class="form-control" name="variation[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group-sm">
                                        <label class="">SKU</label>
                                        <input title="Seller SKU" type="text" class="form-control" name="sku[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group-sm">
                                        <label class="">ISBN </label>
                                        <input title="EAN / UPC / ISBN" type="text" class="form-control" name="isbn[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group-sm">
                                        <label class="">Quantity </label>
                                        <input title="Quantity" type="number" min="1" max="100" class="form-control" name="quantity[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group-sm">
                                            <label class="">Sale Price* </label>
                                            <input title="Price" type="text" class="form-control" name="sale_price[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label class="">Discount Price </label>
                                        <input title="Discounted price" type="text" class="form-control" required name="discount_price[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group-sm">
                                        <label class="">Discount Start Date</label>
                                        <input title="Starting date for this variation" type="date" class="form-control" name="start_date[]" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group-sm">
                                        <label class="">Discount End Date</label>
                                        <input title="End date for this variation" type="date" class="form-control" name="end_date[]" />
                                    </div>
                                </td>
                                <td class="">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-default btn-hover-success demo-psi-add add-tooltip add_more" href="javascript:void(0);" data-original-title="Add Another Variation" data-container="body"></a>
                                        <a class="btn btn-sm btn-default btn-hover-danger demo-pli-trash add-tooltip delete_row" href="javascript:void(0);" data-original-title="Delete This Variation" data-container="body"></a>
                                    </div>
                                </td>
                            </tr>`;
                $('.pricing_table tbody').append(new_row);
                initit();
            });

            $('.delete_row').on('click', function (x) {
                $(this).closest('tr').remove();
                initit()
            });
        }

    </script>
</body>
</html>
