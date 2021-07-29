-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2016 at 06:44 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mall`
--
CREATE DATABASE IF NOT EXISTS `mall` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mall`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` text,
  `star` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`, `description`, `star`, `created_at`, `updated_at`) VALUES
(34, 'kfc', 'geetha', 'good', '3.0', '2016-04-05 07:39:10', '0000-00-00 00:00:00'),
(35, 'subway', 'meena', 'bad', '2.5', '2016-04-13 13:48:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products4`
--

CREATE TABLE IF NOT EXISTS `products4` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `offerfrom` varchar(50) NOT NULL,
  `offerupto` varchar(50) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `shopno` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `products4`
--

INSERT INTO `products4` (`pid`, `name`, `price`, `description`, `medicine`, `offerfrom`, `offerupto`, `floorno`, `shopno`, `owner`, `contact`, `created_at`, `updated_at`) VALUES
(8, 'krafty', 'earings', 'womensday', '35', '24/4', '28/4', '2', '25', 'alibaba', '321654987', '2016-04-15 10:14:19', '0000-00-00 00:00:00'),
(12, 'bangli', 'footwears', 'hapysunday', '25', '20/4', '20/4', '3', '15', 'jeju', '987654123', '2016-04-15 13:05:29', '0000-00-00 00:00:00'),
(13, 'eytex', 'sundaysale', 'nailpolish', '15', '20/4', '28/4', '2', '14', 'dazly', '78965412', '2016-04-15 14:00:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products5`
--

CREATE TABLE IF NOT EXISTS `products5` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(50) NOT NULL,
  `offerfor` varchar(50) NOT NULL,
  `discounton` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `discountper` varchar(50) NOT NULL,
  `offerfrom` varchar(50) NOT NULL,
  `offerupto` varchar(50) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `shopno` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `products5`
--

INSERT INTO `products5` (`pid`, `shopname`, `offerfor`, `discounton`, `created_at`, `updated_at`, `discountper`, `offerfrom`, `offerupto`, `floorno`, `shopno`, `owner`, `contact`) VALUES
(23, 'kfc', 'weekend', 'chizza', '2016-04-15 13:10:27', '0000-00-00 00:00:00', '15', '24/4', '25/4', '2', 'bearduncle', '5498632', '25'),
(24, 'aasif', 'foodweek', 'briyani', '2016-04-15 13:11:27', '0000-00-00 00:00:00', '25', '20/4', '28/4', '1', 'asife', '9865412365', '15'),
(25, 'subway', 'xmas', 'burger', '2016-04-15 13:44:21', '0000-00-00 00:00:00', '56', '20/4', '28/4', '5', 'juna', '32165489', '6'),
(26, 'coolcafe', 'weekend', 'coffee', '2016-04-15 14:06:30', '0000-00-00 00:00:00', '25', '20/4', '22/4', '2', 'cafiyan', '321654987', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products6`
--

CREATE TABLE IF NOT EXISTS `products6` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shopname` varchar(50) NOT NULL,
  `offerfor` varchar(50) NOT NULL,
  `discounton` varchar(50) NOT NULL,
  `discountper` varchar(50) NOT NULL,
  `offerfrom` varchar(50) NOT NULL,
  `offerupto` varchar(50) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `shopno` varchar(45) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products6`
--

INSERT INTO `products6` (`pid`, `created_at`, `updated_at`, `shopname`, `offerfor`, `discounton`, `discountper`, `offerfrom`, `offerupto`, `floorno`, `shopno`, `owner`, `contact`) VALUES
(1, '2016-04-05 07:30:34', '0000-00-00 00:00:00', 'voonik', 'womensday', 'kurta', '35', '24/4', '28/4', '3', '10', 'voona', '90909090909'),
(2, '2016-04-09 10:10:37', '0000-00-00 00:00:00', 'limeroad', 'weekend', 'ethnicwears', '15', '20/4', '25/4', '2', '6', 'lima', '895784578'),
(5, '2016-04-15 13:48:12', '0000-00-00 00:00:00', 'tamil', 'tamilnewyr', 'saree', '25', '25/4', '29/4', '4', '7', 'muruga', '75644');

-- --------------------------------------------------------

--
-- Table structure for table `products7`
--

CREATE TABLE IF NOT EXISTS `products7` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(100) NOT NULL,
  `offerfor` varchar(50) NOT NULL,
  `discounton` varchar(50) DEFAULT NULL,
  `discountper` varchar(50) NOT NULL,
  `offerfrom` varchar(50) NOT NULL,
  `offerupto` varchar(50) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `shopno` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `products7`
--

INSERT INTO `products7` (`pid`, `shopname`, `offerfor`, `discounton`, `discountper`, `offerfrom`, `offerupto`, `floorno`, `shopno`, `owner`, `contact`, `created_at`, `updated_at`) VALUES
(21, 'chotabheema', 'summerholidays', 'candycrush', '25', '20/4', '26/4', '2', '8', 'mr.rajan', '235698', '2016-04-15 13:23:44', '0000-00-00 00:00:00'),
(22, 'doradara', 'examholidays', 'horseride', '25', '25/4', '29/4', '1', '5', 'geetha', '321654987', '2016-04-15 13:05:11', '0000-00-00 00:00:00'),
(23, 'candyma', 'weekend', 'milkyway', '32', '20/4', '28/4', '5', '1', 'fazarak', '16549875', '2016-04-15 13:56:39', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
