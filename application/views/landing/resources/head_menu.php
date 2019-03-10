<style>
    .card-cat-text {
        position: absolute;
        top: 17px;
        left: 40px;
        font-family: 'Cabin', sans-serif;
        font-size: 16px;
    }

    .slick-dots {
        position: absolute;
        bottom: 10px;
    }

    .slick-dots li.slick-active button:before, .slick-dots li button:before {
        color: #FFF;
        opacity: 1;
        font-size: 12px;
    }

    .slick-dots li.slick-active button {
        /*border: 5px solid #49a251;*/
        border-radius: 100%;
        background: #333;
        width: 3px;
        height: 3px;
    }

    .slick-dots li.slick-active button:before {
        color: transparent;
    }

    .navbar-form {
        top: 10px;
    }

    .hot-row:hover > .card-max-text {
        display: block;
    }

    .cart-count {
        position: absolute;
        /*left: 30px;*/
        top: 10px;
        color: black;
        margin-left: 20px;
        background: #f9dc1b;
        height: 15px;
        width: 15px;
        text-align: center;
        border-radius: 50%;
        display: inline-block;
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .cart-text {
        position: absolute;
        margin-top: 32px;
        font-family: 'Cabin', sans-serif;
        color: #111;
        font-size: 14px;
        margin-left: 2px;
        font-weight: 500;
    }

    .navbar-main-search-submit {
        width: 50px;
    }

    .form-bar {
        width: 40vw;
    }

    @media (min-width: 1025px) and (max-width: 1280px) {
        .nav-form {
            margin-left: 30px !important
        }

        #navbar-img {
            margin-left: 40px;
        }

        .form-bar {
            width: 40vw;
            margin-left: -50px;
        }

    }

    @media (min-width: 1281px) {
        .nav-form {
            margin-left: 30px !important
        }
        #navbar-img {
            margin-left: 80px;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {

        .nav-form {
            margin-left: 0 !important
        }
        #navbar-img {
            margin-left: 80px;
        }

    }

    .sub-navigation {
        width: 100%;
        background: #49a251;
    }

    .sub-navigation-menu {
        display: flex;
        margin: 0 35px 0 0;
    }

    .sub-navigation-menu > li {
        display: inline-flex;
        flex: 1;
        font-family: 'Cabin', sans-serif;
        color: #fff;
        white-space: nowrap;
        font-size: 14px;
    }

    .sub-navigation-menu > li > a {
        width: 100%;
        color: #fff;
        text-decoration: none;
        padding: 10px 30px;
        text-align: center;
        transition: 0.7s background-color;
    }

    .sub-navigation-menu > li > a:hover {
        color: #000;
        background: #fff;

    }

    @media (min-width: 992px) {
        .submenu-dropdown:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-menu-category > li:hover .dropdown-menu-category-section {
            margin-left: 25px;
        }
    }

    .dropdown-menu {
        position: absolute;
        /*margin-top: 60px;*/
    }

    .dropdown-menu-category > li > a:hover {
        width: 256px !important;
    }

    .dropdown-menu-category > li > a {
        width: 256px;
    }

    .submenu-dropdown {
        position: relative;
    }

    .submenu-dropdown:hover a {
        background: #fff;
        color: #000 !important;
    }

    .dropdown-menu-category > li > a:hover {
        color: #fff !important;
    }

    .dropdown-menu {
        top: 100%;
    }

    .navbar-main-white .navbar-nav > li > a:hover span, .navbar-main-white .navbar-nav > li > a:hover strong {
        color: white !important;
    }

    .dropdown-menu-category-list > li > a:hover {
        color: #49a251 !important;
    }

    .custom-menu-category-drop > a {
        color: #49a251 !important;
    }

    .padding-0 {
        padding-right: 0;
    }

    .card-product {
        background: white;
        min-height: 320px;
        border: 1px solid #eeeeee;
        padding-top: 20px;
    }

    .card-product-title {
        font-family: 'Cabin', sans-serif;
        margin-top: 10px;
        font-size: 14px;
        text-align: center;
    }

    .card-product-price-discount {
        font-family: HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        text-decoration: line-through;
        font-size: 13px;
        color: #666;
    }

    .card-product-price {
        font-family: HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 20px;
        color: #4fa955;
    }

    .product-discount-overlay {
        position: absolute;
        background: #f9dc1b;
        color: #111;
        font-family: 'Cabin', sans-serif;
        height: 45px;
        width: 45px;
        text-align: center;
        border-radius: 50%;
        display: inline-block;
        right: 30px;
        padding: 3px;
        text-transform: uppercase;
        top: 10px;
    }

    .card-product-img {
        width: 170px !important;
    }

    .card-product > img {
        width: 100%;
        object-fit: cover;
        margin: auto;
    }

    .card-product:hover {
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .15);
        -webkit-transition: box-shadow .2s linear;
        transition: box-shadow .2s linear
    }

    .card-cat > img {
        max-height: 150px;
        width: 100%;
        object-fit: cover;
        margin-bottom: 10px;
        margin-left: 10px
    }

    .card-cat > img:hover {
        cursor: pointer;
        background-color: #f2f2f2;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .15);
        -webkit-transition: box-shadow .2s linear;
        transition: box-shadow .2s linear
    }

    .widget-light-skin > ul > li > a, .footer-newsletter, .office_address {
        font-family: 'Cabin', sans-serif;
        font-size: 13px;
    }

    .footer-link {
        font-family: 'Cabin', sans-serif;
        font-size: 16px;
    }

    .about-text {
        font-family: 'Cabin', sans-serif;
    }

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

        .navbar-main-search {
            /*margin-left: 40px;*/
            margin-top: 8px;
        }
    }

    @media (min-width: 481px) and (max-width: 767px) {

        .navbar-main-search {
            margin-left: 10px;
            margin-top: 8px;
        }

        .form-search {
            margin-left: 7px;
        }

        .form-bar {
            width: 30vw;
            /*margin-left: -50px;*/
        }

        .card-product-img {
            width: 100% !important;
        }
    }

</style>

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
<nav class="navbar navbar-default navbar-main-white navbar-pad-top navbar-first yamm" style="padding-bottom: 20px">
    <div class="container-fluid">
        <div class="row" style="display: flex;">
            <div style="flex: 1" class="col-md-2 col-lg-2 col-sm-3 col-xs-4">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <img src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>" style="width: 200px"
                             id="navbar-img"
                             alt="<?= lang('app_name'); ?>" title="<?= lang('app_name'); ?>"/>
                    </a>
                </div>
            </div>
            <div style="flex: 1" class="col-md-6 col-lg-6 col-sm-5 col-xs-4 nav-form">
                <form method="get" action="<?= base_url('search') ?>"
                      class="navbar-form navbar-main-search form-bar" role="search">
                    <div class="form-group">
                        <input class="form-control site-search form-search" style="padding-left: 0" required name="q"
                               autocomplete="off"
                               type="text"
                               placeholder="Search for products, brands and categories..."/>
                    </div>
                    <div class="src-cover">
                        <ul class="market-search">
                        </ul>
                    </div>
                    <button class="fas fa-search navbar-main-search-submit" type="submit"></button>
                </form>
            </div>
            <div style="flex: 1" class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                <ul class="nav navbar-nav navbar-mob-item-left" style="padding:-2px; margin-left: 10px">
                    <li class="dropdown hidden-xs hidden-sm" style="position:relative;top: 10px;">
                        <a href="<?= base_url('account/saved'); ?>"><span>View Your</span><span
                                    style="font-size: 13px; font-weight: bold; color: #333; margin-top: 6px">Saved Items</span></a>
                    </li>
                    <li class="dropdown" style="position:relative;top: 10px;">
                        <?php if ($profile): ?>
                            <a style="margin-right: 8px" href="<?= base_url('account'); ?>"><span>Welcome</span><strong
                                        style="font-size: 13px; font-weight: bold; color: #333;"><?= ucfirst($profile->first_name); ?>
                                    <i
                                            class="fas fa-caret-down"></i></strong></a>
                        <?php else : ?>
                            <a href="<?= base_url('login'); ?>"><span>Sign in | Join</span><span
                                        style="font-size: 13px; font-weight: bold; color: #333; margin-top: 6px">My Account <i
                                            class="fas fa-caret-down"></i></span></a>
                        <?php endif; ?>
                        <ul class="dropdown-menu mgt_drop_menu">
                            <?php if ($profile): ?>
                                <li>
                                    <a href="<?= base_url('account'); ?>"><span class="fa fa-user grey"></span>&nbsp;&nbsp;My
                                        Accounts</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('account/orders'); ?>"><span
                                                class="fa fa-truck grey"></span>&nbsp;&nbsp;My
                                        Orders</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('account/order_track'); ?>"><span
                                                class="fa fa-road grey"></span>&nbsp;&nbsp;Order
                                        Tracking</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('account/saved'); ?>"><span class="fa fa-save grey"></span>&nbsp;&nbsp;My
                                        Saved Items</a>
                                </li>

                                <li>
                                    <a href="<?= base_url('account/help'); ?>"><span
                                                class="fa fa-question-circle grey"></span>&nbsp;&nbsp;Help</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('logout'); ?>"><span
                                                class="fas fa-sign-out-alt grey"></span>&nbsp;&nbsp;Logout</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="<?= base_url('create/'); ?>">New Customer? Create an account</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <span class="cart-count cart-read"
                    <?= ($this->cart->total_items() == 0) ? 'style="display:none"' : '' ?>><?= $this->cart->total_items(); ?></span>
                    <a class="cart-cs" href="<?= base_url(lang('cart_link')); ?>"
                       data-count="<?= ($this->cart->total_items() == 0) ? '' : $this->cart->total_items(); ?>"><img
                                src="<?= base_url('assets/svg/shopping-cart-desktop.svg'); ?>"
                                alt="User"
                                style="height: 30px; width: 30px; margin-right: 4px; margin-top: 18px;left: 9px"><span
                                class="cart-text">Cart</span></a>
                </ul>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata('error_msg') && $page == 'homepage') : ?>
        <div class="container text-center">
            <?php $this->load->view('msg_view'); ?>
        </div>
    <?php endif; ?>
</nav>
<div class="sub-navigation yamm">
    <div class="container-fluid">
        <ul class="sub-navigation-menu">
            <li class="submenu-dropdown"><a href="javascript:void(0)" data-toggle="dropdown">All Categories &nbsp;<i
                            class="fas fa-bars"></i></a>
                <ul class="dropdown-menu dropdown-menu-category">
                    <?php
                    foreach ($categories as $category): ?>
                        <li><a href="<?= base_url('catalog/' . $category->slug . '/'); ?>"
                               title="<?= $category->name; ?>"><i
                                        class="<?= $category->icon; ?> dropdown-menu-category-icon"></i><?= $category->name; ?>
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
                                                        <div class="col-md-3">
                                                            <h5 class="custom-menu-category-drop"><a
                                                                        style="color: #49a251 !important;"
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
                                                <img class="nav-category-img"
                                                     src="<?= ($category) ? CATEGORY_IMAGE_PATH . $category->image : ''; ?>"
                                                     alt="<?= ($category) ? $category->name : ''; ?>"
                                                     title="<?= ($category) ? $category->name : ''; ?>"
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

            <li><a href="javascript:void(0)">Onitsha Market Deals</a></li>
            <li><a href="javascript:void(0)">New Arrivals</a></li>
            <li><a href="javascript:void(0)">Explore</a></li>
            <li><a href="javascript:void(0)">Top Sellers</a></li>
            <li><a href="https://www.seller.onitshamarket.com">Sell On Onitsha Market</a></li>
        </ul>
    </div>
</div>
<!-- Head category finish -->



