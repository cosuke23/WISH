-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 07:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `full_name` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `full_name`) VALUES
(1, 'admin', 'admin', 'HalfRed');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_report`
--

CREATE TABLE `attendance_report` (
  `id` int(11) NOT NULL,
  `LRN` int(23) NOT NULL,
  `month` varchar(20) DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL,
  `date` varchar(63) DEFAULT NULL,
  `total_absent` int(10) DEFAULT NULL,
  `total_tardy` int(10) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_report`
--

INSERT INTO `attendance_report` (`id`, `LRN`, `month`, `day`, `date`, `total_absent`, `total_tardy`, `remarks`) VALUES
(2, 1, 'june', 'tuesday', 'june-01-2019', 1, 0, ''),
(3, 1, 'june', 'wensday', 'june-03-2019', 1, 0, ''),
(4, 1, 'june', 'thursday', 'june-04-2019', 1, 0, ''),
(5, 1, 'june', 'friday', 'june-05-2019', 1, 0, ''),
(6, 1, 'june', 'saturday', 'june-06-2019', 1, 0, ''),
(7, 1, NULL, NULL, '2019-11-14', 1, NULL, NULL),
(8, 1, NULL, NULL, '2019-11-14', 1, NULL, NULL),
(9, 1, NULL, NULL, '2019-11-21', 1, NULL, NULL),
(10, 1, NULL, NULL, '2019-11-22', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `lrn` varchar(63) NOT NULL,
  `book_title` varchar(20) DEFAULT NULL,
  `date_issued` date DEFAULT NULL,
  `date_returned` date DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`lrn`, `book_title`, `date_issued`, `date_returned`, `remarks`) VALUES
('1', 'Harry Potter', '0000-00-00', '0000-00-00', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `grade_table`
--

CREATE TABLE `grade_table` (
  `lrn` int(10) NOT NULL,
  `grade_id` int(10) NOT NULL,
  `grade_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_complete_shs_requirements`
--

CREATE TABLE `list_of_complete_shs_requirements` (
  `nc_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nc_table`
--

CREATE TABLE `nc_table` (
  `id` int(11) NOT NULL,
  `lrn` int(11) NOT NULL,
  `completed_shs_status` varchar(63) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nc_table`
--

INSERT INTO `nc_table` (`id`, `lrn`, `completed_shs_status`, `description`, `level`) VALUES
(1, 1, 'Yes', 'CSS', 'II'),
(2, 2, '', 'VGD', 'III'),
(3, 3, '', 'BREAD and PASTRY', 'II'),
(4, 4, '', 'FOOD and BEVERAGE', 'II');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_status`
--

CREATE TABLE `nutrition_status` (
  `id` int(11) NOT NULL,
  `lrn` int(11) DEFAULT NULL,
  `weight` varchar(11) DEFAULT NULL,
  `height` varchar(11) DEFAULT NULL,
  `height_2` varchar(11) DEFAULT NULL,
  `bmi` varchar(11) DEFAULT NULL,
  `bmi_2` varchar(11) DEFAULT NULL,
  `hfa` varchar(11) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks_table`
--

CREATE TABLE `remarks_table` (
  `code` int(5) NOT NULL,
  `indicator` varchar(20) DEFAULT NULL,
  `required_info` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `school_id` int(8) NOT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `region` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `sy_id` int(10) NOT NULL,
  `school_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_table`
--

CREATE TABLE `section_table` (
  `lrn` int(10) NOT NULL,
  `section_id` int(20) NOT NULL,
  `section_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semerter_table`
--

CREATE TABLE `semerter_table` (
  `sem_id` int(10) NOT NULL,
  `sem_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester_sy_status`
--

CREATE TABLE `semester_sy_status` (
  `back_subjects` varchar(20) DEFAULT NULL,
  `semester_status` varchar(10) DEFAULT NULL,
  `sy_status` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `lrn` int(223) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_sy_status`
--

INSERT INTO `semester_sy_status` (`back_subjects`, `semester_status`, `sy_status`, `id`, `lrn`) VALUES
('OOP', 'Complete', 'Regular', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `lrn` int(10) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `s_year` int(2) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `house_number` int(10) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `barangay` varchar(20) DEFAULT NULL,
  `municipality_city` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `fathers_name` varchar(20) DEFAULT NULL,
  `mothers_name` varchar(20) DEFAULT NULL,
  `guardian_name` varchar(20) DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `contact_number` int(20) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`lrn`, `ts_id`, `s_year`, `last_name`, `first_name`, `middle_name`, `gender`, `birthday`, `religion`, `house_number`, `street`, `barangay`, `municipality_city`, `province`, `fathers_name`, `mothers_name`, `guardian_name`, `relation`, `contact_number`, `remarks`) VALUES
(-1, 0, 0, 'Agorses', 'Jerry', 'C.', 'female', '2002-01-31', 'Catholic', -1, 'Dahlia', 'Roxas', 'Quezon City', 'Pampanga', 'Jerry Cayme', 'Lucita Desiderio', 'Jerry Cayme', 'Father', 123132, ''),
(1, 2, 11, 'Agors', 'Chyrs Cliford', 'M', 'Male', '2001-04-06', 'Catholic', 2, 'Camus', 'Camus', 'Malabon City', 'Pampanga', 'Juan Dela Cruz', 'Joanna Dela Cruz', 'Joanna Dela Cruz', 'Mother', 123456789, 'None'),
(7, 3, 12, 'Ramos', 'Jeycel', 'D', 'Female', '2002-07-05', 'Catholic', 6, 'Waling Waling', 'Roxas', 'Quezon City', '', '', '', '', '', 123456789, ''),
(8, 3, 12, 'Orato', 'Drian', 'O', 'Male', '2003-10-15', 'Catholic', 15, 'Dalaga', '', 'Navotas ', '', '', '', '', '', 123456789, ''),
(9, 3, 11, 'Ducusin', 'Jona', 'V', 'Female', '1985-10-11', 'Catholic', 54, 'Malanday', '', 'Valenzuela', '', '', '', '', '', 123456789, ''),
(10, 3, 11, 'Espino', 'Jasmin', 'E', 'Female', '2001-09-05', 'Catholic', 45, 'Camus', '', 'Malabon', '', '', '', '', '', 123456789, ''),
(12, 4, 11, 'Celoso', 'Alfred', 'C', 'Male', '2002-08-08', 'Iglesia ni Cristo', 7485, 'Dalaga', '', 'Navotas', '', '', '', '', '', 123456789, ''),
(13, 4, 11, 'Dumalagan', 'Aldrin', 'D', 'Male', '2003-06-01', 'Catholic', 45, 'Dalaga', '', 'Navotas', '', '', '', '', '', 123456789, ''),
(14, 4, 12, 'Bersabal', 'Rodolfo', 'B', 'Male', '2000-02-15', 'Catholic', 786, '', '', 'Valenzuela', '', '', '', '', '', 123456789, ''),
(15, 4, 12, 'Nunag', 'Angel', 'N', 'Female', '2001-01-15', 'Catholic', 8, '10th Ave.', '', 'Caloocan City', '', '', '', '', '', 123456789, ''),
(16, 5, 11, 'Flores', 'Renelyn', 'F', 'Female', '2000-12-12', 'Catholic', 51, '11th Ave', '', 'Caloocan City', '', '', '', '', '', 123456789, ''),
(17, 5, 12, 'Dela Cruz', 'Lyza', 'D', 'Female', '2000-09-19', 'Iglesia ni Cristo', 45, '5th Ave', '', 'Malabon City', '', '', '', '', '', 123456789, ''),
(18, 5, 11, 'Lobrica', 'Serina Mae', 'L', 'Female', '2003-05-16', 'Catholic', 45, 'Dalaga', '', 'Navotas', '', '', '', '', '', 123456789, ''),
(19, 5, 12, 'Tulagan', 'Genesis', 'T', 'Male', '2002-10-05', 'Catholic', 1856, 'P. Burgos', '', 'Caloocan City', '', '', '', '', '', 123456789, ''),
(20, 2, 12, 'Kenneth', 'Solleza', 'DS', 'Male', '2003-06-05', 'Catholic', 1212, '2nd Ave', '', 'Caloocan City', '', '', '', '', '', 123456789, ''),
(21, 1, 12, 'Beter', 'Romina', '', 'Female', '2001-05-16', 'Catholic', 0, '', '', 'Malabon', '', 'Juan Dela Cruz', 'Joanna Dela cruz', 'Joanna Dela cruz', 'Mother', 123456789, ''),
(22, 1, 12, 'Velasquez', 'Princess Heidi', '', 'Female', '2002-04-05', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(23, 1, 12, 'Noora', 'Ronnielyn', 'C.', 'Male', '2001-11-25', 'Catholic', 0, 'Dahlia', 'Roxas', 'Quezon City', 'Pampanga', 'Jerry Cayme', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(24, 1, 12, 'Valdez', 'Allan Jay', 'C.', 'Male', '2000-07-22', 'Catholic', 0, 'Dahlia', 'Dahlia', 'Quezon City', 'Pampanga', 'Jerry Cayme', 'Jerry Cayme', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(25, 0, 0, 'Nagnal', 'Rose Anne', '', 'Female', '2002-08-14', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(26, 0, 0, 'Gomez', 'Allan', '', 'Male', '2000-04-29', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(27, 0, 0, 'Sarabia', 'Rafael', '', 'Male', '2003-09-05', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(28, 0, 0, 'Nullas', 'Joshua', '', 'Male', '0000-00-00', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(29, 0, 0, 'De Vera', 'Vriant Gale', '', 'Male', '2000-07-25', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(30, 0, 0, 'Alonde', 'Allysa Marie', '', 'Female', '2000-11-23', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(31, 0, 0, 'Formanes', 'Christian Lee', '', 'Male', '2003-06-01', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(32, 0, 0, 'Santos', 'Rodwin', '', 'Male', '2001-09-22', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(33, 0, 0, 'Ramirez', 'Zhianne', '', 'Male', '2004-02-15', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(34, 0, 0, 'Coronel', 'Cristel', '', 'Female', '2003-10-25', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(35, 0, 0, 'Fabian', 'Jude Yman', '', 'Male', '2001-03-15', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(36, 0, 0, 'Cabral', 'Arman', '', 'Male', '2002-08-01', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(37, 0, 0, 'Bellosillo', 'Erwin', '', 'Male', '0000-00-00', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(38, 0, 0, 'Sta. Maria', 'Franchesca Redlyn', '', 'Female', '2003-10-22', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(39, 0, 0, 'Balagtas', 'Daisy', '', 'Female', '2002-08-23', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(40, 0, 0, 'Binayug', 'Jezreen', '', 'Female', '2001-10-29', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(41, 0, 0, 'Argallon', 'Adrianne Mark', '', 'Male', '2003-09-29', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(42, 0, 0, 'Orato', 'Drian', '', 'Male', '2003-07-26', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(43, 0, 0, 'Sarabillo', 'Marchel Jane', '', 'Female', '2004-12-05', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(44, 0, 0, 'Aguiluz', 'John Paul', '', 'Male', '2003-07-11', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(45, 0, 0, 'Salentes', 'Krisha Xuxa', '', 'Female', '2003-06-20', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(46, 0, 0, 'Fernandez', 'Allison', '', 'Female', '2001-03-18', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(47, 0, 0, 'Viado', 'Mikkaella', '', 'Female', '2001-09-15', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(48, 0, 0, 'Pelarios', 'Christopher', '', 'Male', '2003-11-29', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(49, 0, 0, 'Ladion', 'Fred Aldreged', '', 'Male', '2000-05-21', 'Catholic', 0, '', '', '', '', '', 'Juan Dela Cruz', 'Juan Dela Cruz', 'Juan Dela Cruz', 123456789, ''),
(99, 1, 1, 'SAD', 'SAD', 'SAD', 'Male', '1989-01-31', 'SAD', 11, 'SAD', 'SAD', 'SAD', 'SAD', 'SAD', 'SAD', 'SAD', 'SAD', 2147483647, ''),
(123, 1, 11, 'Colminas', 'Julius', 'D.', 'Male', '1998-12-30', 'Catholic', -1, 'Dahlia', 'Roxas', 'Quezon City', 'Pampanga', 'Desiderio Garlan', 'Jerry Cayme', 'Jerry Cayme', 'Father', 123132, 'None'),
(124, 0, 0, 'Agor', 'Jerry', 'C.', 'Female', '2004-12-31', 'Catholic', -1, 'Dahlia', 'Roxas', 'Quezon City', 'Pampanga', 'SAD', 'Jerry Cayme', 'Jerry Cayme', 'Father', 987654321, ''),
(125, 1, 11, 'Agorses', 'Jerry', 'C.', 'Male', '2002-01-31', 'Catholic', -1, 'Dahlia', 'Roxas', 'Quezon City', 'Pampanga', 'Jerry Cayme', 'Lucita Desiderio', 'Jerry Cayme', 'Father', 123132, 'None'),
(126, 2, 12, 'Cayme', 'Julius', 'C', 'Male', '1997-12-15', '', 123145, 'Dahlia', 'Roxas', 'Quezon City', 'Pampanga', 'Desiderio Garlan', 'SAD', 'Jerome Solleza', 'SAD', 123132, 'None'),
(222, 1, 1, 'RED', 'RED', 'RED', 'Female', '2000-10-29', 'Catholic', 4, 'Dalaga', 'SAD', 'SAD', 'Pampanga', 'Desiderio Garlan', 'Lucita Desiderio', 'Jerry Cayme', 'Father', 111111, ''),
(1000, 0, 0, '$lname', '$fname', '$mname', '$gender', '0000-00-00', '$religion', 0, '$street', '$barangay', '$municipality', '$province', '$father', '$mother', '$guardian', '$relation', 0, '$remarks'),
(1001, 0, 0, '$lname', '$fname', '$mname', '$gender', '0000-00-00', '$religion', 0, '$street', '$barangay', '$municipality', '$province', '$father', '$mother', '$guardian', '$relation', 0, '$remarks');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_table`
--

CREATE TABLE `teachers_table` (
  `id` int(10) NOT NULL,
  `em_id` int(11) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `f_source` varchar(30) DEFAULT NULL,
  `pos_desig` varchar(30) DEFAULT NULL,
  `em_status` varchar(30) DEFAULT NULL,
  `deg_post` varchar(30) DEFAULT NULL,
  `m_s_training` varchar(30) DEFAULT NULL,
  `minor` varchar(30) DEFAULT NULL,
  `subjects` varchar(30) DEFAULT NULL,
  `grade_section` varchar(30) DEFAULT NULL,
  `day` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_table`
--

INSERT INTO `teachers_table` (`id`, `em_id`, `last_name`, `first_name`, `middle_name`, `class`, `gender`, `f_source`, `pos_desig`, `em_status`, `deg_post`, `m_s_training`, `minor`, `subjects`, `grade_section`, `day`) VALUES
(1, NULL, 'Colminas', 'Julius', '', 'ICT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `track_strand`
--

CREATE TABLE `track_strand` (
  `lrn` int(10) NOT NULL,
  `ts_id` int(10) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `year1` int(2) NOT NULL,
  `year2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_strand`
--

INSERT INTO `track_strand` (`lrn`, `ts_id`, `description`, `year1`, `year2`) VALUES
(1, 1, 'ICT', 11, 12),
(2, 2, 'BRS', 11, 12),
(3, 3, 'HOS', 11, 12),
(4, 4, 'ABM', 11, 12),
(5, 5, 'HUMMS', 11, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tvl_courses`
--

CREATE TABLE `tvl_courses` (
  `lrn` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(2) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'A'),
(2, 'student', 'student', 'user'),
(3, 'teacher', 'teacher', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_report`
--
ALTER TABLE `attendance_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`lrn`);

--
-- Indexes for table `grade_table`
--
ALTER TABLE `grade_table`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `nc_table`
--
ALTER TABLE `nc_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition_status`
--
ALTER TABLE `nutrition_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks_table`
--
ALTER TABLE `remarks_table`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `section_table`
--
ALTER TABLE `section_table`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `semerter_table`
--
ALTER TABLE `semerter_table`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `semester_sy_status`
--
ALTER TABLE `semester_sy_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`lrn`);

--
-- Indexes for table `teachers_table`
--
ALTER TABLE `teachers_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track_strand`
--
ALTER TABLE `track_strand`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `tvl_courses`
--
ALTER TABLE `tvl_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_report`
--
ALTER TABLE `attendance_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade_table`
--
ALTER TABLE `grade_table`
  MODIFY `grade_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nc_table`
--
ALTER TABLE `nc_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nutrition_status`
--
ALTER TABLE `nutrition_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remarks_table`
--
ALTER TABLE `remarks_table`
  MODIFY `code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `school_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `sy_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section_table`
--
ALTER TABLE `section_table`
  MODIFY `section_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semerter_table`
--
ALTER TABLE `semerter_table`
  MODIFY `sem_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester_sy_status`
--
ALTER TABLE `semester_sy_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `lrn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `teachers_table`
--
ALTER TABLE `teachers_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `track_strand`
--
ALTER TABLE `track_strand`
  MODIFY `ts_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tvl_courses`
--
ALTER TABLE `tvl_courses`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
