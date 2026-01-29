-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2026 at 04:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iarwfh`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailyaccompinformation`
--

CREATE TABLE `dailyaccompinformation` (
  `dailyaccompid` int(11) NOT NULL,
  `taskoutputid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dailyaccompinformation`
--

INSERT INTO `dailyaccompinformation` (`dailyaccompid`, `taskoutputid`, `date`, `status`) VALUES
(3569, 5715, '2026-01-21 14:39:46', 'VAPT Done.');

-- --------------------------------------------------------

--
-- Table structure for table `designationinformation`
--

CREATE TABLE `designationinformation` (
  `designationid` int(11) NOT NULL,
  `designationdescription` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `designationinformation`
--

INSERT INTO `designationinformation` (`designationid`, `designationdescription`) VALUES
(1, 'Director'),
(2, 'Assistant Director'),
(3, 'Division Chief'),
(4, 'Section Chief'),
(5, 'Head'),
(6, 'Employee'),
(7, 'Unit Head');

-- --------------------------------------------------------

--
-- Table structure for table `divisioninformation`
--

CREATE TABLE `divisioninformation` (
  `id` int(11) NOT NULL,
  `divisionid` varchar(20) NOT NULL,
  `divisiondescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `divisioninformation`
--

INSERT INTO `divisioninformation` (`id`, `divisionid`, `divisiondescription`) VALUES
(1, 'KISS-NIMD', 'KISS - Network and Infrastructure Management Division');

-- --------------------------------------------------------

--
-- Table structure for table `employeeofficeinformation`
--

CREATE TABLE `employeeofficeinformation` (
  `employeeofficeid` int(11) NOT NULL,
  `divisionid` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `designationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employeeofficeinformation`
--

INSERT INTO `employeeofficeinformation` (`employeeofficeid`, `divisionid`, `userid`, `sectionid`, `designationid`) VALUES
(480, 'KISS-NIMD', 358, 0, 6),
(482, 'KISS-NIMD', 359, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE `personalinformation` (
  `id` int(11) NOT NULL,
  `EmployeeId` varchar(50) NOT NULL,
  `dateAdded` timestamp NULL DEFAULT NULL,
  `divisionid` varchar(10) NOT NULL,
  `empStatus` int(11) NOT NULL,
  `causeofSeparation` varchar(20) NOT NULL,
  `dateofSeparation` date NOT NULL,
  `designation` varchar(100) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `extensionName` varchar(10) NOT NULL,
  `birthDate` date NOT NULL,
  `citizenship` int(11) DEFAULT NULL,
  `birthPlace` varchar(250) NOT NULL,
  `dualcitizenship` int(11) DEFAULT NULL,
  `dualcitizenshipcountry` varchar(50) NOT NULL,
  `sex` int(11) DEFAULT NULL,
  `civilStatus` int(11) DEFAULT NULL,
  `civilStatusOthers` varchar(50) DEFAULT NULL,
  `height_m` varchar(20) NOT NULL,
  `height_ft` double NOT NULL,
  `height_in` double NOT NULL,
  `weight` varchar(20) NOT NULL,
  `bloodType` varchar(20) NOT NULL,
  `gsisNo` varchar(20) NOT NULL,
  `pagibigNo` varchar(20) NOT NULL,
  `philhealthNo` varchar(20) NOT NULL,
  `sssNo` varchar(20) NOT NULL,
  `telephoneNo` varchar(20) NOT NULL,
  `tinNo` varchar(20) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `agencyNo` varchar(20) NOT NULL,
  `emailAdd` varchar(50) NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `VerifiedDate` date NOT NULL,
  `VerifiedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`id`, `EmployeeId`, `dateAdded`, `divisionid`, `empStatus`, `causeofSeparation`, `dateofSeparation`, `designation`, `surName`, `firstName`, `middleName`, `extensionName`, `birthDate`, `citizenship`, `birthPlace`, `dualcitizenship`, `dualcitizenshipcountry`, `sex`, `civilStatus`, `civilStatusOthers`, `height_m`, `height_ft`, `height_in`, `weight`, `bloodType`, `gsisNo`, `pagibigNo`, `philhealthNo`, `sssNo`, `telephoneNo`, `tinNo`, `mobileNo`, `agencyNo`, `emailAdd`, `isVerified`, `VerifiedDate`, `VerifiedBy`) VALUES
(97, '337538', '2018-10-03 19:11:29', 'KISS-NIMD', 0, '', '0000-00-00', '', 'ESTEFANIO', 'ENIELBERT', 'ESMEDIA', '', '1982-04-05', 0, 'ISABELA', 0, '0', 1, 2, '', '1.57', 0, 0, '70', 'B', 'crn-006-0010-9094-5', '107001528326', '02-000217873-8', '', '', '235-145-751', '', 'osec-denrb-infosa3-3', 'eeesmetefanio@gmail.com', 0, '0000-00-00', ''),
(59, '458103', '2018-09-18 18:57:40', 'KISS-NIMD', 0, '', '0000-00-00', '', 'IBUS', 'LOVELY GRACE', 'PRESTO', '', '1990-08-08', 0, 'JONES ISABELA', 0, '0', 2, 2, '', '1.55', 5, 1, '59', 'O', '2004825403', '1211-4563-2386', '02-000253658-8', '', '', '465-677-011-000', '09352333462', 'OSEC-DENRB-INFOSA3-3', 'prestolovely@gmail.com', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sectioninformation`
--

CREATE TABLE `sectioninformation` (
  `sectionid` int(11) NOT NULL,
  `divisionid` varchar(20) NOT NULL,
  `sectiondescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sectioninformation`
--

INSERT INTO `sectioninformation` (`sectionid`, `divisionid`, `sectiondescription`) VALUES
(1, 'KISS-NIMD', 'Network Section'),
(2, 'KISS-NIMD', 'Asset Management Section'),
(25, 'KISS-NIMD', 'Technical Support and Security Section');

-- --------------------------------------------------------

--
-- Table structure for table `taskoutputinformation`
--

CREATE TABLE `taskoutputinformation` (
  `taskoutputid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `task` varchar(500) NOT NULL,
  `output` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `taskoutputinformation`
--

INSERT INTO `taskoutputinformation` (`taskoutputid`, `userid`, `sdate`, `edate`, `task`, `output`) VALUES
(5714, 358, '2026-01-16', '2026-01-16', 'IPCR', 'Edit and share'),
(5715, 359, '2026-01-21', '2026-01-21', 'VAPT', '');

-- --------------------------------------------------------

--
-- Table structure for table `timerecordinformation`
--

CREATE TABLE `timerecordinformation` (
  `timerecordid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `timerecordinformation`
--

INSERT INTO `timerecordinformation` (`timerecordid`, `userid`, `date`, `timein`, `timeout`) VALUES
(29157, 48, '2026-01-12', '11:32:15', NULL),
(29158, 358, '2026-01-15', '13:57:30', '19:18:13'),
(29159, 358, '2026-01-16', '17:27:31', NULL),
(29160, 359, '2026-01-21', '14:38:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `empstatus` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `passcrypt` varchar(250) NOT NULL,
  `uniqueid` varchar(100) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `datecreated` date NOT NULL,
  `privilege` int(11) NOT NULL,
  `userstatus` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `surname`, `firstname`, `middlename`, `empstatus`, `username`, `empid`, `pass`, `passcrypt`, `uniqueid`, `salt`, `datecreated`, `privilege`, `userstatus`) VALUES
(48, 'ESTEFANIO, ENIELBERT', 'ESTEFANIO', 'ENIELBERT', 'ESMEDIA', '', 'eeestefanio', '337538', 'eeestefanio', 'O3r+WfPodrHJ6LqjxQqbBj7G44w5ZTJhOTk2NTEx', '69646acc00a434.95024220', '9e2a996511', '2020-06-11', 1, 'Active'),
(71, 'IBUS, LOVELY GRACE', 'IBUS', 'LOVELY GRACE', 'PRESTO', 'Permanent', 'lgpibus', '458103', '1', 'WYpwMB8ZtpTAUz1+Hwrp8BLBIlQyNWI0ZTczMDdl', '68816d9d264da4.87999601', '25b4e7307e', '2020-06-11', 1, 'Active'),
(358, 'SAMBAJON, REGINALD', 'SAMBAJON', 'REGINALD', 'BERONILLA', 'Permanent', 'rsambajon', 'DENR-2022-01032964', 'rsambajon', '3V0E+CzbST0erSVhOZPVP2FrKQUzMjQzODk0MTQz', '6968701223bbd1.77701401', '3243894143', '2026-01-15', 1, 'Active'),
(359, 'Vigil, Ronnel', 'Vigil', 'Ronnel', 'Bolivar', 'Permanent', 'rbvigil', 'DENR-2021-10011819', 'D3nr12345%%', 'LKIWXU38dG6R+zon9IVSL4Mtbfo1YmU4NDU3M2I0', '6970744601a2f2.81179451', '5be84573b4', '2026-01-21', 2, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `userlogId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`userlogId`, `userid`, `date`) VALUES
(64967, 48, '2026-01-12 11:30:44'),
(64968, 48, '2026-01-12 11:32:11'),
(64969, 48, '2026-01-15 11:11:37'),
(64970, 358, '2026-01-15 11:15:16'),
(64971, 358, '2026-01-15 12:41:55'),
(64972, 358, '2026-01-15 19:17:50'),
(64973, 358, '2026-01-16 07:21:58'),
(64974, 358, '2026-01-16 17:27:02'),
(64975, 358, '2026-01-21 14:33:55'),
(64976, 359, '2026-01-21 14:37:02'),
(64977, 359, '2026-01-21 14:37:21'),
(64978, 359, '2026-01-21 14:38:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailyaccompinformation`
--
ALTER TABLE `dailyaccompinformation`
  ADD PRIMARY KEY (`dailyaccompid`);

--
-- Indexes for table `designationinformation`
--
ALTER TABLE `designationinformation`
  ADD PRIMARY KEY (`designationid`);

--
-- Indexes for table `divisioninformation`
--
ALTER TABLE `divisioninformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeofficeinformation`
--
ALTER TABLE `employeeofficeinformation`
  ADD PRIMARY KEY (`employeeofficeid`);

--
-- Indexes for table `personalinformation`
--
ALTER TABLE `personalinformation`
  ADD PRIMARY KEY (`EmployeeId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sectioninformation`
--
ALTER TABLE `sectioninformation`
  ADD PRIMARY KEY (`sectionid`);

--
-- Indexes for table `taskoutputinformation`
--
ALTER TABLE `taskoutputinformation`
  ADD PRIMARY KEY (`taskoutputid`);

--
-- Indexes for table `timerecordinformation`
--
ALTER TABLE `timerecordinformation`
  ADD PRIMARY KEY (`timerecordid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`userlogId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailyaccompinformation`
--
ALTER TABLE `dailyaccompinformation`
  MODIFY `dailyaccompid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3570;

--
-- AUTO_INCREMENT for table `designationinformation`
--
ALTER TABLE `designationinformation`
  MODIFY `designationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `divisioninformation`
--
ALTER TABLE `divisioninformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employeeofficeinformation`
--
ALTER TABLE `employeeofficeinformation`
  MODIFY `employeeofficeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

--
-- AUTO_INCREMENT for table `personalinformation`
--
ALTER TABLE `personalinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `sectioninformation`
--
ALTER TABLE `sectioninformation`
  MODIFY `sectionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `taskoutputinformation`
--
ALTER TABLE `taskoutputinformation`
  MODIFY `taskoutputid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5716;

--
-- AUTO_INCREMENT for table `timerecordinformation`
--
ALTER TABLE `timerecordinformation`
  MODIFY `timerecordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29161;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `userlogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64979;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
