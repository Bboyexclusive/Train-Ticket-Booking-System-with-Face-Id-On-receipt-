-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2021 at 01:38 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL auto_increment,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(4) NOT NULL auto_increment,
  `api_tdata` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `image`
--


-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(4) NOT NULL auto_increment,
  `item_name` varchar(20) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `price` varchar(10) NOT NULL,
  `dest` varchar(10) NOT NULL,
  PRIMARY KEY  (`item_id`),
  UNIQUE KEY `item_name` (`item_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `quantity`, `price`, `dest`) VALUES
(1, 'kaduna', '58', '50', 'Abuja'),
(2, 'Abuja', '87', '7', 'Kaduna');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `rec_no` int(4) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `item` varchar(20) NOT NULL,
  `quant` varchar(3) NOT NULL,
  `price` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `trans_id` varchar(20) NOT NULL,
  `date` varchar(9) NOT NULL,
  PRIMARY KEY  (`rec_no`),
  UNIQUE KEY `trans_id` (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`rec_no`, `name`, `phone`, `address`, `item`, `quant`, `price`, `total`, `trans_id`, `date`) VALUES
(1, 'uuu', '5788', ' nbn', 'kaduna', '1', '50', '50', '55700575', '28/10/21'),
(2, 'hhjj', '8765', 'hjg ', 'kaduna', '1', 'kaduna', '0', '70239350', '28/10/21'),
(3, 'gh', '765', ' nnnb', 'kaduna', '2', '50', '100', '30836394', '28/10/21'),
(4, 'bedemi', '876545', ' kjhgvjh', 'kaduna', '1', '50', '50', '22128054', '28/10/21'),
(5, 'Fagbola Olayinka', '09055538193', ' uhjnhjyun', 'kaduna', '1', '50', '50', '08754255', '01/11/21');
