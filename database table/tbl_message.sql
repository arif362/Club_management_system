-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 12:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `your_name` varchar(255) NOT NULL,
  `your_email` varchar(255) NOT NULL,
  `your_message` text NOT NULL,
  `c_date` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`c_id`, `your_name`, `your_email`, `your_message`, `c_date`) VALUES
(1, 'Arif', 'arif@gmail.com', 'Assalamu alikum', '2015-03-31'),
(2, 'RANA', 'rana@gmail.com', 'HI. How r u?', '2015-04-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
