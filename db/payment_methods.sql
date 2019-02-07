-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2019 at 11:29 AM
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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `settings` text NOT NULL,
  `notes` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `settings`, `notes`, `status`) VALUES
(1, 'Payment on Delivery', '', 'Important information on this payment method:\n1. Payment must be made before opening a package;\n2. Once the seal is broken, item can only be returned if it is damaged, or has any missing item(s);\n3. Please ensure you have the exact amount for your order.\n\n**Please note, we will never ask you to make payment via SMS or email.**\n', 1),
(2, 'Interswitch Webpay', '["secret_key:sk_test_j1NHfDoinTtxm25PyGNuV4xw","publishable_key:pk_test_nod5swtRu9mKvMZB28838BY8"]', 'We are going to redirect you to our secured online platform, where you will be able to pay with your Naira Mastercard, Visa or Verve cards.\n\nPlease have your phone ready for SMS token to complete payment.\nDo not hesitate to call us on 08070994845 if you have any question.\n\n**Please note, we will never ask you to make payment via SMS or email.**', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
