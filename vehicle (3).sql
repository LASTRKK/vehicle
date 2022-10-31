-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 11:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vehiclenumber` varchar(50) NOT NULL,
  `checkbox` varchar(1000) NOT NULL,
  `created_at` date NOT NULL,
  `timein` time NOT NULL,
  `Licence` varchar(50) NOT NULL,
  `Authority` varchar(50) NOT NULL,
  `Wheeler` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `vehiclenumber`, `checkbox`, `created_at`, `timein`, `Licence`, `Authority`, `Wheeler`) VALUES
(1, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '', '0000-00-00', '00:00:00', '', '', ''),
(2, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),6.Indicator,11.Tail Gate,12.Parking Brake,13.Service Brake', '0000-00-00', '00:00:00', '', '', ''),
(3, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),6.Indicator,11.Tail Gate,12.Parking Brake,13.Service Brake', '0000-00-00', '00:00:00', '', '', ''),
(4, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),6.Indicator,11.Tail Gate,12.Parking Brake,13.Service Brake', '0000-00-00', '00:00:00', '', '', ''),
(5, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,10.Fire Extinguisher,14.Rear View Camera,15.Valid Driving Licence', '0000-00-00', '00:00:00', '', '', ''),
(6, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,6.Indicator,12.Parking Brake,15.Valid Driving Licence', '0000-00-00', '00:00:00', '', '', ''),
(7, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,3.Seat Belt,17.Use of Mobile During Driving', '0000-00-00', '00:00:00', '', '', ''),
(8, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn', '0000-00-00', '00:00:00', '', '', ''),
(9, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn', '0000-00-00', '00:00:00', '', '', ''),
(10, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet', '0000-00-00', '00:00:00', '', '', ''),
(11, 'Rajesh Kumar Khatua', 'raj@gmail.com', '1.Driver Helmet,7.Head Light,13.Service Brake', '0000-00-00', '00:00:00', '', '', ''),
(12, 'Rajesh Kumar Khatua', 'rrdgygs@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),8.Fog Light,9.Side View Mirror', '0000-00-00', '00:00:00', '', '', ''),
(13, 'Rajesh Kumar Khatua', 'gdmnomc@gmail.com', '1.Driver Helmet', '0000-00-00', '00:00:00', '', '', ''),
(14, 'Rajesh Kumar Khatua', 'rajesh9947@gmail.com', '1.Driver Helmet', '0000-00-00', '00:00:00', '', '', ''),
(15, 'Rajesh Kumar Khatua', 'od-05-ag-2563', '1.Driver Helmet,3.Seat Belt,5.AVA(Horn during Reverse gear)', '0000-00-00', '00:00:00', '', '', ''),
(16, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,2.Safety Shoe,4.Horn,6.Indicator,7.Head Light', '0000-00-00', '00:00:00', '', '', ''),
(17, 'sankar', 'od-05-ag-2565', '1.Driver Helmet,9.Side View Mirror', '0000-00-00', '00:00:00', '', '', ''),
(18, 'gajia', 'od-25-2356', '1.Driver Helmet,2.Safety Shoe,4.Horn,5.AVA(Horn during Reverse gear)', '0000-00-00', '00:00:00', '', '', ''),
(19, 'dsafd', 'dsdvsV', '1.Driver Helmet,7.Head Light', '0000-00-00', '00:00:00', '', '', ''),
(20, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,10.Fire Extinguisher', '0000-00-00', '00:00:00', '', '', ''),
(21, 'AX', 'od-05-ag-2565', '1.Driver Helmet,10.Fire Extinguisher,15.Valid Driving Licence', '0000-00-00', '00:00:00', '', '', ''),
(22, 'Rajesh', 'od-05-ag-2565', '1.Driver Helmet,11.Tail Gate,15.Valid Driving Licence', '0000-00-00', '00:00:00', '', '', ''),
(23, 'AX', 'od-05-ag-2565', '1.Driver Helmet,13.Service Brake,16.Helper not Allowed', '0000-00-00', '00:00:00', '', '', ''),
(24, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,12.Parking Brake', '0000-00-00', '00:00:00', '', '', ''),
(26, 'rsgsrh', 'od-05-ag-2565', '1.Driver Helmet,8.Fog Light,13.Service Brake', '0000-00-00', '00:00:00', '', '', ''),
(27, 'AX', 'od-05-ag-2565', '1.Driver Helmet,7.Head Light,13.Service Brake,17.Use of Mobile During Driving', '0000-00-00', '00:00:00', '', '', ''),
(28, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,10.Fire Extinguisher,15.Valid Driving Licence', '2022-04-15', '11:20:21', '', '', ''),
(29, 'qs', 'od-05-ag-2565', '1.Driver Helmet,10.Fire Extinguisher,15.Valid Driving Licence,17.Use of Mobile During Driving', '2022-04-16', '20:26:08', '', '', ''),
(30, 'qs', 'raj@gmail.com', '1.Driver Helmet,4.Horn,12.Parking Brake,13.Service Brake,16.Helper not Allowed', '2022-04-16', '20:33:20', '', '', ''),
(31, 'rsgsrh', 'raj@gmail.com', '1.Driver Helmet,5.AVA(Horn during Reverse gear),7.Head Light,10.Fire Extinguisher,12.Parking Brake', '2022-04-16', '20:50:03', '', '', ''),
(32, 'rsgsrh', 'od-05-ag-2565', '1.Driver Helmet,15.Valid Driving Licence,17.Use of Mobile During Driving', '2022-04-16', '21:04:38', '', '', ''),
(33, 'AX', 'od-05-ag-2565', '1.Driver Helmet,6.Indicator,8.Fog Light,14.Rear View Camera', '2022-04-16', '22:03:39', '', '', ''),
(34, 'Rajesh Kumar', 'raj@gmail.com', '1.Driver Helmet,16.Helper not Allowed', '2022-04-16', '22:39:55', '', '', ''),
(35, 'Rajesh', 'raj@gmail.com', '1.Driver Helmet,10.Fire Extinguisher,11.Tail Gate', '2022-04-16', '22:49:13', '', '', ''),
(36, 'AX', 'od-05-ag-2565', '1.Driver Helmet,15.Valid Driving Licence', '2022-04-17', '11:22:53', '', '', ''),
(37, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,14.Rear View Camera,17.Use of Mobile During Driving', '2022-04-17', '12:50:42', '', '', ''),
(38, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,14.Rear View Camera,17.Use of Mobile During Driving', '2022-04-17', '12:51:09', '', '', ''),
(39, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,14.Rear View Camera,17.Use of Mobile During Driving', '2022-04-17', '12:58:32', '', '', ''),
(40, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,14.Rear View Camera,17.Use of Mobile During Driving', '2022-04-17', '13:00:40', '', '', ''),
(41, 'Rajesh Kumar Khatua', 'raj@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),10.Fire Extinguisher,12.Parking Brake', '2022-04-17', '15:58:16', '', '', ''),
(42, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,14.Rear View Camera,15.Valid Driving Licence', '2022-04-17', '16:30:34', '', '', ''),
(43, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,17.Use of Mobile During Driving', '2022-04-17', '16:38:36', '', '', ''),
(44, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,17.Use of Mobile During Driving', '2022-04-17', '16:38:46', '', '', ''),
(45, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,17.Use of Mobile During Driving', '2022-04-17', '16:40:15', '', '', ''),
(46, 'AX', 'od-05-ag-2565', '1.Driver Helmet,7.Head Light,16.Helper not Allowed', '2022-04-17', '16:41:10', '', '', ''),
(47, 'rsgsrh', 'od-05-ag-2565', '1.Driver Helmet,16.Helper not Allowed', '2022-04-18', '10:18:43', '', '', ''),
(48, 'sm', 'od-05-ag-2565', '1.Driver Helmet,2.Safety Shoe,3.Seat Belt,4.Horn,6.Indicator,7.Head Light,11.Tail Gate,15.Valid Driving Licence,16.Helper not Allowed', '2022-04-18', '12:43:20', '', '', ''),
(49, 'rsgsrh', 'od-05-ag-2565', '18.ALL', '2022-04-18', '13:06:26', '', '', ''),
(50, 'qs', 'od-05-2568', '6.Indicator', '2022-04-19', '11:55:09', '', '', ''),
(51, 'Fghj', 'Od-05-5678', '2.Safety Shoe,4.Horn,5.AVA(Horn during Reverse gear),6.Indicator,17.Use of Mobile During Driving,18.ALL', '2022-04-19', '13:04:40', '', '', ''),
(52, 'ajay', 'od-05-fg-5698', '1.Driver Helmet,5.AVA(Horn during Reverse gear),8.Fog Light,17.Use of Mobile During Driving,18.ALL', '2022-04-23', '12:15:10', '', '', ''),
(53, 'Fah', 'Od-05-5679', '9.Side View Mirror,18.ALL', '2022-04-25', '09:46:08', '', '', ''),
(54, 'Rajesh Kumar', 'od-05-fg-5698', '1.Driver Helmet', '2022-04-26', '20:00:23', '', '', ''),
(55, 'AX', 'od-05-fg-5698', '7.Head Light,18.ALL', '2022-04-26', '21:33:37', '', '', ''),
(56, 'qs', 'od-05-ag-2563', '3.Seat Belt,15.Valid Driving Licence,18.ALL', '2022-04-26', '21:35:52', '', '', ''),
(57, 'qs', 'od-05-2568', '5.AVA(Horn during Reverse gear),18.ALL', '2022-04-26', '21:38:12', '', '', ''),
(58, 'qs', 'Rajesh9947@gmail.com', '1.Driver Helmet,8.Fog Light,10.Fire Extinguisher,15.Valid Driving Licence', '2022-04-26', '21:40:00', '', '', ''),
(59, 'AX', 'od-02-fg-2569', 'yes,3.Seat Belt,8.Fog Light,17.Use of Mobile During Driving', '2022-04-29', '17:16:40', '', '', ''),
(60, 'rsgsrh', 'od-02-fg-2569', 'no,4.Horn,17.Use of Mobile During Driving', '2022-04-29', '17:40:36', '', '', ''),
(61, 'AX', 'Rajesh9947@gmail.com', 'no,3.Seat Belt,11.Tail Gate', '2022-04-29', '17:43:14', '', '', ''),
(62, 'rsgsrh', 'Rajesh9947@gmail.com', 'yes,10.Fire Extinguisher,11.Tail Gate,17.Use of Mobile During Driving', '2022-04-29', '17:45:27', '', '', ''),
(63, 'Rajesh', 'Rajesh9947@gmail.com', 'yes,2.Safety Shoe,12.Parking Brake', '2022-04-29', '17:54:42', '', '', ''),
(64, 'Rajesh', 'Rajesh9947@gmail.com', 'no,2.Safety Shoe,12.Parking Brake,15.Valid Driving Licence', '2022-04-29', '17:57:05', '', '', ''),
(65, 'AX', 'Rajesh9947@gmail.com', 'Driver Helmet,11.Tail Gate,15.Valid Driving Licence,18.ALL', '2022-04-29', '18:01:49', '', '', ''),
(66, 'AX', 'Rajesh9947@gmail.com', 'Driver Helmet N,3.Seat Belt,9.Side View Mirror,14.Rear View Camera', '2022-04-29', '18:03:16', '', '', ''),
(67, 'AX', 'Rajesh9947@gmail.com', '2.Safety Shoe YES', '2022-04-30', '09:47:08', '', '', ''),
(68, 'rsgsrh', 'Rajesh9947@gmail.com', 'Driver Helmet NO', '2022-04-30', '09:54:14', '', '', ''),
(69, 'rsgsrh', 'Rajesh9947@gmail.com', 'Driver Helmet NO', '2022-04-30', '09:59:50', '', '', ''),
(70, 'qs', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-04-30', '10:10:12', '', '', ''),
(71, 'qs', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-04-30', '10:16:58', '', '', ''),
(72, 'rsgsrh', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-04-30', '11:21:13', '', '', ''),
(73, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-04-30', '13:17:54', '', '', ''),
(74, 'Rajesh', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-04-30', '13:19:24', '', '', ''),
(75, 'AX', 'od-02-fg-2569', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '17:55:31', '', '', ''),
(76, 'Rajesh', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '17:58:13', '', '', ''),
(77, 'rsgsrh', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate NO', '2022-05-01', '17:58:44', '', '', ''),
(78, 'rsgsrh', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '18:07:27', '', '', ''),
(79, 'AX', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '18:26:26', '', '', ''),
(80, 'AX', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '18:28:23', '', '', ''),
(81, 'AX', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '18:28:48', '', '', ''),
(82, 'AX', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES', '2022-05-01', '18:38:11', '', '', ''),
(83, 'rsgsrh', 'Rajesh9947@gmail.com', 'value1', '2022-05-01', '18:58:12', '', '', ''),
(84, 'AX', 'Rajesh9947@gmail.com', 'value2 no', '2022-05-01', '18:59:56', '', '', ''),
(85, 'AX', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES,Vehicle Registration & Fitness Certificate NO,2.Valid Driving Licence & ID Proof YES,2.Valid Driving Licence & ID Proof NO,3.Passed Alcohol Check YES,3.Passed Alcohol Check NO', '2022-05-01', '21:56:32', '', '', ''),
(86, 'Rajesh', 'Rajesh9947@gmail.com', 'Vehicle Registration & Fitness Certificate YES,Vehicle Registration & Fitness Certificate NO,3.Passed Alcohol Check YES,3.Passed Alcohol Check NO', '2022-05-01', '22:02:32', '', '', ''),
(87, 'AX', 'Rajesh9947@gmail.com', '1.Driver Helmet yes,10.Fire Extinguisher,11.Tail Gate,16.Helper not Allowed', '2022-05-01', '23:09:06', '', '', ''),
(88, 'AX', 'Rajesh9947@gmail.com', '1.Vehicle Registration & Fitness Certificate YES,2.Valid Driving Licence & ID Proof YES,3.Passed Alcohol Check NO,Rear Flood Light  NO', '2022-05-01', '23:22:22', '', '', ''),
(89, 'qs', 'od-05-ag-2565', '1.Vehicle Registration & Fitness Certificate YES,2.Valid Driving Licence & ID Proof YES,3.Passed Alcohol Check NO,4.Strong constructed Operator Cabin YES,4.Strong constructed Operator Cabin NO,5.3-Point support access to operator cabin NO,6.Adjustable Operator Seat YES,7.PPE (Helmet, Fl Jacket & Safety Shoes) NO,8.Seat Belt  Seat Belt Reminder NO,9.Key Operated Self Starter YES,11.Propel Shaft Guard NO,12.AVA (Horn during reverse gear)  YES,14.Head Light & Fog Light YES,15.Rear Flood Light  YES,16.Retro Reflective Tape/ Paint  NO,17.Side View Mirror  YES,18.Fire Extinguisher  NO,19.Tail Gate Protection  YES,20.Service Brake  YES,21.Parking Brake  NO,22.Exhaust  Retard Brake  YES,23.Emergency Brake  YES,24.Rear View Camera  NO,25.Helper not allowed  YES', '2022-05-01', '23:29:14', '', '', ''),
(90, 'Rajesh', 'od-05-2568', '8.Seat Belt  Seat Belt Reminder YES', '2022-05-02', '11:13:58', 'DFSAVSF', 'ADVFZVV', ''),
(91, 'AX', 'od-05-ad1236', '1.Vehicle Registration & Fitness Certificate YES,6.Adjustable Operator Seat NO,8.Seat Belt  Seat Belt Reminder YES,10.Functioning of Horn YES,13.Side Indicator Lights  NO,14.Head Light & Fog Light YES,20.Service Brake  YES,22.Exhaust  Retard Brake  YES,24.Rear View Camera  NO', '2022-08-03', '21:19:53', 'dFDhdz', 'omc', '10'),
(92, 'AX', 'od-05-ad1236', '1.Vehicle Registration & Fitness Certificate YES,6.Adjustable Operator Seat NO,8.Seat Belt  Seat Belt Reminder YES,10.Functioning of Horn YES,13.Side Indicator Lights  NO,14.Head Light & Fog Light YES,20.Service Brake  YES,22.Exhaust  Retard Brake  YES,24.Rear View Camera  NO', '2022-08-03', '21:23:19', 'dFDhdz', 'omc', '6');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `vehiclenumber` varchar(20) NOT NULL,
  `checkbox` varchar(1000) NOT NULL,
  `created_at` date DEFAULT NULL,
  `Licence` varchar(20) NOT NULL,
  `Authority` varchar(50) NOT NULL,
  `timeout` time DEFAULT NULL,
  `remark` varchar(255) NOT NULL,
  `Wheeler` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `name`, `vehiclenumber`, `checkbox`, `created_at`, `Licence`, `Authority`, `timeout`, `remark`, `Wheeler`) VALUES
(1, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '', NULL, '', '', NULL, '', ''),
(2, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,2.Safety Shoe,3.Seat Belt,4.Horn,5.AVA(Horn during Reverse gear),6.Indicator,7.Head Light,8.Fog Light,9.Side View Mirror,10.Fire Extinguisher,11.Tail Gate,12.Parking Brake,13.Service Brake,14.Rear View Camera,15.Valid Driving Licence,16.Helper not Allowed,17.Use of Mobile During Driving', NULL, '', '', NULL, '', ''),
(3, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '', NULL, '', '', NULL, '', ''),
(4, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '', NULL, '', '', NULL, '', ''),
(5, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '', NULL, '', '', NULL, '', ''),
(6, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),6.Indicator,11.Tail Gate,12.Parking Brake,13.Service Brake', NULL, '', '', NULL, '', ''),
(7, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,10.Fire Extinguisher,14.Rear View Camera,15.Valid Driving Licence', NULL, '', '', NULL, '', ''),
(8, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn,6.Indicator,12.Parking Brake,15.Valid Driving Licence', NULL, '', '', NULL, '', ''),
(9, 'Rajesh Kumar Khatua', 'Rajesh9947@gmail.com', '1.Driver Helmet,4.Horn', NULL, '', '', NULL, '', ''),
(10, 'Rajesh Kumar Khatua', 'raj@gmail.com', '1.Driver Helmet,7.Head Light,13.Service Brake', NULL, '', '', NULL, '', ''),
(11, 'Rajesh Kumar Khatua', 'rrdgygs@gmail.com', '1.Driver Helmet,4.Horn,5.AVA(Horn during Reverse gear),8.Fog Light,9.Side View Mirror', NULL, '', '', NULL, '', ''),
(12, 'Rajesh Kumar Khatua', 'rajesh9947@gmail.com', '1.Driver Helmet,11.Tail Gate,13.Service Brake', NULL, '', '', NULL, '', ''),
(13, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '1.Driver Helmet,6.Indicator,10.Fire Extinguisher,12.Parking Brake', NULL, '', '', NULL, '', ''),
(14, 'Rajesh', 'od-05-ag-2565', '1.Driver Helmet,6.Indicator,10.Fire Extinguisher,11.Tail Gate,16.Helper not Allowed', '2022-04-17', '', '', '00:00:00', '', ''),
(15, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,6.Indicator,10.Fire Extinguisher,11.Tail Gate,16.Helper not Allowed', '2022-04-17', '', '', '08:57:52', '', ''),
(16, 'Rajesh Kumar', 'od-05-ag-2565', '1.Driver Helmet,14.Rear View Camera,17.Use of Mobile During Driving', '2022-04-17', '', '', '09:22:45', '', ''),
(17, 'qs', 'od-05-ag-2565', '1.Driver Helmet,10.Fire Extinguisher,11.Tail Gate', '2022-04-17', '', '', '13:12:34', '', ''),
(18, 'AX', 'od-05-ag-2565', '1.Driver Helmet,7.Head Light,15.Valid Driving Licence', '2022-04-17', '', '', '13:13:44', '', ''),
(19, 'rsgsrh', 'od-05-ag-2565', '1.Driver Helmet,2.Safety Shoe,12.Parking Brake,14.Rear View Camera,15.Valid Driving Licence', '2022-04-17', '', '', '13:18:56', '', ''),
(20, 'AX', 'od-05-ag-2565', '1.Driver Helmet,6.Indicator,13.Service Brake,14.Rear View Camera', '2022-04-17', '', '', '16:51:20', '', ''),
(21, 'Rajesh', 'raj@gmail.com', '6.Indicator,10.Fire Extinguisher,14.Rear View Camera,15.Valid Driving Licence', '2022-04-17', '', '', '17:09:42', '', ''),
(22, 'Rajesh', 'raj@gmail.com', '6.Indicator,10.Fire Extinguisher,14.Rear View Camera,15.Valid Driving Licence', '2022-04-17', '', '', '17:11:18', '', ''),
(23, 'Rajesh', 'raj@gmail.com', '6.Indicator,10.Fire Extinguisher,14.Rear View Camera,15.Valid Driving Licence', '2022-04-17', '', '', '17:11:35', '', ''),
(24, 'AX', 'od-05-ag-2565', '1.Driver Helmet,15.Valid Driving Licence', '2022-04-17', '', '', '17:16:02', '', ''),
(25, 'efrwg', 'wegawr', '1.Driver Helmet,13.Service Brake', '2022-04-17', '', '', '17:16:25', '', ''),
(26, 'Rajesh Kumar Khatua', 'od-05-ag-2565', '10.Fire Extinguisher', '2022-04-17', '', '', '21:57:28', '', ''),
(27, 'AX', 'raj@gmail.com', '11.Tail Gate,12.Parking Brake,13.Service Brake', '2022-04-17', '', '', '21:58:19', '', ''),
(28, 'AX', 'raj@gmail.com', '11.Tail Gate,12.Parking Brake,13.Service Brake', '2022-04-17', '', '', '21:58:25', '', ''),
(29, 'AX', 'od-05-ag-2565', '13.Service Brake', '2022-04-18', '', '', '12:44:24', '', ''),
(30, 'ed', 'od-05-2568', '1.Driver Helmet,14.Rear View Camera,15.Valid Driving Licence,16.Helper not Allowed', '2022-04-19', '', '', '11:29:11', 'wcWCEVTEWEVAARFVFFVVVVVV', ''),
(31, 'qs', 'od-05-2568', '1.Driver Helmet,17.Use of Mobile During Driving', '2022-04-19', '', '', '11:42:08', 'wcWCEVTEWEVAARFVFFVVVVVV', ''),
(32, 'eeeeeee', 'OD-05-ap-2569', '1.Driver Helmet,14.Rear View Camera,15.Valid Driving Licence,16.Helper not Allowed', '2022-04-25', '', '', '10:42:50', '', ''),
(33, 'AX', 'Rajesh9947@gmail.com', '1.Driver Helmet no,2.Safety Shoe,3.Seat Belt,13.Service Brake,15.Valid Driving Licence,16.Helper not Allowed', '2022-05-01', '', '', '23:09:43', '', ''),
(34, 'Rajesh', 'od-05-2568', '8.Seat Belt  Seat Belt Reminder YES,22.Exhaust  Retard Brake  NO', '2022-05-02', '', 'ADVFZVV', '11:21:20', '', ''),
(35, 'rsgsrh', 'od-05-ad1236', '1.Vehicle Registration & Fitness Certificate NO,3.Passed Alcohol Check NO,4.Strong constructed Operator Cabin NO,5.3-Point support access to operator cabin NO,7.PPE (Helmet, Fl Jacket & Safety Shoes) NO,9.Key Operated Self Starter YES,12.AVA (Horn during reverse gear) ,13.Side Indicator Lights  NO,14.Head Light & Fog Light NO,16.Retro Reflective Tape/ Paint  NO,24.Rear View Camera  NO,25.Helper not allowed  YES,26.All Ok  NO', '2022-08-03', 'rfads', 'omc', '22:06:26', 'wcWCEVTEWEVAARFVFFVVVVVV', '8');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `SnoPrimary` int(11) NOT NULL,
  `userName` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`SnoPrimary`, `userName`, `pass`) VALUES
(1, 'admin', 'rajesh'),
(2, 'omc', 'gdmn'),
(3, 'sameer', 'sameer');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Vehiclenumber` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `timeout` time NOT NULL,
  `Wheeler` varchar(50) NOT NULL,
  `checkbox` varchar(1000) NOT NULL,
  `authority` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `Licence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `name`, `Vehiclenumber`, `created_at`, `timeout`, `Wheeler`, `checkbox`, `authority`, `remark`, `Licence`) VALUES
(1, 'gfd', 'od-05-ad1236', '2022-08-28', '16:35:12', '10', '2.Valid Driving Licence & ID Proof NO,12.AVA (Horn during reverse gear) ', 'omc', 'ncgchn', 'vbcn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`SnoPrimary`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `SnoPrimary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
