<!-- Head Category Starts -->
<?php

$category_cache = "SELECT id,name,slug,icon,image FROM categories WHERE pid = 0 LIMIT 10";
//if(!$this->memcached_library->get($category_cache) && $this->memcached_library->get($category_cache) == '') {

$categories = $this->db->query($category_cache)->result();
//    $this->memcached_library->add($category_cache, $categories);
//} else {
//    $categories = $this->memcached_library->get($category_cache);
//}

?>
<nav class="navbar navbar-default navbar-main-white navbar-pad-top navbar-first yamm">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>" style="width: 150px" id="navbar-img"
                     alt="<?= lang('app_name'); ?>" title="<?= lang('app_name'); ?>"/>
            </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown"><a href="<?= base_url(); ?>"><span>Welcome!</span><span
                            style="font-size: 13px; font-weight: bold; color: #333; margin-top: 6px">Categories</span><i
                            class="drop-caret" data-toggle="dropdown"></i></a>
                <ul class="dropdown-menu dropdown-menu-category">
                    <?php
                    foreach ($categories as $category): ?>
                        <li><a href="<?= base_url('catalog/' . $category->slug . '/'); ?>"
                               title="<?= $category->name; ?>"><i
                                        class="fa <?= $category->icon; ?> dropdown-menu-category-icon"></i><?= $category->name; ?>
                            </a>
                            <div class="dropdown-menu-category-section">
                                <div class="dropdown-menu-category-section-inner">
                                    <div class="dropdown-menu-category-section-content">
                                        <div class="nav-category-container">
                                            <div class="nav-category-one row">
                                                <?php
                                                $main_category = $this->db->query("SELECT id,name,slug FROM categories WHERE pid = ? ", $category->id)->result();
                                                if ($main_category):
                                                    foreach ($main_category as $cat) :
                                                        ?>
                                                        <div class="col-md-4">
                                                            <h5 class="custom-menu-category-drop"><a
                                                                        href="<?= base_url('catalog/' . $cat->slug . '/'); ?>"><?= $cat->name; ?></a>
                                                            </h5>
                                                            <ul class="dropdown-menu-category-list">
                                                                <?php
                                                                $sub_category = $this->db->query("SELECT id,name,slug FROM categories WHERE pid = ? LIMIT 10 ", array($cat->id))->result();
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
                                            <div class="">
                                                <!-- Konga image is used here for development-->
                                                <img class="nav-category-img"
                                                     src="https://backend.konga.com/media/customcmsmenu/item/Computers_Accessories_1.png"
                                                     alt="<?= $category->name; ?>" title="<?= $category->name; ?>"
                                                     style="right: -5px;"/>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
        <form method="get" action="<?= base_url('search') ?>"
              class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
            <div class="form-group ">
                <input class="form-control site-search form-search" required name="q" autocomplete="off" type="text"
                       placeholder="Search the Entire Store..."/>
            </div>
            <div class="src-cover">
                <ul class="market-search">
                </ul>
            </div>
            <button class="fa fa-search navbar-main-search-submit" type="submit" ></button>
        </form>
        <ul class="nav navbar-nav navbar-mob-item-left" style="padding:-2px; margin-left: 10px">
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
            <li class="dropdown">
                <?php if ($profile): ?>
                    <a href="<?= base_url('account'); ?>"><span>Welcome</span><strong><?= ucfirst($profile->first_name); ?></strong></a>
                <?php else : ?>
                    <a href="<?= base_url('login'); ?>"><span>Sign in | Join</span><span
                                style="font-size: 13px; font-weight: bold; color: #333; margin-top: 6px">My Account</span></a>
                <?php endif; ?>
                <ul class="dropdown-menu mgt_drop_menu">
                    <?php if ($profile): ?>
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
                        <!--                            --><?php //if ($profile->is_seller !== 'false') : ?>
                        <!--                                <li>-->
                        <!--                                    <a href="--><? //= base_url('seller/overview'); ?><!--"><span-->
                        <!--                                                class="fa fa-dashboard grey"></span>&nbsp;Seller Dashboard</a>-->
                        <!--                                </li>-->
                        <!--                            --><?php //else : ?>
                        <!--                                <li>-->
                        <!--                                    <a href="--><? //= base_url('seller/'); ?><!--"><span class="fa fa-user-plus grey"></span>&nbsp;Become-->
                        <!--                                        A Seller</a>-->
                        <!--                                </li>-->
                        <!--                            --><?php //endif; ?>
                        <li>
                            <a href="<?= base_url('account/help'); ?>"><span
                                        class="fa fa-question-circle grey"></span>&nbsp;Help</a>
                        </li>
                        <li>
                            <a href="<?= base_url('logout'); ?>"><span
                                        class="fa fa-sign-out grey"></span>&nbsp;Logout</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= base_url('create/'); ?>">New Customer? Create an account</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#main-nav-collapse" area_expanded="false"><span
                            class="sr-only">Main Menu</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
        </ul>
    </div>
    <?php if ($this->session->flashdata('error_msg') && $page == 'homepage') : ?>
        <div class="container text-center">
            <?php $this->load->view('msg_view'); ?>
        </div>
    <?php endif; ?>
</nav>
<!-- Head category finish -->


