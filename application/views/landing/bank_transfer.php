<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body class="cart-row">
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php $this->load->view('landing/msg_view'); ?>
                <header class="page-header">
                    <h1 style="color:#00000082;">Please confirm your payment below.</h1>
                </header>
                <div class="alert alert-warning">
                    <p class="lead">
                        <b>
                            <span>Bank Name: </span>GT Bank Plc<br />
                            <span>Account Name: </span>Internet Onitshamarketing Ltd<br />
                            <span>Account Number: </span>0449870887<br />
                            <span>Account Type: </span>Current Account<br />
                            <span>Sort Code: </span>058244135
                        </b>
                    </p>
                </div>
                <?= form_open_multipart('', 'id="bank-transfer-form"'); ?>
                    <div class="form-group">
                        <label for="bank">Please select the bank you paid from</label>
                        <select class="form-control" name="bank" required>
                            <?php $banks = explode(',', lang('banks')); ?>
                            <option value="">-- Select Bank --</option>
                            <?php foreach ( $banks as $bank ) : ?>
                                <option value="<?= trim( $bank ); ?>" <?= set_select('bank', $bank); ?> ><?= $bank; ?></option>
                            <?php endforeach;?>
                        </select>
                        <?= form_error('bank')?>
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" disabled name="amount" value="<?= $this->session->userdata('amount') / 100; ?>" class="form-control">
                        <?= form_error('amount')?>
                    </div>

                    <div class="form-group">
                        <label class="deposit_type">Deposit Type</label>
                        <select name="deposit_type" class="form-control" required>
                            <option value="Cash Deposit" <?= set_select('deposit_type', 'Cash Deposit'); ?> >Cash Deposit</option>
                            <option value="Mobile Banking" <?= set_select('deposit_type', 'Mobile Banking'); ?> >Mobile Banking</option>
                            <option value="Internet Banking Transfer" <?= set_select('deposit_type', 'Internet Banking Transfer'); ?> >Internet Banking Transfer</option>
                        </select>
                        <?= form_error('deposit_type'); ?>
                    </div>

                    <div class="form-group">
                        <label for="remark">Remark</label>
                        <textarea name="remark" class="form-control" rows="3"><?= set_value('remark', ''); ?></textarea>
                        <?= form_error('remark')?>
                    </div>

                    <div class="form-group">
                        <label class="pop">Proof of Payment</label>
                        <input type="file" name="pop" required >
                        <?= form_error('pop'); ?>
                    </div>
                    <input type="hidden" name="order" value="<?= $this->session->userdata('order_code'); ?>" />
                    <input type="hidden" name="amount" value="<?= $this->session->userdata('amount'); ?>" />

                    <div class="form-group">
                        <button class="btn btn-success btn-md">Submit</button>
                        <a href="<?= base_url('checkout/bank_transfer/?order=' . $this->session->userdata('order_code') .'&cancel=true')?>" class="btn btn-danger">Cancel My Order</a>
                    </div>
                <?= form_close(); ?>
                <div class="gap gap-small"></div>
            </div>
        </div>
	</div>

	<div class="gap"></div>
    <!--  Products recently viewed   -->
    <div class="gap"></div>
	<?php $this->load->view('landing/resources/footer'); ?>
</div>
<script>
	if (!base_url) {
		let base_url = "<?= base_url(); ?>";
	}
</script>
<?php $this->load->view('landing/resources/script'); ?>
<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
</body>
</html>
