-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:41 PM
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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `p_ID` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `RegionID` int(11) DEFAULT NULL COMMENT 'คีย์ภูมิภาค',
  `p_Name` varchar(200) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`p_ID`, `RegionID`, `p_Name`) VALUES
(1, 4, 'กรุงเทพมหานคร\r\n'),
(2, 6, 'จังหวัดกระบี่\r\n'),
(3, 3, 'จังหวัดกาญจนบุรี\r\n'),
(4, 2, 'จังหวัดกาฬสินธุ์\r\n'),
(5, 4, 'จังหวัดกำแพงเพชร\r\n'),
(6, 2, 'จังหวัดขอนแก่น\r\n'),
(7, 5, 'จังหวัดจันทบุรี\r\n'),
(8, 5, 'จังหวัดฉะเชิงเทรา\r\n'),
(9, 5, 'จังหวัดชลบุรี\r\n'),
(10, 4, 'จังหวัดชัยนาท\r\n'),
(11, 2, 'จังหวัดชัยภูมิ\r\n'),
(12, 6, 'จังหวัดชุมพร\r\n'),
(13, 1, 'จังหวัดเชียงราย\r\n'),
(14, 1, 'จังหวัดเชียงใหม่\r\n'),
(15, 6, 'จังหวัดตรัง\r\n'),
(16, 5, 'จังหวัดตราด\r\n'),
(17, 3, 'จังหวัดตาก\r\n'),
(18, 4, 'จังหวัดนครนายก\r\n'),
(19, 4, 'จังหวัดนครปฐม\r\n'),
(20, 2, 'จังหวัดนครพนม\r\n'),
(21, 2, 'จังหวัดนครราชสีมา\r\n'),
(22, 6, 'จังหวัดนครศรีธรรมราช\r\n'),
(23, 4, 'จังหวัดนครสวรรค์\r\n'),
(24, 4, 'จังหวัดนนทบุรี\r\n'),
(25, 6, 'จังหวัดนราธิวาส\r\n'),
(26, 1, 'จังหวัดน่าน\r\n'),
(27, 2, 'จังหวัดบึงกาฬ\r\n'),
(28, 2, 'จังหวัดบุรีรัมย์\r\n'),
(29, 4, 'จังหวัดปทุมธานี\r\n'),
(30, 3, 'จังหวัดประจวบคีรีขันธ์\r\n'),
(31, 5, 'จังหวัดปราจีนบุรี\r\n'),
(32, 6, 'จังหวัดปัตตานี\r\n'),
(33, 4, 'จังหวัดพระนครศรีอยุธยา\r\n'),
(34, 1, 'จังหวัดพะเยา\r\n'),
(35, 6, 'จังหวัดพังงา\r\n'),
(36, 6, 'จังหวัดพัทลุง\r\n'),
(37, 4, 'จังหวัดพิจิตร\r\n'),
(38, 4, 'จังหวัดพิษณุโลก\r\n'),
(39, 3, 'จังหวัดเพชรบุรี\r\n'),
(40, 4, 'จังหวัดเพชรบูรณ์\r\n'),
(41, 1, 'จังหวัดแพร่\r\n'),
(42, 6, 'จังหวัดภูเก็ต\r\n'),
(43, 2, 'จังหวัดมหาสารคาม\r\n'),
(44, 2, 'จังหวัดมุกดาหาร\r\n'),
(45, 1, 'จังหวัดแม่ฮ่องสอน\r\n'),
(46, 2, 'จังหวัดยโสธร\r\n'),
(47, 6, 'จังหวัดยะลา\r\n'),
(48, 2, 'จังหวัดร้อยเอ็ด\r\n'),
(49, 6, 'จังหวัดระนอง\r\n'),
(50, 5, 'จังหวัดระยอง\r\n'),
(51, 3, 'จังหวัดราชบุรี\r\n'),
(52, 4, 'จังหวัดลพบุรี\r\n'),
(53, 1, 'จังหวัดลำปาง\r\n'),
(54, 1, 'จังหวัดลำพูน\r\n'),
(55, 2, 'จังหวัดเลย\r\n'),
(56, 2, 'จังหวัดศรีสะเกษ\r\n'),
(57, 2, 'จังหวัดสกลนคร\r\n'),
(58, 6, 'จังหวัดสงขลา\r\n'),
(59, 6, 'จังหวัดสตูล\r\n'),
(60, 4, 'จังหวัดสมุทรปราการ\r\n'),
(61, 4, 'จังหวัดสมุทรสงคราม\r\n'),
(62, 4, 'จังหวัดสมุทรสาคร\r\n'),
(63, 5, 'จังหวัดสระแก้ว\r\n'),
(64, 4, 'จังหวัดสระบุรี\r\n'),
(65, 4, 'จังหวัดสิงห์บุรี\r\n'),
(66, 4, 'จังหวัดสุโขทัย\r\n'),
(67, 4, 'จังหวัดสุพรรณบุรี\r\n'),
(68, 6, 'จังหวัดสุราษฎร์ธานี\r\n'),
(69, 2, 'จังหวัดสุรินทร์\r\n'),
(70, 2, 'จังหวัดหนองคาย\r\n'),
(71, 2, 'จังหวัดหนองบัวลำภู\r\n'),
(72, 4, 'จังหวัดอ่างทอง\r\n'),
(73, 2, 'จังหวัดอำนาจเจริญ\r\n'),
(74, 2, 'จังหวัดอุดรธานี\r\n'),
(75, 1, 'จังหวัดอุตรดิตถ์\r\n'),
(76, 4, 'จังหวัดอุทัยธานี\r\n'),
(77, 2, 'จังหวัดอุบลราชธานี\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`p_ID`),
  ADD KEY `region` (`RegionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `p_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `region` FOREIGN KEY (`RegionID`) REFERENCES `region` (`r_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
