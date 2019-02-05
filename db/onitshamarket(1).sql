-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2019 at 07:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onitshamarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_groups`
--

DROP TABLE IF EXISTS `admin_groups`;
CREATE TABLE IF NOT EXISTS `admin_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n\"admin\": 1,\r\n\"moderator\": 1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `sid`, `name`, `price`) VALUES
(1, 1, 'Abia Central Location', '600'),
(2, 1, 'ukwuano', '900'),
(3, 2, 'gombi', '800');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

DROP TABLE IF EXISTS `billing_address`;
CREATE TABLE IF NOT EXISTS `billing_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `primary_address` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`id`, `uid`, `sid`, `aid`, `address`, `first_name`, `last_name`, `phone`, `phone2`, `primary_address`) VALUES
(1, 3, 1, 1, '530A, Aina Akingbala Street, Ikeja', 'Sokoya', 'Philip', '08169254598', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `brand_name`, `description`, `brand_logo`, `status`) VALUES
(1, 0, 'Apple', 'This is apple\'s brand, Hope you like it....', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `specifications` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `commission` float NOT NULL,
  `variation_name` varchar(255) NOT NULL,
  `variation_options` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `pid`, `slug`, `title`, `description`, `specifications`, `image`, `name`, `commission`, `variation_name`, `variation_options`) VALUES
(1, 'fa-tv', 0, 'electronics', 'Buy Electronics Online in Nigeria', 'Shop for Electronics online on Onitshamarket. Discover a great selection of Television and Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'TVs & Electronics', 4, '', ''),
(2, '', 1, 'blu-ray-dvd-players', 'Buy Blu Ray &amp; DVD Players', 'Shop for Blu Ray &amp; DVD Players online on Onitshamarket. Discover a great selection of Blu Ray &amp; DVD Players at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Blu Ray &amp; DVD Players', 4.5, '', ''),
(3, 'fa-camera', 1, 'cameras', 'Buy Cameras Online in Nigeria', 'Shop for Cameras online on Onitshamarket. Discover a great selection of Cameras at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Cameras', 4.5, '', ''),
(4, '', 3, 'camcorders', 'Buy Camcorders Online In Nigeria', 'Shop for Camcorder online on Onitshamarket. Discover a great selection of Camcorder at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Camcorders', 4.5, '', ''),
(5, 'fa-camera', 3, 'camera-photo-accessories', 'Buy Camera and Photo Accessories', 'Shop for  Camera and  Photo Accessories online on Onitshamarket. Discover a great selection of Camera and  Photo Accessories at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Camera &amp; Photo Accessories', 2.5, '', ''),
(6, 'fa-camera', 3, 'digital-cameras', 'Buy Digital Cameras Online', 'Shop for Digital Cameras online on Onitshamarket. Discover a great selection of Digital Cameras at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Digital Cameras', 2.5, '', ''),
(7, 'fa-camera', 3, 'digital-photo-frames', 'Buy Digital Photo Frames', 'Shop for Digital Photo Frames online on Onitshamarket. Discover a great selection of Digital Photo Frames at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Digital Photo Frames', 4.5, '', ''),
(8, '', 3, 'lens', 'Buy Lens Online in Nigeria', 'Shop for Lens online on Onitshamarket. Discover a great selection of Lens at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Lens', 4.5, '', ''),
(9, '', 3, 'lenses-zooms', 'Buy Lenses and Zooms', 'Shop for Lens &amp; Zooms online on Onitshamarket. Discover a great selection of Onitshamarketat the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Lenses &amp; Zooms', 4.5, '', ''),
(10, '', 3, 'professional-slr-cameras', 'Buy Professional/SLR Cameras', 'Shop for Professional/SLR Cameras online on Onitshamarket. Discover a great selection of Professional/SLR Cameras at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Professional/SLR Cameras', 2.5, '', ''),
(11, '', 3, 'surveillance-camera', 'Buy Surveillance Camera Online In Nigeria', 'Shop for Surveillance Camera online on Onitshamarket. Discover a great selection of Surveillance Camera at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Surveillance Camera', 2.5, '', ''),
(12, '', 1, 'gadgets-accessories', 'Buy Gadgets And Accessories Online In Nigeria', 'Shop for Gadgets &amp; Accessories online on Onitshamarket. Discover a great selection of Gadgets &amp; Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Gadgets &amp; Accessories', 4, '', ''),
(13, 'fa-tv', 1, 'home-theatre-audio', 'Buy Home Theatre &amp; Audio Online In Nigeria', 'Shop for Home Theatre and Audio online on Onitshamarket. Discover a great selection of Home Theatre &amp; Audio at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Home Theatre &amp; Audio', 3, '', ''),
(14, '', 13, 'hi-fi-system', 'Buy Hi fi system Online In Nigeria', 'Shop for Hi fi system online on Onitshamarket. Discover a great selection of Hi fi system at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Hi fi system', 4, '', ''),
(15, 'fa-camera', 1, 'cameras-electronics', 'Buy Cameras &amp; Electronics Online In Nigeria', 'Shop for Cameras &amp; Electronics online on Onitshamarket. Discover a great selection of Cameras &amp; Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Cameras &amp; Electronics', 2, '', ''),
(16, 'fa-camera', 15, 'mp3-players-accessories', 'Buy MP3 Players &amp; Accessories Online In Nigeria', 'Shop for MP3 Players &amp; Accessories online on Onitshamarket. Discover a great selection of MP3 Players &amp; Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'MP3 Players &amp; Accessories', 2, '', ''),
(17, '', 16, 'docking-station', 'Buy Docking Station Online In Nigeris', 'Shop for Docking Station online on Onitshamarket. Discover a great selection of Docking Station at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Docking Station', 4, '', ''),
(18, '', 16, 'heahphones-earphones', 'Buy Heahphones/ Earphones Online In Nigeria', 'Shop for Headphones/ Earphones online on Onitshamarket. Discover a great selection of Headphones/ Earphones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Heahphones/ Earphones', 4, '', ''),
(19, '', 16, 'mini-speaker-systems', 'Buy Mini Speaker Systems Online In Nigeria', 'Shop for Mini Speaker Systems online on Onitshamarket. Discover a great selection of Mini Speaker Systems at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mini Speaker Systems', 4, '', ''),
(20, '', 15, 'musical-instruments', 'Buy Musical Instruments Online In Nigeria', 'Shop for Musical Instruments online on Onitshamarket. Discover a great selection of Musical Instruments  at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Musical Instruments', 4, '', ''),
(21, '', 15, 'power-supplies-electrical', 'Buy Power Supplies &amp; Electricals Online In Nigeria', 'Shop for Power Supplies &amp; Electrical online on Onitshamarket. Discover a great selection of Power Supplies &amp; Electrical at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Power Supplies &amp; Electrical', 4, '', ''),
(22, 'fa-tv', 15, 'televisions', 'Buy Televisions Online In Nigeria', 'Shop for Televisions online on Onitshamarket. Discover a great selection of Televisions at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Televisions', 4, '', ''),
(23, '', 1, 'phones-tablets', 'Buy Phones &amp; Tablets Online In Nigeria', 'Shop for Phones &amp; Tablets online on Onitshamarket. Discover a great selection of Phones &amp; Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Phones &amp; Tablets', 5, '', ''),
(24, '', 23, 'landline-phones', 'Buy Landline Phones Online In Nigeria', 'Shop for Landline Phones online on Onitshamarket. Discover a great selection of Landline Phones at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Landline Phones', 5, '', ''),
(25, 'fa-mobile', 23, 'mobile-phones', 'Buy Mobile Phones Online In Nigeria', 'Shop for Mobile Phones online on Onitshamarket. Discover a great selection of Mobile Phones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mobile Phones', 2, '', ''),
(26, 'fa-telephone', 25, 'basic-phones', 'Buy All Kinds Of Phones Online In Nigeria', 'Shop for All Kinds Of Phones online on Onitshamarket. Discover a great selection of All Kinds Of Phones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Basic Phones', 2, '', ''),
(27, '', 25, 'mobile-accessories', 'Buy Mobile Accessories Online In Nigeria', 'Shop for Mobile Accessories online on Onitshamarket. Discover a great selection of Mobile Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mobile Accessories', 7, '', ''),
(28, 'fa-telephone', 25, 'smartphones', 'Buy Smartphones Online In Nigeria', 'Shop for Electronics online on Onitshamarket. Discover a great selection of Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Smartphones', 2, '', ''),
(29, 'fa-mobile', 23, 'tablets', 'Buy Tablets Online In Nigeria', 'Shop for Affordable Tablets online on Onitshamarket. Discover a great selection of Affordable Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Tablets', 3, '', ''),
(30, 'fa-telephone', 29, 'all-brands', 'Buy All Brands of Tablets Online In Nigeria', 'Shop for All Brands of Tablets online on Onitshamarket. Discover a great selection of All Brands of Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'All Brands', 3, '', ''),
(31, '', 29, 'ipad', 'Buy iPad Online In Nigeria', 'Shop for iPad online on Onitshamarket. Discover a great selection of iPad at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'iPad', 3, '', ''),
(32, '', 29, 'tablet-accessories', 'Buy Tablets Accessories Online In Nigeria', 'Shop for Tablet Accessories online on Onitshamarket. Discover a great selection of Electronics at the best price -Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Tablet Accessories', 7, '', ''),
(33, 'fa-briefcase-medical', 0, 'health-beauty', 'Health &amp; Beauty Online', 'Shop for everything about Health &amp; Beauty online on Onitshamarket. Discover a great selection about Health &amp; Beauty at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Health &amp; Beauty', 8, '', ''),
(34, 'fa-gloceries', 0, 'gloceries', 'Buy your Gloceries Item Online In Nigeria', 'Shop for Gloceries Item online on Onitshamarket. Discover a great selection of Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Gloceries', 5, '', ''),
(35, 'fa-gamepad', 0, 'games-consoles', 'Buy Your Favourite Games &amp; Consoles Online In Nigeria', 'Shop for Favourite Games &amp; Consoles  online on Onitshamarket. Discover a great selection of Favourite Games &amp; Consoles at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Games &amp; Consoles', 2, '', ''),
(36, 'fa-gamepad', 35, 'accessories', 'Buy Games &amp; Consoles Accessories', 'Shop for Games &amp; Console online on Onitshamarket. Discover a great selection of Games &amp; Consoles at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Accessories', 2, '', ''),
(37, 'fa-gamepad', 35, 'board-games', 'Buy Board Games Online In Nigeria', 'Shop for Board Games online on Onitshamarket. Discover a great selection of Board Games at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Board Games', 2, '', ''),
(38, 'fa-camera', 4, 'general-category', 'Buy General Category Online', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', '[\"1\",\"2\",\"3\"]', '30ded6806f6f7f65952d5752e3ceaab6.jpg', 'General Category', 3.5, '', ''),
(39, 'fa-tv', 2, 'new-user', 'This is a good product', 'Lorem isss', '', '', 'New User', 3, '', ''),
(40, 'fa-mobile', 2, 'general-category-596842', 'Buy General Category Online', 'Hajkksksmsmsms', '', 'women_bag.jpg', 'General Category', 3.5, '', ''),
(41, 'fa-gloceries', 0, 'parent-category', 'Health & Beauty Online', 'Lorem Ipsum', '', 'women_bag1.jpg', 'Parent Category', 3.5, '', ''),
(42, 'fa-telephone', 2, 'general-category-318976', 'Buy General Category Online', 'Hello everyone.. Great', '[\"1\",\"2\"]', 'onitshamarket/images/static/a2mvaopu1zouc4ihayoi', 'General Category', 4, '', ''),
(43, 'fa-gloceries', 2, 'new-caterory-listing', 'New Category Listing Title', 'Hello everyone', '[\"2\",\"3\"]', '', 'New Caterory Listing', 3, '', ''),
(44, 'fa-gloceries', 3, 'general-category-516293', 'Aina Akingbala Store', 'Hello', '[\"1\",\"2\"]', '', 'General Category', 3.5, '', ''),
(45, 'fa-gloceries', 3, 'sokoyaphilip', 'Aina Akingbala Store', 'ejejeje ejejejeje snssjss jssss sjsjsjs jjjjjj', '[\"1\",\"2\"]', 'q9a7a0r0jkcl9z0hedjy.jpg', 'SokoyaPhilip', 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ksbfjjfjdhto4cf9fhspmpf2ld412kqs', '::1', 1548854590, 0x72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a34363030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223861336231326263346462663961323631323063336363383838353363303930223b613a373a7b733a323a226964223b733a323a223132223b733a333a22717479223b643a313b733a343a226e616d65223b733a33393a22486973656e73652033322d496e63682033324e32313736482046756c6c204844204c4544205456223b733a353a227072696365223b643a34363030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a323a223136223b733a393a22766172696174696f6e223b733a31313a22486963656e736520566964223b7d733a353a22726f776964223b733a33323a223861336231326263346462663961323631323063336363383838353363303930223b733a383a22737562746f74616c223b643a34363030303b7d7d5f5f63695f6c6173745f726567656e65726174657c693a313534383835343539303b),
('72po32tau16csaidkrs2r973ro45be77', '::1', 1548861771, 0x72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b5f5f63695f6c6173745f726567656e65726174657c693a313534383836313737313b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a3238353030303b733a31313a22746f74616c5f6974656d73223b643a343b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a333b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a3231303030303b7d733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534383835383133333b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('e2kbmkqro5ocbonbea0p8cadq3187pip', '::1', 1548885134, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534383838353133343b),
('50cju27h5gv23388ne3hvc2o2dgkh48t', '::1', 1548862360, 0x72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b5f5f63695f6c6173745f726567656e65726174657c693a313534383836313737313b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a3238353030303b733a31313a22746f74616c5f6974656d73223b643a343b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a333b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a3231303030303b7d733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313534383836323337323b733a393a226572726f725f6d7367223b733a333a226e6577223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6572726f725f6d73677c733a303a22223b),
('fabll3m3fpqfv5fnn7fhrrt4tu3j813v', '::1', 1548867562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383836373139373b),
('gd5e376e28rn3lrltj9s8j0jl4lj1040', '::1', 1549018227, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393031383232373b),
('bsfn04k9q7pgh3gkdmcdoaommdnm2mfj', '::1', 1548911341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383931313334313b),
('p76ck1lj9jtroghcuqs4s65gf3tuk581', '::1', 1548911561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383931313334313b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534383931323135313b7d72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b),
('n01cdi7qft04grme5nfnr00201jaidme', '::1', 1548944668, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383934343633323b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d737563636573737c733a3134353a225468652070726f647563742047656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d323856203132414220686173206265656e20616464656420746f20796f75722063617274207375636365737366756c6c792e223b5f5f63695f766172737c613a323a7b733a373a2273756363657373223b733a333a226f6c64223b733a383a22636865636b6f7574223b693a313534383934353236383b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('jop5kg4ob0rf4khbvekbqk74s0164vg7', '::1', 1548993254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383939333133363b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b),
('c5cnhmpocm4k7rgtn5gq9m9g47u39k0p', '::1', 1548994777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383939343735333b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b),
('sq5if6ej54qb9f6e046ctq8cmtics2m3', '::1', 1548995923, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383939353839393b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b),
('gs7u4qcshafaqhadvvmv0go9kd6m3o3g', '::1', 1549018228, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393031383232373b),
('n009tqn84i59jbc15g9evfk9c4uifjis', '::1', 1549221482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393232303935353b72656665727265645f66726f6d7c733a33363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636865636b6f7574223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a323939393b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b613a373a7b733a323a226964223b733a313a2235223b733a333a22717479223b643a313b733a343a226e616d65223b733a34363a2232312041747469726520426c61636b205065706c756d20546f702057697468205374796c69736820536c65657665223b733a353a227072696365223b643a323939393b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2235223b733a393a22766172696174696f6e223b733a313a2236223b7d733a353a22726f776964223b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b733a383a22737562746f74616c223b643a323939393b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534393232323038323b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('3b8ff0o5ie4m8pebqjiolgmg1h2nsqai', '::1', 1549270095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393237303039353b72656665727265645f66726f6d7c733a34383a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f68692d66692d73797374656d223b),
('q8mutsmkqcjehuu41okjtoa1gqesiv6c', '::1', 1549306184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393330363138343b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a35323939393b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b613a373a7b733a323a226964223b733a313a2235223b733a333a22717479223b643a313b733a343a226e616d65223b733a34373a2232312041747469726520426c61636b205065706c756d20546f702057697468205374796c69736820536c6565766573223b733a353a227072696365223b643a323939393b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2235223b733a393a22766172696174696f6e223b733a313a2236223b7d733a353a22726f776964223b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b733a383a22737562746f74616c223b643a323939393b7d733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534393237313032313b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('jv0jt36n8rdsmpgvrc2ss91a8hv8snc3', '::1', 1549306285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393330363138343b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a35323939393b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b613a373a7b733a323a226964223b733a313a2235223b733a333a22717479223b643a313b733a343a226e616d65223b733a34373a2232312041747469726520426c61636b205065706c756d20546f702057697468205374796c69736820536c6565766573223b733a353a227072696365223b643a323939393b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2235223b733a393a22766172696174696f6e223b733a313a2236223b7d733a353a22726f776964223b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b733a383a22737562746f74616c223b643a323939393b7d733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313534393330363836353b733a393a226572726f725f6d7367223b733a333a226e6577223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6572726f725f6d73677c733a303a22223b);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `value` float NOT NULL,
  `multiple` tinyint(1) NOT NULL DEFAULT '0',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `error_logs`
--

DROP TABLE IF EXISTS `error_logs`;
CREATE TABLE IF NOT EXISTS `error_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `error_action` varchar(255) NOT NULL,
  `error_message` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

DROP TABLE IF EXISTS `favourite`;
CREATE TABLE IF NOT EXISTS `favourite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

DROP TABLE IF EXISTS `general_settings`;
CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(255) NOT NULL,
  `description` tinytext NOT NULL,
  `is_live` int(11) NOT NULL DEFAULT '0',
  `enabled_ips` varchar(255) NOT NULL,
  `maintenance_text` text NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='General Settings for the site';

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `keywords`, `description`, `is_live`, `enabled_ips`, `maintenance_text`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`) VALUES
(1, 'Buy, Sell, fashion wears, electronics gadget', 'Define the type of heel the shoe has  Example: e.g. Block, Cuban, Flared, Mid, Stiletto', 1, '127.0.0.1, 127.0.0.2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum. etc etc etc', 'onitshamarket', 'onitshamarket', 'onitshamarket', 'onitshamarket');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_setting`
--

DROP TABLE IF EXISTS `homepage_setting`;
CREATE TABLE IF NOT EXISTS `homepage_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Category Display Settings for Homepage';

--
-- Dumping data for table `homepage_setting`
--

INSERT INTO `homepage_setting` (`id`, `category_id`, `position`, `content`, `status`) VALUES
(2, 6, 1, '[\n  {\n    \"img\": \"da6a510198317078e2395a753ef3b73d.jpg\",\n    \"position\": \"bottom_banner\",\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\n  },\n  {\n    \"img\": \"f.jpg\",\n    \"position\": \"top1\",\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\n  },\n  {\n    \"img\": \"f.jpg\",\n    \"position\": \"top2\",\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\n  },\n  {\n    \"img\": \"5f4bb83f54b08f179501ee9a64819056.jpg\",\n    \"position\": \"bottom1\",\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\n  },\n  {\n    \"img\": \"c80901a19624f054737b10a7139011a0.jpg\",\n    \"position\": \"bottom2\",\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\n  },\n  {\n    \"img\": \"55835983eb197061d44f8c812be202f2.jpg\",\n    \"position\": \"bottom3\",\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\n  }\n]', 'active'),
(3, 4, 2, '[\r\n  {\r\n    \"img\": \"da6a510198317078e2395a753ef3b73d.jpg\",\r\n    \"position\": \"bottom_banner\",\r\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\r\n  },\r\n  {\r\n    \"img\": \"f.jpg\",\r\n    \"position\": \"top1\",\r\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\r\n  },\r\n  {\r\n    \"img\": \"f.jpg\",\r\n    \"position\": \"top2\",\r\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\r\n  },\r\n  {\r\n    \"img\": \"5f4bb83f54b08f179501ee9a64819056.jpg\",\r\n    \"position\": \"bottom1\",\r\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\r\n  },\r\n  {\r\n    \"img\": \"c80901a19624f054737b10a7139011a0.jpg\",\r\n    \"position\": \"bottom2\",\r\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\r\n  },\r\n  {\r\n    \"img\": \"55835983eb197061d44f8c812be202f2.jpg\",\r\n    \"position\": \"bottom3\",\r\n    \"link\": \"http://localhost/project001/tv-and-electronics\"\r\n  }\r\n]', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `amount` varchar(255) NOT NULL,
  `invoice_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`) VALUES
(1, 'ALABAMA'),
(2, 'ALASKA'),
(3, 'X'),
(4, 'XL'),
(5, 'XXL'),
(6, 'XXXL'),
(7, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_code` bigint(10) NOT NULL,
  `tracking_id` bigint(20) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `commission` decimal(10,0) NOT NULL DEFAULT '0',
  `delivery_charge` decimal(10,0) NOT NULL DEFAULT '0',
  `billing_address_id` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `product_variation_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` text NOT NULL,
  `active_status` varchar(255) NOT NULL,
  `seller_wallet` int(11) NOT NULL DEFAULT '0',
  `agent` int(11) NOT NULL DEFAULT '0',
  `paid_amount` decimal(10,2) DEFAULT '0.00',
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `payment_created` varchar(255) DEFAULT NULL,
  `payment_modified` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Orders Table';

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

DROP TABLE IF EXISTS `page_contents`;
CREATE TABLE IF NOT EXISTS `page_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `content`, `type`) VALUES
(2, 'Welcome to Onitshamarket.com, your reliable online marketplace.\r\n\r\nThe web site identified by the uniform resource locator www.onitshamarket.com (the “Site”) is provided by Internet Onitshamarket Limited (“Onitshamarket.com”) as a service to our customers.\r\n\r\nThis Security and Privacy Policy (the “Agreement” or “Policy”) is entered into between you as a registered user of the site (“Registered User”) and Onitshamarket.com.\r\n\r\nThe security of your personal information is very important to us and we value your trust highly. We will not sell or loan your personal information to a third party under any circumstances. We will work hard to protect the security and privacy of any personal information you provide to us and will only use such information as we have described herein. By your use and access of the Site, you accept this Security and Privacy Policy.\r\nWhat personal information do we collect?\r\n\r\nYou may choose to use or access our Site without revealing any personal and transactional information about yourself, but you will need to register and create an account in order to make a purchase or take advantage of certain features and functions, including, but not limited to, “My Contacts”. If you provide us with your information, you consent to the transfer and storage of the information on our server located in United States of America (“USA.”).\r\n\r\nAs set forth in more detail below, Onitshamarket.com collects personal information that you provide when using the Site. This information includes your first and last name, email address, a password and other information required when you create your Onitshamarket.com account or when you participate in or conduct surveys and contests via the Site, email, or other media of Onitshamarket.com. In order to protect your confidentiality and verify your identity, we may ask you to confirm your personal information when you contact our Customer Service Department.\r\n\r\nIn addition to the personal information we may collect and process during registration and any surveys, we also collect, store and process the following information about our users:\r\n1. Purchase Information\r\n\r\nWhen you make a purchase from Onitshamarket.com, we collect your name and payment method information. When you create an account at Onitshamarket.com, you can choose to save your billing information in “My Profile.” You can also save one or more shipping addresses in your Onitshamarket.com Address Book.\r\n2. Services Account Information\r\n\r\nWe collect personal information from users who wish to use any of the Onitshamarket.com services, including but not limited to, Onitshamarket.com’s Transaction Platform. In order to use these services you must provide your email address and password or create an account at Onitshamarket.com.\r\n3. Cookies and Other Computer Information\r\n\r\nWhen you visit the Site, you will be assigned a permanent “cookie” (a small text file) to be stored on your computer’s hard drive. The purpose of the cookie is to identify you when you visit the Site so that we can enhance and customize your online purchasing experience.\r\n\r\nYou can choose to browse on the Site without cookies, but without these identifier files you will not be able to complete a purchase or take advantage of certain features of the Site. These features include storing your shopping cart for later use and providing a more personalized future shopping experience. Each browser is different, so check the “Help” menu of your browser to learn how to change your cookie preferences.\r\n\r\nWe also collect certain technical information from your computer each time you request a page during a visit to the Site. This information may include your Internet Protocol (IP) address, your computer’s operating system, browser type and the address of a referring web site, if any. We collect this information to enhance the quality of your experience during your visit to the Site and will not sell or loan this information to any third parties.\r\n\r\nWe also contract with third parties to provide us with data collection and reporting services regarding our customers’ activities on the Site and to track and measure the performance of our marketing efforts. These third parties may use cookies and may receive anonymous information about your browsing and buying activity on this Site. None of your personally identifiable information (such as your name, address, email address, etc.) will be received by or shared with these third parties.\r\n4. Publishing Information\r\n\r\nWhen you submit any information on the Site during your use or access, including, but not limited to, information on the Onitshamarket.com blog, the rating system, or product catalog, you are deemed to have given your permission to Onitshamarket.com to publish such information, and Onitshamarket.com and the Site hereby enjoy an irrevocable, worldwide and royalty-free, sub-licensable license to use all information provided by such user to exercise the copyright, compilation, database and publicity rights any user has in such material or information, in any media form.\r\nHow we use your personal information?\r\n\r\nWe do not sell, loan, trade or exchange any user’s personal information without such user’s consent. The information we collect on the Site may be used to enhance your shopping experience in the following ways:\r\n\r\nDeliver merchandise and services that you purchase online; Register you as a member of Onitshamarket.com; Prevent fraud; Confirm your orders; Resolve disputes and prevent prohibited and illegal activities; Enforce our Terms of Use and related agreements; Respond to your customer-service inquiries or requests; Communicate great values and featured items to you; Find and stock the products you want; and Customize, measure and improve our services and your purchase experience.\r\nWhen and with whom can we share your personal information?\r\n\r\nWe do not sell or loan your personal information to any third parties under any circumstances. We will share your personal customer information only with our agents, representatives, service providers, and contractors for limited purposes, including, but not limited to, fulfilling customer orders, offering certain products and services in connection with the Site, communicating to customers, providing customer service, storing, sharing and retrieving customers’ photo images in our Photo Center, enhancing and improving clients’ purchase experience, enabling access to our partners’ web sites, providing a personalized purchase experience and preventing fraud and completing payment method processing.\r\n\r\nAside from the purposes described above, we will not share your personal information with any other third parties unless we have your express permission or there are special circumstances, such as when Onitshamarket.com is required by the government, law enforcement body, obligee whose legitimate right has been injured, subpoena or other legal document to share such information, or if we believe it to be reasonably necessary to protect the safety of any person; to address fraud, security or technical issues; or to protect Onitshamarket.com’s rights or property. We may also share aggregated demographic and statistical information with our partners. This is not linked to any personal information that can identify any individual person.\r\nHow can you control the use of your personal information?\r\n\r\nYou can modify or delete your personal information at any time. Simply go to My Account. Log in with your ID and password, then edit or delete your personal information at your discretion.\r\nHow can we protect the security of your personal information?\r\n\r\nYour personal information is protected by the password you created when you created an account on the Site (or another password you chose after changing a previous password). Please keep this password confidential. No Customer Service Associate or any other representative of Onitshamarket.com will ever ask you for your password. The confidentiality of your password is yours to protect. You may change it at anytime by going to My Account. Log in with your email address and password, then click “Modify Details, Email & Password” and enter a new password.\r\nMinors\r\n\r\nOnitshamarket.com does not intentionally collect personal information about minors or other persons without full civil conduct capacity, but based on the properties of Internet, there is no way for Onitshamarket.com and the Site to distinguish the age or capacity of the users. By accepting this Agreement through your use or access of the Site, you certify that you are a person over 18 years old with full capacity and ability to form a legally binding contract in the jurisdiction in which you are resident or in which you are entering into this Agreement. If you do not agree to (or cannot comply with) any of the terms of this Agreement, do not use the Site.\r\n\r\nMeanwhile, if a minor or other person does not have full civil conduct capacity and has provided personal information to us without the proper consent of their parent or legal guardian, such parent or legal guardian should contact us to remove such personal information.\r\nSecurity\r\n\r\nYour information is stored on our servers located in the USA, and we adopt lots of tools, means and technologies to protect them against unauthorized access, use and disclosure. For instance, we use a technology called Secure Sockets Layer (SSL), which encrypts (or encodes) sensitive information before it is sent over the Internet. However, we are limited in our efforts by the technologies currently available, and no data transmission or storage over Internet can be guaranteed to be perfectly safe. Therefore, although we work very hard to protect your information and privacy, we do not promise or guarantee that your information will always be private and safe.\r\nGeneral\r\n\r\nWe realize that making purchases on the Site, or any other web site, requires trust on your part. We value your trust very highly and pledge to you, our clients that we will work hard to protect the security and privacy of any personal information you provide to us and that your personal information will only be used as set forth in this Policy. This includes your name, address, phone number, email address or checking account information, in addition to any other personal information that can be linked to you, personally.\r\n\r\nOnitshamarket.com may provide links to certain third party web sites. This Security and Privacy Policy applies only to activities conducted and personal information collected on the Site. Other web sites may have their own policies regarding privacy and security. We encourage you to review the privacy policies on these sites before you use and access them. You are solely responsible for your use and access of other web sites.\r\n\r\nOnitshamarket.com will obtain your consent before allowing the download of any data from the Site, and Onitshamarket.com will not automatically download any data to your computer system. Once you consent to the initial download of any data, you may receive automatic updates or patches pertaining to such software. You understand and agree that any material, including but not limited to downloaded software, required or automated updates, modifications, reinstallations, or software otherwise obtained through the use of the Site is done at your own discretion and risk and that you will be solely responsible for any damages to your computer system or loss of data that may result from any such material.\r\n\r\nOnitshamarket.com reserves the right to update or modify this Security and Privacy Policy at any time without prior notice to you. If Onitshamarket.com makes a change that, in Onitshamarket.com’s sole discretion, is material, Onitshamarket.com will notify you via e-mail to the email address associated with your account. Your use of the Site following any such change constitutes your unconditional agreement to follow and be bound by the Security and Privacy Policy as amended. Onitshamarket.com may transfer this Policy and all or part of its rights, obligations and interests to any party or entity in its sole discretion; however, a User may not assign its rights, obligations and interests under this Policy to any party or entity.\r\n\r\nTerms which have not been defined or stipulated in this Agreement shall be interpreted in accordance with the definition(s) or provision(s) of the Terms of Use of Onitshamarket.com. ', 'privacy');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(255) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `purchaser_id` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `settings` text NOT NULL,
  `notes` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `settings`, `notes`, `status`) VALUES
(1, 'Payment on Delivery', '', 'Important information on this payment method:\n1. Payment must be made before opening a package;\n2. Once the seal is broken, item can only be returned if it is damaged, or has any missing item(s);\n3. Please ensure you have the exact amount for your order.\n\n**Please note, we will never ask you to make payment via SMS or email.**\n', 1),
(2, 'Interswitch Webpay', '[\"secret_key:sk_test_j1NHfDoinTtxm25PyGNuV4xw\",\"publishable_key:pk_test_nod5swtRu9mKvMZB28838BY8\"]', 'We are going to redirect you to our secured online platform, where you will be able to pay with your Naira Mastercard, Visa or Verve cards.\n\nPlease have your phone ready for SMS token to complete payment.\nDo not hesitate to call us on 08070994845 if you have any question.\n\n**Please note, we will never ask you to make payment via SMS or email.**', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

DROP TABLE IF EXISTS `payouts`;
CREATE TABLE IF NOT EXISTS `payouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(50) NOT NULL,
  `amount` decimal(10,0) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL,
  `date_requested` datetime NOT NULL,
  `status` varchar(255) NOT NULL COMMENT 'pending/processing/completed',
  `approved_by` int(11) NOT NULL,
  `date_approved` varchar(50) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `remark` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_address`
--

DROP TABLE IF EXISTS `pickup_address`;
CREATE TABLE IF NOT EXISTS `pickup_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `phones` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `available_area` varchar(255) NOT NULL,
  `charge` int(11) NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_address`
--

INSERT INTO `pickup_address` (`id`, `title`, `phones`, `emails`, `address`, `available_area`, `charge`, `enable`) VALUES
(3, 'Aina Akingbala Store', '08169254598,08070994845', 'philo4u2c@gmail.com', '530A, Aina Akingbala Street, Ikeja', '[\"1\",\"2\"]', 500, 1),
(4, 'Lekki Store', '08169254598,08070994845', 'philo4u2c@gmail.com', '13A Old Admiralty way, Lekki Phase 1.', 'null', 700, 1),
(5, '', '', '', '', 'null', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sku` varchar(55) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL COMMENT 'Refrence Id from Brand Table',
  `model` varchar(255) NOT NULL,
  `main_colour` varchar(255) NOT NULL,
  `product_description` longtext NOT NULL,
  `youtube_id` varchar(255) NOT NULL,
  `in_the_box` text NOT NULL,
  `highlights` text NOT NULL,
  `product_line` varchar(255) NOT NULL,
  `colour_family` varchar(255) NOT NULL,
  `main_material` varchar(255) NOT NULL,
  `dimensions` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `attributes` text NOT NULL,
  `product_warranty` text NOT NULL,
  `warranty_type` varchar(255) NOT NULL,
  `warranty_address` text NOT NULL,
  `certifications` varchar(255) NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `report` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `category_id`, `sku`, `product_name`, `brand_name`, `model`, `main_colour`, `product_description`, `youtube_id`, `in_the_box`, `highlights`, `product_line`, `colour_family`, `main_material`, `dimensions`, `weight`, `attributes`, `product_warranty`, `warranty_type`, `warranty_address`, `certifications`, `product_status`, `report`, `views`, `created_on`) VALUES
(1, 20, 26, '32697145', 'A product in Accessories Section', 'Apple', 'Generic Product', 'red', 'Helloooo', '', '', '', 'Oslo Info', '[\"green\",\"red\"]', 'plume', '13 X 45 X 30', '1000', '[]', '', '', '', '', 'approved', 0, 5, '2019-01-26 21:26:55'),
(2, 3, 18, '24971385', 'Generic 2pcs DC-DC CC CV Buck Converter Step-down Power Supply Module 7-32V To 0.8-28V 12AB', 'Apple', 'Generic Product', 'green', 'Hello everyone', '', 'Hello everyone', 'Hello everyone', 'Schoolville Limited', '[\"yellow\"]', 'textile', '13 X 45 X 30', '7500', '[]', '', '', '', '', 'approved', 0, 5, '2019-01-27 12:29:22'),
(3, 3, 19, '49827365', 'TCL 32&quot; FHD/HD Digital Flat TV', 'others', 'Generic Product', 'black', '', '', '', '', 'Schoolville Limited', '[\"green\",\"yellow\",\"black\"]', 'synthetic', '', '7500', '[]', '', '', '', '', 'approved', 0, 5, '2019-01-28 15:19:45'),
(4, 3, 27, '21874953', 'Swidu 2 In 1 Luxury Brand Gold-plated Watch &amp; Gold-plated Bracelet', 'others', 'Generic Product', 'green', '', '', '', '', 'Schoolville Limited', '', 'textile', '', '', '[]', '', '', '', '', 'approved', 0, 5, '2019-01-28 16:02:56'),
(5, 3, 14, '91842536', '21 Attire Black Peplum Top With Stylish Sleeves', 'others', 'Generic Product', 'purple', '<div class=\"prod_description\"><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, <br></p><p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549030146/onitshamarket/product/description/sso3mdwhrmtjuu41fiwd.jpg\" xss=\"removed\"><br></p><p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>', '', 'In the box<br>', '<p>Hey </p><ol><li>Check it out</li><li>You gonna love it<br></li></ol>', 'Schoolville Limited', '[\"green\",\"red\",\"yellow\",\"red\"]', 'plume', '13 X 45 X 30', '1000', '[]', 'Product warranty<br>', '[]', 'Warranty address<br>', '[]', 'approved', 0, 2, '2019-02-01 14:14:04'),
(6, 3, 14, '13847695', '21 Attire Black Peplum Top With Stylish Sleeve', 'others', '', 'yellow', '<div class=\"prod_description\"><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and <br />\r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br />\r\n text ever since the 1500s, when an unknown printer took a galley of <br />\r\ntype and scrambled it to make a type specimen book. It has survived not <br />\r\nonly five centuries, but also the leap into electronic typesetting, <br />\r\nremaining essentially unchanged.</p><p><img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549048621/onitshamarket/product/description/aybzzmvqwdggkd71qc3a.jpg\" style=\"width: 25%;\"><br></p><p> It was popularised in the 1960s with <br />\r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more<br />\r\n recently with desktop publishing software like Aldus PageMaker <br />\r\nincluding versions of Lorem Ipsum.</p></div>', '', '', '&lt;p&gt;It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Good Fabric&lt;/li&gt;&lt;li&gt;Limen&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', 'Schoolville Limited', '[]', 'natural fibre', '13 X 45 X 30', '7500', '[]', '', '', '', '', 'pending', 0, 0, '2019-02-01 19:21:47'),
(7, 3, 40, '87516493', 'Generic 2pcs DC-DC CC CV Buck Converter Step-down Power Supply Module 7-32V To 0.8-28V 12AB', 'others', 'Generic Product', 'yellow', '<div class=\"prod_description\"><p>Hello Guys,</p><p>This is gonna be lovely.</p><p><img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549187335/onitshamarket/product/description/p50mn1wawtva8bsobvnk.jpg\" style=\"width: 25%;\"><br></p><p>What is happening here?<br></p></div>', '', '&lt;p&gt;Nothing serious is the box. Contact me for more info...&lt;br&gt;&lt;/p&gt;', '&lt;ol&gt;&lt;li&gt;One&lt;/li&gt;&lt;li&gt;Two&lt;/li&gt;&lt;li&gt;Three&lt;/li&gt;&lt;li&gt;Four&lt;/li&gt;&lt;li&gt;Five&lt;/li&gt;&lt;li&gt;Six&lt;/li&gt;&lt;li&gt;Seven&lt;br&gt;&lt;/li&gt;&lt;/ol&gt;', 'Schoolville Limited', '[\"green\",\"yellow\",\"black\"]', 'silicon', '74X12X56', '80', '[]', '&lt;p&gt;No product warranty for this item.&lt;br&gt;&lt;/p&gt;', '[\"Repair by vendor\"]', '', '[]', 'pending', 0, 0, '2019-02-03 09:52:41'),
(9, 3, 14, '72916834', 'Product in Hi Fi System', 'others', 'Generic Product', '', '<div class=\"prod_description\"><div><b>What is Lorem Ipsum? <br></b></div><div><b><br></b><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p><p><br></p>\r\n</div><div><b>Why do we use it? <br></b></div><div><b><br></b><p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div></div>', '', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It <br />\r\nhas roots in a piece of classical Latin literature from 45 BC, making it<br />\r\n over 2000 years old. </p><p>Richard McClintock, a Latin professor at <br />\r\nHampden-Sydney College in Virginia, looked up one of the more obscure <br />\r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through <br />\r\nthe cites of the word in classical literature, discovered the <br />\r\nundoubtable source.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It <br />\r\nhas roots in a piece of classical Latin literature from 45 BC, making it<br />\r\n over 2000 years old. Richard McClintock, a Latin professor at <br />\r\nHampden-Sydney College in Virginia, looked up one of the more obscure <br />\r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through <br />\r\nthe cites of the word in classical literature, discovered the <br />\r\nundoubtable source.</p>', 'Schoolville Limited', '[\"pink\"]', 'resin', '1260', '1000', '[]', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It <br />\r\nhas roots in a piece of classical Latin literature from 45 BC, making it<br />\r\n over 2000 years old. </p><p>Richard McClintock, a Latin professor at <br />\r\nHampden-Sydney College in Virginia, looked up one of the more obscure <br />\r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through <br />\r\nthe cites of the word in classical literature, discovered the <br />\r\nundoubtable source.</p>', '[\"Repair by vendor\"]', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It <br />\r\nhas roots in a piece of classical Latin literature from 45 BC, making it<br />\r\n over 2000 years old. </p><p>Richard McClintock, a Latin professor at <br />\r\nHampden-Sydney College in Virginia, looked up one of the more obscure <br />\r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through <br />\r\nthe cites of the word in classical literature, discovered the <br />\r\nundoubtable source.</p>', '[\"AFRDI - Australian Furnishing Research & Development Institute\",\"ASTM Certified\",\"Australian Made\"]', 'pending', 0, 0, '2019-02-03 11:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

DROP TABLE IF EXISTS `product_gallery`;
CREATE TABLE IF NOT EXISTS `product_gallery` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `seller_id` bigint(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured_image` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `seller_id`, `image_name`, `featured_image`, `created_at`) VALUES
(1, 1, 20, 'd06e04d94bdf0ca48f9ab23d07414482.jpg', 1, '2019-01-26 20:26:55'),
(2, 1, 20, 'f4bd84537b5bfc06acc566722734d770.jpg', 0, '2019-01-26 20:26:55'),
(3, 2, 3, 'f949e9fa705d70d78ef116bb4abf6f58.jpg', 1, '2019-01-27 11:29:22'),
(4, 3, 3, '1706380a5ca20b27ce02562e62890a6c.jpg', 1, '2019-01-28 14:19:45'),
(5, 3, 3, '40cdf4a23aa84cbfcb7d48eb1951309d.jpg', 0, '2019-01-28 14:19:45'),
(6, 4, 3, '40cdf4a23aa84cbfcb7d48eb1951309d.jpg', 1, '2019-01-28 15:02:56'),
(7, 4, 3, 'd06e04d94bdf0ca48f9ab23d07414482.jpg', 0, '2019-01-28 15:02:56'),
(8, 6, 3, 'bqabhcn0bikawxlkkb47.jpg', 1, '2019-02-01 18:21:47'),
(9, 6, 3, 'm8ovzapjwt7xzw8xwucx.jpg', 0, '2019-02-01 18:21:47'),
(10, 7, 3, 'lz5icex9uixibxtcdpxp.jpg', 1, '2019-02-03 08:52:42'),
(11, 5, 3, 'ogp5uynomykm58pejirl', 1, '2019-02-03 16:55:10'),
(12, 5, 3, 't05fgzi1v2lspiocxftl.jpg', 1, '2019-02-03 16:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

DROP TABLE IF EXISTS `product_rating`;
CREATE TABLE IF NOT EXISTS `product_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product review and rating';

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `display_name` varchar(55) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

DROP TABLE IF EXISTS `product_variation`;
CREATE TABLE IF NOT EXISTS `product_variation` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `variation` varchar(255) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `quantity` varchar(55) NOT NULL,
  `sale_price` varchar(55) NOT NULL,
  `discount_price` varchar(55) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='Product variation - Prices for the product.';

--
-- Dumping data for table `product_variation`
--

INSERT INTO `product_variation` (`id`, `product_id`, `variation`, `sku`, `isbn`, `quantity`, `sale_price`, `discount_price`, `start_date`, `end_date`) VALUES
(1, 1, 'Variatiom', '12333', '12333', '12', '50000', '', '', ''),
(2, 2, 'Green', '1234', '1234444', '12', '75000', '', '', ''),
(3, 3, 'Black', '12452455', '012345687', '12', '59999', '47100', '', ''),
(4, 4, 'Green', '12345', '10555544', '13', '98000', '70000', '', ''),
(5, 5, '6', '123444', '123444', '10', '5590', '2999', '', ''),
(6, 5, '8', '123400', '11111', '20', '5590', '2999', '', ''),
(7, 5, '10', '123401', '12400', '15', '5590', '2999', '', ''),
(8, 5, '12', '13401', '12401', '11', '5590', '2999', '', ''),
(9, 5, '14', '123322', '112233', '12', '5590', '2999', '', ''),
(10, 5, '16', '123455', '124455', '10', '25590', '2999', '', ''),
(11, 6, '2', '12345', '12234', '21', '5590', '2999', '', ''),
(12, 6, '4', '78999', '451222', '10', '5590', '2999', '', ''),
(13, 6, '6', '4551', '1255444', '15', '5590', '2999', '', ''),
(14, 7, '2', '123456', '123456', '12', '59999', '2999', '', ''),
(16, 9, '2', '1234', '75115', '30', '30000', '18500', '', ''),
(17, 5, '18', '0548542', '0147521', '5', '5590', '4000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

DROP TABLE IF EXISTS `qna`;
CREATE TABLE IF NOT EXISTS `qna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` bigint(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `display_name` varchar(255) NOT NULL DEFAULT 'an intended buyer',
  `status` varchar(20) NOT NULL,
  `upvotes` int(11) DEFAULT NULL,
  `qtimestamp` datetime NOT NULL,
  `atimestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `pid`, `question`, `answer`, `display_name`, `status`, `upvotes`, `qtimestamp`, `atimestamp`) VALUES
(1, 3, 'Nothing much to say now', '', 'intended buyer', 'approved', 4, '2019-01-29 00:00:00', '2019-01-30 09:45:14'),
(2, 1, 'Does this comes with System Manual?', '', 'An Intending Buyer', 'approved', NULL, '2019-02-01 03:53:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed`
--

DROP TABLE IF EXISTS `recently_viewed`;
CREATE TABLE IF NOT EXISTS `recently_viewed` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `product_ids` text NOT NULL,
  `viewed_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recently_viewed`
--

INSERT INTO `recently_viewed` (`id`, `user_id`, `product_ids`, `viewed_date`) VALUES
(1, 3, '[\"1\",\"2\",\"5\",\"3\",\"12\",\"6\",\"7\",\"4\",\"47\",\"48\",\"41\",\"8\"]', '2018-12-06 06:36:52'),
(2, 2, '[\"7\",\"4\"]', '2018-12-06 11:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `legal_company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `vat_file` varchar(255) DEFAULT NULL,
  `license_to_sell` tinyint(1) NOT NULL DEFAULT '0',
  `platform_selling` varchar(255) NOT NULL COMMENT 'other platform the seller sells',
  `own_brand` tinyint(1) NOT NULL DEFAULT '0',
  `main_category` varchar(50) DEFAULT NULL,
  `no_of_products` varchar(50) NOT NULL,
  `product_condition` varchar(255) NOT NULL,
  `seller_phone` varchar(255) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `account_type` varchar(255) NOT NULL,
  `bvn` varchar(10) DEFAULT NULL,
  `balance` decimal(10,0) NOT NULL DEFAULT '0',
  `terms` varchar(255) NOT NULL,
  `company_pic` varchar(255) DEFAULT NULL,
  `date_applied` datetime NOT NULL,
  `disable_products` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='Sellers Main Table';

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `uid`, `legal_company_name`, `address`, `tin`, `reg_no`, `vat_file`, `license_to_sell`, `platform_selling`, `own_brand`, `main_category`, `no_of_products`, `product_condition`, `seller_phone`, `bank_name`, `account_name`, `account_number`, `account_type`, `bvn`, `balance`, `terms`, `company_pic`, `date_applied`, `disable_products`) VALUES
(1, 3, 'Schoolville Limited', 'my address', '71718181', 'Ng83833', 'There was an error', 0, '', 0, 'Gloceries', '', '', '08169254598', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '2820226778', 'Saving', '7262626228', '322000', 'Here is my information... Nothing serious... Thank you', NULL, '0000-00-00 00:00:00', 0),
(8, 4, 'Sokoya Adeniji Company', '530A, Aina Akingbala Street, Ikeja', '717', NULL, NULL, 1, '', 1, 'Computers &amp; Accessories', '21-50', '', '', NULL, NULL, NULL, '', NULL, '0', '', NULL, '0000-00-00 00:00:00', 0),
(9, 6, 'Woyong Okey Company', '530A, Aina Akingbala Street, Ikeja', '71716', NULL, NULL, 1, '', 1, 'Electronics', '21-50', '', '', NULL, NULL, NULL, '', NULL, '0', '', NULL, '0000-00-00 00:00:00', 0),
(10, 8, 'JeffDev', 'No 13 Dan Ngozi Iyio Street', '4949644', NULL, NULL, 1, '', 1, 'Computers &amp; Accessories', '51-100', '', '', NULL, NULL, NULL, '', NULL, '0', '', NULL, '0000-00-00 00:00:00', 0),
(11, 9, 'James Integrated Services', '15A Ajegunle Street Ita-Oluwo, Ikorodu, Lagos State.', '00447762', '', 'There was an error', 1, '', 0, 'Electronics', '', '', '', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '0151820365', '', '0122665544', '0', '', NULL, '2018-11-14 12:13:24', 0),
(13, 10, 'Sokoya Adeniji Company', 'hshshs shshss', '717', NULL, NULL, 0, '', 0, 'Cameras & Electronics', '51-100', 'refurbished', '', NULL, 'Sokoya Adeniji Philip', '744455522222', 'savings', NULL, '0', '', NULL, '2018-12-03 17:46:39', 0),
(14, 12, 'Sokoya Adeniji Company', 'hshshsl cjcjjsjsjs sjsjsjsj', '00447762', '', NULL, 0, '', 0, 'TVs & Electronics', '51-100', 'refurbished', '', NULL, 'Sokoya Adeniji Philip', '744552221112', 'savings', NULL, '0', '', NULL, '2018-12-04 08:29:23', 0),
(17, 15, 'Schoolville Limited', '530A Aina Akingbala Street', '75551122', '', NULL, 0, '', 0, 'Cameras & Electronics', '1-50', 'refurbished', '7555122', NULL, 'Sokoya Adeniji Philip', '744552221112', 'savings', NULL, '0', '', NULL, '2018-12-06 09:21:32', 0),
(21, 20, 'Oslo Info', 'D6, Ajegunle Ita oluwo', '7551745512000', '', NULL, 0, '', 0, 'TVs & Electronics', '1-50', 'new', '08169254598', 'Guaranty Trust Bank Plc', 'Olaleke Adeola', '744455522222', 'current', NULL, '0', '', NULL, '2019-01-26 07:52:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_notification_message`
--

DROP TABLE IF EXISTS `sellers_notification_message`;
CREATE TABLE IF NOT EXISTS `sellers_notification_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers_notification_message`
--

INSERT INTO `sellers_notification_message` (`id`, `seller_id`, `title`, `content`, `is_read`, `created_on`) VALUES
(1, 10, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 0, '2019-01-25 20:56:58'),
(2, 10, 'Your account has been suspended', 'This is to notify you that your account has been suspended. <br />Contact support<br /> Regards.', 0, '2019-01-25 20:57:04'),
(3, 10, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 0, '2019-01-25 20:57:06'),
(5, 20, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 1, '2019-01-26 08:08:47'),
(6, 20, 'Your product listing has been deleted', 'This is to notify you the product with ( Swifty Sharp Knife Sharpener- Lemon ) has been deleted.  <br /> Contact support if you are not happy with this action. <br /> Regards.', 1, '2019-01-26 08:49:12'),
(7, 20, 'Your product listing has been deleted', 'This is to notify you the product with ( Royal 32 INCHES LED TELEVSION RTV32DM1000 ) has been deleted.  <br /> Contact support if you are not happy with this action. <br /> Regards.', 1, '2019-01-26 18:09:09'),
(8, 20, 'Your product listing has been deleted', 'This is to notify you the product with ( A product in Accessories Section ) has been deleted.  <br /> Contact support if you are not happy with this action. <br /> Regards.', 1, '2019-01-26 19:56:16'),
(9, 3, 'Your product listing has been approved', 'This is to notify you the product with ( TCL 32&quot; FHD/HD Digital Flat TV ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/tcl-32-quot-fhd-hd-digital-flat-tv-3//\'>Click here to see it live.</a><br /> Regards.', 1, '2019-01-28 15:23:22'),
(10, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Swidu 2 In 1 Luxury Brand Gold-plated Watch &amp; Gold-plated Bracelet ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/swidu-2-in-1-luxury-brand-gold-plated-watch-amp-gold-plated-bracelet-4//\'>Click here to see it live.</a><br /> Regards.', 1, '2019-01-28 16:04:46'),
(11, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Generic 2pcs DC-DC CC CV Buck Converter Step-down Power Supply Module 7-32V To 0.8-28V 12AB ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/generic-2pcs-dc-dc-cc-cv-buck-converter-step-down-power-supply-module-7-32v-to-0-8-28v-12ab-2//\'>Click here to see it live.</a><br /> Regards.', 1, '2019-01-28 16:04:51'),
(12, 20, 'Your product listing has been approved', 'This is to notify you the product with ( A product in Accessories Section ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/a-product-in-accessories-section-1//\'>Click here to see it live.</a><br /> Regards.', 0, '2019-01-28 16:04:56'),
(13, 3, 'Your product listing has been approved', 'This is to notify you the product with ( 21 Attire Black Peplum Top With Stylish Sleeve ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/21-attire-black-peplum-top-with-stylish-sleeve-5//\'>Click here to see it live.</a><br /> Regards.', 0, '2019-02-03 18:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `se_sessions`
--

DROP TABLE IF EXISTS `se_sessions`;
CREATE TABLE IF NOT EXISTS `se_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `se_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_sessions`
--

INSERT INTO `se_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('pgnfm40tgk346l84oo1irjto34d2kvnu', '::1', 1547138058, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('ifvnpfredeo1s7gjompk5254vq3i00i3', '::1', 1547538352, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('nu8h9lnicpqqes2g6rbp9j74i2nbds50', '::1', 1547652620, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('l651o9luovmif40067tnvm03u40ms57e', '::1', 1547712353, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b63617465676f72795f69647c733a313a2232223b),
('e0fkat9754cs8uhned1d37raaicd4qf0', '::1', 1547937444, ''),
('pb0d7nf7em4ft5orc8j51rinclua7454', '::1', 1548020081, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('ped8hfes2jl3cetmqj6acpp9n3il4h36', '::1', 1548235046, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('crvgeh6f8036n68p2rd1hel1bpip59sk', '127.0.0.1', 1548242291, ''),
('iqmhfosgbb3gsvmk70ql53g4ibca47ln', '::1', 1548416972, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('fc5m0oe7hppgtmr0k31jrn3sj71mqbic', '127.0.0.1', 1548430584, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('ld7hivc6v4kl8vo4fruu87opvfn82af3', '::1', 1548538039, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b5f5f63695f766172737c613a313a7b733a31313a22737563636573735f6d7367223b733a333a226f6c64223b7d),
('rrg79bmpgk5ooprkhels2fo1oq43acs9', '::1', 1549185732, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b63617465676f72795f69647c733a323a223132223b),
('je7llo34rqpausga7o0snr04cnhqc5hn', '::1', 1549018778, ''),
('s0qlhn0bs6o92jij93e7i70171atisfd', '127.0.0.1', 1549186684, ''),
('eiquok3qec2osgplub0agtl487ftfhn9', '127.0.0.1', 1549217918, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `img_link`, `status`) VALUES
(6, '63d4a04f08fe028a6731dc84b726ec32.jpg', 'https://www.onitshamarket.com/pages/', 'active'),
(7, '5fa2faf11beff2793aee6f0d35408130.jpg', 'https://www.onitshamarket.com/pages/contact/', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

DROP TABLE IF EXISTS `specifications`;
CREATE TABLE IF NOT EXISTS `specifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spec_name` varchar(255) NOT NULL,
  `options` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `multiple_options` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='This handles all the product specifications...';

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `spec_name`, `options`, `description`, `multiple_options`) VALUES
(1, 'Sim Type', '[\"Dual SIM\",\" Nano SIM\",\" Tripple SIM\",\" Dual Nano SIM\",\" Single SIM\",\" Dual Micro SIM\",\" Dual Mini SIM\",\"Single Mini SIM\",\" Others\"]', 'Select the SIM type for the smartphone', 0),
(2, 'OS Type', '[\"Android OS\",\" iOS\",\" Java OS\",\" Blackberry OS\",\" Symbian OS\",\" Others\"]', 'Select the Operating system for the smartphone', 0),
(3, 'Battery Capacity', '[\"3000mAh - 5000mAh\",\"    1000mAh - 3000mAh \",\"    4000mAh\",\"   3000mAh \",\"   2000mAh \",\"   2200mAh \",\"    5000mAh\",\"   3450mAh \",\"   5000mAh - 8000mAh \",\"   Over 10000mAh \",\"   4000mAh \",\" 3000mAh\",\"  2000mAh \",\"  2200mAh\",\"  3450mAh\",\"   5000mAh\",\"  5000mAh - 8000mAh\",\"   2450mAh \",\"  3300mAh \",\"  1450mAh\",\"  4450mAh \",\"  Less than 1000mAh \",\"  4300mAh\",\"  8000mAh - 10000mAh \",\"   2300mAh\",\"   10000mAh \",\"  6000mAh \",\"   1000mAh \",\"   3200mAh \",\"  4200mAh \",\"  1200mAh \",\"  1300mAh \",\"  5300mAh \",\"  5450mAh \",\"   6200mAh\"]', 'Battery Capacity', 0),
(4, 'Internal Memory', '[\"6 GB \",\" 32 GB\",\"64 GB\",\" 8 GB\",\" Below 128 MB\",\" 256 GB\",\"128 GB\",\"4 GB\",\"1 GB\",\"2 GB\",\"128 MB\",\" Above 256 GB\",\" 3 GB\",\"512 MB\",\"256 MB\"]', 'Phone Internal memory', 0),
(5, 'RAM', '[\"2 GB\",\" 3 GB\",\" 1 GB\",\" 4 GB \",\"6 GB\",\"512 MB\",\" 1.5 GB \",\"16 GB\",\" Below 128MB\",\" 8 GB\",\" 32 MB\",\" 128 MB\",\" 256 MB\",\" 768 MB\",\"500 GB. Others\"]', 'RAM size', 0),
(6, 'Sceen Size', '[\"5.5 inches \",\" 5 inches\",\" 6 inches\",\" Others\",\" 4.7 inches \",\" 5.7 inches \",\" 5.2 inches\",\" 5.88 inches\",\" 4 inches\",\" 6.1 inches\",\" 4.5 inches\",\" 6.4 inches\",\" 5.6 inches \",\" 5.9 inches\",\" 2.4 inches\",\" 5.3 inches\",\" 5.1 inches\",\" 1.5 inches\",\" 2.8 inches \",\" 1.56 inches\",\" 1.4 inches\",\"1.45 inches \",\"4.8 inches\",\"1.77 inches\",\" 4.3 inches\",\" 55 inches\",\" 1.36 inches\",\" 4.6 inches\",\" 7 inches\",\" 1.52 inches\"]', 'Screen Size', 0),
(7, 'Colour', '[\"Black\",\" Gold \",\" Grey \",\"Blue \",\" Silver \",\" Yellow \",\" Red \",\" White \",\"Others\",\" Purple \",\" Pink \",\" Multicolour\",\" Brown \",\" Beige \",\"Green \",\" Orange\",\" Bronze\"]', 'Colour', 0);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia State'),
(2, 'adamawa'),
(3, 'bauchi');

-- --------------------------------------------------------

--
-- Table structure for table `system_activities`
--

DROP TABLE IF EXISTS `system_activities`;
CREATE TABLE IF NOT EXISTS `system_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `context` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='Record all system activities';

--
-- Dumping data for table `system_activities`
--

INSERT INTO `system_activities` (`id`, `uid`, `context`, `timestamp`) VALUES
(1, 3, 'The product with the Id (24) was deleteed', '2019-01-23 13:46:09'),
(2, 3, 'The product with the Id (25) was deleteed', '2019-01-23 13:47:09'),
(3, 3, 'The product with the Id (12289) was approveed', '2019-01-23 13:48:11'),
(4, 3, 'The product with the Id (15) was approveed', '2019-01-23 13:49:16'),
(5, 3, 'The product with the Id (23) was approveed', '2019-01-23 13:49:22'),
(6, 3, 'The product with the Id (19) was approveed', '2019-01-23 13:49:28'),
(7, 3, 'The product with the Id (17) was deleteed', '2019-01-23 13:49:33'),
(8, 3, 'The product with the Id (18) was approveed', '2019-01-23 13:49:41'),
(9, 3, 'The product with the Id (20) was deleteed', '2019-01-25 22:01:22'),
(10, 3, 'The product with the Id (12290) was deleteed', '2019-01-26 09:49:12'),
(11, 3, 'The product with the Id (12292) was deleteed', '2019-01-26 19:09:09'),
(12, 3, 'The product with the Id (3) was deleteed', '2019-01-26 20:56:16'),
(13, 3, 'The product with the Id (3) was approveed', '2019-01-28 16:23:22'),
(14, 3, 'The product with the Id (4) was approveed', '2019-01-28 17:04:46'),
(15, 3, 'The product with the Id (2) was approveed', '2019-01-28 17:04:51'),
(16, 3, 'The product with the Id (1) was approveed', '2019-01-28 17:04:56'),
(17, 3, 'The product with the Id (5) was approveed', '2019-02-03 19:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `recovery_code` varchar(50) NOT NULL COMMENT 'recovery code to retrieve password',
  `account_status` varchar(10) NOT NULL COMMENT '''active'',''suspended'',''blocked''',
  `is_seller` varchar(50) NOT NULL DEFAULT 'false' COMMENT 'false,pending,approved,suspended,blocked,verified',
  `is_admin` int(11) NOT NULL,
  `groups` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `city`, `zip_code`, `address`, `phone`, `display_name`, `profile_pic`, `gender`, `password`, `salt`, `code`, `ip`, `date_registered`, `last_login`, `newsletter`, `recovery_code`, `account_status`, `is_seller`, `is_admin`, `groups`) VALUES
(1, 'bisi@gmail.com', 'Sokoya', 'Philip', '', '', '', '08169254598', 'mrphilo1234455', '', 'female', 'eaf859633c1bc66dc04a57f3d2579a0a0f5a626c17940a0010473222c9ee61f0', 'Dr=SLzk1viy$JP9q<=)bTn0V##gdQctp;!zmvb.g:8iur9T?!+', '', '127.0.0.1', '2018-08-23 16:21:31', '2018-09-04 20:44:25', 0, '', '', '1', 0, 0),
(2, 'phil@gmail.com', 'Sokoya', 'Adeniji', '', '', '', '', '', '', '', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '', '::1', '2018-09-17 21:40:35', '2019-01-14 10:06:27', 0, '', '', '0', 1, 4),
(3, 'philipsokoya@gmail.com', 'Chidi', 'Jeffrey', '', '', '', '08070994845', '', '', '', 'becf0711bf86d9a715a88c8fd476f6e39fcabb5bfeec223f72f526867eb60672', '8j:#gW.VHjvUX:lwx0@6lUpBe8R35z1DRDRrT0!2VFj;fmlkhm', '', '::1', '2018-09-17 21:40:35', '2019-02-04 08:52:00', 0, '', '', 'approved', 1, 1),
(4, 'seller@gmail.com', 'Jeff', 'Besox', '', '', '', '', '', '', '', 'ee707647928828271f6c2cd23ae10fe8bdc2f58b4745dfb3a2e8f18d7a3003c2', 'FA6rGIWT:nH+qNbY0gAC84)HpylN*aNrg9Sm?8eqERNY,ncLg:', '', '::1', '2018-10-22 12:21:30', '2018-10-22 15:35:22', 0, '', '', 'approved', 1, 4),
(5, 'seller2@gmail.com', 'Phil', 'Tusey', '', '', '', '', '', '', '', 'e71997718ceebe98d6b05bf3f4b9e54d338178996973e8999282b3313fdcd10d', '8Ge(<|c=Hw9Gh@1=n!_,>vXN|OWaz,($^2wqFPAm>(*l)NnZsE', '', '::1', '2018-10-22 12:26:31', '2018-11-20 15:07:59', 0, '', '', 'false', 0, 0),
(6, 'okey@gmail.com', 'Woyong', 'Okey', '', '', '', '', '', '', '', 'f74b08dc3f1fbf7c4cb26c04102f69adcb2f9446165326692350648ce9ffc3b0', 'Jd#X7j!5kHvh+?D;HOV1)(RUjoCGg<H(k|.cRtQB.pX<zwbLid', '', '::1', '2018-10-22 15:38:24', '2018-10-22 15:41:05', 0, '', '', 'approved', 0, 0),
(7, 'chidij75@gmail.com', 'Jeffrey', 'Chidi', '', '', '', '', '', '', '', '09977119f3e042e78cfc983f526ed5b049cacbcfd3ebc36f7eed501a95ca474e', 'L+wJTq96s5vjz>YPapsC*qtW5ResseWx^ze>W@C19gLS#C-TrO', '', '::1', '2018-10-23 08:54:45', '2018-10-23 08:54:45', 0, '', '', 'false', 0, 0),
(8, 'jeff@gmail.com', 'Jeffrey', 'Chidi', '', '', '', '', '', '', '', '114d07eca1eec8fb506dae23659aa4277e9af6be5049d5e1575cdecf63fd33d7', 'b#K^m&=S?t5remy0Z5C^bIvAi#?S4D;btyB#Wj=5:@.:1>p@17', '', '::1', '2018-10-23 08:58:13', '2018-10-26 12:26:32', 0, '', '', 'approved', 0, 0),
(9, 'james@gmail.com', 'James', 'Adeoye', '', '', '', '', '', '', '', '39a7e45ce9e2231580ab38f4266d78c7030ba21a5cc58ceed839174bd3501e14', 'mYL8E1l3klr4YNZzs<C:wa+e2<Z$A.SBK*S$OVZGbAhs|gsm^a', '', '::1', '2018-11-14 12:03:08', '2018-11-14 17:29:24', 0, '', '', 'approved', 0, 0),
(10, 'philo4u2c@gmail.com', 'Firstname', 'Lastname', '', '', '', '08755445522', '', '', '', '3914af8c3149af07e0c6cb4cd43493949510da978f3aaa521bf2504bb4e41210', ':_6Tn3L|=aAx>&G-X09ClqP5?Hj!k.*a._L:N)my@aTaKXYHQ@', '', '', '2018-12-03 17:46:39', '2018-12-03 17:46:39', 0, '', '', 'approved', 0, 0),
(12, 'newemail@gmail.com', 'Woyong', 'Okey', '', '', '', '08755445522', '', '', '', '4a248516bcb6f71f0d706d09d92d5bb8ad0d38a334e41ee64e1d33c2a6f0a918', 'GLapAh;JRG)qh;pyx<<0DS56eB6%m!;DeY;Da+jpJmRpsgV-mS', '', '::1', '2018-12-04 08:29:23', '2018-12-04 08:32:34', 0, '', '', 'pending', 0, 0),
(15, 'olalekeadeola17@gmail.com', 'Schoolville', 'Limited', '', '', '', '', '', '', '', '7b36a25f6faef006b1df26d83791f5b1e746f8112f6b7b194d695bf7b38a8e0b', '@*H2A9yKcuF4oa9Z:?B@k.7PQa:PNP#!9hmh#aj69+HXisK>kx', '', '', '2018-12-06 09:21:32', '2018-12-06 09:21:32', 0, '', '', 'pending', 0, 0),
(16, 'philipsokoya@gmail.com', 'Sokoya', 'Adeniji', '', '', '', '', '', '', '', '87375036129da63d1df73cd722b007c619a4595544bcc1e8dc34dd9f96ca2e3c', 'u6o!9H!MTgpYM$4+=PVHx1bKIYPE=|V|)Q=CM_!mJCWf:)mU:n', '', '::1', '2019-01-07 11:54:50', '2019-02-04 08:52:00', 0, '', '', 'false', 0, 0),
(20, 'olalekeadeola16@gmail.com', 'Olaleke', 'Adeola', '', '', '', '', '', '', '', '9c056297aae10a96e187fb3ea7c37d5db53d499b98f7c2083d749c3154ffe5ba', 'p6OkBp-4>BCw0#2OFA!cocH*sqB)g7yUX<@j3|tja6@9RL_s7S', '', '::1', '2019-01-26 07:52:52', '2019-01-26 08:09:15', 0, '', '', 'approved', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `categories` ADD FULLTEXT KEY `name_2` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name_2` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name` (`product_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name_2` (`product_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
