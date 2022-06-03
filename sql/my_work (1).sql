-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2022 г., 21:06
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `course_persone`
--

CREATE TABLE `course_persone` (
  `CourseID` int NOT NULL,
  `PersoneID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `course_persone`
--

INSERT INTO `course_persone` (`CourseID`, `PersoneID`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `curse`
--

CREATE TABLE `curse` (
  `ID` int NOT NULL,
  `site_id` int NOT NULL,
  `date` date NOT NULL,
  `groupe_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `ID` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `dol` varchar(255) NOT NULL,
  `firm` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `persone`
--

CREATE TABLE `persone` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `tellphone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `flag_call` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `persone`
--

INSERT INTO `persone` (`ID`, `name`, `surname`, `tellphone`, `email`, `flag_call`) VALUES
(7, 'Никита', 'Афанасьевич', '8800553535', 'gmail@gmail.com', NULL),
(8, 'Алексей', 'Афанасьевич', '8800553535', 'gmааail@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `promo`
--

CREATE TABLE `promo` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `foto_1` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `promo`
--

INSERT INTO `promo` (`ID`, `name`, `text`, `foto_1`, `foto_2`) VALUES
(1, 'Профисианальная чистка зубов', 'Текст про что то', 'foto_1.jpg', 'foto_2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `course_persone`
--
ALTER TABLE `course_persone`
  ADD PRIMARY KEY (`CourseID`,`PersoneID`),
  ADD KEY `PersoneID` (`PersoneID`);

--
-- Индексы таблицы `curse`
--
ALTER TABLE `curse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `site_id` (`site_id`);

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `persone`
--
ALTER TABLE `persone`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `curse`
--
ALTER TABLE `curse`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `persone`
--
ALTER TABLE `persone`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `promo`
--
ALTER TABLE `promo`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `course_persone`
--
ALTER TABLE `course_persone`
  ADD CONSTRAINT `course_persone_ibfk_1` FOREIGN KEY (`PersoneID`) REFERENCES `persone` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `curse`
--
ALTER TABLE `curse`
  ADD CONSTRAINT `curse_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `promo` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `curse_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `course_persone` (`CourseID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
