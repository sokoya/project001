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

			<h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">Account Settings</h3>
			<hr class="market-sidebar-line-r"/>
			<?php $this->load->view('landing/msg_view'); ?>
			<p id="market-newsletter-settings">Newsletter Preference</p>
			<hr id="market-newsletter-settings-line"/>
			<div class="market-newsletter-text">
				<p>We occasionally send exclusive offers by mail with even greater savings to select customers.
					Everyone does not receive the same offer. You would automatically be eligible to receive these great
					offers as a meeber of the market family</p>
				<div class="row">
					<?= form_open(); ?>
					<div class="col-md-6">
						<p><input type="radio" name="preference"
								  value="1" <?php if ($profile->newsletter == true) echo 'checked'; ?>
								  title="Subscribe"> Yes I want to receive daily
							<select style=" display : inline;" name="category" class="market-select">
								<?php foreach ($categories as $category) : ?>
									<option value="<?= $category->id; ?>"><?= ucwords($category->name); ?></option>
								<?php endforeach; ?>
							</select> offers
						</p>
					</div>
					<div class="col-md-6"><p><input name="preference"
													value="0" <?php if ($profile->newsletter == false) echo 'checked'; ?>
													type="radio" title="Subscribe"> I would like to
							unsubscribe from all the
							offers</div>
					<input type="hidden" name="user" value="<?= base64_encode($profile->id); ?>">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-md btn-block" style="margin: 10px;">Save
                            Preference
                        </button>
                    </div>
					<?= form_close(); ?>
				</div>
			</div>

		</div>
	</div>

</div>
<div class="gap gap-small"></div>
<?php if ($this->agent->is_mobile()) : ?>
	<?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
	<?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
<?php else: ?>
	<?php $this->load->view('landing/resources/footer'); ?>
	<?php $this->load->view('landing/resources/script'); ?>
<?php endif; ?>
</div>
<script>
	$('.dropdown').on('click', function () {
		setTimeout(function () {
			$('.dropdown-backdrop').remove();
		}, 1000);
	})
</script>
</body>
</html>
