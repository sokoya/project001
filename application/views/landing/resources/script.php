<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<!--<script src="--><?//= base_url('assets/js/offline.min.js'); ?><!--"></script>-->
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<?php if(!in_array($page, array('login','create','reset_password', 'terms', 'privacy', 'contact', 'agreement', 'contact'))) :?>
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/ionrangeslider.js'); ?>"></script>
<script src="<?= base_url('assets/js/jqzoom.js'); ?>"></script>
<script src="<?= base_url('assets/js/card-payment.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl-carousel.js'); ?>"></script>
<script src="<?= base_url('assets/js/magnific.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/custom.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<?php endif?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- Start of HubSpot Embed Code -->
<!--<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5357566.js"></script>-->
<!-- End of HubSpot Embed Code -->
