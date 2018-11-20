-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 03:17 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(10) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
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

INSERT INTO `orders` (`id`, `order_code`, `seller_id`, `buyer_id`, `product_id`, `billing_address_id`, `product_variation_id`, `coupon_id`, `payment_method`, `pickup_location_id`, `qty`, `amount`, `order_date`, `status`) VALUES
(1, '431658', 1, 2, 1, 0, 0, 0, 0, 0, 1, '0', '2018-10-16 12:51:23', 'ordered'),
(2, '431658', 1, 2, 2, 0, 0, 0, 0, 0, 1, '0', '2018-10-16 12:51:23', 'ordered'),
(3, '398156', 1, 2, 1, 0, 0, 0, 0, 0, 3, '0', '2018-10-16 14:18:56', 'ordered'),
(4, '874265', 3, 3, 4, 0, 0, 0, 0, 0, 1, '90000', '2018-11-05 10:49:48', 'ordered'),
(6, '73862195', 1, 5, 2, 7, 2, 0, 1, 0, 2, '600000', '2018-11-20 15:14:31', 'ordered');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
