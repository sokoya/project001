<!DOCTYPE HTML>
<html>
<head>
    <!--     Global site tag (gtag.js) - Google Analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132785278-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-132785278-1');
    </script>
    <title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : lang('keywords'); ?>"/>

    <?php if ($page == 'order_completed') : ?>
        <meta name="robots" content="noindex,nofollow">
    <?php else : ?>
        <meta name="robots" content="index,follow">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600|Oxygen|Cabin:500' rel='stylesheet'
          type='text/css'>
    <?php if ($page == 'mobile-product' && $this->agent->is_mobile()) : ?>
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/owl.carousel.min.css'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php if ($page == 'mobile-category' || $page == 'mobile-search' || $page == 'mobile-product' || $page == 'mobile-cart' || $page == 'mobile-checkout' && $this->agent->is_mobile()) : ?>
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/styles.css'); ?>">
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/styles-mobile.css'); ?>">
    <?php else : ?>
        <link rel="stylesheet" href="<?= $this->user->auto_version('assets/css/styles.css'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?= $this->user->auto_version('assets/css/schemes/de-york.css'); ?>"
          title="de-york" media="all"/>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <meta name="theme-color" content="#2a9651"/>
    <link rel="canonical" href="<?= current_url(); ?>"/>
    <?php if ($page == 'product') : ?>
        <meta property="og:title" content="<?= $product->product_name; ?>"/>
        <meta property="og:type" content="product"/>
        <meta property="og:image"
              content="<?= ($featured_image->image_name) ? PRODUCTS_IMAGE_PATH . $featured_image->image_name : ''; ?>"/>
        <meta property="og:description"
              itemprop="description"
              content="<?php isset($description) ? word_limiter($description, 100) : lang('site_description') ?>"/>
        <meta property="og:site_name" content="<?= lang('app_name'); ?>"/>
        <meta property="og:url" content="<?= current_url(); ?>"/>
        <meta property="og:image:width" content="279">
        <meta property="og:image:height" content="279">
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="<?= base_url(); ?>"/>
        <meta name="twitter:site" content="Onitshamarket"/>
        <meta name="twitter:creator" content=""/>
        <meta name="twitter:image" content="<?= base_url('assets/img/notice.jpg')?>" />

    <?php endif; ?>

    <?php if ($page != 'product') : ?>
        <meta property="og:image" content="<?= base_url('assets/img/notice.jpg')?>" />
        <meta name="description" content="<?= !empty($description) ? $description : lang('description'); ?>">
    <?php endif; ?>

    <meta name="yandex-verification" content="5e0c9cc8260f049f" />

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#2a9651">
<!--    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">-->
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <style>
        /*.product-labels > li {*/
            /*background-color: #a72323;*/
            /*font-weight: bold;*/
        /*}*/

        .mgt_drop_menu > li, .t_drop_menu > li {
            height: 36px !important;
            line-height: 48px !important
        }

        body {
            font-family: Oxygen, sans-serif !important;
            overflow-x: hidden
        }

        .navbar-main-search-submit {
            border: none
        }

        .grey {
            color: grey
        }

        .banner-category {
            box-shadow: none !important;
            background: 0 0 !important
        }

        a:active, a:hover {
            text-decoration: none !important
        }

        .dropdown-menu-category-section {
            height: 450px
        }

        #close-banner {
            position: absolute;
            right: 19px;
            top: 8px;
            cursor: pointer
        }

        .ad-banner {
            height: 5vh;
            width: 100%;
            object-fit: cover
        }
        .custom-menu-category-drop > a {
            font-size: 12px;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script> let base_url = "<?= base_url(); ?>"</script>

    <!--    <link rel="manifest" href="/manifest.json" />-->
    <!--    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>-->
    <!--    <script>-->
    <!--        var OneSignal = window.OneSignal || [];-->
    <!--        OneSignal.push(function() {-->
    <!--            OneSignal.init({-->
    <!--                appId: "f6fefe3f-948f-4ef0-ba09-76804a498441",-->
    <!--            });-->
    <!--        });-->
    <!--    </script>-->
