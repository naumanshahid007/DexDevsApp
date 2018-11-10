-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 03:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dexapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `duration` varchar(111) NOT NULL,
  `fee` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `instructer` varchar(111) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `duration`, `fee`, `description`, `instructer`, `updated_at`, `created_at`) VALUES
(1, 'Web Development', '3 Month', '15000', 'abc', 'Nouman', '2018-11-08 20:54:44', '2018-11-08 20:54:44'),
(2, 'Andriod', '2-month', '15000', 'asdfghjkl;', 'Faisal', '2018-11-10 11:36:01', '2018-11-10 11:36:01'),
(3, 'Andriod', '2-month', '15000', 'asdfghjkl;', 'Faisal', '2018-11-10 11:43:39', '2018-11-10 11:43:39'),
(4, 'abc', '2-month', '15000', 'abc', 'abc', '2018-11-10 13:12:00', '2018-11-10 13:12:00'),
(5, 'Netbean', '2-month', '15000', 'Java IDE', 'Faisal', '2018-11-10 16:50:19', '2018-11-10 16:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `instructers`
--

CREATE TABLE `instructers` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `cnic` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `qualification` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructers`
--

INSERT INTO `instructers` (`id`, `name`, `phone`, `email`, `cnic`, `dob`, `qualification`, `address`, `updated_at`, `created_at`) VALUES
(1, 'Ragheb', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-08 19:52:27', '2018-11-08 19:52:27'),
(2, 'Ragheb', '03051258471', 'mohammadayoub747@gmail.com', '12321', '31-10-1997', 'PhD', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 11:21:25', '2018-11-10 11:21:25'),
(3, 'Ragheb', '03051258471', 'mohammadayoub747@gmail.com', '12321', '31-10-1997', 'PhD', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 11:24:11', '2018-11-10 11:24:11'),
(4, 'Ayoub', '03051258471', 'ayoubncbae@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 11:39:03', '2018-11-10 11:39:03'),
(5, 'Farhan', '03051258471', 'farhanhashmi128@gmai.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 11:44:04', '2018-11-10 11:44:04'),
(6, 'abc', '3051258471', 'farhanhashmi128@gmai.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 13:07:13', '2018-11-10 13:07:13'),
(7, 'abc', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 13:16:32', '2018-11-10 13:16:32'),
(8, 'Ragheb', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:33:51', '2018-11-10 16:33:51'),
(9, 'Ayoub', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'PhD', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:34:34', '2018-11-10 16:34:34'),
(10, 'Ragheb', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:35:57', '2018-11-10 16:35:57'),
(11, 'abc', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'PhD', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:36:45', '2018-11-10 16:36:45'),
(12, 'abc', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:37:30', '2018-11-10 16:37:30'),
(13, 'Ragheb', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:41:15', '2018-11-10 16:41:15'),
(14, 'Ragheb', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 16:46:11', '2018-11-10 16:46:11'),
(15, 'Ragheb', '3051258471', 'mohammadayoub747@gmail.com', '31303-6854393-0', '31-10-1997', 'BSCS', 'Street No 2\r\ngulshan Iqbal', '2018-11-10 17:40:25', '2018-11-10 17:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(111) NOT NULL,
  `student_phone` varchar(111) NOT NULL,
  `student_gardian` varchar(111) NOT NULL,
  `student_gardian_phone` varchar(111) NOT NULL,
  `student_gender` varchar(111) NOT NULL,
  `student_email` varchar(111) NOT NULL,
  `student_address` varchar(111) NOT NULL,
  `course_name` varchar(111) NOT NULL,
  `course_duration` varchar(111) NOT NULL,
  `course_fee` varchar(111) NOT NULL,
  `course_instructer` varchar(111) NOT NULL,
  `course_start_month` varchar(111) NOT NULL,
  `course_end_month` varchar(111) NOT NULL,
  `course_start_date` varchar(111) NOT NULL,
  `course_end_date` varchar(111) NOT NULL,
  `student_reg_fee` varchar(111) NOT NULL,
  `student_total_fee` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_phone`, `student_gardian`, `student_gardian_phone`, `student_gender`, `student_email`, `student_address`, `course_name`, `course_duration`, `course_fee`, `course_instructer`, `course_start_month`, `course_end_month`, `course_start_date`, `course_end_date`, `student_reg_fee`, `student_total_fee`, `date`, `updated_at`, `created_at`) VALUES
(1, 'Ayoub', 'Street No 2', 'Bashir', '03051258471', 'Male', 'ayoub@gmail.como', 'gulshan Iqbal', 'Web Development', '3-Month', '15000', 'Nouman', '2018-11-08', '2018-11-21', '2018-11-24', '2018-11-13', '1000', '15000', '2018-11-08', '2018-11-08 21:52:11', '2018-11-08 21:52:11'),
(2, 'Ragheb', '03051258471', 'Allama', '03051258471', 'Male', 'ayoub@gmail.como', 'Street No 2\r\ngulshan Iqbal', 'Web Development', '3-Month', '15000', 'Nouman', '2018-11-09', '2018-11-24', '2018-11-09', '2018-11-23', '1000', '15000', '2018-11-09', '2018-11-10 10:40:08', '2018-11-10 10:40:08'),
(3, 'Ayoub', 'Street No 2', 'Bashir', '03051258471', 'Male', 'ayoub@gmail.como', 'gulshan Iqbal', 'Web Development', 'Web Development', '15000', 'Nouman', '2018-11-09', '2018-11-09', '2018-11-09', '2018-11-09', '1000', '15000', '2018-11-23', '2018-11-10 13:40:21', '2018-11-10 13:40:21'),
(4, 'Ragheb', 'Street No 2', 'Allama', '03051258471', 'Male', 'ayoub@gmail.como', 'gulshan Iqbal', 'Web Development', 'Web Development', '15000', 'Nouman', '2018-11-04', '2018-11-05', '2018-11-07', '2018-11-08', '1000', '15000', '2018-11-09', '2018-11-10 13:53:00', '2018-11-10 13:53:00'),
(5, 'Ayoub', 'Street No 2', 'Bashir', '03051258471', 'Male', 'ayoub@gmail.como', 'gulshan Iqbal', 'Web Development', 'Web Development', '15000', 'Nouman', '2018-11-10', '2018-11-13', '2018-11-24', '2018-11-16', '1000', '15000', '2018-11-10', '2018-11-10 16:52:45', '2018-11-10 16:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructers`
--
ALTER TABLE `instructers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instructers`
--
ALTER TABLE `instructers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
