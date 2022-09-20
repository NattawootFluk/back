-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 06:49 PM
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
-- Table structure for table `attraction_type`
--

CREATE TABLE `attraction_type` (
  `t_ID` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `t_Name` varchar(500) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attraction_type`
--

INSERT INTO `attraction_type` (`t_ID`, `t_Name`) VALUES
(1, 'แหล่งท่องเที่ยวเชิงนิเวศ'),
(2, 'แหล่งท่องเที่ยวทางศิลปะวิทยาการ'),
(3, 'แหล่งท่องเที่ยวทางประวัติศาสตร์'),
(4, 'แหล่งท่องเที่ยวทางธรรมชาติ'),
(5, 'แหล่งท่องเที่ยวเพื่อนันทนาการ'),
(6, 'แหล่งท่องเที่ยวทางวัฒนธรรม'),
(7, 'แหล่งท่องเที่ยวเชิงสุขภาพน้ำพุร้อนธรรมชาติ'),
(8, 'แหล่งท่องเที่ยวประเภทชายหาด'),
(9, 'แหล่งท่องเที่ยวประเภทน้ำตก'),
(10, 'แหล่งท่องเที่ยวทางธรรมชาติประเภทถ้ำ'),
(11, ' แหล่งท่องเที่ยวทางธรรมชาติประเภทเกาะ'),
(12, 'แหล่งท่องเที่ยวทางธรรมชาติประเภทแก่ง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction_type`
--
ALTER TABLE `attraction_type`
  ADD PRIMARY KEY (`t_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction_type`
--
ALTER TABLE `attraction_type`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
