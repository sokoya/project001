<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script>
    var placeholders = ['Search for products, brands and categories...', 'Samsung s10', 'Huawei', 'Redmi Note 7'];

    (function cycle() {
        var placeholder = placeholders.shift();
        $('.site-search').attr('placeholder', placeholder);
        placeholders.push(placeholder);
        setTimeout(cycle, 4000);
    })();
    $('#close-banner').on('click', function () {
        $('.ad-banner').remove();
    });
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
<?php if (!in_array($page, array('login', 'create', 'reset_password', 'terms', 'privacy', 'contact', 'agreement', 'contact'))) : ?>
    <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/ionrangeslider.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jqzoom.js'); ?>"></script>
    <script src="<?= base_url('assets/js/card-payment.js'); ?>"></script>
    <script src="<?= base_url('assets/js/owl-carousel.js'); ?>"></script>
    <script src="<?= base_url('assets/js/magnific.js'); ?>"></script>
    <script src="<?= $this->user->auto_version('assets/js/custom.js'); ?>"></script>
    <script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<?php endif ?>
<!-- Start of HubSpot Embed Code -->
<!--<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5357566.js"></script>-->
<!-- End of HubSpot Embed Code -->
