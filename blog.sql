-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 08:54 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_post`
--

CREATE TABLE `add_post` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_post`
--

INSERT INTO `add_post` (`id`, `title`, `content`, `category`, `thumbnail`, `user_id`) VALUES
(1, '', '', '', '', 0),
(2, '', '', '', '', 0),
(3, 'title', 'content', 'category', '', 0),
(4, '', '<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n<p>zxdcxc</p>\n', 'Travel', '', 24),
(5, '', '', 'Education', ' ', 24),
(6, '', '', 'Education', ' ', 24),
(7, 'gdfvdv', '', 'Food', ' ', 24),
(8, 'gdfvdv', '', 'Food', ' ', 24),
(9, 'gdfvdv', '', 'Food', ' ', 24),
(10, '', '', 'Travel', ' ', 24),
(11, '', '', 'Travel', '', 24),
(12, 'ffff', '', 'Education', '', 24),
(13, 'test insert', '<p>test inser</p>\r\n', 'Food', '', 24),
(14, '', '', 'Tech', '', 24),
(15, '', '', 'Tech', '', 24),
(16, '', '', 'Education,Travel,Food', '', 24);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `about` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `gender`, `about`) VALUES
(9, 'Shiva1', 'dfgdfsdfcsdf', 'fujk', '', 'Male', '  fhjkfhk'),
(18, 'Shivasgfsfg', 'dfgdf', '', '', 'Male', ' '),
(19, 'name', 'email', 'phone', 'password', 'gender', ' about'),
(20, 'Shiva debnath', 'a@gg.com', 'fujk', '', 'Male', '  fhjkfhk'),
(24, 'sambriidi small', 'sam@gmail.com', '7477868456', '123456', 'Female', '  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_post`
--
ALTER TABLE `add_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_post`
--
ALTER TABLE `add_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
