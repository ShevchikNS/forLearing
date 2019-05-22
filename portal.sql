-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2019 г., 17:07
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) UNSIGNED NOT NULL,
  `bookName` text CHARACTER SET utf8 NOT NULL,
  `author` text CHARACTER SET utf8 NOT NULL,
  `year` int(20) NOT NULL,
  `url` text CHARACTER SET utf8 NOT NULL,
  `aboutBook` text CHARACTER SET utf8 NOT NULL,
  `ulrIMG` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `bookName`, `author`, `year`, `url`, `aboutBook`, `ulrIMG`) VALUES
(0, 'Basic german\r\n', 'Heiner Schenke and Karen Seago', 2004, 'books\\Basic german.pdf', 'A Grammar and Workbook comprises an accessible reference grammar and related exercises in a single volume. It introduces German people and culture through the medium of the language used today, covering the core material which students would expect to encounter in their ﬁrst years of learning German. Each of the 28 units presents one or more related grammar topics, illustrated by examples which serve as models for the exercises that follow. These wide-ranging and varied exercises enable the student to master each grammar point thoroughly.', 'img\\img1'),
(1, 'Немецкий для начинающих. Самоучитель', 'Кеслер', 2001, 'books/Kesler_-_Nemeckiii_dlya_nachinayushchih._Samouchitel\'.pdf', 'Данный самоучитель универсален как по форме, так по содержанию. Он позволяет в максимально сжатые сроки приобрести навыки правильного немецкого произношения, усвоить наиболее употребительные в немецком языке грамматические явления, овладеть основами устной и письменной \r\nречи. Открывает большие возможности не только для работы на начальном этапе обучения немецкому языку, но и для повторения или быстрого нахождения и восстановления в памяти необходимой информации.', 'img\\img2'),
(2, 'Базовая грамматика немецкого языка за 16 занятий. Железногорск, 2014', 'Михаленко А.О.', 2014, 'books/Михаленко_А._О._Базовая_грамматика_немецкого_языка_за_16_занятий._Железногорск,_2014.pdf\r\n', 'Перед вами не учебник немецкого языка и не тетрадь с грамматикой. Перед вами нечто большее, чем просто набор слов и грамматических структур. Перед вами – ключ к овладению новым языком. В этой книге в краткой и доступной форме изложены самые основные правила немецкой грамматики, необходимые для общения на немецком языке. Книга состоит из нескольких частей. Первая часть «Немецкий язык. Was ist das?» ознакомит вас с историей немецкого языка, его современным состоянием, а также объяснит, какие трудности могт возникнуть при его изучении и как с ними справляться. Фонетическая часть даёт общее представление о звуковом строе немецкого языка, особенностях произнесения отдельных букв и буквосочетаний. Там же вы сможете ознакомиться с немецким алфавитом. Основная часть состоит из пятнадцати уроков, посвящённых грамматике, и одного урока, посвящённого изучению лексики. В конце книги вы найдёте список форм сильных и неправильных глаголов, краткий разговорник и словарь. Эта книга будет полезна всем, кто изучает немецкий язык с нуля или хотел бы больше узнать о немецкой грамматике. ', 'img\\img3');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(2, 'abc', 'shevchikko1la@gmail.com', '$2y$10$3CDuEwLb09SC6c5DVKG3N.mMtnIVVVZqkrE0fTm2z6OW12xQR6qhe'),
(3, 'kolya', 'shevchikkola@g.com', '$2y$10$Nfa4gQn3E5djXctPA7YAQedVfBOWQXUVOiNTIKrZ5TPD3Zj6Wy.A6'),
(4, 'abcd', 'shevchdikkola@gmail.com', '$2y$10$3uHbKhpO7d.vRWgvFxC4MO/AGbGqODNrhGFGTTlbIvsYrVqoOFPcK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
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
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
