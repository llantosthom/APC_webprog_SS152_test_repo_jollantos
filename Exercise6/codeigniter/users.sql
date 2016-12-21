-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 06:28 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(25) NOT NULL,
  `homead` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `nickname`, `email`, `phone`, `homead`, `gender`, `comment`) VALUES
(0, 'asdA', 'asdasd', 'asdasd', 1231, 'asdasd', 'asddas', 'asdasda'),
(0, 'Thom', 'Thomas', 'thomllantos@gmail.com', 123123, '3852 Macabulos St. Bangka', 'Male', 'asdasda'),
(0, 'asdsa', 'asda', 'awefaw', 1231, 'asdsa', 'asdsa', 'asdsa'),
(0, 'Thom', 'Thomas', 'thomllantos@gmail.com', 1231, '3852 Macabulos St. Bangka', 'Male', 'ASDASDA'),
(0, 'Thom', 'Thomas', 'thomllantos@gmail.com', 1231, '3852 Macabulos St. Bangka', 'Male', 'ASDASDA'),
(0, 'asdasd', 'asdasd', 'asdas', 1123, 'asdasd', 'asdasda', 'asdasda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
