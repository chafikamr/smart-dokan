-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 02:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders_managment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `oms_stores`
--

CREATE TABLE `oms_stores` (
  `store_id` int(10) UNSIGNED NOT NULL,
  `store_name` varchar(200) NOT NULL,
  `store_url` varchar(200) NOT NULL,
  `store_status` int(10) NOT NULL,
  `store_ck` varchar(100) NOT NULL,
  `store_cs` varchar(100) NOT NULL,
  `store_platform` varchar(100) NOT NULL,
  `store_sedcription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oms_users`
--

CREATE TABLE `oms_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_phone` varchar(30) NOT NULL,
  `user_national_number` varchar(255) NOT NULL,
  `user_rib` int(11) DEFAULT NULL,
  `user_date_created` datetime DEFAULT current_timestamp(),
  `user_type` int(10) NOT NULL,
  `user_avatar` varchar(30) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oms_users`
--

INSERT INTO `oms_users` (`user_id`, `user_email`, `user_username`, `user_phone`, `user_national_number`, `user_rib`, `user_date_created`, `user_type`, `user_avatar`, `user_password`) VALUES
(1, 'admin@mox.com', 'mox', '06199568511', 'ZG154493', 65656215, '2022-05-19 00:00:00', 1, NULL, '06199568511'),
(2, 'dfsdfqs@sdf.com', 'chaima', 'qsdfqs', 'qsdfsq', 8888, '2022-05-19 00:00:00', 2, NULL, '06199568511'),
(3, 'hhjhfdgd', 'dfghd', 'dfghdf', 'dfghdf', 54654, '2022-05-31 18:10:44', 1, NULL, 'dfghdsfgh'),
(4, 'dfghdfg', 'dfghhhhhhhhhhhhhhhh', 'dfgh', 'ghdfh', 65464, '2022-05-19 18:11:53', 1, 'dfghdf', 'hdfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oms_stores`
--
ALTER TABLE `oms_stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `oms_users`
--
ALTER TABLE `oms_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD UNIQUE KEY `user_phone` (`user_phone`),
  ADD UNIQUE KEY `user_national_number` (`user_national_number`),
  ADD UNIQUE KEY `user_rib` (`user_rib`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oms_stores`
--
ALTER TABLE `oms_stores`
  MODIFY `store_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oms_users`
--
ALTER TABLE `oms_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
