-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 09:34 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intelligent_word`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `price_range` int(11) NOT NULL,
  `images` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `topic_id`, `price_range`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Combustion and Energy Systems.', 4, 100, 0, '2022-09-27 13:29:57', '2022-09-28 05:06:54'),
(2, 'Design and Manufacturing', 4, 200, 0, '2022-09-27 13:30:44', '2022-09-28 05:07:05'),
(3, 'Finance management', 5, 300, 0, '2022-09-27 13:31:26', '2022-09-28 05:07:11'),
(4, 'Website design', 2, 400, 0, '2022-09-27 13:31:50', '2022-09-28 05:07:16'),
(5, 'Equal Employment Opportunity.', 6, 500, 0, '2022-09-27 13:32:29', '2022-09-28 05:07:22'),
(6, 'Human Resource Planning and Retention.', 6, 600, 0, '2022-09-27 13:33:16', '2022-09-28 05:07:28'),
(7, 'Email Marketing Role in Improving Customer Retentention.', 10, 700, 0, '2022-09-27 13:34:59', '2022-09-28 05:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `courses_speakers`
--

CREATE TABLE `courses_speakers` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `created_at`) VALUES
(1, 'Accounting', '2022-09-27 13:12:36'),
(2, 'Design', '2022-09-27 13:12:36'),
(3, 'Education', '2022-09-27 13:13:33'),
(4, 'Engineering', '2022-09-27 13:13:33'),
(5, 'Finance', '2022-09-27 13:13:58'),
(6, 'Human Resources', '2022-09-27 13:13:58'),
(7, 'Administrative', '2022-09-27 13:14:30'),
(8, 'Information Technology', '2022-09-27 13:14:30'),
(9, 'Legal', '2022-09-27 13:14:57'),
(10, 'Marketing', '2022-09-27 13:14:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_speakers`
--
ALTER TABLE `courses_speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses_speakers`
--
ALTER TABLE `courses_speakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
