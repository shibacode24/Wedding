-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2024 at 08:12 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zep_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_listing`
--

DROP TABLE IF EXISTS `add_listing`;
CREATE TABLE IF NOT EXISTS `add_listing` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `threads_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities_for_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('approve','pending','reject') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_listing`
--

INSERT INTO `add_listing` (`id`, `user_id`, `name`, `contact_no`, `address`, `email`, `website_link`, `facebook_link`, `instagram_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `threads_link`, `google_map_link`, `amenities_for_booking`, `capacity`, `from_time_slot`, `to_time_slot`, `description`, `banner_image`, `front_page_image`, `category_id`, `amenities`, `contact_person_name`, `contact_person_number`, `price`, `show_price`, `vendor_name`, `vendor_description`, `vendor_price`, `vendor_image`, `location_city`, `location_address`, `status`, `created_at`, `updated_at`) VALUES
(20, 22, 'Jason Lloyd', '2332986551', 'Delectus quis imped', 'xonovudi@mailinator.com', 'https://www.vufufu.us', 'www.google.com', 'Numquam ut sequi et', 'Ipsum illum non in', 'Qui aute ut dolor la', NULL, NULL, NULL, '[\"Hall\",\"Lawn\"]', NULL, '[\"10:22\",\"2:14\"]', '[\"18:21\",\"21:23\"]', 'Aliquam enim dolor m', '[\"8061712738667_category-box-05.jpg\",\"4251712738667_category-box-06.jpg\",\"2251712738667_category-box-07.jpg\"]', '1710430595.jpg', '[\"1\"]', '[\"1\",\"2\"]', 'Avram Odom', '4708796355', NULL, 'yes', NULL, NULL, NULL, NULL, '6', 'Ut nulla sed quibusd', 'approve', '2024-03-14 10:06:35', '2024-05-14 01:32:55'),
(39, 7, 'Rangoli', '2474859685', 'Ut dolore et dicta v', 'hejunokyby@mailinator.com', 'https://www.mos.info', 'https://slack.com/intl/en-gb', 'https://slack.com/intl/en-gb', 'Labore quos maxime m', 'Officiis cupiditate', NULL, NULL, NULL, NULL, NULL, '[\"12:52\",\"14:52\"]', '[\"15:52\",\"19:52\"]', 'Nostrum natus aliqui', '{\"5\":\"4541716362579_DSC_1897.JPG\"}', '1712305261.png', '[\"1\",\"2\"]', '[\"1\",\"2\"]', 'Maxine Baldwin', '5517854785', NULL, 'no', NULL, NULL, NULL, NULL, '7', 'Id et veniam conse', 'approve', '2024-04-04 03:04:32', '2024-05-22 07:13:01'),
(41, 22, 'Bianca Benjamin', '49', 'Voluptates est omni', 'cebep@mailinator.com', 'https://www.qasyserozunov.us', 'Repellendus Volupta', 'Assumenda omnis cupi', 'Quis sunt voluptatum', 'Obcaecati vel nisi c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Velit dolor sit aut', NULL, NULL, '[\"2\"]', '[\"1\",\"2\"]', 'Kibo Casey', '188', NULL, 'no', NULL, NULL, NULL, NULL, '6', 'Et iure ullam in nes', 'pending', '2024-04-10 03:39:48', '2024-04-10 03:39:48'),
(44, 7, 'Imogene Farrell', '7532645324', 'Aliquam libero offic', 'bylafy@mailinator.com', 'https://www.tacasok.mobi', 'Ullam dolor minima e', NULL, 'Dolor perspiciatis', 'Irure cupiditate aut', 'Qui voluptate doloru', 'Et ea accusantium in', 'Impedit velit ea vo', NULL, NULL, '[\"18:29\"]', '[\"17:29\"]', 'fcgjjtfjtjtj', NULL, NULL, '[\"1\"]', '[\"2\"]', 'Marny Bright', '7834534534', NULL, 'yes', NULL, NULL, NULL, NULL, '6', 'sssfsfws', 'pending', '2024-05-14 06:30:14', '2024-05-14 06:30:14'),
(45, 7, 'Oscar Joyner', '9959656626', 'Magna deserunt maior', 'kibif@mailinator.com', 'https://www.nokis.org', 'Commodo dolorem volu', 'Nostrum ut commodo q', 'Autem rem incididunt', 'Obcaecati nulla aspe', 'At animi dolores ei', 'Mollitia esse dolor', 'Culpa sed excepteur', NULL, NULL, '[\"18:41\",\"23:41\"]', '[\"13:47\",\"23:47\"]', 'Voluptatem perferend', '[]', NULL, '[\"2\",\"2\"]', '[\"1\",\"2\"]', 'Dennis Donaldson', '4769956233', NULL, 'no', NULL, NULL, NULL, NULL, '8', 'Amravati Railway Station Platform 2 &3, Amrawati Tahsil, Amravati, Maharashtra, India', 'pending', '2024-05-14 06:44:14', '2024-05-15 02:42:15'),
(46, 7, 'Rinah Fitzgerald', '6868451321', 'Consectetur libero', 'suqymog@mailinator.com', 'https://www.mafapazinacurid.ws', 'Hic quibusdam at aut', 'Eum non sunt eu ut d', 'Veniam reprehenderi', 'Rem earum voluptates', 'A eum sit repellendu', 'Fugit quia assumend', 'Maxime quis consecte', NULL, NULL, '[\"22:06\",\"01:06\",\"14:10\",\"03:10\"]', '[\"08:19\",\"08:19\",\"16:10\",\"16:10\"]', 'Vel qui tempor vel i', '[]', NULL, '[\"1\",\"1\",\"2\",\"2\"]', '[\"2\"]', 'Clayton Herring', '2079596262', NULL, 'no', NULL, NULL, NULL, NULL, '7', 'Amravati Railway Station Platform 2 &3, Amrawati Tahsil, Amravati, Maharashtra, India', 'pending', '2024-05-14 06:54:03', '2024-05-15 02:11:06'),
(47, 7, 'dcds', '8454513123', 'sdcd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"10:16\"]', '[\"16:16\"]', 'scascx', '[\"5301716526030_2021-01-11 (1).jpg\"]', '1716526030.jpg', '[\"1\"]', '[\"1\"]', 'asx', '8768465454', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Amravati, Maharashtra, India', 'pending', '2024-05-23 23:17:10', '2024-05-23 23:17:10'),
(48, 7, 'Kermit Stein', '4413216584', 'Exercitation est mag', 'byrahino@mailinator.com', 'https://www.rol.ws', 'Et dolores consequat', 'Consequatur Et sint', 'Corrupti sunt in re', 'Et sed sed excepturi', 'Ipsum sed quibusdam', 'Consequuntur nemo ul', 'Explicabo Dolor ass', NULL, NULL, '[\"04:45\"]', '[\"20:26\"]', 'Aperiam id irure de', '[\"1191716526362_2021-01-11 (1).jpg\"]', '1716526362.jpg', '[\"2\"]', '[\"2\"]', 'Joel Gregory', '9435451132', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Ea dolor ad suscipit', 'pending', '2024-05-23 23:22:42', '2024-05-23 23:22:42'),
(49, 7, 'Kermit Stein', '4413216584', 'Exercitation est mag', 'byrahino@mailinator.com', 'https://www.rol.ws', 'Et dolores consequat', 'Consequatur Et sint', 'Corrupti sunt in re', 'Et sed sed excepturi', 'Ipsum sed quibusdam', 'Consequuntur nemo ul', 'Explicabo Dolor ass', NULL, NULL, '[\"04:45\"]', '[\"20:26\"]', 'Aperiam id irure de', '[\"8011716526385_2021-01-11 (1).jpg\"]', '1716526385.jpg', '[\"2\"]', '[\"2\"]', 'Joel Gregory', '9435451132', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Ea dolor ad suscipit', 'pending', '2024-05-23 23:23:05', '2024-05-23 23:23:05'),
(50, 7, 'Nicole Snow', '5543132131', 'Aliquid rem minima e', 'xuqefulub@mailinator.com', 'https://www.xuqimefixy.com', 'Nostrum temporibus d', 'Ipsum tenetur rerum', 'Quos in reiciendis t', 'Cupiditate dignissim', 'Eaque obcaecati modi', 'Dolor non impedit o', 'Dolores sed et modi', NULL, NULL, '[\"10:26\"]', '[\"10:26\"]', 'xSX', '[\"5491716526633_2021-01-11 (1).jpg\"]', '1716526633.jpg', '[\"1\"]', '[\"1\"]', 'Marny Bright', '6545646468', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Amravati, Maharashtra, India', 'pending', '2024-05-23 23:27:13', '2024-05-23 23:27:13'),
(51, 7, 'Nicole Snow', '5543132131', 'Aliquid rem minima e', 'xuqefulub@mailinator.com', 'https://www.xuqimefixy.com', 'Nostrum temporibus d', 'Ipsum tenetur rerum', 'Quos in reiciendis t', 'Cupiditate dignissim', 'Eaque obcaecati modi', 'Dolor non impedit o', 'Dolores sed et modi', NULL, NULL, '[\"10:26\"]', '[\"10:26\"]', 'xSX', '[\"1801716526733_2021-01-11 (1).jpg\"]', '1716526733.jpg', '[\"1\"]', '[\"1\"]', 'Marny Bright', '6545646468', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Amravati, Maharashtra, India', 'pending', '2024-05-23 23:28:53', '2024-05-23 23:28:53'),
(52, 7, 'Nicole Snow', '5543132131', 'Aliquid rem minima e', 'xuqefulub@mailinator.com', 'https://www.xuqimefixy.com', 'Nostrum temporibus d', 'Ipsum tenetur rerum', 'Quos in reiciendis t', 'Cupiditate dignissim', 'Eaque obcaecati modi', 'Dolor non impedit o', 'Dolores sed et modi', NULL, NULL, '[\"10:26\"]', '[\"10:26\"]', 'xSX', '[\"6311716526792_2021-01-11 (1).jpg\"]', '1716526792.jpg', '[\"1\"]', '[\"1\"]', 'Marny Bright', '6545646468', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Amravati, Maharashtra, India', 'pending', '2024-05-23 23:29:52', '2024-05-23 23:29:52'),
(53, 7, 'Nicole Snow', '5543132131', 'Aliquid rem minima e', 'xuqefulub@mailinator.com', 'https://www.xuqimefixy.com', 'Nostrum temporibus d', 'Ipsum tenetur rerum', 'Quos in reiciendis t', 'Cupiditate dignissim', 'Eaque obcaecati modi', 'Dolor non impedit o', 'Dolores sed et modi', NULL, NULL, '[\"10:26\"]', '[\"10:26\"]', 'xSX', '[\"4891716526811_2021-01-11 (1).jpg\"]', '1716526811.jpg', '[\"1\"]', '[\"1\"]', 'Marny Bright', '6545646468', NULL, 'yes', NULL, NULL, NULL, NULL, '8', 'Amravati, Maharashtra, India', 'pending', '2024-05-23 23:30:11', '2024-05-23 23:30:11'),
(54, 7, 'Dane Dunlap', 'Qui illo d', 'Est quae facere cum', 'sugy@mailinator.com', 'https://www.boqekerut.ws', 'Ratione quibusdam at', 'Qui soluta duis nece', 'Inventore cupiditate', 'Eaque rem officiis r', 'Culpa ex excepteur t', 'Dolore quia incididu', 'Incididunt enim laud', NULL, NULL, '[\"03:57\"]', '[\"17:49\"]', 'Consequatur veniam', NULL, NULL, '[\"2\"]', NULL, 'Reagan Haynes', '1414894455', NULL, 'yes', NULL, NULL, NULL, NULL, '7', 'Omnis dolores vero p', 'approve', '2024-06-05 02:14:41', '2024-06-05 02:14:41'),
(55, 7, 'Maxine Mccarty', 'Quod neces', 'Consequatur itaque', 'johuki@mailinator.com', 'https://www.bojudicuwu.me.uk', 'Nostrum earum dolore', 'Velit consequuntur e', 'Nostrud in anim est', 'Nihil dolor beatae f', 'Quia aut maxime aliq', 'Lorem perspiciatis', 'Adipisicing saepe la', NULL, NULL, NULL, NULL, 'Hic tenetur libero p', NULL, NULL, NULL, '[\"1\"]', 'Caleb Noel', '1537756562', NULL, NULL, NULL, NULL, NULL, NULL, '7', 'Iusto est ut volupt', 'pending', '2024-06-05 02:17:47', '2024-06-05 02:17:47'),
(56, 7, 'Maxine Mccarty', 'Quod neces', 'Consequatur itaque', 'johuki@mailinator.com', 'https://www.bojudicuwu.me.uk', 'Nostrum earum dolore', 'Velit consequuntur e', 'Nostrud in anim est', 'Nihil dolor beatae f', 'Quia aut maxime aliq', 'Lorem perspiciatis', 'Adipisicing saepe la', NULL, NULL, '[\"13:18\"]', '[\"13:18\"]', 'Hic tenetur libero p', '[]', NULL, '[\"1\"]', '[\"1\"]', 'Caleb Noel', '1537756562', NULL, NULL, NULL, NULL, NULL, NULL, '7', 'Iusto est ut volupt', 'pending', '2024-06-05 02:18:27', '2024-06-05 02:23:54'),
(57, 7, 'Christopher Chan', '7837373783', 'Atque est vitae neq', 'fabiwi@mailinator.com', 'https://www.kelevury.co.uk', 'Quaerat ipsa quia e', 'Est ut est corporis', 'Odit nihil quaerat m', 'Accusamus in esse a', 'Nihil minim perspici', 'Vel duis ut dolore d', 'Temporibus vero accu', NULL, NULL, '[\"13:28\"]', '[\"13:28\"]', 'Officia quia ad volu', '[\"5741718351920_2021-01-11 (1).jpg\"]', '1718351920.JPG', '[\"1\"]', '[\"2\"]', 'Bevis Allen', '3867838873', NULL, NULL, NULL, NULL, NULL, NULL, '8', 'Dolore lorem ut susc', 'pending', '2024-06-14 02:28:40', '2024-06-14 02:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `aminities`
--

DROP TABLE IF EXISTS `aminities`;
CREATE TABLE IF NOT EXISTS `aminities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aminities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aminities`
--

INSERT INTO `aminities` (`id`, `aminities`, `created_at`, `updated_at`) VALUES
(1, 'Parking', '2024-03-13 09:28:21', '2024-03-13 09:29:20'),
(2, 'Swiming', '2024-03-13 09:29:31', '2024-03-13 09:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenities_for_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = requested from user\r\n1 = accept\r\n2= reject\r\n',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `listing_id`, `date`, `name`, `contact_no`, `time_slot`, `amenities_for_booking`, `amenities_name`, `guest`, `remark`, `status`, `created_at`, `updated_at`) VALUES
(1, '8', '25', '04/01/2024', 'Aidan Levy', 'Eum velit quam natu', '[\"10 am : 10 pm\"]', '3', NULL, '1500', NULL, '1', '2024-03-19 10:05:07', '2024-03-25 02:02:51'),
(2, '7', '20', '03/21/2024', 'Mayra Khan', '7020734133', '[\"10 Am : 5 Pm\"]', '1', NULL, '1000', 'This booking is conform by the next month', '1', '2024-03-21 11:01:45', '2024-03-25 02:12:18'),
(5, '7', '39', '04/04/2024', 'test', '7020734133', '23:27 - 09:17', '1', NULL, '1000', NULL, '1', '2024-04-04 04:38:26', '2024-04-05 04:31:55'),
(6, '7', '39', '04/11/2024', 'demo', '7020734133', '23:27 - 09:17', '2', NULL, '200', 'test', '1', '2024-04-04 04:39:50', '2024-04-05 05:53:15'),
(7, '8', '25', '04/09/2024', 'Sharique Sheikh', '7020734133', '01:21 - 18:21', '3', NULL, '1000', NULL, '1', '2024-04-09 04:37:07', '2024-04-09 04:37:07'),
(8, '8', '25', '04/01/2024', '8585858585', '7020734133', '01:21 - 18:21', '3', NULL, '1000', NULL, '0', '2024-04-09 04:50:46', '2024-04-09 04:50:46'),
(9, '8', '25', '03/04/2024', 'Mira Prince', '1234567890', '05:30 - 21:23', '3', NULL, '500', NULL, '0', '2024-04-09 05:15:19', '2024-04-09 05:15:19'),
(10, '8', '25', '2024-04-07', 'mohin khan', '3432123456', '05:30 - 21:23', '3', NULL, '1000', NULL, '0', '2024-04-09 05:19:28', '2024-04-09 05:19:28'),
(11, '8', '39', '2024-05-09', 'Sharique Sheikh', '7020734133', '02:00 - 22:00', '5', NULL, '1000', NULL, '1', '2024-05-09 10:24:15', '2024-05-16 00:13:00'),
(12, '1', '39', '2024-05-21', 'Aasma', '1234567890', '11:50 - 17:50', '2', NULL, '1000', NULL, '0', '2024-05-16 06:37:57', '2024-05-16 06:37:57'),
(13, '8', '39', '2024-05-23', 'Sharique Sheikh', '1236547892', '14:04 - 17:04', '2', NULL, '1500', NULL, '0', '2024-05-17 04:05:48', '2024-05-17 04:05:48'),
(14, '8', '39', '2024-05-23', 'Sharique Sheikh', '1236547892', '11:50 - 17:50', '1', NULL, '1000', NULL, '0', '2024-05-17 04:06:37', '2024-05-17 04:06:37'),
(15, '8', '39', '2024-05-31', 'Sharique Sheikh', '1236547892', '14:04 - 17:04', '2', 'Hall', '1000', NULL, '0', '2024-05-17 04:21:51', '2024-05-17 04:21:51'),
(16, '8', '39', '2024-06-21', 'demo', '8454513131', '12:52 - 15:52', '1', NULL, '100', NULL, '0', '2024-06-21 04:35:33', '2024-06-21 04:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Hall', '2024-03-13 09:10:56', '2024-05-13 23:42:48'),
(2, 'Lawn', '2024-03-13 09:11:01', '2024-05-13 23:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(6, 'Nagpur, Maharashtra, India', 0, 0, '2024-03-19 12:24:57', '2024-03-19 12:24:57'),
(7, 'Akola, Maharashtra, India', 20.7002159, 77.0081678, '2024-03-19 12:31:06', '2024-03-19 12:31:06'),
(8, 'Amravati, Maharashtra, India', 20.9319821, 77.7523039, '2024-05-14 06:42:45', '2024-05-14 06:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing_amenities`
--

DROP TABLE IF EXISTS `listing_amenities`;
CREATE TABLE IF NOT EXISTS `listing_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_amenities`
--

INSERT INTO `listing_amenities` (`id`, `listing_id`, `amenity`, `capacity`, `price`, `created_at`, `updated_at`) VALUES
(3, '25', '1', '1000', '50000', '2024-04-04 03:48:17', '2024-04-04 03:48:17'),
(5, '39', '1', '1000', '15000', '2024-04-05 03:09:18', '2024-05-21 02:39:06'),
(6, '40', '2', 'Dolore sint accusan', '657', '2024-04-05 04:54:36', '2024-04-05 04:54:36'),
(7, '40', '2', '522', '784', '2024-04-05 04:54:36', '2024-04-05 04:54:36'),
(9, '20', '2', '2000', '50000', '2024-04-10 03:32:30', '2024-04-10 03:32:30'),
(10, '41', '1', 'Est fugit excepturi', '354', '2024-04-10 03:39:48', '2024-04-10 03:39:48'),
(13, '44', '1', 'Nagpur', '5345345', '2024-05-14 06:30:14', '2024-05-14 06:30:14'),
(14, '45', '2', '1000', '8670', '2024-05-14 06:44:14', '2024-05-14 06:44:14'),
(15, '46', '1', '1000', '20', '2024-05-14 06:54:03', '2024-05-14 06:54:03'),
(16, '46', '2', '2000', '1200000', '2024-05-15 02:11:06', '2024-05-15 02:11:06'),
(17, '39', '2', '100', '1,30,000', '2024-05-22 02:04:21', '2024-05-22 02:04:21'),
(19, '47', '1', '100', '10000', '2024-05-23 23:17:10', '2024-05-23 23:17:10'),
(20, '48', '2', '100', '724', '2024-05-23 23:22:42', '2024-05-23 23:22:42'),
(21, '49', '2', '100', '724', '2024-05-23 23:23:05', '2024-05-23 23:23:05'),
(22, '50', '1', '100', '5555', '2024-05-23 23:27:13', '2024-05-23 23:27:13'),
(23, '51', '1', '100', '5555', '2024-05-23 23:28:53', '2024-05-23 23:28:53'),
(24, '52', '1', '100', '5555', '2024-05-23 23:29:52', '2024-05-23 23:29:52'),
(25, '53', '1', '100', '5555', '2024-05-23 23:30:11', '2024-05-23 23:30:11'),
(26, '54', '2', '10', '325', '2024-06-05 02:14:41', '2024-06-05 02:14:41'),
(27, '56', '1', '100', '12,000', '2024-06-05 02:18:27', '2024-06-05 02:18:27'),
(28, '57', '1', '383', '383', '2024-06-14 02:28:40', '2024-06-14 02:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_111448_create_city_table', 1),
(6, '2024_03_13_111503_create_category_table', 1),
(7, '2024_03_13_111517_create_aminities_table', 1),
(8, '2024_03_13_111530_create_slider_table', 1),
(9, '2024_03_13_111541_create_slot_category_table', 1),
(10, '2024_03_14_060437_create_add_listing_table', 2),
(11, '2024_03_14_150108_create_vendor_information_table', 3),
(12, '2024_03_15_065847_create_booking_table', 4),
(13, '2024_03_19_173506_create_review_table', 5),
(15, '2024_04_04_080807_create_listing_amenities_table', 6),
(16, '2024_05_14_102936_create_time_slot_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `listing_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(3, '8', '39', '4', 'testing review', '2024-03-19 12:18:20', '2024-03-19 12:18:20'),
(4, '7', '20', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.', '2024-03-22 03:46:33', '2024-06-14 07:11:11'),
(5, '7', '20', '3', 'good services \r\nDo visit', '2024-03-26 04:59:31', '2024-06-14 07:10:06'),
(6, '8', '39', '5', 'qwerty', '2024-05-09 04:30:11', '2024-05-09 04:30:11'),
(7, '1', '39', '4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-05-14 02:58:26', '2024-05-14 02:58:26'),
(9, '34', '20', '4', 'this is best hall', '2024-06-14 02:24:03', '2024-06-14 02:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider`, `created_at`, `updated_at`) VALUES
(1, '1710344277.jpg', '2024-03-13 10:00:38', '2024-03-13 10:07:57'),
(2, '1710432875.jpg', '2024-03-13 10:07:35', '2024-03-14 10:44:35'),
(3, '1715843091.jpg', '2024-05-16 01:34:51', '2024-05-16 01:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `slot_category`
--

DROP TABLE IF EXISTS `slot_category`;
CREATE TABLE IF NOT EXISTS `slot_category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slot_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_category`
--

INSERT INTO `slot_category` (`id`, `slot_category`, `created_at`, `updated_at`) VALUES
(1, 'Full Day', '2024-03-13 09:39:49', '2024-03-13 09:39:49'),
(3, 'Half Day', '2024-03-13 09:45:12', '2024-03-13 09:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

DROP TABLE IF EXISTS `time_slot`;
CREATE TABLE IF NOT EXISTS `time_slot` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `listing_id`, `category_id`, `from_time_slot`, `to_time_slot`, `created_at`, `updated_at`) VALUES
(3, '44', '1', '18:29', '17:29', '2024-05-14 06:30:14', '2024-05-14 06:30:14'),
(4, '46', '1', '22:06', '08:19', '2024-05-14 06:54:03', '2024-05-14 06:54:03'),
(5, '46', '1', '01:06', '08:19', '2024-05-14 06:54:03', '2024-05-14 06:54:03'),
(6, '46', '2', '14:10', '16:10', '2024-05-15 02:35:27', '2024-05-15 02:35:27'),
(7, '46', '2', '03:10', '16:10', '2024-05-15 02:35:27', '2024-05-15 02:35:27'),
(8, '45', '2', '18:41', '13:47', '2024-05-15 02:42:15', '2024-05-15 02:42:15'),
(9, '45', '2', '23:41', '23:47', '2024-05-15 02:42:15', '2024-05-15 02:42:15'),
(17, '39', '1', '12:52', '15:52', '2024-05-22 01:52:59', '2024-05-22 01:52:59'),
(18, '39', '2', '14:52', '19:52', '2024-05-22 01:52:59', '2024-05-22 01:52:59'),
(19, '47', '1', '10:16', '16:16', '2024-05-23 23:17:10', '2024-05-23 23:17:10'),
(20, '48', '2', '04:45', '20:26', '2024-05-23 23:22:42', '2024-05-23 23:22:42'),
(21, '49', '2', '04:45', '20:26', '2024-05-23 23:23:05', '2024-05-23 23:23:05'),
(22, '50', '1', '10:26', '10:26', '2024-05-23 23:27:13', '2024-05-23 23:27:13'),
(23, '51', '1', '10:26', '10:26', '2024-05-23 23:28:53', '2024-05-23 23:28:53'),
(24, '52', '1', '10:26', '10:26', '2024-05-23 23:29:52', '2024-05-23 23:29:52'),
(25, '53', '1', '10:26', '10:26', '2024-05-23 23:30:11', '2024-05-23 23:30:11'),
(26, '54', '2', '03:57', '17:49', '2024-06-05 02:14:41', '2024-06-05 02:14:41'),
(27, '56', '1', '13:18', '13:18', '2024-06-05 02:18:27', '2024-06-05 02:18:27'),
(28, '57', '1', '13:28', '13:28', '2024-06-14 02:28:40', '2024-06-14 02:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `gender`, `contact_no`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', '', '1234567890', NULL, '$2y$12$eltGBbcVlP96PLVj8E5ur.L8ppJvJfOEKpxReqO6O9QNlraozG2da', NULL, NULL, '2024-03-19 01:27:23', '2024-05-22 06:23:29'),
(7, 'business', 'Demo Testing', 'rr@gmail.com', 'Female', '7385078839', NULL, '$2y$12$x.8HsK0P7XVoA/qNWNDNb.yyUv8BWhLtGjrcgnq7vGkTwqYzm7u2y', '1714386582.jpg', NULL, '2024-03-19 05:33:20', '2024-04-29 04:59:42'),
(8, 'user', 'Sharique Sheikh', 'sk@gmail.com', 'Male', '7020734133', NULL, '$2y$12$g7jOGXZe7GzJvnAgVTOu.O/.S5CC5Y8eJQukXYxMDTWGfHllbazCK', '1716277986.jpg', NULL, '2024-03-19 09:57:45', '2024-05-21 02:23:06'),
(9, 'business', 'Lev Bridges', 'bafigeler@mailinator.com', '', '7020734133', NULL, '$2y$12$tABFeZgqAd6dEzU7AMIeuOjXO6rAH6dKVoJ8EpTGkscwMGsUYZKPK', NULL, NULL, '2024-03-26 01:04:46', '2024-03-26 01:04:46'),
(22, 'business', 'test', 'ff@gmail.com', '', '1234567890', NULL, '$2y$12$0knwAMHWPtrPm4ziKIlmIerJPwAT3i44pUZBzv96bIu8o/uo3rG0S', NULL, NULL, '2024-04-03 02:09:10', '2024-04-03 02:09:10'),
(23, 'business', 'cdcsdc', 'sddsfsdf', '', '1234567890', NULL, '$2y$12$K2.aekAhvXEao1hixVOsy.BbkqeYsVpErc/F.Nld2r3g.ZC7sm2ZC', NULL, NULL, '2024-04-03 02:11:41', '2024-04-03 02:11:41'),
(24, 'user', 'Yash', 'yash1@gmail.com', NULL, '7896547158', NULL, '$2y$12$F2A8TN5k4bizou39mGKxX.z3hcqgDFOQVAktDS6BmMpgGsQcvGXqy', NULL, NULL, '2024-04-30 05:08:52', '2024-04-30 05:08:52'),
(26, 'user', 'Yash', 'yash@gmail.com', NULL, '7896542568', NULL, '$2y$12$BI.fFbnH.IwNKpCeHo0DT.rklZ9BkIXFOQrQ9DsJkGGwuKhmt3UXa', NULL, NULL, '2024-05-02 01:49:57', '2024-05-02 01:49:57'),
(27, 'user', 'test2', 'xuqefulu2b@mailinator.com', NULL, '1234567845', NULL, '$2y$12$MSfABMo6mX5zu0X10k7zROoEEG220ivrTfyjGA1oOo8sxmVYrOlfu', NULL, NULL, '2024-05-09 03:19:22', '2024-05-09 03:19:22'),
(28, 'business', NULL, NULL, NULL, '1234567890', NULL, '$2y$12$8niCweeTIL3HjNPKOJlHdO19D04hIaZP08rGy6xxTLvpeUszOxQi2', NULL, NULL, '2024-05-21 04:34:19', '2024-05-21 04:34:19'),
(29, 'business', NULL, NULL, NULL, '1234567890', NULL, '$2y$12$x06GHa/4y55tmmQ5dv3QMemOmX3ib1XkCRx8KcroMCjFN2OVv1oMm', NULL, NULL, '2024-05-21 04:37:47', '2024-05-21 04:37:47'),
(30, 'business', NULL, NULL, NULL, '1234567890', NULL, '$2y$12$/OF9xYUkJR7XcEP7RMTQR.lHErtT6ehJORbbA0bKM1WM38Owujhti', NULL, NULL, '2024-05-21 05:04:46', '2024-05-21 05:04:46'),
(31, 'user', 'demo', 'xuqefulub@mailinator.com', NULL, '1234567890', NULL, '$2y$12$d5cwiAzNnAdGvOVIGZA6HeJ94oP/GWVyg8Uzi9PxNhlOpFTbbysmG', NULL, NULL, '2024-05-22 06:05:27', '2024-05-22 06:05:27'),
(33, 'business', 'demo', 'xuqefulub1@mailinator.com', NULL, '1234567897', NULL, '$2y$12$8M2lFPKz1.k/cUvwpHvI2eGIH0egZn3T8UgKx9z5IoB4uK1LPkz8S', NULL, NULL, '2024-05-22 06:18:08', '2024-05-22 06:18:08'),
(34, 'user', 'Mira Prince', '123@gmail.com', 'Female', '4569874562', NULL, '$2y$12$.g2PFO2lqpTcDtVeGZuCUOHQpNfXmSyDRGMxOwJssbATQ5U6kDVgG', NULL, NULL, '2024-05-22 06:21:20', '2024-05-22 06:21:20'),
(35, 'business', 'sf', 'aa@gmail.com', NULL, '7896541231', NULL, '$2y$12$9RdAqk5WNq0iZQIbS3cRb.Unz2A3AQ7Q6TvOwBzC0R2EmbrOfPXDm', NULL, NULL, '2024-05-22 06:22:03', '2024-05-22 06:22:03'),
(36, 'user', 'mariya', 'mm@gmail.com', 'Female', '7020734189', NULL, '$2y$12$hoSmoEXC/eIzUpCG9mNlju7Szt5coz4E6XSQUKzrnAeAdB5kIl4p.', NULL, NULL, '2024-06-14 00:33:57', '2024-06-14 00:33:57'),
(37, 'user', 'demo', 'xuqefulub343@mailinator.com', 'Female', '1234567895', NULL, '$2y$12$VcnYC5UyiERmbmEfoeR./eE984FVmxWHUEChxdRunDXjEnclIS4RG', NULL, NULL, '2024-06-21 05:38:03', '2024-06-21 05:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_information`
--

DROP TABLE IF EXISTS `vendor_information`;
CREATE TABLE IF NOT EXISTS `vendor_information` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `add_listing_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_information`
--

INSERT INTO `vendor_information` (`id`, `add_listing_id`, `vendor_name`, `vendor_description`, `vendor_offer`, `vendor_discount`, `vendor_price`, `vendor_image`, `created_at`, `updated_at`) VALUES
(1, '20', '[\"Taylor\",\"makeup\"]', '[\"Minima at saepe even\",\"Eveniet mollitia du\"]', '[\"percent\",\"null\"]', '[\"50\",\"0\"]', '[\"620\",\"500\"]', '[\"ne60201710430595.png\",\"ne3111710430595.jpeg\"]', '2024-03-14 10:06:35', '2024-03-14 10:06:35'),
(5, '25', '[\"Jerry Pickett\",\"Zhep cab\"]', '[\"Beatae cum hic fugia\",\"cabbbbbbbbbbbbbb\"]', '[\"rupees\",\"rupees\"]', '[\"50\",\"0\"]', '[\"513\",\"1000\"]', '[\"ne60201710430595.png\",\"ne3111710430595.jpeg\"]', '2024-03-21 10:25:17', '2024-03-21 10:25:17'),
(13, '33', '[\"test\"]', '[\"Eveniet mollitia du\"]', '[\"rupees\"]', '[\"5\"]', '[\"620\"]', '[\"ne91901711209151.jpeg\"]', '2024-03-23 10:22:31', '2024-03-23 10:22:31'),
(14, '39', '[]', '[]', '[\"rupees\"]', '[\"5\"]', '[]', '[]', '2024-03-26 05:44:44', '2024-05-23 22:41:33'),
(17, '40', '[\"Noelani Howard\"]', '[\"Molestias sint lorem\"]', '[\"rupees\"]', '[\"10\"]', '[\"884\"]', '[\"v92101712312676.jpeg\"]', '2024-04-05 04:54:36', '2024-04-05 04:54:36'),
(18, '41', '[\"Judith Lowe\"]', '[\"Facere et asperiores\"]', '[\"rupees\"]', '[\"111\"]', '[\"877\"]', '[\"v33301712740188.jpeg\"]', '2024-04-10 03:39:48', '2024-04-10 03:39:48'),
(19, '43', '[\"Sheila Francis\"]', '[\"Eos consequatur Ut\"]', '[\"rupees\"]', '[\"10\"]', '[\"354\"]', NULL, '2024-05-14 06:18:52', '2024-05-14 06:18:52'),
(20, '44', '[\"test\"]', '[\"Eveniet mollitia du\"]', '[\"rupees\"]', '[\"10\"]', '[\"620\"]', NULL, '2024-05-14 06:30:14', '2024-05-14 06:30:14'),
(21, '46', '[\"Paul Mccullough\",\"test\"]', '[\"Et ipsam tempora hic\",\"Eveniet mollitia du\"]', '[\"rupees\",\"rupees\"]', '[\"Officiis quis invent\",\"10\"]', '[\"709\",\"1500\"]', '[null,\"v80901715760327.jpeg\"]', '2024-05-14 06:54:03', '2024-05-15 02:35:27'),
(22, '47', '[\"scscsdc\"]', '[\"dc\"]', '[\"percent\"]', '[\"50\"]', '[\"218\"]', NULL, '2024-05-23 23:17:10', '2024-05-23 23:17:10'),
(23, '48', '[\"Quyn Chan\"]', '[\"Quo modi quibusdam l\"]', '[\"rupees\"]', '[\"1\"]', '[\"445\"]', '\"[\\\"v63101716526362.jpeg\\\"]\"', '2024-05-23 23:22:42', '2024-05-23 23:22:42'),
(24, '49', '[\"Quyn Chan\"]', '[\"Quo modi quibusdam l\"]', '[\"rupees\"]', '[\"1\"]', '[\"445\"]', '\"[\\\"v87801716526385.jpeg\\\"]\"', '2024-05-23 23:23:05', '2024-05-23 23:23:05'),
(25, '50', '[\"xsxs\"]', '[\"sxsx\"]', '[\"rupees\"]', '[\"0\"]', '[\"609\"]', '\"[\\\"v9101716526633.jpeg\\\"]\"', '2024-05-23 23:27:13', '2024-05-23 23:27:13'),
(26, '54', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05 02:14:41', '2024-06-05 02:14:41'),
(27, '56', '[\"zhep\"]', '[\"cab\"]', '[\"rupees\"]', '[\"10\"]', '[\"100\"]', '[\"v79601717574034.jpeg\"]', '2024-06-05 02:18:27', '2024-06-05 02:23:54'),
(28, '57', '[\"Unity Ortega\"]', '[\"Eos id sint et pla\"]', '[\"percent\"]', '[\"20\"]', '[\"609\"]', '[\"v5401718352023.jpeg\"]', '2024-06-14 02:28:40', '2024-06-14 02:30:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
