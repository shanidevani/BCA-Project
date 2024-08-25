-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 07:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vellor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--



-- --------------------------------------------------------

--
-- Table structure for table `assingment`
--

CREATE TABLE `assingment` (
  `assingment_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `subject` int(11) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `submition_date` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `sem` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assingment`
--



-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `subjectname` int(11) NOT NULL,
  `remark` varchar(250) NOT NULL,
  `file` varchar(300) NOT NULL,
  `sem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--



-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file1` varchar(300) NOT NULL,
  `file2` varchar(300) NOT NULL,
  `file3` varchar(300) NOT NULL,
  `file4` varchar(300) NOT NULL,
  `file5` varchar(300) NOT NULL,
  `file6` varchar(300) NOT NULL,
  `file7` varchar(300) NOT NULL,
  `file8` varchar(300) NOT NULL,
  `file9` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--



-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `homework_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `homework` varchar(500) NOT NULL,
  `doh` date NOT NULL,
  `dos` date NOT NULL,
  `homework_file` varchar(200) NOT NULL,
  `sem` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homework`
--



-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(1) NOT NULL,
  `teacher_1` varchar(22) NOT NULL,
  `teacher_2` varchar(22) NOT NULL,
  `teacher_3` varchar(22) NOT NULL,
  `teacher_4` varchar(22) NOT NULL,
  `teacher_5` varchar(22) NOT NULL,
  `teacher_6` varchar(22) NOT NULL,
  `teacher_7` varchar(22) NOT NULL,
  `teacher_8` varchar(22) NOT NULL,
  `teacher_9` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourteam`
--


-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--



-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(25) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `cast` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `mother_tongue` varchar(30) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `admission_date` date NOT NULL,
  `parent_id` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `income` float NOT NULL,
  `education` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `courses` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` int(10) NOT NULL,
  `subject_type` varchar(30) NOT NULL,
  `sem` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--



-- --------------------------------------------------------

--
-- Table structure for table `submit_assingment`
--

CREATE TABLE `submit_assingment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `s_id` varchar(22) NOT NULL,
  `sdate` date NOT NULL,
  `subject_id` int(11) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `file` varchar(300) NOT NULL,
  `assingment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_assingment`
--



-- --------------------------------------------------------

--
-- Table structure for table `submit_homework`
--

CREATE TABLE `submit_homework` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `s_id` varchar(22) NOT NULL,
  `sdate` date NOT NULL,
  `subject_id` int(11) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `file` varchar(300) NOT NULL,
  `homework_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_homework`
--



-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `profile_picture` varchar(300) NOT NULL,
  `subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assingment`
--
ALTER TABLE `assingment`
  ADD PRIMARY KEY (`assingment_id`),
  ADD KEY `subject` (`subject`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectname` (`subjectname`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`homework_id`),
  ADD KEY `subject` (`subject`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `courses_id` (`courses_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `courses` (`courses`);

--
-- Indexes for table `submit_assingment`
--
ALTER TABLE `submit_assingment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assingment_id` (`assingment_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `submit_homework`
--
ALTER TABLE `submit_homework`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homework_id` (`homework_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `subject` (`subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `assingment`
--
ALTER TABLE `assingment`
  MODIFY `assingment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `homework_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `submit_assingment`
--
ALTER TABLE `submit_assingment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `submit_homework`
--
ALTER TABLE `submit_homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assingment`
--
ALTER TABLE `assingment`
  ADD CONSTRAINT `assingment_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`subjectname`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `homework`
--
ALTER TABLE `homework`
  ADD CONSTRAINT `homework_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `homework_ibfk_2` FOREIGN KEY (`subject`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`courses_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`courses`) REFERENCES `courses` (`courses_id`);

--
-- Constraints for table `submit_assingment`
--
ALTER TABLE `submit_assingment`
  ADD CONSTRAINT `submit_assingment_ibfk_1` FOREIGN KEY (`assingment_id`) REFERENCES `assingment` (`assingment_id`),
  ADD CONSTRAINT `submit_assingment_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `submit_homework`
--
ALTER TABLE `submit_homework`
  ADD CONSTRAINT `submit_homework_ibfk_1` FOREIGN KEY (`homework_id`) REFERENCES `homework` (`homework_id`),
  ADD CONSTRAINT `submit_homework_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`subject`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
