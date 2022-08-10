-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 03:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`) VALUES
(1, 'John Doe', 'johndoe@mail.com', '09123456789'),
(2, 'Peter Parker', 'peterparker@mail.com', '3135555735'),
(3, 'Fran Wilson', 'franwilson@mail.com', '5035559931'),
(4, 'Marlon Donal', 'marlon.donal@gmail.com', '09147258369'),
(5, 'John Napoles', 'minecraft.john727@gmail.com', '09159263487'),
(6, 'Allan Peter Cayetano', '10k.ayoda@pinangako.mo', '10000'),
(7, 'Peter Parker', 'john@gmail.com', '09123456789'),
(8, 'Eren Yeager', 'eren.yeager@mail.aot', '09123456789'),
(16, 'Hajime Isayama', 'hajime.isayama@gmail.com', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `fictitious_employees`
--

CREATE TABLE `fictitious_employees` (
  `id` int(11) NOT NULL,
  `owner` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `bdmonth` int(2) NOT NULL,
  `bdday` int(2) NOT NULL,
  `bdyear` int(4) NOT NULL,
  `gender` int(1) NOT NULL,
  `phone` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fictitious_employees`
--

INSERT INTO `fictitious_employees` (`id`, `owner`, `fname`, `lname`, `bdmonth`, `bdday`, `bdyear`, `gender`, `phone`, `title`) VALUES
(1, 'minecraft.john727@gmail.com', 'Eren', 'Yeager', 1, 1, 2000, 1, '09123456789', 'Chief Executive Officer'),
(2, 'minecraft.john727@gmail.com', 'Mikasa', 'Ackerman', 2, 2, 2001, 0, '09951623847', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fictitious_employees`
--
ALTER TABLE `fictitious_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fictitious_employees`
--
ALTER TABLE `fictitious_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
