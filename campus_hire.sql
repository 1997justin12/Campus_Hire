-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 03:02 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_hire`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CountByLeague` (OUT `countLeague` VARCHAR(50))  begin
select description as 'League',
count(jc_tblPlayers.league) as 'Count' from jc_league
left join jc_tblPlayers on
jc_league.id=jc_tblPlayers.status group by description order by Count desc;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CountByStatus` (OUT `countStatus` VARCHAR(50))  begin 
select description as 'Status',
count(jc_tblPlayers.status) as 'Count'from jc_status
left join jc_tblPlayers on
jc_status.id=jc_tblPlayers.status group by description order by Count desc;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CountLeagueByStatus` (OUT `leagueStatus` VARCHAR(50))  begin
select description as 'Status',
sum(if(jc_tblPlayers.league=1,1,0)) as 'NBA',
sum(if(jc_tblPlayers.league=2,1,0)) as 'PBA',
sum(if(jc_tblPlayers.league=3,1,0)) as 'CBA'
from jc_status left join jc_tblPlayers on
jc_tblPlayers.status=jc_status.id group by description order by NBA desc;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CountStatusByLeague` (OUT `countStatusLeague` VARCHAR(50))  begin
select description as 'League',
sum(if(jc_tblPlayers.status=1, 1, 0)) as 'Single',
sum(if(jc_tblPlayers.status=2, 1, 0)) as 'Married',
sum(if(jc_tblPlayers.status=3, 1, 0)) as 'Separated',
sum(if(jc_tblPlayers.status=4, 1, 0)) as 'Widowed'from jc_league
left join jc_tblPlayers on
jc_tblPlayers.league=jc_league.id group by description order by description desc;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllWorks` ()  begin
select * from works;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getApplication` (IN `j_id` INT, `c_id` INT, `a_id` INT)  begin
select * from application where 
job_id = j_id && company_id = c_id && applicant_id = a_id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getCount` (OUT `recCount` INT)  begin
select count(status) INTO recCount from jc_tblPlayers;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getCounts` (OUT `rec` INT)  begin
select count(status) INTO rec from jc_tblPlayers;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getNumber` (OUT `recCount` INT)  begin
select count(status) INTO recCount from jc_tblPlayers where 
recCount=status;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertApplication` (IN `j_id` INT, `c_id` INT, `a_id` INT)  begin
insert into application(job_id,company_id,applicant_id)
values
(j_id,c_id,a_id);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertIntoJob` (`c_id` INT, `c_course` VARCHAR(100), `c_description` VARCHAR(100))  begin
insert into jobs
(company_id,courses,job_description)
values
(c_id,c_course,c_description);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertIntoLeague` (`league` VARCHAR(50))  begin
insert into jc_league(description)
values
(league);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertIntoPlayers` (`jc_name` VARCHAR(50), `jc_status` INT, `jc_league` INT)  begin
insert into jc_tblPlayers
(name,status,league)
values
(jc_name,jc_status,jc_league);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertIntoStatus` (`status` VARCHAR(50))  begin
insert into jc_status(description)
values(status);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `school` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `name`, `address`, `birthdate`, `school`, `course`, `gender`, `age`, `email`, `username`, `password`, `picture`, `type`) VALUES
(1, 'Justin Cedeno', 'Sitio Tambacan Lizada Toril, Davao City', '1970-01-01', 'University of Southeastern Philippines', 'Bachelor of Science in Information Technology', 'Male', 0, 'marcjs10@yahoo.com.ph', 'marcjs1', '9fb0c791d90b36acdf717edc64e4f5d8', '', 1),
(2, 'Jasper Cello', 'Ferriol Lizada, Davao City', '1997-02-12', 'University of Mindanao', 'Bachelor of Science in Mathematics', 'Male', 0, 'jaspercello@yahoo.com', 'jaspercello', '9fb0c791d90b36acdf717edc64e4f5d8', '', 1),
(4, 'asasa', 'sasas', '1991-02-03', 'sasasas', 'asasasa', 'Female', 0, 'sasasas', 'asasasasas', 'a897ffe41b2fe6397c17004aa42f3ea5', '', 1),
(5, 'asdsadas', 'dasdasdasda', '1992-01-02', 'dasdasd', 'asdasdasdas', 'Male', 0, 'dasdasdasd', 'asdasdasdasdas', '05d862db2e28363e9df80e6cec68958d', '', 1),
(8, 'Vincent Ian Cedeno', 'Sitio Tambacan Lizada Toril, Davao City', '2010-10-06', 'St. Vincent Acadamy', 'Doctor', 'Male', 6, 'vincet_ian@yahoo.com', 'vince', '9fb0c791d90b36acdf717edc64e4f5d8', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `address`, `email`, `contact`, `username`, `password`, `type`) VALUES
(3, 'XYZ Company', 'Davao City', 'xyz_company@yahoo.com', 2147483647, 'xyz_company', '9fb0c791d90b36acdf717edc64e4f5d8', 2),
(4, 'ABC_Company', 'Davao City', 'abc_@yahoo.com', 2147483647, 'abc_co', '9fb0c791d90b36acdf717edc64e4f5d8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `company_id`, `applicant_id`, `date`) VALUES
(4, 3, 1, '2016-12-15 09:11:30'),
(5, 4, 1, '2016-12-15 09:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `company_id`, `courses`, `job_description`, `date`) VALUES
(1, 4, '3D Animators', 'Ikaw ang hulog ng langit..', '2016-12-15 09:08:34'),
(2, 3, 'Video Graphic Artist', 'The science of experiment\n          ', '2016-12-15 09:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` enum('Ongoing','Finished') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `validate_user`
--
CREATE TABLE `validate_user` (
`Username` varchar(100)
,`Password` varchar(100)
,`ID` int(11)
,`Type` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `work_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`work_id`, `name`) VALUES
(1, 'Broadcast Engineer'),
(2, 'Video Editor'),
(3, 'Video Graphic Artist'),
(4, 'Visual Artist Designer'),
(5, '3D modelers'),
(6, '3D Artist'),
(7, '3D Animators'),
(8, 'Flash Animators'),
(9, 'Animation Artist'),
(10, 'Clean-Up Artist'),
(11, 'In-between Artist/In-betweener'),
(12, 'Clean-Up Art Checker'),
(13, 'In-between Checker'),
(14, 'Animation Checker'),
(15, 'Web Designer'),
(16, 'Multimedia Artist'),
(17, 'Library builder'),
(18, 'Layout artist'),
(19, '2D digital animator'),
(20, 'Graphic Assistants'),
(21, 'Java Programmers'),
(22, 'Oracle Developers'),
(23, 'Web Developers'),
(24, 'IT Programmers'),
(25, 'Software Development'),
(26, 'Computer Programmers'),
(27, 'Information Technology'),
(28, 'Systems Analyst'),
(29, 'Accountant'),
(30, 'HR Outsourcing Specialist'),
(31, 'Call Center Agent'),
(32, 'Medical Transcription Editor'),
(33, 'Medical Transcription'),
(34, 'Financial Accountants'),
(35, 'Technical Support Engineers'),
(36, 'Autocad Operators'),
(37, 'Legal Researchers'),
(38, 'Legal Analysts');

-- --------------------------------------------------------

--
-- Structure for view `validate_user`
--
DROP TABLE IF EXISTS `validate_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `validate_user`  AS  select `applicant`.`username` AS `Username`,`applicant`.`password` AS `Password`,`applicant`.`applicant_id` AS `ID`,`applicant`.`type` AS `Type` from `applicant` union select `company`.`username` AS `Username`,`company`.`password` AS `Password`,`company`.`company_id` AS `ID`,`company`.`type` AS `Type` from `company` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
