-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 11:35 AM
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
-- Database: `girlengineer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `creation_date` varchar(30) NOT NULL,
  `modification_date` varchar(30) DEFAULT NULL,
  `last_login_date` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `phone_number`, `email`, `creation_date`, `modification_date`, `last_login_date`, `status`, `password`) VALUES
(1, 'first2', 'enter last nafgfd', '22425', 'lexmzuzu@gmail.com', '2023-10-17 15:16:02', '2023-10-23 11:02:09', '2023-10-23 10:51:29', '3', '$2y$10$1mfyCOKe5pVRdnCEdcwY/OkuHAxrHFZc5yMfYH/0EAcIoNcmi.7Ce'),
(3, 'alexi', 'kaunda', '8765865', 'kaunda@gmail.com', '2023-10-18 22:48:13', '2023-10-23 11:47:22', NULL, '3', '$2y$10$Vc03BZKs.nBdymm/uiZkye3U.NO2hmBc7kuzuZ/k.KpUWzfoH2L12'),
(4, 'alexi', 'kaunda', '8765865', 'kaunda2@gmail.com', '2023-10-18 22:52:45', NULL, NULL, '2', '$2y$10$cv7gdsY.t3leYGnYid31j.QOgbd8WMay/feSIRP1nNGb34/hr9yj2'),
(5, 'noel', 'luhanga  ', '43546766    ', 'luhanga@gmail.com', '2023-10-18 22:55:28', '2023-10-19 11:25:57', '2023-10-18 23:38:00', '3', '$2y$10$sc7FNTyj.nTjyhAa2DyOluJrt7bATb1rM2XkDRoc0Yg8D3/K.tcsO');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `creation_date` varchar(15) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `status`, `creation_date`, `picture`) VALUES
(1, 'project 1  updated', '                    <b>Assignment Objective:</b> The goal of this Assignment is to learn how to work with object-oriented \r\nprogramming and the associated logic. \r\nAssignment Deliverables: \r\n1. Work in groups and prepare to present a working program. Maintain the name of each function name \r\nfrom the below table provided.                     ', '1', '2023-10-20 08:5', 'The Witcher 3 Wild Hunt Blood And Wine Wallpaper 5120x2880 - gil5on.jpg'),
(2, 'project 2', '1. All programming conventions mentioned in class should be followed. \r\n2. You should test your program before submitting. \r\n3. Your program must be developed and implemented in Eclipe Environment\r\n4. Late submission will attract deduction of marks.&nbsp;', '2', '2023-10-20 09:0', '05668_HD.jpg'),
(3, 'carrera  gt3', '  Generally speaking, there are three types of exams, Multiple Choice exams, Technical Writing exams, \r\nand Analytical Programming exams, of courses offered by the ICT department. The grade of each type of \r\nthe exams determined is based on the <b>following</b>:  ', '1', '2023-10-20 09:0', 'car_porsche_911_carrera_cool_wallpaper.jpg'),
(4, 'black hole2', '      very class that you design must have a toString() to return the current data of the object and a \r\ngetExamGrade( ) method to return the final grade of an exam. \r\nValidations for the user inputs are required in this assignment. \r\nFor the application class, ITExamGrade, it has two sub-methods. One is used to accept an object type \r\nand to fill the content of that object. Another is to display all the object information that is shown in the<b> \r\nlast screenshots    </b>  ', '2', '2023-10-20 09:0', 'jeremy-perkins-281327-unsplash.jpg'),
(5, 'MZUZU CITY EXECUTIVE COMMITTEE APPROVES GIRL ENGINEER TO DELIVER STEM           WORKSHOPS FOR GIRLS IN PRIMARY SCHOOLS UNDER THE CITY.', '<p><span lang=\"EN-GB\">Mzuzu, Malawi - The Mzuzu City Executive Committee has\r\napproved the Girl Engineer organization to deliver STEM workshops for girls in\r\nprimary schools under the city. The announcement was made during a presentation\r\nby Girl Engineer Executive Director, Mr. Ganizani Sisya, on Tuesday, 29 March,\r\n2022, at the Mzuzu City Council Chamber.<o:p></o:p></span></p><br><br>\r\n\r\n<p><span lang=\"EN-GB\">The presentation focused on the need to empower young girls\r\nto pursue careers in science, technology, engineering, and mathematics (STEM)\r\nfields, which are often dominated by males. Mr. Sisya highlighted the\r\nchallenges that girls face in accessing quality STEM education, which can be a\r\nresult of cultural and societal barriers.<o:p></o:p></span></p><br><p><span lang=\"EN-GB\">Girls often face cultural and societal barriers that limit\r\ntheir participation in STEM fields,\" said Mr. Sisya. \"We believe that\r\nby providing workshops to girls at an early age, we can ignite their interest\r\nin STEM subjects and break down these barriers.<o:p></o:p></span></p>\r\n\r\n<p><span lang=\"EN-GB\">The Girl Engineer organization aims to promote gender\r\nequality in STEM fields by empowering young girls with skills and knowledge\r\nthat can enable them to pursue careers in these fields. The organization plans\r\nto conduct STEM workshops in primary schools under the city to help young girls\r\nbuild confidence and interest in STEM subjects.<o:p></o:p></span></p>\r\n\r\n<p><span lang=\"EN-GB\">The Mzuzu City Executive Committee expressed its support\r\nfor the Girl Engineer organization\'s initiative and commended its efforts to\r\npromote gender equality in STEM fields. The committee emphasized the need to\r\ninvest in the education of young girls and promote equal opportunities for all.<o:p></o:p></span></p><br><br>\r\n\r\n<p><span lang=\"EN-GB\">The Girl Engineer organization plans to conduct the\r\nworkshops as soon as funds are made available. The workshops will include\r\nhands-on activities, mentorship sessions, and career guidance to inspire young\r\ngirls to pursue STEM careers.<o:p></o:p></span></p>\r\n\r\n<p><span lang=\"EN-GB\">With the approval of the Mzuzu City Executive Committee,\r\nthe Girl Engineer organization has taken a significant step in promoting gender\r\nequality in STEM fields and empowering young girls to pursue their dreams<o:p></o:p></span></p>', '1', '2023-10-23 15:2', 'MZUZU CITY EXECUTIVE COMMITTEE APPROVES GIRL ENGINEER.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `user_id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `creation_date` varchar(30) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`user_id`, `name`, `position`, `role`, `creation_date`, `picture`) VALUES
(1, 'alexi kaunda king', 'DONT KNOW', 'team member', '2023-10-20 12:37:57', '15 Fifa 17 - gil5on.jpg'),
(2, 'noel luhanga', 'kind of', 'team member', '2023-10-20 12:41:19', 'Bloodborne Ps4.jpg'),
(3, 'benard mbowe', 'unknown position', 'volunteer', '2023-10-20 12:43:53', '8be9a47991b6dd1ab94ea204b3cbf4e1.jpg'),
(4, 'james harden', 'point guard', 'team member', '2023-10-20 14:28:46', '00729_HD.jpg'),
(5, 'tyrese  maxee', 'shooting guard', 'volunteer', '2023-10-20 14:29:41', '12f71ee5be8b0ad5b549e30a5c4d17f1.jpg'),
(6, 'magic johnson II', 'coach', 'volunteer', '2023-10-20 15:08:20', 'aqua.jpg'),
(7, 'magic johnson', 'point guard', 'volunteer', '2023-10-20 15:08:23', '070e7c85299bfcffffd81f29a4bd82dd.jpg'),
(8, 'joel embiid', 'center', 'volunteer', '2023-10-20 15:09:19', '38e99d63bca313980af694d92cb135ce--bts-wallpaper-amazing-quotes.jpg'),
(9, 'brian banda', 'comentator', 'team member', '2023-10-24 11:13:28', '1292963581_f1c2f21-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` mediumtext NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `creation_date` varchar(30) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `content`, `category`, `status`, `creation_date`, `picture`) VALUES
(3, 'this is  a raptor title', 'put thsj l fksafoi here my brother', 'engineering', '1', '2023-10-19 18:30:21', '2019_Raptor_Review.jpg'),
(4, 'project title', 'lkjlkfj this is just <b>something</b> random', 'technology', '1', '2023-10-19 18:31:16', '2019_Raptor_Review.jpg'),
(5, 'another project title', 'chev <b>camalo</b> here', 'engineering', '2', '2023-10-20 08:27:04', '1-1550693652888@2x.jpg'),
(6, 'mercedes benz', 'hey there! am using <b>WhatsApp</b>', 'technology', '2', '2023-10-20 08:29:32', '02404_HD.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tuts`
--

CREATE TABLE `tuts` (
  `tuts_id` int(10) NOT NULL,
  `vid_id` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  `creation_date` varchar(15) NOT NULL,
  `modification_date` varchar(15) DEFAULT NULL,
  `last_login_date` varchar(15) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `profile_picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tuts`
--
ALTER TABLE `tuts`
  ADD PRIMARY KEY (`tuts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tuts`
--
ALTER TABLE `tuts`
  MODIFY `tuts_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
