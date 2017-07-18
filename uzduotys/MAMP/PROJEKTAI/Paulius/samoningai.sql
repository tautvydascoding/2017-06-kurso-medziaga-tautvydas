-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2017 at 01:51 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samoningai`
--
CREATE DATABASE IF NOT EXISTS `samoningai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `samoningai`;

-- --------------------------------------------------------

--
-- Table structure for table `skelbimai`
--

DROP TABLE IF EXISTS `skelbimai`;
CREATE TABLE `skelbimai` (
  `id` int(6) UNSIGNED NOT NULL,
  `pavadinimas` varchar(30) NOT NULL,
  `data_` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `miestas` varchar(30) NOT NULL,
  `tipas` varchar(30) NOT NULL,
  `registracija` char(1) NOT NULL,
  `aprasymas` text CHARACTER SET ucs2 COLLATE ucs2_lithuanian_ci NOT NULL,
  `tinkamas_rodyti` varchar(30) DEFAULT 'netinkamas',
  `nuoroda` varchar(30) NOT NULL,
  `telnr` varchar(30) NOT NULL,
  `laisvas1` varchar(30) NOT NULL,
  `laisvas2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skelbimai`
--

INSERT INTO `skelbimai` (`id`, `pavadinimas`, `data_`, `email`, `miestas`, `tipas`, `registracija`, `aprasymas`, `tinkamas_rodyti`, `nuoroda`, `telnr`, `laisvas1`, `laisvas2`) VALUES
(60, 'Praktika MiÅ¡kÄ—', '2017-08-15', 'heyyy@gmail.com', 'Kaunas', 'Paskaita', '0', 'Tai puikus renginys. Tai puikus renginys. Tai puikus renginys. Tai puikus renginys. Tai puikus renginys.', '', '', '', '', ''),
(61, 'Masazai namuose', '2018-08-15', 'masazass@gmail.com', 'Vilnius', 'Stovykla', '0', 'Puikus masazas. Puikus masazas. Puikus masazas. Puikus masazas. Puikus masazas. Puikus masazas. ', '', '', '', '', ''),
(62, 'Pratimai akims', '2020-08-15', 'akystau@gmail.com', 'Kaunas', 'Paskaita', '0', 'Darome pratimus. Darome pratimus. Darome pratimus. Darome pratimus. Darome pratimus. Darome pratimus. ', '', '', '', '', ''),
(63, 'Joga', '2017-09-15', 'jogasjogas@gmail.com', 'Vilnius', 'Stovykla', '0', 'Joga OM  Joga OM Joga OM Joga OM Joga OM Joga OM Joga OM ', 'tinkamas', '', '', '', ''),
(64, 'Meditacija', '2019-02-05', 'samoningai@gmail.com', 'Kaunas', 'Stovykla', '0', 'Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina', 'tinkamas', '', '', '', ''),
(65, 'Pabuk gamtoje', '2017-09-15', 'mail@mail.com', 'Marijampoles', 'stovykla', '0', 'Puikus renginys. Puikus renginys. Puikus renginys. Puikus renginys. Puikus renginys. Puikus renginys. Puikus renginys. Puikus renginys. ', 'tinkamas', '', '', '', ''),
(66, 'JogaJoga', '2018-02-06', 'samoningai@gmail.com', 'Siauliai', 'mokymai', '0', 'Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .', 'tinkamas', '', '', '', ''),
(67, 'JogaJoga', '2019-02-06', 'samoningai@gmail.com', 'Siauliai', 'mokymai', '0', 'Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .', '', '', '', '', ''),
(68, 'JogaJoga', '2049-02-06', 'samoningai@gmail.com', 'Siauliai', 'mokymai', '0', 'Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .Hey Ho . Hey Ho . Hey Ho . Hey Ho .', '', '', '', '', ''),
(69, 'Joga vyrams', '2220-02-02', 'mail@mail.com', 'Utena', 'paskaita', '0', 'Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga ', '', '', '', '', ''),
(70, 'Joga vyrams', '2220-02-02', 'mail@mail.com', 'Utena', 'paskaita', '0', 'Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga ', '', '', '', '', ''),
(71, 'Joga vyrams', '2220-02-02', 'mail@mail.com', 'Utena', 'paskaita', '0', 'Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga ', '', '', '', '', ''),
(72, 'Joga vyrams', '2220-02-02', 'mail@mail.com', 'Alytaus', 'paskaita', '0', 'Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga Vyru joga ', '', '', '', '', ''),
(78, 'Renginys', '2018-04-04', 'mail@mail.lt', 'Vilniaus', 'paskaita', '\0', 'Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey ', '', '', '', '', ''),
(82, 'Pavadinimas', '2018-07-06', 'OrganizatoriÅ³ email', 'Alytaus', 'meditacija', '\0', 'Renginio apraÅ¡ymas Renginio apraÅ¡ymasRenginio apraÅ¡ymas Renginio apraÅ¡ymas Renginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymas Renginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymas Renginio apraÅ¡ymasRenginio apraÅ¡ymas', '', '', '', '', ''),
(84, 'Nauja medtiacija', '2019-05-05', 'samoningai@gmail.com', 'Taurages', 'paskaita', '\0', 'Renginio apraÅ¡ymas Renginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymas', 'tinkamas', '', '', '', ''),
(85, 'Nauja medtiacija', '2019-05-05', 'samoningai@gmail.com', 'Taurages', 'paskaita', '\0', 'Renginio apraÅ¡ymas Renginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymasRenginio apraÅ¡ymas', '', '', '', '', ''),
(86, 'PAVADINIMAS', '2020-07-06', 'MAIL MAIL', 'Telsiu', 'meditacija', '', 'Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok \r\nOk Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok Ok ', 'tinkamas', '', '', '', ''),
(90, 'Meditacija siandien', '2019-09-04', 'mail@mail.com', 'Kaunas', 'paskaita', '', 'Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija nebutina Registracija neb', 'tinkamas', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `created`, `modified`, `status`) VALUES
(1, '	Barack Obama', 'barack@gmail.com', '6666666666', '2016-07-13 08:23:23', '2016-07-13 08:23:23', '1'),
(2, 'Bill Gates', 'bill@gmail.com', '8888888888', '2016-07-12 08:23:23', '2016-07-12 08:23:23', '1'),
(3, 'Narendra Modi', 'narendra@gmail.com', '1234321564', '2016-07-14 08:23:23', '2016-07-14 08:23:23', '1'),
(4, 'Larry Page', 'larry@gmail.com', '9999999999', '2016-07-10 08:23:23', '2016-07-10 08:23:23', '0'),
(5, 'Jeff Bezos', 'jeff@gmail.com', '9898899889', '2016-07-09 08:23:23', '2016-07-09 08:23:23', '1'),
(6, '	Mark Zuckerberg', 'mark@gmail.com', '7777777777', '2016-06-28 08:23:23', '2016-06-28 08:23:23', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skelbimai`
--
ALTER TABLE `skelbimai`
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
-- AUTO_INCREMENT for table `skelbimai`
--
ALTER TABLE `skelbimai`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
