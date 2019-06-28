<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
    .feature-attribute:hover {
        cursor: pointer;
    }
    .post-card {
        -webkit-transition: box-shadow .5s linear;
        transition: box-shadow .5s linear;
        background: #fff;
        padding: 20px;
        font-size: 16px;
        line-height: 26px;
    }
    /* The sticky class is added to the header with JS when it reaches its scroll position */
    .sticky {
        position: fixed;
        top: 0;
        width: 100%
    }
    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
    .sticky + .global-wrapper {
        padding-top: 102px;
    }
    .post-title{
        line-height: 38px;
        font-size: 25px;
        color: #000;
        margin-top: 0;
        margin-bottom: 15px;
        font-weight: 400;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('blog/head_menu') ?>
    <?php endif; ?>

    <div class="container">
        <div class="cat-notify" style="padding: 30px;">
            <p class="n-head">Onitshamarket Blog</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9">
                    <div class="post-card">
                        <h3 class="post-title">
                            Hello everyone, hope you're doing good
                        </h3>
                        <hr />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm text-center" style="background-color: white">
                    <img src="<?= base_url('assets/img/home/categories/left_pane1.jpg'); ?>" style="max-height: 100%;">
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </div>

    <div class="gap"></div>
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
    <?php endif; ?>
</div>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
    let current_url = "<?= current_url()?>";
</script>
<script src="<?= $this->user->auto_version('assets/js/quick-view.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script>
    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', '');
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
        setTimeout(function(){
            for (let i = 0; i < allimages.length; i++) {
                if (allimages[i].getAttribute('data-src')) {
                    allimages[i].setAttribute('style', '');
                }
            }
        }, 300);
    }, false);

    window.onscroll = function() {myFunction()};
    var header = document.getElementById("header-f");

    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
