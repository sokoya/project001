-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2018 at 09:19 AM
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
  `commission` float NOT NULL,
  `variation_name` varchar(255) NOT NULL,
  `variation_options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `pid`, `slug`, `title`, `description`, `specifications`, `image`, `name`, `commission`, `variation_name`, `variation_options`) VALUES
(1, 'fa-tv', 0, 'tvs-electronics', 'Buy Electronics Online in Nigeria', 'Shop for Electronics online on Onitshamarket. Discover a great selection of Television and Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'TVs & Electronics', 4, '', ''),
(2, '', 1, 'blu-ray-dvd-players', 'Buy Blu Ray &amp; DVD Players', 'Shop for Blu Ray &amp; DVD Players online on Onitshamarket. Discover a great selection of Blu Ray &amp; DVD Players at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Blu Ray &amp; DVD Players', 4.5, '', ''),
(3, 'fa-camera', 1, 'cameras', 'Buy Cameras Online in Nigeria', 'Shop for Cameras online on Onitshamarket. Discover a great selection of Cameras at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Cameras', 4.5, '', ''),
(4, '', 3, 'camcorders', 'Buy Camcorders Online In Nigeria', 'Shop for Camcorder online on Onitshamarket. Discover a great selection of Camcorder at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Camcorders', 4.5, '', ''),
(5, 'fa-camera', 3, 'camera-photo-accessories', 'Buy Camera and Photo Accessories', 'Shop for  Camera and  Photo Accessories online on Onitshamarket. Discover a great selection of Camera and  Photo Accessories at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Camera &amp; Photo Accessories', 2.5, '', ''),
(6, 'fa-camera', 3, 'digital-cameras', 'Buy Digital Cameras Online', 'Shop for Digital Cameras online on Onitshamarket. Discover a great selection of Digital Cameras at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Digital Cameras', 2.5, '', ''),
(7, 'fa-camera', 3, 'digital-photo-frames', 'Buy Digital Photo Frames', 'Shop for Digital Photo Frames online on Onitshamarket. Discover a great selection of Digital Photo Frames at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Digital Photo Frames', 4.5, '', ''),
(8, '', 3, 'lens', 'Buy Lens Online in Nigeria', 'Shop for Lens online on Onitshamarket. Discover a great selection of Lens at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Lens', 4.5, '', ''),
(9, '', 3, 'lenses-zooms', 'Buy Lenses and Zooms', 'Shop for Lens &amp; Zooms online on Onitshamarket. Discover a great selection of Onitshamarketat the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Lenses &amp; Zooms', 4.5, '', ''),
(10, '', 3, 'professional-slr-cameras', 'Buy Professional/SLR Cameras', 'Shop for Professional/SLR Cameras online on Onitshamarket. Discover a great selection of Professional/SLR Cameras at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Professional/SLR Cameras', 2.5, '', ''),
(11, '', 3, 'surveillance-camera', 'Buy Surveillance Camera Online In Nigeria', 'Shop for Surveillance Camera online on Onitshamarket. Discover a great selection of Surveillance Camera at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Surveillance Camera', 2.5, '', ''),
(12, '', 1, 'gadgets-accessories', 'Buy Gadgets And Accessories Online In Nigeria', 'Shop for Gadgets &amp; Accessories online on Onitshamarket. Discover a great selection of Gadgets &amp; Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Gadgets &amp; Accessories', 4, '', ''),
(13, 'fa-tv', 1, 'home-theatre-audio', 'Buy Home Theatre &amp; Audio Online In Nigeria', 'Shop for Home Theatre and Audio online on Onitshamarket. Discover a great selection of Home Theatre &amp; Audio at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Home Theatre &amp; Audio', 3, '', ''),
(14, '', 13, 'hi-fi-system', 'Buy Hi fi system Online In Nigeria', 'Shop for Hi fi system online on Onitshamarket. Discover a great selection of Hi fi system at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Hi fi system', 4, '', ''),
(15, 'fa-camera', 0, 'cameras-electronics', 'Buy Cameras &amp; Electronics Online In Nigeria', 'Shop for Cameras &amp; Electronics online on Onitshamarket. Discover a great selection of Cameras &amp; Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Cameras &amp; Electronics', 2, '', ''),
(16, 'fa-camera', 15, 'mp3-players-accessories', 'Buy MP3 Players &amp; Accessories Online In Nigeria', 'Shop for MP3 Players &amp; Accessories online on Onitshamarket. Discover a great selection of MP3 Players &amp; Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'MP3 Players &amp; Accessories', 2, '', ''),
(17, '', 16, 'docking-station', 'Buy Docking Station Online In Nigeris', 'Shop for Docking Station online on Onitshamarket. Discover a great selection of Docking Station at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Docking Station', 4, '', ''),
(18, '', 16, 'heahphones-earphones', 'Buy Heahphones/ Earphones Online In Nigeria', 'Shop for Headphones/ Earphones online on Onitshamarket. Discover a great selection of Headphones/ Earphones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Heahphones/ Earphones', 4, '', ''),
(19, '', 16, 'mini-speaker-systems', 'Buy Mini Speaker Systems Online In Nigeria', 'Shop for Mini Speaker Systems online on Onitshamarket. Discover a great selection of Mini Speaker Systems at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mini Speaker Systems', 4, '', ''),
(20, '', 15, 'musical-instruments', 'Buy Musical Instruments Online In Nigeria', 'Shop for Musical Instruments online on Onitshamarket. Discover a great selection of Musical Instruments  at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Musical Instruments', 4, '', ''),
(21, '', 15, 'power-supplies-electrical', 'Buy Power Supplies &amp; Electricals Online In Nigeria', 'Shop for Power Supplies &amp; Electrical online on Onitshamarket. Discover a great selection of Power Supplies &amp; Electrical at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Power Supplies &amp; Electrical', 4, '', ''),
(22, 'fa-tv', 15, 'televisions', 'Buy Televisions Online In Nigeria', 'Shop for Televisions online on Onitshamarket. Discover a great selection of Televisions at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Televisions', 4, '', ''),
(23, '', 0, 'phones-tablets', 'Buy Phones &amp; Tablets Online In Nigeria', 'Shop for Phones &amp; Tablets online on Onitshamarket. Discover a great selection of Phones &amp; Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Phones &amp; Tablets', 5, '', ''),
(24, '', 23, 'landline-phones', 'Buy Landline Phones Online In Nigeria', 'Shop for Landline Phones online on Onitshamarket. Discover a great selection of Landline Phones at the best price ? Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Landline Phones', 5, '', ''),
(25, 'fa-mobile', 23, 'mobile-phones', 'Buy Mobile Phones Online In Nigeria', 'Shop for Mobile Phones online on Onitshamarket. Discover a great selection of Mobile Phones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mobile Phones', 2, '', ''),
(26, 'fa-telephone', 25, 'basic-phones', 'Buy All Kinds Of Phones Online In Nigeria', 'Shop for All Kinds Of Phones online on Onitshamarket. Discover a great selection of All Kinds Of Phones at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Basic Phones', 2, '', ''),
(27, '', 25, 'mobile-accessories', 'Buy Mobile Accessories Online In Nigeria', 'Shop for Mobile Accessories online on Onitshamarket. Discover a great selection of Mobile Accessories at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Mobile Accessories', 7, '', ''),
(28, 'fa-telephone', 25, 'smartphones', 'Buy Smartphones Online In Nigeria', 'Shop for Electronics online on Onitshamarket. Discover a great selection of Electronics at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Smartphones', 2, '', ''),
(29, 'fa-mobile', 23, 'tablets', 'Buy Tablets Online In Nigeria', 'Shop for Affordable Tablets online on Onitshamarket. Discover a great selection of Affordable Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Tablets', 3, '', ''),
(30, 'fa-telephone', 29, 'all-brands', 'Buy All Brands of Tablets Online In Nigeria', 'Shop for All Brands of Tablets online on Onitshamarket. Discover a great selection of All Brands of Tablets at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'All Brands', 3, '', ''),
(31, '', 29, 'ipad', 'Buy iPad Online In Nigeria', 'Shop for iPad online on Onitshamarket. Discover a great selection of iPad at the best price - Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'iPad', 3, '', ''),
(32, '', 29, 'tablet-accessories', 'Buy Tablets Accessories Online In Nigeria', 'Shop for Tablet Accessories online on Onitshamarket. Discover a great selection of Electronics at the best price -Enjoy cash on delivery - Best prices in Nigeria - FREE DELIVERY available on eligible purchases.', '', '', 'Tablet Accessories', 7, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
