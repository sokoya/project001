<style>
    .slick-dots {
        position: absolute;
        bottom: 10px
    }

    .slick-dots li button:before, .slick-dots li.slick-active button:before {
        color: #FFF;
        opacity: 1;
        font-size: 12px
    }

    .slick-dots li.slick-active button {
        border-radius: 100%;
        background: #333;
        width: 3px;
        height: 3px
    }

    .slick-dots li.slick-active button:before {
        color: transparent
    }

    .card-product-alt {
        display: flex;
        flex-direction: column;
    }

    .card-product-alt > .card-product-title {
        max-width: 140px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        margin-top: -10px;
        /*flex: 1;*/
        /*width: auto;*/
        /*object-fit: contain;*/
    }

    .card-product-alt > img {
        max-width: 100%;
    }
</style>
<!-- Head Category Starts -->
<?php
//$this->db->cache_on();
$category_cache = "SELECT id, name, slug, icon, image FROM categories WHERE pid = 0 LIMIT 11";

//if(!$this->memcached_library->get($category_cache) && $this->memcached_library->get($category_cache) == '') {
$categories = $this->db->query($category_cache)->result();
//$this->db->cache_off();
//    $this->memcached_library->add($category_cache, $categories);
//} else {
//    $categories = $this->memcached_library->get($category_cache);
//}
?>
<nav class="navbar navbar-default navbar-main-white navbar-pad-top navbar-first yamm" id="header-f" style="padding-bottom: 20px">
<!--<nav class="navbar navbar-default navbar-main-white navbar-fixed-bottom navbar-pad-top navbar-first yamm" style="padding-bottom: 20px">-->
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
                    <?php
                        $q = $this->input->get('q', true);
                    ?>
                    <div class="form-group">
                        <input class="form-control site-search form-search" style="padding-left: 0" required name="q"
                               type="text"
                               autocomplete="off"
                               value="<?= isset($q) ? cleanit($q) : ''; ?>"
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
//                                                $this->db->cache_on();
                                                $main_category = $this->db->query("SELECT id,name,slug FROM categories WHERE pid = ? ", $category->id)->result();
//                                                $this->db->cache_off();
                                                if ($main_category):
                                                    foreach ($main_category as $cat) :
                                                        ?>
                                                        <div class="col-md-3">
                                                            <h6 class="custom-menu-category-drop"><a
                                                                        style="color: #49a251 !important;"
                                                                        href="<?= base_url('catalog/' . $cat->slug . '/'); ?>"><?= $cat->name; ?></a>
                                                            </h6>
                                                            <ul class="dropdown-menu-category-list">
                                                                <?php
//                                                                $this->db->cache_on();
                                                                $sub_category = $this->db->query("SELECT id,name,slug FROM categories WHERE pid = ? LIMIT 10 ", array($cat->id))->result();
//                                                                $this->db->cache_off();
                                                                if ($sub_category):
                                                                    foreach ($sub_category as $sub) : ?>
                                                                        <li style="font-size: 11px;
    max-width: 170px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;">
                                                                            <a href="<?= base_url('catalog/' . $sub->slug . '/'); ?>"
                                                                               title="<?= $sub->name; ?>"><?= $sub->name; ?></a>
                                                                        </li>
                                                                    <?php endforeach; endif; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endforeach; endif;
                                                    ?>

                                            </div>
                                            <div class="">
                                                <img class="nav-category-img"
                                                     src="<?= CATEGORY_IMAGE_PATH . $category->image; ?>"
                                                     alt="<?= ($category) ? $category->name : ''; ?>"
                                                     title="<?= ($category) ? $category->name : ''; ?>"
                                                     style="right: -5px; max-width: 260px;  max-height: 470px"/>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <li><a href="<?= base_url('made-in-nigeria/')?>">Made In Nigeria</a></li>
            <li><a href="<?= base_url("new-arrivals/");?>">New Arrivals</a></li>
            <li><a href="<?= base_url("explore/");?>">Explore</a></li>
            <li><a href="javascript:void(0)">Top Sellers</a></li>
            <li><a href="https://www.seller.onitshamarket.com">Sell On Onitsha Market</a></li>
        </ul>
    </div>
</div>
<!-- Head category finish -->



