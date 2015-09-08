-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 11:50 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `treasurehunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`No` int(3) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`No`, `Answer`) VALUES
(1, 'd30fdf040aa774b893d3a0c084810a3e58b23cd8'),
(2, ''),
(3, '15f08a528de256562132d43c2b839c169762c4e2'),
(4, 'ba6cafbb79f37b099aaa87b00457d4bafb14c9ec'),
(5, '5ef01ba68308f9f69e07012e72067ce1d8cb3914'),
(6, '1ade92514c869605fe0b30de6d093ca1bbbd0ec8'),
(7, '2b97b59b881abec9297b4f3d80a1f0fc3b2bef49'),
(8, '4df083f0c046d838ab10ccbcfdeef7b4daab8fd8'),
(9, '164e5539078fda3c4a89ecbb88b0435218154b68'),
(10, 'fcfc5828398bdaa30efd594f54be4204ae6f067d'),
(11, '341c7bdf80b133eab3e22000f28003a101a33491'),
(12, '491e0011bae2d4e806c18cd0d1068a7f77956eba'),
(13, 'eb8e6f43905adc54cd1c01cc31ade5e2d5cb2ac7'),
(14, 'df2c48670f5d3e38a655fe3f57a8ec08c3e1083d'),
(15, 'e16cb46ee94e923d65f32311c5b1031134cc4477');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `UserId` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `AnsNo` int(3) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Attempts` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`UserId`, `Name`, `AnsNo`, `Time`, `Attempts`) VALUES
('111', 'aaa', 8, '2014-12-31 07:39:24', NULL),
('333', 'YYY', 8, '2014-12-31 07:20:05', NULL),
('444', 'qqq', 6, '2015-01-04 19:50:32', 1),
('555', 'www', 6, '2015-01-01 07:28:11', NULL),
('777', 'rterse', 6, '2015-01-01 07:44:47', NULL),
('999', 'hi', 7, '2015-01-04 19:49:48', 2),
('K02', '', 3, '2015-01-20 17:45:08', 9),
('K03', 'kkk', 0, '2015-01-20 17:08:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `disqualify`
--

CREATE TABLE IF NOT EXISTS `disqualify` (
  `UserId` varchar(20) NOT NULL,
  `UserName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disqualify`
--

INSERT INTO `disqualify` (`UserId`, `UserName`) VALUES
('K01', 'Pro');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
`Nos` int(20) NOT NULL,
  `AnsNo` int(3) NOT NULL,
  `UserId` varchar(15) NOT NULL,
  `Entries` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`Nos`, `AnsNo`, `UserId`, `Entries`, `Time`) VALUES
(51, 3, 'K01', 'zx', '2015-01-20 07:26:27'),
(52, 2, 'K01', '123456', '2015-01-20 10:19:07'),
(53, 2, 'K01', '12345', '2015-01-20 10:23:40'),
(54, 2, 'K01', '12345', '2015-01-20 10:26:56'),
(55, 2, 'K01', '12345', '2015-01-20 10:27:53'),
(56, 3, 'K01', 'ka', '2015-01-20 10:34:42'),
(57, 3, 'K01', 'karai', '2015-01-20 10:34:55'),
(58, 3, 'K01', 'jlkdaj', '2015-01-20 10:35:02'),
(59, 3, 'K01', '123', '2015-01-20 10:35:10'),
(60, 4, 'K01', 'jk', '2015-01-20 10:35:27'),
(61, 2, 'K01', '12345', '2015-01-20 10:49:22'),
(62, 2, 'K01', '12345', '2015-01-20 10:56:52'),
(63, 2, 'K01', '123456', '2015-01-20 10:57:51'),
(64, 2, 'K01', '123456', '2015-01-20 10:57:58'),
(65, 2, 'K01', '123456', '2015-01-20 11:00:11'),
(66, 2, 'K01', '123456', '2015-01-20 11:00:21'),
(67, 2, 'K01', '123456', '2015-01-20 11:00:55'),
(68, 2, 'K01', '123456', '2015-01-20 11:01:24'),
(69, 2, 'K01', '123456', '2015-01-20 11:02:39'),
(70, 2, 'K02', '123', '2015-01-20 11:11:38'),
(71, 6, 'K02', 'dafgshjdkflg', '2015-01-20 16:46:20'),
(72, 6, 'K02', 'dfgh', '2015-01-20 16:46:28'),
(73, 6, 'K02', 'xcvb', '2015-01-20 16:46:34'),
(74, 6, 'K02', '%$@!@#$%^', '2015-01-20 16:46:52'),
(75, 6, 'K02', 'dfgh', '2015-01-20 17:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `UserId` varchar(15) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Starttime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`UserId`, `Name`, `Starttime`) VALUES
('111', 'xxx', '0000-00-00 00:00:00'),
('333', 'yyy', '2014-12-31 02:25:47'),
('444', 'qqq', '2014-12-31 13:13:35'),
('555', 'www', '2015-01-01 00:39:08'),
('777', 'sfa', '2015-01-01 13:08:05'),
('999', 'hi', '2015-01-01 13:55:10'),
('K02', '', '0000-00-00 00:00:00'),
('K03', 'kkk', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`QNo` int(3) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Imgno` int(5) NOT NULL,
  `Img1` varchar(100) DEFAULT NULL,
  `Img2` varchar(100) DEFAULT NULL,
  `Img3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QNo`, `Question`, `Imgno`, `Img1`, `Img2`, `Img3`) VALUES
(1, 'What you missed is back', 1, 'q1\\LABYRINTH.png', '', ''),
(2, 'You always have it', 2, 'q2\\u.jpg', 'q2\\yellow_book.jpg', ''),
(3, 'East or west your place is the best', 2, 'q3\\q3_1.jpg', 'q3\\q3_2.jpg', ''),
(4, 'An author', 2, 'q4\\q4_1.jpeg', 'q4\\q4_2.jpg', ''),
(5, 'Winter is coming', 2, 'q5\\q5_1.jpg', 'q5\\q5_2.jpg', ''),
(6, '', 1, 'q6\\q6_1.jpg', '', ''),
(7, '', 2, 'q7\\q7_1.jpg', 'q7\\q7_2.png', ''),
(8, '', 3, 'q8\\q8_1.jpg', 'q8\\q8_2.jpg', 'q8\\q8_3.jpg'),
(9, '', 2, 'q9\\q9_1.jpg', 'q9\\q9_2.png', ''),
(10, '', 1, 'q10\\q10.jpg', '', ''),
(11, '', 2, 'q11\\q11_1.jpg', 'q11\\q11_2.png', ''),
(12, '', 1, 'q12\\q12.gif', '', ''),
(13, '', 2, 'q13\\q13_1.jpg', 'q13\\q13_2.jpg', ''),
(14, '', 3, 'q14\\q14_1.jpg', 'q14\\q14_2.jpg', 'q14\\q14_3.jpg'),
(15, '', 2, 'q15\\q15_1.jpg', 'q15\\q15_2.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
 ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `disqualify`
--
ALTER TABLE `disqualify`
 ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
 ADD PRIMARY KEY (`Nos`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`QNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `No` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
MODIFY `Nos` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `QNo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
