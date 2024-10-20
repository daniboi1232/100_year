-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2024 at 10:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_reunion`
--
DROP DATABASE IF EXISTS `school_reunion`;
CREATE DATABASE IF NOT EXISTS `school_reunion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `school_reunion`;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `activity_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_name`, `description`, `created_at`) VALUES
(2, 'Welcome Dinner', 'A welcoming dinner', '2024-08-24 11:42:39'),
(3, 'Church Service', 'A formal religious gathering for worship and prayer.', '2024-08-24 11:49:19'),
(4, 'Soccer Match', 'A physical team sport played on a field, involving kicking a ball to score goals.', '2024-08-24 11:49:19'),
(5, 'Guest Lecture', 'A formal presentation by an expert on a specific topic, often followed by a Q&A session.', '2024-08-24 11:49:19'),
(6, 'Charity Auction', 'A formal event where items are auctioned to raise funds for a charitable cause.', '2024-08-24 11:49:19'),
(7, 'Orchestra Performance', 'A non-physical cultural event featuring a live musical performance by an orchestra.', '2024-08-24 11:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `activity_sessions`
--

CREATE TABLE `activity_sessions` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `session_time` datetime NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_sessions`
--

INSERT INTO `activity_sessions` (`id`, `activity_id`, `session_time`, `location`) VALUES
(1, 1, '2024-07-10 18:00:00', 'School Gymnasium');

-- --------------------------------------------------------

--
-- Table structure for table `activity_signups`
--

CREATE TABLE `activity_signups` (
  `signup_id` int(11) NOT NULL,
  `attendees_id` int(11) NOT NULL,
  `activities` text NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_signups`
--

INSERT INTO `activity_signups` (`signup_id`, `attendees_id`, `activities`, `signup_date`) VALUES
(12, 22, 'Welcome Dinner, Church Service', '2024-08-26 01:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `grad_year` int(4) NOT NULL,
  `attending` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `grad_year`, `attending`, `created_at`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '1234567890', 2000, 1, '2024-06-24 21:31:27'),
(3, 'Jane', 'Smith', 'jane.smith1950@example.com', '2345678901', 1950, 1, '2024-06-25 22:38:04'),
(4, 'Alice', 'Johnson', 'alice.johnson1960@example.com', '3456789012', 1960, 1, '2024-06-25 22:38:04'),
(5, 'Bob', 'Brown', 'bob.brown1970@example.com', '456-789-0123', 1970, 1, '2024-06-25 22:38:04'),
(6, 'Charlie', 'Davis', 'charlie.davis1980@example.com', '567-890-1234', 1980, 1, '2024-06-25 22:38:04'),
(7, 'David', 'Wilson', 'david.wilson1990@example.com', '678-901-2345', 1990, 1, '2024-06-25 22:38:04'),
(8, 'Eve', 'Martinez', 'eve.martinez2000@example.com', '789-012-3456', 2000, 1, '2024-06-25 22:38:04'),
(9, 'Frank', 'Anderson', 'frank.anderson2010@example.com', '890-123-4567', 2010, 1, '2024-06-25 22:38:04'),
(10, 'Grace', 'Thomas', 'grace.thomas2020@example.com', '901-234-5678', 2020, 1, '2024-06-25 22:38:04'),
(11, 'Hank', 'Taylor', 'hank.taylor1945@example.com', '012-345-6789', 1945, 1, '2024-06-25 22:38:04'),
(12, 'Ivy', 'Moore', 'ivy.moore1955@example.com', '123-456-7891', 1955, 1, '2024-06-25 22:38:04'),
(13, 'Jack', 'Jackson', 'jack.jackson1965@example.com', '234-567-8902', 1965, 1, '2024-06-25 22:38:04'),
(14, 'Kathy', 'White', 'kathy.white1975@example.com', '345-678-9013', 1975, 1, '2024-06-25 22:38:04'),
(15, 'Leo', 'Harris', 'leo.harris1985@example.com', '456-789-0124', 1985, 1, '2024-06-25 22:38:04'),
(16, 'Mia', 'Clark', 'mia.clark1995@example.com', '567-890-1235', 1995, 1, '2024-06-25 22:38:04'),
(17, 'Nina', 'Lewis', 'nina.lewis2005@example.com', '678-901-2346', 2005, 1, '2024-06-25 22:38:04'),
(18, 'Oscar', 'Lee', 'oscar.lee2015@example.com', '789-012-3457', 2015, 1, '2024-06-25 22:38:04'),
(19, 'Paul', 'Walker', 'paul.walker2025@example.com', '890-123-4568', 2024, 1, '2024-06-25 22:38:04'),
(20, 'Quinn', 'Hall', 'quinn.hall1939@example.com', '901-234-5679', 1940, 1, '2024-06-25 22:38:04'),
(21, 'Rose', 'Young', 'rose.young2023@example.com', '012-345-6780', 2023, 1, '2024-06-25 22:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_quantity` int(11) NOT NULL DEFAULT 1,
  `paid` tinyint(4) NOT NULL DEFAULT 0,
  `added_on` datetime DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `item_name`, `item_price`, `item_quantity`, `paid`, `added_on`, `updated_on`) VALUES
(19, 8, 8, 'Mug', 9.99, 1, 0, '2024-08-26 10:39:24', '2024-08-26 10:39:24'),
(21, 9, 8, 'Mug', 9.99, 1, 0, '2024-08-26 12:59:53', '2024-08-26 12:59:53'),
(22, 6, 6, 'Hoodie', 29.99, 6, 0, '2024-08-27 09:15:37', '2024-08-29 14:08:13'),
(30, 6, 8, 'Mug', 9.99, 1, 0, '2024-08-29 19:13:47', '2024-08-29 19:13:47'),
(31, 6, 10, 'Poster', 14.99, 1, 0, '2024-08-29 19:13:50', '2024-08-29 19:13:50'),
(32, 6, 23, 'Beanie', 18.99, 1, 0, '2024-08-29 19:13:57', '2024-08-29 19:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `attendee_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_items`
--

CREATE TABLE `store_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_items`
--

INSERT INTO `store_items` (`id`, `item_name`, `description`, `price`, `created_at`, `image_url`) VALUES
(1, 'T-Shirt', 'Reunion T-Shirt', 20.00, '2024-06-24 21:31:27', ''),
(6, 'Hoodie', 'Comfortable and warm hoodie available in various sizes and colors.', 29.99, '2024-07-30 21:56:36', NULL),
(8, 'Mug', 'Ceramic mug perfect for coffee or tea, available in multiple designs.', 9.99, '2024-07-30 21:56:36', NULL),
(9, 'Pen', 'Smooth-writing ballpoint pen with a comfortable grip.', 1.99, '2024-07-30 21:56:36', NULL),
(10, 'Poster', 'High-quality poster with vibrant colors, perfect for decorating your space.', 14.99, '2024-07-30 21:56:36', NULL),
(11, 'Notebook', 'Spiral-bound notebook with lined pages.', 4.99, '2024-07-30 21:56:36', NULL),
(12, 'Water Bottle', 'Stainless steel water bottle with a leak-proof cap.', 12.99, '2024-07-30 21:56:36', NULL),
(13, 'Backpack', 'Durable and spacious backpack suitable for everyday use.', 49.99, '2024-07-30 21:56:36', NULL),
(23, 'Beanie', 'Warm beanie hat available in multiple colors.', 18.99, '2024-07-30 21:56:36', NULL),
(24, 'Lanyard', 'Durable lanyard with a detachable clip.', 4.99, '2024-07-30 21:56:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permiss` tinyint(10) NOT NULL DEFAULT 0,
  `token` varchar(32) NOT NULL,
  `activation_expiry` datetime NOT NULL,
  `email_confirmation` tinyint(1) NOT NULL DEFAULT 0,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `permiss`, `token`, `activation_expiry`, `email_confirmation`, `password_hash`, `created_at`, `updated_at`) VALUES
(5, 'dan', 'danielbell1928@gmail.com', 0, '52a7727a14d28d2a1600a590180973aa', '2024-08-13 23:46:12', 0, '$2y$10$me393IL0sI6qIO2Df5Ywb.YTjFQeGfaG71UWOObmJ7nBHcPB/q3aO', '2024-08-13 21:16:12', '2024-08-13 21:16:12'),
(6, 'sysop', 'sysop@sysop.com', 1, 'c1464d9d6b07b6027c227045eafeca6a', '2024-08-13 23:47:23', 0, '$2y$10$6GQrlffDGDoar0kjUpcbAeJGSCrcWdgkryTqSduliN4KHf29NCnoy', '2024-08-13 21:17:23', '2024-08-13 21:23:04'),
(7, 'caleb', 'calebwormald@cas.school.nz', 0, '64a78462e4f31a23a79a68f23cbf4e07', '2024-08-21 04:37:47', 0, '$2y$10$a/Vqs/57zojapxRJLpShX.jSxMXxS6pu7O/oEAnGBRn4YENQeL6bi', '2024-08-21 02:07:47', '2024-08-21 02:07:47'),
(8, 'Test 2', 'test2@test', 0, '7dd7f18c434f3eac677d73c505ccd4ee', '2024-08-26 01:07:41', 0, '$2y$10$vG8BcaDv7LJ4KNxvCpNzuO.uxMXKVT3EkQDVfmbLTW7QL6xMoB9dC', '2024-08-25 22:37:41', '2024-08-25 22:37:41'),
(9, 'marcus', 'marcusdemafeliz@cas.school.nz', 0, 'f6820e3974b82d1f4ddf341cc579cc2c', '2024-08-26 03:25:14', 0, '$2y$10$p1nQrLNEN96/pa3.e2kGj.jOkx31kJv4uo/BphPK2NLzPLtiYuyUK', '2024-08-26 00:55:14', '2024-08-26 00:55:14'),
(10, 'qwertyutrewq', 'asdfg@qwert', 0, '24e8d1d43b2c7ee5ba7bc4530df6cf3c', '2024-10-15 11:01:13', 0, '$2y$10$178T9cRaveSEsfMzsztn9.5g.6/sMdDnTUP1iUqMA5.xj7vdGQ1MK', '2024-10-15 08:31:13', '2024-10-15 08:31:13'),
(11, 'ddddd', 'ddddd@ddddd', 0, '2148094490557a24aa9bfb844eea5ee6', '2024-10-15 11:07:58', 0, '$2y$10$PNT8ZdiWmoMcjZoUId5bce7KK6oaRMDedA/wGexfr//hWYnbPKhm6', '2024-10-15 08:37:58', '2024-10-15 08:37:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_sessions`
--
ALTER TABLE `activity_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `activity_signups`
--
ALTER TABLE `activity_signups`
  ADD PRIMARY KEY (`signup_id`),
  ADD KEY `attendees_id` (`attendees_id`);

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendee_id` (`attendee_id`);

--
-- Indexes for table `store_items`
--
ALTER TABLE `store_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `activity_sessions`
--
ALTER TABLE `activity_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity_signups`
--
ALTER TABLE `activity_signups`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_items`
--
ALTER TABLE `store_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_sessions`
--
ALTER TABLE `activity_sessions`
  ADD CONSTRAINT `activity_sessions_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`);

--
-- Constraints for table `activity_signups`
--
ALTER TABLE `activity_signups`
  ADD CONSTRAINT `activity_signups_ibfk_1` FOREIGN KEY (`attendees_id`) REFERENCES `attendees` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `store_items` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`attendee_id`) REFERENCES `attendees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
