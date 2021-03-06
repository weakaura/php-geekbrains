-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 24 2021 г., 19:51
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
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'В Петербурге уволили двоих вице-губернаторов', 'Вице-губернаторов Петербурга Бельского и Бондаренко освободили от должности\r\nЗдание Правительства в Санкт-Петербурге - РИА Новости, 1920, 24.09.2021\r\n© РИА Новости / Александр Гальперин\r\nПерейти в фотобанк\r\nЧитать ria.ru в\r\nС.-ПЕТЕРБУРГ, 24 сен — РИА Новости. Вице-губернаторов Санкт-Петербурга Александра Бельского и Николая Бондаренко освободили от должностей, сообщила пресс-служба администрации главы города.\r\nСоответствующие распоряжения подписал губернатор Александр Беглов.\r\nКроме того, свои посты покинули председатель городского комитета по социальной политике Александр Ржаненков, глава администрации Выборгского района Валерий Гарнец и глава администрации Приморского района Николай Цед.\r\nВ пресс-службе не назвали причины кадровых изменений.'),
(2, 'Суд арестовал экс-вице-премьера Крыма', 'Суд арестовал экс-вице-премьера Крыма Кабанова, курировавшего ФЦП развития региона\r\nЕвгений Кабанов - РИА Новости, 1920, 24.09.2021\r\n© РИА Новости / Дмитрий Макеев\r\nЕвгений Кабанов. Архивное фото\r\nЧитать ria.ru в\r\nСИМФЕРОПОЛЬ, 24 сен — РИА Новости. Киевский районный суд Симферополя арестовал бывшего вице-премьера Крыма Евгения Кабанова по делу о хищении более 57 миллионов рублей, передает корреспондент РИА Новости.\r\nПо версии следствия, обвиняемый, вместе с бывшим министром строительства и архитектуры Крыма Михаилом Храмовым, а также генеральным директором компании \"Мастер-ЮГ\" Романом Журавлевым, украл эти деньги из бюджета.\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
