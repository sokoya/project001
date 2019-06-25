-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2019 at 04:29 PM
-- Server version: 10.2.22-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onitsham_market`
--

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
  `commission` int(11) NOT NULL DEFAULT 0,
  `delivery_charge` int(11) NOT NULL DEFAULT 0,
  `billing_address_id` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `product_variation_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `order_date` datetime NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_made` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Has the payment been received by us: pending|success|fail',
  `seller_wallet` int(11) NOT NULL DEFAULT 0,
  `agent` int(11) NOT NULL DEFAULT 0,
  `txnref` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payRef` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'eg : FBN|WEB|WEBDEMO|13-02-2019|275325|416842',
  `paymentDesc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'eg : Approved by Financial Institution ',
  `retRef` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responseCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'responseCode',
  `apprAmt` decimal(11,0) NOT NULL DEFAULT 0 COMMENT 'RetrievalReferenceNumber : 000726451296 '
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `tracking_id`, `buyer_id`, `seller_id`, `product_id`, `commission`, `delivery_charge`, `billing_address_id`, `pickup_location_id`, `product_variation_id`, `coupon_id`, `payment_method`, `qty`, `amount`, `order_date`, `status`, `active_status`, `payment_made`, `seller_wallet`, `agent`, `txnref`, `payRef`, `paymentDesc`, `retRef`, `responseCode`, `apprAmt`) VALUES
(2, 659432817, '', 4, 7, 13, 2632, 900, 3, 0, 15, 0, 1, 1, 105268, '2019-03-21 23:13:06', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-21 23:13:06\"}}', 'pending', 'pending', 0, 0, 'TX-659432817-1553209986', NULL, NULL, NULL, NULL, '0'),
(3, 795342816, '', 4, 7, 34, 5229, 500, 0, 2, 39, 0, 2, 1, 209142, '2019-03-21 23:29:05', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-21 23:29:05\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Not Completed\",\"datetime\":\"2019-03-22 17:56:25\"}}', 'cancelled', 'fail', 0, 0, 'TX-795342816-1553210945', NULL, 'Transaction Not Completed', NULL, 'Z1', '0'),
(4, 217854396, '', 2, 17, 63, 5087974, 600, 5, 0, 72, 0, 2, 1, 254398720, '2019-03-22 16:09:35', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:09:35\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-22 17:53:52\"}}', 'cancelled', 'fail', 0, 0, 'TX-217854396-1553270975', NULL, 'Customer Cancellation', NULL, 'Z6', '0'),
(5, 435912687, '', 2, 17, 63, 5087974, 600, 5, 0, 72, 0, 2, 1, 254398720, '2019-03-22 16:10:37', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:10:37\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Not Completed\",\"datetime\":\"2019-03-22 17:57:31\"}}', 'cancelled', 'fail', 0, 0, 'TX-435912687-1553271037', NULL, 'Transaction Not Completed', NULL, 'Z1', '0'),
(6, 432659187, '', 2, 8, 49, 1440, 600, 5, 0, 58, 0, 2, 1, 72000, '2019-03-22 16:14:40', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:14:40\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-22 17:56:45\"}}', 'cancelled', 'fail', 0, 0, 'TX-432659187-1553271280', NULL, 'Customer Cancellation', NULL, 'Z6', '0'),
(7, 514328796, '', 2, 8, 49, 1440, 600, 5, 0, 58, 0, 2, 1, 72000, '2019-03-22 16:24:49', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:24:49\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-22 17:57:06\"}}', 'cancelled', 'fail', 0, 0, 'TX-514328796-1553271889', NULL, 'Customer Cancellation', NULL, 'Z6', '0'),
(8, 486917352, '', 2, 8, 49, 1440, 600, 5, 0, 58, 0, 2, 1, 72000, '2019-03-22 16:29:57', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:29:57\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-22 17:55:51\"}}', 'cancelled', 'fail', 0, 0, 'TX-486917352-1553272197', NULL, 'Customer Cancellation', NULL, 'Z6', '0'),
(9, 836124795, '', 2, 8, 49, 1440, 600, 5, 0, 58, 0, 2, 1, 72000, '2019-03-22 16:30:46', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:30:46\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-22 17:57:17\"}}', 'cancelled', 'fail', 0, 5, 'TX-836124795-1553272246', NULL, 'Customer Cancellation', NULL, 'Z6', '0'),
(10, 974821635, '', 2, 8, 49, 1440, 600, 5, 0, 58, 0, 2, 1, 72000, '2019-03-22 16:34:21', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:34:21\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Not Completed\",\"datetime\":\"2019-03-22 17:55:02\"}}', 'cancelled', 'fail', 0, 0, 'TX-974821635-1553272461', NULL, 'Transaction Not Completed', NULL, 'Z1', '0'),
(11, 823469157, '', 2, 8, 49, 1440, 600, 5, 0, 58, 0, 2, 1, 72000, '2019-03-22 16:37:19', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 16:37:19\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Customer Cancellation\",\"datetime\":\"2019-03-22 17:56:10\"}}', 'cancelled', 'fail', 0, 0, 'TX-823469157-1553272639', NULL, 'Customer Cancellation', NULL, 'Z6', '0'),
(12, 751296834, '', 2, 8, 50, 650, 600, 5, 0, 59, 0, 2, 1, 32500, '2019-03-22 17:44:37', '{\"processing\":{\"msg\":\"Order is under process.\",\"datetime\":\"2019-03-22 17:44:37\"},\"cancelled\":{\"msg\":\"Order was marked as cancelled : Transaction Not Completed\",\"datetime\":\"2019-03-22 17:45:30\"}}', 'cancelled', 'fail', 0, 0, 'TX-751296834-1553276677', NULL, 'Transaction Not Completed', NULL, 'Z1', '33100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
