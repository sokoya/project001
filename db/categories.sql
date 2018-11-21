-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 11:20 AM
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
  `commission` int(11) NOT NULL,
  `variation_name` varchar(255) NOT NULL,
  `variation_options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `pid`, `slug`, `title`, `description`, `specifications`, `image`, `name`, `commission`, `variation_name`, `variation_options`) VALUES
(1, 'bolt', 0, 'electronics', 'electronics', 'Electronics Category', '["1","2","3"]', '42cce4ed60f67ce3267ce329202f898c.png', 'Electronics', 0, '', ''),
(2, 'mobile', 0, 'phone-tablets', 'Buy Great Phones', 'Buy a phone today to enjoy a discount', '', '1e89c9d383da60f948263f26ff443010.jpg', 'Phone &amp; Tablets', 0, '', ''),
(3, 'laptop', 0, 'computing', 'Great Computing Systems', 'Great Computing Systems', '', '7e65e8743eceacb37ce53397158e96f9.jpg', 'Computing', 0, '', ''),
(4, 'electronic', 1, 'television-video', 'Television & Video Items sold here', 'Television & Video Items sold here', '["3", "2"]', 'df4b74ef3ee289297464d833182b2442.png', 'Television & Video', 0, '', ''),
(5, '', 4, 'plasma-tv-s', 'Plasma Tv\'s Group sales now live', 'Plasma Tv\'s Group sales now live', '', '308f2deed798447058d106e38301005b.png', 'Plasma Tv\'s', 0, '', ''),
(6, '', 5, 'lite-desk', 'Lite Desk', 'Buy a Lite Desk television today', '["3"]', '4fb6bd4e30a7d2bc9d3b5d10ce764fbd.png', 'Lite Desk', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `categories` ADD FULLTEXT KEY `name_2` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
