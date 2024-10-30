-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mouse_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `mice`
--

CREATE TABLE `mice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mice`
--

INSERT INTO `mice` (`id`, `name`, `number`, `email`, `password`, `age`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gul mastan', '8777081779', 'asifali8240@outlook.com', '123', '25', '', '2024-10-29 03:05:26', '2024-10-29 03:05:26'),
(3, 'neymar jr', '8777081779', 'neymar@gmail.com', '$2y$12$gj3zgGIoEcWkvkUHzwbQPu5l0Klxgfx14Id6iFxqzL51uzKEGNKZa', '23', '', '2024-10-29 04:02:31', '2024-10-29 04:02:31'),
(8, 'valu', '8777081779', 'valu@gmail.com', '$2y$12$.8ICCQaIw70rhReeak7sU..E8/qzewCRswdXm.d26vWJcRSMdWqD.', '26', '', '2024-10-29 04:21:18', '2024-10-29 04:21:18'),
(9, 'cristiano ronaldo', '7777777', 'cr@gmail.com', '$2y$12$/ZxCLV61ZT5lnanXshmZM.NUiITg93BXzjfIPSd0pJ7WqPTCBKtZu', '58', '', '2024-10-29 10:25:27', '2024-10-29 10:25:27'),
(10, 'salah', '786', 'salah@outlook.com', '$2y$12$sN.AybD3UX72/Ws5.AgDROEwK8P5eUFueEetdSN.f9NlaMeTrDqe2', '50', '', '2024-10-29 11:04:20', '2024-10-29 11:04:20'),
(11, 'kaka', '78910', 'kaka@gmail.com', '$2y$12$.AA.80Tbb44c4ekQ4bbw6uChxoo7uBugY7x85WS5.OZAJFWclKpmu', '55', '', '2024-10-29 11:23:59', '2024-10-29 11:23:59'),
(12, 'vini jr', '10v', 'vini@email.com', '$2y$12$7XiG2pGXJjhL.DXWr3CMDOuV6BlSlewJlMr5bsH3Ipnz6BH8qdX4y', '23', '', '2024-10-30 03:52:02', '2024-10-30 03:52:02'),
(13, 'ozil', '10', 'ozil@email.com', '$2y$12$xbo7ja0GnhdECHu3TZn92Ofo8QPWCHEQFKklhS6xmoUJgNm0isuRa', '52', '', '2024-10-30 04:04:28', '2024-10-30 04:04:28'),
(14, 'leo messi', '10', 'messi@email.com', '$2y$12$GZPtI4BnMNjgSuOsWEd.meEBUklAfCcVP5URrUeZSId8RHejt.X6e', '58', NULL, '2024-10-30 04:17:06', '2024-10-30 04:17:06'),
(15, 'revaldo', '10', 'rivaldo@gmail.com', '$2y$12$JQBCSAFxO4XrfgfsFCiO4OkAh1D/N1tcYQxxdz1SpLJv39xFAzbP2', '78', 'images/y5GV1NPgQFW5WVtOzvAChSM4pJ57xuya667i97NI.jpg', '2024-10-30 04:21:05', '2024-10-30 04:21:05'),
(16, 'maradona', '10', 'maradona@outlook.com', '$2y$12$zhV9pN3jXHwwofdbOx0ywusPuSY7AKgijL9ieORxu0sQlqZfggrs2', '80', 'images/Pse8TwEpr1ZNVLwWw1PqV0Pnb7rNa4IVQLYO1G2n.jpg', '2024-10-30 04:39:39', '2024-10-30 04:39:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mice`
--
ALTER TABLE `mice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mice`
--
ALTER TABLE `mice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
