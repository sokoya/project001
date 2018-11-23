<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body class="cart-row">
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/head_img') ?>
    <?php $this->load->view('landing/resources/head_category') ?>
    <?php $this->load->view('landing/resources/head_menu') ?>

    <div class="container">
        <?php if (!empty($this->cart->contents())) : ?>
            <header class="page-header" style="margin: 10px 0 10px !important;">
                <h4>Cart Overview</h4>
            </header>
            <div class="row">
                <?php $this->load->view('landing/msg_view'); ?>
                <?= form_open('', 'id="cart-form"'); ?>

                <?php $x = 0;
                $total = 0;
                foreach ($this->cart->contents() as $product): ?>
            <?php
            $detail = $this->product->get_cart_details($product['id']);
            $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
            ?>
                <div class="group-prod" style="background-color: white;margin-bottom:10px;padding:10px;text-align:justify;font-size:12px;">
                    <div class="row">
                        <div class="col-xs-5">
                            <?php echo form_hidden($x . '[rowid]', $product['rowid']); ?>
                            <a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
                                <img style="width:130px !important;height:auto !important;"
                                     src="<?= base_url('data/products/' . $product['id'] . '/' . $detail->image); ?>"
                                     alt="<?= lang('app_name'); ?> <?= $product['name']; ?>"
                                     title="<?= $product['name']; ?>"/>
                            </a></div>
                        <div class="col-xs-7">
                            <div class="col-xs-12">
                                <a
                                        href="<?= base_url(urlify($product['name'], $product['id'])); ?>"
                                        style="overflow: hidden !important;"><?= htmlentities($product['name']); ?></a><br/>
                                <span
                                        class="text text-sm">Seller: <?= !empty($detail->legal_company_name) ? $detail->legal_company_name : $detail->name; ?></span>
                            </div>
                            <div class="col-xs-12">
                                <?php if ($variation_detail->quantity < 1 || in_array($detail->product_status, array('suspended', 'blocked', 'pending')))
                                    : ?>
                                    <span class="text-center text-semibold text-danger"><strong>This product variation is out of stock. or no longer available.</strong></span>
                                <?php else: ?>
                                    <?php echo ngn($product['subtotal']); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div>
                    <div class="row">
                        <?php if ($variation_detail->quantity < 1 || in_array($detail->product_status, array('suspended', 'blocked', 'pending')))
                            : ?>
                            <span class="text-center text-semibold text-danger"><strong>This product variation is out of stock. or no longer available.</strong></span>
                        <?php else: ?>
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <a title="Remove <?= $product['name']; ?> from the cart" class="btn btn-danger"
                                       href="<?= base_url('cart/remove/' . $product['rowid']); ?>"><i
                                                class="fa fa-times"></i>Remove

                                    </a>
                                </div>
                                <div class="col-xs-8" style="padding-right:10px;">
                                    <ul>
                                        <?php $value = ($product['qty'] > $variation_detail->quantity) ? $variation_detail->quantity : $product['qty']; ?>
                                        <li class="product-page-qty-item">
                                            <button type="button" data-cid="<?= $product['rowid']; ?>"
                                                    class="product-page-qty product-page-qty-minus">-
                                            </button>
                                            <input data-range="<?= $variation_detail->quantity; ?>" name="quantity"
                                                   id="quan"
                                                   class="product-page-qty product-page-qty-input quantity product-<?= $product['rowid']; ?>"
                                                   type="text"
                                                   value="<?= $value; ?>" disabled/>
                                            <button type="button" data-cid="<?= $product['rowid']; ?>"
                                                    class="product-page-qty product-page-qty-plus">+
                                            </button>
                                        </li>
                                    </ul>
                                    <?php $total += $product['subtotal']; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                    <?php
                    $x++;
                endforeach; ?>
                <button type="submit" style="display: none;"></button>
                <?= form_close(); ?>
                <div class="gap gap-small"></div>
                <div class="col-xs-12">
                    <ul class="shopping-cart-total-list">
                        <li><span>Sub-total :</span><span>(<?= $this->cart->total_items(); ?>) items</span>
                        </li>
                        <li><span>Total :</span><span><?= ngn($total); ?></span>
                        </li>
                    </ul>
                    <span class="text-sm text-danger"><strong>Delivery fee not included.</strong></span><br/>
                    <br/>
                    <a class="btn btn-primary" href="<?= base_url('checkout'); ?>">Checkout</a>
                </div>
            </div><br/>
            <ul class="list-inline">
                <li><a class="btn btn-default" href="<?= base_url(); ?>">Continue Shopping</a>
                </li>
            </ul>
        <?php else: ?>
            <div class="custom-fa-cover">
                <i class="fa fa-cart-arrow-down empty-cart-icon custom-fa text-center"></i>
            </div>
            <div class="text-center">

                <p class="lead custom-text">You haven't fill your shopping cart yet</p>
                <a class="btn btn-primary btn-lg" href="<?= base_url(); ?>">Start Shopping<i
                            class="fa fa-long-arrow-right"></i></a>
            </div>
        <?php endif; ?>
    </div>
    <div class="lds-spinner cst-loader " style="display: none;">
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
    <div class="gap"></div>

    <?php $this->load->view('landing/resources/footer'); ?>

</div>
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
</script>
<?php $this->load->view('landing/resources/script'); ?>
<script>

    function bind_market(src, destination) {
        $(`.${destination}`).html(src);
    }

    let quantity = $('#quan');
    let count = quantity.data('range');
    let plus = $('.product-page-qty-plus');
    let minus = $('.product-page-qty-minus');

    plus.on('click', function () {
        $('.cst-loader').show();
        let cid = $(this).data('cid');
        let qty = $(`.product-${cid}`).val() * 1;
        plus.prop('disabled', true);
        minus.prop("disabled", false);
        $.ajax({
            url: 'ajax/update_cart_item',
            method: 'POST',
            data: {cid: cid, qty: qty},
            success: function (response) {
                $('.cst-loader').hide();
                if (response) {
                    let x = ($('.cart-read').text() * 1) + 1;
                    notification_message('The Product quantity has been updated.', 'fa fa-info-circle', 'success');
                    bind_market(x, 'cart-read');
                    if (quantity.val() >= 1) {
                        plus.prop("disabled", true);
                    } else {
                        minus.prop("disabled", false);
                    }
                    $('.cart-row').load(base_url + 'product/cart');
                }
            },
            error: response => {
                console.log(response);
                if (quantity.val() >= count) {
                    plus.prop("disabled", true);
                } else {
                    plus.prop("disabled", false);
                }
            }
        });
    });

    minus.on('click', function () {
        $('.cst-loader').show();
        let cid = $(this).data('cid');
        let qty = $(`.product-${cid}`).val() * 1;
        minus.prop('disabled', true);
        plus.prop("disabled", false);
        if (quantity.val() <= 1) {
            minus.prop("disabled", true);
        }
        $.ajax({
            url: 'ajax/update_cart_item',
            method: 'POST',
            data: {cid: cid, qty: qty},
            success: function (response) {
                $('.cst-loader').hide();
                if (response) {
                    let x = ($('.cart-read').text() * 1) - 1;
                    notification_message('The Product quantity has been updated.', 'fa fa-info-circle', 'warning');
                    bind_market(x, 'cart-read');
                    if (quantity.val() <= 1) {
                        minus.prop("disabled", true);
                    } else {
                        minus.prop("disabled", false);
                    }
                    $('.cart-row').load(base_url + 'product/cart');
                }

            },
            error: () => {
                if (quantity.val() <= 1) {
                    minus.prop("disabled", true);
                } else {
                    minus.prop("disabled", false);
                }
            }
        });
    });

    quantity.on('input', function () {
        if (quantity.val() > count) {
            quantity.val(count)
        } else if (quantity.val() === '0') {
            quantity.val(1)
        }
    });

</script>
</body>
</html>