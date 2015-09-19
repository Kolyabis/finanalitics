-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 16 2015 г., 13:27
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `fin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `page` char(20) NOT NULL,
  `alias` char(30) NOT NULL,
  `parent_id` tinyint(4) NOT NULL,
  `controller` char(20) NOT NULL,
  `id_cat` tinyint(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `page`, `alias`, `parent_id`, `controller`, `id_cat`, `status`, `data`) VALUES
(1, 'О компании', 'home', 0, 'index', 0, 0, '2015-09-15 00:00:00'),
(2, 'Клиентам', 'customers', 0, 'customers', 0, 0, '2015-09-15 00:00:00'),
(3, 'Полезное', 'useful', 0, 'useful', 0, 0, '2015-09-15 00:00:00'),
(4, 'Новости', 'news', 0, 'news', 0, 0, '2015-09-15 00:00:00'),
(5, 'Партнерам', 'partner', 0, 'partner', 0, 0, '2015-09-15 00:00:00'),
(6, 'Test', 'test', 2, 'news', 0, 0, '2015-09-15 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
