-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2023 at 05:38 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `carid` int(10) NOT NULL AUTO_INCREMENT,
  `sellerid` int(10) NOT NULL,
  `company` varchar(80) NOT NULL,
  `model` varchar(80) NOT NULL,
  `year` int(10) NOT NULL,
  `owner_no` int(10) NOT NULL,
  `price` int(7) NOT NULL,
  `city` varchar(80) NOT NULL,
  `fuel_type` varchar(30) NOT NULL,
  `body_type` varchar(40) NOT NULL,
  `description` varchar(150) NOT NULL,
  `seller_ph` bigint(10) NOT NULL,
  `Registration_no` varchar(30) NOT NULL,
  `km` int(8) NOT NULL,
  `photo` varchar(180) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  `hash` varchar(50) NOT NULL DEFAULT 'nil',
  PRIMARY KEY (`carid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `sellerid`, `company`, `model`, `year`, `owner_no`, `price`, `city`, `fuel_type`, `body_type`, `description`, `seller_ph`, `Registration_no`, `km`, `photo`, `status`, `hash`) VALUES
(2, 2, 'maruthy', '2016', 2016, 2, 500000, 'kollam', 'petrol', 'suv', 'good maintained', 2147483647, 'kl 02 al 1212', 45000, '', 4, 'nil'),
(3, 2, 'benz', 'c class', 2010, 1, 2600000, 'tvm', 'diesel', 'sudan', 'well maintained', 8547470675, 'kl 02 al 1010', 25000, '', 4, 'nil'),
(4, 2, 'audi', 'new', 2018, 3, 5000000, 'malappuram', 'diesel', 'suv', 'well maintained', 2147483647, 'kl 02 al 2020', 25000, '', 4, 'nil'),
(5, 2, 'tata', 'harrier', 2019, 2, 500000, 'thrissur', 'diesel', 'suv', 'neat vehicle doctor used', 2147483647, 'kl 07 2255', 2500, '', 4, 'nil'),
(8, 1, 'bmw', 'new', 2023, 1, 3500000, 'chennai', 'petrol', 'suv', 'good maintained', 2147483647, 'tn 21 a 3456', 100, '', 4, 'nil'),
(11, 2, 'toyota', 'innova', 2020, 2, 100000, 'wayanad', 'diesel', 'muv', 'low used', 8547470675, 'kl 02 al4532', 2600, '', 1, 'nil'),
(10, 2, 'bugati', 'centodeicei', 2023, 1, 26000000, 'chennai', 'diesel', 'sudan', 'good maintained', 8547470675, 'kl 02 al 9876', 100, '', 4, 'nil'),
(12, 2, 'toyota', 'innova', 2020, 2, 100000, 'wayanad', 'diesel', 'muv', 'low used', 7545674311, 'kl 02 al4532', 2600, '', 0, 'nil'),
(13, 2, 'maruthy', '800', 2000, 3, 100000, 'pathanamthitta', 'petrol', 'sudan', 'well maintained', 8547470675, 'kl 07 dd 2002', 120000, '', 4, 'nil'),
(14, 2, 'tata', 'indica', 2012, 2, 500000, 'kollam', 'diesel', 'van', 'low used', 7545674312, 'kl 02 al 1211', 10000, 'car_pic/kl 02 al 1211.jpg', 0, 'nil'),
(20, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/.kl 02 al 9182.jpg', 0, 'nil'),
(19, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/kl 02 al 9182.jpg', 0, 'nil'),
(18, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/kl 02 al 9182.jpg', 0, 'nil'),
(21, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/', 0, 'nil'),
(22, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/kl 02 al 9182.jpg', 0, 'nil'),
(23, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/kl 02 al 9182.jpg', 0, 'nil'),
(24, 2, 'suzuki', 'swift', 2010, 2, 50000, 'tvm', 'cng', 'sudan', 'low used low km', 7545674322, 'kl 02 al 9182', 20000, 'carpic/kl 02 al 9182.jpg', 0, 'nil'),
(25, 2, 'wolkswagon', 'polo', 2020, 1, 1000000, 'alappuzha', 'diesel', 'van', 'very nice car, well maintained, doctor used ', 9526758575, 'kl 02 al 1111', 27000, '', 0, 'nil'),
(27, 2, 'bmw', 'c class', 2010, 2, 500000, 'kannur', 'lpg', 'sudan', 'very nice car,well maintained', 7545674876, 'kl 02 al 2101', 1, '', 0, 'nil'),
(28, 2, 'neeraj', 'harrier', 2010, 3, 3500000, 'kannur', 'cng', 'van', 'low used', 7545674876, 'kl 02 al 8500', 45000, '', 0, 'nil'),
(29, 2, 'neeraj', 'harrier', 2010, 3, 3500000, 'kannur', 'cng', 'van', 'low used', 7545674876, 'kl 02 al 8500', 45000, '', 0, 'nil'),
(30, 2, 'neeraj', 'harrier', 2010, 3, 3500000, 'kannur', 'cng', 'van', 'low used', 7545674876, 'kl 02 al 8500', 45000, '', 0, 'nil'),
(31, 2, 'neeraj', 'harrier', 2010, 3, 3500000, 'kannur', 'cng', 'van', 'low used', 7545674876, 'kl 02 al 8500', 45000, '', 0, 'nil'),
(32, 2, 'tata', 'nano', 2010, 2, 5000000, 'kollam', 'lpg', 'muv', 'low used', 8547470675, 'kl 07 20090', 45000, 'kl 07 20090.jpg', 0, 'nil'),
(33, 2, 'tata', 'nano', 2010, 2, 5000000, 'kollam', 'lpg', 'muv', 'low used', 8547470675, 'kl 07 20090', 45000, 'kl 07 20090.jpg', 0, 'nil');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `senderid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `senderid`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 0, 'Athul', 'athul@gmail.com', 'jijijo', 'kk', 1),
(2, 0, 'neraj', 'neraj@gmail.com', ' nil', 'fd gftg hfg gtyu', 1),
(3, 0, 'anu', 'anu@gmail.com', 'anu', 'hai bro', 1),
(4, 0, 'dheera', 'dheeera@gmail.com', 'dheera', 'how do yo do', 1),
(5, 0, 'neraj', 'neraj@gmail.com', 'test', 'testing', 1),
(6, 2, 'neraj', 'neraj@gmail.com', 'check', 'how are you', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `loginid` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(25) NOT NULL,
  `aadharno` bigint(25) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phno` bigint(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `loginid` (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `loginid`, `name`, `email`, `aadharno`, `address`, `phno`) VALUES
(1, 1, 'loja', 'loja@gmail.com', 109988776655, 'loja', 2147483647),
(2, 2, 'neraj', 'neraj@gmail.com', 874321096543, 'neraj bhavan', 8547470575),
(3, 3, 'Athul', 'athul@gmail.com', 983216574389, 'home', 2147483647),
(4, 4, 'Anzil', 'anzil@gmail.com', 984532675490, 'home', 2147483647),
(5, 6, 'Neraj Lal', 'nerajnerajlal@gmail.com', 657904326754, 'lal bhavan Mukkoodu p.o Mulavana', 2147483647),
(6, 7, 'anandhu', 'anandhu@gmail.com', 764390765432, 'anandhu bhavan kundara p.o Mulavana', 2147483647),
(7, 8, 'dheeraj', 'dheera@gmail.com', 234567891234, 'dheeraj nivas', 8547489685),
(8, 9, 'chako', 'chako@gmail.com', 234567891234, 'chako nivas', 8547470675);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL,
  `user` varchar(30) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `email`, `password`, `status`, `user`) VALUES
(1, 'loja@gmail.com', '123', '2', 'user'),
(2, 'neraj@gmail.com', 'Neraj123@', '1', 'user'),
(3, 'athul@gmail.com', '123', '1', 'user'),
(4, 'anzil@gmail.com', '123', '1', 'user'),
(5, 'admin@gmail.com', 'Admin123@', '3', 'admin'),
(6, 'nerajnerajlal@gmail.com', 'Neraj123@', '1', 'user'),
(7, 'anandhu@gmail.com', 'anandhu', '0', 'user'),
(8, 'dheera@gmail.com', 'Dheera123@', '0', 'user'),
(9, 'chako@gmail.com', 'Chako123', '0', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `author` varchar(10) NOT NULL DEFAULT 'Admin',
  `senderid` int(10) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`author`, `senderid`, `subject`, `message`) VALUES
('Admin', 0, 'test', 'tested ok'),
('Admin', 0, 'test new', 'perfect'),
('Admin', 0, ' nil', 'fg hthhfhd'),
('Admin', 0, 'fsf', 'xdh hytgesf svcb'),
('Admin', 0, 'hghuy', 'jfuy yuytyyu fdtr'),
('Admin', 2, 'reply', 'i am good what about u'),
('Admin', 2, 'car', ' i want your car conctact me at 8547470675');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `loginid` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phno` int(10) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `loginid` (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `seller`
--

