-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2015 at 10:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cucc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounce`
--

CREATE TABLE IF NOT EXISTS `accounce` (
  `id` int(11) NOT NULL,
  `total_earn` int(16) DEFAULT '0',
  `total_cost` int(16) DEFAULT '0',
  `present_fund` int(16) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounce`
--

INSERT INTO `accounce` (`id`, `total_earn`, `total_cost`, `present_fund`) VALUES
(70, 500, 0, 500),
(71, 6000, 0, 6500),
(72, 200, 0, 6700),
(73, 100, 0, 6800),
(74, 0, 800, 6000),
(75, 0, 200, 5800),
(76, 0, 6800, -1000),
(77, 1200, 0, 200),
(78, 500, 0, 700),
(79, 0, 200, 500),
(80, 500, 0, 1000),
(81, 0, 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `author_list`
--

CREATE TABLE IF NOT EXISTS `author_list` (
  `author_id` int(11) NOT NULL,
  `author_pic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_list`
--

INSERT INTO `author_list` (`author_id`, `author_pic`, `username`, `firstname`, `lastname`, `type`, `designation`, `sex`, `birthday`, `contact_number`, `account_number`, `address`, `email`, `password`, `add_date`) VALUES
(2, '', 'ariful', 'Md. Ariful', 'Islam', 'Employee', 'President', 'malemalemale', '--', '01914840253', '123456', 'Satkhira.', 'gmarifulislamarif@gmail.com', '0ff6c3ace16359e41e37d40b8301d67f', '2015-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE IF NOT EXISTS `member_list` (
  `member_id` int(11) NOT NULL,
  `member_pic` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `dept_id` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regi_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`member_id`, `member_pic`, `firstname`, `lastname`, `username`, `user_type`, `dept_id`, `dept_name`, `sex`, `contact_num`, `address`, `birthday`, `email`, `password`, `regi_date`) VALUES
(3, 'ariful.jpg', 'Md Ariful', 'Islam', 'ariful', 'Member', '12331362', 'CSE', 'male', '01914840253', 'Satkhira.', '10-12-1995', 'gmarifulislamarif@gmail.com', '0ff6c3ace16359e41e37d40b8301d67f', '2015-07-27'),
(4, 'mamun.jpg', 'Mamun', 'Hossen', 'mamun', 'Member', '12331585', 'CSE', 'male', '01928366349', 'Gazipur.', '20-09-1995', 'mamuncse64@gmail.com', 'c8e36a853fe91f3a4a3c4d739e830139', '2015-08-24'),
(5, 'sarkar.jpg', 'Prohallad', 'Sarkar', 'sarkar', 'Member', '12334536', 'CSE', 'male', '01915679803', 'savar.', '19-03-1993', 'p@yahoo.com', '75f04df149cb2705af2a574eff15fcc5', '2015-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(1, 'Notice'),
(8, 'About'),
(9, 'Member'),
(10, 'Home'),
(11, 'President'),
(12, 'Vice-President'),
(13, 'Campus'),
(14, 'About Us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cost`
--

CREATE TABLE IF NOT EXISTS `tbl_cost` (
  `id` int(11) NOT NULL,
  `total_cost` int(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cost`
--

INSERT INTO `tbl_cost` (`id`, `total_cost`) VALUES
(1, 200),
(2, 555),
(3, 555),
(4, 555),
(5, 555),
(6, 555),
(7, 555),
(8, 555),
(9, 8888),
(10, 200),
(11, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE IF NOT EXISTS `tbl_dept` (
  `dept_id` int(25) NOT NULL,
  `dept_name` varchar(155) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dept`
--

INSERT INTO `tbl_dept` (`dept_id`, `dept_name`) VALUES
(1, 'CSE'),
(2, 'EEE'),
(3, 'Textile'),
(4, 'English'),
(5, 'Civil'),
(6, 'LLB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_earn`
--

CREATE TABLE IF NOT EXISTS `tbl_earn` (
  `id` int(11) NOT NULL,
  `total_earn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_earn`
--

INSERT INTO `tbl_earn` (`id`, `total_earn`) VALUES
(1, 500),
(2, 100000),
(3, 4000),
(4, 7777),
(5, 7777),
(6, 500),
(7, 100),
(8, 200),
(9, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE IF NOT EXISTS `tbl_footer` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `description`) VALUES
(1, 'Copyright Â© 2016. All Right Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(2500) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `fullname`, `password`) VALUES
(2, 'ariful', 'Md Ariful Islam', 'f75c454a9199c31e5a25ec59909fc764');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `c_id` int(11) NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `your_email` varchar(255) NOT NULL,
  `your_message` text NOT NULL,
  `c_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`c_id`, `your_name`, `your_email`, `your_message`, `c_date`) VALUES
(1, 'Arif', 'arif@gmail.com', 'Assalamu alikum', '2015-03-31'),
(5, 'abc', 'abc@gmail.com', 'hello world !!!', '2015-07-17'),
(7, 'sanowar', 's@gmail.com', 'hi!', '2015-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `month` varchar(2) NOT NULL,
  `post_timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `post_image`, `cat_name`, `post_date`, `year`, `month`, `post_timestamp`) VALUES
(35, 'Welcome To CUCC', '<p>City University Computer Club (CUCC) is the best leading Organization of This University . City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .</p>\r\n', '35.png', 'Home', '17-Jul-2015', '17-J', 'l-', '1500069600'),
(37, 'President', '<p>City University Computer Club (CUCC) is a leading Organization of City University</p>\r\n', '37.jpg', 'President', '17-Jul-2015', '17-J', 'l-', '1500069600'),
(38, 'Vice-President', '<p>Hello ! Come to our Cucc &amp; take ur career.</p>\r\n', '38.jpg', 'Vice-President', '17-Jul-2015', '17-J', 'l-', '1500069600'),
(39, 'Campus', '<p>This is a beautiful &amp; excelent Campus of Bangladeshi Privat University.</p>\r\n', '39.jpg', 'Campus', '17-Jul-2015', '17-J', 'l-', '1500069600'),
(40, 'Our Institution', '<p>City University Computer Club (CUCC) is the best leading Organization of This University . City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .</p>\r\n', '40.jpg', 'About Us', '17-Jul-2015', '17-J', 'l-', '1500069600'),
(41, 'Academic Bhaban', '<p>City University Computer Club (CUCC) is the best leading Organization of This University . City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .City University Computer Club (CUCC) is the best leading Organization of This University .</p>\r\n', '41.jpg', 'About Us', '17-Jul-2015', '17-J', 'l-', '1500069600'),
(43, 'Programming contest', '<p>Programming contest will be held on 5.11.15 .Programming contest will be held on 5.11.15. Programming contest will be held on 5.11.15</p>\r\n', '43.jpg', 'Notice', '03-Nov-2015', '03-N', 'v-', '1068850800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounce`
--
ALTER TABLE `accounce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_list`
--
ALTER TABLE `author_list`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_cost`
--
ALTER TABLE `tbl_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_earn`
--
ALTER TABLE `tbl_earn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounce`
--
ALTER TABLE `accounce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `author_list`
--
ALTER TABLE `author_list`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_cost`
--
ALTER TABLE `tbl_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  MODIFY `dept_id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_earn`
--
ALTER TABLE `tbl_earn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
