-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 04:24 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stooderz`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertCourse`(IN `course_title` VARCHAR(40), IN `user_teacher` INT(6), IN `description` VARCHAR(40), IN `fees` INT(5))
    NO SQL
BEGIN 
INSERT INTO course (course_title,user_teacher,description,fees) VALUES (course_title,user_teacher,description,fees);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertEnroll`(IN `courseid` BIGINT(6), IN `user_teacher` INT(6), IN `user_student` INT(6), IN `start_date` DATE)
    NO SQL
BEGIN
INSERT INTO enroll (courseid,user_teacher,user_student,start_date)VALUES
(courseid,user_teacher,user_student,start_date);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertQualification`(IN `user_teacher` INT(6), IN `degree_level` VARCHAR(15), IN `degree_title` VARCHAR(30), IN `graduation_year` YEAR(4), IN `institute` VARCHAR(40))
    NO SQL
BEGIN INSERT INTO qualification (user_teacher,degree_level,degree_title,graduation_year,institute) VALUES (user_teacher,degree_level,degree_title,graduation_year,institute);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertStudent`(IN `email` VARCHAR(40), IN `institute` VARCHAR(50), IN `current_class` VARCHAR(20))
    NO SQL
BEGIN INSERT INTO student (email,institute,current_class)
values (email,institute,current_class);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertTeacher`(IN `email` VARCHAR(40), IN `cnic` BIGINT(13), IN `rating` BIGINT(2), IN `gender` CHAR(10), IN `previous_experience` CHAR(5))
    NO SQL
BEGIN
INSERT INTO teacher (email,cnic,rating,gender,previous_course)
VALUES(email,cnic,rating,gender,previous_course);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` bigint(6) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `category_title`) VALUES
(1, 'Literature'),
(2, 'English'),
(3, 'Urdu'),
(4, 'Islamic Studies'),
(5, 'Chemistry'),
(6, 'Biology'),
(7, 'Mathematics'),
(8, 'General Sciences'),
(9, 'Arts'),
(10, 'Computer Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(6) unsigned NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `country_name`) VALUES
(1, 'Lahore', 'Pakistan'),
(2, 'Islamabad', 'Pakistan'),
(3, 'Karachi', 'Pakistan'),
(4, 'Peshawar', 'Pakistan'),
(5, 'Quetta', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` bigint(6) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(40) DEFAULT NULL,
  `user_teacher` int(6) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `fees` int(5) DEFAULT NULL,
  PRIMARY KEY (`courseid`),
  KEY `user_teacher` (`user_teacher`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `course_title`, `user_teacher`, `description`, `fees`) VALUES
(0, 'dld', 7, 'tetsss', 1000),
(7, 'DSA', 8, 'data structures and algorithm', 1000),
(8, 'dld', 12, 'my dld course for less price', 1000),
(9, 'my course', 12, 'this is a free course', 2000),
(10, 'iot', 12, 'this is an iot course', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE IF NOT EXISTS `course_category` (
  `categoryid` bigint(6) NOT NULL,
  `courseid` bigint(6) NOT NULL,
  PRIMARY KEY (`categoryid`,`courseid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE IF NOT EXISTS `enroll` (
  `enrollid` int(6) NOT NULL AUTO_INCREMENT,
  `courseid` bigint(6) DEFAULT NULL,
  `user_teacher` int(6) DEFAULT NULL,
  `user_student` int(6) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `progress` char(1) DEFAULT 'I',
  PRIMARY KEY (`enrollid`),
  KEY `courseid` (`courseid`),
  KEY `user_teacher` (`user_teacher`),
  KEY `user_student` (`user_student`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `email` varchar(40) DEFAULT NULL,
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(200) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `img_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`email`, `img_id`, `img_name`, `img_path`, `img_type`) VALUES
('ramey@mail.com', 4, 'the-hidden-plot-of-batman-vs-superman-dawn-of-justice-593860.jpg', 'upload/the-hidden-plot-of-batman-vs-superman-dawn-of-justice-593860.jpg', NULL),
('simbadad1122@gmail.com', 6, 'main office.jpg', 'upload/main office.jpg', NULL),
('moeed@mail.com', 18, 'FB_IMG_1427577743660.jpg', 'upload/FB_IMG_1427577743660.jpg', NULL),
('abdul@mail.com', 22, 'dp', 'upload/pd.jpg', NULL),
('abdulraza@mail.com', 23, 'dp', 'upload/pd.jpg', NULL),
('person@mail.com', 24, 'dp', 'upload/pd.jpg', NULL),
('teacherperson@mail.com', 25, 'dp', 'upload/pd.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `email` varchar(40) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `mobile_no` bigint(15) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `user_category` char(15) DEFAULT NULL,
  `account_status` char(15) NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`email`, `pwd`, `fname`, `lname`, `city`, `mobile_no`, `facebook`, `user_category`, `account_status`) VALUES
('abdul@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'abdul', 'rehman', 'Lahore', 3451433176, NULL, 'student', 'inactive'),
('abdulraza@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'abdul', 'raza', 'Lahore', 3451733175, NULL, 'teacher', 'inactive'),
('fbutt.bscs15seecs@seecs.edu.pk', '75962e7c7bfa0040ade609eaade0ba7b', 'furqan', 'shahid', 'Lahore', 31451433176, NULL, 'teacher', 'inactive'),
('moeed@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'moeed', 'raza', 'Lahore', 31451433176, NULL, 'teacher', 'inactive'),
('mujtaba@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'mujtaba', 'hassa', 'Lahore', 34514331761, NULL, 'teacher', 'inactive'),
('person@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'person', 'newperson', 'Lahore', 3461433176, NULL, 'student', 'inactive'),
('ramey@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'umair', 'ramey', 'Lahore', 34514331760, NULL, 'student', 'inactive'),
('simbadad1122@gmail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'hassan', 'ali', 'Lahore', 31451433176, NULL, 'teacher', 'inactive'),
('teacherperson@mail.com', '75962e7c7bfa0040ade609eaade0ba7b', 'teacher', 'person', 'Lahore', 3000111122, NULL, 'teacher', 'inactive');

--
-- Triggers `person`
--
DROP TRIGGER IF EXISTS `insertPicDefault`;
DELIMITER //
CREATE TRIGGER `insertPicDefault` AFTER INSERT ON `person`
 FOR EACH ROW INSERT INTO `images`(`email`, `img_name`, `img_path`) VALUES (new.email,"dp","upload/pd.jpg")
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qualification_no` bigint(6) NOT NULL AUTO_INCREMENT,
  `user_teacher` int(6) NOT NULL,
  `degree_level` varchar(15) DEFAULT NULL,
  `degree_title` varchar(30) DEFAULT NULL,
  `graduation_year` year(4) DEFAULT NULL,
  `institute` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`qualification_no`,`user_teacher`),
  KEY `user_teacher` (`user_teacher`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_no`, `user_teacher`, `degree_level`, `degree_title`, `graduation_year`, `institute`) VALUES
(2, 11, 'Bachelors', 'civil', 2002, 'nust'),
(3, 12, 'Bachelors', 'sdld', 2006, 'nsut'),
(4, 13, 'Bachelors', 'computer science', 2015, 'nust'),
(5, 14, 'Masters', 'dsp', 2007, 'someschool');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `courseid` bigint(6) NOT NULL,
  `user_student` int(6) NOT NULL,
  `request_status` char(1) DEFAULT '0',
  PRIMARY KEY (`courseid`,`user_student`),
  KEY `user_student` (`user_student`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `user_student` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `institute` varchar(50) DEFAULT NULL,
  `current_class` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_student`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_student`, `email`, `institute`, `current_class`) VALUES
(22, 'ramey@mail.com', 'nust', 'ug'),
(23, 'abdul@mail.com', 'grammar schoo', 'primary'),
(24, 'person@mail.com', 'someschool', 'primary');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `user_teacher` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `cnic` bigint(13) DEFAULT NULL,
  `rating` bigint(2) DEFAULT '0',
  `gender` char(10) DEFAULT 'Male',
  `previous_experience` char(5) DEFAULT 'No',
  PRIMARY KEY (`user_teacher`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_teacher`, `email`, `cnic`, `rating`, `gender`, `previous_experience`) VALUES
(7, 'simbadad1122@gmail.com', 3420164163105, 0, 'male', 'N'),
(8, 'fbutt.bscs15seecs@seecs.edu.pk', 3420164163105, 0, 'male', 'N'),
(11, 'mujtaba@mail.com', 3420164163105, 0, 'male', 'N'),
(12, 'moeed@mail.com', 3420164163105, 0, 'male', 'N'),
(13, 'abdulraza@mail.com', 34201464163, 0, 'male', 'N'),
(14, 'teacherperson@mail.com', 3411111111, 0, 'male', 'N');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`user_teacher`) REFERENCES `teacher` (`user_teacher`) ON DELETE CASCADE;

--
-- Constraints for table `course_category`
--
ALTER TABLE `course_category`
  ADD CONSTRAINT `course_category_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_category_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE;

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`user_teacher`) REFERENCES `teacher` (`user_teacher`) ON DELETE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_3` FOREIGN KEY (`user_student`) REFERENCES `student` (`user_student`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`email`) REFERENCES `person` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`user_teacher`) REFERENCES `teacher` (`user_teacher`) ON DELETE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`user_student`) REFERENCES `student` (`user_student`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`email`) REFERENCES `person` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`email`) REFERENCES `person` (`email`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
