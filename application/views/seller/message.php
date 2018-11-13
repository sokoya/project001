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
                    <li><i class="demo-pli-home"></i></li>
                    <li>User</a></li>
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
                                            <!--Split button dropdowns-->
                                            <div class="btn-group">
                                                <label id="demo-checked-all-mail" for="select-all-mail"
                                                       class="btn btn-default">
                                                    <input id="select-all-mail" class="magic-checkbox" type="checkbox">
                                                    <label for="select-all-mail"></label>
                                                </label>
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
                                                    Action <i class="dropdown-caret"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:;"><i class="demo-pli-mail-send"></i> Mark as read</a></li>
                                                    <li><a href="javascript:;"><i class="demo-pli-mail-unread"></i> Mark as unread</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:;"><i class="demo-pli-recycling"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <!--Mail list group-->
                                    <ul id="demo-mail-list" class="mail-list pad-top bord-top">

                                        <?php if( $messages) : ?>
                                            <?php foreach($messages->result() as $message ) : ?>
                                                <li <?php if($message->is_read == 0) echo 'mail-list-unread'; ?>>
                                                    <div class="mail-control">
                                                        <input id="<?= $message->id; ?>" class="magic-checkbox" type="checkbox">
                                                        <label for="<?= $message->id; ?>"></label>
                                                    </div>
                                                    <div class="mail-from"><?= $message->title; ?></div>
                                                    <div class="mail-time"><?= ago($message->created_on); ?></div>
                                                    <div class="mail-subject">
                                                        <a href=""><?= character_limiter($message->content, 80); ?></a>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li> No Message</li>
                                        <?php endif;?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="fluid message_read_view">
                                <?php $message = $messages->last_row('object'); ?>
                                <div class="mar-btm pad-btm bord-btm">
                                    <h1 class="page-header text-overflow">
                                        <?= $message->title; ?>
                                    </h1>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-7 toolbar-left">
                                        <!--Sender Information-->
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <div class="text-bold">Admin</div>
                                                <small class="text-muted">{{Support Email}}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 toolbar-right">
                                        <!--Details Information-->
                                        <p class="mar-no">
                                            <small class="text-muted"><?= neatTime($message->created_on); ?></small>
                                        </p>
                                    </div>
                                </div>
                                <!--Message-->
                                <!--===================================================-->
                                <div class="nano has-scrollbar" style="height: 350px;">
                                    <div class="nano-content" tabindex="0" style="right: -17px;">
                                        <div class="mail-message">
                                            Hey <?= ucfirst($profile->first_name); ?>,<br/><br/>
                                            <blockquote style="font-size:14px;text-align:justify;">
                                                <?= $message->content; ?>
                                            </blockquote>
                                            <div class="pull-right">
                                                <br><br> Regards,
                                                <br><br>
                                                <strong>Admin</strong><br>admin@onitshamarket.com<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nano-pane">
                                        <div class="nano-slider"
                                             style="height: 20px; transform: translate(0px, 0px);"></div>
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
    let all = $('#select-all-mail');
    all.click(function () {
        $('input:checkbox').prop('checked', this.checked);
    });
</script>
</body>
</html>
