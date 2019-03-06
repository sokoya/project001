<div style="bottom:0;left:0;right:0;">
    <div class="copyright-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size: 9px;" class="copyright-text foot-link">&copy; 2015 - <?= date('Y'); ?> <a
                                title="Onitshamarket"
                                href="<?= lang('domain'); ?>"><?= lang('company_name'); ?>.</a> All rights reserved</p><p class="text-sm foot-link"><a href="<?= base_url('pages'); ?>" style="font-size: 9px;">Terms of
                            Use</a> | <a title="Terms and Agreement"
                                         href="<?= base_url('pages/agreement'); ?>"
                                         style="font-size: 9px;">Agreement</a> | <a title="Privacy Policy"
                                                                                    href="<?= base_url('pages/privacy'); ?>"
                                                                                    style="font-size: 9px;">Privacy
                            Policy</a> |
                        <?php if (!$this->session->userdata('logged_in')): ?>
                            <a href="<?= base_url('create/'); ?>" style="font-size: 9px;">Create an Account</a>
                        <?php endif; ?>
                        <a title="Become a seller" href="https://seller.onitshamarket.com" target="_blank" style="font-size: 9px;">Become a Seller</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
