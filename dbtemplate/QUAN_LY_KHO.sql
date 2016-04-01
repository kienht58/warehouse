-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2016 at 01:22 AM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QUAN_LY_KHO`
--

-- --------------------------------------------------------

--
-- Table structure for table `DM_KHO`
--

CREATE TABLE IF NOT EXISTS `DM_KHO` (
  `ID` int(11) NOT NULL,
  `MA_KHO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_KHO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `VI_TRI` text COLLATE utf8_unicode_ci,
  `LIEN_HE` text COLLATE utf8_unicode_ci,
  `GHI_CHU` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DM_LOAI_TU_DIEN`
--

CREATE TABLE IF NOT EXISTS `DM_LOAI_TU_DIEN` (
  `ID` int(10) unsigned NOT NULL,
  `MA_LOAI_TU_DIEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_LOAI_TU_DIEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DM_NHA_CUNG_CAP`
--

CREATE TABLE IF NOT EXISTS `DM_NHA_CUNG_CAP` (
  `ID` int(11) NOT NULL,
  `MA_NHA_CUNG_CAP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_NHA_CUNG_CAP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DM_NHA_CUNG_CAP`
--

INSERT INTO `DM_NHA_CUNG_CAP` (`ID`, `MA_NHA_CUNG_CAP`, `TEN_NHA_CUNG_CAP`) VALUES
(1, 'abc', 'def'),
(2, 'ghk', 'chm');

-- --------------------------------------------------------

--
-- Table structure for table `DM_SAN_PHAM_ENTITY`
--

CREATE TABLE IF NOT EXISTS `DM_SAN_PHAM_ENTITY` (
  `ID` int(11) NOT NULL,
  `ID_SAN_PHAM` int(11) NOT NULL,
  `SERIAL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SERIAL_NHA_CUNG_CAP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_TRANG_THAI_SAN_PHAM` int(11) NOT NULL,
  `SO_LUONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DM_SAN_PHAM_TRONG_KHO`
--

CREATE TABLE IF NOT EXISTS `DM_SAN_PHAM_TRONG_KHO` (
  `ID` int(11) NOT NULL,
  `ID_SAN_PHAM` int(11) NOT NULL,
  `MA_SAN_PHAM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_SAN_PHAM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MA_SAN_PHAM_NHA_CUNG_CAP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_DON_VI_TINH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DM_TU_DIEN`
--

CREATE TABLE IF NOT EXISTS `DM_TU_DIEN` (
  `ID` int(11) NOT NULL,
  `ID_LOAI_TU_DIEN` int(11) NOT NULL,
  `MA_TU_DIEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TU_DIEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GD_NHAP_KHO`
--

CREATE TABLE IF NOT EXISTS `GD_NHAP_KHO` (
  `ID` int(11) NOT NULL,
  `ID_LY_DO_NHAP_KHO` int(11) NOT NULL,
  `ID_YEU_CAU` int(11) NOT NULL,
  `NGAY_NHAP_KHO` datetime NOT NULL,
  `MA_CHUNG_TU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_KHO` int(11) NOT NULL,
  `DA_XOA_YN` tinyint(1) NOT NULL,
  `NGUOI_TAO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGUOI_SUA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAY_LAP` datetime DEFAULT NULL,
  `NGAY_SUA` datetime DEFAULT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GD_NHAP_KHO_DETAIL`
--

CREATE TABLE IF NOT EXISTS `GD_NHAP_KHO_DETAIL` (
  `ID` int(11) NOT NULL,
  `ID_GD_NHAP_KHO` int(11) NOT NULL,
  `ID_SAN_PHAM` int(11) NOT NULL,
  `SO_LUONG` int(11) NOT NULL,
  `NGAY_SAN_XUAT` datetime NOT NULL,
  `HAN_SU_DUNG` datetime NOT NULL,
  `GIA_NHAP` float NOT NULL,
  `ID_NHA_CUNG_CAP` int(11) DEFAULT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GD_XUAT_KHO`
--

CREATE TABLE IF NOT EXISTS `GD_XUAT_KHO` (
  `ID` int(11) NOT NULL,
  `NGAY_XUAT_KHO` datetime NOT NULL,
  `ID_LY_DO_XUAT_KHO` int(11) NOT NULL,
  `ID_YEU_CAU` int(11) NOT NULL,
  `MA_CHUNG_TU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DA_XOA_YN` tinyint(1) NOT NULL,
  `NGUOI_TAO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGUOI_SUA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAY_TAO` datetime DEFAULT NULL,
  `NGAY_SUA` datetime DEFAULT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci,
  `ID_KHO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GD_XUAT_KHO_DETAIL`
--

CREATE TABLE IF NOT EXISTS `GD_XUAT_KHO_DETAIL` (
  `ID` int(11) NOT NULL,
  `ID_GD_XUAT_KHO` int(11) NOT NULL,
  `ID_SAN_PHAM` int(11) NOT NULL,
  `SO_LUONG` int(11) NOT NULL,
  `ID_LOAI_KHACH_HANG` int(11) DEFAULT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GD_YEU_CAU`
--

CREATE TABLE IF NOT EXISTS `GD_YEU_CAU` (
  `ID` int(11) NOT NULL,
  `MA_YEU_CAU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_LOAI_YEU_CAU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_TRANG_THAI_YEU_CAU` int(11) NOT NULL,
  `NGAY_YEU_CAU` datetime NOT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci,
  `DA_XOA_YN` tinyint(1) NOT NULL,
  `NGUOI_TAO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGUOI_SUA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAY_TAO` datetime DEFAULT NULL,
  `NGAY_SUA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GD_YEU_CAU_DETAIL`
--

CREATE TABLE IF NOT EXISTS `GD_YEU_CAU_DETAIL` (
  `ID` int(11) NOT NULL,
  `ID_YEU_CAU` int(11) NOT NULL,
  `MA_SAN_PHAM_NHA_CUNG_CAP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SO_LUONG` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NGAY_SAN_XUAT` datetime DEFAULT NULL,
  `HAN_SU_DUNG` datetime DEFAULT NULL,
  `MA_NHA_CUNG_CAP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GHI_CHU` text COLLATE utf8_unicode_ci,
  `GIA_NHAP` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `V_TEST`
--
CREATE TABLE IF NOT EXISTS `V_TEST` (
`ID` int(11)
,`ID_SAN_PHAM` int(11)
,`SERIAL` varchar(255)
,`SERIAL_NHA_CUNG_CAP` varchar(255)
,`ID_TRANG_THAI_SAN_PHAM` int(11)
,`SO_LUONG` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `V_TEST`
--
DROP TABLE IF EXISTS `V_TEST`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `V_TEST` AS select `DM_SAN_PHAM_ENTITY`.`ID` AS `ID`,`DM_SAN_PHAM_ENTITY`.`ID_SAN_PHAM` AS `ID_SAN_PHAM`,`DM_SAN_PHAM_ENTITY`.`SERIAL` AS `SERIAL`,`DM_SAN_PHAM_ENTITY`.`SERIAL_NHA_CUNG_CAP` AS `SERIAL_NHA_CUNG_CAP`,`DM_SAN_PHAM_ENTITY`.`ID_TRANG_THAI_SAN_PHAM` AS `ID_TRANG_THAI_SAN_PHAM`,`DM_SAN_PHAM_ENTITY`.`SO_LUONG` AS `SO_LUONG` from (`DM_SAN_PHAM_TRONG_KHO` join `DM_SAN_PHAM_ENTITY`) where (`DM_SAN_PHAM_TRONG_KHO`.`ID` = `DM_SAN_PHAM_ENTITY`.`ID_SAN_PHAM`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DM_KHO`
--
ALTER TABLE `DM_KHO`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MA_KHO` (`MA_KHO`);

--
-- Indexes for table `DM_LOAI_TU_DIEN`
--
ALTER TABLE `DM_LOAI_TU_DIEN`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MA_TU_DIEN` (`MA_LOAI_TU_DIEN`);

--
-- Indexes for table `DM_NHA_CUNG_CAP`
--
ALTER TABLE `DM_NHA_CUNG_CAP`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MA_NHA_CUNG_CAP` (`MA_NHA_CUNG_CAP`);

--
-- Indexes for table `DM_SAN_PHAM_ENTITY`
--
ALTER TABLE `DM_SAN_PHAM_ENTITY`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SERIAL` (`ID_SAN_PHAM`),
  ADD UNIQUE KEY `SERIAL_2` (`SERIAL`);

--
-- Indexes for table `DM_SAN_PHAM_TRONG_KHO`
--
ALTER TABLE `DM_SAN_PHAM_TRONG_KHO`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `DM_TU_DIEN`
--
ALTER TABLE `DM_TU_DIEN`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `GD_NHAP_KHO`
--
ALTER TABLE `GD_NHAP_KHO`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `GD_NHAP_KHO_DETAIL`
--
ALTER TABLE `GD_NHAP_KHO_DETAIL`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `GD_YEU_CAU`
--
ALTER TABLE `GD_YEU_CAU`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MA_YEU_CAU` (`MA_YEU_CAU`);

--
-- Indexes for table `GD_YEU_CAU_DETAIL`
--
ALTER TABLE `GD_YEU_CAU_DETAIL`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DM_KHO`
--
ALTER TABLE `DM_KHO`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `DM_LOAI_TU_DIEN`
--
ALTER TABLE `DM_LOAI_TU_DIEN`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `DM_NHA_CUNG_CAP`
--
ALTER TABLE `DM_NHA_CUNG_CAP`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `DM_SAN_PHAM_ENTITY`
--
ALTER TABLE `DM_SAN_PHAM_ENTITY`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `DM_SAN_PHAM_TRONG_KHO`
--
ALTER TABLE `DM_SAN_PHAM_TRONG_KHO`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `DM_TU_DIEN`
--
ALTER TABLE `DM_TU_DIEN`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GD_NHAP_KHO_DETAIL`
--
ALTER TABLE `GD_NHAP_KHO_DETAIL`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GD_YEU_CAU`
--
ALTER TABLE `GD_YEU_CAU`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `GD_YEU_CAU_DETAIL`
--
ALTER TABLE `GD_YEU_CAU_DETAIL`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `DM_SAN_PHAM_ENTITY`
--
ALTER TABLE `DM_SAN_PHAM_ENTITY`
  ADD CONSTRAINT `DM_SAN_PHAM_ENTITY_ibfk_1` FOREIGN KEY (`ID_SAN_PHAM`) REFERENCES `DM_SAN_PHAM_TRONG_KHO` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
