<!DOCTYPE HTML>
<html>
<head>
<!--     Global site tag (gtag.js) - Google Analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132785278-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-132785278-1');
    </script>
    <title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : lang('keywords'); ?>"/>
    <meta name="description" content="<?= !empty($description) ? $description : lang('description'); ?>">
    <?php if($page == 'order_completed') : ?>
        <meta name="robots" content="noindex,nofollow">
    <?php else : ?>
        <meta name="robots" content="index,follow">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <?php if ($page == 'mobile-product' && $this->agent->is_mobile()) : ?>
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/owl.carousel.min.css'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css'); ?>">
    <?php if ($page == 'mobile-category' || $page == 'mobile-search' || $page == 'mobile-product' || $page == 'mobile-cart' || $page == 'mobile-checkout' && $this->agent->is_mobile()) : ?>
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/styles.css'); ?>">
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/styles-mobile.css'); ?>">
    <?php else : ?>
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/styles.css'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?= $this->user->auto_version('assets/css/schemes/de-york.css'); ?>"
          title="de-york" media="all"/>
    <link rel="shortcut icon" href="<?= $this->user->auto_version('assets/img/favicon.png'); ?>" type="image/png">
    <link rel="icon" href="<?= $this->user->auto_version('assets/img/favicon.png'); ?>" type="image/png">
    <link rel="canonical" href="<?= current_url(); ?>"/>
    <?php if ($page == 'product') : ?>
        <meta property="og:title" content="<?= $product->product_name; ?>"/>
        <meta property="og:type" content="product"/>
        <meta property="og:image"
              content="<?= ($featured_image->image_name) ? PRODUCTS_IMAGE_PATH . $featured_image->image_name : ''; ?>"/>
        <meta property="og:description" content="<?php isset($description) ? $description : lang('site_description') ?>"/>
        <meta property="og:site_name" content="<?= lang('app_name'); ?>"/>
        <meta property="og:url" content="<?= current_url(); ?>"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="<?= base_url(); ?>"/>
        <meta name="twitter:creator" content=""/>
    <?php endif; ?>
    <meta name="google-site-verification" content="xGjxCwvClqtUIevfyrQ-HWU7OcjspMEVmXMAPcpzz7Y" />
    <script>
        window.onresize = function(event) {
            document.location.reload(true);
        }
    </script>
    <style>
        .mgt_drop_menu > li {
            height: 36px !important;
            line-height: 48px !important;
        }

        .grey {
            color: grey;
        }

        .banner-category {
            box-shadow: none !important;
            background: transparent !important;

        .t_drop_menu > li {
            height: 36px !important;
            line-height: 48px !important;
        }

        a:hover,a:active{
            text-decoration: none !important;
        }
    </style>
    <script> let base_url = "<?= base_url(); ?>"</script>
