<?php $this->load->view('templates/meta_tags'); ?>
<link href="<?= base_url('assets/plugins/bootstrap-validator/bootstrapValidator.min.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')?>" rel="stylesheet">
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
                        <h1 class="page-header text-overflow">Profile Settings</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="demo-pli-home"></i></a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="active">Profile</li>
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
                            <!--Default Tabs (Left Aligned)-->
                            <!--===================================================-->
                            <div class="panel">

                                <!--Panel heading-->
                                <div class="panel-heading">
                                    <div class="panel-control">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#carrito-tabs-box-1" data-toggle="tab">General</a>
                                            </li>
                                            <li><a href="#carrito-tabs-box-2" data-toggle="tab">Terms & Conditions</a></li>
                                            <li><a href="#carrito-tabs-box-3" data-toggle="tab">Seller Logo</a></li>
                                            <li><a href="#carrito-tabs-box-4" data-toggle="tab">Commisions & Fees</a></li>
                                            <li><a href="#carrito-tabs-box-5" data-toggle="tab">Shipping</a></li>
                                            <li><a href="#carrito-tabs-box-6" data-toggle="tab">Brands</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="panel-title">Your Profile</h3>
                                </div>

                                <!--Panel body-->
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="carrito-tabs-box-1">
                                            <p class="text-main text-semibold">Seller Account Information</p>
                                            <?= form_open_multipart('settings/process', 'class="form-horizontal"')?>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="carrito-fl-name">First & Last
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" value="<?= $profile->first_name . ' ' .$profile->last_name; ?>" required id="carrito-fl-name"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="carrito-email">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" name="email" required value="<?= $profile->email;?>"
                                                               id="carrito-email"
                                                               class="form-control"
                                                        disabled>
                                                    </div>
                                                </div>
                                                <p class="text-main text-semibold">Business Information</p>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label" for="carrito-cmp-name">Legal
                                                        Company Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="legal_company_name" value="<?= $profile->legal_company_name; ?>" id="carrito-cmp-name"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label" for="carrito-add1-name">Address
                                                        </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="address" value="<?= $profile->address?>"
                                                               id="carrito-add1-name"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label" for="carrito-tin-name">TIN (Tax
                                                        Identification Number)</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="tin" value="<?= $profile->tin; ?>" id="carrito-tin-name"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label" for="carrito-brn-name">Business
                                                        Registration No.</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="reg_no" value="<?= $profile->reg_no; ?>" id="carrito-brn-name"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">VAT Information File</label>
                                                    <div class="col-md-9">
                                                            <span class="pull-left btn btn-primary btn-file ">
                                                                Change <input type="file" name="vat_file">
                                                            </span>
                                                            <?php if( !empty($profile->vat_file)) : ?>
                                                                <span style="padding: 4px; margin: 10px 20px 5px 10px;">
                                                                    <a href="#">Google file viewer</a>
                                                                </span>
                                                            <?php endif;?>
                                                    </div>
                                                </div>

                                                <p class="text-main text-semibold">Shop Information</p>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Do you have
                                                        valid license to sell, distribute products you sell?</label>
                                                    <div class="col-sm-9">
                                                        <select class="demo_select2 form-control" name="license_to_sell">
                                                            <option>--Select an Option--</option>
                                                            <option value="1" <?php if($profile->license_to_sell) echo 'selected'?> >Yes</option>
                                                            <option value="0" <?php if(!$profile->license_to_sell) echo 'selected'?> >No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">
                                                        Do you own any brands for the products you are selling?</label>
                                                    <div class="col-sm-9">
                                                        <select class="demo_select2 form-control" name="own_brand">
                                                            <option>--Select an Option--</option>
                                                            <option value="1"  <?php if($profile->own_brand) echo 'selected'?> >Yes, I do</option>
                                                            <option value="0" <?php if($profile->own_brand) echo 'selected'?> >No.</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Main
                                                        Product Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="demo_select2 form-control" name="main_category">
                                                            <option selected>--Select Main Product Category--</option>
                                                            <?php foreach (get_root_categories()->result() as $root_categories ): ?>
                                                                <option value="<?= $root_categories->name; ?>" <?php if(trim($profile->main_category == $root_categories->name)) echo 'selected';?> ><?= $root_categories->name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Number
                                                        of products you plan to sell</label>
                                                    <div class="col-sm-9">
                                                        <select class="demo_select2 form-control" name="no_of_products">
                                                            <option value="">--Select an Option--</option>
                                                            <option value="1-10">1-10</option>
                                                            <option value="11-50">11-50</option>
                                                            <option value="51-100">51-100</option>
                                                            <option value="101-500">101-500</option>
                                                            <option value="501-2000">501-2000</option>
                                                            <option value="2000-5000">2001-5000</option>
                                                            <option value="5000-10000">5001-10000</option>
                                                            <option value="10001-50000">10001-50000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <p class="text-main text-semibold">Bank Account</p>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Bank*</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" required name="bank_name" value="<?= $profile->bank_name; ?>" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">BVN*</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" required name="bvn" value="<?= $profile->bvn; ?>" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Account Name*</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" required name="account_name" value="<?= $profile->account_name; ?>" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Account Number*</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" required name="account_number" value="<?= $profile->account_number;?>" class="form-control">
                                                    </div>
                                                </div>

                                                <p class="text-main text-semibold">Holidays</p>
                                                <p>During the holiday period your products will be offline, but you can
                                                    still process outstanding Orders or view your Account Statement.
                                                    Holiday period includes the Start and End dates.</p>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Start Date</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="start_date" value="<?= date('Y-m-d', strtotime($profile->start_date)); ?>" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">End Date</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="end_date" value="<?= date('Y-m-d', strtotime($profile->end_date)); ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="process_type" value="profile">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                            <!--===================================================-->
                                            <!--End Horizontal Form-->
                                        </div>
                                        <div class="tab-pane fade" id="carrito-tabs-box-2">
                                            <p class="text-main text-semibold">Your Terms & Conditions</p>
                                            <p>Fill in your Terms & Conditions</p>
                                            <?= form_open('settings/process', 'class="form-horizontal"'); ?>
                                            <form class="form-horizontal">
                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Terms & Conditions</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="terms"><?= cleanit($profile->terms); ?></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="process_type" value="terms">
                                                <div class="panel-footer text-right">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                        <div class="tab-pane fade" id="carrito-tabs-box-3">
                                            <p class="text-main text-semibold">Upload your logo</p>

                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Logo</label>
                                                    <div class="col-md-9">
					                        <span class="pull-left btn btn-primary btn-file ">
					                            Select File <input type="file">
					                        </span>
                                                    </div>
                                                </div>

                                                <div class="panel-footer text-right">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="tab-pane fade" id="carrito-tabs-box-4">
                                            <p class="text-main text-semibold">Commissions & Fees</p>
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <table data-toggle="table"
                                                           data-url="data/bs-table.json"
                                                           data-sort-name="id"
                                                           data-page-list="[5, 10, 20]"
                                                           data-page-size="5"
                                                           data-pagination="true" data-show-pagination-switch="true">
                                                        <thead>
                                                        <tr>
                                                            <th data-field="id" data-sortable="true"
                                                                data-formatter="invoiceFormatter">ID
                                                            </th>
                                                            <th data-field="name" data-sortable="true">Name</th>
                                                            <th data-field="date" data-sortable="true"
                                                                data-formatter="dateFormatter">Description
                                                            </th>
                                                            <th data-field="amount" data-align="center" data-sortable="true"
                                                                data-sorter="priceSorter">Value
                                                            </th>
                                                            <th data-field="status" data-align="center" data-sortable="true"
                                                                data-formatter="statusFormatter">Actions
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="carrito-tabs-box-5">
                                            <p class="text-main text-semibold">Shipping Provider</p>
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <table data-toggle="table"
                                                           data-url="data/bs-table.json"
                                                           data-sort-name="id"
                                                           data-page-list="[5, 10, 20]"
                                                           data-page-size="5"
                                                           data-pagination="true" data-show-pagination-switch="true">
                                                        <thead>
                                                        <tr>
                                                            <th data-field="id" data-sortable="true"
                                                                data-formatter="invoiceFormatter">ID
                                                            </th>
                                                            <th data-field="name" data-sortable="true">Name</th>
                                                            <th data-field="date" data-sortable="true"
                                                                data-formatter="dateFormatter">Default
                                                            </th>
                                                            <th data-field="amount" data-align="center" data-sortable="true"
                                                                data-sorter="priceSorter">Enabled
                                                            </th>
                                                            <th data-field="status" data-align="center" data-sortable="true"
                                                                data-formatter="statusFormatter">Cash on Delivery
                                                            </th>
                                                            <th data-field="status" data-align="center" data-sortable="true"
                                                                data-formatter="statusFormatter">Url
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="carrito-tabs-box-6">
                                            <p class="text-main text-semibold">Brands</p>
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <table data-toggle="table"
                                                           data-url="data/bs-table.json"
                                                           data-sort-name="id"
                                                           data-page-list="[5, 10, 20]"
                                                           data-page-size="5"
                                                           data-pagination="true" data-show-pagination-switch="true">
                                                        <thead>
                                                        <tr>
                                                            <th data-field="id" data-sortable="true"
                                                                data-formatter="invoiceFormatter">ID
                                                            </th>
                                                            <th data-field="name" data-sortable="true">Brand</th>
                                                            <th data-field="date" data-sortable="true"
                                                                data-formatter="dateFormatter">Approved
                                                            </th>

                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->



            <!--ASIDE-->
            <!--===================================================-->
            <?php $this->load->view('templates/aside_menu'); ?>
            <!--===================================================-->
            <!--END ASIDE-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <?php $this->load->view('templates/menu'); ?>
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
    <script src="<?= base_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
</body>
</html>
