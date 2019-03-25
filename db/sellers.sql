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
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `legal_company_name` varchar(255) DEFAULT NULL,
  `store_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `vat_file` varchar(255) DEFAULT NULL,
  `license_to_sell` tinyint(1) NOT NULL DEFAULT 0,
  `platform_selling` varchar(255) NOT NULL COMMENT 'other platform the seller sells',
  `own_brand` tinyint(1) NOT NULL DEFAULT 0,
  `main_category` varchar(50) DEFAULT NULL,
  `no_of_products` varchar(50) NOT NULL,
  `product_condition` varchar(255) NOT NULL,
  `seller_phone` varchar(255) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `account_type` varchar(255) NOT NULL,
  `bvn` varchar(10) DEFAULT NULL,
  `balance` decimal(10,0) NOT NULL DEFAULT 0,
  `terms` varchar(255) NOT NULL,
  `company_pic` varchar(255) DEFAULT NULL,
  `date_applied` datetime NOT NULL,
  `disable_products` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Sellers Main Table';

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `uid`, `legal_company_name`, `store_name`, `address`, `tin`, `reg_no`, `vat_file`, `license_to_sell`, `platform_selling`, `own_brand`, `main_category`, `no_of_products`, `product_condition`, `seller_phone`, `bank_name`, `account_name`, `account_number`, `account_type`, `bvn`, `balance`, `terms`, `company_pic`, `date_applied`, `disable_products`) VALUES
(1, 7, 'CHARLESVILLE TECHNOLOGIES LTD', 'CHARLESVILLE TECHNOLOGIES LTD', 'Aina Akimgbala', '110137773', '909969', NULL, 1, '', 0, 'Computing', '51-100', 'new', '8165013215', 'Guaranty Trust Bank Plc', 'CHARLESVILLE TECHNOLOGIES LTD', '0106144878', 'current', NULL, '0', '', NULL, '2019-03-06 15:08:42', 0),
(2, 5, 'Charlesville Design Studio', 'Charlesville Design Studio', '104 okpanam Road opp Legislative Quarters', '', '', NULL, 1, '', 0, 'Fashion', '501-more', 'new', '07030091882', 'Zenith Bank Plc', 'Charlesville Design Studio', '1011535312', 'current', NULL, '0', '', NULL, '2019-03-06 15:39:09', 0),
(3, 8, 'CHARLESVILLE TECHNOLOGIES LTD', 'CHARLESVILLE TECHNOLOGIES LTD', '530A Aina Akingbala, Omole Phase 2, Ikeja', '110137773', '', NULL, 0, '', 0, '', '1-50', 'new', '09057341526', '', '', '', 'current', NULL, '0', '', NULL, '2019-03-07 09:08:49', 0),
(5, 3, 'sidi', 'Charlesville Design Studio', 'qxshodwoiho', '', '', NULL, 1, '', 0, 'Electronics', '1-50', 'new', '+2347087949904', 'Key Stone Bank', 'Jeffrey Chidi', '495959595', 'savings', NULL, '0', '', NULL, '2019-03-07 13:50:17', 0),
(6, 14, 'Black-Premium Developers', 'Electronics Gadget', 'Asaba', '1234567890', 'BN2488877', NULL, 1, 'Facebook, Twitter, instagram, and Google Ads', 0, 'Electronics', '51-100', 'new', '07060516923', 'Zenith Bank Plc', 'Black-Premium Developers', '1015031025', 'current', NULL, '0', '', NULL, '2019-03-08 16:37:42', 0),
(7, 18, 'onitshamarket', 'Mr liberty', '176 Akwa road, Onitcha Anambra state', '', '', NULL, 1, '', 0, 'Computing', 'pack', 'new', '08037897489', 'FIRST BANK NIGERIA LIMITED', 'Omordia Onyero Liberty', '3068790278', 'savings', NULL, '0', '', NULL, '2019-03-15 09:09:00', 0),
(8, 17, 'VE-Man Global Enterprises', 'VE-Man Global Enterprises', '104 Okpanam Road, Asaba', '', '', NULL, 0, '', 0, 'Phones & Tablets', '1-50', 'new', '08167676093', 'United Bank For Africa Plc', 'VE-Man Global Enterprises', '1021746724', 'current', NULL, '0', '', NULL, '2019-03-15 11:50:42', 0),
(9, 19, 'VE-Man Global Enterprises', 'VE-Man', '176 Akwa Road Onitsha, Anambra state, Nigeria West Africa', '', '', NULL, 1, '', 0, 'Phones & Tablets', 'pack', 'new', '08167777314', 'Union Bank of Nigeria Plc', 'VE-Man Global Enterprise', '1021746724', 'current', NULL, '0', '', NULL, '2019-03-15 13:20:05', 0),
(10, 21, 'Blessed Mitchyvalellie', 'Blessed Mitchyvalellie', 'Asaba', '-001', '', NULL, 0, '', 0, 'Health & Beauty', '1-50', 'new', '08065332780', 'United Bank For Africa Plc', 'Nwangene Chinenye Blessing', '2043058547', 'savings', NULL, '0', '', NULL, '2019-03-24 13:53:43', 0),
(11, 22, 'International  Aboki', 'Eyo edem', '19 ekeng abia street calabar', 'None ', '', NULL, 0, '', 0, 'Fashion', '1-50', 'new', '08035228442', 'Guaranty Trust Bank Plc', 'Offiong Irene', '0151210865', 'savings', NULL, '0', '', NULL, '2019-03-25 19:24:58', 0),
(12, 23, 'Onogbichere Anthonia ochuko', 'Anteduem fashion store', '45 Awolowo Road ikoyi Lagos State', '', '', NULL, 0, '', 0, 'Health & Beauty', '1-50', 'new', '07035480248', 'Guaranty Trust Bank Plc', 'Onogbichere Anthonia ochuko', '0116022829', 'savings', NULL, '0', '', NULL, '2019-03-25 19:55:50', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
