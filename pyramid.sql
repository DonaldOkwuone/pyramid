-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 08:02 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyramid`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `cap` decimal(15,2) NOT NULL,
  `time` timestamp NOT NULL,
  `matched_with` varchar(50) NOT NULL,
  `amt_matched` decimal(15,2) NOT NULL,
  `txn_id` varchar(10) NOT NULL,
  `auth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `percentage`
--

CREATE TABLE `percentage` (
  `id` int(11) NOT NULL,
  `percent` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percentage`
--

INSERT INTO `percentage` (`id`, `percent`) VALUES
(1, '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `cap` decimal(15,2) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL,
  `matched` varchar(25) NOT NULL,
  `matched_with` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `pop` varchar(100) NOT NULL,
  `txn_id` varchar(10) NOT NULL,
  `auth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`id`, `username`, `amount`, `cap`, `date`, `time`, `matched`, `matched_with`, `status`, `pop`, `txn_id`, `auth`) VALUES
(24, 'user', '60000.00', '78000.00', '2017-03-10', '2017-03-10 05:46:13', 'Pending', '0', 'Pending', '', '37686', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `secret`
--

CREATE TABLE `secret` (
  `id` int(11) NOT NULL,
  `secret` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secret`
--

INSERT INTO `secret` (`id`, `secret`) VALUES
(1, 'What is your favorite pet?'),
(2, 'Who is your favorite actor?'),
(3, 'What is your favorite book?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `who` char(10) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `firstname` char(10) NOT NULL,
  `lastname` char(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `accname` varchar(200) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `blocked` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `who`, `password1`, `password2`, `firstname`, `lastname`, `phone`, `email`, `location`, `title`, `bank`, `accno`, `accname`, `thumb`, `secret`, `answer`, `blocked`) VALUES
(53, 'admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 'mooyola', 'user', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '08097778998', '', '', '', 'Zenith Bank', '090099089', 'Bankola Muyiwa', '', '', '', ''),
(59, 'user', 'user', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '08090009000', 'eyinju@aol.com', '', '', 'UBA', '090099090', 'Adebola James', '', 'What is your favorite book?', 'book', ''),
(63, 'boo', 'user', '08ba60f8bf5bb5125fabce4ee0962a3a', '08ba60f8bf5bb5125fabce4ee0962a3a', '', '', '', 'boo@aol.com', '', '', '', '', '', '', 'What is your favorite pet?', 'pet', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `percentage`
--
ALTER TABLE `percentage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `secret`
--
ALTER TABLE `secret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`,`email`,`accno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `percentage`
--
ALTER TABLE `percentage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `secret`
--
ALTER TABLE `secret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
