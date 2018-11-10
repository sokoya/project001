<!DOCTYPE HTML>
<html>
<head>
    <title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : ''; ?>" />
    <meta name="description" content="<?= !empty($description) ? $description : ''; ?>">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/landing/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/css/font-awesome.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/landing/css/styles.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/css/schemes/de-york.css'); ?>" title="de-york" media="all" />
    <link rel="shortcut icon" href="<?= base_url('assets/landing/img/favicon.png'); ?>" type="image/png">
    <style>
        .mgt_drop_menu>li{
            height:36px !important;
            line-height:48px !important;
        }
        .grey{
            color:grey;
        }
        .banner-category {
            box-shadow: none !important;
            background: transparent !important;
        }
    </style>