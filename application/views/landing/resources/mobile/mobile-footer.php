<?php
$profile = $this->user->get_profile(base64_decode($this->session->userdata('logged_id')));
?>
<div class="copyright-area text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<p class="copyright-text">&copy; 2017 - <?= date('Y'); ?> <a
						href="<?= lang('domain'); ?>"><?= lang('app_name'); ?></a> All rights reserved</p>
				<p class="text-sm"><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | <a
						href="#">Contact </a> |
					<?php if ($this->session->userdata('logged_in')): ?>
						<?php if ($profile->is_seller !== 'false') : ?>
							<a href="<?= base_url('seller/overview'); ?>">Seller Dashboard</a>
						<?php else : ?>
							<a href="<?= base_url('seller/'); ?>">Become a Seller</a>
						<?php endif; ?>
					<?php else : ?>
						<a href="<?= base_url('create/'); ?>">Create an Account</a>
					<?php endif; ?>
				</p>
			</div>
		</div>
	</div>
</div>
