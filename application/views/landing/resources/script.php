<script src="<?= $this->user->auto_version('assets/js/jquery.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/bootstrap.js'); ?>"></script>
<?php if(!in_array($page, array('login','create','reset_password'))) :?>
<script src="<?= $this->user->auto_version('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/ionrangeslider.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/jqzoom.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/card-payment.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/owl-carousel.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/magnific.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/custom.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<?php endif?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
