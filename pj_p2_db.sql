-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 02:57 AM
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
-- Database: `pj_p2_db`
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
  `Postcode` int(4) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Skills` varchar(50) DEFAULT NULL,
  `OtherSkills` varchar(200) DEFAULT NULL,
  `Status` enum('New','Current','Final') NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`EOInumber`, `JobRefNumber`, `FirstName`, `LastName`, `StreetAddress`, `Suburb`, `State`, `Postcode`, `Email`, `Phone`, `Skills`, `OtherSkills`, `Status`) VALUES
(1, 'CA096', 'wwdwdw', 'dwdwd', 'helllo', 'lol', 'VIC', 1212, 'hu@gmail.com', '1212', '', 'wdwdwdw', 'New'),
(2, 'CA122', 'deded', 'edded', 'ededed', 'dededed', 'TAS', 1212, 'dh@gmail.com', '10101001010', '', 'ceece', 'New'),
(3, 'CA122', 'deded', 'edded', 'ededed', 'dededed', 'TAS', 1212, 'dh@gmail.com', '10101001010', '', 'ceece', 'New'),
(4, 'CA122', 'John', 'Smith', 'High St', 'Canberra', 'NSW', 1023, '', '0403912786', 'Python', 'Nothing else', 'New'),
(5, 'CA096', 'John', 'Smith', 'High St', 'Canberra', 'SA', 3000, 'JohnSmith@gmail.com', '040777477', 'python, sql, html', 'Nothing', 'New'),
(6, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(7, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(8, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(9, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(10, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(11, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(12, 'CA096', 'J', 'S', 'A', 'B', 'TAS', 1212, '12@gmail.com', '12131323413', 'python, java, C', '?', 'New'),
(13, 'CA903', 'Jerry', 'Smith', 'High St', 'Canberra', 'ACT', 3000, 'Jerry@gmail.com', '0499777343', 'python, sql, html', 'None', 'New'),
(14, 'CA903', 'Jerry', 'Smith', 'High St', 'Canberra', 'ACT', 3000, 'Jerry@gmail.com', '0499777343', 'python, sql, html', 'None', 'New'),
(15, 'CA903', 'Jerry', 'Smith', 'High St', 'Canberra', 'ACT', 3000, 'Jerry@gmail.com', '0499777343', 'python, sql, html', 'None', 'New'),
(16, 'CA096', 'Kerry', 'Frog', 'HighSt', 'Canberra', 'NSW', 200, 'gm@gmail.com', '0477875342', 'python, sql, html', 'hi', 'New'),
(17, 'CA096', 'Kerry', 'Frog', 'High St', 'Canberra', 'NSW', 200, 'gm@gmail.com', '0477875342', 'python, sql, html', 'hi', 'New'),
(18, 'CA096', 'hi', 'world', 'fffrg', 'A', 'TAS', 2121, 'gm@gmail.com', '0411974824', 'python, sql', 'vrvrvvr', 'New'),
(19, 'CA096', 'hi', 'world', 'fffrg', 'A', 'TAS', 2121, 'gm@gmail.com', '0411974824', 'python, sql', 'vrvrvvr', 'New'),
(20, 'CA096', 'AA', 'WDWD', 'FEFE', 'FEEF', 'ACT', 1212, 'GM@gmail.com', '0411099302', 'python, java, C', 'huh9o', 'New'),
(21, 'CA122', 'World', 'Hello', 'RandomSt', 'Townn', 'QLD', 1212, 'hi@gmail.com', '0411974828', 'python, C++', 'hi', 'New'),
(22, 'CA122', 'World', 'Hello', 'RandomSt', 'Townn', 'QLD', 1212, 'hi@gmail.com', '0411974828', 'python, C++', 'hi', 'New'),
(23, 'CA122', 'World', 'Hello', 'RandomSt', 'Townn', 'QLD', 1212, 'hi@gmail.com', '0411974828', 'python, C++', 'hi', 'New'),
(24, 'CA096', 'ekjgks', 'jegks', '7 idk st', 'Hawthorn', 'VIC', 3110, '123@email.com', '1234565689', 'python, javascript, java', 'askjfo', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ref_num` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `salary` text NOT NULL,
  `titles` text NOT NULL,
  `res` text NOT NULL,
  `skills` text NOT NULL,
  `quali_req` text NOT NULL,
  `quali_pre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `name`, `ref_num`, `des`, `salary`, `titles`, `res`, `skills`, `quali_req`, `quali_pre`) VALUES
(1, 'Cybersecurity Specialist', 'CA096', 'This is a career role which specialize in managing the security of an organization’s cyber network. A cybersecurity specialist is means to detect and handle potential data threats and unauthorized actions by enhancing the system’s security, therefore ensuring the safety of the overall data information.', '$115,000 - $130,000 /year', '+ Information Security Specialists.\r\n+ Security Specialists.\r\n+ Privacy Specialists.', '+ Ensure the security among software systems, protect the main network from any cyberattacks and illegal action.\r\n+ Create firewalls and other security measures based on security standards.\r\n+ Come up with new measures to keep up with the system over time and optimize its security with innovative methods.\r\n+ Manually checkup and ensure the system well-performed without impediments such as software bugs and system errors.', '+ Technical skills. \r\n+ Adaptability with new technologies.\r\n+ Flexibility in workflows.\r\n+ Fast incidents respond.', '+ Bachelor’s Degree in Cyber Security, IT, or Computer Science.\r\n+ Cyber Security Certifications.\r\nCompTIA Security+.\r\n+ SSCP (Systems Security Certified Practitioner).\r\n+ TAFE Cyber Security Diplomas & Short Courses.\r\n\r\n', '+ CISSP (Certified Information Systems Security Professional).\r\n+ CCSP (Certified Cloud Security Professional).'),
(2, 'Information security analyst', 'CA122', 'This career role is to gathers and analyze data information of the company’s security system. Becoming an information security analyst is to diagnose security flow within the main system and initialize the ideal security measures to ensure the system operate throughout over time.', '$100,000 - $120,000 /year', '+ Cybersecurity Analysts.\r\n+ IT Security Analysts.\r\n+ Information Security Officers.', '+ Observe the security flow and make clear diagnosis for the overall security system to make sure the system performs well during the process.\r\n+ Detect software errors in real time while analyze the data system in order to solve problems on time.\r\n+ Develop security policies and work on new techniques to protect the data information from cyberattacks.\r\n+ Provide security solutions based on comprehensive data system analyses.', '+ Analytic skills.\r\n+ Detail-oriented mind.\r\n+ Intuitive thinking.', '+ Bachelor’s Degree in Cyber Security, IT, or Computer Science.\r\n+ Cyber Security Certifications.\r\nCompTIA Security+.\r\n+ SSCP (Systems Security Certified Practitioner).\r\n+ TAFE Cyber Security Diplomas & Short Courses.\r\n\r\n', '+ CISA (Certified Information Systems Auditor).\r\n+ ISM (Certified Information Security Manager).'),
(3, 'Chief information officer', 'CA451', 'This career takes most of important duties in our company partaking in information management. A chief officer is the one who take the leadership guide the whole company within the right working regulation and organize the technical strategy of the company.', '$130,000 - $150,000 /year', '+ Information Security Chief.\r\n+ Security Officer.', '+ Lead the team follow the right direction.\r\n+ Manage the security system and go over the process to ensure the main systems run without problems.\r\n+ Come up with security strategies, manage the department’s resources such as finance and procurement.', '+ Leadership skills.\r\n+ Technical skills, have a great knowledge about data systems and how they operate.\r\n+ Being greatly responsible to your duties as a lead guidance to the team.\r\nConsistency in managing workflows.\r\n', '+ Bachelor’s Degree in Cyber Security, IT, or Computer Science.\r\n+ Cyber Security Certifications.\r\nCompTIA Security+.\r\n+ CCISCO (Certified Chief Information Security Officer).\r\n', '+ CISA (Certified Information Systems Auditor).\r\n+ CISM (Certified Information Security Manager).\r\n+ CISSP (Certified Information Systems Security Professional).'),
(4, 'Security consultant', 'CA903', 'This career plays an important role in helping the company with security advice. Being a security consultant is means you are technological intelligent and are the pioneers to examine the company’s security measures therefore giving solutions to improve the overall security system.', '$100,000 - $120,000 /year', '+ Delivery Consultants.\r\n+ Program Officers.\r\n+ IAM Developers.', '+ Plan and design the main security controls and make prevention from unauthorized access.\r\n+ Observe the generals and detect anomalies running in the systems.\r\n+ Giving security measures and advices to improve the security systems.\r\n', '+ Technical intelligences.\r\n+ Problem-solving skills.\r\n+ Flexible in interpreting security advices for the company.', '+ Bachelor’s Degree in Cyber Security, IT, or Computer Science.\r\n+ Cyber Security Certifications.\r\nCompTIA Security+.\r\n+ CISA (Certified Information Systems Auditor).\r\n+ CISM (Certified Information Security Manager).', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
