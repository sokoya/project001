-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 07:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrito`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `recovery_code` varchar(50) NOT NULL COMMENT 'recovery code to retrieve password',
  `account_status` varchar(10) NOT NULL COMMENT '''active'',''suspended'',''blocked'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `first_name`, `last_name`, `password`, `salt`, `ip`, `date_registered`, `last_login`, `recovery_code`, `account_status`) VALUES
(1, 'ph@gmail.com', 'hhshsh', '0', '8e5f564b3b8b4b8eb5672757e65bbede001ddcc16c86378194b6ad1d85af31d0', '.LE3pVWB%&O=bKR4uDrp5JehiGXq5?)k*Mm(2TPr*Y,n_wUN1<', '::1', '2018-08-20 17:26:27', '2018-08-20 17:26:27', '', ''),
(2, 'second@gmail.com', 'Second Account', 'Second Account', '99fae15026c9ea229a23d5675a014ced0a06c39c4c28b1ab90b802525e9ca8d2', 'Xb3gGZYk4(ZDfsbXm$Zi%2fuUe!n;$zGqxpC3rM_v0:w^ehxL;', '::1', '2018-08-20 17:33:45', '2018-08-20 17:33:45', '', ''),
(3, 'third@gmail.com', 'Third Account', 'Third Account', '7676aeb054c92bd154f397f02a07ec758b2498cdeb45d8b6562ace892d4b64ab', '%,:2N.+H=lV^^Y?Rl9c9y6HMzkza!0fxQPU==D=ZD|7E:!GSGo', '::1', '2018-08-20 17:35:19', '2018-08-20 17:35:19', '', ''),
(4, '4th@gmail.com', 'Fouth Acct', 'Fouth Acct', 'a7ee3aff7c08968b5ddc41263b6ebb419a2c8feeaf66da3b0b64399451d6c457', 'Nt2;6-auk2x>=L5GPTx:7Y%UiBZE61+cPod50&Taw)8lWhjnYr', '::1', '2018-08-20 17:37:48', '2018-08-20 17:37:48', '', ''),
(5, 'test@test.com', 'test', 'test', '7048a0528dd1afe0bc46c1314cb6cef5b2225818f90dc01af3ea5f8bda1f5b8a', '<RBL=BP|sO3(c)kCqmelP.-i@RpM)%;*g:XSUcHsHZRIYqk#&L', '::1', '2018-08-20 17:45:53', '2018-08-20 17:45:53', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
