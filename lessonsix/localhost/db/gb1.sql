-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 01 2021 г., 13:56
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `price`, `description`, `img`) VALUES
(1, 'Яблоко', 10, 'Сочное, вкусное яблочко', '01.jpg'),
(2, 'Морковь', 15, 'Питательная, полезная морковочка', '02.jpg'),
(3, 'Банан', 25, 'Желтый, красивый банан', '03.jpg'),
(4, 'Помидор', 55, 'Свежий, прямо с грядки', '04.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Админ', 'Не флудить!'),
(2, 'Юзер', 'Как дела?'),
(4, 'Вася', 'Новое сообщение'),
(5, 'Петя', 'Привет'),
(9, 'Админ', 'Привет'),
(11, 'Олег', 'Забаню!'),
(13, 'Ежик', 'Лошааадка!'),
(59, 'Админ', 'Забаню!');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `views` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `views`) VALUES
(1, '01.jpg', 6),
(2, '02.jpg', 4),
(3, '03.jpg', 0),
(4, '04.jpg', 6),
(5, 'emb.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `likes` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `likes`) VALUES
(1, '01.jpg', 6),
(2, '02.jpg', 3),
(3, '03.jpg', 3),
(4, '04.jpg', 2),
(5, '05.jpg', 2),
(6, '06.jpg', 2),
(7, '07.jpg', 2),
(8, '08.jpg', 2),
(9, '09.jpg', 2),
(10, '10.jpg', 2),
(11, '11.jpg', 2),
(12, '12.jpg', 2),
(13, '13.jpg', 2),
(14, '14.jpg', 2),
(15, '15.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `idx` int NOT NULL,
  `filename` text NOT NULL,
  `likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`idx`, `filename`, `likes`) VALUES
(1, '01.jpg', 47),
(2, '02.jpg', 11),
(3, '03.jpg', 5),
(4, '04.jpg', 6),
(5, '05.jpg', 21),
(6, '06.jpg', 10),
(7, '07.jpg', 9),
(8, '08.jpg', 9),
(9, '09.jpg', 11),
(10, '10.jpg', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `likes` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `likes`) VALUES
(2, 'Зарплаты военнослужащих', 'С 1 октября оклады контрактников, срочников, полицейских, таможенников и пожарных, а также сотрудников уголовно-исполнительной системы, органов принудительного исполнения и некоторых сотрудников Фельдъегерской службы повысят на 3,7 процента.', 1),
(9, '12312342', '32423424242', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157614;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
