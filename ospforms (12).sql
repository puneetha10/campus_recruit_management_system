-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 07:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ospforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` text NOT NULL,
  `AEID` text NOT NULL,
  `APASS` text NOT NULL,
  `APH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `AEID`, `APASS`, `APH`) VALUES
(1, 'admin', 'admin@gmail.com', 'adminadmin', '9696696966');

-- --------------------------------------------------------

--
-- Table structure for table `applyjobs`
--

CREATE TABLE `applyjobs` (
  `APID` int(11) NOT NULL,
  `APCOMPANY` varchar(50) NOT NULL,
  `STMAIL` varchar(50) NOT NULL,
  `SNAME` varchar(50) NOT NULL,
  `SMOBILE` varchar(50) NOT NULL,
  `SKILLS` varchar(50) NOT NULL,
  `PROJECTS` varchar(50) NOT NULL,
  `APEMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyjobs`
--

INSERT INTO `applyjobs` (`APID`, `APCOMPANY`, `STMAIL`, `SNAME`, `SMOBILE`, `SKILLS`, `PROJECTS`, `APEMAIL`) VALUES
(1, 'Virtusa', 'puneethaminnalla789@gmail.com', 'Minnallagari Puneetha Reddy', '9603345831', 'PHP,HTML,C LANGUAGE', 'campus recruitment management system, movie ticket', 'virtusa@gmail.com'),
(2, 'Qualcomm', 'puneethaminnalla789@gmail.com', 'Minnallagari Puneetha Reddy', '9603345831', 'PHP,HTML,C LANGUAGE', 'campus recruitment management system, movie ticket', 'qualcomm@gmail.com'),
(3, 'Qualcomm', 'sumanth.atchi@gmail.com', 'Atchi Sumanth', '8919240391', 'PHP,HTML,C LANGUAGE,Python', 'campus recruitment management system', 'qualcomm@gmail.com'),
(4, 'Intel', 'sumanth.atchi@gmail.com', 'Atchi Sumanth', '8919240391', 'PHP,HTML,C LANGUAGE,Python', 'campus recruitment management system', 'intel@gmail.com'),
(5, 'Intel', 'kritti.chaturvedi@gmail.com', 'Kritti Chaturvedi', '9008946291', 'PHP,HTML,C LANGUAGE', 'campus recruitment management system', 'intel@gmail.com'),
(6, 'Virtusa', 'kritti.chaturvedi@gmail.com', 'Kritti Chaturvedi', '9008946291', 'PHP,HTML,C LANGUAGE', 'campus recruitment management system', 'virtusa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `CID` int(11) NOT NULL,
  `FNAME` text NOT NULL,
  `LNAME` text NOT NULL,
  `EID` text NOT NULL,
  `PHNO` text NOT NULL,
  `QUERY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`CID`, `FNAME`, `LNAME`, `EID`, `PHNO`, `QUERY`) VALUES
(1, 'Minnallagari ', 'Puneetha Reddy', 'puneethaminnalla789@gmail.com', '9603345831', 'How do I apply for companies ?'),
(2, 'Atchi', 'Sumanth Raju', 'sumanth.atchi@gmail.com', '8919240391', 'How do I apply for companies ?'),
(3, 'Kritti', 'Chaturvedi', 'kritti.chaturvedi@gmail.com', '9008946291', 'How do I apply for companies ?');

-- --------------------------------------------------------

--
-- Table structure for table `cusers`
--

CREATE TABLE `cusers` (
  `CID` int(11) NOT NULL,
  `CNAME` text NOT NULL,
  `CEID` text NOT NULL,
  `CPASS` text NOT NULL,
  `CPH` text NOT NULL,
  `CHEAD` varchar(50) NOT NULL,
  `CSIZE` varchar(50) NOT NULL,
  `CINFO` varchar(50) NOT NULL,
  `CIND` varchar(50) NOT NULL,
  `CFDB` varchar(50) NOT NULL,
  `CTYP` varchar(50) NOT NULL,
  `CWEB` varchar(50) NOT NULL,
  `CINT` blob NOT NULL,
  `CSPE` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cusers`
--

INSERT INTO `cusers` (`CID`, `CNAME`, `CEID`, `CPASS`, `CPH`, `CHEAD`, `CSIZE`, `CINFO`, `CIND`, `CFDB`, `CTYP`, `CWEB`, `CINT`, `CSPE`) VALUES
(5, 'Qualcomm', 'qualcomm@gmail.com', '83217034da797b1dd0275d63db7d3234', '9999999999', 'North America', '23k', 'one of the top companies', 'IT', 'Sreenivas', 'Software', 'www.qualcomm.com', 0x696e74726f, 0x7370656369616c6974696573),
(6, 'Virtusa', 'virtusa@gmail.com', '06974e3fe6f40cb948babf201bb5c7ed', '8888888888', 'Australia', '10k', 'one of the top companies', 'IT', 'Sunayana', 'Software', 'www.virtusa.com', 0x696e74726f, 0x7370656369616c6974696573),
(7, 'Intel', 'intel@gmail.com', 'e0be216639a5782ea1ad7121b0d577c7', '7777777777', 'UK', '25k', 'one of the top companies', 'IT', 'Aadya', 'Software', 'www.intel.com', 0x696e74726f, 0x7370656369616c6974696573);

-- --------------------------------------------------------

--
-- Table structure for table `postjobs`
--

CREATE TABLE `postjobs` (
  `companyname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `jobtype` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postjobs`
--

INSERT INTO `postjobs` (`companyname`, `email`, `venue`, `jobtype`, `salary`) VALUES
('Qualcomm', 'qualcomm@gmail.com', 'Banglore', 'super dream placement', '10,00,000 (per annum)'),
('Virtusa', 'virtusa@gmail.com', 'Banglore', 'dream internship', '6,00,000 (per annum)'),
('Intel', 'intel@gmail.com', 'Hyderabad', 'dream placement', '7,00,000 (per annum)');

-- --------------------------------------------------------

--
-- Table structure for table `studentexp`
--

CREATE TABLE `studentexp` (
  `EXID` int(11) NOT NULL,
  `email` text NOT NULL,
  `cname` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `suggestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentexp`
--

INSERT INTO `studentexp` (`EXID`, `email`, `cname`, `salary`, `mode`, `experience`, `suggestion`) VALUES
(21, 'puneethaminnalla789@gmail.com', 'Qualcomm', '10 lakhs per annum', 'Teams', 'good', 'nothing'),
(22, 'sumanth.atchi@gmail.com', 'Intel', '20 lakhs per annum', 'Google meet', 'good', 'nothing'),
(23, 'kritti.chaturvedi@gmail.com', 'Virtusa', '10,00,000 (per annum)', 'teams', 'good', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `PHONE` text NOT NULL,
  `SKILLS` text NOT NULL,
  `PROJECTS` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NAME`, `EMAIL`, `PASSWORD`, `PHONE`, `SKILLS`, `PROJECTS`, `ID`) VALUES
('Minnallagari Puneetha Reddy ', 'puneethaminnalla789@gmail.com', 'a5fb5fcda2601cc761dd5d65ed61ba6c', '9603345831', 'PHP,HTML,C LANGUAGE', 'campus recruitment management system, movie ticket management system', 13),
('Kritti Chaturvedi', 'kritti.chaturvedi@gmail.com', 'cb7cbeaf10ec34c038f9344b34a5a2fd', '9008946291', 'PHP,HTML,C LANGUAGE', 'campus recruitment management system', 14),
('Atchi Sumanth', 'sumanth.atchi@gmail.com', 'e0390b913fbc0d69dfb5eed342269846', '8919240391', 'PHP,HTML,C LANGUAGE, Python', 'campus recruitment management system', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `applyjobs`
--
ALTER TABLE `applyjobs`
  ADD PRIMARY KEY (`APID`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `cusers`
--
ALTER TABLE `cusers`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `studentexp`
--
ALTER TABLE `studentexp`
  ADD PRIMARY KEY (`EXID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applyjobs`
--
ALTER TABLE `applyjobs`
  MODIFY `APID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cusers`
--
ALTER TABLE `cusers`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentexp`
--
ALTER TABLE `studentexp`
  MODIFY `EXID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
