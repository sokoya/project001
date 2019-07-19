<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
    .feature-attribute:hover {
        cursor: pointer;
    }

    .blog-post{
        margin: 8px;
        border-radius: 3px;
    }
    .media-heading{
        padding-top: 5px;
    }
    .blog-link{
        color: #000;
    }
    .blog-link:hover{
        color: #49a251;
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
                    <?php if( count( $products) < 1 ): ?>
                        <h2 class="text-center">Oops! No active product on this section, please filter again.</h2>
                    <?php endif; ?>

                    <div class="col-md-9">
                        <div class="blog-post" >
                            <div class="media" style="background-color: whitesmoke; padding: 5px;">
                                <a class="pull-left text-center" href="#">
                                    <img class="media-object" src="http://placekitten.com/150/150">
                                </a>
                                <div class="media-body" style="padding: 4px;">
                                    <h4 class="media-heading">
                                        <a class="blog-link" href="<?= siteurlify('ahscbsbsbs', 3); ?>">
                                            Post 1
                                        </a>
                                    </h4>
                                    <h5 class="">By Onitshamarket Team</h5>
                                    <a class="blog-link" href="<?= siteurlify('ahscbsbsbs', 3); ?>">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                        </p>
                                    </a>
                                    <ul class="list-inline list-unstyled share-icon">
                                        <li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
                                        <li>|</li>
                                        <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
                                        <li>|</li>
                                        <li>
                                            <span><i class="fab fa-facebook-square"></i></span>
                                            <span><i class="fab fa-twitter-square"></i></span>
                                            <span><i class="fab fa-google-plus-square"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <?= $pagination ?>
                            </div>
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
