-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 12:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_mobile` varchar(15) NOT NULL,
  `admin_mail` varchar(100) NOT NULL,
  `admin_password` varchar(1000) NOT NULL,
  `admin_about` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_mobile`, `admin_mail`, `admin_password`, `admin_about`) VALUES
(1, 'Saifur rahman', '01611098010', 'fazlerabbi2248@gmail.com', '123', 'myself Saifur Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `autho_id` int(10) NOT NULL,
  `autho_img` varchar(1000) NOT NULL,
  `autho_name` varchar(100) NOT NULL,
  `autho_mobile` varchar(15) NOT NULL,
  `autho_email` varchar(100) NOT NULL,
  `autho_position` varchar(11) NOT NULL,
  `autho_office` varchar(100) NOT NULL,
  `autho_startdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`autho_id`, `autho_img`, `autho_name`, `autho_mobile`, `autho_email`, `autho_position`, `autho_office`, `autho_startdate`) VALUES
(24, 'profile1.jpg', 'Fazle Rabbi', '+8801611098010', 'rabbi@gamil.com', 'Director', 'Academy Bhaban 2', '2021-10-04'),
(26, 'Fazle_Rabbi-pass.jpg', 'masum Billah', '+01611098010', 'new@gmail.com', 'Head office', 'Library bhan', '2021-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `completework`
--

CREATE TABLE `completework` (
  `completed_id` int(100) NOT NULL,
  `EquipmentID` int(100) NOT NULL,
  `prob_id` int(100) NOT NULL,
  `repair_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completework`
--

INSERT INTO `completework` (`completed_id`, `EquipmentID`, `prob_id`, `repair_name`) VALUES
(1, 6, 9, 'rabbi'),
(2, 6, 9, 'arik'),
(3, 7, 8, 'kiron'),
(4, 11, 11, 'rabbi'),
(5, 6, 13, 'Rabbi');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `EquipmentID` int(11) NOT NULL,
  `Label` varchar(50) NOT NULL,
  `Equipment_Type` varchar(70) NOT NULL,
  `included_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `Department` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`EquipmentID`, `Label`, `Equipment_Type`, `included_date`, `expire_date`, `Department`) VALUES
(6, 'pc20', 'Desktop Computer', '2021-10-03', '2022-06-03', 'SE'),
(7, 'printer11', 'Printer', '2021-10-01', '2021-10-02', 'SE'),
(8, 'printer2', 'Printer', '2021-09-03', '2021-10-01', 'SE'),
(11, 'pc1', 'Desktop Computer', '2021-10-04', '2025-09-04', 'EEE'),
(12, 'pc2', 'Presenter', '2021-10-11', '2021-11-06', 'EEE'),
(13, 'pc1', 'Desktop Computer', '2021-10-05', '2021-10-30', 'SE'),
(14, 'PC1', 'Desktop Computer', '2021-10-05', '2021-11-06', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `equipmmentproblem`
--

CREATE TABLE `equipmmentproblem` (
  `prob_id` int(11) NOT NULL,
  `EquipmentID` int(11) NOT NULL,
  `prob_desc` varchar(1000) NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipmmentproblem`
--

INSERT INTO `equipmmentproblem` (`prob_id`, `EquipmentID`, `prob_desc`, `issue_date`) VALUES
(9, 6, 'again not working', '2021-10-05'),
(10, 7, 'lots of damage', '2021-10-05'),
(11, 8, 'lots of damage', '2021-10-05'),
(12, 13, 'virus attack', '2021-10-05'),
(13, 11, 'CPU not working', '2021-10-05'),
(14, 7, 'is not working', '2021-10-05'),
(15, 6, 'Window not working', '2021-10-05'),
(16, 6, 'noting', '2021-10-05'),
(17, 6, 'fahfjiacnbsd vdd cdsvuifhac sdf dscsdaihvf dsnb`vd fijsd  vdauvfbs   sdvk\r\n\r\nafgfda\r\ndf\r\ndfg\r\nfd\r\ngdf\r\ngdf\r\ngsdf\r\ng\r\ndfsg\r\ndfg\r\ndf\r\nsg\r\nsdfg\r\ndsf', '2021-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(10) NOT NULL,
  `notice_name` varchar(100) NOT NULL,
  `notice_desc` varchar(1000) NOT NULL,
  `notice_department` varchar(100) NOT NULL,
  `notice_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_name`, `notice_desc`, `notice_department`, `notice_date`) VALUES
(5, 'About Result', ' Testing 2', 'SE', '2021-10-18'),
(7, 'testing Notice', 'This is notice', 'EEE', '2021-10-04'),
(8, 'About result', 'This is about to a notice', 'SE', '2021-10-05'),
(9, 'Testing 1', ' Hello', 'SE', '2021-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `officer_id` int(2) NOT NULL,
  `officer_name` varchar(100) NOT NULL,
  `officer_img` varchar(1000) NOT NULL,
  `officer_mobile` varchar(15) NOT NULL,
  `officer_email` varchar(100) NOT NULL,
  `officer_department` varchar(100) NOT NULL,
  `office_startdate` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`officer_id`, `officer_name`, `officer_img`, `officer_mobile`, `officer_email`, `officer_department`, `office_startdate`, `password`) VALUES
(9, 'Himel Ahmed', 'fottball.jpg', '+01611098010', 'himel@gmail.com', 'CSE', '2021-10-05', '202cb962ac59075b964b07152d234b70'),
(10, 'Fazle rabbi', 'Fazle_Rabbi-pass.jpg', '+01611098010', 'rabbi@gmail.com', 'SE', '2021-09-28', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `onprocess`
--

CREATE TABLE `onprocess` (
  `prob_id` int(100) NOT NULL,
  `EquipmentID` int(100) NOT NULL,
  `repair_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onprocess`
--

INSERT INTO `onprocess` (`prob_id`, `EquipmentID`, `repair_name`) VALUES
(10, 13, 'rabbi'),
(12, 7, 'rahat');

-- --------------------------------------------------------

--
-- Table structure for table `pendingproblem`
--

CREATE TABLE `pendingproblem` (
  `prob_id` int(12) NOT NULL,
  `EquipmentID` int(100) NOT NULL,
  `prob_desc` varchar(1000) NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingproblem`
--

INSERT INTO `pendingproblem` (`prob_id`, `EquipmentID`, `prob_desc`, `issue_date`) VALUES
(14, 6, 'noting', '2021-10-05'),
(15, 6, 'fahfjiacnbsd vdd cdsvuifhac sdf dscsdaihvf dsnb`vd fijsd  vdauvfbs   sdvk\r\n\r\nafgfda\r\ndf\r\ndfg\r\nfd\r\ngdf\r\ngdf\r\ngsdf\r\ng\r\ndfsg\r\ndfg\r\ndf\r\nsg\r\nsdfg\r\ndsf', '2021-10-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`autho_id`);

--
-- Indexes for table `completework`
--
ALTER TABLE `completework`
  ADD PRIMARY KEY (`completed_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EquipmentID`,`Department`);

--
-- Indexes for table `equipmmentproblem`
--
ALTER TABLE `equipmmentproblem`
  ADD PRIMARY KEY (`prob_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `pendingproblem`
--
ALTER TABLE `pendingproblem`
  ADD PRIMARY KEY (`prob_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authority`
--
ALTER TABLE `authority`
  MODIFY `autho_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `completework`
--
ALTER TABLE `completework`
  MODIFY `completed_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `EquipmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `equipmmentproblem`
--
ALTER TABLE `equipmmentproblem`
  MODIFY `prob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `officer_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pendingproblem`
--
ALTER TABLE `pendingproblem`
  MODIFY `prob_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
