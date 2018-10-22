-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 05:51 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrito`
--

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
('0v12bq15g1ve1o6b6vt46d8righ9k3g4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538988283;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";'),
('11am5jiv7ofg3f769k7nou2qd45rf9iq', '::1', '', '0000-00-00 00:00:00', 'is_seller|s:5:"false";logged_in|b:1;logged_id|s:4:"Ng==";email|s:14:"okey@gmail.com";__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('2013qek4c9ug3c5ssl3fq1k9143t3t1h', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:5:{s:10:"cart_total";d:2645000;s:11:"total_items";d:11;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:5;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:1119000;}s:32:"f8abe8808a2b6ddf092f08304c8ad84c";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:1;s:5:"price";d:26000;s:4:"name";s:65:"Nokia - 2 - 5quot - 1GB RAM 8GB ROM - Android 70 8MP  5MP - White";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"f8abe8808a2b6ddf092f08304c8ad84c";s:8:"subtotal";d:26000;}s:32:"e8b165724f139341583812ba7fd21ba1";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:5;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"e8b165724f139341583812ba7fd21ba1";s:8:"subtotal";d:1500000;}}logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('4o8u48e12pi1k1eb4s1tnboa63dft64f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538733787;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:3447600;s:11:"total_items";d:12;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:10;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:3000000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}'),
('4tv39s6nt457t05l58ip80qjbd7751he', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538997693;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('6dok8l9d765dpvg0f2usnmm8h39u0n4l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538996606;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";success_msg|s:22:"You are now logged in!";__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('6fo1kbqgsf4ldq893i07q5bpl7vmcogj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538735212;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:3447600;s:11:"total_items";d:12;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:10;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:3000000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}'),
('6oqhovaat6r20hckg9a0rv8dl0f2rsmg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538671384;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('73ndoca5uj38lmcfftvdr615i3g4cvvm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538671384;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('8i4s1etnsklpdliq0r3otnmv8v3icain', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538669967;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('93n17d850athj3t1bqop7ts8nveoq9li', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538737993;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:2771400;s:11:"total_items";d:10;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:7;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:2100000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:3;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:671400;}}__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('9trpeiu0g70h926kvb1rfeo200b8vove', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538687687;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('a21m63mjllfv30225i4ekmosqbj0e6fs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538998727;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('aehqhl10q8g8m39ffs1albso0f64dkd2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538668242;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('aml4ij795p44a89ga6qnb7pm2gf9vie0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538686220;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('b5onbivc5qf1n8m66e3molssl9nhgia4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538997390;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('bmrfeluahejiifo7jguqcg423l568k0b', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('cdktgle3hpc3k7tp7i237goen9bei42h', '::1', '', '0000-00-00 00:00:00', ''),
('cunnmbufa7lekpveksu9kk2eijgte7cn', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:8952000;s:11:"total_items";d:40;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:40;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:8952000;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('d24p7o6e6tabcbfvcvcaujf4fcgerp26', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538685885;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('du04ahjaabiia1kbm86kaeloe231vdhe', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('el7japmqpho1o5n6lotq60r94ovst5m7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538988737;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";'),
('g69jdc5lo9i25qan85bdhhjbu74hghk9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538685464;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('geaej79tldoqmm9t5jqmhajp5ofa06j9', '::1', '', '0000-00-00 00:00:00', ''),
('gitbv2lbs98jg8q4pfmstns4l631lnin', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538989327;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";'),
('i586fa1hovb3msdl8n2k8mrgqfid2fh1', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";cart_contents|a:4:{s:10:"cart_total";d:473600;s:11:"total_items";d:3;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:447600;}s:32:"f8abe8808a2b6ddf092f08304c8ad84c";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:1;s:5:"price";d:26000;s:4:"name";s:65:"Nokia - 2 - 5quot - 1GB RAM 8GB ROM - Android 70 8MP  5MP - White";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"f8abe8808a2b6ddf092f08304c8ad84c";s:8:"subtotal";d:26000;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('ibqtpo61eo9eha27cpb7ah4g8vl9836v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538736885;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:3147600;s:11:"total_items";d:11;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:9;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:2700000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}success_msg|s:40:"Your cart has been successfully updated.";__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('j4tsecmrkj6coueo5c32diq9146ghdrd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538998011;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('jcumm7ptbg2o7ujjmc18nvtutdlr1j3k', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:223800;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('jt3bt29qad4hdup7hdnro6qhmlb5t5eo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538687687;referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";cart_contents|a:4:{s:10:"cart_total";d:301800;s:11:"total_items";d:4;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}s:32:"e51ba0387c524df223910447ba06d12b";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:3;s:5:"price";d:26000;s:4:"name";s:65:"Nokia - 2 - 5quot - 1GB RAM 8GB ROM - Android 70 8MP  5MP - White";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"e51ba0387c524df223910447ba06d12b";s:8:"subtotal";d:78000;}}'),
('kgjmjhktof5k2qu2h9n2m6er66qo953s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538998727;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"cdc2038efa278b1152920f6eb03323f9";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:9:"seller_id";s:1:"1";}s:5:"rowid";s:32:"cdc2038efa278b1152920f6eb03323f9";s:8:"subtotal";d:447600;}}'),
('ksad7rkgoqd95l51776nleiofacm87os', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538993220;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:5:{s:10:"cart_total";d:901800;s:11:"total_items";d:6;s:32:"e51ba0387c524df223910447ba06d12b";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:3;s:5:"price";d:26000;s:4:"name";s:65:"Nokia - 2 - 5quot - 1GB RAM 8GB ROM - Android 70 8MP  5MP - White";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"e51ba0387c524df223910447ba06d12b";s:8:"subtotal";d:78000;}s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('kv1ospdpgr5ct7sgu74hukhob8psl5lu', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1539007082;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('l8k6lnrdka5ktvgmkoq7vro3uab8i6hc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538738348;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('lltdciarpa62le91a03c5ovrb0k4lpo4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538991801;referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";'),
('lrnst3lu9k5fjqddbmpq9g4m1vat873n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538669606;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('mm8dic32c9hh7k1efevtbm18r1m6pr57', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1539015281;referred_from|s:36:"http://localhost/project001/checkout";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:447600;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('mn7nplm000k9gna9euot1ef9vdsn9164', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538669054;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('n9dr92ns2phckatj37i6chj7i10r7qbe', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";cart_contents|a:4:{s:10:"cart_total";d:525600;s:11:"total_items";d:5;s:32:"c4b535c328ca4b6c83da6a0c567392a0";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"c4b535c328ca4b6c83da6a0c567392a0";s:8:"subtotal";d:447600;}s:32:"f8abe8808a2b6ddf092f08304c8ad84c";a:7:{s:2:"id";s:1:"3";s:3:"qty";d:3;s:5:"price";d:26000;s:4:"name";s:65:"Nokia - 2 - 5quot - 1GB RAM 8GB ROM - Android 70 8MP  5MP - White";s:7:"options";a:3:{s:4:"size";N;s:6:"colour";s:5:"Green";s:6:"seller";s:1:"1";}s:5:"rowid";s:32:"f8abe8808a2b6ddf092f08304c8ad84c";s:8:"subtotal";d:78000;}}logged_in|b:1;logged_id|s:1:"2";email|s:14:"phil@gmail.com";'),
('nh7co4kb41r72qaovb8h21ieo4ohvjk5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538686848;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('nhc1f30a2p8rn4h13sgr9bos6igboigq', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";'),
('p0ovoe2q905fdmodttdbc63d2s9nmfdp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538992151;referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";'),
('preu15fvo1jq7c8tubnrg3lastb4baas', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538667917;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('psi013v87eqaof5pv81f31okrpb197un', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538734828;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:3447600;s:11:"total_items";d:12;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:10;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:3000000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}'),
('psi26l3d36oei8s389if5qfldur4mka4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538992730;referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";'),
('qbtftnrclifaugm8rms9v4q7u9sdn7fc', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:36:"http://localhost/project001/checkout";logged_in|b:1;logged_id|s:4:"Mg==";is_seller|s:1:"0";email|s:14:"phil@gmail.com";'),
('qjshkua90adepjlk1uq7iban6gn2o8fg', '::1', '', '0000-00-00 00:00:00', 'referred_from|s:35:"http://localhost/project001/product";'),
('s4nvc72spjnvqr0q5rfaesvhmqu9pb7g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538736526;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:3671400;s:11:"total_items";d:13;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:10;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:3000000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:3;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:671400;}}'),
('sbkp0efbmuad8gjn1nvfue6b3gjafvr7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538733323;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";'),
('soiipuk9tp43srtac50fa3rkd2ga6et0', '::1', '', '0000-00-00 00:00:00', ''),
('thcrlsm1ckgqrdic31ejvrjjatg76u66', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538734425;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:3447600;s:11:"total_items";d:12;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:10;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:3000000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}'),
('tj6399cjv679gt4qk2a65lapljf5lq34', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538993852;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";'),
('tsjbtin6i649nd5fotl03qhgm3gfa3iv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538667303;referred_from|s:54:"http://localhost/project001/samsung-galaxy-j6-purple-2";cart_contents|a:3:{s:10:"cart_total";d:600000;s:11:"total_items";d:2;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:2;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:600000;}}'),
('u8afek9raki1dsjcnbvfog6dcedg3oq6', '::1', '', '0000-00-00 00:00:00', ''),
('ufv9kii2sqkfs588sgi9594ihlpd4fg5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538738348;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:447600;s:11:"total_items";d:2;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
('v2kva83c0bhiq0nd0cq0e8f5771kmd9f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538684730;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:3:{s:10:"cart_total";d:223800;s:11:"total_items";d:1;s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:1;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:223800;}}'),
('v4jjuqn9plagf4fepje9cv2o81bsu4ke', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538737688;referred_from|s:80:"http://localhost/project001/samsung-galaxy-s9-black-dual-sim-official-warranty-1";cart_contents|a:4:{s:10:"cart_total";d:2847600;s:11:"total_items";d:10;s:32:"647cdde3bb49c60436dfb75da95fbe52";a:7:{s:2:"id";s:1:"2";s:3:"qty";d:8;s:5:"price";d:300000;s:4:"name";s:26:"Samsung Galaxy J6 - Purple";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"647cdde3bb49c60436dfb75da95fbe52";s:8:"subtotal";d:2400000;}s:32:"b625be6b1c07b0079f067a88ef3c1709";a:7:{s:2:"id";s:1:"1";s:3:"qty";d:2;s:5:"price";d:223800;s:4:"name";s:54:"Samsung Galaxy S9 - BLACK Dual Sim - Official Warranty";s:7:"options";a:2:{s:4:"size";N;s:6:"colour";s:5:"Green";}s:5:"rowid";s:32:"b625be6b1c07b0079f067a88ef3c1709";s:8:"subtotal";d:447600;}}'),
('vmmf22mqujln1j1a95pvdjvq500neopa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1538990211;referred_from|s:86:"http://localhost/project001/nokia-2-5-quot-1gb-ram-8gb-rom-android-7-0-8mp-5mp-white-3";');

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
(9, 2, 5, '2018-09-26 22:18:35');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(10) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `city` varchar(55) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `cvc` int(11) NOT NULL,
  `cardholder_name` varchar(255) NOT NULL,
  `valid_through` date NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Orders Table';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `seller_id`, `buyer_id`, `product_id`, `customer_name`, `customer_phone`, `city`, `zip_code`, `address`, `qty`, `amount`, `product_desc`, `card_number`, `cvc`, `cardholder_name`, `valid_through`, `order_date`, `status`) VALUES
(1, '431658', 1, 2, 1, 'Sokoya Adeniji', '08169254598', 'Ikorodu', '122333', '530A, Aina Akingbala Street, Ikeja', 1, '0', 'Size: / Colour:Green', '9199 1911 1911 1999', 1234, 'Sokoya Adeniji', '2018-10-20', '2018-10-16 12:51:23', 'ordered'),
(2, '431658', 1, 2, 2, 'Sokoya Adeniji', '08169254598', 'Ikorodu', '122333', '530A, Aina Akingbala Street, Ikeja', 1, '0', 'Size: / Colour:Green', '9199 1911 1911 1999', 1234, 'Sokoya Adeniji', '2018-10-20', '2018-10-16 12:51:23', 'ordered'),
(3, '398156', 1, 2, 1, 'Sokoya Adeniji', '08169254598', 'Ikorodu', '888555', '530A, Aina Akingbala Street, Ikeja', 3, '0', 'Size: / Colour:Green', '9199 1911 1911 1999', 1234, 'Sokoya Adeniji', '2018-10-19', '2018-10-16 14:18:56', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `rootcategory` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
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

INSERT INTO `products` (`id`, `seller_id`, `rootcategory`, `category`, `subcategory`, `sku`, `product_name`, `brand_name`, `model`, `main_colour`, `product_description`, `youtube_id`, `in_the_box`, `highlights`, `product_line`, `colour_family`, `main_material`, `dimensions`, `weight`, `attributes`, `product_warranty`, `warranty_type`, `warranty_address`, `certifications`, `product_status`, `report`, `views`, `created_on`) VALUES
(1, 1, 'Phones & Tablets', 'Mobile Phones', 'Smartphones', 'X5PJUH', 'Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty', 'Samsung', 'S9', 'Black', 'Display: 5.8&rdquo;, Quad HD+ sAMOLED\r\nSingle Sim Option\r\nCamera Main: Super Speed Dual Pixel 12 MP OIS (F1.5/F2.4)\r\nCamera Front: 8MP AF (F1.7)\r\nProcessor: 10nm, Octa-core (2.7GHz Quad + 1.7GHz Quad)\r\nMemory: 4GB RAM and 64GB Internal storage, External Memory: MicroSD&trade; up to 400 GB\r\nBattery: 3000mAh\r\nSecurity: Intelligent Scan (Iris + Face), Fingerprint Scanner, Water and Dust Resistance: IP68 (1.5 m &amp; 30 min)\r\n\r\n', '', '', '', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'silicon', '1260', '300', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"3000mAh ","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"5.9 inches","Colour":"Black"}', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n', '["Repair by vendor"]', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n', '["Eco Friendly","FSC - Forest Stewardship Council"]', 'pending', 0, 0, '2018-10-02 11:34:56'),
(2, 1, 'Phones & Tablets', 'Mobile Phones', 'Smartphones', 'BYZZSP', 'Samsung Galaxy J6 - Purple', 'Samsung', 'samsung j6', 'Purple', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'plume', '1260', '1000', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"3000mAh ","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"5.9 inches","Colour":"Black"}', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '["Repair by vendor"]', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'pending', 0, 0, '2018-10-03 10:46:58'),
(3, 1, 'Phones & Tablets', 'Mobile Phones', 'Smartphones', '31WUJE', 'Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White', 'Nokia', 'Nokia2', 'Grey', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'plume', '1260', '1000', '{"Sim-Type":"Single SIM","OS-Type":"Android OS","Battery-Capacity":"5000mAh","Internal-Memory":"128 MB","Sceen-Size":"6.4 inches","Colour":"Yellow"}', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '["FSC - Forest Stewardship Council","Organic"]', 'pending', 0, 0, '2018-10-03 11:28:34');

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
(1, 1, 1, '1538480109|product/o3tudwucyep5kdi9jnof.jpg', 1, '2018-10-02 10:34:56'),
(2, 2, 1, '1538563620|product/epkpjd5xdzgvk25taq9c.jpg', 1, '2018-10-03 09:46:58'),
(3, 3, 1, '1538144347|product/mqanmkt09xvmyuyjaxgg.jpg', 1, '2018-10-03 11:50:12');

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
(3, 3, '', '', '', '35100', '27000', '26000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `root_category`
--

CREATE TABLE `root_category` (
  `root_category_id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root_category`
--

INSERT INTO `root_category` (`root_category_id`, `icon`, `title`, `description`, `image`, `name`) VALUES
(1, 'phone', 'But Phones and Tablets', 'Shop for Phones &amp;amp; Tablets online at Jumia Nigeria. Discover a great selection of Phones &amp;amp; Tablets at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '2dec9affbb20d7b59e4c2dbf3c18834b.png', 'Phones & Tablets'),
(2, 'phone', 'Buy Computing Online in Nigeria', 'Shop for Computing online at Jumia Nigeria. Discover a great selection of Computing at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '782967ec98fca68460a2db48dc381a95.png', 'Computers & Accessories'),
(3, 'plug', 'Get Electronics devices', 'Shop for Electronics, electronics devices online at Carrito Nigeria. Discover a great selection of Computing at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '70f344b2444d9f0ad4452aa57248ac74.png', 'Electronics'),
(4, 'tags', 'Get fashionista, fashion ', 'Shop for affordable wears online at Carrito Nigeria. Discover a great selection of Computing at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '7ab958a674bb653efabc3f3f8163bee2.png', 'Fashions'),
(5, 'child', 'Baby, Kids & Toys with Accessories', 'Shop for affordable baby kids, cartoon, home video game, and accessories online at Carrito Nigeria. Discover a great selection of Computing at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '184f9407a2d3fda059b8489b6f789d98.png', 'Baby, Kids & Toys'),
(6, 'kitchen', 'Buy home and Kitchen utensils', 'Shop for affordable home and kitchen untensils online at Carrito Nigeria. Discover a great selection of Home and kitchen utensils at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '6b0bdf4e969434a3eff64b844f18d053.png', 'Home & Kitchen');

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
(1, 1, 'My legal company name', 'my address', '71718181', 'Ng83833', 'd18cc26fbd8189e6124f1c1ee14e49c9.docx', 0, 0, 'Tv & Electronics', '', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '2820226778', '7262626228', 'Here is my information... Nothing serious', NULL, 'pending', '0000-00-00 00:00:00', 0),
(8, 4, 'Sokoya Adeniji Company', '530A, Aina Akingbala Street, Ikeja', '717', NULL, NULL, 1, 1, 'Computers &amp; Accessories', '21-50', NULL, NULL, NULL, NULL, '', NULL, 'pending', '0000-00-00 00:00:00', 0),
(9, 6, 'Woyong Okey Company', '530A, Aina Akingbala Street, Ikeja', '71716', NULL, NULL, 1, 1, 'Electronics', '21-50', NULL, NULL, NULL, NULL, '', NULL, 'pending', '0000-00-00 00:00:00', 0);

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
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `root_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specifications` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Sub Category from Category Table';

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `root_category_id`, `category_id`, `name`, `specifications`, `created_at`) VALUES
(1, 1, 1, 'Smartphones', '["1","2","3","4","5","6","7"]', '2018-10-01 19:36:33'),
(2, 1, 1, 'Feature Phones', '["1","2","3","4","5","6","7"]', '2018-10-01 19:37:22'),
(3, 1, 1, 'Batteries', '', '2018-10-02 11:19:26'),
(4, 1, 2, 'Phone Cables', '', '2018-10-02 11:21:06');

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
(2, 'phil@gmail.com', 'Sokoya', 'Adeniji', '', '', '', '', '', '', '', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '::1', '2018-09-17 21:40:35', '2018-10-22 17:50:34', 0, '', '', '0', 0, 0),
(3, 'admin@gmail.com', 'Sokoya', 'Adeniji', '', '', '', '', '', '', '', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '::1', '2018-09-17 21:40:35', '2018-10-22 15:58:34', 0, '', '', '1', 1, 0),
(4, 'seller@gmail.com', 'Jeff', 'Besox', '', '', '', '', '', '', '', 'ee707647928828271f6c2cd23ae10fe8bdc2f58b4745dfb3a2e8f18d7a3003c2', 'FA6rGIWT:nH+qNbY0gAC84)HpylN*aNrg9Sm?8eqERNY,ncLg:', '::1', '2018-10-22 12:21:30', '2018-10-22 15:35:22', 0, '', '', 'pending', 0, 0),
(5, 'seller2@gmail.com', 'Phil', 'Tusey', '', '', '', '', '', '', '', 'e71997718ceebe98d6b05bf3f4b9e54d338178996973e8999282b3313fdcd10d', '8Ge(<|c=Hw9Gh@1=n!_,>vXN|OWaz,($^2wqFPAm>(*l)NnZsE', '::1', '2018-10-22 12:26:31', '2018-10-22 14:50:01', 0, '', '', 'false', 0, 0),
(6, 'okey@gmail.com', 'Woyong', 'Okey', '', '', '', '', '', '', '', 'f74b08dc3f1fbf7c4cb26c04102f69adcb2f9446165326692350648ce9ffc3b0', 'Jd#X7j!5kHvh+?D;HOV1)(RUjoCGg<H(k|.cRtQB.pX<zwbLid', '::1', '2018-10-22 15:38:24', '2018-10-22 15:41:05', 0, '', '', 'pending', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `rootcategory` (`rootcategory`);
ALTER TABLE `products` ADD FULLTEXT KEY `category` (`category`);
ALTER TABLE `products` ADD FULLTEXT KEY `subcategory` (`subcategory`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name_2` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name` (`product_name`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `root_category`
--
ALTER TABLE `root_category`
  ADD PRIMARY KEY (`root_category_id`);
ALTER TABLE `root_category` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `root_category` ADD FULLTEXT KEY `name_2` (`name`);

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
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);
ALTER TABLE `sub_category` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `root_category`
--
ALTER TABLE `root_category`
  MODIFY `root_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sellers_notification_message`
--
ALTER TABLE `sellers_notification_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
