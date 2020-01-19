-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 10:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greenwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `did` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `slip` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`did`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`did`, `username`, `price`, `slip`, `date`, `description`, `email`) VALUES
(1, 'asdf', 1212, '46751-27381-wga_icon_png_by_vinceranda.png', '1212-12-12', 'gsdsafashfgdaf', 'dilshineadmin');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `username_4` (`username`),
  KEY `username_5` (`username`),
  KEY `username_6` (`username`),
  KEY `username_7` (`username`),
  KEY `username_8` (`username`),
  KEY `username_9` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`date`, `description`, `photo`, `id`, `username`) VALUES
('1212-12-12', 'wwwwwwwe', '62479-1.jpg', 9, 'asdf'),
('1212-12-12', 'asdfg', '24547-12_Game-Of-Thrones.jpg', 10, 'asdf'),
('0000-00-00', 'wwwwwertrew', '77386-02c2501a8ebc0282e9b5ecc88521f61c.jpg', 11, 'asdf'),
('1212-12-12', 'dilejdd', '6269-69218.jpg', 14, 'asdf'),
('1212-12-12', 'dilejdd', '92873-69218.jpg', 15, 'asdf'),
('1212-12-12', 'sdfghj', '32955-194153.jpg', 16, 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sid` int(3) NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `item` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `username_4` (`username`),
  KEY `username_5` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `pname`, `username`, `address`, `item`, `date`, `description`, `photo`) VALUES
(1, 'wewe', 'asdf', 'homagama', 'plant', '1212-12-12', 'dilsjs', '50488-'),
(2, 'wewe', 'asdf', 'homagama', 'plant', '1212-12-12', 'dilsjs', '43167-'),
(3, 'wewe', 'asdf', 'homagama', 'plant', '1212-12-12', 'dilsjs', '85190-'),
(4, 'qwqw', 'asdf', 'dfghjkk', 'plamt', '1212-12-12', 'edftgyhju', '91526-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `uid` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tips` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`,`password`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `bday`, `email`, `gender`, `username`, `password`) VALUES
('dilek', 'SSSGHJ', '1212-12-12', 'dilshineadmin', 'femal', 'asdf', '1212'),
('rajitha', 'abeykoon', '1997-05-10', 'asdfghjk@gmail.com', 'male', 'rajitha', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
