-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2021 at 05:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(10) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

CREATE TABLE `clerk` (
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `UserId` varchar(20) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin NOT NULL,
  `IdNumber` varchar(30) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(7) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`Name`, `Email`, `UserId`, `Password`, `IdNumber`, `Gender`) VALUES
('Rajesh Kumar', 'r@email.com', 'raj2000', '123456789', '856321452365', 'male'),
('Sam', 'sam@email.com', 's123', '123456789', '854632145263', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `ShowId` varchar(30) COLLATE utf8_bin NOT NULL,
  `ShowName` varchar(30) COLLATE utf8_bin NOT NULL,
  `TotalExpenses` int(10) NOT NULL,
  `TotalIncome` int(10) NOT NULL,
  `AdsIncome` int(10) NOT NULL,
  `OtherIncome` int(10) NOT NULL,
  `TicketIncome` int(10) NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`ShowId`, `ShowName`, `TotalExpenses`, `TotalIncome`, `AdsIncome`, `OtherIncome`, `TicketIncome`, `Year`) VALUES
('89654', 'Arijit Singh Concert', 500000, 601800, 500000, 100000, 1800, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `salesperson`
--

CREATE TABLE `salesperson` (
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `UserId` varchar(10) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin NOT NULL,
  `IdNumber` varchar(20) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(6) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `salesperson`
--

INSERT INTO `salesperson` (`Name`, `UserId`, `Password`, `IdNumber`, `Gender`, `Email`) VALUES
('rahul', '456789', '123456789', '564612368945', 'male', 'rahul@email.com'),
('Rajesh Kumar', '789456', '123456789', '987654321012', 'male', 'nigamkpranav@gmail.com'),
('Pranavkant Nigam', 'Pranav1999', '123456789', '788604089419', 'male', 'nigamkpranav@gmail.com'),
('Rashmi', 'Rashmi2000', '123456789', '564231456956', 'female', 'rashmi@email.com'),
('Aditi', 'ad1999', '123456789', '756541236562', 'female', 'aditi@email.com'),
('Lizard', 'liz456', '123456789', '852036985236', 'female', 'liz@email.com'),
('Pranavkant Nigam', 'pk1999', '123456789', '456512321253', 'male', 'nigamkpranav@gmail.com'),
('Pranavkant Nigam', 'pk19999', '123456789', '456512354895', 'male', 'nigamkpranav@gmail.com'),
('raju', 'raj2000', '9340781147', '152634353659', 'male', 'raju@email.com'),
('Raju', 'raju2000', '123456789', '756445691234', 'male', 'raju@gmail.com'),
('Sam', 's123', '123456789', '854612365236', 'male', 'sam@email.com'),
('Sahil', 'sahil1236', '123456789', '854563212365', 'male', 'sahil@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `totalSeats` int(11) NOT NULL,
  `premiumSeats` int(11) NOT NULL,
  `normalSeats` int(11) NOT NULL,
  `premiumBooked` int(20) NOT NULL,
  `normalBooked` int(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `showId` varchar(20) COLLATE utf8_bin NOT NULL,
  `premiumPrice` int(11) NOT NULL,
  `normalPrice` int(11) NOT NULL,
  `seatsBooked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`name`, `date`, `time`, `totalSeats`, `premiumSeats`, `normalSeats`, `premiumBooked`, `normalBooked`, `amount`, `showId`, `premiumPrice`, `normalPrice`, `seatsBooked`) VALUES
('Movie', '2021-12-25', '15:00:00', 105, 35, 70, 0, 0, 0, '10000', 200, 100, 0),
('Music Show', '2021-12-12', '06:05:00', 150, 50, 100, 5, 0, 600, '12345', 300, 100, 5),
('TVF Show', '2021-12-25', '23:20:00', 300, 100, 200, 3, 0, 1800, '56236', 600, 400, 3),
('Horror', '2021-12-12', '23:00:00', 50, 20, 30, 1, 2, 500, '85234', 500, 200, 3),
('Arijit Singh Concert', '2021-12-25', '15:00:00', 30, 10, 20, 3, 1, 1800, '89654', 500, 300, 4);

-- --------------------------------------------------------

--
-- Table structure for table `spectator`
--

CREATE TABLE `spectator` (
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `UserId` varchar(30) COLLATE utf8_bin NOT NULL,
  `IdNumber` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(7) COLLATE utf8_bin NOT NULL,
  `Password` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `spectator`
--

INSERT INTO `spectator` (`Name`, `UserId`, `IdNumber`, `Email`, `Gender`, `Password`) VALUES
('Pranavkant Nigam', 'pk1999', '788604089419', 'nigamkpranav@gmail.com', 'male', '123456789'),
('Rajesh Kumar', 'raj2000', '123654789562', 'raj@email.com', 'male', '123456789'),
('raju', 'raju1234', '854562123652', 'raju@gmail.com', 'male', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ShowId` varchar(20) COLLATE utf8_bin NOT NULL,
  `SeatType` varchar(20) COLLATE utf8_bin NOT NULL,
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `IdNumber` varchar(30) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(7) COLLATE utf8_bin NOT NULL,
  `TicketId` varchar(100) COLLATE utf8_bin NOT NULL,
  `SeatNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ShowId`, `SeatType`, `Name`, `IdNumber`, `Gender`, `TicketId`, `SeatNumber`) VALUES
('85234', 'normal', 'Ashish', '856545236523', 'male', 'Ashish856545236523', 16),
('89654', 'normal', 'Birju', '564512324562', 'male', 'Birju564512324562', 14),
('89654', 'premium', 'James', '785421232125', 'male', 'James785421232125', 3),
('89654', 'premium', 'James', '895623123654', 'male', 'James895623123654', 37),
('89654', 'premium', 'Pranavkant Nigam', '154565789564', 'male', 'Pranavkant Nigam154565789564', 26),
('56236', 'premium', 'Pranavkant Nigam', '856412365231', 'male', 'Pranavkant Nigam856412365231', 35),
('85234', 'premium', 'Rajesh', '123654789632', 'male', 'Rajesh123654789632', 20),
('89654', 'normal', 'Rajesh', '458545652123', 'male', 'Rajesh458545652123', 36),
('89654', 'premium', 'Rk', '521365412512', 'male', 'Rk521365412512', 123),
('56236', 'premium', 'raju', '789564524125', 'male', 'raju789564524125', 39),
('12345', 'premium', 'ramesh', '451236545623', 'male', 'ramesh451236545623', 18),
('56236', 'premium', 'sameer', '589645632365', 'male', 'sameer589645632365', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `clerk`
--
ALTER TABLE `clerk`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`,`UserId`,`IdNumber`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`ShowId`),
  ADD UNIQUE KEY `ShowId` (`ShowId`);

--
-- Indexes for table `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserId` (`UserId`,`IdNumber`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`showId`),
  ADD UNIQUE KEY `showId` (`showId`);

--
-- Indexes for table `spectator`
--
ALTER TABLE `spectator`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserId` (`UserId`,`IdNumber`,`Email`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`TicketId`),
  ADD UNIQUE KEY `IdNumber` (`IdNumber`,`TicketId`,`SeatNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
