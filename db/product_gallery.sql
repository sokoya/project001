-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2018 at 11:44 AM
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
(1, 1, 1, '53927472ef7fb2b3ad83144851565ecb.jpg', 1, '2018-11-07 14:50:53'),
(2, 2, 1, '7477e882d169a026d549b4a30b53c35b.jpg', 1, '2018-11-07 18:52:52'),
(3, 3, 1, '031293b288deaddd7229239afa9b5e78.jpg', 1, '2018-11-07 18:54:02'),
(4, 4, 3, '1a7ffd857c83c66db4a28e42a06648eb.jpg', 0, '2018-10-30 09:14:59'),
(5, 4, 3, 'e888a678ee969fca1845a6aa6c991ae3.jpg', 1, '2018-11-07 18:52:11'),
(6, 5, 3, 'd5869e0361bf687be17d05c339a554d5.jpg', 1, '2018-11-08 00:27:51'),
(7, 5, 3, '3638943326dadb01a167fa265fe9fad1.jpg', 0, '2018-11-08 00:27:51'),
(8, 5, 3, '3cf8cb108df473d78499c501e08380ce.jpg', 0, '2018-11-08 00:27:51'),
(9, 6, 3, '<p>The filetype you are attempting to upload is not allowed.</p>', 0, '2018-11-08 09:57:34'),
(10, 6, 3, 'e0faa49bb415af2bcf20e9bd6a7ab589.jpg', 1, '2018-11-08 09:57:34'),
(11, 6, 3, '0d1a819e4425fa799e1fe6964a313ade.jpg', 0, '2018-11-08 09:57:34'),
(12, 7, 3, '357603ddeaea6807e162dc5da753c83e.jpg', 1, '2018-11-09 08:08:28'),
(13, 7, 3, 'b626355d0f149428c4fda315875b02e6.jpg', 0, '2018-11-09 08:08:28'),
(14, 7, 3, '3aaedfa3600d385e54453b1ec22e6338.jpg', 0, '2018-11-09 08:08:28'),
(15, 8, 3, 'eb602d7a5c4459fe04248f9f6d963ae1.jpg', 1, '2018-11-09 08:16:45'),
(16, 9, 3, '6bf8a7d96b549f159f26350fcd3f06b2.jpeg', 1, '2018-11-12 16:36:31'),
(17, 10, 3, '556d4701a9188ec8e4e662473ff9f78e.png', 1, '2018-11-13 21:55:02'),
(18, 11, 3, '2bd6d4f09566db6354fe0b9aaf753cf5.jpg', 1, '2018-11-14 09:27:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
