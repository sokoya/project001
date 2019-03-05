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
	<meta name="description" content="<?= !empty($description) ? $description : lang('description'); ?>">
	<?php if ($page == 'order_completed') : ?>
		<meta name="robots" content="noindex,nofollow">
	<?php else : ?>
		<meta name="robots" content="index,follow">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="width=device-width, initial-scale=1.0 maximum-loscale=1.0, user-scalable=0" name="viewport"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600|Oxygen' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="--><?//= base_url('assets/css/offline.css'); ?><!--">-->
<!--    <link rel="stylesheet" href="--><?//= base_url('assets/css/offline-theme.min.css'); ?><!--">-->
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
	<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
	<link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
    <meta name="theme-color" content="#2a9651" />
	<link rel="canonical" href="<?= current_url(); ?>"/>
	<?php if ($page == 'product') : ?>
		<meta property="og:title" content="<?= $product->product_name; ?>"/>
		<meta property="og:type" content="product"/>
		<meta property="og:image"
			  content="<?= ($featured_image->image_name) ? PRODUCTS_IMAGE_PATH . $featured_image->image_name : ''; ?>"/>
		<meta property="og:description"
			  content="<?php isset($description) ? $description : lang('site_description') ?>"/>
		<meta property="og:site_name" content="<?= lang('app_name'); ?>"/>
		<meta property="og:url" content="<?= current_url(); ?>"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="<?= base_url(); ?>"/>
		<meta name="twitter:creator" content=""/>
	<?php endif; ?>
	<meta name="google-site-verification" content="xGjxCwvClqtUIevfyrQ-HWU7OcjspMEVmXMAPcpzz7Y"/>
	<style>
		body { font-family: 'Oxygen', sans-serif !important; }
		.mgt_drop_menu > li { height: 36px !important; line-height: 48px !important; }
		.grey { color: grey; }
		.banner-category { box-shadow: none !important; background: transparent !important; }
        .t_drop_menu > li { height: 36px !important; line-height: 48px !important; }
        a:hover, a:active { text-decoration: none !important; }
	</style>
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
