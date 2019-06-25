-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2019 at 10:39 AM
-- Server version: 10.3.11-MariaDB-1:10.3.11+maria~cosmic-log
-- PHP Version: 7.2.15-0ubuntu0.18.10.2

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
-- Table structure for table `bank_transfer`
--

CREATE TABLE `bank_transfer` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `deposit_type` varchar(50) NOT NULL,
  `pop` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_transfer`
--

INSERT INTO `bank_transfer` (`id`, `uid`, `order_code`, `amount`, `bank`, `deposit_type`, `pop`, `remark`) VALUES
(1, 1, 0, 9109500, 'Diamond Bank Plc', 'Mobile Banking', 'z2ik8ins7hhgmquhtt4c.jpg', 'Hello everyone.. Come and see oo, I\'ve paid Onitshamarket'),
(2, 1, 216735849, 9109500, 'FIRST BANK NIGERIA LIMITED', 'Mobile Banking', 'jaurdir2uos12ytoscn7.jpg', 'he'),
(3, 1, 125934876, 9109500, 'Citibank Nigeria Limited', 'Internet Banking Transfer', 'ev7kmwfnqq8d2mb9l9us.jpg', 'You guys have received all my money'),
(4, 1, 415873962, 9109500, 'Skye Bank Plc', 'Mobile Banking', 'encxsijfnigcaqcuu9pu.jpg', 'Hello people'),
(5, 1, 614572983, 8609500, 'Standard Chartered Bank Nigeria Ltd', 'Cash Deposit', 'wynqhwgmwr74ollu7f59.jpg', 'Hello everyone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_transfer`
--
ALTER TABLE `bank_transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_transfer`
--
ALTER TABLE `bank_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
