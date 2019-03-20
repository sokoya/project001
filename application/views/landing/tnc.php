<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .terms_head {
        color: #48bc6e;
        margin-top: 10px;
    }

    p:not(.foot-link), h3:not(.foot-link), h4:not(.foot-link) {
        color: grey;
    }
    <?php if ($this->agent->is_mobile()) : ?>
    p {
        font-size: 13px;
        line-height: 15px;
    }
    h2{
        font-size:20px !important;
        text-align: left;
    }
    h3{
        font-size:18px !important;
        text-align: left;
    }
    h4{
        font-size:16px !important;
        text-align: left;
    }
    <?php endif?>
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>
    <div class="container">
        <div class="row text-justify" style="padding: 30px;background: #fff;margin-top:20px;">

            <?= $terms; ?>
        </div>
        <div style="height:15px;"></div>
        <div>
            <p class="lead custom-text">Are You Ready To Shop?</p>
            <a class="btn btn-primary btn-lg" style="border-radius: 0;" href="<?= base_url(); ?>">Start Shopping<i
                        class="fa fa-cart-plus"></i></a>
        </div>
        <div style="height:15px;"></div>
    </div>
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
        <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>
</body>
</html>

