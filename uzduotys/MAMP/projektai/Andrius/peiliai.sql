-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 03:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peiliai`
--
CREATE DATABASE IF NOT EXISTS `peiliai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `peiliai`;

-- --------------------------------------------------------

--
-- Table structure for table `duomenys`
--

DROP TABLE IF EXISTS `duomenys`;
CREATE TABLE `duomenys` (
  `id` int(11) NOT NULL,
  `gamintojas` varchar(50) NOT NULL,
  `pavadinimas` varchar(50) NOT NULL,
  `salis` varchar(50) NOT NULL,
  `tipas` varchar(50) NOT NULL,
  `plienas` varchar(50) NOT NULL,
  `glz_ilgis` int(11) NOT NULL,
  `kaina` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duomenys`
--

INSERT INTO `duomenys` (`id`, `gamintojas`, `pavadinimas`, `salis`, `tipas`, `plienas`, `glz_ilgis`, `kaina`, `img`) VALUES
(0, 'Ganzo', 'G614', 'Kinija', 'benchmade', '440C', 79, 46, ''),
(1, 'Kershaw ', 'CQC-1K', 'Poland', 'benchmade', '8Cr13MoV', 83, 55, ''),
(2, '27TLCT', 'Recon 1 Tanto', 'Taiwan', 'bechmade', 'Carpenters CTS XHP Alloy', 60, 26, ''),
(3, 'KABAR', 'Utility', 'USA', 'benchmade', '1095', 90, 102, ''),
(4, 'Chris Reeve', 'Green Beret', 'USA', 'fixed blade', 'CPM-S35VN', 151, 150, ''),
(5, 'Gerber', '31-000751', 'China', 'fixed blade', '1055 Carbon', 98, 59, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$MurDcB5ZuBPE0tINQkUb3Ou/oQCjA0HYSsQME/A3M1P6t8OLekwFq', 'Vd43JWFLhUXQOTbV3fqxEXNwlIn9xSWKNCwH65PL7Is76BecmF85pXCNSbW7', '2017-07-17 13:26:30', '2017-07-17 13:26:30'),
(3, 'Andrius', 'byscoozy@gmail.com', '$2y$10$K6h2X1y4CIAP1QU3nY9EZutAvlT5oE4FyLLq/ufm7f3XJPC99PNKu', 'dYF26ydjRKcKBCbdLemqG68eXZf3Y0IkcA3YvU0jtMhfLYLkEAOhsaJkud8R', '2017-07-17 15:33:49', '2017-07-17 15:33:49'),
(4, 'Jonas', 'jonas@jnaitis.com', '$2y$10$dlAjPvjCn/hJxBjg0lw7GumLBgvTx60KnovzkTqNV85m/LlwnNOG6', '5DzcQkMd9TwDKT5X2uQILCO5GUpDg5NwOgjUdbNSe9q4FXHfcBJpo7acLTvK', '2017-07-18 03:42:56', '2017-07-18 03:42:56'),
(5, 'JonaS123<>?>\'\\`', 'jonas@jonaitis.com', '$2y$10$d/4TyEkkNMY6KAZv2Z56QOq73/r8YM6uzJMfbdqRo5eO0loZcI/Ga', 'JmFFf2iwQlFKVXEq4ArcvPPOvqPHnoRQlpSMNYn1gpybO8jsdycCzY0ovjAh', '2017-07-18 08:04:26', '2017-07-18 08:04:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duomenys`
--
ALTER TABLE `duomenys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
