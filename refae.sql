-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 04:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refae`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `object_id` bigint(20) DEFAULT NULL,
  `object_model` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT '0',
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbox_messages`
--

CREATE TABLE `inbox_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inbox_id` bigint(20) DEFAULT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` tinyint(4) DEFAULT '0',
  `is_read` tinyint(4) DEFAULT '0',
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'pyramids.jpg',
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `trip_ideas` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `content`, `slug`, `image_id`, `map_lat`, `map_lng`, `map_zoom`, `status`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`, `banner_image_id`, `trip_ideas`) VALUES
(1, 'Paris', '<p>New York, a city that doesnt sleep, as Frank Sinatra sang. The Big Apple is one of the largest cities in the United States and one of the most popular in the whole country and the world. Millions of tourists visit it every year attracted by its various iconic symbols and its wide range of leisure and cultural offer. New York is the birth place of new trends and developments in many fields such as art, gastronomy, technology,...</p>', 'paris', 'Mokhtar_Ali_605c9eeebc8f4.jpg', '48.856613', '2.352222', 12, 'publish', 1, 2, NULL, 1, 4, NULL, NULL, NULL, '2021-02-22 00:24:51', '2021-03-25 12:32:14', 74, '\"[{\\\"title\\\":\\\"Experiencing the best jazz in Harlem, birthplace of bebop\\\",\\\"link\\\":\\\"#\\\",\\\"content\\\":\\\"New Orleans might be the home of jazz, but New York City is where many of the genre\\u2019s greats became stars \\u2013 and Harlem was at the heart of it.The neighborhood experienced a rebirth during the...\\\",\\\"image_id\\\":\\\"75\\\"},{\\\"title\\\":\\\"Reflections from the road: transformative \\u2018Big Trip\\u2019 experiences\\\",\\\"link\\\":\\\"#\\\",\\\"content\\\":\\\"Whether it\\u2019s a gap year after finishing school, a well-earned sabbatical from work or an overseas adventure in celebration of your retirement, a big trip is a rite of passage for every traveller, with myriad life lessons to be ...\\\",\\\"image_id\\\":\\\"76\\\"}]\"'),
(5, 'Los Angeles', NULL, 'los-angeles', '73', '34.052235', '-118.243683', 12, 'publish', 9, 10, NULL, 1, NULL, NULL, NULL, NULL, '2021-02-22 00:24:51', '2021-02-22 00:24:52', NULL, NULL),
(6, 'New Jersey', NULL, 'new-jersey', '69', '40.058323', '-74.405663', 12, 'publish', 11, 12, NULL, 1, NULL, NULL, NULL, NULL, '2021-02-22 00:24:51', '2021-02-22 00:24:52', NULL, NULL),
(7, 'San Francisco', NULL, 'san-francisco', '70', '37.774929', '-122.419418', 12, 'publish', 13, 14, NULL, 1, NULL, NULL, NULL, NULL, '2021-02-22 00:24:51', '2021-02-22 00:24:52', NULL, NULL),
(8, 'Virginia', NULL, 'virginia', '71', '37.431572', '-78.656891', 12, 'publish', 15, 16, NULL, 1, NULL, NULL, NULL, NULL, '2021-02-22 00:24:51', '2021-02-22 00:24:52', NULL, NULL),
(9, 'cairo', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'cairo', NULL, NULL, NULL, 8, 'publish', 17, 18, NULL, 4, NULL, NULL, NULL, NULL, '2021-03-25 11:45:00', '2021-03-25 11:45:00', NULL, NULL),
(10, 'magy', '<div style=\"color: #9e9e9e; background-color: #101010; font-family: Consolas, \'Courier New\', monospace; font-weight: normal; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div><span style=\"color: #ffc107;\"> gdfgdfgdf</span></div>\r\n</div>', 'magy', NULL, NULL, NULL, 8, 'publish', 19, 20, NULL, 4, NULL, NULL, NULL, NULL, '2021-03-25 11:58:18', '2021-03-25 11:58:18', NULL, NULL),
(11, 'الحاج حناوي', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'alhag-hnaoy', 'Mokhtar_Ali_605c9d4f31a1a.jpg', NULL, NULL, 8, 'publish', 21, 22, NULL, 4, 4, NULL, NULL, NULL, '2021-03-25 12:05:00', '2021-03-25 12:25:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_id` varchar(255) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'publish',
  `is_featured` int(11) NOT NULL DEFAULT '0',
  `stadium` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_13_174533_create_permission_tables', 1),
(4, '2019_03_17_114820_create_table_core_pages', 1),
(5, '2019_03_17_140539_create_media_files_table', 1),
(6, '2019_03_27_081940_create_core_setting_table', 1),
(7, '2019_03_28_101009_create_bravo_booking_table', 1),
(8, '2019_03_28_165911_create_booking_meta_table', 1),
(9, '2019_04_01_150630_create_menu_table', 1),
(10, '2019_04_02_150630_create_core_news_table', 1),
(11, '2019_04_03_080159_bravo_location', 1),
(12, '2019_04_05_143248_create_core_templates_table', 1),
(13, '2019_05_07_085430_create_core_languages_table', 1),
(14, '2019_05_07_085442_create_core_translations_table', 1),
(15, '2019_05_17_074008_create_bravo_review', 1),
(16, '2019_05_17_113042_create_tour_attrs_table', 1),
(17, '2019_05_21_084235_create_bravo_contact_table', 1),
(18, '2019_05_28_152845_create_core_subscribers_table', 1),
(19, '2019_06_17_142338_bravo_seo', 1),
(20, '2019_07_08_075436_create_core_vendor_plans', 1),
(21, '2019_07_11_083501_update_from_110_to_120', 1),
(22, '2019_08_05_031018_create_core_vendor_plan_meta_table', 1),
(23, '2019_08_09_163909_create_inbox_table', 1),
(24, '2019_08_16_094354_update_from_120_to_130', 1),
(25, '2019_09_13_070650_update_from_130_to_140', 1),
(26, '2019_11_05_092516_update_from_140_to_150', 1),
(27, '2020_03_09_102753_update_from_151_to_160', 1),
(28, '2020_04_02_150631_create_core_tags_table', 1),
(29, '2020_05_16_073120_update_from_160_to_170', 1),
(30, '2020_08_13_073553_bravo_property_category', 1),
(31, '2021_04_02_150632_create_core_tag_new_table', 1),
(32, '2021_03_28_121914_create_finishes_table', 2),
(33, '2021_03_28_123350_create_finish_translations_table', 2),
(34, '2021_03_29_130942_create_services_table', 2),
(35, '2021_03_30_142020_create_service_translations_table', 2),
(36, '2021_04_01_004829_create_sliders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `slug`, `status`, `image_id`, `is_featured`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Redfin Ranks the Most Competitive Neighborhoods of 2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.', 'redfin-ranks-the-most-competitive-neighborhoods-of-2020', 'publish', '79', NULL, 1, '2021-02-22 00:24:53', '2021-03-25 20:19:39'),
(2, 'Pure Luxe in Punta Mita', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'pure-luxe-in-punta-mita', 'publish', '78', NULL, 0, '2021-02-22 00:24:53', NULL),
(3, 'All Aboard the Rocky Mountaineer', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'all-aboard-the-rocky-mountaineer', 'publish', '78', NULL, 0, '2021-02-22 00:24:53', NULL),
(4, 'City Spotlight: Philadelphia', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'city-spotlight-philadelphia', 'publish', '78', NULL, 0, '2021-02-22 00:24:53', NULL),
(5, 'Tiptoe through the Tulips of Washington', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'tiptoe-through-the-tulips-of-washington', 'publish', '78', NULL, 0, '2021-02-22 00:24:53', NULL),
(6, 'A Seaside Reset in Laguna Beach', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'a-seaside-reset-in-laguna-beach', 'publish', '77', NULL, 5, '2021-02-22 00:24:54', '2021-03-17 19:13:32'),
(7, 'America  National Parks with Denver', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'america-national-parks-with-denver', 'publish', '79', NULL, 3, '2021-02-22 00:24:54', '2021-03-18 07:28:57'),
(8, 'Morning in the Northern sea', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'morning-in-the-northern-sea', 'publish', '79', NULL, 50, '2021-02-22 00:24:54', '2021-03-24 20:19:43'),
(9, 'New Post', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 'new-post', 'publish', '0', 1, 2, '2021-03-25 14:41:41', '2021-04-02 16:13:19'),
(10, 'New Post', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 'new-post-1', 'publish', '0', 1, 2, '2021-03-25 14:42:14', '2021-03-25 20:20:51'),
(11, 'New Post', '<p>this is the descreption of this post</p>', 'new-post-2', 'publish', 'Mokhtar_Ali_6065f1f43d5d6.png', NULL, 5, '2021-04-01 14:16:52', '2021-04-02 16:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_number` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `item_count` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `paypal_orderid` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 11, 1, '2021-05-07 01:21:01', '0000-00-00 00:00:00'),
(2, 6, 1, 964, 3, '2021-05-07 20:34:30', '2021-05-07 20:34:30'),
(3, 7, 1, 964, 3, '2021-05-07 20:35:43', '2021-05-07 20:35:43'),
(4, 8, 1, 964, 3, '2021-05-07 20:40:26', '2021-05-07 20:40:26'),
(5, 9, 1, 964, 3, '2021-05-07 20:42:43', '2021-05-07 20:42:43'),
(6, 10, 2, 964, 1, '2021-05-07 21:25:18', '2021-05-07 21:25:18'),
(7, 11, 2, 964, 1, '2021-05-07 21:30:18', '2021-05-07 21:30:18'),
(8, 12, 1, 964, 1, '2021-05-08 00:05:33', '2021-05-08 00:05:33'),
(9, 13, 2, 964, 1, '2021-05-08 00:07:51', '2021-05-08 00:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_info` text COLLATE utf8mb4_unicode_ci,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci,
  `note_to_vendor` text COLLATE utf8mb4_unicode_ci,
  `last_process_by` int(11) DEFAULT NULL,
  `pay_date` timestamp NULL DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `bed` tinyint(4) DEFAULT '0',
  `bathroom` tinyint(4) DEFAULT '0',
  `square` int(11) DEFAULT '0',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `create_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `rate_number` int(11) DEFAULT NULL,
  `author_ip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vendor_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `object_id`, `object_model`, `title`, `content`, `rate_number`, `author_ip`, `status`, `publish_date`, `create_user`, `update_user`, `deleted_at`, `lang`, `created_at`, `updated_at`, `vendor_id`) VALUES
(1, NULL, NULL, 'this is the title', 'this is the content', 5, '192.168.1.1', 'approved', NULL, 3, 3, NULL, 'en', NULL, NULL, 4),
(2, 5, 'agencies', 'good service', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when  sum.', 0, '127.0.0.1', 'approved', NULL, 9, 10, '2021-03-24 15:43:14', NULL, '2021-03-23 12:49:33', '2021-03-24 15:43:14', 5),
(3, 5, 'agencies', 'this is the revi', '<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" integrity=\"sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==\" crossorigin=\"anonymous\" />', 0, '127.0.0.1', 'approved', NULL, 9, 10, NULL, NULL, '2021-03-23 13:07:00', '2021-03-24 15:28:43', 9),
(4, 1, 'properties', 'this is the revi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '127.0.0.1', 'approved', NULL, 10, NULL, NULL, NULL, '2021-03-24 11:33:09', '2021-03-24 11:33:09', 10),
(5, 8, 'Property', 'properties', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, '127.0.0.1', 'approved', NULL, 3, NULL, NULL, NULL, '2021-03-24 11:36:58', '2021-03-24 11:36:58', 10),
(6, 8, 'Property', 'asdsad', 'mokh ali\r\nmokh ali\r\n\r\n03/24/2021 13:36\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, '127.0.0.1', 'approved', NULL, 10, NULL, NULL, NULL, '2021-03-24 12:04:35', '2021-03-24 12:04:35', 10),
(7, 8, 'Property', 'zay elfol', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, '127.0.0.1', 'approved', NULL, 10, NULL, NULL, NULL, '2021-03-24 12:08:51', '2021-03-24 12:08:51', 10),
(8, 1, 'finish', 'the finish agency', 'dfsdf dsf sdf s', 0, '127.0.0.1', 'approved', NULL, 4, NULL, NULL, NULL, '2021-03-30 13:20:03', '2021-03-30 13:20:03', 4),
(9, 16, 'lawyer', 'this is the revi', 'xzczx czxc zxc zxc zxc zxc', 0, '127.0.0.1', 'approved', NULL, 4, NULL, NULL, NULL, '2021-03-30 13:22:27', '2021-03-30 13:22:27', 4),
(10, 1, 'Property', 'title', 'content review descreption', 0, '127.0.0.1', 'approved', NULL, NULL, NULL, NULL, NULL, '2021-03-30 20:03:04', '2021-03-30 20:03:04', 1),
(11, NULL, NULL, NULL, NULL, 0, '127.0.0.1', 'approved', NULL, NULL, NULL, NULL, NULL, '2021-03-30 20:17:04', '2021-03-30 20:17:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci,
  `autoload` tinyint(4) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `group`, `val`, `autoload`, `create_user`, `update_user`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'site_locale', 'general', 'en', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'site_enable_multi_lang', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'enable_rtl_egy', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'agent_enable_review', 'agent', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'agent_review_approved', 'agent', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'agent_review_stats', 'agent', '[{\"title\":\"Service\"},{\"title\":\"Organization\"},{\"title\":\"Friendliness\"},{\"title\":\"Area Expert\"},{\"title\":\"Safety\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'menu_locations', 'general', '{\"primary\":1,\"footer\":2}', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'admin_email', 'general', 'contact@findhousedev.com', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'email_from_name', 'general', 'FindHouse', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'email_from_address', 'general', 'contact@findhousedev.com', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'logo_id', 'general', '11', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'logo_id_mb', 'general', '11', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'logo_id_tran', 'general', '12', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'site_favicon', 'general', '14', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'topbar_left_text', 'general', '<div class=\"socials\">\n<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>\n<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>\n<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>\n</div>\n<span class=\"line\"></span>\n<a href=\"mailto:contact@findhousedev.com\">contact@findhousedev.com</a>', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'footer_text_left', 'general', '© Findhouse. Made with love', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'footer_text_right', 'general', '', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'list_widget_footer', 'general', '{\"1\":{\"title\" : \"About Site\", \"size\" : \"3\", \"content\" : \"<p>\\r\\n We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.\\r\\n </p>\"},\"2\":{\"title\":\"COMPANY\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">About Us<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Community Blog<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Rewards<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Work with Us<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Meet the Team<\\/a><\\/li>\\r\\n<\\/ul>\"},\n                    \"3\":{\"title\":\"SUPPORT\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">Account<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Legal<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Contact<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Affiliate Program<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Privacy Policy<\\/a><\\/li>\\r\\n<\\/ul>\"},\n                    \"4\":{\"title\":\"Follow us\",\"size\":\"3\",\"content\":\"<ul class=\\\"mb30\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"list-inline-item footer-social-icon\\\"><a href=\\\"#\\\"><i class=\\\"fa fa-facebook\\\"><\\/i><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"list-inline-item footer-social-icon\\\"><a href=\\\"#\\\"><i class=\\\"fa fa-twitter\\\"><\\/i><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"list-inline-item footer-social-icon\\\"><a href=\\\"#\\\"><i class=\\\"fa fa-instagram\\\"><\\/i><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"list-inline-item footer-social-icon\\\"><a href=\\\"#\\\"><i class=\\\"fa fa-pinterest\\\"><\\/i><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"list-inline-item footer-social-icon\\\"><a href=\\\"#\\\"><i class=\\\"fa fa-dribbble\\\"><\\/i><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"list-inline-item footer-social-icon\\\"><a href=\\\"#\\\"><i class=\\\"fa fa-google\\\"><\\/i><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t<\\/ul>\\r\\n<h4>Subscribe<\\/h4>\\r\\n<form class=\\\"footer_mailchimp_form\\\">\\r\\n\\t\\t\\t\\t\\t\\t \\t<div class=\\\"form-row align-items-center\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t    <div class=\\\"col-auto\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t    \\t<input type=\\\"email\\\" name=\\\"email\\\" class=\\\"form-control mb-2\\\" id=\\\"inlineFormInput\\\" placeholder=\\\"Your email\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t    <\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t    <div class=\\\"col-auto\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t    \\t<button type=\\\"submit\\\" class=\\\"btn btn-primary mb-2\\\"><i class=\\\"fa fa-angle-right\\\"><\\/i><\\/button>\\r\\n\\t\\t\\t\\t\\t\\t\\t    <\\/div>\\r\\n\\t\\t\\t\\t\\t\\t  \\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t <div class=\\\"form-mess\\\"><\\/div> <\\/form>\"}}', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'contact_banner', 'general', '6', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'list_info_contact', 'general', '[{\"title\" : \"Contact Us\",\"content\" : \"<p>\\r\\n Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst. \\r\\n <\\/p>\"},{\"title\" : \"Address\",\"content\" : \"<p>\\r\\n 2301 Ravenswood Rd Madison, WI 53711 \\r\\n <\\/p>\"},{\"title\" : \"Phone\",\"content\" : \"<p>\\r\\n (315) 905-2321 \\r\\n <\\/p>\"},{\"title\" : \"Mail\",\"content\" : \"<p>\\r\\n <a href=\\\"#\\\" class=\\\"icofont-facebook\\\">\\r\\n traitimanhnholeviem@gmail.com \\r\\n<\\/a>\\r\\n <\\/p>\"},{\"title\" : \"Skype\",\"content\" : \"<p>\\r\\n findhouse.com \\r\\n <\\/p>\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'map_contact_lat', 'general', '36.401066', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'map_contact_long', 'general', '-88.312292', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'map_contact_zoom', 'general', '8', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'contact_partners_title', 'general', 'Become a Real Estate Agent', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'contact_partners_sub_title', 'general', 'We only work with the best companies around the globe', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'contact_partners_button_text', 'general', 'Register', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'contact_partners_button_link', 'general', '#', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'list_widget_footer_ja', 'general', '[{\"title\":\"\\u52a9\\u3051\\u304c\\u5fc5\\u8981\\uff1f\",\"size\":\"3\",\"content\":\"<div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u304a\\u96fb\\u8a71\\u304f\\u3060\\u3055\\u3044\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            + 00 222 44 5678\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u90f5\\u4fbf\\u7269\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            hello@yoursite.com\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u30d5\\u30a9\\u30ed\\u30fc\\u3059\\u308b\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-facebook\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-twitter\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-youtube-play\\\"><\\/i>\\r\\n            <\\/a>\\r\\n        <\\/div>\\r\\n    <\\/div>\"},{\"title\":\"\\u4f1a\\u793e\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">\\u7d04, \\u7565<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30b3\\u30df\\u30e5\\u30cb\\u30c6\\u30a3\\u30d6\\u30ed\\u30b0<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u5831\\u916c<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u3068\\u9023\\u643a<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30c1\\u30fc\\u30e0\\u306b\\u4f1a\\u3046<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"\\u30b5\\u30dd\\u30fc\\u30c8\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">\\u30a2\\u30ab\\u30a6\\u30f3\\u30c8<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u6cd5\\u7684<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u63a5\\u89e6<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30a2\\u30d5\\u30a3\\u30ea\\u30a8\\u30a4\\u30c8\\u30d7\\u30ed\\u30b0\\u30e9\\u30e0<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u500b\\u4eba\\u60c5\\u5831\\u4fdd\\u8b77\\u65b9\\u91dd<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"\\u8a2d\\u5b9a\",\"size\":\"3\",\"content\":\"<ul>\\r\\n<li><a href=\\\"#\\\">\\u8a2d\\u5b9a1<\\/a><\\/li>\\r\\n<li><a href=\\\"#\\\">\\u8a2d\\u5b9a2<\\/a><\\/li>\\r\\n<\\/ul>\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'page_contact_title', 'general', 'We\'d love to hear from you', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'page_contact_sub_title', 'general', 'Send us a message and we\'ll respond as soon as possible', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'page_contact_desc', 'general', '<!DOCTYPE html><html><head></head><body><h3>FindHouse</h3><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Tell. + 00 222 444 33</p><p>Email. hello@yoursite.com</p><p>1355 Market St, Suite 900San, Francisco, CA 94103 United States</p></body></html>', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'page_contact_image', 'general', '13', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'home_page_id', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'page_contact_title', 'general', 'We\'d love to hear from you', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'page_contact_title_ja', 'general', 'あなたからの御一報をお待ち', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'page_contact_sub_title', 'general', 'Send us a message and we\'ll respond as soon as possible', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'page_contact_sub_title_ja', 'general', '私たちにメッセージを送ってください、私たちはできるだ', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'page_contact_desc', 'general', '<!DOCTYPE html><html><head></head><body><h3>FindHouse</h3><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Tell. + 00 222 444 33</p><p>Email. hello@yoursite.com</p><p>1355 Market St, Suite 900San, Francisco, CA 94103 United States</p></body></html>', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'page_contact_image', 'general', '13', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'currency_main', 'payment', 'usd', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'currency_format', 'payment', 'left', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'currency_decimal', 'payment', ',', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'currency_thousand', 'payment', '.', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'currency_no_decimal', 'payment', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'extra_currency', 'payment', '[{\"currency_main\":\"eur\",\"currency_format\":\"left\",\"currency_thousand\":\".\",\"currency_decimal\":\",\",\"currency_no_decimal\":\"2\",\"rate\":\"0.902807\"},{\"currency_main\":\"jpy\",\"currency_format\":\"right_space\",\"currency_thousand\":\".\",\"currency_decimal\":\",\",\"currency_no_decimal\":\"0\",\"rate\":\"0.00917113\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'map_provider', 'advance', 'gmap', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'size_unit', 'advance', 'ft', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'map_gmap_key', 'advance', 'AIzaSyC2u_2ll2sD_IDX5ZV-2awnW54_DZVpbsM', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'g_offline_payment_enable', 'payment', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'g_offline_payment_name', 'payment', 'Offline Payment', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'date_format', 'general', 'm/d/Y', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'site_title', 'general', 'FindHouse', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'site_timezone', 'general', 'UTC', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'site_title', 'general', 'FindHouse', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'email_header', 'general', '<h1 class=\"site-title\" style=\"text-align: center\">FindHouse</h1>', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'email_footer', 'general', '<p class=\"\" style=\"text-align: center\">&copy; 2019 FindHouse. All rights reserved</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'enable_mail_user_registered', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'user_content_email_registered', 'user', '<h1 style=\"text-align: center\">Welcome!</h1>\n                    <h3>Hello [first_name] [last_name]</h3>\n                    <p>Thank you for signing up with FindHouse! We hope you enjoy your time with us.</p>\n                    <p>Please click button to verify your email address!</p>\n                    <p>[button_verify]</p>\n                    <p>Regards,</p>\n                    <p>FindHouse</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'admin_enable_mail_user_registered', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'admin_content_email_user_registered', 'user', '<h3>Hello Administrator</h3>\n                    <p>We have new registration</p>\n                    <p>Full name: [first_name] [last_name]</p>\n                    <p>Email: [email]</p>\n                    <p>Regards,</p>\n                    <p>FindHouse</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'user_content_email_forget_password', 'user', '<h1>Hello!</h1>\n                    <p>You are receiving this email because we received a password reset request for your account.</p>\n                    <p style=\"text-align: center\">[button_reset_password]</p>\n                    <p>This password reset link expire in 60 minutes.</p>\n                    <p>If you did not request a password reset, no further action is required.\n                    </p>\n                    <p>Regards,</p>\n                    <p>FindHouse</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'email_driver', 'email', 'log', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'email_host', 'email', 'smtp.mailgun.org', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'email_port', 'email', '587', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'email_encryption', 'email', 'tls', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'email_username', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'email_password', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'email_mailgun_domain', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'email_mailgun_secret', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'email_mailgun_endpoint', 'email', 'api.mailgun.net', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'email_postmark_token', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'email_ses_key', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'email_ses_secret', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'email_ses_region', 'email', 'us-east-1', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'email_sparkpost_secret', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'booking_enquiry_type', 'enquiry', 'booking_and_enquiry', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'booking_enquiry_enable_mail_to_vendor', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'booking_enquiry_mail_to_vendor_content', 'enquiry', '<h3>Hello [vendor_name]</h3>\n                            <p>You get new inquiry request from [email]</p>\n                            <p>Name :[name]</p>\n                            <p>Emai:[email]</p>\n                            <p>Phone:[phone]</p>\n                            <p>Content:[note]</p>\n                            <p>Service:[service_link]</p>\n                            <p>Regards,</p>\n                            <p>FindHouse</p>\n                            </div>', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'booking_enquiry_enable_mail_to_admin', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'booking_enquiry_mail_to_admin_content', 'enquiry', '<h3>Hello Administrator</h3>\n                            <p>You get new inquiry request from [email]</p>\n                            <p>Name :[name]</p>\n                            <p>Emai:[email]</p>\n                            <p>Phone:[phone]</p>\n                            <p>Content:[note]</p>\n                            <p>Service:[service_link]</p>\n                            <p>Vendor:[vendor_link]</p>\n                            <p>Regards,</p>\n                            <p>FindHouse</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'vendor_enable', 'agent', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'vendor_commission_type', 'agent', 'percent', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'vendor_commission_amount', 'agent', '10', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'vendor_role', 'agent', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'role_verify_fields', 'agent', '{\"phone\":{\"name\":\"Phone\",\"type\":\"text\",\"roles\":[\"1\",\"2\",\"3\"],\"required\":null,\"order\":null,\"icon\":\"fa fa-phone\"},\"id_card\":{\"name\":\"ID Card\",\"type\":\"file\",\"roles\":[\"1\",\"2\",\"3\"],\"required\":\"1\",\"order\":\"0\",\"icon\":\"fa fa-id-card\"},\"trade_license\":{\"name\":\"Trade License\",\"type\":\"multi_files\",\"roles\":[\"1\",\"3\"],\"required\":\"1\",\"order\":\"0\",\"icon\":\"fa fa-copyright\"}}', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'enable_mail_vendor_registered', 'agent', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'vendor_content_email_registered', 'agent', '<h1 style=\"text-align: center;\">Welcome!</h1>\n                            <h3>Hello [first_name] [last_name]</h3>\n                            <p>Thank you for signing up with FindHouse! We hope you enjoy your time with us.</p>\n                            <p>Please click button to verify your email address!</p>\n                            <p>[button_verify]</p>\n                            <p>Regards,</p>\n                            <p>FindHouse</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'admin_enable_mail_vendor_registered', 'agent', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'admin_content_email_vendor_registered', 'agent', '<h3>Hello Administrator</h3>\n                            <p>An user has been registered as Vendor. Please check the information bellow:</p>\n                            <p>Full name: [first_name] [last_name]</p>\n                            <p>Email: [email]</p>\n                            <p>Registration date: [created_at]</p>\n                            <p>You can approved the request here: [link_approved]</p>\n                            <p>Regards,</p>\n                            <p>FindHouse</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'cookie_agreement_enable', 'advance', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'cookie_agreement_button_text', 'advance', 'Got it', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'cookie_agreement_content', 'advance', '<p>This website requires cookies to provide all of its features. By using our website, you agree to our use of cookies. <a href=\'#\'>More info</a></p>', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'logo_invoice_id', 'booking', '11', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'invoice_company_info', 'booking', '<p><span style=\"font-size: 14pt;\"><strong>FindHouse Company</strong></span></p>\n                                <p>Ha Noi, Viet Nam</p>\n                                <p>www.findhousedev.com</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'news_page_list_title', 'news', 'News', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'news_page_list_banner', 'news', '84', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'news_sidebar', 'news', '[\n                        {\"title\":null,\"content\":null,\"type\":\"search_form\"},\n                        {\"title\":\"Featured Listings\",\"content\":null,\"type\":\"featured_listings\"},\n                        {\"title\":\"Categories\",\"content\":null,\"type\":\"category\"},\n                        {\"title\":\"Tags\",\"content\":null,\"type\":\"tag\"}\n                    ]', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'property_search_fields', 'tour', '{\"title\":\"Location\",\"field\":\"location\",\"position\":\"2\"},{\"title\":\"Property Name\",\"field\":\"service_name\",\"position\":\"1\"},{\"title\":\"Property Category\",\"field\":\"category\",\"position\":\"3\"},{\"title\":\"Property Type\",\"field\":\"property_type\",\"position\":\"4\"},{\"title\":\"Bathrooms\",\"field\":\"bathrooms\",\"position\":\"5\"},{\"title\":\"Bedrooms\",\"field\":\"bedrooms\",\"position\":\"6\"},{\"title\":\"Garages\",\"field\":\"garages\",\"position\":\"7\"},{\"title\":\"Price\",\"field\":\"price\",\"position\":\"8\"},{\"title\":\"Year built\",\"field\":\"year_built\",\"position\":\"9\"},{\"title\":\"Amenities\",\"field\":\"amenities-1|6\",\"position\":\"10\"}', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'property_map_search_fields', 'property', '[{\"title\":\"Location\",\"field\":\"location\",\"position\":\"2\"},{\"title\":\"Property Name\",\"field\":\"service_name\",\"position\":\"1\"},{\"title\":\"Property Category\",\"field\":\"category\",\"position\":\"3\"},{\"title\":\"Property Type\",\"field\":\"property_type\",\"position\":\"4\"},{\"title\":\"Bathrooms\",\"field\":\"bathrooms\",\"position\":\"5\"},{\"title\":\"Bedrooms\",\"field\":\"bedrooms\",\"position\":\"6\"},{\"title\":\"Garages\",\"field\":\"garages\",\"position\":\"7\"},{\"title\":\"Price\",\"field\":\"price\",\"position\":\"8\"},{\"title\":\"Year built\",\"field\":\"year_built\",\"position\":\"9\"},{\"title\":\"Amenities\",\"field\":\"amenities-1|6\",\"position\":\"10\"}]', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text,
  `image_id` varchar(255) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `days` int(11) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `is_featured` int(11) DEFAULT '0',
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `vendor_commission_amount` int(11) DEFAULT NULL,
  `vendor_commission_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_social` text COLLATE utf8mb4_unicode_ci,
  `review_score` decimal(2,1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_submit_status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` smallint(6) DEFAULT NULL,
  `rolez_id` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `address`, `address2`, `phone`, `birthday`, `city`, `state`, `country`, `zip_code`, `last_login_at`, `avatar`, `bio`, `status`, `create_user`, `update_user`, `vendor_commission_amount`, `vendor_commission_type`, `locale`, `user_social`, `review_score`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `business_name`, `verify_submit_status`, `is_verified`, `rolez_id`) VALUES
(3, 'mokh ali', 'mokh', 'ali', 'user2@app.com', NULL, '$2y$10$haEPLOLDtCjISqV0KmxxBOk08Y7UeDcryNSUWO93DRU9YVK17Hn8q', NULL, NULL, '010130334652', NULL, NULL, NULL, NULL, NULL, NULL, 'defualt.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-20 15:51:23', '2021-03-20 15:51:23', NULL, NULL, NULL, 2),
(4, 'mokh alia', 'mokh', 'alia', 'admin@app.com', NULL, '$2y$10$0GjG8O9bmn72xMOUGjjgWOXTiTh/YiQpeCQitQA5vKVu8jwLH0pyS', NULL, NULL, '01013033465', '1972-01-01', NULL, NULL, NULL, NULL, NULL, 'defualt.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"\\\"null\\\"\"', NULL, NULL, NULL, '2021-03-19 19:25:25', '2021-03-22 13:31:09', NULL, NULL, NULL, 1),
(5, 'mokh ali', 'mokh', 'ali', 'user@apps.com', NULL, '$2y$10$seM4GIFjkdeJkfZgrOQSPuLH7AMmIJsI5ZdWvTqlNv5ynk4DqHL7u', NULL, NULL, '01013033464', NULL, NULL, NULL, NULL, NULL, NULL, 'defualt.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 19:25:25', '2021-03-19 19:25:25', NULL, NULL, NULL, 2),
(6, 'name ali2', 'name', 'ali2', 'user@new.com', NULL, '$2y$10$M7g48GwKYpA9glV8SIJvMufWSGWuc.u/xTf0eTE2joO.4FfpF2sfi', NULL, NULL, '6546464645', NULL, NULL, NULL, NULL, NULL, NULL, 'defualt.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 16:35:20', '2021-03-22 16:35:20', NULL, NULL, NULL, 2),
(7, 'name user', 'name', 'user', 'agents@app.com', NULL, '$2y$10$oetIqbwc.Ua8.SUtmpBxEeWiWxDoW2VK1Oatt6TPNKVRGDp0KfGZS', NULL, NULL, '6546464645', NULL, NULL, NULL, 'AX', NULL, NULL, 'defualt.png', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 20:07:23', '2021-03-26 21:44:20', NULL, NULL, NULL, 2),
(8, 'name agent', 'name', 'agent', 'agensts@app.com', NULL, '$2y$10$2sgpiB0FvgeEyBEBCT6h7OWuyHBpC7GLQKIpt6e0T9RvZzxdLXVgi', NULL, NULL, '65464464645', NULL, NULL, NULL, 'AX', NULL, NULL, 'defualt.png', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 20:09:56', '2021-03-26 17:40:41', NULL, NULL, NULL, 4),
(9, 'name agent', 'name', 'agent', 'agentzs@app.com', NULL, '$2y$10$VLTOUpfrpc1XULtvg8Nk4u2dc9M21kxSUdTmQzm1NVeMGfKZSezXm', NULL, NULL, '6646465478', '0000-00-00', NULL, NULL, 'EG', NULL, NULL, '605fc53d390feagent-28.jpg', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 20:10:55', '2021-03-27 21:52:29', NULL, NULL, NULL, 4),
(10, ' ', NULL, NULL, '', NULL, '$2y$10$.iGJiELHAVStBDY.X74d.eMhok7N4HCfnE/5mTz32N2Veom/Uqkfm', 'address', NULL, NULL, '1970-01-01', 'cairo', 'zifta', 'DZ', NULL, NULL, '605e056f90582agent-1.jpg', 'askjddhsakjdh', NULL, NULL, NULL, NULL, NULL, NULL, '\"null\"', NULL, NULL, NULL, '2021-03-22 20:14:14', '2021-03-26 14:11:23', NULL, NULL, NULL, 2),
(11, 'new one', 'new', 'one', 'new@one.com', NULL, '$2y$10$fsWvF5j4giX5/sKqcmfmsO6v8fMB4z6YuKqApdXxx66LziWR92B/a', NULL, NULL, '6846846547787', NULL, NULL, NULL, 'AX', NULL, NULL, '605fcf040bf47agent-2.jpg', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-24 12:17:37', '2021-03-27 22:34:12', NULL, NULL, NULL, 3),
(12, 'new one', 'new', 'one', 'new2@one.com', NULL, '$2y$10$p2NWtXaUkbQZ25lcetQIFO3IcJ/RIHvuzDsDuCGd6FlHUQgFEvnPS', NULL, NULL, '9874565432', NULL, NULL, NULL, NULL, NULL, NULL, 'Mokhtar_ali605b6528cf4f8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-24 14:16:38', NULL, '2021-03-24 12:26:34', '2021-03-24 14:16:38', NULL, NULL, NULL, 5),
(13, 'adham henawy', 'adham', 'henawy', 'adham2@henawy.com', NULL, '$2y$10$6.p1AiKMfknq.4odwI0couaiqkRcCWya/wCl.XIHXPBL//O7rjuYa', NULL, NULL, '01258744122', NULL, NULL, NULL, 'AX', NULL, NULL, 'Mokhtar_ali605b666cd6e35.jpg', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-24 14:17:21', '2021-03-27 22:44:54', NULL, NULL, NULL, 3),
(14, 'adham henawy', 'adham', 'henawy', 'adham3@henawy.com', NULL, '$2y$10$QfPB4biQi3O.wDa.glgk4OaQrmzN/kYBCHI3aGQ/FMh/YdhwT.utW', NULL, NULL, '0125874413', NULL, NULL, NULL, NULL, NULL, NULL, 'Mokhtar_ali605b6699b014a.jpg', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-24 14:19:37', '2021-03-27 22:35:33', NULL, NULL, NULL, 3),
(15, 'mr zaabola', 'mr', 'zaabola', 'mr@zaabola.com', NULL, '$2y$10$KXEP2fQqAjUIwZ9f5WqTCOq5WQsbVIFQO3NOb5XPoPaEu8JYW3sJS', NULL, NULL, '112145545454', NULL, NULL, NULL, NULL, NULL, NULL, '605de0e9089dcagent-2-lg.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-26 11:26:01', '2021-03-26 11:26:01', NULL, NULL, NULL, 2),
(16, 'mr lawyer', 'mr', 'lawyer', 'lawyer@app.com', NULL, '$2y$10$9oR784DiqMJB.Nqmj8LTL.ImfxFR.Snu2P8gApdlEQFi1E3uVcqcy', 'the real address', 'dsfdsfsd', '65464646453', '0000-00-00', 'cairo', 'zifta', 'EG', 34324, NULL, '605fbf5d7b738agent-2-lg.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-27 21:27:25', '2021-03-27 21:32:38', 'zaabola new', NULL, NULL, 5),
(17, 'mr agent', 'mr', 'agent', 'agent@mr.com', NULL, '', 'the real address', 'dsfdsfsd', '65464646450', '0000-00-00', 'cairo', 'zifta', 'EG', 34324, NULL, '605fcd5006375agent-1.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-27 22:26:56', '2021-03-27 22:30:52', NULL, NULL, NULL, 3),
(29, 'zaabola henawy', 'zaabola', 'henawy', 'finish2@app.com', NULL, '$2y$10$whCvoFSbLITBn5DrXKq8H.ysrvAOICXrlzHsuCg2OmhIrzAzu9QuG', NULL, NULL, '0986532467898', NULL, NULL, NULL, NULL, NULL, NULL, '6060802283114agent-creative-03.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-28 11:09:54', '2021-03-28 11:09:54', NULL, NULL, NULL, 6),
(31, 'zaabola henawy', 'zaabola', 'henawy', 'admixxn@dev.com', NULL, '$2y$10$R.jhfZClTcPfOEQtP6ML0ORJJofDlMsHbhFh46busZuYs3JP0hAOW', NULL, NULL, '0986532467898', NULL, NULL, NULL, NULL, NULL, NULL, '606080f511914agent-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-28 11:13:25', '2021-03-28 11:13:25', NULL, NULL, NULL, 6),
(32, ' ', NULL, NULL, 'admasin@gmail.om', NULL, '$2y$10$0ni2sMIpvmBCfbQ88ot4G.teAw.3tHV7U2pumicm39bB9UA/Drbwq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-31 22:31:50', '2021-03-31 22:31:50', NULL, NULL, NULL, 4),
(33, ' ', NULL, NULL, 'newcustomer@app.com', NULL, '$2y$10$OknpV3HHu/rvdUl6kle85uSNzHjw0ULKunmHn/lGtejOdfCDFQtbC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-03 18:14:43', '2021-05-03 18:14:43', NULL, NULL, NULL, 4),
(34, ' ', NULL, NULL, 'shaaban@app.com', NULL, '$2y$10$ixbOgEFk9NO8WJW9Zq2kfecIVUnjaPlU5gVqlyonPmt4z2yMBU9WW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-04 01:15:41', '2021-05-04 01:15:41', NULL, NULL, NULL, 4),
(35, 'zaabola ahmed', 'zaabola', 'ahmed', 'refaa@app.com', NULL, '$2y$10$x7YJ7qfK1vzU/Kql9UCpbe2EV1iucyEw7rwwqkdA/j/lu9D2uGG1u', '01013033465', NULL, '3456543456', '1970-01-01', 'المنصوره', NULL, 'AF', NULL, NULL, '6095b7fe503e0innerbanner.jpg', 'sdfsdfdsgfg', NULL, NULL, NULL, NULL, NULL, NULL, '\"\\\"\\\\\\\"null\\\\\\\"\\\"\"', NULL, NULL, NULL, '2021-05-07 19:31:12', '2021-05-07 19:58:22', NULL, NULL, NULL, 4),
(36, ' ', NULL, NULL, 'ahmedzift@app.com', NULL, '$2y$10$W6pb73XmaSnnq.jr56z4IOoYM0AzOpuHqdFwgFd7/oxXiRo84P9yO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-07 19:35:03', '2021-05-07 19:35:03', NULL, NULL, NULL, 4),
(37, 'new name name', 'new name', 'name', 'test@newuser.com', NULL, '$2y$10$0GjG8O9bmn72xMOUGjjgWOXTiTh/YiQpeCQitQA5vKVu8jwLH0pyS', '0101303365', NULL, '646466464', '1970-01-01', 'cairo', NULL, 'EG', NULL, NULL, '6095bbda908cc609426abeb33cmockup landing2.png', 'thiiisis the ehenmbcsc', NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL, '2021-05-07 20:13:43', '2021-05-07 20:14:50', NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`id`, `object_id`, `object_model`, `user_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 4, 1, 1, NULL, NULL),
(2, 1, 'Property', 2, NULL, NULL, '2021-03-30 20:18:36', '2021-03-30 20:18:36'),
(3, 1, 'Property', 2, NULL, NULL, '2021-03-30 20:19:45', '2021-03-30 20:19:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
