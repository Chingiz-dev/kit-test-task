-- Adminer 4.8.1 MySQL 8.0.20 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `nests`;
CREATE TABLE `nests` (
  `nest_id` int NOT NULL AUTO_INCREMENT,
  `nest_parent` int NOT NULL,
  `nest_title` tinytext NOT NULL,
  `nest_desc` longtext NOT NULL,
  PRIMARY KEY (`nest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `nests` (`nest_id`, `nest_parent`, `nest_title`, `nest_desc`) VALUES
(1,	0,	'люди',	'все люди'),
(2,	1,	'мужчины',	'все мужчины'),
(3,	0,	'животные',	'класс животный'),
(4,	3,	'собаки',	'подкласс собаки'),
(5,	3,	'кошки',	'подкласс кошки'),
(6,	4,	'тузик',	'кличка собаки'),
(7,	4,	'шарик',	'кличка собаки'),
(8,	5,	'барсик',	'кличка кошки'),
(9,	5,	'котяра',	'кличка кошки'),
(10,	1,	'женщины',	'все женщины'),
(11,	2,	'Сергей',	'особь мужского пола'),
(12,	11,	'молодой',	'возраст Сергея'),
(13,	11,	'умный',	'описание Сергея'),
(14,	0,	'транспорт',	'весь транспорт'),
(15,	14,	'морской',	'морской транспорт'),
(16,	14,	'авто',	'авто транспорт'),
(17,	16,	'мотоциклы',	'входит в группу авто транспорта'),
(18,	15,	'корабль',	'входит в группу морского транспорта');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_id` int NOT NULL AUTO_INCREMENT,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`) VALUES
(1,	'admin',	'$2y$10$RoK0zgAvD08e4JRyG78lDOWe6.h1YEr16pxd.8Qo.So/MU7tPys2G');

-- 2022-04-13 18:41:45
