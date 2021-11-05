-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 02:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobo_pedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_img`, `created_at`) VALUES
(13, 'Samsung-1', 'a924cfdce5d5360a811f96c977fb4baa.png', '2021-10-27 18:58:29'),
(14, 'Nokia', 'f635100c36ff036c1d053aa7be6fa231.jpg', '2021-10-27 18:46:06'),
(15, 'Real ME', 'deee16a104a8a40b8234ad88f7e97ec7.jpg', '2021-10-29 00:45:46'),
(16, 'Huwaei', '81f0a45a12250dcd60e67c81b67ecc70.jpg', '2021-10-29 00:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(10) NOT NULL,
  `phone_name` varchar(100) NOT NULL,
  `phone_brand` varchar(120) NOT NULL,
  `phone_os` varchar(100) NOT NULL,
  `phone_screen` varchar(100) NOT NULL,
  `phone_res` varchar(100) NOT NULL,
  `phone_ram` varchar(100) NOT NULL,
  `phone_rom` varchar(100) NOT NULL,
  `phone_cam_primary` varchar(100) NOT NULL,
  `phone_cam_secondary` varchar(100) NOT NULL,
  `phone_battery` varchar(100) NOT NULL,
  `phone_img` varchar(100) NOT NULL,
  `phone_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `phone_name`, `phone_brand`, `phone_os`, `phone_screen`, `phone_res`, `phone_ram`, `phone_rom`, `phone_cam_primary`, `phone_cam_secondary`, `phone_battery`, `phone_img`, `phone_created_at`) VALUES
(5, 'Realme C21', '14', 'Android 10, Realme UI', '6.5\" IPS LCD', ' 720 x 1600 pixels, 20:9 ratio (~270 ppi density)', '4 GB', '8 GB', 'Triple: 13 MP, f/2.2, 26mm (wide), 1/3.06\", 1.12m, PDAF 2 MP, f/2.4, (macro) 2 MP, f/2.4, (depth)', '5 MP, f/2.2, (wide), 1/5.0\", 1.12m', ' 5000mAh Li-Polymer (non-removable)', '7e2f6e29820069ef8a017ff042260b72.jpg', '2021-11-04 23:45:56'),
(6, 'Nokia 3.4', '16', 'Android 10', '6.39\" IPS LCD, 400 nits (typ)', '720 x 1560 pixels, 19.5:9 ratio (~269 ppi density)', '4 GB', '64 GB', 'Triple: 13 MP, (wide), PDAF 5 MP, (ultrawide) 2 MP, (depth)', '8 MP, (wide)', '4000mAh Li-Polymer (non-removable)', '1dc5dabeab8c870b9f8ce273b19dd771.jpg', '2021-11-04 23:45:37'),
(7, 'Samsung', '13', 'KI OS', '64', '1080', '4', '64', '8', '2', '4500', 'f65c9bc2fa05eb79082705b4993db64e.jpg', '2021-11-04 23:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_content` text NOT NULL,
  `featured_photo` varchar(120) NOT NULL,
  `category` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_content`, `featured_photo`, `category`, `user_id`, `created_at`) VALUES
(1, 'What is Lorem Ipsum? ', '<h1>SQL | ALTER (RENAME)</h1>\r\n\r\n<ul>\r\n	<li>Difficulty Level :&nbsp;<a href=\"https://www.geeksforgeeks.org/basic/\">Basic</a></li>\r\n	<li>Last Updated :&nbsp;22 Mar, 2021</li>\r\n</ul>\r\n\r\n<p>Sometimes we may want to rename our table to give it a more relevant name. For this purpose we can use&nbsp;<strong>ALTER TABLE</strong>&nbsp;to rename the name of table.</p>\r\n\r\n<p><em>*Syntax may vary in different databases.</em>&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>Syntax(Oracle,MySQL,MariaDB):</strong><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME TO new_table_name;</strong></pre>\r\n\r\n<p>Columns can be also be given new name with the use of&nbsp;<strong>ALTER TABLE</strong>.</p>\r\n\r\n<p><strong>Syntax(MySQL, Oracle):</strong></p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME COLUMN old_name TO new_name;</strong></pre>\r\n\r\n<p><strong>Syntax(MariaDB):</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>CHANGE COLUMN old_name TO new_name;</strong></pre>\r\n', '38fd5d6fed059be5b775382bc7f784d4.png', '0', 0, '2021-09-13 05:51:35'),
(2, 'What is Lorem Ipsum? ', '<h1>SQL | ALTER (RENAME)</h1>\r\n\r\n<ul>\r\n	<li>Difficulty Level :&nbsp;<a href=\"https://www.geeksforgeeks.org/basic/\">Basic</a></li>\r\n	<li>Last Updated :&nbsp;22 Mar, 2021</li>\r\n</ul>\r\n\r\n<p>Sometimes we may want to rename our table to give it a more relevant name. For this purpose we can use&nbsp;<strong>ALTER TABLE</strong>&nbsp;to rename the name of table.</p>\r\n\r\n<p><em>*Syntax may vary in different databases.</em>&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>Syntax(Oracle,MySQL,MariaDB):</strong><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME TO new_table_name;</strong></pre>\r\n\r\n<p>Columns can be also be given new name with the use of&nbsp;<strong>ALTER TABLE</strong>.</p>\r\n\r\n<p><strong>Syntax(MySQL, Oracle):</strong></p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME COLUMN old_name TO new_name;</strong></pre>\r\n\r\n<p><strong>Syntax(MariaDB):</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>CHANGE COLUMN old_name TO new_name;</strong></pre>\r\n', 'ff9d37cabf63f89537ef0c1f1973bf40.png', '0', 0, '2021-09-13 05:53:07'),
(3, 'Where can I get some? ', '<h1>SQL | ALTER (RENAME)</h1>\r\n\r\n<ul>\r\n	<li>Difficulty Level :&nbsp;<a href=\"https://www.geeksforgeeks.org/basic/\">Basic</a></li>\r\n	<li>Last Updated :&nbsp;22 Mar, 2021</li>\r\n</ul>\r\n\r\n<p>Sometimes we may want to rename our table to give it a more relevant name. For this purpose we can use&nbsp;<strong>ALTER TABLE</strong>&nbsp;to rename the name of table.</p>\r\n\r\n<p><em>*Syntax may vary in different databases.</em>&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>Syntax(Oracle,MySQL,MariaDB):</strong><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME TO new_table_name;</strong></pre>\r\n\r\n<p>Columns can be also be given new name with the use of&nbsp;<strong>ALTER TABLE</strong>.</p>\r\n\r\n<p><strong>Syntax(MySQL, Oracle):</strong></p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME COLUMN old_name TO new_name;</strong></pre>\r\n\r\n<p><strong>Syntax(MariaDB):</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>CHANGE COLUMN old_name TO new_name;</strong></pre>\r\n', '71bc93923544eef7866b488ceb3affca.png', '0', 0, '2021-09-13 05:53:55'),
(5, 'What is Lorem Ipsum?What is Lorem Ipsum? ', 'Basic\n\nLast Updated : 22 Mar, 2021\nSometimes we may want to rename our table to give it a more relevant name. For this purpose we can use ALTER TABLE to rename the name of table.\n\n*Syntax may vary in different databases. \n \nSyntax(Oracle,MySQL,MariaDB):\n\n\nALTER TABLE table_name\nRENAME TO new_table_name;\nColumns can be also be given new name with the use of ALTER TABLE.\n\nSyntax(MySQL, Oracle):\n\nALTER TABLE table_name\nRENAME COLUMN old_name TO new_name;\nSyntax(MariaDB):', '8e9b5a809fe1485d2382e70e3145d2f6.png', '0', 0, '2021-09-13 08:43:00'),
(6, 'SQL | ALTER (RENAME) ', '<p>Basic Last Updated :&nbsp;22 Mar, 2021 Sometimes we may want to rename our table to give it a more relevant name. For this purpose we can use&nbsp;ALTER TABLE&nbsp;to rename the name of table. Syntax may vary in different databases.&nbsp; &nbsp; Syntax(Oracle,MySQL,MariaDB): ALTER TABLE table_name RENAME TO new_table_name; Columns can be also be given new name with the use of&nbsp;ALTER TABLE. Syntax(MySQL, Oracle): ALTER TABLE table_name RENAME COLUMN old_name TO new_name; Syntax(MariaDB):</p>\r\n', '1135c8cd8ce0a9500e9978824a637480.png', 'Blog', 0, '2021-09-19 05:04:39'),
(8, 'My Post Number two ', '<p>Basic</p>\r\n\r\n<ul>\r\n	<li>Last Updated :&nbsp;22 Mar, 2021</li>\r\n</ul>\r\n\r\n<p>Sometimes we may want to rename our table to give it a more relevant name. For this purpose we can use&nbsp;<strong>ALTER TABLE</strong>&nbsp;to rename the name of table.</p>\r\n\r\n<p><em>*Syntax may vary in different databases.</em>&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>Syntax(Oracle,MySQL,MariaDB):</strong><br />\r\n&nbsp;</p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME TO new_table_name;</strong></pre>\r\n\r\n<p>Columns can be also be given new name with the use of&nbsp;<strong>ALTER TABLE</strong>.</p>\r\n\r\n<p><strong>Syntax(MySQL, Oracle):</strong></p>\r\n\r\n<pre>\r\n<strong>ALTER TABLE table_name</strong>\r\n<strong>RENAME COLUMN old_name TO new_name;</strong></pre>\r\n\r\n<p><strong>Syntax(MariaDB):</strong></p>\r\n', '024f2e947b757ea1932a047e027c7421.png', 'news', 0, '2021-09-13 08:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`category_id`, `category_name`, `user_id`, `created_at`) VALUES
(2, 'tech001', 0, '2021-10-24 05:05:21'),
(3, 'info', 0, '2021-09-13 08:41:01'),
(4, 'news', 0, '2021-09-13 08:41:05'),
(5, 'Blog-1', 0, '2021-09-19 05:21:37'),
(7, 'tech-1', 0, '2021-10-29 00:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_username`, `user_img`, `user_pass`, `created_at`) VALUES
(1, 'admin', 'mahmud.bubt.150@gmail.com', 'admin', '1.jpg', '123', '2021-10-26 23:05:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
