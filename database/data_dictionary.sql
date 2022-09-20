-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 05:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `a_ID` int(11) NOT NULL COMMENT 'คีย์หลัด',
  `ProvinceID` int(11) NOT NULL COMMENT 'คีย์จังหวัด',
  `AttrationTypeID` int(11) NOT NULL COMMENT 'คีย์ประเภทแหล่งท่องเที่ยว',
  `ImageURL` varchar(500) NOT NULL COMMENT 'Url รูปภาพ',
  `a_Name` varchar(500) NOT NULL COMMENT 'ชื่อแหล่งท่องเที่ยว',
  `Description` varchar(500) NOT NULL COMMENT 'รายละเอียด',
  `Created` datetime NOT NULL COMMENT 'วันที่สร้างข้อมูล',
  `Modified` datetime NOT NULL COMMENT 'วันที่ปรับปรุงข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attraction_type`
--

CREATE TABLE `attraction_type` (
  `t_ID` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `t_Name` varchar(500) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `p_ID` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `RegionID` int(11) DEFAULT NULL COMMENT 'คีย์ภูมิภาค',
  `p_Name` varchar(200) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `r_ID` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `r_Name` varchar(200) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`a_ID`),
  ADD KEY `province` (`ProvinceID`),
  ADD KEY `attraction_type` (`AttrationTypeID`);

--
-- Indexes for table `attraction_type`
--
ALTER TABLE `attraction_type`
  ADD PRIMARY KEY (`t_ID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`p_ID`),
  ADD KEY `region` (`RegionID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`r_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัด';

--
-- AUTO_INCREMENT for table `attraction_type`
--
ALTER TABLE `attraction_type`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก';

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `p_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก';

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attraction`
--
ALTER TABLE `attraction`
  ADD CONSTRAINT `attraction_type` FOREIGN KEY (`AttrationTypeID`) REFERENCES `attraction_type` (`t_ID`),
  ADD CONSTRAINT `province` FOREIGN KEY (`ProvinceID`) REFERENCES `province` (`p_ID`);

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `region` FOREIGN KEY (`RegionID`) REFERENCES `region` (`r_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
