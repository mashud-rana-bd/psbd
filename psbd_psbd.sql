-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 03:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbd_psbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 0, 'Clipping Path', 'Clipping Path Is Really a great service', 'http://photodesignexpert.com/public_html/admin/clipping-path', '0.jpg 1.png', 0, NULL, '2019-03-04 04:17:02', '2019-03-04 04:17:02'),
(42, 0, 'Photo Retouching', 'Photo Retouching is a great service.', 'http://photodesignexpert.com/public_html/photo-retouching', '0.jpg 1.jpg', 0, NULL, '2019-03-04 04:18:49', '2019-03-04 04:18:49'),
(43, 0, 'Image Masking', 'Image Masking is really a great service', 'http://photodesignexpert.com/public_html/image-masking', '0.jpg 1.jpg', 0, NULL, '2019-03-04 04:21:12', '2019-03-04 04:21:12'),
(44, 0, 'Drop Shadow', 'Drop Shadow is a great service', 'http://photodesignexpert.com/public_html/drop-shadow', '0.jpg 1.jpg', 0, NULL, '2019-03-04 04:23:21', '2019-03-04 04:23:21'),
(45, 0, 'Background Removal', 'Background Removal', 'http://photodesignexpert.com/public_html/background_removal', '0.jpg 1.jpg', 0, NULL, '2019-03-04 04:26:22', '2019-03-04 04:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`order_id`, `id`, `image_name`, `image_size`, `created_at`, `updated_at`) VALUES
(1, 1, 'image manipulation new one', 'image manipulation new one', '2019-01-06 21:30:20', '2019-01-06 21:30:20'),
(22, 2, 'image manipulation', 'image manipulation', '2019-01-07 09:23:54', '2019-01-07 09:23:54'),
(24, 3, 'image manipulation', 'image manipulation', '2019-01-07 12:57:14', '2019-01-07 12:57:14'),
(37, 4, 'image fixing narutoall', 'image fixing narutoall', '2019-01-07 14:14:04', '2019-01-07 14:14:04'),
(38, 5, 'image manipulation', 'image manipulation', '2019-01-07 14:17:27', '2019-01-07 14:17:27'),
(40, 6, '0 - Copy.jpg', '222340', '2019-01-13 03:57:11', '2019-01-13 03:57:11'),
(40, 7, '0.jpg', '222340', '2019-01-13 03:57:11', '2019-01-13 03:57:11'),
(40, 8, '122836_(1)_(1).jpg', '42124', '2019-01-13 03:57:11', '2019-01-13 03:57:11'),
(41, 9, '0.jpg', '222340', '2019-01-13 04:40:52', '2019-01-13 04:40:52'),
(41, 10, '0.zip', '519896', '2019-01-13 04:40:52', '2019-01-13 04:40:52'),
(41, 11, '122836_(1)_(1).jpg', '42124', '2019-01-13 04:40:52', '2019-01-13 04:40:52'),
(42, 12, '0.zip', '519896', '2019-01-13 04:44:52', '2019-01-13 04:44:52'),
(42, 13, 'crop - Copy - Copy - Copy.jpg', '54006', '2019-01-13 04:44:52', '2019-01-13 04:44:52'),
(43, 14, 'routemas_rmbd.pdf', '222923', '2019-01-14 16:48:01', '2019-01-14 16:48:01'),
(43, 15, 'routemas_rmbd_2.pdf', '223326', '2019-01-14 16:48:01', '2019-01-14 16:48:01'),
(44, 16, 'Bloom_16pc_771659157802_7144.079.16_cup copy.jpg', '52420', '2019-01-17 20:54:40', '2019-01-17 20:54:40'),
(45, 17, '122754_9440575_1720647_4674ff11_image.png', '20459', '2019-02-07 21:37:34', '2019-02-07 21:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_21_134742_create_clients_table', 1),
(4, '2018_11_15_135208_create_category_table', 1),
(7, '2018_11_22_175942_create_order_table', 2),
(8, '2018_12_09_093559_create_image_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background_options` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `return_file_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `turnaround_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instructions_message` text COLLATE utf8_unicode_ci NOT NULL,
  `find_us` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `category_name`, `background_options`, `return_file_type`, `turnaround_time`, `instructions_message`, `find_us`, `user_email`, `session_id`, `status`, `remember_token`, `created_at`, `updated_at`, `order_type`) VALUES
(1, 1, 'Image masking image fixing', 'transparent original', 'JPEG', 'Flexible', 'asif', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 10:41:29', '2018-12-11 10:41:29', 'place_order'),
(2, 1, 'Image masking image fixing image retouching', 'transparent white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 10:52:46', '2018-12-11 10:52:46', 'place_order'),
(3, 1, 'Image masking image fixing image retouching', 'transparent white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 10:58:53', '2018-12-11 10:58:53', 'place_order'),
(4, 1, 'Image masking image fixing image retouching', 'transparent white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 10:59:29', '2018-12-11 10:59:29', 'place_order'),
(5, 1, 'Image masking image fixing image retouching', 'transparent white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 11:04:08', '2018-12-11 11:04:08', 'place_order'),
(6, 1, 'Image masking', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 11:06:22', '2018-12-11 11:06:22', 'place_order'),
(7, 1, 'Image masking image fixing image retouching', 'transparent white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 11:33:41', '2018-12-11 11:33:41', 'free_trial'),
(8, 1, 'Image masking image fixing image retouching', 'transparent white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 11:35:46', '2018-12-11 11:35:46', 'free_trial'),
(9, 1, 'Image masking image fixing image retouching', 'transparent white', 'PNG', '24 hours', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-11 11:41:58', '2018-12-11 11:41:58', 'place_order'),
(10, 1, 'Image masking Blur', 'none', 'EPS', '48 hours', '', '', 'aumi.asif@gmail.com', '', 4, NULL, '2018-12-11 11:42:35', '2018-12-13 10:27:13', 'free_trial'),
(11, 1, 'Image masking image fixing image retouching', 'white', 'TIFF', '48 hours', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-13 10:41:33', '2018-12-13 10:41:33', 'place_order'),
(12, 7, 'Image masking image fixing', 'transparent', 'PNG', '12 hours', 'jhkljkj', '', 'jupiterrahman1@gmail.com', '', 1, NULL, '2018-12-23 07:12:44', '2018-12-23 07:12:44', 'place_order'),
(13, 1, 'Image masking', 'original', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 4, NULL, '2018-12-23 07:30:33', '2018-12-29 01:25:09', 'place_order'),
(14, 1, 'Image masking', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 4, NULL, '2018-12-23 07:30:49', '2018-12-26 08:14:09', 'free_trial'),
(15, 1, 'Image masking image fixing', 'white', 'PNG', '24 hours', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2018-12-26 08:15:51', '2018-12-26 08:15:51', 'place_order'),
(16, 1, 'image manipulation new one', 'transparent', 'PNG', 'Flexible', 'asd', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-06 21:30:20', '2019-01-06 21:30:20', 'place_order'),
(17, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', 'kjgu', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 09:14:59', '2019-01-07 09:14:59', 'place_order'),
(18, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', 'kjgu', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 09:18:40', '2019-01-07 09:18:40', 'place_order'),
(19, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', 'kjgu', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 09:19:32', '2019-01-07 09:19:32', 'place_order'),
(20, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', 'kjgu', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 09:19:59', '2019-01-07 09:19:59', 'place_order'),
(21, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', 'kjgu', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 09:23:42', '2019-01-07 09:23:42', 'place_order'),
(22, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', 'kjgu', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 09:23:54', '2019-01-07 09:23:54', 'place_order'),
(23, 1, 'image manipulation Atiar bhai', 'transparent original', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 12:56:37', '2019-01-07 12:56:37', 'free_trial'),
(24, 1, 'image manipulation', 'white', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 12:57:14', '2019-01-07 12:57:14', 'place_order'),
(25, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:29:44', '2019-01-07 13:29:44', 'place_order'),
(26, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:30:04', '2019-01-07 13:30:04', 'place_order'),
(27, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:31:12', '2019-01-07 13:31:12', 'place_order'),
(28, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:37:18', '2019-01-07 13:37:18', 'place_order'),
(29, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:37:48', '2019-01-07 13:37:48', 'place_order'),
(30, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:37:52', '2019-01-07 13:37:52', 'place_order'),
(31, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:49:36', '2019-01-07 13:49:36', 'place_order'),
(32, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:50:57', '2019-01-07 13:50:57', 'place_order'),
(33, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:53:20', '2019-01-07 13:53:20', 'place_order'),
(34, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:53:34', '2019-01-07 13:53:34', 'place_order'),
(35, 1, 'Atiar bhai', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 13:53:56', '2019-01-07 13:53:56', 'place_order'),
(36, 1, 'image fixing narutoall', 'original', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 2, NULL, '2019-01-07 14:13:29', '2019-01-20 05:32:32', 'place_order'),
(37, 1, 'image fixing narutoall', 'original', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 14:14:04', '2019-01-07 14:14:04', 'place_order'),
(38, 1, 'image manipulation', 'transparent', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-07 14:17:27', '2019-01-07 14:17:27', 'place_order'),
(39, 8, 'image manipulation test2', 'transparent original white none', 'PNG', '12 hours', 'a;slkdfj', '', 'swajan.talukdar@gmail.com', '', 1, NULL, '2019-01-12 21:14:22', '2019-01-12 21:14:22', 'free_trial'),
(40, 1, 'image manipulation', 'original', 'JPEG', 'Flexible', '', '', 'aumi.asif@gmail.com', '', 1, NULL, '2019-01-13 03:57:11', '2019-01-13 03:57:11', 'place_order'),
(41, 1, 'image manipulation test2', 'none', 'PSD', '24 hours', '', '', 'aumi.asif@gmail.com', '', 2, NULL, '2019-01-13 04:40:52', '2019-01-20 05:32:39', 'place_order'),
(42, 1, 'image manipulation', 'none', 'PSD', '48 hours', '', '', 'aumi.asif@gmail.com', '', 2, NULL, '2019-01-13 04:44:52', '2019-01-20 05:32:36', 'place_order'),
(43, 8, 'image manipulation', 'white', 'PNG', 'Flexible', '', '', 'swajan.talukdar@gmail.com', '', 1, NULL, '2019-01-14 16:48:01', '2019-01-14 16:48:01', 'free_trial'),
(44, 10, 'image manipulation', 'transparent', 'JPEG', '24 hours', 'ghffhhstey', '', 'photosourcingbd@gmail.com', '', 1, NULL, '2019-01-17 20:54:40', '2019-01-17 20:54:40', 'free_trial'),
(45, 7, 'image manipulation', 'transparent', 'JPEG', '12 hours', '900', '', 'jupiterrahman1@gmail.com', '', 1, NULL, '2019-02-07 21:37:34', '2019-02-07 21:37:34', 'free_trial'),
(46, 7, 'image manipulation', 'white', 'JPEG', 'Flexible', '', '', 'jupiterrahman1@gmail.com', '', 1, NULL, '2019-02-07 21:38:49', '2019-02-07 21:38:49', 'place_order');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'omi', 'aumi.asif@gmail.com', NULL, '123456', 'default.jpg', '$2y$10$Fsw/4EqURBrSTANIjGZo5u/2AXAVNIFeKu8VPQ00U/aD3GSboLkzK', 'o4QbJe9gIrsBm03fybHobq5npn6AVCS68PDWCwkPepgo08dbKJ0Rf4X7edZ8', '2018-12-09 19:47:38', '2018-12-09 19:47:38', 1),
(2, 'asif', 'omi@gmail.com', NULL, '123456', 'default.jpg', '$2y$10$ncWamZ0vEPf2pGBLgnHgquKlQcEuwGjspwplz1xYhq441S0JKMwKu', NULL, '2018-12-09 19:48:48', '2018-12-09 19:48:48', NULL),
(3, 'Atiar Talukdar', 'atiar@gmail.com', NULL, '123456', 'default.jpg', '$2y$10$0a4FtHbOMBX3PAHiQBECC.d2Rmk4KnVrAbKwJaeh8tv46ZpARjL6O', NULL, '2018-12-11 11:52:22', '2018-12-11 11:52:22', NULL),
(4, 'Atiar', 'swajan@gmail.com', NULL, '01917445888', 'default.jpg', '$2y$10$VVyzzZqPZqzaSNKxidflbuJlhM9acJno0A63rfWrjn44wB0kRGY2C', NULL, '2018-12-13 10:23:38', '2018-12-13 10:23:38', NULL),
(5, 'asif', 'aumi.asif364@gmail.com', NULL, '123456', 'default.jpg', '$2y$10$LNdBZzJ23ai9KgfGE.z2QO5icvcS/RRnH.gOBTZJgZrlowAEa9Yw2', 'g9ITLvxzkGzPIwLwAs3W6u5hqzGC31oNd7KdELDQHaFY5JXNUbhgrlUICLMI', '2018-12-23 00:08:17', '2018-12-23 00:08:17', NULL),
(6, 'James', 'haiurrahman58@gmail.com', NULL, '1718964553', 'default.jpg', '$2y$10$ChhB9r.Ryzj0LW8ofIns9OxvPqsTGv4zLXPjWCUGuGx6s15UCs.va', 'ul3GTXTAG9TZ24ShSEXf5p3Z5SIDnKOQVNUOT91dAfYGypAzH5bcGAJq1R64', '2018-12-23 06:43:25', '2018-12-23 06:43:25', 1),
(7, 'jupiter', 'jupiterrahman1@gmail.com', NULL, '01740805105', 'default.jpg', '$2y$10$ktpxVbpQjVX7F.ghdiTIo.3ysQDwWhGeEKRoE3abLZhqlnpYcNdvu', 'ftJcXQk9dGACa51e8YnjvNexVAzsaAmlMNTXxSnYBxyPG7EA1IyMepJzDZ0z', '2018-12-23 07:06:17', '2018-12-23 07:06:17', 1),
(8, 'Atiar Talukdar', 'swajan.talukdar@gmail.com', NULL, '1917445888', 'default.jpg', '$2y$10$NuSpkf0QznrrItXbDqlZdOhAjjaXGUGzhjcfi2q7i9/VACA.aytQO', NULL, '2018-12-23 07:43:49', '2018-12-23 07:43:49', 1),
(9, 'Jisha', 'jisha@gmail.com', NULL, '01917445888', 'default.jpg', '$2y$10$gi0RKKdyTFbxfFWgKz6TPuIXO9BDrNWUwHFZCvr1loil95KAk.FCa', NULL, '2018-12-29 01:18:46', '2018-12-29 01:18:46', NULL),
(10, 'james', 'photosourcingbd@gmail.com', NULL, '0718964553', 'default.jpg', '$2y$10$Yr1/ZRYlQGaud0GI9TGQt.MzpuIENWLGAo0I7JD4K7kmEW2gOomAu', NULL, '2019-01-17 20:51:09', '2019-01-17 20:51:09', NULL),
(11, 'james1', 'jamesgbd15@gmail.com', NULL, '0718964553', 'default.jpg', '$2y$10$ACU.r/XwbtRsnDp0RgMC9OvrJHm0TbctJHeqIuND5uu9QQeM6OxSa', 'ZXEWe0DVlGq98BwudHJJgWvQu42UyeI9Jfif1pAOxSZ0dCDuJSJVwjzBAwQC', '2019-02-07 21:25:21', '2019-02-07 21:25:21', NULL),
(12, 'Munna', 'munna.14568@GMAIL.COM', NULL, '01723101484', 'default.jpg', '$2y$10$Zn8KTPX9ZaGZdQyYZegrluOXBjTH5SStaAuCKdY8KcAQSr8q49DXy', NULL, '2019-02-27 20:08:41', '2019-02-27 20:08:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
