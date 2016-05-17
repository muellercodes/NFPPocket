-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.bonsaikazui.com
-- Generation Time: Oct 23, 2013 at 08:08 AM
-- Server version: 5.1.56
-- PHP Version: 5.4.11



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nfp_pocket`
--

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE IF NOT EXISTS `charts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intercourse` varchar(50) DEFAULT NULL,
  `any_bleeding` varchar(50) DEFAULT NULL,
  `kind_of_discharge` varchar(50) DEFAULT NULL,
  `consistancy` varchar(50) DEFAULT NULL,
  `date_of_discharge` varchar(50) DEFAULT NULL,
  `time_of_discharge` varchar(50) DEFAULT NULL,
  `how_often` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=267 ;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`id`, `intercourse`, `any_bleeding`, `kind_of_discharge`, `consistancy`, `date_of_discharge`, `time_of_discharge`, `how_often`, `created`, `modified`, `user_id`) VALUES
(22, 'None', 'N', '0', 'N', 'meh!', '', '', '2013-08-15 08:43:13', '2013-08-15 08:43:13', 3),
(29, 'None', 'N', '0', 'N', 'Another test', '', '', '2013-08-16 13:05:47', '2013-08-16 13:05:47', 1),
(163, '', 'H', '0', '', NULL, NULL, '', '2013-09-06 15:12:00', '2013-09-06 15:13:03', 6),
(11, 'Tonight', 'B', '10WL', 'Y', 'amueller', '', '', '2013-08-14 14:10:19', '2013-08-16 13:07:53', 3),
(65, '', '', '2W', '', '', '', '', '2013-08-21 23:35:00', '2013-09-11 14:35:16', 6),
(66, '', '', '4', '', '', '', '', '2013-08-21 23:35:00', '2013-09-11 14:34:21', 6),
(14, 'Last Night', 'M', '4', 'C/K', 'Andrews', '', '', '2013-08-14 20:39:56', '2013-08-14 20:39:56', 3),
(15, 'None', 'N', '0', 'N', '', '', '', '2013-08-14 20:56:00', '2013-08-14 20:56:00', 4),
(54, 'Yesterday', 'N', '0', 'N', '', '', '', '2013-08-21 18:40:19', '2013-08-21 18:40:19', 3),
(19, 'None', 'N', '0', 'N', 'Bonsaikazui', '', '', '2013-08-15 07:47:23', '2013-08-16 13:09:57', 1),
(20, 'None', 'N', '0', 'N', 'Yaayyyyy!!! I got usernames now!', '', '', '2013-08-15 07:49:18', '2013-08-21 15:56:52', 1),
(25, 'None', 'N', '0', 'N', 'lalalalal2', '', '', '2013-08-15 10:24:12', '2013-08-15 10:24:12', 1),
(30, 'None', 'N', '0', 'N', '', '', '', '2013-08-16 13:39:08', '2013-08-16 13:39:08', 9),
(69, '', '', '10', '', '', '', '', '2013-08-21 23:36:00', '2013-09-11 14:36:40', 6),
(32, 'None', 'N', '0', 'N', 'C3?', '', '', '2013-08-16 17:35:46', '2013-08-16 17:35:46', 8),
(33, 'None', 'B', '10', 'N', 'Test', '', '', '2013-08-16 17:37:28', '2013-08-16 17:37:28', 8),
(55, 'Yesterday', 'N', '0', 'N', '', '', '', '2013-08-21 18:40:26', '2013-08-21 18:40:26', 3),
(35, 'None', 'N', '0', 'N', 'Bonsaikazui', '', '', '2013-08-17 12:09:14', '2013-08-21 15:14:59', 1),
(68, '', '', '8', '', '', '', '', '2013-08-21 23:35:00', '2013-09-11 14:35:39', 6),
(261, '', '', '6', 'L', NULL, NULL, '', '2013-10-18 22:11:00', '2013-10-18 22:11:35', 33),
(40, 'Yesterday', 'H', '8', 'C', 'E1', '', '', '2013-08-17 14:22:07', '2013-08-17 14:22:07', 10),
(41, 'None', 'N', '0', 'N', '', '', '', '2013-08-17 14:45:50', '2013-08-17 14:45:50', 10),
(42, 'None', 'N', '0', 'N', 'Charts route', '', '', '2013-08-17 17:49:32', '2013-08-17 17:49:32', 3),
(45, 'None', 'Moderate', '10DL', 'L', '08/19/2013', '', '', '2013-08-19 08:07:40', '2013-08-19 08:07:40', 3),
(46, 'None', 'None', '0', 'N', 'Bonsai!!!!!', '', '', '2013-08-19 08:07:58', '2013-08-19 08:07:58', 1),
(67, '', '', '6', '', '', '', '', '2013-08-21 23:35:00', '2013-09-11 14:35:59', 6),
(64, '', '', '2', '', '', '', '', '2013-08-21 23:34:00', '2013-09-11 14:34:37', 6),
(49, '', '', '0', '', 'Meh!', '', '', '2013-08-19 22:19:00', '2013-08-26 21:55:51', 5),
(103, 'I', 'VL', '0', '', NULL, NULL, '', '2013-08-18 21:56:00', '2013-08-26 21:58:07', 5),
(50, 'None', 'N', '0', 'N', 'Incredibly fast!', '', '', '2013-08-21 14:59:02', '2013-08-21 14:59:02', 1),
(51, 'None', 'N', '0', 'N', 'B2', '', '', '2013-08-21 15:01:57', '2013-08-21 15:01:57', 7),
(72, '', '', '10WL', '', '', '', '', '2013-08-21 23:37:00', '2013-09-11 14:36:17', 6),
(73, '', 'L', '0', '', '', '', '', '2013-08-21 23:39:00', '2013-09-11 14:37:00', 6),
(178, '', '', '0', '', NULL, NULL, '', '2013-09-09 16:42:00', '2013-09-09 16:42:50', 28),
(179, '', '', '6', '', NULL, NULL, 'X1', '2013-09-09 16:42:00', '2013-09-09 16:43:04', 28),
(154, '', '', '8', 'C/K', NULL, NULL, '1x', '2013-09-01 23:34:00', '2013-10-21 08:11:51', 5),
(139, 'I', '', '0', '', NULL, NULL, 'AD', '2013-08-28 23:51:00', '2013-08-28 23:52:20', 5),
(260, '', '', '4', '', NULL, NULL, '1x', '2013-10-18 22:11:00', '2013-10-18 22:11:14', 33),
(149, '', '', '0', '', NULL, NULL, 'AD', '2013-08-30 15:08:00', '2013-08-30 15:08:56', 20),
(263, '', 'H', '0', '', NULL, NULL, '', '2013-10-20 22:42:00', '2013-10-20 22:42:34', 5),
(175, '', '', '0', '', NULL, NULL, '', '2013-09-07 09:10:00', '2013-09-07 09:10:17', 24),
(84, '', '', '0', '', '', '', '', '2013-08-25 23:02:38', '2013-08-25 23:02:38', 12),
(85, '', 'VL', '0', '', '', '', '', '2013-08-25 23:02:58', '2013-08-25 23:02:58', 12),
(87, 'I', 'VL', '2W', '', '', '', '', '2013-08-25 23:38:28', '2013-08-25 23:38:28', 14),
(161, '', '', '4', '', NULL, NULL, '1x', '2013-09-06 13:59:00', '2013-10-21 22:36:18', 5),
(137, '', '', '0', '', NULL, NULL, 'AD', '2013-08-27 23:16:00', '2013-08-27 23:17:07', 5),
(97, 'I', '', '0', '', NULL, NULL, '', '2013-08-24 21:49:00', '2013-08-26 21:50:22', 5),
(96, 'I', '', '0', '', NULL, NULL, '', '2013-08-26 21:48:00', '2013-08-27 08:03:34', 5),
(98, 'I', '', '0', '', NULL, NULL, '', '2013-08-25 21:49:00', '2013-08-26 21:49:45', 5),
(99, '', '', '4', '', NULL, NULL, '', '2013-08-23 21:50:00', '2013-08-26 21:51:07', 5),
(100, '', '', '4', '', NULL, NULL, '', '2013-08-22 21:51:00', '2013-08-26 21:51:25', 5),
(101, '', '', '4', '', NULL, NULL, '', '2013-08-20 21:51:00', '2013-08-26 21:55:06', 5),
(102, '', '', '0', '', NULL, NULL, '', '2013-08-21 21:51:00', '2013-08-26 21:51:50', 5),
(104, '', 'L', '0', '', NULL, NULL, '', '2013-08-17 21:56:00', '2013-08-26 21:56:48', 5),
(105, 'I', 'M', '0', '', NULL, NULL, '', '2013-08-16 21:59:00', '2013-08-26 22:00:14', 5),
(106, '', 'H', '0', '', NULL, NULL, '', '2013-08-15 21:59:00', '2013-09-14 00:35:12', 5),
(107, '', 'M', '0', '', NULL, NULL, '', '2013-08-14 22:01:00', '2013-09-13 19:24:42', 5),
(108, 'I', '', '4', '', NULL, NULL, '', '2013-08-13 22:03:00', '2013-08-26 22:03:44', 5),
(109, 'I', '', '4', '', NULL, NULL, '', '2013-08-12 22:05:00', '2013-08-26 22:05:41', 5),
(110, '', '', '4', '', NULL, NULL, '', '2013-08-11 22:06:00', '2013-08-26 22:06:52', 5),
(111, '', '', '2', '', NULL, NULL, '', '2013-08-10 22:07:00', '2013-09-14 00:27:43', 5),
(262, '', 'H', '0', '', NULL, NULL, '', '2013-10-19 20:35:00', '2013-10-19 20:35:53', 5),
(119, '', '', '0', '', NULL, NULL, NULL, '2013-08-27 15:15:00', '2013-08-27 15:16:45', 18),
(176, '', '', '4', '', NULL, NULL, '2x', '2013-09-07 11:57:00', '2013-10-21 22:36:31', 5),
(180, '', '', '10WL', '', NULL, NULL, 'X3', '2013-09-10 07:52:00', '2013-09-10 07:53:21', 32),
(155, '', '', '10', 'K', NULL, NULL, '2x', '2013-09-02 23:36:00', '2013-10-21 22:35:13', 5),
(186, 'I', '', '0', '', NULL, NULL, 'AD', '2013-09-09 18:40:00', '2013-09-10 18:40:54', 5),
(152, '', '', '0', '', NULL, NULL, 'AD', '2013-08-30 23:32:00', '2013-09-03 23:33:13', 5),
(153, '', '', '6', 'K', NULL, NULL, '2x', '2013-08-31 23:33:00', '2013-10-21 08:11:36', 5),
(141, '', '', '6', 'K', NULL, NULL, '2x', '2013-08-29 23:44:00', '2013-10-21 22:34:49', 5),
(156, '', '', '10', 'L', NULL, NULL, '3x', '2013-09-03 23:37:00', '2013-10-21 22:35:31', 5),
(158, '', '', '8', 'C/K', NULL, NULL, '2x', '2013-09-04 23:51:00', '2013-10-21 22:35:49', 5),
(159, '', '', '10', 'L', NULL, NULL, '1x', '2013-09-05 23:51:00', '2013-10-21 22:36:04', 5),
(160, '', '', '0', '', NULL, NULL, '', '2013-09-06 13:43:00', '2013-09-06 13:43:03', 22),
(172, '', '', '0', '', NULL, NULL, '', '2013-09-07 06:45:00', '2013-09-07 06:45:35', 23),
(177, 'I', '', '0', '', NULL, NULL, 'AD', '2013-09-08 21:28:00', '2013-09-08 21:29:08', 5),
(187, '', 'H', '0', '', NULL, NULL, '', '2013-09-11 14:25:00', '2013-09-11 14:25:46', 6),
(188, '', '', '0', '', NULL, NULL, '', '2013-09-11 14:26:00', '2013-09-11 14:26:14', 6),
(194, 'I', '', '0', '', NULL, NULL, '', '2013-09-12 08:18:00', '2013-09-13 08:19:03', 6),
(190, '', 'H', '0', '', NULL, NULL, '', '2013-09-11 14:27:00', '2013-09-11 14:27:38', 6),
(191, '', '', '4', '', NULL, NULL, '1x', '2013-09-11 22:13:00', '2013-10-21 22:36:49', 5),
(192, 'I', '', '0', '', NULL, NULL, 'AD', '2013-09-10 22:14:00', '2013-09-12 23:18:24', 5),
(193, 'I', 'M', '0', '', NULL, NULL, '', '2013-09-12 23:16:00', '2013-10-18 18:50:53', 5),
(195, '', '', '0', '', NULL, NULL, '', '2013-08-22 08:19:00', '2013-09-13 08:20:07', 6),
(196, '', 'H', '0', '', NULL, NULL, '', '2013-09-13 22:38:00', '2013-09-13 22:38:26', 6),
(197, '', 'H', '0', '', NULL, NULL, '', '2013-09-13 22:38:00', '2013-09-13 22:38:50', 6),
(198, '', 'M', '0', '', NULL, NULL, '', '2013-09-13 22:39:00', '2013-09-13 22:39:20', 6),
(199, '', 'H', '0', '', NULL, NULL, '', '2013-09-13 22:56:00', '2013-10-18 18:50:28', 5),
(200, '', '', '0', '', NULL, NULL, '', '2013-09-14 01:08:00', '2013-09-14 01:08:53', 37),
(201, '', 'L', '10WL', '', NULL, NULL, '', '2013-09-14 01:23:00', '2013-09-14 01:23:45', 6),
(259, '', '', '2W', '', NULL, NULL, 'AD', '2013-10-18 22:10:00', '2013-10-18 22:10:56', 33),
(258, '', '', '2', '', NULL, NULL, '2x', '2013-10-18 22:09:00', '2013-10-18 22:10:11', 33),
(205, '', '', '2', '', NULL, NULL, '1x', '2013-08-09 12:25:00', '2013-10-21 08:10:48', 5),
(206, '', '', '10SL', '', NULL, NULL, '1x', '2013-08-08 12:27:00', '2013-10-19 10:42:03', 5),
(207, '', '', '4', '', NULL, NULL, '1x', '2013-08-07 12:29:00', '2013-10-18 22:00:06', 5),
(208, '', 'M', '0', '', NULL, NULL, '', '2013-09-14 23:09:00', '2013-10-18 18:50:17', 5),
(209, '', 'L', '0', '', NULL, NULL, '', '2013-09-15 18:11:00', '2013-09-15 18:11:43', 5),
(210, '', '', '0', '', NULL, NULL, 'AD', '2013-09-16 23:32:00', '2013-09-16 23:32:20', 5),
(211, '', '', '0', '', NULL, NULL, 'AD', '2013-09-17 00:04:00', '2013-09-18 00:05:05', 5),
(212, '', '', '0', '', NULL, NULL, 'AD', '2013-09-18 17:01:00', '2013-09-19 17:02:10', 5),
(213, '', '', '0', '', NULL, NULL, 'AD', '2013-09-19 23:52:00', '2013-09-21 23:52:20', 5),
(214, '', '', '0', '', NULL, NULL, 'AD', '2013-09-20 23:52:00', '2013-09-21 23:52:38', 5),
(215, '', '', '0', '', NULL, NULL, 'AD', '2013-09-21 14:22:00', '2013-09-22 14:23:01', 5),
(216, 'I', '', '0', '', NULL, NULL, 'AD', '2013-09-22 14:23:00', '2013-09-22 14:23:17', 5),
(217, '', '', '0', '', NULL, NULL, 'AD', '2013-09-23 09:03:00', '2013-09-24 09:04:11', 5),
(218, '', '', '4', '', NULL, NULL, '1x', '2013-09-24 22:59:00', '2013-10-21 22:40:23', 5),
(219, '', '', '4', '', NULL, NULL, '2x', '2013-09-25 22:23:00', '2013-10-21 22:40:04', 5),
(220, '', '', '0', '', NULL, NULL, 'AD', '2013-09-26 21:03:00', '2013-09-26 21:03:24', 5),
(221, '', '', '0', '', NULL, NULL, 'AD', '2013-09-27 15:02:00', '2013-09-28 15:02:35', 5),
(222, 'I', '', '0', '', NULL, NULL, 'AD', '2013-09-28 17:54:00', '2013-09-28 20:48:37', 5),
(223, 'I', '', '0', '', NULL, NULL, 'AD', '2013-09-29 16:10:00', '2013-09-30 16:12:05', 5),
(224, '', '', '6', 'C/K', NULL, NULL, '1x', '2013-08-06 16:15:00', '2013-10-18 21:59:51', 5),
(225, '', '', '10', 'C/K', NULL, NULL, '1x', '2013-08-05 16:16:00', '2013-10-18 21:59:38', 5),
(226, '', '', '8', 'K', NULL, NULL, '1x', '2013-08-04 16:18:00', '2013-10-18 21:58:58', 5),
(227, '', '', '10WL', '', NULL, NULL, '1x', '2013-08-03 16:25:00', '2013-10-18 21:58:48', 5),
(228, '', '', '0', '', NULL, NULL, 'AD', '2013-09-30 20:27:00', '2013-09-30 20:27:48', 5),
(229, '', '', '6', 'K', NULL, NULL, '2x', '2013-10-01 22:30:00', '2013-10-21 22:39:41', 5),
(230, '', '', '6', 'K', NULL, NULL, '1x', '2013-10-02 23:03:00', '2013-10-21 22:39:13', 5),
(231, '', '', '6', 'K', NULL, NULL, '2x', '2013-10-03 21:11:00', '2013-10-21 22:38:57', 5),
(232, '', '', '4', '', NULL, NULL, '3x', '2013-10-04 23:10:00', '2013-10-21 22:38:38', 5),
(233, '', '', '10', 'C/K', NULL, NULL, '1x', '2013-10-05 19:50:00', '2013-10-21 22:38:24', 5),
(234, '', '', '10', 'C/K', NULL, NULL, '1x', '2013-10-06 22:36:00', '2013-10-21 22:38:10', 5),
(235, '', '', '10', 'K', NULL, NULL, '2x', '2013-10-07 10:35:00', '2013-10-21 22:37:50', 5),
(236, '', '', '10', 'K', NULL, NULL, '2x', '2013-10-08 22:15:00', '2013-10-21 22:37:36', 5),
(237, '', '', '4', '', NULL, NULL, '3x', '2013-10-09 22:10:00', '2013-10-21 22:37:14', 5),
(238, '', '', '0', '', NULL, NULL, 'AD', '2013-10-10 22:12:00', '2013-10-10 22:12:54', 5),
(239, '', '', '0', '', NULL, NULL, 'AD', '2013-10-11 17:20:00', '2013-10-11 17:20:49', 5),
(240, '', '', '0', '', NULL, NULL, 'AD', '2013-10-12 20:45:00', '2013-10-13 20:45:33', 5),
(241, 'I', '', '0', '', NULL, NULL, 'AD', '2013-10-13 20:45:00', '2013-10-13 20:46:03', 5),
(242, '', '', '0', '', NULL, NULL, 'AD', '2013-10-14 22:24:00', '2013-10-14 22:24:44', 5),
(243, 'I', '', '0', '', NULL, NULL, 'AD', '2013-10-15 07:06:00', '2013-10-16 07:06:38', 5),
(244, '', '', '0', '', NULL, NULL, 'AD', '2013-10-16 21:44:00', '2013-10-16 21:44:39', 5),
(245, '', '', '0', '', NULL, NULL, 'AD', '2013-10-17 16:31:00', '2013-10-17 16:32:10', 5),
(257, '', '', '2', '', NULL, NULL, '2x', '2013-10-18 22:08:00', '2013-10-18 22:09:22', 33),
(256, '', '', '0', '', NULL, NULL, 'AD', '2013-10-18 22:08:00', '2013-10-18 22:08:49', 33),
(248, '', 'M', '0', '', NULL, NULL, '', '2013-10-18 11:45:00', '2013-10-18 18:51:02', 5),
(255, 'I', '', '0', '', NULL, NULL, 'AD', '2013-10-18 22:08:00', '2013-10-18 22:08:23', 33),
(250, 'I', 'VL', '8', '', NULL, NULL, 'AD', '2013-10-18 22:02:00', '2013-10-18 22:03:02', 33),
(251, 'I', 'M', '0', '', NULL, NULL, 'AD', '2013-10-18 22:03:00', '2013-10-18 22:06:33', 33),
(252, '', 'VL', '6', 'B', NULL, NULL, '3x', '2013-10-18 22:03:00', '2013-10-18 22:07:28', 33),
(253, 'I', 'L', '2W', '', NULL, NULL, '2x', '2013-10-18 22:04:00', '2013-10-18 22:07:53', 33),
(254, '', '', '2', '', NULL, NULL, '1x', '2013-10-18 22:05:00', '2013-10-18 22:05:35', 33),
(265, '', 'L', '0', '', NULL, NULL, 'AD', '2013-10-21 14:24:00', '2013-10-21 14:24:30', 5),
(266, 'I', 'VL', '0', '', NULL, NULL, 'AD', '2013-10-22 23:26:00', '2013-10-22 23:26:49', 5);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `all_day` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_type_id`, `title`, `details`, `start`, `end`, `all_day`, `status`, `active`, `created`, `modified`) VALUES
(1, 0, 'Meh!', 'Total meh.', '2013-08-28 08:13:00', '2013-08-28 08:13:00', 0, 'Scheduled', 1, '2013-08-28', '2013-08-28'),
(2, 1, 'asgasd', '', '2013-08-28 08:17:00', '2013-08-28 08:17:00', 1, 'Scheduled', 1, '2013-08-28', '2013-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE IF NOT EXISTS `event_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `color`) VALUES
(1, 'Meh', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'Bonsaikazui', 'abd031c87a2ba2150edec122119da35864a78b6f', 'admin', '2013-08-13 12:09:02', '2013-08-13 12:09:02'),
(3, 'Amueller', 'abd031c87a2ba2150edec122119da35864a78b6f', 'admin', '2013-08-14 14:01:57', '2013-08-14 14:01:57'),
(4, 'Andrew', 'abd031c87a2ba2150edec122119da35864a78b6f', 'admin', '2013-08-14 20:35:45', '2013-08-14 20:35:45'),
(5, 'Aubs', '13f1a2baad8de3c35a55e9e5af98058e65422422', 'admin', '2013-08-14 21:03:12', '2013-08-14 21:03:12'),
(6, 'a', 'e6b9c98c9ad4d3199d203a8cc95a8ac5da3192c8', NULL, '2013-08-16 13:14:00', '2013-08-16 13:14:00'),
(38, 'as', 'e6b9c98c9ad4d3199d203a8cc95a8ac5da3192c8', NULL, '2013-10-02 16:23:00', '2013-10-02 16:23:00'),
(33, 'Demo', 'e059be55c23fe2627a24b6eb9c445af8c8c0fca7', NULL, '2013-09-10 12:07:04', '2013-09-10 12:07:04');