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
(1, 1, '', '', '', '10', '300000', '223800', '', ''),
(2, 2, 'Price1', 'HG23838', '123456', '20', '300000', '', '', ''),
(3, 3, '', '', '', '35100', '27000', '26000', '', ''),
(4, 4, 'Black', '84891', '8199595929', '15', '90000', '85000', '2018-10-29', '2018-11-14'),
(5, 4, 'Blue', '88416', '4919464184', '3', '90000', '', '2018-10-29', '2018-11-13'),
(6, 5, 'Red', '12332', '5494919', '10', '90000', '', '', ''),
(7, 5, 'Orange', '54884', '4949495', '10', '90000', '70000', '2018-11-21', '2018-11-28'),
(8, 5, 'Dark', '544649', '57413', '10', '95000', '92000', '2018-11-15', '2018-11-28'),
(9, 6, '64GB', '5416109', '949191910', '5', '180250', '', '', ''),
(10, 6, '256GB', '5416102', '949191933', '10', '220450', '200100', '2018-11-20', '2018-11-29'),
(11, 7, '256GB', '4181050', '9418161091', '10', '105000', '', '', ''),
(12, 8, '164GB', '61111845', '4199941694', '10', '410000', '400000', '2018-11-10', '2018-11-28'),
(13, 9, '2GB Model', '461901', '6599919', '10', '80000', '70000', '2018-11-12', '2018-11-22'),
(14, 10, 'l', '54', '525', '10', '8899', '', '', ''),
(15, 11, 'Miranda', '941916', '49419199', '5', '14000', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
