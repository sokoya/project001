<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/landing/css/checkout.css'); ?>"/>
<style>
    .req {
        color: red;
    }

    .add_form {
        display: none;
    }

    .edt_anchor, .edt_anchor:hover {
        text-decoration: none;
        color: #49a251;
    }

</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_category') ?>

        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <div class="container market-dashboard-cover">

        <?php $this->load->view('account/includes/sidebar'); ?>
        <div class="col-md-8">
            <?php $this->load->view('account/includes/sidebar-mobile'); ?>
            <?php $this->load->view('landing/msg_view'); ?>
            <div class="row">
                <h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs col-md-6">My Billing Address</h3>
                <a href="javascript:void(0);" class="btn btn-primary add_new_add"
                   style="border-radius: 0px !important; float:right;"
                   id="add_new_add">
                    <strong><i class="fa fa-plus"></i> Add New Address
                    </strong>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger btn_can_update"
                   style="border-radius: 0px !important; float:right;display:none;" id="btn_can_update">
                    <strong><i class="fa fa-times"></i> Cancel
                    </strong>
                </a>
            </div>
            <hr class="market-sidebar-line-r"/>
            <div class="alert alert-warning">
                <i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
                several area in the state may arrive latter than expected. To view the most up to date status for your
                order, please go to the Orders page
            </div>
            <div id="status"></div>
            <div class="add_form" id="add_address">
                <div>
                    <h4 class="modal-title" id="add_title">Add New Address</h4>
                    <p style="font-size:11px;color:red;">All fields with * are required.</p>
                </div>
                <div class="add_body">
                    <div class="row">
                        <form id="add_add_form" method="POST" action="javascript:void(0);">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="f_name" class="control-label">First Name <span
                                                class="req">*</span></label>
                                    <input type="text" class="form-control" id="f_name" name="first_name"
                                           value="" required=""
                                           title="Please enter you first name" placeholder="First Name">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Phone Number <span
                                                class="req">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value=""
                                           required=""
                                           title="Please enter you phone number" placeholder="080XXXXXXXX">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="state_id" class="control-label">State <span class="req">*</span></label>
                                    <select class="form-control" id="state_id" name="state">
                                        <option value="" selected>--select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="l_name" class="control-label">Last Name <span
                                                class="req">*</span></label>
                                    <input type="text" class="form-control" id="l_name" name="last_name"
                                           value="" required=""
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
                                    <label for="area_id" class="control-label">Area <span
                                                class="req">*</span></label>
                                    <select class="form-control" id="area_id" name="area">
                                        <option value="" selected>--select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label for="address" class="control-label">Address <span
                                                class="req">*</span></label>
                                    <textarea class="form-control" name="address" id="address" rows="4"
                                              placeholder="Delivery Address"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <button type="" id="btn_add_add"
                                        class="btn btn-success btn-block"
                                        style="border-radius: 0px !important;"><strong>Add Address</strong>
                                </button>
                            </div>
                            <input type="hidden" name="address_type" value="" id="address_type"/>
                            <input type="hidden" name="update_aid" id="update_aid"/>
                            <div class="col-xs-12 col-md-12">
                                <button id="btn_up_add" type="submit"
                                        class="btn btn-primary btn-block"
                                        style="display:none;border-radius: 0px !important;"><strong>Update
                                        Address</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>

            <div class="panel-body" id="delivery_address">
                <div id="processing"
                     style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                    <div class="text"
                         style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                        <img src="<?= base_url('assets/landing/load.gif'); ?>" alt="Processing...">
                        Processing your request. <strong
                                style="color: rgba(2.4%,61.7%,46.8,0.843);">Please
                            Wait! </strong>
                    </div>
                </div>
                <div class="row" id="delivery_address_box">
                    <?= form_open(); ?>
                    <?php
                    if ($addresses) :{
                        foreach ($addresses as $address) : ?>
                            <div class="col-md-6">
                                <div class="panel panel-default custom-panel pickup-address
										<?php
                                if ($address->primary_address == 1) :
                                    ?>
											custom-panel-active
										<?php
                                endif;
                                ?>"
                                     data-id="<?= $address->id; ?>">
                                    <div class="panel-heading sub-custom-panel-head">
                                        <h3 class="panel-title">
                                            <div class="form-check">
                                                <input class="form-check-input delivery-box" type="radio"
                                                       name="address_radio1"
                                                       id="<?= $address->id; ?>" value="option1"
                                                    <?php if ($address->primary_address == 1) echo 'checked' ?> >
                                                <label class="form-check-label" for="<?= $address->id; ?>">
                                                    <?php
                                                    if ($address->primary_address == 1) {
                                                        echo 'Default Address';
                                                    } else {
                                                        echo 'Set As Default Address';
                                                    }
                                                    ?>
                                                </label>
                                            </div>
                                            <span class="col-md-4"><a
                                                        onclick='javascript:get_specific_add("<?= $address->id; ?>");edit_address(this);'
                                                        href="javascript:void(0);" class="edt_anchor btn_edt_add"
                                                        style="float: right;" data-id="<?= $address->id; ?>">Edit</a>
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <p class="panel-details"><i
                                                    class="fa fa-user"></i><?= ucfirst($address->first_name) . ' ' . ucfirst($address->last_name) ?>
                                        </p>
                                        <div style="height:48px;">
                                            <p class="panel-details"><i
                                                        class="fa fa-map-marker"></i><?= $address->address; ?>
                                            </p>
                                        </div>
                                        <p class="panel-details"><i
                                                    class="fa fa-phone"></i><?= $address->phone; ?> <?= !empty($address->phone2) ? ',' . $address->phone2 : ''; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                    } else:{
                        echo "<p class=\"market-dashboard-welcome-text\">Hello <?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?>. You have not added any address to this account. Click 'Add New Address' to add</p>";
                    }endif; ?>
                    <?= form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="gap gap-small"></div>
<?php if ($this->agent->is_mobile()) : ?>
    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
<?php else: ?>
    <?php $this->load->view('landing/resources/footer'); ?>
<?php endif; ?>
<?php $this->load->view('landing/resources/script'); ?>
<script>

    function toTitleCase(str) {
        return str.replace(/(?:^|\s)\w/g, function (match) {
            return match.toUpperCase();
        });
    }

    $('.pickup-address').on('click', get_updates);

    function get_updates() {
        $('.pickup-address').removeClass('custom-panel-active');
        let ad_id = $(this).data('id');
        let elem = $(this);
        $(`#${ad_id}`).prop('checked', true);

        $.ajax({
            url: base_url + "checkout/set_default_address",
            method: 'POST',
            data: {address_id: ad_id},
            success: function (response) {
                if ('.delivery-box') {
                    elem.addClass('custom-panel-active');
                }
            },
            error: function (response) {
            }
        });
    }
</script>

<script>
    let innercodered = "<strong><i class=\"fa fa-times\"></i> Cancel\n" +
        "                    </strong>";
    let innercodenorm = "<strong><i class=\"fa fa-plus\"></i> Add New Address\n" +
        "                    </strong>";
    let state_drop = $('#state_id');

    $('.add_new_add').on('click', function () {
        $('#address_type').val('new');
        $.getJSON(base_url + 'ajax/fetch_states', function (d) {
            state_drop.children('option:not(:first)').remove();
            $.each(d, function (k, v) {
                state_drop.append($('<option></option>').attr('value', v.id).text(toTitleCase(v.name)));
            })
        });
        if ($('#add_new_add').hasClass('btn-primary')) {
            $('#add_address').css({
                display: 'block'
            });
            $('#add_new_add').html(innercodered);
            $('#add_new_add').removeClass('btn-primary');
            $('#add_new_add').addClass('btn-danger');

        } else {
            $('#add_address').css({
                display: 'none'
            });
            $('#add_new_add').html(innercodenorm);
            $('#add_new_add').removeClass('btn-danger');
            $('#add_new_add').addClass('btn-primary');
        }
    });

    var selected_state_id;
    state_drop.change(function () {
        selected_state_id = $('#state_id option:selected').attr('value');
        $.ajax({
            url: base_url + 'ajax/fetch_areas',
            method: 'get',
            data: {sid: selected_state_id},
            dataType: 'json',
            success: function (d) {
                $('#area_id > option:not(:first)').remove();
                $.each(d, function (k, v) {
                    $('#area_id').append($('<option></option>').attr('value', v.id).text(toTitleCase(v.name)));
                })
            }
        })
    });

    $('#btn_add_add').click(function () {
        $.ajax({
            url: base_url + 'account/billing',
            method: 'post',
            data: $('#add_add_form').serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.status == 'error') {
                    $('#status').html(`<p class="alert alert-danger">${response.message}</p>`).slideDown('fast').delay(3000).slideUp('slow');
                } else {
                    $('#status').html(`<p class="alert alert-success">Your address has been added successfuly.</p>`).slideDown('fast').delay(3000).slideUp('slow');
                    $('#billing_address_box').load(`${base_url}account/billing #billing_address_box`);
                    reset_add_form();
                }
            }
        });
    })
    // Set the address as default
    $('#btn_set_default').click(function () {

    });

    function edit_address(el) {
        reset_add_form();
        $('#address_type').val('update');
        $('#update_aid').val($(el).data("id"));
        $('#btn_add_add, #add_new_add').css({
            display: 'none'
        });
        $('#btn_can_update, #btn_up_add, #add_address').css({
            display: 'block'
        });
        $('#add_title').text('Edit Address');
    };

    $('#btn_can_update').click(function () {
        reset_add_form();
    });

    function reset_add_form() {
        $('#btn_add_add, #add_new_add').css({
            display: 'block'
        });
        $('#btn_can_update, #btn_up_add, #add_address').css({
            display: 'none'
        });
        $('#add_title').text('Add New Address');
        $('#phone').val('');
        $('#phone2').val('');
        $('#address').val('');
        $('#f_name').val('');
        $('#update_aid').val('');
        $('#l_name').val('');
        $('#area_id > option:not(:first)').remove();
        $('#state_id > option:not(:first)').remove();
    }

    $('#btn_up_add').click(function () {
        $.ajax({
            url: base_url + "account/billing",
            method: "POST",
            data: $('#add_add_form').serialize(),
            success: function (response) {
                $('#btn_add_add, #add_new_add').css({display: 'block'});
                $('#btn_up_add, #add_address, #btn_can_update').css({display: 'none'});
                $('#add_title').text('Add New Address');
                if (response.status == 'error') {
                    $('#status').html(`<p class="alert alert-danger">${response.message}</p>`).slideDown('fast').delay(3000).slideUp('slow');
                } else {
                    $('#status').html(`<p class="alert alert-success">Your address has been updated successfuly.</p>`).slideDown('fast').delay(3000).slideUp('slow');
                    $('#billing_address_box').load(`${base_url}account/billing #billing_address_box`);
                    reset_add_form();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
            }
        });
    });


    // Send a get method to the controller function
    let get_specific_add = function (id) {
        $.ajax({
            url: base_url + 'ajax/fetch_single_address',
            method: 'get',
            data: {address_id: id},
            dataType: 'json',
            success: function (d) {
                $.each(d, function (k, value) {

                    $('#f_name').val(value.first_name);
                    $('#l_name').val(value.last_name);

                    $.getJSON(base_url + 'ajax/fetch_states', function (d) {
                        state_drop.children('option:not(:first)').remove();
                        $.each(d, function (k, v) {
                            state_drop.append($(`<option ${v.id === value.sid ? 'selected=selected' : ''}  ></option>`).attr('value', v.id).text(toTitleCase(`${v.name}`)));

                        });
                    });
                    $.ajax({
                        url: base_url + 'ajax/fetch_areas',
                        method: 'get',
                        data: {sid: value.sid},
                        dataType: 'json',
                        success: function (d) {
                            $('#area_id > option:not(:first)').remove();
                            $.each(d, function (k, v) {
                                $('#area_id').append($(`<option ${v.id === value.aid ? 'selected=selected' : ''}></option>`).attr('value', v.id).text(toTitleCase(v.name)));

                            })
                        }
                    });
                    $('#phone').val(value.phone);
                    $('#phone2').val(value.phone2);
                    $('#address').val(value.address);
                })
            }
        })
    }


</script>
</body>
</html>
