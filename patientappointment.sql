-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 01:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientappointment`
--

CREATE TABLE `patientappointment` (
  `p_id` varchar(10) NOT NULL,
  `dr_name` varchar(20) NOT NULL,
  `specialisation` varchar(15) NOT NULL,
  `app_date` varchar(10) NOT NULL,
  `app_time_from` varchar(5) NOT NULL,
  `app_time_to` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientappointment`
--

INSERT INTO `patientappointment` (`p_id`, `dr_name`, `specialisation`, `app_date`, `app_time_from`, `app_time_to`, `status`) VALUES
('1', 'Sony Nithin', 'pediatrician', '2020-01-10', '07:00', '07:30', 'pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
