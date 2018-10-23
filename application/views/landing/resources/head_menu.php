
<nav class="navbar-default navbar-main-white yamm">
    <div class="container">
        <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#"><span >Welcome!</span>All Categories<i class="drop-caret" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu dropdown-menu-category">
                        <?php
                            $categories = $this->db->query("SELECT * FROM root_category")->result();
                            foreach($categories as $category ): ?>
                        <li><a href="<?=  base_url('catalog/' . urlify($category->name)) ; ?>" title="<?= $category->name;?>"><i class="fa fa-<?=$category->icon;?> dropdown-menu-category-icon"></i><?= $category->name; ?></a>
                            <div class="dropdown-menu-category-section">
                                <div class="dropdown-menu-category-section-inner">
                                    <div class="dropdown-menu-category-section-content">
                                        <div class="row">
                                            <?php 
                                                $main_category = $this->db->query("SELECT * FROM category WHERE root_category_id = ? ", $category->root_category_id)->result();
                                                foreach( $main_category as $cat ) :
                                            ?>
                                            <div class="col-md-6">
                                                <h5 class="dropdown-menu-category-title"><a href="<?= base_url('catalog/' . urlify($cat->name)); ?>"><?= $cat->name; ?></a></h5>
                                                <ul class="dropdown-menu-category-list">
                                                    <?php 
                                                        $sub_category = $this->db->query("SELECT name FROM sub_category WHERE root_category_id = ?  AND category_id = ? ", array($category->root_category_id, $cat->category_id))->result();
                                                        foreach($sub_category as $sub ) : ?>
                                                        <li><a href="<?= base_url('catalog/' . urlify($sub->name)); ?>" title="<?= $sub->name; ?>"><?= $sub->name; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-category-section-theme-img" src="<?= base_url('assets/landing/img/test_cat/2.png'); ?>" alt="Image Alternative text" title="Image Title" style="right: -10px;" />
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a class="navbar-item-top" href="<?= base_url(lang('carrito_deal_link')); ?>"><?= lang('carrito_deal'); ?></a>
                </li>
                <li><a class="navbar-item-top" href="<?= base_url(lang('new_arrival_link')); ?>"><?= lang('new_arrival'); ?></a>
                </li>
                <li><a class="navbar-item-top" href="<?= base_url(lang('top_seller_link')); ?>"><?= lang('top_seller'); ?></a>
                </li>
                <li><a class="navbar-item-top" href="<?= base_url(lang('sell_on_carrito_link')); ?>"><?= lang('sell_on_carrito'); ?></a>
                </li>
                <li><a class="navbar-item-top" href="<?= base_url(lang('community_link')); ?>"><?= lang('community'); ?></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"><span>Learn more about</span> <strong>Carrito Shopper</strong></a>
                </li>
                <li>
                    <a href="<?= base_url(lang('cart_link')); ?>" class="navbar-item-top">
                        <strong><i class="fa fa-shopping-cart"></i> Cart <span class="cart-read">
                            <?= ($this->cart->total_items() == 0) ? '' : $this->cart->total_items(); ?>
                        </span></strong>
                    </a>
                </li>

                <?php
                    $profile = $this->user->get_profile(base64_decode($this->session->userdata('logged_id')));
                ?>
                <li class="dropdown">
                    <?php if( $this->session->userdata('logged_in') ): ?>

                        <a href="<?= base_url('login'); ?>"><span>Welcome</span><strong><?= ucfirst($profile->first_name); ?></strong></a>
                    <?php else : ?>
                        <a href="<?= base_url('login'); ?>"><span>Sign in | Join</span><strong>My Carrito</strong></a>
                    <?php endif; ?>
                    <ul class="dropdown-menu">
                        <?php if($this->session->userdata('logged_in') ): ?>
                            <li>
                                <a href="<?= base_url('account'); ?>">My Accounts</a>
                            </li>
                            <li>
                                <a href="<?= base_url('account/orders'); ?>">My Orders</a>
                            </li>
                            <li>
                                <a href="<?= base_url('account/saved'); ?>">My Saved Items</a>
                            </li>
                            <li>
                                <a href="<?= base_url('account/help'); ?>">Help</a>
                            </li>
                            <?php if( $profile->is_seller !== 'false' ) : ?>
                            <li>
                                <a href="<?= base_url('seller/overview'); ?>">Seller Dashboard</a>
                            </li>   
                            <?php else : ?>
                             <li>
                                <a href="<?= base_url('seller/'); ?>">Become A Seller</a>
                            </li>
                            <?php endif; ?>                         
                            <li>
                                <a href="<?= base_url('logout'); ?>">Logout</a>
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