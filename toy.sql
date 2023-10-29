-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 06:18 PM
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
(6, 'user', 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ công23456', '15ghjkkfjfjgjjjxsdfg'),
(7, '123', 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ công', '15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `buy_code` varchar(50) NOT NULL,
  `vnpay_code` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `buyad` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `receive_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `buy`
--

INSERT INTO `buy` (`id`, `buy_code`, `vnpay_code`, `user_name`, `product_name`, `price`, `quantity`, `amount`, `payment`, `status`, `buyad`, `photo`, `add_date`, `receive_date`) VALUES
(1, '326714773', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-26 11:40:22', '2023-10-21 07:10:18'),
(2, '349959494', '', '1', 'diend', 950000, 1, '950000', 'vnpay', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-26 10:27:36', '2023-10-21 03:47:19'),
(3, '256175866', '', '1', 'wizard', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-26 11:40:08', '2023-10-21 03:50:00'),
(4, '562497643', '', '1', 'wizard', 950000, 1, '950000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-21 07:12:12', '2023-10-21 07:13:03'),
(5, '327050451', '', '1', 'diend', 950000, 1, '950000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-22 17:12:54', '2023-10-22 17:12:54'),
(6, '327050451', '', '1', 'wizard', 950000, 1, '950000', '', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-22 17:13:30', '2023-10-22 17:12:54'),
(7, '327050451', '', '1', 'fourze', 9500000, 1, '9500000', '', 'Đã xác nhận', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'fourze.jpg', '2023-10-22 17:13:25', '2023-10-22 17:12:54'),
(8, '327050451', '', '1', 'ooo', 9500000, 1, '9500000', '', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'ooo.jpg', '2023-10-22 17:13:21', '2023-10-22 17:12:54'),
(9, '327050451', '', '1', 'drive', 950000000, 1, '950000000', '', 'Đã xác nhận', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'drive.jpg', '2023-10-22 17:13:16', '2023-10-22 17:12:54'),
(14, '290969576', '', '1', 'wizard', 950000, 1, '950000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-23 08:50:23', '2023-10-23 08:50:23'),
(15, '977088475', '', '1', 'diend', 950000, 1, '950000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-23 08:51:50', '2023-10-23 08:51:50'),
(16, '478564028', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:06:23', '2023-10-23 09:06:23'),
(17, '133503097', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:06:39', '2023-10-23 09:06:39'),
(18, '325003558', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:11:05', '2023-10-23 09:11:05'),
(19, '121325322', '', '1', 'diend', 950000, 1, '950000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-23 09:12:12', '2023-10-23 09:12:12'),
(20, '284331390', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:12:59', '2023-10-23 09:12:59'),
(21, '361861325', '', '1', 'diend', 950000, 1, '950000', '', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-23 09:22:46', '2023-10-23 09:22:46'),
(22, '475850179', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:23:09', '2023-10-23 10:41:38'),
(23, '585156991', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:24:36', '2023-10-23 10:41:19'),
(24, '750238270', '', '1', 'decade', 9500000, 1, '9500000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-23 09:29:17', '2023-10-23 10:40:59'),
(27, '569738398', '', '1', 'diend', 950000, 1, '950000', 'vnpay', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-26 10:32:17', '2023-10-23 10:39:38'),
(28, '266149356', '', '1', 'wizard', 950000, 1, '950000', '', 'Đã xác nhận', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-23 10:37:09', '2023-10-23 09:33:45'),
(29, '170147315', '', '123', 'diend', 950000, 1, '950000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công\n15', 'diend.jpg', '2023-10-23 10:21:34', '2023-10-23 10:28:26'),
(34, '839613613', '', '1', 'diend', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-29 15:33:26', '2023-10-29 15:33:26'),
(35, '327414381', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:33:26', '2023-10-29 15:33:26'),
(36, '306691816', '', '1', 'double', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'double.jpg', '2023-10-29 15:34:06', '2023-10-29 15:34:06'),
(37, '559750249', '', '1', 'fourze', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'fourze.jpg', '2023-10-29 15:34:06', '2023-10-29 15:34:06'),
(38, '931428123', '', '1', 'double', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'double.jpg', '2023-10-29 15:37:29', '2023-10-29 15:37:29'),
(39, '931428123', '', '1', 'ooo', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'ooo.jpg', '2023-10-29 15:37:29', '2023-10-29 15:37:29'),
(40, '582859139', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:38:33', '2023-10-29 15:38:33'),
(41, '736203708', '', '1', 'diend', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-29 15:38:33', '2023-10-29 15:38:33'),
(42, '569140821', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:38:45', '2023-10-29 15:38:45'),
(43, '724395430', '', '1', 'diend', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-29 15:38:45', '2023-10-29 15:38:45'),
(44, '894787124', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:41:17', '2023-10-29 15:41:17'),
(47, '773709925', '', '1', 'diend', 950000, 1, '950000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-29 15:49:43', '2023-10-29 15:49:43'),
(48, '773709925', '', '1', 'wizard', 950000, 1, '950000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-29 15:49:44', '2023-10-29 15:49:44'),
(57, '523362774', '573995010', '1', 'decade', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 17:06:40', '2023-10-29 16:39:11'),
(64, '104502585', '', 'user', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-10-29 16:55:43', '2023-10-29 16:55:43'),
(65, '950181579', '', 'user', 'diend', 950000, 1, '950000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'diend.jpg', '2023-10-29 16:57:32', '2023-10-29 16:57:32'),
(66, '873039141', '', 'user', 'decade', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-10-29 16:57:32', '2023-10-29 16:57:32'),
(67, '230589572', '853655543', 'user', 'decade', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-10-29 17:01:03', '2023-10-29 17:01:03'),
(68, '772372714', '853655543', 'user', 'double', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'double.jpg', '2023-10-29 17:01:03', '2023-10-29 17:01:03'),
(69, '442467339', '823580663', 'user', 'diend', 950000, 2, '1900000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'diend.jpg', '2023-10-29 17:04:21', '2023-10-29 17:04:21'),
(70, '958814256', '190737161', 'user', 'double', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'double.jpg', '2023-10-29 17:08:03', '2023-10-29 17:08:03'),
(71, '356016843', '190737161', 'user', 'ooo', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'ooo.jpg', '2023-10-29 17:08:03', '2023-10-29 17:08:03');

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

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `order_code`, `order_name`, `order_quantity`, `order_amount`, `order_status`, `order_currency`, `get_date`) VALUES
(1, '', 'diend', 1, 950000, 'Đã hoàn thành', 'VND', '0000-00-00 00:00:00'),
(2, '', 'wizard', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-21 03:48:48'),
(3, '', 'wizard', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-21 03:48:48'),
(4, '', 'wizard', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-21 03:50:00'),
(5, '', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-21 07:10:18'),
(6, '', 'wizard', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-21 07:12:17'),
(7, '562497643', 'wizard', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-21 07:13:03'),
(8, '', 'diend', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-23 10:28:26'),
(9, '', 'diend', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-23 10:39:38'),
(10, '750238270', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-23 10:40:59'),
(11, '585156991', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-23 10:41:19'),
(12, '475850179', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-23 10:41:38');

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
(1, 'decade', 3, 9500000, 961, '', '', 'decade.jpg'),
(2, 'diend', 3, 950000, 958, '', '', 'diend.jpg'),
(3, 'double', 3, 9500000, 7, '', '', 'double.jpg'),
(4, 'ooo', 3, 9500000, 23, '', '', 'ooo.jpg'),
(5, 'fourze', 3, 9500000, 25, '', '', 'fourze.jpg'),
(6, 'wizard', 3, 950000, 0, '', '', 'wizard.jpg'),
(7, 'gaim', 3, 950000000, 0, '', 'Mô hình kamenrider gaim', 'gaim.jpg'),
(8, 'drive', 3, 950000000, 25, '', 'Mô hình kamenrider drive', 'drive.jpg'),
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
(36, 'strike-gundam', 1, 950000000, 10, '', 'Mô hình Strike Gundam', 'strike-gundam.jpg'),
(99, '123', 16, 54356, 24567, '', '', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif'),
(100, '456', 17, 5675440, 98668, '0877', '678', 'big-one.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_code` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `report_file` varchar(255) NOT NULL,
  `star` varchar(3) NOT NULL,
  `comment` varchar(70) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `reports`
--

INSERT INTO `reports` (`report_id`, `report_code`, `user_name`, `product_name`, `report_file`, `star`, `comment`, `date`) VALUES
(1, '326714773', '1', 'decade', '', '5', 'qưergtjkljhyewq', '2023-10-29 14:32:58'),
(2, '256175866', '1', 'wizard', '', '5', 'dưegtrhyujtgre', '2023-10-29 14:35:43'),
(3, '475850179', '1', 'decade', '', '5', 'dsfghjkhgfdsa', '2023-10-29 14:37:58'),
(4, '562497643', '1', 'wizard', '', '5', 'sưdefrtyuiuytred', '2023-10-29 14:38:26');

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
(2, '1', 'user', 'trung', 'nguyen', 'nam', 'tapnham15022@gmail.com', '1234', 'agito.jpg'),
(5, '1', '1', 'trung', 'nguyen1', 'nam', 'tapnham15402@gmail.com', '1', 'dragonranger.jpg'),
(6, '2', '2', 'trung1', 'nguyen', 'nam', 'tapnham1502@gmail.com', '1', 'diend.jpg'),
(7, '1', '12', 'trungq', 'trung', 'nam', 'lemann78783457@gmail.com', '1', 'decade.jpg'),
(8, '1', 'tendai1', 'asdfgh', 'asdfghjkl', 'nu', 'sdfghjk@dsfghj.sdfgh', '1234', 'shin.jpg'),
(9, '1', 'ashy1234', 'wesdrtfhghuijok', 'nguyen', 'nu', 'tapnham150245@gmail.com', '', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif'),
(14, '1', '123', 'trung1', 'nguyen', 'nam', 'tapnham150we2@gmail.com', '1234', 'drive.jpg');

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
