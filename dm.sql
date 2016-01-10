-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 10:21 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(5) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `restaurant_id` smallint(11) unsigned NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(5) NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `restaurant_id`, `created`, `rating`, `comment`) VALUES
(1, 5, 4, '0000-00-00 00:00:00', 5, 'Nice nice nice'),
(2, 5, 4, '0000-00-00 00:00:00', 3, 'dsfsdfsd'),
(3, 5, 4, '0000-00-00 00:00:00', 5, 'hahahahahahaha'),
(4, 5, 4, '0000-00-00 00:00:00', 5, 'hahahahahahaha'),
(5, 5, 6, '0000-00-00 00:00:00', 4, 'hahahahahahhahaha'),
(6, 5, 6, '0000-00-00 00:00:00', 7, 'dafasdfsdafsda'),
(7, 5, 6, '0000-00-00 00:00:00', 9, 'Tigger baby is awesome'),
(8, 5, 5, '0000-00-00 00:00:00', 8, 'Good food and good view.');

-- --------------------------------------------------------

--
-- Table structure for table `enqiry_form`
--

CREATE TABLE IF NOT EXISTS `enqiry_form` (
  `id` int(5) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `restaurant` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enqiry_form`
--

INSERT INTO `enqiry_form` (`id`, `name`, `phone`, `email`, `restaurant`, `address`, `comment`) VALUES
(1, 'Tigger', 221881, 'qq@mail.com', 'Cat', 'Wellington', ''),
(2, 'Alice', 1234567, 'aaa@mail.com', 'Alice in Wonderland', 'Wellington', ''),
(3, 'Alice', 1234567, 'aaa@mail.com', 'Alice in Wonderland', 'Wellington', ''),
(4, 'rohin', 0, 'rohin@mail.com', 'rohin', 'Wellington', ''),
(5, 'Tigger', 1234567, 'testinguse.aw@gmail.com', 'Hello', 'Wellingotn', ''),
(6, 'Tigger', 1234567, 'testinguse.aw@gmail.com', 'Hello', 'Wellingotn', ''),
(7, 'Tigger', 1234567, 'testinguse.aw@gmail.com', 'Hello', 'Wellingotn', ''),
(8, 'Tigger', 1234567, 'testinguse.aw@gmail.com', 'Hello', 'Wellingotn', ''),
(9, 'Cat', 123456, 'testinguse.aw@gmail.com', 'dog', 'Wellington', ''),
(10, 'Testing', 0, 'testinguse.aw@gmail.com', 'Testing', 'Lower Hutt', ''),
(11, 'rohin', 0, 'testinguse.aw@gmail.com', 'roin', 'Wel''', ''),
(12, 'Testing', 2147483647, 'testinguse.aw@gmail.com', 'Dragon', 'Wellington', 'It''s a good restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` smallint(5) unsigned NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(12) NOT NULL,
  `promote` tinyint(1) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `title`, `discount`, `address`, `phone`, `promote`, `poster`) VALUES
(1, 'Foxglove Bar & Kitchen', 'not available', '33 Queens Wharf, Wellington', '04-460 9410', 0, NULL),
(2, 'Miyabi Sushi Japanese Cafe', '10%', 'Shop 13 142 Willis St, Wellington', '04-801 9688', NULL, NULL),
(3, 'Crab Shack', 'not available', 'Shed 5, Queens Wharf, Wellington', '04-916 4250', 0, NULL),
(4, 'Cafe Thyme', '5%', '238 Middleton Rd, Glenside, Wellington', '04-478 1810', 1, NULL),
(5, 'Maranui Cafe ', '5%', '7A Lyall Parade, Lyall Bay, Wellington', '04-387 4539', 1, NULL),
(6, 'Chilli Masala', '10%', '458 High Street, Lower Hutt', '04-586 4820', 1, NULL),
(7, 'The Bangalore Polo Club Wellington', '2%', '63 Courtenay Pl, Te Aro, Wellington', '04-384 6416', 0, NULL),
(8, 'Riddiford Hotel & Restaurant', '2%', '21-29 Knights Rd, Lower Hutt ', '04-586 6318', 0, NULL),
(9, 'tiggerbaby', '5%', 'Lower Hutt', '123456789', NULL, NULL),
(10, 'Bigbang', '5%', 'Wellington', '123456784', NULL, NULL),
(11, 'BigThumb', '5%', 'Wellington', '12345678', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_suggest`
--

CREATE TABLE IF NOT EXISTS `restaurant_suggest` (
  `id` int(5) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `restaurant_address` text NOT NULL,
  `restaurant_phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_suggest`
--

INSERT INTO `restaurant_suggest` (`id`, `restaurant_name`, `restaurant_address`, `restaurant_phone`, `email`) VALUES
(2, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(3, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(4, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(5, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(6, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(7, 'Dragon', 'Wellington', 412345, ''),
(8, 'Miles', 'Auckland', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(5) NOT NULL,
  `tags` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) unsigned NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `role` enum('user','admin') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'rohin', 'rohin@mail.com', '$2y$10$Bs.tfsgafbT4cHVBoBd7JOY7so2E9BvOrMmnSvI7pX0Rq7zFEEApm', 'user'),
(2, 'sara', 'sara@mail.com', '$2y$10$DFUXI2qDEQGmbN8BytsuM.cvRsNyPqd71D69VyNeZ/jc2R55VsDaK', 'user'),
(3, 'Admin', 'admin@dm.com', '$2y$10$.G.DOZ.yIQpHyLZSY4aN8uQhG5ignC5ZpNvHNX2OG2dOMDM3N6ZrW', 'admin'),
(5, 'Tigger', 'tigger@mail.com', '$2y$10$sRvoGFhDYBt3W.Kve7A0sOpkG9FgMVBx3wplt4Jhv149D5BQreyBG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `enqiry_form`
--
ALTER TABLE `enqiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_suggest`
--
ALTER TABLE `restaurant_suggest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enqiry_form`
--
ALTER TABLE `enqiry_form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `restaurant_suggest`
--
ALTER TABLE `restaurant_suggest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
