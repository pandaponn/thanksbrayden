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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `interviewers` (`id`, `fname`, `lname`, `job`, `company`, `years`, `industry`, `about`,
`email`, `experience`, `education`) VALUES
(1, 'Phris', 'Coskitt','Assistant Professor of Information Systems', 'SMU', 7, 'Information Technology', 
'I am a faculty member in the School of Information Systems at Singapore Management University, where I am part of the Research Lab for Intelligent Software Engineering (RISE).', 
'cposkitt@smu.edu.sg', 
"['Assistant Professor of Information Systems (Education), School of Information Systems, SMU, Jan 2020 - Present',
'Lecturer & Research Fellow, Singapore University of Technology and Design, Singapore, Jan 2018 - Jan 2020',
'Research Fellow, Singapore University of Technology and Design, Singapore, Mar 2016 - Jan 2018',
'Postdoctoral Research Scientist, ETH Zurich, Switzerland, Jan 2013 - Jan 2016']",
"['PhD, University of York, 2014',
'Bachelors of Science, University of York, 2009']");

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
