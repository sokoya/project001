<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .req{
        color:red;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

    <?php $this->load->view('landing/resources/head_menu') ?>

    <div class="container market-dashboard-cover">

        <?php $this->load->view('account/includes/sidebar'); ?>
        <div class="col-md-8">
            <?php $this->load->view('account/includes/sidebar-mobile'); ?>

            <?php $this->load->view('landing/msg_view'); ?>
            <div class="row">
                <h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs col-md-6">My Billing Address</h3>
                <a href="#" class="btn btn-primary" style="border-radius: 0px !important; float:right;"
                   data-toggle="modal" data-target="#add_address">
                    <strong><i class="fa fa-plus"></i> Add New Address
                    </strong>
                </a>
            </div>
            <hr class="market-sidebar-line-r"/>
            <div class="alert alert-warning">
                <i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
                several area in the state may arrive latter than expected. To view the most up to date status for your
                order, please go to the Orders page
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="market-dashboard-card">
                        <h4>Default Address</h4>
                        <hr/>
                        <p>
                            Check order status make a return or write a review
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="market-dashboard-card">
                        <h4>Other Addresses</h4>
                        <hr/>
                        <p>
                            Change personal information, update address book and add authorized users
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!--//modal here-->
<div class="modal fade" id="add_address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Address</h4>
                <p style="font-size:11px;color:red;">All fields with * are required.</p>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="add_add_form" method="POST" action="#" novalidate="novalidate">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="f_name" class="control-label">First Name <span class="req">*</span></label>
                                <input type="text" class="form-control" id="f_name" name="f_name" value="" required=""
                                       title="Please enter you first name" placeholder="First Name">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label">Phone Number  <span class="req">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="" required=""
                                       title="Please enter you phone number" placeholder="080XXXXXXXX">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="state_id" class="control-label">State  <span class="req">*</span></label>
                                <select class="form-control" id="state_id">
                                    <option selected>--select--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="l_name" class="control-label">Last Name  <span class="req">*</span></label>
                                <input type="text" class="form-control" id="l_name" name="l_name" value="" required=""
                                       title="Please enter you last name" placeholder="Last Name">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone2" class="control-label">Additional Phone Number</label>
                                <input type="tel" class="form-control" id="phone2" name="phone2" value=""
                                       title="Please enter you phone number" placeholder="080XXXXXXXX">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="area_id" class="control-label">Area  <span class="req">*</span></label>
                                <select class="form-control" id="area_id">
                                    <option selected>--select--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="address" class="control-label">Address  <span class="req">*</span></label>
                                <input type="text" class="form-control" id="address" name="address" value="" required=""
                                       title="Please enter you full address" placeholder="Delivery Address">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-success btn-block">Add Address</button>
                        </div>
                        <div class="col-xs-6">
                            <a class="btn btn-block btn-default" data-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gap gap-small"></div>
<?php $this->load->view('landing/resources/footer'); ?>

<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
