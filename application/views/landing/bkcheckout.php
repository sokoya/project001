<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/checkout.css'); ?>"/>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <div class="gap"></div>
    <div class="container">
        <h4 class="pr-over" style="font-size: 24px; font-weight: 600;  color: #5b5b5b">Checkout</h4>
        <?php $this->load->view('msg_view'); ?>
        <div id="status"></div>
        <div class="row">
            <form id="checkout_form" method="POST" action="<?= base_url('checkout/stripe') ?>">
                <div class="col-md-8">

                    <div class="panel panel-default" id="delivery-method">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title"><i class="fa fa-truck"></i>&nbsp;&nbsp; Delivery / Pickup Method
                                <button class="btn-custom-primary btn-pickup-address">Select Pickup Location</button>
                                <button class="btn-custom-primary btn-new-address">Add New Address</button>
                            </h3>
                        </div>
                        <div class="panel-body" id="register_address" style="display: none">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="checkout-form-input-label" for="first_name">First
                                                    Name:</label>
                                                <input type="text" class="form-control checkout-form-input" id="fname"
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
                                                    <label class="checkout-form-input-label" for="city">City</label>
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
                                        <p>
                                            <h5> Alternatively, you can select any of our pickup address where it will be convenient for you to pickup the item(s).</h5>
                                        </p>
                                    </div>
                                </div>
                                    <?php foreach ($pickups as $pickup) : ?>
                                        <div class="col-md-6">
                                            <div class="panel panel-default custom-panel pickup-address"
                                                    data-id="<?= $pickup->id; ?>">
                                                <div class="panel-heading sub-custom-panel-head">
                                                    <h3 class="panel-title">
                                                        <div class="form-check">
                                                            <input class="form-check-input pickup-location" type="radio"
                                                                   name="pickup_address"
                                                                   id="pickup_id_<?= $pickup->id; ?>"
                                                                   value="<?= $pickup->id; ?>">
                                                            <label class="form-check-label"
                                                                   for="pickup_id_<?= $pickup->id ?>">
                                                                Select this pickup address
                                                            </label>
                                                        </div>
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div style="height:28px;">
                                                        <p class="panel-details"><i
                                                                    class="fa fa-address-card"></i><strong><?= $pickup->title; ?></strong>
                                                        </p>
                                                    </div>
                                                    <p class="panel-details" title="<?= $pickup->address; ?>"><i
                                                                class="fa fa-map-marker"></i><?= $pickup->address ?>
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
                                    <div class="alert alert-warning text-center delivery-warning">We currently don't
                                        have any pickup venue available for your state/area.
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
                                <div class="alert alert-warning text-center delivery-warning">Select an existing address
                                    or
                                    create a new address
                                    to continue. Alternatively, you can choose any of our pickup address.
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
                                <?php if ($addresses) : foreach ($addresses as $address) : ?>
                                        <div class="col-md-6">
                                            <div class="panel panel-default custom-panel delivery-address <?= ($address->primary_address == 1) ? 'custom-panel-active' : ''; ?> data-id='<?= trim($address->id); ?>'" >
                                                <div class="panel-heading sub-custom-panel-head">
                                                    <div class="panel-title">
                                                        <div class="form-check">
                                                            <input class="form-check-input address-box address-input"
                                                                   type="radio"
                                                                   name="selected_address"
                                                                   id="<?= $address->id; ?>"
                                                                   value="<?= $address->id; ?>"
                                                                <?php if ($address->primary_address == 1) echo 'checked' ?> >
                                                            <label class="form-check-label" for="<?= $address->id; ?>">
                                                                Select this address
                                                            </label>
                                                        </div>
                                                        <span class="delete-address" data-aid="<?= $address->id; ?>">Delete</span>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <p class="panel-details"><i class="fa fa-user"></i><?= ucfirst($address->first_name) . ' ' . ucfirst($address->last_name) ?>
                                                    </p>
                                                    <div style="height:28px;">
                                                        <p class="panel-details" title="<?= $address->address ?>"><i class="fa fa-map-marker"></i><?= character_limiter($address->address, 38); ?>
                                                        </p>
                                                    </div>
                                                    <p class="panel-details"><i class="fa fa-phone"></i><?= $address->phone; ?> <?= !empty($address->phone2) ? ',' . $address->phone2 : ''; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title"><i class="fa fa-credit-card"></i>&nbsp;&nbsp; Payment Method</h3>
                        </div>
                        <div class="panel-body payment_method_body" style="
                        <?php if (!$address_set): ?>
                                display: none
                        <?php endif; ?>">
                            <?php $x = 1;
                            foreach ($methods as $method) : ?>
                                <div class="panel panel-default custom-panel pay-method">
                                    <div class="panel-body pay-panel">
                                        <div class="form-check">
                                            <p class="form-check-label pay-gate">
                                                <input class="form-check-input payment-radio" type="radio"
                                                       name="payment_method"
                                                       data-name="<?= trim($method->name); ?>"
                                                       data-pid="<?= $method->id; ?>"
                                                       id="payment_method_<?= $method->id; ?>"
                                                       value="<?= $method->id; ?>">
                                                <?= $method->name; ?>
                                                <!--                                                    <img src="-->
                                                <? //= base_url('assets/img/paystack.png');
                                                ?><!--">-->
                                            </p>
                                            <div class="gap-top"></div>
                                            <p class="text-sm pad-all payment_note" style="display:none;">
                                                <?= htmlspecialchars_decode($method->notes); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading custom-panel-head">
                            <h3 class="panel-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp; Review Order</h3>
                        </div>
                        <div class="panel-body" id="review_order">
                            <div class="panel panel-default ">
                                <table class="table">
                                    <tbody>
                                    <?php
                                    $subtotal = $total = $qty = 0;
                                    foreach ($this->cart->contents() as $product) :
                                        $detail = $this->product->get_cart_details($product['id']);
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
                                                    <img class="panel-pr-image lazy"
                                                         data-src="<?= PRODUCTS_IMAGE_PATH . $detail->image; ?>"
                                                         src="<?= base_url('assets/img/load.gif'); ?>"
                                                         alt="<?= $product['name']; ?>"
                                                         title="<?= $product['name']; ?>"
                                                    />
                                                </a>
                                            </td>
                                            <td class="panel-product-title"><?= word_limiter(htmlentities($product['name']), 7, '...'); ?>
                                                <br/><span>Seller : <span><?= $detail->name; ?></span> </span>
                                            </td>
                                            <td class="panel-product-quantity"><?= $product['qty']; ?>
                                                item(s)
                                            </td>

                                            <td class="panel-product-price">
                                                    <span class="pr-price" data-amount="<?= $product['subtotal']; ?>">
                                                        <?php
                                                        echo ngn($product['subtotal']);
                                                        $subtotal += $product['subtotal'];
                                                        $qty += $product['qty'];
                                                        ?>
                                                    </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                                    Continue
                                    to Payment
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="payment-errors" class="gab"></div>
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
        </div>
    </div>
    <div class="gap"></div>
    <?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
<script src="<?= $this->user->auto_version('assets/js/checkout.js'); ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
</body>
</html>
