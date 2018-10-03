<?php
$categories = $this->product->get_menu_categories();

?>
<nav class="navbar-default navbar-main-white yamm">
    <div class="container">
        <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#"><span >Welcome!</span>All Categories<i class="drop-caret" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu dropdown-menu-category">
                        <?php
                        $x = 1;
                            do {?>

                                <?php foreach($categories as $category ): ?>
                        <li><a href="<?=  base_url('catalog/' . urlify($category->root_name)) ; ?>" title="<?= $category->root_name;?>"><i class="fa fa-<?=$category->icon;?> dropdown-menu-category-icon"></i><?= $category->root_name; ?></a>
                            <div class="dropdown-menu-category-section">
                                <div class="dropdown-menu-category-section-inner">
                                    <div class="dropdown-menu-category-section-content">
                                        <div class="row">
                                            <?php 
                                                $main_category = explode(',', $category->category_name);
                                                foreach( $main_category as $cat => $cat_value) :
                                            ?>
                                            <div class="col-md-6">
                                                <h5 class="dropdown-menu-category-title"><a href="<?= base_url('catalog/' . urlify($cat_value)); ?>"><?= $cat_value; ?></a></h5>
                                                <ul class="dropdown-menu-category-list">
                                                    <?php 
                                                        $sub_category = explode(',', $category->sub_name );
                                                        foreach($sub_category as $sub => $sub_value ) : ?>
                                                        <li><a href="<?= base_url('catalog/' . urlify($sub_value)); ?>" title="<?= $sub_value; ?>"><?= $sub_value; ?></a></li>
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
                        <?php
                            $x++;} while ( $x <= 10);
                        ?>
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
                <li><a href="<?= base_url(lang('cart_link')); ?>" class="navbar-item-top"><strong><?= lang('cart'); ?></strong></a>
                </li>
                <li class="dropdown">
                    <?php if( $this->session->userdata('logged_in') ): ?>
                        <a href="<?= base_url('login'); ?>"><span>Welcome</span><strong><?= ucwords(explode('@',$this->session->userdata('email'))[0]); ?></strong></a>
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