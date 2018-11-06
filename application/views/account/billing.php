<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .req{
        color:red;
    }
    .add_form{
        display:none;
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
                <a href="#" class="btn btn-primary" style="border-radius: 0px !important; float:right;" id="add_new_add">
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

            <!--//add address here-->
            <div class="add_form" id="add_address">
                <div>
                    <div>
                        <div>
                            <h4 class="modal-title" id="myModalLabel">Add New Address</h4>
                            <p style="font-size:11px;color:red;">All fields with * are required.</p>
                        </div>
                        <div class="add_body">
                            <div class="row">
                                <form id="add_add_form" method="POST" action="#">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            <label for="f_name" class="control-label">First Name <span class="req">*</span></label>
                                            <input type="text" class="form-control" id="f_name" name="first_name" value="" required=""
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
                                            <select class="form-control" id="state_id" name="state">
                                                <option selected>--select--</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            <label for="l_name" class="control-label">Last Name  <span class="req">*</span></label>
                                            <input type="text" class="form-control" id="l_name" name="last_name" value="" required=""
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
                                            <select class="form-control" id="area_id" name="area">
                                                <option selected>--select--</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label for="address" class="control-label">Address  <span class="req">*</span></label>
                                            <textarea class="form-control " id="address" rows="4" placeholder="Delivery Address"></textarea>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <button type="submit" id="btn_add_add" href="javascript:;" class="btn btn-success btn-block" style="border-radius: 0px !important;"><strong>Add Address</strong></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="market-dashboard-card">
                        <h4>Default Address</h4>
                        <hr/>
                        <p>
                            <i class="fa fa-user"></i>&nbsp;<?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?>
                        </p>
                        <p>
                            <i class="fa fa-map-marker"></i>&nbsp;504F Jagaban Crescent, Ikeja, Lagos
                        </p>
                        <p>
                            <i class="fa fa-phone"></i>&nbsp;080XXXXXXXX, 080XXXXXXXX
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="market-dashboard-card">
                        <h4>Other Addresses</h4>
                        <hr/>
                        <p>
                            Additional Addresses will appear here.
                        </p>
                        <p>
                            Additional Addresses will appear here.
                        </p>
                        <p>
                            Additional Addresses will appear here.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="gap gap-small"></div>
<?php $this->load->view('landing/resources/footer'); ?>
<?php $this->load->view('landing/resources/script'); ?>
<script>
    let base_url = "<?= base_url();?>"
    function toTitleCase(str) {
        return str.replace(/(?:^|\s)\w/g, function(match) {
            return match.toUpperCase();
        });
    }
</script>

<script>
    let innercodered = "<strong><i class=\"fa fa-times\"></i> Cancel\n" +
        "                    </strong>";
    let innercodenorm ="<strong><i class=\"fa fa-plus\"></i> Add New Address\n" +
        "                    </strong>";
    let state_drop = $('#state_id');
    $.getJSON( base_url + 'account/fetch_states', function(d) {
        $.each(d, function(k,v){
            state_drop.append($('<option></option>').attr('value', v.id).text(toTitleCase(v.name)));
        })
    });
    $('#add_new_add').on('click', function(){

        if ($('#add_new_add').hasClass('btn-primary')){
            $('#add_address').css({
                display : 'block'
            });
            $('#add_new_add').html(innercodered);
            $('#add_new_add').removeClass('btn-primary');
            $('#add_new_add').addClass('btn-danger');

        } else{
            $('#add_address').css({
                display : 'none'
            });
            $('#add_new_add').html(innercodenorm);
            $('#add_new_add').removeClass('btn-danger');
            $('#add_new_add').addClass('btn-primary');
        }
    })
    var selected_state_id;
    state_drop.change(function(){
       selected_state_id = $('#state_id option:selected').attr('value');
        $.ajax({
            url:base_url + 'account/fetch_areas',
            method: 'get',
            data: {sid: selected_state_id},
            dataType: 'json',
            success: function(d) {
                $('#area_id > option:not(:first)').remove();
                $.each(d, function (k, v) {
                    $('#area_id').append($('<option></option>').attr('value', v.id).text(toTitleCase(v.name)));
                })
            }
        })
    });
var first_name = $('#f_name').val(),
    last_name  = $('#l_name').val(),
    state = $('#state_id').val(),
    area = $('#area_id').val(),
    phone = $('#phone').val(),
    phone2 = $('#phone2').val(),
    address = $('#address').val();
    $('#btn_add_add').click(function(){
        $.ajax({
            url:base_url + 'account/billing',
            method: 'post',
            data: {
                first_name: first_name,
                last_name : last_name,
                state: state,
                area : area,
                phone : phone,
                phone2 : phone2,
                address : address
            },
            dataType: 'json',
            success: function(d) {
               
            }
        })
    })
</script>
</body>
</html>
