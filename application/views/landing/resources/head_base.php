<!DOCTYPE HTML>
<html>
<head>
	<title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : ''; ?>"/>
	<meta name="description" content="<?= !empty($description) ? $description : ''; ?>">
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet'
		  type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<?php if ($page == 'mobile-product' && $this->agent->is_mobile()) : ?>
		<link rel="stylesheet" href="<?= base_url('assets/landing/css/owl.carousel.min.css'); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="<?= base_url('assets/landing/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/landing/css/font-awesome.css'); ?>">
	<?php if ($page == 'mobile-category' || $page == 'mobile-search' || $page == 'mobile-product' || $page == 'mobile-cart' || $page == 'mobile-checkout' && $this->agent->is_mobile()) : ?>
		<link rel="stylesheet" href="<?= base_url('assets/landing/css/styles-mobile.css'); ?>">
	<?php else : ?>
		<link rel="stylesheet" href="<?= base_url('assets/landing/css/styles.css'); ?>">
	<?php endif; ?>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/css/schemes/de-york.css'); ?>"
		  title="de-york" media="all"/>
	<link rel="shortcut icon" href="<?= base_url('assets/landing/img/favicon.png'); ?>" type="image/png">
	<link rel="icon" href="<?= base_url('assets/landing/img/favicon.png'); ?>" type="image/png">
	<link rel="canonical" href="<?= current_url(); ?>"/>

	<?php if ($page == 'product') : ?>
		<meta property="og:title" content="<?= $product->product_name; ?>"/>
		<meta property="og:type" content="product"/>
		<meta property="og:image"
			  content="<?= ($featured_image->image_name) ? base_url('data/products/' . $product->id . '/' . $featured_image->image_name) : ''; ?>"/>
		<meta property="og:desciption" content="<?= $description; ?>"/>
		<meta property="og:site_name" content="<?= lang('app_name'); ?>"/>
		<meta property="og:url" content="<?= current_url(); ?>"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="<?= lang('app_name'); ?>"/>
		<meta name="twitter:creator" content=""/>
	<?php endif; ?>
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

		t_drop_menu > li {
			height: 36px !important;
			line-height: 48px !important;
		}
	</style>
	<script> let base_url = "<?= base_url(); ?>"</script>
