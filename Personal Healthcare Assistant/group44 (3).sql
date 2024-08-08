-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 06:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group44`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `NIC` varchar(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Bday` varchar(255) NOT NULL,
  `MaritialStatus` varchar(255) NOT NULL,
  `HomeTown` varchar(255) NOT NULL,
  `HomeAddress` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `Lnumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`NIC`, `Fname`, `Lname`, `Bday`, `MaritialStatus`, `HomeTown`, `HomeAddress`, `Pnumber`, `Lnumber`, `Email`, `Identity`) VALUES
('5001', 'doctor1', 'doctor1', '11.08.1967', 'married', 'manchester', '30  Hickman Court,Manchester,United Kingdom', '+99 2094350', '+55 8948673', 'doctor1@gmail.com', 'demoidentity.pdf'),
('5002', 'doctor2', 'doctor2', '21.11.1998', 'single', 'manchester', '15  Orchard Gardens,Manchester,United Kingdom', '+97 5609284', '+55 7934207', 'doctor2@gmail.com', 'demoidentity.pdf'),
('5003', 'doctor3', 'doctor3', '20.02.2000', 'single', 'london', '91 Station Road London WC80 5KQ', '+79 5936482', '+55 6934792', 'doctor3@gmail.com', 'demoidentity.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `Rnumber` varchar(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `Lnumber` varchar(255) NOT NULL,
  `Fax` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Web` varchar(255) NOT NULL,
  `Identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`Rnumber`, `Name`, `Address`, `pnumber`, `Lnumber`, `Fax`, `Email`, `Web`, `Identity`) VALUES
('4001', 'lab1', '91 Station Road London WC80 5KQ', '+22 7443213', '+76 7443213', '+76 7443213', 'lab1@gmail.com', 'lab1.com', 'demo certificate.pdf'),
('4002', 'lab2', '68 North Street London SW65 3FA', '+67 4533234', '+99 5643298', '+67 4533234', 'lab2@gmail.com', 'lab2.com', 'demo certificate.pdf'),
('4003', 'lab3', '9928 Chester Road London EC34 0LS', '+88 5647976', '+75 5647976', '+88 5647976', 'lab3@gamil.com', 'lab3.com', 'demo certificate.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `NIC` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NIC`, `username`, `password`, `usertype`) VALUES
('2003', 'patient1', 'patient1', 'patient'),
('2004', 'patient2', 'patient2', 'patient'),
('2005', 'patient3', 'patient3', 'patient'),
('333', 'admin', 'admin1', 'admin'),
('4001', 'lab1', 'lab1', 'Laboratory'),
('4002', 'lab2', 'lab2', 'Laboratory'),
('4003', 'lab3', 'lab3', 'Laboratory'),
('5001', 'doctor1', 'doctor1', 'doctor'),
('5002', 'doctor2', 'doctor2', 'doctor'),
('5003', 'doctor3', 'doctor3', 'doctor'),
('9001', 'healthcare', 'healthcare1', 'pharmacy'),
('9002', 'abc', 'abc1', 'pharmacy'),
('9003', 'wellness', 'wellness1', 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `NIC` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Bday` varchar(255) NOT NULL,
  `MaritialStatus` varchar(255) NOT NULL,
  `Diseases` varchar(255) NOT NULL,
  `Allergies` varchar(255) NOT NULL,
  `HomeTown` varchar(255) NOT NULL,
  `HomeAddress` varchar(255) NOT NULL,
  `Pnumber` varchar(255) NOT NULL,
  `Lnumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Fdoctor` varchar(255) NOT NULL,
  `Identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`NIC`, `Fname`, `Lname`, `Bday`, `MaritialStatus`, `Diseases`, `Allergies`, `HomeTown`, `HomeAddress`, `Pnumber`, `Lnumber`, `Email`, `Fdoctor`, `Identity`) VALUES
(2003, 'patient1', 'patient1', '2003.03.03', 'single', 'Cholestrol', 'no', 'london', '55 Main Street London N68 9DX', '+55 5739256', '+44 5739234', 'patient1@gmail.com', 'doctor1', 'demoidentity.pdf'),
(2004, 'patient2', 'patient2', '04.05.1995', 'married', 'diabetic', 'vitamin c vitamin b', 'london', '308 Church Street London E60 7CO', '+23 4555322', '+44 5744882', 'patient2@gmail.com', 'doctor1', 'demoidentity.pdf'),
(2005, 'patient3', 'patient3', '11.09.1988', 'married', 'no', 'no', 'manchester', '5  Woodland Road,Manchester,United Kingdom', '+99 2546774 ', '+55 2546774 ', 'patient3@gmail.com', 'doctor2', 'demoidentity.pdf'),
(2006, 'patient4', 'patient4', '21.09.2003', 'single', 'diabetes, cholestrol', 'vitamin c', 'manchester', '4  Clay Lane,Manchester,United Kingdom', '+99 4678936', '+55 4678936', 'patient4@gmail.com', 'doctor2', 'demoidentity.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `Rnumber` varchar(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `Lnumber` varchar(255) NOT NULL,
  `Fax` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Web` varchar(255) NOT NULL,
  `Identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`Rnumber`, `Name`, `Address`, `pnumber`, `Lnumber`, `Fax`, `Email`, `Web`, `Identity`) VALUES
('9001', 'health care ', '68 North Street London SW65 3FA', '+88 3589562', '+99 5643298', '+89  4545345', 'healthcare@gmail.com', 'healthcare.com', 'demo certificate.pdf'),
('9002', 'ABC pharmacy', '91 Queensway London W96 2FW', '+67 5420984', '+99 5743298', '+67 5420984', 'abc@gmail.com', 'abchealth.com', 'demo certificate.pdf'),
('9003', 'wellness pharmacy', '28  Stalland Lane,Manchester,United Kingdom', '+45 6734926', '+78 5730845', '+66 4973654', 'welness@gmail.com', 'welness.com', 'demo certificate.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `Pid` int(11) NOT NULL,
  `Pnic` varchar(255) NOT NULL,
  `Dnic` varchar(255) NOT NULL,
  `Prescription` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`Pid`, `Pnic`, `Dnic`, `Prescription`, `Time`) VALUES
(15, '2003', '5001', 'demo prescription 2', '2023-04-23 16:31:47 '),
(16, '2003', '5001', 'demo prescription 3', '2023-04-23 16:32:26 '),
(17, '2004', '5001', 'demo prescription 4', '2023-04-23 16:36:38 '),
(18, '2004', '5001', 'demo prescription5', '2023-04-23 16:37:04 '),
(19, '2005', '5001', 'demo prescription 6', '2023-04-23 16:38:18 '),
(20, '2006', '5001', 'demo prescription 7', '2023-04-23 16:38:53 '),
(21, '2003', '5002', 'demo prescription 8', '2023-04-23 16:40:57 '),
(22, '2005', '5002', 'demo prescription 9', '2023-04-23 16:41:43 '),
(23, '2006', '5002', 'demo prescription 10', '2023-04-23 16:42:06 '),
(24, '2003', '5003', 'demo prescription 11', '2023-04-23 16:44:46 '),
(25, '2004', '5003', 'demo prescription 12', '2023-04-23 16:44:59 '),
(26, '2003', '5003', 'demo prescription 13', '2023-04-23 16:47:07 '),
(27, '2004', '5003', 'demo prescription 14\r\n', '2023-04-23 16:47:17 '),
(29, '2003', '5003', 'demo prescription 15', '2023-04-23 16:49:44 ');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `Pnic` varchar(255) NOT NULL,
  `labname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `Pnic`, `labname`, `type`, `report`, `date`) VALUES
(10, '2003', '4001', 'blood', 'demo report.pdf', '2023-04-23 17:06:04 '),
(11, '2003', '4001', 'cholesterol', 'demo report.pdf', '2023-04-23 17:09:33 '),
(12, '2004', '4001', 'blood', 'demo report.pdf', '2023-04-23 17:12:20 '),
(13, '2004', '4001', 'cholesterol', 'demo report.pdf', '2023-04-23 17:12:39 '),
(14, '2005', '4001', 'blood', 'demo report.pdf', '2023-04-23 17:13:05 '),
(15, '2005', '4001', 'cholesterol', 'demo report.pdf', '2023-04-23 17:13:22 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`Rnumber`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`Rnumber`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
