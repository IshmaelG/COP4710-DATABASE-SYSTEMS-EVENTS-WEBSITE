-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2022 at 02:49 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unifydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(10) NOT NULL AUTO_INCREMENT,
  `uniID` int(10) NOT NULL,
  PRIMARY KEY (`adminID`),
  KEY `uidaid` (`uniID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `uniID`) VALUES
(4, 2325),
(1, 3954);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `name` varchar(60) NOT NULL,
  `cemail` varchar(30) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `time` time NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `date` date NOT NULL,
  `eventID` int(10) NOT NULL AUTO_INCREMENT,
  `rating` int(1) NOT NULL,
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`name`, `cemail`, `category`, `description`, `time`, `phone`, `date`, `eventID`, `rating`, `uid`) VALUES
('UCF Spirit!', 'spiritevent@gmail.com', 'Public Event', 'Come have some fun and celebrate! Lets have some UCF Spirit!', '20:00:00', '999-999-9999', '2022-04-16', 1, 4, NULL),
('The FSU Experience', 'fsuexpevent@yahoo.com', 'School Event', 'All FSU students are invited to this wonderful event for our school. Learn our history and what it means to be a student here!', '14:00:00', '222-222-2222', '2022-04-27', 2, 3, 1489),
('Chess Club', 'iluvchess@gmail.com', 'RSO Event', 'We are proud nerds and love playing chess. Lets all get together and have a battle of wits on the board field.', '17:30:00', '111-111-1111', '2022-04-19', 3, 2, NULL),
('Swim Team Practice', 'miamiswimteam@gmail.com', 'RSO Event', 'Make to bring your swim gear and ready for drills.', '12:15:00', '555-555-5555', '2022-04-18', 4, 5, NULL),
('Tech Talk at University of Miami', 'tesla@gmail.com', 'School Event', 'All UM students are welcome to attend this tech talk where Elon Musk will talk about his plan for electric cars and a sustainable future with space-x.', '14:20:00', '333-333-3333', '2022-04-29', 5, 4, 2325),
('Unwind and make some friends!', NULL, 'Public Event', 'No matter what school you\'re from come join us and have some fun under the sun. Enjoy games and BBQ! Talk and make some friends and this chill event', '13:00:00', NULL, '2022-04-13', 6, 5, NULL),
('UCF Career Fair', 'ucfcareers@ucf.edu', 'School Event', 'All UCF students are invited to meet employers. Please have a resume and dress sharp!', '13:20:00', '444-444-4444', '2022-04-20', 7, 5, 3954);

-- --------------------------------------------------------

--
-- Table structure for table `rso`
--

DROP TABLE IF EXISTS `rso`;
CREATE TABLE IF NOT EXISTS `rso` (
  `rsoID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `adminID` int(10) NOT NULL,
  PRIMARY KEY (`rsoID`),
  KEY `aidrsoid` (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rso`
--

INSERT INTO `rso` (`rsoID`, `name`, `adminID`) VALUES
(1, 'Chess Club', 1),
(2, 'UM Swim Team', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentID` int(10) NOT NULL AUTO_INCREMENT,
  `uniID` int(10) DEFAULT NULL,
  PRIMARY KEY (`studentID`),
  KEY `uiduid` (`uniID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `uniID`) VALUES
(1, 803),
(5, 1489),
(4, 2325),
(3, 3954);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `uniID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `studentpop` int(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`uniID`)
) ENGINE=InnoDB AUTO_INCREMENT=3955 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uniID`, `name`, `description`, `studentpop`, `phone`) VALUES
(1489, 'Florida State University', 'One of the nation\'s elite research universities, Florida State University preserves, expands, and disseminates knowledge in the sciences, technology, arts, humanities, and professions, while embracing a philosophy of learning strongly rooted in the traditions of the liberal arts and critical thinking.', 33000, '850-644-6200'),
(1520, 'Seminole State College', 'Seminole State College of Florida is a full-service education provider, offering bachelor\'s degrees; two-year college-credit degrees (A.A., A.S., A.A.S.); specialized career certificates; continuing professional education; adult education; and an array of culturally stimulating events and timely guest speakers.', 18000, '407-708-4722'),
(1535, 'University of Florida', 'One of America’s all-around best universities, the University of Florida drives future-making education, eye-opening discoveries, life-saving health care, and community-building collaboration for our state, our nation, and our world.', 34000, '352-392-3261'),
(2325, 'University of Miami', 'A private research university with more than 17,000 students from around the world, the University of Miami is a vibrant and diverse academic community focused on teaching and learning, the discovery of new knowledge, and service to the South Florida region and beyond.', 17000, '305-284-2211'),
(3954, 'University of Central Florida', 'With more than 220 degree programs in 13 colleges, UCF provides an education for the future, today. Our award-winning faculty provide mentorship and cutting-edge educational experiences, and connect students to research and career opportunities around the world.', 70000, '407-823-2000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(15) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `password`, `email`, `name`, `uname`, `uid`) VALUES
(1, 'password123', 'bob@knights.ucf.edu', 'bob', 'bob123', 3954),
(3, 'pass123', 'i.garcia@knights.ucf.edu', 'Ishmael', 'Nerv', 3954),
(4, 'j123', 'j.p@um.edu', 'jack', 'jdawg', 2325),
(5, 'pass1123', 'eric@fsu.edu', 'eric', 'eric123', 1489);

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `createstudent`;
DELIMITER $$
CREATE TRIGGER `createstudent` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO student VALUES(NEW.userID,NEW.uid)
$$
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `id` FOREIGN KEY (`adminID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rso`
--
ALTER TABLE `rso`
  ADD CONSTRAINT `aidrsoid` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `siduid` FOREIGN KEY (`studentID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
