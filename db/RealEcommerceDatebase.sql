-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2014 at 03:18 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `UserId` bigint(100) NOT NULL,
  `Pin` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100) NOT NULL,
  `isactive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `userId` bigint(60) NOT NULL,
  `data` datetime NOT NULL,
  `rating` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `MenuNumber` int(60) NOT NULL,
  `Position` int(60) NOT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `OrderId` int(80) NOT NULL,
  `PersonName` varchar(80) NOT NULL,
  `PersonId` int(60) NOT NULL,
  `Price` int(60) NOT NULL,
  `Quantity` int(60) NOT NULL,
  `Discount` bit(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

CREATE TABLE IF NOT EXISTS `ordermaster` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `Quantity` int(60) NOT NULL,
  `Total` int(60) NOT NULL,
  `Date` datetime NOT NULL,
  `ModeOfPayment` int(60) NOT NULL,
  `PS` int(60) NOT NULL,
  `Billing` bigint(80) NOT NULL,
  `Shipping` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(80) NOT NULL AUTO_INCREMENT,
  `MenuId` int(60) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Content` varchar(60) NOT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `SId` bigint(100) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Discount` varchar(100) NOT NULL,
  `Rating` int(100) NOT NULL,
  `Discription` varchar(100) NOT NULL,
  `Pictures` varchar(100) NOT NULL,
  `Thumbnail` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `UserId` varchar(100) NOT NULL,
  `Pin` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` bigint(60) NOT NULL AUTO_INCREMENT,
  `Quantity` bigint(60) NOT NULL,
  `Sold` bigint(60) NOT NULL,
  `ProductId` bigint(60) NOT NULL,
  PRIMARY KEY (`id`,`Quantity`,`Sold`,`ProductId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `CategoryId` bigint(100) NOT NULL,
  `SubCategoryName` varchar(100) NOT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usersaccount`
--

CREATE TABLE IF NOT EXISTS `usersaccount` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `SecurityQuestion` varchar(350) NOT NULL,
  `SecurityAnswer` varchar(350) NOT NULL,
  `IsActive` varchar(100) NOT NULL,
  `IsAdmin` varchar(100) NOT NULL,
  `RegDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `userspersonal`
--

CREATE TABLE IF NOT EXISTS `userspersonal` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `PrimaryEmail` varchar(100) NOT NULL,
  `SecondaryEmail` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `DOB` int(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
