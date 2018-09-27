-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2018 at 12:19 PM
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
(1, 'Home Audio / Video', 2, '2018-08-24 20:44:01'),
(2, 'Men Wears', 1, '2018-08-27 18:50:55'),
(3, 'Tablet Phones', 3, '2018-08-27 18:51:12'),
(4, 'Graphics Designs', 4, '2018-09-18 11:09:23'),
(5, 'Ladies Wears', 1, '2018-08-27 18:53:14'),
(6, 'Category Creation', 2, '2018-09-18 09:54:08');

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
(7, 2, 2, '2018-09-26 22:16:37'),
(8, 2, 4, '2018-09-26 22:18:29'),
(9, 2, 5, '2018-09-26 22:18:35');

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
(1, 1, 'Tv & Electronics', 'Home Audio / Video', 'My new Sub', 'VH3IP7', 'First Product 1', 'Apple', 'Iphone 4S', 'Green', 'Hello Everyone', '', 'Hello everyone', 'Hello everyone', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green","Red","Yellow"]', 'synthetic', '123', '1000', '{"Features":"dual core","Refresh":"123","Display":"56"}', 'Hello everyone', '["Repair by vendor","Replacement by vendor"]', 'Hello', '["Timber Certificate"]', 'pending', 0, 0, '2018-09-13 10:45:57'),
(2, 1, '0', '0', '0', '8MW46V', 'A new product listing', 'Apple', 'Samsung S4', 'Blue', 'Hello everyone', '', 'Hello everyone', 'Hello everyone', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green","Red","Yellow"]', '', '123', '1000', '{"Features":" HD","Display":" Gorilla Glass","Refresh":"300"}', 'Hello everyone', '["Service Center","Repair by vendor","Replacement by vendor"]', 'Hello everyone', '["Timber Certificate"]', 'pending', 0, 0, '2018-09-19 10:33:37'),
(3, 1, '', 'Fashion', 'My new Sub', '64PXFS', 'Third Product posting', 'Apple', 'Iphone 4S', 'Blue', 'Hello', '627272727', 'Hello', 'Hello', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green","Red","Yellow"]', '', '123', '1000', '{"Features":null,"Display":"Anti Glare","Refresh":"12344"}', 'Hello', '["Repair by vendor"]', 'Hello', '["AFRDI - Australian Furnishing Research & Development Institute"]', 'pending', 0, 0, '2018-09-19 11:03:29'),
(4, 1, '', 'Home Audio / Video', 'My new Sub', 'OYDCZA', 'Third Property Posting', 'Samsung', 'Samsung S4+', 'Purple', 'Hello', '727272', 'Hello', 'Hello', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'glass', '123', '1000', '{"Features":null,"Display":"Gorilla Glass"}', 'Hello', '["Repair by vendor"]', 'Hello', '["AFRDI - Australian Furnishing Research & Development Institute"]', 'pending', 0, 0, '2018-09-19 11:11:34'),
(5, 1, '', 'Tv & Electronics', 'Samsung S9+', 'OGJLE0', 'Samsung Product', 'samsung', 'samsung s9', 'Blue', '', '', '', '', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'resin', '123', '1000', '{"Features":[" Anti Glare"],"Display":"gps"}', '', '["Repair by vendor"]', 'Hello', '["Timber Certificate"]', 'pending', 0, 0, '2018-09-19 11:22:12'),
(6, 1, 'Tv & Electronics', 'Home Audio / Video', 'My new Sub', 'DYJJPY', 'Hello This is Product Name', 'Apple', 'samsung s9', 'Blue', 'Hello', '', 'Hello', 'Hello', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green","Red"]', 'plume', '123', '1000', '{"Features":[" Gorilla Glass"],"Display-Features":" HD","Refresh-Rate":"455"}', 'Hello', '["Repair by vendor"]', 'Hello', '["Timber Certificate"]', 'pending', 0, 0, '2018-09-19 12:25:57'),
(7, 1, 'Tv & Electronics', 'Home Audio / Video', 'My new Sub', 'OL1XO8', 'Another product testing', 'Apple', 'apple', 'purple', 'Hello', '', 'Hello', 'Hello', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green","Red","Yellow"]', 'silicon', '123', '1000', '{"Features":["3D"," Anti Glare"," Full HD"," Gorilla Glass"],"Display-Features":" UHD","Refresh-Rate":"13455"}', '', '["Repair by vendor"]', '', '["AFRDI - Australian Furnishing Research & Development Institute"]', 'pending', 0, 0, '2018-09-19 12:28:18'),
(8, 1, 'Tv & Electronics', 'Home Audio / Video', 'My new Sub', 'GY56XJ', 'Another Product', 'Apple', 'samsung s9', 'Blue', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green","Red"]', 'wood', '123', '1000', '{"Features":[" Anti Glare"," Full HD"],"Display-Features":" Anti Glare","Refresh-Rate":"34500"}', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '["Repair by vendor","Replacement by vendor"]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '["Timber Certificate"]', 'pending', 0, 0, '2018-09-23 14:51:41');

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
(1, 1, 1, 'a3763d577f55154ef1f85f45b778df70.jpg', 1, '2018-09-23 15:17:30'),
(2, 1, 1, '2c1f6989663d26facd3765d8a6b03fe8.jpg', 0, '2018-09-13 09:45:58'),
(3, 2, 1, 'b521ee9732f5010fa35f0462520eccfa.jpg', 0, '2018-09-19 09:33:37'),
(4, 2, 1, '2d78dc2aecfa9f8584c7a7646ae6a497.jpg', 1, '2018-09-19 09:33:37'),
(5, 2, 1, '4d8710928b4e3c3f963241024088a061.jpg', 0, '2018-09-19 09:33:37'),
(6, 3, 1, '2549f2c96309c0bd24af3439ac073ffe.jpg', 0, '2018-09-19 10:03:29'),
(7, 3, 1, 'aaa6ef2f6fdae6d88227720ae7f80c93.jpg', 0, '2018-09-19 10:03:29'),
(8, 3, 1, 'dee97be723d00a5c871ddc9905ecac36.jpg', 0, '2018-09-19 10:03:29'),
(9, 3, 1, '52074e601307b6c4a51be17848ec8cd3.jpg', 0, '2018-09-19 10:03:29'),
(10, 3, 1, '4f40468bf5c8af7cab00ae4f00ad87aa.jpg', 1, '2018-09-19 10:03:29'),
(11, 4, 1, '184318e22b920667b39ef820c635082b.jpg', 0, '2018-09-19 10:11:34'),
(12, 4, 1, 'e988474d296e0f1910407ce4cd041ac3.jpg', 1, '2018-09-19 10:11:34'),
(13, 4, 1, '53930aee74db2b40dfb289d6a28bd115.jpg', 0, '2018-09-19 10:11:34'),
(14, 4, 1, 'd63da0ba70d403f2c107074267c5b872.jpg', 0, '2018-09-19 10:11:34'),
(15, 4, 1, '64c40e2a76ee217daba49b7cbc0b2c4c.jpg', 0, '2018-09-19 10:11:34'),
(16, 5, 1, '2a49ddf9f15e4ebb0386addc5fd2c1da.jpg', 1, '2018-09-23 15:38:49'),
(17, 6, 1, 'a94d8b95b80b7d23f51188fb8a3ff390.jpg', 1, '2018-09-23 10:48:18'),
(18, 6, 1, 'cfdb659bb7266153e41f3182d91310c2.jpg', 0, '2018-09-19 11:25:57'),
(19, 7, 1, '12cd514e8a0bde29654afeba05557cab.jpg', 1, '2018-09-19 11:28:18'),
(20, 8, 1, 'c327166a5a0c2e9f68c2b8fda54aab9c.jpg', 0, '2018-09-23 13:51:41'),
(21, 8, 1, '1e7d8a4791a78fb9bb86aace00c4effc.jpg', 1, '2018-09-23 13:51:41');

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
(1, 1, 'Variation1', '234', '12345', '2', '3000', '', '', ''),
(2, 1, 'variation2', '234', '123456', '1234', '4000', '3500', '2018-09-19', '2018-09-20'),
(3, 2, 'Variation1', '2346', '123456', '123', '40000', '30000', '2018-09-20', '2018-09-21'),
(4, 2, 'Variation2', '2346', '123456', '2', '5000', '3400', '2018-09-25', '2018-09-27'),
(5, 5, 'Variation1', '2346', '123456', '3', '40000', '1000', '2018-09-20', '2018-09-21'),
(6, 4, 'Variation1', '234', '12345', '3', '40000', '30000', '2018-09-20', '2018-09-21'),
(7, 6, 'Variation1', '234', '12345', '3', '40000', '30000', '2018-09-20', '2018-09-22'),
(8, 8, 'X', '234', '123456', '10', '40000', '30000', '2018-09-19', '2018-09-28'),
(9, 5, 'Variation2', '2346', '123456', '3', '40000', '10000', '2018-09-20', '2018-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `root_category`
--

CREATE TABLE `root_category` (
  `root_category_id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root_category`
--

INSERT INTO `root_category` (`root_category_id`, `icon`, `description`, `image`, `name`) VALUES
(1, '', '', '', 'Fashion'),
(2, 'electronics', 'TV and electronics', '29576db2db00fba7ff6d7fbc0143e8d5.png', 'Tv & Electronics'),
(3, '', '', '', 'Computing'),
(4, 'heart', 'Arts and design', '816f032b48ba188b22d65bdde6a47ccf.png', 'Arts & Designs'),
(5, 'diamond', 'Jewelry and accessories... Good place to be... Cool', '9ef759f10d0da9f77ea73c4a240c95da.png', 'Jewelry'),
(6, 'pet', 'Pets...', '6951ab8149e6c9dc49b0bb2d52933e1e.png', 'Pets');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
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
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `account_status` int(11) NOT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Sellers Main Table';

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `first_name`, `last_name`, `email`, `password`, `salt`, `legal_company_name`, `address`, `tin`, `reg_no`, `vat_file`, `license_to_sell`, `own_brand`, `main_category`, `no_of_products`, `bank_name`, `account_name`, `account_number`, `bvn`, `terms`, `start_date`, `end_date`, `profile_pic`, `account_status`, `date_registered`, `last_login`, `ip`, `is_approved`) VALUES
(1, 'Sokoya', 'Philip', 'phil@gmail.com', '8f7d7a41ce942ec9b93ead40a8530fd02d5ee10982e0a23b52829a6364681e45', 'HQ8@D00m.j$F$b!5,x@y9.OWdfm;OAHm0PK?8c.p@:e%IE(#R3', 'My legal company name', 'my address', '71718181', 'Ng83833', 'd18cc26fbd8189e6124f1c1ee14e49c9.docx', 0, 0, 'Tv & Electronics', '', 'Guaranty Trust Bank Plc', 'Sokoya Adeniji Philip', '2820226778', '7262626228', 'Here is my information... Nothing serious', '2018-09-22', '2018-09-14', NULL, 0, '2018-09-06 15:41:35', '2018-09-23 14:49:15', '::1', 0),
(2, 'Jeff', 'Chidi', 'jeff@gmail.com', '11e403be4a0c4c4053a88321f57ba7e68d097fff0c90ef9fe0a54c721cfc72b7', '@nV$fMwzglx_X2)+w^S!6LrqE#nF360F6D*V$V?AK^wNK|z6yA', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, '0', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '2018-09-06 16:17:46', '2018-09-06 16:18:28', '::1', 0),
(3, 'Sokoya', 'Adeniji', 'admin@gmail.com', '6ff6f751b0d7c6f9a797b0b120d7cc26ba8206026a177b3a0c5bfe09d445da9e', 'z5Lq8*.@)TXASYpj|e<GgH4l14^4)whvU=VrrYaKz.4L_DBlME', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, '2018-09-14 13:01:59', '2018-09-24 10:36:42', '::1', 0);

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
(1, 'Features', '["3D"," Anti Glare"," Full HD"," Gorilla Glass"," HD"," UHD"]', 'Select the features of the products', 1),
(2, 'Display Features', '["3D"," Anti Glare"," Full HD"," Gorilla Glass"," HD"," UHD"]', 'Specify the type of display. Example: Retina, Full HD, 3D', 0),
(3, 'Refresh Rate', '', 'Specifying the screen refresh rate in MHz  Example: 40', 0),
(4, 'Display Size', '["gps"]', 'Specify the size of the display in inch.  Example: 47', 0),
(5, 'Heel type', '["Block"," block heel","cone heel","flat","high"," low","mid","platform","wedge","stacked","stiletto"]', 'Define the type of heel the shoe has  Example: e.g. Block, Cuban, Flared, Mid, Stiletto', 0),
(6, 'A new feature', '["nothing, nothing 2"]', 'Hello just testing', 0),
(7, 'Dummy Feature', '["option1","option2","option3","option4","option5","option6","option7","option8","option9","option10"]', 'Nothing to talk about', 0),
(8, 'Another dummy spec', '["option1","option2","option3","option4","option5","option6","option7","option8","option9","option10"]', 'Another dummy specification description', 0),
(9, 'Colour specification', '["green"," red"," blue"," yellow"," purple"]', 'Nothing serious', 1);

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
(15, 2, 1, 'no spec category', '["1","2","3","4"]', '2018-09-18 17:45:19'),
(16, 2, 1, 'My new Sub', '["1","2","3"]', '2018-09-17 16:20:51'),
(17, 3, 3, 'Samsung S9+', '["1","2","4"]', '2018-09-17 16:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `recovery_code` varchar(50) NOT NULL COMMENT 'recovery code to retrieve password',
  `account_status` varchar(10) NOT NULL COMMENT '''active'',''suspended'',''blocked'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `phone`, `display_name`, `gender`, `password`, `salt`, `ip`, `date_registered`, `last_login`, `newsletter`, `recovery_code`, `account_status`) VALUES
(1, 'bisi@gmail.com', 'Sokoya', 'Philip', '08169254598', 'mrphilo1234455', 'female', 'eaf859633c1bc66dc04a57f3d2579a0a0f5a626c17940a0010473222c9ee61f0', 'Dr=SLzk1viy$JP9q<=)bTn0V##gdQctp;!zmvb.g:8iur9T?!+', '127.0.0.1', '2018-08-23 16:21:31', '2018-09-04 20:44:25', 0, '', ''),
(2, 'phil@gmail.com', 'Sokoya', 'Adeniji', '', '', '', 'f191311d9970adaf1117fbbb295cc959bb9d094329215bddfb590a9def27dee2', '*9-dTBSC-8m+QmuPv&|PKU>Ipz-Wcd^oxL<s.iAoepyAO1Wjxx', '::1', '2018-09-17 21:40:35', '2018-09-26 22:14:11', 0, '', '');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `rootcategory` (`rootcategory`);
ALTER TABLE `products` ADD FULLTEXT KEY `category` (`category`);
ALTER TABLE `products` ADD FULLTEXT KEY `subcategory` (`subcategory`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name_2` (`brand_name`);

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

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `root_category`
--
ALTER TABLE `root_category`
  MODIFY `root_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
