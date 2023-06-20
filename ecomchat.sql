-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 09:05 AM
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
-- Database: `ecomchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_text` text NOT NULL,
  `message_type` text DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message_text`, `message_type`, `sent_at`) VALUES
(9, 1, 'recordings/1687084930434recording.wav', 'v', '2023-06-18 10:42:10'),
(12, 0, 'http://localhost/ecom-ml/?keywords[]=mac&keywords[]=apple&keywords[]=m1&', 'u', '2023-06-20 05:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `keyword`) VALUES
(3, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, 'mac'),
(4, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, 'apple'),
(5, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, 'm1'),
(6, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, '8GB'),
(7, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, '512GB'),
(8, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, 'macbook'),
(9, 'MacBook Air 13\" with M1 chip', 'mac-card-40-macbook-air-202110.jfif', 999.00, 'air'),
(10, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'mac'),
(11, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'laptop'),
(12, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'macbook'),
(13, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'apple'),
(14, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'air'),
(15, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'm2'),
(16, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, '8GB'),
(17, 'MacBook Air 13-inch with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', 1099.00, 'macbook air'),
(18, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'mac'),
(19, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'laptop'),
(20, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'macbook'),
(21, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'apple'),
(22, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'pro'),
(23, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'm2'),
(24, 'MacBook Pro 13-inch', 'mbp-digitalmat-gallery-1-202206.png', 1299.00, 'macbook pro'),
(25, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'mac'),
(26, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'laptop'),
(27, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'macbook'),
(28, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'apple'),
(29, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'pro'),
(30, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'm2'),
(31, 'MacBook M2 Pro 14-inch', 'mbp-14-digitalmat-gallery-1-202301.png', 1999.00, 'macbook pro'),
(32, 'Mac mini', 'mac-mini-digitalmat-gallery-1-202301.png', 599.00, 'mac'),
(33, 'Mac mini', 'mac-mini-digitalmat-gallery-1-202301.png', 599.00, 'mac mini'),
(34, 'Mac mini', 'mac-mini-digitalmat-gallery-1-202301.png', 599.00, 'apple'),
(35, 'Mac mini', 'mac-mini-digitalmat-gallery-1-202301.png', 599.00, 'm2'),
(36, 'HUAWEI MateBook 14 2022', 'huawei-matebook-14-2022-highlights-1.webp', 936.00, 'huawei'),
(37, 'HUAWEI MateBook 14 2022', 'huawei-matebook-14-2022-highlights-1.webp', 936.00, 'matebook'),
(38, 'HUAWEI MateBook 14 2022', 'huawei-matebook-14-2022-highlights-1.webp', 936.00, '16GB'),
(39, 'HUAWEI MateBook 14 2022', 'huawei-matebook-14-2022-highlights-1.webp', 936.00, 'i7'),
(40, 'HUAWEI MateBook 14 2022', 'huawei-matebook-14-2022-highlights-1.webp', 936.00, 'laptop'),
(41, 'HUAWEI MateBook 14 2022', 'huawei-matebook-14-2022-highlights-1.webp', 936.00, 'matebook 14'),
(42, 'HUAWEI MateBook 16s', 'gray.png', 1200.00, 'huawei'),
(43, 'HUAWEI MateBook 16s', 'gray.png', 1200.00, 'matebook'),
(44, 'HUAWEI MateBook 16s', 'gray.png', 1200.00, '16GB'),
(45, 'HUAWEI MateBook 16s', 'gray.png', 1200.00, 'i9'),
(46, 'HUAWEI MateBook 16s', 'gray.png', 1200.00, 'laptop'),
(47, 'HUAWEI MateBook 16s', 'gray.png', 1200.00, 'matebook 16s'),
(48, 'HUAWEI MateBook 14s', 'huawei-matebook-14s-Spruce-green-img-mob@2x.webp', 899.00, 'huawei'),
(49, 'HUAWEI MateBook 14s', 'huawei-matebook-14s-Spruce-green-img-mob@2x.webp', 899.00, 'matebook'),
(50, 'HUAWEI MateBook 14s', 'huawei-matebook-14s-Spruce-green-img-mob@2x.webp', 899.00, '16GB'),
(51, 'HUAWEI MateBook 14s', 'huawei-matebook-14s-Spruce-green-img-mob@2x.webp', 899.00, 'i7'),
(52, 'HUAWEI MateBook 14s', 'huawei-matebook-14s-Spruce-green-img-mob@2x.webp', 899.00, 'laptop'),
(53, 'HUAWEI MateBook 14s', 'huawei-matebook-14s-Spruce-green-img-mob@2x.webp', 899.00, 'matebook 14s'),
(54, 'HUAWEI MateBook D 16', 'sliver.png', 910.00, 'huawei'),
(55, 'HUAWEI MateBook D 16', 'sliver.png', 910.00, 'matebook'),
(56, 'HUAWEI MateBook D 16', 'sliver.png', 910.00, 'matebook d 16'),
(57, 'HUAWEI MateBook D 16', 'sliver.png', 910.00, 'i5'),
(58, 'HUAWEI MateBook D 16', 'sliver.png', 910.00, '16GB'),
(59, 'HUAWEI MateBook D 16', 'sliver.png', 910.00, 'laptop'),
(60, 'HUAWEI MateBook D 15 2021', 'Silver2.png', 899.00, 'huawei'),
(61, 'HUAWEI MateBook D 15 2021', 'Silver2.png', 899.00, 'matebook d 15'),
(62, 'HUAWEI MateBook D 15 2021', 'Silver2.png', 899.00, 'i5'),
(63, 'HUAWEI MateBook D 15 2021', 'Silver2.png', 899.00, '8GB'),
(64, 'HUAWEI MateBook D 15 2021', 'Silver2.png', 899.00, 'laptop'),
(65, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'asus'),
(66, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'rog'),
(67, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'laptop'),
(68, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'gaming'),
(69, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'AMD'),
(70, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'Ryzen'),
(71, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, '32GB'),
(72, 'ROG Zephyrus G15 (2022)', 'fwebp.webp', 2000.00, 'geforce'),
(73, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, 'asus'),
(74, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, 'rog'),
(75, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, 'laptop'),
(76, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, 'gaming'),
(77, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, 'duo 15'),
(78, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, '16GB'),
(79, 'ROG Zephyrus Duo 15 ', 'fwebp (1).webp', 1600.00, 'geforce'),
(80, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'asus'),
(81, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'rog'),
(82, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'laptop'),
(83, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'gaming'),
(84, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'AMD'),
(85, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'Ryzen'),
(86, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, '16GB'),
(87, 'ROG Zephyrus G15', 'fwebp (2).webp', 1800.00, 'geforce'),
(88, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'asus'),
(89, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'rog'),
(90, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'laptop'),
(91, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'gaming'),
(92, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, '16GB'),
(93, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'geforce'),
(94, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'intel'),
(95, 'ROG Zephyrus M15', 'fwebp (3).webp', 1400.00, 'i7'),
(96, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'asus'),
(97, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'rog'),
(98, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'laptop'),
(99, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'gaming'),
(100, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, '16GB'),
(101, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'geforce'),
(102, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'intel'),
(103, 'ROG Zephyrus S', 'fwebp (4).webp', 1900.00, 'i7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
