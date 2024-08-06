-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2024 at 04:03 AM
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
(1, 'Welcome Dinner', 'A formal dinner to welcome everyone', '2024-06-24 21:31:27');

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
  `id` int(11) NOT NULL,
  `attendee_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `signup_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890', 2000, 1, '2024-06-24 21:31:27'),
(2, 'John', 'Doe', 'john.doe1940@example.com', '123-456-7890', 1940, 1, '2024-06-25 22:38:04'),
(3, 'Jane', 'Smith', 'jane.smith1950@example.com', '234-567-8901', 1950, 1, '2024-06-25 22:38:04'),
(4, 'Alice', 'Johnson', 'alice.johnson1960@example.com', '345-678-9012', 1960, 1, '2024-06-25 22:38:04'),
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
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `store_item_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
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
  `stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_items`
--

INSERT INTO `store_items` (`id`, `item_name`, `description`, `price`, `stock`, `created_at`, `image_url`) VALUES
(1, 'T-Shirt', 'Reunion T-Shirt', 20.00, 50, '2024-06-24 21:31:27', 'images/casold.png'),
(6, 'Hoodie', 'Comfortable and warm hoodie available in various sizes and colors.', 29.99, 50, '2024-07-30 21:56:36', NULL),
(7, 'T-Shirt', '100% cotton t-shirt with a variety of prints and designs.', 19.99, 100, '2024-07-30 21:56:36', NULL),
(8, 'Mug', 'Ceramic mug perfect for coffee or tea, available in multiple designs.', 9.99, 200, '2024-07-30 21:56:36', NULL),
(9, 'Pen', 'Smooth-writing ballpoint pen with a comfortable grip.', 1.99, 500, '2024-07-30 21:56:36', NULL),
(10, 'Poster', 'High-quality poster with vibrant colors, perfect for decorating your space.', 14.99, 150, '2024-07-30 21:56:36', NULL),
(11, 'Notebook', 'Spiral-bound notebook with lined pages.', 4.99, 300, '2024-07-30 21:56:36', NULL),
(12, 'Water Bottle', 'Stainless steel water bottle with a leak-proof cap.', 12.99, 180, '2024-07-30 21:56:36', NULL),
(13, 'Backpack', 'Durable and spacious backpack suitable for everyday use.', 49.99, 75, '2024-07-30 21:56:36', NULL),
(14, 'Sticker Pack', 'Set of assorted stickers for decoration.', 5.99, 400, '2024-07-30 21:56:36', NULL),
(15, 'Keychain', 'Stylish keychain with a durable ring.', 3.99, 250, '2024-07-30 21:56:36', NULL),
(16, 'Cap', 'Adjustable cap with embroidered logo.', 24.99, 80, '2024-07-30 21:56:36', NULL),
(17, 'Sweatpants', 'Comfortable sweatpants available in various sizes.', 34.99, 60, '2024-07-30 21:56:36', NULL),
(18, 'Mouse Pad', 'Smooth surface mouse pad with non-slip base.', 7.99, 150, '2024-07-30 21:56:36', NULL),
(19, 'Phone Case', 'Protective phone case available for various models.', 15.99, 120, '2024-07-30 21:56:36', NULL),
(20, 'Sunglasses', 'Stylish sunglasses with UV protection.', 19.99, 110, '2024-07-30 21:56:36', NULL),
(21, 'Tote Bag', 'Reusable tote bag made from eco-friendly materials.', 11.99, 140, '2024-07-30 21:56:36', NULL),
(22, 'USB Drive', '16GB USB drive with a keyring attachment.', 8.99, 90, '2024-07-30 21:56:36', NULL),
(23, 'Beanie', 'Warm beanie hat available in multiple colors.', 18.99, 100, '2024-07-30 21:56:36', NULL),
(24, 'Lanyard', 'Durable lanyard with a detachable clip.', 4.99, 200, '2024-07-30 21:56:36', NULL),
(25, 'Notebook', 'Hardcover notebook with blank pages.', 6.99, 300, '2024-07-30 21:56:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sysop', '$2y$10$1mncg/SzejItGLzWYjjaUO/8nZMy9s56.YE60eXL7tM26SMmdJr9G', 'sysop@sysop.com', '2024-06-26 22:57:19', '2024-06-26 22:57:19'),
(3, 'adsf', '$2y$10$QnrUo.WnP2oOQTu2l.bsJ.fCPLrdYogcYnxf.k2DpzR32FNQpsUM6', 'asdf@asdf', '2024-07-01 21:15:13', '2024-07-01 21:15:13'),
(33, '12345', '$2y$10$G2k9J3o02V8NqCv12r37aO1cZ.Wz2a9zn3FTlrBTEDMz9hePG5uw.', '1234@5678', '2024-07-01 21:16:18', '2024-07-01 21:16:18'),
(35, 'danib', '$2y$10$6RS46SGvd3efaRc3EB2t2.HjWxg6pkfjMtS/iJuXC6UdcswND7vaO', 'danib@danib', '2024-07-01 21:18:07', '2024-07-01 21:18:07'),
(37, 'caleb', '$2y$10$SkFjv0.YuTr.hT4Vm4cf7eA5gqR6Ow.cjGxvbLDkYPAzjLb.2D0iC', 'calebwormald@cas.school.nz', '2024-07-03 23:35:39', '2024-07-03 23:35:39');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendee_id` (`attendee_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendee_id` (`attendee_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `store_item_id` (`store_item_id`);

--
-- Indexes for table `store_items`
--
ALTER TABLE `store_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity_sessions`
--
ALTER TABLE `activity_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity_signups`
--
ALTER TABLE `activity_signups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_items`
--
ALTER TABLE `store_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  ADD CONSTRAINT `activity_signups_ibfk_1` FOREIGN KEY (`attendee_id`) REFERENCES `attendees` (`id`),
  ADD CONSTRAINT `activity_signups_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `activity_sessions` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`attendee_id`) REFERENCES `attendees` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`store_item_id`) REFERENCES `store_items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
