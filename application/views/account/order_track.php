<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .no_border_rad {
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        border-radius: 0 !important;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_category') ?>

        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <div class="container market-dashboard-cover">

        <?php $this->load->view('account/includes/sidebar'); ?>

        <div class="col-md-8">
            <?php $this->load->view('account/includes/sidebar-mobile'); ?>

            <h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs">Order Tracking</h3>
            <hr class="market-sidebar-line-r"/>
            <div class="alert alert-warning">
                <i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
                several area in the state may arrive latter than expected. To view the most up to date status for your
                order, please go to the Orders page
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view('landing/msg_view'); ?>
                    <div class="order_tracking_form">
                        <div class="row text-center">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="img-responsive" style="margin: 0 auto;"
                                     src="<?= base_url('assets/landing/img/track2.jpg'); ?>"
                                     alt="Track Order"
                                     title="Track Order"/>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row text-center" style="margin-top: 30px;">
                            <?= form_open('account/order_track'); ?>
                            <div class="input-group col-md-8 col-md-offset-2">
                                <input type="text" class="newsletter-input form-control no_border_rad"
                                       placeholder="Enter Tracking ID" required>
                                <div class="input-group-btn">
                                    <button class="btn btn-primary no_border_rad" type="submit">
                                        Track Order
                                    </button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                        <div class="row text-center" id="order_status_show">

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
