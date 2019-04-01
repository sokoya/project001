<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/checkout.css'); ?>"/>
<style>
    .custom-card {
        background: #fff;
        padding-top: 8px;
        padding-bottom: 8px;
        margin-bottom: 2px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .panel {
        margin-bottom: 5px !important;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>
    <div class="container">
        <header class="page-header" style="margin: 10px 0 10px !important;">
            <h4>Checkout</h4>
            <button class="btn-custom-primary btn-new-address">Add New Address</button>
            <button class="btn-custom-primary btn-pickup-address">Select Pickup Location</button>
        </header>
        <?php $this->load->view('msg_view'); ?>
        <div id="status"></div>
        <div class="row">
            <form id="checkout_form" method="POST" action="<?= base_url('checkout/stripe') ?>">
                <div class="">
                    <div class="panel panel-default" id="delivery-method">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title"><i class="fa fa-truck"></i>&nbsp;&nbsp; Delivery / Pickup Method
                            </h3>
                        </div>
                        <div class="panel-body" id="register_address" style="display: none">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gap-top col-md-10 col-md-offset-1">
                                        <div class="alert alert-warning">
                                            <p class="text-center">Billing address is where you will like us to deliver the item(s) to.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="checkout-form-input-label" for="first_name">First
                                                    Name:</label>
                                                <input type="text" title="Your first name" class="form-control checkout-form-input" id="fname"
                                                       name="first_name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="checkout-form-input-label" for="lname">Last Name:</label>
                                                <input type="text" class="form-control checkout-form-input" id="lname"
                                                       name="last_name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="checkout-form-input-label" for="number_">Mobile
                                                    Number</label>
                                                <input type="text" class="form-control checkout-form-input" id="number_"
                                                       name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="checkout-form-input-label" for="street">Street
                                                    Address</label>
                                                <input type="text" class="form-control checkout-form-input" id="street"
                                                       name="address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="checkout-form-input-label" for="state">State</label>

                                                    <select class="form-control checkout-form-input" id="state"
                                                            name="state"
                                                            required="">
                                                        <option value="">-- Select Sate --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="checkout-form-input-label" for="city">City ( Select the city we cover at the moment )</label>
                                                    <select class="form-control checkout-form-input" id="city"
                                                            name="area"
                                                            required="">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary btn-block create-address-btn">
                                                Submit
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-warning btn-block cancel-btn">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body" id="pickup_address" style="display: none;">
                            <div class="row" id="pickup_address_box">
                                <?php if ($pickups) : ?>
                                    <div class="gap-top col-md-10 col-md-offset-1">
                                        <div class="alert alert-warning">
                                            <p class="text-center"> Alternatively, you can select any of our pickup address where it will be convenient for you to pickup the item(s).</p>
                                        </div>
                                    </div>
                                    <?php foreach ($pickups as $pickup) : ?>
                                        <div class="col-md-6">
                                            <div class="panel panel-default custom-panel pickup-address"
                                                 data-paddress="<?= $pickup->title . ' ' . $pickup->address; ?>"
                                                 data-id="<?= $pickup->id; ?>" data-pamount="<?= $pickup->charge; ?>">
                                                <div class="panel-heading sub-custom-panel-head">
                                                    <div class="panel-title">
                                                        <div class="form-check">
                                                            <input title="Select Pickup Location" class="form-check-input delivery-box" type="radio"
                                                                   name="pickup_address"
                                                                   id="pickup_id_<?= $pickup->id; ?>"
                                                                   value="Pickup Address">
                                                            <label class="form-check-label"
                                                                   for="pickup_id_<?= $pickup->id ?>">
                                                                Select this pickup address
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div style="height:28px;">
                                                        <p class="panel-details"><i
                                                                    class="fa fa-address-card"></i><strong><?= $pickup->title; ?></strong>
                                                        </p>
                                                    </div>
                                                    <p class="panel-details"><i
                                                                class="fa fa-map-marker"></i><?= $pickup->address; ?>
                                                    </p>
                                                    <p class="panel-details"><i
                                                                class="fa fa-phone"></i><?= $pickup->phones; ?>
                                                    </p>
                                                    <p class="panel-details"><i
                                                                class="fa fa-mail-reply"></i><?= $pickup->emails; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <div class="alert alert-warning text-center delivery-warning">We don't have any pickup
                                        venue available for your state/area.
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block cancel-btn">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body" id="delivery_address">
                            <?php
                            if (!$address_set):
                                ?>
                                <div class="alert alert-warning text-center delivery-warning">You need to select an existing billing address of create a new one.
                                    <button class="btn-custom-primary btn-new-address"><strong>Add New Delivery Address</strong></button>
                                </div>
                            <?php endif; ?>
                            <div id="processing"
                                 style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                                <div class="text"
                                     style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                                    <img src="<?= base_url('assets/load.gif'); ?>" alt="Processing...">
                                    Processing your request. <strong
                                            style="color: rgba(2.4%,61.7%,46.8,0.843);">Please
                                        Wait! </strong>
                                </div>
                            </div>
                            <div class="row" id="delivery_address_box">
                                <form id="checkout_form">
                                    <?php
                                    if ($addresses) :
                                        foreach ($addresses as $address) : ?>
                                            <div class="col-md-6">
                                                <div class="panel panel-default custom-panel delivery-address"
                                                     data-id="<?= $address->id; ?>">
                                                    <div class="panel-heading sub-custom-panel-head">
                                                        <div class="panel-title">
                                                            <div class="form-check">
                                                                <input title="Select this as your primary delivery address" class="form-check-input delivery-box address-input"
                                                                       type="radio"
                                                                       name="selected_address"
                                                                       id="<?= $address->id; ?>"
                                                                       value="<?= $address->id; ?>"
                                                                     >
                                                                <label class="form-check-label" for="<?= $address->id; ?>">
                                                                    Select this address
                                                                </label>
                                                            </div>
                                                            <span class="delete-delivery" data-bid="<?= $address->id; ?>">Delete</span>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="panel-details" title="<?= $address->address ?>"><i
                                                                    class="fas fa-map-marker"></i><?= character_limiter($address->address, 38, '...') . '. ' . $address->state . ' ('. $address->area.')'; ?>
                                                        </p>
                                                        <div style="height:28px;">
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
                                    endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title"><i class="fas fa-credit-card"></i>&nbsp;&nbsp; Payment Method</h3>
                        </div>
                        <div class="panel-body payment_method_body" style="
                        display: none;">
                            <?php $x = 1;
                            foreach ($methods as $method) : ?>
                                <?php if( $method->id == 1 && $total > 20000 ) : ?>
                                    <div class="panel panel-default custom-panel">
                                        <div class="panel-body pay-panel">
                                            <div class="form-check">
                                                <p class="form-check-label">
                                                    <input disabled title="<?= $method->name . ' (Not Available)'; ?>"
                                                           class="form-check-input payment-radio" type="radio"
                                                           name="payment_method"
                                                           data-name="<?= trim($method->name); ?>"
                                                           data-pid="<?= $method->id; ?>"
                                                           id="payment_method_<?= $method->id; ?>"
                                                           value="<?= $method->id; ?>">
                                                    <?= $method->name . ' (Not Available)'; ?>
                                                    <img src="<?= STATIC_CATEGORY_PATH . $method->img_name; ?>" alt="-">
                                                </p>
                                                <div class="gap-top"></div>
                                                <div class="text-sm pad-all payment_note" style="display:none;">
                                                    <p>
                                                        Some of the the reasons why payment on delivery may be unavailable are:
                                                    <ul>
                                                        <li>Your total cart value is under ₦ 1,500</li>
                                                        <li>Your total cart value is above ₦ 20,000</li>
                                                        <li>Selected items shipped from overseas are not eligible for Pay on Delivery</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="panel panel-default custom-panel pay-method">
                                        <div class="panel-body pay-panel">
                                            <div class="form-check">
                                                <p class="form-check-label">
                                                    <input title="<?= $method->name; ?>"
                                                           class="form-check-input payment-radio" type="radio"
                                                           name="payment_method"
                                                           data-name="<?= trim($method->name); ?>"
                                                           data-pid="<?= $method->id; ?>"
                                                           id="payment_method_<?= $method->id; ?>"
                                                           value="<?= $method->id; ?>">
                                                    <?= $method->name; ?>
                                                    <img src="<?= STATIC_CATEGORY_PATH . $method->img_name; ?>" alt="-">
                                                </p>
                                                <div class="gap-top"></div>
                                                <div class="text-sm pad-all payment_note" style="display:none;">
                                                    <?= htmlspecialchars_decode($method->notes); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- / Payment method -->
                    <div class="panel panel-default">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title"><i class="fa fa-list-alt"></i> Order Details</h3>
                        </div>
                        <div class="panel-body" id="review_order">
                            <div class="">
                                <?php
                                $subtotal = $total = $qty = 0;
                                foreach ($this->cart->contents() as $product) :
                                    $detail = $this->product->get_cart_details($product['id']);
                                    ?>
                                    <div class="custom-card" style="font-size: 12px;">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
                                                    <img style="width:80px !important;height:auto !important;" class="lazy"
                                                         data-src="<?= PRODUCTS_IMAGE_PATH . $detail->image; ?>"
                                                         src="<?= base_url('assets/load.gif'); ?>"
                                                         alt="<?= $product['name']; ?>"
                                                         title="<?= $product['name']; ?>"/>
                                                </a>
                                            </div>
                                            <div class="col-xs-9">
                                                <?= word_limiter(htmlentities($product['name']), 7, '...'); ?><br/>
                                                <span class="pr-price" data-amount="<?= $product['subtotal']; ?>">
                                                        <?php
                                                        echo ngn($product['subtotal']);
                                                        $subtotal += $product['subtotal'];
                                                        $qty += $product['qty'];
                                                        ?>
                                                </span> X <?= $product['qty']; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3"></div>
                                            <div class=" col-xs-9">
                                                <span>Sold By: <span><?= $detail->name; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="cst-overlay"></div>
                    <div class="panel panel-default load-point">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title summary-title sum-pad">Order Summary <span
                                        class="panel-summary-quantity"><span
                                            class="pr-summary-count"
                                            data-quantity="<?= $this->cart->total_items(); ?>"><?= $this->cart->total_items(); ?></span> item(s)</span>
                            </h3>
                        </div>
                        <ul class="list-group cs-sum-grp">
                            <li class="list-group-item cs-sm-m">Subtotal: <span class="total-sum"
                                                                                data-amount="<?= $subtotal; ?>"><?= ngn($subtotal); ?></span>
                            </li>
                            <li class="list-group-item cs-sm-m">Delivery Charges: <span class="charges"
                                                                                        data-amount="<?= $delivery_charge; ?>"><?= ngn($delivery_charge * $qty); ?></span>
                            </li>
                            <li class="list-group-item cs-sm-t">Total: <span
                                        class="total-sum-charges"
                                        data-amount="<?= $subtotal + ($delivery_charge * $qty); ?>"><?= ngn($subtotal + ($delivery_charge * $qty)); ?></span>
                            </li>
                            <input type="hidden" name="total_charge" id="total_charge"
                                   value="<?= $subtotal + ($delivery_charge * $qty); ?>">
                            <input type="hidden" name="qty" id="qty" value="<?= $qty; ?>">
                            <li class="list-group-item">
                                <button type="submit" class="btn btn-block btn-custom-dark continue-btn" disabled>
                                    Proceed
                                    to Payment
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="lds-spinner cst-loader" style="display: none;">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </form>
<!--            <div class="custom-card" style="margin-top: 5px;">-->
<!--                <div class="container">-->
<!--                    <h4 class="block-title">Delivery Information</h4>-->
<!--                    <div class="row">-->
<!--                        <div class="col-xs-2">-->
<!--                            <img src="--><?//= base_url('assets/svg/delivery-truck.svg'); ?><!--"-->
<!--                                 alt="Delivery Truck" style="height: 30px; width: 35px;">-->
<!--                        </div>-->
<!--                        <div class="col-xs-10">-->
<!--                            <p class="delivery-text">Onitshamarket.com delivery available, get it within 5 business-->
<!--                                days of-->
<!--                                order</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-xs-2">-->
<!--                            <img src="--><?//= base_url('assets/svg/return.svg'); ?><!--"-->
<!--                                 alt="Delivery Truck"-->
<!--                                 style="height: 30px; width: 35px;">-->
<!--                        </div>-->
<!--                        <div class="col-xs-10">-->
<!--                            <p class="delivery-text">Free 7 day return if available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row" style="margin-top: 14px;">-->
<!--                        <div class="col-xs-2">-->
<!--                            <img src="--><?//= base_url('assets/svg/warranty.svg'); ?><!--" alt="Warranty"-->
<!--                                 style="height: 30px; width: 35px;">-->
<!--                        </div>-->
<!--                        <div class="col-xs-10">-->
<!--                            <p class="delivery-text" style="position: relative; top: -5px;">This product has the-->
<!--                                following warranty-->
<!--                                : Repair by vendor-->
<!--                                <br>-->
<!--                                <a href="javascript:void(0)">Learn more</a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
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
<script>
    let weight = '';
    $(document).ready(function(){
        <!--    --><?//= var_dump( $weights ); exit;?>
        weight = JSON.parse(`<?= $weights;?>`);
    });
</script>
<script>
    $(function () {
        $('.lazy').Lazy();
    });
    $('.pay-panel').on('click', function () {
        let self = $(this);
        $('p.payment_note').hide(300);
        self.find('p.payment_note').show(300);
    })
</script>
<script src="<?= $this->user->auto_version('assets/js/checkout.js'); ?>"></script>
</body>
</html>
