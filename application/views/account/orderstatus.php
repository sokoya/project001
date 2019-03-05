<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <div class="container market-dashboard-cover">

        <?php $this->load->view('account/includes/sidebar'); ?>

        <div class="col-md-8">
            <?php $this->load->view('account/includes/sidebar-mobile'); ?>

            <h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">Order Status & Details For
                #<?= $order_code; ?></h3>
            <hr class="market-sidebar-line-r"/>
            <div class="row">
                <div class="col-md-12">
                    <div class="market-dashboard-card">
                        <?php if ($orders) : ?>
                            <?php $x = 1;
                            foreach ($orders as $order): ?>
                                <p class="market-dashboard-welcome-text"><strong>Item #<?= $x; ?>. Date Initiated
                                        : </strong> <?= neatDate($order->order_date); ?></p>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img data-src="<?= PRODUCTS_IMAGE_PATH . $order->image_name; ?>"
                                                     src="<?= base_url('assets/load.gif'); ?>"
                                                     class="lazy"
                                                     title="<?= $order->name; ?>"
                                                     style="width: 80px; height: 100%; padding-right: 4px;">
                                            </div>
                                            <div class="col-md-8 pull-md-right" style="margin-left: 10px;">
                                            <span><a class="btn-link" style="color: #0b6427; padding: 3px;"
                                                     id="product-name" title="<?= $order->name; ?>"
                                                     href="<?= base_url() . urlify($order->name, $order->pid); ?>"><?= $order->name; ?></a></span>
                                                <p class="text-sm">
                                                    <span><strong>Qty: </strong><?= $order->qty; ?></span><br/>
                                                    <span><strong>Amount: </strong><?= ngn($order->amount); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h5 class="market-dashboard-welcome-text">Payment Method: </h5>
                                        <span class="market-dashboard-welcome-text-body"><?= $order->payment_method?></span><br/>
                                        <?php
                                        $date1 = date_create($order->order_date);
                                        $date2 = date_create(get_now());
                                        $diff = date_diff($date1, $date2);
                                        if ($diff->format("%a") <= 7 && ($order->payment_method == 2 && $order->responseCode == '00') ) :
                                            ?>
                                            <span class="text-danger" style="font-size: small"><a
                                                        style="color: #0b6427;" class="btn-link"
                                                        href="<?= PAGE_CONTACT_US; ?>">Having issue with the item?</a></span>
                                            <br/>
                                        <?php endif; ?>
                                        <span class="text-center" style="font-size: xx-small">
                                        <a class="btn btn-primary btn-sm" role="button" data-toggle="collapse"
                                           href="#<?= $x; ?>" aria-expanded="false" aria-controls="<?= $x; ?>">
                                            Click to see status
                                        </a>
                                    </span>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="market-dashboard-welcome-text">Delivery Type: </h5>
                                        <h6><?= ucwords($shipping_type)?> Address</h6>
                                        <div class="market-dashboard-welcome-text-body">
                                            <?php if( $shipping_type == 'pickup') :  ?>
                                                <strong><?= ucwords($shipping_address->title); ?></strong>
                                                <br/><?= $shipping_address->address; ?>
                                                <br/><?= $shipping_address->phones; ?>
                                                <br /><?= $shipping_address->emails?>
                                            <?php else : ?>
                                                <strong><?= ucwords($shipping_address->first_name . ' '. $shipping_address->last_name); ?></strong>
                                                <br/><?= $shipping_address->address; ?>
                                                <br/><?= $shipping_address->phone .', '. $shipping_address->phone2 ; ?>
                                                <br /><?= $shipping_address->state. ', '. $shipping_address->area; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="margin: 20px;" class="collapse well" id="<?= $x; ?>">
                                        <?php $status = json_decode($order->status);
                                        $status = (array)$status;
                                        foreach ($status as $key => $value) :?>
                                            <p class="text-sm text-semibold">
                                                <strong>- <?= $value->msg; ?></strong><br/>
                                                <span class="text-danger"><?= date('d/m/Y H:i:s', strtotime($value->datetime)) ?></span>
                                            </p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php $x++; endforeach; ?>
                        <?php else : ?>
                        <p class="market-dashboard-welcome-text">The Order Is Invalid<a
                                    style="text-decoration: none; color: green;" href="<?= base_url(); ?>">Browse for
                                products</a></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
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
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
</div>
<script>
    $(function () {
        $('.lazy').Lazy();
    });
    $('.dropdown').on('click', function () {
        setTimeout(function () {
            $('.dropdown-backdrop').remove();
        }, 1000);
    })
</script>
</body>
</html>
