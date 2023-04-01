-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewia`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `repeatpassword`, `created_at`, `updated_at`) VALUES
(1, 'Dewi Anggraini', 'anggrn26@gmail.com', 'Dewi Anggraini', 'Dewi Anggraini', '2023-03-12 23:44:46', '2023-03-12 23:44:46'),
(11, 'Rika Andini', 'rika6@gmail.com', 'public function', 'public function', '2023-03-27 01:15:30', '2023-03-27 01:15:30'),
(12, 'Amaira', 'ama@gmail.com', 'Zxcvbnmasd', 'Zxcvbnmasd', '2023-04-01 05:23:17', '2023-04-01 05:23:17'),
(14, 'Ebi', 'ebi@gmail.com', 'qwertyuio', 'qwertyuio', '2023-04-01 05:40:52', '2023-04-01 05:40:52'),
(15, 'Aci', 'aci@gmail.com', 'asdfghjkl', 'asdfghjkl', '2023-04-01 05:49:08', '2023-04-01 05:49:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`),
  ADD UNIQUE KEY `login_password_unique` (`password`),
  ADD UNIQUE KEY `login_repeatpassword_unique` (`repeatpassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
