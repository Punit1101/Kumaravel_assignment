-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 07:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_table`
--

CREATE TABLE `emp_table` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `salary` int(11) NOT NULL,
  `join_date` int(11) NOT NULL,
  `designation` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_table`
--

INSERT INTO `emp_table` (`id`, `name`, `salary`, `join_date`, `designation`, `image`) VALUES
(101, 'employee 1', 80000, 2015, 'PHP Dovelpoer', 'img1.jpg'),
(102, 'employee 2', 80000, 2014, 'PHP Dovelpoer', 'img2.jpg'),
(103, 'employee 3', 80000, 2019, 'PHP Dovelpoer', 'img3.jpg'),
(104, 'employee 4', 80000, 2021, 'PHP Dovelpoer', 'img4.jpg'),
(105, 'employee 5', 80000, 2015, 'PHP Dovelpoer', 'img5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_table`
--
ALTER TABLE `emp_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
