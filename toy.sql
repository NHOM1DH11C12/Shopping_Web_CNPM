-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 07:23 PM
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
-- Cơ sở dữ liệu: `ecom_db`
--
CREATE DATABASE IF NOT EXISTS `ecom_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecom_db`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--
-- Error reading structure for table ecom_db.address: #1932 - Table &#039;ecom_db.address&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.address: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`address`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy`
--
-- Error reading structure for table ecom_db.buy: #1932 - Table &#039;ecom_db.buy&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.buy: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`buy`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--
-- Error reading structure for table ecom_db.categories: #1932 - Table &#039;ecom_db.categories&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.categories: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`categories`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--
-- Error reading structure for table ecom_db.orders: #1932 - Table &#039;ecom_db.orders&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.orders: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`orders`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--
-- Error reading structure for table ecom_db.products: #1932 - Table &#039;ecom_db.products&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.products: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`products`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--
-- Error reading structure for table ecom_db.slides: #1932 - Table &#039;ecom_db.slides&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.slides: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`slides`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--
-- Error reading structure for table ecom_db.users: #1932 - Table &#039;ecom_db.users&#039; doesn&#039;t exist in engine
-- Error reading data for table ecom_db.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ecom_db`.`users`&#039; at line 1
--
-- Cơ sở dữ liệu: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Đang đổ dữ liệu cho bảng `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"toy\",\"table\":\"reports\"},{\"db\":\"toy\",\"table\":\"orders\"},{\"db\":\"toy\",\"table\":\"buy\"},{\"db\":\"toy\",\"table\":\"address\"},{\"db\":\"toy\",\"table\":\"products\"},{\"db\":\"toy\",\"table\":\"categories\"},{\"db\":\"toy\",\"table\":\"users\"},{\"db\":\"ecom_db\",\"table\":\"buy\"},{\"db\":\"ecom_db\",\"table\":\"reports\"},{\"db\":\"ecom_db\",\"table\":\"products\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'toy', 'orders', '{\"sorted_col\":\"`orders`.`order_currency` DESC\"}', '2023-10-01 03:03:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-10-01 05:49:23', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"vi\",\"NavigationWidth\":187}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Cơ sở dữ liệu: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Cơ sở dữ liệu: `thuchanh2`
--
CREATE DATABASE IF NOT EXISTS `thuchanh2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thuchanh2`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `address` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(4, 'Đồ chơi Dragon ball');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(1, 345, '345354', 'Completed', 'VND'),
(2, 346, '34565464', 'Completed', 'VND'),
(3, 35, '876546', 'Completed', 'VND'),
(4, 34, '3456546', 'Completed', 'VND'),
(5, 55, '8765454', 'Completed', 'VND'),
(6, 345, '345354', 'Completed', 'VND'),
(7, 345, '345354', 'Completed', 'VND'),
(8, 3457, '3453954', 'Completed', 'VND'),
(9, 3457, '3453954', 'Completed', 'VND'),
(10, 3457, '3453954', 'Completed', 'VND'),
(11, 3457, '3453954', 'Completed', 'VND'),
(12, 3457, '3453954', 'Completed', 'VND'),
(13, 3457, '3453954', 'Completed', 'VND'),
(14, 3457, '3453954', 'Completed', 'VND'),
(15, 345, '345354', 'Completed', 'VND'),
(16, 345, '345354', 'Completed', 'VND'),
(17, 345, '345354', 'Completed', 'VND'),
(18, 345, '345354', 'Completed', 'VND'),
(19, 349895, '3453549', 'Completed', 'VND'),
(20, 349895, '3453549', 'Completed', 'VND'),
(21, 349895, '3453549', 'Completed', 'VND'),
(22, 349895, '3453549', 'Completed', 'VND'),
(23, 349895, '3453549', 'Completed', 'VND'),
(24, 349895, '3453549', 'Completed', 'VND'),
(25, 349895, '3453549', 'Completed', 'VND'),
(26, 349895, '3453549', 'Completed', 'VND'),
(27, 349895, '3453549', 'Completed', 'VND'),
(28, 349895, '3453549', 'Completed', 'VND'),
(29, 349895, '3453549', 'Completed', 'VND'),
(30, 349895, '3453549', 'Completed', 'VND'),
(31, 349895, '3453549', 'Completed', 'VND'),
(32, 349895, '3453549', 'Completed', 'VND'),
(33, 349895, '3453549', 'Completed', 'VND'),
(34, 349895, '3453549', 'Completed', 'VND'),
(35, 349895, '3453549', 'Completed', 'VND'),
(36, 349895, '3453549', 'Completed', 'VND'),
(37, 349895, '3453549', 'Completed', 'VND'),
(38, 349895, '3453549', 'Completed', 'VND'),
(41, 345, '345354', 'Completed', 'VND');

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
(36, 'strike-gundam', 1, 950000000, 10, '', 'Mô hình Strike Gundam', 'strike-gundam.jpg'),
(99, 'huấn hoa hòe', 1, 1600000000000, 1, 'eartyfghjkl;kijhgfdxxghjkl', 'asdfvgbhnjmk,ljhgfds', 'shin.jpg');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_level` char(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_level`, `username`, `email`, `password`, `user_photo`) VALUES
(1, '2', 'tendai', 'tendai@gmail.com', '1234', ''),
(2, '1', 'ashley', 'ashley@support.com', '1234', ''),
(3, '2', 'ashy', 'tendai@business.com', '1234', ''),
(5, '1', '1', '21111064263@hunre.edu.vn', '1', 'akaranger.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
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
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Cơ sở dữ liệu: `toy`
--
CREATE DATABASE IF NOT EXISTS `toy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `toy`;

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
(5, '327050451', '', '1', 'diend', 950000, 1, '950000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-22 17:12:54', '2023-10-30 06:34:32'),
(6, '327050451', '', '1', 'wizard', 950000, 1, '950000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-22 17:12:54', '2023-10-30 06:34:32'),
(7, '327050451', '', '1', 'fourze', 9500000, 1, '9500000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'fourze.jpg', '2023-10-22 17:12:54', '2023-10-30 06:34:32'),
(8, '327050451', '', '1', 'ooo', 9500000, 1, '9500000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'ooo.jpg', '2023-10-22 17:12:54', '2023-10-30 06:34:32'),
(9, '327050451', '', '1', 'drive', 950000000, 1, '950000000', '', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'drive.jpg', '2023-10-22 17:12:54', '2023-10-30 06:34:32'),
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
(36, '306691816', '', '1', 'double', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'double.jpg', '2023-10-29 15:34:06', '2023-10-30 02:33:32'),
(37, '559750249', '', '1', 'fourze', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'fourze.jpg', '2023-10-29 15:34:06', '2023-10-30 02:33:13'),
(38, '931428123', '', '1', 'double', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'double.jpg', '2023-10-29 15:37:29', '2023-10-29 15:37:29'),
(39, '931428123', '', '1', 'ooo', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'ooo.jpg', '2023-10-29 15:37:29', '2023-10-29 15:37:29'),
(40, '582859139', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:38:33', '2023-10-29 15:38:33'),
(41, '736203708', '', '1', 'diend', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-29 15:38:33', '2023-10-29 15:38:33'),
(42, '569140821', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:38:45', '2023-10-29 15:38:45'),
(43, '724395430', '', '1', 'diend', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-29 15:38:45', '2023-10-29 15:38:45'),
(44, '894787124', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-29 15:41:17', '2023-10-29 15:41:17'),
(47, '773709925', '', '1', 'diend', 950000, 1, '950000', 'vnpay', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-30 07:18:11', '2023-10-30 07:18:24'),
(48, '773709925', '', '1', 'wizard', 950000, 1, '950000', 'vnpay', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'wizard.jpg', '2023-10-30 07:18:11', '2023-10-30 07:18:24'),
(57, '523362774', '573995010', '1', 'decade', 9500000, 1, '9500000', 'vnpay', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-30 07:00:55', '2023-10-29 16:39:11'),
(64, '104502585', '', 'user', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-10-30 07:00:44', '2023-10-30 14:25:59'),
(65, '950181579', '', 'user', 'diend', 950000, 1, '950000', 'vnpay', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'diend.jpg', '2023-10-30 07:00:35', '2023-10-29 16:57:32'),
(66, '873039141', '', 'user', 'decade', 9500000, 1, '9500000', 'vnpay', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-10-29 16:57:32', '2023-10-30 07:00:27'),
(67, '230589572', '853655543', 'user', 'decade', 9500000, 1, '9500000', 'vnpay', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-10-30 06:55:19', '2023-10-29 17:01:03'),
(68, '772372714', '853655543', 'user', 'double', 9500000, 1, '9500000', 'vnpay', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'double.jpg', '2023-10-30 06:39:41', '2023-10-29 17:01:03'),
(69, '442467339', '823580663', 'user', 'diend', 950000, 2, '1900000', 'vnpay', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'diend.jpg', '2023-10-30 06:37:03', '2023-10-29 17:04:21'),
(70, '958814256', '190737161', 'user', 'double', 9500000, 1, '9500000', 'vnpay', 'Đã hoàn thành', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'double.jpg', '2023-10-29 17:08:03', '2023-10-30 02:32:48'),
(71, '356016843', '190737161', 'user', 'ooo', 9500000, 1, '9500000', 'vnpay', 'Đang giao hàng', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'ooo.jpg', '2023-10-30 06:36:54', '2023-10-29 17:08:03'),
(72, '931047478', '515744335', 'user', 'diend', 950000, 1, '950000', 'vnpay', 'Đã xác nhận', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'diend.jpg', '2023-10-30 06:03:03', '2023-10-30 02:14:51'),
(73, '350364984', '', '1', 'diend', 950000, 1, '950000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-10-30 07:19:35', '2023-10-30 07:19:35'),
(74, '168158374', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-10-30 07:19:35', '2023-10-30 07:19:35'),
(75, '406133938', '961493635', '1', 'double', 9500000, 1, '9500000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'double.jpg', '2023-10-30 07:20:40', '2023-10-30 07:20:40'),
(76, '675362669', '961493635', '1', 'ooo', 9500000, 1, '9500000', 'vnpay', 'Đã xác nhận', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'ooo.jpg', '2023-10-30 07:22:50', '2023-10-30 07:20:40'),
(77, '145023109', '194951186', 'user', 'decade', 9500000, 2, '19000000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'decade.jpg', '2023-11-01 09:16:56', '2023-11-01 09:16:56'),
(78, '354998806', '194951186', 'user', 'diend', 950000, 4, '3800000', 'vnpay', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n151234567', 'diend.jpg', '2023-11-01 09:16:56', '2023-11-01 09:16:56'),
(79, '273777960', '', '1', 'decade', 9500000, 1, '9500000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'decade.jpg', '2023-11-01 15:44:15', '2023-11-01 15:44:15'),
(80, '578663881', '', '1', 'diend', 950000, 2, '1900000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'diend.jpg', '2023-11-01 15:44:15', '2023-11-01 15:44:15'),
(81, '433938044', '', '1', 'drive', 750000, 1, '750000', 'Thanh toán trực tiếp', 'Đang xử lý', 'trung nguyen;0375716892\nThái bình;kiến xương;vũ công23456\n15', 'drive.jpg', '2023-11-01 15:44:15', '2023-11-01 15:44:15');

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
(12, '475850179', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-23 10:41:38'),
(13, '958814256', 'double', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 02:32:45'),
(14, '958814256', 'double', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 02:32:48'),
(15, '559750249', 'fourze', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 02:33:10'),
(16, '559750249', 'fourze', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 02:33:13'),
(17, '306691816', 'double', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 02:33:32'),
(20, '873039141', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 07:00:27'),
(21, '773709925', 'diend', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-30 07:18:24'),
(22, '773709925', 'diend', 1, 950000, 'Đã hoàn thành', 'VND', '2023-10-30 07:18:24'),
(23, '104502585', 'decade', 1, 9500000, 'Đã hoàn thành', 'VND', '2023-10-30 14:25:59');

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
(1, 'decade', 3, 9500000, 961, '- Sản phẩm nhựa cao cấp với độ sắc nét cao \r\n- Sản xuất bởi Bandai – Nhật Bản<br>\r\n- An toàn với trẻ em<br> \r\n- Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận<br> \r\n- Rèn luyện tính kiên nhẫn cho người chơi<br> \r\n- Phân phối bởi Saigon Gundam Store', '', 'decade.jpg'),
(2, 'diend', 3, 950000, 954, 'Shf Kamen rider Diend<br>\r\nNhà sản xuất: Bandai<br>\r\nTình trạng sản phẩm: New Seal', '', 'diend.jpg'),
(3, 'double', 3, 9500000, 7, '-Sản phẩm là ảnh thật 100%, không dùng ảnh mạng, tình trạng hình có sao chụp vậy\r\ncsm blade thiếu kiếm 2nd sound led tốt\r\ncsm Double bao gồm belt<br>\r\n-Các sản phẩm đa số là 2nd, đủ đồ, sound led to rõ<br>\r\n-Thêm vô giỏ hàng để xem phân loại sản phẩm\r\n', '', 'double.jpg'),
(4, 'ooo', 3, 9500000, 23, '[XẢ HÀNG] Mô hình đồ chơi chính hãng SHF Kamen Rider OOO Tajadol Combo - Kamen Rider OOO<br>\r\n» Series: Kamen Rider OOO - Kamen Rider Ozu<br>\r\n» Hãng sản xuất: Bandai Nhật Bản<br>\r\n» Tình trạng: 2nd no box, khớp ổn, đồ đạc như hình, cánh còn nguyên seal chưa sử dụng<br>\r\n» Chất liệu: Nhựa PVC, ABS<br>\r\n» Sản phẩm có tích hợp nhiều khớp và phụ kiện<br>\r\n» Độ tuổi phù hợp: 10+', '', 'ooo.jpg'),
(5, 'fourze', 3, 9500000, 25, '-Sản phẩm là ảnh thật 100%, không dùng ảnh mạng, tình trạng hình có sao chụp vậy<br>\r\n-Hàng 2nd đa số tình trạng 80-95%<br>\r\n-Hàng đầy đủ box sách, phụ kiện, không hư gãy ở fig<br>\r\n-Riêng module ko có base đi kèm', '', 'fourze.jpg'),
(6, 'wizard', 3, 950000, 0, 'Tên sản phẩm : Mô hình Kamen Rider wiard<br>\r\n• Chiều cao : 12cm<br>\r\n• Mô hình Action : có thể thay đổi nhiều tư thế <br>\r\n• Sản phẩm bao gồm các món phụ kiện như hình chụp với các mô hình<br>\r\n• Sản phẩm là hàng Bandai chính hãng<br>\r\n• Phù hợp với lứa tuổi 15+\r\n', '', 'wizard.jpg'),
(7, 'gaim', 3, 950000, 0, 'Mô hình đồ chơi chính hãng Kamen Rider Gaim Có âm thanh<br>\r\n» Series: Kamen Rider Gaim<br>\r\n» Hãng sản xuất: Bandai Nhật Bản<br>\r\n» Tình trạng: 2nd âm thanh hoạt động tốt<br>\r\n» Chất liệu: Nhựa PVC, ABS<br>\r\n» Sản phẩm có tích hợp nhiều khớp và phụ kiện<br>\r\n» Độ tuổi phù hợp: 10+', '', 'gaim.jpg'),
(8, 'drive', 3, 750000, 25, '[Đồ Chơi Chính Hãng] Mô Hình DX Revice Driver Chính Hãng Bandai<br>\r\n-Hãng sản xuất: Bandai<br>\r\n-Tình trạng: Fullbox, âm thanh và LED hoạt động tốt.<br> \r\n👉Cam kết hình thật 100% do shop tự chụp.<br>\r\n👉Shop cam kết các sản phẩm đăng bán là hàng chính hãng<br>\r\n👉 Bảo đảm đóng hàng CHUYÊN NGHIỆP, an toàn cho khách hàng.<br>  \r\n👉Chỉ nhận hoàn hàng nếu sai với mô tả sản phẩm.<br> ', '', 'drive.jpg'),
(9, 'ghost', 3, 850000, 28, 'Tên sản phẩm: Kamen Rider Ghost<br>\r\n-Tình trạng sản phẩm: new 100%, tách lẻ, no box<br<\r\n-Thương hiệu: Bandai Namco<br>\r\n-Xuất xứ: Nhật Bản<br> \r\n-Công dụng: giải trí, sưu tầm, trưng bày<br>\r\n-Sản phầm bao gồm: eyecon bạn chọn<br>\r\n-Kamen Rider Ghost (仮面ライダーゴースト Kamen Raidā Gōsuto?) là một series truyền hình Nhật Bản thuộc thể loại tokusatsu. Đây là phần thứ 17 của loạt phim Kamen Rider thời Heisei và là phần thứ 26 kể từ khi loạt phim bắt đầu.', '', 'ghost.jpg'),
(10, 'exaid', 3, 600000, 8, 'Tên sản phẩm:Siêu Nhân Kamen Rider Exaid<br>\r\n_ Sản phẩm nobox, tình trạng đẹp<br>\r\n_ Sản phẩm là hàng mới, chất lượng <br>\r\n_ Sản phẩm phù hợp với trẻ em từ 3 tuổi trở lên.<br>\r\n_ Quý khách vui lòng không đổi trả hàng với lí do không thích nữa!', '', 'exaid.jpg'),
(11, 'build', 3, 1725000, 9, 'Đồ Chơi Mô Hình Kamen Rider Build - Siêu Nhân Kiến Tạo<br>\r\n_ Sản phẩm là hàng đã ráp sẵn, tình trạng đẹp được bảo quản kỹ.<br>\r\n_ Mỗi sản phẩm bao gồm 1 nhân vật và các phụ kiện trên nhân vật.<br> \r\n_Quý Khách vui lòng xem kỹ hình trước khi quyết định đặt mua.<br>\r\n_ Chất liệu: nhựa PVC an toàn.<br>\r\n_ Sản phẩm phù hợp cho trẻ từ 5 tuổi trở lên.<br>\r\n_ Sản phẩm đã mua quý khách vui lòng không đổi trả với lí do không thích nữa!', '', 'build.jpg'),
(12, 'zi-o', 3, 2000000, 9, 'Mô hình đồ chơi Figure Kamen Rider Zi-O Bandai<br>\r\n- Sản phậm nhựa cao cấp với độ sắc nét cao<br>\r\n-Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng<br>\r\n-An toàn với trẻ em<br>\r\n-Phân phối bởi Mô Hình GDC', '', 'zi-o.jpg'),
(13, 'zero-one', 3, 1000000, 10, 'Mô hình đồ chơi kamem rider zero-one<br>\r\n-Sản phẩm là hàng Sodo Candytoy chính hãng Bandai<br>\r\n-Sản phẩm bao gồm các món phụ kiện như hình chụp cùng mô hình nhân vật đó.<br> \r\n-Sản phẩm có chiều cao dao động khoảng 11 cm.<br>\r\n-Phù hợp cho trẻ em từ 15 tuổi trở lên.', '', 'zero-one.jpg'),
(14, 'saber', 3, 2500000, 10, 'Mô Hình Đồ Chơi Chính Hãng Kamen Rider Saber<br>\r\n-Gồm nhiều sản phẩm mô hình Sodo trong phần phim Kamen Rider Hiệp sĩ mặt nạ kiếm\r\nHàng chính hãng new 100%<br>\r\n-Tháo ra là lắp ráp ngay.<br> \r\n-Ảnh chụp là ảnh thực tế. Ảnh sao hàng vậy nên các bạn cứ yên tâm nha<br>\r\n-Hàng chất lượng tốt giá cả phải chăng, rất thích hợp để trưng bày.', '', 'saber.jpg'),
(15, 'revice', 3, 10000000, 10, '[Đồ Chơi Chính Hãng] Mô Hình DX Revice Chính Hãng Bandai<br>\r\n-Hãng sản xuất: Bandai<br>\r\n-Tình trạng: Fullbox, âm thanh và LED hoạt động tốt.<br>\r\n👉Cam kết hình thật 100% do shop tự chụp.\r\n👉Shop cam kết các sản phẩm đăng bán là hàng chính hãng<br>\r\n👉 Bảo đảm đóng hàng CHUYÊN NGHIỆP, an toàn cho khách hàng.<br>  \r\n👉Chỉ nhận hoàn hàng nếu sai với mô tả sản phẩm.<br> ', '', 'revice.jpg'),
(16, 'kuuga', 3, 450000, 10, 'Mô Hình của thương hiệu Bandai nổi tiếng tại Nhật<br>\r\n-chiều cao : 17cm<br>\r\n-Chất liệu: nhựa<br>\r\n-Tình trạng: Mới', '', 'kuuga.jpg'),
(17, 'agito', 3, 860000, 10, '🌟 Mô Hình Kamen Rider agito Chogokin Giáp Kim Loại<br>\r\n🌟 Phần giáp được làm bằng kim loại và có thể tháo ra<br>\r\n🌟 Hãng Bandai<br>\r\n🌟 Chất liệu nhựa & kim loại<br>\r\n🌟 Chiều Cao: 13-14cm<br>\r\n🌟 Tình trạng như trong ảnh<br>\r\n🌟 Cam kết: giao đúng mẫu<br>\r\n- Mọi thắc mắc về sản phẩm vui lòng liên hệ shop...', '', 'agito.jpg'),
(18, 'ryuki', 3, 8000000, 9, '🌟 Mô Hình Kamen Rider ryuki Giáp Kim Loại<br>\r\n🌟 Phần giáp được làm bằng kim loại và có thể tháo ra<br>\r\n🌟 Hãng Bandai<br>\r\n🌟 Chất liệu nhựa & kim loại<br>\r\n🌟 Chiều Cao: 13-14cm<br>\r\n🌟 Tình trạng như trong ảnh<br>\r\n🌟 Cam kết: giao đúng mẫu<br>\r\n- Mọi thắc mắc về sản phẩm vui lòng liên hệ shop...', '', 'ryuki.jpg'),
(19, 'goku', 4, 2100000, 40, 'Mô hình Goku <br>\r\n-siêu saiyan to cao khổng lồ cao khoang 40 cm - dragon ball<br>\r\n-Hàng to cao, hơi nhẹ so với kích thước vì bên trong rỗng ruột.<br>\r\n-phù hợp với trẻ từ 10 tuổi\r\n', '', 'goku.jpg'),
(20, 'vegeta', 4, 4000000, 40, 'Mô hình đồ chơi VEGETA<br>\r\n- Chất liệu : nhựa tổng hợp<br>\r\n- Chiều cao: 24 cm<br>\r\n- Độ tuổi: từ 2 tuổi trở lên<br>\r\n- An toàn cho trẻ<br>\r\n-Cần tư vấn về sản phẩm thì nhắn tin ngay cho shop và đừng quên đánh giá sản phẩm để được nhận voucher khuyến mãi của shop nhé ^^<br>\r\n❤ Thank You ❤', '', 'vegeta.jpg'),
(21, 'gohan', 4, 9000000, 40, 'Thương hiệu mới và chất lượng cao!!!<br>\r\n☞☞☞Thông tin sản phẩm☜☜☜<br>\r\n-Chất liệu: PVC<br>\r\n-Chiều cao: khoảng 22-30cm<br>\r\n-Màu sắc: Như hình<br>\r\n-Mô hình:  Gohan<br>\r\n-Đóng gói: Hộp màu / hộp các tông\r\n', '', 'gohan.jpg'),
(22, 'trunks', 4, 550000, 40, '🔥 Mô hình Dragon Trunks 2 đầu thay thế<br>\r\n✅Chiếu Cao :48cm<br>\r\n✅Trọng Lượng ~ 2900 Gram<br> \r\n✅Phụ kiện đi kèm : 2 đầu<br>\r\n✅Chất liệu : Nhựa PVC cao cấp<br> \r\n✅Vỏ hộp kèm sản phẩm : Full Box - Hộp carton<br>\r\n✅ Nhân vật : TRUNKS DRAGON BALL<br>\r\n✅FIGURE ANIME  : MÔ HÌNH DRAGON BALL , 7 VIÊN NGỌC RỒNG\r\n', '', 'trunks.jpg'),
(23, 'piccolo', 4, 5000000, 40, 'MÔ hình piccolo<br>\r\n-Cảnh báo: không<br>\r\n-Kích thước: 16,5<br>\r\n-Loại con rối: mô hình<br>\r\n-Điều khiển từ xa: Không<br>\r\n-Phụ kiện người lính: Thành phẩm người lính<br>\r\n-Theo Nguồn hoạt hình: JAPAN<br>\r\n-Mức độ hoàn thành: Thành phẩm<br>\r\n-Số sê-ri Mfg: Mô hình<br>\r\n-Chất liệu: PVC<br>\r\n-Chủ đề: Phim & TV<br>\r\n-Giới tính: Unisex<br>\r\n-Loại sản phẩm: Mô hình<br>\r\n-Thương hiệu: Bandai<br>\r\n-Độ tuổi khuyến nghị: 18 +, 14 + y, 6-12y, 3-6y<br>\r\n-Xuất xứ: Trung Quốc đại lục', '', 'piccolo.jpg'),
(24, 'frieza', 4, 6450000, 40, 'MÔ HÌNH ĐỒ CHƠI FRIEZA 27CM CHUẨN BỊ TUNG CHIÊU DRAGON BALL<br>\r\n✅ Chất liệu: Nhựa cao cấp<br>\r\n✅ Độ tuổi: Trên 3 tuổi<br>\r\n✅ Màu sắc: Vàng, tím<br>\r\n✅ Kích thước: 11 x 18 x 27cm<br>\r\n✅ Chức năng: Mô phỏng, sưu tập.<br>\r\n🛒 Tình trạng: Mới, chưa qua sử dụng<br>\r\n🛒 Thích hợp cho trẻ em và người sưu tập mô hình.', '', 'frieza.jpg'),
(25, 'akaranger', 2, 3540000, 20, 'THÔNG TIN SẢN PHẨM:<br>\r\n-Tên sản phẩm: Mô hình Akaranger<br>\r\n-Độ tuổi: Dành cho các bé từ 1-6 tuổi.<br>\r\n-Phù hợp: Dành cho cả bé trai và bé gái.<br>\r\n-Chất liệu: Nhựa ABS cao cấp an toàn cho bé và cả gia đình.<br>\r\nƯU ĐIỂM CỦA Mô hình Akaranger<br>\r\n-Giúp bé và gia đình giải trí sau một ngày dài mệt mỏi.<br>\r\n-Giúp các bé hạn chế chơi điện tử trên điện thoại.<br>\r\n-Dùng để trưng bày trong phòng.', '', 'akaranger.jpg'),
(26, 'gokaired', 2, 10000000, 20, 'Tên sản phẩm: gokaired<br>\r\n•Thương hiệu : chính hãng Bandai (Nhật Bản)<br>\r\n•Năm sản xuất :2023<br>\r\n•Tình trạng : như hình còn khá mới chỉ thiếu 2 part sau không ảnh hưởng tổng thể ,khớp ráp tốt<br> \r\n•Lưu ý:sản phẩm là hàng trưng bày đã qua sử dụng', '', 'gokaired.jpg'),
(27, 'gaored', 2, 7000000, 20, 'Mô hình gaored<br>\r\n-Đặc điểm kỹ thuật: 17cm<br>\r\n-Chất liệu: PVC<br>\r\n-Loại cấu hình 3C: đồ chơi khác dưới 14 tuổi<br>\r\n-Độ tuổi áp dụng: Vị thành niên (6-34 tuổi<br>\r\n-Hàng bán tại shop đều là khuôn làm thủ công, tay nghề phức tạp và nhiều loại phụ tùng. Mặc dù các sản phẩm ở shop này đều có chất lượng tốt và rẻ nhưng mọi thứ trên thế giới vẫn có sai sót và không thể hoàn hảo. Nó chỉ bán hàng nhưng không phải lợi nhuận. Nếu bạn thích nó, đừng bỏ lỡ nó! Tôi dám không dám nói rằng mỗi món bảo tàng đều rất tinh tế, nhưng tôi dám nói rằng mỗi kho báu của tôi đều rất đáng đồng tiền! Hy vọng cầu toàn sẽ tha thứ cho tôi! Cảm ơn các bạn đã ủng hộ<br>\r\n-Người hâm mộ anime thích cửa hàng của chúng tôi nên nhớ thu thập nó cho lần mua tiếp theo.', '', 'gaored.jpg'),
(28, 'dragonranger', 2, 2100000, 20, 'Mô hình đồ chơi dragonranger<br>\r\n- Sản phẩm là hàng nobox không đi kèm weapon và phụ kiện.<br>\r\n- Tất cả sản phầm đều là chính hãng được nhập khẩu từ Nhật Bản 100%.<br>\r\n-Cam kết đảm bảo chất lượng an toàn, phù hợp với mọi đối tượng <br>\r\n-Với 1 số sản phẩm là 2nd sẽ không đảm bảo tính toàn mỹ của sản phẩm, để biết thêm chi tiết vui lòng ib shop để nhận phản hồi sớm nhất<br>\r\n-Sản phẩm đã đặt hàng sẽ shop sẽ từ chối hoàn lại với bất cứ lỗi nào không đến từ shop<br>\r\n-Sản phẩm KHÔNG KÈM PIN', '', 'dragonranger.jpg'),
(29, 'dekamaster', 2, 6500000, 20, 'MÔ hình đồ chơi dekamaster<br>\r\n- cao 17 cm<br>\r\n- chất liệu PVC<br>\r\n- hàng chính hãng hoàn tiền khi mất hàng<br>\r\n- Shf Gokai Silver nobox đủ phụ kiện<br>\r\n- Phù hợp trưng bàn học, bàn làm việc', '', 'dekamaster.jpg'),
(30, 'gokaired', 2, 4650000, 20, 'Tên sản phẩm: gokaired<br>\r\n•Thương hiệu : chính hãng Bandai (Nhật Bản)<br>\r\n•Năm sản xuất :2023<br>\r\n•Tình trạng : như hình còn khá mới chỉ thiếu 2 part sau không ảnh hưởng tổng thể ,khớp ráp tốt <br>\r\n•Lưu ý:sản phẩm là hàng trưng bày đã qua sử dụng', '', 'gokaired.jpg'),
(31, 'rx-78-2', 1, 9500000, 10, 'Mô hình rx-78-2<br>\r\n- Xuất xứ: Trung Quốc<br>\r\n- Dòng: EG 1/144<br>\r\n-Hộp sản phẩm Gunpla bao gồm: nhiều khung nhựa (Runner) chứa các thành phần (Part), một tập sách nhỏ (Manual) hướng dẫn cách lắp ráp và các phụ kiện liên quan.<br>\r\n- Sản phẩm nhựa cao cấp, độ sắc nét cao.<br>\r\n- Mô hình có các khớp cử động linh hoạt theo ý muốn.<br>\r\n- An toàn với trẻ em.<br>\r\n- Phát triển tính sáng tạo, rèn luyện tính kiên nhẫn.<br>\r\n- Sản phẩm phù hợp với người lớn và trẻ em trên 6 tuổi.', '', 'rx-78-2.jpg'),
(32, 'zaku-ii', 1, 2300000, 10, 'Tên sản phẩm:  Zaku-ii - Mô hình lắp ráp, đồ chơi<br>\r\n-Thương hiệu: Bandai <br>\r\n-Xuất xứ: Nhật Bản<br>\r\n-Series: Mobile Suit Gundam<br> \r\nHộp sản phẩm bao gồm các tấm runner nhựa. Người chơi cần cắt các phần trên runner để lắp thành mô hình theo hướng dẫn đi kèm<br>\r\n-Hình ảnh chỉ mang tính minh họa.<br>\r\n\r\n-Kích thước hộp - cân nặng: 21x31x7 400g', '', 'zaku-ii.jpg'),
(33, 'gundam-exia', 1, 2740000, 10, 'Mô hình Gundam-exia<br>\r\n- Sản phậm nhựa cao cấp với độ sắc nét cao<br>\r\n-An toàn với trẻ em<br>\r\n-Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận<br>\r\n-Rèn luyện tính kiên nhẫn cho người chơi<br>\r\n\r\n-PHIÊN BẢN : HG 1/144<br>\r\n-Chiều cao: 13-16cm<br>	\r\n-PHÂN LOẠI SP : mô hình<br?\r\n\r\n-Mô hình Gundam hay Gunpla, không phải là loại đồ chơi phục vụ cho nhu cầu cơ bản “chơi đồ chơi” của hầu hết các bé trai hay các cậu trai ở độ tuổi đi học (cấp 1 hoặc cấp 2).<br>\r\n-Nó được xếp vào loại mô hình, nghĩa là nó có sự mô phỏng gần như 99% so với thiết kế thật. Một chiếc xe mô hình sẽ giống xe thật đến 100% và phục vụ trưng bày hay mô phỏng chứ không như chiếc xe đồ chơi có thể đập phá bẻ ném.\r\n', '', 'gundam-exia.jpg'),
(34, 'gundam-barbatos', 1, 3280000, 10, 'Mô hình gundam-barbatos<br>\r\n-Dòng mô hình: HG<br>\r\n-Cho dù nó cần được lắp ráp: Đã lắp ráp<br>\r\n-Tỷ lệ: 1: 144<br>\r\n-Nhóm tuổi áp dụng: Trên 14 tuổi<br>\r\n-Vai trò cơ thể: Tự do', '', 'gundam-barbatos.jpg'),
(35, 'unicorn-gundam', 1, 2150000, 10, 'Mô hình unicorn-gundam<br>\r\n- Sản phậm nhựa cao cấp với độ sắc nét cao<br>\r\n- An toàn với trẻ em<br>\r\n- Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận<br>\r\n- Rèn luyện tính kiên nhẫn cho người chơi<br>\r\n- Thông tin cơ bản :<br>\r\no Mô hình lắp ráp (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner. Mỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Mô hình lắp ráp trong hộp và phần hướng dẫn cách lắp ráp.\r\n', '', 'unicorn-gundam.jpg'),
(36, 'strike-gundam', 1, 10000000, 10, 'Mô hình strike-gundam<br>\r\n-Phiên bản: 1/144<br>\r\n-Chiều cao: 13-16 cm<br>\r\n-Thành Phần:\r\nCác runner và phụ kiện liên quan\r\nSách hướng dẫn các bước lắp ghép<br>\r\n--Đặc điểm sản phẩm:\r\nĐược sản xuất bằng loại nhựa ABS, màu sắc bóng đẹp, bắt mắt, an toàn tuyệt đối cho trẻ em<br>\r\n-Những thiết kế sản phẩm vô cùng thông minh, sáng tạo, tinh tế<br>\r\n-Kết nối các mảnh nhựa tạo thành mô hình Gundam vô cùng đẹp mắt<br>\r\nThông số kỹ thuật: <br>\r\n--Xuất xứ thương hiệu: Trung Quốc<br>\r\n--Độ tuổi: trên 6 tuổi<br>\r\n--Chất liệu: Nhựa cao cấp ABS, an toàn cho trẻ<br>\r\n--Sản xuất tại: Trung Quốc<br>\r\n--Năm sản xuất: 2021<br>\r\n--Sản phẩm bảo vệ môi trường, không độc hại', '', 'strike-gundam.jpg'),
(99, '123', 16, 780000, 24567, '', '', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif'),
(100, 'big-mom', 17, 5675440, 98668, 'Mô hình One Piece Tứ Hoàng Big Mom<br>\r\n✅Chiếu Cao : 24cm<br>\r\n\r\n✅Trọng Lượng : 1500 Gram\r\n<br>\r\n\r\n✅Phụ kiện đi kèm : 1 thân sản phẩm + 1 kiếm + 1 vương miện<br>\r\n\r\n✅Chất liệu : Nhựa PVC cao cấp<br> \r\n\r\n✅Vỏ hộp kèm sản phẩm : Có hộp , hộp đẹp chắc chắn<br>\r\n\r\n✅ Nhân vật : BIG MOM<br>\r\n\r\n✅FIGURE ANIME  : ONE PIECE', '678', 'big-one.jpg');

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
(4, '562497643', '1', 'wizard', '', '5', 'sưdefrtyuiuytred', '2023-10-29 14:38:26'),
(5, '104502585', 'user', 'decade', 'drive.jpg', '5', 'ưertyuiytyrewq', '2023-10-30 15:38:13'),
(6, '958814256', 'user', 'double', 'Screenshot 2023-09-30 150328.png', '31', 'ưqertyutrew', '2023-10-30 16:16:26'),
(7, '773709925', '1', 'diend', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif', '31', '12345678iujhygtfrd', '2023-11-02 06:29:17'),
(8, '569738398', '1', 'diend', 'exaid.jpg', '21', 'swdsfvbnhgfdzsewSD', '2023-11-02 06:29:39'),
(9, '349959494', '1', 'diend', '', '11', '', '2023-11-02 06:29:58'),
(10, '327050451', '1', 'diend', '', '01', '', '2023-11-02 06:41:09'),
(11, '306691816', '1', 'double', '', '01', '', '2023-11-02 06:40:51');

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
(2, '1', 'user', 'trung', 'nguyen', 'nam', 'tapnham15022@gmail.com', '1234', 'agito.jpg'),
(5, '1', '1', 'trung', 'nguyen1', 'nam', 'tapnham15402@gmail.com', '1', 'dragonranger.jpg'),
(6, '2', '2', 'trung1', 'nguyen', 'nam', 'tapnham1502@gmail.com', '1', 'diend.jpg'),
(7, '1', '12', 'trungq', 'trung', 'nam', 'lemann78783457@gmail.com', '1', 'decade.jpg'),
(8, '1', 'tendai1', 'asdfgh', 'asdfghjkl', 'nu', 'sdfghjk@dsfghj.sdfgh', '1234', 'shin.jpg'),
(9, '1', 'ashy1234', 'wesdrtfhghuijok', 'nguyen', 'nu', 'tapnham150245@gmail.com', '', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif'),
(14, '1', '123', 'trung1', 'nguyen', 'nam', 'tapnham150we2@gmail.com', '1234', 'drive.jpg'),
(15, '1', '34', 'sdfgh', 'llkjhg', 'nam', 'cvhnn@gmail.com', '1', '_a616f20d-5e2a-414b-864f-5af7f1886ed9.jfif'),
(16, '2', 'admin', 'trung', 'nguyen1', '', 'tapnham15dwefrgth02@gmail.com', '1', 'exaid.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Cơ sở dữ liệu: `toy1`
--
CREATE DATABASE IF NOT EXISTS `toy1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `toy1`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
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

INSERT INTO `address` (`id`, `fullname`, `phone`, `province`, `district`, `ward`, `address`) VALUES
(99, 'trung nguyen', '0375716892', 'Thái bình', 'kiến xương', 'vũ công', '15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
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
(4, 'Đồ chơi Dragon ball');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_level` char(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_level`, `username`, `first_name`, `last_name`, `email`, `password`, `user_photo`) VALUES
(1, '2', 'tendai', 'h', 'j', 'tendai@gmail.com', '1234', ''),
(2, '1', 'ashley', 'h', 'j', 'ashley@support.com', '1234', ''),
(3, '2', 'ashy', 'h', 'j', 'tendai@business.com', '1234', ''),
(4, '1', '1', 'h', 'j', 'tendai@business.com', '1234', ''),
(5, '1', 'user', 'trung1', 'nguyen', 'tapnham1502@gmail.com', '1234', '');

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
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Cơ sở dữ liệu: `zalopay_demo`
--
CREATE DATABASE IF NOT EXISTS `zalopay_demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zalopay_demo`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--
-- Error reading structure for table zalopay_demo.orders: #1932 - Table &#039;zalopay_demo.orders&#039; doesn&#039;t exist in engine
-- Error reading data for table zalopay_demo.orders: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `zalopay_demo`.`orders`&#039; at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `refunds`
--
-- Error reading structure for table zalopay_demo.refunds: #1932 - Table &#039;zalopay_demo.refunds&#039; doesn&#039;t exist in engine
-- Error reading data for table zalopay_demo.refunds: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `zalopay_demo`.`refunds`&#039; at line 1
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
