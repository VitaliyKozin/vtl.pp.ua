-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 07 2019 г., 15:19
-- Версия сервера: 10.2.17-MariaDB
-- Версия PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u489640296_mark`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` tinyint(128) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `pagetext` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `keywords`, `description`, `url`, `pagetext`) VALUES
(1, 'Главная', 'Главная,main,site', 'Сайт-визитка.Пример создания интернет-магазина.', '/market/index.php', '<script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=6IfISzeQtKkYz6r59bH4pnK2EO4CWwJz&width=500&height=300&lang=ru_UA&sourceType=constructor&scroll=true\"></script>'),
(2, 'Товары', 'Товары,products', 'Товары, наполнение интернет магазина.Ассортимент.', '/market/products.php', ''),
(3, 'Регистрация', 'Регистрация, registraton', 'Регистрируемся..', '/market/registration.php', ''),
(4, 'Вход', 'Вход,login', '', '/market/login.php', ''),
(5, 'Корзина', 'Корзина,cart', '', '/market/cart.php', ''),
(6, 'Контакты', 'Контакты,contacts', '', '/market/index.php?contacts', '<script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=6IfISzeQtKkYz6r59bH4pnK2EO4CWwJz&width=500&height=300&lang=ru_UA&sourceType=constructor&scroll=true\"></script>');

-- --------------------------------------------------------

--
-- Структура таблицы `products2`
--

CREATE TABLE `products2` (
  `id` tinyint(128) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(128) NOT NULL,
  `category` int(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products2`
--

INSERT INTO `products2` (`id`, `name`, `description`, `price`, `category`) VALUES
(1, 'iPhone-6 Plus', 'iPhone-6 Plus Диагональ экрана: 4.7\"; Разрешение экрана: 1334x750; Камера: 8 Mpx; Количество ядер: 2; Оперативная память: 1 Гб; Внутренняя память: 16 Гб;\n', '700', 1),
(2, 'Sumsung galaxy', 'Мобильный телефон, который отлично подходит для повседневного использования.  Устройство наделено всеми необходимыми функциями: поддержкой работы двух SIM,  возможностью установки microSD-карт памяти, медиапроигрывателями аудио и видео  файлов, цифровой к', '200', 1),
(3, 'Sony Ericsson XPERIA Ray', 'Смартфон Sony Ericsson Xperia Ray работает под управлением Android OS 2.3. Краткие технические характеристики смартфона XPERIA Ray: память 300 Мб, процессор Scorpion processor 1 ГГц, работа в частотных диапазонах GSM 850/900/1800/1900, UMTS0 2100, поддерж', '100', 1),
(4, 'Телевизор PHILIPS 55PUS7600/12', 'Диагональ 55\" (140см) / Экранное разрешение 3840x2160 (4K UHD) / Цвет корпуса металлик / Наличие функции SMART TV / Поддержка 3D / Яркость 400 кд/м2 / Частота развёртки 1400 Гц / Встроенный Wi-Fi / Управление голосом / Воспроизведение с USB AVI, MKV, H264', '2500', 2),
(5, 'Телевизор Sony KD-49X8305C', 'Sony KD-49X8305C — ЖК-телевизор с экраном на 49\". Матрица оборудована LED-подсветкой. Дисплей имеет максимальное разрешение 3840x2160 пикселов. Частота развертки 800 Гц. Поддерживает воспроизведение видео 4K UHD. Совместим со входным сигналом формата: PAL', '1000', 2),
(6, 'Телевизор Samsung UE55J5500AUXUA ', 'Диагональ экрана: 55\"; Тип телевизора: LED; Разрешение экрана: Full HD (1920x1080); Частота развертки экрана: 100 Гц; Smart TV: Да; Wi-Fi: Да;', '1100', 2),
(7, 'Ноутбук Asus EeeBook E502MA ', 'Экран 15.6\" (1366x768) HD, глянцевый / Intel Celeron N2840 (2.16 ГГц) / RAM 4 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / DOS / 1.86 кг', '220', 3),
(8, 'Ноутбук Acer Extensa EX2519-C3WP ', 'Экран 15.6\'\' (1366x768) HD LED, матовый / Intel Celeron N3050 (1.6 - 2.16 ГГц) / RAM 4 ГБ / HDD 500 ГБ / Intel HD Graphics / Без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Linux / 2.4 кг / черный\n', '220', 3),
(9, 'Ноутбук Lenovo IdeaPad B50-30', '/ Тип процессора Intel Pentium Quad Core / Частота процессора 2.16 GHz / Диагональ дисплея 15.6 \" / Жесткий диск 500 Гб / Видеокарта Intel HD Graphics', '300', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users2`
--

CREATE TABLE `users2` (
  `id` tinyint(128) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users2`
--

INSERT INTO `users2` (`id`, `first_name`, `name`, `password`, `area`, `gender`) VALUES
(1, 'Dfhd', 'rsys', 'dhd', 'Ukraine', 'man'),
(2, 'Vitaliy', 'admin', 'pcadmin', 'Ukraine', 'man'),
(3, 'Dfhd', 'rsys', 'dhd', 'Ukraine', 'man'),
(4, 'Dfhd', 'rsys', 'dhd', 'Ukraine', 'man'),
(5, '', '', '', 'Ukraine', 'man'),
(6, 'AA', 'admin', 'pc', 'Ukraine', 'man'),
(7, 'QQ', 'asd', 'rer', 'Ukraine', 'man'),
(8, 'aa', 'adm', 'pcadmin', 'Ukraine', 'man'),
(9, 'XX', 'ada', 'adad', 'Ukraine', 'man'),
(10, 'Vitaliy', 'VV', 'pcadmin', 'Ukraine', 'man'),
(11, 'aerf', 'ewqf', 'ewafra', 'Ukraine', 'man'),
(12, 'aerf', 'ewqf', 'ewafra', 'Ukraine', 'man'),
(13, 'qfdqw', 'qewf', 'qwf', 'Ukraine', 'man');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` tinyint(128) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `products2`
--
ALTER TABLE `products2`
  MODIFY `id` tinyint(128) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users2`
--
ALTER TABLE `users2`
  MODIFY `id` tinyint(128) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
