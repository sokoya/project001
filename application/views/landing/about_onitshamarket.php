<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
<style>
    .view_constraint{
        padding-top: 50px;
        padding-bottom: 50px;
        min-height:calc(100vh - 629px);
    }

    .text-content > p {
        padding-bottom: 10px;
    }

    @media screen and (max-width:991px){
        .view_constraint{
            min-height: calc(100vh - 167px) !important;
        }
        .img_cart_404{
            margin: -20px auto auto !important;
        }
        .content-box{
            margin-bottom:0 !important;
        }
        .hide_it_sm{
            display:none !important;
        }
    }
</style>
</head>
<body style="background: #fff;">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TB9XP2T"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>


<div class="container view_constraint">

    <div class="col-xl-12 col-md-12" style="margin-bottom:-100px;">
        <div class="inner">
            <h2 class="category-header">
                <b>About Our Company</b>
            </h2>
            <hr />
            <h3>Who We Are</h3>
            <div class="text-content">
                <p>
                    We are Internet Onitshamarketing Ltd trading as Onitshamarket.com. We are a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria and rest of the world. Beyond online market; our unique focus of creating a virtual mall and ultra modern experience centres that interfaces with the largest market in Africa, gives us an advantage over the competition, thereby, giving customers the benefits of buying and selling goods on our trading platform, from the comfort of wherever they may be and having it delivered to them within a lead time of 1 to 3 days depending on the location.
                </p>
            </div>
            <h3>What We Do</h3>
            <div class="text-content">
                <p>
                    We bring fulfilment through:
                </p>
                <ul>
                    <li>Connecting buyers to sellers anytime and anywhere</li>
                    <li>Providing easy access for the world to African market</li>
                    <li>Training, as well as improving and supporting African made goods.</li>
                    <li>Ensuring all products and services are genuine, quality, cost effective and quick.</li>
                </ul>
            </div>

            <h3>Our Team</h3>
            <div class="text-content">
                <p>
                    We are made up of a tapestry of friendly, resourceful, committed, creative, and customer-centric team. We are always inspired to fulfill the changing current of our customers growing dynamic needs.
                </p>
            </div>

            <h3>Where To Find Us</h3>
            <div class="text-content">
                <p>
                    Our Head Office is Located at #176 Akwa Road, Opposite Conoil, Inland Town, Onitsha, Anambra State. For more contacts’ information about our various experience center all around Nigeria,
                    <a href="<?= lang('contact_us_url');?>">Contact Us</a>
                </p>
            </div>

            <h3>Become a seller</h3>
            <div class="text-content">
                <p>
                     <a href="<?= lang('seller_url');?>" title="Become a seler">Become a seller</a> to reach large audience and maximize your profit.
                </p>
            </div>
            <?php $this->load->view('landing/resources/why-onitshamarket'); ?>
        </div>
    </div>
</div>

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
        <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').Lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true
        });
    });
</script>
</body>
</html>
