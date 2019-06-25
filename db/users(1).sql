-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2019 at 04:28 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `wallet` decimal(11,0) NOT NULL DEFAULT 0,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `recovery_code` varchar(50) NOT NULL COMMENT 'recovery code to retrieve password',
  `account_status` varchar(10) NOT NULL COMMENT '''active'',''suspended'',''blocked''',
  `is_seller` varchar(50) NOT NULL DEFAULT 'false' COMMENT 'false,pending,approved,suspended,blocked,verified',
  `is_admin` int(11) NOT NULL,
  `groups` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `address`, `phone`, `display_name`, `profile_pic`, `gender`, `wallet`, `password`, `salt`, `code`, `ip`, `date_registered`, `last_login`, `newsletter`, `recovery_code`, `account_status`, `is_seller`, `is_admin`, `groups`) VALUES
(1, 'philo4u2c@gmail.com', 'Sokoya', 'Philip', '', '08070994845', 'saint_philip', '', 'male', '0', '32cad51e7bc085d4368aa84dd956ef35aa08b7ab1e82294ab526c65e5c05c535', '%*=c29@J>L7cfSy=_Zs&Y_N=2(.=iHuMEiY4P^*1OvPDiWUp6!', '', '154.118.44.163', '2019-02-05 11:24:19', '2019-03-25 13:00:25', 0, '', '', 'approved', 1, 1),
(2, 'c.jeffrey@onitshamarket.com', 'Jeffrey', 'Chidi', '', '07087949904', '', '', '', '0', '34690273f7c25748f3cf1b10162e9696622d3b356548d15467eec64a56c77836', '^qwPaq<PVg*PxZ1F7uzxfysr<#O0?Bz(<8Qgi-rmzq@mBW7zGE', '', '41.203.78.234', '2019-03-06 11:57:41', '2019-03-25 08:03:51', 0, '', '', 'false', 1, 1),
(3, 'michael.adekoniye@onitshamarket.com', 'Michael', 'Adekoniye', '', '08159277099', '', '', '', '0', 'f94d5eeb95ee07d170fffecc48f4c9c2c9f8fafd0e158f8ac4c987c7b94efd81', 'Gq=+?eB8Ln^dpSx*LwhcSfr%rk66Dgnm9a=W.G_&2P*)T0Kb96', '', '41.217.91.112', '2019-03-06 12:08:35', '2019-03-22 08:05:47', 0, '', '', 'approved', 1, 1),
(4, 'c.omordia@schoolville.com', 'Charles', 'Omordia', '', '08064028176', '', '', '', '0', '5712a1925d4ebf4de7bc46a5440c996b67d32e11b6a95a6fea40f1bca9407366', '7#?Dg:qIpzQt_6B9!l-:|0!S4Eldm.C&k,,*2<E:|:0j&nH3b&', '', '197.214.99.111', '2019-03-06 13:02:43', '2019-03-25 19:16:41', 0, '', '', 'false', 1, 1),
(5, 'edith.ezeugwu@onitshamarket.com', 'Edith', 'Ezeugwu', '', '07030091882', '', '', '', '0', '090bb863ebd1e16f3cc5e69b363dd14b3114df5c09d1e58deb29ba9ed788e6a9', 'NqC>G8S+r;1MqexhnGyQF_06,k?vAYOly)30k^809Pg:fCHC+X', '', '129.205.112.168', '2019-03-06 13:55:02', '2019-03-25 16:12:58', 0, '', '', 'approved', 1, 4),
(6, 'isaiah.ashaye@onitshamarket.com', 'Isaiah', 'Ashaye', '', '08106148422', '', '', '', '0', '11872569d7bc18c276ce6f7251ded5d51b53b031fff8ab7d6b6c6fab9001adfd', 'vLS+N?s(v$94t5=is-p1(07?zE+qIGUYqaJBba7GXa?y0$Pb0(', '', '41.203.78.226', '2019-03-06 13:55:50', '2019-03-22 11:53:59', 0, '', '', 'false', 1, 2),
(7, 'woyong.ayaeko@onitshamarket.com', 'Woyong', 'Ayaeko', '', '', '', '', '', '0', '65633a9430ec63226f4f4c2afc0483a2651607a40ccc80e43b254e4ea9b3d93c', 'L2Lc-IA-?xVLipE.uWqJMKgNXz48FO%7<+.ZLK%p_55<hvH$*h', '', '154.120.100.238', '2019-03-06 15:08:42', '2019-03-22 12:04:01', 0, '', '', 'approved', 0, 0),
(8, 'chukwudi.ebite@onitshamarket.com', 'CHUKWUDI', 'EBITE', '', '', '', '', '', '0', 'e34f8bad12e14f4dd62977c6845459bf95fc594792139d65e98bde96481c8b73', '2!kNiOMtX&$p<p_pPm?5-4nM*iy7fN)Z:0b2lMy;+W:>Swe2sm', '', '154.118.30.11', '2019-03-07 09:08:49', '2019-03-18 11:40:21', 0, '', '', 'approved', 0, 0),
(10, 'chidij75@gmail.com', 'Jeffrey', 'Chidi', '', '07087949904', '', '', '', '0', '403377150224eac59550697713b79b845ed6d7331b8501dc4524fbddc7b629d8', 'y_gydwM8=|SAIZ_C|8+Y75QSReuBFq!fXJd4LoCuiPqt92iSWS', '', '41.203.72.181', '2019-03-07 17:22:53', '2019-03-22 17:41:48', 0, '', '', 'false', 0, 0),
(13, 'philip.sokoya@schoolville.com', 'Schoolville Philip', 'Schoolville', '', '08122334455', '', '', '', '0', '26955fb5581a66e81e92239b584f8c0676a36de30109b1b538ff73952ae833a6', 'XEC:DVHQGnkF,9IspFnhw<pK1OmvDvPSUc4kiC)j>eUBO%7H;e', '', '154.120.107.23', '2019-03-08 07:41:29', '2019-03-08 09:35:03', 0, '', '', 'false', 0, 0),
(14, 'support@electronics-gadget.com', 'Ferdinard', 'Okokhue', '', '07060516923', '', '', '', '0', '8909b6ac1f45eeb54cd88a112dee94467c80c0bc395215f193e25a74e4edac1d', '#jl408vE9,VG!RXB|)mZS-Sl3a)Pj(4Zj4SSjBSfuo|^B3=;jM', '', '197.159.69.235', '2019-03-08 16:28:31', '2019-03-11 15:47:47', 0, '', '', 'approved', 0, 0),
(15, 'Chucks.amaka@yahoo.com', 'GOODLOOKS', 'FASHION', '', '08063465163', '', '', '', '0', '191fe16503ac1d1cc16bb056022125583a1b01a33def8319bbf81a62bfef091d', '*E^d^nKj-%:!0oP7f$jgfqLnt2R_%<LZnD>O*ltVgt>QC@,B$r', '', '197.210.28.49', '2019-03-13 13:15:34', '2019-03-13 13:18:50', 0, '', '', 'false', 0, 0),
(16, 'markkaka069@gmail.com', 'Ezeh', 'Obinna', '', '08064680813', '', '', '', '0', '0e18103cac8c2c1f886ddc0f8e359e8fd12d90670c05ac5f5d9d2b56470f6d9f', '#v9n:Sc?#l:or2rlr@kXdSuq-Es8^3a23vmK&r8?8CRj1wsgJ|', '', '105.112.99.160', '2019-03-14 10:12:55', '2019-03-14 10:12:56', 0, '', '', 'false', 0, 0),
(17, 'c.okoro@onitshamarket.com', 'Okoro', 'Celestine', '', '08167676093', '', '', '', '0', '770e19abd9d71406a5502603dd24e584877adde1851b0e5afeb762ec4ad48353', '%B59zMp$zwzhZ=FQ^&23S9kC|Dn3ueS(ZRt(3q5%n$QPhQRdsz', '', '169.159.80.221', '2019-03-14 11:38:16', '2019-03-25 14:27:11', 0, '', '', 'approved', 0, 0),
(18, 'l.omordia@onitshamarket.com', 'Omordia', 'Liberty', '', '08037897489', 'Mr libs', '', 'male', '0', 'a6e6d74b5acce651d809b3efe08ebd602be5c1428c172f977c4c699940b3c253', 'fM*.Es9$Rp5AJ%512Z#u|t_1sAFM#DP|f7sFgYjtrCnHM*u$fB', '', '169.159.77.168', '2019-03-14 12:26:51', '2019-03-20 11:58:05', 0, '', '', 'approved', 0, 0),
(19, 'c.njoagwu@onitshamarket.com', 'Charles', 'Njoagwu', '', '08167777314', '', '', '', '0', 'fba3e5550ef11f6bfe4feed86bc3e2829353f6c0b46b262765287e1e2c6ebc5d', 'm7>y9bE#NA==SzTbH?))&+owm:Mu<D3zIax+K-1JQsJAT1YOir', '', '105.112.82.254', '2019-03-14 17:03:53', '2019-03-18 15:28:54', 0, '', '', 'approved', 0, 0),
(20, 'ogunameprecious123@gmail.com', 'precious', 'OG', '', '08187740000', '', '', '', '0', 'aa61ff57baa1c03044069217a2b9428b33cc5ea68ab25302c50597dcfb0d3390', '6$P1Ut#GtrJBP|eZ9J#XJjknAZ(.jS*!RW@wB#OfO9MQGJekd2', '', '41.58.102.5', '2019-03-21 14:27:10', '2019-03-21 14:27:11', 0, '', '', 'false', 0, 0),
(21, 'Chinenye.nwangene@gmail.com', 'Chinenye', 'Nwangene', '', '08065332780', '', '', '', '0', '3e0e2922cfc3e0010e71ff3647eb38374d127e4e22e86adcf250a4b3702b5c83', 'GzE<VzginA#&.#OrZ7;%1;k_d5hhk2oc*D6tTVhpv(2lGcq(6=', '', '197.210.28.63', '2019-03-24 13:33:21', '2019-03-25 06:52:19', 0, '', '', 'approved', 0, 0),
(22, 'Ireneoffiong9@gmail.com', 'Offiong', 'Irene', '', '08035228442', '', '', '', '0', 'db0309eba0e9a8e2400130db5987f01886b4eb78c8849a78d37531365fd5bbec', '3App3ZZdjk*>#Me*1^:4SOzQu@Nrr;N$HVIPZvkQ?)1Q4v78mG', '', '41.203.78.250', '2019-03-25 18:39:55', '2019-03-25 19:21:10', 0, '', '', 'pending', 0, 0),
(23, 'hanthoniafredrick35@gmail.com', 'ANTHONIA', 'FREDRICK', '', '07035480248', '', '', '', '0', 'c0ad1a5dda850ce080840b966accf1fadf829d26bfa5c4cec5cbc42546c767fc', 'r#)K)zuj*n1^Izuv3@*8ZzuzxV|vLV9?C8O_jB4eY%uSm8UbHT', '', '197.210.54.94', '2019-03-25 19:00:00', '2019-03-25 19:50:37', 0, '', '', 'pending', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
