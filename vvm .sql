-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2016 at 02:01 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vvm`
--
CREATE DATABASE IF NOT EXISTS `vvm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vvm`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` text NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `t_name`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `ID` varchar(20) NOT NULL,
  `BANK_NAME` text NOT NULL,
  `BRANCH` text NOT NULL,
  `AC_NO` text NOT NULL,
  `IFSC` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`ID`, `BANK_NAME`, `BRANCH`, `AC_NO`, `IFSC`) VALUES
('01viiiA2016', 'hdfc', 'cob', '459878665589', 25489856);

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE IF NOT EXISTS `basic` (
  `ID` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `NAME` text NOT NULL,
  `FNAME` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `MOBILE` int(11) NOT NULL,
  `DOB` text NOT NULL,
  `CLASS` text NOT NULL,
  `ROLL` int(11) NOT NULL,
  `SECTION` text NOT NULL,
  `GENDER` text NOT NULL,
  `CAST` text NOT NULL,
  `D_O_ADMISSION` text NOT NULL,
  `IMG_PATH` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`ID`, `NAME`, `FNAME`, `ADDRESS`, `MOBILE`, `DOB`, `CLASS`, `ROLL`, `SECTION`, `GENDER`, `CAST`, `D_O_ADMISSION`, `IMG_PATH`) VALUES
('01viiiA2016', 'subham sarkar', 'k.k sarkar', 'cob', 0, '', 'viii', 1, 'A', '', '', '', ''),
('02XA2016', 'SARKAR', '', '', 0, '', 'X', 2, 'A', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `formative`
--

CREATE TABLE IF NOT EXISTS `formative` (
  `ID` varchar(15) NOT NULL,
  `PF1` int(2) NOT NULL,
  `PF2` int(2) NOT NULL,
  `PF3` int(2) NOT NULL,
  `PFT` int(11) NOT NULL,
  `QF1` int(2) NOT NULL,
  `QF2` int(2) NOT NULL,
  `QF3` int(2) NOT NULL,
  `QFT` int(11) NOT NULL,
  `IF1` int(2) NOT NULL,
  `IF2` int(2) NOT NULL,
  `IF3` int(2) NOT NULL,
  `IFT` int(11) NOT NULL,
  `EF1` int(2) NOT NULL,
  `EF2` int(2) NOT NULL,
  `EF3` int(2) NOT NULL,
  `EFT` int(11) NOT NULL,
  `AF1` int(2) NOT NULL,
  `AF2` int(2) NOT NULL,
  `AF3` int(2) NOT NULL,
  `AFT` int(11) NOT NULL,
  `FS1` int(2) NOT NULL,
  `FS2` int(2) NOT NULL,
  `FS3` int(2) NOT NULL,
  `FST` int(11) NOT NULL,
  `FSG` varchar(5) NOT NULL,
  `SS1` int(2) NOT NULL,
  `SS2` int(2) NOT NULL,
  `SS3` int(2) NOT NULL,
  `SST` int(11) NOT NULL,
  `SSG` varchar(5) NOT NULL,
  `MS1` int(2) NOT NULL,
  `MS2` int(2) NOT NULL,
  `MS3` int(2) NOT NULL,
  `MST` int(11) NOT NULL,
  `MSG` varchar(5) NOT NULL,
  `PS1` int(2) NOT NULL,
  `PS2` int(2) NOT NULL,
  `PS3` int(2) NOT NULL,
  `PST` int(11) NOT NULL,
  `PSG` varchar(5) NOT NULL,
  `LS1` int(2) NOT NULL,
  `LS2` int(2) NOT NULL,
  `LS3` int(2) NOT NULL,
  `LST` int(11) NOT NULL,
  `LSG` varchar(5) NOT NULL,
  `EHS1` int(2) NOT NULL,
  `EHS2` int(2) NOT NULL,
  `EHS3` int(2) NOT NULL,
  `EHST` int(11) NOT NULL,
  `EHSG` varchar(5) NOT NULL,
  `EGS1` int(2) NOT NULL,
  `EGS2` int(2) NOT NULL,
  `EGS3` int(2) NOT NULL,
  `EGST` int(11) NOT NULL,
  `EGSG` varchar(5) NOT NULL,
  `PWS1` int(2) NOT NULL,
  `PWS2` int(2) NOT NULL,
  `PWS3` int(2) NOT NULL,
  `PWST` int(11) NOT NULL,
  `PWSG` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formative`
--

INSERT INTO `formative` (`ID`, `PF1`, `PF2`, `PF3`, `PFT`, `QF1`, `QF2`, `QF3`, `QFT`, `IF1`, `IF2`, `IF3`, `IFT`, `EF1`, `EF2`, `EF3`, `EFT`, `AF1`, `AF2`, `AF3`, `AFT`, `FS1`, `FS2`, `FS3`, `FST`, `FSG`, `SS1`, `SS2`, `SS3`, `SST`, `SSG`, `MS1`, `MS2`, `MS3`, `MST`, `MSG`, `PS1`, `PS2`, `PS3`, `PST`, `PSG`, `LS1`, `LS2`, `LS3`, `LST`, `LSG`, `EHS1`, `EHS2`, `EHS3`, `EHST`, `EHSG`, `EGS1`, `EGS2`, `EGS3`, `EGST`, `EGSG`, `PWS1`, `PWS2`, `PWS3`, `PWST`, `PWSG`) VALUES
('01viiiA2016', 10, 8, 8, 26, 10, 6, 15, 31, 12, 15, 18, 45, 14, 13, 14, 41, 14, 12, 12, 38, 14, 14, 44, 72, 'A', 14, 12, 15, 41, 'C+', 15, 18, 30, 63, 'B+', 14, 15, 15, 44, '', 15, 15, 15, 45, '', 15, 15, 15, 45, '', 15, 15, 18, 48, '', 18, 15, 14, 47, ''),
('02XA2016', 12, 15, 20, 47, 10, 15, 20, 45, 12, 15, 14, 41, 10, 14, 15, 39, 13, 14, 15, 42, 12, 16, 40, 68, '', 11, 12, 42, 65, '', 7, 12, 14, 33, '', 0, 12, 12, 24, '', 12, 15, 15, 42, '', 15, 15, 15, 45, '', 13, 16, 16, 45, '', 16, 16, 6, 38, '');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `ID` varchar(20) NOT NULL,
  `MNAME` text NOT NULL,
  `RELIGION` text NOT NULL,
  `OCCUPATION` text NOT NULL,
  `AD_NO` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`ID`, `MNAME`, `RELIGION`, `OCCUPATION`, `AD_NO`) VALUES
('01viiiA2016', 's sarkar', 'hindhu', 'farmar', '598746321588');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
