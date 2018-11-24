<nav id="mainnav-container">
    <div id="mainnav">

        <!--It will only appear on small screen devices.-->
        <!--================================-->
        <div class="mainnav-brand">
            <a href="<?= base_url(); ?>" class="brand">
                <img src="<?= base_url('assets/landing/img/onitshamarket-logo.png');?>" alt="<?= lang('app_name');?> logo" class="brand-icon">
                <span class="brand-text"><?= lang('app_name'); ?></span>
            </a>
            <a href="javascript:;" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
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
                                <img src="<?= base_url('assets/landing/img/onitshamarket-logo.png'); ?>" alt="<?= lang('app_name');?>" class="brand-title img-responsive">
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
                            <!-- <a href="<?= base_url('seller/settings/profile'); ?>" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a> -->
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
                        <li <?php if($pg_name == 'overview') echo 'class="active"'?>>
                            <a href="<?= base_url('seller/overview')?>">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">Overview</span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li <?php if($pg_name == 'product' || $pg_name == 'manage_product' ) echo 'class="active"'?>>
                            <a href="javascript:;">
                                <i class="demo-pli-idea-2"></i>
                                <span class="menu-title">Products</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse <?php if($pg_name == 'product' || $pg_name == 'manage_product') echo 'in';?>">
                                <li <?php if($sub_name =='select_category') echo 'class="active-link"' ?>><a href="<?= base_url('seller/product'); ?>">
                                        <i class="demo-pli-file-zip"></i>Select Category</a></li>
                                <li <?php if($sub_name == 'add_product') echo 'class="active-link"' ?>><a href="<?= base_url('seller/product/create'); ?>">
                                        <i class="demo-pli-star"></i>Add new product</a></li>

                                <li>
                                    <a href="javascript:;">
                                        <i class="demo-pli-remove-user"></i>Manage Products<i class="arrow"></i></a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="<?= base_url('seller/manage/'); ?>">
                                                <i class="demo-pli-list-view"></i>All Products</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=pending'); ?>">
                                                <i class="demo-pli-file-add"></i>Pending</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=suspended'); ?>">
                                                <i class="demo-pli-data-storage"></i>Suspended</a></li>
                                        <li><a href="<?= base_url('seller/manage/?type=missing_images'); ?>">
                                                <i class="demo-pli-file-text-image"></i>Missing Images</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>

                        <!--Menu list item-->
                        <li <?php if($pg_name == 'orders') echo 'class="active"'?>">
                            <a href="javascript:;">
                                <i class="demo-pli-cart-coin"></i>
                                <span class="menu-title">Orders</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse <?php if($pg_name == 'orders') echo 'in';?>">
                                <li <?php if($sub_name =='all') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/')?>">
                                        <i class="demo-pli-shopping-cart"></i>All Orders</a></li>
                                <li <?php if($sub_name =='order_pending') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=pending')?>">
                                        <i class="demo-pli-file-add"></i>Pending Orders</a></li>
                                <li <?php if($sub_name =='order_shipped') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=shipped')?>">
                                        <i class="demo-pli-monitor-2"></i>Shipped Orders</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="demo-pli-folder-with-document"></i>Completed Orders<i class="arrow"></i></a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li <?php if($sub_name =='order_delivered') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=delivered')?>">
                                                <i class="demo-pli-data-storage"></i>Delivered</a></li>
                                        <li <?php if($sub_name =='order_canceled') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=canceled'); ?>">
                                                <i class="demo-pli-remove"></i>Canceled</a></li>
                                        <li <?php if($sub_name =='order_failed_delievery') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=failed_delivery'); ?>">
                                                <i class="demo-pli-mail-remove"></i>Failed Delivery</a></li>
                                        <li <?php if($sub_name =='order_retured') echo 'class="active-link"' ?>><a href="<?= base_url('seller/orders/?type=returned'); ?>">
                                                <i class="demo-pli-refresh"></i>Returned</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>
                        <?php $message_count = $this->seller->get_unread_message(base64_decode($this->session->userdata('logged_id'))); ?>
                        <li class="<?php if($pg_name == 'message') echo 'active'?>">
                            <a href="<?= base_url('seller/message'); ?>">
                                <i class="demo-pli-mail"></i>
                                <span class="menu-title">Messages (<?= $message_count < 1 ? '0 New' : $message_count; ?>)</span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="<?php if($pg_name == 'settings') echo 'class="active"'?>">
                            <a href="javascript:;">
                                <i class="demo-pli-gear"></i>
                                <span class="menu-title">Settings</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse <?php if($pg_name == 'settings') echo 'in';?>">
                                <li <?php if($sub_name =='profile') echo 'class="active-link"' ?>><a href="<?= base_url('seller/settings')?>">
                                        <i class="demo-pli-add-user-star"></i>Profile</a></li>
                                <li <?php if($sub_name =='change_password') echo 'class="active-link"' ?>><a href="<?= base_url('seller/settings/change_password'); ?>">
                                        <i class="demo-pli-lock-2"></i>Change Password</a></li>
                                <li <?php if($sub_name =='notification') echo 'class="active-link"' ?>><a href="javascript:;">
                                        <i class="demo-pli-medal-2"></i>Notification Setting</a></li>
                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li <?php if($pg_name =='help') echo 'class="active"'?>>
                            <a href="<?= base_url('seller/help'); ?>">
                                <i class="demo-pli-information"></i>
                                <span class="menu-title">Help & Guidelines</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url('seller/logout'); ?>">
                                <i class="demo-pli-lock-user"></i>
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