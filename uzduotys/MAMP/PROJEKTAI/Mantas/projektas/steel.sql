-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2017 at 01:52 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steel`
--

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `su_id` int(11) NOT NULL,
  `su_title` varchar(256) NOT NULL,
  `su_content` varchar(256) NOT NULL,
  `su_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`su_id`, `su_title`, `su_content`, `su_date`) VALUES
(1, 'Insurance', 'Yes, We are legal and insured.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_date_cr` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_date_last` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_rights` int(11) NOT NULL,
  `user_uid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_email`, `user_pwd`, `user_date_cr`, `user_date_last`, `user_rights`, `user_uid`) VALUES
(1, 'Jonas', 'asdjhad@yahoo.com', 'testas123', '2017-07-14 21:31:20', '2017-07-14 21:31:20', 0, '$2y$10$BMkFZ7YAQCxW1ZuZpKZS4uiHhB2OZ6KDSZ.AxYQub2U'),
(2, 'anciukas', 'anc@kac.gmail', 'antanas', '2017-07-14 21:42:08', '2017-07-14 21:42:08', 0, '$2y$10$0DpT9E075Pgmfi73J8ku9ekiGwApEzmPvJV4FKNSf9u'),
(3, 'ALexas', 'adkadh@one.lt', 'testas123', '2017-07-15 15:59:13', '2017-07-15 15:59:13', 0, '$2y$10$RB91IYyKg4KwWz2I8vk5te1xY25erkHdkjOZd7MWEPZ'),
(5, 'Petras', 'grazugrazu@mail.com', '$2y$10$Oj9PhAraDtvF7QxcK678/OVejN1kXrDlymgrGIlOXHM', '2017-07-15 20:00:52', '2017-07-15 20:00:52', 0, 'Grazulis'),
(6, 'Sony', 'sony@sony.so', '$2y$10$ZKZBW.fc4GbOcARkOSois.SIJUBpxQhZ9taVY.CIkGI', '2017-07-15 20:11:40', '2017-07-15 20:11:40', 0, 'Sony'),
(7, 'testas', 'a@a.lt', 'testas', '2017-07-15 20:51:51', '2017-07-15 20:51:51', 0, 'testas'),
(8, 'aqua', 'a@a.lt', '$2y$10$DMKqkrp4idpeKUaESbcw0.9BsNbET/vKnarKtCYGxax', '2017-07-15 21:33:10', '2017-07-15 21:33:10', 0, 'aqua'),
(9, 'klevas', 'klevas@one.lt', '$2y$10$90kLP/TygGwqDpTI6qhPr.xiOZ.olKUOoTrB7dLFc86', '2017-07-15 23:02:30', '2017-07-15 23:02:30', 0, 'klevas'),
(10, 'liepa', 'liepa@liepa.lt', '$2y$10$ZSpjDMnFDZ9elCVpI7hLH.KC6BeBoa8ASxV3fvzlHOz', '2017-07-15 23:24:42', '2017-07-15 23:24:42', 0, 'liepa'),
(11, 'simple', 'simple@simple.io', 'simple', '2017-07-16 13:48:03', '2017-07-16 13:48:03', 0, 'simple'),
(27, 'Eskimas', 'a@a.lt', '$2y$10$w8RrD3PvmCXyvEX3qrb76uH0awrbwWBm19FIONbo6wSfBuYq1WfD.', '2017-07-18 10:42:45', '2017-07-18 10:42:45', 0, 'Eskimas'),
(28, 'Hello', 'a@a.lt', '$2y$10$7IAMjEFZIgNs.HBbnEvAnuC0ylSVy59G/NJ0ZE9woEPIIPUqxrVYK', '2017-07-18 12:06:55', '2017-07-18 12:06:55', 0, 'Hello'),
(29, 'Bye', 'bye@bye.com', '$2y$10$q0WzUWDbks1zDeJwSEB0ROSOmo.4j9CH712hBpmhIq5d2QsPRPWQ6', '2017-07-18 12:11:22', '2017-07-18 12:11:22', 0, 'Bye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
