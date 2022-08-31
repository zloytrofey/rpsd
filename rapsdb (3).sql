-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2022 г., 14:57
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rapsdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coop`
--

CREATE TABLE `coop` (
  `id_em` int(11) NOT NULL,
  `fio_em` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bday` date DEFAULT NULL,
  `biography` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `img_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coop`
--

INSERT INTO `coop` (`id_em`, `fio_em`, `bday`, `biography`, `id_post`, `img_name`, `post`) VALUES
(1, 'Герасимов Дмитрий Викторович', '1987-05-19', 'Окончил РГИСИ. Первой его постановкой является \"Свящая красавица\".', 1, 'img/sup/1.jpg', 'Режиссёр'),
(2, 'Демидова Елена Андреевна', '1991-06-11', 'Окончила РИТИ.', 7, 'img/sup/2.jpg', 'Декоратор'),
(3, 'Леонов Григорий Андреевич.', '1969-05-21', 'Окончил РГИСИ. Первой его постановкой является \"Щелкунчик\".', 1, 'img/sup/3.jpg', 'Режиссёр'),
(4, 'Сатирин Григорий Максимович', '1987-05-19', 'Окончил Московский политехническиу университет. Разрабатывает трёхмерные объекты для голографического театра', 6, 'img/sup/4.jpg', 'Графический дизайнер'),
(5, 'Трипонова Олеся Сергеевна', '1995-09-19', 'Окончила РИТИ.', 7, 'img/sup/5.jpg', 'Актёр третьего плана'),
(6, 'Селентьев Олег Георгиевич', '1987-06-06', 'Окончил РГИСИ. Играл в постановках \"Шинель\", \"Вий\" и \"Преступление и наказание\" Вознесенского.', 3, 'img/sup/6.jpg', 'Актёр первого плана'),
(7, 'Кондратьева Алёна Сергеевна', '1996-07-03', 'Окончила РГИСИ. Играла в постановках \"Белые ночи\", \"Синяя птица\", \"Борис Годунов\" Верховенского', 3, 'img/sup/7.jpg', 'Актёр первого плана'),
(8, 'Прокопенко Сергей Сергеевич', '1994-07-07', 'Окончил РИТИ. Написал снераии для \"Цветы для принцессы Фишль\", \"Господин Рю\", \"Монстр в Париже\".', 2, 'img/sup/8.jpg', 'Звукооператор'),
(9, 'Елисеева Мария Валерьевна', '1997-02-12', 'Окончила РГИСИ.', 4, 'img/sup/9.jpg', 'Актёр второго плана'),
(10, 'Смирнов Андрей Викторович', '1989-07-06', 'Окончил РГИСИ.', 4, 'img/sup/10.jpg', 'Актёр второго плана');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `name_post` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id_post`, `name_post`, `salary`) VALUES
(1, 'Режиссёр', 600000),
(2, 'Сценарист', 61000.3),
(3, 'Актёр первого плана', 51000),
(4, 'Актёр второго плана', 48000),
(5, 'Актёр третьего плана', 46000),
(6, 'Графический дизайнер', 56500),
(7, 'Гримёр', 45600.5),
(8, 'Декоратор', 45000.5),
(9, 'Директор', 80000.5),
(10, 'Звукооператор', 66000),
(11, 'Монтажник', 44500),
(12, 'Костюмер', 45300),
(13, 'Хореограф', 46700.8);

-- --------------------------------------------------------

--
-- Структура таблицы `theater_shows`
--

CREATE TABLE `theater_shows` (
  `id_show` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actors` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `imgfilename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `theater_shows`
--

INSERT INTO `theater_shows` (`id_show`, `name`, `description`, `actors`, `price`, `imgfilename`) VALUES
(1, 'Цветы для принцессы Фишль', 'Такие слова, несомненно, должны появляться в середине каждой истории, и обычно их произносит принцесса Нирваны Ночи. Это, конечно, не та загадка, которая волнует большинство слушателей, но, тем не менее, мы всё равно должны начать с неё.', '', 340, 'img/content/floversforprincessfishl2.jpg'),
(2, 'Маленький принц', '«Маленький принц» - это мудрая и вечная притча о любви и дружбе, преданности и заботе о других. В каждом из нас живет свой маленький принц.', '', 200, 'img/content/alittleprince.jpg'),
(3, 'Господин Рю', 'Студент-медик отправляется за границу, куда направил его любезный куратор. Это путешествие - предел его мечтаний, и он его запомнит надолго.', '', 500, 'img/content/masterryu.jpg'),
(4, 'Комедия дель арте', 'Легендарный итальянский театр масок про двух возлюбленных и их крепостных.', '', 340, 'img/content/comediadelarte.jpg'),
(5, 'Горе от ума', 'Юноша возвращается в Москву после трёх лет обучения. По возвращении он обнаруживает холодное к себе отношение со стороны когда-то любимой ею девушке. По мотивам комедии А.С. Грибоедова', '', 300, 'img/content/goreotuma.jpg'),
(6, 'Синяя птица', 'В ночь под Рождество мальчика и девочку Тильтиль и Митиль посещает Фея Берилюна. Внучка Феи больна, и спасти её может только Синяя птица.', '', 250.5, 'img/content/thebluebird.jpg'),
(7, 'Ледибаг и Кот Нуар. Мюзикл', 'Действие разворачивается на улицах Парижа в наши дни. В обыкновенной французской школе учатся девочка по имени Маринетт Дюпен-Чен и её одноклассник Адриан Агрест, в которого она влюблена. Казалось бы, классическая история первой любви, но...', '', 300, 'img/content/ladybugandchatnoir.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usersurname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usermiddlename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userpassword` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_token` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_amount` int(11) DEFAULT NULL,
  `price_one` int(11) DEFAULT NULL,
  `order_name` int(11) DEFAULT NULL,
  `order_date` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `username`, `usersurname`, `usermiddlename`, `phone_number`, `email`, `userpassword`, `cookie_token`, `order_amount`, `price_one`, `order_name`, `order_date`) VALUES
(1, 'iv', 'iv', 'iv', '78000000000', 'iv@mail.ru', '123123', '', 0, 0, NULL, NULL),
(2, 'Дима', 'Тимофеев', '', '8(999) 999-9999', 'dimatimofeevtv@gmail.com', '4297f44b13955235245b2497399d7a93', '', 2, 0, 1, '2022-06-23'),
(3, 's', 's', 's', 's', 's', 's', NULL, NULL, NULL, NULL, NULL),
(4, '1', '1', '1', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '', NULL, NULL, 1, NULL),
(5, 'Илья', 'Хазов', 'Андреевич', '89163649292', 'Fenoty', '202cb962ac59075b964b07152d234b70', '', NULL, NULL, NULL, NULL),
(6, 'Даниил', 'Маслов', '', '89163649292', 'fenoty', '202cb962ac59075b964b07152d234b70', '', NULL, NULL, NULL, NULL),
(7, 'Даниил', 'Маслов', '', '89163649292', 'fenoty', '202cb962ac59075b964b07152d234b70', '', NULL, NULL, NULL, NULL),
(8, '2', '2', '', '2', '2@mail.ru', 'c81e728d9d4c2f636f067f89cc14862c', '28a768daec4f75db284d7705b8efe982', NULL, NULL, NULL, NULL),
(9, 'Дима', 'Тимофеев', '', '8(999) 999-9999', 'www.sh-am.timofeev@yandex.ru', '73882ab1fa529d7273da0db6b49cc4f3', 'e75001573be30b40c7202e0c832f5a72', NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coop`
--
ALTER TABLE `coop`
  ADD PRIMARY KEY (`id_em`),
  ADD KEY `id_post` (`id_post`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Индексы таблицы `theater_shows`
--
ALTER TABLE `theater_shows`
  ADD PRIMARY KEY (`id_show`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coop`
--
ALTER TABLE `coop`
  MODIFY `id_em` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `theater_shows`
--
ALTER TABLE `theater_shows`
  MODIFY `id_show` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `coop`
--
ALTER TABLE `coop`
  ADD CONSTRAINT `coop_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
