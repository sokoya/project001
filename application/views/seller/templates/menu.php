<nav id="mainnav-container">
    <div id="mainnav">

        <!--It will only appear on small screen devices.-->
        <!--================================-->
        <div class="mainnav-brand">
            <a href="<?= base_url(); ?>" class="brand">
                <img src="<?= base_url('seller/assets/seller/img/carrito-logo.png');?>" alt="<?= lang('app_name');?> logo" class="brand-icon">
                <span class="brand-text"><?= lang('app_name'); ?></span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>



        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="img/profile-photos/1.png" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                <p class="mnp-name"><?= ucwords($profile->first_name . ' ' . $profile->last_name); ?></p>
                                <span class="mnp-desc"><?= $profile->email; ?></span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="<?= base_url('seller/settings/profile'); ?>" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="<?= base_url('seller/settings')?>" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="<?= base_url('seller/help')?>" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <a href="<?= base_url('seller/logout')?>" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>
                        </div>
                    </div>


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li>
                            <a href="<?= base_url('seller/overview')?>">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">Overview</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li class="<?php if($pg_name == 'product' || $pg_name == 'manage_product' ) echo 'class="active-sub"'?>">
                            <a href="#">
                                <i class="demo-pli-split-vertical-2"></i>
                                <span class="menu-title">Products</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse <?php if($pg_name == 'product' || $pg_name == 'manage_product') echo 'in';?>">
                                <li <?php if($sub_name =='select_category') echo 'class="active-link"' ?>><a href="<?= base_url('seller/product'); ?>">Select Category</a></li>
                                <li <?php if($sub_name == 'add_product') echo 'class="active-link"' ?>><a href="<?= base_url('seller/product/create'); ?>">Add new product</a></li>

                                <li>
                                    <a href="#">Manage Products<i class="arrow"></i></a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="<?= base_url('seller/manage/'); ?>">All Products</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=pending'); ?>">Pending</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=delivered'); ?>">Delivered</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=missing_images'); ?>">Missing Images</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=sold_out'); ?>"">Returned</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=inactive'); ?>"">Inactive</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>

                        <!--Menu list item-->
                        <li class="<?php if($pg_name == 'orders') echo 'class="active-sub"'?>">
                            <a href="#">
                                <i class="demo-pli-cart-coin"></i>
                                <span class="menu-title">Orders</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse <?php if($pg_name == 'orders') echo 'in';?>">
                                <li <?php if($sub_name =='all') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/')?>">All Orders</a></li>
                                <li <?php if($sub_name =='pending_order') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=pending')?>">Pending Orders</a></li>
                                <li <?php if($sub_name =='shipped_pending') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=shipped')?>">Shipped Orders</a></li>
                                <li>
                                    <a href="#">Completed Orders<i class="arrow"></i></a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="<?= base_url('seller/orders/?type=delivered')?>">Delivered</a></li>
                                        <li><a href="<?= base_url('seller/orders/?type=canceled'); ?>">Canceled</a></li>
                                        <li><a href="<?= base_url('seller/orders/?type=failed_delivery'); ?>">Failed Delivery</a></li>
                                        <li><a href="<?= base_url('seller/orders/?type=returned'); ?>">Returned</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>
                        <li class="<?php if($pg_name == 'settings') echo 'class="active-sub"'?>">
                            <a href="#">
                                <i class="demo-pli-gear"></i>
                                <span class="menu-title">Settings</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse <?php if($pg_name == 'settings') echo 'in';?>">
                                <li <?php if($sub_name =='profile') echo 'class="active-link"' ?>><a href="<?= base_url('seller/settings')?>">Profile</a></li>
                                <li <?php if($sub_name =='change_password') echo 'class="active-link"' ?>><a href="<?= base_url('seller/settings/change_password'); ?>">Change Password</a></li>
                                <!-- <li <?php if($sub_name =='notification') echo 'class="active-link"' ?>><a href="<?= base_url('seller/settings/notification'); ?>">Notification Setting</a></li> -->

                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href="<?= base_url('seller/help'); ?>">
                                <i class="demo-pli-inbox-full"></i>
                                <span class="menu-title">Help & Guidelines</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url('seller/logout'); ?>">
                                <i class="fa fa-key"></i>
                                <span class="menu-title">Logout</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>