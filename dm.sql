-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 04:38 AM
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
-- Table structure for table `restaurant_suggest`
--

CREATE TABLE IF NOT EXISTS `restaurant_suggest` (
  `id` int(5) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `restaurant_address` text NOT NULL,
  `restaurant_phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_suggest`
--

INSERT INTO `restaurant_suggest` (`id`, `restaurant_name`, `restaurant_address`, `restaurant_phone`, `email`) VALUES
(2, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(3, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(4, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(5, 'yum', 'chazfvzfz', 2147483647, 's@m.COM'),
(6, 'yum', 'chazfvzfz', 2147483647, 's@m.COM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant_suggest`
--
ALTER TABLE `restaurant_suggest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant_suggest`
--
ALTER TABLE `restaurant_suggest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
