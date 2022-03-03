-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2022 г., 15:27
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `components`
--

CREATE TABLE `components` (
  `id` int(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `text` varchar(30) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `typething` varchar(10) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `components`
--

INSERT INTO `components` (`id`, `name`, `text`, `kind`, `amount`, `storage`, `image`, `typething`, `product_quantity`, `product_status`) VALUES
(40, 'Компонент 1', '1212', 'Сенсор', '500.00', 'Тут', 'uploads/components/1646233163', 'Component', 10, '1'),
(41, 'Компонент 2', '1212', 'Кнопка', '120.00', 'Тут', 'uploads/components/1646233185', 'Component', 10, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `components_old`
--

CREATE TABLE `components_old` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `kind` varchar(29) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comp_list`
--

CREATE TABLE `comp_list` (
  `id_comp` bigint(20) UNSIGNED NOT NULL,
  `id_list` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE `list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `password`, `avatar`) VALUES
(23, 'Илья Анатольевич Вавилов', 'Failj', '12345', 'uploads/avatar/1638360091'),
(24, 'Ил', 'qwerty', '12345', 'uploads/avatar/1638362257'),
(25, 'Анатолий', 'tyu', 'c4ca4238a0b923820dcc509a6f75849b', 'uploads/avatar/1645722590'),
(26, '', 'f', 'c4ca4238a0b923820dcc509a6f75849b', 'uploads/avatar/1645723866'),
(27, 'Илья Вавилов', 'F4ilji', 'c4ca4238a0b923820dcc509a6f75849b', 'uploads/avatar/164615374512.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `components_old`
--
ALTER TABLE `components_old`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comp_list`
--
ALTER TABLE `comp_list`
  ADD KEY `id_comp` (`id_comp`),
  ADD KEY `id_list` (`id_list`);

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `components`
--
ALTER TABLE `components`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `components_old`
--
ALTER TABLE `components_old`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comp_list`
--
ALTER TABLE `comp_list`
  ADD CONSTRAINT `comp_list_ibfk_1` FOREIGN KEY (`id_comp`) REFERENCES `components_old` (`id`),
  ADD CONSTRAINT `comp_list_ibfk_2` FOREIGN KEY (`id_list`) REFERENCES `list` (`id`);

--
-- Ограничения внешнего ключа таблицы `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
