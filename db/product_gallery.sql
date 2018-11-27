-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2018 at 03:45 PM
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
(1, 1, 1, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 09:33:45'),
(2, 2, 1, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 09:33:52'),
(3, 3, 1, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 09:33:57'),
(4, 4, 3, '1a7ffd857c83c66db4a28e42a06648eb.jpg', 0, '2018-10-30 09:14:59'),
(5, 4, 3, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 10:08:04'),
(6, 5, 3, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 09:34:13'),
(7, 5, 3, '3638943326dadb01a167fa265fe9fad1.jpg', 0, '2018-11-08 00:27:51'),
(8, 5, 3, '3cf8cb108df473d78499c501e08380ce.jpg', 0, '2018-11-08 00:27:51'),
(10, 6, 3, 'product/4a0f84dd91471107bf6a1dfce1d62fc0.jpg', 1, '2018-11-27 09:34:54'),
(11, 6, 3, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 0, '2018-11-27 14:45:37'),
(12, 7, 3, 'product/4a0f84dd91471107bf6a1dfce1d62fc0.jpg', 1, '2018-11-27 09:35:01'),
(13, 7, 3, 'b626355d0f149428c4fda315875b02e6.jpg', 0, '2018-11-09 08:08:28'),
(14, 7, 3, '3aaedfa3600d385e54453b1ec22e6338.jpg', 0, '2018-11-09 08:08:28'),
(15, 8, 3, 'product/4a0f84dd91471107bf6a1dfce1d62fc0.jpg', 1, '2018-11-27 09:35:30'),
(16, 9, 3, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 09:35:34'),
(17, 10, 3, 'product/e39a411b54c3ce46fd382fef7f632157.jpg', 1, '2018-11-27 09:35:53'),
(18, 11, 3, 'product/6f181f206b8555c5dc619bc206ab35ad.jpg', 1, '2018-11-27 09:35:57'),
(19, 12, 3, 'product/6f181f206b8555c5dc619bc206ab35ad.jpg', 1, '2018-11-27 09:36:02'),
(20, 18, 3, 'product/6f181f206b8555c5dc619bc206ab35ad.jpg', 1, '2018-11-27 09:36:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
