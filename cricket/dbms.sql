-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 03:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('hello', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `loggedin`
--

CREATE TABLE `loggedin` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m111`
--

CREATE TABLE `m111` (
  `match_id` varchar(10) NOT NULL,
  `team1id` int(11) DEFAULT NULL,
  `team2id` int(11) DEFAULT NULL,
  `batting_team` varchar(20) NOT NULL,
  `overs` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m111`
--

INSERT INTO `m111` (`match_id`, `team1id`, `team2id`, `batting_team`, `overs`) VALUES
('m111', 101, 102, 'NushAgile', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `m123`
--

CREATE TABLE `m123` (
  `match_id` varchar(10) NOT NULL,
  `team1id` int(11) DEFAULT NULL,
  `team2id` int(11) DEFAULT NULL,
  `batting_team` varchar(20) NOT NULL,
  `overs` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m123`
--

INSERT INTO `m123` (`match_id`, `team1id`, `team2id`, `batting_team`, `overs`) VALUES
('m123', 101, 102, 'NushAgile', '5.0');

-- --------------------------------------------------------

--
-- Table structure for table `m201`
--

CREATE TABLE `m201` (
  `match_id` varchar(10) NOT NULL,
  `team1id` int(11) DEFAULT NULL,
  `team2id` int(11) DEFAULT NULL,
  `batting_team` varchar(20) NOT NULL,
  `overs` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m201`
--

INSERT INTO `m201` (`match_id`, `team1id`, `team2id`, `batting_team`, `overs`) VALUES
('m201', 101, 102, 'Pheonix', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `m234`
--

CREATE TABLE `m234` (
  `match_id` varchar(10) NOT NULL,
  `team1id` int(11) DEFAULT NULL,
  `team2id` int(11) DEFAULT NULL,
  `batting_team` varchar(20) NOT NULL,
  `overs` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m234`
--

INSERT INTO `m234` (`match_id`, `team1id`, `team2id`, `batting_team`, `overs`) VALUES
('m234', 333, 222, 'Losers', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `m301`
--

CREATE TABLE `m301` (
  `match_id` varchar(10) NOT NULL,
  `team1id` int(11) DEFAULT NULL,
  `team2id` int(11) DEFAULT NULL,
  `batting_team` varchar(20) NOT NULL,
  `overs` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m301`
--

INSERT INTO `m301` (`match_id`, `team1id`, `team2id`, `batting_team`, `overs`) VALUES
('m301', 101, 102, 'NushAgile', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `m1111`
--

CREATE TABLE `m1111` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1111`
--

INSERT INTO `m1111` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(0, '0.1', 'Kohli', 'Parthiv', 'Chahar', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m1112`
--

CREATE TABLE `m1112` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m1113`
--

CREATE TABLE `m1113` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1113`
--

INSERT INTO `m1113` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Kohli', 0, 1, 0, 0, 'm111');

-- --------------------------------------------------------

--
-- Table structure for table `m1114`
--

CREATE TABLE `m1114` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m1115`
--

CREATE TABLE `m1115` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m1116`
--

CREATE TABLE `m1116` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1116`
--

INSERT INTO `m1116` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Chahar', '0.1', 0, 1, 'm111');

-- --------------------------------------------------------

--
-- Table structure for table `m1231`
--

CREATE TABLE `m1231` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1231`
--

INSERT INTO `m1231` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(1, '0.1', 'Ken', 'Soumith', 'Hrithik', 1, 0, 0),
(3, '0.2', 'soumith', 'Ken', 'Hrithik', 2, 0, 0),
(4, '0.3', 'soumith', 'Ken', 'Hrithik', 1, 0, 0),
(4, '0.4', 'Ken', 'Soumith', 'Hrithik', 0, 0, 0),
(8, '0.5', 'Ken', 'Soumith', 'Hrithik', 4, 0, 0),
(8, '1.0', 'Ken', 'Soumith', 'Hrithik', 0, 0, 0),
(12, '1.1', 'Soumith', 'Ken', 'Chahar', 4, 0, 0),
(13, '1.2', 'Soumith', 'Ken', 'Chahar', 1, 0, 0),
(13, '1.3', 'Ken', 'Soumith', 'Chahar', 0, 0, 0),
(19, '1.4', 'Ken', 'Soumith', 'Chahar', 6, 0, 0),
(20, '1.5', 'Ken', 'Soumith', 'Chahar', 1, 0, 0),
(20, '2.0', 'Soumith', 'Ken', 'Chahar', 0, 0, 0),
(20, '2.1', 'Soumith', 'Ken', 'Hrithik', 0, 0, 0),
(20, '2.2', 'Soumith', 'Ken', 'Hrithik', 0, 0, 0),
(20, '2.3', 'Soumith', 'Ken', 'Hrithik', 0, 1, 0),
(20, '2.4', 'Nayan', 'Ken', 'Hrithik', 0, 0, 0),
(24, '2.5', 'Nayan', 'Ken', 'Hrithik', 4, 0, 0),
(24, '3.0', 'Nayan', 'Ken', 'Hrithik', 0, 0, 0),
(25, '3.1', 'Ken', 'Nayan', 'Chahar', 1, 0, 0),
(26, '3.2', 'Nayan', 'Ken', 'Chahar', 1, 0, 0),
(30, '3.3', 'Ken', 'Nayan', 'Chahar', 4, 0, 0),
(30, '3.4', 'Ken', 'Nayan', 'Chahar', 0, 0, 0),
(32, '3.5', 'Ken', 'Nayan', 'Chahar', 2, 0, 0),
(34, '4.0', 'Ken', 'Nayan', 'Chahar', 2, 0, 0),
(40, '4.1', 'Nayan', 'Ken', 'Rajput', 6, 0, 0),
(40, '4.2', 'Nayan', 'Ken', 'Rajput', 0, 1, 0),
(44, '4.3', 'Koshy', 'Ken', 'Rajput', 4, 0, 0),
(45, '4.4', 'Koshy', 'Ken', 'Rajput', 1, 0, 0),
(45, '4.5', 'Ken', 'Koshy', 'Rajput', 0, 0, 0),
(48, '5.0', 'Ken', 'Koshy', 'Rajput', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m1232`
--

CREATE TABLE `m1232` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m1233`
--

CREATE TABLE `m1233` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1233`
--

INSERT INTO `m1233` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Ken', 1, 1, 0, 0, 'm123'),
('soumith', 2, 1, 0, 0, 'm123'),
('soumith', 1, 1, 0, 0, 'm123'),
('Ken', 0, 1, 0, 0, 'm123'),
('Ken', 4, 1, 1, 0, 'm123'),
('Ken', 0, 1, 0, 0, 'm123'),
('Soumith', 4, 1, 1, 0, 'm123'),
('Soumith', 1, 1, 0, 0, 'm123'),
('Ken', 0, 1, 0, 0, 'm123'),
('Ken', 6, 1, 0, 1, 'm123'),
('Ken', 1, 1, 0, 0, 'm123'),
('Soumith', 0, 1, 0, 0, 'm123'),
('Soumith', 0, 1, 0, 0, 'm123'),
('Soumith', 0, 1, 0, 0, 'm123'),
('Soumith', 0, 1, 0, 0, 'm123'),
('Nayan', 0, 1, 0, 0, 'm123'),
('Nayan', 4, 1, 1, 0, 'm123'),
('Nayan', 0, 1, 0, 0, 'm123'),
('Ken', 1, 1, 0, 0, 'm123'),
('Nayan', 1, 1, 0, 0, 'm123'),
('Ken', 4, 1, 1, 0, 'm123'),
('Ken', 0, 1, 0, 0, 'm123'),
('Ken', 2, 1, 0, 0, 'm123'),
('Ken', 2, 1, 0, 0, 'm123'),
('Nayan', 6, 1, 0, 1, 'm123'),
('Nayan', 0, 1, 0, 0, 'm123'),
('Koshy', 4, 1, 1, 0, 'm123'),
('Koshy', 1, 1, 0, 0, 'm123'),
('Ken', 0, 1, 0, 0, 'm123'),
('Ken', 3, 1, 0, 0, 'm123');

-- --------------------------------------------------------

--
-- Table structure for table `m1234`
--

CREATE TABLE `m1234` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m1235`
--

CREATE TABLE `m1235` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m1236`
--

CREATE TABLE `m1236` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1236`
--

INSERT INTO `m1236` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Hrithik', '0.1', 1, 0, 'm123'),
('Hrithik', '0.2', 2, 0, 'm123'),
('Hrithik', '0.3', 1, 0, 'm123'),
('Hrithik', '0.4', 0, 0, 'm123'),
('Hrithik', '0.5', 4, 0, 'm123'),
('Hrithik', '1.0', 0, 0, 'm123'),
('Chahar', '1.1', 4, 0, 'm123'),
('Chahar', '1.2', 1, 0, 'm123'),
('Chahar', '1.3', 0, 0, 'm123'),
('Chahar', '1.4', 6, 0, 'm123'),
('Chahar', '1.5', 1, 0, 'm123'),
('Chahar', '2.0', 0, 0, 'm123'),
('Hrithik', '2.1', 0, 0, 'm123'),
('Hrithik', '2.2', 0, 0, 'm123'),
('Hrithik', '2.3', 0, 1, 'm123'),
('Hrithik', '2.4', 0, 0, 'm123'),
('Hrithik', '2.5', 4, 0, 'm123'),
('Hrithik', '3.0', 0, 0, 'm123'),
('Chahar', '3.1', 1, 0, 'm123'),
('Chahar', '3.2', 1, 0, 'm123'),
('Chahar', '3.3', 4, 0, 'm123'),
('Chahar', '3.4', 0, 0, 'm123'),
('Chahar', '3.5', 2, 0, 'm123'),
('Chahar', '4.0', 2, 0, 'm123'),
('Rajput', '4.1', 6, 0, 'm123'),
('Rajput', '4.2', 0, 1, 'm123'),
('Rajput', '4.3', 4, 0, 'm123'),
('Rajput', '4.4', 1, 0, 'm123'),
('Rajput', '4.5', 0, 0, 'm123'),
('Rajput', '5.0', 3, 0, 'm123');

-- --------------------------------------------------------

--
-- Table structure for table `m2011`
--

CREATE TABLE `m2011` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2011`
--

INSERT INTO `m2011` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(2, '0.1', 'Hitesh', 'Rahul', 'Wasim', 2, 0, 0),
(3, '0.2', 'Hitesh', 'Rahul', 'Wasim', 1, 0, 0),
(3, '0.3', 'Rahul', 'Hitesh', 'Wasim', 0, 0, 1),
(3, '0.4', 'Neeraj', 'Hitesh', 'Wasim', 0, 0, 1),
(4, '0.5', 'Neeraj', 'Hitesh', 'Wasim', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m2012`
--

CREATE TABLE `m2012` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2012`
--

INSERT INTO `m2012` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(4, '0.1', 'Ken', 'Koshy', 'Hrithik', 0, 1, 0),
(5, '0.2', 'soumith', 'Koshy', 'Hrithik', 1, 0, 0),
(4, '0.3', 'Koshy', 'Soumith', 'Hrithik', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m2013`
--

CREATE TABLE `m2013` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2013`
--

INSERT INTO `m2013` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Hitesh', 2, 1, 0, 0, 'm201'),
('Hitesh', 1, 1, 0, 0, 'm201'),
('Rahul', 0, 1, 0, 0, 'm201'),
('Neeraj', 0, 1, 0, 0, 'm201'),
('Neeraj', 0, 1, 0, 0, 'm201');

-- --------------------------------------------------------

--
-- Table structure for table `m2014`
--

CREATE TABLE `m2014` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2014`
--

INSERT INTO `m2014` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Ken', 0, 1, 0, 0, 'm201'),
('soumith', 1, 1, 0, 0, 'm201'),
('Koshy', 0, 1, 0, 0, 'm201');

-- --------------------------------------------------------

--
-- Table structure for table `m2015`
--

CREATE TABLE `m2015` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2015`
--

INSERT INTO `m2015` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Hrithik', '0.1', 0, 1, 'm201'),
('Hrithik', '0.2', 1, 0, 'm201'),
('Hrithik', '0.3', 0, 1, 'm201');

-- --------------------------------------------------------

--
-- Table structure for table `m2016`
--

CREATE TABLE `m2016` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2016`
--

INSERT INTO `m2016` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Wasim', '0.1', 2, 0, 'm201'),
('Wasim', '0.2', 1, 0, 'm201'),
('Wasim', '0.3', 0, 1, 'm201'),
('Wasim', '0.4', 0, 0, 'm201'),
('Wasim', '0.5', 0, 0, 'm201');

-- --------------------------------------------------------

--
-- Table structure for table `m2341`
--

CREATE TABLE `m2341` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2341`
--

INSERT INTO `m2341` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(4, '0.1', 'Hemanth', 'Parthiv', 'Chaman', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m2342`
--

CREATE TABLE `m2342` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m2343`
--

CREATE TABLE `m2343` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2343`
--

INSERT INTO `m2343` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Hemanth', 4, 1, 1, 0, 'm234');

-- --------------------------------------------------------

--
-- Table structure for table `m2344`
--

CREATE TABLE `m2344` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m2345`
--

CREATE TABLE `m2345` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m2346`
--

CREATE TABLE `m2346` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2346`
--

INSERT INTO `m2346` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Chaman', '0.1', 4, 0, 'm234');

-- --------------------------------------------------------

--
-- Table structure for table `m3011`
--

CREATE TABLE `m3011` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3011`
--

INSERT INTO `m3011` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(2, '0.1', 'Ken', 'Koshy', 'Hrithik', 2, 0, 0),
(3, '0.2', 'Ken', 'Koshy', 'Hrithik', 0, 0, 1),
(7, '0.3', 'Ken', 'Koshy', 'Hrithik', 4, 0, 0),
(7, '0.4', 'Ken', 'Koshy', 'Hrithik', 0, 1, 0),
(8, '0.5', 'soumith', 'Koshy', 'Hrithik', 1, 0, 0),
(14, '1.0', 'Koshy', 'Soumith', 'Hrithik', 6, 0, 0),
(14, '1.1', 'Koshy', 'Soumith', 'Hrithik', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m3012`
--

CREATE TABLE `m3012` (
  `scorecard` int(11) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `bts1nm` varchar(20) DEFAULT NULL,
  `bts2nm` varchar(20) DEFAULT NULL,
  `blnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3012`
--

INSERT INTO `m3012` (`scorecard`, `overs`, `bts1nm`, `bts2nm`, `blnm`, `runs`, `wickets`, `extra`) VALUES
(20, '0.1', 'Hrithik', 'Advait', 'Ken', 6, 0, 0),
(24, '0.1', 'Hrithik', 'Advait', 'Ken', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m3013`
--

CREATE TABLE `m3013` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3013`
--

INSERT INTO `m3013` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Ken', 2, 1, 0, 0, 'm301'),
('Ken', 0, 1, 0, 0, 'm301'),
('Ken', 4, 1, 1, 0, 'm301'),
('Ken', 0, 1, 0, 0, 'm301'),
('soumith', 1, 1, 0, 0, 'm301'),
('Koshy', 6, 1, 0, 1, 'm301'),
('Koshy', 0, 1, 0, 0, 'm301');

-- --------------------------------------------------------

--
-- Table structure for table `m3014`
--

CREATE TABLE `m3014` (
  `btsnm` varchar(20) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT '0',
  `six` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3014`
--

INSERT INTO `m3014` (`btsnm`, `runs`, `balls`, `four`, `six`, `match_id`) VALUES
('Hrithik', 6, 1, 0, 1, 'm301'),
('Hrithik', 4, 1, 1, 0, 'm301');

-- --------------------------------------------------------

--
-- Table structure for table `m3015`
--

CREATE TABLE `m3015` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3015`
--

INSERT INTO `m3015` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Ken', '0.1', 6, 0, 'm301'),
('Ken', '0.1', 4, 0, 'm301');

-- --------------------------------------------------------

--
-- Table structure for table `m3016`
--

CREATE TABLE `m3016` (
  `blnm` varchar(20) DEFAULT NULL,
  `overs` decimal(3,1) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT '0',
  `match_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3016`
--

INSERT INTO `m3016` (`blnm`, `overs`, `runs`, `wickets`, `match_id`) VALUES
('Hrithik', '0.1', 2, 0, 'm301'),
('Hrithik', '0.2', 0, 0, 'm301'),
('Hrithik', '0.3', 4, 0, 'm301'),
('Hrithik', '0.4', 0, 1, 'm301'),
('Hrithik', '0.5', 1, 0, 'm301'),
('Hrithik', '1.0', 6, 0, 'm301'),
('Hrithik', '1.1', 0, 0, 'm301');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` varchar(10) NOT NULL,
  `team1_id` int(11) NOT NULL,
  `team2_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `team1_id`, `team2_id`) VALUES
('m201', 101, 102);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`) VALUES
(101, 'Pheonix'),
(102, 'NushAgile'),
(201, 'Yankee'),
(202, 'HackSe'),
(999, 'Losers');

-- --------------------------------------------------------

--
-- Table structure for table `team1`
--

CREATE TABLE `team1` (
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team1`
--

INSERT INTO `team1` (`team_id`, `player_id`) VALUES
(101, 1111),
(101, 1112),
(101, 1113),
(101, 1114),
(101, 1115),
(101, 1116),
(101, 1117),
(101, 1118),
(101, 1119),
(101, 1120),
(101, 1121),
(102, 1211),
(102, 1212),
(102, 1213),
(102, 1214),
(102, 1215),
(102, 1216),
(102, 1217),
(102, 1218),
(102, 1219),
(102, 1220),
(102, 1221),
(102, 1222),
(102, 1324),
(102, 1357),
(102, 1546),
(102, 1678),
(102, 1778),
(102, 2345),
(102, 3678),
(102, 5565),
(102, 5897),
(102, 6675),
(201, 1112),
(201, 1113),
(201, 1114),
(201, 1211),
(201, 1212),
(201, 1215),
(201, 1217),
(201, 1219),
(201, 1324),
(201, 5897),
(201, 6675),
(202, 1111),
(202, 1222),
(202, 1357),
(202, 1445),
(202, 1499),
(202, 1556),
(202, 1667),
(202, 1778),
(202, 1889),
(202, 1998),
(202, 6553),
(999, 1000),
(999, 2000),
(999, 3000),
(999, 4000),
(999, 5000),
(999, 6000),
(999, 7000),
(999, 8000),
(999, 9000),
(999, 9900),
(999, 9990);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `username`) VALUES
(0, '', 'Niraj'),
(1111, 'arc11', 'Archiee'),
(1222, 'neo', 'Soumith'),
(1357, 'Koshy', 'Ken'),
(1445, 'hrithik', 'Hrithik'),
(1499, 'lassi', 'Masi'),
(1556, 'roof', 'Maroof'),
(1667, 'eenu', 'Keenu'),
(1778, 'rutu', 'Rutu'),
(1889, 'amul', 'Niraj'),
(1998, 'dettol', 'Denol'),
(6553, 'ali', 'Abdul'),
(6969, 'tejasfucker', 'tejas');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` varchar(6) DEFAULT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `Name`, `Age`, `Sex`, `State`, `Country`, `Phone_no`, `Address`) VALUES
(0, 'Niraj', 23, 'Male', 'Karale', '', 0, ''),
(1111, 'Archiee', 26, 'Female', 'Karnataka', 'Italy', 2147483647, '10, 3rd Cross, Frazer Town, Bangalore'),
(1222, 'Soumith', 56, 'Male', 'Ktaka', 'India', 2147483647, 'Hostel NMIT'),
(1357, 'Ken', 19, 'Male', 'Ktaka', 'India', 2147483647, 'Mars'),
(1445, 'Hrithik', 45, 'Male', 'Ktaka', 'India', 2147483647, 'Coorg'),
(1499, 'Masi', 23, 'Male', 'Ktaka', 'India', 2147483647, 'Pilana'),
(1556, 'Maroof', 34, 'Male', 'Ktaka', 'India', 2147483647, 'Kashmir'),
(1667, 'Keenu', 47, 'Female', 'Bihar', 'India', 2147483647, 'Anjali Petrol Pump'),
(1778, 'Rutu', 34, 'Female', 'Orissa', 'India', 2147483647, 'Marathalli'),
(1889, 'Niraj', 24, 'Male', 'Kerala', 'India', 2147483647, 'Munnar'),
(1998, 'Denol', 24, 'Male', 'Ktaka', 'India', 2147483647, 'Manyata'),
(6553, 'Abdul', 33, 'Male', 'Ktaka', 'India', 2147483647, 'Jayanagar'),
(6969, 'tejas', 19, 'female', 'ktaka', 'india', 2147483647, 'nagarbhavi ,bangalore,pluto');

-- --------------------------------------------------------

--
-- Table structure for table `user_info1`
--

CREATE TABLE `user_info1` (
  `batting` varchar(30) NOT NULL,
  `bowling` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info1`
--

INSERT INTO `user_info1` (`batting`, `bowling`, `user_id`) VALUES
('', '', 0),
('RHB', 'LHS', 1111),
('LHB', 'Slow Pace', 1222),
('RHB', 'Left Hand Spin', 1357),
('RHB', 'LHP', 1445),
('RHB', 'LHP', 1499),
('RHB', 'RHS', 1556),
('RHB', 'RHP', 1667),
('RHB', 'LHS', 1778),
('RHB', 'RHP', 1889),
('LHB', 'LHS', 1998),
('RHB', 'RHP', 6553),
('lbh', 'lhs', 6969);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `loggedin`
--
ALTER TABLE `loggedin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `m111`
--
ALTER TABLE `m111`
  ADD PRIMARY KEY (`match_id`,`batting_team`);

--
-- Indexes for table `m123`
--
ALTER TABLE `m123`
  ADD PRIMARY KEY (`match_id`,`batting_team`);

--
-- Indexes for table `m201`
--
ALTER TABLE `m201`
  ADD PRIMARY KEY (`match_id`,`batting_team`);

--
-- Indexes for table `m234`
--
ALTER TABLE `m234`
  ADD PRIMARY KEY (`match_id`,`batting_team`);

--
-- Indexes for table `m301`
--
ALTER TABLE `m301`
  ADD PRIMARY KEY (`match_id`,`batting_team`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `team1`
--
ALTER TABLE `team1`
  ADD PRIMARY KEY (`team_id`,`player_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info1`
--
ALTER TABLE `user_info1`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
