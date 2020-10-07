-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 12:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basin_surveillance_db`
--
CREATE DATABASE IF NOT EXISTS `basin_surveillance_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `basin_surveillance_db`;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `device_id` varchar(20) NOT NULL,
  `detail_description` varchar(100) NOT NULL,
  `detail_mac_id` varchar(20) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detail_id`, `device_id`, `detail_description`, `detail_mac_id`) VALUES
(1, '1', 'Basin surveillance System is The Best', 'A123B456');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `device_id` varchar(20) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `device_detail` varchar(50) NOT NULL,
  `device_type` int(11) NOT NULL,
  PRIMARY KEY (`device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id`, `device_name`, `device_detail`, `device_type`) VALUES
('1', 'Basin Surveillance System 01', 'Bridge 407', 101);

-- --------------------------------------------------------

--
-- Table structure for table `surveillance_sensor`
--

CREATE TABLE IF NOT EXISTS `surveillance_sensor` (
  `sensor_id` int(11) NOT NULL AUTO_INCREMENT,
  `humid_value` varchar(20) NOT NULL,
  `temp_value` varchar(20) NOT NULL,
  `rainfall_value` varchar(20) NOT NULL,
  `waterlevel_value` varchar(20) NOT NULL,
  `turbidity_value` varchar(20) NOT NULL,
  `sensor_timesend` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `detail_mac_id` varchar(20) NOT NULL,
  `sensor_status` int(11) NOT NULL,
  PRIMARY KEY (`sensor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surveillance_sensor`
--

INSERT INTO `surveillance_sensor` (`sensor_id`, `humid_value`, `temp_value`, `rainfall_value`, `waterlevel_value`, `turbidity_value`, `sensor_timesend`, `detail_mac_id`, `sensor_status`) VALUES
(1, '50', '35', '90', '5', '50', '2020-07-27 16:11:19', 'A123B456', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
