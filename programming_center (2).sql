-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 03:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `student_id` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`student_id`, `password`) VALUES
('Yomna Eisa', '3910012'),
('Yomna Eisa', '3910012');

-- --------------------------------------------------------

--
-- Table structure for table `login_teacher`
--

CREATE TABLE `login_teacher` (
  `teacher_id` int(4) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `coursename` varchar(5) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`coursename`, `link`, `id`) VALUES
('CS101', 'https://www.w3schools.in/c-tutorial/', 1),
('CS102', 'https://www.w3schools.com/java/default.asp', 2),
('CS203', 'https://www.tutorialspoint.com/assembly_programming/index.htm', 3),
('CS378', 'https://www.w3schools.com/html/html_css.asp', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions table`
--

CREATE TABLE `sessions table` (
  `Session_Id` int(3) NOT NULL,
  `Week no.` varchar(55) NOT NULL,
  `Session_Number` varchar(55) NOT NULL,
  `Time` datetime(6) NOT NULL,
  `Course` varchar(55) NOT NULL,
  `Teacher` varchar(55) NOT NULL,
  `Availability` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainingprograms`
--

CREATE TABLE `trainingprograms` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `presenter` varchar(90) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainingprograms`
--

INSERT INTO `trainingprograms` (`id`, `title`, `detail`, `presenter`, `date`, `time`, `place`) VALUES
(2, 'mobile application development', 'learn swift', 'Ms. Aizal Yusrina', '2021-12-28', '14:15:00', 'YUC-F'),
(4, 'Ethical Hacking', 'learn about the basics of Ethical hacking', 'Dr. leylah', '2022-01-01', '13:15:00', 'YUC-F');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `name` text NOT NULL,
  `ID` int(35) NOT NULL,
  `fromEmail` varchar(100) NOT NULL,
  `phone` int(30) NOT NULL,
  `CourseCode` varchar(50) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `ID`, `fromEmail`, `phone`, `CourseCode`, `grade`) VALUES
('Yomna Eisa', 3910012, 'yomnaabelrahmaneisa@gmail.com', 557857693, 'CS102', 'A+'),
('Yomna Eisa', 3910012, 'yomnaabelrahmaneisa@gmail.com', 557857693, 'CS102', 'A+'),
('Yomna Eisa', 3910012, 'yomnaabelrahmaneisa@gmail.com', 557857693, 'CS102', 'A+'),
('Yomna Eisa', 3910012, 'yomnaabelrahmaneisa@gmail.com', 557857693, 'CS102', 'A+'),
('Yomna Eisa', 3910012, 'yomnaabelrahmaneisa@gmail.com', 557857693, 'CS102', 'A+'),
('test', 123, 'idk@gmail.com', 34234, 'CS302', 'A+'),
('Haya', 3910048, 'yunimeow21@gmail.com', 457434, 'CS302', 'A+'),
('IDK SOME NAME', 32431, 'yunithegirl@gmail.com', 452342, 'CS203', 'B+'),
('[value-1]', 0, '[value-3]', 0, '[value-5]', '[v'),
('fucking WORK pls', 3435, 'yunithegirl@gmail.com', 3456, 'CS201', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `volunteeringrequest`
--

CREATE TABLE `volunteeringrequest` (
  `name` text NOT NULL,
  `ID` int(35) NOT NULL,
  `fromEmail` varchar(100) NOT NULL,
  `phone` int(30) NOT NULL,
  `CourseCode` varchar(15) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `presenter` varchar(90) NOT NULL,
  `fromEmail` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `presenter_ID` int(11) NOT NULL,
  `date_` date NOT NULL,
  `time_` time NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `detail`, `presenter`, `fromEmail`, `phone`, `presenter_ID`, `date_`, `time_`, `place`) VALUES
(7, 'introduction to robotics', 'learn about the basics of robotics', 'Dr. leylah', '', 0, 0, '2021-12-07', '13:15:00', 'YUC-F'),
(14, 'Introduction to Python', 'basics of python', 'Dr. kajal', '', 0, 0, '2021-12-21', '09:30:00', 'YUC-F'),
(15, 'Internet of things (IOT)', 'what is IOT', 'Ms. Uzma Azeem', '', 0, 0, '2021-12-22', '15:15:00', 'YUC-F'),
(23, 'pls pls work', '', 'someone', 'yomnaaax@gmail.com', 452342, 221, '2022-05-02', '15:35:00', 'idk');

-- --------------------------------------------------------

--
-- Table structure for table `workshoprequest`
--

CREATE TABLE `workshoprequest` (
  `name` varchar(50) NOT NULL,
  `ID` int(50) NOT NULL,
  `fromEmail` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_` date NOT NULL,
  `time_` time(6) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainingprograms`
--
ALTER TABLE `trainingprograms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trainingprograms`
--
ALTER TABLE `trainingprograms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
