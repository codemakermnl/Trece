-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 04:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnp-crame-qr`
--
CREATE DATABASE IF NOT EXISTS `pnp-crame-qr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pnp-crame-qr`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `qualifier` varchar(255) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `complete_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `vehicle_plate_number` varchar(100) NOT NULL,
  `identification_card` varchar(255) NOT NULL,
  `email_hash` varchar(1000) NOT NULL,
  `image_path` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `user_id`, `first_name`, `middle_name`, `last_name`, `qualifier`, `gender`, `birth_date`, `complete_address`, `city`, `region`, `vehicle_type`, `vehicle_plate_number`, `identification_card`, `email_hash`, `image_path`) VALUES
(19, 24, 'asdfasdf', 'asdfasdf', 'asdf', 'asdfasdf', 'male', '2021-09-08', 'sdfasdfasdf', 'aasdfasdf', 'wfsdfsd', 'honda', 'HFJ123', '12312123', '12b9fe625ebd2e90e105c9b7678e0d91aa764434', NULL),
(20, 25, 'admin', NULL, 'admin', NULL, 'Male', '2021-09-01', 'test', 'test', 'test', 'test', 'test', 'etes', 'asdfasdfasdf', NULL),
(21, 26, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'adfasdf', 'Male', '2021-09-22', 'sdfasdf', 'sadfasdf', 'asdfasd', 'asdfasd', 'fasdfad', 'sdfasf', 'c4f982808fef0065a7d934eb5dc9068b2d056992', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `building_id` int(10) NOT NULL,
  `building_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`building_id`, `building_name`) VALUES
(1, 'Main Gate'),
(2, 'Building 1'),
(3, 'Building 2'),
(4, 'Building 3'),
(5, 'Building 4'),
(6, 'Building 5'),
(7, 'Building 6');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `officer_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `assigned_building` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`officer_id`, `username`, `password`, `assigned_building`) VALUES
(1, 'main', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(2, 'b1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(3, 'b2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3),
(4, 'b3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4),
(5, 'b4', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 5),
(6, 'b5', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 6),
(7, 'b6', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 7);

-- --------------------------------------------------------

--
-- Table structure for table `qr_codes`
--

CREATE TABLE `qr_codes` (
  `qr_code_id` int(10) NOT NULL,
  `qr_code_path` varchar(1000) NOT NULL,
  `account_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qr_codes`
--

INSERT INTO `qr_codes` (`qr_code_id`, `qr_code_path`, `account_id`) VALUES
(1, 'test-Qrcode74.png', 1),
(2, 'test-Qrcode105.png', 9),
(3, 'b09f-Qrcode24.png', 17),
(4, '089e-Qrcode8.png', 18),
(5, '12b9-Qrcode166.png', 19),
(6, 'c4f9-Qrcode151.png', 21),
(7, '3bc7-Qrcode55.png', 22),
(8, '8cb1-Qrcode54.png', 23),
(9, 'dccd-Qrcode131.png', 24);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(10) NOT NULL,
  `report_type_id` int(10) NOT NULL,
  `reported_by_id` int(10) NOT NULL,
  `reported_by_type_id` int(10) NOT NULL,
  `civilian_id` int(10) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date_reported` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_type_id`, `reported_by_id`, `reported_by_type_id`, `civilian_id`, `subject`, `description`, `date_reported`) VALUES
(1, 1, 24, 2, 24, 'test', 'asdfasdfusdhfashjkhfjkasdf\r\nasdf\r\nas\r\nf\r\nasdfd', '2021-09-10 15:12:00'),
(2, 1, 24, 2, 24, 'yrdy', 'dfgsdgsdfglsdfgl.ksdfl;g\r\ndsf\r\ngs\r\ndfg\r\nsdfg\r\nsdf\r\ngs', '2021-09-10 15:13:42'),
(4, 1, 24, 2, 24, 'sadfasdf', 'sdfasdf', '2021-09-10 15:15:00'),
(7, 2, 1, 1, NULL, 'jcucucucf', 'jcjcjcjcjcj', '2021-09-10 18:09:03'),
(8, 2, 1, 1, NULL, 'hcgb', 'vhnn\nhhnb\n', '2021-09-11 02:05:05'),
(9, 1, 24, 2, 24, 'test', 'asfdsafsdfasd\r\nfas\r\ndfa\r\nsdfa\r\nsdfasd\r\nf\r\nsdfasdf', '2021-09-11 05:11:10'),
(10, 1, 1, 1, 20111, 'test', 'yrsghh\ntest\n', '2021-09-11 05:16:37'),
(11, 2, 1, 1, NULL, 'test incident', 'test description incident\n', '2021-09-11 05:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE `report_type` (
  `report_type_id` int(11) NOT NULL,
  `report_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`report_type_id`, `report_type`) VALUES
(1, 'Civilian'),
(2, 'Incident');

-- --------------------------------------------------------

--
-- Table structure for table `time_logs`
--

CREATE TABLE `time_logs` (
  `time_id` int(10) NOT NULL,
  `account_id` int(10) NOT NULL,
  `building_id` int(10) NOT NULL,
  `entry_time` timestamp NULL DEFAULT NULL,
  `exit_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_logs`
--

INSERT INTO `time_logs` (`time_id`, `account_id`, `building_id`, `entry_time`, `exit_time`) VALUES
(14, 19, 1, '2021-09-16 17:54:32', '2021-09-17 17:47:10'),
(15, 19, 2, '2021-09-16 17:54:59', '2021-09-17 17:47:29'),
(21, 19, 1, '2021-09-17 18:28:27', '2021-09-17 18:29:53'),
(22, 19, 2, '2021-09-17 18:28:47', '2021-09-17 18:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `position_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `position_id`, `username`, `password`, `mobile_number`, `email`) VALUES
(24, 2, 'test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1231231231', 'test3@test.com'),
(25, 1, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '128937128973', 'admin@pnptestemail.com'),
(26, 2, 'test5', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1231231231', 'test5@test.com'),
(27, 2, 'test5', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1231231231', 'test6@test.com'),
(28, 2, 'test7', '0ec09ef9836da03f1add21e3ef607627e687e790', '1231231231', 'test7@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_position`
--

CREATE TABLE `user_position` (
  `position_id` int(10) NOT NULL,
  `name` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_position`
--

INSERT INTO `user_position` (`position_id`, `name`) VALUES
(1, 'Admin/PNP Officer'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email_hash` (`email_hash`(767));

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`officer_id`),
  ADD KEY `assigned_building` (`assigned_building`);

--
-- Indexes for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`qr_code_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `report_type_id` (`report_type_id`),
  ADD KEY `reported_by_id` (`reported_by_id`),
  ADD KEY `reported_by_type_id` (`reported_by_type_id`),
  ADD KEY `civilian_id` (`civilian_id`);

--
-- Indexes for table `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`report_type_id`);

--
-- Indexes for table `time_logs`
--
ALTER TABLE `time_logs`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `user_position`
--
ALTER TABLE `user_position`
  ADD PRIMARY KEY (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `building_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `officer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `qr_code_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report_type`
--
ALTER TABLE `report_type`
  MODIFY `report_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time_logs`
--
ALTER TABLE `time_logs`
  MODIFY `time_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_position`
--
ALTER TABLE `user_position`
  MODIFY `position_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
