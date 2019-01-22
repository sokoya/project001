<div style="bottom:0;left:0;right:0;">
    <div class="copyright-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size: 9px;" class="copyright-text"><?= lang('copyright');?></p>
                    <p class="text-sm"><a href="<?= base_url('pages'); ?>" style="font-size: 9px;">Terms of Use</a> | <a
                                href="<?= base_url('pages/agreement'); ?>" style="font-size: 9px;">Agreement</a> | <a
                                href="<?= base_url('pages/privacy'); ?>" style="font-size: 9px;">Privacy Policy</a> |
                        <?php if ($this->session->userdata('logged_in')): ?>
                            <?php if ($profile->is_seller !== 'false') : ?>
                                <a href="<?= lang('seller_url'); ?>" style="font-size: 9px;">Seller Dashboard</a>
                            <?php else : ?>
                                <a href="<?= lang('seller_url'); ?>" style="font-size: 9px;">Become a Seller</a>
                            <?php endif; ?>
                        <?php else : ?>
                            <a href="<?= base_url('create/'); ?>" style="font-size: 9px;">Create an Account</a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
