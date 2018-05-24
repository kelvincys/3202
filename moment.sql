-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 07:43 AM
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
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Love.Fish', '580 Darling Street, Rozelle, NSW', -33.861034, 151.171936, 'restaurant'),
(2, 'Young Henrys', '76 Wilford Street, Newtown, NSW', -33.898113, 151.174469, 'bar'),
(3, 'Hunter Gatherer', 'Greenwood Plaza, 36 Blue St, North Sydney NSW', -33.840282, 151.207474, 'bar'),
(4, 'The Potting Shed', '7A, 2 Huntley Street, Alexandria, NSW', -33.910751, 151.194168, 'bar'),
(5, 'Nomad', '16 Foster Street, Surry Hills, NSW', -33.879917, 151.210449, 'bar'),
(6, 'Three Blue Ducks', '43 Macpherson Street, Bronte, NSW', -33.906357, 151.263763, 'restaurant'),
(7, 'Single Origin Roasters', '60-64 Reservoir Street, Surry Hills, NSW', -33.881123, 151.209656, 'restaurant');

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
(12, 5, 1, '2018-05-18 13:21:39'),
(18, 5, 1, '2018-05-18 14:13:53'),
(30, 5, 1, '2018-05-24 02:07:40');

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
  `assertid` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `price`, `product_detail`, `paypalid`, `assertid`) VALUES
(1, 'The Cinema Proposal', 200, 'Date her for a movie night, during the movie we will change the movie to a memory video to give you a chance to propose.', '\'UXBNHAXQSXH2A\'', 'assert/p01.jpg'),
(2, 'The River Proposal', 250, 'Having a great dinner on a dinner cruises, listen to live band. We will create a good timing for you to propose. (Only available on Thursday, Friday and Saturday)', '\'9XCFLTYASG7ZN\'', 'assert/p02.jpg'),
(3, 'Rooftop party ', 500, 'Having a birthday party on the rooftop bar in Southbank. This venue only provide cocktail party.', '\'8WAX9YL8PU7NE\'', 'assert/p03.jpg'),
(4, 'Cat cafe Party', 200, 'For the cat lovers, having a birthday party around by lots of cat is the best birthday gift ever.  This venue only provides light meal and coffee.', '\'HTJC9A4KTHJUU\'', 'assert/p04.jpg'),
(5, 'Skytower Wedding Party', 4000, 'Holding a wedding party on the 40th floor of the Brisbane Skytower. The venue provides a varied choice of food, from fine dining to cocktail party, you can choose a plan according to your budget.', '\'747GT3RZEPLYQ\'', 'assert/p05.jpg'),
(6, 'Beach Wedding Party', 2000, 'Imagine having a wedding party at the gold coast main beach with the endless view. This venue only provide cocktail party.', '\'L9VD8L4XAEDWJ\'', 'assert/p06.jpg');

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
(29, 'a', '$2y$10$HlR5AT08RKqTiHeOfv.FFuwBc2Yhxk6EzLbvbjQhQEAacSGwUxcG2'),
(30, 'test1', '$2y$10$cTksFPx319jZY8x5X01Z1u5Dwx06m3AGBPe.coOKIc4QosvLAd36.'),
(31, 'test2', '$2y$10$cTksFPx319jZY8x5X01Z1u5Dwx06m3AGBPe.coOKIc4QosvLAd36.'),
(32, 'test3', '$2y$10$cTksFPx319jZY8x5X01Z1u5Dwx06m3AGBPe.coOKIc4QosvLAd36.');

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
(5, 'kelvinchungkw@hotmail.com', 'k', 'cys', 481237149),
(30, 'test1@test.com', 'test', 'test', 112341234),
(31, 'test2@test.com', 'test', 'test', 112341234),
(32, 'test3@test.com', 'test', 'test', 112341234);

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
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
