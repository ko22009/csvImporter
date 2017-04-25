-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 23 2017 г., 10:14
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name_trans` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `small_text` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `big_text` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `name_trans`, `price`, `small_text`, `big_text`, `user_id`) VALUES
(1, 'Sticker', 'Наклейка', 100, 'Donec velit erat, dignissim ve', 'Donec velit erat, dignissim vel libero et, lacinia blandit eros. Quisque ex nisl, iaculis ut velit nec, consequat sagittis nulla. Etiam convallis odio enim, sit amet lobortis felis congue id. Etiam vitae venenatis velit. Aliquam iaculis mauris nec elit iaculis hendrerit. Mauris consequat ligula ut sapien vehicula, elementum consequat odio posuere. Cras laoreet rhoncus nisl quis vehicula. Nullam posuere rutrum ipsum ut sagittis. Nunc tristique posuere luctus. Duis quam est, sollicitudin at facilisis ac, fermentum sed mauris. Vestibulum auctor pretium dignissim. Cras augue tortor, sollicitudin non turpis eget, lacinia porttitor mauris.', 1),
(2, 'Modem', 'Модем', 1200, 'Nullam malesuada ullamcorper t', 'Nullam malesuada ullamcorper tellus, vel finibus mauris suscipit fringilla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas posuere nibh in erat dapibus tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lobortis pulvinar euismod. Donec hendrerit, lorem id pellentesque tempor, ex velit fermentum ipsum, in pulvinar lorem dolor at velit. Maecenas diam mi, luctus placerat nibh eu, faucibus facilisis ex. Donec imperdiet sed diam eget euismod. Curabitur fermentum rhoncus hendrerit. Cras justo mi, mattis sed fringilla non, placerat sit amet nunc. Nulla non neque quis diam dictum aliquam. Nam vulputate ex at volutpat cursus.', 2),
(3, 'Keyboard', 'Клавиатура', 800, 'Donec id mauris eu ante laoree', 'Donec id mauris eu ante laoreet porttitor. Aliquam tristique arcu dui, sed dapibus tortor ullamcorper eleifend. Phasellus at posuere sapien. Vestibulum vehicula, felis vel consectetur consequat, tortor nisi laoreet urna, tempus euismod ex magna eu orci. Phasellus sodales massa nisi, non rhoncus odio faucibus et. In vitae ante eget neque faucibus accumsan in quis nisl. Morbi auctor malesuada ligula. Nunc nec vestibulum est, non venenatis est. Sed consectetur justo et pellentesque sollicitudin. Nunc mauris elit, consectetur et imperdiet eget, venenatis lacinia magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat bibendum quam, sed pulvinar tortor vehicula id. Proin accumsan elit non neque tempor, eget rutrum erat vulputate. Aliquam sit amet lacus lorem.', 2),
(4, 'Mouse', 'Мышь', 300, 'In vestibulum, justo nec gravi', 'In vestibulum, justo nec gravida malesuada, tortor magna laoreet metus, at viverra est ante sit amet purus. Ut velit risus, gravida ac sapien posuere, tincidunt vestibulum dolor. Nam odio augue, varius sit amet nunc quis, ultricies dapibus magna. Proin hendrerit, diam a convallis finibus, magna purus lobortis ligula, a molestie augue tellus quis sem. Morbi maximus lectus eu nulla iaculis, vitae fringilla tortor auctor. Pellentesque elit nibh, vestibulum non fringilla nec, interdum non purus. Nulla non quam eu metus dignissim imperdiet. Nam gravida, neque fermentum semper faucibus, neque ipsum commodo nisi, sagittis convallis ex velit eget risus. Donec et volutpat leo, eleifend auctor libero. Aliquam erat volutpat. Ut elementum massa eu auctor vulputate. Pellentesque a mauris metus.', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
