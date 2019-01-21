<style>
    .custom-card-child {
        background: #fff;
        padding-top: 8px;
        padding-bottom: 1px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .custom-card-child-next {
        position: relative;
        top: -3px;
        padding-right: 20px;
        background: #fff;
        padding-top: 8px;
        padding-bottom: 1px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .mobile-nav {
        background: #fff;
        padding-bottom: 20px;
        margin-bottom: 2px;
        border: none !important;
    }

    .mobile-brand {
        margin-top: -10px !important;
    }

    .mobile-nav-logo {
        width: 150px !important;
        height: 38px !important;
        position: relative;
        left: -20px;
        top: 5px;
        bottom: 2px;
    }

    .navbar-toggle {
        float: left !important;
        left: -8px;
        border: none;
        background: transparent !important;
    }

    .navbar-toggle:hover {
        background: transparent !important;
    }

    .navbar-toggle .icon-bar {
        width: 22px;
        transition: all 0.2s;
    }

    .navbar-brand {
        position: absolute;
        width: 100%;
        left: 0;
        text-align: center;
        margin: 0 auto;
    }

    .navbar-toggle, .mobile-nav-logo {
        z-index: 3;
    }

    .navbar-util {
        position: relative;
        float: right;
        padding-top: 7px;
        margin-top: 10px;
        margin-right: 5px;
        z-index: 3;
    }

    .mobile-search-input {
        position: relative;
        top: 12px;
        left: 8px;
        width: 97%;
    }

    .stylish-input-group .form-control {
        background: #f2f2f2;
        box-shadow: 0 0 0;
        border: none;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .stylish-input-group button {
        border: 0;
        background: transparent;
    }

    .inner-addon {
        position: relative;
    }

    .inner-addon .fa {
        position: absolute;
        padding: 10px;
        top: 43px;
        pointer-events: none;
        color: #787878;
    }

    .left-addon .fa {
        left: 0px;
    }

    .right-addon .fa {
        right: 0px;
    }

    .left-addon input {
        padding-left: 30px;
    }

    .right-addon input {
        padding-right: 30px;
    }

    .nav-container {
        margin-left: 6px;
        margin-right: 6px;
    }

    input::placeholder {
        color: #484848 !important;
    }

    .cart-count {
        position: relative;
        left: 30px;
        bottom: 8px;
        color: black;
        background: #f9dc1b;
        height: 15px;
        width: 15px;
        text-align: center;
        border-radius: 50%;
        display: inline-block;
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .mobile-navbar {
        height: 100%;
        width: 100%;
        display: none;
        position: fixed;
        z-index: 99999;
        top: 100px;
        left: 0;
        background-color: #f4f4f4;
        overflow-x: hidden;
        transition: 0.5s;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 13px;
        color: #000 !important;
    }

    .text-break > i {
        float: right;
        position: relative;
        top: 4px;
    }

    .category-child > a > p > i {
        float: right;
        position: relative;
        top: 6px;
        color: #000 !important;
    }

    .category-child > a, .category-child > p {
        position: relative;
        top: 1px;
        color: #000 !important;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 15px;
    }

    .child-hr {
        border-top: 1px solid #e1e1e1 !important;
        margin: 0 -16px 0;
    }

    .login-cta {
        text-align: center;
    }

    .login-cta > span {
        margin-left: 20px;
        margin-right: 20px;
    }

    .login-cta > a {
        border: 1px solid #468c46;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 14px;
        text-decoration: none;
        padding: 4px 30px;
        border-radius: 4px;
    }

    .login-cta > a:hover, .login-cta > a:focus {
        color: #000;
    }

    .options {
        display: none;
        position: absolute;
        background: #fff;
        z-index: 999;
        color: #222;
        width: 135px;
        left: -70px;
        padding: 10px 10px;
        top: 45px;
        -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
        box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
        list-style-type: none;
    }

    .options > a {
        color: #000;
    }

    .options > a:hover, .options > a:focus {
        color: #468c46;
        text-decoration: none;
    }

    .line-separator {
        height: 1px;
        background: #d6d6d6;
        border-bottom: 1px solid #fffafa;
        margin-bottom: 10px;
    }

    .mobile-search-dropdown {
        position: absolute;
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        height: fit-content;
        background: #fff;
        list-style-type: none;
        display: none;
        -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
        box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
        z-index: 99999;
    }

    .search-title {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #000;
        font-size: 14px;
    }

    .mobile-search-image {
        height: 45px;
        width: 45px;
    }

    .search-titles {
        color: #444 !important;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 13px;
    }

    .arrow-up {
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        position: relative;
        left: 68px;
        bottom: 15px;
        border-bottom: 5px solid #ffffff;
    }

</style>

<nav class="navbar navbar-default mobile-nav">
    <div class="nav-container">
        <div class="navbar-header">
            <div class="navbar-brand mobile-brand">
                <button type="button" class="navbar-toggle collapsed mobile-toggle" data-toggle="collapse"
                        style="display: block!important"
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?= base_url() ?>" style="float: left"> <img class="mobile-nav-logo"
                                                                      src="<?= base_url('assets/img/newlogo.png'); ?>"/></a>
            </div>
        </div>
        <div class="navbar-util">
				<span class="account-dropdown" style="margin-right: 5px; cursor: pointer"><img
                        <?php if ($this->session->userdata('logged_in')): ?>
                            src="<?= base_url('assets/svg/user.svg'); ?>"
                        <?php else : ?>
                            src="<?= base_url('assets/svg/logged-out-user.svg'); ?>"
                        <?php endif; ?>
                            alt="User"
                            style="height: 24px; width: 24px;">

				</span>
            <div class="options">
                <div class="arrow-up"></div>
                <?php
                $profile = $this->user->get_profile($this->session->userdata('logged_id'));
                ?>
                <?php if ($this->session->userdata('logged_in')): ?>
                    <a href="<?= base_url('account'); ?>"><p>My Account</p></a>
                    <div class="line-separator"></div>
                    <a href="<?= base_url('account/orders'); ?>"><p>My Orders</p></a>
                    <div class="line-separator"></div>
                    <?php if ($profile->is_seller !== 'false') : ?>
                        <a href="<?= base_url('seller/overview'); ?>"><p>Seller Dashboard</p></a>
                        <div class="line-separator"></div>
                    <?php else : ?>
                        <a href="<?= base_url('seller/'); ?>"><p>Become a Seller</p></a>
                        <div class="line-separator"></div>
                    <?php endif; ?>
                    <a href="<?= base_url('logout'); ?>"><p>Logout</p></a>
                <?php else : ?>
                    <a href="<?= base_url('login') ?>"><p>Login</p></a>
                    <div class="line-separator"></div>
                    <a href="<?= base_url('create/'); ?>"><p>Register</p></a>
                <?php endif; ?>
            </div>

                <span class="cart-count"
                    <?= ($this->cart->total_items() == 0) ? 'style="display:none"' : '' ?>><?= $this->cart->total_items(); ?></span>
            <a href="<?= base_url(lang('cart_link')); ?>"><img
                            src="<?= base_url('assets/svg/shopping-cart.svg'); ?>"
                            alt="User"
                            style="height: 24px; width: 24px; margin-right: 4px;"></a>
        </div>
        <form method="get" action="<?= base_url('search'); ?>" class="mobile-search-input" role="search">
            <div class="inner-addon right-addon stylish-input-group">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input class="form-control search-input" required name="q" autocomplete="off" type="text"
                       placeholder="Search for products, brands and categories..."/>
            </div>
        </form>
    </div>
</nav>
<div class="mobile-search-dropdown">
    <div class="container mobile-search-append">

    </div>
</div>
<div id="menu_filter" class="mobile-navbar">
    <?php if (!$this->session->userdata('logged_in')): ?>
        <div class="custom-card-child" style="margin-top: 5px; padding-top: 15px; padding-bottom: 10px;">
            <div class="container">
                <p class="login-cta"><a href="<?= base_url('login'); ?>">Login</a> <span>|</span><a
                            href="<?= base_url('create/'); ?>"> Register</a></p>
            </div>
        </div>
    <?php endif; ?>
    <?php
    $categories = $this->db->query("SELECT * FROM categories WHERE pid = 0")->result();
    foreach ($categories as $category): ?>
        <div class="container">
            <a href="<?= base_url('catalog/' . $category->slug); ?>" style="text-decoration: none">
                <p class="text-break" style="padding-top: 10px; padding-bottom: 15px;"><?= $category->name; ?>
                    <i class="fa fa-minus close-panel" aria-hidden="true" data-target="cat_<?= $category->id ?>"></i>
                </p></a>
        </div>
        <div id="cat_<?= $category->id ?>">
            <?php
            $main_category = $this->db->query("SELECT * FROM categories WHERE pid = ? LIMIT 6", $category->id)->result();
            if ($main_category):
                foreach ($main_category as $cat) :
                    ?>
                    <div class="custom-card-child">
                        <div class="container">
                            <div class="category-child">
                                <a href="<?= base_url('catalog/' . $cat->slug); ?>" style="text-decoration: none;">
                                    <p>
                                        <img
                                                src="<?= base_url('assets/svg/delivery-truck.svg'); ?>"
                                                alt="Delivery Truck"
                                                style="height: 30px; width: 35px;"> <?= $cat->name; ?> <i
                                                class="fa fa-plus close-panel"
                                                aria-hidden="true"
                                                data-target="cat_<?= $cat->id ?>"></i>
                                    </p>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div id="cat_<?= $cat->id ?>" style="display: none;">
                        <hr class="child-hr" style="margin-top: 4px;"/>
                        <?php
                        $sub_category = $this->db->query("SELECT * FROM categories WHERE pid = ? LIMIT 10 ", array($cat->id))->result();
                        if ($sub_category):
                            foreach ($sub_category as $sub) : ?>
                                <div class="custom-card-child-next">
                                    <div class="container"
                                         style="margin-top: 0 !important; margin-bottom: 0 !important">
                                        <div class="category-child">
                                            <a style="color: #000; text-decoration: none"
                                               href="<?= base_url('catalog/' . $sub->slug); ?>"><p
                                                        style="padding-bottom: 5px; padding-left: 40px;"><?= $sub->name; ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="child-hr"/>
                            <?php endforeach; endif; ?>
                    </div>
                <?php endforeach; endif; ?>
        </div>
    <?php endforeach; ?>
</div>
