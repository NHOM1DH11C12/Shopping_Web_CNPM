
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toy`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `address` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `buyad` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Mô hình Gundam'),
(2, 'Đồ chơi Supper sentai'),
(3, 'Đồ chơi Kamen rider'),
(4, 'Đồ chơi Dragon ball'),
(12, 'Đồ Chơi Bandai DX'),
(13, 'Mô Hình Động Bandai SHFiguart'),
(14, 'Mô Hình Cao Cấp Bandai Complete Selection Modification'),
(15, 'Mô Hình Tĩnh Figma'),
(16, 'Trading Card Game'),
(17, 'LEGO Tổng Hợp'),
(18, 'Phụ Kiện Sưu Tập'),
(19, 'Hobby Tools');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'decade', 3, 950000000, 10, '', 'Mô hình kamenrider decade', 'decade.jpg'),
(2, 'diend', 3, 950000000, 30, '', 'Mô hình kamenrider diend', 'diend.jpg'),
(3, 'double', 3, 950000000, 30, '', 'Mô hình kamenrider double', 'double.jpg'),
(4, 'ooo', 3, 950000000, 30, '', 'Mô hình kamenrider ooo', 'ooo.jpg'),
(5, 'fourze', 3, 950000000, 30, '', 'Mô hình kamenrider fourze', 'fourze.jpg'),
(6, 'wizard', 3, 950000000, 30, '', 'Mô hình kamenrider wizard', 'wizard.jpg'),
(7, 'gaim', 3, 950000000, 30, '', 'Mô hình kamenrider gaim', 'gaim.jpg'),
(8, 'drive', 3, 950000000, 30, '', 'Mô hình kamenrider drive', 'drive.jpg'),
(9, 'ghost', 3, 950000000, 30, '', 'Mô hình kamenrider ghost', 'ghost.jpg'),
(10, 'exaid', 3, 950000000, 10, '', 'Mô hình kamenrider exaid', 'exaid.jpg'),
(11, 'build', 3, 950000000, 10, '', 'Mô hình kamenrider build', 'build.jpg'),
(12, 'zi-o', 3, 950000000, 10, '', 'Mô hình kamenrider zi-o', 'zi-o.jpg'),
(13, 'zero-one', 3, 950000000, 10, '', 'Mô hình kamenrider zero-one', 'zero-one.jpg'),
(14, 'saber', 3, 950000000, 10, '', 'Mô hình kamenrider saber', 'saber.jpg'),
(15, 'revice', 3, 950000000, 10, '', 'Mô hình kamenrider revice', 'revice.jpg'),
(16, 'kuuga', 3, 950000000, 10, '', 'Mô hình kamenrider kuuga', 'kuuga.jpg'),
(17, 'agito', 3, 950000000, 10, '', 'Mô hình kamenrider agito', 'agito.jpg'),
(18, 'ryuki', 3, 950000000, 10, '', 'Mô hình kamenrider ryuki', 'ryuki.jpg'),
(19, 'goku', 4, 950000000, 40, '', 'Mô hình Goku', 'goku.jpg'),
(20, 'vegeta', 4, 950000000, 40, '', 'Mô hình Vegeta', 'vegeta.jpg'),
(21, 'gohan', 4, 950000000, 40, '', 'Mô hình Gohan', 'gohan.jpg'),
(22, 'trunks', 4, 950000000, 40, '', 'Mô hình Trunks', 'trunks.jpg'),
(23, 'piccolo', 4, 950000000, 40, '', 'Mô hình Piccolo', 'piccolo.jpg'),
(24, 'frieza', 4, 950000000, 40, '', 'Mô hình Frieza', 'frieza.jpg'),
(25, 'akaranger', 2, 950000000, 20, '', 'Mô hình Akaranger', 'akaranger.jpg'),
(26, 'gokaired', 2, 950000000, 20, '', 'Mô hình Big One', 'gokaired.jpg'),
(27, 'gaored', 2, 950000000, 20, '', 'Mô hình gaored', 'gaored.jpg'),
(28, 'dragonranger', 2, 950000000, 20, '', 'Mô hình Dragonranger', 'dragonranger.jpg'),
(29, 'dekamaster', 2, 950000000, 20, '', 'Mô hình Dekamaster', 'dekamaster.jpg'),
(30, 'gokaired', 2, 950000000, 20, '', 'Mô hình Gokai Red', 'gokaired.jpg'),
(31, 'rx-78-2', 1, 950000000, 10, '', 'Mô hình RX-78-2 Gundam', 'rx-78-2.jpg'),
(32, 'zaku-ii', 1, 950000000, 10, '', 'Mô hình Zaku II', 'zaku-ii.jpg'),
(33, 'gundam-exia', 1, 950000000, 10, '', 'Mô hình Gundam Exia', 'gundam-exia.jpg'),
(34, 'gundam-barbatos', 1, 950000000, 10, '', 'Mô hình Gundam Barbatos', 'gundam-barbatos.jpg'),
(35, 'unicorn-gundam', 1, 950000000, 10, '', 'Mô hình Unicorn Gundam', 'unicorn-gundam.jpg'),
(36, 'strike-gundam', 1, 950000000, 10, '', 'Mô hình Strike Gundam', 'strike-gundam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_price`, `product_title`, `product_quantity`) VALUES
(1, 1, 0, 25.59, '', 1),
(2, 1, 0, 25.59, '', 3),
(3, 1, 0, 25.59, '', 3),
(4, 1, 0, 25.59, '', 3),
(5, 1, 0, 25.59, '', 3),
(6, 1, 0, 25.59, '', 3),
(7, 1, 0, 25.59, '', 3),
(8, 1, 0, 25.59, '', 3),
(9, 1, 0, 25.59, '', 3),
(10, 1, 0, 25.59, '', 3),
(11, 1, 29, 25.59, '', 3),
(12, 1, 30, 25.59, '', 3),
(13, 1, 31, 25.59, '', 3),
(14, 1, 32, 25.59, '', 3),
(15, 1, 33, 25.59, '', 3),
(16, 1, 39, 25.59, 'Olivine Oil ', 3),
(17, 1, 40, 25.59, 'Olivine Oil ', 3),
(18, 2, 41, 2499.99, 'Dell XPS 13 2020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_image`) VALUES
(10, 'Passer 01', 'slider_1.jpg'),
(11, 'Passer 02', 'slider_2.jpg'),
(12, 'Passer 03', 'slider_3.jpg'),
(13, 'Passer 04', 'slider_4.jpg'),
(14, 'Passer 05', 'slider_5.jpg'),
(15, 'Passer 06', 'slider_6.jpg'),
(19, 'Passer 07', 'slider_10.png'),
(20, 'Passer 08', 'slider_11.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_level` char(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_level`, `username`, `first_name`, `last_name`, `email`, `password`, `user_photo`) VALUES
(1, '2', 'admin', 'ad', 'min', 'tendai@gmail.com', '1234', ''),
(2, '1', 'user', 'us', 'er', 'ashley@support.com', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
