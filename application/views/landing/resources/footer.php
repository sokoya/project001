<footer class="main-footer" style="margin-top:100px;font-size:12px;">
    <div class="container">
        <div class="row row-col-gap" data-gutter="60">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title-sm foot-link footer-link"><?= lang('app_name'); ?></h3>
                            <ul style="margin-left: -40px;">
                                <li><a href="<?= lang('our_company_url'); ?>">Our Company</a></li>
                                <li><a href="#">Investor Relation</a></li>
                                <li><a href="<?= lang('social_responsibility_url'); ?>">Social Responsibility</a></li>
                                <li><a href="#">Quality Complaince</a></li>
                                <li><a href="<?= base_url('jobs-at-onitshamarket/')?>">Jobs at <?= lang('app_name'); ?></a></li>
                            </ul>
                        </section>
                        <div style="font-size: 12px;">
                            <h3 class="widget-title-sm foot-link footer-link">Office Address: </h3>
                            <span class="office_address">
                                <?= lang('office_address'); ?>
                                <br />
                                <b>Helpline:</b> 0813 680 3006‬
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title-sm foot-link footer-link">Top 10 markets</h3>
                            <ul style="margin-left: -40px;">
                                <li><a href="#">Onitsha Market, Anambra</a></li>
                                <li><a href="#">Balogun Market, Lagos</a></li>
                                <li><a href="#">Ariaria Int'l Market, Abia</a></li>
                                <li><a href="#">Alaba Int'l Market, Lagos</a></li>
                                <li><a href="#">Idumota Market, Lagos</a></li>
                                <li><a href="#">Kurmi Market, Kano</a></li>
                                <li><a href="#">Ogbete Market, Enugu</a></li>
                                <li><a href="#">Oil Mill Market, Port-Harcourt</a></li>
                                <li><a href="#">Bodija Market, Ibadan, Oyo</a></li>
                                <li><a href="#">Computer Village, Lagos</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title-sm foot-link footer-link">Resources</h3>
                            <ul style="margin-left: -40px;">
                                <li><a title="Get online shopping help fro Onitshamarket" href="<?= lang('shopping_help_url'); ?>">Shopping Help</a></li>
                                <li><a title="Check your order status" href="<?= base_url('account/orders/'); ?>">Order Status</a></li>
                                <li><a title="Official Onitshamarket Blog" href="#">Blogs</a></li>
                                <li><a href="#">Registrations</a></li>
                                <li><a href="#">Product Accessibility</a></li>
                                <li><a href="#">Seller's Guide</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Top Sellers</a></li>
                                <li><a href="#">Environmental Information</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title-sm foot-link footer-link">Support</h3>
                            <ul style="margin-left: -40px;">
                                <li><a href="#">App Downloads</a></li>
                                <li><a href="<?= base_url('page/contact'); ?>">Contact Us</a></li>
                                <li><a href="<?= lang('shopping_help_url'); ?>">FAQ</a></li>
                                <li><a href="#">Warranty and Returns</a></li>
                                <li><a href="#">Warranty Lookup</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="widget-title-sm foot-link footer-link">Newsletter</h4>
                <p class="foot-link footer-newsletter"><?= lang('app_name'); ?> respects your <a
                            href="<?= lang('privacy_url') ?>"
                            style="color:#69bf83;">Privacy</a></p>
                <form>
                    <div class="input-group">
                        <input type="text" class="newsletter-input form-control"
                               placeholder="Enter your email for more discounts">
                        <div class="input-group-btn">
                            <button class="btn btn-custom" type="submit">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
                <div>
                    <p><h4 class="text text-sm foot-link">Follow us on Social Networks</h4></p>
                    <ul class="main-footer-social-list" >
                        <li>
                            <a style="font-size: 24px;color:#4267b2;" class="fab fa-facebook-square" target="_blank" href="<?= lang('facebook_link') ?>"></a>
                        </li>
                        <li>
                            <a style="font-size: 24px;color:#38A1F3;" class="fab fa-twitter" target="_blank" href="<?= lang('twitter_link'); ?>"></a>
                        </li>
                        <li>
                            <a style="font-size: 24px;color:#D4C95B;" class="fab fa-instagram" target="_blank" href="<?= lang('instagram_link'); ?>"></a>
                        </li>
                        <li>
                            <a style="font-size: 24px;color:#ED3833;" class="fab fa-youtube" target="_blank" href="<?= lang('youtube_link'); ?>"></a>
                        </li>
                    </ul>
                    <ul class="payment-icons-list">
                        <li>
                            <img style="width: 100px;height: 41px;" src="<?= base_url('assets/img/payment/interswitch_logo.png') ?>"
                                 alt="Interswitch Payment" title="Pay with Interswitch"/>
                        </li>
                        <li>
                            <img src="<?= base_url('assets/img/payment/mastercard-straight-32px.png'); ?>"
                                 alt="Pay with Mastercard" title="Pay with Mastercard"/>
                        </li>
                        <li>
                            <br />
                            <img style="width: 42%;" src="<?= base_url('assets/img/home/dhl2.png'); ?>"
                                 alt="Pay with Mastercard" title="Pay with Mastercard"/>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<div style="
  right: 0;
  bottom: 0;
  left: 0;
  z-index:23;
    width: 100%;">
    <div class="copyright-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright-text foot-link">&copy; 2015 - <?= date('Y'); ?> <a title="Onitshamarket"
                                                                                           href="<?= lang('domain'); ?>"><?= lang('company_name'); ?>
                            .</a> All rights reserved</p>
                    <p class="text-sm foot-link"><a href="<?= lang('terms_url'); ?>">Terms of Use</a> | <a
                                title="Onitshamarket agreement"
                                href="<?= lang('agreement_url'); ?>">Agreement</a> | <a
                                title="Terms and condition"
                                href="<?= lang('privacy_url'); ?>">Privacy Policy</a> |
                        <a title="Become a seller" target="_blank"
                           href="https://seller.onitshamarket.com">Become a Seller</a></p>
                </div>
            </div>
        </div>
    </div>
</div>