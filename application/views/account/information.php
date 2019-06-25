<?php $this->load->view('landing/resources/head_base'); ?>

</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <div class="container market-dashboard-cover">

        <?php $this->load->view('account/includes/sidebar'); ?>

        <div class="col-md-8">
            <?php $this->load->view('account/includes/sidebar-mobile'); ?>

            <h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">Account Information</h3>
            <hr class="market-sidebar-line-r"/>
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view('landing/msg_view'); ?>
                    <div class="market-dashboard-card">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#edit">Edit Information</a></li>
                            <li><a data-toggle="tab" href="#change">Change Password</a></li>
                        </ul>
                        <div class="tab-content" style="padding:16px;">
                            <div id="edit" class="tab-pane fade in active">
                                <?= form_open(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><h5>Email:</h5></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" readonly type="email" name="name"
                                               value="<?= $profile->email; ?>" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><h5>Display Name:</h5></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="display_name" autofocus=""
                                               value="<?= $profile->display_name; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><h5>Phone:</h5></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="tel" name="phone"
                                               value="<?= $profile->phone ?>" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><h5>Gender:</h5></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="gender">
                                            <option <?php if ($profile->gender == 'male') echo 'selected'; ?>
                                                    value="male">Male
                                            </option>
                                            <option <?php if ($profile->gender == 'female') echo 'selected'; ?>
                                                    value="female">Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success col-md-12"><strong>SAVE
                                                INFORMATION</strong></button>
                                    </div>
                                </div>
                                <input type="hidden" name="user" value="<?= base64_encode($profile->id); ?>">
                                <input type="hidden" name="info_type" value="information_set">
                                <?= form_close(); ?>
                            </div>
                            <div id="change" class="tab-pane fade">
                                <?= form_open(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><h5>Old Password:</h5></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="password" name="current_password"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><h5>New Password:</h5></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="password" name="new_password"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><h5>Confirm Password:</h5></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="password" name="confirm_password"/>
                                    </div>
                                    <input type="hidden" name="user" value="<?= base64_encode($profile->id); ?>">
                                    <input type="hidden" name="info_type" value="password_set">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-success col-md-12">SAVE INFORMATION
                                        </button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gap gap-small"></div>
<?php if ($this->agent->is_mobile()) : ?>
    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
<?php else: ?>
    <?php $this->load->view('landing/resources/footer'); ?>
    <?php $this->load->view('landing/resources/script'); ?>
<?php endif; ?>
</div>
<script>
    $('.dropdown').on('click', function () {
        setTimeout(function () {
            $('.dropdown-backdrop').remove();
        }, 1000);
    })
</script>
</body>
</html>
