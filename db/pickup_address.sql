-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 11:47 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pickup_address`
--
ALTER TABLE `pickup_address`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pickup_address`
--
ALTER TABLE `pickup_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
