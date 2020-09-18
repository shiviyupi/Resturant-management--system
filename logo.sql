-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 07:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(211) NOT NULL,
  `Password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('shiv', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123'),
('shiviyup@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(212) NOT NULL,
  `email` varchar(211) NOT NULL,
  `mobile` varchar(212) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `mobile`, `query`) VALUES
('shiviyup@gmail.com', 'shiviyup@gmail.com', '09140481690', '123wsa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(211) NOT NULL,
  `password` varchar(212) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `timestamp`) VALUES
('shivangi', '123', '2020-08-31 23:57:59'),
('', '123', '2020-08-31 23:57:59'),
('s@123', '123', '2020-09-01 23:52:24'),
('pm23778@gmail.com', '1234', '2020-09-01 23:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `snacks` varchar(211) NOT NULL,
  `snacks_price` int(212) NOT NULL DEFAULT 50,
  `maincourse` varchar(212) NOT NULL,
  `maincourse_price` int(255) NOT NULL DEFAULT 255,
  `desserts` varchar(232) NOT NULL,
  `desserts_price` int(233) NOT NULL DEFAULT 70,
  `nonvegsnacks` varchar(220) NOT NULL,
  `nonvegsnacks_Price` int(20) NOT NULL DEFAULT 100,
  `nonvegcurry` varchar(220) NOT NULL,
  `nonvegcurry_price` int(20) NOT NULL DEFAULT 349,
  `nonvegdesserts` varchar(213) NOT NULL,
  `nonvegdesserts_price` varchar(25) NOT NULL DEFAULT '200'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`snacks`, `snacks_price`, `maincourse`, `maincourse_price`, `desserts`, `desserts_price`, `nonvegsnacks`, `nonvegsnacks_Price`, `nonvegcurry`, `nonvegcurry_price`, `nonvegdesserts`, `nonvegdesserts_price`) VALUES
('', 50, '', 255, '', 70, 'kabab', 100, 'mutton curry', 349, 'kala jaam', '200'),
('', 50, '', 255, '', 70, 'kabab', 100, 'mutton curry', 349, 'kala jaam', '200'),
('jalebi', 50, 'mushroom curry', 255, 'chene', 70, '', 100, '', 349, '', '200');

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `username` varchar(231) NOT NULL,
  `password` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`username`, `password`) VALUES
('suneja@123', '123'),
('suneja@123', '123'),
('suneja@123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
