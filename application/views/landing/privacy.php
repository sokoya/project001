<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .pri_head{
        color: #48bc6e;
        margin-top: 10px;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

    <?php $this->load->view('landing/resources/head_img') ?>
    <?php $this->load->view('landing/resources/head_category') ?>

    <?php $this->load->view('landing/resources/head_menu') ?>
    <div class="container text-center">
        <h2 class="pri_head">Privacy &amp; Security</h2>
        <hr style="width:100%; border:1px solid red;margin-top:-5px;"/>
    </div>


    <?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
<script>
    // notification_message('This is a test message', 'fa fa-info-circle', 'success');
</script>
</body>
</html>

