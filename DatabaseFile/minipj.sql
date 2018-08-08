-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 04:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minipj`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idlocation` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `idlocation`) VALUES
('Dee', '8'),
('fee', '8'),
('irfan', '8'),
('irfan', '9');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(4) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maplocation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fileimage` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `address`, `maplocation`, `fileimage`, `filename`, `type`) VALUES
(4, 'มัสยิดกลางปัตตานี', 'ถนนยะรังเลขทะเบียนที่249', '6.862385,101.255101', 'มัสยิดกลางปัตตานี1.jpg', 'page1-1.php', 'วัฒนธรรม'),
(5, 'เจ้าแม่ลิ้มกอเหนี่ยว', 'ถนน​ปานาเระตำบลอาเนาะรูอำเภอเมืองจังหวัดปัตตานี', '6.871722,101.258290', 'เจ้าแม่ลิ้มกอเหนี่ยว1.jpg', 'page1-2.php', 'วัฒนธรรม'),
(6, 'มัสยิดกรือเซะ', 'บ้านกรือเซะตำบลบานาอำเภอเมืองจังหวัดปัตตานี', '6.873323,101.302891', 'มัสยิดกรือเซะ1.jpg', 'page1-3.php', 'วัฒนธรรม'),
(7, 'สะพานไม้บานา', 'หมู่ที่2บ้านบานาตำบลบานาอำเภอเมืองจังหวัดปัตตานี', '6.878336,101.289945', 'สะพานไม้บานา1.jpg', 'page2-1.php', 'อนุรักษ์'),
(8, 'น้ำตกธารโต', 'ตำบลถ้ำทะลุอำเภอบันนังสตายะลา', '6.222129,101.158891', 'น้ำตกธารโต1.jpg', 'page2-2.php', 'อนุรักษ์'),
(9, 'ป่าชายเลนยะหริ่ง', 'ตำบลตะโละกาโปร์อำเภอยะหริ่งจังหวัดปัตตานี', '6.870497,101.371918', 'ป่าชายเลนยะหริ่ง1.jpg', 'page2-3.php', 'อนุรักษ์'),
(10, 'มัสยิดตะโละมาเนาะ', 'ตำบลตันหยงมัสอำเภอระแงะนราธิวาส', '6.295940,101.756306', 'มัสยิดตะโละมาเนาะ1.jpg', 'page3-1.php', 'ประวัติศาสตร์'),
(11, 'วัดหน้าถ่ำ', 'ตำบลหน้าถ้ำอำเภอเมืองยะลายะลา', '6.527938,101.223238', 'วัดหน้าถ่ำ1.jpg', 'page3-2.php', 'ประวัติศาสตร์'),
(12, 'วัดชลธาราสิงเห', 'ตำบลเจ๊ะเหอำเภอตากใบนราธิวาส', '6.262662,102.050253', 'วัดชลธาราสิงเห1.jpg', 'page3-3.php', 'ประวัติศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('Dee', '123', 'rusdee@gamil.com'),
('fee', '1234', 'irfan-liverpool@hotmail.com'),
('irfan', '1010', 'irfan-liverpool@hotmail.com'),
('pang', '123', 'irfankechi7@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idlocation`,`username`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
