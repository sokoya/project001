<nav class="navbar-default navbar-main-white yamm">
    <div class="container">
        <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="<?= base_url(); ?>"><span>Welcome!</span>All Categories<i
                                class="drop-caret" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu dropdown-menu-category">
                        <?php
                        $categories = $this->db->query("SELECT * FROM categories WHERE pid = 0")->result();
                        foreach ($categories as $category): ?>
                            <li><a href="<?= base_url('catalog/' . $category->slug . '/'); ?>"
                                   title="<?= $category->name; ?>"><i
                                            class="fa <?= $category->icon; ?> dropdown-menu-category-icon"></i><?= $category->name; ?>
                                </a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <?php
                                                $main_category = $this->db->query("SELECT * FROM categories WHERE pid = ?", $category->id)->result();
                                                if ($main_category):
                                                    foreach ($main_category as $cat) :
                                                        ?>
                                                        <div class="col-md-6">
                                                            <h5 class="custom-menu-category-drop"><a
                                                                        href="<?= base_url('catalog/' . $cat->slug . '/'); ?>"><?= $cat->name; ?></a>
                                                            </h5>
                                                            <ul class="dropdown-menu-category-list">
                                                                <?php
                                                                $sub_category = $this->db->query("SELECT * FROM categories WHERE pid = ? LIMIT 10 ", array($cat->id))->result();
                                                                if ($sub_category):
                                                                    foreach ($sub_category as $sub) : ?>
                                                                        <li>
                                                                            <a href="<?= base_url('catalog/' . $sub->slug . '/'); ?>"
                                                                               title="<?= $sub->name; ?>"><?= $sub->name; ?></a>
                                                                        </li>
                                                                    <?php endforeach; endif; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endforeach; endif; ?>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img"
                                             src="<?= base_url('assets/landing/img/test_cat/3.png'); ?>"
                                             alt="Image Alternative text" title="Image Title" style="right: -10px;"/>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="hide_tab"><a class="navbar-item-top"
                                        href="<?= base_url(lang('deal_link')); ?>"><?= lang('deal'); ?></a>
                </li>
                <li class="hide_tab"><a class="navbar-item-top"
                                        href="<?= base_url(lang('new_arrival_link')); ?>"><?= lang('new_arrival'); ?></a>
                </li>
                <li><a class="navbar-item-top"
                       href="<?= base_url(lang('top_seller_link')); ?>"><?= lang('top_seller'); ?></a>
                </li>
                <li><a class="navbar-item-top" href="<?= base_url(lang('sell_link')); ?>"><?= lang('sell'); ?></a>
                </li>
                <li><a class="navbar-item-top"
                       href="<?= base_url(lang('community_link')); ?>"><?= lang('community'); ?></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="hide_ipad">
                    <a href="#"><span>Learn more about</span> <strong>Market Shopper</strong></a>
                </li>

                <li class="dropdown">
                    <a class="navbar-item-top cart-cs"
                       data-count="<?= ($this->cart->total_items() == 0) ? '' : $this->cart->total_items(); ?>"
                       href="<?= base_url(lang('cart_link')); ?>">
                        <strong><i class="fa fa-shopping-cart"></i> Cart
                            <span class="cart-read"
                                  style="display: <?= ($this->cart->total_items() == 0) ? 'none' : '' ?>;">
                            <?= ($this->cart->total_items() == 0) ? '' : $this->cart->total_items(); ?>
                        </span>
                        </strong>
                    </a>
                </li>

                <?php
                $profile = $this->user->get_profile($this->session->userdata('logged_id'));
                ?>
                <li class="dropdown">
                    <?php if ($this->session->userdata('logged_in')): ?>
                        <a href="<?= base_url('account'); ?>"><span>Welcome</span><strong><?= ucfirst($profile->first_name); ?></strong></a>
                    <?php else : ?>
                        <a href="<?= base_url('login'); ?>"><span>Sign in | Join</span><strong>My Account</strong></a>
                    <?php endif; ?>
                    <ul class="dropdown-menu mgt_drop_menu">
                        <?php if ($this->session->userdata('logged_in')): ?>
                            <li>
                                <a href="<?= base_url('account'); ?>"><span class="fa fa-user grey"></span>&nbsp;My
                                    Accounts</a>
                            </li>
                            <li>
                                <a href="<?= base_url('account/orders'); ?>"><span class="fa fa-reorder grey"></span>&nbsp;My
                                    Orders</a>
                            </li>
                            <li>
                                <a href="<?= base_url('account/order_track'); ?>"><span class="fa fa-road grey"></span>&nbsp;Order
                                    Tracking</a>
                            </li>
                            <li>
                                <a href="<?= base_url('account/saved'); ?>"><span class="fa fa-save grey"></span>&nbsp;My
                                    Saved Items</a>
                            </li>
                            <?php if ($profile->is_seller !== 'false') : ?>
                                <li>
                                    <a href="<?= base_url('seller/overview'); ?>"><span
                                                class="fa fa-dashboard grey"></span>&nbsp;Seller Dashboard</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="<?= base_url('seller/'); ?>"><span class="fa fa-user-plus grey"></span>&nbsp;Become
                                        A Seller</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?= base_url('account/help'); ?>"><span
                                            class="fa fa-question-circle grey"></span>&nbsp;Help</a>
                            </li>
                            <li>
                                <a href="<?= base_url('logout'); ?>"><span class="fa fa-sign-out grey"></span>&nbsp;Logout</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= base_url('create/'); ?>">New Customer? Create an account</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
