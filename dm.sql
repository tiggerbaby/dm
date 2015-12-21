-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2015 at 10:38 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enqiry_form`
--

INSERT INTO `enqiry_form` (`id`, `name`, `phone`, `email`, `restaurant`, `address`, `comment`) VALUES
(1, 'Tigger', 221881, 'qq@mail.com', 'Cat', 'Wellington', ''),
(2, 'Alice', 1234567, 'aaa@mail.com', 'Alice in Wonderland', 'Wellington', ''),
(3, 'Alice', 1234567, 'aaa@mail.com', 'Alice in Wonderland', 'Wellington', ''),
(4, 'rohin', 0, 'rohin@mail.com', 'rohin', 'Wellington', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_suggest`
--

INSERT INTO `restaurant_suggest` (`id`, `restaurant_name`, `restaurant_address`, `restaurant_phone`, `email`) VALUES
(2, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(3, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(4, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(5, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(6, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(7, 'Dragon', 'Wellington', 412345, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'rohin', 'rohin@mail.com', '$2y$10$Bs.tfsgafbT4cHVBoBd7JOY7so2E9BvOrMmnSvI7pX0Rq7zFEEApm', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enqiry_form`
--
ALTER TABLE `enqiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_suggest`
--
ALTER TABLE `restaurant_suggest`
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
-- AUTO_INCREMENT for table `enqiry_form`
--
ALTER TABLE `enqiry_form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `restaurant_suggest`
--
ALTER TABLE `restaurant_suggest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
