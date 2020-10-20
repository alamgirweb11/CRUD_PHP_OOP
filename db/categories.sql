-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 04:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT 1,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `menu` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `parent_id`, `featured`, `menu`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Root', 'root', 'This is the root category, don\'t delete this one', NULL, 0, 0, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(3, 'Rigoberto Jacobs', 'rigoberto-jacobs', 'I THINK,\' said Alice. \'You must be,\' said the King, and the cool fountains. CHAPTER VIII. The.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(4, 'Wellington Cassin Jr.', 'wellington-cassin-jr', 'As soon as she swam nearer to make personal remarks,\' Alice said nothing; she had someone to.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(5, 'Dr. Judy Turner DVM', 'dr-judy-turner-dvm', 'Which shall sing?\' \'Oh, YOU sing,\' said the Queen. \'Can you play croquet?\' The soldiers were.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(6, 'Lelah Stoltenberg', 'lelah-stoltenberg', 'HAVE tasted eggs, certainly,\' said Alice, who was sitting on a little now and then, \'we went to.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(7, 'Mrs. Jennie Franecki Sr.', 'mrs-jennie-franecki-sr', 'Her first idea was that it would all come wrong, and she heard a little bottle on it, and on both.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(8, 'Sofia Friesen I', 'sofia-friesen-i', 'Alice! Come here directly, and get ready for your walk!\" \"Coming in a very hopeful tone though).', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(10, 'Octavia Kozey DVM', 'octavia-kozey-dvm', 'Dormouse!\' And they pinched it on both sides at once. \'Give your evidence,\' the King very.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(11, 'Mr. Jerel McLaughlin', 'mr-jerel-mclaughlin', 'VERY long claws and a bright idea came into her eyes--and still as she said to herself; \'I should.', 1, 0, 1, NULL, '2019-09-25 22:19:57', '2019-09-25 22:19:57'),
(12, 'Panjabi', 'panjabi', 'Eid Collection', 1, 0, 1, NULL, NULL, NULL),
(13, 'Rashed', 'rashed', 'He is a PHP Developer', 1, 0, 1, NULL, NULL, NULL),
(15, 'Papon', 'Dhaka', 'He is a student.', 1, 0, 1, NULL, NULL, NULL),
(19, 'Nabila', 'nabila@mail.com', 'She is a model.', 1, 0, 1, NULL, NULL, NULL),
(21, 'Azad Hosen', 'azad@gmail.com', 'he is a business man.', 1, 0, 1, NULL, NULL, NULL),
(22, 'Kalam', 'kalam@mail.com', 'He is a farmer.', 1, 0, 1, NULL, NULL, NULL),
(23, 'Fashion', 'jens-ladies', 'Fashion today is a global industry, and most major countries have a fashion industry. Seven countries have established an international reputation in fashion.', 1, 0, 1, NULL, NULL, NULL),
(24, 'Rabin ', 'rabin-rabin', 'he is a businessman.', 1, 0, 1, NULL, NULL, NULL),
(87, 'Joban', 'joban-joban', 'Student', 1, 0, 1, NULL, NULL, NULL),
(88, 'Joya', 'joya-joya', 'She is a beautician.', 1, 0, 1, NULL, NULL, NULL),
(96, 'Farid', 'farid-farhan', 'Lorem Ipsum is simply a dummy text of the printing and typesetting industry. ', 1, 0, 1, NULL, NULL, NULL),
(99, 'Rasel', 'rasel-rasel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry dfasdfsadf', 1, 0, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
