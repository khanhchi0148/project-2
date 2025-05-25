-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: May 19, 2025 at 04:39 AM
=======
-- Generation Time: May 22, 2025 at 11:15 AM
>>>>>>> 0f029fe0ada220fa1e5c8b88c318cce65198e95a
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
<<<<<<< HEAD
-- Database: `expression of interest(eoi)`
=======
-- Database: `pj_p2_db`
>>>>>>> 0f029fe0ada220fa1e5c8b88c318cce65198e95a
--

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `JobRefNumber` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `StreetAddress` varchar(40) NOT NULL,
  `Suburb` varchar(40) NOT NULL,
  `State` enum('VIC','NSW','QLD','NT','WA','SA','TAS','ACT') NOT NULL,
<<<<<<< HEAD
  `Postcode` char(4) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `skill1` varchar(50) DEFAULT NULL,
  `skill2` varchar(50) DEFAULT NULL,
  `skill3` varchar(50) DEFAULT NULL,
  `skill4` varchar(50) DEFAULT NULL,
  `OtherSkills` text DEFAULT NULL,
=======
  `Postcode` int(4) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Skills` varchar(50) DEFAULT NULL,
  `OtherSkills` varchar(200) DEFAULT NULL,
>>>>>>> 0f029fe0ada220fa1e5c8b88c318cce65198e95a
  `Status` enum('New','Current','Final') NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
<<<<<<< HEAD
=======
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`EOInumber`, `JobRefNumber`, `FirstName`, `LastName`, `StreetAddress`, `Suburb`, `State`, `Postcode`, `Email`, `Phone`, `Skills`, `OtherSkills`, `Status`) VALUES
(1, 'CA096', 'wwdwdw', 'dwdwd', 'helllo', 'lol', 'VIC', 1212, 'hu@gmail.com', '1212', '', 'wdwdwdw', 'New'),
(2, 'CA122', 'deded', 'edded', 'ededed', 'dededed', 'TAS', 1212, 'dh@gmail.com', '10101001010', '', 'ceece', 'New'),
(3, 'CA122', 'deded', 'edded', 'ededed', 'dededed', 'TAS', 1212, 'dh@gmail.com', '10101001010', '', 'ceece', 'New'),
(4, 'CA122', 'John', 'Smith', 'High St', 'Canberra', 'NSW', 1023, '', '0403912786', 'Python', 'Nothing else', 'New');

--
>>>>>>> 0f029fe0ada220fa1e5c8b88c318cce65198e95a
-- Indexes for dumped tables
--

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
<<<<<<< HEAD
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> 0f029fe0ada220fa1e5c8b88c318cce65198e95a
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
