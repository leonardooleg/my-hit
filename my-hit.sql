-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 16 2022 р., 16:44
-- Версія сервера: 8.0.24
-- Версія PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `my-hit`
--

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `comment_time` datetime DEFAULT NULL,
  `comment_type` int DEFAULT '0',
  `comment_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`comment_id`, `film_id`, `user_id`, `comment_time`, `comment_type`, `comment_text`) VALUES
(1, 1, 1, '2021-09-30 17:36:46', 0, 'Нужны силы чтобы досмотреть до конца. Но оставалось пиво, поэтому досмотрел, спасибо пиву, фильм  полная.'),
(2, 1, 1, '2021-09-30 16:37:11', 2, 'Фильм получился абсолютно пустым не вызывающих никаких эмоций кроме зевоты и как признался сам режиссер газете спидинфо_ мы сделали этот проект только ради увеличения продажи поп корна они нам хорошо за это про платили и мы со своей задачей справились на ура _вобщем посмотреть можно только для галочки чтоб сказать потом всем насколько фильм лажа. (Единственным плюсом пожалуй является то что зритель после просмотра этой версии созданной только ради сбора средств хочет сразу восстановить душевный пробел и узреть что то более творческое и захватывающие то есть первые две части которые несомненно являются единственно стоящими хотя 3я и 4ая тоже норм но 5ая это просто шлак ) прям как в крепком орешке с 1 по 4 зашибон а 5 шляпа шляпная) из плюсов еще Эмилия Кларк хорошо отыграла а Джай Кортни просто не о чем да и Джейсон Кларк не вызвал особых эмоций а Шварценеггер смотрится просто как эпизодический герой и интересно как он смог обновиться и до какой версии андройд? идиотизм просто зашкаливает фильм бессмысленная лабуда'),
(3, 1, 1, '2021-08-30 13:37:56', 1, 'если вам фильм не понравился, вы не обсирайте, просто не смотрите, фильм очень интересен:)');

-- --------------------------------------------------------

--
-- Структура таблиці `countries`
--

CREATE TABLE `countries` (
  `country_id` int NOT NULL,
  `country_name` varchar(50) NOT NULL DEFAULT '0',
  `country_url` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `country_url`) VALUES
(1, 'США', 'f3');

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `films`
--

CREATE TABLE `films` (
  `film_id` int NOT NULL,
  `film_name` varchar(150) NOT NULL DEFAULT '0',
  `film_oroginal_name` varchar(150) NOT NULL DEFAULT '0',
  `film_budget` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `film_quality` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0' COMMENT 'Качество',
  `film_sound` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `film_description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `film_url` varchar(50) DEFAULT NULL,
  `film_country` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `film_oroginal_name`, `film_budget`, `film_quality`, `film_sound`, `film_description`, `film_url`, `film_country`) VALUES
(1, 'Терминатор: Генезис 1', 'Terminator: Genisys', '170,000,000 $', 'WEB-DLRip', 'Профессиональный дублированный', 'Когда Джон Коннор, лидер сопротивления, посылает сержанта Кайла Риза назад в 1984 год, чтобы защитить Сару Коннор и спасти будущее, неожиданный поворот событий создает разлом во времени. Сержант Риз оказывается в новой, незнакомой версии прошлого, где он встречает неожиданных союзников, в том числе Терминатора, новых опасных врагов, и новую миссию: изменить будущее…', NULL, 1),
(2, 'Терминатор: Генезис 2', 'Terminator: Genisys', '170,000,000 $', 'WEB-DLRip', 'Профессиональный дублированный', 'Когда Джон Коннор, лидер сопротивления, посылает сержанта Кайла Риза назад в 1984 год, чтобы защитить Сару Коннор и спасти будущее, неожиданный поворот событий создает разлом во времени. Сержант Риз оказывается в новой, незнакомой версии прошлого, где он встречает неожиданных союзников, в том числе Терминатора, новых опасных врагов, и новую миссию: изменить будущее…', NULL, 1),
(3, 'Терминатор: Генезис 3', 'Terminator: Genisys', '170,000,000 $', 'WEB-DLRip', 'Профессиональный дублированный', 'Когда Джон Коннор, лидер сопротивления, посылает сержанта Кайла Риза назад в 1984 год, чтобы защитить Сару Коннор и спасти будущее, неожиданный поворот событий создает разлом во времени. Сержант Риз оказывается в новой, незнакомой версии прошлого, где он встречает неожиданных союзников, в том числе Терминатора, новых опасных врагов, и новую миссию: изменить будущее…', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `film_directors`
--

CREATE TABLE `film_directors` (
  `film_director_id` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `star_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_directors`
--

INSERT INTO `film_directors` (`film_director_id`, `film_id`, `star_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `film_editors`
--

CREATE TABLE `film_editors` (
  `film_editor_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_editors`
--

INSERT INTO `film_editors` (`film_editor_id`, `film_id`, `star_id`) VALUES
(1, 1, 9);

-- --------------------------------------------------------

--
-- Структура таблиці `film_genres`
--

CREATE TABLE `film_genres` (
  `film_genres_id` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `genre_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_genres`
--

INSERT INTO `film_genres` (`film_genres_id`, `film_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `film_operators`
--

CREATE TABLE `film_operators` (
  `film_operator_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_operators`
--

INSERT INTO `film_operators` (`film_operator_id`, `film_id`, `star_id`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Структура таблиці `film_painters`
--

CREATE TABLE `film_painters` (
  `film_painter_id` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `star_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_painters`
--

INSERT INTO `film_painters` (`film_painter_id`, `film_id`, `star_id`) VALUES
(1, 1, 5),
(2, 2, 5),
(3, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблиці `film_producers`
--

CREATE TABLE `film_producers` (
  `film_producer_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_producers`
--

INSERT INTO `film_producers` (`film_producer_id`, `film_id`, `star_id`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `film_scenarios`
--

CREATE TABLE `film_scenarios` (
  `film_scenarios_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_scenarios`
--

INSERT INTO `film_scenarios` (`film_scenarios_id`, `film_id`, `star_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `film_stars`
--

CREATE TABLE `film_stars` (
  `film_star_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_stars`
--

INSERT INTO `film_stars` (`film_star_id`, `film_id`, `star_id`) VALUES
(1, 1, 7),
(2, 1, 8),
(3, 2, 7),
(4, 3, 7),
(5, 2, 8),
(6, 3, 8);

-- --------------------------------------------------------

--
-- Структура таблиці `film_сomposers`
--

CREATE TABLE `film_сomposers` (
  `film_сomposer_d` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `star_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `film_сomposers`
--

INSERT INTO `film_сomposers` (`film_сomposer_d`, `film_id`, `star_id`) VALUES
(1, 1, 6),
(2, 2, 6),
(3, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблиці `genres`
--

CREATE TABLE `genres` (
  `genre_id` int NOT NULL,
  `genre_name` varchar(50) NOT NULL DEFAULT '',
  `genre_link` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`, `genre_link`) VALUES
(1, 'Фантастика', 'aa'),
(2, 'Боевик', 'ab'),
(3, 'Приключения', 'a1');

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_14_134024_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `pictures`
--

CREATE TABLE `pictures` (
  `picture_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `picture_type` int DEFAULT NULL,
  `picture_link` varchar(50) DEFAULT NULL,
  `picture_views` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `pictures`
--

INSERT INTO `pictures` (`picture_id`, `film_id`, `picture_type`, `picture_link`, `picture_views`) VALUES
(1, 1, 1, '/site/1544111_500x800x250.jpg', NULL),
(2, 2, 1, '/site/1544111_500x800x250.jpg', NULL),
(3, 3, 1, '/site/1544111_500x800x250.jpg', NULL),
(4, 1, 2, '/site/1401501_220x220x50x1.jpg', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `picture_stars`
--

CREATE TABLE `picture_stars` (
  `picture_star_id` int NOT NULL,
  `picture_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп даних таблиці `picture_stars`
--

INSERT INTO `picture_stars` (`picture_star_id`, `picture_id`, `star_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `picture_types`
--

CREATE TABLE `picture_types` (
  `picture_type_id` int NOT NULL,
  `picture_type_name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `picture_types`
--

INSERT INTO `picture_types` (`picture_type_id`, `picture_type_name`) VALUES
(1, 'постер'),
(2, 'фан-арт'),
(3, 'кадр'),
(4, 'обои'),
(5, 'съёмки'),
(6, 'флаер');

-- --------------------------------------------------------

--
-- Структура таблиці `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('l81t3ROqKnrXmIJOeBM6dyQyjM4Vp7BgSWnK4iYo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.44', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN3VkaGppRHRNV3p5MXo0OWs4UU5HVE52Wnk3VmhqVFRwbExSUUZXcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM6Imh0dHA6Ly9teS1oaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjIzOiJodHRwOi8vbXktaGl0L2Rhc2hib2FyZCI7fX0=', 1631627834);

-- --------------------------------------------------------

--
-- Структура таблиці `stars`
--

CREATE TABLE `stars` (
  `star_id` int NOT NULL,
  `star_type` int DEFAULT '0',
  `star_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `star_original_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `star_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `star_height` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `star_birthplace` varchar(50) DEFAULT NULL,
  `star_about` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `star_photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `stars`
--

INSERT INTO `stars` (`star_id`, `star_type`, `star_name`, `star_original_name`, `star_date`, `star_height`, `star_birthplace`, `star_about`, `star_photo`) VALUES
(1, 1, 'Алан Тейлор', 'Alan Taylor', '0', '0', NULL, NULL, NULL),
(2, 2, 'Лаета Калогридис', '0', '0', '0', NULL, NULL, NULL),
(3, 3, 'Дэвид Эллисон', 'David Ellison', '09.01.1983', '0', NULL, NULL, NULL),
(4, 4, 'Крамер Моргенто', 'Kramer Morgenthau', '0', '0', NULL, NULL, NULL),
(5, 5, 'Нил Спайсэк', 'Neil Spisak', '0', '0', NULL, NULL, NULL),
(6, 6, 'Лорни Бэлфи', 'Lorne Balfe', '23.02.1976', '0', NULL, NULL, NULL),
(7, 7, 'Эмилия Кларк', 'Emilia Clarke', '01.05.1987', '157 см.', 'Лондон, Великобритания', 'Британская актриса театра и кино.', '/site/1227430_210x300x50x2.jpg'),
(8, 7, 'Арнольд Шварценеггер', 'Arnold Schwarzenegger', '30.07.1947', '188 см.', 'Австрия, Таль', '\"Железный Арни\", как привыкли величать Шварценеггера его фанаты по всему миру, родился 30 июля 1947 года в небольшом австрийском городке Грац. С детства мальчик питал слабость к спорту, любил участвовать в различных соревнованиях, его отец даже хотел, чтобы Арнольд стал профессиональным футболистом. Но судьба распорядилась иначе и, покинув местную футбольную команду, Арни занялся бодибилдингом. На этом поприще удача постоянно сопутствовала молодому атлету и Шварценеггер многократно становился \"Мистером Вселенная\", \"Мистером Олимпия\", побеждал на многих других соревнованиях и в результате вошел в историю спорта как один из самых успешных культуристов мира.', '/site/185042_500x800x250.jpg'),
(9, 8, 'Роджер Бартон', '0', '0', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `star_types`
--

CREATE TABLE `star_types` (
  `star_type_id` int NOT NULL,
  `star_type_name` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `star_types`
--

INSERT INTO `star_types` (`star_type_id`, `star_type_name`) VALUES
(1, 'Режисер'),
(2, 'Сценарий'),
(3, 'Продюсеры'),
(4, 'Оператор'),
(5, 'Художник'),
(6, 'Композитор'),
(7, 'Актер'),
(8, 'Монтажеры');

-- --------------------------------------------------------

--
-- Структура таблиці `techinfo`
--

CREATE TABLE `techinfo` (
  `techinfo_id` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `release` date NOT NULL,
  `duration` tinytext NOT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `techinfo`
--

INSERT INTO `techinfo` (`techinfo_id`, `film_id`, `release`, `duration`, `status`) VALUES
(1, 1, '2021-09-27', '156', 1),
(2, 2, '2020-08-22', '244', 1),
(3, 3, '2022-10-31', '92', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `techinfo_statuses`
--

CREATE TABLE `techinfo_statuses` (
  `techinfo_status_id` int NOT NULL,
  `techinfo_status_name` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `techinfo_statuses`
--

INSERT INTO `techinfo_statuses` (`techinfo_status_id`, `techinfo_status_name`) VALUES
(1, 'Выпущен'),
(2, 'Не выпущен');

-- --------------------------------------------------------

--
-- Структура таблиці `trivias`
--

CREATE TABLE `trivias` (
  `trivia_id` int NOT NULL,
  `film_id` int DEFAULT NULL,
  `trivia_text` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `trivias`
--

INSERT INTO `trivias` (`trivia_id`, `film_id`, `trivia_text`) VALUES
(1, 1, 'Рабочее название фильма — «Vista», что является отсылкой к известной фразе «Hasta la vista, baby».'),
(2, 1, 'Режиссером фильма могли стать: Джастин Лин, Энг Ли, Райан Джонсон и Дени Вильнёв.'),
(3, 1, 'Эмилия Кларк стала второй актрисой из сериала «Игра престолов» (2011), исполнившей роль Сары Коннор. Несколько лет назад мать спасителя человечества играла Лина Хиди в сериале «Терминатор: Битва за будущее» (2008-2009).'),
(4, 1, 'Джай Кортни мог выбыть из актерского состава фильма, т. к. съёмочный график совпадал с производством сиквела фильма «Дивергент» (2014). Но контракт был составлен таким образом, чтобы он смог сняться в обоих фильмах.'),
(5, 2, 'Создатели фильма рассматривали в качестве претендентов на роль Дэнни Дайсона актеров Джона Бойегу и Дайо Окенийи. Первый в итоге отклонил предложение сам ради участия в седьмом эпизоде «Звездных войн» и роль Дайсона досталась Окенийи.');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'LeonardoOleg', 'leonardooleg2@gmail.com', NULL, '$2y$10$Tn/TFv1V6/.FWKEqNd.GBul8V3pZJBdQCVZcxuOsXwwC9OPlUTuZi', NULL, NULL, NULL, NULL, '999434_90x90x30.jpg', '2021-09-30 11:35:43', '2021-09-30 11:35:43');

-- --------------------------------------------------------

--
-- Структура таблиці `videos`
--

CREATE TABLE `videos` (
  `video_id` int NOT NULL,
  `film_id` int NOT NULL DEFAULT '0',
  `video_name` varchar(50) DEFAULT NULL,
  `video_type` int DEFAULT NULL,
  `video_link` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `video_kadr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `videos`
--

INSERT INTO `videos` (`video_id`, `film_id`, `video_name`, `video_type`, `video_link`, `video_kadr`) VALUES
(1, 1, 'Терминатор: Генезис (2015) - фрагмент', 2, '21_420x236x50.jpg', '21_420x236x50.jpg'),
(2, 1, 'Терминатор: Генезис (2015) - трейлер', 1, '21_420x236x50.jpg', '1000014_90x90x30.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `video_stars`
--

CREATE TABLE `video_stars` (
  `video_star_id` int NOT NULL,
  `video_id` int DEFAULT NULL,
  `star_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `video_stars`
--

INSERT INTO `video_stars` (`video_star_id`, `video_id`, `star_id`) VALUES
(1, 1, 1),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `video_types`
--

CREATE TABLE `video_types` (
  `video_type_id` int NOT NULL,
  `video_type_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `video_types`
--

INSERT INTO `video_types` (`video_type_id`, `video_type_name`) VALUES
(1, 'трейлеры'),
(2, 'фрагменты'),
(3, 'промо'),
(4, 'клипы'),
(5, 'интервью'),
(6, 'съёмки');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Індекси таблиці `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Індекси таблиці `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`);

--
-- Індекси таблиці `film_directors`
--
ALTER TABLE `film_directors`
  ADD PRIMARY KEY (`film_director_id`) USING BTREE;

--
-- Індекси таблиці `film_editors`
--
ALTER TABLE `film_editors`
  ADD PRIMARY KEY (`film_editor_id`);

--
-- Індекси таблиці `film_genres`
--
ALTER TABLE `film_genres`
  ADD PRIMARY KEY (`film_genres_id`);

--
-- Індекси таблиці `film_operators`
--
ALTER TABLE `film_operators`
  ADD PRIMARY KEY (`film_operator_id`);

--
-- Індекси таблиці `film_painters`
--
ALTER TABLE `film_painters`
  ADD PRIMARY KEY (`film_painter_id`);

--
-- Індекси таблиці `film_producers`
--
ALTER TABLE `film_producers`
  ADD PRIMARY KEY (`film_producer_id`);

--
-- Індекси таблиці `film_scenarios`
--
ALTER TABLE `film_scenarios`
  ADD PRIMARY KEY (`film_scenarios_id`);

--
-- Індекси таблиці `film_stars`
--
ALTER TABLE `film_stars`
  ADD PRIMARY KEY (`film_star_id`);

--
-- Індекси таблиці `film_сomposers`
--
ALTER TABLE `film_сomposers`
  ADD PRIMARY KEY (`film_сomposer_d`);

--
-- Індекси таблиці `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Індекси таблиці `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`picture_id`);

--
-- Індекси таблиці `picture_stars`
--
ALTER TABLE `picture_stars`
  ADD PRIMARY KEY (`picture_star_id`) USING BTREE;

--
-- Індекси таблиці `picture_types`
--
ALTER TABLE `picture_types`
  ADD PRIMARY KEY (`picture_type_id`);

--
-- Індекси таблиці `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Індекси таблиці `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`star_id`),
  ADD KEY `star_type` (`star_type`);

--
-- Індекси таблиці `star_types`
--
ALTER TABLE `star_types`
  ADD PRIMARY KEY (`star_type_id`);

--
-- Індекси таблиці `techinfo`
--
ALTER TABLE `techinfo`
  ADD PRIMARY KEY (`techinfo_id`);

--
-- Індекси таблиці `techinfo_statuses`
--
ALTER TABLE `techinfo_statuses`
  ADD PRIMARY KEY (`techinfo_status_id`);

--
-- Індекси таблиці `trivias`
--
ALTER TABLE `trivias`
  ADD PRIMARY KEY (`trivia_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Індекси таблиці `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Індекси таблиці `video_stars`
--
ALTER TABLE `video_stars`
  ADD PRIMARY KEY (`video_star_id`);

--
-- Індекси таблиці `video_types`
--
ALTER TABLE `video_types`
  ADD PRIMARY KEY (`video_type_id`) USING BTREE;

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `film_directors`
--
ALTER TABLE `film_directors`
  MODIFY `film_director_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `film_editors`
--
ALTER TABLE `film_editors`
  MODIFY `film_editor_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `film_genres`
--
ALTER TABLE `film_genres`
  MODIFY `film_genres_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `film_operators`
--
ALTER TABLE `film_operators`
  MODIFY `film_operator_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `film_painters`
--
ALTER TABLE `film_painters`
  MODIFY `film_painter_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `film_producers`
--
ALTER TABLE `film_producers`
  MODIFY `film_producer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `film_scenarios`
--
ALTER TABLE `film_scenarios`
  MODIFY `film_scenarios_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `film_stars`
--
ALTER TABLE `film_stars`
  MODIFY `film_star_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `film_сomposers`
--
ALTER TABLE `film_сomposers`
  MODIFY `film_сomposer_d` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `pictures`
--
ALTER TABLE `pictures`
  MODIFY `picture_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `picture_stars`
--
ALTER TABLE `picture_stars`
  MODIFY `picture_star_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `picture_types`
--
ALTER TABLE `picture_types`
  MODIFY `picture_type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `stars`
--
ALTER TABLE `stars`
  MODIFY `star_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `star_types`
--
ALTER TABLE `star_types`
  MODIFY `star_type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `techinfo`
--
ALTER TABLE `techinfo`
  MODIFY `techinfo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `techinfo_statuses`
--
ALTER TABLE `techinfo_statuses`
  MODIFY `techinfo_status_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `trivias`
--
ALTER TABLE `trivias`
  MODIFY `trivia_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `video_stars`
--
ALTER TABLE `video_stars`
  MODIFY `video_star_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `video_types`
--
ALTER TABLE `video_types`
  MODIFY `video_type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
