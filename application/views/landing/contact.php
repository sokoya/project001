<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= $this->user->auto_version(base_url('assets/css/home.css')); ?>">
<style>
    .view_constraint {
        min-height: calc(100vh - 629px);
    }

    @media screen and (max-width: 991px) {
        .view_constraint {
            min-height: calc(100vh - 167px) !important;
        }

        .row_sp_con {
            margin-top: 0px !important;
        }

        .p_sp_con {
            margin: 5px !important;
        }
        .form_sp_con{

        }
    }
    @media screen and (max-width: 767px) {
        .form_sp_con{
            margin-top:10px;
        }
    }

    .row_sp_con {
        margin-top: 100px;
    }

    .p_sp_con {
        text-align: left;
        margin: 0 80px 0;
    }
</style>
</head>
<body style="background: #fff;">
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>


    <div class="container view_constraint text-center">
        <div class="row row_sp_con ">
            <div class="col-md-4 col-lg-5 col-sm-6 col-xs-12">
                <img src="<?= base_url('assets/img/contact.png'); ?>" style="max-width:200px;"/>
                <hr align="center" width="80%"/>
                <h3 style="background: #fff;margin-top:-27px;width:fit-content;font-size:14px;text-align: center;margin-left:auto;margin-right: auto;font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                    CONTACT US
                </h3>
                <p class="p_sp_con">
                    <i class="fa fa-home"></i> Address: 10, Street Name City, Onitsha, Anambra State. Nigeria.<br>
                    <i class="fa fa-phone"></i> Tel: +23412345678<br>
                    <i class="fa fa-map-marker"></i> Monday to Saturday<br>
                    <i class="fa fa-clock-o"></i> Hours: 09:00am to 05:00pm
                </p>
            </div>
            <div class="col-md-8 col-lg-7 col-sm-6 col-xs-12 form_sp_con">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12 text-left">
                                    Full Name *
                                </div>
                                <div class="col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Full Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12 text-left">
                                    Email *
                                </div>
                                <div class="col-xs-12">
                                    <input type="email" id="email" class="form-control" placeholder="example@onitshamarket.com" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group subjectPK1">
                        <div class="col-xs-12 text-left">
                            Subject *
                        </div>
                        <div class="col-xs-12 text-left">
                            <input type="hidden" id="subject" name="subject" title="subject"/>

                            <select class="form-control" id="subjectPK1" name="subjectPK1" title="subjectPK1" required>
                                <option value="" disabled="disabled" selected="selected">--None--</option>
                                <option value="I want to confirm my order">I want to confirm my order
                                </option>
                                <option value="I want to cancel my order">I want to cancel my order</option>
                                <option value="I have a Payment Issue" id="paymentcontact">I have a Payment
                                    Issue
                                </option>
                                <option value="I want to track my order">I want to track my order</option>
                                <option value="I want to return my order" id="">I want to return my order
                                </option>
                                <option value="I want to track my return / refund request" id="">I want to
                                    track my return / refund request
                                </option>
                                <option value="I have some other request" id="othercontact">I have some
                                    other request
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK2" style="display: none;">
                        <div class="col-xs-12 text-left">
                            Tracking *
                        </div>
                        <div class="col-xs-12 text-left">

                            <select class="form-control" id="subjectPK2" name="subjectPK2" title="subjectPK2" required
                                    style="display: none;">

                                <option value="- Is my order confirmed?">Is my order confirmed?</option>
                                <option value="- Where is my order?">Where is my order?</option>
                                <option value="- I haven't received my item">I haven't received my item
                                </option>

                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK3" style="display: none;">
                        <div class="col-xs-12 text-left">
                            Reason *
                        </div>
                        <div class="col-xs-12 text-left">
                            <select class="form-control" id="subjectPK3" name="subjectPK3" title="subjectPK3" required
                                    style="display: none;">
                                <option value="- I found an alternative">I found an alternative</option>
                                <option value="- This is a Duplicate order">This is a Duplicate order
                                </option>
                                <option value="- I want to change delivery address">I want to change
                                    delivery address
                                </option>
                                <option value="- I forgot to update voucher">I forgot to update voucher
                                </option>
                                <option value="- I selected a wrong item / changed my mind">I selected a
                                    wrong item / changed my mind
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK4" style="display: none;">
                        <div class="col-xs-12 text-left">
                            Reason *
                        </div>
                        <div class="col-xs-12 text-left">
                            <select class="form-control" id="subjectPK4" name="subjectPK4" title="subjectPK4" required
                                    style="display: none;">
                                <option value="- I received a wrong item">I received a wrong item</option>
                                <option value="- I received an item which is different from the website">I
                                    received an item which is different from the website
                                </option>
                                <option value="- I received incomplete item">I received incomplete item
                                </option>
                                <option value="- I received a defective item / item not working / broken">I
                                    received a defective item / item not working / broken
                                </option>
                                <option value="- I have an issue with size / fitting">I have an issue with
                                    size / fitting
                                </option>
                                <option value="- I no longer need this item / Change my mind">I no longer
                                    need this item / Change my mind
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK5" style="display: none;">
                        <div class="col-xs-12 text-left">
                            Help *
                        </div>
                        <div class="col-xs-12 text-left">
                            <select class="form-control" id="subjectPK5" name="subjectPK5" title="subjectPK5" required
                                    style="display: none;">
                                <option value="- How do I use my voucher?">How do I use my voucher?</option>
                                <option value="- My voucher is not working">My voucher is not working
                                </option>
                                <option value="- I'm not able to opt for Cash on delivery">I'm not able to
                                    opt for Cash on delivery
                                </option>
                                <option value="- I'm unable to pay through Card">I'm unable to pay through
                                    Card
                                </option>
                                <option value="- I'm unable to pay through Online banking">I'm unable to pay
                                    through Online banking
                                </option>
                            </select>


                        </div>
                    </div>
                    <div class="form-group subjectPK6" style="display: none;">
                        <div class="col-xs-12 text-left">
                            Help *
                        </div>
                        <div class="col-xs-12 text-left">
                            <select class="form-control" id="subjectPK6" name="subjectPK6" title="subjectPK6" required
                                    style="display: none;">


                                <option value="- I have an issue logging into my account">I have an issue
                                    logging into my account
                                </option>

                                <option value="- I need more details on an offer / deal / product">I need
                                    more details on an offer / deal / product
                                </option>
                                <option value="- How can I reach out for an aftersales service centre? ">How
                                    can I reach out for an aftersales service centre?
                                </option>
                                <option value="- I need help in placing an order">I need help in placing an
                                    order
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK7" style="display: none;">
                        <div class="col-xs-12 text-left">
                            Reason *
                        </div>
                        <div class="col-xs-12 text-left">

                            <select class="form-control" id="subjectPK7" name="subjectPK7" title="subjectPK7" required
                                    style="display: none;">
                                <option value="- My item has not been picked">My item has not been picked
                                </option>
                                <option value="- I'm waiting for my refund">I'm waiting for my refund
                                </option>
                                <option value="- My item was picked but return has been rejected">My item
                                    was picked but return has been rejected
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK8" style="display: none;">
                        <div class="col-xs-12 text-left">
                            <span id="subjectPKLabel1"
                                  style="display: none;">Payment Method *</span>
                        </div>
                        <div class="col-xs-12 text-left">
                            <select class="form-control" id="subjectPK8" name="pay_method"
                                    title="Order Payment Method"
                                    style="display: none;">
                                <option value="">--None--</option>
                                <option value="Quick Teller">Quick Teller</option>
                                <option value="Cash on delivery">Cash on delivery</option>
                                <option value="Pay Stack">Pay Stack</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group subjectPK9" style="display: none;">
                        <div class="col-xs-12 text-left">
                            <span id="subjectPKLabel2" style="display: none;">Refund Method *</span>
                        </div>
                        <div class="col-xs-12 text-left">
                            <select class="form-control" id="subjectPK9" name="refund_method"
                                    title="Preferred Refund Method"
                                    style="display: none;">
                                <option value="">--None--</option>
                                <option value="Quick Teller">Quick Teller</option>
                                <option value="Refund Voucher">Refund Voucher</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-left">
                            Order No
                        </div>
                        <div class="col-xs-12">
                            <input class="form-control" id="00N2400000IQx8L" name="00N2400000IQx8L" size="20"
                                   pattern="^[3][0-9]{8}$"
                                   placeholder="Enter your 9 digits order number e.g 374929453"
                                   type="text" required onKeyPress="return isNumberKey(event)"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-left">
                            Description *
                        </div>
                        <div class="col-xs-12">
                            <textarea class="form-control" id="message" placeholder="Enter Description Here"
                                      rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default btn-icon" style="width:220px;height:50px;border-radius: unset;border:1px solid green;color:green;">
                            <i class="fa fa-paper-plane-o" style="color:green;"></i> Send Message
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="row row_sp_con">
            <!--Contact Info -->
            <div class="col-md-3">
                <p>
                <h5><b>Lagos Office (Seller Training Center)</b></h5><br/>
                <i class="fa fa-home"></i> Address: 530A Aina Akingbala Street, Omole Phase 2, Ikeja. Lagos State, Nigeria.<br>
                <i class="fa fa-phone"></i> Tel: +23412345678<br>
                <i class="fa fa-email"></i> Tel: lagos@onitshamarket.com<br>
                <i class="fa fa-map-marker"></i> Monday to Saturday<br>
                <i class="fa fa-clock-o"></i> Hours: 09:00am to 05:00pm
                </p>
            </div>
            <div class="col-md-3">
                <p>
                <h5><b>Abuja Office (Customer Experience Center)</b></h5><br/>
                <i class="fa fa-home"></i> Address: 10, Street name. FCT Abuja, Nigeria.<br>
                <i class="fa fa-phone"></i> Tel: +23412345678<br>
                <i class="fa fa-email"></i> Tel: abuja@onitshamarket.com<br>
                <i class="fa fa-map-marker"></i> Monday to Saturday<br>
                <i class="fa fa-clock-o"></i> Hours: 09:00am to 05:00pm
                </p>
            </div>
            <div class="col-md-3">
                <p>
                <h5><b>Asaba Office (Customer Center)</b></h5><br/>
                <i class="fa fa-home"></i> Address: 104 Okpanam Road, Opp. Legislative Quarters Asaba, Delta State, Nigeria<br>
                <i class="fa fa-phone"></i> Tel: +23412345678<br>
                <i class="fa fa-email"></i> Tel: asaba@onitshamarket.com<br>
                <i class="fa fa-map-marker"></i> Monday to Saturday<br>
                <i class="fa fa-clock-o"></i> Hours: 09:00am to 05:00pm
                </p>
            </div>
            <div class="col-md-3">
                <p>
                <h5><b>Aba Office (Distributor Center)</b></h5><br/>
                <i class="fa fa-home"></i> Address: 10, Street Name, Aba, Abia State<br>
                <i class="fa fa-phone"></i> Tel: +23412345678<br>
                <i class="fa fa-email"></i> Tel: aba@onitshamarket.com<br>
                <i class="fa fa-map-marker"></i> Monday to Saturday<br>
                <i class="fa fa-clock-o"></i> Hours: 09:00am to 05:00pm
                </p>
            </div>
        </div>
    </div>

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
        <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript">
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    $(function () {
        $("#subjectPK1").on('click',function () {
            let firstDropVal = $('#subjectPK1').val();
            let results = "";
            switch (firstDropVal) {
                case "I want to track my order":
                    $("#subjectPK1, #subjectPK2").show(300);
                    $(".subjectPK1, .subjectPK2").show(300);
                    $("#subjectPK3, #subjectPK4, #subjectPK5, #subjectPK6, #subjectPK7, #subjectPK8, #subjectPK9, #subjectPKLabel1, #subjectPKLabel2").hide(300);
                    $(".subjectPK3, .subjectPK4, .subjectPK5, .subjectPK6, .subjectPK7, .subjectPK8, .subjectPK9, .subjectPKLabel1, .subjectPKLabel2").hide(300);
                    results = $('#subject').val($('#subjectPK1').val() + ' ' + $('#subjectPK2').val());
                    break;

                case "I want to cancel my order":
                    $("#subjectPK1, #subjectPK3, #subjectPK8, #subjectPKLabel1").show(300);
                    $("#subjectPK2, #subjectPK4, #subjectPK5, #subjectPK6, #subjectPK7, #subjectPK9, #subjectPKLabel2").hide(300);
                    $(".subjectPK1, .subjectPK3, .subjectPK8, .subjectPKLabel1").show(300);
                    $(".subjectPK2, .subjectPK4, .subjectPK5, .subjectPK6, .subjectPK7, .subjectPK9, .subjectPKLabel2").hide(300);

                    $("#subjectPK8").click(function () {
                        var nextDropVal = $('#subjectPK8').val();
                        if (nextDropVal == "Quick Teller") {
                            $("#subjectPK9 option").filter("[value='Refund Voucher'], [value='Bank Transfer']").attr('disabled', 'disabled');
                            $("#subjectPK9 option[value='Quick Teller']").removeAttr('disabled');
                            $("#subjectPK9, #subjectPKLabel2").show(300);
                            $(".subjectPK9, .subjectPKLabel2").show(300);
                        }
                        else if (nextDropVal == "Cash on delivery") {
                            $("#subjectPK9 option").siblings().removeAttr('disabled');
                            $("#subjectPK9, #subjectPKLabel2").show(300);
                            $(".subjectPK9, .subjectPKLabel2").show(300);
                        }
                        else if (nextDropVal == "Pay Stack") {
                            $("#subjectPK9 option[value='Quick Teller']").attr('disabled', 'disabled').siblings().removeAttr('disabled');
                            $("#subjectPK9, #subjectPKLabel2").show(300);
                            $(".subjectPK9, .subjectPKLabel2").show(300);
                        }
                    });
                    break;

                case "I want to return my order":
                    $("#subjectPK1, #subjectPK4, #subjectPK8, #subjectPKLabel1").show(300);
                    $("#subjectPK2, #subjectPK3, #subjectPK5, #subjectPK6, #subjectPK7, #subjectPK9, #subjectPKLabel2").hide(300);
                    $(".subjectPK1, .subjectPK4, .subjectPK8, .subjectPKLabel1").show(300);
                    $(".subjectPK2, .subjectPK3, .subjectPK5, .subjectPK6, .subjectPK7, .subjectPK9, .subjectPKLabel2").hide(300);

                    $("#subjectPK8").click(function () {
                        var nextDropVal = $('#subjectPK8').val();
                        if (nextDropVal == "Quick Teller") {
                            $("#subjectPK9 option").filter("[value='Refund Voucher'], [value='Bank Transfer']").attr('disabled', 'disabled');
                            $("#subjectPK9 option[value='Quick Teller']").removeAttr('disabled');
                            $("#subjectPK9, #subjectPKLabel2").show(300);
                            $(".subjectPK9, .subjectPKLabel2").show(300);
                        }
                        else if (nextDropVal == "Cash on delivery") {
                            $("#subjectPK9 option").siblings().removeAttr('disabled');
                            $("#subjectPK9, #subjectPKLabel2").show(300);
                            $(".subjectPK9, .subjectPKLabel2").show(300);
                        }
                        else if (nextDropVal == "Webpay") {
                            $("#subjectPK9 option[value='Quick Teller']").attr('disabled', 'disabled').siblings().removeAttr('disabled');
                            $("#subjectPK9, #subjectPKLabel2").show(300);
                            $(".subjectPK9, .subjectPKLabel2").show(300);
                        }
                    });
                    break;

                case "I have a Payment Issue":
                    $("#subjectPK1, #subjectPK5").show(300);
                    $("#subjectPK2, #subjectPK3, #subjectPK4, #subjectPK6, #subjectPK7, #subjectPK8, #subjectPK9, #subjectPKLabel1, #subjectPKLabel2").hide(300);
                    $(".subjectPK1, .subjectPK5").show(300);
                    $(".subjectPK2, .subjectPK3, .subjectPK4, .subjectPK6, .subjectPK7, .subjectPK8, .subjectPK9, .subjectPKLabel1, .subjectPKLabel2").hide(300);
                    results = $('#subject').val($('#subjectPK1').val() + ' ' + $('#subjectPK5').val());
                    break;

                case "I want to track my return / refund request":
                    $("#subjectPK1, #subjectPK7").show(300);
                    $("#subjectPK2, #subjectPK3, #subjectPK4, #subjectPK5, #subjectPK6, #subjectPK8, #subjectPK9, #subjectPKLabel1, #subjectPKLabel2").hide(300);
                    $(".subjectPK1, .subjectPK7").show(300);
                    $(".subjectPK2, .subjectPK3, .subjectPK4, .subjectPK5, .subjectPK6, .subjectPK8, .subjectPK9, .subjectPKLabel1, .subjectPKLabel2").hide(300);
                    results = $('#subject').val($('#subjectPK1').val() + ' ' + $('#subjectPK7').val());
                    break;

                case "I have some other request":
                    $("#subjectPK1, #subjectPK6").show(300);
                    $("#subjectPK2, #subjectPK3, #subjectPK4, #subjectPK5, #subjectPK7, #subjectPK8, #subjectPK9, #subjectPKLabel1, #subjectPKLabel2").hide(300);
                    $(".subjectPK1, .subjectPK6").show(300);
                    $(".subjectPK2, .subjectPK3, .subjectPK4, .subjectPK5, .subjectPK7, .subjectPK8, .subjectPK9, .subjectPKLabel1, .subjectPKLabel2").hide(300);
                    results = $('#subject').val($('#subjectPK1').val() + ' ' + $('#subjectPK6').val());
                    break;

                case "I want to confirm my order":
                    $("#subjectPK1").show(300);
                    $("#subjectPK2, #subjectPK3, #subjectPK4, #subjectPK5, #subjectPK6, #subjectPK7, #subjectPK8, #subjectPK9, #subjectPKLabel1, #subjectPKLabel2").hide(300);
                    $(".subjectPK1").show(300);
                    $(".subjectPK2, .subjectPK3, .subjectPK4, .subjectPK5, .subjectPK6, .subjectPK7, .subjectPK8, .subjectPK9, .subjectPKLabel1, .subjectPKLabel2").hide(300);
                    results = $('#subject').val($('#subjectPK1').val());
                    break;
            }
        });
    });
</script>
<script>
    $(function () {
        $('.lazy').Lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true
        });
    });
</script>
</body>
</html>
