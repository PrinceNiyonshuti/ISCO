-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 09:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shift_ms_isco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` longtext DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `names` longtext DEFAULT NULL,
  `u_type_id` int(100) DEFAULT NULL,
  `tel` longtext DEFAULT NULL,
  `mail` longtext DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `names`, `u_type_id`, `tel`, `mail`, `profile`) VALUES
(1, 'master', '43ph8t0B4Wj0MHeX0wmvHg==', 'admin', 1, '0788309017', 'test@gmail.com', 'isco-rwanda.jpg'),
(2, 'nicky', '43ph8t0B4Wj0MHeX0wmvHg==', 'john ', 1, '243556778', 'dfghj@gmail.com', 'minions_bob_joy_107226_2880x1800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_records`
--

CREATE TABLE `assignment_records` (
  `assing_id` int(11) NOT NULL,
  `site_id` int(50) NOT NULL,
  `supervisor_id` int(50) NOT NULL,
  `sec_id` int(50) NOT NULL,
  `shift_id` int(50) NOT NULL,
  `gate_id` int(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment_records`
--

INSERT INTO `assignment_records` (`assing_id`, `site_id`, `supervisor_id`, `sec_id`, `shift_id`, `gate_id`, `created_date`) VALUES
(1, 1, 1, 0, 0, 0, '2020-08-18 08:58:14'),
(2, 1, 1, 0, 0, 0, '2020-08-18 09:02:47'),
(3, 1, 1, 0, 0, 0, '2020-08-18 09:14:22'),
(4, 1, 0, 4, 0, 0, '2020-08-18 10:28:08'),
(5, 1, 0, 3, 0, 0, '2020-08-18 10:59:04'),
(6, 1, 0, 4, 0, 0, '2020-08-18 11:11:08'),
(7, 0, 0, 3, 1, 0, '2020-08-19 12:52:40'),
(8, 0, 0, 3, 2, 0, '2020-08-19 01:18:14'),
(9, 0, 0, 3, 0, 1, '2020-08-19 08:36:10'),
(10, 0, 0, 3, 0, 1, '2020-08-19 08:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_security`
--

CREATE TABLE `assignment_security` (
  `assing_id` int(11) NOT NULL,
  `site_id` int(50) NOT NULL,
  `sec_id` int(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment_security`
--

INSERT INTO `assignment_security` (`assing_id`, `site_id`, `sec_id`, `created_date`) VALUES
(2, 1, 3, '2020-08-18 10:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_supervisor`
--

CREATE TABLE `assignment_supervisor` (
  `assing_id` int(11) NOT NULL,
  `site_id` int(50) NOT NULL,
  `supervisor_id` int(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment_supervisor`
--

INSERT INTO `assignment_supervisor` (`assing_id`, `site_id`, `supervisor_id`, `created_date`) VALUES
(1, 1, 1, '2020-08-18 08:53:25'),
(2, 1, 1, '2020-08-18 08:54:02'),
(3, 1, 1, '2020-08-18 08:55:00'),
(4, 1, 1, '2020-08-18 08:56:31'),
(5, 1, 1, '2020-08-18 08:58:14'),
(6, 1, 1, '2020-08-18 09:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `gate`
--

CREATE TABLE `gate` (
  `gate_id` int(11) NOT NULL,
  `gate_name` longtext NOT NULL,
  `site_id` int(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gate`
--

INSERT INTO `gate` (`gate_id`, `gate_name`, `site_id`, `created_date`) VALUES
(1, 'Noth Gate ', 1, '2020-08-19 08:23:23'),
(2, 'South Gate', 1, '2020-08-19 08:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `sec_id` int(11) NOT NULL,
  `sec_code` longtext DEFAULT NULL,
  `sec_names` longtext DEFAULT NULL,
  `sec_gender` mediumtext DEFAULT NULL,
  `sec_dob` date DEFAULT NULL,
  `sec_tel` longtext DEFAULT NULL,
  `sec_email` longtext DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `shift_id` int(50) DEFAULT NULL,
  `gate_id` int(50) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`sec_id`, `sec_code`, `sec_names`, `sec_gender`, `sec_dob`, `sec_tel`, `sec_email`, `site_id`, `shift_id`, `gate_id`, `profile`, `reg_date`) VALUES
(3, 'ISCO-3272', 'John Doe', 'Male', '1990-06-05', '0780589900', 'johndoe@gmail.com', 1, 2, 1, 'person_1.jpg', '2020-08-18 07:45:50'),
(4, 'ISCO-7119', 'Ranger Doe', 'Male', '1997-01-28', '0780589950', 'doeranger@gmail.com', NULL, NULL, NULL, 'person_3.jpg', '2020-08-18 10:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `shifts_record`
--

CREATE TABLE `shifts_record` (
  `shift_id` int(50) NOT NULL,
  `sec_code` longtext NOT NULL,
  `site_id` int(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time DEFAULT NULL,
  `shift_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shifts_record`
--

INSERT INTO `shifts_record` (`shift_id`, `sec_code`, `site_id`, `start_time`, `end_time`, `shift_date`) VALUES
(1, 'ISCO-3272', 1, '01:53:10', '01:54:54', '2020-08-19'),
(2, 'ISCO-3272', 1, '01:55:02', NULL, '2020-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `shift_assign`
--

CREATE TABLE `shift_assign` (
  `assign_id` int(11) NOT NULL,
  `shift_id` int(50) NOT NULL,
  `sec_id` int(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift_assign`
--

INSERT INTO `shift_assign` (`assign_id`, `shift_id`, `sec_id`, `created_date`) VALUES
(1, 2, 3, '2020-08-19 12:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `site_id` int(11) NOT NULL,
  `site_name` longtext NOT NULL,
  `site_address` longtext NOT NULL,
  `site_email` longtext NOT NULL,
  `site_tel` longtext NOT NULL,
  `site_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `supervisor_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `site_name`, `site_address`, `site_email`, `site_tel`, `site_date`, `supervisor_id`) VALUES
(1, 'CHIC', 'Kigali City , Down Town , KN 35 St', 'chic@gmail.com', '0780589950', '2020-08-18 19:02:48', 1),
(2, 'Simba DownTown', 'Kigali City , KK 34 st', 'simbadowntown@gmail.com', '0782435678', '2020-08-18 09:21:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervisor_id` int(11) NOT NULL,
  `username` longtext DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `supervisor_name` longtext DEFAULT NULL,
  `gender` longtext DEFAULT NULL,
  `u_type_id` int(100) DEFAULT NULL,
  `tel` longtext DEFAULT NULL,
  `mail` longtext DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supervisor_id`, `username`, `password`, `supervisor_name`, `gender`, `u_type_id`, `tel`, `mail`, `profile`, `site_id`) VALUES
(1, '0780589950', 'N1pX9tvxV1e7txDks1HaPw==', 'Supervisor Ranger', 'Male', 2, '0780589950', 'supervisor1@gmail.com', 'WhatsApp Image 2020-07-28 at 4.32.03 PM.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift`
--

CREATE TABLE `tbl_shift` (
  `shift_id` int(11) NOT NULL,
  `shift_name` longtext NOT NULL,
  `shift_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shift`
--

INSERT INTO `tbl_shift` (`shift_id`, `shift_name`, `shift_desc`) VALUES
(1, 'Morning Shift', '06:00 A.M - 06:00 P.M'),
(2, 'Night Shift', '06:00 P.M - 06:00 A.M');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `u_type_id` int(11) NOT NULL,
  `u_type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`u_type_id`, `u_type_name`) VALUES
(1, 'admin'),
(2, 'Supervisor'),
(3, 'Site'),
(4, 'Security');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `u_type_id` (`u_type_id`);

--
-- Indexes for table `assignment_records`
--
ALTER TABLE `assignment_records`
  ADD PRIMARY KEY (`assing_id`);

--
-- Indexes for table `assignment_security`
--
ALTER TABLE `assignment_security`
  ADD PRIMARY KEY (`assing_id`);

--
-- Indexes for table `assignment_supervisor`
--
ALTER TABLE `assignment_supervisor`
  ADD PRIMARY KEY (`assing_id`);

--
-- Indexes for table `gate`
--
ALTER TABLE `gate`
  ADD PRIMARY KEY (`gate_id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`sec_id`),
  ADD KEY `u_type_id` (`sec_tel`(768));

--
-- Indexes for table `shifts_record`
--
ALTER TABLE `shifts_record`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `shift_assign`
--
ALTER TABLE `shift_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supervisor_id`),
  ADD KEY `u_type_id` (`u_type_id`);

--
-- Indexes for table `tbl_shift`
--
ALTER TABLE `tbl_shift`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`u_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignment_records`
--
ALTER TABLE `assignment_records`
  MODIFY `assing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignment_security`
--
ALTER TABLE `assignment_security`
  MODIFY `assing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignment_supervisor`
--
ALTER TABLE `assignment_supervisor`
  MODIFY `assing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gate`
--
ALTER TABLE `gate`
  MODIFY `gate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shifts_record`
--
ALTER TABLE `shifts_record`
  MODIFY `shift_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shift_assign`
--
ALTER TABLE `shift_assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `supervisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_shift`
--
ALTER TABLE `tbl_shift`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `u_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
