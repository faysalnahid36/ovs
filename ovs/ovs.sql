-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2016 at 02:14 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--
CREATE DATABASE IF NOT EXISTS `ovs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ovs`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `admin_id` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_password_again` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_password`, `admin_password_again`) VALUES
('1', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_info`
--

DROP TABLE IF EXISTS `candidate_info`;
CREATE TABLE IF NOT EXISTS `candidate_info` (
  `candidate_voter_id` varchar(20) NOT NULL,
  `candidate_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `area` varchar(50) NOT NULL,
  `number_of_vote` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_info`
--

INSERT INTO `candidate_info` (`candidate_voter_id`, `candidate_name`, `date_of_birth`, `sex`, `area`, `number_of_vote`) VALUES
('1126CSE002', 'AAAA', '1992-05-11', 'Male', 'Dhaka', '1');

-- --------------------------------------------------------

--
-- Table structure for table `voter_info`
--

DROP TABLE IF EXISTS `voter_info`;
CREATE TABLE IF NOT EXISTS `voter_info` (
  `voter_id` varchar(20) NOT NULL,
  `voter_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `area` varchar(50) NOT NULL,
  `status_of_voter` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_info`
--

INSERT INTO `voter_info` (`voter_id`, `voter_name`, `date_of_birth`, `sex`, `area`, `status_of_voter`) VALUES
('1126CSE001', 'AAAA', '1992-05-25', 'Male', 'Dhaka', '1'),
('1126CSE002', 'AAAA', '1990-02-23', 'Male', 'Dhaka', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
