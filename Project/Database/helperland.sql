-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 10:07 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `house_no` int(11) NOT NULL,
  `postal` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone_no` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `blockID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `blockedID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `providerID` int(11) NOT NULL,
  `service_date` date NOT NULL,
  `service_time` time NOT NULL,
  `duration` float DEFAULT NULL,
  `address` int(11) NOT NULL,
  `extra_serviceID` int(11) DEFAULT NULL,
  `total_payment` float DEFAULT NULL,
  `book_status` varchar(20) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `extra_service`
--

CREATE TABLE `extra_service` (
  `extra_serviceID` int(11) NOT NULL,
  `extra_serv_name` varchar(30) NOT NULL,
  `extra_servic_price` float NOT NULL,
  `extra_service_duration` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fav_pro`
--

CREATE TABLE `fav_pro` (
  `fav_proID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `proID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_pro`
--

CREATE TABLE `service_pro` (
  `userID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `avatar` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `address` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `passwd` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `pref_language` varchar(15) DEFAULT NULL,
  `addressID` int(11) DEFAULT NULL,
  `fav_proID` int(11) DEFAULT NULL,
  `block_pro` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`blockID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `blockedID` (`blockedID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `providerID` (`providerID`),
  ADD KEY `address` (`address`),
  ADD KEY `extra_serviceID` (`extra_serviceID`);

--
-- Indexes for table `extra_service`
--
ALTER TABLE `extra_service`
  ADD PRIMARY KEY (`extra_serviceID`);

--
-- Indexes for table `fav_pro`
--
ALTER TABLE `fav_pro`
  ADD PRIMARY KEY (`fav_proID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `proID` (`proID`);

--
-- Indexes for table `service_pro`
--
ALTER TABLE `service_pro`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `address` (`address`),
  ADD KEY `rating` (`rating`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `addressID` (`addressID`),
  ADD KEY `fav_proID` (`fav_proID`),
  ADD KEY `block_pro` (`block_pro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `blockID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `extra_service`
--
ALTER TABLE `extra_service`
  MODIFY `extra_serviceID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fav_pro`
--
ALTER TABLE `fav_pro`
  MODIFY `fav_proID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_pro`
--
ALTER TABLE `service_pro`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
