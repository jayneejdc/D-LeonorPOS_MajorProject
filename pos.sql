-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 10:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '$2y$10$/ThHDFr43BF439j1BhETYuuYJ13ZVqpXhrFJMoLHND1v0ybXTvwLC', '7f100b7b36092fb9b06dfb4fac360931', 0);

-- --------------------------------------------------------

--
-- Table structure for table `atv_truck`
--

CREATE TABLE `atv_truck` (
  `id` int(11) NOT NULL,
  `akid` int(11) DEFAULT NULL,
  `aadult` int(11) DEFAULT NULL,
  `adisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atv_truck`
--

INSERT INTO `atv_truck` (`id`, `akid`, `aadult`, `adisc`, `username`, `dat`) VALUES
(100343, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 2, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `buggy_kart`
--

CREATE TABLE `buggy_kart` (
  `id` int(11) NOT NULL,
  `bkkid` int(11) DEFAULT NULL,
  `bkadult` int(11) DEFAULT NULL,
  `bkdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buggy_kart`
--

INSERT INTO `buggy_kart` (`id`, `bkkid`, `bkadult`, `bkdisc`, `username`, `dat`) VALUES
(100343, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 2, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `bumper_boat`
--

CREATE TABLE `bumper_boat` (
  `id` int(11) NOT NULL,
  `bbkid` int(11) DEFAULT NULL,
  `bbadult` int(11) DEFAULT NULL,
  `bbdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bumper_boat`
--

INSERT INTO `bumper_boat` (`id`, `bbkid`, `bbadult`, `bbdisc`, `username`, `dat`) VALUES
(100343, 3, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 3, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 3, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 3, 2, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `bump_car`
--

CREATE TABLE `bump_car` (
  `id` int(11) NOT NULL,
  `bckid` int(11) DEFAULT NULL,
  `bcadult` int(11) DEFAULT NULL,
  `bcdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bump_car`
--

INSERT INTO `bump_car` (`id`, `bckid`, `bcadult`, `bcdisc`, `username`, `dat`) VALUES
(100343, 3, 2, 3, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 3, 2, 3, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 3, 2, 3, '', '2017-12-05 15:41:03'),
(100346, 3, 2, 3, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `cable_car`
--

CREATE TABLE `cable_car` (
  `id` int(11) NOT NULL,
  `cckid` int(11) DEFAULT NULL,
  `ccadult` int(11) DEFAULT NULL,
  `ccdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cable_car`
--

INSERT INTO `cable_car` (`id`, `cckid`, `ccadult`, `ccdisc`, `username`, `dat`) VALUES
(100343, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 2, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `id` int(11) NOT NULL,
  `day` date NOT NULL,
  `entrance` int(11) NOT NULL,
  `rides` int(11) NOT NULL,
  `pool` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `day`, `entrance`, `rides`, `pool`) VALUES
(1, '2017-12-01', 2000, 1000, 2000),
(2, '2017-12-02', 3000, 2500, 1000),
(3, '2017-12-03', 4000, 2000, 2000),
(4, '2017-12-04', 1000, 800, 600),
(5, '2017-12-05', 5000, 3000, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `entrance`
--

CREATE TABLE `entrance` (
  `ekid` int(11) DEFAULT NULL,
  `eadult` int(11) DEFAULT NULL,
  `edisc` int(11) DEFAULT NULL,
  `transacid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrance`
--

INSERT INTO `entrance` (`ekid`, `eadult`, `edisc`, `transacid`, `username`, `dat`) VALUES
(1, 2, 0, 100352, 'trial@trial.com', '2017-12-06 12:39:02'),
(1, 2, 0, 100351, 'trial@trial.com', '2017-12-06 12:38:59'),
(1, 2, 0, 100350, 'trial@trial.com', '2017-12-06 12:38:31'),
(2, 0, 0, 100349, 'trial@trial.com', '2017-12-05 15:45:34'),
(2, 0, 0, 100347, 'trial@trial.com', '2017-12-05 15:43:52'),
(4, 2, 1, 100346, '', '2017-12-05 15:41:40'),
(4, 2, 1, 100345, '', '2017-12-05 15:41:03'),
(4, 2, 1, 100344, 'trial@trial.com', '2017-12-05 15:37:55'),
(4, 2, 1, 100343, 'trial@trial.com', '2017-12-05 15:32:09'),
(1, 0, 0, 100341, 'trial@trial.com', '2017-12-05 15:26:32'),
(1, 0, 0, 100340, 'trial@trial.com', '2017-12-05 15:26:29'),
(1, 0, 0, 100339, 'trial@trial.com', '2017-12-05 15:26:02'),
(1, 2, 0, 100353, 'trial@trial.com', '2017-12-06 12:39:11'),
(1, 2, 0, 100354, 'trial@trial.com', '2017-12-06 12:39:15'),
(1, 2, 0, 100355, 'trial@trial.com', '2017-12-06 12:39:24'),
(1, 2, 0, 100356, 'trial@trial.com', '2017-12-06 12:39:30'),
(1, 2, 0, 100357, 'trial@trial.com', '2017-12-06 12:39:34'),
(1, 2, 0, 100358, 'trial@trial.com', '2017-12-06 12:39:39'),
(1, 2, 0, 100359, 'trial@trial.com', '2017-12-06 12:39:42'),
(1, 2, 0, 100360, 'trial@trial.com', '2017-12-06 12:43:00'),
(1, 2, 0, 100361, 'trial@trial.com', '2017-12-06 12:43:05'),
(1, 2, 0, 100362, 'trial@trial.com', '2017-12-06 12:43:16'),
(1, 2, 0, 100363, 'trial@trial.com', '2017-12-06 12:43:21'),
(1, 2, 0, 100364, 'trial@trial.com', '2017-12-06 12:43:59'),
(1, 2, 0, 100365, 'trial@trial.com', '2017-12-06 12:44:08'),
(1, 2, 0, 100366, 'trial@trial.com', '2017-12-06 12:44:15'),
(1, 2, 0, 100367, 'trial@trial.com', '2017-12-06 12:44:24'),
(1, 2, 0, 100368, 'trial@trial.com', '2017-12-06 12:44:33'),
(1, 2, 0, 100369, 'trial@trial.com', '2017-12-06 12:44:38'),
(1, 2, 0, 100370, 'trial@trial.com', '2017-12-06 12:46:33'),
(1, 2, 0, 100371, 'trial@trial.com', '2017-12-06 12:46:37'),
(1, 2, 0, 100372, 'trial@trial.com', '2017-12-06 12:46:48'),
(1, 2, 0, 100373, 'trial@trial.com', '2017-12-06 12:46:55'),
(1, 2, 0, 100374, 'trial@trial.com', '2017-12-06 12:47:22'),
(1, 2, 0, 100375, 'trial@trial.com', '2017-12-06 12:47:27'),
(1, 2, 0, 100376, 'trial@trial.com', '2017-12-06 12:47:34'),
(1, 2, 0, 100377, 'trial@trial.com', '2017-12-06 12:47:52'),
(1, 2, 0, 100378, 'trial@trial.com', '2017-12-06 12:48:01'),
(1, 2, 0, 100379, 'trial@trial.com', '2017-12-06 12:48:08'),
(1, 2, 0, 100380, 'trial@trial.com', '2017-12-06 12:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `giant_slide`
--

CREATE TABLE `giant_slide` (
  `id` int(11) NOT NULL,
  `gskid` int(11) DEFAULT NULL,
  `gsadult` int(11) DEFAULT NULL,
  `gsdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giant_slide`
--

INSERT INTO `giant_slide` (`id`, `gskid`, `gsadult`, `gsdisc`, `username`, `dat`) VALUES
(100343, 2, 3, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 3, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 3, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 3, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `go_kart`
--

CREATE TABLE `go_kart` (
  `id` int(11) NOT NULL,
  `gkkid` int(11) DEFAULT NULL,
  `gkadult` int(11) DEFAULT NULL,
  `gkdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `go_kart`
--

INSERT INTO `go_kart` (`id`, `gkkid`, `gkadult`, `gkdisc`, `username`, `dat`) VALUES
(100343, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 2, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `dat` datetime DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `ekid` int(11) DEFAULT NULL,
  `eadult` int(11) DEFAULT NULL,
  `edisc` int(11) DEFAULT NULL,
  `gskid` int(11) DEFAULT NULL,
  `gsadult` int(11) DEFAULT NULL,
  `gsdisc` int(11) DEFAULT NULL,
  `wpkid` int(11) DEFAULT NULL,
  `wpadult` int(11) DEFAULT NULL,
  `wpdisc` int(11) DEFAULT NULL,
  `bckid` int(11) DEFAULT NULL,
  `bcadult` int(11) DEFAULT NULL,
  `bcdisc` int(11) DEFAULT NULL,
  `bkkid` int(11) DEFAULT NULL,
  `bkadult` int(11) DEFAULT NULL,
  `bkdisc` int(11) DEFAULT NULL,
  `zkid` int(11) DEFAULT NULL,
  `zadult` int(11) DEFAULT NULL,
  `zdisc` int(11) DEFAULT NULL,
  `cckid` int(11) DEFAULT NULL,
  `ccadult` int(11) DEFAULT NULL,
  `ccdisc` int(11) DEFAULT NULL,
  `akid` int(11) DEFAULT NULL,
  `aadult` int(11) DEFAULT NULL,
  `adisc` int(11) DEFAULT NULL,
  `skid` int(11) DEFAULT NULL,
  `sadult` int(11) DEFAULT NULL,
  `sdisc` int(11) DEFAULT NULL,
  `gkkid` int(11) DEFAULT NULL,
  `gkadult` int(11) DEFAULT NULL,
  `gkdisc` int(11) DEFAULT NULL,
  `bbkid` int(11) DEFAULT NULL,
  `bbadult` int(11) DEFAULT NULL,
  `bbdisc` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `dat`, `username`, `ekid`, `eadult`, `edisc`, `gskid`, `gsadult`, `gsdisc`, `wpkid`, `wpadult`, `wpdisc`, `bckid`, `bcadult`, `bcdisc`, `bkkid`, `bkadult`, `bkdisc`, `zkid`, `zadult`, `zdisc`, `cckid`, `ccadult`, `ccdisc`, `akid`, `aadult`, `adisc`, `skid`, `sadult`, `sdisc`, `gkkid`, `gkadult`, `gkdisc`, `bbkid`, `bbadult`, `bbdisc`) VALUES
(100359, '2017-12-06 12:39:42', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100358, '2017-12-06 12:39:39', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100357, '2017-12-06 12:39:34', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100356, '2017-12-06 12:39:30', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100355, '2017-12-06 12:39:24', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100354, '2017-12-06 12:39:15', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100353, '2017-12-06 12:39:11', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100352, '2017-12-06 12:39:02', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100351, '2017-12-06 12:38:59', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100350, '2017-12-06 12:38:31', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100349, '2017-12-05 15:45:34', 'trial@trial.com', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100348, '2017-12-05 15:44:44', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100347, '2017-12-05 15:43:52', 'trial@trial.com', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100346, '2017-12-05 15:41:40', '', 4, 2, 1, 2, 3, 2, 2, 2, 2, 3, 2, 3, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2),
(100345, '2017-12-05 15:41:03', '', 4, 2, 1, 2, 3, 2, 2, 2, 2, 3, 2, 3, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2),
(100344, '2017-12-05 15:37:55', 'trial@trial.com', 4, 2, 1, 2, 3, 2, 2, 2, 2, 3, 2, 3, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2),
(100341, '2017-12-05 15:26:32', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100342, '2017-12-05 15:26:37', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100343, '2017-12-05 15:32:09', 'trial@trial.com', 4, 2, 1, 2, 3, 2, 2, 2, 2, 3, 2, 3, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2),
(100338, '2017-12-05 14:02:12', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100339, '2017-12-05 15:26:02', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100340, '2017-12-05 15:26:29', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100335, '2017-12-05 13:56:36', 'trial@trial.com', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100336, '2017-12-05 13:58:00', 'trial@trial.com', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100337, '2017-12-05 14:02:07', 'trial@trial.com', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100333, '2017-12-05 13:55:21', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100334, '2017-12-05 13:56:12', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100330, '2017-12-05 13:54:19', 'trial@trial.com', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100331, '2017-12-05 13:54:29', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100332, '2017-12-05 13:55:12', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100327, '2017-12-05 13:53:45', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100328, '2017-12-05 13:53:57', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100329, '2017-12-05 13:54:13', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100324, '2017-12-05 13:52:32', 'trial@trial.com', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100325, '2017-12-05 13:52:37', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100326, '2017-12-05 13:52:41', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100322, '2017-12-05 13:52:00', 'trial@trial.com', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100323, '2017-12-05 13:52:27', 'trial@trial.com', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100321, '2017-12-05 13:51:45', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100320, '2017-12-05 13:51:16', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100319, '2017-12-05 13:50:53', 'trial@trial.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100318, '2017-12-05 13:50:49', 'trial@trial.com', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100317, '2017-12-05 13:43:45', 'trial@trial.com', 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0),
(100316, '2017-12-05 13:42:30', 'trial@trial.com', 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100315, '2017-12-05 13:41:49', 'trial@trial.com', 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100314, '2017-12-05 13:19:33', 'trial@trial.com', 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100313, '2017-12-05 13:18:14', 'trial@trial.com', 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100312, '2017-12-05 13:14:45', 'trial@trial.com', 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100311, '2017-12-05 13:12:10', 'trial@trial.com', 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100310, '2017-12-05 13:10:21', 'trial@trial.com', 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100309, '2017-12-05 13:08:37', 'trial@trial.com', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100308, '2017-12-05 13:07:38', 'trial@trial.com', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100360, '2017-12-06 12:43:00', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100361, '2017-12-06 12:43:05', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100362, '2017-12-06 12:43:16', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100363, '2017-12-06 12:43:21', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100364, '2017-12-06 12:43:59', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100365, '2017-12-06 12:44:08', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100366, '2017-12-06 12:44:15', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100367, '2017-12-06 12:44:24', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100368, '2017-12-06 12:44:33', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100369, '2017-12-06 12:44:38', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100370, '2017-12-06 12:46:33', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100371, '2017-12-06 12:46:37', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100372, '2017-12-06 12:46:48', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100373, '2017-12-06 12:46:55', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100374, '2017-12-06 12:47:22', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100375, '2017-12-06 12:47:27', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100376, '2017-12-06 12:47:34', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100377, '2017-12-06 12:47:52', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100378, '2017-12-06 12:48:01', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100379, '2017-12-06 12:48:08', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100380, '2017-12-06 12:48:15', 'trial@trial.com', 1, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100381, '2017-12-06 14:23:27', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100382, '2017-12-06 14:30:21', 'trial@trial.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `monthly`
--

CREATE TABLE `monthly` (
  `id` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly`
--

INSERT INTO `monthly` (`id`, `month`, `purchase`, `sale`, `profit`) VALUES
(6, 'June', 30000, 35000, 5000),
(7, 'July', 35000, 4000, 5000),
(8, 'August', 13000, 17000, 4000),
(9, 'Sept', 70000, 79000, 9000),
(10, 'Oct', 30000, 37000, 7000),
(11, 'Nov', 70000, 9000, 20000),
(12, 'Dec', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_ID` int(11) NOT NULL,
  `transaction_number` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `entrance` int(11) DEFAULT NULL,
  `pool` int(11) DEFAULT NULL,
  `rides` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `transacid` int(11) NOT NULL,
  `dat` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`entrance`, `pool`, `rides`, `total`, `transacid`, `dat`, `username`) VALUES
(200, 0, 0, 200, 100324, '2017-12-05 13:52:32', 'trial@trial.com'),
(300, 0, 0, 300, 100323, '2017-12-05 13:52:27', 'trial@trial.com'),
(300, 0, 0, 300, 100322, '2017-12-05 13:52:00', 'trial@trial.com'),
(100, 0, 0, 100, 100321, '2017-12-05 13:51:45', 'trial@trial.com'),
(100, 0, 0, 100, 100320, '2017-12-05 13:51:16', 'trial@trial.com'),
(100, 0, 0, 100, 100319, '2017-12-05 13:50:53', 'trial@trial.com'),
(0, 100, 0, 100, 100318, '2017-12-05 13:50:49', 'trial@trial.com'),
(100, 200, 800, 1100, 100317, '2017-12-05 13:43:45', 'trial@trial.com'),
(0, 0, 0, 0, 100288, '2017-12-03 22:49:05', ''),
(0, 0, 0, 0, 100289, '2017-12-03 22:50:47', ''),
(0, 0, 0, 0, 100290, '2017-12-03 22:50:53', ''),
(0, 0, 0, 0, 100291, '2017-12-03 22:50:57', ''),
(0, 0, 0, 0, 100292, '2017-12-03 22:57:40', ''),
(0, 0, 0, 0, 100293, '2017-12-03 22:57:58', ''),
(0, 0, 0, 0, 100294, '2017-12-03 22:58:02', ''),
(0, 0, 0, 0, 100295, '2017-12-03 22:58:06', ''),
(0, 0, 0, 0, 100296, '2017-12-03 22:58:23', ''),
(0, 0, 0, 0, 100297, '2017-12-03 22:58:30', ''),
(0, 0, 0, 0, 100298, '2017-12-03 22:58:39', ''),
(0, 0, 0, 0, 100299, '2017-12-03 22:58:50', ''),
(0, 0, 0, 0, 100300, '2017-12-03 22:58:54', ''),
(0, 0, 0, 0, 100301, '2017-12-03 22:59:51', ''),
(0, 0, 0, 0, 100302, '2017-12-03 23:03:22', ''),
(100, 0, 0, 100, 100303, '2017-12-03 23:04:04', ''),
(100, 100, 100, 300, 100304, '2017-12-03 23:10:22', ''),
(0, 100, 500, 600, 100305, '2017-12-03 23:14:56', ''),
(0, 0, 0, 0, 100306, '2017-12-05 12:48:55', ''),
(100, 0, 0, 100, 100307, '2017-12-05 12:58:13', ''),
(200, 0, 0, 200, 1, '2017-12-05 13:07:38', 'trial@trial.com'),
(200, 0, 0, 200, 100309, '2017-12-05 13:08:37', 'trial@trial.com'),
(400, 0, 0, 400, 100312, '2017-12-05 13:14:45', 'trial@trial.com'),
(400, 0, 0, 400, 100313, '2017-12-05 13:18:14', 'trial@trial.com'),
(400, 0, 0, 400, 100314, '2017-12-05 13:19:33', 'trial@trial.com'),
(400, 0, 0, 400, 100315, '2017-12-05 13:41:49', 'trial@trial.com'),
(600, 0, 0, 600, 100316, '2017-12-05 13:42:30', 'trial@trial.com'),
(100, 0, 0, 100, 100325, '2017-12-05 13:52:37', 'trial@trial.com'),
(0, 0, 0, 0, 100326, '2017-12-05 13:52:41', 'trial@trial.com'),
(100, 0, 0, 100, 100327, '2017-12-05 13:53:45', 'trial@trial.com'),
(0, 0, 0, 0, 100328, '2017-12-05 13:53:57', 'trial@trial.com'),
(100, 0, 0, 100, 100329, '2017-12-05 13:54:13', 'trial@trial.com'),
(300, 0, 0, 300, 100330, '2017-12-05 13:54:19', 'trial@trial.com'),
(100, 0, 0, 100, 100331, '2017-12-05 13:54:29', 'trial@trial.com'),
(0, 0, 0, 0, 100332, '2017-12-05 13:55:12', 'trial@trial.com'),
(0, 0, 0, 0, 100333, '2017-12-05 13:55:21', 'trial@trial.com'),
(0, 0, 0, 0, 100334, '2017-12-05 13:56:12', 'trial@trial.com'),
(0, 100, 0, 100, 100335, '2017-12-05 13:56:36', 'trial@trial.com'),
(0, 100, 0, 100, 100336, '2017-12-05 13:58:00', 'trial@trial.com'),
(0, 100, 0, 100, 100337, '2017-12-05 14:02:07', 'trial@trial.com'),
(0, 0, 0, 0, 100338, '2017-12-05 14:02:12', 'trial@trial.com'),
(100, 0, 0, 100, 100339, '2017-12-05 15:26:02', 'trial@trial.com'),
(100, 0, 0, 100, 100340, '2017-12-05 15:26:29', 'trial@trial.com'),
(100, 0, 0, 100, 100341, '2017-12-05 15:26:32', 'trial@trial.com'),
(0, 0, 0, 0, 100342, '2017-12-05 15:26:37', 'trial@trial.com'),
(700, 1300, 4800, 6800, 100343, '2017-12-05 15:32:09', 'trial@trial.com'),
(700, 1300, 4800, 6800, 100344, '2017-12-05 15:37:55', 'trial@trial.com'),
(700, 1300, 4800, 6800, 100345, '2017-12-05 15:41:03', ''),
(700, 1300, 4800, 6800, 100346, '2017-12-05 15:41:40', ''),
(200, 0, 0, 200, 100347, '2017-12-05 15:43:52', 'trial@trial.com'),
(0, 0, 0, 0, 100348, '2017-12-05 15:44:44', ''),
(200, 0, 0, 200, 100349, '2017-12-05 15:45:34', 'trial@trial.com'),
(300, 300, 200, 800, 100350, '2017-12-06 12:38:31', 'trial@trial.com'),
(300, 300, 200, 800, 100351, '2017-12-06 12:38:59', 'trial@trial.com'),
(300, 300, 200, 800, 100352, '2017-12-06 12:39:02', 'trial@trial.com'),
(300, 300, 200, 800, 100353, '2017-12-06 12:39:11', 'trial@trial.com'),
(300, 300, 200, 800, 100354, '2017-12-06 12:39:15', 'trial@trial.com'),
(300, 300, 200, 800, 100355, '2017-12-06 12:39:24', 'trial@trial.com'),
(300, 300, 200, 800, 100356, '2017-12-06 12:39:30', 'trial@trial.com'),
(300, 300, 200, 800, 100357, '2017-12-06 12:39:34', 'trial@trial.com'),
(300, 300, 200, 800, 100358, '2017-12-06 12:39:39', 'trial@trial.com'),
(300, 300, 200, 800, 100359, '2017-12-06 12:39:42', 'trial@trial.com'),
(300, 300, 200, 800, 100360, '2017-12-06 12:43:00', 'trial@trial.com'),
(300, 300, 200, 800, 100361, '2017-12-06 12:43:05', 'trial@trial.com'),
(300, 300, 200, 800, 100362, '2017-12-06 12:43:16', 'trial@trial.com'),
(300, 300, 200, 800, 100363, '2017-12-06 12:43:21', 'trial@trial.com'),
(300, 300, 200, 800, 100364, '2017-12-06 12:43:59', 'trial@trial.com'),
(300, 300, 200, 800, 100365, '2017-12-06 12:44:09', 'trial@trial.com'),
(300, 300, 200, 800, 100366, '2017-12-06 12:44:15', 'trial@trial.com'),
(300, 300, 200, 800, 100367, '2017-12-06 12:44:24', 'trial@trial.com'),
(300, 300, 200, 800, 100368, '2017-12-06 12:44:33', 'trial@trial.com'),
(300, 300, 200, 800, 100369, '2017-12-06 12:44:38', 'trial@trial.com'),
(300, 300, 200, 800, 100370, '2017-12-06 12:46:33', 'trial@trial.com'),
(300, 300, 200, 800, 100371, '2017-12-06 12:46:37', 'trial@trial.com'),
(300, 300, 200, 800, 100372, '2017-12-06 12:46:48', 'trial@trial.com'),
(300, 300, 200, 800, 100373, '2017-12-06 12:46:55', 'trial@trial.com'),
(300, 300, 200, 800, 100374, '2017-12-06 12:47:22', 'trial@trial.com'),
(300, 300, 200, 800, 100375, '2017-12-06 12:47:27', 'trial@trial.com'),
(300, 300, 200, 800, 100376, '2017-12-06 12:47:34', 'trial@trial.com'),
(300, 300, 200, 800, 100377, '2017-12-06 12:47:52', 'trial@trial.com'),
(300, 300, 200, 800, 100378, '2017-12-06 12:48:01', 'trial@trial.com'),
(300, 300, 200, 800, 100379, '2017-12-06 12:48:08', 'trial@trial.com'),
(300, 300, 200, 800, 100380, '2017-12-06 12:48:15', 'trial@trial.com'),
(0, 0, 0, 0, 100381, '2017-12-06 14:23:27', 'trial@trial.com'),
(0, 0, 0, 0, 100382, '2017-12-06 14:30:21', 'trial@trial.com');

-- --------------------------------------------------------

--
-- Table structure for table `segway`
--

CREATE TABLE `segway` (
  `id` int(11) NOT NULL,
  `skid` int(11) DEFAULT NULL,
  `sadult` int(11) DEFAULT NULL,
  `sdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `segway`
--

INSERT INTO `segway` (`id`, `skid`, `sadult`, `sdisc`, `username`, `dat`) VALUES
(100343, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 2, 2, '', '2017-12-05 15:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` enum('user','master') NOT NULL,
  `lastLogin` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastname`, `firstname`, `address`, `mobile`, `status`, `gender`, `type`, `lastLogin`) VALUES
(10, 'admin@admin.com', 'f4aa38a0e4d3298ab63ef07149fa67f1', 'Kyle', 'Admin', 'Davao City', '09222312312', '1', 'M', 'master', '2017-12-30'),
(8, 'jaynee@dleonor.com', 'f4aa38a0e4d3298ab63ef07149fa67f1', 'De Claro', 'Jeelenee', 'Davao CIty', '09224172264', '1', 'Male', 'user', '2017-12-01'),
(7, 'trial@trial.com', 'f4aa38a0e4d3298ab63ef07149fa67f1', 'Martinez', 'Kyle', 'Davao City', '09435139873', '1', 'Male', 'user', '2017-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `wave_pool`
--

CREATE TABLE `wave_pool` (
  `id` int(11) NOT NULL,
  `wpkid` int(11) DEFAULT NULL,
  `wpadult` int(11) DEFAULT NULL,
  `wpdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wave_pool`
--

INSERT INTO `wave_pool` (`id`, `wpkid`, `wpadult`, `wpdisc`, `username`, `dat`) VALUES
(100343, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 2, 2, 2, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 2, 2, 2, '', '2017-12-05 15:41:03'),
(100346, 2, 2, 2, '', '2017-12-05 15:41:40'),
(100350, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:38:31'),
(100351, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:38:59'),
(100352, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:02'),
(100353, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:11'),
(100354, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:15'),
(100355, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:24'),
(100356, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:30'),
(100357, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:34'),
(100358, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:39'),
(100359, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:39:42'),
(100360, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:43:00'),
(100361, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:43:05'),
(100362, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:43:16'),
(100363, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:43:21'),
(100364, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:43:59'),
(100365, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:44:08'),
(100366, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:44:15'),
(100367, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:44:24'),
(100368, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:44:33'),
(100369, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:44:38'),
(100370, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:46:33'),
(100371, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:46:37'),
(100372, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:46:48'),
(100373, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:46:55'),
(100374, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:47:22'),
(100375, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:47:27'),
(100376, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:47:34'),
(100377, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:47:52'),
(100378, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:48:01'),
(100379, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:48:08'),
(100380, 1, 2, 0, 'trial@trial.com', '2017-12-06 12:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

CREATE TABLE `weekly` (
  `id` int(11) NOT NULL,
  `week` varchar(30) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly`
--

INSERT INTO `weekly` (`id`, `week`, `purchase`, `sale`, `profit`) VALUES
(1, 'Nov 1-7', 10000, 15000, 5000),
(2, 'Nov 8-14', 13000, 17000, 4000),
(3, 'Nov 15-21', 15000, 20000, 5000),
(4, 'Nov 22-30', 13000, 16000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `yearly`
--

CREATE TABLE `yearly` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearly`
--

INSERT INTO `yearly` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2015, 500000, 600000, 100000),
(2, 2016, 1000000, 1500000, 500000),
(3, 2017, 1500000, 2000000, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `zipline`
--

CREATE TABLE `zipline` (
  `id` int(11) NOT NULL,
  `zkid` int(11) DEFAULT NULL,
  `zadult` int(11) DEFAULT NULL,
  `zdisc` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipline`
--

INSERT INTO `zipline` (`id`, `zkid`, `zadult`, `zdisc`, `username`, `dat`) VALUES
(100343, 1, 1, 1, 'trial@trial.com', '2017-12-05 15:32:09'),
(100344, 1, 1, 1, 'trial@trial.com', '2017-12-05 15:37:55'),
(100345, 1, 1, 1, '', '2017-12-05 15:41:03'),
(100346, 1, 1, 1, '', '2017-12-05 15:41:40'),
(100350, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:38:31'),
(100351, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:38:59'),
(100352, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:02'),
(100353, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:11'),
(100354, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:15'),
(100355, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:24'),
(100356, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:30'),
(100357, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:34'),
(100358, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:39'),
(100359, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:39:42'),
(100360, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:43:00'),
(100361, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:43:05'),
(100362, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:43:16'),
(100363, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:43:21'),
(100364, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:43:59'),
(100365, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:44:09'),
(100366, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:44:15'),
(100367, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:44:24'),
(100368, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:44:33'),
(100369, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:44:38'),
(100370, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:46:33'),
(100371, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:46:37'),
(100372, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:46:48'),
(100373, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:46:55'),
(100374, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:47:22'),
(100375, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:47:27'),
(100376, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:47:34'),
(100377, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:47:52'),
(100378, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:48:01'),
(100379, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:48:08'),
(100380, 1, 1, 0, 'trial@trial.com', '2017-12-06 12:48:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atv_truck`
--
ALTER TABLE `atv_truck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buggy_kart`
--
ALTER TABLE `buggy_kart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bumper_boat`
--
ALTER TABLE `bumper_boat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bump_car`
--
ALTER TABLE `bump_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cable_car`
--
ALTER TABLE `cable_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrance`
--
ALTER TABLE `entrance`
  ADD PRIMARY KEY (`transacid`);

--
-- Indexes for table `giant_slide`
--
ALTER TABLE `giant_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `go_kart`
--
ALTER TABLE `go_kart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly`
--
ALTER TABLE `monthly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_ID`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`transacid`);

--
-- Indexes for table `segway`
--
ALTER TABLE `segway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wave_pool`
--
ALTER TABLE `wave_pool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly`
--
ALTER TABLE `weekly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly`
--
ALTER TABLE `yearly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zipline`
--
ALTER TABLE `zipline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100383;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `weekly`
--
ALTER TABLE `weekly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `yearly`
--
ALTER TABLE `yearly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
