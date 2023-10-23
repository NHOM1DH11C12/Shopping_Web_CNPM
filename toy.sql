-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 07:54 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `toy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
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

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id`, `username`, `fullname`, `phone`, `province`, `district`, `ward`, `address`) VALUES
(1, 'user', 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ công23456', '151234567'),
(2, '12', 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ hòa', '15'),
(3, '1', 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ công23456', '15'),
(6, 'user', 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ công23456', '15ghjkkfjfjgjjjxsdfg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `buy_code` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `buyad` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `receive_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `buy`
--

INSERT INTO `buy` (`id`, `buy_code`, `user_name`, `product_name`, `price`, `quantity`, `amount`, `status`, `buyad`, `photo`, `add_date`, `receive_date`) VALUES
(6, '', '1', 'diend', 950000, 1, '950000', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-20 16:25:01', '2023-10-20 16:25:01'),
(7, '', '1', 'decade', 9500000, 1, '9500000', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-20 16:25:01', '2023-10-20 16:25:01'),
(13, '', '1', 'double', 9500000, 1, '9500000', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'double.jpg', '2023-10-20 17:53:39', '2023-10-20 17:53:39'),
(14, '', '1', 'diend', 950000, 1, '950000', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-20 17:53:39', '2023-10-20 17:53:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
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
(20, 'hobby-toy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(50) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL,
  `get_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'decade', 3, 9500000, 989, '', '', 'decade.jpg'),
(2, 'diend', 3, 950000, 987, '', '', 'diend.jpg'),
(3, 'double', 3, 9500000, 14, '', '', 'double.jpg'),
(4, 'ooo', 3, 9500000, 26, '', '', 'ooo.jpg'),
(5, 'fourze', 3, 9500000, 28, '', '', 'fourze.jpg'),
(6, 'wizard', 3, 950000, 13, '', '', 'wizard.jpg'),
(7, 'gaim', 3, 950000000, 0, '', 'Mô hình kamenrider gaim', 'gaim.jpg'),
(8, 'drive', 3, 950000000, 26, '', 'Mô hình kamenrider drive', 'drive.jpg'),
(9, 'ghost', 3, 950000000, 28, '', 'Mô hình kamenrider ghost', 'ghost.jpg'),
(10, 'exaid', 3, 950000000, 8, '', 'Mô hình kamenrider exaid', 'exaid.jpg'),
(11, 'build', 3, 950000000, 9, '', 'Mô hình kamenrider build', 'build.jpg'),
(12, 'zi-o', 3, 950000000, 9, '', 'Mô hình kamenrider zi-o', 'zi-o.jpg'),
(13, 'zero-one', 3, 950000000, 10, '', 'Mô hình kamenrider zero-one', 'zero-one.jpg'),
(14, 'saber', 3, 950000000, 10, '', 'Mô hình kamenrider saber', 'saber.jpg'),
(15, 'revice', 3, 950000000, 10, '', 'Mô hình kamenrider revice', 'revice.jpg'),
(16, 'kuuga', 3, 950000000, 10, '', 'Mô hình kamenrider kuuga', 'kuuga.jpg'),
(17, 'agito', 3, 950000000, 10, '', 'Mô hình kamenrider agito', 'agito.jpg'),
(18, 'ryuki', 3, 950000000, 9, '', 'Mô hình kamenrider ryuki', 'ryuki.jpg'),
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
-- Cấu trúc bảng cho bảng `reports`
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
-- Đang đổ dữ liệu cho bảng `reports`
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
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_image`) VALUES
(21, '555', 'shin.jpg'),
(22, '3456', 'bandai.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_level`, `username`, `first_name`, `last_name`, `sex`, `email`, `password`, `user_photo`) VALUES
(1, '2', 'admin', 'adxx', 'min', 'nam', 'tendai@gmail.com', '1234', 'gaim.jpg'),
(2, '1', 'user', 'trung', 'nguyen', 'nam', 'tapnham1502@gmail.com', '1234', 'agito.jpg'),
(5, '1', '1', 'trung', 'nguyen1', 'nam', 'tapnham1502@gmail.com', '1', 'dragonranger.jpg'),
(6, '2', '2', 'trung1', 'nguyen', 'nam', 'tapnham1502@gmail.com', '1', 'diend.jpg'),
(7, '1', '12', 'trungq', 'trung', 'nam', 'lemann78783457@gmail.com', '1', 'decade.jpg'),
(8, '1', 'tendai1', 'asdfgh', 'asdfghjkl', 'nu', 'sdfghjk@dsfghj.sdfgh', '1234', 'shin.jpg'),
(9, '1', 'ashy1234', 'wesdrtfhghuijok', 'nguyen', 'nu', 'tapnham1502@gmail.com', '', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `buy_code` varchar(50) NOT NULL,
  `money` float NOT NULL,
  `note` varchar(50) NOT NULL,
  `vnp_reponse_code` varchar(50) NOT NULL,
  `code_vnpay` varchar(255) NOT NULL,
  `code_blank` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Chỉ mục cho bảng `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
