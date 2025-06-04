-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2025 at 10:16 PM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxforbabys`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int NOT NULL,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vetements`
--

CREATE TABLE `vetements` (
  `id` int NOT NULL,
  `produit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vetements`
--

INSERT INTO `vetements` (`id`, `produit`, `prix`, `image`, `designation`) VALUES
(1, ' Ensemble bonnet + écharpe rose.', 29.99, 'ensemble_rose.JPG', ''),
(2, 'Ensemble bonnet + écharpe gris.', 29.99, 'ensemble_gris.JPG', ''),
(3, 'Bonnet gris 100% cotton.', 35, 'bonnet_gris.JPG', ''),
(4, 'Bonnet marron 100% cotton.', 35, 'bonnet_marron.JPG', ''),
(5, 'Echarpe grise 100% cotton', 25.99, 'echarpe_grise.JPG', ''),
(6, 'Echarpe marron 100% cotton.', 29, 'echarpe_marron.JPG', ''),
(7, 'Bandeau gris 100% cotton.', 40, 'bandeau_gris.JPG', ''),
(8, 'Bandeau gris clair 100% cotton.', 40, 'bandeau_gris-clair.JPG', ''),
(9, 'Ensemble veste + bonnet', 60, 'ensemble.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vetements`
--
ALTER TABLE `vetements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vetements`
--
ALTER TABLE `vetements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
