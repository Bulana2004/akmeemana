-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `navId` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_dropdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`navId`, `name`, `link`, `is_dropdown`) VALUES
(1, 'Home', 'index.php', 0),
(2, 'Citizenship Charter', 'citizenship.php', 0),
(3, 'services', 'service.php', 0),
(4, 'News,Tender Notices,News Gallery', '#,tenders.php,news.php', 1),
(5, 'Application', 'application.php', 0),
(6, 'Contact', 'contact.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(600) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinnavbar`
--

CREATE TABLE `sinnavbar` (
  `navid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_dropdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinnavbar`
--

INSERT INTO `sinnavbar` (`navid`, `name`, `link`, `is_dropdown`) VALUES
(1, 'මුල්පිටුව', 'index.php', 0),
(2, 'පුරවැසි ප්‍රඥප්තිය', 'citizenship.php', 0),
(3, 'සේවා', 'service.php', 0),
(4, 'පුවත්,ටෙන්ඩර් දැන්වීම්,පුවත් ගැලරිය', '#,tenders.php,news.php', 1),
(5, 'යෙදුම්', 'application.php', 0),
(6, 'අමතන්න', 'contact.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sin_news`
--

CREATE TABLE `sin_news` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(600) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sin_tenders`
--

CREATE TABLE `sin_tenders` (
  `id` int(10) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `images` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `paragraph` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamnavbar`
--

CREATE TABLE `tamnavbar` (
  `navid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_dropdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamnavbar`
--

INSERT INTO `tamnavbar` (`navid`, `name`, `link`, `is_dropdown`) VALUES
(1, 'முகப்பு பக்கம்', 'index.php', 0),
(2, 'குடியுரிமை சாசனம்', 'citizenship.php', 0),
(3, 'சேவைகள்', 'service.php', 0),
(4, 'செய்தி, டெண்டர் அறிவிப்புகள், செய்தி தொகுப்பு', '#,tenders.php,news.php', 1),
(5, 'விண்ணப்பம்', 'application.php', 0),
(6, 'அழைப்பு', 'contact.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tam_news`
--

CREATE TABLE `tam_news` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(600) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tam_tenders`
--

CREATE TABLE `tam_tenders` (
  `id` int(10) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int(10) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`) VALUES
(1, 'admin', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`navId`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinnavbar`
--
ALTER TABLE `sinnavbar`
  ADD PRIMARY KEY (`navid`);

--
-- Indexes for table `sin_news`
--
ALTER TABLE `sin_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sin_tenders`
--
ALTER TABLE `sin_tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamnavbar`
--
ALTER TABLE `tamnavbar`
  ADD PRIMARY KEY (`navid`);

--
-- Indexes for table `tam_news`
--
ALTER TABLE `tam_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tam_tenders`
--
ALTER TABLE `tam_tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
