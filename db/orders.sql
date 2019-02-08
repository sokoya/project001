-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2019 at 10:11 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` bigint(10) NOT NULL,
  `tracking_id` bigint(20) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `product_variation_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` tinytext NOT NULL,
  `active_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Orders Table';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `tracking_id`, `buyer_id`, `seller_id`, `product_id`, `billing_address_id`, `product_variation_id`, `coupon_id`, `payment_method`, `pickup_location_id`, `qty`, `amount`, `order_date`, `status`, `active_status`) VALUES
(6, 73862195, 0, 3, 3, 2, 7, 2, 0, 1, 0, 2, '600000', '2018-11-20 15:14:31', '{"processing":{"msg":"Your order payment is processing","datetime":"2018-12-10 16:20:58"}}', 'pending'),
(7, 73862195, 0, 3, 3, 4, 3, 2, 0, 1, 3, 2, '600000', '2018-11-21 15:14:31', '{"processing":{"msg":"Your order payment is processing","datetime":"2018-12-10 16:20:58"}}', 'pending'),
(8, 46189573, 0, 3, 0, 2, 6, 2, 0, 1, 0, 1, '300000', '2018-12-10 13:57:42', '{"processing":{"msg":"Your order payment is processing","datetime":"2018-12-10 16:20:58"}}', 'pending'),
(9, 29856714, 0, 3, 3, 2, 4, 2, 0, 1, 0, 1, '300000', '2018-12-10 14:07:00', '{"processing":{"msg":"Your order payment is processing","datetime":"2018-12-10 16:20:58"}}', 'pending'),
(10, 85936421, 0, 3, 3, 2, 5, 2, 0, 1, 0, 1, '300000', '2018-12-10 15:59:39', '{"processing":{"msg":"Your order payment is processing","datetime":"2018-12-10 16:20:58"}}', 'pending'),
(11, 14782539, 0, 3, 3, 2, 6, 2, 0, 1, 0, 1, '300000', '2018-12-10 16:20:58', '{"processing":{"msg":"Your order payment is processing","datetime":"2018-12-10 16:20:58"}}', 'pending');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
