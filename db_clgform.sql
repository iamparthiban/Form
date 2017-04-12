-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2017 at 06:56 AM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_clgform`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_academic`
--

CREATE TABLE IF NOT EXISTS `tbl_academic` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `deg_record` varchar(255) NOT NULL,
  `deg_exampassed` varchar(255) NOT NULL,
  `deg_board` varchar(50) NOT NULL,
  `deg_registerno` int(50) NOT NULL,
  `deg_percentage` int(50) NOT NULL,
  `deg_yearofpassing` int(50) NOT NULL,
  `puc_record` varchar(255) NOT NULL,
  `puc_exampassed` varchar(255) NOT NULL,
  `puc_board` int(50) NOT NULL,
  `puc_registerno` int(50) NOT NULL,
  `puc_percentage` int(50) NOT NULL,
  `puc_yearofpassing` int(50) NOT NULL,
  `sslc_record` varchar(255) NOT NULL,
  `sslc_exampassed` varchar(255) NOT NULL,
  `sslc_board` int(50) NOT NULL,
  `sslc_registerno` int(50) NOT NULL,
  `sslc_percentage` int(50) NOT NULL,
  `sslc_yearofpassing` int(50) NOT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant`
--

CREATE TABLE IF NOT EXISTS `tbl_applicant` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_no` int(20) NOT NULL,
  `father_mail` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_no` int(20) NOT NULL,
  `mother_mail` varchar(50) NOT NULL,
  `landline` int(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE IF NOT EXISTS `tbl_fee` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `registrationfee` int(50) NOT NULL,
  `paidbycheque` int(50) NOT NULL,
  `dd` int(50) NOT NULL,
  `cash` int(50) NOT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
