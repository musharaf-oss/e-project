-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2025 at 07:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Criminal Lawyer'),
(2, 'Immigration lawyer'),
(3, 'Corporate Lawyer'),
(4, 'Personal Injury Lawyer'),
(5, 'Civil Litigation Lawyer'),
(6, 'Labor Lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `court_id` int(255) NOT NULL,
  `court_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`court_id`, `court_name`) VALUES
(1, 'City Courts'),
(2, 'High Court of Sindh, Karachi'),
(3, 'Supreme Court of Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degree_id` int(255) NOT NULL,
  `degree_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degree_id`, `degree_name`) VALUES
(2, 'LLB');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lawyers_id` int(255) NOT NULL,
  `full_Name` varchar(225) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(120) NOT NULL,
  `profile_image` varchar(120) NOT NULL,
  `House_address` varchar(225) NOT NULL,
  `CNIC` int(25) NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(222) NOT NULL,
  `phone` int(11) NOT NULL,
  `Whatsapp` int(11) NOT NULL,
  `degree_id` int(255) NOT NULL,
  `University` varchar(225) NOT NULL,
  `Completion` date NOT NULL,
  `City` varchar(225) NOT NULL,
  `Enrolment_Year` date NOT NULL,
  `court_id` int(255) NOT NULL,
  `License` text NOT NULL,
  `licence_image` varchar(225) NOT NULL,
  `category_id` int(255) NOT NULL,
  `Office` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lawyers_id`, `full_Name`, `father_name`, `user_name`, `email`, `password`, `profile_image`, `House_address`, `CNIC`, `dob`, `Gender`, `phone`, `Whatsapp`, `degree_id`, `University`, `Completion`, `City`, `Enrolment_Year`, `court_id`, `License`, `licence_image`, `category_id`, `Office`) VALUES
(10, 'syed musharaf', 'syed Azhar', 'htttf', 'syedmusharaf192008@gmail.com', '1234', 'Ellipse 9.png', 'near multi chock', 2147483647, '2025-08-19', 'Male', 2147483647, 2147483647, 2, 'fffffffffffffffffffffffffffffffffff', '2025-08-21', 'Karachi', '0000-00-00', 2, '2222222', 'alex-furgiuele-UkH7L-aag8A-unsplash-removebg-preview.png', 3, 'Nazimabad 2, Near enquiry office, multichock'),
(13, 'hasnain', 'syed Azhar', 'user', 'm.hasnain0408@gmail.com', '123', 'as3-min.jpg', 'near multi chock', 12345567, '2025-08-20', 'Male', 2147483647, 2147483647, 2, 'tayab ali college', '2025-08-19', 'Karachi', '0000-00-00', 2, '2222222', 'switchcase.jpg', 3, 'Nazimabad 2, Near enquiry office, multichock'),
(14, 'humaiyu', 'ejaz', 'panel', 'lizardstoons3@gmail.com', '12345', 'simple function.png', 'near multi chock', 1234567, '2025-08-13', 'Male', 2147483647, 2147483647, 2, 'tayab ali college', '2025-08-05', 'Karachi', '0000-00-00', 1, '2222222', 'Log in Group.png', 5, 'Nazimabad 2, Near enquiry office, multichock'),
(15, 'farooq', 'aslam', 'user', 'tulaibkhan8787987@gmail.com', '1234', 'switchcase.jpg', 'Nazimabad 2, Near enquiry office, multichock', 2147483647, '2025-08-21', 'Male', 2147483647, 2147483647, 2, 'tayab ali college', '2025-08-21', 'Karachi Development Authority Colony', '0000-00-00', 2, '2222222', 'Ellipse 9.png', 6, 'near multi chock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lawyers_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `court_id` (`court_id`),
  ADD KEY `degree_id` (`degree_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degree_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lawyers_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `lawyers_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `lawyers_ibfk_2` FOREIGN KEY (`court_id`) REFERENCES `court` (`court_id`),
  ADD CONSTRAINT `lawyers_ibfk_3` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`degree_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
