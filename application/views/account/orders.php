<?php $this->load->view('landing/resources/head_base'); ?>
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

			<h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">My Orders & Returns</h3>
			<hr class="market-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>
			<div class="row">
                <?php if( $orders):  ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-md-push-8">
                                <div class="form-group">
                                    <select name="order_time" id="order_time" class="form-control">
                                        <option value="1">This Month</option>
                                        <option value="2">Last 3 Month</option>
                                        <option value="3">This Year</option>
                                        <option value="4">Previous Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="market-dashboard-card">
                            <div class="table-responsive">
                            <table style="width: 100%" class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Order Code</th>
                                        <th class="text-center">Date Initiated.</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $orders as $order) : ?>
                                        <tr>
                                            <td class="text-center"><?= $order->order_code;?></td>
                                            <td class="text-center"><?= neatDate($order->order_date) ?></td>
                                            <td class="text-center"><?= ngn($order->amount); ?></td>
                                            <td class="text-center"><?= $order->qty; ?></td>
                                            <td class="text-center"><a class="btn-link" style="color: #0b6427;" href="<?= base_url('account/orderstatus/' . $order->order_code); ?>">Order Status/Details</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="gap gap-small"></div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="market-dashboard-card">
                        <p class="market-dashboard-welcome-text">You are yet to make orders. <a
                                    style="text-decoration: none; color: green;" href="<?= base_url(); ?>">Browse for
                                products</a></p>
                        </div>
                    <?php endif;?>
                    </div>
			</div>
		</div>
	</div>
</div>
<?php if ($this->agent->is_mobile()) : ?>
    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
<?php else: ?>
    <?php $this->load->view('landing/resources/footer'); ?>
<?php endif; ?>
</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
