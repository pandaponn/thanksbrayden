-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 30, 2020 at 07:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `foodgramgram`
--
CREATE DATABASE IF NOT EXISTS `phriscoskitt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phriscoskitt`;

-- --------------------------------------------------------

--
-- Table structure for table `interviewers`
--

DROP TABLE IF EXISTS `interviewers`;
CREATE TABLE IF NOT EXISTS `interviewers` (
  `id` varchar(50) NOT NULL,
  `fname` varchar(2083) NOT NULL,
  `lname` varchar(2083) NOT NULL,
  `job` varchar(2083) NOT NULL,
  `company` varchar(2083) NOT NULL,
  `years` int(11) NOT NULL,
  `industry` varchar(2083) NOT NULL,
  `about` varchar(2083) NOT NULL,
  `email` varchar(2083) NOT NULL,
  `experience` varchar(2083) NOT NULL,
  `education` varchar(2083) NOT NULL,
  `img` varchar(100) NOT NULL,
  `timeslots` varchar(2083) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `interviewers` (`id`, `fname`, `lname`, `job`, `company`, `years`, `industry`, `about`,
`email`, `experience`, `education`, `img`, `timeslots`) VALUES
(1, 'Phris', 'Coskitt','Assistant Professor of Information Systems', 'SMU', 7, 'Information Technology', 
'I am a faculty member in the School of Information Systems at Singapore Management University, where I am part of the Research Lab for Intelligent Software Engineering (RISE).', 
'cposkitt@smu.edu.sg', 
"{""experience"" : [""Assistant Professor of Information Systems (Education), School of Information Systems, SMU, Jan 2020 - Present"",
""Lecturer & Research Fellow, Singapore University of Technology and Design, Singapore, Jan 2018 - Jan 2020"",
""Research Fellow, Singapore University of Technology and Design, Singapore, Mar 2016 - Jan 2018"",
""Postdoctoral Research Scientist, ETH Zurich, Switzerland, Jan 2013 - Jan 2016""]}",
"{""education"" : [""PhD, University of York, 2014"",
""Bachelors of Science, University of York, 2009""]}",
'profile_img/chris.jpg',
"{""timeslots"" : [""30/10/20, 4:00pm"", ""08/11/20, 9:00am"", ""11/11/20, 12:00pm""]}");

INSERT INTO `interviewers` (`id`, `fname`, `lname`, `job`, `company`, `years`, `industry`, `about`,
`email`, `experience`, `education`, `img`, `timeslots`) VALUES (2, 'Wong', 'Xin Wei','Cyber and Strategic Risk Intern', 'Deloitte', 0.5, 'Cybersecurity', 
'I am a penultimate student at Singapore Management University, pursing a Bachelor of Science (Information System) degree majoring in software development. My experience and interest lies in the area of information technology, full stack web application development, database management and project management.', 
'xinwei.wong.2018@smu.edu.sg', 
"{""experience"" : [""Teaching Assistant, School of Information Systems, SMU, Aug 2020 - Present"",
""Cyber and Strategic Risk Intern, Deloitte, Singapore, Jul 2020 - Present"",
""Product Management Intern, Shopee, Singapore, Jan 2020 - Jul 2020""]}",
"{""education"" : [""Bachelors of Science (Information Systems), Singapore Management University,Ongoing""]}",
'profile_img/XW.jpeg',
"{""timeslots"" : [""29/10/20, 1:00pm"", ""04/11/20, 11:00am"", ""07/11/20, 12:00pm"",""11/11/20, 4:00pm""]}");

-- --------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(50) NOT NULL,
  `dname` varchar(2083),
  `fname` varchar(2083),
  `lname` varchar(2083),
  `email` varchar(2083),
  `photoURL` varchar(2083),
  `job` varchar(2083),
  `company` varchar(2083),
  `industry` varchar(2083),
  `specialization` varchar(2083),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

DROP TABLE IF EXISTS `interviews`;
CREATE TABLE IF NOT EXISTS `interviews` (
  `user_id` varchar(50) NOT NULL,
  `interviewer_id` int(11) NOT NULL,
  `timeslots` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`, `interviewer_id`, `timeslots`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
