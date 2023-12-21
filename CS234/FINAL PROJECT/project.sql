-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 09:55 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `body` text,
  `username` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `title`, `body`, `username`, `created_at`) VALUES
(1, 'Renewable Energy: Powering a Sustainable Future', 'As the world grapples with climate change, renewable energy sources like solar and wind power are becoming increasingly important. Innovations in energy storage and grid management are making these sustainable energy sources more efficient and affordable, leading us towards a greener future.', 'StLech2002', '2023-11-23 21:48:35'),
(2, 'The Virtual Reality Experience', 'VR technology is no longer just a figment of science fiction. It\'s here, transforming everything from gaming to education. VR allows us to immerse ourselves in digital environments that feel incredibly real, providing new ways of learning, entertaining, and interacting with the world around us.', 'jjhus2006', '2023-11-23 21:49:46'),
(3, 'The Future of Technology: Innovations on the Horizon', 'Welcome to our latest blog post where we explore the fascinating world of emerging technologies! As we stand at the cusp of major technological breakthroughs, it\'s exhilarating to think about how these advancements will shape our future.', 'StuartLech', '2023-11-23 21:50:59'),
(4, 'NFL Refs', 'NFL refs gotta look parley before making the obvious call', 'Ez_SportingTakes', '2023-11-23 21:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`) VALUES
('Ez_SportingTakes', '$2y$10$/JrmrAK/W5QuSCYMePbfKeQNGcGwI3sWBUSZFnnnwDGFVqSsO3WQq'),
('jjhus2006', '$2y$10$9EJ5sq3t8QvGCzWEcch6huVRa9HQpn.EF89/BKGujYcGBwI5SdQV2'),
('StLech2002', '$2y$10$g0Gt3g9dXvuFE34pJYzgd.291SPzMPf64HRVO5LJ/JAIAm9xF6thu'),
('StuartLech', '$2y$10$od0mTrwZO2ZBL/cN4B8FROjvmyRURGSMPQrutgv8dqQFdF6NVeKPW');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `ID` int(11) NOT NULL,
  `liked` int(11) DEFAULT '0',
  `disliked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ID`, `liked`, `disliked`) VALUES
(1, 5, 2),
(2, 21, 1),
(3, 7, 2),
(4, 6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `posts` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
