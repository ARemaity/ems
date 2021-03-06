-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 07:52 AM
-- Server version: 10.4.13-MariaDB-log
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `EID` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`EID`, `name`, `description`) VALUES
(6, 'abc', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `expense_transaction`
--

CREATE TABLE `expense_transaction` (
  `ETID` int(255) NOT NULL,
  `fk_UID` int(100) NOT NULL,
  `fk_PID` int(100) NOT NULL,
  `fk_EID` int(100) NOT NULL,
  `cost` decimal(30,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_transaction`
--

INSERT INTO `expense_transaction` (`ETID`, `fk_UID`, `fk_PID`, `fk_EID`, `cost`, `created_at`) VALUES
(11, 1, 917, 1, '12000.00', '2021-03-27 17:09:22'),
(12, 1, 917, 2, '100000.00', '2021-03-27 17:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `income_transaction`
--

CREATE TABLE `income_transaction` (
  `ITID` int(255) NOT NULL,
  `fk_UID` int(100) NOT NULL,
  `fk_PID` int(100) NOT NULL,
  `cost` decimal(30,2) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income_transaction`
--

INSERT INTO `income_transaction` (`ITID`, `fk_UID`, `fk_PID`, `cost`, `status`, `created_at`) VALUES
(918, 1, 917, '100000.00', 1, '2021-03-27 17:09:36'),
(919, 1, 917, '1000000.00', 0, '2021-03-27 17:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userId` bigint(50) NOT NULL,
  `usertype` tinyint(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `encrypted_password` varchar(80) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userId`, `usertype`, `username`, `encrypted_password`, `salt`, `created_at`) VALUES
(3, 1, 'admin', 'D2aG1hGw6ItGzTDL2Q5IifmK+1Y3YTk1ODYzYmFl', '7a95863bae', '2020-11-29 13:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(100) NOT NULL,
  `fk_TID` int(11) NOT NULL,
  `number` int(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` int(15) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `fk_TID`, `number`, `city`, `client_name`, `client_phone`, `created_at`) VALUES
(917, 0, 432432, 'المجادل', 'محمود سليمان', 70083245, '2021-03-27 17:09:01'),
(918, 0, 1233222, 'الشهابية', 'حسين علي ', 70034424, '2021-03-27 17:27:53'),
(919, 0, 118, 'majadel', 'akrm', 71185386, '2021-03-27 17:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `TID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `expense_transaction`
--
ALTER TABLE `expense_transaction`
  ADD PRIMARY KEY (`ETID`);

--
-- Indexes for table `income_transaction`
--
ALTER TABLE `income_transaction`
  ADD PRIMARY KEY (`ITID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `EID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expense_transaction`
--
ALTER TABLE `expense_transaction`
  MODIFY `ETID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `income_transaction`
--
ALTER TABLE `income_transaction`
  MODIFY `ITID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=920;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userId` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `PID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=920;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
