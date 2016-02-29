-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2016 at 11:34 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `restaurant_id` smallint(5) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `people` varchar(11) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `restaurant_id`, `date`, `time`, `people`, `name`, `email`, `phone`, `comment`) VALUES
(0, 3, 3, '2016-03-26', '22:00:00.000000', '5', 'Big Bang', 'testinguse.aw@gmail.com', '098772222', ''),
(1, 5, 5, '2016-01-12', '11:11:00.000000', '2', '123', '321', '000', ''),
(2, 5, 5, '2016-01-20', '00:12:00.000000', '3', 'oioi', '0', '09887', ''),
(3, 5, 5, '2016-01-20', '00:12:00.000000', '3', 'oioi', '0', '09887', ''),
(4, 5, 5, '2016-01-30', '11:11:00.000000', '3', 'wewewe', '0', '12345', ''),
(5, 5, 5, '2016-01-30', '11:11:00.000000', '3', 'wewewe', '0', '12345', ''),
(6, 5, 5, '2016-01-06', '11:11:00.000000', '1', 'Alice', '0', '12345678', ''),
(7, 5, 5, '0000-00-00', '00:00:00.000000', '1', ' al', '0', '1312', ''),
(8, 5, 5, '0000-00-00', '00:00:00.000000', '1', 'Alice', '0', '12345678', ''),
(9, 3, 2, '2016-01-22', '11:11:00.000000', '7', 'Robin', '0', '123456789', ''),
(10, 3, 5, '2016-01-22', '11:11:00.000000', '1', 'Icicicic', '0', '123456789', ''),
(11, 3, 4, '2016-01-06', '11:11:00.000000', '1', 'wewewe', '0', '123456787', ''),
(12, 3, 4, '2016-01-07', '02:22:00.000000', '1', 'Sindhu', '0', '1234566', ''),
(13, 3, 2, '2016-01-28', '14:01:00.000000', '11', 'Yuki', '11', '11111111', ''),
(14, 3, 5, '2016-01-28', '12:12:00.000000', '4', 'Ste', 'ste@mail.com', '654321456', ''),
(15, 3, 4, '2016-01-31', '00:12:00.000000', '4', 'Hllo', 'hll@mail.com', '123456789', ''),
(16, 3, 4, '2016-02-12', '00:12:00.000000', '9', 'Testing', 'testing@gmail.com', '123456789', ''),
(17, 3, 4, '2016-01-15', '00:12:00.000000', '11', 'hello', 'tt@mail.com', '555656565565', ''),
(18, 3, 3, '2016-01-29', '15:00:00.000000', '10', 'Jams', '121212@mail.com', '515151548', ''),
(19, 3, 3, '2016-01-30', '14:02:00.000000', '1', '33331', '333@mail.com', '84848668789', ''),
(20, 3, 6, '2016-01-30', '00:12:00.000000', '8', 'Hey', 'hey@mail.com', '8465432156', ''),
(21, 3, 7, '2016-01-30', '01:01:00.000000', '11', 'Kitty', 'kitty@mail.com', '84635158', ''),
(22, 3, 6, '2016-01-27', '00:12:00.000000', '11', 'Sia', 'sia@mail.com', '546879635', ''),
(23, 3, 2, '2016-01-30', '00:00:00.000000', '9', 'jenny', 'jenny@mail.com', '84635186', ''),
(24, 3, 8, '2016-01-30', '05:45:00.000000', '3', 'Helo', 'hl@mail.com', '5468734', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `restaurant_id` smallint(11) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(5) NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `restaurant_id`, `created`, `rating`, `comment`) VALUES
(0, 3, 3, '2016-02-29 21:17:46', 9, 'The chilli crab is awesome'),
(1, 5, 4, '0000-00-00 00:00:00', 5, 'Nice nice nice'),
(2, 5, 4, '0000-00-00 00:00:00', 3, 'dsfsdfsd'),
(3, 5, 4, '0000-00-00 00:00:00', 5, 'hahahahahahaha'),
(4, 5, 4, '0000-00-00 00:00:00', 5, 'hahahahahahaha'),
(5, 5, 6, '0000-00-00 00:00:00', 4, 'hahahahahahhahaha'),
(6, 5, 6, '0000-00-00 00:00:00', 7, 'dafasdfsdafsda'),
(7, 5, 6, '0000-00-00 00:00:00', 9, 'Tigger baby is awesome'),
(8, 5, 5, '0000-00-00 00:00:00', 8, 'Good food and good view.'),
(9, 3, 2, '0000-00-00 00:00:00', 8, '11111111111111'),
(10, 5, 3, '0000-00-00 00:00:00', 7, 'The seafood is awesome.'),
(11, 3, 1, '0000-00-00 00:00:00', 8, 'very lovely restaurant.'),
(12, 6, 4, '0000-00-00 00:00:00', 10, 'Nice view, tasty food.'),
(13, 6, 8, '0000-00-00 00:00:00', 7, 'Awesome yum cha.'),
(14, 6, 7, '0000-00-00 00:00:00', 8, 'Good good good.'),
(15, 7, 5, '0000-00-00 00:00:00', 9, 'absolutely lovely'),
(16, 3, 4, '0000-00-00 00:00:00', 9, 'nice nice nice nice nice '),
(17, 3, 4, '2016-01-17 20:52:10', 3, 'not really worth it'),
(19, 3, 6, '2016-01-17 21:30:34', 9, 'Hello Hello Hello Hello'),
(20, 3, 2, '2016-01-17 21:39:56', 8, 'The sushi is awesome.'),
(21, 3, 2, '2016-01-17 21:40:19', 10, '<script>alert(''hacked'')</script>'),
(22, 3, 2, '2016-01-17 21:42:08', 9, '<script>alert(''hacked'')</script>'),
(23, 3, 2, '2016-01-17 21:43:01', 10, '<script>alert(''hacked'')</script>'),
(24, 3, 4, '2016-01-18 21:15:34', 10, 'qqqqqqqqqqqqqq'),
(25, 3, 4, '2016-01-18 21:15:51', 8, '22323232323232323'),
(26, 3, 1, '2016-01-25 20:57:19', 10, 'Hello Hello Hello');

-- --------------------------------------------------------

--
-- Table structure for table `enqiry_form`
--

CREATE TABLE `enqiry_form` (
  `id` int(5) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `restaurant` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 'Testing', 2147483647, 'testinguse.aw@gmail.com', 'Dragon', 'Wellington', 'It''s a good restaurant'),
(13, 'Cat', 123456789, 'testinguse.aw@gmail.com', 'Cat', 'wellington', ''),
(14, 'Tigger', 32165478, 'testinguse.aw@gmail.com', 'Sweet Mother''s Kitchen', 'wellington', ''),
(15, 'Alice', 2147483647, 'testinguse.aw@gmail.com', 'Testing', 'Wellington', 'aaaaaaaa'),
(16, 'Alice', 321654987, 'testinguse.aw@gmail.com', 'Try Again', 'wellington', ''),
(17, 'Bobbie', 2147483647, 'testinguse.aw@gmail.com', 'Big Thumb', 'wellington', '123123123123123'),
(18, 'Lucy', 1234568789, 'lucy@mail.com', '<script>alert(''hacked'')</script>', '<script>alert(''hacked'')</script>', '<script>alert(''hacked'')</script>'),
(19, 'Sindhu', 2147483647, 'testinguse.alice@mail.com', 'Cat', 'Wellington', '123456789789'),
(20, 'Sindhu', 2147483647, 'alice.wu.nz@mail.com', 'Cat', 'Wellington', '123456789789'),
(21, 'John', 183205454, 'alice.wu.nz@gmail.com', 'Hello', 'wellington', ''),
(22, 'Alice', 221881404, 'alice.wu.nz@gmail.com', '12345678', 'Wagamama', ''),
(23, 'Alice', 123456, 'alice.wu.nz@gmail.com', '123123', 'Wellington', ''),
(24, 'Iu', 12345, 'alice.wu.nz@gmail.com', 'Ru', 'Wellington', ''),
(25, 'df', 342325, 's@m.com', 'sgskg`', 'dsjgsfjsfgf', ''),
(26, 'df', 342325, 's@m.com', 'sgskg`', 'dsjgsfjsfgf', ''),
(27, 'df', 342325, 's@m.com', 'sgskg`', 'dsjgsfjsfgf', ''),
(28, 'gfjfj', 543535535, 'gf@m.com', 'fhdh', 'dfhdhdh', ''),
(29, 'gfjfj', 543535535, 'gf@m.com', 'fhdh', 'dfhdhdh', ''),
(30, 'Alice', 111111, 'alice.wu.nz@gmail.com', '123444', 'wellington', ''),
(31, 'Testing2', 2147483647, 'testinguse.aw@gmail.com', 'Ice cream', 'petone', ''),
(32, 'Alice', 837402847, 'testinguse.aw@gmail.com', 'wagamama', 'petone', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `discount` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8 NOT NULL,
  `promote` tinyint(1) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `title`, `discount`, `address`, `phone`, `promote`, `poster`) VALUES
(1, 'Foxglove Bar & Kitchen', 'not available', '33 Queens Wharf, Wellington', '04-460 9410', 0, '569459f973126.jpg'),
(2, 'Miyabi Sushi Japanese Cafe', '10%', 'Shop 13 142 Willis St, Wellington', '04-801 9688', NULL, '56945a1a1c837.jpg'),
(3, 'Crab Shack', '0%', 'Shed 5, Queens Wharf, Wellington', '04-916 4250', 0, '569459e47e09a.jpg'),
(4, 'Cafe Thyme', '5%', '238 Middleton Rd, Glenside, Wellington', '04-478 1810', 1, '569458043c10a.jpg'),
(5, 'Maranui Cafe ', '5%', '7A Lyall Parade, Lyall Bay, Wellington', '04-387 4539', 1, '56945097835b2.jpg'),
(6, 'Chilli Masala', '10%', '458 High Street, Lower Hutt', '04-586 4820', 1, NULL),
(7, 'The Bangalore Polo Club Wellington', '2%', '63 Courtenay Pl, Te Aro, Wellington', '04-384 6416', 0, NULL),
(8, 'Riddiford Hotel & Restaurant', '2%', '21-29 Knights Rd, Lower Hutt ', '04-586 6318', 0, '56945a4849cf9.jpg'),
(47, 'Wagamama', '0%', 'Wellington', '321456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants_tags`
--

CREATE TABLE `restaurants_tags` (
  `restaurant_id` smallint(5) UNSIGNED NOT NULL,
  `tag_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants_tags`
--

INSERT INTO `restaurants_tags` (`restaurant_id`, `tag_id`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_suggest`
--

CREATE TABLE `restaurant_suggest` (
  `id` int(5) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `restaurant_address` text NOT NULL,
  `restaurant_phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(8, 'Miles', 'Auckland', 2147483647, ''),
(9, 'Alice in Wonderland', 'wellington', 2147483647, ''),
(10, 'Icic', 'Icicicicicicicic', 13131313, ''),
(11, 'yiyiyiyi', 'Wellington', 12345678, ''),
(12, 'Homtown', 'wellington', 123456789, ''),
(13, 'hello', 'wellington', 1928833, '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(5) UNSIGNED NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'kiwi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `role` enum('user','admin') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'rohin', 'rohin@mail.com', '$2y$10$Bs.tfsgafbT4cHVBoBd7JOY7so2E9BvOrMmnSvI7pX0Rq7zFEEApm', 'user'),
(2, 'sara', 'sara@mail.com', '$2y$10$DFUXI2qDEQGmbN8BytsuM.cvRsNyPqd71D69VyNeZ/jc2R55VsDaK', 'user'),
(3, 'Admin', 'admin@dm.com', '$2y$10$.G.DOZ.yIQpHyLZSY4aN8uQhG5ignC5ZpNvHNX2OG2dOMDM3N6ZrW', 'admin'),
(5, 'Tigger', 'tigger@mail.com', '$2y$10$sRvoGFhDYBt3W.Kve7A0sOpkG9FgMVBx3wplt4Jhv149D5BQreyBG', 'user'),
(6, 'Alice', 'testinguse.aw@gmail.com', '$2y$10$MZhPEm7BUOT9TyvkrgiJoeT.aZ5JEJeP1hwEOBZRkJDAc.YnIFexO', 'user'),
(7, 'coleh', 'cole@cole.com', '$2y$10$K73C42cY4pxc/j7JJluGKeJ6YsA9ATxrtPgnfP/t6uuDAFQ11SBnG', 'user'),
(8, 'lucy', 'lucy@mail.com', '$2y$10$M1uoeo5rrFlXFQqKmf4zyuKYvtwYi5S3dExu8bz2t6O5sLVoxBCSa', 'user'),
(9, 'Jack', 'jack@mail.com', '$2y$10$ILy3UGAkTTfNu7wfnTQ4vOZg8/Zh0KxsK/6qAoDdT3Dx3lpUAszfO', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `user_id` (`user_id`);

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
ALTER TABLE `restaurants` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `restaurants` ADD FULLTEXT KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enqiry_form`
--
ALTER TABLE `enqiry_form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
