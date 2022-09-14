-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2022 at 02:28 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tharunat_vid_editor`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` longtext,
  `bname` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` longtext,
  `address2` longtext,
  `city` varchar(255) DEFAULT 'city',
  `state` varchar(255) DEFAULT 'Andhra Pradesh',
  `country` varchar(255) NOT NULL DEFAULT 'India',
  `pincode` int(11) DEFAULT NULL,
  `gst` longtext,
  `pan` varchar(255) DEFAULT NULL,
  `vendor_code` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Signed',
  `temp` longtext,
  `tts_plan` varchar(255) NOT NULL DEFAULT 'Free',
  `tts_date_start` date DEFAULT NULL,
  `tts_date_end` date DEFAULT NULL,
  `tts_std_counter` int(11) NOT NULL DEFAULT '0',
  `tts_wvnet_counter` int(11) NOT NULL DEFAULT '0',
  `tts_all_counter` int(11) NOT NULL DEFAULT '0',
  `tts_all_sum` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `bname`, `mobile`, `whatsapp`, `address`, `address2`, `city`, `state`, `country`, `pincode`, `gst`, `pan`, `vendor_code`, `date`, `status`, `temp`, `tts_plan`, `tts_date_start`, `tts_date_end`, `tts_std_counter`, `tts_wvnet_counter`, `tts_all_counter`, `tts_all_sum`) VALUES
(1, 'Studio_1', NULL, 'studio1@vdofy.com', '8d158c0d8e49c5be1806e3e27abee064', 'Vdofy', NULL, NULL, NULL, NULL, 'city', 'Andhra Pradesh', 'India', NULL, NULL, NULL, NULL, NULL, 'Signed', NULL, 'Free', NULL, NULL, 0, 0, 0, 0),
(46, 'Harish', 'K', 'harry.kolliparat@gmail.com', '70ede688a4ff6f69af05559c94e5d156', 'AppGrep Tech', '9177914415', '9177914415', 'VMR Road, Ramalingeswara Nagar', 'Vijayawada', '', 'Andhra Pradesh', 'India', 520013, '85615461546', 'ANYPH8821P', '3693', 'Dec-21,2020', 'Signed', NULL, 'Free', '2021-09-01', '2021-09-02', 98, 16, 124, 177);

-- --------------------------------------------------------

--
-- Table structure for table `video_maker`
--

CREATE TABLE `video_maker` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'The Project',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker`
--

INSERT INTO `video_maker` (`id`, `u_id`, `title`, `date`) VALUES
(1, 46, 'Arey Entra Idi', '2021-09-20'),
(9, 46, 'StickMan\'s Life', '2022-06-14'),
(10, 1, 'The Project', '2022-07-21'),
(11, 1, 'The Project', '2022-07-27'),
(12, 1, 'somek', '2022-07-27'),
(13, 1, 'Rupam-1', '2022-09-02'),
(14, 46, 'The Project', '2022-09-09'),
(15, 1, 'Rupam-2', '2022-09-10'),
(16, 1, 'The Project', '2022-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_audios`
--

CREATE TABLE `video_maker_audios` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `v_m_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_audios`
--

INSERT INTO `video_maker_audios` (`id`, `u_id`, `v_m_id`, `title`, `date`) VALUES
(35, 46, 1, 'file_example_MP3_700KB.mp3', '2021-09-23'),
(36, 46, 1, 'Kalimba.mp3', '2021-10-29'),
(37, 46, 9, '27sec_test_audio.mp3', '2022-06-22'),
(38, 1, 10, '27sec_test_audio.mp3', '2022-07-21'),
(39, 46, 14, 'sample_audio.mp3', '2022-09-09'),
(40, 46, 14, 'count10.wav', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_backgrounds`
--

CREATE TABLE `video_maker_backgrounds` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `v_m_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_backgrounds`
--

INSERT INTO `video_maker_backgrounds` (`id`, `u_id`, `v_m_id`, `title`, `date`) VALUES
(1, 46, 1, 'wp2930878-iron-man-suits-hd-wallpaper.jpg', '2021-09-22'),
(2, 46, 1, 'talk-is-cheap-show-me-the-code.-linus-torvalds.jpg', '2021-09-22'),
(3, 46, 1, 'OXMRO1s.jpg', '2022-04-13'),
(4, 46, 8, '2089151.jpg', '2022-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_draggable_layers`
--

CREATE TABLE `video_maker_draggable_layers` (
  `id` int(11) NOT NULL,
  `main_layer_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `layer` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `layer_count` int(11) DEFAULT NULL,
  `layer_length` varchar(255) NOT NULL DEFAULT '0',
  `start_time_sec` varchar(255) DEFAULT '0',
  `end_time_sec` varchar(255) DEFAULT '0',
  `volume` varchar(255) DEFAULT '1',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_maker_draggable_layers`
--

INSERT INTO `video_maker_draggable_layers` (`id`, `main_layer_id`, `p_id`, `u_id`, `layer`, `title`, `layer_count`, `layer_length`, `start_time_sec`, `end_time_sec`, `volume`, `date`) VALUES
(61, 335, 9, 46, 'image', 'Running_2', 6, '0', '0', '0', '1', '2022-06-14 18:23:20'),
(89, 363, 1, 46, 'font', 'Text 2', 10, '0', '0', '0', '1', '2022-06-22 18:53:04'),
(87, 361, 1, 46, 'font', 'Text 1', 8, '0', '0', '0', '1', '2022-06-22 18:52:47'),
(90, 364, 1, 46, 'font', 'Text 3', 11, '0', '0', '0', '1', '2022-06-22 19:02:05'),
(64, 338, 9, 46, 'image', 'Thinking', 7, '0', '0', '0', '1', '2022-06-15 11:44:59'),
(63, 337, 9, 46, 'image', 'Building', 6, '0', '0', '0', '1', '2022-06-15 11:35:33'),
(62, 336, 9, 46, 'image', 'Main_background', 7, '0', '0', '0', '1', '2022-06-14 18:24:19'),
(60, 334, 9, 46, 'font', 'Hi text', 5, '0', '0', '0', '1', '2022-06-14 18:19:57'),
(57, 331, 9, 46, 'image', 'Hi', 3, '0', '0', '0', '1', '2022-06-14 17:50:22'),
(58, 332, 9, 46, 'image', 'Running - 1', 4, '0', '0', '0', '1', '2022-06-14 17:51:30'),
(65, 339, 9, 46, 'image', 'elevator', 8, '0', '0', '0', '1', '2022-06-15 11:46:36'),
(66, 340, 9, 46, 'image', 'Running_3', 9, '0', '0', '0', '1', '2022-06-15 11:57:30'),
(67, 341, 9, 46, 'image', 'falling', 10, '0', '0', '0', '1', '2022-06-15 12:24:40'),
(70, 344, 9, 46, 'image', 'crashing', 12, '0', '0', '0', '1', '2022-06-15 12:35:08'),
(71, 345, 9, 46, 'image', 'ambulace_1', 13, '0', '0', '0', '1', '2022-06-15 12:49:18'),
(74, 348, 9, 46, 'image', 'ambulance_2', 16, '0', '0', '0', '1', '2022-06-15 13:34:46'),
(73, 347, 9, 46, 'font', 'crap', 15, '0', '0', '0', '1', '2022-06-15 13:11:02'),
(91, 365, 1, 46, 'image', 'TV', 12, '0', '0', '0', '1', '2022-06-22 19:06:26'),
(156, 429, 1, 46, 'image', 'Image Layer-1', 1, '0', '0', '0', '1', '2022-07-12 12:11:44'),
(157, 430, 1, 46, 'background', 'Background Layer-6', 6, '0', '0', '0', '1', '2022-07-12 12:51:28'),
(158, 431, 1, 46, 'image', 'Image Layer-1', 1, '0', '0', '0', '1', '2022-07-13 12:19:58'),
(159, 432, 1, 46, 'image', 'Image Layer-1', 1, '0', '0', '0', '1', '2022-07-13 12:20:45'),
(160, 433, 1, 46, 'image', 'Image Layer-1', 1, '0', '0', '0', '1', '2022-07-13 12:29:12'),
(189, 462, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 15:45:06'),
(162, 435, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 10:19:03'),
(190, 463, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 15:45:06'),
(164, 437, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 10:38:28'),
(165, 438, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 12:49:27'),
(166, 439, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 12:49:27'),
(169, 442, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 12:56:33'),
(168, 441, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 12:49:27'),
(170, 443, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 12:56:33'),
(171, 444, 10, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-21 12:56:33'),
(172, 445, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 12:56:33'),
(173, 446, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 13:01:07'),
(174, 447, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 13:01:07'),
(175, 448, 10, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-21 13:01:07'),
(176, 449, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 13:01:07'),
(177, 450, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 13:02:34'),
(178, 451, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 13:02:34'),
(179, 452, 10, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-21 13:02:34'),
(180, 453, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 13:02:34'),
(181, 454, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 13:07:45'),
(182, 455, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 13:07:45'),
(183, 456, 10, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-21 13:07:45'),
(184, 457, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 13:07:45'),
(185, 458, 10, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-21 13:08:26'),
(186, 459, 10, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-21 13:08:26'),
(187, 460, 10, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-21 13:08:26'),
(188, 461, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 13:08:26'),
(191, 464, 10, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-21 15:45:06'),
(192, 465, 10, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-21 15:45:06'),
(193, 466, 3, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 11:36:38'),
(194, 467, 3, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 11:36:38'),
(195, 468, 3, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-27 11:36:38'),
(196, 469, 3, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 11:36:38'),
(197, 470, 3, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-27 11:36:38'),
(198, 471, 3, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 11:36:38'),
(199, 472, 3, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 11:38:35'),
(200, 473, 3, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 11:38:35'),
(201, 474, 3, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-27 11:38:35'),
(202, 475, 3, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 11:38:35'),
(203, 476, 3, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-27 11:38:35'),
(204, 477, 3, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 11:38:35'),
(240, 513, 12, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 12:11:22'),
(228, 501, 11, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 11:46:05'),
(237, 510, 12, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-27 12:11:22'),
(238, 511, 12, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 12:11:22'),
(231, 504, 12, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-27 12:09:48'),
(232, 505, 12, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 12:09:48'),
(233, 506, 12, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-27 12:09:48'),
(234, 507, 12, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 12:09:48'),
(239, 512, 12, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-27 12:11:22'),
(227, 500, 11, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '1', '2022-07-27 11:46:05'),
(226, 499, 11, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 11:46:05'),
(225, 498, 11, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '1', '2022-07-27 11:46:05'),
(224, 497, 11, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '1', '2022-07-27 11:46:05'),
(223, 496, 11, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '1', '2022-07-27 11:46:05'),
(270, 543, 1, 46, 'image', 'meh', 6, '0', '0', '', '1', '2022-09-01 11:13:15'),
(312, 585, 14, 46, 'BGM', 'BGM Layer-0', 0, '2484', '4', '16', '1', '2022-09-13 21:34:12'),
(271, 544, 1, 46, 'image', 'spects', 7, '0', '0', '', '1', '2022-09-01 11:13:23'),
(272, 545, 1, 46, 'image', 'fire', 8, '0', '0', '', '1', '2022-09-01 11:13:27'),
(273, 546, 1, 46, 'image', 'meh', 1, '0', '0', '', '1', '2022-09-01 11:20:35'),
(274, 547, 1, 46, 'image', 'fire', 2, '0', '0', '', '1', '2022-09-01 11:20:40'),
(275, 548, 1, 46, 'image', 'spects', 3, '0', '0', '', '1', '2022-09-01 11:20:42'),
(288, 561, 14, 46, 'image', 'Image Layer-1', 1, '0', '0', '', '1', '2022-09-09 17:56:56'),
(304, 577, 13, 1, 'shape', 'Yello bo', 3, '0', '0', '', '1', '2022-09-10 18:17:08'),
(305, 578, 15, 1, 'image', 'Image Layer-1', 1, '0', '0', '', '1', '2022-09-10 18:32:37'),
(302, 575, 13, 1, 'image', 'BG Image', 1, '0', '0', '', '1', '2022-09-10 18:15:57'),
(303, 576, 13, 1, 'image', 'Logo', 2, '0', '0', '', '1', '2022-09-10 18:16:53'),
(289, 562, 14, 46, 'image', 'Image Layer-2', 2, '0', '0', '', '1', '2022-09-09 17:56:57'),
(290, 563, 14, 46, 'image', 'Image Layer-3', 3, '0', '0', '', '1', '2022-09-09 19:15:53'),
(293, 566, 14, 46, 'BGM', 'BGM Layer-0', 0, 'NaN', '0', '5', '1', '2022-09-09 20:17:21'),
(306, 579, 15, 1, 'font', 'Font Layer-2', 2, '0', '0', '', '1', '2022-09-10 18:39:44'),
(309, 582, 15, 1, 'shape', 'Shape Layer-5', 5, '0', '0', '', '1', '2022-09-10 18:44:38'),
(310, 583, 15, 1, 'shape', 'Shape Layer-6', 6, '0', '0', '', '1', '2022-09-10 18:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_draggable_layers_templates`
--

CREATE TABLE `video_maker_draggable_layers_templates` (
  `id` int(11) NOT NULL,
  `main_layer_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `layer` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `layer_count` int(11) DEFAULT NULL,
  `layer_length` varchar(255) NOT NULL DEFAULT '0',
  `start_time_sec` varchar(255) DEFAULT '0',
  `end_time_sec` varchar(255) DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_maker_draggable_layers_templates`
--

INSERT INTO `video_maker_draggable_layers_templates` (`id`, `main_layer_id`, `p_id`, `u_id`, `layer`, `title`, `layer_count`, `layer_length`, `start_time_sec`, `end_time_sec`, `date`) VALUES
(19, 19, 4, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '2022-07-27 12:05:21'),
(18, 18, 4, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '2022-07-27 12:05:21'),
(17, 17, 4, 1, 'image', 'Coffee Message', 3, '0', '0', '0', '2022-07-27 12:05:21'),
(16, 16, 4, 1, 'image', 'IM-B&W', 2, '0', '0', '0', '2022-07-27 12:05:21'),
(15, 15, 4, 1, 'image', 'IM-fullcover', 1, '0', '0', '0', '2022-07-27 12:05:21'),
(20, 20, 4, 1, 'BGM', 'BGM Layer-0', 0, '828', '3', '7', '2022-07-27 12:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_fonts`
--

CREATE TABLE `video_maker_fonts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `font` longtext COLLATE utf8_unicode_ci,
  `file_name` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_fonts`
--

INSERT INTO `video_maker_fonts` (`id`, `name`, `font`, `file_name`) VALUES
(1, 'Conduit ITC', 'conduit-itc.otf', 'conduit-itc.otf'),
(2, 'Friends', 'friends-fonts.ttf', 'friends-fonts.ttf'),
(3, 'Sunshine', 'hello_sunshine.ttf', 'hello_sunshine.ttf'),
(4, 'Ricky and Morty', 'Ricky-and-Morty-font.ttf', 'Ricky-and-Morty-font.ttf'),
(5, 'Sweetly-Broken', 'sweetly-broken.ttf', 'sweetly-broken.ttf');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_images`
--

CREATE TABLE `video_maker_images` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `v_m_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_images`
--

INSERT INTO `video_maker_images` (`id`, `u_id`, `v_m_id`, `title`, `date`) VALUES
(1, 46, 1, 'IM-Screen Wallpaper.jpg', '2021-09-22'),
(2, 46, 1, 'IM-Chrome Wallpaper.jpg', '2021-09-22'),
(3, 46, 3, 'IM-Chrome Wallpaper.jpg', '2021-09-25'),
(4, 46, 3, 'IM-Screen Wallpaper.jpg', '2021-09-25'),
(5, 46, 1, '16330699786156ab99b0c44.png', '2021-10-01'),
(6, 46, 1, 'pre_loader.gif', '2021-10-01'),
(7, 46, 1, 'meh.gif', '2021-10-01'),
(8, 46, 1, 'lit.gif', '2021-10-01'),
(9, 46, 1, 'fav.png', '2021-10-01'),
(10, 46, 1, 'lit-color.png', '2021-10-01'),
(11, 46, 1, 'lit-image-gray.png', '2021-10-01'),
(12, 46, 1, 'lit-image.png', '2021-10-01'),
(13, 46, 1, 'lit-color.png', '2021-10-01'),
(14, 46, 1, 'logo-mini-gray.png', '2021-10-01'),
(15, 46, 1, 'meh-color.png', '2021-10-01'),
(16, 46, 1, '16330874626156efe64bee0.png', '2021-10-01'),
(17, 46, 1, '16330876476156f09f0cbed.png', '2021-10-01'),
(18, 46, 1, '1633173924615841a406c0f.png', '2021-10-02'),
(19, 46, 1, '16331743526158435056f3a.png', '2021-10-02'),
(20, 46, 1, '1633412627615be612e1340.png', '2021-10-05'),
(21, 46, 1, '163532245561790a57529dc.png', '2021-10-27'),
(22, 46, 1, '1636531277618b7c4cb806b.png', '2021-11-10'),
(23, 46, 1, '1636531368618b7ca7b58aa.png', '2021-11-10'),
(24, 46, 1, '164205375961dfc07f486e2.png', '2022-01-13'),
(25, 46, 1, '164239898561e5050945f30.png', '2022-01-17'),
(26, 46, 1, '164240024761e509f6877fc.png', '2022-01-17'),
(27, 46, 1, '164240039261e50a886d178.png', '2022-01-17'),
(28, 46, 1, '164240197061e510b191901.png', '2022-01-17'),
(29, 46, 1, '164240326661e515c17dadd.png', '2022-01-17'),
(30, 46, 1, '164240333561e5160689dca.png', '2022-01-17'),
(31, 715, 5, 'screen.jpg', '2022-03-17'),
(32, 715, 5, 'Amazon Banner 02.jpg', '2022-03-18'),
(33, 46, 1, 'OXMRO1s.jpg', '2022-04-13'),
(34, 46, 8, 'logo.png', '2022-06-11'),
(35, 46, 8, '3D.PNG', '2022-06-11'),
(36, 46, 8, 'lipstick.png', '2022-06-11'),
(37, 46, 9, 'all_buildings.png', '2022-06-14'),
(38, 46, 9, 'building.png', '2022-06-14'),
(39, 46, 9, 'crashing.gif', '2022-06-14'),
(40, 46, 9, 'falling.gif', '2022-06-14'),
(41, 46, 9, 'getting_up.gif', '2022-06-14'),
(42, 46, 9, 'hi.gif', '2022-06-14'),
(44, 46, 9, 'lift.gif', '2022-06-14'),
(45, 46, 9, 'running.gif', '2022-06-14'),
(46, 46, 9, 'thinking.gif', '2022-06-14'),
(47, 46, 9, 'ambulance.gif', '2022-06-15'),
(48, 46, 1, 'tv.png', '2022-06-22'),
(49, 1, 10, 'iron-man-wallpaper-29-610x343.jpg', '2022-07-21'),
(50, 1, 10, 'coffee_mug.png', '2022-07-21'),
(51, 1, 13, 'images.jpg', '2022-09-02'),
(52, 1, 13, 'images.jpg', '2022-09-02'),
(53, 1, 13, 'pngtree-headphones-png-image_2452681.jpg', '2022-09-02'),
(54, 1, 13, 'hd-1.jpg', '2022-09-02'),
(55, 46, 14, '01.png', '2022-09-09'),
(56, 46, 14, '2.png', '2022-09-09'),
(57, 46, 14, '01.png', '2022-09-09'),
(58, 46, 14, '2.png', '2022-09-09'),
(59, 1, 13, 'logo-2.png', '2022-09-10'),
(60, 1, 13, 'logo-2.png', '2022-09-10'),
(61, 1, 13, 'images.jfif', '2022-09-10'),
(62, 1, 13, 'download.jfif', '2022-09-10'),
(63, 1, 13, 'VDOfy LOGO PNG-white.png', '2022-09-10'),
(64, 1, 15, 'VDOfy LOGO PNG-white.png', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_layers`
--

CREATE TABLE `video_maker_layers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `scene_id` int(11) DEFAULT NULL,
  `layer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `layer_id` int(11) DEFAULT NULL,
  `layer_count` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_layers`
--

INSERT INTO `video_maker_layers` (`id`, `title`, `p_id`, `u_id`, `scene_id`, `layer`, `layer_id`, `layer_count`, `content`, `date`) VALUES
(331, 'Hi', 9, 46, 2, 'image', 42, 2, 'Preview', '2022-06-14 17:50:21'),
(332, 'Running - 1', 9, 46, 2, 'image', 45, 3, 'Preview', '2022-06-14 17:51:29'),
(334, 'Hi text', 9, 46, 2, 'font', 3, 4, 'Hi . .', '2022-06-14 18:19:57'),
(335, 'Running_2', 9, 46, 2, 'image', 45, 5, 'Preview', '2022-06-14 18:23:19'),
(336, 'Main_background', 9, 46, 2, 'image', 37, 1, 'Preview', '2022-06-14 18:24:17'),
(337, 'Building', 9, 46, 2, 'image', 38, 7, 'Preview', '2022-06-15 11:35:29'),
(338, 'Thinking', 9, 46, 2, 'image', 46, 6, 'Preview', '2022-06-15 11:44:59'),
(339, 'elevator', 9, 46, 2, 'image', 44, 8, 'Preview', '2022-06-15 11:46:35'),
(340, 'Running_3', 9, 46, 2, 'image', 45, 9, 'Preview', '2022-06-15 11:57:29'),
(341, 'falling', 9, 46, 2, 'image', 40, 10, 'Preview', '2022-06-15 12:24:39'),
(344, 'crashing', 9, 46, 2, 'image', 39, 12, 'Preview', '2022-06-15 12:35:08'),
(345, 'ambulace_1', 9, 46, 2, 'image', 47, 13, 'Preview', '2022-06-15 12:49:16'),
(347, 'crap', 9, 46, 2, 'font', 4, 15, 'Oh. Noo', '2022-06-15 13:11:01'),
(348, 'ambulance_2', 9, 46, 2, 'image', 47, 16, 'Preview', '2022-06-15 13:34:45'),
(361, 'Text 1', 1, 46, 1, 'font', 2, 2, 'This TV looks great.', '2022-06-22 18:52:47'),
(363, 'Text 2', 1, 46, 1, 'font', 2, 3, 'This TV is even cheap too.', '2022-06-22 18:53:03'),
(364, 'Text 3', 1, 46, 1, 'font', 4, 4, 'You are going to buy this TV', '2022-06-22 19:02:05'),
(365, 'TV', 1, 46, 1, 'image', 48, 5, 'Preview', '2022-06-22 19:06:24'),
(429, 'Image Layer-1', 1, 46, 2, 'image', 2, 1, 'Preview', '2022-07-12 12:11:44'),
(430, 'Background Layer-6', 1, 46, 1, 'background', 3, 1, 'Preview', '2022-07-12 12:51:28'),
(431, 'Image Layer-1', 1, 46, 6, 'image', 1, 1, 'Preview', '2022-07-13 12:19:58'),
(432, 'Image Layer-1', 1, 46, 5, 'image', 2, 1, 'Preview', '2022-07-13 12:20:45'),
(433, 'Image Layer-1', 1, 46, 8, 'image', 2, 1, 'Preview', '2022-07-13 12:29:12'),
(435, 'IM-B&W', 10, 1, 14, 'image', 49, 2, 'Preview', '2022-07-21 10:19:03'),
(437, 'BGM Layer-0', 10, 1, 14, 'BGM', 38, 0, 'Preview', '2022-07-21 10:38:28'),
(438, 'IM-fullcover', 10, 1, 15, 'image', 49, 1, 'Preview', '2022-07-21 12:49:27'),
(439, 'IM-B&W', 10, 1, 15, 'image', 49, 2, 'Preview', '2022-07-21 12:49:27'),
(441, 'BGM Layer-0', 10, 1, 15, 'BGM', 38, 0, 'Preview', '2022-07-21 12:49:27'),
(442, 'IM-fullcover', 10, 1, 18, 'image', 49, 1, 'Preview', '2022-07-21 12:56:33'),
(443, 'IM-B&W', 10, 1, 18, 'image', 49, 2, 'Preview', '2022-07-21 12:56:33'),
(444, 'Coffee Message', 10, 1, 18, 'image', 50, 3, 'Preview', '2022-07-21 12:56:33'),
(445, 'BGM Layer-0', 10, 1, 18, 'BGM', 38, 0, 'Preview', '2022-07-21 12:56:33'),
(446, 'IM-fullcover', 10, 1, 19, 'image', 49, 1, 'Preview', '2022-07-21 13:01:07'),
(447, 'IM-B&W', 10, 1, 19, 'image', 49, 2, 'Preview', '2022-07-21 13:01:07'),
(448, 'Coffee Message', 10, 1, 19, 'image', 50, 3, 'Preview', '2022-07-21 13:01:07'),
(449, 'BGM Layer-0', 10, 1, 19, 'BGM', 38, 0, 'Preview', '2022-07-21 13:01:07'),
(450, 'IM-fullcover', 10, 1, 20, 'image', 49, 1, 'Preview', '2022-07-21 13:02:34'),
(451, 'IM-B&W', 10, 1, 20, 'image', 49, 2, 'Preview', '2022-07-21 13:02:34'),
(452, 'Coffee Message', 10, 1, 20, 'image', 50, 3, 'Preview', '2022-07-21 13:02:34'),
(453, 'BGM Layer-0', 10, 1, 20, 'BGM', 38, 0, 'Preview', '2022-07-21 13:02:34'),
(454, 'IM-fullcover', 10, 1, 21, 'image', 49, 1, 'Preview', '2022-07-21 13:07:45'),
(455, 'IM-B&W', 10, 1, 21, 'image', 49, 2, 'Preview', '2022-07-21 13:07:45'),
(456, 'Coffee Message', 10, 1, 21, 'image', 50, 3, 'Preview', '2022-07-21 13:07:45'),
(457, 'BGM Layer-0', 10, 1, 21, 'BGM', 38, 0, 'Preview', '2022-07-21 13:07:45'),
(458, 'IM-fullcover', 10, 1, 22, 'image', 49, 1, 'Preview', '2022-07-21 13:08:26'),
(459, 'IM-B&W', 10, 1, 22, 'image', 49, 2, 'Preview', '2022-07-21 13:08:26'),
(460, 'Coffee Message', 10, 1, 22, 'image', 50, 3, 'Preview', '2022-07-21 13:08:26'),
(461, 'BGM Layer-0', 10, 1, 22, 'BGM', 38, 0, 'Preview', '2022-07-21 13:08:26'),
(462, 'IM-fullcover', 10, 1, 23, 'image', 49, 1, 'Preview', '2022-07-21 15:45:06'),
(463, 'IM-B&W', 10, 1, 23, 'image', 49, 2, 'Preview', '2022-07-21 15:45:06'),
(464, 'Coffee Message', 10, 1, 23, 'image', 50, 3, 'Preview', '2022-07-21 15:45:06'),
(465, 'BGM Layer-0', 10, 1, 23, 'BGM', 38, 0, 'Preview', '2022-07-21 15:45:06'),
(466, 'IM-B&W', 3, 1, 25, 'image', 49, 2, 'Preview', '2022-07-27 11:36:38'),
(467, 'BGM Layer-0', 3, 1, 25, 'BGM', 38, 0, 'Preview', '2022-07-27 11:36:38'),
(468, 'IM-fullcover', 3, 1, 26, 'image', 49, 1, 'Preview', '2022-07-27 11:36:38'),
(469, 'IM-B&W', 3, 1, 26, 'image', 49, 2, 'Preview', '2022-07-27 11:36:38'),
(470, 'Coffee Message', 3, 1, 26, 'image', 50, 3, 'Preview', '2022-07-27 11:36:38'),
(471, 'BGM Layer-0', 3, 1, 26, 'BGM', 38, 0, 'Preview', '2022-07-27 11:36:38'),
(472, 'IM-B&W', 3, 1, 27, 'image', 49, 2, 'Preview', '2022-07-27 11:38:35'),
(473, 'BGM Layer-0', 3, 1, 27, 'BGM', 38, 0, 'Preview', '2022-07-27 11:38:35'),
(474, 'IM-fullcover', 3, 1, 28, 'image', 49, 1, 'Preview', '2022-07-27 11:38:35'),
(475, 'IM-B&W', 3, 1, 28, 'image', 49, 2, 'Preview', '2022-07-27 11:38:35'),
(476, 'Coffee Message', 3, 1, 28, 'image', 50, 3, 'Preview', '2022-07-27 11:38:35'),
(477, 'BGM Layer-0', 3, 1, 28, 'BGM', 38, 0, 'Preview', '2022-07-27 11:38:35'),
(496, 'IM-B&W', 11, 1, 35, 'image', 49, 2, 'Preview', '2022-07-27 11:46:05'),
(497, 'BGM Layer-0', 11, 1, 35, 'BGM', 38, 0, 'Preview', '2022-07-27 11:46:05'),
(498, 'IM-fullcover', 11, 1, 36, 'image', 49, 1, 'Preview', '2022-07-27 11:46:05'),
(499, 'IM-B&W', 11, 1, 36, 'image', 49, 2, 'Preview', '2022-07-27 11:46:05'),
(500, 'Coffee Message', 11, 1, 36, 'image', 50, 3, 'Preview', '2022-07-27 11:46:05'),
(501, 'BGM Layer-0', 11, 1, 36, 'BGM', 38, 0, 'Preview', '2022-07-27 11:46:05'),
(504, 'IM-fullcover', 12, 1, 39, 'image', 49, 1, 'Preview', '2022-07-27 12:09:48'),
(505, 'IM-B&W', 12, 1, 39, 'image', 49, 2, 'Preview', '2022-07-27 12:09:48'),
(506, 'Coffee Message', 12, 1, 39, 'image', 50, 3, 'Preview', '2022-07-27 12:09:48'),
(507, 'BGM Layer-0', 12, 1, 39, 'BGM', 38, 0, 'Preview', '2022-07-27 12:09:48'),
(510, 'IM-fullcover', 12, 1, 38, 'image', 49, 1, 'Preview', '2022-07-27 12:11:22'),
(511, 'IM-B&W', 12, 1, 38, 'image', 49, 2, 'Preview', '2022-07-27 12:11:22'),
(512, 'Coffee Message', 12, 1, 38, 'image', 50, 3, 'Preview', '2022-07-27 12:11:22'),
(513, 'BGM Layer-0', 12, 1, 38, 'BGM', 38, 0, 'Preview', '2022-07-27 12:11:22'),
(543, 'meh', 1, 46, 40, 'image', 15, 2, 'Preview', '2022-09-01 11:13:15'),
(544, 'spects', 1, 46, 40, 'image', 9, 3, 'Preview', '2022-09-01 11:13:23'),
(545, 'fire', 1, 46, 40, 'image', 8, 1, 'Preview', '2022-09-01 11:13:27'),
(546, 'meh', 1, 46, 41, 'image', 15, 2, 'Preview', '2022-09-01 11:20:35'),
(547, 'fire', 1, 46, 41, 'image', 8, 1, 'Preview', '2022-09-01 11:20:40'),
(548, 'spects', 1, 46, 41, 'image', 9, 3, 'Preview', '2022-09-01 11:20:42'),
(561, 'Image Layer-1', 14, 46, 43, 'image', 55, 1, 'Preview', '2022-09-09 17:56:55'),
(562, 'Image Layer-2', 14, 46, 43, 'image', 56, 2, 'Preview', '2022-09-09 17:56:56'),
(563, 'Image Layer-3', 14, 46, 43, 'image', 55, 3, 'Preview', '2022-09-09 19:15:51'),
(575, 'BG Image', 13, 1, 42, 'image', 62, 1, 'Preview', '2022-09-10 18:15:56'),
(576, 'Logo', 13, 1, 42, 'image', 63, 2, 'Preview', '2022-09-10 18:16:52'),
(577, 'Yello bo', 13, 1, 42, 'shape', 1, 3, 'Preview', '2022-09-10 18:17:08'),
(578, 'Image Layer-1', 15, 1, 44, 'image', 64, 1, 'Preview', '2022-09-10 18:32:36'),
(579, 'Font Layer-2', 15, 1, 44, 'font', 1, 2, 'Preview', '2022-09-10 18:39:44'),
(582, 'Shape Layer-5', 15, 1, 44, 'shape', 5, 5, 'Preview', '2022-09-10 18:44:37'),
(583, 'Shape Layer-6', 15, 1, 44, 'shape', 1, 6, 'Preview', '2022-09-10 18:46:18'),
(585, 'BGM Layer-0', 14, 46, 43, 'BGM', 39, 0, 'Preview', '2022-09-13 21:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_layers_templates`
--

CREATE TABLE `video_maker_layers_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `scene_id` int(11) DEFAULT NULL,
  `layer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `layer_id` int(11) DEFAULT NULL,
  `layer_count` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_layers_templates`
--

INSERT INTO `video_maker_layers_templates` (`id`, `title`, `p_id`, `u_id`, `scene_id`, `layer`, `layer_id`, `layer_count`, `content`, `date`) VALUES
(15, 'IM-fullcover', 4, 1, 5, 'image', 49, 1, 'Preview', '2022-07-27 12:05:21'),
(16, 'IM-B&W', 4, 1, 5, 'image', 49, 2, 'Preview', '2022-07-27 12:05:21'),
(17, 'Coffee Message', 4, 1, 5, 'image', 50, 3, 'Preview', '2022-07-27 12:05:21'),
(18, 'BGM Layer-0', 4, 1, 5, 'BGM', 38, 0, 'Preview', '2022-07-27 12:05:21'),
(19, 'IM-B&W', 4, 1, 6, 'image', 49, 2, 'Preview', '2022-07-27 12:05:21'),
(20, 'BGM Layer-0', 4, 1, 6, 'BGM', 38, 0, 'Preview', '2022-07-27 12:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_layer_animations`
--

CREATE TABLE `video_maker_layer_animations` (
  `id` int(11) NOT NULL,
  `layer_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `animation` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT '1500',
  `start` time NOT NULL DEFAULT '00:00:10',
  `end` time NOT NULL DEFAULT '00:03:00',
  `margin_left` varchar(255) DEFAULT '0',
  `width` varchar(255) DEFAULT '415',
  `reverse` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_maker_layer_animations`
--

INSERT INTO `video_maker_layer_animations` (`id`, `layer_id`, `type`, `animation`, `speed`, `start`, `end`, `margin_left`, `width`, `reverse`, `date`) VALUES
(29, 332, 'image', 'slideleft', '2500', '00:00:06', '00:03:00', '18.1111', '593.038', 1, '2022-06-14 17:51:30'),
(28, 331, 'image', 'none', '1500', '00:03:00', '00:04:54', '622.111', '400.99', 1, '2022-06-14 17:50:22'),
(26, 329, 'image', 'none', '1500', '00:00:00', '00:03:00', '0', '415', 1, '2022-06-14 17:46:36'),
(27, 330, 'image', 'slideleft', '2500', '00:03:24', '00:09:48', '709.08', '1337.92', 1, '2022-06-14 17:46:56'),
(62, 365, 'image', 'fadein', '1500', '00:00:12', '00:07:48', '32.0004', '1588.99', 1, '2022-06-22 19:06:26'),
(60, 363, 'font', 'riseup', '1500', '00:00:01', '00:04:12', '0.010457', '868.945', 1, '2022-06-22 18:53:04'),
(58, 361, 'font', 'riseup', '1500', '00:01:12', '00:07:48', '245.104', '1375.89', 1, '2022-06-22 18:52:47'),
(61, 364, 'font', 'risedown', '1000', '00:05:06', '00:08:00', '1052.11', '600.885', 1, '2022-06-22 19:02:05'),
(30, 333, 'image', 'none', '1500', '00:00:00', '00:03:24', '0', '712.014', 0, '2022-06-14 17:54:34'),
(31, 334, 'font', 'none', '1500', '00:03:00', '00:04:54', '620.111', '400.017', 0, '2022-06-14 18:19:57'),
(32, 335, 'image', 'none', '1500', '00:04:54', '00:07:12', '1017.11', '479.132', 0, '2022-06-14 18:23:20'),
(33, 336, 'image', 'none', '2500', '00:00:00', '00:20:30', '0', '4261.04', 0, '2022-06-14 18:24:19'),
(34, 337, 'image', 'slideright', '2500', '00:04:54', '00:20:30', '1015.11', '3244.2', 1, '2022-06-15 11:35:33'),
(35, 338, 'image', 'none', '1500', '00:07:06', '00:09:06', '1472.11', '420.087', 1, '2022-06-15 11:44:59'),
(36, 339, 'image', 'none', '1500', '00:08:48', '00:10:36', '1840.11', '382.083', 1, '2022-06-15 11:46:36'),
(37, 340, 'image', 'slideleft', '2500', '00:07:48', '00:10:54', '1629.11', '638.056', 1, '2022-06-15 11:57:30'),
(38, 341, 'image', 'riseup', '2000', '00:11:18', '00:13:48', '2348.11', '520.035', 1, '2022-06-15 12:24:40'),
(39, 342, 'image', 'none', '1500', '00:13:48', '00:15:48', '2865.11', '415', 1, '2022-06-15 12:28:30'),
(40, 343, 'image', 'none', '1500', '00:15:42', '00:17:42', '3270.11', '415', 1, '2022-06-15 12:29:57'),
(41, 344, 'image', 'none', '1500', '00:13:42', '00:17:06', '2849.11', '701.007', 1, '2022-06-15 12:35:08'),
(42, 345, 'image', 'slideright', '1500', '00:16:18', '00:18:36', '3380.11', '487.049', 1, '2022-06-15 12:49:18'),
(43, 346, 'image', 'slideright', '1000', '00:20:36', '00:24:42', '4277.11', '847.031', 1, '2022-06-15 12:52:01'),
(44, 347, 'font', 'none', '1500', '00:15:00', '00:17:00', '3125.11', '415', 1, '2022-06-15 13:11:02'),
(45, 348, 'image', 'slideright', '1000', '00:18:12', '00:20:24', '3776.11', '460.017', 0, '2022-06-15 13:34:46'),
(46, 349, 'image', 'riseup', '1500', '00:00:00', '00:01:48', '5', '378.003', 0, '2022-06-16 10:49:49'),
(127, 429, 'image', 'none', '1500', '00:02:12', '00:04:12', '466.111', '415', 0, '2022-07-12 12:11:44'),
(232, 534, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-08-27 18:05:00'),
(128, 430, 'background', 'none', '1500', '00:00:00', '00:03:00', '0', '415', 0, '2022-07-12 12:51:28'),
(129, 431, 'image', 'none', '1500', '00:00:00', '00:03:00', '0', '415', 0, '2022-07-13 12:19:58'),
(130, 432, 'image', 'none', '1500', '00:00:00', '00:03:00', '0', '415', 0, '2022-07-13 12:20:45'),
(131, 433, 'image', 'none', '1500', '00:00:00', '00:03:00', '0', '415', 0, '2022-07-13 12:29:12'),
(133, 435, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 10:19:03'),
(161, 463, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 15:45:06'),
(160, 462, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 15:45:06'),
(135, 437, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 10:38:28'),
(136, 438, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 12:49:27'),
(137, 439, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 12:49:27'),
(140, 442, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 12:56:33'),
(139, 441, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 12:49:27'),
(141, 443, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 12:56:33'),
(142, 444, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-21 12:56:33'),
(143, 445, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 12:56:33'),
(144, 446, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 13:01:07'),
(145, 447, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 13:01:07'),
(146, 448, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-21 13:01:07'),
(147, 449, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 13:01:07'),
(148, 450, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 13:02:34'),
(149, 451, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 13:02:34'),
(150, 452, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-21 13:02:34'),
(151, 453, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 13:02:34'),
(152, 454, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 13:07:45'),
(153, 455, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 13:07:45'),
(154, 456, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-21 13:07:45'),
(155, 457, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 13:07:45'),
(156, 458, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-21 13:08:26'),
(157, 459, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-21 13:08:26'),
(158, 460, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-21 13:08:26'),
(159, 461, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 13:08:26'),
(162, 464, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-21 15:45:06'),
(163, 465, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-21 15:45:06'),
(164, 466, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 11:36:38'),
(165, 467, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 11:36:38'),
(166, 468, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-27 11:36:38'),
(167, 469, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 11:36:38'),
(168, 470, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-27 11:36:38'),
(169, 471, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 11:36:38'),
(170, 472, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 11:38:35'),
(171, 473, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 11:38:35'),
(172, 474, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-27 11:38:35'),
(173, 475, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 11:38:35'),
(174, 476, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-27 11:38:35'),
(175, 477, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 11:38:35'),
(209, 511, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 12:11:22'),
(198, 500, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-27 11:46:05'),
(199, 501, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 11:46:05'),
(208, 510, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-27 12:11:22'),
(202, 504, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-27 12:09:48'),
(203, 505, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 12:09:48'),
(204, 506, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-27 12:09:48'),
(205, 507, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 12:09:48'),
(210, 512, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-27 12:11:22'),
(211, 513, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 12:11:22'),
(197, 499, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 11:46:05'),
(196, 498, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-27 11:46:05'),
(195, 497, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 11:46:05'),
(194, 496, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 11:46:05'),
(241, 543, 'image', 'fadein', '2000', '00:00:00', '00:06:24', '0', '1331.02', 0, '2022-09-01 11:13:15'),
(233, 535, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-08-27 18:05:54'),
(234, 536, 'BGM', 'none', '1500', '00:00:00', '00:00:00', '0', '72036', 0, '2022-08-27 18:13:50'),
(235, 537, 'BGM', 'none', '1500', '00:00:00', '00:00:00', '0', '72036', 0, '2022-08-27 18:14:13'),
(236, 538, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-08-27 18:14:29'),
(237, 539, 'BGM', 'none', '1500', '00:00:00', '00:00:00', '0', '72036', 0, '2022-08-27 18:14:54'),
(283, 585, 'BGM', 'none', '1500', '00:00:10', '00:03:00', '0', '415', 0, '2022-09-13 21:34:12'),
(242, 544, 'image', 'riseup', '1500', '00:02:00', '00:06:24', '413.111', '918.021', 0, '2022-09-01 11:13:23'),
(243, 545, 'image', 'fadein', '2000', '00:04:00', '00:06:24', '823.111', '507.031', 0, '2022-09-01 11:13:27'),
(244, 546, 'image', 'fadein', '2000', '00:00:30', '00:06:54', '114.111', '1322.01', 0, '2022-09-01 11:20:35'),
(245, 547, 'image', 'fadein', '2000', '00:04:00', '00:07:00', '823.111', '621.007', 0, '2022-09-01 11:20:40'),
(246, 548, 'image', 'riseup', '2000', '00:01:54', '00:06:54', '403.111', '1042.03', 0, '2022-09-01 11:20:42'),
(273, 575, 'image', 'none', '1500', '00:00:10', '00:05:54', '0.00380701', '1227.03', 0, '2022-09-10 18:15:57'),
(274, 576, 'image', 'slideleft', '2000', '00:01:30', '00:05:54', '319.212', '907.822', 0, '2022-09-10 18:16:53'),
(275, 577, 'shape', 'slideleft', '1000', '00:00:10', '00:02:06', '13.1111', '415', 0, '2022-09-10 18:17:08'),
(276, 578, 'image', 'slideleft', '2000', '00:00:10', '00:03:00', '0', '415', 0, '2022-09-10 18:32:37'),
(260, 562, 'image', 'slideleft', '2000', '00:00:12', '00:04:12', '31.9896', '826.745', 0, '2022-09-09 17:56:57'),
(280, 582, 'shape', 'none', '1500', '00:00:10', '00:03:00', '0', '415', 0, '2022-09-10 18:44:38'),
(261, 563, 'image', 'fadein', '1500', '00:00:01', '00:04:30', '0.005208', '939.01', 0, '2022-09-09 19:15:53'),
(259, 561, 'image', 'riseup', '1500', '00:00:01', '00:03:00', '2.00117e-05', '623.034', 0, '2022-09-09 17:56:56'),
(277, 579, 'font', 'slideright', '1500', '00:00:10', '00:03:00', '0', '415', 0, '2022-09-10 18:39:44'),
(281, 583, 'shape', 'riseup', '2000', '00:00:10', '00:03:00', '0', '415', 0, '2022-09-10 18:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_layer_animations_templates`
--

CREATE TABLE `video_maker_layer_animations_templates` (
  `id` int(11) NOT NULL,
  `layer_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `animation` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT '1500',
  `start` time NOT NULL DEFAULT '00:00:00',
  `end` time NOT NULL DEFAULT '00:03:00',
  `margin_left` varchar(255) DEFAULT '0',
  `width` varchar(255) DEFAULT '415',
  `reverse` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_maker_layer_animations_templates`
--

INSERT INTO `video_maker_layer_animations_templates` (`id`, `layer_id`, `type`, `animation`, `speed`, `start`, `end`, `margin_left`, `width`, `reverse`, `date`) VALUES
(20, 20, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 12:05:21'),
(19, 19, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 12:05:21'),
(16, 16, 'image', 'slideright', '1000', '00:02:00', '00:04:00', '408.111', '415', 0, '2022-07-27 12:05:21'),
(17, 17, 'image', 'slideleft', '1000', '00:04:00', '00:06:00', '823.111', '415', 0, '2022-07-27 12:05:21'),
(18, 18, 'BGM', 'none', '1500', '00:00:00', '00:26:54', '0', '5589', 0, '2022-07-27 12:05:21'),
(15, 15, 'image', 'fadein', '1000', '00:00:00', '00:02:00', '4.11111', '415', 0, '2022-07-27 12:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_scene`
--

CREATE TABLE `video_maker_scene` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `background` varchar(255) NOT NULL DEFAULT '#ffffff',
  `duration` int(11) NOT NULL DEFAULT '10',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_maker_scene`
--

INSERT INTO `video_maker_scene` (`id`, `p_id`, `u_id`, `title`, `background`, `duration`, `date`) VALUES
(1, 1, 46, NULL, '#2B4354', 8, '2022-06-11 00:00:00'),
(14, 10, 1, NULL, '#CAE1E0', 10, '2022-07-21 00:00:00'),
(23, 10, 1, '', '#ffffff', 10, '2022-07-21 15:45:00'),
(41, 1, 46, NULL, '#ffffff', 8, '2022-09-01 11:20:04'),
(39, 12, 1, '', '#ffffff', 10, '2022-07-27 12:09:48'),
(38, 12, 1, '', '#ffffff', 10, '2022-07-27 12:09:48'),
(36, 11, 1, '', '#ffffff', 10, '2022-07-27 11:46:05'),
(35, 11, 1, '', '#CAE1E0', 10, '2022-07-27 11:46:05'),
(42, 13, 1, NULL, '#E8E4DD', 6, '2022-09-02 00:00:00'),
(43, 14, 46, NULL, '#ffffff', 12, '2022-09-09 00:00:00'),
(44, 15, 1, NULL, '#000000', 10, '2022-09-10 00:00:00'),
(45, 16, 1, NULL, '#ffffff', 10, '2022-09-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_scene_templates`
--

CREATE TABLE `video_maker_scene_templates` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `background` varchar(255) NOT NULL DEFAULT '#ffffff',
  `duration` int(11) NOT NULL DEFAULT '10',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_maker_scene_templates`
--

INSERT INTO `video_maker_scene_templates` (`id`, `p_id`, `u_id`, `title`, `background`, `duration`, `date`) VALUES
(6, 4, 1, '', '#CAE1E0', 10, '2022-07-27 12:05:21'),
(5, 4, 1, '', '#ffffff', 10, '2022-07-27 12:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_shapes`
--

CREATE TABLE `video_maker_shapes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shape` longtext COLLATE utf8_unicode_ci,
  `style` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_shapes`
--

INSERT INTO `video_maker_shapes` (`id`, `title`, `shape`, `style`) VALUES
(1, 'Sqaure', '<rect x=\"10\" y=\"10\" width=\"50\" height=\"50\" stroke=\"black\" fill=\"transparent\" stroke-width=\"5\"/>', 'height:70px;'),
(2, 'Sqaure_Round', '<rect x=\"60\" y=\"10\" rx=\"10\" ry=\"10\" width=\"50\" height=\"50\" stroke=\"black\" fill=\"transparent\" stroke-width=\"5\"/>', 'height: 70px;margin-left: -30px;'),
(3, 'Circle', '<circle cx=\"40\" cy=\"75\" r=\"25\" stroke=\"black\" fill=\"transparent\" stroke-width=\"5\"/>', 'height: 110px;margin-top: -40px;margin-left: -5px;'),
(4, 'Elipse', '<ellipse cx=\"75\" cy=\"75\" rx=\"30\" ry=\"5\" stroke=\"black\" fill=\"transparent\" stroke-width=\"5\"/>', 'height: 100px;margin-top: -50px;margin-left: -20px;'),
(5, 'Line', '<line x1=\"10\" x2=\"60\" y1=\"110\" y2=\"150\" stroke=\"black\" stroke-width=\"5\"/>', 'height: 150px;margin-top: -100px;margin-left: -5px;');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_styles`
--

CREATE TABLE `video_maker_styles` (
  `id` int(11) NOT NULL,
  `layer_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_styles`
--

INSERT INTO `video_maker_styles` (`id`, `layer_id`, `type`, `style`, `value`, `date`) VALUES
(1600, 212, 'parent', 'width', '1351.6px', '2022-03-18 16:05:31'),
(1601, 212, 'parent', 'height', '752.639px', '2022-03-18 16:05:31'),
(1602, 212, 'parent', 'display', 'inline-block', '2022-03-18 16:05:31'),
(1603, 212, 'parent', 'padding', '0px 0px 5px', '2022-03-18 16:05:31'),
(1604, 212, 'parent', 'position', 'absolute', '2022-03-18 16:05:31'),
(1605, 212, 'parent', 'top', '134.93057250976562px', '2022-03-18 16:05:31'),
(1606, 212, 'parent', 'left', '250.90283203125px', '2022-03-18 16:05:31'),
(1607, 212, 'parent', 'transform', 'rotate(0deg)', '2022-03-18 16:05:31'),
(2567, 274, 'parent', 'width', '40%', '2022-05-05 13:31:04'),
(2568, 274, 'parent', 'height', 'auto', '2022-05-05 13:31:04'),
(2569, 274, 'parent', 'display', 'inline-block', '2022-05-05 13:31:04'),
(2570, 274, 'parent', 'padding', '0px 0px 5px', '2022-05-05 13:31:04'),
(2571, 274, 'parent', 'position', 'absolute', '2022-05-05 13:31:04'),
(2572, 274, 'parent', 'top', '229.93304443359375px', '2022-05-05 13:31:04'),
(2573, 274, 'parent', 'left', '577.924072265625px', '2022-05-05 13:31:04'),
(2574, 274, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 13:31:04'),
(2575, 275, 'parent', 'width', '40%', '2022-05-05 13:35:25'),
(2576, 275, 'parent', 'height', 'auto', '2022-05-05 13:35:25'),
(2577, 275, 'parent', 'display', 'inline-block', '2022-05-05 13:35:25'),
(2578, 275, 'parent', 'padding', '0px 0px 5px', '2022-05-05 13:35:25'),
(2579, 275, 'parent', 'position', 'absolute', '2022-05-05 13:35:25'),
(2580, 275, 'parent', 'top', '330.9606742858887px', '2022-05-05 13:35:25'),
(2581, 275, 'parent', 'left', '637.9629516601562px', '2022-05-05 13:35:25'),
(2582, 275, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 13:35:25'),
(2583, 276, 'parent', 'width', '40%', '2022-05-05 13:44:02'),
(2584, 276, 'parent', 'height', 'auto', '2022-05-05 13:44:02'),
(2585, 276, 'parent', 'display', 'inline-block', '2022-05-05 13:44:02'),
(2586, 276, 'parent', 'padding', '0px 0px 5px', '2022-05-05 13:44:02'),
(2587, 276, 'parent', 'position', 'absolute', '2022-05-05 13:44:02'),
(2588, 276, 'parent', 'top', '30%', '2022-05-05 13:44:02'),
(2589, 276, 'parent', 'left', '30%', '2022-05-05 13:44:02'),
(2590, 276, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 13:44:02'),
(2599, 278, 'parent', 'width', '40%', '2022-05-05 13:50:40'),
(2600, 278, 'parent', 'height', 'auto', '2022-05-05 13:50:40'),
(2601, 278, 'parent', 'display', 'inline-block', '2022-05-05 13:50:40'),
(2602, 278, 'parent', 'padding', '0px 0px 5px', '2022-05-05 13:50:40'),
(2603, 278, 'parent', 'position', 'absolute', '2022-05-05 13:50:40'),
(2604, 278, 'parent', 'top', '30%', '2022-05-05 13:50:40'),
(2605, 278, 'parent', 'left', '30%', '2022-05-05 13:50:40'),
(2606, 278, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 13:50:40'),
(2607, 279, 'parent', 'width', '40%', '2022-05-05 13:53:31'),
(2608, 279, 'parent', 'height', 'auto', '2022-05-05 13:53:31'),
(2609, 279, 'parent', 'display', 'inline-block', '2022-05-05 13:53:31'),
(2610, 279, 'parent', 'padding', '0px 0px 5px', '2022-05-05 13:53:31'),
(2611, 279, 'parent', 'position', 'absolute', '2022-05-05 13:53:31'),
(2612, 279, 'parent', 'top', '30%', '2022-05-05 13:53:31'),
(2613, 279, 'parent', 'left', '30%', '2022-05-05 13:53:31'),
(2614, 279, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 13:53:31'),
(2615, 280, 'parent', 'width', '40%', '2022-05-05 13:58:26'),
(2616, 280, 'parent', 'height', 'auto', '2022-05-05 13:58:26'),
(2617, 280, 'parent', 'display', 'inline-block', '2022-05-05 13:58:26'),
(2618, 280, 'parent', 'padding', '0px 0px 5px', '2022-05-05 13:58:26'),
(2619, 280, 'parent', 'position', 'absolute', '2022-05-05 13:58:26'),
(2620, 280, 'parent', 'top', '30%', '2022-05-05 13:58:26'),
(2621, 280, 'parent', 'left', '30%', '2022-05-05 13:58:26'),
(2622, 280, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 13:58:26'),
(2623, 281, 'parent', 'width', '40%', '2022-05-05 14:07:01'),
(2624, 281, 'parent', 'height', 'auto', '2022-05-05 14:07:01'),
(2625, 281, 'parent', 'display', 'inline-block', '2022-05-05 14:07:01'),
(2626, 281, 'parent', 'padding', '0px 0px 5px', '2022-05-05 14:07:01'),
(2627, 281, 'parent', 'position', 'absolute', '2022-05-05 14:07:01'),
(2628, 281, 'parent', 'top', '30%', '2022-05-05 14:07:01'),
(2629, 281, 'parent', 'left', '30%', '2022-05-05 14:07:01'),
(2630, 281, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 14:07:01'),
(2631, 282, 'parent', 'width', '40%', '2022-05-05 14:08:20'),
(2632, 282, 'parent', 'height', 'auto', '2022-05-05 14:08:20'),
(2633, 282, 'parent', 'display', 'inline-block', '2022-05-05 14:08:20'),
(2634, 282, 'parent', 'padding', '0px 0px 5px', '2022-05-05 14:08:20'),
(2635, 282, 'parent', 'position', 'absolute', '2022-05-05 14:08:20'),
(2636, 282, 'parent', 'top', '196.93866729736328px', '2022-05-05 14:08:20'),
(2637, 282, 'parent', 'left', '402.92822265625px', '2022-05-05 14:08:20'),
(2638, 282, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 14:08:20'),
(2639, 283, 'parent', 'width', '40%', '2022-05-05 14:10:26'),
(2640, 283, 'parent', 'height', 'auto', '2022-05-05 14:10:26'),
(2641, 283, 'parent', 'display', 'inline-block', '2022-05-05 14:10:26'),
(2642, 283, 'parent', 'padding', '0px 0px 5px', '2022-05-05 14:10:26'),
(2643, 283, 'parent', 'position', 'absolute', '2022-05-05 14:10:26'),
(2644, 283, 'parent', 'top', '30%', '2022-05-05 14:10:26'),
(2645, 283, 'parent', 'left', '30%', '2022-05-05 14:10:26'),
(2646, 283, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 14:10:26'),
(2647, 284, 'parent', 'width', '40%', '2022-05-05 14:11:35'),
(2648, 284, 'parent', 'height', 'auto', '2022-05-05 14:11:35'),
(2649, 284, 'parent', 'display', 'inline-block', '2022-05-05 14:11:35'),
(2650, 284, 'parent', 'padding', '0px 0px 5px', '2022-05-05 14:11:35'),
(2651, 284, 'parent', 'position', 'absolute', '2022-05-05 14:11:35'),
(2652, 284, 'parent', 'top', '268.92940521240234px', '2022-05-05 14:11:35'),
(2653, 284, 'parent', 'left', '742.9166870117188px', '2022-05-05 14:11:35'),
(2654, 284, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 14:11:35'),
(2655, 285, 'parent', 'width', '40%', '2022-05-05 15:58:40'),
(2656, 285, 'parent', 'height', 'auto', '2022-05-05 15:58:40'),
(2657, 285, 'parent', 'display', 'inline-block', '2022-05-05 15:58:40'),
(2658, 285, 'parent', 'padding', '0px 0px 5px', '2022-05-05 15:58:40'),
(2659, 285, 'parent', 'position', 'absolute', '2022-05-05 15:58:40'),
(2660, 285, 'parent', 'top', '30%', '2022-05-05 15:58:40'),
(2661, 285, 'parent', 'left', '30%', '2022-05-05 15:58:40'),
(2662, 285, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 15:58:40'),
(2663, 286, 'parent', 'width', '40%', '2022-05-05 16:05:31'),
(2664, 286, 'parent', 'height', 'auto', '2022-05-05 16:05:31'),
(2665, 286, 'parent', 'display', 'inline-block', '2022-05-05 16:05:31'),
(2666, 286, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:05:31'),
(2667, 286, 'parent', 'position', 'absolute', '2022-05-05 16:05:31'),
(2668, 286, 'parent', 'top', '30%', '2022-05-05 16:05:31'),
(2669, 286, 'parent', 'left', '30%', '2022-05-05 16:05:31'),
(2670, 286, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:05:31'),
(2671, 287, 'parent', 'width', '40%', '2022-05-05 16:08:21'),
(2672, 287, 'parent', 'height', 'auto', '2022-05-05 16:08:21'),
(2673, 287, 'parent', 'display', 'inline-block', '2022-05-05 16:08:21'),
(2674, 287, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:08:21'),
(2675, 287, 'parent', 'position', 'absolute', '2022-05-05 16:08:21'),
(2676, 287, 'parent', 'top', '30%', '2022-05-05 16:08:21'),
(2677, 287, 'parent', 'left', '30%', '2022-05-05 16:08:21'),
(2678, 287, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:08:21'),
(2679, 288, 'parent', 'width', '40%', '2022-05-05 16:10:06'),
(2680, 288, 'parent', 'height', 'auto', '2022-05-05 16:10:06'),
(2681, 288, 'parent', 'display', 'inline-block', '2022-05-05 16:10:06'),
(2682, 288, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:10:06'),
(2683, 288, 'parent', 'position', 'absolute', '2022-05-05 16:10:06'),
(2684, 288, 'parent', 'top', '30%', '2022-05-05 16:10:06'),
(2685, 288, 'parent', 'left', '30%', '2022-05-05 16:10:06'),
(2686, 288, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:10:06'),
(2734, 293, 'parent', 'width', '40%', '2022-05-05 16:24:43'),
(2735, 293, 'parent', 'height', 'auto', '2022-05-05 16:24:43'),
(2736, 293, 'parent', 'display', 'inline-block', '2022-05-05 16:24:43'),
(2737, 293, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:24:43'),
(2738, 293, 'parent', 'position', 'absolute', '2022-05-05 16:24:43'),
(2739, 293, 'parent', 'top', '13.8988037109375px', '2022-05-05 16:24:43'),
(2740, 293, 'parent', 'left', '6.8675537109375px', '2022-05-05 16:24:43'),
(2741, 293, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:24:43'),
(2742, 294, 'parent', 'width', '805.7px', '2022-05-05 16:40:39'),
(2743, 294, 'parent', 'height', '448.698px', '2022-05-05 16:40:39'),
(2744, 294, 'parent', 'display', 'inline-block', '2022-05-05 16:40:39'),
(2745, 294, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:40:39'),
(2746, 294, 'parent', 'position', 'absolute', '2022-05-05 16:40:39'),
(2747, 294, 'parent', 'top', '76.85183715820312px', '2022-05-05 16:40:39'),
(2748, 294, 'parent', 'left', '100.723388671875px', '2022-05-05 16:40:39'),
(2749, 294, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:40:39'),
(2750, 295, 'parent', 'width', '40%', '2022-05-05 16:40:47'),
(2751, 295, 'parent', 'height', 'auto', '2022-05-05 16:40:47'),
(2752, 295, 'parent', 'display', 'inline-block', '2022-05-05 16:40:47'),
(2753, 295, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:40:47'),
(2754, 295, 'parent', 'position', 'absolute', '2022-05-05 16:40:47'),
(2755, 295, 'parent', 'top', '153.9351806640625px', '2022-05-05 16:40:47'),
(2756, 295, 'parent', 'left', '1026.8229370117188px', '2022-05-05 16:40:47'),
(2757, 295, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:40:47'),
(2758, 296, 'parent', 'width', '399.653px', '2022-05-05 16:40:57'),
(2759, 296, 'parent', 'height', '216.869px', '2022-05-05 16:40:57'),
(2760, 296, 'parent', 'display', 'inline-block', '2022-05-05 16:40:57'),
(2761, 296, 'parent', 'padding', '0px 18px 20px 4px', '2022-05-05 16:40:57'),
(2762, 296, 'parent', 'text-align', 'center', '2022-05-05 16:40:57'),
(2763, 296, 'parent', 'position', 'absolute', '2022-05-05 16:40:57'),
(2764, 296, 'parent', 'border-radius', '5px', '2022-05-05 16:40:57'),
(2765, 296, 'parent', 'top', '702.8356323242188px', '2022-05-05 16:40:57'),
(2766, 296, 'parent', 'left', '233.79632568359375px', '2022-05-05 16:40:57'),
(2767, 296, 'parent', 'margin-bottom', '5px', '2022-05-05 16:40:57'),
(2768, 296, 'parent', 'min-height', 'fit-content', '2022-05-05 16:40:57'),
(2769, 296, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:40:57'),
(2770, 297, 'parent', 'width', 'auto', '2022-05-05 16:41:02'),
(2771, 297, 'parent', 'height', 'auto', '2022-05-05 16:41:02'),
(2772, 297, 'parent', 'display', 'inline-block', '2022-05-05 16:41:02'),
(2773, 297, 'parent', 'padding', '0px 0px 5px', '2022-05-05 16:41:02'),
(2774, 297, 'parent', 'vertical-align', 'super', '2022-05-05 16:41:02'),
(2775, 297, 'parent', 'position', 'absolute', '2022-05-05 16:41:02'),
(2776, 297, 'parent', 'min-height', 'fit-content', '2022-05-05 16:41:02'),
(2777, 297, 'parent', 'top', '625.78125px', '2022-05-05 16:41:02'),
(2778, 297, 'parent', 'left', '1303.7037963867188px', '2022-05-05 16:41:02'),
(2779, 297, 'parent', 'border', '6px dashed transparent', '2022-05-05 16:41:02'),
(2780, 297, 'parent', 'transform', 'rotate(0deg)', '2022-05-05 16:41:02'),
(2781, 297, 'child', 'height', '220px', '2022-05-05 16:41:02'),
(2782, 297, 'child', 'width', '220px', '2022-05-05 16:41:02'),
(2783, 297, 'grandchild', 'x', '10', '2022-05-05 16:41:02'),
(2784, 297, 'grandchild', 'y', '10', '2022-05-05 16:41:02'),
(2785, 297, 'grandchild', 'width', '205px', '2022-05-05 16:41:02'),
(2786, 297, 'grandchild', 'height', '205px', '2022-05-05 16:41:02'),
(2787, 297, 'grandchild', 'stroke', '#ffffff', '2022-05-05 16:41:02'),
(2788, 297, 'grandchild', 'fill', 'transparent', '2022-05-05 16:41:02'),
(2789, 297, 'grandchild', 'stroke-width', '5', '2022-05-05 16:41:02'),
(2790, 296, 'child', 'border', 'none', '2022-05-17 12:08:04'),
(2799, 299, 'parent', 'width', '40%', '2022-06-07 14:09:26'),
(2800, 299, 'parent', 'height', 'auto', '2022-06-07 14:09:26'),
(2801, 299, 'parent', 'display', 'inline-block', '2022-06-07 14:09:26'),
(2802, 299, 'parent', 'padding', '0px 0px 5px', '2022-06-07 14:09:26'),
(2803, 299, 'parent', 'position', 'absolute', '2022-06-07 14:09:26'),
(2804, 299, 'parent', 'top', '120.86227416992188px', '2022-06-07 14:09:26'),
(2805, 299, 'parent', 'left', '148.87152099609375px', '2022-06-07 14:09:26'),
(2806, 299, 'parent', 'transform', 'rotate(0deg)', '2022-06-07 14:09:26'),
(2815, 296, 'child', 'color', '#ffffff', '2022-06-08 14:05:34'),
(2824, 302, 'parent', 'width', '100%', '2022-06-08 14:52:05'),
(2825, 302, 'parent', 'height', '100%', '2022-06-08 14:52:05'),
(2826, 302, 'parent', 'display', 'inline-block', '2022-06-08 14:52:05'),
(2827, 302, 'parent', 'padding', '0px 0px 5px', '2022-06-08 14:52:05'),
(2828, 302, 'parent', 'position', 'absolute', '2022-06-08 14:52:05'),
(2829, 302, 'parent', 'top', '0px', '2022-06-08 14:52:05'),
(2830, 302, 'parent', 'left', '0px', '2022-06-08 14:52:05'),
(2831, 302, 'parent', 'transform', 'rotate(0deg)', '2022-06-08 14:52:05'),
(2872, 308, 'parent', 'width', '40%', '2022-06-11 13:50:53'),
(2873, 308, 'parent', 'height', 'auto', '2022-06-11 13:50:53'),
(2874, 308, 'parent', 'display', 'inline-block', '2022-06-11 13:50:53'),
(2875, 308, 'parent', 'padding', '0px 0px 5px', '2022-06-11 13:50:53'),
(2876, 308, 'parent', 'position', 'absolute', '2022-06-11 13:50:53'),
(2877, 308, 'parent', 'top', '30%', '2022-06-11 13:50:53'),
(2878, 308, 'parent', 'left', '30%', '2022-06-11 13:50:53'),
(2879, 308, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 13:50:53'),
(2880, 309, 'parent', 'width', '40%', '2022-06-11 13:51:00'),
(2881, 309, 'parent', 'height', 'auto', '2022-06-11 13:51:00'),
(2882, 309, 'parent', 'display', 'inline-block', '2022-06-11 13:51:00'),
(2883, 309, 'parent', 'padding', '0px 0px 5px', '2022-06-11 13:51:00'),
(2884, 309, 'parent', 'position', 'absolute', '2022-06-11 13:51:00'),
(2885, 309, 'parent', 'top', '192.95386123657227px', '2022-06-11 13:51:00'),
(2886, 309, 'parent', 'left', '915.9078369140625px', '2022-06-11 13:51:00'),
(2887, 309, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 13:51:00'),
(2888, 310, 'parent', 'width', '40%', '2022-06-11 13:51:09'),
(2889, 310, 'parent', 'height', 'auto', '2022-06-11 13:51:09'),
(2890, 310, 'parent', 'display', 'inline-block', '2022-06-11 13:51:09'),
(2891, 310, 'parent', 'padding', '0px 0px 5px', '2022-06-11 13:51:09'),
(2892, 310, 'parent', 'position', 'absolute', '2022-06-11 13:51:09'),
(2893, 310, 'parent', 'top', '311.964298248291px', '2022-06-11 13:51:09'),
(2894, 310, 'parent', 'left', '375.9151611328125px', '2022-06-11 13:51:09'),
(2895, 310, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 13:51:09'),
(2944, 317, 'parent', 'width', '40%', '2022-06-11 14:06:57'),
(2945, 317, 'parent', 'height', 'auto', '2022-06-11 14:06:57'),
(2946, 317, 'parent', 'display', 'inline-block', '2022-06-11 14:06:57'),
(2947, 317, 'parent', 'padding', '0px 0px 5px', '2022-06-11 14:06:57'),
(2948, 317, 'parent', 'position', 'absolute', '2022-06-11 14:06:57'),
(2949, 317, 'parent', 'top', '165.9449462890625px', '2022-06-11 14:06:57'),
(2950, 317, 'parent', 'left', '543.921142578125px', '2022-06-11 14:06:57'),
(2951, 317, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 14:06:57'),
(2952, 318, 'parent', 'width', '40%', '2022-06-11 14:06:58'),
(2953, 318, 'parent', 'height', 'auto', '2022-06-11 14:06:58'),
(2954, 318, 'parent', 'display', 'inline-block', '2022-06-11 14:06:58'),
(2955, 318, 'parent', 'padding', '0px 0px 5px', '2022-06-11 14:06:58'),
(2956, 318, 'parent', 'position', 'absolute', '2022-06-11 14:06:58'),
(2957, 318, 'parent', 'top', '462.9315185546875px', '2022-06-11 14:06:58'),
(2958, 318, 'parent', 'left', '367.9166259765625px', '2022-06-11 14:06:58'),
(2959, 318, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 14:06:58'),
(2960, 319, 'parent', 'width', '40%', '2022-06-11 14:06:59'),
(2961, 319, 'parent', 'height', 'auto', '2022-06-11 14:06:59'),
(2962, 319, 'parent', 'display', 'inline-block', '2022-06-11 14:06:59'),
(2963, 319, 'parent', 'padding', '0px 0px 5px', '2022-06-11 14:06:59'),
(2964, 319, 'parent', 'position', 'absolute', '2022-06-11 14:06:59'),
(2965, 319, 'parent', 'top', '108.95086669921875px', '2022-06-11 14:06:59'),
(2966, 319, 'parent', 'left', '1039.9031982421875px', '2022-06-11 14:06:59'),
(2967, 319, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 14:06:59'),
(2968, 320, 'parent', 'width', '40%', '2022-06-11 14:08:25'),
(2969, 320, 'parent', 'height', 'auto', '2022-06-11 14:08:25'),
(2970, 320, 'parent', 'display', 'inline-block', '2022-06-11 14:08:25'),
(2971, 320, 'parent', 'padding', '0px 0px 5px', '2022-06-11 14:08:25'),
(2972, 320, 'parent', 'position', 'absolute', '2022-06-11 14:08:25'),
(2973, 320, 'parent', 'top', '30%', '2022-06-11 14:08:25'),
(2974, 320, 'parent', 'left', '30%', '2022-06-11 14:08:25'),
(2975, 320, 'parent', 'transform', 'rotate(0deg)', '2022-06-11 14:08:25'),
(3056, 331, 'parent', 'width', '13%', '2022-06-14 17:50:21'),
(3057, 331, 'parent', 'height', 'auto', '2022-06-14 17:50:21'),
(3058, 331, 'parent', 'display', 'inline-block', '2022-06-14 17:50:21'),
(3059, 331, 'parent', 'padding', '0px 0px 5px', '2022-06-14 17:50:21'),
(3060, 331, 'parent', 'position', 'absolute', '2022-06-14 17:50:21'),
(3061, 331, 'parent', 'top', '839.7570190429688px', '2022-06-14 17:50:21'),
(3062, 331, 'parent', 'left', '119.7626953125px', '2022-06-14 17:50:21'),
(3063, 331, 'parent', 'transform', 'rotate(0deg)', '2022-06-14 17:50:21'),
(3065, 332, 'parent', 'width', '13%', '2022-06-14 17:51:29'),
(3066, 332, 'parent', 'height', 'auto', '2022-06-14 17:51:29'),
(3067, 332, 'parent', 'display', 'inline-block', '2022-06-14 17:51:29'),
(3068, 332, 'parent', 'padding', '0px 0px 5px', '2022-06-14 17:51:29'),
(3069, 332, 'parent', 'position', 'absolute', '2022-06-14 17:51:29'),
(3070, 332, 'parent', 'top', '834.4907684326172px', '2022-06-14 17:51:29'),
(3071, 332, 'parent', 'left', '102.5462646484375px', '2022-06-14 17:51:29'),
(3072, 332, 'parent', 'transform', 'rotate(0deg)', '2022-06-14 17:51:29'),
(3073, 332, 'parent', 'opacity', '1', '2022-06-14 17:52:50'),
(3082, 334, 'parent', 'width', '480px', '2022-06-14 18:19:57'),
(3083, 334, 'parent', 'height', 'auto', '2022-06-14 18:19:57'),
(3084, 334, 'parent', 'display', 'inline-block', '2022-06-14 18:19:57'),
(3085, 334, 'parent', 'padding', '0px 18px 20px 4px', '2022-06-14 18:19:57'),
(3086, 334, 'parent', 'text-align', 'center', '2022-06-14 18:19:57'),
(3087, 334, 'parent', 'position', 'absolute', '2022-06-14 18:19:57'),
(3088, 334, 'parent', 'border-radius', '5px', '2022-06-14 18:19:57'),
(3089, 334, 'parent', 'top', '558.9285888671875px', '2022-06-14 18:19:57'),
(3090, 334, 'parent', 'left', '219.8660888671875px', '2022-06-14 18:19:57'),
(3091, 334, 'parent', 'margin-bottom', '5px', '2022-06-14 18:19:57'),
(3092, 334, 'parent', 'min-height', 'fit-content', '2022-06-14 18:19:57'),
(3093, 334, 'parent', 'transform', 'rotate(0deg)', '2022-06-14 18:19:57'),
(3094, 334, 'child', 'border', 'none', '2022-06-14 18:20:18'),
(3095, 334, 'child', '-webkit-text-stroke', '2px #5dfe7d', '2022-06-14 18:20:36'),
(3096, 334, 'child', 'color', '#5d8547', '2022-06-14 18:20:58'),
(3097, 335, 'parent', 'width', '13%', '2022-06-14 18:23:19'),
(3098, 335, 'parent', 'height', 'auto', '2022-06-14 18:23:19'),
(3099, 335, 'parent', 'display', 'inline-block', '2022-06-14 18:23:19'),
(3100, 335, 'parent', 'padding', '0px 0px 5px', '2022-06-14 18:23:19'),
(3101, 335, 'parent', 'position', 'absolute', '2022-06-14 18:23:19'),
(3102, 335, 'parent', 'top', '827.8704223632812px', '2022-06-14 18:23:19'),
(3103, 335, 'parent', 'left', '88.8946533203125px', '2022-06-14 18:23:19'),
(3104, 335, 'parent', 'transform', 'rotate(0deg)', '2022-06-14 18:23:19'),
(3105, 336, 'parent', 'width', '200%', '2022-06-14 18:24:17'),
(3106, 336, 'parent', 'height', 'auto', '2022-06-14 18:24:17'),
(3107, 336, 'parent', 'display', 'inline-block', '2022-06-14 18:24:17'),
(3108, 336, 'parent', 'padding', '0px 0px 5px', '2022-06-14 18:24:17'),
(3109, 336, 'parent', 'position', 'absolute', '2022-06-14 18:24:17'),
(3110, 336, 'parent', 'top', '119.88424682617188px', '2022-06-14 18:24:17'),
(3111, 336, 'parent', 'left', '-17.09490966796875px', '2022-06-14 18:24:17'),
(3112, 336, 'parent', 'transform', 'rotate(0deg)', '2022-06-14 18:24:17'),
(3113, 336, 'parent', 'opacity', '0.5', '2022-06-14 18:25:00'),
(3114, 337, 'parent', 'width', '79%', '2022-06-15 11:35:29'),
(3115, 337, 'parent', 'height', 'auto', '2022-06-15 11:35:29'),
(3116, 337, 'parent', 'display', 'inline-block', '2022-06-15 11:35:29'),
(3117, 337, 'parent', 'padding', '0px 0px 5px', '2022-06-15 11:35:29'),
(3118, 337, 'parent', 'position', 'absolute', '2022-06-15 11:35:29'),
(3119, 337, 'parent', 'top', '-366.9849853515625px', '2022-06-15 11:35:29'),
(3120, 337, 'parent', 'left', '126.7071533203125px', '2022-06-15 11:35:29'),
(3121, 337, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 11:35:29'),
(3122, 334, 'child', 'font-size', '200px', '2022-06-15 11:39:52'),
(3123, 334, 'child', 'font-weight', '800', '2022-06-15 11:39:54'),
(3124, 338, 'parent', 'width', '18%', '2022-06-15 11:44:59'),
(3125, 338, 'parent', 'height', 'auto', '2022-06-15 11:44:59'),
(3126, 338, 'parent', 'display', 'inline-block', '2022-06-15 11:44:59'),
(3127, 338, 'parent', 'padding', '0px 0px 5px', '2022-06-15 11:44:59'),
(3128, 338, 'parent', 'position', 'absolute', '2022-06-15 11:44:59'),
(3129, 338, 'parent', 'top', '728.8541870117188px', '2022-06-15 11:44:59'),
(3130, 338, 'parent', 'left', '34.8809814453125px', '2022-06-15 11:44:59'),
(3131, 338, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 11:44:59'),
(3132, 339, 'parent', 'width', '221.801px', '2022-06-15 11:46:35'),
(3133, 339, 'parent', 'height', '318.006px', '2022-06-15 11:46:35'),
(3134, 339, 'parent', 'display', 'inline-block', '2022-06-15 11:46:35'),
(3135, 339, 'parent', 'padding', '0px 0px 5px', '2022-06-15 11:46:35'),
(3136, 339, 'parent', 'position', 'absolute', '2022-06-15 11:46:35'),
(3137, 339, 'parent', 'top', '733.7648315429688px', '2022-06-15 11:46:35'),
(3138, 339, 'parent', 'left', '789.7545166015625px', '2022-06-15 11:46:35'),
(3139, 339, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 11:46:35'),
(3140, 340, 'parent', 'width', '13%', '2022-06-15 11:57:29'),
(3141, 340, 'parent', 'height', 'auto', '2022-06-15 11:57:29'),
(3142, 340, 'parent', 'display', 'inline-block', '2022-06-15 11:57:29'),
(3143, 340, 'parent', 'padding', '0px 0px 5px', '2022-06-15 11:57:29'),
(3144, 340, 'parent', 'position', 'absolute', '2022-06-15 11:57:29'),
(3145, 340, 'parent', 'top', '809.8436889648438px', '2022-06-15 11:57:29'),
(3146, 340, 'parent', 'left', '754.7469482421875px', '2022-06-15 11:57:29'),
(3147, 340, 'parent', 'transform', 'scaleX(+1)', '2022-06-15 11:57:29'),
(3148, 341, 'parent', 'width', '13%', '2022-06-15 12:24:39'),
(3149, 341, 'parent', 'height', 'auto', '2022-06-15 12:24:39'),
(3150, 341, 'parent', 'display', 'inline-block', '2022-06-15 12:24:39'),
(3151, 341, 'parent', 'padding', '0px 0px 5px', '2022-06-15 12:24:39'),
(3152, 341, 'parent', 'position', 'absolute', '2022-06-15 12:24:39'),
(3153, 341, 'parent', 'top', '826.8518676757812px', '2022-06-15 12:24:39'),
(3154, 341, 'parent', 'left', '1366.6666870117188px', '2022-06-15 12:24:39'),
(3155, 341, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 12:24:39'),
(3172, 344, 'parent', 'width', '15%', '2022-06-15 12:35:08'),
(3173, 344, 'parent', 'height', 'auto', '2022-06-15 12:35:08'),
(3174, 344, 'parent', 'display', 'inline-block', '2022-06-15 12:35:08'),
(3175, 344, 'parent', 'padding', '0px 0px 5px', '2022-06-15 12:35:08'),
(3176, 344, 'parent', 'position', 'absolute', '2022-06-15 12:35:08'),
(3177, 344, 'parent', 'top', '755.8738708496094px', '2022-06-15 12:35:08'),
(3178, 344, 'parent', 'left', '1434.8380737304688px', '2022-06-15 12:35:08'),
(3179, 344, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 12:35:08'),
(3180, 345, 'parent', 'width', '440.104px', '2022-06-15 12:49:16'),
(3181, 345, 'parent', 'height', '296.615px', '2022-06-15 12:49:16'),
(3182, 345, 'parent', 'display', 'inline-block', '2022-06-15 12:49:16'),
(3183, 345, 'parent', 'padding', '0px 0px 5px', '2022-06-15 12:49:16'),
(3184, 345, 'parent', 'position', 'absolute', '2022-06-15 12:49:16'),
(3185, 345, 'parent', 'top', '777.7836303710938px', '2022-06-15 12:49:16'),
(3186, 345, 'parent', 'left', '1336.4641723632812px', '2022-06-15 12:49:16'),
(3187, 345, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 12:49:16'),
(3196, 347, 'parent', 'width', '560px', '2022-06-15 13:11:01'),
(3197, 347, 'parent', 'height', 'auto', '2022-06-15 13:11:01'),
(3198, 347, 'parent', 'display', 'inline-block', '2022-06-15 13:11:01'),
(3199, 347, 'parent', 'padding', '0px 18px 20px 4px', '2022-06-15 13:11:01'),
(3200, 347, 'parent', 'text-align', 'center', '2022-06-15 13:11:01'),
(3201, 347, 'parent', 'position', 'absolute', '2022-06-15 13:11:01'),
(3202, 347, 'parent', 'border-radius', '5px', '2022-06-15 13:11:01'),
(3203, 347, 'parent', 'top', '623.8095397949219px', '2022-06-15 13:11:01'),
(3204, 347, 'parent', 'left', '1368.7872314453125px', '2022-06-15 13:11:01'),
(3205, 347, 'parent', 'margin-bottom', '5px', '2022-06-15 13:11:01'),
(3206, 347, 'parent', 'min-height', 'fit-content', '2022-06-15 13:11:01'),
(3207, 347, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 13:11:01'),
(3208, 347, 'child', 'border', 'none', '2022-06-15 13:11:16'),
(3209, 347, 'child', '-webkit-text-stroke', '2px #ff0000', '2022-06-15 13:11:25'),
(3210, 347, 'child', 'color', '#543b3b', '2022-06-15 13:11:47'),
(3211, 347, 'child', 'font-size', '100px', '2022-06-15 13:11:54'),
(3212, 348, 'parent', 'width', '477.307px', '2022-06-15 13:34:45'),
(3213, 348, 'parent', 'height', '321.726px', '2022-06-15 13:34:45'),
(3214, 348, 'parent', 'display', 'inline-block', '2022-06-15 13:34:45'),
(3215, 348, 'parent', 'padding', '0px 0px 5px', '2022-06-15 13:34:45'),
(3216, 348, 'parent', 'position', 'absolute', '2022-06-15 13:34:45'),
(3217, 348, 'parent', 'top', '745.4092407226562px', '2022-06-15 13:34:45'),
(3218, 348, 'parent', 'left', '-249.0848388671875px', '2022-06-15 13:34:45'),
(3219, 348, 'parent', 'transform', 'rotate(0deg)', '2022-06-15 13:34:45'),
(3244, 352, 'parent', 'width', '40%', '2022-06-22 13:38:46'),
(3245, 352, 'parent', 'height', 'auto', '2022-06-22 13:38:46'),
(3246, 352, 'parent', 'display', 'inline-block', '2022-06-22 13:38:46'),
(3247, 352, 'parent', 'padding', '0px 0px 5px', '2022-06-22 13:38:46'),
(3248, 352, 'parent', 'position', 'absolute', '2022-06-22 13:38:46'),
(3249, 352, 'parent', 'top', '30%', '2022-06-22 13:38:46'),
(3250, 352, 'parent', 'left', '30%', '2022-06-22 13:38:46'),
(3251, 352, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 13:38:46'),
(3252, 353, 'parent', 'width', '40%', '2022-06-22 13:41:30'),
(3253, 353, 'parent', 'height', 'auto', '2022-06-22 13:41:30'),
(3254, 353, 'parent', 'display', 'inline-block', '2022-06-22 13:41:30'),
(3255, 353, 'parent', 'padding', '0px 0px 5px', '2022-06-22 13:41:30'),
(3256, 353, 'parent', 'position', 'absolute', '2022-06-22 13:41:30'),
(3257, 353, 'parent', 'top', '30%', '2022-06-22 13:41:30'),
(3258, 353, 'parent', 'left', '30%', '2022-06-22 13:41:30'),
(3259, 353, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 13:41:30'),
(3276, 356, 'parent', 'width', '40%', '2022-06-22 18:03:38'),
(3277, 356, 'parent', 'height', 'auto', '2022-06-22 18:03:38'),
(3278, 356, 'parent', 'display', 'inline-block', '2022-06-22 18:03:38'),
(3279, 356, 'parent', 'padding', '0px 0px 5px', '2022-06-22 18:03:38'),
(3280, 356, 'parent', 'position', 'absolute', '2022-06-22 18:03:38'),
(3281, 356, 'parent', 'top', '30%', '2022-06-22 18:03:38'),
(3282, 356, 'parent', 'left', '30%', '2022-06-22 18:03:38'),
(3283, 356, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 18:03:38'),
(3284, 357, 'parent', 'width', '40%', '2022-06-22 18:09:03'),
(3285, 357, 'parent', 'height', 'auto', '2022-06-22 18:09:03'),
(3286, 357, 'parent', 'display', 'inline-block', '2022-06-22 18:09:03'),
(3287, 357, 'parent', 'padding', '0px 0px 5px', '2022-06-22 18:09:03'),
(3288, 357, 'parent', 'position', 'absolute', '2022-06-22 18:09:03'),
(3289, 357, 'parent', 'top', '30%', '2022-06-22 18:09:03'),
(3290, 357, 'parent', 'left', '30%', '2022-06-22 18:09:03'),
(3291, 357, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 18:09:03'),
(3324, 361, 'parent', 'width', '1600px', '2022-06-22 18:52:47'),
(3325, 361, 'parent', 'height', 'auto', '2022-06-22 18:52:47'),
(3326, 361, 'parent', 'display', 'inline-block', '2022-06-22 18:52:47'),
(3327, 361, 'parent', 'padding', '0px 18px 20px 4px', '2022-06-22 18:52:47'),
(3328, 361, 'parent', 'text-align', 'center', '2022-06-22 18:52:47'),
(3329, 361, 'parent', 'position', 'absolute', '2022-06-22 18:52:47'),
(3330, 361, 'parent', 'border-radius', '5px', '2022-06-22 18:52:47'),
(3331, 361, 'parent', 'top', '195.83331298828125px', '2022-06-22 18:52:47'),
(3332, 361, 'parent', 'left', '581.3368530273438px', '2022-06-22 18:52:47'),
(3333, 361, 'parent', 'margin-bottom', '5px', '2022-06-22 18:52:47'),
(3334, 361, 'parent', 'min-height', 'fit-content', '2022-06-22 18:52:47'),
(3335, 361, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 18:52:47'),
(3348, 363, 'parent', 'width', '991.869px', '2022-06-22 18:53:03'),
(3349, 363, 'parent', 'height', '129.977px', '2022-06-22 18:53:03'),
(3350, 363, 'parent', 'display', 'inline-block', '2022-06-22 18:53:03'),
(3351, 363, 'parent', 'padding', '0px 18px 20px 4px', '2022-06-22 18:53:03'),
(3352, 363, 'parent', 'text-align', 'center', '2022-06-22 18:53:03'),
(3353, 363, 'parent', 'position', 'absolute', '2022-06-22 18:53:03'),
(3354, 363, 'parent', 'border-radius', '5px', '2022-06-22 18:53:03'),
(3355, 363, 'parent', 'top', '436.6319885253906px', '2022-06-22 18:53:03'),
(3356, 363, 'parent', 'left', '886.3136596679688px', '2022-06-22 18:53:03'),
(3357, 363, 'parent', 'margin-bottom', '5px', '2022-06-22 18:53:03'),
(3358, 363, 'parent', 'min-height', 'fit-content', '2022-06-22 18:53:03'),
(3359, 363, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 18:53:03'),
(3362, 361, 'child', 'font-size', '65px', '2022-06-22 18:56:27'),
(3363, 361, 'child', 'font-weight', '700', '2022-06-22 18:56:29'),
(3364, 361, 'child', 'color', '#ffffff', '2022-06-22 18:56:42'),
(3365, 361, 'child', 'border', 'none', '2022-06-22 18:57:37'),
(3366, 363, 'child', 'font-size', '70px', '2022-06-22 18:58:27'),
(3367, 363, 'child', 'font-weight', '800', '2022-06-22 18:58:29'),
(3368, 363, 'child', 'color', '#ffffff', '2022-06-22 18:58:36'),
(3369, 363, 'child', 'border', 'none', '2022-06-22 19:00:01'),
(3370, 364, 'parent', 'width', '2240px', '2022-06-22 19:02:05'),
(3371, 364, 'parent', 'height', 'auto', '2022-06-22 19:02:05'),
(3372, 364, 'parent', 'display', 'inline-block', '2022-06-22 19:02:05'),
(3373, 364, 'parent', 'padding', '0px 18px 20px 4px', '2022-06-22 19:02:05'),
(3374, 364, 'parent', 'text-align', 'center', '2022-06-22 19:02:05'),
(3375, 364, 'parent', 'position', 'absolute', '2022-06-22 19:02:05'),
(3376, 364, 'parent', 'border-radius', '5px', '2022-06-22 19:02:05'),
(3377, 364, 'parent', 'top', '849.7106628417969px', '2022-06-22 19:02:05'),
(3378, 364, 'parent', 'left', '87.87615966796875px', '2022-06-22 19:02:05'),
(3379, 364, 'parent', 'margin-bottom', '5px', '2022-06-22 19:02:05'),
(3380, 364, 'parent', 'min-height', 'fit-content', '2022-06-22 19:02:05'),
(3381, 364, 'parent', 'transform', 'rotate(0deg)', '2022-06-22 19:02:05'),
(3382, 364, 'child', 'font-weight', '600', '2022-06-22 19:03:16'),
(3383, 364, 'child', 'color', '#ff0a0a', '2022-06-22 19:03:22'),
(3384, 364, 'child', 'border', 'none', '2022-06-22 19:03:29'),
(3385, 364, 'child', '-webkit-text-stroke', '2px #ff0000', '2022-06-22 19:03:42'),
(3386, 365, 'parent', 'width', '737.946px', '2022-06-22 19:06:24'),
(3387, 365, 'parent', 'height', '835.938px', '2022-06-22 19:06:24'),
(3388, 365, 'parent', 'display', 'inline-block', '2022-06-22 19:06:24'),
(3389, 365, 'parent', 'padding', '0px 0px 5px', '2022-06-22 19:06:24'),
(3390, 365, 'parent', 'position', 'absolute', '2022-06-22 19:06:24'),
(3391, 365, 'parent', 'top', '100.6324462890625px', '2022-06-22 19:06:24'),
(3392, 365, 'parent', 'left', '30.65478515625px', '2022-06-22 19:06:24'),
(3393, 365, 'parent', 'transform', 'scaleX(-1)', '2022-06-22 19:06:24'),
(3876, 426, 'parent', 'width', '40%', '2022-07-05 12:48:54'),
(3877, 426, 'parent', 'height', 'auto', '2022-07-05 12:48:54'),
(3878, 426, 'parent', 'display', 'inline-block', '2022-07-05 12:48:54'),
(3879, 426, 'parent', 'padding', '0px 0px 5px', '2022-07-05 12:48:54'),
(3880, 426, 'parent', 'position', 'absolute', '2022-07-05 12:48:54'),
(3881, 426, 'parent', 'top', '30%', '2022-07-05 12:48:54'),
(3882, 426, 'parent', 'left', '30%', '2022-07-05 12:48:54'),
(3883, 426, 'parent', 'transform', 'rotate(0deg)', '2022-07-05 12:48:54'),
(3884, 427, 'parent', 'width', '40%', '2022-07-05 12:50:28'),
(3885, 427, 'parent', 'height', 'auto', '2022-07-05 12:50:28'),
(3886, 427, 'parent', 'display', 'inline-block', '2022-07-05 12:50:28'),
(3887, 427, 'parent', 'padding', '0px 0px 5px', '2022-07-05 12:50:28'),
(3888, 427, 'parent', 'position', 'absolute', '2022-07-05 12:50:28'),
(3889, 427, 'parent', 'top', '30%', '2022-07-05 12:50:28'),
(3890, 427, 'parent', 'left', '30%', '2022-07-05 12:50:28'),
(3891, 427, 'parent', 'transform', 'rotate(0deg)', '2022-07-05 12:50:28'),
(3900, 365, 'parent', 'opacity', '1', '2022-07-12 11:54:28'),
(3901, 365, 'parent', 'filter', 'brightness(1.1)', '2022-07-12 11:54:34'),
(3902, 429, 'parent', 'width', '827.257px', '2022-07-12 12:11:44'),
(3903, 429, 'parent', 'height', '460.706px', '2022-07-12 12:11:44'),
(3904, 429, 'parent', 'display', 'inline-block', '2022-07-12 12:11:44'),
(3905, 429, 'parent', 'padding', '0px 0px 5px', '2022-07-12 12:11:44'),
(3906, 429, 'parent', 'position', 'absolute', '2022-07-12 12:11:44'),
(3907, 429, 'parent', 'top', '116.78242492675781px', '2022-07-12 12:11:44'),
(3908, 429, 'parent', 'left', '121.7303466796875px', '2022-07-12 12:11:44'),
(3909, 429, 'parent', 'transform', 'rotate(0deg)', '2022-07-12 12:11:44'),
(3910, 430, 'parent', 'width', '100%', '2022-07-12 12:51:28'),
(3911, 430, 'parent', 'height', '100%', '2022-07-12 12:51:28'),
(3912, 430, 'parent', 'display', 'inline-block', '2022-07-12 12:51:28'),
(3913, 430, 'parent', 'padding', '0px 0px 5px', '2022-07-12 12:51:28'),
(3914, 430, 'parent', 'position', 'absolute', '2022-07-12 12:51:28'),
(3915, 430, 'parent', 'top', '0px', '2022-07-12 12:51:28'),
(3916, 430, 'parent', 'left', '-9.982666015625px', '2022-07-12 12:51:28'),
(3917, 430, 'parent', 'transform', 'rotate(0deg)', '2022-07-12 12:51:28'),
(3918, 431, 'parent', 'width', '40%', '2022-07-13 12:19:58'),
(3919, 431, 'parent', 'height', 'auto', '2022-07-13 12:19:58'),
(3920, 431, 'parent', 'display', 'inline-block', '2022-07-13 12:19:58'),
(3921, 431, 'parent', 'padding', '0px 0px 5px', '2022-07-13 12:19:58'),
(3922, 431, 'parent', 'position', 'absolute', '2022-07-13 12:19:58'),
(3923, 431, 'parent', 'top', '236.92710876464844px', '2022-07-13 12:19:58'),
(3924, 431, 'parent', 'left', '421.90972900390625px', '2022-07-13 12:19:58'),
(3925, 431, 'parent', 'transform', 'rotate(0deg)', '2022-07-13 12:19:58'),
(3926, 432, 'parent', 'width', '40%', '2022-07-13 12:20:45'),
(3927, 432, 'parent', 'height', 'auto', '2022-07-13 12:20:45'),
(3928, 432, 'parent', 'display', 'inline-block', '2022-07-13 12:20:45'),
(3929, 432, 'parent', 'padding', '0px 0px 5px', '2022-07-13 12:20:45'),
(3930, 432, 'parent', 'position', 'absolute', '2022-07-13 12:20:45'),
(3931, 432, 'parent', 'top', '30%', '2022-07-13 12:20:45'),
(3932, 432, 'parent', 'left', '30%', '2022-07-13 12:20:45'),
(3933, 432, 'parent', 'transform', 'rotate(0deg)', '2022-07-13 12:20:45'),
(3934, 433, 'parent', 'width', '40%', '2022-07-13 12:29:12'),
(3935, 433, 'parent', 'height', 'auto', '2022-07-13 12:29:12'),
(3936, 433, 'parent', 'display', 'inline-block', '2022-07-13 12:29:12'),
(3937, 433, 'parent', 'padding', '0px 0px 5px', '2022-07-13 12:29:12'),
(3938, 433, 'parent', 'position', 'absolute', '2022-07-13 12:29:12'),
(3939, 433, 'parent', 'top', '246.93450927734375px', '2022-07-13 12:29:12'),
(3940, 433, 'parent', 'left', '559.9180908203125px', '2022-07-13 12:29:12'),
(3941, 433, 'parent', 'transform', 'rotate(0deg)', '2022-07-13 12:29:12'),
(3950, 435, 'parent', 'width', '40%', '2022-07-21 10:19:03'),
(3951, 435, 'parent', 'height', 'auto', '2022-07-21 10:19:03'),
(3952, 435, 'parent', 'display', 'inline-block', '2022-07-21 10:19:03'),
(3953, 435, 'parent', 'padding', '0px 0px 5px', '2022-07-21 10:19:03'),
(3954, 435, 'parent', 'position', 'absolute', '2022-07-21 10:19:03'),
(3955, 435, 'parent', 'top', '273.95835876464844px', '2022-07-21 10:19:03'),
(3956, 435, 'parent', 'left', '1024.8843383789062px', '2022-07-21 10:19:03'),
(3957, 435, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 10:19:03'),
(3958, 435, 'parent', 'filter', 'grayscale(1)', '2022-07-21 10:20:05'),
(3967, 437, 'parent', 'width', '40%', '2022-07-21 10:38:28'),
(3968, 437, 'parent', 'height', 'auto', '2022-07-21 10:38:28'),
(3969, 437, 'parent', 'display', 'inline-block', '2022-07-21 10:38:28'),
(3970, 437, 'parent', 'padding', '0px 0px 5px', '2022-07-21 10:38:28'),
(3971, 437, 'parent', 'position', 'absolute', '2022-07-21 10:38:28'),
(3972, 437, 'parent', 'top', '30%', '2022-07-21 10:38:28'),
(3973, 437, 'parent', 'left', '30%', '2022-07-21 10:38:28'),
(3974, 437, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 10:38:28'),
(3975, 438, 'parent', 'width', '1971.65px', '2022-07-21 12:49:27'),
(3976, 438, 'parent', 'height', '1097.4px', '2022-07-21 12:49:27'),
(3977, 438, 'parent', 'display', 'inline-block', '2022-07-21 12:49:27'),
(3978, 438, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:49:27'),
(3979, 438, 'parent', 'position', 'absolute', '2022-07-21 12:49:27'),
(3980, 438, 'parent', 'top', '-18.05804443359375px', '2022-07-21 12:49:27'),
(3981, 438, 'parent', 'left', '-17.0908203125px', '2022-07-21 12:49:27'),
(3982, 438, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:49:27'),
(3983, 439, 'parent', 'width', '40%', '2022-07-21 12:49:27'),
(3984, 439, 'parent', 'height', 'auto', '2022-07-21 12:49:27'),
(3985, 439, 'parent', 'display', 'inline-block', '2022-07-21 12:49:27'),
(3986, 439, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:49:27'),
(3987, 439, 'parent', 'position', 'absolute', '2022-07-21 12:49:27'),
(3988, 439, 'parent', 'top', '-4.022003173828125px', '2022-07-21 12:49:27'),
(3989, 439, 'parent', 'left', '1144.9363403320312px', '2022-07-21 12:49:27'),
(3990, 439, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:49:27'),
(3991, 439, 'parent', 'filter', 'grayscale(1)', '2022-07-21 12:49:27'),
(4000, 441, 'parent', 'width', '40%', '2022-07-21 12:49:27'),
(4001, 441, 'parent', 'height', 'auto', '2022-07-21 12:49:27'),
(4002, 441, 'parent', 'display', 'inline-block', '2022-07-21 12:49:27'),
(4003, 441, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:49:27'),
(4004, 441, 'parent', 'position', 'absolute', '2022-07-21 12:49:27'),
(4005, 441, 'parent', 'top', '30%', '2022-07-21 12:49:27'),
(4006, 441, 'parent', 'left', '30%', '2022-07-21 12:49:27'),
(4007, 441, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:49:27'),
(4008, 442, 'parent', 'width', '1971.65px', '2022-07-21 12:56:33'),
(4009, 442, 'parent', 'height', '1097.4px', '2022-07-21 12:56:33'),
(4010, 442, 'parent', 'display', 'inline-block', '2022-07-21 12:56:33'),
(4011, 442, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:56:33'),
(4012, 442, 'parent', 'position', 'absolute', '2022-07-21 12:56:33'),
(4013, 442, 'parent', 'top', '-18.05804443359375px', '2022-07-21 12:56:33'),
(4014, 442, 'parent', 'left', '-17.0908203125px', '2022-07-21 12:56:33'),
(4015, 442, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:56:33'),
(4016, 443, 'parent', 'width', '40%', '2022-07-21 12:56:33'),
(4017, 443, 'parent', 'height', 'auto', '2022-07-21 12:56:33'),
(4018, 443, 'parent', 'display', 'inline-block', '2022-07-21 12:56:33'),
(4019, 443, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:56:33'),
(4020, 443, 'parent', 'position', 'absolute', '2022-07-21 12:56:33'),
(4021, 443, 'parent', 'top', '-4.022003173828125px', '2022-07-21 12:56:33'),
(4022, 443, 'parent', 'left', '1144.9363403320312px', '2022-07-21 12:56:33'),
(4023, 443, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:56:33'),
(4024, 443, 'parent', 'filter', 'grayscale(1)', '2022-07-21 12:56:33'),
(4025, 444, 'parent', 'width', '40%', '2022-07-21 12:56:33'),
(4026, 444, 'parent', 'height', 'auto', '2022-07-21 12:56:33'),
(4027, 444, 'parent', 'display', 'inline-block', '2022-07-21 12:56:33'),
(4028, 444, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:56:33'),
(4029, 444, 'parent', 'position', 'absolute', '2022-07-21 12:56:33'),
(4030, 444, 'parent', 'top', '809.9181518554688px', '2022-07-21 12:56:33'),
(4031, 444, 'parent', 'left', '-7.0833740234375px', '2022-07-21 12:56:33'),
(4032, 444, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:56:33'),
(4033, 445, 'parent', 'width', '40%', '2022-07-21 12:56:33'),
(4034, 445, 'parent', 'height', 'auto', '2022-07-21 12:56:33'),
(4035, 445, 'parent', 'display', 'inline-block', '2022-07-21 12:56:33'),
(4036, 445, 'parent', 'padding', '0px 0px 5px', '2022-07-21 12:56:33'),
(4037, 445, 'parent', 'position', 'absolute', '2022-07-21 12:56:33'),
(4038, 445, 'parent', 'top', '30%', '2022-07-21 12:56:33'),
(4039, 445, 'parent', 'left', '30%', '2022-07-21 12:56:33'),
(4040, 445, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 12:56:33'),
(4041, 446, 'parent', 'width', '1971.65px', '2022-07-21 13:01:07'),
(4042, 446, 'parent', 'height', '1097.4px', '2022-07-21 13:01:07'),
(4043, 446, 'parent', 'display', 'inline-block', '2022-07-21 13:01:07'),
(4044, 446, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:01:07'),
(4045, 446, 'parent', 'position', 'absolute', '2022-07-21 13:01:07'),
(4046, 446, 'parent', 'top', '-18.05804443359375px', '2022-07-21 13:01:07'),
(4047, 446, 'parent', 'left', '-17.0908203125px', '2022-07-21 13:01:07'),
(4048, 446, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:01:07'),
(4049, 447, 'parent', 'width', '40%', '2022-07-21 13:01:07'),
(4050, 447, 'parent', 'height', 'auto', '2022-07-21 13:01:07'),
(4051, 447, 'parent', 'display', 'inline-block', '2022-07-21 13:01:07'),
(4052, 447, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:01:07'),
(4053, 447, 'parent', 'position', 'absolute', '2022-07-21 13:01:07'),
(4054, 447, 'parent', 'top', '-4.022003173828125px', '2022-07-21 13:01:07'),
(4055, 447, 'parent', 'left', '1144.9363403320312px', '2022-07-21 13:01:07'),
(4056, 447, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:01:07'),
(4057, 447, 'parent', 'filter', 'grayscale(1)', '2022-07-21 13:01:07'),
(4058, 448, 'parent', 'width', '40%', '2022-07-21 13:01:07'),
(4059, 448, 'parent', 'height', 'auto', '2022-07-21 13:01:07'),
(4060, 448, 'parent', 'display', 'inline-block', '2022-07-21 13:01:07'),
(4061, 448, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:01:07'),
(4062, 448, 'parent', 'position', 'absolute', '2022-07-21 13:01:07'),
(4063, 448, 'parent', 'top', '809.9181518554688px', '2022-07-21 13:01:07'),
(4064, 448, 'parent', 'left', '-7.0833740234375px', '2022-07-21 13:01:07'),
(4065, 448, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:01:07'),
(4066, 449, 'parent', 'width', '40%', '2022-07-21 13:01:07'),
(4067, 449, 'parent', 'height', 'auto', '2022-07-21 13:01:07'),
(4068, 449, 'parent', 'display', 'inline-block', '2022-07-21 13:01:07'),
(4069, 449, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:01:07'),
(4070, 449, 'parent', 'position', 'absolute', '2022-07-21 13:01:07'),
(4071, 449, 'parent', 'top', '30%', '2022-07-21 13:01:07'),
(4072, 449, 'parent', 'left', '30%', '2022-07-21 13:01:07'),
(4073, 449, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:01:07'),
(4074, 450, 'parent', 'width', '1971.65px', '2022-07-21 13:02:34'),
(4075, 450, 'parent', 'height', '1097.4px', '2022-07-21 13:02:34'),
(4076, 450, 'parent', 'display', 'inline-block', '2022-07-21 13:02:34'),
(4077, 450, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:02:34'),
(4078, 450, 'parent', 'position', 'absolute', '2022-07-21 13:02:34'),
(4079, 450, 'parent', 'top', '-18.05804443359375px', '2022-07-21 13:02:34'),
(4080, 450, 'parent', 'left', '-17.0908203125px', '2022-07-21 13:02:34'),
(4081, 450, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:02:34'),
(4082, 451, 'parent', 'width', '40%', '2022-07-21 13:02:34'),
(4083, 451, 'parent', 'height', 'auto', '2022-07-21 13:02:34'),
(4084, 451, 'parent', 'display', 'inline-block', '2022-07-21 13:02:34'),
(4085, 451, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:02:34'),
(4086, 451, 'parent', 'position', 'absolute', '2022-07-21 13:02:34'),
(4087, 451, 'parent', 'top', '-4.022003173828125px', '2022-07-21 13:02:34'),
(4088, 451, 'parent', 'left', '1144.9363403320312px', '2022-07-21 13:02:34'),
(4089, 451, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:02:34'),
(4090, 451, 'parent', 'filter', 'grayscale(1)', '2022-07-21 13:02:34'),
(4091, 452, 'parent', 'width', '40%', '2022-07-21 13:02:34'),
(4092, 452, 'parent', 'height', 'auto', '2022-07-21 13:02:34'),
(4093, 452, 'parent', 'display', 'inline-block', '2022-07-21 13:02:34'),
(4094, 452, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:02:34'),
(4095, 452, 'parent', 'position', 'absolute', '2022-07-21 13:02:34'),
(4096, 452, 'parent', 'top', '809.9181518554688px', '2022-07-21 13:02:34'),
(4097, 452, 'parent', 'left', '-7.0833740234375px', '2022-07-21 13:02:34'),
(4098, 452, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:02:34'),
(4099, 453, 'parent', 'width', '40%', '2022-07-21 13:02:34'),
(4100, 453, 'parent', 'height', 'auto', '2022-07-21 13:02:34'),
(4101, 453, 'parent', 'display', 'inline-block', '2022-07-21 13:02:34'),
(4102, 453, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:02:34'),
(4103, 453, 'parent', 'position', 'absolute', '2022-07-21 13:02:34'),
(4104, 453, 'parent', 'top', '30%', '2022-07-21 13:02:34'),
(4105, 453, 'parent', 'left', '30%', '2022-07-21 13:02:34'),
(4106, 453, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:02:34'),
(4107, 454, 'parent', 'width', '1971.65px', '2022-07-21 13:07:45'),
(4108, 454, 'parent', 'height', '1097.4px', '2022-07-21 13:07:45'),
(4109, 454, 'parent', 'display', 'inline-block', '2022-07-21 13:07:45'),
(4110, 454, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:07:45'),
(4111, 454, 'parent', 'position', 'absolute', '2022-07-21 13:07:45'),
(4112, 454, 'parent', 'top', '-18.05804443359375px', '2022-07-21 13:07:45'),
(4113, 454, 'parent', 'left', '-17.0908203125px', '2022-07-21 13:07:45'),
(4114, 454, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:07:45'),
(4115, 455, 'parent', 'width', '40%', '2022-07-21 13:07:45'),
(4116, 455, 'parent', 'height', 'auto', '2022-07-21 13:07:45'),
(4117, 455, 'parent', 'display', 'inline-block', '2022-07-21 13:07:45'),
(4118, 455, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:07:45'),
(4119, 455, 'parent', 'position', 'absolute', '2022-07-21 13:07:45'),
(4120, 455, 'parent', 'top', '-4.022003173828125px', '2022-07-21 13:07:45'),
(4121, 455, 'parent', 'left', '1144.9363403320312px', '2022-07-21 13:07:45'),
(4122, 455, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:07:45'),
(4123, 455, 'parent', 'filter', 'grayscale(1)', '2022-07-21 13:07:45'),
(4124, 456, 'parent', 'width', '40%', '2022-07-21 13:07:45'),
(4125, 456, 'parent', 'height', 'auto', '2022-07-21 13:07:45'),
(4126, 456, 'parent', 'display', 'inline-block', '2022-07-21 13:07:45'),
(4127, 456, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:07:45'),
(4128, 456, 'parent', 'position', 'absolute', '2022-07-21 13:07:45'),
(4129, 456, 'parent', 'top', '809.9181518554688px', '2022-07-21 13:07:45'),
(4130, 456, 'parent', 'left', '-7.0833740234375px', '2022-07-21 13:07:45'),
(4131, 456, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:07:45'),
(4132, 457, 'parent', 'width', '40%', '2022-07-21 13:07:45'),
(4133, 457, 'parent', 'height', 'auto', '2022-07-21 13:07:45'),
(4134, 457, 'parent', 'display', 'inline-block', '2022-07-21 13:07:45'),
(4135, 457, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:07:45'),
(4136, 457, 'parent', 'position', 'absolute', '2022-07-21 13:07:45'),
(4137, 457, 'parent', 'top', '30%', '2022-07-21 13:07:45'),
(4138, 457, 'parent', 'left', '30%', '2022-07-21 13:07:45'),
(4139, 457, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:07:45'),
(4140, 458, 'parent', 'width', '1971.65px', '2022-07-21 13:08:26'),
(4141, 458, 'parent', 'height', '1097.4px', '2022-07-21 13:08:26'),
(4142, 458, 'parent', 'display', 'inline-block', '2022-07-21 13:08:26'),
(4143, 458, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:08:26'),
(4144, 458, 'parent', 'position', 'absolute', '2022-07-21 13:08:26'),
(4145, 458, 'parent', 'top', '-18.05804443359375px', '2022-07-21 13:08:26'),
(4146, 458, 'parent', 'left', '-17.0908203125px', '2022-07-21 13:08:26'),
(4147, 458, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:08:26'),
(4148, 459, 'parent', 'width', '40%', '2022-07-21 13:08:26'),
(4149, 459, 'parent', 'height', 'auto', '2022-07-21 13:08:26'),
(4150, 459, 'parent', 'display', 'inline-block', '2022-07-21 13:08:26'),
(4151, 459, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:08:26'),
(4152, 459, 'parent', 'position', 'absolute', '2022-07-21 13:08:26'),
(4153, 459, 'parent', 'top', '-4.022003173828125px', '2022-07-21 13:08:26'),
(4154, 459, 'parent', 'left', '1144.9363403320312px', '2022-07-21 13:08:26'),
(4155, 459, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:08:26'),
(4156, 459, 'parent', 'filter', 'grayscale(1)', '2022-07-21 13:08:26'),
(4157, 460, 'parent', 'width', '40%', '2022-07-21 13:08:26'),
(4158, 460, 'parent', 'height', 'auto', '2022-07-21 13:08:26'),
(4159, 460, 'parent', 'display', 'inline-block', '2022-07-21 13:08:26'),
(4160, 460, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:08:26'),
(4161, 460, 'parent', 'position', 'absolute', '2022-07-21 13:08:26'),
(4162, 460, 'parent', 'top', '809.9181518554688px', '2022-07-21 13:08:26'),
(4163, 460, 'parent', 'left', '-7.0833740234375px', '2022-07-21 13:08:26'),
(4164, 460, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:08:26'),
(4165, 461, 'parent', 'width', '40%', '2022-07-21 13:08:26'),
(4166, 461, 'parent', 'height', 'auto', '2022-07-21 13:08:26'),
(4167, 461, 'parent', 'display', 'inline-block', '2022-07-21 13:08:26'),
(4168, 461, 'parent', 'padding', '0px 0px 5px', '2022-07-21 13:08:26'),
(4169, 461, 'parent', 'position', 'absolute', '2022-07-21 13:08:26'),
(4170, 461, 'parent', 'top', '30%', '2022-07-21 13:08:26'),
(4171, 461, 'parent', 'left', '30%', '2022-07-21 13:08:26');
INSERT INTO `video_maker_styles` (`id`, `layer_id`, `type`, `style`, `value`, `date`) VALUES
(4172, 461, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 13:08:26'),
(4173, 462, 'parent', 'width', '1971.65px', '2022-07-21 15:45:06'),
(4174, 462, 'parent', 'height', '1097.4px', '2022-07-21 15:45:06'),
(4175, 462, 'parent', 'display', 'inline-block', '2022-07-21 15:45:06'),
(4176, 462, 'parent', 'padding', '0px 0px 5px', '2022-07-21 15:45:06'),
(4177, 462, 'parent', 'position', 'absolute', '2022-07-21 15:45:06'),
(4178, 462, 'parent', 'top', '-18.05804443359375px', '2022-07-21 15:45:06'),
(4179, 462, 'parent', 'left', '-17.0908203125px', '2022-07-21 15:45:06'),
(4180, 462, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 15:45:06'),
(4181, 463, 'parent', 'width', '40%', '2022-07-21 15:45:06'),
(4182, 463, 'parent', 'height', 'auto', '2022-07-21 15:45:06'),
(4183, 463, 'parent', 'display', 'inline-block', '2022-07-21 15:45:06'),
(4184, 463, 'parent', 'padding', '0px 0px 5px', '2022-07-21 15:45:06'),
(4185, 463, 'parent', 'position', 'absolute', '2022-07-21 15:45:06'),
(4186, 463, 'parent', 'top', '-4.022003173828125px', '2022-07-21 15:45:06'),
(4187, 463, 'parent', 'left', '1144.9363403320312px', '2022-07-21 15:45:06'),
(4188, 463, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 15:45:06'),
(4189, 463, 'parent', 'filter', 'grayscale(1)', '2022-07-21 15:45:06'),
(4190, 464, 'parent', 'width', '40%', '2022-07-21 15:45:06'),
(4191, 464, 'parent', 'height', 'auto', '2022-07-21 15:45:06'),
(4192, 464, 'parent', 'display', 'inline-block', '2022-07-21 15:45:06'),
(4193, 464, 'parent', 'padding', '0px 0px 5px', '2022-07-21 15:45:06'),
(4194, 464, 'parent', 'position', 'absolute', '2022-07-21 15:45:06'),
(4195, 464, 'parent', 'top', '837.8720092773438px', '2022-07-21 15:45:06'),
(4196, 464, 'parent', 'left', '2.827392578125px', '2022-07-21 15:45:06'),
(4197, 464, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 15:45:06'),
(4198, 465, 'parent', 'width', '40%', '2022-07-21 15:45:06'),
(4199, 465, 'parent', 'height', 'auto', '2022-07-21 15:45:06'),
(4200, 465, 'parent', 'display', 'inline-block', '2022-07-21 15:45:06'),
(4201, 465, 'parent', 'padding', '0px 0px 5px', '2022-07-21 15:45:06'),
(4202, 465, 'parent', 'position', 'absolute', '2022-07-21 15:45:06'),
(4203, 465, 'parent', 'top', '30%', '2022-07-21 15:45:06'),
(4204, 465, 'parent', 'left', '30%', '2022-07-21 15:45:06'),
(4205, 465, 'parent', 'transform', 'rotate(0deg)', '2022-07-21 15:45:06'),
(4206, 466, 'parent', 'width', '40%', '2022-07-27 11:36:38'),
(4207, 466, 'parent', 'height', 'auto', '2022-07-27 11:36:38'),
(4208, 466, 'parent', 'display', 'inline-block', '2022-07-27 11:36:38'),
(4209, 466, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:36:38'),
(4210, 466, 'parent', 'position', 'absolute', '2022-07-27 11:36:38'),
(4211, 466, 'parent', 'top', '273.95835876464844px', '2022-07-27 11:36:38'),
(4212, 466, 'parent', 'left', '1024.8843383789062px', '2022-07-27 11:36:38'),
(4213, 466, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:36:38'),
(4214, 466, 'parent', 'filter', 'grayscale(1)', '2022-07-27 11:36:38'),
(4215, 467, 'parent', 'width', '40%', '2022-07-27 11:36:38'),
(4216, 467, 'parent', 'height', 'auto', '2022-07-27 11:36:38'),
(4217, 467, 'parent', 'display', 'inline-block', '2022-07-27 11:36:38'),
(4218, 467, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:36:38'),
(4219, 467, 'parent', 'position', 'absolute', '2022-07-27 11:36:38'),
(4220, 467, 'parent', 'top', '30%', '2022-07-27 11:36:38'),
(4221, 467, 'parent', 'left', '30%', '2022-07-27 11:36:38'),
(4222, 467, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:36:38'),
(4223, 468, 'parent', 'width', '1971.65px', '2022-07-27 11:36:38'),
(4224, 468, 'parent', 'height', '1097.4px', '2022-07-27 11:36:38'),
(4225, 468, 'parent', 'display', 'inline-block', '2022-07-27 11:36:38'),
(4226, 468, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:36:38'),
(4227, 468, 'parent', 'position', 'absolute', '2022-07-27 11:36:38'),
(4228, 468, 'parent', 'top', '-18.05804443359375px', '2022-07-27 11:36:38'),
(4229, 468, 'parent', 'left', '-17.0908203125px', '2022-07-27 11:36:38'),
(4230, 468, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:36:38'),
(4231, 469, 'parent', 'width', '40%', '2022-07-27 11:36:38'),
(4232, 469, 'parent', 'height', 'auto', '2022-07-27 11:36:38'),
(4233, 469, 'parent', 'display', 'inline-block', '2022-07-27 11:36:38'),
(4234, 469, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:36:38'),
(4235, 469, 'parent', 'position', 'absolute', '2022-07-27 11:36:38'),
(4236, 469, 'parent', 'top', '-4.022003173828125px', '2022-07-27 11:36:38'),
(4237, 469, 'parent', 'left', '1144.9363403320312px', '2022-07-27 11:36:38'),
(4238, 469, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:36:38'),
(4239, 469, 'parent', 'filter', 'grayscale(1)', '2022-07-27 11:36:38'),
(4240, 470, 'parent', 'width', '40%', '2022-07-27 11:36:38'),
(4241, 470, 'parent', 'height', 'auto', '2022-07-27 11:36:38'),
(4242, 470, 'parent', 'display', 'inline-block', '2022-07-27 11:36:38'),
(4243, 470, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:36:38'),
(4244, 470, 'parent', 'position', 'absolute', '2022-07-27 11:36:38'),
(4245, 470, 'parent', 'top', '837.8720092773438px', '2022-07-27 11:36:38'),
(4246, 470, 'parent', 'left', '2.827392578125px', '2022-07-27 11:36:38'),
(4247, 470, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:36:38'),
(4248, 471, 'parent', 'width', '40%', '2022-07-27 11:36:38'),
(4249, 471, 'parent', 'height', 'auto', '2022-07-27 11:36:38'),
(4250, 471, 'parent', 'display', 'inline-block', '2022-07-27 11:36:38'),
(4251, 471, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:36:38'),
(4252, 471, 'parent', 'position', 'absolute', '2022-07-27 11:36:38'),
(4253, 471, 'parent', 'top', '30%', '2022-07-27 11:36:38'),
(4254, 471, 'parent', 'left', '30%', '2022-07-27 11:36:38'),
(4255, 471, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:36:38'),
(4256, 472, 'parent', 'width', '40%', '2022-07-27 11:38:35'),
(4257, 472, 'parent', 'height', 'auto', '2022-07-27 11:38:35'),
(4258, 472, 'parent', 'display', 'inline-block', '2022-07-27 11:38:35'),
(4259, 472, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:38:35'),
(4260, 472, 'parent', 'position', 'absolute', '2022-07-27 11:38:35'),
(4261, 472, 'parent', 'top', '273.95835876464844px', '2022-07-27 11:38:35'),
(4262, 472, 'parent', 'left', '1024.8843383789062px', '2022-07-27 11:38:35'),
(4263, 472, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:38:35'),
(4264, 472, 'parent', 'filter', 'grayscale(1)', '2022-07-27 11:38:35'),
(4265, 473, 'parent', 'width', '40%', '2022-07-27 11:38:35'),
(4266, 473, 'parent', 'height', 'auto', '2022-07-27 11:38:35'),
(4267, 473, 'parent', 'display', 'inline-block', '2022-07-27 11:38:35'),
(4268, 473, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:38:35'),
(4269, 473, 'parent', 'position', 'absolute', '2022-07-27 11:38:35'),
(4270, 473, 'parent', 'top', '30%', '2022-07-27 11:38:35'),
(4271, 473, 'parent', 'left', '30%', '2022-07-27 11:38:35'),
(4272, 473, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:38:35'),
(4273, 474, 'parent', 'width', '1971.65px', '2022-07-27 11:38:35'),
(4274, 474, 'parent', 'height', '1097.4px', '2022-07-27 11:38:35'),
(4275, 474, 'parent', 'display', 'inline-block', '2022-07-27 11:38:35'),
(4276, 474, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:38:35'),
(4277, 474, 'parent', 'position', 'absolute', '2022-07-27 11:38:35'),
(4278, 474, 'parent', 'top', '-18.05804443359375px', '2022-07-27 11:38:35'),
(4279, 474, 'parent', 'left', '-17.0908203125px', '2022-07-27 11:38:35'),
(4280, 474, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:38:35'),
(4281, 475, 'parent', 'width', '40%', '2022-07-27 11:38:35'),
(4282, 475, 'parent', 'height', 'auto', '2022-07-27 11:38:35'),
(4283, 475, 'parent', 'display', 'inline-block', '2022-07-27 11:38:35'),
(4284, 475, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:38:35'),
(4285, 475, 'parent', 'position', 'absolute', '2022-07-27 11:38:35'),
(4286, 475, 'parent', 'top', '-4.022003173828125px', '2022-07-27 11:38:35'),
(4287, 475, 'parent', 'left', '1144.9363403320312px', '2022-07-27 11:38:35'),
(4288, 475, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:38:35'),
(4289, 475, 'parent', 'filter', 'grayscale(1)', '2022-07-27 11:38:35'),
(4290, 476, 'parent', 'width', '40%', '2022-07-27 11:38:35'),
(4291, 476, 'parent', 'height', 'auto', '2022-07-27 11:38:35'),
(4292, 476, 'parent', 'display', 'inline-block', '2022-07-27 11:38:35'),
(4293, 476, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:38:35'),
(4294, 476, 'parent', 'position', 'absolute', '2022-07-27 11:38:35'),
(4295, 476, 'parent', 'top', '837.8720092773438px', '2022-07-27 11:38:35'),
(4296, 476, 'parent', 'left', '2.827392578125px', '2022-07-27 11:38:35'),
(4297, 476, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:38:35'),
(4298, 477, 'parent', 'width', '40%', '2022-07-27 11:38:35'),
(4299, 477, 'parent', 'height', 'auto', '2022-07-27 11:38:35'),
(4300, 477, 'parent', 'display', 'inline-block', '2022-07-27 11:38:35'),
(4301, 477, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:38:35'),
(4302, 477, 'parent', 'position', 'absolute', '2022-07-27 11:38:35'),
(4303, 477, 'parent', 'top', '30%', '2022-07-27 11:38:35'),
(4304, 477, 'parent', 'left', '30%', '2022-07-27 11:38:35'),
(4305, 477, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:38:35'),
(4456, 496, 'parent', 'width', '40%', '2022-07-27 11:46:05'),
(4457, 496, 'parent', 'height', 'auto', '2022-07-27 11:46:05'),
(4458, 496, 'parent', 'display', 'inline-block', '2022-07-27 11:46:05'),
(4459, 496, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:46:05'),
(4460, 496, 'parent', 'position', 'absolute', '2022-07-27 11:46:05'),
(4461, 496, 'parent', 'top', '273.95835876464844px', '2022-07-27 11:46:05'),
(4462, 496, 'parent', 'left', '1024.8843383789062px', '2022-07-27 11:46:05'),
(4463, 496, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:46:05'),
(4464, 496, 'parent', 'filter', 'grayscale(1)', '2022-07-27 11:46:05'),
(4465, 497, 'parent', 'width', '40%', '2022-07-27 11:46:05'),
(4466, 497, 'parent', 'height', 'auto', '2022-07-27 11:46:05'),
(4467, 497, 'parent', 'display', 'inline-block', '2022-07-27 11:46:05'),
(4468, 497, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:46:05'),
(4469, 497, 'parent', 'position', 'absolute', '2022-07-27 11:46:05'),
(4470, 497, 'parent', 'top', '30%', '2022-07-27 11:46:05'),
(4471, 497, 'parent', 'left', '30%', '2022-07-27 11:46:05'),
(4472, 497, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:46:05'),
(4473, 498, 'parent', 'width', '1971.65px', '2022-07-27 11:46:05'),
(4474, 498, 'parent', 'height', '1097.4px', '2022-07-27 11:46:05'),
(4475, 498, 'parent', 'display', 'inline-block', '2022-07-27 11:46:05'),
(4476, 498, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:46:05'),
(4477, 498, 'parent', 'position', 'absolute', '2022-07-27 11:46:05'),
(4478, 498, 'parent', 'top', '-18.05804443359375px', '2022-07-27 11:46:05'),
(4479, 498, 'parent', 'left', '-17.0908203125px', '2022-07-27 11:46:05'),
(4480, 498, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:46:05'),
(4481, 499, 'parent', 'width', '40%', '2022-07-27 11:46:05'),
(4482, 499, 'parent', 'height', 'auto', '2022-07-27 11:46:05'),
(4483, 499, 'parent', 'display', 'inline-block', '2022-07-27 11:46:05'),
(4484, 499, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:46:05'),
(4485, 499, 'parent', 'position', 'absolute', '2022-07-27 11:46:05'),
(4486, 499, 'parent', 'top', '-4.022003173828125px', '2022-07-27 11:46:05'),
(4487, 499, 'parent', 'left', '1144.9363403320312px', '2022-07-27 11:46:05'),
(4488, 499, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:46:05'),
(4489, 499, 'parent', 'filter', 'grayscale(1)', '2022-07-27 11:46:05'),
(4490, 500, 'parent', 'width', '40%', '2022-07-27 11:46:05'),
(4491, 500, 'parent', 'height', 'auto', '2022-07-27 11:46:05'),
(4492, 500, 'parent', 'display', 'inline-block', '2022-07-27 11:46:05'),
(4493, 500, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:46:05'),
(4494, 500, 'parent', 'position', 'absolute', '2022-07-27 11:46:05'),
(4495, 500, 'parent', 'top', '837.8720092773438px', '2022-07-27 11:46:05'),
(4496, 500, 'parent', 'left', '2.827392578125px', '2022-07-27 11:46:05'),
(4497, 500, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:46:05'),
(4498, 501, 'parent', 'width', '40%', '2022-07-27 11:46:05'),
(4499, 501, 'parent', 'height', 'auto', '2022-07-27 11:46:05'),
(4500, 501, 'parent', 'display', 'inline-block', '2022-07-27 11:46:05'),
(4501, 501, 'parent', 'padding', '0px 0px 5px', '2022-07-27 11:46:05'),
(4502, 501, 'parent', 'position', 'absolute', '2022-07-27 11:46:05'),
(4503, 501, 'parent', 'top', '30%', '2022-07-27 11:46:05'),
(4504, 501, 'parent', 'left', '30%', '2022-07-27 11:46:05'),
(4505, 501, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 11:46:05'),
(4523, 504, 'parent', 'width', '1971.65px', '2022-07-27 12:09:48'),
(4524, 504, 'parent', 'height', '1097.4px', '2022-07-27 12:09:48'),
(4525, 504, 'parent', 'display', 'inline-block', '2022-07-27 12:09:48'),
(4526, 504, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:09:48'),
(4527, 504, 'parent', 'position', 'absolute', '2022-07-27 12:09:48'),
(4528, 504, 'parent', 'top', '-18.05804443359375px', '2022-07-27 12:09:48'),
(4529, 504, 'parent', 'left', '-17.0908203125px', '2022-07-27 12:09:48'),
(4530, 504, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:09:48'),
(4531, 505, 'parent', 'width', '40%', '2022-07-27 12:09:48'),
(4532, 505, 'parent', 'height', 'auto', '2022-07-27 12:09:48'),
(4533, 505, 'parent', 'display', 'inline-block', '2022-07-27 12:09:48'),
(4534, 505, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:09:48'),
(4535, 505, 'parent', 'position', 'absolute', '2022-07-27 12:09:48'),
(4536, 505, 'parent', 'top', '-4.022003173828125px', '2022-07-27 12:09:48'),
(4537, 505, 'parent', 'left', '1144.9363403320312px', '2022-07-27 12:09:48'),
(4538, 505, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:09:48'),
(4539, 505, 'parent', 'filter', 'grayscale(1)', '2022-07-27 12:09:48'),
(4540, 506, 'parent', 'width', '40%', '2022-07-27 12:09:48'),
(4541, 506, 'parent', 'height', 'auto', '2022-07-27 12:09:48'),
(4542, 506, 'parent', 'display', 'inline-block', '2022-07-27 12:09:48'),
(4543, 506, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:09:48'),
(4544, 506, 'parent', 'position', 'absolute', '2022-07-27 12:09:48'),
(4545, 506, 'parent', 'top', '837.8720092773438px', '2022-07-27 12:09:48'),
(4546, 506, 'parent', 'left', '2.827392578125px', '2022-07-27 12:09:48'),
(4547, 506, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:09:48'),
(4548, 507, 'parent', 'width', '40%', '2022-07-27 12:09:48'),
(4549, 507, 'parent', 'height', 'auto', '2022-07-27 12:09:48'),
(4550, 507, 'parent', 'display', 'inline-block', '2022-07-27 12:09:48'),
(4551, 507, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:09:48'),
(4552, 507, 'parent', 'position', 'absolute', '2022-07-27 12:09:48'),
(4553, 507, 'parent', 'top', '30%', '2022-07-27 12:09:48'),
(4554, 507, 'parent', 'left', '30%', '2022-07-27 12:09:48'),
(4555, 507, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:09:48'),
(4573, 510, 'parent', 'width', '1971.65px', '2022-07-27 12:11:22'),
(4574, 510, 'parent', 'height', '1097.4px', '2022-07-27 12:11:22'),
(4575, 510, 'parent', 'display', 'inline-block', '2022-07-27 12:11:22'),
(4576, 510, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:11:22'),
(4577, 510, 'parent', 'position', 'absolute', '2022-07-27 12:11:22'),
(4578, 510, 'parent', 'top', '-18.05804443359375px', '2022-07-27 12:11:22'),
(4579, 510, 'parent', 'left', '-17.0908203125px', '2022-07-27 12:11:22'),
(4580, 510, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:11:22'),
(4581, 511, 'parent', 'width', '40%', '2022-07-27 12:11:22'),
(4582, 511, 'parent', 'height', 'auto', '2022-07-27 12:11:22'),
(4583, 511, 'parent', 'display', 'inline-block', '2022-07-27 12:11:22'),
(4584, 511, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:11:22'),
(4585, 511, 'parent', 'position', 'absolute', '2022-07-27 12:11:22'),
(4586, 511, 'parent', 'top', '11.950225830078125px', '2022-07-27 12:11:22'),
(4587, 511, 'parent', 'left', '1087.9050903320312px', '2022-07-27 12:11:22'),
(4588, 511, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:11:22'),
(4589, 511, 'parent', 'filter', 'grayscale(1)', '2022-07-27 12:11:22'),
(4590, 512, 'parent', 'width', '40%', '2022-07-27 12:11:22'),
(4591, 512, 'parent', 'height', 'auto', '2022-07-27 12:11:22'),
(4592, 512, 'parent', 'display', 'inline-block', '2022-07-27 12:11:22'),
(4593, 512, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:11:22'),
(4594, 512, 'parent', 'position', 'absolute', '2022-07-27 12:11:22'),
(4595, 512, 'parent', 'top', '837.8720092773438px', '2022-07-27 12:11:22'),
(4596, 512, 'parent', 'left', '2.827392578125px', '2022-07-27 12:11:22'),
(4597, 512, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:11:22'),
(4598, 513, 'parent', 'width', '40%', '2022-07-27 12:11:22'),
(4599, 513, 'parent', 'height', 'auto', '2022-07-27 12:11:22'),
(4600, 513, 'parent', 'display', 'inline-block', '2022-07-27 12:11:22'),
(4601, 513, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:11:22'),
(4602, 513, 'parent', 'position', 'absolute', '2022-07-27 12:11:22'),
(4603, 513, 'parent', 'top', '30%', '2022-07-27 12:11:22'),
(4604, 513, 'parent', 'left', '30%', '2022-07-27 12:11:22'),
(4605, 513, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:11:22'),
(4890, 534, 'parent', 'width', '40%', '2022-08-27 18:05:00'),
(4891, 534, 'parent', 'height', 'auto', '2022-08-27 18:05:00'),
(4892, 534, 'parent', 'display', 'inline-block', '2022-08-27 18:05:00'),
(4893, 534, 'parent', 'padding', '0px 0px 5px', '2022-08-27 18:05:00'),
(4894, 534, 'parent', 'position', 'absolute', '2022-08-27 18:05:00'),
(4895, 534, 'parent', 'top', '30%', '2022-08-27 18:05:00'),
(4896, 534, 'parent', 'left', '30%', '2022-08-27 18:05:00'),
(4897, 534, 'parent', 'transform', 'rotate(0deg)', '2022-08-27 18:05:00'),
(4898, 535, 'parent', 'width', '40%', '2022-08-27 18:05:54'),
(4899, 535, 'parent', 'height', 'auto', '2022-08-27 18:05:54'),
(4900, 535, 'parent', 'display', 'inline-block', '2022-08-27 18:05:54'),
(4901, 535, 'parent', 'padding', '0px 0px 5px', '2022-08-27 18:05:54'),
(4902, 535, 'parent', 'position', 'absolute', '2022-08-27 18:05:54'),
(4903, 535, 'parent', 'top', '30%', '2022-08-27 18:05:54'),
(4904, 535, 'parent', 'left', '30%', '2022-08-27 18:05:54'),
(4905, 535, 'parent', 'transform', 'rotate(0deg)', '2022-08-27 18:05:54'),
(4906, 536, 'parent', 'width', '40%', '2022-08-27 18:13:50'),
(4907, 536, 'parent', 'height', 'auto', '2022-08-27 18:13:50'),
(4908, 536, 'parent', 'display', 'inline-block', '2022-08-27 18:13:50'),
(4909, 536, 'parent', 'padding', '0px 0px 5px', '2022-08-27 18:13:50'),
(4910, 536, 'parent', 'position', 'absolute', '2022-08-27 18:13:50'),
(4911, 536, 'parent', 'top', '30%', '2022-08-27 18:13:50'),
(4912, 536, 'parent', 'left', '30%', '2022-08-27 18:13:50'),
(4913, 536, 'parent', 'transform', 'rotate(0deg)', '2022-08-27 18:13:50'),
(4914, 537, 'parent', 'width', '40%', '2022-08-27 18:14:13'),
(4915, 537, 'parent', 'height', 'auto', '2022-08-27 18:14:13'),
(4916, 537, 'parent', 'display', 'inline-block', '2022-08-27 18:14:13'),
(4917, 537, 'parent', 'padding', '0px 0px 5px', '2022-08-27 18:14:13'),
(4918, 537, 'parent', 'position', 'absolute', '2022-08-27 18:14:13'),
(4919, 537, 'parent', 'top', '30%', '2022-08-27 18:14:13'),
(4920, 537, 'parent', 'left', '30%', '2022-08-27 18:14:13'),
(4921, 537, 'parent', 'transform', 'rotate(0deg)', '2022-08-27 18:14:13'),
(4922, 538, 'parent', 'width', '40%', '2022-08-27 18:14:29'),
(4923, 538, 'parent', 'height', 'auto', '2022-08-27 18:14:29'),
(4924, 538, 'parent', 'display', 'inline-block', '2022-08-27 18:14:29'),
(4925, 538, 'parent', 'padding', '0px 0px 5px', '2022-08-27 18:14:29'),
(4926, 538, 'parent', 'position', 'absolute', '2022-08-27 18:14:29'),
(4927, 538, 'parent', 'top', '30%', '2022-08-27 18:14:29'),
(4928, 538, 'parent', 'left', '30%', '2022-08-27 18:14:29'),
(4929, 538, 'parent', 'transform', 'rotate(0deg)', '2022-08-27 18:14:29'),
(4930, 539, 'parent', 'width', '40%', '2022-08-27 18:14:54'),
(4931, 539, 'parent', 'height', 'auto', '2022-08-27 18:14:54'),
(4932, 539, 'parent', 'display', 'inline-block', '2022-08-27 18:14:54'),
(4933, 539, 'parent', 'padding', '0px 0px 5px', '2022-08-27 18:14:54'),
(4934, 539, 'parent', 'position', 'absolute', '2022-08-27 18:14:54'),
(4935, 539, 'parent', 'top', '30%', '2022-08-27 18:14:54'),
(4936, 539, 'parent', 'left', '30%', '2022-08-27 18:14:54'),
(4937, 539, 'parent', 'transform', 'rotate(0deg)', '2022-08-27 18:14:54'),
(4962, 543, 'parent', 'width', '27%', '2022-09-01 11:13:15'),
(4963, 543, 'parent', 'height', 'auto', '2022-09-01 11:13:15'),
(4964, 543, 'parent', 'display', 'inline-block', '2022-09-01 11:13:15'),
(4965, 543, 'parent', 'padding', '0px 0px 5px', '2022-09-01 11:13:15'),
(4966, 543, 'parent', 'position', 'absolute', '2022-09-01 11:13:15'),
(4967, 543, 'parent', 'top', '411.8526611328125px', '2022-09-01 11:13:15'),
(4968, 543, 'parent', 'left', '734.8065185546875px', '2022-09-01 11:13:15'),
(4969, 543, 'parent', 'transform', 'rotate(0deg)', '2022-09-01 11:13:15'),
(4970, 544, 'parent', 'width', '29%', '2022-09-01 11:13:23'),
(4971, 544, 'parent', 'height', 'auto', '2022-09-01 11:13:23'),
(4972, 544, 'parent', 'display', 'inline-block', '2022-09-01 11:13:23'),
(4973, 544, 'parent', 'padding', '0px 0px 5px', '2022-09-01 11:13:23'),
(4974, 544, 'parent', 'position', 'absolute', '2022-09-01 11:13:23'),
(4975, 544, 'parent', 'top', '376.80804443359375px', '2022-09-01 11:13:23'),
(4976, 544, 'parent', 'left', '711.7410888671875px', '2022-09-01 11:13:23'),
(4977, 544, 'parent', 'transform', 'rotate(0deg)', '2022-09-01 11:13:23'),
(4978, 545, 'parent', 'width', '45%', '2022-09-01 11:13:27'),
(4979, 545, 'parent', 'height', 'auto', '2022-09-01 11:13:27'),
(4980, 545, 'parent', 'display', 'inline-block', '2022-09-01 11:13:27'),
(4981, 545, 'parent', 'padding', '0px 0px 5px', '2022-09-01 11:13:27'),
(4982, 545, 'parent', 'position', 'absolute', '2022-09-01 11:13:27'),
(4983, 545, 'parent', 'top', '-106.04165649414062px', '2022-09-01 11:13:27'),
(4984, 545, 'parent', 'left', '539.75439453125px', '2022-09-01 11:13:27'),
(4985, 545, 'parent', 'transform', 'rotate(0deg)', '2022-09-01 11:13:27'),
(4986, 546, 'parent', 'width', '35%', '2022-09-01 11:20:35'),
(4987, 546, 'parent', 'height', 'auto', '2022-09-01 11:20:35'),
(4988, 546, 'parent', 'display', 'inline-block', '2022-09-01 11:20:35'),
(4989, 546, 'parent', 'padding', '0px 0px 5px', '2022-09-01 11:20:35'),
(4990, 546, 'parent', 'position', 'absolute', '2022-09-01 11:20:35'),
(4991, 546, 'parent', 'top', '258.85418701171875px', '2022-09-01 11:20:35'),
(4992, 546, 'parent', 'left', '632.8497314453125px', '2022-09-01 11:20:35'),
(4993, 546, 'parent', 'transform', 'rotate(0deg)', '2022-09-01 11:20:35'),
(4994, 547, 'parent', 'width', '57%', '2022-09-01 11:20:40'),
(4995, 547, 'parent', 'height', 'auto', '2022-09-01 11:20:40'),
(4996, 547, 'parent', 'display', 'inline-block', '2022-09-01 11:20:40'),
(4997, 547, 'parent', 'padding', '0px 0px 5px', '2022-09-01 11:20:40'),
(4998, 547, 'parent', 'position', 'absolute', '2022-09-01 11:20:40'),
(4999, 547, 'parent', 'top', '-265.9598083496094px', '2022-09-01 11:20:40'),
(5000, 547, 'parent', 'left', '406.919677734375px', '2022-09-01 11:20:40'),
(5001, 547, 'parent', 'transform', 'rotate(0deg)', '2022-09-01 11:20:40'),
(5002, 548, 'parent', 'width', '40%', '2022-09-01 11:20:42'),
(5003, 548, 'parent', 'height', 'auto', '2022-09-01 11:20:42'),
(5004, 548, 'parent', 'display', 'inline-block', '2022-09-01 11:20:42'),
(5005, 548, 'parent', 'padding', '0px 0px 5px', '2022-09-01 11:20:42'),
(5006, 548, 'parent', 'position', 'absolute', '2022-09-01 11:20:42'),
(5007, 548, 'parent', 'top', '178.83184814453125px', '2022-09-01 11:20:42'),
(5008, 548, 'parent', 'left', '569.7916259765625px', '2022-09-01 11:20:42'),
(5009, 548, 'parent', 'transform', 'rotate(0deg)', '2022-09-01 11:20:42'),
(5077, 0, 'child', 'font-size', '175pxpx', '2022-09-02 21:15:37'),
(5124, 561, 'parent', 'width', '40%', '2022-09-09 17:56:55'),
(5125, 561, 'parent', 'height', 'auto', '2022-09-09 17:56:55'),
(5126, 561, 'parent', 'display', 'inline-block', '2022-09-09 17:56:55'),
(5127, 561, 'parent', 'padding', '0px 0px 5px', '2022-09-09 17:56:55'),
(5128, 561, 'parent', 'position', 'absolute', '2022-09-09 17:56:55'),
(5129, 561, 'parent', 'top', '117.93838500976562px', '2022-09-09 17:56:55'),
(5130, 561, 'parent', 'left', '94.93487548828125px', '2022-09-09 17:56:55'),
(5131, 561, 'parent', 'transform', 'rotate(0deg)', '2022-09-09 17:56:55'),
(5132, 562, 'parent', 'width', '40%', '2022-09-09 17:56:56'),
(5133, 562, 'parent', 'height', 'auto', '2022-09-09 17:56:56'),
(5134, 562, 'parent', 'display', 'inline-block', '2022-09-09 17:56:56'),
(5135, 562, 'parent', 'padding', '0px 0px 5px', '2022-09-09 17:56:56'),
(5136, 562, 'parent', 'position', 'absolute', '2022-09-09 17:56:56'),
(5137, 562, 'parent', 'top', '627.9427795410156px', '2022-09-09 17:56:56'),
(5138, 562, 'parent', 'left', '1013.9453735351562px', '2022-09-09 17:56:56'),
(5139, 562, 'parent', 'transform', 'rotate(0deg)', '2022-09-09 17:56:56'),
(5140, 563, 'parent', 'width', '40%', '2022-09-09 19:15:51'),
(5141, 563, 'parent', 'height', 'auto', '2022-09-09 19:15:51'),
(5142, 563, 'parent', 'display', 'inline-block', '2022-09-09 19:15:51'),
(5143, 563, 'parent', 'padding', '0px 0px 5px', '2022-09-09 19:15:51'),
(5144, 563, 'parent', 'position', 'absolute', '2022-09-09 19:15:51'),
(5145, 563, 'parent', 'top', '395.9418640136719px', '2022-09-09 19:15:51'),
(5146, 563, 'parent', 'left', '472.89495849609375px', '2022-09-09 19:15:51'),
(5147, 563, 'parent', 'transform', 'rotate(0deg)', '2022-09-09 19:15:51'),
(5164, 566, 'parent', 'width', '40%', '2022-09-09 20:17:18'),
(5165, 566, 'parent', 'height', 'auto', '2022-09-09 20:17:18'),
(5166, 566, 'parent', 'display', 'inline-block', '2022-09-09 20:17:18'),
(5167, 566, 'parent', 'padding', '0px 0px 5px', '2022-09-09 20:17:18'),
(5168, 566, 'parent', 'position', 'absolute', '2022-09-09 20:17:18'),
(5169, 566, 'parent', 'top', '30%', '2022-09-09 20:17:18'),
(5170, 566, 'parent', 'left', '30%', '2022-09-09 20:17:18'),
(5171, 566, 'parent', 'transform', 'rotate(0deg)', '2022-09-09 20:17:18'),
(5236, 575, 'parent', 'width', '1939.93px', '2022-09-10 18:15:56'),
(5237, 575, 'parent', 'height', '1196.81px', '2022-09-10 18:15:56'),
(5238, 575, 'parent', 'display', 'inline-block', '2022-09-10 18:15:56'),
(5239, 575, 'parent', 'padding', '0px 0px 5px', '2022-09-10 18:15:56'),
(5240, 575, 'parent', 'position', 'absolute', '2022-09-10 18:15:56'),
(5241, 575, 'parent', 'top', '-43.95294189453125px', '2022-09-10 18:15:56'),
(5242, 575, 'parent', 'left', '-7.0211181640625px', '2022-09-10 18:15:56'),
(5243, 575, 'parent', 'transform', 'rotate(0deg)', '2022-09-10 18:15:56'),
(5244, 576, 'parent', 'width', '40%', '2022-09-10 18:16:52'),
(5245, 576, 'parent', 'height', 'auto', '2022-09-10 18:16:52'),
(5246, 576, 'parent', 'display', 'inline-block', '2022-09-10 18:16:52'),
(5247, 576, 'parent', 'padding', '0px 0px 5px', '2022-09-10 18:16:52'),
(5248, 576, 'parent', 'position', 'absolute', '2022-09-10 18:16:52'),
(5249, 576, 'parent', 'top', '340.8603820800781px', '2022-09-10 18:16:52'),
(5250, 576, 'parent', 'left', '612.897705078125px', '2022-09-10 18:16:52'),
(5251, 576, 'parent', 'transform', 'rotate(0deg)', '2022-09-10 18:16:52'),
(5252, 577, 'parent', 'width', '429.956px', '2022-09-10 18:17:08'),
(5253, 577, 'parent', 'height', '429.956px', '2022-09-10 18:17:08'),
(5254, 577, 'parent', 'display', 'inline-block', '2022-09-10 18:17:08'),
(5255, 577, 'parent', 'padding', '0px 0px 5px', '2022-09-10 18:17:08'),
(5256, 577, 'parent', 'vertical-align', 'super', '2022-09-10 18:17:08'),
(5257, 577, 'parent', 'position', 'absolute', '2022-09-10 18:17:08'),
(5258, 577, 'parent', 'min-height', 'fit-content', '2022-09-10 18:17:08'),
(5259, 577, 'parent', 'top', '283.74371337890625px', '2022-09-10 18:17:08'),
(5260, 577, 'parent', 'left', '229.70330810546875px', '2022-09-10 18:17:08'),
(5261, 577, 'parent', 'border', '6px dashed transparent', '2022-09-10 18:17:08'),
(5262, 577, 'parent', 'transform', 'rotate(0deg)', '2022-09-10 18:17:08'),
(5263, 577, 'child', 'height', '435px', '2022-09-10 18:17:08'),
(5264, 577, 'child', 'width', '435px', '2022-09-10 18:17:08'),
(5265, 577, 'grandchild', 'x', '10', '2022-09-10 18:17:08'),
(5266, 577, 'grandchild', 'y', '10', '2022-09-10 18:17:08'),
(5267, 577, 'grandchild', 'width', '415px', '2022-09-10 18:17:08'),
(5268, 577, 'grandchild', 'height', '415px', '2022-09-10 18:17:08'),
(5269, 577, 'grandchild', 'stroke', 'black', '2022-09-10 18:17:08'),
(5270, 577, 'grandchild', 'fill', '#ffbb00', '2022-09-10 18:17:08'),
(5271, 577, 'grandchild', 'stroke-width', '1', '2022-09-10 18:17:08'),
(5272, 576, 'child', 'border', 'none', '2022-09-10 18:17:35'),
(5273, 578, 'parent', 'width', '767.979px', '2022-09-10 18:32:36'),
(5274, 578, 'parent', 'height', '253.815px', '2022-09-10 18:32:36'),
(5275, 578, 'parent', 'display', 'inline-block', '2022-09-10 18:32:36'),
(5276, 578, 'parent', 'padding', '0px 0px 5px', '2022-09-10 18:32:36'),
(5277, 578, 'parent', 'position', 'absolute', '2022-09-10 18:32:36'),
(5278, 578, 'parent', 'top', '319.8376159667969px', '2022-09-10 18:32:36'),
(5279, 578, 'parent', 'left', '629.821533203125px', '2022-09-10 18:32:36'),
(5280, 578, 'parent', 'transform', 'rotate(0deg)', '2022-09-10 18:32:36'),
(5281, 579, 'parent', 'width', '800.933px', '2022-09-10 18:39:44'),
(5282, 579, 'parent', 'height', '129.992px', '2022-09-10 18:39:44'),
(5283, 579, 'parent', 'display', 'inline-block', '2022-09-10 18:39:44'),
(5284, 579, 'parent', 'padding', '0px 18px 20px 4px', '2022-09-10 18:39:44'),
(5285, 579, 'parent', 'text-align', 'center', '2022-09-10 18:39:44'),
(5286, 579, 'parent', 'position', 'absolute', '2022-09-10 18:39:44'),
(5287, 579, 'parent', 'border-radius', '5px', '2022-09-10 18:39:44'),
(5288, 579, 'parent', 'top', '590.9415588378906px', '2022-09-10 18:39:44'),
(5289, 579, 'parent', 'left', '767.93017578125px', '2022-09-10 18:39:44'),
(5290, 579, 'parent', 'margin-bottom', '5px', '2022-09-10 18:39:44'),
(5291, 579, 'parent', 'min-height', 'fit-content', '2022-09-10 18:39:44'),
(5292, 579, 'parent', 'transform', 'rotate(0deg)', '2022-09-10 18:39:44'),
(5293, 579, 'child', 'font-family', 'Impact, Charcoal, sans-serif', '2022-09-10 18:41:31'),
(5294, 579, 'child', 'border', 'none', '2022-09-10 18:41:56'),
(5295, 579, 'child', '-webkit-text-stroke', '2px #ff0000', '2022-09-10 18:42:24'),
(5296, 579, 'parent', 'opacity', '0.8', '2022-09-10 18:42:44'),
(5297, 579, 'child', 'font-size', '80px', '2022-09-10 18:42:49'),
(5337, 582, 'parent', 'width', 'auto', '2022-09-10 18:44:37'),
(5338, 582, 'parent', 'height', 'auto', '2022-09-10 18:44:37'),
(5339, 582, 'parent', 'display', 'inline-block', '2022-09-10 18:44:37'),
(5340, 582, 'parent', 'padding', '0px 0px 5px', '2022-09-10 18:44:37'),
(5341, 582, 'parent', 'vertical-align', 'super', '2022-09-10 18:44:37'),
(5342, 582, 'parent', 'position', 'absolute', '2022-09-10 18:44:37'),
(5343, 582, 'parent', 'min-height', 'fit-content', '2022-09-10 18:44:37'),
(5344, 582, 'parent', 'top', '406.4209899902344px', '2022-09-10 18:44:37'),
(5345, 582, 'parent', 'left', '850.3740234375px', '2022-09-10 18:44:37'),
(5346, 582, 'parent', 'border', '6px dashed transparent', '2022-09-10 18:44:37'),
(5347, 582, 'parent', 'transform', 'rotate(135deg)', '2022-09-10 18:44:37'),
(5348, 582, 'child', 'height', '465px', '2022-09-10 18:44:37'),
(5349, 582, 'child', 'width', '465px', '2022-09-10 18:44:37'),
(5350, 582, 'grandchild', 'x1', '10', '2022-09-10 18:44:37'),
(5351, 582, 'grandchild', 'x2', '455px', '2022-09-10 18:44:37'),
(5352, 582, 'grandchild', 'y1', '10', '2022-09-10 18:44:37'),
(5353, 582, 'grandchild', 'y2', '455px', '2022-09-10 18:44:37'),
(5354, 582, 'grandchild', 'stroke', 'black', '2022-09-10 18:44:37'),
(5355, 582, 'grandchild', 'stroke-width', '5', '2022-09-10 18:44:37'),
(5356, 583, 'parent', 'width', 'auto', '2022-09-10 18:46:18'),
(5357, 583, 'parent', 'height', 'auto', '2022-09-10 18:46:18'),
(5358, 583, 'parent', 'display', 'inline-block', '2022-09-10 18:46:18'),
(5359, 583, 'parent', 'padding', '0px 0px 5px', '2022-09-10 18:46:18'),
(5360, 583, 'parent', 'vertical-align', 'super', '2022-09-10 18:46:18'),
(5361, 583, 'parent', 'position', 'absolute', '2022-09-10 18:46:18'),
(5362, 583, 'parent', 'min-height', 'fit-content', '2022-09-10 18:46:18'),
(5363, 583, 'parent', 'top', '-26.022735595703125px', '2022-09-10 18:46:18'),
(5364, 583, 'parent', 'left', '225.8441162109375px', '2022-09-10 18:46:18'),
(5365, 583, 'parent', 'border', '6px dashed transparent', '2022-09-10 18:46:18'),
(5366, 583, 'parent', 'transform', 'rotate(0deg)', '2022-09-10 18:46:18'),
(5367, 583, 'child', 'height', '220px', '2022-09-10 18:46:18'),
(5368, 583, 'child', 'width', '220px', '2022-09-10 18:46:18'),
(5369, 583, 'grandchild', 'x', '10', '2022-09-10 18:46:18'),
(5370, 583, 'grandchild', 'y', '10', '2022-09-10 18:46:18'),
(5371, 583, 'grandchild', 'width', '205px', '2022-09-10 18:46:18'),
(5372, 583, 'grandchild', 'height', '205px', '2022-09-10 18:46:18'),
(5373, 583, 'grandchild', 'stroke', 'black', '2022-09-10 18:46:18'),
(5374, 583, 'grandchild', 'fill', '#ff0000', '2022-09-10 18:46:18'),
(5375, 583, 'grandchild', 'stroke-width', '1', '2022-09-10 18:46:18'),
(5376, 583, 'child', 'box-shadow', 'none', '2022-09-10 18:46:46'),
(5385, 585, 'parent', 'width', '40%', '2022-09-13 21:34:12'),
(5386, 585, 'parent', 'height', 'auto', '2022-09-13 21:34:12'),
(5387, 585, 'parent', 'display', 'inline-block', '2022-09-13 21:34:12'),
(5388, 585, 'parent', 'padding', '0px 0px 5px', '2022-09-13 21:34:12'),
(5389, 585, 'parent', 'position', 'absolute', '2022-09-13 21:34:12'),
(5390, 585, 'parent', 'top', '30%', '2022-09-13 21:34:12'),
(5391, 585, 'parent', 'left', '30%', '2022-09-13 21:34:12'),
(5392, 585, 'parent', 'transform', 'rotate(0deg)', '2022-09-13 21:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_styles_templates`
--

CREATE TABLE `video_maker_styles_templates` (
  `id` int(11) NOT NULL,
  `layer_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_styles_templates`
--

INSERT INTO `video_maker_styles_templates` (`id`, `layer_id`, `type`, `style`, `value`, `date`) VALUES
(117, 15, 'parent', 'width', '1971.65px', '2022-07-27 12:05:21'),
(118, 15, 'parent', 'height', '1097.4px', '2022-07-27 12:05:21'),
(119, 15, 'parent', 'display', 'inline-block', '2022-07-27 12:05:21'),
(120, 15, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:05:21'),
(121, 15, 'parent', 'position', 'absolute', '2022-07-27 12:05:21'),
(122, 15, 'parent', 'top', '-18.05804443359375px', '2022-07-27 12:05:21'),
(123, 15, 'parent', 'left', '-17.0908203125px', '2022-07-27 12:05:21'),
(124, 15, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:05:21'),
(125, 16, 'parent', 'width', '40%', '2022-07-27 12:05:21'),
(126, 16, 'parent', 'height', 'auto', '2022-07-27 12:05:21'),
(127, 16, 'parent', 'display', 'inline-block', '2022-07-27 12:05:21'),
(128, 16, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:05:21'),
(129, 16, 'parent', 'position', 'absolute', '2022-07-27 12:05:21'),
(130, 16, 'parent', 'top', '-4.022003173828125px', '2022-07-27 12:05:21'),
(131, 16, 'parent', 'left', '1144.9363403320312px', '2022-07-27 12:05:21'),
(132, 16, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:05:21'),
(133, 16, 'parent', 'filter', 'grayscale(1)', '2022-07-27 12:05:21'),
(134, 17, 'parent', 'width', '40%', '2022-07-27 12:05:21'),
(135, 17, 'parent', 'height', 'auto', '2022-07-27 12:05:21'),
(136, 17, 'parent', 'display', 'inline-block', '2022-07-27 12:05:21'),
(137, 17, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:05:21'),
(138, 17, 'parent', 'position', 'absolute', '2022-07-27 12:05:21'),
(139, 17, 'parent', 'top', '837.8720092773438px', '2022-07-27 12:05:21'),
(140, 17, 'parent', 'left', '2.827392578125px', '2022-07-27 12:05:21'),
(141, 17, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:05:21'),
(142, 18, 'parent', 'width', '40%', '2022-07-27 12:05:21'),
(143, 18, 'parent', 'height', 'auto', '2022-07-27 12:05:21'),
(144, 18, 'parent', 'display', 'inline-block', '2022-07-27 12:05:21'),
(145, 18, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:05:21'),
(146, 18, 'parent', 'position', 'absolute', '2022-07-27 12:05:21'),
(147, 18, 'parent', 'top', '30%', '2022-07-27 12:05:21'),
(148, 18, 'parent', 'left', '30%', '2022-07-27 12:05:21'),
(149, 18, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:05:21'),
(150, 19, 'parent', 'width', '40%', '2022-07-27 12:05:21'),
(151, 19, 'parent', 'height', 'auto', '2022-07-27 12:05:21'),
(152, 19, 'parent', 'display', 'inline-block', '2022-07-27 12:05:21'),
(153, 19, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:05:21'),
(154, 19, 'parent', 'position', 'absolute', '2022-07-27 12:05:21'),
(155, 19, 'parent', 'top', '273.95835876464844px', '2022-07-27 12:05:21'),
(156, 19, 'parent', 'left', '1024.8843383789062px', '2022-07-27 12:05:21'),
(157, 19, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:05:21'),
(158, 19, 'parent', 'filter', 'grayscale(1)', '2022-07-27 12:05:21'),
(159, 20, 'parent', 'width', '40%', '2022-07-27 12:05:21'),
(160, 20, 'parent', 'height', 'auto', '2022-07-27 12:05:21'),
(161, 20, 'parent', 'display', 'inline-block', '2022-07-27 12:05:21'),
(162, 20, 'parent', 'padding', '0px 0px 5px', '2022-07-27 12:05:21'),
(163, 20, 'parent', 'position', 'absolute', '2022-07-27 12:05:21'),
(164, 20, 'parent', 'top', '30%', '2022-07-27 12:05:21'),
(165, 20, 'parent', 'left', '30%', '2022-07-27 12:05:21'),
(166, 20, 'parent', 'transform', 'rotate(0deg)', '2022-07-27 12:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_templates`
--

CREATE TABLE `video_maker_templates` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'The Project',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_templates`
--

INSERT INTO `video_maker_templates` (`id`, `p_id`, `u_id`, `title`, `date`) VALUES
(4, 11, 1, 'The Project', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `video_maker_videos`
--

CREATE TABLE `video_maker_videos` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `v_m_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_maker_videos`
--

INSERT INTO `video_maker_videos` (`id`, `u_id`, `v_m_id`, `title`, `date`) VALUES
(1, 46, 1, 'tobe.mp4', '2021-09-22'),
(2, 46, 1, 'tobe.mp4', '2021-09-22'),
(3, 46, 1, 'tobe.mp4', '2021-09-22'),
(4, 46, 1, 'tobe.mp4', '2021-09-22'),
(5, 46, 3, 'tobe.mp4', '2021-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker`
--
ALTER TABLE `video_maker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_audios`
--
ALTER TABLE `video_maker_audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_backgrounds`
--
ALTER TABLE `video_maker_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_draggable_layers`
--
ALTER TABLE `video_maker_draggable_layers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_draggable_layers_templates`
--
ALTER TABLE `video_maker_draggable_layers_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_fonts`
--
ALTER TABLE `video_maker_fonts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_images`
--
ALTER TABLE `video_maker_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_layers`
--
ALTER TABLE `video_maker_layers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_layers_templates`
--
ALTER TABLE `video_maker_layers_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_layer_animations`
--
ALTER TABLE `video_maker_layer_animations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_layer_animations_templates`
--
ALTER TABLE `video_maker_layer_animations_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_scene`
--
ALTER TABLE `video_maker_scene`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_scene_templates`
--
ALTER TABLE `video_maker_scene_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_shapes`
--
ALTER TABLE `video_maker_shapes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_styles`
--
ALTER TABLE `video_maker_styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_styles_templates`
--
ALTER TABLE `video_maker_styles_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_templates`
--
ALTER TABLE `video_maker_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_maker_videos`
--
ALTER TABLE `video_maker_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2149;

--
-- AUTO_INCREMENT for table `video_maker`
--
ALTER TABLE `video_maker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `video_maker_audios`
--
ALTER TABLE `video_maker_audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `video_maker_backgrounds`
--
ALTER TABLE `video_maker_backgrounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_maker_draggable_layers`
--
ALTER TABLE `video_maker_draggable_layers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `video_maker_draggable_layers_templates`
--
ALTER TABLE `video_maker_draggable_layers_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `video_maker_fonts`
--
ALTER TABLE `video_maker_fonts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_maker_images`
--
ALTER TABLE `video_maker_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `video_maker_layers`
--
ALTER TABLE `video_maker_layers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=586;

--
-- AUTO_INCREMENT for table `video_maker_layers_templates`
--
ALTER TABLE `video_maker_layers_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `video_maker_layer_animations`
--
ALTER TABLE `video_maker_layer_animations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `video_maker_layer_animations_templates`
--
ALTER TABLE `video_maker_layer_animations_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `video_maker_scene`
--
ALTER TABLE `video_maker_scene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `video_maker_scene_templates`
--
ALTER TABLE `video_maker_scene_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_maker_shapes`
--
ALTER TABLE `video_maker_shapes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_maker_styles`
--
ALTER TABLE `video_maker_styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5393;

--
-- AUTO_INCREMENT for table `video_maker_styles_templates`
--
ALTER TABLE `video_maker_styles_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `video_maker_templates`
--
ALTER TABLE `video_maker_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_maker_videos`
--
ALTER TABLE `video_maker_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
