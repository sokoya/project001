-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2018 at 09:43 AM
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
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `primary_address` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `root_category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brand_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `root_category_id`, `brand_name`, `description`, `brand_logo`) VALUES
(1, 0, 'Lenovo', 'Lenovo Group Ltd. or Lenovo PC International, often shortened to Lenovo, is a Chinese multinational technology company with headquarters in Beijing, China and Morrisville, North Carolina, United States', ''),
(2, 0, 'sony', 'Sony Corporation is a Japanese multinational conglomerate corporation headquartered in K?nan, Minato, Tokyo. Its diversified business includes consumer and professional electronics, gaming, entertainment and financial services.', ''),
(3, 0, 'Binatone', 'Binatone is a British telecommunications company. Binatone was started in the United Kingdom in 1958 by two brothers, Gulu Lalvani and Partap Lalvani, to import and distribute consumer electronics. In 1983 Binatone was the first in Europe with fixed-line consumer products that could be bought at electronics retailers', ''),
(4, 0, 'infinix', 'Infinix Mobile is a Hong Kong-based smartphone manufacturer founded in 2012. The company has research and development centres in Paris and Shanghai.', ''),
(5, 0, 'philips', 'Koninklijke Philips N.V. is a Dutch multinational technology company headquartered in Amsterdam currently focused in the area of healthcare and lighting. It was founded in Eindhoven in 1891 by Gerard Philips and his father Frederik, with their first products being light bulbs.', '');

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
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('0v1akht3p3bn8ul2igqgs9ghsst6s9r5', '::1', '', '0000-00-00 00:00:00', ''),
('2ce4r91s607a1bof5kganleoo33lqe0p', '::1', '', '0000-00-00 00:00:00', ''),
('4ju6i73isf64h2jac305tldicfl5tvrs', '::1', '', '0000-00-00 00:00:00', ''),
('520oosbt5c8otuhiaq8nmaq3h6vufupu', '::1', '', '0000-00-00 00:00:00', ''),
('6samjmnea1tsc3fpuuis8i6t02d80sc7', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";'),
('74e0igcrbmca1h4skbaagdcpludbr3lk', '::1', '', '0000-00-00 00:00:00', ''),
('7b1ds95gv38dup7c726ersvkqrbvfrrf', '::1', '', '0000-00-00 00:00:00', ''),
('85denvmn87gqc1t1u1l27uadkl5o5rf2', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";rootcategory|s:1:"1";category|s:1:"1";subcategory|s:1:"1";sub_id|s:1:"1";new_rootcategory|s:16:"Phones & Tablets";new_category|s:13:"Mobile Phones";new_subcategory|s:11:"Smartphones";'),
('agdd9jtbju0gchourpcv56hder84rjd5', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";'),
('aobmheomg1t0sf3553lgrh2hmkr9q5t0', '::1', '', '0000-00-00 00:00:00', ''),
('bee64sqlqun29sbvksmoqa6ft1mhlhuo', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";'),
('cp5tbp77vc6o8kgjm045un3rqd610rjk', '::1', '', '0000-00-00 00:00:00', ''),
('d2q0di6u5h5cf9uupfsagjc4hgeuh8rd', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";'),
('fbojg01mtpvq80mus6lfdf3nuf7q09g9', '::1', '', '0000-00-00 00:00:00', ''),
('fs5g9vap8ictmdkm1cp20rvk7556smcv', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";rootcategory|s:1:"2";category|s:1:"2";subcategory|s:1:"2";sub_id|s:1:"2";new_rootcategory|s:23:"Computers & Accessories";new_category|s:28:"Phones & Tablets Accessories";new_subcategory|s:14:"Feature Phones";'),
('jdkm3u9n5s67ue43c3vbrocdhn52a19v', '::1', '', '0000-00-00 00:00:00', ''),
('kqit3337kmlsniaur92pjfm1hn9rggvl', '::1', '', '0000-00-00 00:00:00', ''),
('n0hp9oplrka4kdtqq762sqg6otecn7he', '::1', '', '0000-00-00 00:00:00', ''),
('nn875hle94362056dok76cpqvu2ogcd4', '::1', '', '0000-00-00 00:00:00', ''),
('o6q7fo3f52g15vbs2agu717b21de8cqt', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";rootcategory|s:1:"1";category|s:1:"1";subcategory|s:1:"1";sub_id|s:1:"1";new_rootcategory|s:16:"Phones & Tablets";new_category|s:13:"Mobile Phones";new_subcategory|s:11:"Smartphones";'),
('pns8gfassa526ptjftjmdjh805bd0sdj', '::1', '', '0000-00-00 00:00:00', 'logged_in|b:1;logged_id|s:4:"Mw==";is_seller|s:8:"approved";email|s:17:"seller2@gmail.com";'),
('poeb01i7vbn75atna0qq4euqgabbkjtl', '::1', '', '0000-00-00 00:00:00', '');

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
(9, 2, 5, '2018-09-26 22:18:35'),
(10, 2, 14, '2018-10-25 09:38:46');

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
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Orders Table';

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
(1, 3, 'Phones & Tablets', 'Mobile Phones', 'Smartphones', '345719', 'Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty Product', '-- Select Brand Name --', 'samsung s9+', 'green', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '- Highlight \r\n- Highlight 2\r\n- Highlight 3', 'PhilTech Technologies', '["red","black"]', 'wood', '1260', '1000', '{"Sim-Type":"Dual Mini SIM","OS-Type":"Symbian OS","RAM":"6 GB"}', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'approved', 0, 192, '2018-10-26 12:13:04');

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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `seller_id`, `image_name`, `featured_image`, `created_at`) VALUES
(1, 1, 3, '5a18701070ccf3f4a09ae2b389d09806.png', 0, '2018-10-27 21:16:16'),
(2, 1, 3, '5a18701070ccf3f4a09ae2b389d09806.png', 0, '2018-10-27 21:16:20'),
(3, 1, 3, '53927472ef7fb2b3ad83144851565ecb.jpg', 1, '2018-10-27 20:11:00'),
(4, 1, 3, '7477e882d169a026d549b4a30b53c35b.jpg', 1, '2018-10-31 08:50:35');

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
(3, 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `product_id`, `user_id`, `display_name`, `title`, `content`, `published_date`) VALUES
(1, 1, 3, 'Philip', 'This is a good product', 'Hello everyone...', '2018-11-01 14:14:06');

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
(1, 1, 'with battery', '', '', '10', '76800', '', '', ''),
(2, 1, 'without battery', '', '', '5', '45800', '', '', '');

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
(3, 'plugs', 'Get Electronics devices', 'Shop for Electronics, electronics devices online at Carrito Nigeria. Discover a great selection of Computing at the best price ? Enjoy cash on delivery ? Best prices in Nigeria ? FREE DELIVERY possible on eligible purchases.', '70f344b2444d9f0ad4452aa57248ac74.png', 'Electronics'),
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
(1, 2, 'Philo Technologies', '530A Aina Akingbala Street, Ikeja. Lagos State', '71718181', NULL, NULL, 1, 1, 'Computers &amp; Accessories', '21-50', NULL, NULL, NULL, NULL, '', NULL, 'approved', '2018-10-25 20:44:30', 0),
(2, 3, 'Paulo Escobar Drug Ringer', 'Lorem Ipsum , no particular address though', '71718181', '', 'There was an error', 1, 0, 'Electronics', '', 'Standard Chartered Bank Nigeria Ltd', 'Paul Scholary', '5511225585', '7262626228', '', NULL, 'approved', '2018-10-26 10:34:08', 0);

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
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers_notification_message`
--

INSERT INTO `sellers_notification_message` (`id`, `seller_id`, `title`, `content`, `is_read`, `created_on`) VALUES
(1, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty Product ) has been approved and its lived now. <br /> Check your listing <a href=\'/samsung-galaxy-s9-black-dual-sim-official-warranty-product-1/\'>Click here to see.</a><br /> Regards.', 0, '0000-00-00 00:00:00'),
(3, 3, 'Your product listing has been suspended', 'This is to notify you the product with ( Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty Product ) has been suspended.  <br /> Contact support if not please with this action.<br /> Regards.', 0, '0000-00-00 00:00:00'),
(4, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty Product ) has been approveed  <br /> Check your listing <a href=\'/samsung-galaxy-s9-black-dual-sim-official-warranty-product-1/\'>Click here to see.</a><br /> Regards.', 0, '0000-00-00 00:00:00'),
(5, 2, 'Your account has been suspended', 'This is to notify you that your account has been suspended. <br />Contact support<br /> Regards.', 0, '0000-00-00 00:00:00'),
(6, 2, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 0, '0000-00-00 00:00:00'),
(7, 2, 'Your account has been suspended', 'This is to notify you that your account has been suspended. <br />Contact support<br /> Regards.', 0, '0000-00-00 00:00:00'),
(8, 2, 'Your account has been approved', 'Congrats, welcome to your seller dashboard.<br /> Regards.', 0, '0000-00-00 00:00:00'),
(9, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty Product ) has been approveed  <br /> Check your listing <a href=\'/samsung-galaxy-s9-black-dual-sim-official-warranty-product-1/\'>Click here to see.</a><br /> Regards.', 0, '2018-10-30 16:49:03'),
(10, 3, 'Your product listing has been approved', 'This is to notify you the product with ( Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty Product ) has been approveed  <br /> Check your listing <a href=\'/samsung-galaxy-s9-black-dual-sim-official-warranty-product-1/\'>Click here to see.</a><br /> Regards.', 0, '2018-10-31 09:50:11');

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
(1, 'admin@gmail.com', 'Admin', 'Account', '', '', '', '', '', '', '', '77a8e3672a3410f57732e966c29ab52246b99319f3c6a5ba6e3a1cc629878513', 'tgswpr&q>F@C*|a7g?7pSaegiQm|8R0glyC(HL|I9Sm0IHHZ0k', '::1', '2018-10-25 19:22:44', '2018-11-05 09:00:50', 0, '', '', 'false', 1, 0),
(2, 'seller1@gmail.com', 'seller1', 'account', '', '', '', '', '', '', '', '64d340418f7a4033b3aa0bbb6ef28625d9d202fd73dda1e526f8f9d3804abc55', '8nas6M#FZr+A2ji@nC6rnl^|iNQaXktXQvEH9)zQpVMOZ>Q?l;', '::1', '2018-10-25 19:49:15', '2018-10-26 10:25:49', 0, '', '', 'approved', 0, 0),
(3, 'seller2@gmail.com', 'Paul', 'Daniel', '', '', '', '', '', '', '', '4f5652c6c6512b066a984815dcfbcc14ddb3988bc427bb66640af83e7780265e', 'PdqFDxP6)#K6H+)svGY;+:4ub*|qz*t!WWIh5F?qk^0OAFHiVV', '::1', '2018-10-26 09:08:01', '2018-11-02 08:07:56', 0, '', '', 'approved', 0, 0);

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
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `root_category`
--
ALTER TABLE `root_category`
  MODIFY `root_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sellers_notification_message`
--
ALTER TABLE `sellers_notification_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
