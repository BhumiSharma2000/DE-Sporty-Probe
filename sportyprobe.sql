-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 11:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportyprobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation_master`
--

CREATE TABLE `allocation_master` (
  `ac_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `nr_id` int(11) NOT NULL,
  `ac_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation_master`
--

INSERT INTO `allocation_master` (`ac_id`, `u_id`, `coach_id`, `physio_id`, `trainer_id`, `nr_id`, `ac_date`) VALUES
(1, 9, 15, 12, 14, 13, '2019-02-07'),
(2, 11, 15, 12, 14, 13, '2019-02-07'),
(3, 10, 15, 12, 14, 13, '2019-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `authority_master`
--

CREATE TABLE `authority_master` (
  `ar_id` int(11) NOT NULL,
  `ar_name` char(50) NOT NULL,
  `s_id` int(11) NOT NULL,
  `off_add` varchar(100) NOT NULL,
  `ar_contact` int(11) NOT NULL,
  `ar_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority_master`
--

INSERT INTO `authority_master` (`ar_id`, `ar_name`, `s_id`, `off_add`, `ar_contact`, `ar_email`) VALUES
(8, 'BCCI', 1, 'Delhi', 1234564890, 'bcci@gmail.com'),
(9, 'Wrestling Federation', 6, 'Punjab', 1234567891, 'JaygHJDFohil889@gmail.com'),
(10, 'BAI', 1, 'New Delhi', 1234567891, 'BAI123@gmail.com'),
(11, 'IPBA', 6, 'Mumbai', 1234567891, 'sdsa@df.com'),
(12, 'AFC', 6, 'Dwarka, Delhi', 1234567891, 'AFC@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `state_id`, `city_name`) VALUES
(5, 1, 'kutch'),
(11, 1, 'Surat'),
(12, 1, 'Ahmedabad'),
(13, 1, 'Botad'),
(14, 6, 'Udaypur'),
(15, 6, 'Jaipur'),
(16, 24, 'Mumbai'),
(17, 25, 'peru');

-- --------------------------------------------------------

--
-- Table structure for table `competition_master`
--

CREATE TABLE `competition_master` (
  `cpt_id` int(11) NOT NULL,
  `cmp_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  `mngr_id` int(11) NOT NULL,
  `opp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competition_master`
--

INSERT INTO `competition_master` (`cpt_id`, `cmp_name`, `status`, `date`, `venue`, `u_id`, `mngr_id`, `opp`) VALUES
(5, 'XyZ', 'Win', '2021-04-09', 'Ahmedabad', 9, 8, 'Blue Tiger'),
(6, 'Wty', 'Win', '2021-04-13', 'Ahmedabad', 9, 8, 'Winner');

-- --------------------------------------------------------

--
-- Table structure for table `diet_master`
--

CREATE TABLE `diet_master` (
  `di_id` int(11) NOT NULL,
  `nr_id` int(11) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `diet_plan` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet_master`
--

INSERT INTO `diet_master` (`di_id`, `nr_id`, `u_id`, `diet_plan`, `from_date`, `to_date`) VALUES
(3, NULL, 9, '1549510142.212fe3bc31309f8aa9dd8209c57a9494.png', '2019-02-10', '2019-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure_type_master`
--

CREATE TABLE `expenditure_type_master` (
  `ex_type_id` int(11) NOT NULL,
  `ex_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenditure_type_master`
--

INSERT INTO `expenditure_type_master` (`ex_type_id`, `ex_type_name`) VALUES
(3, 'Travel'),
(4, 'Health'),
(5, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `expense_master`
--

CREATE TABLE `expense_master` (
  `expense_id` int(11) NOT NULL,
  `ex_type_id` int(11) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `expense` double NOT NULL,
  `proof` varchar(100) NOT NULL,
  `enterby` char(20) NOT NULL,
  `cpt_id` int(11) NOT NULL,
  `nutrition` varchar(100) NOT NULL,
  `tr_eq` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_master`
--

INSERT INTO `expense_master` (`expense_id`, `ex_type_id`, `u_id`, `from_date`, `to_date`, `expense`, `proof`, `enterby`, `cpt_id`, `nutrition`, `tr_eq`) VALUES
(8, 3, 9, '2021-04-02', '2021-04-17', 5000, '1617290444.download.jpg', '', 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_master`
--

CREATE TABLE `fitness_master` (
  `f_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `bmr` float NOT NULL,
  `bmi` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `chest` float NOT NULL,
  `waist` float NOT NULL,
  `protein` float NOT NULL,
  `fat` float NOT NULL,
  `water` float NOT NULL,
  `biceps` float NOT NULL,
  `mes_date` date NOT NULL,
  `up_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitness_master`
--

INSERT INTO `fitness_master` (`f_id`, `u_id`, `trainer_id`, `bmr`, `bmi`, `height`, `weight`, `chest`, `waist`, `protein`, `fat`, `water`, `biceps`, `mes_date`, `up_date`) VALUES
(1, 9, NULL, 24.5, 23.5, 5.6, 78, 34, 36, 57, 34, 60, 13.5, '2019-01-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `injuries_master`
--

CREATE TABLE `injuries_master` (
  `ir_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `ir_occ_date` date NOT NULL,
  `ir_fin_date` date NOT NULL,
  `match_event_name` varchar(255) NOT NULL,
  `ir_des` varchar(255) NOT NULL,
  `hos_name` varchar(30) NOT NULL,
  `ir_expenditure` int(11) NOT NULL,
  `physio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `injuries_master`
--

INSERT INTO `injuries_master` (`ir_id`, `u_id`, `ir_occ_date`, `ir_fin_date`, `match_event_name`, `ir_des`, `hos_name`, `ir_expenditure`, `physio_id`) VALUES
(1, 9, '2019-02-01', '2019-02-04', 'RRQ vs PRQ', 'HamString Strain', 'CIMS Hospital', 6000, NULL),
(2, 9, '2019-02-01', '2019-02-04', 'RRQ vs PRQ', 'Ankle sprain', 'Apolo', 12000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medical_prof_master`
--

CREATE TABLE `medical_prof_master` (
  `m_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `ir_id` int(11) DEFAULT NULL,
  `past_dieses` varchar(50) NOT NULL,
  `blood_grp` varchar(5) NOT NULL,
  `physio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_prof_master`
--

INSERT INTO `medical_prof_master` (`m_id`, `u_id`, `ir_id`, `past_dieses`, `blood_grp`, `physio_id`) VALUES
(1, 9, NULL, 'diabetes', 'A+', NULL),
(2, 9, NULL, 'diabetes', 'A+', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `performance_master`
--

CREATE TABLE `performance_master` (
  `pr_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `vid_url` text DEFAULT NULL,
  `cpt_id` int(11) NOT NULL,
  `spe_achivment` varchar(200) NOT NULL,
  `coach_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance_master`
--

INSERT INTO `performance_master` (`pr_id`, `u_id`, `vid_url`, `cpt_id`, `spe_achivment`, `coach_id`) VALUES
(2, 9, '1549509219.WhatsApp Video 2019-02-07 at 8.23.10 AM.mp4', 1, 'Winner for continuously 2 time', NULL),
(3, 9, '1549509233.WhatsApp Video 2019-02-07 at 8.25.28 AM.mp4', 1, 'He has won the matches several time for India', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `role_id` int(11) NOT NULL,
  `role_name` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`role_id`, `role_name`) VALUES
(7, 'Sport Manager'),
(9, 'Athlete'),
(12, 'Coach'),
(13, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sport_category`
--

CREATE TABLE `sport_category` (
  `sc_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_category`
--

INSERT INTO `sport_category` (`sc_id`, `s_id`, `cat_name`) VALUES
(1, 6, 'T20'),
(2, 6, 'ODI'),
(3, 6, 'TEST CRICKET'),
(4, 1, 'MINIMUMWEIGHT 105 POUNDS'),
(5, 1, 'LIGHT FLYWEIGHT 108 POUNDS'),
(6, 8, 'ICL'),
(7, 8, 'SUPER CUP'),
(8, 11, 'GRECO-ROMAN WRESTLING'),
(9, 11, 'FREESTYLE WRESTLING'),
(10, 9, 'MEN\'S SINGLES'),
(11, 9, 'MEN\'S DOUBLES\r\n                                   ');

-- --------------------------------------------------------

--
-- Table structure for table `sport_master`
--

CREATE TABLE `sport_master` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_master`
--

INSERT INTO `sport_master` (`s_id`, `s_name`) VALUES
(1, 'BOXING'),
(6, 'CRICKET'),
(8, 'FOOTBAll'),
(9, 'BADMINTION'),
(11, 'WRESTLING');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `state_id` int(11) NOT NULL,
  `state_name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_id`, `state_name`) VALUES
(1, 'Gujrat'),
(6, 'Rajsthan'),
(24, 'Maharastra'),
(25, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_lname` varchar(20) NOT NULL,
  `img_url` varchar(200) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `u_gender` char(6) NOT NULL,
  `u_bdate` date NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_contactno` bigint(100) NOT NULL,
  `u_password` varchar(15) NOT NULL,
  `ar_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `isactive` char(10) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `up_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`u_id`, `u_fname`, `u_lname`, `img_url`, `city_id`, `state_id`, `u_gender`, `u_bdate`, `u_email`, `u_contactno`, `u_password`, `ar_id`, `s_id`, `isactive`, `role_id`, `sc_id`, `reg_date`, `up_date`) VALUES
(8, 'Vishv', 'Kakadiya', NULL, 14, 6, 'male', '1889-02-09', 'dipak123@gmail.com', 2147483647, '12345678', 9, 11, NULL, 7, 11, NULL, NULL),
(9, 'Bhumi', 'Sharma', '1549508042.2.jpg', 5, 1, 'Female', '2000-02-09', 'sharmabhumi2000@gmail.com', 2147483647, '12345678', 9, 11, NULL, 9, 11, NULL, NULL),
(15, 'Suraj', 'Sondagar', '1549508349.2.jpg', 12, 1, 'male', '2000-02-09', 'suraj@gmail.com', 2147483647, '12345678', 9, 11, NULL, 12, 11, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation_master`
--
ALTER TABLE `allocation_master`
  ADD PRIMARY KEY (`ac_id`),
  ADD KEY `coach_id` (`coach_id`),
  ADD KEY `nr_id` (`nr_id`),
  ADD KEY `physio_id` (`physio_id`),
  ADD KEY `trainer_id` (`trainer_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `authority_master`
--
ALTER TABLE `authority_master`
  ADD PRIMARY KEY (`ar_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `competition_master`
--
ALTER TABLE `competition_master`
  ADD PRIMARY KEY (`cpt_id`),
  ADD KEY `mngr_id` (`mngr_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `diet_master`
--
ALTER TABLE `diet_master`
  ADD PRIMARY KEY (`di_id`),
  ADD KEY `nr_id` (`nr_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `expenditure_type_master`
--
ALTER TABLE `expenditure_type_master`
  ADD PRIMARY KEY (`ex_type_id`);

--
-- Indexes for table `expense_master`
--
ALTER TABLE `expense_master`
  ADD PRIMARY KEY (`expense_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `expense_master_ibfk_3` (`ex_type_id`),
  ADD KEY `cpt_id` (`cpt_id`);

--
-- Indexes for table `fitness_master`
--
ALTER TABLE `fitness_master`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `physio_id` (`trainer_id`);

--
-- Indexes for table `injuries_master`
--
ALTER TABLE `injuries_master`
  ADD PRIMARY KEY (`ir_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `physio_id` (`physio_id`);

--
-- Indexes for table `medical_prof_master`
--
ALTER TABLE `medical_prof_master`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `ir_id` (`ir_id`),
  ADD KEY `physio_id` (`physio_id`);

--
-- Indexes for table `performance_master`
--
ALTER TABLE `performance_master`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `coach_id` (`coach_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `cpt_id` (`cpt_id`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sport_category`
--
ALTER TABLE `sport_category`
  ADD PRIMARY KEY (`sc_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `sport_master`
--
ALTER TABLE `sport_master`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`,`u_contactno`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `ar_id` (`ar_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `sc_id` (`sc_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `s_id` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation_master`
--
ALTER TABLE `allocation_master`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authority_master`
--
ALTER TABLE `authority_master`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `competition_master`
--
ALTER TABLE `competition_master`
  MODIFY `cpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diet_master`
--
ALTER TABLE `diet_master`
  MODIFY `di_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenditure_type_master`
--
ALTER TABLE `expenditure_type_master`
  MODIFY `ex_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense_master`
--
ALTER TABLE `expense_master`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fitness_master`
--
ALTER TABLE `fitness_master`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `injuries_master`
--
ALTER TABLE `injuries_master`
  MODIFY `ir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_prof_master`
--
ALTER TABLE `medical_prof_master`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `performance_master`
--
ALTER TABLE `performance_master`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_master`
--
ALTER TABLE `role_master`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sport_category`
--
ALTER TABLE `sport_category`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sport_master`
--
ALTER TABLE `sport_master`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocation_master`
--
ALTER TABLE `allocation_master`
  ADD CONSTRAINT `allocation_master_ibfk_1` FOREIGN KEY (`coach_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `allocation_master_ibfk_2` FOREIGN KEY (`nr_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `allocation_master_ibfk_3` FOREIGN KEY (`physio_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `allocation_master_ibfk_4` FOREIGN KEY (`trainer_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `allocation_master_ibfk_5` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `authority_master`
--
ALTER TABLE `authority_master`
  ADD CONSTRAINT `authority_master_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `sport_master` (`s_id`);

--
-- Constraints for table `city_master`
--
ALTER TABLE `city_master`
  ADD CONSTRAINT `city_master_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state_master` (`state_id`);

--
-- Constraints for table `competition_master`
--
ALTER TABLE `competition_master`
  ADD CONSTRAINT `competition_master_ibfk_1` FOREIGN KEY (`mngr_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `competition_master_ibfk_3` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `diet_master`
--
ALTER TABLE `diet_master`
  ADD CONSTRAINT `diet_master_ibfk_1` FOREIGN KEY (`nr_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `diet_master_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `expense_master`
--
ALTER TABLE `expense_master`
  ADD CONSTRAINT `expense_master_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `expense_master_ibfk_3` FOREIGN KEY (`ex_type_id`) REFERENCES `expenditure_type_master` (`ex_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_master_ibfk_4` FOREIGN KEY (`cpt_id`) REFERENCES `competition_master` (`cpt_id`);

--
-- Constraints for table `fitness_master`
--
ALTER TABLE `fitness_master`
  ADD CONSTRAINT `fitness_master_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `fitness_master_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `injuries_master`
--
ALTER TABLE `injuries_master`
  ADD CONSTRAINT `injuries_master_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `injuries_master_ibfk_2` FOREIGN KEY (`physio_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `medical_prof_master`
--
ALTER TABLE `medical_prof_master`
  ADD CONSTRAINT `medical_prof_master_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `medical_prof_master_ibfk_2` FOREIGN KEY (`ir_id`) REFERENCES `injuries_master` (`ir_id`),
  ADD CONSTRAINT `medical_prof_master_ibfk_3` FOREIGN KEY (`physio_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `performance_master`
--
ALTER TABLE `performance_master`
  ADD CONSTRAINT `performance_master_ibfk_3` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`),
  ADD CONSTRAINT `performance_master_ibfk_4` FOREIGN KEY (`cpt_id`) REFERENCES `competition_master` (`cpt_id`);

--
-- Constraints for table `sport_category`
--
ALTER TABLE `sport_category`
  ADD CONSTRAINT `sport_category_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `sport_master` (`s_id`);

--
-- Constraints for table `user_master`
--
ALTER TABLE `user_master`
  ADD CONSTRAINT `user_master_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`),
  ADD CONSTRAINT `user_master_ibfk_2` FOREIGN KEY (`ar_id`) REFERENCES `authority_master` (`ar_id`),
  ADD CONSTRAINT `user_master_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role_master` (`role_id`),
  ADD CONSTRAINT `user_master_ibfk_4` FOREIGN KEY (`sc_id`) REFERENCES `sport_category` (`sc_id`),
  ADD CONSTRAINT `user_master_ibfk_5` FOREIGN KEY (`state_id`) REFERENCES `state_master` (`state_id`),
  ADD CONSTRAINT `user_master_ibfk_6` FOREIGN KEY (`s_id`) REFERENCES `sport_master` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
