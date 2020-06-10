-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2020 at 01:48 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(40) COLLATE latin1_general_cs NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Shilpi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `fdbk`
--

CREATE TABLE IF NOT EXISTS `fdbk` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subj` varchar(30) NOT NULL,
  `mesg` varchar(30) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fdbk`
--

INSERT INTO `fdbk` (`contact_id`, `name`, `phone no`, `email`, `subj`, `mesg`) VALUES
(1, 'priya', '33333333333', 'priya@gmail.com', 'service', 'try to improve ur service'),
(2, 'priya', '33333333333', 'priya@gmail.com', 'service', 'try to improve ur service'),
(3, 'priya', '33333333333', 'priya@gmail.com', 'service', 'try to improve ur service'),
(4, 'Kanchan', '9871980749', 'kanchan@gmail.com', 'shopbjkj', 'vgvh kbhj');

-- --------------------------------------------------------

--
-- Table structure for table `rtb`
--

CREATE TABLE IF NOT EXISTS `rtb` (
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtb`
--

INSERT INTO `rtb` (`username`, `email`, `mobile`, `password`) VALUES
('satya', 'A@gmail.com', 123456, '123456'),
('bhai', 'bh@gmail.com', 0, 'hj12345'),
('sooraj', 'bn@gmail.com', 0, 'asdfghj'),
('Chanda ', 'ch@gmail.com', 0, 'qwertyui'),
('suman', 'D@gmail.com', 2345678, '2345678'),
('nitish', 'F@gmail.com', 0, 'Satya123'),
('sanjay', 'Fff@gmail.com', 0, 'asdfghj'),
('raja', 'g@gmail.com', 987654, '0987654'),
('shidhart', 'gh@gmail.com', 654321, '654321'),
('hero', 'h@gmail.com', 0, 'h12345'),
('hero', 'hero@gmail.com', 0, 'lkjhgfd'),
('sooraj', 'nb@gmail.com', 0, 'fghjkl'),
('Satyendr', 'p@gmail.com', 0, 'p12345'),
('shidhart', 'ph@gmail.com', 0, 'zxcvbnm'),
('Raj', 'raj@gmail.com', 0, 'hello'),
('Sooraj', 'S@gmail.com', 0, 'Satya123'),
('sooraj', 'Satyendr018@gmail.com', 12345, '12345'),
('sss', 'sd@gmail.com', 0, 'dfghjk'),
('Santosh', 'Sh@gmail.com', 0, 'S12345'),
('shalu', 'sha@gmail.com', 34567, '34567'),
('shashi', 'shashikant12345@gmail.com', 0, 'shashi1234'),
('sashi', 'shh@gmail.com', 0, 'asdfghj'),
('shivam', 'shivam123@gmail.com', 0, 'shivam123'),
('sunil', 'sunil@gmail.com', 567890, '567890'),
('umesh', 'u@gmail.com', 0, 'dfghjkl'),
('sooraj', 'v@gmail.com', 0, 'D123456'),
('Santosh', 'w@gmail.com', 0, 'D123457');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE IF NOT EXISTS `student1` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`username`, `email`, `mobile`, `password`) VALUES
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('SOORAJ', 'Satyendr018@gmail.com', 2147483647, '123456'),
('shiiiii', 'hjdjas@gmail.com', 893498934, '89589588934'),
('shalini', 'Sh@gmail.com', 2147483647, 'qwerty'),
('niraj', 'ni@gmail.com', 57684954, 'asdfghj');
