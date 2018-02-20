-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2018 at 03:50 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `arman_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(100) NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_src` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `title`, `content`, `excerpt`, `img_src`, `price`) VALUES
(1, 'Fidget spinner', 'Hand fidget spinner', 'Hand Fidget Spinner Avengers America Captain Spiderman Batman Iron man Flash One Piece Metal Anime Finger Spinner Batman Spiner', 'image/fidget.jpg', 4.9),
(2, 'Iphone case', 'Original silicone case for Iphone ', 'Have LOGO Original Silicone Case For iphone 7 Case For iphone 7plus Cases Phone Cover for Apple iPhone 6 6s 8 7 Plus X', 'image/iphone.jpg', 6.9),
(3, 'Knife', 'DAOMACHEN Tactical Survival Folding Pocket Knives', 'DAOMACHEN Tactical Survival Folding Pocket Knives 3Cr13 Black Blade Utility Camping Hunting Knife Outdoor EDC Multi Knife Tools', 'image/knife.jpg', 17.9),
(4, 'Adidas Superstars', 'Intersport Original New Arrival Adidas Official Superstar', 'Intersport Original New Arrival Adidas Official Superstar Classics Unisex Men\'s and Women\'s Skateboarding Shoes Sneakers', 'image/shoes.jpg', 69.9),
(5, 'Beats EP', 'Beats EP 3.5mm Wired Headphones Stereo Music Headset', 'Beats EP 3.5mm Wired Headphones Stereo Music Headset Line Control with Microphone noise cancelling Portable Bass Earphone', 'image/hphone.jpg', 99.9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;