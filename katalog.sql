-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 02 2024 г., 23:07
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `katalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'Admin', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `carousell`
--

CREATE TABLE `carousell` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `carousell`
--

INSERT INTO `carousell` (`id`, `text1`, `text2`, `img`) VALUES
(11, 'Arami Garden & Cocktail Bar', 'The place is located in the center of Yerevan, a very beautiful place, there are simply no words for the kitchen to cook a very good dishâ€¦', 'coctail.jpg'),
(13, 'Lavash Restaurant', 'Lavash is known for its cozy atmosphere and traditional Armenian dishes. Named after the famous Armenian flatbread, the restaurant offers a variety of local favorites, including khorovats (Armenian barbecue), lavash bread, and an assortment of salads.', '1717236747.jpg'),
(14, 'Tavern Yerevan', 'Tavern Yerevan is a chain of traditional Armenian restaurants that provide an authentic culinary experience. The menu includes a wide range of Armenian dishes, from soups and stews to grilled meats and desserts. The restaurants are known for their rustic ', '1717236754.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `das1`
--

CREATE TABLE `das1` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `das1`
--

INSERT INTO `das1` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'asdss', 'Razo', '1.jpg'),
(2, 'Razo', 'Vahe', '2.jpg'),
(3, 'Vahe', 'Qwww', '3.jpg'),
(4, 'Ass', 'fdsf', '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `dass1`
--

CREATE TABLE `dass1` (
  `id` int(11) NOT NULL,
  `txt1` varchar(255) NOT NULL,
  `txt2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `dass1`
--

INSERT INTO `dass1` (`id`, `txt1`, `txt2`, `img`) VALUES
(1, 'Razo', 'Vahe', '3.jpg'),
(2, 'Vahe', 'Razo', '5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `mardiq`
--

CREATE TABLE `mardiq` (
  `id` int(11) NOT NULL,
  `loginner` varchar(255) NOT NULL,
  `passwordner` varchar(255) NOT NULL,
  `tariq` int(3) NOT NULL,
  `karq` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Anun` varchar(255) NOT NULL,
  `Azganun` varchar(255) NOT NULL,
  `Ser` varchar(255) NOT NULL,
  `Taretiv` date NOT NULL,
  `masnagitutyun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `mardiq`
--

INSERT INTO `mardiq` (`id`, `loginner`, `passwordner`, `tariq`, `karq`, `img`, `Anun`, `Azganun`, `Ser`, `Taretiv`, `masnagitutyun`) VALUES
(1, 'kku', '123', 55, 'ayo', '1.jpg', 'Razo', 'Asatryan', 'txa', '2023-11-14', 'esiminch'),
(2, 'Ass', 'ass123', 15, 'voch', '4.jpg', 'Nare', 'Hakobyan', 'axjik', '2023-11-15', 'programmer'),
(3, 'vasil', 'vasil123', 18, 'ayo', '5.jpg', 'Elen', 'Sargsyan', 'axjik', '2023-11-01', 'chgitem'),
(4, 'razo', 'asd123', 99, 'ayo', '3.jpg', 'Arman', 'Ghazaryan', 'txa', '2023-11-21', 'dizayner'),
(6, 'QQWW', '123', 50, 'voch', '2.jpg', 'Vahe', 'Saghatelyan', 'txa', '2023-11-16', 'bjishk');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text1` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `date`, `text1`, `img`) VALUES
(1, 'Karen Demirchyan Sports and Concerts Complex', '2023-12-10', 'This iconic complex is one of the largest venues in Armenia, capable of hosting large-scale concerts, sporting events, and exhibitions. It features a main concert hall and several smaller event spaces, offering state-of-the-art facilities.', '1717235569.jpg'),
(6, ' Cafesjian Center for the Arts ', '2023-11-04', 'Situated within the Cascade complex, this center offers a stunning venue for art exhibitions, cultural events, and private functions. The outdoor terraces provide a beautiful backdrop of Yerevan city.', '1717235966.jpg'),
(7, 'Republic Square', '2023-11-10', 'Republic Square is a central location for major public events, including concerts, national celebrations, and festivals. The square is surrounded by significant government buildings and the National History Museum.', '1717235699.jpg'),
(9, 'Yerevan Expo Center', '2023-09-14', 'Yerevan Expo is a leading venue for trade shows, conferences, and exhibitions. The center features multiple halls equipped with modern amenities, making it ideal for business events and conventions.', '1717235782.jpg'),
(10, 'Dvin Music Hall', '2023-04-06', 'Dvin Music Hall is a popular venue for concerts, weddings, and corporate events. It combines modern facilities with elegant design, providing a versatile space for various types of gatherings.', '1717235812.jpg'),
(14, 'Parajanov Museum', '2023-06-10', 'This museum, dedicated to the legendary filmmaker Sergei Parajanov, offers a unique cultural venue for art exhibitions, film screenings, and literary events. The intimate setting and artistic ambiance make it a special location for smaller events.', '1717235846.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `top` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `text1`, `text2`, `img`, `type`, `top`) VALUES
(7, 'BRANDING', 'High quality work', '1702411416.jpg', 'branding', 'no'),
(12, 'WEB', 'The best speakers', '1702411433.jpg', 'web', 'no'),
(14, 'ADVERSTING', 'Profesional team', '1702411448.jpg', 'branding', 'no');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user', 'user123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carousell`
--
ALTER TABLE `carousell`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `das1`
--
ALTER TABLE `das1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dass1`
--
ALTER TABLE `dass1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mardiq`
--
ALTER TABLE `mardiq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
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
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `carousell`
--
ALTER TABLE `carousell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `das1`
--
ALTER TABLE `das1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dass1`
--
ALTER TABLE `dass1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `mardiq`
--
ALTER TABLE `mardiq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
