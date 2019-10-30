-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 06:19 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `username`) VALUES
(1, 'mdyasinarafatyen2@gmail.com', '01967861915', 'Arafat'),
(2, 'shabrier@gmail.com', '123456', 'Rocky');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `comment_body` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_body`, `post_id`, `username`) VALUES
(1, 'fgyfrg', 3, 'Shakil'),
(2, '', 1, 'Shakil'),
(3, 'fdsgysh', 6, 'Shakil'),
(4, 'fdsgysh', 6, 'Shakil'),
(5, 'drtfafgrdtgrdg', 4, 'Shakil'),
(6, 'seraetraet', 4, 'Shakil'),
(7, 'that baby', 6, 'Shakil'),
(8, 'wat a post', 1, 'Shakil'),
(9, 'ggg', 1, 'Shakil'),
(10, 'mmm', 1, 'Shakil'),
(11, 'Wah bro waah', 6, 'Shakil'),
(12, 'Wah ksljdla', 15, 'Jacky420');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_body` varchar(255) NOT NULL,
  `post_pic` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_category`, `post_author`, `post_body`, `post_pic`, `post_date`) VALUES
(4, 'DIU cultural club organised Short Film Festival ', 'Extra-curriculum', 'Arafat', 'DIU cultural club organised Short Film Festival DIU cultural club organised Short Film Festival DIU cultural club organised Short Film Festival DIU cultural club organised Short Film Festival DIU cultural club organised Short Film Festival DIU cultural cl', 'maxresdefault.jpg', '2016-11-23 18:40:45'),
(5, 'Cycle club launched in DIU', 'Sports', 'Rocky', 'Cycle club launched in DIU on 23rd November, 2016 Lorem Ipsum. It was a great initiative from the honorable proctor.Cycle club launched in DIU on 23rd November, 2016 Lorem Ipsum. It was a great initiative from the honorable proctor.Cycle club launched in ', 'event-cycle-race.jpg', '2016-11-24 04:27:36'),
(7, 'Education Minister visits DIU', 'Campus', 'Arafat', 'Cycle club launched in DIU on 23rd November, 2016 Lorem Ipsum. It was a great initiative from the honorable proctor.Cycle club launched in DIU on 23rd November, 2016 Lorem Ipsum. It was a great initiative from the honorable proctor.Cycle club launched in ', '29z2z9g.jpg', '2016-12-05 05:18:31'),
(8, 'Foundation day 2016 is coming, excitement in students', 'Campus', 'Arafat', 'Foundation day 2016 is coming, excitement in studentsFoundation day 2016 is coming, excitement in studentsFoundation day 2016 is coming, excitement in studentsFoundation day 2016 is coming, excitement in studentsFoundation day 2016 is coming, excitement i', '12.jpg', '2016-12-05 05:21:14'),
(9, 'DIU offers Bachelor in Entrepreneurship ', 'Education', 'Arafat', 'DIU offers Bachelor in Entrepreneurship DIU offers Bachelor in Entrepreneurship DIU offers Bachelor in Entrepreneurship DIU offers Bachelor in Entrepreneurship DIU offers Bachelor in Entrepreneurship DIU offers Bachelor in Entrepreneurship DIU offers Bach', 'Daffodil-International-University.jpg', '2016-12-05 05:23:06'),
(10, 'DIU cricket team goes to UAE', 'Sports', 'Arafat', 'DIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU cricket team goes to UAEDIU', '1433096927.jpg', '2016-12-05 05:27:32'),
(11, 'Yesterday Flash mob was great', 'Extra-curriculum', 'Arafat', 'Yesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was greatYesterday Flash mob was', 'campus.jpg', '2016-12-05 05:30:22'),
(12, 'Twelve graduate students gets job in ACI group', 'Career', 'Arafat', 'Twelve graduate students gets job in ACI groupTwelve graduate students gets job in ACI groupTwelve graduate students gets job in ACI groupTwelve graduate students gets job in ACI groupTwelve graduate students gets job in ACI groupTwelve graduate students ', 'news1.jpg', '2016-12-05 05:33:37'),
(13, 'Honorable chairman sir gives motivational speech', 'Career', 'Arafat', 'Honorable chairman sir gives motivational speechHonorable chairman sir gives motivational speechHonorable chairman sir gives motivational speechHonorable chairman sir gives motivational speechHonorable chairman sir gives motivational speechHonorable chair', '23m39c1.jpg', '2016-12-05 05:35:09'),
(14, 'IEEE Student Branch in DIU', 'Education', 'Arafat', 'DIU offers Bachelor in Computer ScienceDIU offers Bachelor in Computer ScienceDIU offers Bachelor in Computer ScienceDIU offers Bachelor in Computer ScienceDIU offers Bachelor in Computer ScienceDIU offers Bachelor in Computer ScienceDIU offers Bachelor i', '42581038.jpg', '2016-12-05 05:38:53'),
(15, 'DIU Aulamni Association goes to USA', 'International', 'Arafat', 'DIU Aulamni Association goes to USADIU Aulamni Association goes to USADIU Aulamni Association goes to USADIU Aulamni Association goes to USADIU Aulamni Association goes to USADIU Aulamni Association goes to USADIU Aulamni Association goes to USADIU Aulamn', 'images (2).jpg', '2016-12-05 05:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Shakil', 'sh@sh.com', 'Shakil', '123456'),
(2, 'Jahangir Alam', 'jack@jack.com', 'Jacky420', '123456'),
(3, 'Raju', 'r@r.com', 'raju420', '123456'),
(4, 'Amit', 'am@am.com', 'amit2', '123456'),
(5, 'Maruf', 'm@m.com', 'hero_maruf', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
