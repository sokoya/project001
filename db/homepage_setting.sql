-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2019 at 03:24 PM
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
-- Table structure for table `homepage_setting`
--

CREATE TABLE `homepage_setting` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Category Display Settings for Homepage';

--
-- Dumping data for table `homepage_setting`
--

INSERT INTO `homepage_setting` (`id`, `category_id`, `position`, `content`, `status`) VALUES
(2, 6, 1, '[\n  {\n    "img": "da6a510198317078e2395a753ef3b73d.jpg",\n    "position": "bottom_banner",\n    "link": "http://localhost/project001/tv-and-electronics"\n  },\n  {\n    "img": "f.jpg",\n    "position": "top1",\n    "link": "http://localhost/project001/tv-and-electronics"\n  },\n  {\n    "img": "f.jpg",\n    "position": "top2",\n    "link": "http://localhost/project001/tv-and-electronics"\n  },\n  {\n    "img": "5f4bb83f54b08f179501ee9a64819056.jpg",\n    "position": "bottom1",\n    "link": "http://localhost/project001/tv-and-electronics"\n  },\n  {\n    "img": "c80901a19624f054737b10a7139011a0.jpg",\n    "position": "bottom2",\n    "link": "http://localhost/project001/tv-and-electronics"\n  },\n  {\n    "img": "55835983eb197061d44f8c812be202f2.jpg",\n    "position": "bottom3",\n    "link": "http://localhost/project001/tv-and-electronics"\n  }\n]', 'active'),
(3, 4, 2, '[\r\n  {\r\n    "img": "da6a510198317078e2395a753ef3b73d.jpg",\r\n    "position": "bottom_banner",\r\n    "link": "http://localhost/project001/tv-and-electronics"\r\n  },\r\n  {\r\n    "img": "f.jpg",\r\n    "position": "top1",\r\n    "link": "http://localhost/project001/tv-and-electronics"\r\n  },\r\n  {\r\n    "img": "f.jpg",\r\n    "position": "top2",\r\n    "link": "http://localhost/project001/tv-and-electronics"\r\n  },\r\n  {\r\n    "img": "5f4bb83f54b08f179501ee9a64819056.jpg",\r\n    "position": "bottom1",\r\n    "link": "http://localhost/project001/tv-and-electronics"\r\n  },\r\n  {\r\n    "img": "c80901a19624f054737b10a7139011a0.jpg",\r\n    "position": "bottom2",\r\n    "link": "http://localhost/project001/tv-and-electronics"\r\n  },\r\n  {\r\n    "img": "55835983eb197061d44f8c812be202f2.jpg",\r\n    "position": "bottom3",\r\n    "link": "http://localhost/project001/tv-and-electronics"\r\n  }\r\n]', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepage_setting`
--
ALTER TABLE `homepage_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepage_setting`
--
ALTER TABLE `homepage_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
