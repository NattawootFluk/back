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
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `r_ID` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `r_Name` varchar(200) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`r_ID`, `r_Name`) VALUES
(1, 'ภาคเหนือ'),
(2, 'ภาคตะวันออกเฉียงเหนือ'),
(3, 'ภาคตะวันตก'),
(4, 'ภาคกลาง'),
(5, 'ภาคตะวันออก'),
(6, 'ภาคใต้');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`r_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
