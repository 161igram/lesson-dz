-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 21 2024 г., 14:58
-- Версия сервера: 5.6.51
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `address`) VALUES
(4, 0, '2024-01-21 14:53:20', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(5, 4, '2024-01-21 14:54:58', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(6, 4, '2024-01-21 14:55:04', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(7, 4, '2024-01-21 14:55:07', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(8, 4, '2024-01-21 14:55:12', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(9, 4, '2024-01-21 14:56:37', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(10, 4, '2024-01-21 14:56:39', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(11, 4, '2024-01-21 14:56:52', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(12, 4, '2024-01-21 14:56:55', '+7 (988) 789 78 97,Горького,12,1,23,2,'),
(13, 4, '2024-01-21 14:57:03', '+7 (988) 789 78 97,Горького,12,1,23,2,');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(12) NOT NULL,
  `orders_count` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `orders_count`) VALUES
(4, 'vd161region@yandex.ru', 'Алексей', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
