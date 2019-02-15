-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2019 at 06:04 AM
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
(1, 1, 'Pre-Wedding', 'We know that the best way to ring those wedding bells is to get an amazing pre-wedding shoot done. Giving a nod to that idea, here at Vows & Phereys we make sure that you get that shoot done in a way that tells your story in the most optimal way. Be it a thematic set of pictures, a dedicated film or a prelude to your most special day, we got it covered.'),
(1, 2, 'Fashion Album 1', 'Fashion for some is a way of life and for some, it is life itself. Keeping that in mind, our fashion photographers and filmmakers keep themselves updated with all the trends in the current national as well as international fashion scene. So, if it is a mood that you need to convey in your campaign or the garment needs to be the hero of the shot or both then we are all geared up for it.'),
(1, 3, 'Food Album 1', 'Food photography like all other genres of photography deals with a lot of variety. The shot might demand a rustic setup for an organic essence or it might require a very chic, contemporary styling and photographic approach. Here, from the inception of the shot to its planning and then execution, we see through the entire process while paying attention to the details'),
(1, 4, 'Corporate Album 1', 'We provide a plethora of services to our corporate clients. Single and group executive portrait sessions, aerial survey and impact assessment (film and photographic) of Corporate Social Responsibility projects are some of the services to name.'),
(2, 1, 'Wedding', 'We know about the zillion things that you need to take care of on your wedding day, to strike off at least photography and cinematic films from that list, we step in. Our experienced team of candid photographers and cinematographers make sure that the best day of your life is captured in the most alluring way possible. We make sure that all the action is aesthetically documented and serve as testimonials of the happiest day of your life.'),
(2, 2, 'Fashion Album 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 3, 'Food Album 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 4, 'Corporate Album 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 1, 'Videos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

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
(1, 'Wedding', '', 3),
(2, 'Fashion', '', 1),
(3, 'Food', '', 1),
(4, 'Corporate', '', 1);

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
(1, 'Litmass media is a one stop media solution outlet. We cater to a plethora clients ranging from lavish weddings to suave corporates. Lifestyle, fashion, food and architecture cinematic films and photographs are some of our products to name. Also, we provide customised media solution just according to one\'s need.', 'Avijit is the co-founder and creative director of Litmass media. He has been a practitioner of photography for almost eight years now. For Avijit photography is like the blood in oneâ€™s vein. Having worked with the photo documentary genre, lately, he has been exploring the experimental video genre. When he is not on commercial assignments, he devotes his time to personal projects.', 'Deep is co founder and chief editor of lit mass media. He splits his time between commercial, landscape and travel photography. Practicing photography for almost half a decade, photography to him is a form of art using light and shadow. ');

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
(1, 'Litmass media is a one stop media solution outlet. We cater to a plethora clients ranging from lavish weddings to suave corporates. Lifestyle, fashion, food and architecture cinematic films and photographs are some of our products to name. Also, we provide customised media solution just according to one\'s need.', 'Vows & Phereys is the wedding vertical of Litmass media. We believe that your pre-wedding and wedding films and photographs are not just our creations, they are collaboration between us and the client. Paying attention to details and inputs of our clients is of pivotal value to us. Here at Vows & Phereys, we become the medium through which your vision and memories become one and live on as stunning frames and visuals.\r\n', 'Fashion for some is a way of life and for some, it is life itself. Keeping that in mind, our fashion photographers and filmmakers keep themselves updated with all the trends in the current national as well as international fashion scene. So, if it is a mood that you need to convey in your campaign or the garment needs to be the hero of the shot or both then we are all geared up for it.', 'Food photography like all other genres of photography deals with a lot of variety. The shot might demand a rustic setup for an organic essence or it might require a very chic, contemporary styling and photographic approach. Here, from the inception of the shot to its planning and then execution, we see through the entire process while paying attention to the details.', 'We provide a plethora of services to our corporate clients. Single and group executive portrait sessions, aerial survey and impact assessment (film and photographic) of Corporate Social Responsibility projects are some of the services to name.');

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
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/QQOeZ4AX7y4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/jx4q-fOrS3k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, '');

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
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/OaWDBdHjbsk?start=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/6Uvin79PlJQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
