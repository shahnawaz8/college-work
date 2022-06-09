-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 03:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_pass`, `admin_name`) VALUES
(1, 'admin@ducat.com', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_msg` longtext NOT NULL,
  `post_tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_msg`, `post_tag`) VALUES
(1, 'HTML Introduction', 'HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction HTML Introduction ', 'html'),
(2, 'Css Introduction', 'Css IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss IntroductionCss Introduction', 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `public_temp`
--

CREATE TABLE `public_temp` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_css` varchar(80) NOT NULL,
  `temp_mode` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_temp`
--

INSERT INTO `public_temp` (`id`, `site_name`, `site_title`, `site_css`, `temp_mode`) VALUES
(1, 'CMS Project', 'CMS Project', 'css/style.css', 0),
(2, 'CMS Project', 'CMS Project', 'css/style1.css', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_temp`
--
ALTER TABLE `public_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public_temp`
--
ALTER TABLE `public_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
