-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 06:43 PM
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
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `month` varchar(2) NOT NULL,
  `post_timestamp` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `post_image`, `cat_name`, `post_date`, `year`, `month`, `post_timestamp`) VALUES
(3, 'Job Vaccancy', '<p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>\r\n', '3.jpg', 'Notice', '26-Feb-2015', '26-F', 'b-', '1771110000'),
(4, 'Message From Managing Director', '<p>Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>\r\n', '4.jpg', 'Home', '26-Feb-2015', '26-F', 'b-', '1771110000'),
(5, 'Message From The Chairman', '<p>Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>\r\n', '5.jpg', 'Home', '26-Feb-2015', '26-F', 'b-', '1771110000'),
(6, 'General Manager', '<p>Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much</p>\r\n\r\n<p>Maliha Mouli</p>\r\n', '6.jpg', 'About Us', '26-Feb-2015', '26-F', 'b-', '1771110000'),
(7, 'Welcome to our inventory', '<p>Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>\r\n', '7.jpg', 'About Us', '26-Feb-2015', '26-F', 'b-', '1771110000'),
(9, 'Smart Phone', '<p>ddddddddddddddddddddd</p>\r\n', '9.jpg', 'Products', '26-Feb-2015', '26-F', 'b-', '1771110000'),
(10, 'Cooling Pad for Laptop', '<p>ddfgh</p>\r\n', '10.jpg', 'Products', '29-Mar-2015', '29-M', 'r-', '1868223600'),
(11, 'All kinds of  Books', '<p>gfdmh</p>\r\n', '11.jpg', 'Products', '29-Mar-2015', '29-M', 'r-', '1868223600'),
(12, 'Ultra Modern Tab', '<p>dfsnhg</p>\r\n', '12.jpg', 'Products', '29-Mar-2015', '29-M', 'r-', '1868223600'),
(13, 'Table Fan', '<p>wqerg</p>\r\n', '13.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(14, 'KeyBoard ', '<p>ewrg</p>\r\n', '14.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(15, 'Motor Cycle', '<p>hjfdlo</p>\r\n', '15.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(16, 'Watch', '<p>fkhgl</p>\r\n', '16.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(17, 'Travell Bag', '<p>edg</p>\r\n', '17.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(19, 'Mobile', '<p>asfsg</p>\r\n', '19.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(20, 'Musical Instruments', '<p>fgeeg</p>\r\n', '20.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(21, 'Shoe', '<p>as</p>\r\n', '21.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(22, 'ALL Kinds of Energy Balb.', '<p>fdg</p>\r\n', '22.jpg', 'Products', '31-Mar-2015', '31-M', 'r-', '1931295600'),
(23, 'CHAIR', '<p>rthrtj</p>\r\n', '23.jpg', 'Products', '01-Apr-2015', '01-A', 'r-', '987285600'),
(24, 'Tablet PC', '<p>ohi;</p>\r\n', '24.jpg', 'Products', '01-Apr-2015', '01-A', 'r-', '987285600'),
(25, 'Smart Phone', '<p>rth</p>\r\n', '25.jpg', 'Products', '01-Apr-2015', '01-A', 'r-', '987285600'),
(26, 'Mobile Phone', '<p>rhgerh</p>\r\n', '26.jpg', 'Products', '01-Apr-2015', '01-A', 'r-', '987285600'),
(27, 'Motor Cycle', '<p>trjh</p>\r\n', '27.jpg', 'Products', '01-Apr-2015', '01-A', 'r-', '987285600');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
