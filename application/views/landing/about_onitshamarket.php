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
            <div class="text-content">
                <p>
                    Internet Onitshamarketing Ltd trading as Onitshamarket.com is a dynamic e-commerce platform that is designed to provide the most convenient experience for buying and selling in Nigeria and rest of the world.  Beyond online market; our unique focus of creating a virtual mall and ultra modern experience centres that interfaces with the largest market in Africa gives us an advantage over the competition, thereby giving customers the benefit of buying and selling quality and genuine goods from the biggest market in Africa, in the comfort of wherever they may be and having it delivered to them within a 24hrs lead time.
                </p>
            </div>
            <h3>Our Vision</h3>
            <div class="text-content">
                <p>
                    Our vision is to provide an online mall for the new generation of Onitsha market customers, who need to buy genuine, cost-effective products and have it delivered to their preferred locations.
                </p>
                <p>
                    <b>Onitshamarket.com</b> is always inspired to efficiently fulfill the changing current of our customers growing dynamic needs. Therefore, our products and services are genuine, superior, cost-effective, convenient and quick.
                </p>
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
