-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 03:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 999999);

-- --------------------------------------------------------

--
-- Table structure for table `carpentry`
--

CREATE TABLE `carpentry` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `c_name` varchar(25) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `service` varchar(25) DEFAULT NULL,
  `sub_service` varchar(25) DEFAULT NULL,
  `c_phone` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carpentry`
--

INSERT INTO `carpentry` (`id`, `name`, `password`, `c_name`, `c_id`, `service`, `sub_service`, `c_phone`, `address`, `date`, `time`, `phone`, `status`) VALUES
(201, 'Suresh', '123', 'customer', 13, 'Carpentry', 'Framing', 123456, 'customer address', '2021-01-22', '12:42', 86997985, 1),
(202, 'Kumar', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 876957689, 0),
(203, 'Yavdav', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 976857432, 0),
(204, 'Mahesh', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 546481621, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

CREATE TABLE `cleaning` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `sub_service` varchar(50) DEFAULT NULL,
  `c_phone` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaning`
--

INSERT INTO `cleaning` (`id`, `name`, `password`, `c_name`, `c_id`, `service`, `sub_service`, `c_phone`, `address`, `date`, `time`, `phone`, `status`) VALUES
(302, 'Sammy', '123', 'customer', 13, 'Cleaning', 'Couch', 123456, 'customer address', '2021-01-13', '23:42', 956784651, 1),
(303, 'Selvi', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 789764564, 0),
(304, 'Samantha', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 876954687, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `address` text DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`, `phone`, `address`, `gender`, `age`) VALUES
(1, 's', 's', 's@gmail.com', 997567, '#123, abcde', 'Male', 25),
(6, 'g', 'g', 'g@gmail.com', 565463, 'g', 'Male', 54),
(7, 'd', 'd', 'd@gmail.com', 324, 'd', 'Male', 4),
(8, 'f', 'f', 'f@gmail.com', 33333, 'f', 'Male', 3),
(9, 'j', 'j', 'j@gmail.com', 34, 'j', 'Male', 34),
(10, 'hk', '123', 'hk@hk.vom', 1223333, 'jym', 'Others', 25),
(11, 'n', 'n', 'n@n.com', 456, 'bb', 'Male', 7),
(12, 'g', 'g', 'g@g.v', 435, 'ff', 'Male', 25),
(13, 'customer', 'customer', 'customer@gmail.com', 123456, 'customer address', 'Male', 12);

-- --------------------------------------------------------

--
-- Table structure for table `electrician`
--

CREATE TABLE `electrician` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `sub_service` varchar(50) DEFAULT NULL,
  `c_phone` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electrician`
--

INSERT INTO `electrician` (`id`, `name`, `password`, `c_name`, `c_id`, `service`, `sub_service`, `c_phone`, `address`, `date`, `time`, `phone`, `status`) VALUES
(401, 'Chandrashekhar', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 879642357, 0),
(402, 'Venkatesh', '123', 'customer', 13, 'Electrician', 'Repair and fixes', 123456, 'customer address', '2021-01-13', '12:43', 867953124, 1),
(403, 'Solomon', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 876954321, 0),
(404, 'Vignesh', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 976853124, 0),
(405, 'Abhishek', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 867531249, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `sub_service` varchar(50) DEFAULT NULL,
  `c_phone` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`id`, `name`, `password`, `c_name`, `c_id`, `service`, `sub_service`, `c_phone`, `address`, `date`, `time`, `phone`, `status`) VALUES
(102, 'Netra', '123', 's', 1, 'Salon', 'Haircut', 997567, '#123, abcde', '2021-01-29', '03:57', 56655, 1),
(103, 'Bindu', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 66666, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carpentry`
--
ALTER TABLE `carpentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cleaning`
--
ALTER TABLE `cleaning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `electrician`
--
ALTER TABLE `electrician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carpentry`
--
ALTER TABLE `carpentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `cleaning`
--
ALTER TABLE `cleaning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `electrician`
--
ALTER TABLE `electrician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
