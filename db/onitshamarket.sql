-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 10:06 AM
-- Server version: 5.7.11
-- PHP Version: 7.2.7

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
(3, 3, 1, 2, 'Omole Phase 2', 'Jeffrey', 'Chidi', '08169254598', '', 0),
(4, 3, 1, 1, 'No 13 Dan Ngozi Iyio Street', 'Cynthia', 'Britney', '08129128033', '', 1),
(5, 3, 1, 2, 'MS Area', 'Mark', 'Peters', '08129128033', '', 0),
(6, 3, 1, 2, 'Planet Estate Viciao', 'Jonathan', 'Griffin', '080142445414', '', 0),
(7, 5, 1, 1, '530A, Aina Akingbala Street, Ikeja', 'Phil', 'James', '08155445533', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `root_category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `root_category_id`, `brand_name`, `description`, `brand_logo`, `status`) VALUES
(1, 0, 'Apple', 'This is apple\'s brand', '', '');

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
(1, 'fa-tv', 0, 'tvs-electronics', 'Buy Electronics Online in Nigeria', 'Shop for Electronics online on Onitshamarket. Discover a great selection of Television and Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'TVs & Electronics', 4, '', ''),
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
(15, 'fa-camera', 0, 'cameras-electronics', 'Buy Cameras &amp; Electronics Online In Nigeria', 'Shop for Cameras &amp; Electronics online on Onitshamarket. Discover a great selection of Cameras &amp; Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Cameras &amp; Electronics', 2, '', ''),
(16, 'fa-camera', 15, 'mp3-players-accessories', 'Buy MP3 Players &amp; Accessories Online In Nigeria', 'Shop for MP3 Players &amp; Accessories online on Onitshamarket. Discover a great selection of MP3 Players &amp; Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'MP3 Players &amp; Accessories', 2, '', ''),
(17, '', 16, 'docking-station', 'Buy Docking Station Online In Nigeris', 'Shop for Docking Station online on Onitshamarket. Discover a great selection of Docking Station at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Docking Station', 4, '', ''),
(18, '', 16, 'heahphones-earphones', 'Buy Heahphones/ Earphones Online In Nigeria', 'Shop for Headphones/ Earphones online on Onitshamarket. Discover a great selection of Headphones/ Earphones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Heahphones/ Earphones', 4, '', ''),
(19, '', 16, 'mini-speaker-systems', 'Buy Mini Speaker Systems Online In Nigeria', 'Shop for Mini Speaker Systems online on Onitshamarket. Discover a great selection of Mini Speaker Systems at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mini Speaker Systems', 4, '', ''),
(20, '', 15, 'musical-instruments', 'Buy Musical Instruments Online In Nigeria', 'Shop for Musical Instruments online on Onitshamarket. Discover a great selection of Musical Instruments  at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Musical Instruments', 4, '', ''),
(21, '', 15, 'power-supplies-electrical', 'Buy Power Supplies &amp; Electricals Online In Nigeria', 'Shop for Power Supplies &amp; Electrical online on Onitshamarket. Discover a great selection of Power Supplies &amp; Electrical at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Power Supplies &amp; Electrical', 4, '', ''),
(22, 'fa-tv', 15, 'televisions', 'Buy Televisions Online In Nigeria', 'Shop for Televisions online on Onitshamarket. Discover a great selection of Televisions at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Televisions', 4, '', ''),
(23, '', 0, 'phones-tablets', 'Buy Phones &amp; Tablets Online In Nigeria', 'Shop for Phones &amp; Tablets online on Onitshamarket. Discover a great selection of Phones &amp; Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Phones &amp; Tablets', 5, '', ''),
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
(37, 'fa-gamepad', 35, 'board-games', 'Buy Board Games Online In Nigeria', 'Shop for Board Games online on Onitshamarket. Discover a great selection of Board Games at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Board Games', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `root_category_id` int(11) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Foreign from root category';

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `root_category_id`, `inserted_at`) VALUES
(1, 'Mobile Phones', 1, '2018-10-01 11:54:19'),
(2, 'Phones & Tablets Accessories', 1, '2018-10-01 11:54:58'),
(3, 'Tablets', 1, '2018-10-01 11:55:08'),
(4, 'Laptops', 2, '2018-10-01 11:56:30'),
(5, 'Accessories', 2, '2018-10-01 11:56:45'),
(6, 'Networking', 2, '2018-10-01 11:57:02'),
(7, 'Desktop & Monitors', 2, '2018-10-01 11:57:18'),
(8, 'Printers, Scanners & Accessories', 2, '2018-10-01 11:57:40'),
(9, 'PC Gaming', 2, '2018-10-01 11:57:53'),
(10, 'Office & School Supplies', 2, '2018-10-01 11:58:20'),
(11, 'Softwares', 2, '2018-10-01 11:58:38'),
(12, 'Hardwares', 2, '2018-10-01 11:58:45'),
(13, 'Televisions', 3, '2018-10-01 11:59:33'),
(15, 'Cameras', 3, '2018-10-01 11:59:45'),
(16, 'DVD Players & Recorders', 3, '2018-10-01 12:00:09'),
(17, 'Small Appliances', 3, '2018-10-01 12:00:24'),
(18, 'Games & Consoles', 3, '2018-10-01 12:00:39'),
(19, 'Musical Instruments & Equipments', 3, '2018-10-01 12:01:01'),
(20, 'Women\'s Fashion', 4, '2018-10-01 12:01:30'),
(21, 'Men\'s Fashion', 4, '2018-10-01 12:01:42'),
(22, 'Wedding Shop', 4, '2018-10-01 12:02:15'),
(23, 'Style Finder for Women', 4, '2018-10-01 12:02:38'),
(24, 'Style Finder for Men', 4, '2018-10-01 12:02:48'),
(25, 'Deluxe Fashion', 4, '2018-10-01 12:03:17'),
(26, 'Large Appliances', 6, '2018-10-01 12:07:51'),
(27, 'Small Appliances', 6, '2018-10-01 12:08:04'),
(28, 'Home Furnitures', 6, '2018-10-01 12:09:08'),
(29, 'Kitchen & Dinning', 6, '2018-10-01 12:09:25'),
(30, 'Hand Tools', 6, '2018-10-01 12:10:01'),
(31, 'Furniture', 6, '2018-10-01 12:10:21'),
(32, 'Others', 6, '2018-10-01 12:10:26'),
(33, 'Fashion for Girls', 5, '2018-10-01 12:11:28'),
(34, 'Baby Essentials', 5, '2018-10-01 12:11:41'),
(35, 'Maternity', 5, '2018-10-01 12:11:53'),
(36, 'School Stores', 5, '2018-10-01 12:12:13'),
(37, 'Diapering & Daily Cares', 5, '2018-10-01 12:12:35'),
(38, 'Toys & Activities', 5, '2018-10-01 12:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('0mqgafcvh56fsp67s9qgmsa5iq61c7nu', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('132nboc3vnu0d71aicnmi8je2sitj1j9', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('40vja7obg7s012fmv897jlbsgdmun4vg', '127.0.0.1', '', '0000-00-00 00:00:00', 'cart_contents|a:4:{s:10:"cart_total";d:328000;s:11:"total_items";d:3;s:32:"fbf97966188b4fd42ca3dee16c75289e";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:1;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:3:{s:9:"variation";s:6:"Price1";s:6:"seller";N;s:12:"variation_id";s:1:"2";}s:5:"rowid";s:32:"fbf97966188b4fd42ca3dee16c75289e";s:8:"subtotal";d:300000;}s:32:"be24421c96a66d5dca910804f158ec6e";a:7:{s:2:"id";s:2:"11";s:3:"qty";d:2;s:5:"price";d:14000;s:4:"name";s:11:"Apple Watch";s:7:"options";a:3:{s:9:"variation";s:7:"Miranda";s:6:"seller";N;s:12:"variation_id";s:2:"15";}s:5:"rowid";s:32:"be24421c96a66d5dca910804f158ec6e";s:8:"subtotal";d:28000;}}'),
('4dnjbbe9v11i70anb25ftj8rl6gdu3ns', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('5085s6cve42058cvfhfm3hi4kdar2oco', '::1', '', '0000-00-00 00:00:00', ''),
('5n4r66n8hmimbj6r5dfsadikf931kndq', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('6poq826tfleepab6a3ekpbka9so263rh', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:3:{s:10:"cart_total";d:56000;s:11:"total_items";d:4;s:32:"be24421c96a66d5dca910804f158ec6e";a:7:{s:2:"id";s:2:"11";s:3:"qty";d:4;s:5:"price";d:14000;s:4:"name";s:11:"Apple Watch";s:7:"options";a:3:{s:9:"variation";s:7:"Miranda";s:6:"seller";N;s:12:"variation_id";s:2:"15";}s:5:"rowid";s:32:"be24421c96a66d5dca910804f158ec6e";s:8:"subtotal";d:56000;}}logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('713vqmu0km23h50dntdtd5flecpn8s7v', '127.0.0.1', '', '0000-00-00 00:00:00', ''),
('7pt367l9nqonu5hhh84514q6ati918k2', '::1', '', '0000-00-00 00:00:00', ''),
('7sb418oelvvgj61mof98nfgumelvlc4c', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";category_id|s:2:"24";'),
('8nu487glh1153kns27qkphhon11idnru', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"d466eb91ae97dad5c05cae412de69d90";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:56:"Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty";s:7:"options";a:2:{s:6:"seller";s:1:"3";s:12:"variation_id";s:1:"1";}s:5:"rowid";s:32:"d466eb91ae97dad5c05cae412de69d90";s:8:"subtotal";d:223800;}}category_id|s:2:"11";'),
('9ictq2rvipu2f002hvibcegsfa3luqhb', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"ca97f8bfe2f3819f91b69fd14f0ed713";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:6:"seller";s:1:"1";s:12:"variation_id";s:1:"2";}s:5:"rowid";s:32:"ca97f8bfe2f3819f91b69fd14f0ed713";s:8:"subtotal";d:600000;}}referred_from|s:36:"http://localhost/project001/checkout";logged_in|b:1;logged_id|s:4:"NQ==";is_seller|s:5:"false";email|s:17:"seller2@gmail.com";'),
('9uia09d3606o7vgcnil77mohpkalpv8s', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('9uteobg6t8oacaa7t1e9ulp5f9aqolde', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"OQ==";is_seller|s:8:"approved";email|s:15:"james@gmail.com";cart_contents|a:5:{s:10:"cart_total";d:1199000;s:11:"total_items";d:22;s:32:"16f52431dc75b6ffdf0a656da1b1a73d";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:19;s:5:"price";d:26000;s:4:"name";s:70:"Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White";s:7:"options";a:3:{s:9:"variation";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"3";}s:5:"rowid";s:32:"16f52431dc75b6ffdf0a656da1b1a73d";s:8:"subtotal";d:494000;}s:32:"598eaf8fdae2ffa1ebfcb90077c06bab";a:7:{s:2:"id";s:1:"7";s:3:"qty";d:1;s:5:"price";d:105000;s:4:"name";s:110:"Huawei Nova 3i 4GB+128GB 6.3 Inch Android 8.1 Kirin 710 Octa Core 4G Smartphone - Purple (1 Unit Per Customer)";s:7:"options";a:3:{s:9:"variation";s:5:"256GB";s:6:"seller";N;s:12:"variation_id";s:2:"11";}s:5:"rowid";s:32:"598eaf8fdae2ffa1ebfcb90077c06bab";s:8:"subtotal";d:105000;}s:32:"fbf97966188b4fd42ca3dee16c75289e";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:3:{s:9:"variation";s:6:"Price1";s:6:"seller";N;s:12:"variation_id";s:1:"2";}s:5:"rowid";s:32:"fbf97966188b4fd42ca3dee16c75289e";s:8:"subtotal";d:600000;}}'),
('al36juu40ks97df27jp4t1a24d0r3q8e', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";category_id|s:2:"11";'),
('b3do2pnpo02tofnq886ofoap50949b5m', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:4:{s:10:"cart_total";d:116000;s:11:"total_items";d:2;s:32:"8cf83a517efe9f6763734382d9e57c5f";a:7:{s:2:"id";s:1:"4";s:3:"qty";d:1;s:5:"price";d:90000;s:4:"name";s:2:"JY";s:7:"options";a:3:{s:9:"variation";s:5:"Black";s:6:"seller";N;s:12:"variation_id";s:1:"4";}s:5:"rowid";s:32:"8cf83a517efe9f6763734382d9e57c5f";s:8:"subtotal";d:90000;}s:32:"16f52431dc75b6ffdf0a656da1b1a73d";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:1;s:5:"price";d:26000;s:4:"name";s:70:"Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White";s:7:"options";a:3:{s:9:"variation";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"3";}s:5:"rowid";s:32:"16f52431dc75b6ffdf0a656da1b1a73d";s:8:"subtotal";d:26000;}}referred_from|s:36:"http://localhost/project001/checkout";logged_in|b:1;logged_id|s:4:"NQ==";is_seller|s:5:"false";email|s:17:"seller2@gmail.com";error_msg|s:0:"";__ci_vars|a:1:{s:9:"error_msg";s:3:"new";}'),
('b7o5ul5ibvlbdbr99fcufsh4n42fo3u2', '::1', '', '0000-00-00 00:00:00', ''),
('cni1u9umn7bu4dmp8iofncvcnrd7p51d', '::1', '', '0000-00-00 00:00:00', ''),
('e2jq37oka0cbt9mohn723s8f48hagl8c', '::1', '', '0000-00-00 00:00:00', ''),
('ejt24mt3a7c41dk73elchvom80jbgmku', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:36:"http://localhost/project001/checkout";'),
('epjikjqv6g260dj2t1s22lqljiu1ngv4', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('er5r6gonopmh4trm7pukf0i1qh8cvt2u', '::1', '', '0000-00-00 00:00:00', ''),
('evgsjadgtk1p2q54rfp1sbnmeidsc1ip', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:15:{s:10:"cart_total";d:10820097;s:11:"total_items";d:61;s:32:"ba4ac0a10d6075b443e1fe11e1fb199b";a:7:{s:2:"id";s:1:"4";s:3:"qty";d:1;s:5:"price";d:0;s:4:"name";s:2:"JY";s:7:"options";a:4:{s:9:"variation";s:4:"Blue";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"5";}s:5:"rowid";s:32:"ba4ac0a10d6075b443e1fe11e1fb199b";s:8:"subtotal";d:0;}s:32:"e9ab7eb339589333f6681a29bb898f6a";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:16;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:4:{s:9:"variation";s:6:"Price1";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"2";}s:5:"rowid";s:32:"e9ab7eb339589333f6681a29bb898f6a";s:8:"subtotal";d:4800000;}s:32:"4f1fc967838f2e4b52ef885fd05795e5";a:7:{s:2:"id";s:1:"5";s:3:"qty";d:1;s:5:"price";d:90000;s:4:"name";s:88:"Huawei P20 Lite ANE-LX3 32GB + 4GB Dual SIM LTE Factory Unlocked Smartphone (Klein Blue)";s:7:"options";a:4:{s:9:"variation";s:3:"Red";s:6:"colour";s:5:"green";s:6:"seller";s:1:"3";s:12:"variation_id";s:1:"6";}s:5:"rowid";s:32:"4f1fc967838f2e4b52ef885fd05795e5";s:8:"subtotal";d:90000;}s:32:"1451ddb90feef69473f09c3813797a56";a:7:{s:2:"id";s:1:"5";s:3:"qty";d:1;s:5:"price";d:0;s:4:"name";s:88:"Huawei P20 Lite ANE-LX3 32GB + 4GB Dual SIM LTE Factory Unlocked Smartphone (Klein Blue)";s:7:"options";a:4:{s:9:"variation";s:4:"Dark";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"8";}s:5:"rowid";s:32:"1451ddb90feef69473f09c3813797a56";s:8:"subtotal";d:0;}s:32:"1ea0c4fc375960afce4073abf0be9380";a:7:{s:2:"id";s:2:"10";s:3:"qty";d:3;s:5:"price";d:8899;s:4:"name";s:8:"jsjsjsjs";s:7:"options";a:4:{s:9:"variation";s:1:"l";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:2:"14";}s:5:"rowid";s:32:"1ea0c4fc375960afce4073abf0be9380";s:8:"subtotal";d:26697;}s:32:"11c3abbfc44ea86b87ed9fb0301f82dd";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:13;s:5:"price";d:223800;s:4:"name";s:56:"Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty";s:7:"options";a:4:{s:9:"variation";s:0:"";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"1";}s:5:"rowid";s:32:"11c3abbfc44ea86b87ed9fb0301f82dd";s:8:"subtotal";d:2909400;}s:32:"37aec734756a52ee6751aa15f9c2fa0f";a:7:{s:2:"id";s:1:"5";s:3:"qty";d:2;s:5:"price";d:90000;s:4:"name";s:88:"Huawei P20 Lite ANE-LX3 32GB + 4GB Dual SIM LTE Factory Unlocked Smartphone (Klein Blue)";s:7:"options";a:4:{s:9:"variation";s:3:"Red";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"6";}s:5:"rowid";s:32:"37aec734756a52ee6751aa15f9c2fa0f";s:8:"subtotal";d:180000;}s:32:"3eaaaf951c50df72f012098a3273d0df";a:7:{s:2:"id";s:1:"7";s:3:"qty";d:4;s:5:"price";d:105000;s:4:"name";s:110:"Huawei Nova 3i 4GB+128GB 6.3 Inch Android 8.1 Kirin 710 Octa Core 4G Smartphone - Purple (1 Unit Per Customer)";s:7:"options";a:4:{s:9:"variation";s:5:"256GB";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:2:"11";}s:5:"rowid";s:32:"3eaaaf951c50df72f012098a3273d0df";s:8:"subtotal";d:420000;}s:32:"1b12a5ee8c882045aee1f9fde6a5f027";a:7:{s:2:"id";s:1:"8";s:3:"qty";d:3;s:5:"price";d:400000;s:4:"name";s:135:"Apple IPhone X 5.8-Inches Super AMOLED (3GB RAM, 256GB ROM) IOS 11.1.1, (12MP + 12MP) + 7MP 4G LTE Smartphone - Silver + Tempered Glass";s:7:"options";a:4:{s:9:"variation";s:5:"164GB";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:2:"12";}s:5:"rowid";s:32:"1b12a5ee8c882045aee1f9fde6a5f027";s:8:"subtotal";d:1200000;}s:32:"0cabf04a51df24bd9d4e2bb36a39498a";a:7:{s:2:"id";s:1:"4";s:3:"qty";d:3;s:5:"price";d:85000;s:4:"name";s:2:"JY";s:7:"options";a:4:{s:9:"variation";s:5:"Black";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"4";}s:5:"rowid";s:32:"0cabf04a51df24bd9d4e2bb36a39498a";s:8:"subtotal";d:255000;}s:32:"8dd19bd8e468a8ae112f27a15df2fddb";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:4;s:5:"price";d:26000;s:4:"name";s:70:"Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White";s:7:"options";a:4:{s:9:"variation";s:0:"";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:1:"3";}s:5:"rowid";s:32:"8dd19bd8e468a8ae112f27a15df2fddb";s:8:"subtotal";d:104000;}s:32:"543098569559ae91845bf05844d0ea24";a:7:{s:2:"id";s:1:"9";s:3:"qty";d:1;s:5:"price";d:70000;s:4:"name";s:8:"Iphone 8";s:7:"options";a:4:{s:9:"variation";s:9:"2GB Model";s:6:"colour";s:0:"";s:6:"seller";N;s:12:"variation_id";s:2:"13";}s:5:"rowid";s:32:"543098569559ae91845bf05844d0ea24";s:8:"subtotal";d:70000;}s:32:"cce3097733d343ba89ca4401a62118fe";a:7:{s:2:"id";s:1:"4";s:3:"qty";d:9;s:5:"price";d:85000;s:4:"name";s:2:"JY";s:7:"options";a:4:{s:9:"variation";s:5:"Black";s:6:"colour";s:0:"";s:6:"seller";s:1:"3";s:12:"variation_id";s:1:"4";}s:5:"rowid";s:32:"cce3097733d343ba89ca4401a62118fe";s:8:"subtotal";d:765000;}}logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";rootcategory|s:1:"3";category|s:1:"3";subcategory|s:1:"3";sub_id|s:1:"3";new_rootcategory|s:11:"Electronics";new_category|s:7:"Tablets";new_subcategory|s:9:"Batteries";'),
('f3bpg7l3krum3ubvkpc7gno5fft8rvqp', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('f5k6blbcha5ef4leaj0pb3shjo1l35vo', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";rootcategory|s:1:"1";category|s:1:"1";subcategory|s:1:"1";sub_id|s:1:"1";new_rootcategory|s:16:"Phones & Tablets";new_category|s:13:"Mobile Phones";new_subcategory|s:11:"Smartphones";'),
('fjuk56sp5aq9bvksi6e6va4okme75c53', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:3:{s:10:"cart_total";d:90000;s:11:"total_items";d:1;s:32:"916204bceaaf9d9685f18b0a79294963";a:7:{s:2:"id";s:1:"5";s:3:"qty";d:1;s:5:"price";d:90000;s:4:"name";s:88:"Huawei P20 Lite ANE-LX3 32GB + 4GB Dual SIM LTE Factory Unlocked Smartphone (Klein Blue)";s:7:"options";a:3:{s:9:"variation";s:3:"Red";s:6:"seller";s:1:"3";s:12:"variation_id";s:1:"6";}s:5:"rowid";s:32:"916204bceaaf9d9685f18b0a79294963";s:8:"subtotal";d:90000;}}referred_from|s:36:"http://localhost/project001/checkout";logged_in|b:1;logged_id|s:4:"NQ==";is_seller|s:5:"false";email|s:17:"seller2@gmail.com";'),
('gjc5dfs6vagrf30bcq689qlaq047qh3k', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('h3bdvll75vnarhbk3i2faq8745vcnrrg', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:4:{s:10:"cart_total";d:446000;s:11:"total_items";d:2;s:32:"6f89b4a3b622f3fb67d5784f27a4b80d";a:7:{s:2:"id";s:2:"12";s:3:"qty";d:1;s:5:"price";d:46000;s:4:"name";s:39:"Hisense 32-Inch 32N2176H Full HD LED TV";s:7:"options";a:3:{s:9:"variation";s:0:"";s:6:"seller";s:1:"3";s:12:"variation_id";s:2:"16";}s:5:"rowid";s:32:"6f89b4a3b622f3fb67d5784f27a4b80d";s:8:"subtotal";d:46000;}s:32:"297e6525d6e5f5b817507de3e8177445";a:7:{s:2:"id";s:1:"8";s:3:"qty";d:1;s:5:"price";d:400000;s:4:"name";s:135:"Apple IPhone X 5.8-Inches Super AMOLED (3GB RAM, 256GB ROM) IOS 11.1.1, (12MP + 12MP) + 7MP 4G LTE Smartphone - Silver + Tempered Glass";s:7:"options";a:3:{s:9:"variation";s:5:"164GB";s:6:"seller";N;s:12:"variation_id";s:2:"12";}s:5:"rowid";s:32:"297e6525d6e5f5b817507de3e8177445";s:8:"subtotal";d:400000;}}'),
('h85kp87teg64ph269opkvkhqak0l4lle', '::1', '', '0000-00-00 00:00:00', ''),
('h8q4lvsob4irko6pdkb2mn8ptrmh9gv9', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('hjqlklppjk5bohh935e2htck3ss88m19', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('hl3dsl63q14kam16v7a4p86q17rnnuui', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('ifn9mc7k7fltcvi1cqldvdfuitr1kiop', '::1', '', '0000-00-00 00:00:00', ''),
('itt46bm3bq3itrj7iaue95rn3422mpbc', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"d466eb91ae97dad5c05cae412de69d90";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:56:"Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty";s:7:"options";a:2:{s:6:"seller";s:1:"3";s:12:"variation_id";s:1:"1";}s:5:"rowid";s:32:"d466eb91ae97dad5c05cae412de69d90";s:8:"subtotal";d:223800;}}logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('j5fc2g9iudojjs9amhlm96aac0emkg0q', '127.0.0.1', '', '0000-00-00 00:00:00', ''),
('ji59m2j4hfjlud3o6tfo2m1k0rbklkec', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";category_id|s:2:"36";'),
('l22j2g7e0r1cnf0g8qbpjrvoj9j5rvsv', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";category_id|s:1:"6";'),
('m748pv644l54aduf3oh01lj1if8cphsl', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";category_id|s:1:"6";'),
('n2b8hmsa2rt50hvhvtq4o2vvparabrob', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:3:{s:10:"cart_total";d:26000;s:11:"total_items";d:1;s:32:"9527eb4777b051a301fde0cac5f3b6c9";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:1;s:5:"price";d:26000;s:4:"name";s:70:"Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White";s:7:"options";a:3:{s:9:"variation";s:0:"";s:6:"seller";s:1:"1";s:12:"variation_id";s:1:"3";}s:5:"rowid";s:32:"9527eb4777b051a301fde0cac5f3b6c9";s:8:"subtotal";d:26000;}}referred_from|s:36:"http://localhost/project001/checkout";logged_in|b:1;logged_id|s:4:"NQ==";is_seller|s:5:"false";email|s:17:"seller2@gmail.com";__ci_vars|a:1:{s:9:"error_msg";s:3:"old";}error_msg|s:0:"";'),
('n4gauph3cb5bttrd06340jt5gjhjbh5t', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"OQ==";is_seller|s:5:"false";email|N;'),
('nj28enev7our2t3un80i5n8fibdlnt8p', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('ogpb83o7alsel7hf0o0qcgsa4mg179v5', '127.0.0.1', '', '0000-00-00 00:00:00', ''),
('ppvtmhto1l82ol0ros7nekd54ukbrct7', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('q8rjrmthf2uuvfdvvnn01rnce8kp1qv5', '::1', '', '0000-00-00 00:00:00', 'cart_contents|a:3:{s:10:"cart_total";d:300000;s:11:"total_items";d:1;s:32:"fbf97966188b4fd42ca3dee16c75289e";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:1;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:3:{s:9:"variation";s:6:"Price1";s:6:"seller";N;s:12:"variation_id";s:1:"2";}s:5:"rowid";s:32:"fbf97966188b4fd42ca3dee16c75289e";s:8:"subtotal";d:300000;}}referred_from|s:36:"http://localhost/project001/checkout";logged_in|b:1;logged_id|s:4:"OQ==";is_seller|s:8:"approved";email|s:15:"james@gmail.com";'),
('qu41s1b70518qkpfsifqov74ejepcrq6', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";category_id|s:2:"11";'),
('rkhh2gadoc2lecbs48of7makk9haq098', '::1', '', '0000-00-00 00:00:00', ''),
('secklf1m5vd7mu95mrtfdg65417ap0it', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"OQ==";is_seller|s:8:"approved";email|s:15:"james@gmail.com";'),
('spork7btj99e2nm9si0diuvng9t40sf4', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"OQ==";is_seller|s:7:"pending";email|s:15:"james@gmail.com";__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('tblp35701olktdodpdcjni3qsmumqrkv', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:1:"1";email|s:15:"admin@gmail.com";'),
('v77ukrp4ar67uu8fakjpd1g5f9d60blb', '127.0.0.1', '', '0000-00-00 00:00:00', ''),
('vd7rb7pb64i4g42c3h5be130a2802c1d', '::1', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
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
-- Table structure for table `dummy_table`
--

CREATE TABLE `dummy_table` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_table`
--

INSERT INTO `dummy_table` (`id`, `pid`, `slug`) VALUES
(1, 0, 'mobile-phones'),
(2, 1, 'no-slug-1'),
(3, 2, 'no-slug-3'),
(4, 3, 'no-slug-4'),
(5, 3, 'no-slug-5'),
(6, 3, 'no-slug-6'),
(7, 3, 'no-slug-7'),
(8, 4, 'no-slug-8'),
(9, 4, 'slug2-1'),
(10, 1, 'slug2-2'),
(11, 2, 'slug2-3'),
(12, 2, 'slug2-4'),
(13, 2, 'slug3-11'),
(14, 3, 'slug3-2'),
(15, 3, 'slug3-6'),
(16, 3, 'slug3-7');

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

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `uid`, `product_id`, `date_saved`) VALUES
(6, 2, 1, '2018-09-26 16:48:08'),
(8, 2, 4, '2018-09-26 22:18:29'),
(9, 2, 5, '2018-09-26 22:18:35'),
(10, 8, 1, '2018-10-24 09:58:12'),
(11, 8, 1, '2018-10-24 09:58:26'),
(12, 8, 1, '2018-10-24 09:58:33'),
(13, 8, 1, '2018-10-24 09:58:40'),
(14, 8, 1, '2018-10-24 12:35:26'),
(15, 8, 1, '2018-10-24 12:35:29'),
(16, 8, 1, '2018-10-24 12:35:32'),
(17, 8, 1, '2018-10-24 12:35:40'),
(18, 8, 1, '2018-10-24 12:35:44'),
(19, 8, 2, '2018-10-24 12:36:43'),
(20, 8, 1, '2018-10-24 16:30:42'),
(21, 8, 1, '2018-10-24 16:31:12');

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
(1, 'Buy, Sell, fashion wears, electronics gadget', 'Define the type of heel the shoe has  Example: e.g. Block, Cuban, Flared, Mid, Stiletto', 0, '', '', 'onitshamarket', 'onitshamarket', 'onitshamarket', 'onitshamarket');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n"admin": 1,\r\n"moderator": 1\r\n}');

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
(7, 'L'),
(8, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(10) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `product_variation_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Orders Table';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `buyer_id`, `seller_id`, `product_id`, `billing_address_id`, `product_variation_id`, `coupon_id`, `payment_method`, `pickup_location_id`, `qty`, `amount`, `order_date`, `status`) VALUES
(6, '73862195', 5, 3, 2, 7, 2, 0, 1, 0, 2, '600000', '2018-11-20 15:14:31', 'ordered');

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
  `enable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup_address`
--

INSERT INTO `pickup_address` (`id`, `title`, `phones`, `emails`, `address`, `available_area`, `enable`) VALUES
(3, 'Aina Akingbala Store', '08169254598,08070994845', 'philo4u2c@gmail.com', '530A, Aina Akingbala Street, Ikeja', '["1","2"]', 1);

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
  `product_description` text NOT NULL,
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
(1, 3, 6, 'X5PJUH', 'Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty', 'Samsung', 'S9', 'Black', 'Display: 5.8&rdquo;, Quad HD+ sAMOLED\r\nSingle Sim Option\r\nCamera Main: Super Speed Dual Pixel 12 MP OIS (F1.5/F2.4)\r\nCamera Front: 8MP AF (F1.7)\r\nProcessor: 10nm, Octa-core (2.7GHz Quad + 1.7GHz Quad)\r\nMemory: 4GB RAM and 64GB Internal storage, External Memory: MicroSD&trade; up to 400 GB\r\nBattery: 3000mAh\r\nSecurity: Intelligent Scan (Iris + Face), Fingerprint Scanner, Water and Dust Resistance: IP68 (1.5 m &amp; 30 min)\r\n\r\n', '', '', '', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'silicon', '1260', '300', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"3000mAh ","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"5.9 inches","Colour":"Black"}', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n', '["Repair by vendor"]', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n', '["Eco Friendly","FSC - Forest Stewardship Council"]', 'approved', 0, 45, '2018-10-02 11:34:56'),
(2, 3, 6, 'BYZZSP', 'Samsung Galaxy J6 - Purple', 'Samsung', 'samsung j6', 'Purple', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'plume', '1260', '1000', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"3000mAh ","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"5.9 inches","Colour":"Black"}', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '["Repair by vendor"]', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'approved', 0, 7, '2018-10-03 10:46:58'),
(3, 3, 6, '31WUJE', 'Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White', 'Nokia', 'Nokia2', 'Grey', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'plume', '1260', '1000', '{"Sim-Type":"Single SIM","OS-Type":"Android OS","Battery-Capacity":"5000mAh","Internal-Memory":"128 MB","Sceen-Size":"6.4 inches","Colour":"Yellow"}', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '["FSC - Forest Stewardship Council","Organic"]', 'approved', 0, 3, '2018-10-03 11:28:34'),
(4, 3, 6, '871436', 'JY', 'Android', '8S', 'black', 'Jy Phones are excelllent and sleek phones for your needs. Get a color that you love ranging from red, black, green and pink for ladies. Start buying today', '', '1 phone\r\n1 charger\r\n1 screen guard\r\n1 ear phone\r\n1 power bank\r\n', 'Jy Phones are excelllent and sleek phones for your needs. Get a color that you love', 'Jay Technology', '["green","black","red","pink"]', 'metal', '12 x 3 x 90', '20', '{"Sim-Type":"Nano SIM","OS-Type":"Android OS","Battery-Capacity":"4000mAh","Internal-Memory":"64 GB","RAM":"4 GB","Sceen-Size":"5.2 inches","Colour":"Black"}', 'This product contains a one year warranty', '["Service Center","Repair by vendor","Replacement by vendor"]', 'Service Center Address: 20b Caro Road, Ikeja. Lagos | Repair by Vendor Address: 5 Paris Street, Yaba. Lagos.', '["AFRDI Leather","ASTM Certified","Eco Friendly"]', 'approved', 0, 306, '2018-10-30 10:14:59'),
(5, 3, 6, '921784', 'Huawei P20 Lite ANE-LX3 32GB + 4GB Dual SIM LTE Factory Unlocked Smartphone (Klein Blue)', 'others', 'P20 Lite', 'black', 'The Best Just Got Better\r\nLose yourself in your screen with new generation HUAWEI FullView Display. Designed for life on the go with no compromises, the HUAWEI P20 lite sports a sleek compact frame that&rsquo;s almost entirely dedicated to its 5.84-inch Full HD screen.re level, as it comes with the latest Android 8.0 Oreo.\r\n\r\nBody &amp; Soul\r\nThe HUAWEI P20 lite takes colour to a higher level. Delve deeper into Klein Blue, a radiant shade that incorporates a nanometer-level light dazzle texture. Available too in deepest Midnight Black to contrast against the vibrancy of the Full HD screen, refined classic Platinum Gold and Sakura Pink with its rich pearlescent tone.\r\n\r\nSee is Believing\r\nThe HUAWEI P20 lite features a 2280 x 1080 FHD+ screen with 96% NTSC super high-colour gamut. That means everything you see on this screen is as rich and vibrant and detailed as it can be, from your own photographs to the latest boxset.\r\n\r\nFront and Centre\r\nThe HUAWEI P20 lite has a new higher definition, wider angle, front camera. 16 megapixels with a pixel size of 1.0 &mu;m and a FOV wide angle of 78&deg;, this camera is made for snapping friends, family and social-media-worthy selfies. With a F2.0 wide aperture and a 3D retouching feature that uses intelligent recognition and facial mapping to adjust lighting and shadow, you can count on terrific portraits and close-ups too.\r\n\r\nDual-Lens Camera\r\nThe HUAWEI P20 lite&rsquo;s dual-lens rear camera ticks all the boxes and then some. The state-of-the-art 16 MP lens with a pixel size of 1.12 &mu;m and F2.2 aperture is designed to capture more light and read depth perception, allowing you to take sharp, swift snaps when you need them. Partnered with a 2 MP professional Bokeh lens &ndash; as well as 5P + 3P lenses for the subject and background &ndash; it takes stunning shots while bringing some real definition to the mix.', '', 'The Best Just Got Better\r\nLose yourself in your screen with new generation HUAWEI FullView Display. Designed for life on the go with no compromises, the HUAWEI P20 lite sports a sleek compact frame that&rsquo;s almost entirely dedicated to its 5.84-inch Full HD screen.re level, as it comes with the latest Android 8.0 Oreo.\r\n\r\nBody &amp; Soul\r\nThe HUAWEI P20 lite takes colour to a higher level. Delve deeper into Klein Blue, a radiant shade that incorporates a nanometer-level light dazzle texture. Available too in deepest Midnight Black to contrast against the vibrancy of the Full HD screen, refined classic Platinum Gold and Sakura Pink with its rich pearlescent tone.\r\n\r\nSee is Believing\r\nThe HUAWEI P20 lite features a 2280 x 1080 FHD+ screen with 96% NTSC super high-colour gamut. That means everything you see on this screen is as rich and vibrant and detailed as it can be, from your own photographs to the latest boxset.\r\n\r\nFront and Centre\r\nThe HUAWEI P20 lite has a new higher definition, wider angle, front camera. 16 megapixels with a pixel size of 1.0 &mu;m and a FOV wide angle of 78&deg;, this camera is made for snapping friends, family and social-media-worthy selfies. With a F2.0 wide aperture and a 3D retouching feature that uses intelligent recognition and facial mapping to adjust lighting and shadow, you can count on terrific portraits and close-ups too.\r\n\r\nDual-Lens Camera\r\nThe HUAWEI P20 lite&rsquo;s dual-lens rear camera ticks all the boxes and then some. The state-of-the-art 16 MP lens with a pixel size of 1.12 &mu;m and F2.2 aperture is designed to capture more light and read depth perception, allowing you to take sharp, swift snaps when you need them. Partnered with a 2 MP professional Bokeh lens &ndash; as well as 5P + 3P lenses for the subject and background &ndash; it takes stunning shots while bringing some real definition to the mix.', 'The Best Just Got Better\r\nLose yourself in your screen with new generation HUAWEI FullView Display. Designed for life on the go with no compromises, the HUAWEI P20 lite sports a sleek compact frame that&rsquo;s almost entirely dedicated to its 5.84-inch Full HD screen.re level, as it comes with the latest Android 8.0 Oreo.\r\n', 'Mobiles International LLC', '["green","yellow","black","pink","purple"]', 'leather', '5.8 x 2.8 x 0.3 inches', '12.3 ounces', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"5000mAh - 8000mAh","Internal-Memory":"Above 256 GB","RAM":"1.5 GB","Sceen-Size":"6.1 inches","Colour":"Red"}', 'For warranty information about this product, please click here', '["Repair by vendor"]', 'M&B', '["ASTM Certified","Eco Friendly"]', 'approved', 0, 0, '2018-11-08 01:27:51'),
(6, 3, 6, '192457', 'Apple iPhone 8 4.7&quot;, 64 GB, Fully Unlocked, Gold', 'others', 'A1863-64-Gold', 'black', '4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\nSplash, water, and dust resistant\r\n12MP camera with Optical image stabilization and Six?element lens\r\n4K video recording at 24 fps, 30 fps, or 60 fps\r\nAll new glass design with A color?matched, aerospace?grade aluminum band', '', '4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\nSplash, water, and dust resistant\r\n12MP camera with Optical image stabilization and Six?element lens\r\n4K video recording at 24 fps, 30 fps, or 60 fps\r\nAll new glass design with A color?matched, aerospace?grade aluminum band', '4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\nSplash, water, and dust resistant\r\n', 'MSFTStore', '["yellow","black","red"]', 'metal', '5.5 x 0.3 x 2.6', '5.3', '{"Sim-Type":"Nano SIM","OS-Type":"iOS","Battery-Capacity":"3450mAh","Internal-Memory":"4 GB","RAM":"6 GB","Sceen-Size":"5.7 inches","Colour":"Black"}', ' For warranty information about this product, please click here', '["Service Center","Repair by vendor","Replacement by vendor"]', 'MSFT Drive', '["AFRDI Leather","AFRDI - Australian Furnishing Research & Development Institute","ASTM Certified","Eco Friendly","FSC - Forest Stewardship Council","Fair Trade","GECA Good Environmental Choice Australia","Organic"]', 'approved', 0, 0, '2018-11-08 10:57:34'),
(7, 3, 6, '354186', 'Huawei Nova 3i 4GB+128GB 6.3 Inch Android 8.1 Kirin 710 Octa Core 4G Smartphone - Purple (1 Unit Per Customer)', 'others', '3i', 'black', 'Feature\r\n1. Kirin 710 Octa Core, 4 x Cortex A73 2.2GHz + 4 x Cortex A53 1.7GHz CPU, combine with 4GB RAM + 128GB ROM, high performance, run fast and fluently.\r\n2. 6.3 inch full capacitive screen, 409PPI 2340x1080 pixel screen, multi-touch, high clear and vivid color.\r\n3. Equipped with 4 cameras, 216MP RGB + 2MP RGB AF dual rear cameras and 24.0MP RGB +2.0MP RGB FF dual front cameras. You can capture wonderful moment with ease, and take high quality pictures.\r\n4. Photography Modes: AI beauty, large aperture, painter mode, dynamic photos, professional mode, video, 3D dynamic panorama, HDR, night scene, panoramic photo, streamer shutter (include busy traffic, light painting graffiti, silk water, star track), time-lapse photography, slow motion, continuous shooting, filter, beauty video, timed photo, voice-activated photo, smile capture, turn off screen flash snapshot, watermark, document correction.\r\n5. Built in 3340mAh battery, the battery will make the phone last for several days in normal use.\r\n6. Android 8.1 operation system, EMUI 8.2 interface.', '', 'Feature\r\n1. Kirin 710 Octa Core, 4 x Cortex A73 2.2GHz + 4 x Cortex A53 1.7GHz CPU, combine with 4GB RAM + 128GB ROM, high performance, run fast and fluently.\r\n2. 6.3 inch full capacitive screen, 409PPI 2340x1080 pixel screen, multi-touch, high clear and vivid color.\r\n3. Equipped with 4 cameras, 216MP RGB + 2MP RGB AF dual rear cameras and 24.0MP RGB +2.0MP RGB FF dual front cameras. You can capture wonderful moment with ease, and take high quality pictures.', 'Feature\r\n1. Kirin 710 Octa Core, 4 x Cortex A73 2.2GHz + 4 x Cortex A53 1.7GHz CPU, combine with 4GB RAM + 128GB ROM, high performance, run fast and fluently.\r\n2. 6.3 inch full capacitive screen, 409PPI 2340x1080 pixel screen, multi-touch, high clear and vivid color.\r\n3. Equipped with 4 cameras, 216MP RGB + 2MP RGB AF dual rear cameras and 24.0MP RGB +2.0MP RGB FF dual front cameras. You can capture wonderful moment with ease, and take high quality pictures.', 'HSP International Company', '["green","yellow","black","red","pink","purple"]', 'metal', '157.6*75.2*7.6', '169', '{"Sim-Type":"Nano SIM","OS-Type":"Android OS","Battery-Capacity":"4000mAh","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"6.1 inches","Colour":"Blue"}', 'Insurance against screen (30% of the cost) and liquid damage (40% of the cost)', '["Service Center","Repair by vendor","Replacement by vendor"]', 'HSP International Company', '["AFRDI Leather","AFRDI - Australian Furnishing Research & Development Institute","ASTM Certified","Australian Made","Eco Friendly","FSC - Forest Stewardship Council","Fair Trade","GECA Good Environmental Choice Australia","Organic","PEFC -Programme for t', 'approved', 0, 0, '2018-11-09 09:08:27'),
(8, 3, 4, '635492', 'Apple IPhone X 5.8-Inches Super AMOLED (3GB RAM, 256GB ROM) IOS 11.1.1, (12MP + 12MP) + 7MP 4G LTE Smartphone - Silver + Tempered Glass', 'others', 'Iphone X', 'black', 'A groundbreaking iOS for an iPhone that&#039;s truly breathtaking. \r\n\r\n \r\n\r\nSpecifications\r\n\r\nCapacity\r\n\r\n GB\r\n\r\nSize &amp; Weight\r\n\r\nHeight: 5.65 inches (143.6 mm)\r\nWidth: 2.79 inches (70.9 mm)\r\nDepth: 0.30 inch (7.7 mm)\r\nWeight: 6.14 ounces (174 grams)\r\n', '', 'A groundbreaking iOS for an iPhone that&#039;s truly breathtaking. \r\n\r\n \r\n\r\nSpecifications\r\n\r\nCapacity\r\n\r\n GB\r\n\r\nSize &amp; Weight\r\n\r\nHeight: 5.65 inches (143.6 mm)\r\nWidth: 2.79 inches (70.9 mm)\r\nDepth: 0.30 inch (7.7 mm)\r\nWeight: 6.14 ounces (174 grams)\r\n', 'A groundbreaking iOS for an iPhone that&#039;s truly breathtaking. \r\n\r\n \r\n\r\nSpecifications\r\n\r\nCapacity\r\n\r\n GB\r\n\r\nSize &amp; Weight\r\n\r\nHeight: 5.65 inches (143.6 mm)\r\nWidth: 2.79 inches (70.9 mm)\r\nDepth: 0.30 inch (7.7 mm)\r\nWeight: 6.14 ounces (174 grams)\r\n', 'DALINESHOP4PHONE', '["yellow","black","red","pink"]', 'metal', '167.6*65.2*7.6', '150', '{"Sim-Type":"Nano SIM","OS-Type":"iOS","Battery-Capacity":"5000mAh - 8000mAh","Internal-Memory":"Above 256 GB","RAM":"16 GB","Sceen-Size":"6.1 inches","Colour":"Black"}', 'Service is provided by AXA Mansard Insurance\r\nLimited to repair/replacements of 1 screen AND 1 liquid damage in 365 days', '["Repair by vendor","Replacement by vendor"]', '20b Caro Road, Ikeja. Lagos ', '["ASTM Certified","Australian Made","Eco Friendly","FSC - Forest Stewardship Council","Fair Trade"]', 'approved', 0, 0, '2018-11-09 09:16:45'),
(9, 3, 4, '597361', 'Iphone 8', 'Apple', 'Iphone 8', 'black', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', 'Iphone Widgets Technology', '["green","black","red"]', 'metal', '12 x 3 x 90', '120', '{"Sim-Type":"Nano SIM","OS-Type":"iOS","Battery-Capacity":"5000mAh - 8000mAh","Internal-Memory":"128 GB","Sceen-Size":"6.1 inches","Colour":"Black"}', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', '["Repair by vendor","Replacement by vendor"]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', '["AFRDI Leather","ASTM Certified"]', 'approved', 0, 0, '2018-11-12 17:36:31'),
(10, 3, 4, '918237', 'jsjsjsjs', 'Apple', 'jjh', 'red', 'jh', '', '', '', 'ouu', '["pink"]', 'synthetic', 'jji', '774', '[]', '', '', '', '', 'approved', 0, 0, '2018-11-13 22:55:02'),
(11, 3, 8, '286539', 'Apple Watch', 'Apple', 'Miranda', 'black', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', 'Miranda', '["black","red"]', 'metal', '12 x 32 x10', '20', '[]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', '["Service Center","Repair by vendor","Replacement by vendor"]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', '["Eco Friendly","Fair Trade","GECA Good Environmental Choice Australia"]', 'approved', 0, 0, '2018-11-14 10:27:31'),
(12, 3, 6, '481653', 'Hisense 32-Inch 32N2176H Full HD LED TV', 'others', 'Hicense', 'black', '12 Months Warranty\r\nScreen Size: 32&quot; \r\nScreen Type: LED\r\nScreen Resolution: Full HD 1920 x 1080 pixels\r\nConnectivity: HDMI: 2, USB: Yes x2, AV Input (Audio &amp; Video)', '', '12 Months Warranty\r\nScreen Size: 32&quot; \r\nScreen Type: LED\r\nScreen Resolution: Full HD 1920 x 1080 pixels\r\nConnectivity: HDMI: 2, USB: Yes x2, AV Input (Audio &amp; Video)', '12 Months Warranty\r\nScreen Size: 32&quot; \r\nScreen Type: LED\r\nScreen Resolution: Full HD 1920 x 1080 pixels\r\nConnectivity: HDMI: 2, USB: Yes x2, AV Input (Audio &amp; Video)', 'PhilTech Technologies', '["black"]', 'metal', '13 X 45 X 30', '1000', '[]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '["Eco Friendly"]', 'approved', 0, 0, '2018-11-17 21:04:07'),
(13, 2, 11, '87592643', 'Samsung Galaxy J6+, 6&quot;, 32gb+3gb Ram, 13mp, (dual Sim) 4g - Black', 'others', 'Samsung', 'black', '**Smooth Operations**\r\n\r\nThe Samsung Galaxy A6 comes preloaded with the Android 8.0 Oreo which gives you access to all the life-enhancing apps available on the Google Play Store. The Android 8.0 takes system performance to a higher level with the possibility of optimizing memory and improving your touchscreen so that it responds faster and more accurately than ever before. \r\n\r\n \r\n**Technical Specifications**\r\n\r\n**Display**\r\n\r\n    Type: Super AMOLED capacitive touchscreen, 16M colors\r\n    Size: 6 inches, 80.1 cm2 (~76.5% screen-to-body ratio)\r\n    Resolution: 720 x 1480 pixels, 18.5:9 ratio (~293 ppi density)\r\n    Multitouch\r\n    Protection: Corning Gorilla Glass (unspecified version)\r\n\r\n**Platform**    \r\n\r\n    OS: Android 8.0 (Oreo)\r\n    Chipset: Exynos 7870 Octa\r\n    CPU: Octa-core 1.6 GHz Cortex-A53\r\n    GPU: Mali-T830 MP1\r\n\r\n**Memory**    \r\n\r\n    Card slot: microSD, up to 256 GB (dedicated slot)\r\n    Internal: 64 GB, 4 GB RAM\r\n\r\n**Camera**\r\n\r\n    Primary: 13 MP, f/1.9, 28mm, AF\r\n    Features: LED flash, panorama, HDR\r\n    Video: 1080p@30fps\r\n    Secondary: 8 MP, f/1.9\r\n    Features: LED flash\r\n    Video    \r\n\r\n**Sound**   \r\n\r\n    Alert types: Vibration; MP3, WAV ringtones\r\n    Loudspeaker\r\n    3.5mm jack\r\n\r\n**Communications**    \r\n\r\n    WLAN: Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot\r\n    Bluetooth: 4.2, A2DP, LE\r\n    GPS: with A-GPS, GLONASS, BDS\r\n    Radio: Stereo FM radio, recording\r\n    USB: microUSB 2.0, USB On-The-Go\r\n\r\n**Features**    \r\n\r\n    Sensors: Fingerprint (rear-mounted), accelerometer, proximity\r\n    Messaging: SMS(threaded view), MMS, Email, Push Email, IM\r\n    Browser: HTML5\r\n    MP4/H.264 player\r\n    MP3/WAV/eAAC+/FLAC player\r\n    Photo/video editor\r\n    Document viewer\r\n\r\n**Battery**         \r\n\r\n    Non-removable Li-Ion 3300 mAh battery\r\n    Talk time: Up to 21 h (3G)\r\n    Music play: Up to 76 h\r\n', '', '', '', 'PhilTech Technologies', '["black"]', 'metal', '13 X 45 X 30', '1000', '[]', '', '["Repair by vendor","Replacement by vendor"]', '', '["AFRDI - Australian Furnishing Research & Development Institute","Australian Made","FSC - Forest Stewardship Council","GECA Good Environmental Choice Australia","PEFC -Programme for the Endorcement of Forest Certification","Timber Certificate"]', 'pending', 0, 0, '2018-11-22 11:53:02'),
(14, 3, 36, '86347215', 'Product posting to Cloudinary test', 'Apple', 'eehehe', 'pink', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["pink"]', 'textile', '13 X 45 X 30', '1000', '[]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '["Repair by vendor","Replacement by vendor"]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'pending', 0, 0, '2018-11-25 21:41:59'),
(15, 3, 36, '34129675', 'Hello This is Product Name', 'others', 'Hicense', 'purple', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'PhilTech Technologies', '["purple"]', 'glass', '13 X 45 X 30', '1000', '[]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '["Fair Trade"]', 'pending', 0, 0, '2018-11-25 21:55:21'),
(16, 3, 36, '12463798', 'Hisense 32-Inch 32N2176H Full HD LED TV', 'Apple', 'Hicense', 'pink', 'd3t4m!n@tn', '', 'd3t4m!n@tn', 'd3t4m!n@tn', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["yellow"]', 'plume', '13 X 45 X 30', '1000', '[]', 'd3t4m!n@tn', '["Repair by vendor"]', 'd3t4m!n@tn', '["AFRDI - Australian Furnishing Research & Development Institute","Australian Made"]', 'pending', 0, 0, '2018-11-26 09:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured_image` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `seller_id`, `image_name`, `featured_image`, `created_at`) VALUES
(1, 1, 1, '53927472ef7fb2b3ad83144851565ecb.jpg', 1, '2018-11-07 14:50:53'),
(2, 2, 1, '7477e882d169a026d549b4a30b53c35b.jpg', 1, '2018-11-07 18:52:52'),
(3, 3, 1, '031293b288deaddd7229239afa9b5e78.jpg', 1, '2018-11-07 18:54:02'),
(4, 4, 3, '1a7ffd857c83c66db4a28e42a06648eb.jpg', 0, '2018-10-30 09:14:59'),
(5, 4, 3, 'e888a678ee969fca1845a6aa6c991ae3.jpg', 1, '2018-11-07 18:52:11'),
(6, 5, 3, 'd5869e0361bf687be17d05c339a554d5.jpg', 1, '2018-11-08 00:27:51'),
(7, 5, 3, '3638943326dadb01a167fa265fe9fad1.jpg', 0, '2018-11-08 00:27:51'),
(8, 5, 3, '3cf8cb108df473d78499c501e08380ce.jpg', 0, '2018-11-08 00:27:51'),
(9, 6, 3, '<p>The filetype you are attempting to upload is not allowed.</p>', 0, '2018-11-08 09:57:34'),
(10, 6, 3, 'e0faa49bb415af2bcf20e9bd6a7ab589.jpg', 1, '2018-11-08 09:57:34'),
(11, 6, 3, '0d1a819e4425fa799e1fe6964a313ade.jpg', 0, '2018-11-08 09:57:34'),
(12, 7, 3, '357603ddeaea6807e162dc5da753c83e.jpg', 1, '2018-11-09 08:08:28'),
(13, 7, 3, 'b626355d0f149428c4fda315875b02e6.jpg', 0, '2018-11-09 08:08:28'),
(14, 7, 3, '3aaedfa3600d385e54453b1ec22e6338.jpg', 0, '2018-11-09 08:08:28'),
(15, 8, 3, 'eb602d7a5c4459fe04248f9f6d963ae1.jpg', 1, '2018-11-09 08:16:45'),
(16, 9, 3, '6bf8a7d96b549f159f26350fcd3f06b2.jpeg', 1, '2018-11-12 16:36:31'),
(17, 10, 3, '556d4701a9188ec8e4e662473ff9f78e.png', 1, '2018-11-13 21:55:02'),
(18, 11, 3, '2bd6d4f09566db6354fe0b9aaf753cf5.jpg', 1, '2018-11-14 09:27:31'),
(19, 12, 3, '2e9d60f6e602d1e4202cb1c13bb439ff.jpg', 1, '2018-11-17 20:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product review and rating';

--
-- Dumping data for table `product_rating`
--

INSERT INTO `product_rating` (`id`, `product_id`, `user_id`, `rating_score`) VALUES
(2, 4, 3, 4),
(3, 4, 5, 4),
(4, 4, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `display_name` varchar(55) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `product_id`, `user_id`, `display_name`, `title`, `content`, `published_date`) VALUES
(13, 4, 3, 'Jeffrey', 'This is an awesome product', 'This product is superb it performed anny task I threw at it with ease and maximum precision', '2018-11-01 13:59:27'),
(14, 4, 3, 'Jeffrey', 'This product is the best in the market', 'I have to say that this is the best product in the market and the world at large. It exceeded my best imagination performing task very fast and efficiently', '2018-11-01 14:01:19'),
(15, 4, 3, 'Jeffrey', 'This is good', 'I have to commend the makers of this product', '2018-11-01 14:03:39'),
(16, 4, 3, 'Jeffrey', 'Nice Product', 'This is a good product', '2018-11-01 16:58:44'),
(17, 4, 3, 'LKKNN', 'lkhhl', 'LKKNN', '2018-11-01 17:03:51'),
(18, 5, 3, 'Jeffrey', 'Great Product', 'This product is superb and nice highly recommended', '2018-11-08 01:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

CREATE TABLE `product_variation` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variation` varchar(255) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
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
(1, 1, '', '', '', '10', '300000', '223800', '', ''),
(2, 2, 'Price1', 'HG23838', '123456', '20', '300000', '', '', ''),
(3, 3, '', '', '', '35100', '27000', '26000', '', ''),
(4, 4, 'Black', '84891', '8199595929', '15', '90000', '85000', '2018-10-29', '2018-11-14'),
(5, 4, 'Blue', '88416', '4919464184', '3', '90000', '', '2018-10-29', '2018-11-13'),
(6, 5, 'Red', '12332', '5494919', '10', '90000', '', '', ''),
(7, 5, 'Orange', '54884', '4949495', '10', '90000', '70000', '2018-11-21', '2018-11-28'),
(8, 5, 'Dark', '544649', '57413', '10', '95000', '92000', '2018-11-15', '2018-11-28'),
(9, 6, '64GB', '5416109', '949191910', '5', '180250', '', '', ''),
(10, 6, '256GB', '5416102', '949191933', '10', '220450', '200100', '2018-11-20', '2018-11-29'),
(11, 7, '256GB', '4181050', '9418161091', '10', '105000', '', '', ''),
(12, 8, '164GB', '61111845', '4199941694', '10', '410000', '400000', '2018-11-10', '2018-11-28'),
(13, 9, '2GB Model', '461901', '6599919', '10', '80000', '70000', '2018-11-12', '2018-11-22'),
(14, 10, 'l', '54', '525', '10', '8899', '', '', ''),
(15, 11, 'Miranda', '941916', '49419199', '5', '14000', '', '', ''),
(16, 12, 'Hicense Vid', '2346', '123456', '10', '46000', '', '', ''),
(17, 13, 'X', '12345', '123456', '10', '75000', '', '', ''),
(18, 14, 'Variation1', '1222', '12345', '5', '1000', '', '', ''),
(19, 15, 'with battery', '234', '1234', '10', '2000', '', '', ''),
(20, 16, 'Variation2', '234', '123456', '10', '10000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `legal_company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `vat_file` varchar(255) DEFAULT NULL,
  `license_to_sell` tinyint(1) NOT NULL DEFAULT '0',
  `own_brand` tinyint(1) NOT NULL DEFAULT '0',
  `main_category` varchar(50) DEFAULT NULL,
  `no_of_products` varchar(50) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `bvn` varchar(10) DEFAULT NULL,
  `terms` varchar(255) NOT NULL,
  `company_pic` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending' COMMENT 'pending,approved,suspended,blocked,verified',
  `date_applied` datetime NOT NULL,
  `disable_products` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Sellers Main Table';

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `uid`, `legal_company_name`, `address`, `tin`, `reg_no`, `vat_file`, `license_to_sell`, `own_brand`, `main_category`, `no_of_products`, `bank_name`, `account_name`, `account_number`, `bvn`, `terms`, `company_pic`, `status`, `date_applied`, `disable_products`) VALUES
(1, 3, 'My legal company name', 'my address', '71718181', 'Ng83833', 'There was an error', 0, 0, 'Electronics', '', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '2820226778', '7262626228', 'Here is my information... Nothing serious', NULL, 'pending', '0000-00-00 00:00:00', 0),
(8, 4, 'Sokoya Adeniji Company', '530A, Aina Akingbala Street, Ikeja', '717', NULL, NULL, 1, 1, 'Computers &amp; Accessories', '21-50', NULL, NULL, NULL, NULL, '', NULL, 'suspended', '0000-00-00 00:00:00', 0),
(9, 6, 'Woyong Okey Company', '530A, Aina Akingbala Street, Ikeja', '71716', NULL, NULL, 1, 1, 'Electronics', '21-50', NULL, NULL, NULL, NULL, '', NULL, 'pending', '0000-00-00 00:00:00', 0),
(10, 8, 'JeffDev', 'No 13 Dan Ngozi Iyio Street', '4949644', NULL, NULL, 1, 1, 'Computers &amp; Accessories', '51-100', NULL, NULL, NULL, NULL, '', NULL, 'approved', '0000-00-00 00:00:00', 0),
(11, 9, 'James Integrated Services', '15A Ajegunle Street Ita-Oluwo, Ikorodu, Lagos State.', '00447762', '', 'There was an error', 1, 0, 'Electronics', '', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '0151820365', '0122665544', '', NULL, 'approved', '2018-11-14 12:13:24', 0);

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
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers_notification_message`
--

INSERT INTO `sellers_notification_message` (`id`, `seller_id`, `title`, `content`, `is_read`, `created_on`) VALUES
(1, 3, 'Your product listing has been suspended', 'This is to notify you the product with ( JY ) has been suspended.  <br /> Contact support if not please with this action.<br /> Regards.', 1, '2018-11-13 22:28:40'),
(2, 3, 'Your product listing has been approved', 'This is to notify you the product with ( JY ) has been approveed  <br /> Check your listing <a href=\'onitshamarket.com/jy-4/\'>Click here to see.</a><br /> Regards.', 1, '2018-11-13 22:28:30'),
(3, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Iphone 8 ) has been approveed  <br /> Check your listing <a href=\'onitshamarket.com/iphone-8-9/\'>Click here to see.</a><br /> Regards.', 1, '2018-11-13 22:28:35'),
(4, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Iphone 7 ) has been approveed  <br /> Check your listing <a href=\'onitshamarket.com/iphone-7-10/\'>Click here to see.</a><br /> Regards.', 1, '2018-11-13 22:28:42'),
(5, 4, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 0, '2018-11-13 20:05:34'),
(6, 4, 'Your account has been suspended', 'This is to notify you that your account has been suspended. <br />Contact support<br /> Regards.', 0, '2018-11-13 20:05:46'),
(7, 3, 'Your product listing has been suspended', 'This is to notify you the product with ( Apple iPhone 8 4.7&quot;, 64 GB, Fully Unlocked, Gold ) has been suspended.  <br /> Contact support if not please with this action.<br /> Regards.', 1, '2018-11-13 22:16:25'),
(8, 3, 'Your product listing has been approved', 'This is to notify you the product with ( jsjsjsjs ) has been approveed  <br /> Check your listing <a href=\'onitshamarket.com/jsjsjsjs-10/\'>Click here to see.</a><br /> Regards.', 0, '2018-11-13 21:55:20'),
(9, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Apple iPhone 8 4.7&quot;, 64 GB, Fully Unlocked, Gold ) has been approveed  <br /> Check your listing <a href=\'onitshamarket.com/apple-iphone-8-4-7-quot-64-gb-fully-unlocked-gold-6/\'>Click here to see.</a><br /> Regards.', 0, '2018-11-14 09:28:00'),
(10, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Apple Watch ) has been approveed  <br /> Check your listing <a href=\'onitshamarket.com/apple-watch-11/\'>Click here to see.</a><br /> Regards.', 0, '2018-11-14 09:30:08'),
(11, 9, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 1, '2018-11-14 14:53:47');

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
(1, 'Sim Type', '["Dual SIM"," Nano SIM"," Tripple SIM"," Dual Nano SIM"," Single SIM"," Dual Micro SIM"," Dual Mini SIM","Single Mini SIM"," Others"]', 'Select the SIM type for the smartphone', 0),
(2, 'OS Type', '["Android OS"," iOS"," Java OS"," Blackberry OS"," Symbian OS"," Others"]', 'Select the Operating system for the smartphone', 0),
(3, 'Battery Capacity', '["3000mAh - 5000mAh","    1000mAh - 3000mAh ","    4000mAh","   3000mAh ","   2000mAh ","   2200mAh ","    5000mAh","   3450mAh ","   5000mAh - 8000mAh ","   Over 10000mAh ","   4000mAh "," 3000mAh","  2000mAh ","  2200mAh","  3450mAh","   5000mAh","  5000mAh - 8000mAh","   2450mAh ","  3300mAh ","  1450mAh","  4450mAh ","  Less than 1000mAh ","  4300mAh","  8000mAh - 10000mAh ","   2300mAh","   10000mAh ","  6000mAh ","   1000mAh ","   3200mAh ","  4200mAh ","  1200mAh ","  1300mAh ","  5300mAh ","  5450mAh ","   6200mAh"]', 'Battery Capacity', 0),
(4, 'Internal Memory', '["6 GB "," 32 GB","64 GB"," 8 GB"," Below 128 MB"," 256 GB","128 GB","4 GB","1 GB","2 GB","128 MB"," Above 256 GB"," 3 GB","512 MB","256 MB"]', 'Phone Internal memory', 0),
(5, 'RAM', '["2 GB"," 3 GB"," 1 GB"," 4 GB ","6 GB","512 MB"," 1.5 GB ","16 GB"," Below 128MB"," 8 GB"," 32 MB"," 128 MB"," 256 MB"," 768 MB","500 GB. Others"]', 'RAM size', 0),
(6, 'Sceen Size', '["5.5 inches "," 5 inches"," 6 inches"," Others"," 4.7 inches "," 5.7 inches "," 5.2 inches"," 5.88 inches"," 4 inches"," 6.1 inches"," 4.5 inches"," 6.4 inches"," 5.6 inches "," 5.9 inches"," 2.4 inches"," 5.3 inches"," 5.1 inches"," 1.5 inches"," 2.8 inches "," 1.56 inches"," 1.4 inches","1.45 inches ","4.8 inches","1.77 inches"," 4.3 inches"," 55 inches"," 1.36 inches"," 4.6 inches"," 7 inches"," 1.52 inches"]', 'Screen Size', 0),
(7, 'Colour', '["Black"," Gold "," Grey ","Blue "," Silver "," Yellow "," Red "," White ","Others"," Purple "," Pink "," Multicolour"," Brown "," Beige ","Green "," Orange"," Bronze"]', 'Colour', 0);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `ip` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `recovery_code` varchar(50) NOT NULL COMMENT 'recovery code to retrieve password',
  `account_status` varchar(10) NOT NULL COMMENT '''active'',''suspended'',''blocked''',
  `is_seller` varchar(50) NOT NULL DEFAULT 'false',
  `is_admin` int(11) NOT NULL,
  `groups` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `city`, `zip_code`, `address`, `phone`, `display_name`, `profile_pic`, `gender`, `password`, `salt`, `ip`, `date_registered`, `last_login`, `newsletter`, `recovery_code`, `account_status`, `is_seller`, `is_admin`, `groups`) VALUES
(1, 'bisi@gmail.com', 'Sokoya', 'Philip', '', '', '', '08169254598', 'mrphilo1234455', '', 'female', 'eaf859633c1bc66dc04a57f3d2579a0a0f5a626c17940a0010473222c9ee61f0', 'Dr=SLzk1viy$JP9q<=)bTn0V##gdQctp;!zmvb.g:8iur9T?!+', '127.0.0.1', '2018-08-23 16:21:31', '2018-09-04 20:44:25', 0, '', '', '1', 0, 0),
(2, 'phil@gmail.com', 'Sokoya', 'Adeniji', '', '', '', '', '', '', '', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '::1', '2018-09-17 21:40:35', '2018-11-23 08:33:37', 0, '', '', '0', 0, 0),
(3, 'admin@gmail.com', 'Chidi', 'Jeffrey', '', '', '', '', '', '', '', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '::1', '2018-09-17 21:40:35', '2018-11-26 07:53:55', 0, '', '', '1', 1, 2),
(4, 'seller@gmail.com', 'Jeff', 'Besox', '', '', '', '', '', '', '', 'ee707647928828271f6c2cd23ae10fe8bdc2f58b4745dfb3a2e8f18d7a3003c2', 'FA6rGIWT:nH+qNbY0gAC84)HpylN*aNrg9Sm?8eqERNY,ncLg:', '::1', '2018-10-22 12:21:30', '2018-10-22 15:35:22', 0, '', '', 'pending', 0, 0),
(5, 'seller2@gmail.com', 'Phil', 'Tusey', '', '', '', '', '', '', '', 'e71997718ceebe98d6b05bf3f4b9e54d338178996973e8999282b3313fdcd10d', '8Ge(<|c=Hw9Gh@1=n!_,>vXN|OWaz,($^2wqFPAm>(*l)NnZsE', '::1', '2018-10-22 12:26:31', '2018-11-20 15:07:59', 0, '', '', 'false', 0, 0),
(6, 'okey@gmail.com', 'Woyong', 'Okey', '', '', '', '', '', '', '', 'f74b08dc3f1fbf7c4cb26c04102f69adcb2f9446165326692350648ce9ffc3b0', 'Jd#X7j!5kHvh+?D;HOV1)(RUjoCGg<H(k|.cRtQB.pX<zwbLid', '::1', '2018-10-22 15:38:24', '2018-10-22 15:41:05', 0, '', '', 'pending', 0, 0),
(7, 'chidij75@gmail.com', 'Jeffrey', 'Chidi', '', '', '', '', '', '', '', '09977119f3e042e78cfc983f526ed5b049cacbcfd3ebc36f7eed501a95ca474e', 'L+wJTq96s5vjz>YPapsC*qtW5ResseWx^ze>W@C19gLS#C-TrO', '::1', '2018-10-23 08:54:45', '2018-10-23 08:54:45', 0, '', '', 'false', 0, 0),
(8, 'jeff@gmail.com', 'Jeffrey', 'Chidi', '', '', '', '', '', '', '', '114d07eca1eec8fb506dae23659aa4277e9af6be5049d5e1575cdecf63fd33d7', 'b#K^m&=S?t5remy0Z5C^bIvAi#?S4D;btyB#Wj=5:@.:1>p@17', '::1', '2018-10-23 08:58:13', '2018-10-26 12:26:32', 0, '', '', 'pending', 0, 0),
(9, 'james@gmail.com', 'James', 'Adeoye', '', '', '', '', '', '', '', '39a7e45ce9e2231580ab38f4266d78c7030ba21a5cc58ceed839174bd3501e14', 'mYL8E1l3klr4YNZzs<C:wa+e2<Z$A.SBK*S$OVZGbAhs|gsm^a', '::1', '2018-11-14 12:03:08', '2018-11-14 17:29:24', 0, '', '', 'approved', 0, 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);
ALTER TABLE `category` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `last_activity_idx` (`timestamp`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy_table`
--
ALTER TABLE `dummy_table`
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
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dummy_table`
--
ALTER TABLE `dummy_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pickup_address`
--
ALTER TABLE `pickup_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sellers_notification_message`
--
ALTER TABLE `sellers_notification_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
