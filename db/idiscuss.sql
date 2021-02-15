-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 03:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `catetories`
--

CREATE TABLE `catetories` (
  `categories_id` int(8) NOT NULL,
  `categories_name` text NOT NULL,
  `categories_descr.` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catetories`
--

INSERT INTO `catetories` (`categories_id`, `categories_name`, `categories_descr.`, `created`) VALUES
(1, 'Python', 'Python is an interpreted, high-level and general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace', '2021-01-10 00:00:00'),
(2, 'java', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible', '2021-01-10 00:00:00'),
(3, 'php', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group', '2021-01-11 00:00:00'),
(4, 'Node.js', 'Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that executes JavaScript code outside a web browser', '2021-01-14 19:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `commenr`
--

CREATE TABLE `commenr` (
  `sno` int(8) NOT NULL,
  `comments` text NOT NULL,
  `comments_id` int(7) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commenr`
--

INSERT INTO `commenr` (`sno`, `comments`, `comments_id`, `Time`) VALUES
(1, 'plzz try to restart your pc again ', 3, '2021-01-23 04:02:24'),
(3, 'plss  do not turn off your computer during the updation', 6, '2021-01-23 04:18:41'),
(4, 'may be some files are not coppied correctly so download the same virsion and try to install and  do not turn off your pc during the istallation', 7, '2021-01-23 04:20:34'),
(5, 'anything else', 7, '2021-01-23 04:21:26'),
(6, 'mfdhsbhkbchs j hvchjsh hvdchyjv \r\n', 5, '2021-01-23 08:31:16'),
(7, 'dqjvjhvca jh vhcv a', 5, '2021-01-23 07:36:16'),
(8, 'ram ji', 5, '2021-01-23 08:19:02'),
(9, 'you shuold off the pc onece for some time', 12, '2021-01-24 05:23:22'),
(10, 'ascjbkhbvhksdb kh vds', 12, '2021-01-24 05:32:53'),
(11, 'rajajani', 12, '2021-01-24 05:33:17'),
(12, 'try to this link and install easly www.google.python.com', 13, '2021-02-02 07:52:02'),
(13, 'jhgjhgfhjvjhvhkyjgyvughvbkjhbgui', 14, '2021-02-02 09:30:28'),
(14, 'jhgjhgfhjvjhvhkyjgyvughvbkjhbgui', 14, '2021-02-02 09:35:04'),
(15, 'jhgjhgfhjvjhvhkyjgyvughvbkjhbgui', 14, '2021-02-02 09:35:51'),
(16, 'jhgjhgfhjvjhvhkyjgyvughvbkjhbgui', 14, '2021-02-02 09:36:23'),
(17, 'ghgchgfc gft bn v,uyvg', 8, '2021-02-02 09:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` varchar(255) NOT NULL,
  `T_username` varchar(20) NOT NULL,
  `categories_id` int(7) NOT NULL,
  `tread_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `thread_title`, `thread_desc`, `T_username`, `categories_id`, `tread_time`) VALUES
(14, 'bbbbbbbbbbbbbbbbbbbbbb', ' cccccccccccccccccccccccccccccc', 'kumar', 1, '2021-02-02 14:59:46'),
(13, 'how to install python ', ' plzz give me some suggestion', 'abc', 1, '2021-02-02 13:21:15'),
(7, 'how to solve ', ' the problem of installation of jav scirppp', '0', 2, '2021-01-15 11:27:26'),
(9, 'jhdbfvbhjbvhhjbv', ' papapapapapapap', 'email', 1, '2021-01-23 12:13:57'),
(3, 'pppppppppppppp', ' ppppppppppppppp', '0', 1, '2021-01-15 11:25:05'),
(12, 'problem in pc', ' how to fixe it', 'abc', 1, '2021-01-24 10:50:24'),
(2, 'problem in python', 'how to solve this', '0', 1, '2021-01-14 19:18:58'),
(6, 'problem in running code in java script', ' give me some solution', '0', 2, '2021-01-15 11:26:45'),
(8, 'python problem in installing ', ' i was trying a log time plzz suggest me how to install properly ', 'sagar', 1, '2021-01-23 11:42:52'),
(4, 'qqqqqqqqqqqqqq', ' qqqqqqqqqqqqqqqqqq', '0', 1, '2021-01-15 11:25:30'),
(10, 'raja', ' raja', 'abc', 3, '2021-01-23 12:32:15'),
(11, 'ramnarayan bajaj', ' bajata', 'abc', 1, '2021-01-23 12:55:19'),
(5, 'rrrrrrrrrrrrrrr', ' rrrrrrrrrrrrrrrrrrrrrr', '0', 1, '2021-01-15 11:25:51'),
(1, 'unable to install python', 'i have tried many times to solve this but every time i failled.?', '0', 1, '2021-01-13 13:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(7) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `user_pass`) VALUES
(1, '', 'sagar1@gmai.com', '123'),
(27, 'abc', 'abc@gmail.com', '$2y$10$Cn9lszpsfNrbN8BBKlu1fe7pGqENEhmJ0xobeu.thFK.DnkGDJ4LC'),
(28, ' ', 'sagar123@gmail.com', '$2y$10$utzHO9fj6eKTM2OKetwfnuVSKgkCCcb3VVuaJQWUbw8L8WJtOmlq6'),
(29, 'kanchan', 'kanchan123@gmail.com', '$2y$10$bC/6pjn0nHxqRGjpPhtFnubPZY0q75xeSeYOizWWMWuvmfsw6C/DW'),
(30, 'kk', 'kk@gmail.com', '$2y$10$pFH36VsUtkAvFObLDUBzp.EdUh4EqIbPcWyUlv/G80hKSqlnSDOS6'),
(31, 'kanchan kumar', 'ramji@gmail.com', '$2y$10$nSJqy6fkvtkDqBw.fR5K1.OInHhPIDRj7hTNn.Tpo27eTTKOzDy6O'),
(34, 'kumar', 'kumar@gmail.com', '$2y$10$u0JzL8/TCLG85ja2SdaZX.dPUv50f25mzNiB4Vde3l8QyDze/Zak6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catetories`
--
ALTER TABLE `catetories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `commenr`
--
ALTER TABLE `commenr`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catetories`
--
ALTER TABLE `catetories`
  MODIFY `categories_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commenr`
--
ALTER TABLE `commenr`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
