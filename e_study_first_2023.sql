-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 07:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_study_first_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_lessons`
--

CREATE TABLE `check_lessons` (
  `ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Lesson_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_lessons`
--

INSERT INTO `check_lessons` (`ID`, `Student_ID`, `Lesson_ID`) VALUES
(14, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `check_medias`
--

CREATE TABLE `check_medias` (
  `ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Media_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_medias`
--

INSERT INTO `check_medias` (`ID`, `Student_ID`, `Media_ID`) VALUES
(38, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `check_modules`
--

CREATE TABLE `check_modules` (
  `ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Module_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_modules`
--

INSERT INTO `check_modules` (`ID`, `Student_ID`, `Module_ID`) VALUES
(5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(20) NOT NULL,
  `Instructor_ID` int(20) NOT NULL,
  `Title` text COLLATE utf8_bin NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  `Overview` text COLLATE utf8_bin NOT NULL,
  `Total_Rates` int(20) NOT NULL,
  `Media_File` text COLLATE utf8_bin NOT NULL,
  `Language` text COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL,
  `Status` text COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Instructor_ID`, `Title`, `Description`, `Overview`, `Total_Rates`, `Media_File`, `Language`, `Price`, `Status`, `Add_Date_Time`) VALUES
(2, 1, 'Test 1', 'Test Test Test Test Test Test ', 'Test Test Test Test Test Test ', 0, 'Courses_Pictures/logo.png', 'English', 0, 'Active', '2022-12-23 10:52:00'),
(3, 1, 'Test 2', 'Test Test Test Test Test Test ', 'Test Test Test Test Test Test ', 0, 'Courses_Pictures/logo.png', 'English', 0, 'Active', '2022-12-23 10:52:07'),
(4, 1, 'Test 3', 'Test Test Test Test Test Test ', 'Test Test Test Test Test Test ', 0, 'Courses_Pictures/logo.png', 'English', 0, 'Active', '2022-12-23 10:52:03'),
(5, 1, 'Test 4', 'Test Test Test Test Test Test ', 'Test Test Test Test Test Test ', 0, 'Courses_Pictures/logo.png', 'English', 0, 'Active', '2022-12-23 10:52:05'),
(6, 1, 'Test 5', 'Test Test Test Test Test Test ', 'Test Test Test Test Test Test ', 0, 'Courses_Pictures/logo.png', 'English', 0, 'Active', '2022-12-23 10:52:08'),
(7, 1, 'Test 6', 'Test Test Test Test Test Test ', 'Test Test Test Test Test Test ', 0, 'Courses_Pictures/logo.png', 'English', 0, 'Active', '2022-12-23 10:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `courses_rates`
--

CREATE TABLE `courses_rates` (
  `ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Review` text COLLATE utf8_bin NOT NULL,
  `Date` text COLLATE utf8_bin NOT NULL,
  `Status` text COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courses_rates`
--

INSERT INTO `courses_rates` (`ID`, `Course_ID`, `Student_ID`, `Rate`, `Review`, `Date`, `Status`, `Add_Date_Time`) VALUES
(1, 7, 1, 5, 'this is good review', '2023-01-18', 'Accepted', '2023-01-18 18:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `ID` int(20) NOT NULL,
  `Full_Name` varchar(250) COLLATE utf8_bin NOT NULL,
  `Username` varchar(250) COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`ID`, `Full_Name`, `Username`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1, 'Test', 'instructor', '123456789', 'Active', '2022-12-23 09:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Module_ID` int(20) NOT NULL,
  `Title` text COLLATE utf8_bin NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`ID`, `Course_ID`, `Module_ID`, `Title`, `Description`) VALUES
(1, 7, 1, 'test', 'test'),
(2, 7, 2, 'Test 2', 'Test 2');

-- --------------------------------------------------------

--
-- Table structure for table `lessons_files`
--

CREATE TABLE `lessons_files` (
  `ID` int(20) NOT NULL,
  `Lesson_ID` int(20) NOT NULL,
  `File_Name` text COLLATE utf8_bin NOT NULL,
  `File_Path` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lessons_files`
--

INSERT INTO `lessons_files` (`ID`, `Lesson_ID`, `File_Name`, `File_Path`) VALUES
(1, 1, 'Test', 'Lessons_Files/test.txt');

-- --------------------------------------------------------

--
-- Table structure for table `lessons_media`
--

CREATE TABLE `lessons_media` (
  `ID` int(20) NOT NULL,
  `Lesson_ID` int(20) NOT NULL,
  `Media_Name` text COLLATE utf8_bin NOT NULL,
  `Media_Path` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lessons_media`
--

INSERT INTO `lessons_media` (`ID`, `Lesson_ID`, `Media_Name`, `Media_Path`) VALUES
(1, 1, '', 'Lessons_Media/production ID_5198164.mp4'),
(2, 2, '', 'Lessons_Media/production ID_5198164.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Title` text COLLATE utf8_bin NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  `Step` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`ID`, `Course_ID`, `Title`, `Description`, `Step`) VALUES
(1, 7, 'MODULE 1', 'MODULE 1', 1),
(2, 7, 'MODULE 2', 'MODULE 2', 2),
(3, 7, 'MODULE 3', 'MODULE 3', 3),
(4, 7, 'MODULE 4', 'MODULE 4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Question` varchar(250) COLLATE utf8_bin NOT NULL,
  `Correct_Answer` varchar(250) COLLATE utf8_bin NOT NULL,
  `Wrong_Answer_1` varchar(250) COLLATE utf8_bin NOT NULL,
  `Wrong_Answer_2` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `Course_ID`, `Question`, `Correct_Answer`, `Wrong_Answer_1`, `Wrong_Answer_2`) VALUES
(1, 7, 'Q1', '11', '22', '33'),
(2, 7, 'Q2', '44', '55', '66');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(20) NOT NULL,
  `Full_Name` text COLLATE utf8_bin NOT NULL,
  `Phone_Number` text COLLATE utf8_bin NOT NULL,
  `Email_Address` text COLLATE utf8_bin NOT NULL,
  `Password` text COLLATE utf8_bin NOT NULL,
  `Status` text COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Full_Name`, `Phone_Number`, `Email_Address`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1, 'Ahmad', '0790000000', 'ahmad@live.com', '123456789', 'Active', '2023-01-02 16:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Status` text COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`ID`, `Student_ID`, `Course_ID`, `Status`, `Add_Date_Time`) VALUES
(2, 1, 7, 'Pending', '2022-12-24 08:00:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_lessons`
--
ALTER TABLE `check_lessons`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lesson_ID` (`Lesson_ID`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `check_medias`
--
ALTER TABLE `check_medias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Media_ID` (`Media_ID`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `check_modules`
--
ALTER TABLE `check_modules`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Student_ID` (`Student_ID`),
  ADD KEY `Module_ID` (`Module_ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Instructor_ID` (`Instructor_ID`);

--
-- Indexes for table `courses_rates`
--
ALTER TABLE `courses_rates`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Module_ID` (`Module_ID`);

--
-- Indexes for table `lessons_files`
--
ALTER TABLE `lessons_files`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lesson_ID` (`Lesson_ID`);

--
-- Indexes for table `lessons_media`
--
ALTER TABLE `lessons_media`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lesson_ID` (`Lesson_ID`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_lessons`
--
ALTER TABLE `check_lessons`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `check_medias`
--
ALTER TABLE `check_medias`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `check_modules`
--
ALTER TABLE `check_modules`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses_rates`
--
ALTER TABLE `courses_rates`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lessons_files`
--
ALTER TABLE `lessons_files`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lessons_media`
--
ALTER TABLE `lessons_media`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_lessons`
--
ALTER TABLE `check_lessons`
  ADD CONSTRAINT `check_lessons_ibfk_1` FOREIGN KEY (`Lesson_ID`) REFERENCES `lessons` (`ID`),
  ADD CONSTRAINT `check_lessons_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`ID`);

--
-- Constraints for table `check_medias`
--
ALTER TABLE `check_medias`
  ADD CONSTRAINT `check_medias_ibfk_1` FOREIGN KEY (`Media_ID`) REFERENCES `lessons_media` (`ID`),
  ADD CONSTRAINT `check_medias_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`ID`);

--
-- Constraints for table `check_modules`
--
ALTER TABLE `check_modules`
  ADD CONSTRAINT `check_modules_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`ID`),
  ADD CONSTRAINT `check_modules_ibfk_2` FOREIGN KEY (`Module_ID`) REFERENCES `modules` (`ID`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Instructor_ID`) REFERENCES `instructors` (`ID`);

--
-- Constraints for table `courses_rates`
--
ALTER TABLE `courses_rates`
  ADD CONSTRAINT `courses_rates_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`ID`),
  ADD CONSTRAINT `courses_rates_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`ID`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`ID`),
  ADD CONSTRAINT `lessons_ibfk_2` FOREIGN KEY (`Module_ID`) REFERENCES `modules` (`ID`);

--
-- Constraints for table `lessons_files`
--
ALTER TABLE `lessons_files`
  ADD CONSTRAINT `lessons_files_ibfk_1` FOREIGN KEY (`Lesson_ID`) REFERENCES `lessons` (`ID`);

--
-- Constraints for table `lessons_media`
--
ALTER TABLE `lessons_media`
  ADD CONSTRAINT `lessons_media_ibfk_1` FOREIGN KEY (`Lesson_ID`) REFERENCES `lessons` (`ID`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`ID`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`ID`);

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`ID`),
  ADD CONSTRAINT `subscriptions_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
