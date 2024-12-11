-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 11 2024 г., 10:58
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_file`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_animal` varchar(256) NOT NULL,
  `description` varchar(256) DEFAULT NULL,
  `mark` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `date_found` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `type_animal`, `description`, `mark`, `address`, `date_found`) VALUES
(1, 1, 'dog', 'sjnudeudeheuhd', 'No', 'Karasuk', '2024-01-10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `passwords` varchar(256) NOT NULL,
  `agree` tinyint(1) NOT NULL,
  `api_token` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `phone`, `passwords`, `agree`, `api_token`) VALUES
(1, 'Иван', 'Иванов', 'ivan@mail.ru', '8923', '12', 0, 'aGFzaD0xNzMzOTA2Njc1JmVtYWlsPWl2YW5AbWFpbC5ydSZwYXNzd29yZD0xMg=='),
(13, 'Иван', 'Иванов', 'ivan@mail.ruw2r44jrighthw24553', '892332434', '$2y$10$SxBKNhccSMTGiAP3JBsn7eyw3DLCB4i8g8fmAKKQEXx5Gb3qIbXkC', 1, NULL),
(18, '1', '1', '1@icloud.com', '892', '$2y$10$/0PqViSZ7RvB0TlouqnVDOr7Bk9kHvsiA8Y8k6LuMy733M87BXBpi', 1, NULL),
(19, '1', '1', '1@icloud.comd', '89234', '$2y$10$JrC7FidQb6a0xX0aW4gfJ.Q9pUeN4P/JDcqTghXRtzLlb06gdWSGG', 1, NULL),
(20, '1', '1', '1@icloud.comda', '892345', '$2y$10$w8jvgIL.FgqJK2iRJfZ/peWFdSFDhQ3DCbSip45e7.QeQRJKLpDbG', 1, NULL),
(59, '', '', '', '', '$2y$10$iQ2192q3ivgu5biRZHGQB.n0BJIW2hht5FGfkRlspGghlSrC1NPsS', 0, NULL),
(60, 'Иван', 'Иванов', 'ivan2@mail.ru', '892310', '$2y$10$gavWmOT8sDNDJ1ZyUirKo.ajbDDhB84wWtLeh1xCIzb2dURe24e9G', 1, NULL),
(62, 'Иван', 'Иванов', 'ivan@mail.ru23', '892314', '$2y$10$OoH2ViiUpwz2cAW4UsxZOuCCi5A4qbuuIRs0tqGuE3D8gxqhI9VVy', 1, NULL),
(64, 'Иван', 'Иванов', 'ivan@mail.ru3456', '234356756', '$2y$10$GsPIxy.KiOgPGBCMWNZ3aOTTXELEui6lU4/girJAvbY2VvC5Qny0u', 1, NULL),
(65, 'Иван', 'Иванов', 'ivan@mail.ru34564444', '23435675644444', '$2y$10$6Xhh3FY5g.r6g3Pu781cV.mCQ.hPNt5mSwqRzX/a/7A8vKknEljsS', 1, NULL),
(66, 'Иван', 'Иванов', 'ivan@mail.rudfrrfrf', '892344556', '$2y$10$7/Dnx.Q/BMxzBiuw/Eu9iehaP.MnBz761BeGN9iTy8pxRGRgJ52/G', 1, NULL),
(68, 'Иван', 'Иванов', 'ivan@mail.rudfrrfrf23', '8923445565523', '$2y$10$6gRmb3ItqlVP1OJIWI7i7ud909P42N1CWwdKLzCkcredsxVpxdN1S', 1, NULL),
(69, 'Иван', 'Иванов', 'ivan@mail.rudfrrfrf2334', '892344556552334', '$2y$10$3iEXhvrVW8gK7kmOoN3VbOuUuYSlrlHEvdvBSPXSuLAC.Nk5yKPNi', 1, NULL),
(70, 'Иван', 'Иванов', 'ivan@mail.rudfrrfrf233434', '8923445565523345', '$2y$10$ElbhQWXmQE.5fM98KFD0aOXkoWJFR0KIAqH3UJNh4ZV0stcqLQsOm', 1, NULL),
(71, 'Иван', 'Иванов', 'ivan@mail.ruwerth', '234356734567', '$2y$10$2JPuDB.uvlKogYC0VLdss.vGvgUuUXg5dU.tTJfF/1Iu2oFIAUkGS', 1, NULL),
(72, 'Иван', 'Иванов', 'ivan@mail.ruwerth334', '2343567345673', '$2y$10$EqsunFOEeLap31GUDeH24uDkQssjZvWEMkF8HI4yXVzzOMtlH98Um', 1, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `passwords` (`passwords`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
