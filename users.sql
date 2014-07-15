-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2014 at 02:51 am
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webservicesample`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `created`, `modified`) VALUES
(1, 'Shuhei', 400009999, 'snakahodo55442@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'John', 433334444, 'john@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Shoan', 411112222, 'shoan@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Angelina', 455554444, 'angelina@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Matthew', 455550000, 'matthew@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Cammy', 6644225, 'cammy@gamil.com', '2014-07-15 02:19:15', '2014-07-15 02:19:15'),
(7, 'Yong', 333377779, 'yong@yong.com', '2014-07-15 02:20:50', '2014-07-15 02:20:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
