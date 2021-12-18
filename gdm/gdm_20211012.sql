-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-10-12 15:21:22
-- 服务器版本： 10.4.20-MariaDB
-- PHP 版本： 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `gdm8`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gdm.com', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `archive`
--

INSERT INTO `archive` (`id`, `name`, `category`, `link`) VALUES
(1, '12', '12', '12'),
(2, '12', '12', '12');

-- --------------------------------------------------------

--
-- 表的结构 `assigned`
--

CREATE TABLE `assigned` (
  `clinicians_id` int(11) NOT NULL,
  `patients_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `assigned`
--

INSERT INTO `assigned` (`clinicians_id`, `patients_id`, `id`) VALUES
(19, 0, 1),
(18, 0, 2),
(18, 0, 3),
(18, 0, 4),
(18, 20, 5),
(19, 23, 6),
(18, 20, 7),
(18, 20, 8),
(18, 20, 9);

-- --------------------------------------------------------

--
-- 表的结构 `clinicians`
--

CREATE TABLE `clinicians` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `clinicians`
--

INSERT INTO `clinicians` (`id`, `FullName`, `Email`, `Speciality`) VALUES
(18, 'lee1', 'lee@gmail', 'blood pressure\r\n'),
(19, 'lee', 'lee@gmail', 'blood pressure\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `InsulinLevel` int(11) NOT NULL,
  `GlucoseLevel` int(11) NOT NULL,
  `KetoneLevel` int(11) NOT NULL,
  `BloodPressure` int(11) NOT NULL,
  `ReadingTime` int(11) NOT NULL,
  `patients_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_sent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `receiver_id` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `clinician_id` int(11) NOT NULL,
  `patients_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `send_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `notifications`
--

INSERT INTO `notifications` (`id`, `clinician_id`, `patients_id`, `message`, `send_time`) VALUES
(1, 19, 23, 'sfasdfasdfsadfasdfasdf', '2021-10-08 23:43:13'),
(2, 18, 20, 'sdfsdfs', '2021-10-09 00:16:21'),
(3, 19, 20, 'sadfasdfasdf', '2021-10-08 13:17:10'),
(5, 18, 20, 'hhhhhhhhhhhhhhhhh', '2021-10-10 10:49:20');

-- --------------------------------------------------------

--
-- 表的结构 `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `HealthNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `patients`
--

INSERT INTO `patients` (`id`, `FullName`, `Email`, `PhoneNo`, `Address`, `HealthNo`) VALUES
(20, 'li', '123@qq.com', 12312, 'dsjfi', 41231),
(23, 'li222', '123@qq.com', 12312, 'dsjfi', 41231);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `Email`, `password`, `Role`) VALUES
(4, 'test@gdm.com', '$2y$10$X1kXWuP5rrYXuYyuWSrHLuOgdCXm2c3evfdKBnF2Y57uwOBBLkZKS', 'patient'),
(5, 'adamlee@gmail.com', '$2y$10$nwNCq4XYSGmDJGASbdfDn.UzHRj53xe/DofqJ0uNGLX7tRUjeNL9e', 'patient'),
(6, 'malso@gdm.com', '$2y$10$D5GrcHL.5KLTxoiRHKLpt.q/adBX2POzjWtixETX5lh8SYTDK16dm', 'clinician'),
(7, 'admin@gdm.com', '$2y$10$S4Y.uo4bw1haABQBIZMkjO6uGeHgf6WVIbIzs0Io5jSI2KXLQ.ncq', 'admin'),
(8, 'shangyi@gmail.com', '$2y$10$VUSKES0JXdzP5R5xGWKmVeRWHyOo1K0/6wmEycX7NckIMX39P.xDe', 'patient');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `assigned`
--
ALTER TABLE `assigned`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clinician` (`clinicians_id`),
  ADD KEY `fk_patient` (`patients_id`);

--
-- 表的索引 `clinicians`
--
ALTER TABLE `clinicians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`Email`);

--
-- 表的索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clinician` (`clinician_id`),
  ADD KEY `patient` (`patients_id`);

--
-- 表的索引 `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`Email`),
  ADD KEY `Email_2` (`Email`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`Email`),
  ADD KEY `password` (`password`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `assigned`
--
ALTER TABLE `assigned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `clinicians`
--
ALTER TABLE `clinicians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 限制导出的表
--

--
-- 限制表 `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `clinician` FOREIGN KEY (`clinician_id`) REFERENCES `clinicians` (`id`),
  ADD CONSTRAINT `patient` FOREIGN KEY (`patients_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
