<?php $this->load->view('seller/templates/meta_tags'); ?>
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <!--NAVBAR-->
    <!--===================================================-->
    <?php $this->load->view('seller/templates/head_navbar'); ?>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <div id="page-head">
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">User</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Breadcrumb-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <ol class="breadcrumb">
                    <li><a href="javascript:;"><i class="demo-pli-home"></i></a></li>
                    <li><a href="javascript:;">User</a></li>
                    <li class="active">Messages</li>
                </ol>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End breadcrumb-->
            </div>
            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Showing all Messages</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-5">
                            <div class="fluid">
                                <div id="demo-email-list">
                                    <div class="row">
                                        <div class="col-sm-7 toolbar-left">

                                            <!-- Mail toolbar -->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                                            <!--Split button dropdowns-->
                                            <div class="btn-group">
                                                <label id="demo-checked-all-mail" for="select-all-mail"
                                                       class="btn btn-default">
                                                    <input id="select-all-mail" class="magic-checkbox" type="checkbox">
                                                    <label for="select-all-mail"></label>
                                                </label>
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                    <i class="dropdown-caret"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:;" id="demo-select-all-list">All</a></li>
                                                    <li><a href="javascript:;" id="demo-select-none-list">None</a></li>
                                                    <li><a href="javascript:;" id="demo-select-toggle-list">Toggle</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:;" id="demo-select-read-list">Read</a></li>
                                                    <li><a href="javascript:;" id="demo-select-unread-list">Unread</a>
                                                    </li>
                                                    <li><a href="javascript:;" id="demo-select-starred-list">Starred</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Refresh button-->
                                            <button id="demo-mail-ref-btn" data-toggle="panel-overlay"
                                                    data-target="#demo-email-list" class="btn btn-default"
                                                    type="button">
                                                <i class="demo-psi-repeat-2"></i>
                                            </button>

                                            <!--Dropdown button (More Action)-->
                                            <div class="btn-group dropdown">
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"
                                                        type="button">
                                                    More <i class="dropdown-caret"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:;">Mark as read</a></li>
                                                    <li><a href="javascript:;">Mark as unread</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:;">Star</a></li>
                                                    <li><a href="javascript:;">Clear Star</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:;">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 toolbar-right">
                                            <!--Pager buttons-->
                                            <span class="text-main">
					                                <strong>1-10</strong>
					                                of
					                                <strong>23</strong>
					                            </span>
                                            <div class="btn-group btn-group">
                                                <button class="btn btn-default" type="button">
                                                    <i class="demo-psi-arrow-left"></i>
                                                </button>
                                                <button class="btn btn-default" type="button">
                                                    <i class="demo-psi-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Mail list group-->
                                    <ul id="demo-mail-list" class="mail-list pad-top bord-top">

                                        <!--Mail list item-->
                                        <li class="mail-list-unread mail-attach mail-starred">
                                            <div class="mail-control">
                                                <input id="email-list-1" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-1"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Admin</a></div>
                                            <div class="mail-time">05:55 PM</div>
                                            <div class="mail-attach-icon"></div>
                                            <div class="mail-subject">
                                                <a href="javascript:;">Track your order </a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-starred">
                                            <div class="mail-control">
                                                <input id="email-list-2" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-2"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Onitshamarket.com</a></div>
                                            <div class="mail-time">10:45 AM</div>
                                            <div class="mail-attach-icon"></div>
                                            <div class="mail-subject">
                                                <a href="javascript:;">Tracking Your Order - Shoes Store Online</a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-list-unread mail-starred mail-attach">
                                            <div class="mail-control">
                                                <input id="email-list-3" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-3"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Admin</a></div>
                                            <div class="mail-time">07:18 AM</div>
                                            <div class="mail-attach-icon"><i class="demo-psi-paperclip"></i></div>
                                            <div class="mail-subject">
                                                <a href="javascript:;">Reset your account password</a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-list-unread">
                                            <div class="mail-control">
                                                <input id="email-list-4" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-4"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Admin</a></div>
                                            <div class="mail-time">01:51 PM</div>
                                            <div class="mail-attach-icon"></div>
                                            <div class="mail-subject">
                                                <a href="javascript:;">
                                                    Regarding to your website issues.
                                                </a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li>
                                            <div class="mail-control">
                                                <input id="email-list-5" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-5"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Admin</a></div>
                                            <div class="mail-time">Yesterday</div>
                                            <div class="mail-attach-icon"></div>
                                            <div class="mail-subject">
                                                <a href="javascript:;">Hi John! How are you?</a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-starred">
                                            <div class="mail-control">
                                                <input id="email-list-6" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-6"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Onitshamarket.com</a></div>
                                            <div class="mail-time">Yesterday</div>
                                            <div class="mail-attach-icon"></div>
                                            <div class="mail-subject">
                                                <a href="javascript:;">
                                                    Repair Status Unregistered User
                                                </a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-attach">
                                            <div class="mail-control">
                                                <input id="email-list-7" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-7"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Admin</a></div>
                                            <div class="mail-time">Oct 10</div>
                                            <div class="mail-attach-icon"><i class="demo-psi-paperclip"></i></div>
                                            <div class="mail-subject"><a href="javascript:;">Bugs in your system.</a>
                                            </div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-list-unread">
                                            <div class="mail-control">
                                                <input id="email-list-8" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-8"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Admin</a></div>
                                            <div class="mail-time">Oct 10</div>
                                            <div class="mail-attach-icon"></div>
                                            <div class="mail-subject"><a href="javascript:;">This is an example if there
                                                    is a really really long text. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua. Ut enim ad minim veniam, </a></div>
                                        </li>

                                        <!--Mail list item-->
                                        <li class="mail-starred mail-attach">
                                            <div class="mail-control">
                                                <input id="email-list-9" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-9"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Onitshamarket.com</a></div>
                                            <div class="mail-time">Oct 9</div>
                                            <div class="mail-attach-icon"><i class="demo-psi-paperclip"></i></div>
                                            <div class="mail-subject"><a href="javascript:;">Tracking Your Order - Shoes
                                                    Store Online</a></div>
                                        </li>

                                        <li class="mail-attach">
                                            <div class="mail-control">
                                                <input id="email-list-14" class="magic-checkbox" type="checkbox">
                                                <label for="email-list-14"></label>
                                            </div>
                                            <div class="mail-star"><a href="javascript:;"><i class="demo-psi-star"></i></a>
                                            </div>
                                            <div class="mail-from"><a href="javascript:;">Onitshamarket.com</a></div>
                                            <div class="mail-time">Oct 3</div>
                                            <div class="mail-attach-icon"><i class="demo-psi-paperclip"></i></div>
                                            <div class="mail-subject"><a href="javascript:;">Bugs in your system.</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <!--Mail footer-->
                                <div class="panel-footer clearfix">
                                    <div class="pull-right">
                                        <span class="text-main"><strong>1-10</strong> of <strong>23</strong></span>
                                        <div class="btn-group btn-group">
                                            <button type="button" class="btn btn-default">
                                                <i class="demo-psi-arrow-left"></i>
                                            </button>
                                            <button type="button" class="btn btn-default">
                                                <i class="demo-psi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="fluid message_read_view">

                                <!-- VIEW MESSAGE -->
                                <!--===================================================-->

                                <div class="mar-btm pad-btm bord-btm">
                                    <h1 class="page-header text-overflow">
                                        Track your order
                                    </h1>
                                </div>

                                <div class="row">
                                    <div class="col-sm-7 toolbar-left">

                                        <!--Sender Information-->
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <div class="text-bold">Admin</div>
                                                <small class="text-muted">admin@onitshamarket.com</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 toolbar-right">

                                        <!--Details Information-->
                                        <p class="mar-no">
                                            <small class="text-muted">Tuesday 13, Nov. 2018</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="row pad-top">
                                    <div class="col-sm-7 toolbar-left">

                                        <!--Mail toolbar-->
                                        <button class="btn btn-default"><i class="demo-pli-printer icon-lg"></i>
                                        </button>
                                        <div class="btn-group btn-group">
                                            <button class="btn btn-default"><i class="demo-pli-information icon-lg"></i>
                                            </button>
                                            <button class="btn btn-default"><i class="demo-pli-trash icon-lg"></i>
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 toolbar-right">
                                        <!--Reply & forward buttons-->
                                        <div class="btn-group btn-group">
                                            <a class="btn btn-default" href="#">
                                                <i class="demo-psi-left-4"></i>
                                            </a>
                                            <a class="btn btn-default" href="#">
                                                <i class="demo-psi-right-4"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!--Message-->
                                <!--===================================================-->
                                <div class="mail-message">
                                    Hey John,<br/><br/>
                                    <blockquote style="font-size:14px;text-align:justify;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                        est,
                                        qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                        numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
                                        eum
                                        iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                        consequatur.
                                    </blockquote>
                                    <div class="pull-right">
                                        <br><br> Regards,
                                        <br><br>
                                        <strong>Admin</strong><br>admin@onitshamarket.com<br>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


        <!--ASIDE-->
        <!--===================================================-->
        <?php $this->load->view('seller/templates/aside_menu'); ?>
        <!--===================================================-->
        <!--END ASIDE-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <?php $this->load->view('seller/templates/menu'); ?>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>


    <!-- FOOTER -->
    <!--===================================================-->
    <?php $this->load->view('seller/templates/footer'); ?>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->


<?php $this->load->view('seller/templates/scripts'); ?>
<script>
    $(document).ready(function (x) {
        $('#demo-dt-basic').dataTable({
            "responsive": true,
            "language": {
                "paginate": {
                    "previous": '<i class="demo-psi-arrow-left"></i>',
                    "next": '<i class="demo-psi-arrow-right"></i>'
                }
            }
        });
    });
</script>
</body>
</html>
