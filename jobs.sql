-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 06:47 PM
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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
