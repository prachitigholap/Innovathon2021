-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 09:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innovathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `u_mail` varchar(50) NOT NULL,
  `d_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `timef` time NOT NULL,
  `timet` time NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`u_mail`, `d_id`, `date`, `timef`, `timet`, `a_id`) VALUES
('aditisp2001@gmail.com', 1, '2021-10-21', '12:00:00', '13:30:00', 3),
('aditisp2001@gmail.com', 1, '2021-10-21', '13:00:00', '14:30:00', 4),
('aditisp2001@gmail.com', 1, '2021-10-23', '12:00:00', '13:30:00', 5),
('aditisp2001@gmail.com', 1, '2021-10-29', '12:00:00', '13:30:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `doctors_schedule`
--

CREATE TABLE `doctors_schedule` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_schedule`
--

INSERT INTO `doctors_schedule` (`id`, `doctor_id`, `day`, `time_from`, `time_to`) VALUES
(3, 1, 'Monday', '10:00:00', '17:00:00'),
(4, 2, 'Wednesday', '10:00:00', '17:00:00'),
(5, 3, 'Monday', '10:00:00', '15:00:00'),
(6, 4, 'Tuesday', '10:00:00', '15:00:00'),
(7, 5, 'Wednesday', '10:00:00', '15:00:00'),
(8, 6, 'Thursday', '10:00:00', '15:00:00'),
(9, 7, 'Friday', '10:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `icPatient` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientMaritialStatus` varchar(10) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varchar(100) NOT NULL,
  `patientPhone` varchar(15) NOT NULL,
  `patientEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`icPatient`, `password`, `patientFirstName`, `patientLastName`, `patientMaritialStatus`, `patientDOB`, `patientGender`, `patientAddress`, `patientPhone`, `patientEmail`) VALUES
(920517105553, '123', 'Mohd', 'Mazlan', 'single', '1992-05-17', 'male', 'NO 153 BLOK MURNI\r\nKOLEJ CANSELOR UNIVERSITI PUTRA MALAYSIA', '173567758', 'lan.psis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prof_name`
--

CREATE TABLE `prof_name` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_no` varchar(11) DEFAULT NULL,
  `specialties` varchar(500) NOT NULL,
  `experience` int(10) NOT NULL,
  `about_me` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof_name`
--

INSERT INTO `prof_name` (`id`, `p_name`, `email`, `p_no`, `specialties`, `experience`, `about_me`) VALUES
(1, 'Shalan Prabhu', 'parab.as@somaiya.edu', '9167437444', 'Stress, Anxiety, Relationship issues, Family conflicts.', 4, 'My name is Seema Prabhu and I am a Licensed Professional Counselor in the state of Maharashtra. I received my Bachelor of Arts and Masters of Education in Counseling from Mumbai University. As a counselor, my role is to support and empower my clients with empathy and concern but without judgement while developing a strong therapeutic alliance.\r\nNone of us makes it through life alone. I would be honored to be a part of your journey as we work together to help you build the future you envision for'),
(2, 'Harsh Pandey', '', NULL, 'Trauma and abuse, Bipolar disorder, Depression, Coping with life changes.', 5, ' My name is Harsh Pandey and I am a Licensed Clinical Worker. I have a graduate degree in clinical social work from Delhi University. I have been practicing for five years in the modalities of individual psychotherapy, family psychotherapy, and group psychotherapy.'),
(3, 'Vivan Shah', '', NULL, 'LGBT, Relationship issues, Depression.', 8, ''),
(4, 'Nikhil Jain', '', NULL, ' Career difficulties, Coping with life changes, Coaching.', 3, ''),
(5, 'Seema Dabholkar', '', NULL, 'Addictions, Self esteem,  Fatigue.', 6, ''),
(6, 'Akshay Singh', '', NULL, ' Trauma and abuse, Grief.', 4, ''),
(7, 'Pooja Patil', '', NULL, 'Stress, Anxiety, Self esteem.', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'aditip', 'aditisp2001@gmail.com', '2b197829d548512d1d4b8bd5c773d6c3'),
(1, 'Aditi', 'parab.as@somaiya.edu', 'aditi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`icPatient`);

--
-- Indexes for table `prof_name`
--
ALTER TABLE `prof_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
