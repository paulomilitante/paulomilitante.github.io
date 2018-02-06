-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 02:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `item_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`, `item_category_id`) VALUES
(1, 'Double Monk Captoe Veda', 'Leather: Tan Calf Pullside\r\nConstruction: Blake\r\nFinish: Burnish Highlight Stained', 5500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/0a80d7a9a06c4037a2383382c19a1cd0/5B230A55/t51.2885-15/e35/26872161_100315770786473_5830510385987321856_n.jpg', 1),
(2, 'Imperial Oxford Captoe Johnstown', 'Leather: Tan Pullside\r\nConstruction: Blake\r\nFinish: C-tip', 5000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/4a890ff1495d5385a2fa3bef0d077a1f/5AF166A6/t51.2885-15/e35/26363361_328109154349877_8432970742970187776_n.jpg', 2),
(3, 'Wholecut Tassel Dress Loafer', 'Leather: Black Full-Grain Napa\r\nConstruction: Blake\r\nFinish: Lounge Gloss Tip ', 4500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/7be0daa0b4f42b37f1e8925366dd3db8/5AE934FB/t51.2885-15/e35/26339444_249207588951621_7551644630652026880_n.jpg', 3),
(4, 'Oxford Captoe Rothschild', 'Leather: Black Calf Pullside\r\nConstruction: Blake\r\nFinish: Shoe Lounge Gloss Tip', 5000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/295ae29933b28ba8b69f8a7e6bda0df5/5AEE0553/t51.2885-15/sh0.08/e35/p750x750/26154106_169992017096033_2795696553447129088_n.jpg', 2),
(5, 'Double Monk Captoe', 'Leather: Choco Brown Calf Pullside \r\nConstruction: Blake\r\nFinish: Light Cordovan Tip Airbrushed', 4500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/800e51915c5339d7e113e5199647d896/5B210250/t51.2885-15/e35/26154860_170997327001370_1661164058692288512_n.jpg', 1),
(6, 'Metz Captoe Loafer', 'Leather: Black Pullside and Black Pebbled Pull-Up\r\nConstruction: Blake\r\nFinish: Standard Polish', 4000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/2a04573ffd8670f608585960fe37bc51/5B211554/t51.2885-15/e35/26267636_405871666515460_7114371875647520768_n.jpg', 3),
(7, 'Gordon Wholecut', 'Leather: Gray Pullside\r\nConstruction: Blake\r\nFinish: Patina Cordovan With A Purple Tint', 5000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/05ad5cee9b4da5cba797eab9c564a5ad/5B1FB4A8/t51.2885-15/e35/26071443_541086479588449_5886254745047269376_n.jpg', 2),
(16, 'Brogue Oxford Wholecut Zero Luna', 'Leather: Beige Calf Pullside\r\nConstruction: EVA\r\nFinish: Natural Gloss', 4000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/20626b098b714a2ab5ff2b40bde82cf0/5B051E49/t51.2885-15/e35/23507040_1438355966272479_4353727490900885504_n.jpg', 2),
(17, 'Derby Apron Toe', 'Leather: Tan Calf Pullside\r\nConstruction: Bateman Series\r\nFinish: Natural Waxy Gloss', 4000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/61d1de8233e41483ecec317526ffbdf8/5B00E730/t51.2885-15/e35/22709624_142148846533674_2527575643672018944_n.jpg', 4),
(22, 'Brogue Derby Wingtip Riogordo', 'Leather: Calf Pullside\r\nConstruction: HB16\r\nFinish:  Bronze Stained Streak', 5000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/a8f100c14a9d7540f647d38ae3a5abe1/5B01FAF1/t51.2885-15/e35/22710582_1980465512192095_2593771706862534656_n.jpg', 4),
(23, 'Brogue Oxford Wingtip Bailey', 'Leather: Black Calf Pullside\r\nConstruction: C013\r\nFinish: Merlot Stained', 5500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/c8e727a778b1d6542bb55802de42def3/5B1C4113/t51.2885-15/e35/22639435_1964381780487804_1354422863121088512_n.jpg', 2),
(24, 'Oxford Brogue Captoe Javea', 'Leather: Tan Soft Full-Grain\r\nConstruction: HB16\r\nFinish: Natural Matte Finish ', 5500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/740cbba1bf550247a630118449e99a5a/5B1BC997/t51.2885-15/e35/22429934_127607751327064_1633783878403489792_n.jpg', 2),
(25, 'Modern Brogue Ankle Boot Captoe', 'Leather: Calf Pullside\r\nConstruction: HB16\r\nFinish: Choco Brown Toned Black', 5500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/09da175e9e8966dc960007a027c44bae/5AE8EAC5/t51.2885-15/e35/22427260_1487098101379963_4370422664435597312_n.jpg', 5),
(26, 'Brogue Derby Blucher Wingtip', 'Leather: Black Calf Pullside\r\nConstruction: C013\r\nFinish: Black Gloss', 4500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/56388d088c46332e1d1ba3ae3ddb0166/5AEDCF78/t51.2885-15/e35/22344440_1401514839947498_42940610579005440_n.jpg', 4),
(27, 'Single Monk Plain Toe Danson', 'Leather: Black Calf Pullside\r\nConstruction: CH17\r\nFinish: Natural Gloss', 4000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/4d4e1f2586c5963e3e667bb6d9f60041/5B2165F3/t51.2885-15/e35/22157878_131191750960604_336133679707324416_n.jpg', 1),
(28, 'Play Sneakers Ace', 'Leather: Antique Brown Pullside\r\nConstruction: EVA\r\nFinish: Tooling Leather Gloss', 4000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/4cf2dc025da344f0681181892b2bb7de/5B026A84/t51.2885-15/e35/22157227_501291443562809_4726171111891402752_n.jpg', 6),
(29, 'Strap Apron Dress Loafer', 'Leather: Antique Brown Calf Pullside\r\nConstruction: CH15\r\nFinish: Natural Gloss', 4500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/68b200db250eaf2d8c958c6481a876ac/5AFF92D4/t51.2885-15/e35/16230154_766379266844232_2616658913273053184_n.jpg', 3),
(30, 'Classic Chukka Boot Lauverne', 'Leather: Blue Nubuck\r\nConstruction: C013\r\nFinish: Standard Nubuck Matte ', 5000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/a272090b0a6ba0a6e59a3f3ca836cd03/5B0ABDC4/t51.2885-15/e35/16465330_740020812828067_2201468131325509632_n.jpg', 5),
(31, 'Iron Ranger Trench Boot', 'Leather: Museum Brown Calf\r\nConstruction: U16 Last\r\nFinish: Standard Matte', 6000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/14f77aa3f37e8da37cb6eb2b440e46a8/5B0BC5FC/t51.2885-15/e35/17076046_297664497317401_1424033171908853760_n.jpg', 5),
(32, 'Classic Wide Chukka Boot Medel', 'Leather: Antique Brown Calf Pullside\r\nConstruction: C013 Last\r\nFinish: Standard Gloss', 5500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/377a36583337e51b5e3cd6508eab2fab/5B057091/t51.2885-15/e35/16124052_1808449176071468_3781764501364277248_n.jpg', 5),
(33, 'PRD Sneaker R-Type', 'Leather: Museum Calf and Nubuck\r\nConstruction: TOPS13 Last\r\nFinish: Nubuck Matte', 4500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/b486409768751768a3aca4c0b6eb8524/5B19AC3C/t51.2885-15/e35/16123949_1654192788214918_5974092624456318976_n.jpg', 6),
(34, 'Modern Wholecut Penny Loafer', 'Leather: Oxblood Calf Pullside\r\nConstruction: S016\r\nFinish: Stained Tan Heart', 5000, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/105bad69b0c51fcfdd5ef8bac95e6b14/5B0650A4/t51.2885-15/e35/14487443_1774369516157838_7602666089054470144_n.jpg', 3),
(35, 'Double Monk Captoe Sneakers', 'Leather: Standard Synthetic\r\nConstruction: TOPS13\r\nFinish: Standard Gloss', 3500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/0867be7817ee4ccf8712927f7896a242/5AEC8120/t51.2885-15/e35/14278979_556891604494909_1707056079_n.jpg', 6),
(36, 'Modern Derby Plain Toe', 'Leather: Tan Calf Pullside\r\nConstruction: S016 Last\r\nFinish: Standard Gloss', 4500, 'https://instagram.fmnl3-2.fna.fbcdn.net/vp/99428882ae619804af5c07c6416f2f67/5B05EE9C/t51.2885-15/e35/18094568_404763479906032_4999205700476338176_n.jpg', 4),
(37, 'Brogue Derby Captoe Kapitan', 'Leather: Black Calf Pullside\r\nConstruction: Blake Rapid Hybrid\r\nFinish: Standard Polish', 5000, 'https://instagram.fmnl3-1.fna.fbcdn.net/vp/f422b3976b0a38d2eaa9faee78a101b0/5B1E9E36/t51.2885-15/e35/26867352_2077290635820040_2911798075032862720_n.jpg', 4),
(38, 'Oxford Brogue Captoe Rothschild', 'Leather: Choco Brown Calf Pullside\r\nConstruction: C013\r\nFinish: Standard Polish', 5000, 'https://instagram.fmnl3-1.fna.fbcdn.net/vp/cfbc8d3d3aa30cd72eb8c6d8bf91e949/5AEB3B5D/t51.2885-15/s750x750/sh0.08/e35/17881334_1434844586568026_6639933518795243520_n.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE `item_category` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`id`, `type`) VALUES
(1, 'Monkstrap'),
(2, 'Oxford'),
(3, 'Loafer'),
(4, 'Derby'),
(5, 'Boots'),
(6, 'Sneakers');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `paid_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `paid_status`) VALUES
(1, 3, 50000, 'PENDING'),
(3, 5, 0, 'FALSE'),
(4, 3, 17500, 'PENDING'),
(5, 3, 10500, 'PENDING'),
(6, 3, 5500, 'PENDING'),
(7, 3, 5500, 'PENDING'),
(8, 3, 0, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `item_id`, `quantity`, `discount`, `total_price`, `order_id`) VALUES
(4, 1, 1, NULL, 5500, 1),
(5, 2, 3, NULL, 15000, 1),
(6, 3, 3, NULL, 13500, 1),
(7, 6, 4, NULL, 16000, 1),
(8, 1, 1, NULL, 5500, 4),
(9, 6, 3, NULL, 12000, 4),
(10, 1, 1, NULL, 5500, 5),
(11, 2, 1, NULL, 5000, 5),
(12, 1, 1, NULL, 5500, 6),
(13, 1, 1, NULL, 5500, 7);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `role_id`) VALUES
(1, 'paulo', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'Paulo', 'Militante', 'paulo.militante@yahoo.com', 1),
(2, 'juan', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'Juan', 'Dela', 'juandelacruz@yahoo.com', 2),
(3, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'John', 'Smith', 'johnsmith@yahoo.com', 3),
(5, 'test2', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'Janice', 'Doe', 'janedoe@yahoo.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category_id` (`item_category_id`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ibfk_1` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `order_items_ibfk_2` (`order_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`item_category_id`) REFERENCES `item_category` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
