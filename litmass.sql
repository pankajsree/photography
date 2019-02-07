-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2019 at 05:36 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litmass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Abhijit Deb', 'abhijit.deb208@gmail.com', '$2y$10$M9ETEyNBo7mM0RxlCIi1p.9mcWgIvrmANT/oibaeYjcKxOXKAnh4q'),
(2, 'Deep Roy', 'roydeep404@gmail.com', '$2y$10$g1unuT9OsOph7r3Yrp5ydunFINChS5GxVkUb.en56dWZc/Q92z3yi'),
(3, 'Pankajsree Das', 'daspankajsree@gmail.com', '$2y$10$kk0z8ozB5Cgd2d8C8mH7yu8473mRBR0DzL.dcgfTtrOBOCKLCJJUC');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `serial` tinyint(2) NOT NULL AUTO_INCREMENT,
  `content` varchar(1024) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`serial`, `content`) VALUES
(1, 'If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `serial` tinyint(2) NOT NULL AUTO_INCREMENT,
  `carousel` tinyint(2) NOT NULL,
  `p_wedding_pre` tinyint(2) NOT NULL,
  `p_wedding` tinyint(2) NOT NULL,
  `p_wedding_video` tinyint(2) NOT NULL,
  `p_fashion` tinyint(2) NOT NULL,
  `p_food` tinyint(2) NOT NULL,
  `p_corporate` tinyint(2) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`serial`, `carousel`, `p_wedding_pre`, `p_wedding`, `p_wedding_video`, `p_fashion`, `p_food`, `p_corporate`) VALUES
(1, 4, 14, 10, 2, 9, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serial` tinyint(2) NOT NULL,
  `service_id` tinyint(2) NOT NULL,
  `heading` varchar(128) NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY (`serial`,`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serial`, `service_id`, `heading`, `content`) VALUES
(1, 1, 'Pre-Wedding', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(1, 2, 'Fashion Album 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(1, 3, 'Food Album 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(1, 4, 'Corporate Album 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 1, 'Wedding', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 2, 'Fashion Album 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 3, 'Food Album 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 4, 'Corporate Album 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `services_meta`
--

DROP TABLE IF EXISTS `services_meta`;
CREATE TABLE IF NOT EXISTS `services_meta` (
  `service_id` tinyint(2) NOT NULL,
  `service_name` varchar(128) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `count` tinyint(2) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_meta`
--

INSERT INTO `services_meta` (`service_id`, `service_name`, `content`, `count`) VALUES
(1, 'Wedding', 'If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.', 2),
(2, 'Fashion', 'If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.', 2),
(3, 'Food', 'If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.', 2),
(4, 'Corporate', 'If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `text_about`
--

DROP TABLE IF EXISTS `text_about`;
CREATE TABLE IF NOT EXISTS `text_about` (
  `serial` tinyint(2) NOT NULL AUTO_INCREMENT,
  `about` varchar(5000) NOT NULL,
  `abhi` varchar(5000) NOT NULL,
  `deep` varchar(5000) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `text_about`
--

INSERT INTO `text_about` (`serial`, `about`, `abhi`, `deep`) VALUES
(1, 'Litmass media is a one stop media solution outlet. We cater to a plethora clients ranging from lavish weddings to suave corporates. Lifestyle, fashion, food and architecture cinematic films and photographs are some of our products to name. Also, we provide customised media solution just according to one\'s need.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `text_home`
--

DROP TABLE IF EXISTS `text_home`;
CREATE TABLE IF NOT EXISTS `text_home` (
  `serial` tinyint(2) NOT NULL AUTO_INCREMENT,
  `litmass` varchar(1024) NOT NULL,
  `vows` varchar(1024) NOT NULL,
  `fashion` varchar(1024) NOT NULL,
  `food` varchar(1024) NOT NULL,
  `corporate` varchar(1024) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `text_home`
--

INSERT INTO `text_home` (`serial`, `litmass`, `vows`, `fashion`, `food`, `corporate`) VALUES
(1, 'Litmass media is a one stop media solution outlet. We cater to a plethora clients ranging from lavish weddings to suave corporates. Lifestyle, fashion, food and architecture cinematic films and photographs are some of our products to name. Also, we provide customised media solution just according to one\'s need.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `videos_corporate`
--

DROP TABLE IF EXISTS `videos_corporate`;
CREATE TABLE IF NOT EXISTS `videos_corporate` (
  `serial` smallint(3) NOT NULL,
  `link` varchar(2048) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos_corporate`
--

INSERT INTO `videos_corporate` (`serial`, `link`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FG9M0aEpJGE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AJtDXIazrMo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `videos_wedding`
--

DROP TABLE IF EXISTS `videos_wedding`;
CREATE TABLE IF NOT EXISTS `videos_wedding` (
  `serial` smallint(3) NOT NULL,
  `link` varchar(2048) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos_wedding`
--

INSERT INTO `videos_wedding` (`serial`, `link`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RgKAFK5djSk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BxuY9FET9Y4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
