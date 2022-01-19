-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql108.byetcluster.com
-- Generation Time: Nov 19, 2021 at 09:11 PM
-- Server version: 5.7.34-37
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29574192_chat_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(21, 14, 18, 'hello', 1, '2021-11-09 10:04:43'),
(22, 14, 18, 'test 123 123', 1, '2021-11-09 10:05:04'),
(23, 14, 18, 'meow', 1, '2021-11-09 10:05:11'),
(24, 14, 19, 'hi', 1, '2021-11-09 23:03:00'),
(25, 19, 14, 'hello\n\\', 1, '2021-11-09 23:03:05'),
(26, 14, 19, 'paimon\n', 1, '2021-11-09 23:03:11'),
(27, 19, 14, ':)\nGambere Gambere Senpai\n', 1, '2021-11-09 23:03:15'),
(28, 14, 19, 'pantsu\n', 1, '2021-11-09 23:03:29'),
(29, 19, 14, '_/\\_ \nReligion\n\n', 1, '2021-11-09 23:03:42'),
(30, 14, 18, 'hello\n', 1, '2021-11-12 02:18:49'),
(31, 18, 14, 'Hey cutie ^^', 1, '2021-11-12 05:38:49'),
(32, 14, 18, 'hutao c2\n', 1, '2021-11-12 05:38:52'),
(33, 14, 18, 'eula', 1, '2021-11-12 05:55:45'),
(34, 14, 18, 'nope', 1, '2021-11-12 05:56:00'),
(35, 14, 18, 'delete\n', 1, '2021-11-12 05:56:10'),
(36, 14, 18, 'test', 1, '2021-11-12 05:56:14'),
(37, 18, 14, 'Hey there sweetie ^^\nYou free tonight?', 1, '2021-11-12 06:08:39'),
(38, 14, 18, 'nope ask childe\n', 1, '2021-11-12 06:09:05'),
(39, 18, 14, 'I feel quite lonely you know\n', 1, '2021-11-12 06:09:15'),
(40, 14, 18, 'use cucumber', 1, '2021-11-12 06:09:24'),
(41, 18, 14, 'Maybe you can keep me some company', 1, '2021-11-12 06:09:28'),
(42, 18, 14, 'Test message\n\n', 1, '2021-11-12 06:10:15'),
(43, 18, 14, 'Test message', 1, '2021-11-12 06:10:21'),
(44, 18, 14, 'Test message', 1, '2021-11-12 06:10:24'),
(45, 18, 14, 'Test message', 1, '2021-11-12 06:10:25'),
(46, 18, 14, 'Test message', 1, '2021-11-12 06:10:27'),
(47, 14, 18, 'hi', 1, '2021-11-12 06:10:48'),
(48, 18, 14, 'Hello\n', 1, '2021-11-12 06:10:53'),
(49, 18, 14, 'We\'ll add emojis too ^^', 1, '2021-11-12 06:11:11'),
(50, 18, 14, 'Emoticons are kinda cutee >.<', 1, '2021-11-12 06:11:20'),
(51, 18, 14, 'Shubrat agrees at A site', 1, '2021-11-12 06:12:06'),
(52, 14, 18, ' ðŸ˜‹', 1, '2021-11-14 10:33:37'),
(53, 14, 18, ' ðŸ˜ ðŸ˜ ðŸ˜ ðŸ˜', 1, '2021-11-14 10:34:48'),
(54, 14, 18, 'test', 1, '2021-11-14 22:53:47'),
(55, 14, 18, ' â˜ â˜ â˜ â˜ â˜', 1, '2021-11-14 22:54:01'),
(56, 14, 18, ' ðŸ¤£ ðŸ¤£ ðŸ¤£', 1, '2021-11-15 01:06:48'),
(57, 14, 19, ' ðŸ˜‹ ðŸ˜‹ ðŸ˜‹', 0, '2021-11-15 01:07:22'),
(58, 14, 18, ' ðŸ˜† ðŸ˜† ðŸ˜†', 1, '2021-11-15 04:48:34'),
(59, 14, 23, 'hi', 1, '2021-11-15 06:57:06'),
(60, 23, 14, ' ðŸ˜ ðŸ˜ ðŸ˜ ðŸ˜ ðŸ˜', 1, '2021-11-15 06:57:31'),
(61, 14, 23, 'meow', 1, '2021-11-15 06:57:38'),
(62, 23, 14, 'wertyuio', 1, '2021-11-15 07:03:15'),
(63, 23, 14, 'wertyuio', 1, '2021-11-15 07:03:17'),
(64, 23, 14, 'wertyuio', 1, '2021-11-15 07:03:22'),
(65, 23, 14, ' ðŸ˜† ðŸ˜† ðŸ˜† ðŸ˜†', 1, '2021-11-15 07:05:27'),
(66, 23, 14, ' ðŸ˜š ðŸ˜š ðŸ˜š ðŸ˜š', 1, '2021-11-15 07:11:57'),
(67, 14, 23, 'sdgfhgjh', 1, '2021-11-15 07:12:08'),
(68, 23, 14, ' ðŸ˜— ðŸ˜—', 1, '2021-11-15 07:15:01'),
(69, 23, 14, 'hi', 1, '2021-11-15 07:15:24'),
(70, 23, 14, 'df', 1, '2021-11-15 07:19:44'),
(71, 14, 23, 'hi', 1, '2021-11-15 07:26:53'),
(72, 23, 14, 'hi', 1, '2021-11-15 07:30:26'),
(73, 23, 14, 'hi', 1, '2021-11-15 07:31:59'),
(74, 23, 14, 'hi', 1, '2021-11-15 07:35:35'),
(75, 23, 14, 'hi', 1, '2021-11-15 07:35:59'),
(76, 23, 14, 'hi', 1, '2021-11-15 06:13:46'),
(77, 23, 14, 'hi', 1, '2021-11-15 07:49:46'),
(78, 23, 14, 'hi', 1, '2021-11-15 07:51:46'),
(79, 23, 14, 'hi', 1, '2021-11-15 07:54:36'),
(80, 23, 14, 'hello', 1, '2021-11-15 08:00:46'),
(81, 23, 14, 'hi', 1, '2021-11-15 08:02:22'),
(82, 23, 14, 'mew', 1, '2021-11-15 08:02:22'),
(83, 14, 23, 'hellow', 1, '2021-11-15 08:19:41'),
(84, 14, 18, ' ðŸ˜€ ðŸ˜€ ðŸ˜€', 1, '2021-11-16 11:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(6, 14, 18),
(7, 14, 19),
(8, 14, 23);

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

CREATE TABLE `donordetails` (
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phn` varchar(225) NOT NULL,
  `bg` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `pin` int(11) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donordetails`
--

INSERT INTO `donordetails` (`email`, `name`, `phn`, `bg`, `city`, `pin`, `address`) VALUES
('luckytaorem5@gmail.com', 'Taorem Lucky singh', '09362657944', 'O+', 'Imphal', 795131, 'Moreh, nepali basti ward no. 5\r\nmoreh'),
('MANISHKUMARQ8881@GMAIL.COM', 'MANISH KUMAR YADAV', '9634874732', 'O+', 'MEERUT', 250001, '201 NAI MANDI KASERU KHERA MEERUT CANTT. UP 250001'),
('rohitroy8715@gmail.com', 'add', '9646368040', 'O+', 'ludhiana', 141001, 'b-34 5602/1 '),
('shubhamsrd9@gmail.com', 'shubham dwivedi', '9068922665', 'B+', 'JALANDHAR', 144411, 'LAW GATE LPU'),
('st.shubrat15@gmail.com', 'Shubrat Tripathi', '9872591342', 'AB+', 'Mirzapur', 231304, 'CHACHERI MORE NEAR CEMENT FACTORY CHUNAR, Mirzapur');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_one`, `user_two`) VALUES
(12, 14, 18),
(13, 14, 19),
(14, 14, 23);

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `p_p`, `last_seen`) VALUES
(14, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '$2y$10$QeJ3rhluf9H8jHswYvdJEedrdqWiOulDb7R3ZUnIjABz3pBKt7ht2', '11.png', '2021-11-19 08:57:51'),
(18, 'Shubrat Tripathi', 'st.shubrat15@gmail.com', '$2y$10$lN.u1If8xfR2Tb3klX3zGeSUV2DhLBmI.NdMkColtITmiewU/33HS', '27.png', '2021-11-18 05:35:06'),
(19, 'Paras', 'parasrawat0403@gmail.com', '$2y$10$az769WdHjCErufWev8M0/OLnm4orhylblTJ6zhEAa5PNiSAxFz6cu', '3.png', '2021-11-09 23:05:48'),
(23, 'test', 'test@mail.com', '$2y$10$PKY0jC8EdIA8fpD8VuOm9eW6lmOsVAgO8mQyxZ8u/WnRj.uUQTRzO', '23.png', '2021-11-19 08:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `donordetails`
--
ALTER TABLE `donordetails`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phn` (`phn`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_one` (`user_one`),
  ADD KEY `user_two` (`user_two`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
