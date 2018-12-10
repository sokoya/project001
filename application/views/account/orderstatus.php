<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container market-dashboard-cover">

		<?php $this->load->view('account/includes/sidebar'); ?>

		<div class="col-md-8">
			<?php $this->load->view('account/includes/sidebar-mobile'); ?>

			<h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">Order Status & Details For #<?= $order_code; ?></h3>
			<hr class="market-sidebar-line-r"/>
			<div class="row">
                <div class="col-md-12">
                    <div class="market-dashboard-card">
                        <?php if($orders) :?>
                        <?php $x = 1; foreach ($orders as $order): ?>
                            <p class="market-dashboard-welcome-text"><strong>Item <?= $x;?>. Date Initiated : </strong> <?= neatDate($order->order_date); ?></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <span>
                                        <img data-src="<?= PRODUCTS_IMAGE_PATH . $order->image_name; ?>"
                                         src="<?= base_url('assets/landing/img/load.gif'); ?>"
                                         class="lazy"
                                         title="<?= $order->name; ?>"
                                         style="width: 80px; height: 100%; padding-right: 4px;">
                                    <a class="btn-link" style="color: #0b6427; padding: 3px;" id="product-name" title="<?= $order->name; ?>"
                                             href="<?= base_url() . urlify($order->name, $order->pid); ?>"><?= $order->name; ?></a></span>
                                    <br />
                                    <span><strong>Qty: </strong><?= $order->qty; ?></span>
                                    <span><strong>Amount: </strong><?= ngn($order->amount); ?></span>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="market-dashboard-welcome-text">Payment Method: </h5>
                                    <span class="market-dashboard-welcome-text-body">InterSwitch Payment</span><br />
                                </div>
                                <div class="col-md-4">
                                    <h5 class="market-dashboard-welcome-text">Shipping Address: </h5>
                                    <span class="market-dashboard-welcome-text-body"><?= ucwords($order->first_name . ' ' . $order->last_name)?><br /><?= $order->address;?>
                                        <br /><?= $order->phone; ?> <?php if(!empty($order->phone2)) echo ',' . $order->phone2; ?>
                                    </span>
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
<?php $this->load->view('landing/resources/footer'); ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').Lazy();
    });
</script>
</body>
</html>
