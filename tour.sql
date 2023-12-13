-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2023 г., 15:28
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tour`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `surname` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `patronymic` varchar(55) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `old_number` int NOT NULL,
  `child_number` int NOT NULL,
  `score` int DEFAULT NULL,
  `id_tour` int NOT NULL,
  `id_discount` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `surname`, `name`, `patronymic`, `age`, `address`, `phone`, `old_number`, `child_number`, `score`, `id_tour`, `id_discount`, `status`) VALUES
(1, 3, 'Колоскова', 'Алина', 'Денисовна', '19', 'г Курган', '+7(951)-236-58-41', 4, 0, NULL, 6, NULL, 0),
(2, 3, 'Колоскова', 'Софья', 'Денисовна', '12', 'г Шадринск', '+7(894)-651-51-65', 0, 1, NULL, 4, NULL, 2),
(3, 4, 'Иванов', 'Иван', 'Иванович', '28', 'г Курган', '+7(965)-865-16-51', 1, 0, NULL, 9, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `text` text NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `text`, `status`, `user_id`) VALUES
(1, 'Очень добрые и хорошие сотрудники!', 1, 3),
(2, 'Понятный и красивый сайт!', 1, 3),
(3, 'Ура!!!! Отзывы заработали!!!', 1, 2),
(7, 'Туры огонь!', 1, 4),
(8, 'СПАСИБО!!', 1, 4),
(9, 'Не дозвонился до оператора(', 1, 4),
(11, 'Немного кривой сайт(', 1, 5),
(12, 'Надеюсь за этот сайт не поставят 2 за практику;)', 1, 5),
(13, 'Простой в использовании сайт!', 1, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Дубай'),
(2, 'Турция'),
(3, 'Англия'),
(4, 'Италия'),
(5, 'Бразилия'),
(6, 'Индия'),
(7, 'Африка'),
(8, 'Австралия'),
(11, 'Мёртвое море');

-- --------------------------------------------------------

--
-- Структура таблицы `discount`
--

CREATE TABLE `discount` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `discount`
--

INSERT INTO `discount` (`id`, `name`, `price`) VALUES
(1, 'Скидка на раннее бронирование', '33%'),
(2, 'Скидка многодетным', '15%'),
(3, 'Скидка пожилым', '15%');

-- --------------------------------------------------------

--
-- Структура таблицы `food`
--

CREATE TABLE `food` (
  `id` int NOT NULL,
  `food` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `food`
--

INSERT INTO `food` (`id`, `food`) VALUES
(1, 'включено'),
(2, 'не включено');

-- --------------------------------------------------------

--
-- Структура таблицы `hotel`
--

CREATE TABLE `hotel` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `description`, `image`, `price`, `type`) VALUES
(1, 'Отель', 'Это гостиница, специализирующаяся на приеме и обслуживании туристов, прибывших в данное место в целях отдыха и рекреации. Ее концепция включает предоставление помещений и дополнительных удобств для обслуживания индивидуальных посетителей, семей и групповых туристов, прибывающих на отдых в дни тура. Стоимость отеля входит в ваш тур.', '../web/images/hotel1.jpg', '0', 'Курортная гостиница'),
(2, 'Отель', 'Отель люкс – это гостиница высокого класса, предлагающая проживание в роскошных номерах с уникальным дизайном, удобствами высшего качества и широким спектром услуг для своих гостей. Отличительными особенностями отелей люкс являются просторные номера, элегантные интерьеры и прекрасный сервис. Стоимость отеля оплачивается отдельно.', '../web/images/hotel2.jpg', '1200', 'Отель-люкс.');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `viewed` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`, `viewed`) VALUES
(1, 'Россияне бросают любимых и едут отдыхать в одиночестве. Почему это спасает семьи и может ли привести к разводу?', 'В последнее время россияне все чаще рушат стереотипы о том, что отпуск надо проводить вместе со своей второй половинкой. Супруги пакуют чемоданы, отправляются в разные стороны, заваливая друг друга фотографиями из отпуска, и делятся впечатлениями от поездки в мессенджерах. Однако это понимают далеко не все, считая, что совместный отдых пары — показатель того, что у возлюбленных все нормально, им интересно вместе и они хотят быть рядом. «Лента.ру» поговорила с такими путешественниками, узнала, почему они предпочитают отдыхать по отдельности, ревнуют ли друг друга и как раздельный отдых сказывается на их отношениях.', 'news1.jpg', '2023-09-20', 2),
(2, 'Мегашторм выбросил к берегам Анапы огромный сухогруз. ', 'Сухогруз Blue Shark под флагом государства Белиз был прибит к берегу в районе поселка Витязево во время сильного шторма в понедельник, 27 ноября. По информации Главного спасательно-координационного центра Морспасслужбы, судно после получения данных о штормовом предупреждении перешло на якорную стоянку. В это время оно начинало погрузку ячменя в морском порту Тамань. В ночь на понедельник ветер и волны сорвали его с якоря. Сухогруз дрейфовал в сторону берега, пока не оказался на мели.', 'news2.jpg', '2023-09-03', 5),
(3, 'Сотни россиян застряли в Китае и не могут вернуться на родину. Как они выживают без денег и в тяжелых условиях?', 'Сотни российских путешественников на несколько дней застряли на таможне в китайском городе Хэйхэ из-за льда на реке Амур и не могут вернуться на родину. Об этом сообщает Ассоциация туроператоров России (АТОР) в своем Telegram-канале.\r\n\r\nИзвестно, что всего на пункте пропуска Благовещенск — Хэйхэ находятся около 300 граждан России. Проблемы с переправой начались 3 ноября, когда прибывший из России теплоход не смог причалить к берегу из-за льда на реке. Находившиеся на судне люди ждали высадки несколько часов, после чего их пересадили на китайский теплоход. Затем власти Приамурья объявили, что пассажирские перевозки приостановлены. Туристов из обеих стран, прошедших таможенный и пограничный контроль, развернули обратно.', 'news3.jpg', '2023-09-26', 1),
(4, 'В Сочи ожидают сильные ливни до окончания среды', ' Ливни прогнозируются в Сочи с вечера вторника и до окончания среды, городские службы мобилизованы на случай непогоды, сообщили в пресс-службе администрации города.\r\n«\r\n\"По сообщению синоптиков, с вечера 12 декабря и до конца дня 13 декабря на территории города ожидается дождь, местами сильный. Все службы курорта работают в усиленном режиме. Ситуацию контролирует городской оперативный штаб\", - говорится в сообщении.\r\nТуристов и горожан попросили воздержаться от отдыха у воды, во избежания инцидентов, связанных с непогодой достаточно соблюдать элементарные правила безопасности, сказали в мэрии.', 'news4.jpg', '2023-09-17', 3),
(5, 'В Севастопольской бухте заработал паром', 'Паром заработал утром во вторник между центральной и северной частью Севастополя через бухту - впервые после прошедшего в конце ноября сильного шторма, сообщила ГКУ \"Дирекция по развитию дорожно-транспортной инфраструктуры города Севастополя\".\r\n\"Морской пассажирский транспорт осуществляет движение\", - говорится в сообщении. Паром впервые выходит на линию после длительного перерыва, отметили в ведомстве.', 'news5.jpg', '2023-09-14', 0),
(6, 'Горнолыжный сезон на юге России – в разгаре: новинки и фишки курортов', ' Международный день гор отмечается во всем мире 11 декабря. В России примерно треть территории — это склоны, пики, вершины. Горнолыжный сезон длится с осени и вплоть до лета, порой и включительно. В этом году благодаря снежной зиме начался он уже и на юге России. О том, как катаются туристы в Сочи и на Эльбрусе, — в фотоленте РИА Новости.', 'news6.jpg', '2023-09-20', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `operator`
--

CREATE TABLE `operator` (
  `id` int NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `operator`
--

INSERT INTO `operator` (`id`, `surname`, `name`, `patronymic`, `age`, `phone`) VALUES
(1, 'Трошина', 'Валерия', 'Богдановна', '25', '+79126452233'),
(2, 'Крюкова', 'Алиса', 'Егоровна', '26', '+79026451213'),
(3, 'Чеснокова', 'Мелания', 'Демьяновна', '27', '+79194879632'),
(4, 'Вавилова', 'Алина', ' Александровна', '25', '+79168971011');

-- --------------------------------------------------------

--
-- Структура таблицы `tour`
--

CREATE TABLE `tour` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_depature` datetime NOT NULL,
  `date_arrival` datetime DEFAULT NULL,
  `city_fly` varchar(50) NOT NULL,
  `old_number` int NOT NULL,
  `child_number` int NOT NULL,
  `day_number` int NOT NULL,
  `is_hotter` tinyint(1) NOT NULL DEFAULT '0',
  `id_country` int NOT NULL,
  `id_operator` int NOT NULL,
  `id_type` int NOT NULL,
  `id_food` int NOT NULL,
  `id_hotel` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tour`
--

INSERT INTO `tour` (`id`, `name`, `price`, `image`, `date_depature`, `date_arrival`, `city_fly`, `old_number`, `child_number`, `day_number`, `is_hotter`, `id_country`, `id_operator`, `id_type`, `id_food`, `id_hotel`) VALUES
(1, 'Поездка в Дубай', '600000', '../web/images/packages/1.jpg', '2023-12-10 10:00:00', '2023-12-20 10:00:00', 'Москва', 4, 2, 10, 1, 1, 1, 1, 1, 1),
(2, 'Поездка в Турцию', '120000', '../web/images/packages/2.jpg', '2023-12-01 12:00:00', '2023-12-19 12:00:00', 'Москва', 4, 2, 10, 1, 2, 2, 1, 2, 2),
(3, 'Поездка В Англию', '400000', '../web/images/packages/3.jpg', '2023-12-20 13:30:00', '2023-12-30 13:30:00', 'Москва', 4, 2, 10, 1, 3, 3, 1, 1, 1),
(4, 'Поездка в Италию', '400000', '../web/images/packages/4.jpg', '2023-12-30 10:30:00', '2024-01-09 10:30:00', 'Москва', 4, 2, 10, 1, 4, 4, 1, 1, 2),
(5, 'Поездка в Бразилию', '600000', '../web/images/packages/5.jpg', '2023-12-12 04:40:00', '2023-12-22 04:40:00', 'Москва', 4, 2, 10, 1, 5, 1, 1, 1, 1),
(6, 'Поездка в Индию', '500000', '../web/images/packages/6.jpg', '2023-12-29 16:00:00', '2024-01-08 16:00:00', 'Москва', 4, 2, 10, 1, 6, 2, 1, 1, 1),
(7, 'Поездка в Африку', '200000', '../web/images/packages/7.jpeg', '2023-12-04 11:37:35', '2023-12-20 10:00:00', 'Москва', 4, 2, 10, 0, 7, 3, 1, 1, 1),
(8, 'Поездка в Австралию', '300000', '../web/images/packages/8.jpg', '2023-12-24 13:40:00', '2023-12-29 13:40:00', 'Москва', 4, 2, 5, 0, 8, 4, 1, 2, 2),
(9, 'Поездка на Мертвое море', '150000', '../web/images/packages/9.jpg', '2023-12-04 11:45:00', '2023-12-14 11:45:00', 'Москва', 4, 2, 10, 0, 11, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Авиационные'),
(2, 'Железнодорожные'),
(3, 'Круизные');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `patronymic` varchar(55) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `is_admin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `surname`, `name`, `patronymic`, `email`, `password`, `phone`, `is_admin`) VALUES
(2, 'admin', 'Колоскова', 'Алина', 'Денисовна', 'admin@mail.ru', '$2y$13$4cHINOAefYM1hb/O9K5jIOEl4UiG7Yfnq.2dWnWSmUk2qIsYGb8e.', '+79615704121', 1),
(3, 'alina2004', 'Колоскова', 'Алина', 'Денисовна', 'alina2004@mail.ru', '$2y$13$GkClE5C10fHn6fgUsrY3n.BMQdVpLjkA6ZDE0qIYOYAplZZ/osGw6', '+79615704121', 0),
(4, 'marat', 'Иванов', 'Марат', 'Александрович', 'marat89@mail.ru', '$2y$13$3z7/Dd1snqWkcUJo0h/WBeO/k7irpnEvnXBbSWLL650PS2WByBbra', '+79615704121', 0),
(5, 'karina', 'Шибаева', 'Карина', 'Антоновна', 'karych@yandex.ru', '$2y$13$X3p0Scu8nUXXoIfdvOW/1uL8I1nUe4ps0xcUeKxKt448UK05gvwpG', '+79124546789', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`),
  ADD KEY `id_tour_2` (`id_tour`),
  ADD KEY `id_discount` (`id_discount`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_country` (`id_country`,`id_operator`,`id_type`,`id_food`,`id_hotel`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_food` (`id_food`),
  ADD KEY `id_operator` (`id_operator`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `food`
--
ALTER TABLE `food`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_discount`) REFERENCES `discount` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tour_ibfk_4` FOREIGN KEY (`id_food`) REFERENCES `food` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tour_ibfk_5` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tour_ibfk_6` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `tour_ibfk_7` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
