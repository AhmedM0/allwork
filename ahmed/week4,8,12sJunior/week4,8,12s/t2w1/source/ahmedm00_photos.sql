-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2019 at 05:32 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahmedm00_photos`
--

-- --------------------------------------------------------

--
-- Table structure for table `family_slider`
--

CREATE TABLE `family_slider` (
  `id` int(11) NOT NULL,
  `strFamilyFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `family_slider`
--

INSERT INTO `family_slider` (`id`, `strFamilyFile`) VALUES
(1, 'family1.jpg'),
(2, 'family2.jpg'),
(3, 'family3.jpg'),
(4, 'family4.jpg'),
(5, 'family5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `strFirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `strLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `strEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nMessage` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `strFirstName`, `strLastName`, `strEmail`, `nMessage`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, 'john', 'doe', 'test@com', 'hello'),
(5, '', '', '', ''),
(6, 'fsf', 'fsfs', 'sfsaf@fcsf.csa', 'sdadasd'),
(7, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `strHeroName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `strHeroName`) VALUES
(1, 'coolimage.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `strPackageName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `strPackageButton` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `strPackageName`, `strPackageButton`) VALUES
(2, 'bin-thi-u-300052-unsplash.jpg', 'Wedding'),
(3, 'edward-cisneros-415590-unsplash.jpg', 'Family'),
(4, 'photo-1438761681033-6461ffad8d80.jpg', 'Portrait');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(50) NOT NULL,
  `strFileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `strFileName`) VALUES
(1, 'beach-bride-clouds-931796.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portrait_slider`
--

CREATE TABLE `portrait_slider` (
  `id` int(11) NOT NULL,
  `strPortraitFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portrait_slider`
--

INSERT INTO `portrait_slider` (`id`, `strPortraitFile`) VALUES
(1, 'portrait1.jpg'),
(2, 'portrait2.jpg\r\n'),
(3, 'portrait3.jpg\r\n'),
(4, 'portrait4.jpg'),
(5, 'portrait5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_slider`
--

CREATE TABLE `wedding_slider` (
  `id` int(11) NOT NULL,
  `strWeddingFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wedding_slider`
--

INSERT INTO `wedding_slider` (`id`, `strWeddingFile`) VALUES
(1, 'wedding1.jpg'),
(2, 'wedding2.jpg'),
(3, 'wedding3.jpg'),
(4, 'wedding4.jpg'),
(5, 'wedding5.jpg'),
(6, 'wedding6.jpg'),
(7, 'wedding7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `family_slider`
--
ALTER TABLE `family_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portrait_slider`
--
ALTER TABLE `portrait_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_slider`
--
ALTER TABLE `wedding_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `family_slider`
--
ALTER TABLE `family_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portrait_slider`
--
ALTER TABLE `portrait_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wedding_slider`
--
ALTER TABLE `wedding_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
