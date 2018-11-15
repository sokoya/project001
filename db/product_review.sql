-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2018 at 11:45 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
