-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 05:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahat', 'rahat@gmail.com', '$2y$10$0gzCc6N2oUvXc9Z6lMollOpHLyyLnRYd/TQHs21Zjr1PQa7W7nqc6', 'BX2ydyngxljTpsrjj9lHlvULtG3tNeKQkUlDzPGV4AyBqYPLaYnckmV5MAsM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_des`, `activation_status`, `created_at`, `updated_at`) VALUES
(1, 'La Reve', 'International Brand', 1, '2018-05-24 14:26:43', '2018-05-24 14:26:43'),
(3, 'Kay Kraft', 'Bangladeshi Fashion Brand', 1, '2018-05-24 14:27:34', '2018-05-24 14:27:34'),
(4, 'Sailor', 'International Brand', 1, '2018-05-27 02:46:24', '2018-07-28 01:59:16'),
(5, 'Montana', 'International Brand', 1, '2018-07-31 10:08:41', '2018-07-31 10:08:41'),
(6, 'Diana', 'International Brand', 1, '2018-07-31 10:08:57', '2018-07-31 10:08:57'),
(7, 'Queen', 'International Brand', 1, '2018-07-31 10:09:54', '2018-07-31 10:09:54'),
(8, 'Rich Man', 'International Brand', 1, '2018-07-31 10:10:11', '2018-07-31 10:10:11'),
(9, 'Jesse', 'International Brand', 1, '2018-07-31 10:10:48', '2018-07-31 10:10:48'),
(10, 'Fastrack', 'International Watch Brand', 1, '2018-08-13 07:21:17', '2018-08-13 07:21:17'),
(11, 'Phillips', 'International Electronics Brand', 1, '2018-09-04 13:34:04', '2018-09-04 13:34:04'),
(12, 'Ray-Ban', 'Sunglass Brand', 1, '2018-09-04 14:13:08', '2018-09-04 14:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_des`, `activation_status`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'Men\'s Fashion Item', 1, '2018-05-24 11:53:23', '2018-05-24 11:53:23'),
(2, 'Women', 'Women\'s Item', 1, '2018-05-24 11:53:40', '2018-05-24 11:53:40'),
(3, 'Kid\'s', 'Kid\'s Item', 1, '2018-05-27 02:46:47', '2018-05-27 02:46:47'),
(4, 'Electronics', 'Electronics', 1, '2018-05-27 02:47:20', '2018-05-27 02:47:20'),
(5, 'Grocery', 'Grocery House Item', 1, '2018-05-27 02:48:00', '2018-05-27 02:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `item_name`, `item_des`, `activation_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tshirt', 'cotton t shirt', 1, '2018-05-24 11:53:23', '2018-05-24 11:53:23'),
(5, 1, 'Watch', 'Watch', 1, '2018-05-24 11:53:23', '2018-05-24 11:53:23'),
(9, 1, 'Shirt', 'Cotton Shirt', 1, '2018-07-31 09:51:48', '2018-07-31 09:51:48'),
(19, 1, 'Backpack', 'Backpack', 1, '2018-09-04 13:39:18', '2018-09-04 13:39:18'),
(20, 1, 'Sunglass', 'Sunglass', 1, '2018-09-04 14:12:41', '2018-09-04 14:12:41');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2018_05_18_104014_create_categories_table', 1),
(19, '2018_05_21_142242_create_brands_table', 1),
(20, '2018_05_22_093735_create_items_table', 1),
(21, '2018_05_24_193643_create_products_table', 2),
(22, '2018_08_14_092848_create_admins_table', 3),
(23, '2018_08_14_143637_create_admins_table', 4),
(24, '2018_08_15_081323_create_carts_table', 5),
(25, '2018_08_17_213123_create_test_table', 6),
(26, '2018_08_17_213731_create_users_table', 7),
(27, '2018_08_20_064644_create_orders_table', 8),
(28, '2018_08_20_065330_create_order_items_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `shipping_address`, `created_at`, `updated_at`) VALUES
(11, 1, '680.00', '294,North Shahjahanpur, Dhaka', '2018-08-27 22:55:25', '2018-08-27 22:55:25'),
(12, 2, '1,260.00', 'Shewrapara, Mirpur', '2018-08-27 23:09:58', '2018-08-27 23:09:58'),
(13, 1, '807.00', 'Shahjahanpur', '2018-08-27 23:19:59', '2018-08-27 23:19:59'),
(14, 1, '807.00', 'Shahjahanpur', '2018-08-27 23:20:25', '2018-08-27 23:20:25'),
(15, 1, '1,260.00', 'Shahjahanpur, Dhaka', '2018-08-27 23:30:16', '2018-08-27 23:30:16'),
(16, 1, '1,260.00', 'Shahjahanpur, Dhaka', '2018-08-27 23:32:59', '2018-08-27 23:32:59'),
(17, 1, '450.00', 'Shahjahanpur', '2018-08-27 23:37:55', '2018-08-27 23:37:55'),
(18, 1, '450.00', 'Shahjahanpur', '2018-08-27 23:41:14', '2018-08-27 23:41:14'),
(19, 1, '450.00', 'Shahjahanpur', '2018-08-27 23:43:12', '2018-08-27 23:43:12'),
(20, 1, '450.00', 'Shahjahanpur', '2018-08-27 23:46:31', '2018-08-27 23:46:31'),
(21, 1, '450.00', 'Shahjahanpur', '2018-08-27 23:48:04', '2018-08-27 23:48:04'),
(22, 2, '2,820.00', 'Mirpur', '2018-08-27 23:51:11', '2018-08-27 23:51:11'),
(23, 1, '5,400.00', 'Dhaka', '2018-08-28 00:13:07', '2018-08-28 00:13:07'),
(24, 2, '340.00', 'Dhaka', '2018-08-28 00:36:42', '2018-08-28 00:36:42'),
(25, 2, '340.00', 'dhK', '2018-08-28 00:38:05', '2018-08-28 00:38:05'),
(26, 2, '340.00', 'dhk', '2018-08-28 00:40:41', '2018-08-28 00:40:41'),
(27, 2, '680.00', 'dhk', '2018-08-28 00:42:06', '2018-08-28 00:42:06'),
(28, 2, '680.00', 'dhk', '2018-08-28 00:42:50', '2018-08-28 00:42:50'),
(29, 1, '450.00', 'dhk', '2018-08-28 00:44:27', '2018-08-28 00:44:27'),
(30, 1, '1,350.00', 'dhk', '2018-08-28 00:46:31', '2018-08-28 00:46:31'),
(31, 2, '340.00', 'dhk', '2018-08-28 00:48:19', '2018-08-28 00:48:19'),
(32, 2, '340.00', 'dhk', '2018-08-28 00:49:06', '2018-08-28 00:49:06'),
(33, 2, '340.00', 'dhk', '2018-08-28 00:49:43', '2018-08-28 00:49:43'),
(34, 2, '340.00', 'dhk', '2018-08-28 00:51:10', '2018-08-28 00:51:10'),
(35, 2, '450.00', 'Mirpur', '2018-08-28 12:36:15', '2018-08-28 12:36:15'),
(36, 2, '450.00', 'Mirpur', '2018-08-28 13:13:16', '2018-08-28 13:13:16'),
(37, 2, '4,890.00', 'Mirpur', '2018-08-28 13:24:37', '2018-08-28 13:24:37'),
(38, 2, '4,890.00', 'Mirpur', '2018-08-28 13:26:18', '2018-08-28 13:26:18'),
(39, 2, '4,890.00', 'Mirpur', '2018-08-28 13:26:54', '2018-08-28 13:26:54'),
(40, 2, '4,890.00', 'Mirpur', '2018-08-28 13:29:07', '2018-08-28 13:29:07'),
(41, 2, '4,890.00', 'Mirpur', '2018-08-28 13:29:24', '2018-08-28 13:29:24'),
(42, 2, '4,890.00', 'Mirpur', '2018-08-28 13:29:57', '2018-08-28 13:29:57'),
(43, 1, '347.00', 'Dhaka', '2018-08-28 13:33:39', '2018-08-28 13:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(20) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `qty`, `product_size`, `product_price`, `created_at`, `updated_at`) VALUES
(10, 23, 8, 'Sky Blue Full Sleeve Shirt', 1, 'M', '1300', '2018-08-28 00:13:07', '2018-08-28 00:13:07'),
(11, 23, 9, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 00:13:07', '2018-08-28 00:13:07'),
(12, 23, 7, 'White Full Sleeve Shirt', 1, 'M', '1300', '2018-08-28 00:13:07', '2018-08-28 00:13:07'),
(13, 23, 6, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 00:13:07', '2018-08-28 00:13:07'),
(14, 24, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:36:42', '2018-08-28 00:36:42'),
(15, 25, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:38:05', '2018-08-28 00:38:05'),
(16, 26, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:40:41', '2018-08-28 00:40:41'),
(17, 27, 26, 'Gray Plain T shirt', 2, 'M', '680', '2018-08-28 00:42:06', '2018-08-28 00:42:06'),
(18, 28, 26, 'Gray Plain T shirt', 2, 'M', '680', '2018-08-28 00:42:50', '2018-08-28 00:42:50'),
(19, 29, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 00:44:27', '2018-08-28 00:44:27'),
(20, 30, 25, 'Red Printed T Shirt', 2, 'M', '900', '2018-08-28 00:46:31', '2018-08-28 00:46:31'),
(21, 30, 24, 'Blue Printed T shirt', 1, 'M', '450', '2018-08-28 00:46:31', '2018-08-28 00:46:31'),
(22, 31, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:48:19', '2018-08-28 00:48:19'),
(23, 32, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:49:07', '2018-08-28 00:49:07'),
(24, 33, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:49:44', '2018-08-28 00:49:44'),
(25, 34, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 00:51:10', '2018-08-28 00:51:10'),
(26, 36, 24, 'Blue Printed T shirt', 1, 'M', '450', '2018-08-28 13:13:16', '2018-08-28 13:13:16'),
(27, 37, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 13:24:37', '2018-08-28 13:24:37'),
(28, 37, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 13:24:37', '2018-08-28 13:24:37'),
(29, 37, 16, 'Blue Striped T shirt', 1, 'M', '400', '2018-08-28 13:24:37', '2018-08-28 13:24:37'),
(30, 38, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 13:26:18', '2018-08-28 13:26:18'),
(31, 38, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 13:26:18', '2018-08-28 13:26:18'),
(32, 38, 16, 'Blue Striped T shirt', 1, 'M', '400', '2018-08-28 13:26:18', '2018-08-28 13:26:18'),
(33, 38, 19, 'Fastrack Original Watch 434', 1, NULL, '2300', '2018-08-28 13:26:19', '2018-08-28 13:26:19'),
(34, 38, 6, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 13:26:19', '2018-08-28 13:26:19'),
(35, 39, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 13:26:54', '2018-08-28 13:26:54'),
(36, 39, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 13:26:54', '2018-08-28 13:26:54'),
(37, 39, 16, 'Blue Striped T shirt', 1, 'M', '400', '2018-08-28 13:26:54', '2018-08-28 13:26:54'),
(38, 39, 19, 'Fastrack Original Watch 434', 1, NULL, '2300', '2018-08-28 13:26:55', '2018-08-28 13:26:55'),
(39, 39, 6, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 13:26:55', '2018-08-28 13:26:55'),
(40, 40, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 13:29:07', '2018-08-28 13:29:07'),
(41, 40, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 13:29:07', '2018-08-28 13:29:07'),
(42, 40, 16, 'Blue Striped T shirt', 1, 'M', '400', '2018-08-28 13:29:07', '2018-08-28 13:29:07'),
(43, 40, 19, 'Fastrack Original Watch 434', 1, NULL, '2300', '2018-08-28 13:29:07', '2018-08-28 13:29:07'),
(44, 40, 6, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 13:29:07', '2018-08-28 13:29:07'),
(45, 41, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 13:29:24', '2018-08-28 13:29:24'),
(46, 41, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 13:29:24', '2018-08-28 13:29:24'),
(47, 41, 16, 'Blue Striped T shirt', 1, 'M', '400', '2018-08-28 13:29:25', '2018-08-28 13:29:25'),
(48, 41, 19, 'Fastrack Original Watch 434', 1, NULL, '2300', '2018-08-28 13:29:25', '2018-08-28 13:29:25'),
(49, 41, 6, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 13:29:25', '2018-08-28 13:29:25'),
(50, 42, 26, 'Gray Plain T shirt', 1, 'M', '340', '2018-08-28 13:29:57', '2018-08-28 13:29:57'),
(51, 42, 25, 'Red Printed T Shirt', 1, 'M', '450', '2018-08-28 13:29:57', '2018-08-28 13:29:57'),
(52, 42, 16, 'Blue Striped T shirt', 1, 'M', '400', '2018-08-28 13:29:58', '2018-08-28 13:29:58'),
(53, 42, 19, 'Fastrack Original Watch 434', 1, NULL, '2300', '2018-08-28 13:29:58', '2018-08-28 13:29:58'),
(54, 42, 6, 'Dark Blue Full Sleeve Shirt', 1, 'M', '1400', '2018-08-28 13:29:58', '2018-08-28 13:29:58'),
(55, 43, 28, 'Plain Polo Shirt', 1, 'M', '347', '2018-08-28 13:33:39', '2018-08-28 13:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nur@gmail.com', '$2y$10$dFB.xlSMlED9jVycqNkVM.ZrYVBspB996rhTtTpdWkmgV8AZQ1fG.', '2018-08-30 02:03:45'),
('rahat@gmail.com', '$2y$10$zLOloSiXswFkNrTBvZZvPeYtz8hWpPE8OYwPlXb3Pjba9iQ176bSW', '2018-08-30 02:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img_2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img_3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size3` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size4` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `item_id`, `brand_id`, `product_name`, `product_des`, `product_price`, `product_img`, `product_img_2`, `product_img_3`, `product_size`, `product_size2`, `product_size3`, `product_size4`, `activation_status`, `created_at`, `updated_at`) VALUES
(5, 1, 9, 1, 'Striped Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1300, 'image/7dn6isyHTi.jpeg', 'image/8C9YaMV9.jpeg', 'image/7rXCj.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-09 13:39:32', '2018-08-09 13:39:32'),
(6, 1, 9, 1, 'Dark Blue Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1400, 'image/h6hFGNJWS3.jpeg', 'image/eqi6AFTt.jpeg', 'image/sQWPs.jpeg', 'M', 'L', 'XL', 'XXL', 1, '2018-08-09 13:40:40', '2018-08-09 13:40:40'),
(7, 1, 9, 8, 'White Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1500, 'image/i56xBXEq2r.jpeg', 'image/fu2GQfTT.jpeg', 'image/kQ7pz.jpeg', 'M', 'L', NULL, NULL, 1, '2018-08-09 13:41:59', '2018-09-05 01:54:33'),
(8, 1, 9, 8, 'Sky Blue Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1300, 'image/6HO4bMSVVA.jpeg', 'image/uXomdqSa.jpeg', 'image/0w7Mr.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-09 13:52:22', '2018-08-09 13:52:22'),
(9, 1, 9, 8, 'Dark Blue Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1400, 'image/hPSFsbQSI6.jpeg', 'image/a3JsuF2u.jpeg', 'image/IHAkb.jpeg', 'M', 'L', NULL, NULL, 1, '2018-08-09 13:53:38', '2018-08-09 13:53:38'),
(10, 1, 9, 4, 'White Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1200, 'image/WX4Jz1fU4S.jpeg', 'image/iTu9BuW1.jpeg', 'image/i81gf.jpeg', 'M', 'L', NULL, NULL, 1, '2018-08-09 13:55:13', '2018-08-09 13:55:13'),
(11, 1, 9, 8, 'Red Striped Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1500, 'image/jMDvxMZv8L.jpeg', 'image/b4ftPESG.jpeg', 'image/YL9D7.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-09 13:56:35', '2018-09-05 01:55:06'),
(12, 1, 1, 4, 'Sky Blue Half Sleeve T Shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 370, 'image/bQzoPOZlZc.jpeg', 'image/5rRjfhKB.jpeg', 'image/lZj0J.jpeg', 'M', 'L', NULL, NULL, 1, '2018-08-09 14:36:08', '2018-08-09 14:36:08'),
(13, 1, 1, 4, 'Orange Half Sleeve T Shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 350, 'image/57Oys5t1cs.jpeg', 'image/qFPz4I8Z.jpeg', 'image/PAn1F.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-09 14:37:39', '2018-08-09 14:37:39'),
(14, 1, 1, 4, 'Blue Half Sleeve T Shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 400, 'image/C2gH8ydgyl.jpeg', 'image/FCGFOk7I.jpeg', 'image/BBqlV.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-09 14:40:18', '2018-08-09 14:40:18'),
(15, 1, 1, 4, 'Printed T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 360, 'image/eOSEVc9puQ.jpeg', 'image/KpFUn42O.jpeg', 'image/9wF4u.jpeg', 'M', 'L', NULL, NULL, 1, '2018-08-09 14:41:52', '2018-08-09 14:41:52'),
(16, 1, 1, 4, 'Blue Striped T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 400, 'image/6JSx93bqLF.jpeg', 'image/EIsyRTf9.jpeg', 'image/Ck71e.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-09 14:44:13', '2018-08-09 14:44:13'),
(19, 1, 5, 10, 'Fastrack Original Watch 434', 'Display Type: Analog,Strap: As shown', 2300, 'image/WLg101hXXI.jpeg', 'image/8rIr9MT9.jpeg', 'image/hJ9Xl.jpeg', NULL, NULL, NULL, NULL, 1, '2018-08-13 07:22:16', '2018-08-13 07:22:16'),
(20, 1, 5, 10, 'Fastrack Original Watch 434dd', 'Display Type: Analog,Strap: As shown', 2400, 'image/n3wpVyc698.jpeg', 'image/H8sWHyIg.jpeg', 'image/7H7gt.jpeg', NULL, NULL, NULL, NULL, 1, '2018-08-13 07:24:06', '2018-08-13 07:24:06'),
(22, 1, 1, 4, 'Printed T shirt g55', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 460, 'image/0dGHfQSp2N.jpeg', 'image/njZr95zi.jpeg', 'image/OdDlY.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-13 08:09:49', '2018-08-13 08:09:49'),
(23, 1, 1, 8, 'Gray Printed T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 450, 'image/Da52dPmTMi.jpeg', 'image/TDQx9gwU.jpeg', 'image/NV5n5.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-13 08:11:36', '2018-08-13 08:11:36'),
(24, 1, 1, 4, 'Blue Printed T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 450, 'image/TIpHYp0HMj.jpeg', 'image/mBXB4FTj.jpeg', 'image/IZLqj.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-13 08:12:57', '2018-08-13 08:12:57'),
(25, 1, 1, 8, 'Red Printed T Shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 450, 'image/f31R6uF4ei.jpeg', 'image/YXv1VhpK.jpeg', 'image/RyMKu.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-13 08:16:59', '2018-08-13 08:16:59'),
(26, 1, 1, 4, 'Gray Plain T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 340, 'image/Ams2lmZGn9.jpeg', 'image/FoEcLVzb.jpeg', 'image/tglb9.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-13 08:18:39', '2018-08-13 08:18:39'),
(27, 1, 1, 8, 'Plain T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 360, 'image/saHQJvLQOe.jpeg', 'image/Qbt7ecJT.jpeg', 'image/gfrJU.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-08-13 08:20:56', '2018-08-13 08:20:56'),
(28, 1, 1, 8, 'Plain Polo Shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Collar', 347, 'image/HUj0HS0fCa.jpeg', 'image/JMA4jQvs.jpeg', 'image/01NgN.jpeg', 'M', 'L', NULL, NULL, 1, '2018-08-13 08:22:40', '2018-08-13 08:22:40'),
(31, 2, 9, 4, 'Women\'s Check shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 2000, 'image/M50jpBbpX9.jpeg', 'image/VQLqJ2YF.jpeg', 'image/4DXfn.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 12:55:20', '2018-09-04 12:55:20'),
(32, 2, 9, 4, 'Women\'s Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 1400, 'image/JdHzlbzueb.jpeg', 'image/nNLJ7fqZ.jpeg', 'image/VuTIw.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:00:54', '2018-09-04 13:00:54'),
(33, 2, 9, 5, 'Women\'s Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 2000, 'image/KjBEqqYZTj.jpeg', 'image/OkYaBtVu.jpeg', 'image/82dum.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:05:24', '2018-09-04 13:05:24'),
(34, 2, 9, 5, 'Women\'s Full Sleeve Shirt (red)', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 2000, 'image/AVu1cMDQL3.jpeg', 'image/QPZko0SN.jpeg', 'image/6BaWG.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:06:32', '2018-09-04 13:06:32'),
(35, 2, 9, 5, 'White Full Sleeve Shirt', 'Fabric: Cotton,Slim Fit, Full Sleeve,Collar Type: Spread,Pattern: Checkered,Set of 1', 2000, 'image/cQIausNVxf.jpeg', 'image/Mqh4DcNm.jpeg', 'image/PIcI7.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:07:47', '2018-09-04 13:07:47'),
(36, 2, 1, 5, 'Pink denize T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 450, 'image/98lRvKTSlU.jpeg', 'image/smOSe3xx.jpeg', 'image/vuIyg.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:18:42', '2018-09-04 13:18:42'),
(37, 2, 1, 5, 'Pink printed T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 350, 'image/UCRm0WPWvA.jpeg', 'image/3LJ87djj.jpeg', 'image/t1INQ.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:19:45', '2018-09-04 13:19:45'),
(38, 2, 1, 5, 'White printed T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western Wear,Brand Fit:Slim,Fabric:Cotton,Neck:Round Neck', 370, 'image/qHx26bDIXC.jpeg', 'image/fvClclRB.jpeg', 'image/ylIrI.jpeg', '400', 'M', 'L', 'XL', 1, '2018-09-04 13:21:19', '2018-09-04 13:21:19'),
(39, 2, 1, 5, 'Black printed T shirt', 'Pattern:Printed,Sleeve:Half Sleeve,Suitable For:Western', 390, 'image/42xUZpi6yH.jpeg', 'image/VIQip4Xj.jpeg', 'image/2laYG.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:24:03', '2018-09-04 13:24:03'),
(40, 1, 19, 4, 'Backpack 5155', 'Backpack', 2000, 'image/5I8xB2AGev.jpeg', 'image/Nkm8s5ov.jpeg', 'image/WOXNT.jpeg', 'M', 'L', 'XL', NULL, 1, '2018-09-04 13:40:57', '2018-09-04 13:40:57'),
(41, 1, 19, 8, 'Backpack 51twy', 'Backpack', 2500, 'image/L83DUKhy2G.jpeg', 'image/4n75GVo4.jpeg', 'image/If5is.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 13:43:44', '2018-09-05 02:15:31'),
(42, 1, 19, 8, 'Backpack 5155tt4', 'Backpack', 3900, 'image/sXnM4uVhZH.jpeg', 'image/0a41JRh4.jpeg', 'image/uTYvn.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 13:45:33', '2018-09-04 13:45:33'),
(43, 1, 19, 9, 'Leather Backpack 2552gx', 'Backpack', 4000, 'image/EUvdGz2zWb.jpeg', 'image/2r235CFs.jpeg', 'image/4BYGB.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 13:47:14', '2018-09-04 13:47:14'),
(44, 1, 19, 9, 'Leather Backpack 255wee', 'Backpack', 3400, 'image/M069Z1OCns.jpeg', 'image/U3DYLEqH.jpeg', 'image/1KdxP.jpeg', '3400', NULL, NULL, NULL, 1, '2018-09-04 13:49:32', '2018-09-04 13:49:32'),
(45, 1, 19, 9, 'Leather Backpack 255wdd', 'Backpack', 4000, 'image/fiANWWuyTg.jpeg', 'image/WHFXDo6H.jpeg', 'image/BOcyl.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 13:51:05', '2018-09-04 13:51:05'),
(46, 1, 19, 9, 'Leather Backpack 255ds', 'Backpack', 4000, 'image/BuQuKrpKOi.jpeg', 'image/RNREh3O4.jpeg', 'image/PNaKu.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 13:52:24', '2018-09-04 13:52:24'),
(47, 1, 19, 8, 'American Tourister Pop Plus Backpack', 'Backpack', 2500, 'image/lb1NOnIc2t.jpeg', 'image/kZ4EiNXP.jpeg', 'image/avPdj.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 13:56:02', '2018-09-05 02:15:55'),
(48, 1, 20, 12, 'Ray-Ban Aviator Sunglasses(Green)', 'Ray-Ban Aviator Sunglasses', 6700, 'image/kbvAPucyeJ.jpeg', 'image/ASDpESFz.jpeg', 'image/JkIkn.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 14:14:50', '2018-09-05 02:20:25'),
(49, 1, 1, 1, 'Ray-Ban Aviator Sunglasses 42ed', 'Ray-Ban Aviator Sunglasses 42ed', 7000, 'image/l3hsiNcGOl.jpeg', 'image/5KWaSNH5.jpeg', 'image/3XJ60.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 14:17:05', '2018-09-05 02:06:04'),
(50, 1, 20, 12, 'Ray-Ban Aviator Sunglasses 42es', 'Ray-Ban Aviator Sunglasses 42es', 7000, 'image/WrQP1sk0zW.jpeg', 'image/DxSBsR1U.jpeg', 'image/NuETN.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 14:18:17', '2018-09-04 14:18:17'),
(51, 1, 20, 12, 'Ray-Ban Aviator Sunglasses 42eh', 'Ray-Ban Aviator Sunglasses 42eh', 7800, 'image/gof7gPnTAq.jpeg', 'image/EQnmFIhk.jpeg', 'image/dJqi9.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 14:19:12', '2018-09-04 14:19:12'),
(52, 1, 20, 12, 'Ray-Ban Aviator Sunglasses 4288u', 'Ray-Ban Aviator Sunglasses 4288u', 7995, 'image/4KKAFTs65j.jpeg', 'image/TaoRe6mn.jpeg', 'image/iNkIq.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 14:22:02', '2018-09-04 14:22:02'),
(53, 1, 20, 12, 'Ray-Ban Aviator Sunglasses 42800', 'Ray-Ban Aviator Sunglasses 42800', 8000, 'image/M6ykPR43RF.jpeg', 'image/VnBRSWl5.jpeg', 'image/idmPA.jpeg', NULL, NULL, NULL, NULL, 1, '2018-09-04 14:23:08', '2018-09-04 14:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahat', 'rahat@gmail.com', '$2y$10$EprAUFD.a3IhOh953UB/AubO5g93SCGhMSdo4kiBqK4AaHnf8Q4NW', 'LfniSziQs6qThrCEAIXcdwT8lcfw3RsujYLsOAjLuuDcK6bhAFiuzPjHKn1S', '2018-08-19 23:08:19', '2018-08-19 23:08:19'),
(2, 'Nur', 'nur@gmail.com', '$2y$10$mSb7pqYANHlDWZT79GJVWOkSswxldw6YalvDMcRaZzfx679y./KBK', 'XOLaAxJzOuQrxTPrctiN0BXzMITenwDIE3olzMUO7RMilpDLyurKUier4pl5', '2018-08-19 23:14:01', '2018-08-30 00:48:00'),
(9, 'ashad', 'ashad@gmail.com', '$2y$10$Su3C5ylTJs55bblIHXgNEO7S6gB8oYCxeBv2UKqub.8EDw6OXFmYS', 'tHQRzbH3jAu9oMaX1sFwsjcEWzrsc5CUqhk0SP1SjXKerYrxtM7cAGIopag0', '2018-08-19 23:45:08', '2018-08-19 23:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
