-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 27, 2022 at 07:24 AM
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
-- Database: `bitbybit`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `Activity` varchar(80) NOT NULL DEFAULT 'Yet to Participate',
  `Certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `Activity`, `Certificate`) VALUES
(2, 'Yet to Participate', 'https://www.adorama.com/alc/wp-content/uploads/2017/11/shutterstock_114802408.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `PT1` int(11) NOT NULL DEFAULT 0,
  `PT2` int(11) NOT NULL DEFAULT 0,
  `EndSem` int(11) NOT NULL DEFAULT 0,
  `TW` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `Subject`, `PT1`, `PT2`, `EndSem`, `TW`) VALUES
(1, 'SE', 18, 9, 60, 19),
(2, 'CN', 20, 20, 75, 20),
(1, 'CN', 10, 5, 16, 19),
(1, 'DWM', 19, 20, 77, 10),
(1, 'PCE', 10, 10, 55, 19),
(1, 'TCS', 19, 20, 80, 19);

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(11) NOT NULL,
  `Internship` varchar(80) NOT NULL DEFAULT 'No Internships Pursued Yet',
  `Company` varchar(50) DEFAULT NULL,
  `Certificate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `Internship`, `Company`, `Certificate`) VALUES
(3, 'No Internships Pursued Yet', 'Metavian', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/%D0%A1%D0%B2%D0%B5%D1%82_%D0%BE%D1%82_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D0%BD%D0%B8_-_panoramio.jpg/640px-%D0%A1%D0%B2%D0%B5%D1%82_%D0%BE%D1%82_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D0%BD%D0%B8_-_panoramio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subjectscore`
--

CREATE TABLE `subjectscore` (
  `id` int(11) NOT NULL,
  `SE` int(11) NOT NULL DEFAULT 0,
  `DWM` int(11) NOT NULL DEFAULT 0,
  `PCE` int(11) NOT NULL DEFAULT 0,
  `TCS` int(11) NOT NULL DEFAULT 0,
  `CN` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectscore`
--

INSERT INTO `subjectscore` (`id`, `SE`, `DWM`, `PCE`, `TCS`, `CN`) VALUES
(1, 75, 85, 60, 90, 95);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Email`, `Password`, `Class`, `Date/Time`) VALUES
(1, 'heer', 'heerkapadia04@gmail.com', 'heer', 'Comps', '2022-07-26 17:41:24'),
(2, 'pratham', 'pratham.m2k@gmail.com', 'abcd', 'IT', '2022-07-27 01:32:09'),
(3, 'khushi', 'khushi81102@gmail.com', 'khush', 'Comps', '2022-07-27 01:47:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD KEY `id` (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectscore`
--
ALTER TABLE `subjectscore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `id_activity` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `id_grades` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `internships`
--
ALTER TABLE `internships`
  ADD CONSTRAINT `id_internships` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subjectscore`
--
ALTER TABLE `subjectscore`
  ADD CONSTRAINT `id_subjectscore` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
