-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 12:04 PM
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
-- Database: `eduflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `college_id` varchar(10) NOT NULL,
  `college_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_name`) VALUES
('0001', 'Darshan University'),
('0002', 'Gujarat Technological University'),
('0003', 'M.S University'),
('0004', 'Parul University');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cource_id` varchar(10) NOT NULL,
  `cource_name` text NOT NULL,
  `college_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cource_id`, `cource_name`, `college_id`) VALUES
('1', 'Automobile Engineering', '0001'),
('2', 'Civil Engineering', '0001'),
('3', 'Computer Engineering', '0001'),
('4', 'E.C Engineering', '0001'),
('5', 'Electrical Engineering', '0001'),
('6', 'I.C Engineering', '0001'),
('7', 'I.T Engineering', '0001'),
('8', 'Mechanical Engineering', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `paper_solution`
--

CREATE TABLE `paper_solution` (
  `paper_solution_id` varchar(10) NOT NULL,
  `paper_solution_name` text NOT NULL,
  `paper_solution_data` longblob NOT NULL,
  `subject_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paper_solution`
--

INSERT INTO `paper_solution` (`paper_solution_id`, `paper_solution_name`, `paper_solution_data`, `subject_id`) VALUES
('5050', 'Basic Electronics Question Paper', 0x426173696320456c656374726f6e696373205175657374696f6e2050617065722e706466, '00010'),
('5051', 'Environment Science Question Paper', 0x456e7669726f6e6d656e7420536369656e6365205175657374696f6e2050617065722e706466, '00011'),
('5052', 'Engineering Graphics Question Paper', 0x456e67696e656572696e67204772617068696373205175657374696f6e2050617065722e706466, '00012'),
('5053', 'Maths-1 Question Paper', 0x4d617468732d31205175657374696f6e2050617065722e706466, '00013'),
('5054', 'C Question Paper', 0x43205175657374696f6e2050617065722e706466, '00014');

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `pdf_id` varchar(10) NOT NULL,
  `pdf_name` varchar(50) NOT NULL,
  `pdf_data` longblob NOT NULL,
  `subject_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`pdf_id`, `pdf_name`, `pdf_data`, `subject_id`) VALUES
('9090', 'Basic Electronics', 0x426173696320456c656374726f6e6963732e706466, '00010'),
('9091', 'Environment Science', 0x456e7669726f6e6d656e7420536369656e63652e706466, '00011'),
('9092', 'Engineering Graphics', 0x456e67696e656572696e672047726170686963732e706466, '00012'),
('9094', 'C', 0x432e706466, '00014');

-- --------------------------------------------------------

--
-- Table structure for table `ppts`
--

CREATE TABLE `ppts` (
  `ppt_id` varchar(10) NOT NULL,
  `ppt_name` text NOT NULL,
  `ppt_data` longblob NOT NULL,
  `subject_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppts`
--

INSERT INTO `ppts` (`ppt_id`, `ppt_name`, `ppt_data`, `subject_id`) VALUES
('8080', 'Unit-1', 0x556e69742d312e70707478, '00010'),
('8081', 'Unit-2', 0x556e69742d322e70707478, '00011'),
('8082', 'Unit-3', 0x556e69742d332e70707478, '00012'),
('8083', 'Unit-4', 0x556e69742d342e70707478, '00013');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE `question_paper` (
  `question_paper_id` varchar(10) NOT NULL,
  `question_paper_name` text NOT NULL,
  `question_paper_data` longblob NOT NULL,
  `subject_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`question_paper_id`, `question_paper_name`, `question_paper_data`, `subject_id`) VALUES
('7070', 'Basic Electronics Question Paper', 0x426173696320456c656374726f6e696373205175657374696f6e2050617065722e706466, '00010'),
('7071', 'Environment Science Question Paper', 0x456e7669726f6e6d656e7420536369656e6365205175657374696f6e2050617065722e706466, '00011'),
('7072', 'Engineering Graphics Question Paper', 0x456e67696e656572696e67204772617068696373205175657374696f6e2050617065722e706466, '00012'),
('7073', 'Maths-1 Question Paper', 0x4d617468732d31205175657374696f6e2050617065722e706466, '00013'),
('7074', 'C Question Paper', 0x43205175657374696f6e2050617065722e706466, '00014');

-- --------------------------------------------------------

--
-- Table structure for table `reference_book`
--

CREATE TABLE `reference_book` (
  `Book_id` varchar(10) NOT NULL,
  `Book_name` text NOT NULL,
  `Author_name` text NOT NULL,
  `Book_data` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reference_book`
--

INSERT INTO `reference_book` (`Book_id`, `Book_name`, `Author_name`, `Book_data`) VALUES
('101010', 'C Language', 'E-Balaguruswami', 0x43204c616e67756167652e706466),
('101011', 'java the complete reference', 'James Gosling', 0x6a6176612074686520636f6d706c657465207265666572656e63652e706466),
('101012', 'Computer Graphics', 'hearn and baker', 0x436f6d70757465722047726170686963732e706466),
('101013', 'Python programming', 'Justin Seitz', 0x507974686f6e2070726f6772616d6d696e672e706466);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(10) NOT NULL,
  `subject_name` text NOT NULL,
  `sem` varchar(10) NOT NULL,
  `cource_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `sem`, `cource_id`) VALUES
('00010', 'Basic Electronics', '1', '3'),
('00011', 'Environment Science', '1', '3'),
('00012', 'Engineering Graphics', '1', '3'),
('00013', 'Maths-1', '1', '3'),
('00014', 'C', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_email`, `user_name`, `user_pass`) VALUES
('habibi@gmail.com', 'habibi', 'habibi@2801'),
('nayankalsariya2801@gmail.com', 'nayan', 'nayan@habibi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cource_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `paper_solution`
--
ALTER TABLE `paper_solution`
  ADD PRIMARY KEY (`paper_solution_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`pdf_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `ppts`
--
ALTER TABLE `ppts`
  ADD PRIMARY KEY (`ppt_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD PRIMARY KEY (`question_paper_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `reference_book`
--
ALTER TABLE `reference_book`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `cource_id` (`cource_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`college_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paper_solution`
--
ALTER TABLE `paper_solution`
  ADD CONSTRAINT `paper_solution_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD CONSTRAINT `pdfs_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ppts`
--
ALTER TABLE `ppts`
  ADD CONSTRAINT `ppts_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD CONSTRAINT `question_paper_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`cource_id`) REFERENCES `courses` (`cource_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
