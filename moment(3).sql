-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 06:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moment`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enquiry_id` int(11) NOT NULL,
  `user_id` int(8) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(12) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enquiry` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`timestamp`, `enquiry_id`, `user_id`, `name`, `contact`, `email`, `enquiry`) VALUES
('2018-05-19 05:45:40', 1, 5, 'kelvin', 12, 'a@a.com', 'message'),
('2018-05-19 05:46:28', 2, 5, 'testing', 12, 'kelvinchungkw@hotmail.com', 'message'),
('2018-05-19 05:46:55', 3, 5, 'testing', 12, 'kelvinchungkw@hotmail.com', 'testing'),
('2018-05-19 05:49:58', 4, 5, 'testing', 1, 'kelvinchungkw@hotmail.com', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `service_id` int(8) NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `user_id`, `service_id`, `time-stamp`) VALUES
(11, 5, 1, '2018-05-18 13:21:21'),
(12, 5, 1, '2018-05-18 13:21:39'),
(13, 5, 1, '2018-05-18 14:09:36'),
(14, 5, 1, '2018-05-18 14:13:30'),
(15, 5, 1, '2018-05-18 14:13:32'),
(16, 5, 1, '2018-05-18 14:13:40'),
(17, 5, 1, '2018-05-18 14:13:52'),
(18, 5, 1, '2018-05-18 14:13:53'),
(19, 5, 1, '2018-05-18 14:13:58'),
(20, 5, 1, '2018-05-22 16:06:12'),
(21, 5, 1, '2018-05-22 16:06:47'),
(22, 5, 1, '2018-05-22 16:06:48'),
(23, 5, 1, '2018-05-22 16:17:36'),
(24, 5, 1, '2018-05-22 16:17:47'),
(25, 5, 1, '2018-05-23 01:32:05'),
(26, 5, 1, '2018-05-23 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(8) NOT NULL,
  `service_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(6) NOT NULL,
  `product_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `paypalid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `assertid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `price`, `product_detail`, `paypalid`, `assertid`, `product_type`) VALUES
(1, 'The Cinema Proposal', 200, 'Date her for a movie night, during the movie we will change the movie to a memory video to give you a chance to propose.', '\'UXBNHAXQSXH2A\'', 'assert/007.jpg', 1),
(2, 'The River Proposal', 250, 'Having a great dinner on a dinner cruises, listen to live band. We will create a good timing for you to propose. (Only available on Thursday, Friday and Saturday)', '\'9XCFLTYASG7ZN\'', 'assert/006.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password_hash`) VALUES
(5, 'kelvincys', '$2y$10$8kCPB9PDEEnzWsmhDzP/5.RmBP98xbYPGoi7rJw/wRmngyMzO5eN.'),
(29, 'a', '$2y$10$HlR5AT08RKqTiHeOfv.FFuwBc2Yhxk6EzLbvbjQhQEAacSGwUxcG2');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(8) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `email`, `firstname`, `lastname`, `contact`) VALUES
(29, 'a@a.com', 'a', 'a', 0),
(5, 'kelvinchungkw@hotmail.com', 'k', 'cys', 481237149);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`username`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD UNIQUE KEY `username` (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`,`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `enquiry_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_4` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`);

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
