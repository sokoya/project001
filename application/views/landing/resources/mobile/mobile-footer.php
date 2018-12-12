<?php
$profile = $this->user->get_profile($this->session->userdata('logged_id'));
?>
<div style="bottom:0;left:0;right:0;">
    <div class="copyright-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p class="copyright-text">&copy; 2015 - <?= date('Y'); ?> <a
                                href="<?= lang('domain'); ?>"><?= lang('company_name'); ?>.</a> All rights reserved</p>
                    <p class="text-sm"><a href="<?= base_url('pages'); ?>">Terms of Use</a> | <a
                                href="<?= base_url('pages/agreement'); ?>">Agreement</a> | <a
                                href="<?= base_url('pages/privacy'); ?>">Privacy Policy</a> |
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
</div>
