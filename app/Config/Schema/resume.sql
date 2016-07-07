-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2016 at 06:07 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `look_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `user_id`, `look_id`) VALUES
(1, 2, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cover_letters`
--

CREATE TABLE IF NOT EXISTS `cover_letters` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `letter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cover_letters`
--

INSERT INTO `cover_letters` (`id`, `user_id`, `letter`) VALUES
(1, 2, 'New Cover letter');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `course` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `course`, `university`, `start_date`, `end_date`, `description`) VALUES
(1, 2, 'M. Tech', 'IIIT Delhi', '2013-08-01', '2015-07-30', 'Done engineering with specialization in Data Engineering. I have also knowledge of cakePhP for backend programming. \r\nKnowledge of R, Python, C++, d3.js, javascript, AngularJs ');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `company_name`, `description`, `start_date`, `end_date`) VALUES
(1, 2, 'Software Engineer', 'Atlogys Technical Consulting', 'Nothing to describe right now.', '2015-05-18', '2016-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `interest` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `looks`
--

CREATE TABLE IF NOT EXISTS `looks` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `looks`
--

INSERT INTO `looks` (`id`, `name`) VALUES
(1, 'Red'),
(2, 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detail` text NOT NULL,
  `date` date DEFAULT NULL,
  `fields` varchar(50) NOT NULL,
  `client` varchar(20) DEFAULT NULL,
  `live_url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `title`, `short_description`, `category`, `detail`, `date`, `fields`, `client`, `live_url`) VALUES
(1, 2, 'Recruitmates', 'This is for recruitments. Where various recruiters can work together to hire better people.', 'e-coommerce', 'This is for recruitments. Where various recruiters can work together to hire better people.', '2016-03-08', 'e-commerce, recruitment', 'Glenn Fox', 'qa.recruitmates.com');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `user_id`, `name`, `designation`, `company`, `description`) VALUES
(1, 2, 'dfgdffd', 'dfgdfg', 'dfgdfgdf', 'fdgdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `percentage` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `introduction` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `work` varchar(15) DEFAULT NULL,
  `personal_email` varchar(50) NOT NULL,
  `work_email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `designation`, `introduction`, `mobile`, `work`, `personal_email`, `work_email`, `address`, `pincode`, `website`, `url`) VALUES
(1, 'Nikhil', 'Android', 'Hi', '2147483647', '986785465', 'vh9s@ymail.com', 'nkhil@atlogys.com', '23 kultar singh', '247001', '', ''),
(2, 'Prabhat Ranjan', 'Software Engineer', 'Nothing to introduce', '+919582612234', '+919871840843', 'rprabhat1729@gmail.com', 'prabhat@atlogys.com', 'H-66, Street No. 3, Palam Colony, Palam, New Delhi', '110077', '', 'ranjan-prabhat.github.io/prabhat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
