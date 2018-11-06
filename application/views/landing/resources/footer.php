<footer class="main-footer">
    <div class="container">
        <div class="row row-col-gap" data-gutter="60">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <section class="widget widget-links widget-light-skin">
                          <h3 class="widget-title-sm">About <?= lang('app_name'); ?></h3>
                          <ul style="margin-left: -40px;">
                            <li><a href="#">Our Company</a></li>
                            <li><a href="#">Investor Relation</a></li>
                            <li><a href="#">Social Responsibility</a></li>
                            <li><a href="#">Quality Complaince</a></li>
                            <li><a href="#">Jobs at <?= lang('app_name'); ?></a></li>
                          </ul>
                        </section>
                    </div>
                    <div class="col-md-3">
                        <section class="widget widget-links widget-light-skin">
                          <h3 class="widget-title-sm">Shop</h3>
                          <ul style="margin-left: -40px;">
                            <li><a href="#">Most Sort Products</a></li>
                            <li><a href="#">Top Brands</a></li>
                            <li><a href="#">Top Sellers</a></li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Outlets</a></li>
                          </ul>
                        </section>                                
                    </div>
                    <div class="col-md-3">
                        <section class="widget widget-links widget-light-skin">
                          <h3 class="widget-title-sm">Resources</h3>
                          <ul style="margin-left: -40px;">
                            <li><a href="#">Shopping Help</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Registrations</a></li>
                            <li><a href="#">Product Accessibility</a></li>
                            <li><a href="#">Seller's Guide</a></li>
                            <li><a href="#">Environmental Information</a></li>
                          </ul>
                        </section> 
                    </div>
                    <div class="col-md-3">
                        <section class="widget widget-links widget-light-skin">
                          <h3 class="widget-title-sm">Support</h3>
                          <ul style="margin-left: -40px;">
                            <li><a href="#">App Downloads</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Live Chat</a></li>
                            <li><a href="#">Waranty and Returns</a></li>
                            <li><a href="#">Waranty Lookup</a></li>
                          </ul>
                        </section> 
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="widget-title-sm">Newsletter</h4>
                <p><?= lang('app_name'); ?> respects your <a href="#">Privacy</a></p>
                 <form>
                  <div class="input-group">
                    <input type="text" class="newsletter-input form-control" placeholder="Enter your email for more discounts">
                    <div class="input-group-btn">
                      <button class="btn btn-warning" type="submit">
                        Subscribe
                      </button>
                    </div>
                  </div>
                </form>
                <div>
                    <p><h4 class="text text-sm">Follow us on Social Networks</h4></p>
                    <ul class="main-footer-social-list">
                        <li>
                            <a class="fa fa-facebook" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-pinterest" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-instagram" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-google-plus" href="#"></a>
                        </li>
                    </ul>
                    <ul class="payment-icons-list">
                        <li>
                            <img src="<?= base_url('assets/landing/img/payment/visa-straight-32px.png'); ?>" alt="Image Alternative text" title="Pay with Visa" />
                        </li>
                        <li>
                            <img src="<?= base_url('assets/landing/img/payment/mastercard-straight-32px.png'); ?>" alt="Image Alternative text" title="Pay with Mastercard" />
                        </li>
                        <li>
                            <img src="<?= base_url('assets/landing/img/payment/paypal-straight-32px.png'); ?>" alt="Image Alternative text" title="Pay with Paypal" />
                        </li>
                        <li>
                            <img src="<?= base_url('assets/landing/img/payment/visa-electron-straight-32px.png'); ?>" alt="Image Alternative text" title="Pay with Visa-electron" />
                        </li>
                        <li>
                            <img src="<?= base_url('assets/landing/img/payment/maestro-straight-32px.png'); ?>" alt="Image Alternative text" title="Pay with Maestro" />
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</footer>
<div class="copyright-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text">&copy;  2017 - <?= date('Y'); ?> <a href="<?= lang('domain'); ?>"><?= lang('app_name'); ?></a>  All rights reserved</p>
                <p class="text-sm"><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | <a href="#">Site Map </a> | <a href="#">Switch View</a> </p>
            </div>
        </div>
    </div>
</div>