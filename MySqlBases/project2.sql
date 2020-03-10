-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 10 2020 г., 12:27
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Telephone', 'telephone', 0, 'Telephone', 'Telephone'),
(2, 'Iphone', 'iphone', 1, 'Iphone', 'Iphone'),
(3, 'Samsung', 'samsung', 1, 'Samsung', 'Samsung'),
(4, 'Xiaomi', 'xiaomi', 1, 'Xiaomi', 'Xiaomi'),
(5, 'Nokia', 'nokia', 1, 'Nokia', 'Nokia');

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `Symbol_left` varchar(10) NOT NULL,
  `Symbol_right` varchar(10) NOT NULL,
  `value` float NOT NULL,
  `base` smallint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `title`, `code`, `Symbol_left`, `Symbol_right`, `value`, `base`) VALUES
(1, 'Доллар', 'USD', '', '$', 1, 1),
(2, 'ЕВРО', 'EUR', 'E', '', 0.8, 0),
(3, 'Рубль', 'RUB', '', 'руб', 65, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float DEFAULT 0,
  `old_price` float NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_img.jpg',
  `hit` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `description`, `img`, `hit`) VALUES
(1, 3, 1, 'Samsung galaxy s10', 'samsung-galaxy-s10', 'Характеристики: 1000gb', 1050, 1150, '1', 'Sumsung galaxy 10', 'lorem', 'samsung_galaxy_s10.jpeg', '0'),
(2, 3, 1, 'Samsung galaxy s9', 'samsung-galaxy-s9', NULL, 730, 0, '1', NULL, '', 'samsung_galaxy_s9.png', '0'),
(3, 3, 1, 'Samsung galaxy s8', 'samsung-galaxy-s8', NULL, 250, 320, '1', NULL, NULL, 'samsung_galaxy_s8.jpeg', '0'),
(4, 2, 2, 'Iphone 8 plus', 'iphone-8-plus', NULL, 720, 800, '0', NULL, NULL, 'iphone_8_plus.jpeg', '0'),
(5, 2, 2, 'Iphone XS', 'iphone-xs', NULL, 1100, 1440, '1', NULL, NULL, 'iphone_xs.jpeg', '0'),
(6, 2, 2, 'Iphone X', 'iphone-x', NULL, 1110, 0, '1', NULL, NULL, 'iphone_x.png', '0'),
(7, 4, 3, 'Xiaomi Mi 9T Pro', 'xiaomi-mi-9t-pro', NULL, 410, 500, '1', NULL, NULL, 'xiaomi_mi_9t_pro.jpeg', '0'),
(8, 4, 3, 'Xiaomi Mi 9', 'xiaomi-mi-9', NULL, 480, 0, '1', NULL, NULL, 'xiaomi_mi_9.jpeg', '0'),
(9, 4, 3, 'Xiaomi Mi 8', 'xiaomi-mi-8', NULL, 350, 440, '0', NULL, NULL, 'xiaomi_mi_8.png', '0'),
(10, 5, 4, 'Nokia 9 PureView', 'nokia-9-pureview', NULL, 610, 0, '1', NULL, NULL, 'nokia_9_pureview.png', '0'),
(11, 5, 4, 'Nokia 8.1', 'nokia-8.1', NULL, 410, 600, '1', NULL, NULL, 'nokia_8.1.jpeg', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `productColor`
--

CREATE TABLE `productColor` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `coefficient` float(11,6) DEFAULT 1.000000,
  `status` int(1) DEFAULT 1,
  `order` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productColor`
--

INSERT INTO `productColor` (`id`, `product_id`, `color`, `coefficient`, `status`, `order`) VALUES
(1, 1, 'Black', 1.000000, 1, 0),
(2, 1, 'Red', 1.100000, 1, 2),
(3, 1, 'Silver', 0.950000, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `productComplect`
--

CREATE TABLE `productComplect` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `complect` varchar(255) DEFAULT NULL,
  `coefficient` float(11,6) DEFAULT 1.000000,
  `status` int(1) DEFAULT 1,
  `order` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productComplect`
--

INSERT INTO `productComplect` (`id`, `product_id`, `complect`, `coefficient`, `status`, `order`) VALUES
(1, 1, 'Minimum', 0.800000, 1, 1),
(2, 1, 'Standart', 1.000000, 1, 0),
(3, 1, 'Maximum', 1.200000, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(11) NOT NULL,
  `related_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, '6,7,10'),
(2, '5,8'),
(3, '4,9,11'),
(4, '3,9,11'),
(5, '2,8'),
(6, '1,7,10'),
(7, '1,6,10'),
(8, '2,5'),
(9, '3,4,11'),
(10, '1,6,7'),
(11, '3,4,9');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `login`, `email`, `password`, `telephone`, `address`, `role`) VALUES
(1, 'maks', 'makszona@mail.ru', '14334505Md', '89202773392', 'sdsdsdsdsdsds', 'user'),
(2, 'masdsddd', 'sdsd@dsrt.rtr', '12333434Vf', '89207654455', 'tgtgtgtgtgt', 'user'),
(6, 'dfdfdfhdfdfd', 'makszona@mail.ruer', '345345345345345345JJfff', '89294567686', 'gfggfgfgfgfg', 'user'),
(9, 'maksss', 'makszona@mail.rur', '14334505Na', '89202773391', 'sdfsfdffd', 'user'),
(10, 'maksim', 'Maksim@mail.ru', '344343344FGDB', '89703349889', 'dfdfdfdfdf', 'user'),
(11, 'maskkskk', 'sdsdsd@dfffd.ru', 'hgghhghhJJJ4455', '89294567555', 'jhjhjjhjhjhjhj', 'user'),
(12, 'maksir', 'dfdf@sdff.ru', 'dfdfdfHH34', '89345556667', 'jkjkjkjkkjkj', 'user'),
(13, 'masjdkjd', 'sdsdsdsd@fgfgfg.tu', '$2y$10$XpiLUuPkizeTNo5hjbTf/OnfBS0vAmTnvLHovW6BUXCjcWtkTzwKO', '89203456787', 'fgfggfgfg', 'user'),
(14, 'maksimg', 'djffjjK@kkjkj.ru', '$2y$10$aNzHwhKBrhe1aJRXBjjAC.4YbIuZ7minA96nZ2a20YpNPpSrblHP2', '89239876543', 'gffgfgfgfsfg', 'user'),
(15, 'hhhhhhhhhhhhhhhhh', 'dffdfdfd@fdfdf.rijjjjj', '$2y$10$NuLzjhOyy79iXT6NvtKVL.yh3EdU7a8trQBs03sOmuOANHgpbR3gm', '89202773355', 'dddd gggggjjjkfdsd', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Индексы таблицы `productColor`
--
ALTER TABLE `productColor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productColor_order_uindex` (`order`);

--
-- Индексы таблицы `productComplect`
--
ALTER TABLE `productComplect`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productComplect_order_uindex` (`order`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_email_uindex` (`email`),
  ADD UNIQUE KEY `User_login_uindex` (`login`),
  ADD UNIQUE KEY `User_telephone_uindex` (`telephone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `productColor`
--
ALTER TABLE `productColor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `productComplect`
--
ALTER TABLE `productComplect`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
