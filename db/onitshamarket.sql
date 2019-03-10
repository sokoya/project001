-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2019 at 06:39 PM
-- Server version: 10.1.29-MariaDB-6ubuntu2
-- PHP Version: 7.2.15-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `billing_address` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `primary_address` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`id`, `uid`, `sid`, `aid`, `address`, `first_name`, `last_name`, `phone`, `phone2`, `primary_address`) VALUES
(1, 3, 1, 1, '530A, Aina Akingbala Street, Ikeja', 'Sokoya', 'Philip', '08169254598', '', 1),
(2, 20, 1, 1, 'D6 Ajegunle Ita Oluwo, Ikorodu', 'Olaleke', 'Adeola', '08144554455', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `brand_name`, `description`, `category_slug`, `brand_logo`, `status`) VALUES
(1, 0, 'Apple', 'This is apple\'s brand, Hope you like it....', '[\"blu-ray-dvd-players\",\"cameras\"]', 'acawim1qrjgwczecmcuw.jpg', ''),
(2, 0, 'shshshshs', 'Hello eorld', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
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
  `variation_options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
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
('gs7u4qcshafaqhadvvmv0go9kd6m3o3g', '::1', 1549316215, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393331363231353b),
('n009tqn84i59jbc15g9evfk9c4uifjis', '::1', 1549221482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393232303935353b72656665727265645f66726f6d7c733a33363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636865636b6f7574223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a323939393b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b613a373a7b733a323a226964223b733a313a2235223b733a333a22717479223b643a313b733a343a226e616d65223b733a34363a2232312041747469726520426c61636b205065706c756d20546f702057697468205374796c69736820536c65657665223b733a353a227072696365223b643a323939393b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2235223b733a393a22766172696174696f6e223b733a313a2236223b7d733a353a22726f776964223b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b733a383a22737562746f74616c223b643a323939393b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534393232323038323b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('3b8ff0o5ie4m8pebqjiolgmg1h2nsqai', '::1', 1549270095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393237303039353b72656665727265645f66726f6d7c733a34383a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f68692d66692d73797374656d223b),
('q8mutsmkqcjehuu41okjtoa1gqesiv6c', '::1', 1549306184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393330363138343b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a35323939393b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b613a373a7b733a323a226964223b733a313a2235223b733a333a22717479223b643a313b733a343a226e616d65223b733a34373a2232312041747469726520426c61636b205065706c756d20546f702057697468205374796c69736820536c6565766573223b733a353a227072696365223b643a323939393b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2235223b733a393a22766172696174696f6e223b733a313a2236223b7d733a353a22726f776964223b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b733a383a22737562746f74616c223b643a323939393b7d733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534393237313032313b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('jv0jt36n8rdsmpgvrc2ss91a8hv8snc3', '::1', 1549315360, 0x636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a3632393939303b733a31313a22746f74616c5f6974656d73223b643a32323b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b613a373a7b733a323a226964223b733a313a2235223b733a333a22717479223b643a31303b733a343a226e616d65223b733a34373a2232312041747469726520426c61636b205065706c756d20546f702057697468205374796c69736820536c6565766573223b733a353a227072696365223b643a323939393b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2235223b733a393a22766172696174696f6e223b733a313a2236223b7d733a353a22726f776964223b733a33323a223330393530366134343734386661336261633966656462616561366237356232223b733a383a22737562746f74616c223b643a32393939303b7d733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a31323b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a3630303030303b7d7d5f5f63695f6c6173745f726567656e65726174657c693a313534393331333538323b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313534393331353936303b733a31313a22737563636573735f6d7367223b733a333a226e6577223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('2amvd95q5hu9koc10upipd96s468nluu', '::1', 1549357487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393335373438373b72656665727265645f66726f6d7c733a33343a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f736561726368223b),
('9l3p2b3iv34srrkllloq2cs4a8tl9u76', '::1', 1549354953, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393335343935333b),
('957vsc1ac6iba3cerkfs9h0lgqn9q008', '::1', 1549874652, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393837343635323b),
('3f1gha231qk5u3h3qj6f8v3gidcs0oep', '::1', 1549363144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393335373438373b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a35303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313534393336333734303b733a393a226572726f725f6d7367223b733a333a226e6577223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6572726f725f6d73677c733a303a22223b),
('8bdjsse54fljhf6mmpng5o9mcf0lb8s9', '::1', 1549371796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337313738353b),
('4d8ceqttpr85m4bmhjm91pdak46htmb1', '::1', 1549371830, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393337313833303b),
('voq2a2v1els398c5h63trnoh4g486c62', '::1', 1549371889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337313838393b),
('8a1raphdtkrdv6shs8ig8ou1nfghthl2', '::1', 1549371953, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337313935323b),
('rhguo9be5tsr7fitvpa6d7e9fq3q7bjt', '::1', 1549372176, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337323137363b),
('rmn0h3ed7jerrfd3q64f0ugclv40j4oh', '::1', 1549372185, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337323138353b6572726f725f6d73677c733a39323a22536f7272792077652063616e27742066696e6420796f757220656d61696c20696e206f7572207265636f72642e2043726561746520616e206163636f756e74206f7220636f6e74616374206f757220737570706f7274207465616d2e223b5f5f63695f766172737c613a313a7b733a393a226572726f725f6d7367223b733a333a226e6577223b7d),
('9mp05qh59qmsqdvctm9feg8kco5kj9j1', '::1', 1549372186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337323138363b),
('ggubts40h2fb57alqmsu9btrjihhfs7q', '::1', 1549372374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393337323337343b),
('8n3vijl3f2mh6e6egqdrork0473fo01a', '::1', 1549382071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393338303937303b),
('2cdvc2p2v2kqt47bef7tqlr78cnm1cgh', '::1', 1549435353, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433353335333b),
('47h59p0cjp4qrr0n2l8o0sv48p1jlksl', '::1', 1549436816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433363831363b),
('vl0e5i4rh2jgtiv63442lru9bgovkmaa', '::1', 1549436934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433363933343b),
('qqileekqp9i0oq5t3u3p2mts1m0laln0', '::1', 1549436947, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433363934373b),
('altl2k6e18h3u0chf4u20vq34e8vj8s4', '::1', 1549437131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433373133313b),
('25504vbfs8dlt5na8b23qk79dc6t3eh2', '::1', 1549437164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433373136343b),
('hvcgsijn1g5cba8pb3o5hmkdcn39o1lu', '::1', 1549437323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433373332333b),
('vuscer8k4a20tgduocvhaa4acb9er1ne', '::1', 1549437516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433373531363b),
('k1cq86a5qdn50cqa3bvhislb7il381qp', '::1', 1549437562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433373536313b),
('b47nb4fu0rchdv2ecl9ufkqb0tecot0m', '::1', 1549438059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383035393b),
('uj6711i3eeinf8k1maga0d3k16ptq2dr', '::1', 1549438136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383133363b),
('s340bv84qvlfus0ae6fdg220nmrs7ri3', '::1', 1549438270, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383236393b),
('mfpfookvmlfl0n0kfvf2i4m6hs46jsr8', '::1', 1549438279, ''),
('83upgvrr0qhjjad0lju3g8m65h8e21t0', '::1', 1549438282, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383238313b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('2gu1id964ognul1a0hfufnobplqbfgsg', '::1', 1549438459, 0x636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d737563636573737c733a3134353a225468652070726f647563742047656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d323856203132414220686173206265656e20616464656420746f20796f75722063617274207375636365737366756c6c792e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226e6577223b7d),
('csalsr2lqt1bgu1ihcud3mbtmbgfo7q9', '::1', 1549438459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383435393b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313534393433393035393b7d),
('fd7sr2p18i9v0apulvbr1vc8qthjct2o', '::1', 1549438467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383436363b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('l01ngq7vvt70v67s4mqct272k94fi4lp', '::1', 1549438541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383534313b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('rbk9cc5ca8tej0mru6t74u7b31mc4saj', '::1', 1549438575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383537353b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('s35es2jrhtfu462p6ns7at9lgfq3uhl1', '::1', 1549438580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383538303b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('lb9afmm6jvmii5bt2dk9al593nn4njvs', '::1', 1549438591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383539313b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('osls129n5elsgpp7hrbiq07pd20d37iu', '::1', 1549438630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383633303b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('cgclvdjkchmgn4vfp749rqa0a5b59cqt', '::1', 1549438646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383634363b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('2n5uqalqi8iuol1e0bt70i2lkg1t33on', '::1', 1549438701, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383730313b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('01ftle7ub5090snsanhfmm54la9a8khl', '::1', 1549438744, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383734343b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('jpif2smqic027nrebb6fr7jr1m19jmb1', '::1', 1549438767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383736373b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('n00t162i62unrs4uijvoqbi15ahk2f02', '::1', 1549438886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383838363b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('oo0pke0gne3q6c12m8vl2b251hu5rr90', '::1', 1549438925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433383932353b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('3tlpv84mm754ra1lkev3nhjaimk2sjdd', '::1', 1549439051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393035313b),
('c8b0n4ndd5r5nfvfpgo311q9fbsck2r2', '::1', 1549439057, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393035373b),
('90gomqstu5rtos2k5atnj4tisf9raf14', '::1', 1549439069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393036393b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('k1f6rm28ueghpfri7hi331e78m6o74uj', '::1', 1549439070, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393037303b),
('km4n7o6tne7m49phkepjv0f0ihua00dr', '::1', 1549439091, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393039313b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('3re15i2amlui20v5lbn9j2suii2gqpr7', '::1', 1549439093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393039333b),
('pa34e6no17nav6h2mc8o9e9anrt8fugu', '::1', 1549439156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393135363b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('rorvn0dga9bim0vienpd4bqqdifo8i0n', '::1', 1549439185, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393138353b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('shke8ars85b2fk3i0cipavqr19jnubv3', '::1', 1549439205, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393230343b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('pt6i48o8imvo7s206i8mgf9ivi09i72g', '::1', 1549439242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393234323b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('9tgejs8fgauvjm6md5mjliclsp1mfkdo', '::1', 1549439304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393330333b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b737563636573735f6d73677c733a32323a22596f7520617265206e6f77206c6f6767656420696e21223b5f5f63695f766172737c613a313a7b733a31313a22737563636573735f6d7367223b733a333a226e6577223b7d),
('hju2a66l00jbv2ar42es3o75uo0qg517', '::1', 1549439304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393330343b),
('tpb53pt4391psqr6bokhkbplfsnqrood', '::1', 1549439308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393330383b),
('knbtd09m6vrck03k3dvu98s688ujqae7', '::1', 1549439314, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393331343b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b737563636573735f6d73677c733a32323a22596f7520617265206e6f77206c6f6767656420696e21223b5f5f63695f766172737c613a313a7b733a31313a22737563636573735f6d7367223b733a333a226e6577223b7d),
('ih67iljm9m85k3jgr4sr4s8rdg5jdts6', '::1', 1549439314, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393331343b),
('p17s4avhoafqoas0hgh5b0j71drscohr', '::1', 1549440850, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393433393335393b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('gvav4jm82jqsrtadaj4kbg09b9mcd016', '::1', 1549448528, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393434383532383b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b),
('cp4ek1b5k419shei9svvbnklmeseha25', '::1', 1549453761, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393434383532383b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b),
('6gea20sb7kkb11blfi79b2s8kc76viec', '::1', 1549601074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393630313037333b),
('89u83kltss6na3qv9nvhnvlna6o9eerm', '::1', 1549805039, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393830353033363b),
('m954g3lvhopea537p9639f148ej0ns2a', '::1', 1549876690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393837363639303b),
('oqd7lll20knrfib02d9mkbv7a6uatt5s', '::1', 1549874989, 0x72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b5f5f63695f6c6173745f726567656e65726174657c693a313534393837343635323b),
('u6klfrorp8f4q87fuisidtp8hubsoopn', '::1', 1549954196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393935343139363b72656665727265645f66726f6d7c733a33363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636865636b6f7574223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a35303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313534393837373330393b733a393a226572726f725f6d7367223b733a333a226e6577223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b6572726f725f6d73677c733a303a22223b),
('shiskpg6o81pnfalcbdmi0q4vb013qsj', '::1', 1549964101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393936343130313b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('ime44bepdq710vg5g2amfe3no4uqehu1', '::1', 1549966632, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393936343130313b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('vmago0darkku5gjtnok6jju07r29pp35', '::1', 1549971042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393937303336383b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('639kli3svhabbfklfvpog6am1hbcjcs3', '::1', 1549971566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393937313533353b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b),
('t782jqhpgb1uolg152bkmne400n8f70v', '::1', 1549994174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393939333533363b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('dfv0r2fkgcrn5m9r0juke38d342jupg3', '::1', 1550054816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303035343731373b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313535303035353334333b733a393a226572726f725f6d7367223b733a333a226f6c64223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6572726f725f6d73677c733a303a22223b),
('9nhr3j2d8cggnhvamrhv0efrr736ago7', '::1', 1550062722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303036323732323b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313535303035373039373b733a393a226572726f725f6d7367223b733a333a226f6c64223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b6572726f725f6d73677c733a303a22223b),
('5c9n0019k4lar6ksdigcg2jm5c91b84b', '::1', 1550076725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303037363732353b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535303036333333333b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('ec9lu4nl37536l7ma8utsb0s9150clbb', '::1', 1550135804, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303133353830343b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313535303038323532313b733a393a226572726f725f6d7367223b733a333a226f6c64223b7d),
('fedcac23gmn8ftntsc61gg97jk85si02', '::1', 1550146587, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303134363538373b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d7d696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373036303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d5a6d5a7464546376554870335230314e516c4e7251316c524d307442596e705156546c555533426e5955564f56576876575564495547644e637a303d223b733a373a2274786e5f726566223b733a32333a2254587c3234373138363539337c31353530313339363431223b733a373a22637573745f6964223b733a313a2233223b733a393a22637573745f6e616d65223b733a31333a225068696c697020536f6b6f7961223b733a343a2268617368223b733a3132383a226237336165396138653562643662373462656564333266663130336564396464356234616661616637333033353833646639613765373863653637653635376631356237646264653165646364316135653533663465663936363435346566366138376333313039376539376461316433333539373936326338383136323137223b7d6f726465725f636f64657c733a393a22323437313836353933223b74786e5f7265667c733a32333a2254587c3234373138363539337c31353530313339363431223b616d6f756e747c643a373036303030303b);
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('85f05ctjmqes9rrsf847282n65t96kug', '::1', 1550155692, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303135353639323b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d7d696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373036303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d5a6d5a7464546376554870335230314e516c4e7251316c524d307442596e705156546c555533426e5955564f56576876575564495547644e637a303d223b733a373a2274786e5f726566223b733a32333a2254587c3234373138363539337c31353530313339363431223b733a373a22637573745f6964223b733a313a2233223b733a393a22637573745f6e616d65223b733a31333a225068696c697020536f6b6f7961223b733a343a2268617368223b733a3132383a226237336165396138653562643662373462656564333266663130336564396464356234616661616637333033353833646639613765373863653637653635376631356237646264653165646364316135653533663465663936363435346566366138376333313039376539376461316433333539373936326338383136323137223b7d6f726465725f636f64657c733a393a22323437313836353933223b74786e5f7265667c733a32333a2254587c3234373138363539337c31353530313339363431223b616d6f756e747c643a373036303030303b),
('cmltkei03cu2vrauugokhtafie7lcgtj', '::1', 1550165915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303136353931353b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d7d696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373036303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d6244524d63445935566b4d79636e4e31537a5a535a456450646a424c57456855574452755355704b5555746f4d6a4e324d56526c6348637a647a303d223b733a373a2274786e5f726566223b733a32333a2254587c3835373332343931367c31353530313632363734223b733a373a22637573745f6964223b733a313a2233223b733a393a22637573745f6e616d65223b733a31333a225068696c697020536f6b6f7961223b733a343a2268617368223b733a3132383a226564353366316362646263333338653930343130303330313261626665313863373862386639303137636532333330393239366266633736613834356434303932663865373138353434636338303736623765623661613764383930623665623334623334326131643038336636393834306433383061346336343264373764223b7d6f726465725f636f64657c733a393a22383537333234393136223b74786e5f7265667c733a32333a2254587c3835373332343931367c31353530313632363734223b616d6f756e747c643a373036303030303b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535303136333235313b7d),
('h727ccnpab4kd5rovlmb0k34qcqkvv6r', '::1', 1550165916, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303136353931353b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d7d696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373036303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d6244524d63445935566b4d79636e4e31537a5a535a456450646a424c57456855574452755355704b5555746f4d6a4e324d56526c6348637a647a303d223b733a373a2274786e5f726566223b733a32333a2254587c3835373332343931367c31353530313632363734223b733a373a22637573745f6964223b733a313a2233223b733a393a22637573745f6e616d65223b733a31333a225068696c697020536f6b6f7961223b733a343a2268617368223b733a3132383a226564353366316362646263333338653930343130303330313261626665313863373862386639303137636532333330393239366266633736613834356434303932663865373138353434636338303736623765623661613764383930623665623334623334326131643038336636393834306433383061346336343264373764223b7d6f726465725f636f64657c733a393a22383537333234393136223b74786e5f7265667c733a32333a2254587c3835373332343931367c31353530313632363734223b616d6f756e747c643a373036303030303b),
('vasohv8hah1v66rksqpbirnnkepfphps', '::1', 1550164362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303136343336313b),
('4cvvf3vt74pujd9a7m2ncj7k9p497tdn', '::1', 1550241426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303234313432363b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('v43fbu12sebv55j121etl611cgdu8db9', '::1', 1550251172, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303235313137323b),
('fnbirg3v0gbk7jru92cltllis8gg9ikc', '::1', 1550258137, 0x636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f6c6173745f726567656e65726174657c693a313535303235323038393b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373536303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d596e6735646d464b647a6850526c6458625556494d4441314d6b6c4352486c735a564a4a595842715a5534724e47524b4b307433575570695554303d223b733a373a2274786e5f726566223b733a32333a2254587c3132333736393438357c31353530323535343939223b733a373a22637573745f6964223b733a323a223230223b733a393a22637573745f6e616d65223b733a31343a224f6c616c656b65204164656f6c61223b733a343a2268617368223b733a3132383a223666623863353335323232633338613961383130306465346635613639393766633837373538373931303235316462343632313433353465393932373937646234303665356138313831376631613761623632323264663337383435616438303737376130616533653961643365613939303164323234316631306233303661223b7d6f726465725f636f64657c733a393a22313233373639343835223b74786e5f7265667c733a32333a2254587c3132333736393438357c31353530323535343939223b616d6f756e747c643a373536303030303b),
('f551aa4t22geer0l3qtkctnn7clc79tu', '::1', 1550314061, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303330393633343b72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('4embtftebn0trod55780jei8jkavi9pj', '::1', 1550484735, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303438343733353b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313535303437383237323b733a393a226572726f725f6d7367223b733a333a226f6c64223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('4m21f1c0cdiakitlkag24vsmj8np18gb', '::1', 1550506876, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303530363837363b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a3134353030303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535303438353334363b7d696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a31343632303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d4d6e6b33576d706f4d32356e6131526c595455355a56427a536b354d644531735653395061485177635864534e444a4e5a6c517261326c365754303d223b733a373a2274786e5f726566223b733a32333a2254587c3133393837343536327c31353530343834373535223b733a373a22637573745f6964223b733a323a223230223b733a393a22637573745f6e616d65223b733a31343a224f6c616c656b65204164656f6c61223b733a343a2268617368223b733a3132383a223234366266363136303361613739373135663137646263643831373339356631386338656635373533326362306461343165343934373538376537366631326134636566623532303163646430323265383961616430333930316263353761323130343930643266646532306637343032313363613135356637373536666639223b7d6f726465725f636f64657c733a393a22313339383734353632223b74786e5f7265667c733a32333a2254587c3133393837343536327c31353530343834373535223b616d6f756e747c643a31343632303030303b),
('g4im3kafq8dtvh2b0mg555f23l1rc2k7', '::1', 1550512898, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303530363837363b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a3134353030303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a31343632303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d4d6e6b33576d706f4d32356e6131526c595455355a56427a536b354d644531735653395061485177635864534e444a4e5a6c517261326c365754303d223b733a373a2274786e5f726566223b733a32333a2254587c3133393837343536327c31353530343834373535223b733a373a22637573745f6964223b733a323a223230223b733a393a22637573745f6e616d65223b733a31343a224f6c616c656b65204164656f6c61223b733a343a2268617368223b733a3132383a223234366266363136303361613739373135663137646263643831373339356631386338656635373533326362306461343165343934373538376537366631326134636566623532303163646430323265383961616430333930316263353761323130343930643266646532306637343032313363613135356637373536666639223b7d6f726465725f636f64657c733a393a22313339383734353632223b74786e5f7265667c733a32333a2254587c3133393837343536327c31353530343834373535223b616d6f756e747c643a31343632303030303b),
('crm13gi7qdt5f6p9ct48kdkasn864tq4', '::1', 1550517804, 0x636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b613a373a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a343a226e616d65223b733a37303a225377696475203220496e2031204c7578757279204272616e6420476f6c642d706c617465642057617463682026616d703b20476f6c642d706c617465642042726163656c6574223b733a353a227072696365223b643a37303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2234223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a223963623136666333306235373066643161666530616263613939373733363130223b733a383a22737562746f74616c223b643a37303030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535303531383339353b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f6c6173745f726567656e65726174657c693a313535303531373737373b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373036303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d636b78335a586447636e4a444b3056775247744d55484a4b57444932547a4a69626a4e45556b5a4d566d646d5543396c57476452536c6c78617a303d223b733a373a2274786e5f726566223b733a32333a2254587c3833323437353639317c31353530353137383033223b733a373a22637573745f6964223b733a323a223230223b733a393a22637573745f6e616d65223b733a31343a224f6c616c656b65204164656f6c61223b733a343a2268617368223b733a3132383a223762376239663631396238633139313434633666363039653737653264303163643737313036613034353366333362663661626331626138396362303561323965373262313861303538343534393232343362336232613663366435626437313035363165653832376632613065376363613465343235323066656337636130223b7d6f726465725f636f64657c733a393a22383332343735363931223b74786e5f7265667c733a32333a2254587c3833323437353639317c31353530353137383033223b616d6f756e747c643a373036303030303b),
('qft4jtt7ro7r7c4k5ug1svblrj7omf9t', '::1', 1550521057, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303532313031343b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535303532313634373b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373536303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d4d7a5a586231557861565a4d4e6d5654646d6c54526b387a54326c724f44565a59544a6d526d4e3254564247544467306257687a574746765654303d223b733a373a2274786e5f726566223b733a32333a2254587c3836323433353139377c31353530353231303537223b733a373a22637573745f6964223b733a323a223230223b733a393a22637573745f6e616d65223b733a31343a224f6c616c656b65204164656f6c61223b733a343a2268617368223b733a3132383a226266393430346662306462393765643430633366643239646661396534356665366338376131613539313735363563343838393937656230633938643538363834653631313162613630363238646639306566346334666431666262346664646366643466633365663333356236343732363664356236393333326534656666223b7d6f726465725f636f64657c733a393a22383632343335313937223b74786e5f7265667c733a32333a2254587c3836323433353139377c31353530353231303537223b616d6f756e747c643a373536303030303b),
('fr414qpv029ag2kloporvmf2egvllqqk', '::1', 1550554094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303535333939383b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535303535343638303b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b696e7465727c613a393a7b733a31303a2270726f647563745f6964223b733a343a2231303736223b733a31313a227061795f6974656d5f6964223b733a333a22313031223b733a363a22616d6f756e74223b643a373536303030303b733a383a2263757272656e6379223b693a3536363b733a31373a22736974655f72656469726563745f75726c223b733a3131323a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f696e7465727377697463682f726573706f6e73652f3f743d5757315a517a464351574a79647a6732534752365a456c6f53474d76526d524951304d7a5158566a62586c4954305a796444513062565a7a617a303d223b733a373a2274786e5f726566223b733a32333a2254587c3835393431373233367c31353530353534303933223b733a373a22637573745f6964223b733a323a223230223b733a393a22637573745f6e616d65223b733a31343a224f6c616c656b65204164656f6c61223b733a343a2268617368223b733a3132383a226334353162333833393134346163366333653337663531333033623136653135346632613138326632316565316638643365363966363762623032633035306534326133396138336636366437623131663934303963323531336232323761336330376238353266653335316633393637623931356538346338396263353138223b7d6f726465725f636f64657c733a393a22383539343137323336223b74786e5f7265667c733a32333a2254587c3835393431373233367c31353530353534303933223b616d6f756e747c643a373536303030303b),
('k8hpr22i9ktu5ojm39bqq6tp9f5so8m1', '127.0.0.1', 1550572628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303537303430303b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b72656665727265645f66726f6d7c733a3130363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f73776964752d322d696e2d312d6c75787572792d6272616e642d676f6c642d706c617465642d77617463682d616d702d676f6c642d706c617465642d62726163656c65742d34223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('3a3ei606nve85vmd5rj1sd6n9f3jn7hc', '127.0.0.1', 1551090151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313038383634303b),
('o89b5de21i16gcc6dtqvrr0lvhk2etbm', '127.0.0.1', 1551088719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313038383731393b),
('rm2qmctn87nmikq26b0etuodq4b7m7tq', '127.0.0.1', 1551094752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313039343332313b),
('cfgjc7g9o3fhl1smj25gabn1j9nabha1', '127.0.0.1', 1551099873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313039393837333b),
('199us47n12h3psb9k2pj67p7pc69827n', '127.0.0.1', 1551114709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313131333730343b72656665727265645f66726f6d7c733a33363a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636865636b6f7574223b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223130223b656d61696c7c733a31393a227068696c6f3475326340676d61696c2e636f6d223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b),
('u9m7bot82hib8mbmfdnki24h0kjg6o82', '127.0.0.1', 1551255582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313235353332393b),
('hu113qg1smf0nueb43r66mdrvl1sq1vo', '127.0.0.1', 1551277097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313237373034323b),
('fu6hva06bb4cbn5uv6m6mt7115uc6r40', '127.0.0.1', 1551281169, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313237373734393b),
('fkh3uoupaau1v90g9da6jtfk8ebf7j0s', '127.0.0.1', 1551290980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313238353433393b),
('par3p08upv6687on63vra8jqi7ljt7ff', '127.0.0.1', 1551340262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313334303236323b),
('kkn3qei2rn1sgu42qcb216vp7v1r9ek0', '127.0.0.1', 1551628574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313632383336343b),
('j6g0frq8or486279r9mieej39moofj1r', '127.0.0.1', 1551700977, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313730303937373b),
('u7417pkbdk4l1qcs6r24l59fn5qu2rbg', '127.0.0.1', 1551701177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313730303937373b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b),
('cac0nmvlr6l9dcd5he73690sh4h3l0rh', '127.0.0.1', 1551732743, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313733313533393b),
('qenv3dnd2kghct81u7av35m1lm64tptb', '127.0.0.1', 1551781796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313737353035333b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('o677a6osj0bmonq57pod0gclrnualg18', '127.0.0.1', 1551793054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313739333035343b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('f14acma0cd2qf6k4vu80749ao06fa2tu', '127.0.0.1', 1551799878, 0x636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a3130303030303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a323b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a3130303030303b7d7d5f5f63695f6c6173745f726567656e65726174657c693a313535313739353035373b72656665727265645f66726f6d7c733a3132393a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f67656e657269632d327063732d64632d64632d63632d63762d6275636b2d636f6e7665727465722d737465702d646f776e2d706f7765722d737570706c792d6d6f64756c652d372d3332762d746f2d302d382d3238762d313261622d32223b),
('rg12gcmfr0qkbpefvmgeks3hjsmdugd7', '127.0.0.1', 1551800991, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313830303537393b6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a313a7b733a383a22636865636b6f7574223b693a313535313830313230333b7d72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a35303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d),
('hc4h53ltn8d60nuofs3sujnlv6e6jecp', '127.0.0.1', 1551814069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313831343036393b),
('h9lpciemqub6ndla1m4dgngg0pu7u0t2', '127.0.0.1', 1551863254, 0x636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a37353030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b613a373a7b733a323a226964223b733a313a2232223b733a333a22717479223b643a313b733a343a226e616d65223b733a39313a2247656e6572696320327063732044432d4443204343204356204275636b20436f6e76657274657220537465702d646f776e20506f77657220537570706c79204d6f64756c6520372d33325620546f20302e382d3238562031324142223b733a353a227072696365223b643a37353030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a313a2233223b733a31323a22766172696174696f6e5f6964223b733a313a2232223b733a393a22766172696174696f6e223b733a353a22477265656e223b7d733a353a22726f776964223b733a33323a226532373764306335616566363235626230306136363161623031633766663963223b733a383a22737562746f74616c223b643a37353030303b7d7d5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313535313836333833343b733a393a226572726f725f6d7367223b733a333a226e6577223b7d636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f6c6173745f726567656e65726174657c693a313535313836333234303b),
('9fjhmd0jqqphqtvjakl553itejoaaak0', '127.0.0.1', 1551884513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313838333832393b),
('n9j6orpa617aii42d05glmsfptrvilgf', '127.0.0.1', 1552056101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323035363130313b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a35303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d),
('a3sbnodf4e30sk1he83jsn4r6o1ob8v7', '127.0.0.1', 1552057355, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323035363130313b72656665727265645f66726f6d7c733a34373a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f636174616c6f672f656c656374726f6e696373223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a35303030303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b613a373a7b733a323a226964223b733a313a2231223b733a333a22717479223b643a313b733a343a226e616d65223b733a33323a22412070726f6475637420696e204163636573736f726965732053656374696f6e223b733a353a227072696365223b643a35303030303b733a373a226f7074696f6e73223b613a333a7b733a363a2273656c6c6572223b733a323a223230223b733a31323a22766172696174696f6e5f6964223b733a313a2231223b733a393a22766172696174696f6e223b733a393a22566172696174696f6d223b7d733a353a22726f776964223b733a33323a226130656566313930633766636336346630306665623638626338343132336566223b733a383a22737562746f74616c223b643a35303030303b7d7d),
('kn5ifqakuvimlb28d0r5qc3helmhkgod', '127.0.0.1', 1552100639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323130303633393b),
('utn3rspbntostekn9lte43l75nii0d4q', '127.0.0.1', 1552237820, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323233323631373b72656665727265645f66726f6d7c733a37303a22687474703a2f2f6c6f63616c686f73742f70726f6a6563743030312f70726f647563742f612d70726f647563742d696e2d6163636573736f726965732d73656374696f6e2d31223b636865636b6f75747c733a31333a22636865636b6f75745f74696d65223b5f5f63695f766172737c613a323a7b733a383a22636865636b6f7574223b693a313535323233383430373b733a393a226572726f725f6d7367223b733a333a226f6c64223b7d6572726f725f6d73677c733a33373a22596f75206e65656420746f206c6f67696e20746f206163636573732074686520706167652e223b);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `error_logs`
--

CREATE TABLE `error_logs` (
  `id` int(11) NOT NULL,
  `error_action` varchar(255) NOT NULL,
  `error_message` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error_logs`
--

INSERT INTO `error_logs` (`id`, `error_action`, `error_message`, `datetime`) VALUES
(1, 'Online Payment Error', 'An online payment was unsuccessful from, initiated by a buyer (20) with the reason(s) - Timeout, Close Tab, Close Session. and Error code: ', '2019-02-18 18:01:34'),
(2, 'Online Payment Error', 'An online payment was unsuccessful from, initiated by a buyer (20) with the reason(s) - Timeout, Close Tab, Close Session. and Error code: ', '2019-02-18 18:01:36'),
(3, 'Online Payment Error', 'An online payment was unsuccessful from, initiated by a buyer (20) with the reason(s) - Customer Cancellation and Error code: Z6', '2019-02-18 18:01:37'),
(4, 'Online Payment Error', 'An online payment was unsuccessful from, initiated by a buyer (20) with the reason(s) - Customer Cancellation and Error code: Z6', '2019-02-18 18:01:37'),
(5, 'Online Payment Error', 'An online payment was unsuccessful from, initiated by a buyer (20) with the reason(s) - Customer Cancellation and Error code: Z6', '2019-02-18 18:01:38'),
(6, 'Online Payment Error', 'An online payment was unsuccessful from, initiated by a buyer (20) with the reason(s) - Timeout, Close Tab, Close Session. and Error code: ', '2019-02-18 18:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` tinytext NOT NULL,
  `is_live` int(11) NOT NULL DEFAULT '0',
  `enabled_ips` varchar(255) NOT NULL,
  `maintenance_text` text NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='General Settings for the site';

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `keywords`, `description`, `is_live`, `enabled_ips`, `maintenance_text`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`) VALUES
(1, 'Buy, Sell, fashion wears, electronics gadget', 'Define the type of heel the shoe has  Example: e.g. Block, Cuban, Flared, Mid, Stiletto', 1, '127.0.0.1, 127.0.0.2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum. etc etc etc', 'onitshamarket', 'onitshamarket', 'onitshamarket', 'onitshamarket');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_setting`
--

CREATE TABLE `homepage_setting` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Category Display Settings for Homepage';

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `amount` varchar(255) NOT NULL,
  `invoice_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` bigint(10) NOT NULL,
  `tracking_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `commission` decimal(11,0) NOT NULL DEFAULT '0',
  `delivery_charge` decimal(11,0) NOT NULL DEFAULT '0',
  `billing_address_id` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `product_variation_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(11,0) NOT NULL DEFAULT '0',
  `order_date` datetime NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_made` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending' COMMENT 'Has the payment been received by us: pending|success|fail',
  `seller_wallet` int(11) NOT NULL DEFAULT '0',
  `agent` int(11) NOT NULL DEFAULT '0',
  `txnref` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payRef` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'eg : FBN|WEB|WEBDEMO|13-02-2019|275325|416842',
  `paymentDesc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'eg : Approved by Financial Institution ',
  `retRef` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responseCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'responseCode',
  `apprAmt` decimal(11,0) NOT NULL DEFAULT '0' COMMENT 'RetrievalReferenceNumber : 000726451296 '
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `tracking_id`, `buyer_id`, `seller_id`, `product_id`, `commission`, `delivery_charge`, `billing_address_id`, `pickup_location_id`, `product_variation_id`, `coupon_id`, `payment_method`, `qty`, `amount`, `order_date`, `status`, `active_status`, `payment_made`, `seller_wallet`, `agent`, `txnref`, `payRef`, `paymentDesc`, `retRef`, `responseCode`, `apprAmt`) VALUES
(1, 436178925, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 09:02:46', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 09:02:46\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Issuer or Switch Inoperative\",\"datetime\":\"2019-02-19 09:05:22\"}}', 'cancelled', 'fail', 0, 0, 'TX-436178925-1550566966', 'FBN|WEB|WEBDEMO|19-02-2019|275840|710914', 'Issuer or Switch Inoperative', '000729018369', '91', '61200'),
(2, 967853124, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 09:14:03', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 09:14:03\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Issuer or Switch Inoperative\",\"datetime\":\"2019-02-19 09:16:03\"}}', 'cancelled', 'fail', 0, 0, 'TX-967853124-1550567643', 'FBN|WEB|WEBDEMO|19-02-2019|275844|701819', 'Issuer or Switch Inoperative', '000729021590', '91', '61200'),
(3, 298675134, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 09:19:22', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 09:19:22\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Insufficient Funds\",\"datetime\":\"2019-02-19 09:25:00\"}}', 'cancelled', 'fail', 0, 2, 'TX-298675134-1550567962', 'UBA|WEB|WEBDEMO|19-02-2019|275845|811384', 'Insufficient Funds', '000729024996', '51', '61200'),
(4, 237468951, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 09:28:10', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 09:28:10\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Error\",\"datetime\":\"2019-02-19 09:28:52\"}}', 'cancelled', 'fail', 0, 2, 'TX-237468951-1550568490', 'UBA|WEB|WEBDEMO|19-02-2019|275846|873477', 'Transaction Error', '000729026190', 'Z1', '61200'),
(5, 254183796, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 09:30:55', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 09:30:55\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-02-19 09:31:38\"}}', 'cancelled', 'fail', 0, 2, 'TX-254183796-1550568655', NULL, 'Customer Cancellation', NULL, 'Z6', '61200'),
(6, 321865794, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 09:36:08', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 09:36:08\"}}', 'pending', 'pending', 0, 0, 'TX-321865794-1550568968', NULL, NULL, NULL, NULL, '0'),
(7, 396817245, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 10:06:41', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 10:06:41\"}}', 'pending', 'pending', 0, 0, 'TX-396817245-1550570801', NULL, NULL, NULL, NULL, '0'),
(8, 467239518, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 11:19:43', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:19:43\"}}', 'certified', 'success', 0, 0, 'TX-467239518-1550575183', 'FBN|WEB|WEBDEMO|19-02-2019|275860|117709', 'Approved by Financial Institution', '000729060810', '00', '61200'),
(9, 923157684, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 11:24:37', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:24:37\"}}', 'certified', 'success', 0, 0, 'TX-923157684-1550575477', 'FBN|WEB|WEBDEMO|19-02-2019|275861|568595', 'Approved by Financial Institution', '000729062185', '00', '30600'),
(10, 962738145, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 11:28:16', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:28:16\"}}', 'certified', 'success', 0, 0, 'TX-962738145-1550575696', 'FBN|WEB|WEBDEMO|19-02-2019|275862|970453', 'Approved by Financial Institution', '000729063300', '00', '30600'),
(11, 652978143, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 1, 2, '30000', '2019-02-19 11:37:04', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:37:04\"}}', 'pending', 'pending', 0, 0, 'TX-652978143-1550576224', NULL, NULL, NULL, NULL, '0'),
(12, 847539261, '', 6, 2, 4, '1200', '1200', 4, 0, 4, 0, 2, 2, '30000', '2019-02-19 11:50:53', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:50:53\"}}', 'certified', 'success', 0, 0, 'TX-847539261-1550577053', 'FBN|WEB|WEBDEMO|19-02-2019|275864|450804', 'Approved by Financial Institution', '000729070405', '00', '61200'),
(13, 824159763, '', 6, 2, 4, '2400', '2400', 4, 0, 4, 0, 2, 4, '30000', '2019-02-19 11:52:46', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:52:46\"}}', 'certified', 'success', 0, 0, 'TX-824159763-1550577166', 'FBN|WEB|WEBDEMO|19-02-2019|275865|809338', 'Approved by Financial Institution', '000729070947', '00', '122400'),
(14, 314865972, '', 2, 3, 5, '13650', '1800', 5, 0, 5, 0, 2, 3, '65000', '2019-02-19 11:57:02', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 11:57:02\"}}', 'certified', 'success', 0, 0, 'TX-314865972-1550577422', 'FBN|WEB|WEBDEMO|19-02-2019|275866|856676', 'Approved by Financial Institution', '000729072558', '00', '196800'),
(15, 492367815, '', 8, 2, 4, '600', '500', 0, 3, 4, 0, 2, 1, '30000', '2019-02-19 12:18:47', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 12:18:47\"}}', 'certified', 'success', 0, 0, 'TX-492367815-1550578727', 'FBN|WEB|WEBDEMO|19-02-2019|275867|895603', 'Approved by Financial Institution', '000729079099', '00', '30500'),
(16, 851942736, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 12:56:39', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 12:56:39\"},\"cancelled\":{\"msg\":\"Order payment was successful : Approved by Financial Institution\",\"datetime\":\"2019-02-19 12:57:05\"}}', 'certified', 'success', 0, 0, 'TX-851942736-1550580999', 'FBN|WEB|WEBDEMO|19-02-2019|275869|916197', 'Approved by Financial Institution', '000729091595', '00', '30600'),
(17, 928451736, '', 2, 5, 6, '9600', '3600', 5, 0, 8, 0, 1, 6, '80000', '2019-02-19 13:04:55', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 13:04:55\"}}', 'pending', 'pending', 0, 0, 'TX-928451736-1550581495', NULL, NULL, NULL, NULL, '0'),
(18, 859317264, '', 2, 5, 6, '9000', '5400', 5, 0, 7, 0, 2, 9, '50000', '2019-02-19 13:06:25', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 13:06:25\"},\"cancelled\":{\"msg\":\"Order payment was successful: Approved by Financial Institution\",\"datetime\":\"2019-02-19 13:07:02\"}}', 'certified', 'success', 0, 0, 'TX-859317264-1550581585', 'FBN|WEB|WEBDEMO|19-02-2019|275870|449709', 'Approved by Financial Institution', '000729095245', '00', '455400'),
(19, 342681795, '', 8, 2, 4, '600', '700', 0, 4, 4, 0, 2, 1, '30000', '2019-02-19 13:55:05', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 13:55:05\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Insufficient Funds\",\"datetime\":\"2019-02-19 13:55:34\"}}', 'cancelled', 'fail', 0, 0, 'TX-342681795-1550584505', 'UBA|WEB|WEBDEMO|19-02-2019|275872|725777', 'Insufficient Funds', '000729110833', '51', '30700'),
(20, 741362598, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 13:56:06', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 13:56:06\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction not Found\",\"datetime\":\"2019-02-19 14:30:23\"}}', 'cancelled', 'fail', 0, 0, 'TX-741362598-1550584566', NULL, 'Transaction not Found', NULL, 'Z25', '0'),
(21, 315289764, '', 8, 2, 4, '600', '700', 0, 4, 4, 0, 2, 1, '30000', '2019-02-19 13:57:02', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 13:57:02\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Exceeds Withdrawal Limit\",\"datetime\":\"2019-02-19 13:57:31\"}}', 'cancelled', 'fail', 0, 2, 'TX-315289764-1550584622', 'UBA|WEB|WEBDEMO|19-02-2019|275874|693296', 'Exceeds Withdrawal Limit', '000729111494', '61', '30700'),
(22, 495816732, '', 8, 2, 4, '600', '500', 0, 3, 4, 0, 2, 1, '30000', '2019-02-19 13:58:25', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 13:58:25\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Error\",\"datetime\":\"2019-02-19 13:58:51\"}}', 'cancelled', 'fail', 0, 0, 'TX-495816732-1550584705', 'UBA|WEB|WEBDEMO|19-02-2019|275875|979618', 'Transaction Error', '000729111889', 'Z1', '30500'),
(23, 467395182, '', 8, 2, 4, '600', '700', 0, 4, 4, 0, 2, 1, '30000', '2019-02-19 14:00:27', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:00:27\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Refer to Financial Institution\",\"datetime\":\"2019-02-19 14:01:19\"}}', 'cancelled', 'fail', 0, 0, 'TX-467395182-1550584827', 'UBA|WEB|WEBDEMO|19-02-2019|275876|627976', 'Refer to Financial Institution', '000729112683', 'Z1', '30700'),
(24, 389742516, '', 8, 2, 4, '600', '500', 0, 3, 4, 0, 2, 1, '30000', '2019-02-19 14:03:10', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:03:10\"},\"cancelled\":{\"msg\":\"Order payment was successful: Approved by Financial Institution\",\"datetime\":\"2019-02-19 14:03:39\"}}', 'certified', 'success', 0, 0, 'TX-389742516-1550584990', 'FBN|WEB|WEBDEMO|19-02-2019|275877|516287', 'Approved by Financial Institution', '000729113413', '00', '30500'),
(25, 278543619, '', 8, 2, 4, '600', '700', 0, 4, 4, 0, 2, 1, '30000', '2019-02-19 14:26:57', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:26:57\"},\"cancelled\":{\"msg\":\"Order payment was successful: Approved by Financial Institution\",\"datetime\":\"2019-02-19 14:27:19\"}}', 'certified', 'success', 0, 2, 'TX-278543619-1550586417', 'FBN|WEB|WEBDEMO|19-02-2019|275879|789336', 'Approved by Financial Institution', '000729120653', '00', '30700'),
(26, 346289751, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 14:40:57', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:40:57\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-02-19 14:41:04\"}}', 'cancelled', 'fail', 0, 0, 'TX-346289751-1550587257', NULL, 'Customer Cancellation', NULL, 'Z6', '30600'),
(27, 235698174, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 14:43:20', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:43:20\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-02-19 14:43:30\"}}', 'cancelled', 'fail', 0, 2, 'TX-235698174-1550587400', NULL, 'Customer Cancellation', NULL, 'Z6', '30600'),
(28, 943527681, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 14:45:39', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:45:39\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Not Completed\",\"datetime\":\"2019-02-19 14:46:15\"}}', 'cancelled', 'fail', 0, 0, 'TX-943527681-1550587539', NULL, 'Transaction Not Completed', NULL, 'Z1', '0'),
(29, 739584621, '', 6, 2, 4, '600', '600', 4, 0, 4, 0, 2, 1, '30000', '2019-02-19 14:47:06', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:47:06\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Not Completed\",\"datetime\":\"2019-02-19 14:54:59\"}}', 'cancelled', 'fail', 0, 0, 'TX-739584621-1550587626', NULL, 'Transaction Not Completed', NULL, 'Z1', '0'),
(30, 758416932, '', 8, 4, 3, '2000', '700', 0, 4, 3, 0, 2, 1, '99999', '2019-02-19 14:49:36', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:49:36\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Insufficient Funds\",\"datetime\":\"2019-02-19 14:50:18\"}}', 'cancelled', 'fail', 0, 0, 'TX-758416932-1550587776', 'UBA|WEB|WEBDEMO|19-02-2019|275885|607511', 'Insufficient Funds', '000729127656', '51', '100699'),
(31, 748693521, '', 8, 4, 3, '2000', '700', 0, 4, 3, 0, 2, 1, '99999', '2019-02-19 14:50:49', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:50:49\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Exceeds Withdrawal Limit\",\"datetime\":\"2019-02-19 14:51:18\"}}', 'cancelled', 'fail', 0, 0, 'TX-748693521-1550587849', 'UBA|WEB|WEBDEMO|19-02-2019|275886|867073', 'Exceeds Withdrawal Limit', '000729127936', '61', '100699'),
(32, 972435186, '', 8, 4, 3, '2000', '700', 0, 4, 3, 0, 2, 1, '99999', '2019-02-19 14:51:54', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:51:54\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-02-19 14:51:58\"}}', 'cancelled', 'fail', 0, 0, 'TX-972435186-1550587914', NULL, 'Customer Cancellation', NULL, 'Z6', '100699'),
(33, 896715324, '', 8, 4, 3, '2000', '500', 0, 3, 3, 0, 2, 1, '99999', '2019-02-19 14:52:32', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:52:32\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Error\",\"datetime\":\"2019-02-19 14:52:51\"}}', 'cancelled', 'fail', 0, 0, 'TX-896715324-1550587952', 'UBA|WEB|WEBDEMO|19-02-2019|275888|150109', 'Transaction Error', '000729128406', 'Z1', '100499'),
(34, 514369728, '', 8, 4, 3, '2000', '700', 0, 4, 3, 0, 2, 1, '99999', '2019-02-19 14:59:34', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 14:59:34\"},\"cancelled\":{\"msg\":\"Order payment was successful: Approved by Financial Institution\",\"datetime\":\"2019-02-19 15:00:28\"}}', 'certified', 'success', 0, 0, 'TX-514369728-1550588374', 'FBN|WEB|WEBDEMO|19-02-2019|275889|801750', 'Approved by Financial Institution', '000729130782', '00', '100699'),
(35, 629384157, '', 8, 3, 5, '4550', '500', 0, 3, 5, 0, 2, 1, '65000', '2019-02-19 15:02:03', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-19 15:02:03\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-02-19 15:12:28\"}}', 'cancelled', 'fail', 0, 0, 'TX-629384157-1550588523', NULL, 'Customer Cancellation', NULL, 'Z6', '65500'),
(36, 647213598, '', 10, 20, 1, '1000', '700', 0, 4, 1, 0, 1, 1, '50000', '2019-02-25 17:11:49', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-02-25 17:11:49\"}}', 'pending', 'pending', 0, 0, 'TX-647213598-1551114709', NULL, NULL, NULL, NULL, '0'),
(37, 261583947, '', 20, 20, 1, '1000', '600', 2, 0, 1, 0, 2, 1, '50000', '2019-03-05 15:43:37', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-05 15:43:37\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-05 15:43:45\"}}', 'cancelled', 'fail', 0, 0, 'TX-261583947-1551800617', NULL, 'Customer Cancellation', NULL, 'Z6', '50600');

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `content`, `type`, `date_modified`) VALUES
(2, 'Welcome to Onitshamarket.com, your reliable online marketplace.\r\n\r\nThe web site identified by the uniform resource locator www.onitshamarket.com (the “Site”) is provided by Internet Onitshamarket Limited (“Onitshamarket.com”) as a service to our customers.\r\n\r\nThis Security and Privacy Policy (the “Agreement” or “Policy”) is entered into between you as a registered user of the site (“Registered User”) and Onitshamarket.com.\r\n\r\nThe security of your personal information is very important to us and we value your trust highly. We will not sell or loan your personal information to a third party under any circumstances. We will work hard to protect the security and privacy of any personal information you provide to us and will only use such information as we have described herein. By your use and access of the Site, you accept this Security and Privacy Policy.\r\nWhat personal information do we collect?\r\n\r\nYou may choose to use or access our Site without revealing any personal and transactional information about yourself, but you will need to register and create an account in order to make a purchase or take advantage of certain features and functions, including, but not limited to, “My Contacts”. If you provide us with your information, you consent to the transfer and storage of the information on our server located in United States of America (“USA.”).\r\n\r\nAs set forth in more detail below, Onitshamarket.com collects personal information that you provide when using the Site. This information includes your first and last name, email address, a password and other information required when you create your Onitshamarket.com account or when you participate in or conduct surveys and contests via the Site, email, or other media of Onitshamarket.com. In order to protect your confidentiality and verify your identity, we may ask you to confirm your personal information when you contact our Customer Service Department.\r\n\r\nIn addition to the personal information we may collect and process during registration and any surveys, we also collect, store and process the following information about our users:\r\n1. Purchase Information\r\n\r\nWhen you make a purchase from Onitshamarket.com, we collect your name and payment method information. When you create an account at Onitshamarket.com, you can choose to save your billing information in “My Profile.” You can also save one or more shipping addresses in your Onitshamarket.com Address Book.\r\n2. Services Account Information\r\n\r\nWe collect personal information from users who wish to use any of the Onitshamarket.com services, including but not limited to, Onitshamarket.com’s Transaction Platform. In order to use these services you must provide your email address and password or create an account at Onitshamarket.com.\r\n3. Cookies and Other Computer Information\r\n\r\nWhen you visit the Site, you will be assigned a permanent “cookie” (a small text file) to be stored on your computer’s hard drive. The purpose of the cookie is to identify you when you visit the Site so that we can enhance and customize your online purchasing experience.\r\n\r\nYou can choose to browse on the Site without cookies, but without these identifier files you will not be able to complete a purchase or take advantage of certain features of the Site. These features include storing your shopping cart for later use and providing a more personalized future shopping experience. Each browser is different, so check the “Help” menu of your browser to learn how to change your cookie preferences.\r\n\r\nWe also collect certain technical information from your computer each time you request a page during a visit to the Site. This information may include your Internet Protocol (IP) address, your computer’s operating system, browser type and the address of a referring web site, if any. We collect this information to enhance the quality of your experience during your visit to the Site and will not sell or loan this information to any third parties.\r\n\r\nWe also contract with third parties to provide us with data collection and reporting services regarding our customers’ activities on the Site and to track and measure the performance of our marketing efforts. These third parties may use cookies and may receive anonymous information about your browsing and buying activity on this Site. None of your personally identifiable information (such as your name, address, email address, etc.) will be received by or shared with these third parties.\r\n4. Publishing Information\r\n\r\nWhen you submit any information on the Site during your use or access, including, but not limited to, information on the Onitshamarket.com blog, the rating system, or product catalog, you are deemed to have given your permission to Onitshamarket.com to publish such information, and Onitshamarket.com and the Site hereby enjoy an irrevocable, worldwide and royalty-free, sub-licensable license to use all information provided by such user to exercise the copyright, compilation, database and publicity rights any user has in such material or information, in any media form.\r\nHow we use your personal information?\r\n\r\nWe do not sell, loan, trade or exchange any user’s personal information without such user’s consent. The information we collect on the Site may be used to enhance your shopping experience in the following ways:\r\n\r\nDeliver merchandise and services that you purchase online; Register you as a member of Onitshamarket.com; Prevent fraud; Confirm your orders; Resolve disputes and prevent prohibited and illegal activities; Enforce our Terms of Use and related agreements; Respond to your customer-service inquiries or requests; Communicate great values and featured items to you; Find and stock the products you want; and Customize, measure and improve our services and your purchase experience.\r\nWhen and with whom can we share your personal information?\r\n\r\nWe do not sell or loan your personal information to any third parties under any circumstances. We will share your personal customer information only with our agents, representatives, service providers, and contractors for limited purposes, including, but not limited to, fulfilling customer orders, offering certain products and services in connection with the Site, communicating to customers, providing customer service, storing, sharing and retrieving customers’ photo images in our Photo Center, enhancing and improving clients’ purchase experience, enabling access to our partners’ web sites, providing a personalized purchase experience and preventing fraud and completing payment method processing.\r\n\r\nAside from the purposes described above, we will not share your personal information with any other third parties unless we have your express permission or there are special circumstances, such as when Onitshamarket.com is required by the government, law enforcement body, obligee whose legitimate right has been injured, subpoena or other legal document to share such information, or if we believe it to be reasonably necessary to protect the safety of any person; to address fraud, security or technical issues; or to protect Onitshamarket.com’s rights or property. We may also share aggregated demographic and statistical information with our partners. This is not linked to any personal information that can identify any individual person.\r\nHow can you control the use of your personal information?\r\n\r\nYou can modify or delete your personal information at any time. Simply go to My Account. Log in with your ID and password, then edit or delete your personal information at your discretion.\r\nHow can we protect the security of your personal information?\r\n\r\nYour personal information is protected by the password you created when you created an account on the Site (or another password you chose after changing a previous password). Please keep this password confidential. No Customer Service Associate or any other representative of Onitshamarket.com will ever ask you for your password. The confidentiality of your password is yours to protect. You may change it at anytime by going to My Account. Log in with your email address and password, then click “Modify Details, Email & Password” and enter a new password.\r\nMinors\r\n\r\nOnitshamarket.com does not intentionally collect personal information about minors or other persons without full civil conduct capacity, but based on the properties of Internet, there is no way for Onitshamarket.com and the Site to distinguish the age or capacity of the users. By accepting this Agreement through your use or access of the Site, you certify that you are a person over 18 years old with full capacity and ability to form a legally binding contract in the jurisdiction in which you are resident or in which you are entering into this Agreement. If you do not agree to (or cannot comply with) any of the terms of this Agreement, do not use the Site.\r\n\r\nMeanwhile, if a minor or other person does not have full civil conduct capacity and has provided personal information to us without the proper consent of their parent or legal guardian, such parent or legal guardian should contact us to remove such personal information.\r\nSecurity\r\n\r\nYour information is stored on our servers located in the USA, and we adopt lots of tools, means and technologies to protect them against unauthorized access, use and disclosure. For instance, we use a technology called Secure Sockets Layer (SSL), which encrypts (or encodes) sensitive information before it is sent over the Internet. However, we are limited in our efforts by the technologies currently available, and no data transmission or storage over Internet can be guaranteed to be perfectly safe. Therefore, although we work very hard to protect your information and privacy, we do not promise or guarantee that your information will always be private and safe.\r\nGeneral\r\n\r\nWe realize that making purchases on the Site, or any other web site, requires trust on your part. We value your trust very highly and pledge to you, our clients that we will work hard to protect the security and privacy of any personal information you provide to us and that your personal information will only be used as set forth in this Policy. This includes your name, address, phone number, email address or checking account information, in addition to any other personal information that can be linked to you, personally.\r\n\r\nOnitshamarket.com may provide links to certain third party web sites. This Security and Privacy Policy applies only to activities conducted and personal information collected on the Site. Other web sites may have their own policies regarding privacy and security. We encourage you to review the privacy policies on these sites before you use and access them. You are solely responsible for your use and access of other web sites.\r\n\r\nOnitshamarket.com will obtain your consent before allowing the download of any data from the Site, and Onitshamarket.com will not automatically download any data to your computer system. Once you consent to the initial download of any data, you may receive automatic updates or patches pertaining to such software. You understand and agree that any material, including but not limited to downloaded software, required or automated updates, modifications, reinstallations, or software otherwise obtained through the use of the Site is done at your own discretion and risk and that you will be solely responsible for any damages to your computer system or loss of data that may result from any such material.\r\n\r\nOnitshamarket.com reserves the right to update or modify this Security and Privacy Policy at any time without prior notice to you. If Onitshamarket.com makes a change that, in Onitshamarket.com’s sole discretion, is material, Onitshamarket.com will notify you via e-mail to the email address associated with your account. Your use of the Site following any such change constitutes your unconditional agreement to follow and be bound by the Security and Privacy Policy as amended. Onitshamarket.com may transfer this Policy and all or part of its rights, obligations and interests to any party or entity in its sole discretion; however, a User may not assign its rights, obligations and interests under this Policy to any party or entity.\r\n\r\nTerms which have not been defined or stipulated in this Agreement shall be interpreted in accordance with the definition(s) or provision(s) of the Terms of Use of Onitshamarket.com. ', 'privacy', '2019-03-07 04:40:54'),
(5, 'We ae very <b>good</b> to go and good ksksksksks <br>', 'terms', '2019-03-07 05:10:49'),
(6, 'Hello <b>everyone</b>... Hope you\'re good<br>', 'agreement', '2019-03-07 09:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `purchaser_id` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `settings` text NOT NULL,
  `notes` text NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `settings`, `notes`, `img_name`, `status`) VALUES
(1, 'Payment on Delivery', '', 'Please note we will never ask you to pay money via SMS or email.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Important Information on this payment method:&lt;/b&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Payment must be made before opening a package&lt;/li&gt;&lt;li&gt;Please ensure you have the exact amount for your order&lt;/li&gt;&lt;li&gt;Once the seal is broken, item can only be returned if it is damaged or has a missing item(s).&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;You can always call us on 0701 2434 5678&lt;br&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/p&gt;', 'payment_on_delivery.png', 1),
(2, 'Interswitch Webpay', '', '&lt;p&gt;&lt;b&gt;Please note we will never ask you to make a payment via SMS or Email&lt;br&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;We are going to redirect you to Interswitch secured online platform, where you \r\nwill be able to pay with your Naira Mastercard, Visa or Verve cards.&lt;br&gt;&lt;b&gt;\r\nPlease have your phone ready for SMS token to complete payment.&lt;/b&gt;&lt;br&gt;\r\nDo not hesitate to call us on 0701 2345 5678 if you have any question.&lt;br&gt;\r\n&lt;br&gt;&lt;/p&gt;', 'interswitch_logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(50) NOT NULL,
  `amount` decimal(10,0) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL,
  `date_requested` datetime NOT NULL,
  `status` varchar(255) NOT NULL COMMENT 'pending/processing/completed',
  `approved_by` int(11) NOT NULL,
  `date_approved` varchar(50) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `remark` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_address`
--

CREATE TABLE `pickup_address` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phones` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `available_area` varchar(255) NOT NULL,
  `charge` int(11) NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_address`
--

INSERT INTO `pickup_address` (`id`, `title`, `phones`, `emails`, `address`, `available_area`, `charge`, `enable`) VALUES
(3, 'Aina Akingbala Store', '08169254598,08070994845', 'philo4u2c@gmail.com', '530A, Aina Akingbala Street, Ikeja', '[\"1\",\"2\"]', 500, 1),
(4, 'Lekki Store', '08169254598,08070994845', 'philo4u2c@gmail.com', '13A Old Admiralty way, Lekki Phase 1.', 'null', 700, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
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
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `category_id`, `sku`, `product_name`, `brand_name`, `model`, `main_colour`, `product_description`, `youtube_id`, `in_the_box`, `highlights`, `product_line`, `colour_family`, `main_material`, `dimensions`, `weight`, `attributes`, `product_warranty`, `warranty_type`, `warranty_address`, `certifications`, `product_status`, `report`, `views`, `created_on`) VALUES
(1, 20, 26, '32697145', 'A product in Accessories Section', 'Apple', 'Generic Product', 'red', 'Helloooo', '', '', '', 'Oslo Info', '[\"green\",\"red\"]', 'plume', '13 X 45 X 30', '1000', '[]', '', '', '', '', 'approved', 0, 103, '2019-01-26 21:26:55'),
(2, 3, 18, '24971385', 'Generic 2pcs DC-DC CC CV Buck Converter Step-down Power Supply Module 7-32V To 0.8-28V 12AB', 'Apple', 'Generic Product', 'green', 'Hello everyone', '', 'Hello everyone', 'Hello everyone', 'Schoolville Limited', '[\"yellow\"]', 'textile', '13 X 45 X 30', '7500', '[]', '', '', '', '', 'approved', 0, 50, '2019-01-27 12:29:22'),
(3, 3, 19, '49827365', 'TCL 32&quot; FHD/HD Digital Flat TV', 'others', 'Generic Product', 'black', '', '', '', '', 'Schoolville Limited', '[\"green\",\"yellow\",\"black\"]', 'synthetic', '', '7500', '[]', '', '', '', '', 'approved', 0, 5, '2019-01-28 15:19:45'),
(4, 3, 27, '21874953', 'Swidu 2 In 1 Luxury Brand Gold-plated Watch &amp; Gold-plated Bracelet', 'others', 'Generic Product', 'green', '', '', '', '', 'Schoolville Limited', '', 'textile', '', '', '[]', '', '', '', '', 'approved', 0, 23, '2019-01-28 16:02:56'),
(5, 3, 14, '91842536', '21 Attire Black Peplum Top With Stylish Sleeves', 'others', 'Generic Product', 'purple', '<div class=\"prod_description\"><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, <br></p><p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549030146/onitshamarket/product/description/sso3mdwhrmtjuu41fiwd.jpg\" xss=\"removed\"><br></p><p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>', '', 'In the box<br>', '<p>Hey </p><ol><li>Check it out</li><li>You gonna love it<br></li></ol>', 'Schoolville Limited', '[\"green\",\"red\",\"yellow\",\"red\"]', 'plume', '13 X 45 X 30', '1000', '[]', 'Product warranty<br>', '[]', 'Warranty address<br>', '[]', 'approved', 0, 2, '2019-02-01 14:14:04'),
(6, 3, 14, '13847695', '21 Attire Black Peplum Top With Stylish Sleeve', 'others', '', 'yellow', '<div class=\"prod_description\"><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and <br />\r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy<br />\r\n text ever since the 1500s, when an unknown printer took a galley of <br />\r\ntype and scrambled it to make a type specimen book. It has survived not <br />\r\nonly five centuries, but also the leap into electronic typesetting, <br />\r\nremaining essentially unchanged.</p><p><img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549048621/onitshamarket/product/description/aybzzmvqwdggkd71qc3a.jpg\" style=\"width: 25%;\"><br></p><p> It was popularised in the 1960s with <br />\r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more<br />\r\n recently with desktop publishing software like Aldus PageMaker <br />\r\nincluding versions of Lorem Ipsum.</p></div>', '', '', '&lt;p&gt;It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Good Fabric&lt;/li&gt;&lt;li&gt;Limen&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', 'Schoolville Limited', '[]', 'natural fibre', '13 X 45 X 30', '7500', '[]', '', '', '', '', 'pending', 0, 0, '2019-02-01 19:21:47'),
(7, 3, 40, '87516493', 'Generic 2pcs DC-DC CC CV Buck Converter Step-down Power Supply Module 7-32V To 0.8-28V 12AB', 'others', 'Generic Product', 'yellow', '<div class=\"prod_description\"><p>Hello Guys,</p><p>This is gonna be lovely.</p><p><img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549187335/onitshamarket/product/description/p50mn1wawtva8bsobvnk.jpg\" style=\"width: 25%;\"><br></p><p>What is happening here?<br></p></div>', '', '&lt;p&gt;Nothing serious is the box. Contact me for more info...&lt;br&gt;&lt;/p&gt;', '&lt;ol&gt;&lt;li&gt;One&lt;/li&gt;&lt;li&gt;Two&lt;/li&gt;&lt;li&gt;Three&lt;/li&gt;&lt;li&gt;Four&lt;/li&gt;&lt;li&gt;Five&lt;/li&gt;&lt;li&gt;Six&lt;/li&gt;&lt;li&gt;Seven&lt;br&gt;&lt;/li&gt;&lt;/ol&gt;', 'Schoolville Limited', '[\"green\",\"yellow\",\"black\"]', 'silicon', '74X12X56', '80', '[]', '&lt;p&gt;No product warranty for this item.&lt;br&gt;&lt;/p&gt;', '[\"Repair by vendor\"]', '', '[]', 'pending', 0, 0, '2019-02-03 09:52:41'),
(9, 3, 14, '72916834', 'Product in Hi Fi System with product description', 'others', 'Generic Product', '', '<div class=\"prod_description\"><div><b>What is Lorem Ipsum? <br></b></div><div><b><br></b><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and<br><br />\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard <br><br />\r\ndummy text ever since the 1500s, when an unknown printer took a galley <br><br />\r\nof type and scrambled it to make a type specimen book. It has survived <br><br />\r\nnot only five centuries, but also the leap into electronic typesetting, <br><br />\r\nremaining essentially unchanged. It was popularised in the 1960s with <br><br />\r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more<br><br />\r\n recently with desktop publishing software like Aldus PageMaker <br><br />\r\nincluding versions of Lorem Ipsum.</p><p><img src=\"https://res.cloudinary.com/onitshamarket/image/upload/v1549351866/onitshamarket/product/description/c5ehqds0pz6wi7osk0xr.jpg\"><br></p><br><br />\r\n</div><div><b>Why do we use it? <br></b></div><div><b><br></b><p>It is a long established fact that a reader will be distracted by the<br><br />\r\n readable content of a page when looking at its layout. The point of <br><br />\r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of <br><br />\r\nletters, as opposed to using \'Content here, content here\', making it <br><br />\r\nlook like readable English. Many desktop publishing packages and web <br><br />\r\npage editors now use Lorem Ipsum as their default model text, and a <br><br />\r\nsearch for \'lorem ipsum\' will uncover many web sites still in their <br><br />\r\ninfancy. Various versions have evolved over the years, sometimes by <br><br />\r\naccident, sometimes on purpose (injected humour and the like).</p><br><br />\r\n</div></div>', '', '', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It <br><br><br />\r\nhas roots in a piece of classical Latin literature from 45 BC, making it<br><br><br />\r\n over 2000 years old. Richard McClintock, a Latin professor at <br><br><br />\r\nHampden-Sydney College in Virginia, looked up one of the more obscure <br><br><br />\r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through <br><br><br />\r\nthe cites of the word in classical literature, discovered the <br><br><br />\r\nundoubtable source.</p>', 'Schoolville Limited', '[\"pink\"]', 'resin', '1260', '1000', '[]', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It <br><br><br />\r\nhas roots in a piece of classical Latin literature from 45 BC, making it<br><br><br />\r\n over 2000 years old. </p><p>Richard McClintock, a Latin professor at <br><br><br />\r\nHampden-Sydney College in Virginia, looked up one of the more obscure <br><br><br />\r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through <br><br><br />\r\nthe cites of the word in classical literature, discovered the <br><br><br />\r\nundoubtable source.</p>', '[]', '', '[\"ASTM Certified\",\"Australian Made\"]', 'pending', 0, 0, '2019-02-03 11:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` bigint(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `seller_id` bigint(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured_image` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 5, 3, 't05fgzi1v2lspiocxftl.jpg', 1, '2019-02-03 16:36:26'),
(13, 9, 3, 's8oqwttapxrstyqtlghz.jpg', 1, '2019-02-05 06:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product review and rating';

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `display_name` varchar(55) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

CREATE TABLE `product_variation` (
  `id` bigint(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `variation` varchar(255) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL DEFAULT '123456',
  `quantity` varchar(55) NOT NULL,
  `sale_price` varchar(55) NOT NULL,
  `discount_price` varchar(55) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product variation - Prices for the product.';

--
-- Dumping data for table `product_variation`
--

INSERT INTO `product_variation` (`id`, `product_id`, `variation`, `sku`, `isbn`, `quantity`, `sale_price`, `discount_price`, `start_date`, `end_date`) VALUES
(1, 1, 'Variatiom', '12333', '12333', '11', '50000', '', '', ''),
(2, 2, 'Green', '1234', '1234444', '17', '75000', '', '', ''),
(3, 3, 'Black', '12452455', '012345687', '14', '59999', '47100', '', ''),
(4, 4, 'Green', '12345', '10555544', '18', '98000', '70000', '', ''),
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

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `pid` bigint(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `display_name` varchar(255) NOT NULL DEFAULT 'an intended buyer',
  `data` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `upvotes` int(11) DEFAULT NULL,
  `qtimestamp` datetime NOT NULL,
  `atimestamp` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `pid`, `question`, `answer`, `display_name`, `data`, `status`, `upvotes`, `qtimestamp`, `atimestamp`) VALUES
(1, 3, 'Nothing much to say now', 'Working in perfect condition...', 'intended buyer', '', 'approved', 4, '2019-01-29 00:00:00', '2019-02-08 05:16:43'),
(2, 1, 'Does this comes with System Manual?', 'kgkfjfjfj', 'An Intending Buyer', '', 'approved', NULL, '2019-02-01 03:53:19', NULL),
(4, 1, 'Does this comes with Shipping fee', 'Yes it does, as a matter of fact you don\'t need to pay. Just enter your shipping address and we will deliver..SMH', 'Chidi Jeffrey', 'philipsokoya@gmail.com', 'approved', NULL, '2019-02-06 07:52:26', '2019-02-06 08:12:16'),
(5, 1, 'And yet another question...', '', 'Chidi Jeffrey', 'philipsokoya@gmail.com', 'approved', NULL, '2019-02-06 08:14:10', NULL),
(6, 1, 'How do I get my order beforeVal.', '', 'Sokoya Philip', '08169254598', 'pending', NULL, '2019-02-06 08:22:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed`
--

CREATE TABLE `recently_viewed` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_ids` text NOT NULL,
  `viewed_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recently_viewed`
--

INSERT INTO `recently_viewed` (`id`, `user_id`, `product_ids`, `viewed_date`) VALUES
(1, 3, '[\"1\",\"2\",\"5\",\"3\",\"12\",\"6\",\"7\",\"4\",\"47\",\"48\",\"41\",\"8\"]', '2018-12-06 06:36:52'),
(2, 2, '[\"7\",\"4\"]', '2018-12-06 11:34:05'),
(3, 20, '[\"1\",\"2\",\"4\"]', '2019-02-12 08:01:07'),
(4, 10, '[\"4\",\"2\"]', '2019-02-18 19:22:42'),
(5, 9, '[\"1\"]', '2019-03-05 14:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `legal_company_name` varchar(255) DEFAULT NULL,
  `store_name` varchar(255) NOT NULL,
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
  `disable_products` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Sellers Main Table';

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `uid`, `legal_company_name`, `store_name`, `address`, `tin`, `reg_no`, `vat_file`, `license_to_sell`, `platform_selling`, `own_brand`, `main_category`, `no_of_products`, `product_condition`, `seller_phone`, `bank_name`, `account_name`, `account_number`, `account_type`, `bvn`, `balance`, `terms`, `company_pic`, `date_applied`, `disable_products`) VALUES
(1, 3, 'Schoolville Limited', '', 'my address', '71718181', 'Ng83833', 'There was an error', 0, '', 0, 'Gloceries', '', '', '08169254598', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '2820226778', 'Saving', '7262626228', '322000', 'Here is my information... Nothing serious... Thank you', NULL, '0000-00-00 00:00:00', 0),
(8, 4, 'Sokoya Adeniji Company', '', '530A, Aina Akingbala Street, Ikeja', '717', NULL, NULL, 1, '', 1, 'Computers &amp; Accessories', '21-50', '', '', NULL, NULL, NULL, '', NULL, '0', '', NULL, '0000-00-00 00:00:00', 0),
(9, 6, 'Woyong Okey Company', '', '530A, Aina Akingbala Street, Ikeja', '71716', NULL, NULL, 1, '', 1, 'Electronics', '21-50', '', '', NULL, NULL, NULL, '', NULL, '0', '', NULL, '0000-00-00 00:00:00', 0),
(10, 8, 'JeffDev', '', 'No 13 Dan Ngozi Iyio Street', '4949644', NULL, NULL, 1, '', 1, 'Computers &amp; Accessories', '51-100', '', '', NULL, NULL, NULL, '', NULL, '0', '', NULL, '0000-00-00 00:00:00', 0),
(11, 9, 'James Integrated Services', '', '15A Ajegunle Street Ita-Oluwo, Ikorodu, Lagos State.', '00447762', '', 'There was an error', 1, '', 0, 'Electronics', '', '', '', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '0151820365', '', '0122665544', '0', '', NULL, '2018-11-14 12:13:24', 0),
(13, 10, 'Sokoya Adeniji Company', '', 'hshshs shshss', '717', NULL, NULL, 0, '', 0, 'Cameras & Electronics', '51-100', 'refurbished', '', NULL, 'Sokoya Adeniji Philip', '744455522222', 'savings', NULL, '0', '', NULL, '2018-12-03 17:46:39', 0),
(14, 12, 'Sokoya Adeniji Company', '', 'hshshsl cjcjjsjsjs sjsjsjsj', '00447762', '', NULL, 0, '', 0, 'TVs & Electronics', '51-100', 'refurbished', '', NULL, 'Sokoya Adeniji Philip', '744552221112', 'savings', NULL, '0', '', NULL, '2018-12-04 08:29:23', 0),
(17, 15, 'Schoolville Limited', '', '530A Aina Akingbala Street', '75551122', '', NULL, 0, '', 0, 'Cameras & Electronics', '1-50', 'refurbished', '7555122', NULL, 'Sokoya Adeniji Philip', '744552221112', 'savings', NULL, '0', '', NULL, '2018-12-06 09:21:32', 0),
(21, 20, 'Oslo Info', '', 'D6, Ajegunle Ita oluwo', '7551745512000', '', NULL, 0, '', 0, 'TVs & Electronics', '1-50', 'new', '08169254598', 'Guaranty Trust Bank Plc', 'Olaleke Adeola', '744455522222', 'current', NULL, '0', '', NULL, '2019-01-26 07:52:52', 0),
(25, 28, 'Fabulous Clothing', 'Fabulous Clothing', '530A Aina Akingbala Dtreet', '01254521', '', NULL, 0, '', 0, 'TVs & Electronics', '1-50', 'new', '07122445533', 'Access Bank Plc', 'Fabulous Clothing', '0144557722', 'current', NULL, '0', '', NULL, '2019-03-08 11:15:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sellers_notification_message`
--

CREATE TABLE `sellers_notification_message` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 20, 'Your product listing has been approved', 'This is to notify you the product with ( A product in Accessories Section ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/a-product-in-accessories-section-1//\'>Click here to see it live.</a><br /> Regards.', 1, '2019-01-28 16:04:56'),
(13, 3, 'Your product listing has been approved', 'This is to notify you the product with ( 21 Attire Black Peplum Top With Stylish Sleeve ) has been approveed  <br /> Check your listing <a class=\'btn-link\' href=\'https://www.onitshamarket.com/product/21-attire-black-peplum-top-with-stylish-sleeve-5//\'>Click here to see it live.</a><br /> Regards.', 1, '2019-02-03 18:17:54'),
(14, 22, 'Your account has been approved', 'Congrats, we are glad to have you on board.<br /> Regards.', 0, '2019-02-27 15:34:37'),
(15, 22, 'Your account has been approved', 'Congrats, we are glad to have you on board.<br /> Regards.', 0, '2019-02-27 15:39:02'),
(16, 22, 'Your account has been approved', 'Congrats, we are glad to have you on board.<br /> Regards.', 0, '2019-02-27 15:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `se_sessions`
--

CREATE TABLE `se_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
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
('je7llo34rqpausga7o0snr04cnhqc5hn', '::1', 1549371875, ''),
('s0qlhn0bs6o92jij93e7i70171atisfd', '127.0.0.1', 1549186684, ''),
('eiquok3qec2osgplub0agtl487ftfhn9', '127.0.0.1', 1549354506, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('a9o3innmc6go6jl39j1kg1er9e403l45', '::1', 1549447750, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b63617465676f72795f69647c733a323a223134223b),
('hjahvsobgqghkg1lndep14ta6m62cttg', '::1', 1549624759, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('qojjpvvtq6ib1130qlt8vj1rkkb75026', '::1', 1549805859, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223130223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a31393a227068696c6f3475326340676d61696c2e636f6d223b),
('5ijk8ekm2srielsnqkgah45s3762oolc', '::1', 1549994100, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b),
('toftqqppchbv2m00c8kcr08ahsl0ejq0', '::1', 1550760598, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a313a2233223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32323a227068696c6970736f6b6f796140676d61696c2e636f6d223b63617465676f72795f69647c733a323a223430223b),
('0cpjspsspugmlp93tkmead8iqpffmlik', '::1', 1550990430, 0x5f5f63695f766172737c613a313a7b733a393a226572726f725f6d7367223b733a333a226f6c64223b7d),
('gh3gmabmov20c4nfm6j7aonmiqjm2tkj', '::1', 1551001033, ''),
('m7inlbeu61bvvi3qevcpckuq7ecqd2or', '127.0.0.1', 1551117392, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223230223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32353a226f6c616c656b656164656f6c61313640676d61696c2e636f6d223b),
('uhcul9dq47aac7hms6dhiv7f34tqd4fv', '127.0.0.1', 1551282135, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223232223b73656c6c65725f7374617475737c733a383a22617070726f766564223b656d61696c7c733a32393a227068696c69702e736f6b6f7961407363686f6f6c76696c6c652e636f6d223b),
('nfv4m3td0itjm02mtb5lahvrpdohoj90', '127.0.0.1', 1551340243, ''),
('dg1cdp4n6ns24tnstk1bcnptku2e3spc', '127.0.0.1', 1551773576, ''),
('2kbg2pfdeghfs92ctq2oofqsieqt7g5e', '127.0.0.1', 1551978964, ''),
('jh7qgibgkd904d3f39v0qpgli81o4fnu', '127.0.0.1', 1552008587, 0x6c6f676765645f696e7c623a313b6c6f676765645f69647c733a323a223233223b69735f73656c6c65727c733a353a2266616c7365223b656d61696c7c733a32323a22736f6b6f79617068696c697040676d61696c2e636f6d223b737563636573735f6d73677c733a38393a224163636f756e74206372656174656420616e6420796f75277265206c6f6767656420696e207375636365737366756c6c792c20706c65617365206372656174652066696c6c2074686520666f726d20746f2070726f63656564223b5f5f63695f766172737c613a313a7b733a31313a22737563636573735f6d7367223b733a333a226e6577223b7d),
('tn5uj4hbvimou8rg13lrb477ee25fgcv', '127.0.0.1', 1552048576, '');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `img_link`, `status`) VALUES
(1, 'f9eed1028d772ba829c5bd967eb7e92e.jpg', 'https://www.onitshamarket.com/pages/contact/', 'active'),
(2, '62ca609a19270d89b5928de298e1980a.jpg', 'https://www.onitshamarket.com/pages/', 'active'),
(3, '40006809f802ddac93ec138997bb3fd5.jpg', 'https://www.onitshamarket.com/', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL,
  `spec_name` varchar(255) NOT NULL,
  `options` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `multiple_options` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This handles all the product specifications...';

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

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `system_activities` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `context` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Record all system activities';

--
-- Dumping data for table `system_activities`
--

INSERT INTO `system_activities` (`id`, `uid`, `context`, `timestamp`) VALUES
(1, 3, 'The user with 2 has been updated to admin_right', '2019-02-20 16:06:30'),
(2, 3, 'The user with 2 has been updated to admin_right', '2019-02-20 16:06:56'),
(3, 3, 'The user with 2 has been updated to admin_right', '2019-02-20 16:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `wallet` decimal(11,0) NOT NULL DEFAULT '0',
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
  `groups` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `phone`, `display_name`, `profile_pic`, `gender`, `wallet`, `password`, `salt`, `code`, `ip`, `date_registered`, `last_login`, `newsletter`, `recovery_code`, `account_status`, `is_seller`, `is_admin`, `groups`) VALUES
(1, 'bisi@gmail.com', 'Sokoya', 'Philip', '08169254598', 'mrphilo1234455', '', 'female', '0', 'eaf859633c1bc66dc04a57f3d2579a0a0f5a626c17940a0010473222c9ee61f0', 'Dr=SLzk1viy$JP9q<=)bTn0V##gdQctp;!zmvb.g:8iur9T?!+', '', '127.0.0.1', '2018-08-23 16:21:31', '2018-09-04 20:44:25', 0, '', '', '1', 0, 0),
(2, 'phil@gmail.com', 'Sokoya', 'Adeniji', '', '', '', '', '0', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '', '::1', '2018-09-17 21:40:35', '2019-02-20 15:12:16', 0, '', '', '0', 1, 4),
(3, 'philipsokoya@gmail.com', 'Philip', 'Sokoya', '08070994845', 'philip_sokoya', '', 'male', '0', '65b9c7f09b1b269337ab71275fea46f86bb91fe8aaf565799fd6ce78181a5aa8', '39A4.lf;YSa7F=2.&o9MP0n09vTjd<T:jljv^yc(;4h-MdiF$D', '', '127.0.0.1', '2018-09-17 21:40:35', '2019-03-05 04:10:42', 0, '', '', 'approved', 1, 1),
(4, 'seller@gmail.com', 'Jeff', 'Besox', '', '', '', '', '0', 'ee707647928828271f6c2cd23ae10fe8bdc2f58b4745dfb3a2e8f18d7a3003c2', 'FA6rGIWT:nH+qNbY0gAC84)HpylN*aNrg9Sm?8eqERNY,ncLg:', '', '127.0.0.1', '2018-10-22 12:21:30', '2019-03-08 08:32:07', 0, '', '', 'approved', 1, 1),
(5, 'seller2@gmail.com', 'Phil', 'Tusey', '', '', '', '', '0', 'e71997718ceebe98d6b05bf3f4b9e54d338178996973e8999282b3313fdcd10d', '8Ge(<|c=Hw9Gh@1=n!_,>vXN|OWaz,($^2wqFPAm>(*l)NnZsE', '', '::1', '2018-10-22 12:26:31', '2018-11-20 15:07:59', 0, '', '', 'false', 0, 0),
(6, 'okey@gmail.com', 'Woyong', 'Okey', '', '', '', '', '0', 'f74b08dc3f1fbf7c4cb26c04102f69adcb2f9446165326692350648ce9ffc3b0', 'Jd#X7j!5kHvh+?D;HOV1)(RUjoCGg<H(k|.cRtQB.pX<zwbLid', '', '::1', '2018-10-22 15:38:24', '2018-10-22 15:41:05', 0, '', '', 'approved', 0, 0),
(7, 'chidij75@gmail.com', 'Jeffrey', 'Chidi', '', '', '', '', '0', '09977119f3e042e78cfc983f526ed5b049cacbcfd3ebc36f7eed501a95ca474e', 'L+wJTq96s5vjz>YPapsC*qtW5ResseWx^ze>W@C19gLS#C-TrO', '', '::1', '2018-10-23 08:54:45', '2018-10-23 08:54:45', 0, '', '', 'false', 0, 0),
(8, 'jeff@gmail.com', 'Jeffrey', 'Chidi', '', '', '', '', '0', '114d07eca1eec8fb506dae23659aa4277e9af6be5049d5e1575cdecf63fd33d7', 'b#K^m&=S?t5remy0Z5C^bIvAi#?S4D;btyB#Wj=5:@.:1>p@17', '', '::1', '2018-10-23 08:58:13', '2018-10-26 12:26:32', 0, '', '', 'approved', 0, 0),
(9, 'james@gmail.com', 'James', 'Adeoye', '', '', '', '', '0', '39a7e45ce9e2231580ab38f4266d78c7030ba21a5cc58ceed839174bd3501e14', 'mYL8E1l3klr4YNZzs<C:wa+e2<Z$A.SBK*S$OVZGbAhs|gsm^a', '', '127.0.0.1', '2018-11-14 12:03:08', '2019-03-05 14:02:57', 0, '', '', 'approved', 0, 0),
(10, 'philo4u2c@gmail.com', 'Firstname', 'Lastname', '08755445522', '', '', '', '0', '3914af8c3149af07e0c6cb4cd43493949510da978f3aaa521bf2504bb4e41210', ':_6Tn3L|=aAx>&G-X09ClqP5?Hj!k.*a._L:N)my@aTaKXYHQ@', '', '127.0.0.1', '2018-12-03 17:46:39', '2019-03-06 09:07:07', 0, '', '', 'approved', 0, 0),
(12, 'newemail@gmail.com', 'Woyong', 'Okey', '08755445522', '', '', '', '0', '4a248516bcb6f71f0d706d09d92d5bb8ad0d38a334e41ee64e1d33c2a6f0a918', 'GLapAh;JRG)qh;pyx<<0DS56eB6%m!;DeY;Da+jpJmRpsgV-mS', '', '::1', '2018-12-04 08:29:23', '2018-12-04 08:32:34', 0, '', '', 'pending', 0, 0),
(15, 'olalekeadeola17@gmail.com', 'Schoolville', 'Limited', '', '', '', '', '0', '7b36a25f6faef006b1df26d83791f5b1e746f8112f6b7b194d695bf7b38a8e0b', '@*H2A9yKcuF4oa9Z:?B@k.7PQa:PNP#!9hmh#aj69+HXisK>kx', '', '', '2018-12-06 09:21:32', '2018-12-06 09:21:32', 0, '', '', 'pending', 0, 0),
(20, 'olalekeadeola16@gmail.com', 'Olaleke', 'Adeola', '', '', '', '', '0', '9c056297aae10a96e187fb3ea7c37d5db53d499b98f7c2083d749c3154ffe5ba', 'p6OkBp-4>BCw0#2OFA!cocH*sqB)g7yUX<@j3|tja6@9RL_s7S', 'wKWYRmJ42ej4LQqNSI1k2tQAACJzHZx099EJUYEn', '127.0.0.1', '2019-01-26 07:52:52', '2019-03-05 15:43:13', 0, '', '', 'approved', 0, 0),
(21, 'mark@gmail.com', 'Mark', 'Luke', '', '', '', '', '0', '58befa42b44185e8d9b2ec8ce1cc97c1428ff095766d14515cfd5497f6a7561f', 'o7Y9e^AvhO$?aEeG$7TlZk(&#cJKWTeEr#M5t+0T;|EY;1OZzq', '', '::1', '2019-02-04 20:35:18', '2019-02-04 20:35:22', 0, '', '', 'false', 0, 0),
(24, 'abc@gmail.com', 'Adeniji', 'Philip', '08122331144', '', '', '', '0', '706b223a417294067d8630a4437b8ce7a5e600a88e1a84572ea16758981e329d', '1;c^rZ$l.lS&J__g2M1A2D3I&n,<W&1LH*jL9*B=cCPLe,F-|w', '', '127.0.0.1', '2019-03-08 07:37:42', '2019-03-08 07:37:42', 0, '', '', 'false', 0, 0),
(28, 'sokoyaphilip@gmail.com', 'Schoolville Philip', 'Last Name', '08070995222', '', '', '', '0', '317250c8931987ec3ed36bab56e60cdb774cb458ad81a137b2fbe81c025dab67', '?WD;C4k4F!B|.j*8Feg8a#Xvb0w6MdTGQBJ@nZ|4wHO?;*.vXl', '', '127.0.0.1', '2019-03-08 11:14:50', '2019-03-08 11:14:50', 0, '', '', 'pending', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `categories` ADD FULLTEXT KEY `name_2` (`name`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_logs`
--
ALTER TABLE `error_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_setting`
--
ALTER TABLE `homepage_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_address`
--
ALTER TABLE `pickup_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name_2` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name` (`product_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name_2` (`product_name`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers_notification_message`
--
ALTER TABLE `sellers_notification_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_sessions`
--
ALTER TABLE `se_sessions`
  ADD KEY `se_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_activities`
--
ALTER TABLE `system_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `error_logs`
--
ALTER TABLE `error_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `homepage_setting`
--
ALTER TABLE `homepage_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pickup_address`
--
ALTER TABLE `pickup_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sellers_notification_message`
--
ALTER TABLE `sellers_notification_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `system_activities`
--
ALTER TABLE `system_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
