<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Page Not Found | Onitshamarket.com</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : ''; ?>"/>
    <meta name="description" content="<?= !empty($description) ? $description : ''; ?>">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://localhost/admin/assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/admin/assets/landing/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/admin/assets/landing/css/font-awesome.css">
    <link rel="stylesheet" href="http://localhost/admin/assets/landing/css/styles-mobile.css">
    <link rel="stylesheet" href="http://localhost/admin/assets/landing/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/admin/assets/landing/css/schemes/de-york.css"
          title="de-york" media="all"/>
    <link rel="shortcut icon" href="http://localhost/admin/assets/landing/img/favicon.png" type="image/png">
    <link rel="icon" href="http://localhost/admin/assets/landing/img/favicon.png" type="image/png">
    <meta property="og:description" content="<?= !empty($description)? $description : ''; ?>"/>
    <meta property="og:site_name" content="Onitshamarket.com"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="Onitshamarket.com"/>
    <meta name="twitter:creator" content=""/>
    <style>

    </style>
</head>
<body>
<div class="container">
    <h1><?php echo $heading; ?></h1>
    <?php echo $message; ?>
</div>
</body>
</html>