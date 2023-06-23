-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 04:58 AM
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
(12, 0, 'http://localhost/ecom-ml/?keywords[]=mac&keywords[]=apple&keywords[]=m1&', 'u', '2023-06-20 05:33:08'),
(20, 0, 'http://localhost/ecom-ml/?keywords[]=mac&keywords[]=apple&keywords[]=m1&', 'u', '2023-06-20 07:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `keyword`) VALUES
(147, 'MacBook Pro 16-inch (M2 Pro)', 'mbp-16-digitalmat-gallery-1-202301.jfif', '780,000', '1'),
(148, 'MacBook Pro 13-inch (M2)', 'mbp-digitalmat-gallery-1-202206.png', '410,000', '1'),
(149, 'Mac mini', 'mac-mini-digitalmat-gallery-4-202301.png', '200,000', '1'),
(150, 'Mac Studio', 'mac-studio-digitalmat-gallery-1-202306.png', '630,000', '1'),
(151, 'Mac Pro', 'mac-pro-digitalmat-gallery-2-202306.png', '2,160,600', '1'),
(152, 'MacBook Air 13-inch (8GB/16GB) with M1 chip', 'mba-digitalmat-gallery-4-202111.png', '290,000', 'macbook air'),
(153, 'MacBook Air 13-inch (8GB/16GB) with M1 chip', 'mba-digitalmat-gallery-4-202111.png', '290,000', 'apple'),
(154, 'MacBook Air 13-inch (8GB/16GB) with M1 chip', 'mba-digitalmat-gallery-4-202111.png', '290,000', 'macbook'),
(155, 'MacBook Air 13-inch (8GB/16GB) with M1 chip', 'mba-digitalmat-gallery-4-202111.png', '290,000', 'm1'),
(156, 'MacBook Air 13-inch (8GB/16GB) with M1 chip', 'mba-digitalmat-gallery-4-202111.png', '290,000', 'battory life'),
(157, 'MacBook Air 13-inch (8GB/16GB) with M1 chip', 'mba-digitalmat-gallery-4-202111.png', '290,000', 'protable'),
(158, 'MacBook Air 13-inch (8GB/16GB) with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', '340,000', 'macbook air'),
(159, 'MacBook Air 13-inch (8GB/16GB) with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', '340,000', 'apple'),
(160, 'MacBook Air 13-inch (8GB/16GB) with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', '340,000', 'macbook'),
(161, 'MacBook Air 13-inch (8GB/16GB) with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', '340,000', 'battory life'),
(162, 'MacBook Air 13-inch (8GB/16GB) with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', '340,000', 'protable'),
(163, 'MacBook Air 13-inch (8GB/16GB) with M2 chip', 'macbook-air-digitalmat-gallery-2-202206.png', '340,000', 'm2'),
(164, 'MacBook Air 15-inch (8GB/16GB) with M2 chip', 'mba-digitalmat-gallery-2-202306.png', '400,000', 'macbook air'),
(165, 'MacBook Air 15-inch (8GB/16GB) with M2 chip', 'mba-digitalmat-gallery-2-202306.png', '400,000', 'apple'),
(166, 'MacBook Air 15-inch (8GB/16GB) with M2 chip', 'mba-digitalmat-gallery-2-202306.png', '400,000', 'macbook'),
(167, 'MacBook Air 15-inch (8GB/16GB) with M2 chip', 'mba-digitalmat-gallery-2-202306.png', '400,000', 'battory life'),
(168, 'MacBook Air 15-inch (8GB/16GB) with M2 chip', 'mba-digitalmat-gallery-2-202306.png', '400,000', 'protable'),
(169, 'MacBook Air 15-inch (8GB/16GB) with M2 chip', 'mba-digitalmat-gallery-2-202306.png', '400,000', 'm2'),
(170, 'Asus ROG Strix G16 Intel I9-13980HX', '5078.jpg', '1,150,000', '1'),
(171, 'HP 15S FQ2789TU Intel I5-113G7', '5021.jpg', '225,000', '1'),
(172, 'Lenovo IdeaPad Flex 5', '4673.jpg', '375,000', '1'),
(173, 'Lenovo IdeaPad Slim 3 AMD Ryzen 5', '4664.jpg', '250,000', '1'),
(174, 'Asus TUF Dash F15 Intel I7-11370H (16GB)', '3715.jpg', '520,000', 'gaming'),
(175, 'Asus TUF Dash F15 Intel I7-11370H (16GB)', '3715.jpg', '520,000', 'asus'),
(176, 'Asus TUF Dash F15 Intel I7-11370H (16GB)', '3715.jpg', '520,000', 'i7'),
(177, 'Asus TUF Dash F15 Intel I7-11370H (16GB)', '3715.jpg', '520,000', 'laptop'),
(178, 'Asus TUF Gaming F15 Intel I7-13700H (8GB)', '5084.jpg', '585,000', 'gaming'),
(179, 'Asus TUF Gaming F15 Intel I7-13700H (8GB)', '5084.jpg', '585,000', 'asus'),
(180, 'Asus TUF Gaming F15 Intel I7-13700H (8GB)', '5084.jpg', '585,000', 'i7'),
(181, 'Asus TUF Gaming F15 Intel I7-13700H (8GB)', '5084.jpg', '585,000', 'laptop'),
(182, 'MSI GF65 Thin 10UE Laptop (8GB/i7)', '4314.jpg', '500,000', 'gaming'),
(183, 'MSI GF65 Thin 10UE Laptop (8GB/i7)', '4314.jpg', '500,000', 'i7'),
(184, 'MSI GF65 Thin 10UE Laptop (8GB/i7)', '4314.jpg', '500,000', 'laptop'),
(185, 'MSI GF65 Thin 10UE Laptop (8GB/i7)', '4314.jpg', '500,000', 'msi'),
(186, 'MSI Katana GF66 12UD Laptop (16GB-i7)', '4317.jpg', '525,000', 'gaming'),
(187, 'MSI Katana GF66 12UD Laptop (16GB-i7)', '4317.jpg', '525,000', 'i7'),
(188, 'MSI Katana GF66 12UD Laptop (16GB-i7)', '4317.jpg', '525,000', 'laptop'),
(189, 'MSI Katana GF66 12UD Laptop (16GB-i7)', '4317.jpg', '525,000', 'msi'),
(190, 'HP Pavilion 15 EH1678AU AMD Ryzen 7 5700U', '4730.jpg', '265,000', '1'),
(191, 'HP Pavilion 15-EC2334AX Gaming Laptop', '4143.jpg', '305,000', '1'),
(192, 'Dell Inspiron 15 3520 I7-1255U', '4796.jpg', '325,000', '1'),
(193, 'Asus TUF Gaming F15 Intel I7', '3794.jpg', '350,000', '1'),
(194, 'Lenovo IdeaPad 3 15IAU7 Intel I3-1215U', '4964.png', '178,000', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
