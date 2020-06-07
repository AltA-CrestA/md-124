-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2020 г., 22:19
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `md124`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bathroom`
--

CREATE TABLE `bathroom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `core` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `facade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `furniture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tabletop` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bathroom`
--

INSERT INTO `bathroom` (`id`, `name`, `image`, `core`, `facade`, `furniture`, `tabletop`, `text`, `status`) VALUES
(1, 'Тумба в ванную комнату', '6.jpg', 'ЛДСП EGGER влагостойкий', '', 'Blum', 'Искусственный камень Tristone', '', 1),
(2, 'Тумба в ванную комнату', '19.jpg', 'ЛДСП EGGER влагостойкий', 'ЛДСП EGGER влагостойкий', 'Hettich tip-one', 'Искусственный камень Tristone', '', 1),
(3, 'Тумба в ванную комнату', '34.jpg', 'ЛДСП влагостойкий EGGER', 'МДФ в плёнке глянец', 'Blum', 'Искусственный камень Tristone', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `core` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `facade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `furniture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `image`, `core`, `facade`, `furniture`, `text`, `status`) VALUES
(1, 'Консоль подвесная', '1.jpg', 'ЛДСП Lamarty', 'МДФ в краске глянец', 'Ящик blum tip-one', '', 1),
(2, 'Кухня Г-образная с барной стойкой', '2.jpg', 'ЛДСП Lamarty', 'Комбинированные: МДФ в краске глянец + МДФ в шпоне', 'Blum, тандембоксы серии Blum Antaro', 'Столешница искусственный камень Tristone<br><br>Ручки Алюминиевый профиль Gola<br><br>Мойка подстольного монтажа Sсhoск + смеситель Schock<br><br>Подсветка: врезной профиль с рассеивателем, светодиодная лента с сенсорным датчиком движения', 1),
(3, 'Кухня прямая', '3.jpg', 'ЛДСП EGGER', 'МДФ в краске глянец', 'Blum, ящики серии Antaro', 'Столешница искусственный камень Tristone<br><br>Ручки Алюминиевый профиль Gola<br><br>Подсветка: врезной профиль с рассеивателем, светодиодная лента с сенсорным датчиком движения', 1),
(4, 'Кухня Г-образная', '4.jpg', 'ЛДСП EGGER', 'МДФ в краске матовые', 'Комбинированная: Blum+Kessebohmer', 'Столешница искусственный камень Hi Macs<br><br>Ручки Алюминиевый профиль Gola<br><br>Подсветка: врезной профиль с рассеивателем, светодиодная лента с сенсорным датчиком движения', 1),
(5, 'Кухня прямая', '5.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые', 'Комбинированная Blum + Indigo', 'Столешница пластик Duropal<br><br>Подсветка врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения', 1),
(6, 'Тумба в ванную комнату', '6.jpg', 'ЛДСП EGGER влагостойкий', '', 'Blum', 'Столешница и боковины искусственный камень Tristone', 1),
(7, 'Кухня Г-образная', '7.jpg', 'ЛДСП EGGER', 'Комбинированные: МДФ в краске глянец + МДФ в шпоне', 'Blum, тандембоксы серии Blum Antaro', 'Столешница искусственный камень Hi Macs, торцевая часть столешницы-шпонированная декоративная вставка<br><br>Ручки интегрированные<br><br>Декоративная задняя панель МДФ в шпоне<br><br>Фартук МДФ в шпоне + защитная накладка из закаленного прозрачного стекла OptiWhite<br><br>Мойка подстольного монтажа Schock + смеситель Schock<br><br>Подсветка врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком', 1),
(8, 'Кухня Г-образная', '8.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке глянец', 'Blum', 'Столешница искусственный камень Tristone<br><br>Мойка подстольного монтажа Schock<br><br>Фартук стекло закалённое OptiWhite в краске<br><br>Ручки алюминиевый профиль Gola', 1),
(9, 'Кухня Г-образная', '9.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', 'Boyarb', 'Столешница пластик  Slotex', 1),
(10, 'Кухня Г-образная', '10.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', 'Комбинированная Boyarb + Indigo', 'Столешница пластик Slotex', 1),
(11, 'Шкаф + прихожая зона', '11.jpg', 'ЛДСП Lamarty', '', '', 'Алюминиевая система Modus тонкий профиль<br><br>Наполнение дверей зеркало серебро', 1),
(12, 'Шкаф + прихожая зона', '12.jpg', 'ЛДСП EGGER', 'МДФ в плёнке EvoGlose', 'Blum', '', 1),
(13, 'Кухня Г-образная', '13.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке с фрезеровкой', 'Комбинированная Indiqo + Boyarb', 'Столешница пластик Duropal', 1),
(14, 'Кухня прямая', '14.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', 'Комбинированная Blum + Indigo', 'Столешница искусственный камень Tristone', 1),
(15, 'Кухня П-образная', '15.jpg', 'ЛДСП EGGER', 'МДФ в 3D акриле', 'Blum', 'Столешница искусственный камень Hi Macs<br><br>Мойка подстольного монтажа Schock<br><br>Подсветка врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения<br><br>Ручки Алюминиевый профиль Gola', 1),
(16, 'Кухня Г-образная', '16.jpg', 'ЛДСП EGGER', 'МДФ в плёнке матовые с фрезеровкой и патиной', 'Blum', 'Столешница искусственный камень Hi Macs<br><br>Мойка подстольного монтажа Schock', 1),
(17, 'Кухня Г-образная', '17.jpg', 'ЛДСП Lamarty', 'МДФ в краске матовые с фрезеровкой', 'Blum', 'Столешница искусственный камень Tristone<br><br>Мойка подстольного монтажа Schock металлическая', 1),
(18, 'Кухня Г-образная', '18.jpg', 'ЛДСП Lamarty', 'МДФ в краске матовые комбинированные с фрезеровкой', 'Blum', 'Столешница искусственный камень Tristone<br><br>Мойка подстольного монтажа Schock<br><br>Ручки Алюминиевый профиль<br><br>Подсветка врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения', 1),
(19, 'Тумба в ванную комнату', '19.jpg', 'ЛДСП EGGER влагостойкий', 'ЛДСП EGGER влагостойкий', 'Hettich tip-one', 'Столешница искусственный камень Tristone', 1),
(20, 'Гарнитур из двух частей', '20.jpg', 'ЛДСП Lamarty', 'МДФ в краске глянец', 'Blum', 'Столешница искусственный камень Korian<br><br>Ручки Алюминиевый профиль Gola', 1),
(21, 'Шкаф Г-образный', '21.jpg', 'ЛДСП Lamarty', '', '', 'Алюминиевая система Aristo<br><br>Наполнение дверей зеркало серебро', 1),
(22, 'Кухня прямая', '22.jpg', 'ЛДСП EGGER', 'МДФ в краске глянец', 'Blum серии Antaro', 'Столешница искусственный камень Tristone<br><br>Ручки Алюминиевый профиль Gola<br><br>Мойка накладная Franke + смеситель Franke<br><br>Фартук стекло с фотопечатью<br><br>Подсветка врезная в профиле с рассеивателем, светодиодная лента с пультом', 1),
(23, 'Кухня Г-образная', '23.jpg', 'ЛДСП Lamarty', 'Комбинированные МДФ в краске глянец + пластик EGGER', 'Комбинированная Blum + Boyarb', 'Столешница пластик Duropal<br><br><Ручки интегрированные', 1),
(24, 'Шкаф прямой в прихожую', '24.jpg', 'ЛДСП EGGER', '', '', 'Алюминиевая система Aristo<br><br>Наполнение дверей комбинированное :зеркало серебро + стекло в краске с пескоструйным рисунком', 1),
(25, 'Кухня прямая', '25.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', '', 'Столешница искусственный камень Tristone<br><br>Мойка интегрированные из камня в цвет столешницы', 1),
(26, 'Кухня Г-образная', '26.jpg', 'ЛДСП EGGER', 'МДФ в краске наборная рамка', 'Blum', 'Столешница искусственный камень Tristone<br><br>Мойка подстольного монтажа Schock + смеситель Schock', 1),
(27, 'Шкаф угловой', '27.jpg', 'ЛДСП Lamarty', '', '', 'Алюминиевая система Modus тонкий профиль<br><br>Наполнение дверей зеркало графит', 1),
(28, 'Кухня Г-образная', '28.jpg', 'ЛДСП Lamarty', 'МДФ в 3D акриле', 'Комбинированная Blum +Boyarb', 'Столешница пластик СИТИПЛАСТ<br><br>Подсветка врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения<br><br>Ручки Алюминиевый профиль Gola', 1),
(29, 'Шкаф прямой', '29.jpg', 'Комбинированный ЛДСП + МДФ в плёнке', '', '', 'Алюминиевая система Modus<br><br>Наполнение дверей зеркало серебро', 1),
(30, 'Закрытый буфет для столовой зоны', '30.jpg', 'ЛДСП EGGER', 'МДФ в плёнке глянец', 'Blum', '', 1),
(31, 'Кухня П-образная', '31.jpg', 'ЛДСП EGGER', 'МДФ в плёнке матовые', 'Blum', 'Столешница искусственный камень Grandex<br><br>Фартук стекло закалённое с фотопечатью<br><br>Подсветка врезная в профиле с рассеивателем<br><br>Светодиодная лента с сенсорным датчиком движения', 1),
(32, 'Кухня Г-образная', '32.jpg', 'ЛДСП Lamarty', 'МДФ в краске глянец', 'Blum', 'Столешница искусственный камень Tristone<br><br>Мойка подстольного монтажа Schock<br><br>Ручки интегрированные<br><br>Подсветка врезная в профиле с рассеивателем и Светодиодная лента с сенсорным датчиком движения', 1),
(33, 'Шкаф хозяйственный в санузел', '33.jpg', 'ЛДСП влагостойкий EGGER', '', '', 'Алюминиевая система Modus<br><br>Наполнение дверей комбинированное ЛДСП', 1),
(34, 'Тумба в ванную комнату', '34.jpg', 'ЛДСП влагостойкий EGGER', 'МДФ в плёнке глянец', 'Blum', 'Столешница искусственный камень Tristone', 1),
(35, 'Кухня прямая', '35.jpg', 'ЛДСП EGGER', 'МДФ в плёнке', 'Комбинированная Blum + Boyarb', 'Столешница искусственный камень<br><br>Мойка подстольного монтажа Schock<br><br>Фартук пластик Slotex', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `url`, `sort_order`, `status`) VALUES
(1, 'Кухни', '5.jpg', 'kitchen', 1, 1),
(2, 'Шкафы', '11.jpg', 'wardrobe', 3, 1),
(3, 'Ванны', '6.jpg', 'bathroom', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `core` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `facade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `furniture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tabletop` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `handles` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `washing` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `backlight` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kitchen`
--

INSERT INTO `kitchen` (`id`, `name`, `image`, `core`, `facade`, `furniture`, `tabletop`, `handles`, `washing`, `backlight`, `text`, `status`) VALUES
(1, 'Кухня Г-образная с барной стойкой', '2.jpg', 'ЛДСП Lamarty', 'Комбинированные: МДФ в краске глянец + МДФ в шпоне', 'Blum, тандембоксы серии Blum Antaro', 'Искусственный камень Tristone', 'Алюминиевый профиль Gola', 'Подстольного монтажа Sсhoск + смеситель Schock', 'Врезной профиль с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(2, 'Кухня прямая', '3.jpg', 'ЛДСП EGGER', 'МДФ в краске глянец', 'Blum, ящики серии Antaro', 'Искусственный камень Tristone', 'Алюминиевый профиль Gola', '', 'Врезной профиль с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(3, 'Кухня Г-образная', '4.jpg', 'ЛДСП EGGER', 'МДФ в краске матовые', 'Комбинированная: Blum+Kessebohmer', 'Искусственный камень Hi Macs', 'Алюминиевый профиль Gola', '', 'Врезной профиль с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(4, 'Кухня прямая', '5.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые', 'Комбинированная Blum + Indigo', 'Пластик Duropal', '', '', 'Врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(5, 'Кухня Г-образная', '7.jpg', 'ЛДСП EGGER', 'Комбинированные: МДФ в краске глянец + МДФ в шпоне', 'Blum, тандембоксы серии Blum Antaro', 'Искусственный камень Hi Macs, торцевая часть столешницы-шпонированная декоративная вставка', 'Интегрированные', 'Подстольного монтажа Schock + смеситель Schock', 'Врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком', 'Декоративная задняя панель МДФ в шпоне<br><br>Фартук МДФ в шпоне + защитная накладка из закаленного прозрачного стекла OptiWhite', 1),
(6, 'Кухня Г-образная', '8.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке глянец', 'Blum', 'Искусственный камень Tristone', 'Алюминиевый профиль Gola', 'Подстольного монтажа Schock', '', 'Фартук стекло закалённое OptiWhite в краске', 1),
(7, 'Кухня Г-образная', '9.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', 'Boyarb', 'Пластик  Slotex', '', '', '', '', 1),
(8, 'Кухня Г-образная', '10.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', 'Комбинированная Boyarb + Indigo', 'Пластик Slotex', '', '', '', '', 1),
(9, 'Кухня Г-образная', '13.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке с фрезеровкой', 'Комбинированная Indiqo + Boyarb', 'Пластик Duropal', '', '', '', '', 1),
(10, 'Кухня прямая', '14.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', 'Комбинированная Blum + Indigo', 'Искусственный камень Tristone', '', '', '', '', 1),
(11, 'Кухня П-образная', '15.jpg', 'ЛДСП EGGER', 'МДФ в 3D акриле', 'Blum', 'Искусственный камень Hi Macs', 'Ручки Алюминиевый профиль Gola', 'Подстольного монтажа Schock', 'Врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(12, 'Кухня Г-образная', '16.jpg', 'ЛДСП EGGER', 'МДФ в плёнке матовые с фрезеровкой и патиной', 'Blum', 'Искусственный камень Hi Macs', '', 'Подстольного монтажа Schock', '', '', 1),
(13, 'Кухня Г-образная', '17.jpg', 'ЛДСП Lamarty', 'МДФ в краске матовые с фрезеровкой', 'Blum', 'Искусственный камень Tristone', '', 'Подстольного монтажа Schock металлическая', '', '', 1),
(14, 'Кухня Г-образная', '18.jpg', 'ЛДСП Lamarty', 'МДФ в краске матовые комбинированные с фрезеровкой', 'Blum', 'Искусственный камень Tristone', 'Алюминиевый профиль', 'Подстольного монтажа Schock', 'Подсветка врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(15, 'Гарнитур из двух частей', '20.jpg', 'ЛДСП Lamarty', 'МДФ в краске глянец', 'Blum', 'Искусственный камень Korian', 'Алюминиевый профиль Gola', '', '', '', 1),
(16, 'Кухня прямая', '22.jpg', 'ЛДСП EGGER', 'МДФ в краске глянец', 'Blum серии Antaro', 'Искусственный камень Tristone', 'Алюминиевый профиль Gola', 'Накладная Franke + смеситель Franke', 'Врезная в профиле с рассеивателем, светодиодная лента с пультом', 'Фартук стекло с фотопечатью', 1),
(17, 'Кухня Г-образная', '23.jpg', 'ЛДСП Lamarty', 'Комбинированные МДФ в краске глянец + пластик EGGER', 'Комбинированная Blum + Boyarb', 'Пластик Duropal', 'Интегрированные', '', '', '', 1),
(18, 'Кухня прямая', '25.jpg', 'ЛДСП Lamarty', 'МДФ в плёнке матовые с фрезеровкой', '', 'Искусственный камень Tristone', '', 'Интегрированные из камня в цвет столешницы', '', '', 1),
(19, 'Кухня Г-образная', '26.jpg', 'ЛДСП EGGER', 'МДФ в краске наборная рамка', 'Blum', 'Искусственный камень Tristone', '', 'Подстольного монтажа Schock + смеситель Schock', '', '', 1),
(20, 'Кухня Г-образная', '28.jpg', 'ЛДСП Lamarty', 'МДФ в 3D акриле', 'Комбинированная Blum +Boyarb', 'Пластик СИТИПЛАСТ', 'Алюминиевый профиль Gola', '', 'Врезная в профиле с рассеивателем, светодиодная лента с сенсорным датчиком движения', '', 1),
(21, 'Закрытый буфет для столовой зоны', '30.jpg', 'ЛДСП EGGER', 'МДФ в плёнке глянец', 'Blum', '', '', '', '', '', 1),
(22, 'Кухня П-образная', '31.jpg', 'ЛДСП EGGER', 'МДФ в плёнке матовые', 'Blum', 'Искусственный камень Grandex', '', '', 'Подсветка врезная в профиле с рассеивателем<br><br>Светодиодная лента с сенсорным датчиком движения', 'Фартук стекло закалённое с фотопечатью', 1),
(23, 'Кухня Г-образная', '32.jpg', 'ЛДСП Lamarty', 'МДФ в краске глянец', 'Blum', 'Искусственный камень Tristone', 'Интегрированные', 'Подстольного монтажа Schock', 'Врезная в профиле с рассеивателем и Светодиодная лента с сенсорным датчиком движения', '', 1),
(24, 'Кухня прямая', '35.jpg', 'ЛДСП EGGER', 'МДФ в плёнке', 'Комбинированная Blum + Boyarb', 'Искусственный камень', '', 'Подстольного монтажа Schock', '', 'Фартук пластик Slotex', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wardrobe`
--

CREATE TABLE `wardrobe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `core` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `facade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `furniture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `system` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `door` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wardrobe`
--

INSERT INTO `wardrobe` (`id`, `name`, `image`, `core`, `facade`, `furniture`, `system`, `door`, `text`, `status`) VALUES
(1, 'Консоль подвесная', '1.jpg', 'ЛДСП Lamarty', 'МДФ в краске глянец', 'Ящик blum tip-one', '', '', '', 1),
(2, 'Шкаф + прихожая зона', '11.jpg', 'ЛДСП Lamarty', '', '', 'Modus тонкий профиль', 'Зеркало серебро', '', 1),
(3, 'Шкаф + прихожая зона', '12.jpg', 'ЛДСП EGGER', 'МДФ в плёнке EvoGlose', 'Blum', '', '', '', 1),
(4, 'Шкаф Г-образный', '21.jpg', 'ЛДСП Lamarty', '', '', 'Aristo', 'Зеркало серебро', '', 1),
(5, 'Шкаф прямой в прихожую', '24.jpg', 'ЛДСП EGGER', '', '', 'Aristo', 'Комбинированное: зеркало серебро + стекло в краске с пескоструйным рисунком', '', 1),
(6, 'Шкаф угловой', '27.jpg', 'ЛДСП Lamarty', '', '', 'Modus тонкий профиль', 'Зеркало графит', '', 1),
(7, 'Шкаф прямой', '29.jpg', 'Комбинированный ЛДСП + МДФ в плёнке', '', '', 'Modus', 'Зеркало серебро', '', 1),
(8, 'Шкаф хозяйственный в санузел', '33.jpg', 'ЛДСП влагостойкий EGGER', '', '', 'Modus', 'Комбинированное ЛДСП', '', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bathroom`
--
ALTER TABLE `bathroom`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wardrobe`
--
ALTER TABLE `wardrobe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bathroom`
--
ALTER TABLE `bathroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `wardrobe`
--
ALTER TABLE `wardrobe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
