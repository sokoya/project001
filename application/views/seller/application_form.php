<?php $this->load->view('seller/templates/meta_tags.php'); ?>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="cls-container" style="background-color: #fff !important;">


    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay"></div>


    <!-- REGISTRATION FORM -->
    <!--===================================================-->
    <div class="cls-content ">
        <div class="cls-content-lg panel panel-colorful " style="border: 1px solid #26a69a !important;padding-top:10px;">
            <div class="panel-title" style="background-color: transparent !important;">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/landing/img/onitshamarket-logo.png'); ?>" alt="<?= lang('app_name'); ?>"
                             class="brand-title img-responsive">
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h1 class="h3 text-2x">Complete the seller form</h1>
                    <?php $this->load->view('msg_view'); ?>
                    <p class="text text-dark">We are glad you have decided to join the community.</p>
                </div>
                <?= form_open('seller/application/process') ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Legal company name</label>
                            <input type="text" class="form-control" placeholder="Legal Comapny name" required autofocus
                                   name="legal_company_name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="address">Company address </label>
                            <textarea placeholder="Your company address" data-provide="markdown" rows="3" name="address"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>TIN (Taxpayer Identification Number)</label>
                            <input type="text" class="form-control" placeholder="TIN" required name="tin">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="main_category">Main Category</label>
                            <select class="form-control" name="main_category">
                                <option value="">-- Select Main Category --</option>
                                <?php foreach ($categories->result() as $category) : ?>
                                    <option value="<?= $category->name ?>"> <?= ucwords($category->name); ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="no_of_products">No of products to be sold</label>
                            <select class="form-control" name="no_of_products">
                                <option value="1-10">1 - 10</option>
                                <option value="21-50">21 - 50</option>
                                <option value="51-100">51 - 100</option>
                                <option value="101-more">100 +</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Do you own this brand?</label>
                            <select class="form-control" name="own_brand">
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Do you have license to sell?</label>
                            <select class="form-control" name="license_to_sell">
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="checkbox pad-btm text-left">
                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                    <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and
                            Conditions</a></label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                <?= form_close(); ?>
            </div>

            <div class="pad-all">
                <a href="<?= base_url(); ?>" class="btn-link mar-rgt">Go to Homepage</a>
                <!-- <a href="<?= base_url('seller/register'); ?>" class="btn-link mar-lft">Create a seller account</a> -->
            </div>
        </div>
    </div>
    <!--===================================================-->

</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!--JAVASCRIPT-->
<!--=================================================-->
<?php foreach ($scripts as $tag) : ?>
    <script src="<?= base_url('assets/js/') . $tag; ?>"></script>
<?php endforeach; ?>
</body>
</html>
