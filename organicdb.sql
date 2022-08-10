-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2022 at 01:40 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dash_users`
--

DROP TABLE IF EXISTS `dash_users`;
CREATE TABLE IF NOT EXISTS `dash_users` (
  `U_ID` int(4) NOT NULL AUTO_INCREMENT,
  `U_USERNAME` varchar(200) NOT NULL,
  `U_GENDER` varchar(200) NOT NULL,
  `U_PASSWORD` varchar(200) NOT NULL,
  `U_EMAIL` varchar(200) NOT NULL,
  `U_CONTACT` varchar(200) NOT NULL,
  `U_ADDRESS` varchar(200) NOT NULL,
  `U_COUNTRY` varchar(200) NOT NULL,
  `U_STATE` varchar(200) NOT NULL,
  `U_CITY` varchar(200) NOT NULL,
  `U_PINCODE` varchar(200) NOT NULL,
  `U_ACTIVE` varchar(200) NOT NULL DEFAULT 'Y',
  `V_LANG_CODE` varchar(200) NOT NULL DEFAULT 'en',
  `U_ACCESS_UPDATE` varchar(200) NOT NULL,
  `U_ACCESS_INSERT` varchar(200) NOT NULL,
  `U_ACCESS_DELETE` varchar(200) NOT NULL,
  `U_ACCESS_VIEW` varchar(200) NOT NULL,
  `V_USER_ID` varchar(200) NOT NULL,
  `V_UP_TIME` varchar(200) NOT NULL,
  `V_CR_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`U_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dash_users`
--

INSERT INTO `dash_users` (`U_ID`, `U_USERNAME`, `U_GENDER`, `U_PASSWORD`, `U_EMAIL`, `U_CONTACT`, `U_ADDRESS`, `U_COUNTRY`, `U_STATE`, `U_CITY`, `U_PINCODE`, `U_ACTIVE`, `V_LANG_CODE`, `U_ACCESS_UPDATE`, `U_ACCESS_INSERT`, `U_ACCESS_DELETE`, `U_ACCESS_VIEW`, `V_USER_ID`, `V_UP_TIME`, `V_CR_TIME`) VALUES
(1, 'Organic', 'male', 'Organic@123', 'Organic@email.com', '000', 'india', '0', '0', '0', '0', 'Y', 'en', '0', '0', '', '', '', '', '2019-09-26 12:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_con`
--

DROP TABLE IF EXISTS `dealer_con`;
CREATE TABLE IF NOT EXISTS `dealer_con` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Dealer_Name` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Phone_Number` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `License_No` varchar(100) DEFAULT NULL,
  `Issue_Date` varchar(100) DEFAULT NULL,
  `Expiry_Date` varchar(100) DEFAULT NULL,
  `License_Issue_by` varchar(100) DEFAULT NULL,
  `Pincode` varchar(100) DEFAULT NULL,
  `record_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer_con`
--

INSERT INTO `dealer_con` (`id`, `Dealer_Name`, `Address`, `City`, `District`, `State`, `Phone_Number`, `Email`, `License_No`, `Issue_Date`, `Expiry_Date`, `License_Issue_by`, `Pincode`, `record_date`) VALUES
(70, 'new dealer', 'dsf', 'Kashipuri', 'Bhilwara', 'Rajasthan', '7879779', 'test@EMAI.CO', '4654', '09-08-2022', '24-08-2022', '456', '311001', '2022-08-09 16:00:22'),
(69, 'khush mohmmad', 'near bob', 'Phulia', 'Bhilwara', 'Rajasthan', '790903270', 'khush@gmail.com', '789456', '02-08-2022', 'YYY-August-Monday', 'govt', '311407', '2022-08-09 14:35:39'),
(71, 'test', 'test@emailcom.com', 'Kanechan Khurd', 'Bhilwara', 'Rajasthan', 'test', 'test@emailcom.com', 'test', '08-08-2022', '30-08-2022', 'test', '311407', '2022-08-10 08:21:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
