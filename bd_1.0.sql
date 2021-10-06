-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Версія сервера:               8.0.24 - MySQL Community Server - GPL
-- ОС сервера:                   Win64
-- HeidiSQL Версія:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table my-hit.comments: ~3 rows (приблизно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`comment_id`, `film_id`, `user_id`, `comment_time`, `comment_type`, `comment_text`) VALUES
	(1, 1, 1, '2021-09-30 17:36:46', 0, 'Нужны силы чтобы досмотреть до конца. Но оставалось пиво, поэтому досмотрел, спасибо пиву, фильм  полная.'),
	(2, 1, 1, '2021-09-30 16:37:11', 2, 'Фильм получился абсолютно пустым не вызывающих никаких эмоций кроме зевоты и как признался сам режиссер газете спидинфо_ мы сделали этот проект только ради увеличения продажи поп корна они нам хорошо за это про платили и мы со своей задачей справились на ура _вобщем посмотреть можно только для галочки чтоб сказать потом всем насколько фильм лажа. (Единственным плюсом пожалуй является то что зритель после просмотра этой версии созданной только ради сбора средств хочет сразу восстановить душевный пробел и узреть что то более творческое и захватывающие то есть первые две части которые несомненно являются единственно стоящими хотя 3я и 4ая тоже норм но 5ая это просто шлак ) прям как в крепком орешке с 1 по 4 зашибон а 5 шляпа шляпная) из плюсов еще Эмилия Кларк хорошо отыграла а Джай Кортни просто не о чем да и Джейсон Кларк не вызвал особых эмоций а Шварценеггер смотрится просто как эпизодический герой и интересно как он смог обновиться и до какой версии андройд? идиотизм просто зашкаливает фильм бессмысленная лабуда'),
	(3, 1, 1, '2021-08-30 13:37:56', 1, 'если вам фильм не понравился, вы не обсирайте, просто не смотрите, фильм очень интересен:)');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping data for table my-hit.countries: ~0 rows (приблизно)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`country_id`, `country_name`, `country_url`) VALUES
	(1, 'США', 'f3');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping data for table my-hit.failed_jobs: ~0 rows (приблизно)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table my-hit.films: ~3 rows (приблизно)
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` (`film_id`, `film_name`, `film_oroginal_name`, `film_budget`, `film_quality`, `film_sound`, `film_description`, `film_url`, `film_country`) VALUES
	(1, 'Терминатор: Генезис 1', 'Terminator: Genisys', '170,000,000 $', 'WEB-DLRip', 'Профессиональный дублированный', 'Когда Джон Коннор, лидер сопротивления, посылает сержанта Кайла Риза назад в 1984 год, чтобы защитить Сару Коннор и спасти будущее, неожиданный поворот событий создает разлом во времени. Сержант Риз оказывается в новой, незнакомой версии прошлого, где он встречает неожиданных союзников, в том числе Терминатора, новых опасных врагов, и новую миссию: изменить будущее…', NULL, 1),
	(2, 'Терминатор: Генезис 2', 'Terminator: Genisys', '170,000,000 $', 'WEB-DLRip', 'Профессиональный дублированный', 'Когда Джон Коннор, лидер сопротивления, посылает сержанта Кайла Риза назад в 1984 год, чтобы защитить Сару Коннор и спасти будущее, неожиданный поворот событий создает разлом во времени. Сержант Риз оказывается в новой, незнакомой версии прошлого, где он встречает неожиданных союзников, в том числе Терминатора, новых опасных врагов, и новую миссию: изменить будущее…', NULL, 1),
	(3, 'Терминатор: Генезис 3', 'Terminator: Genisys', '170,000,000 $', 'WEB-DLRip', 'Профессиональный дублированный', 'Когда Джон Коннор, лидер сопротивления, посылает сержанта Кайла Риза назад в 1984 год, чтобы защитить Сару Коннор и спасти будущее, неожиданный поворот событий создает разлом во времени. Сержант Риз оказывается в новой, незнакомой версии прошлого, где он встречает неожиданных союзников, в том числе Терминатора, новых опасных врагов, и новую миссию: изменить будущее…', NULL, 1);
/*!40000 ALTER TABLE `films` ENABLE KEYS */;

-- Dumping data for table my-hit.film_directors: ~2 rows (приблизно)
/*!40000 ALTER TABLE `film_directors` DISABLE KEYS */;
INSERT INTO `film_directors` (`film_director_id`, `film_id`, `star_id`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1);
/*!40000 ALTER TABLE `film_directors` ENABLE KEYS */;

-- Dumping data for table my-hit.film_editors: ~0 rows (приблизно)
/*!40000 ALTER TABLE `film_editors` DISABLE KEYS */;
INSERT INTO `film_editors` (`film_editor_id`, `film_id`, `star_id`) VALUES
	(1, 1, 9);
/*!40000 ALTER TABLE `film_editors` ENABLE KEYS */;

-- Dumping data for table my-hit.film_genres: ~9 rows (приблизно)
/*!40000 ALTER TABLE `film_genres` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `film_genres` ENABLE KEYS */;

-- Dumping data for table my-hit.film_operators: ~3 rows (приблизно)
/*!40000 ALTER TABLE `film_operators` DISABLE KEYS */;
INSERT INTO `film_operators` (`film_operator_id`, `film_id`, `star_id`) VALUES
	(1, 1, 4),
	(2, 2, 4),
	(3, 3, 4);
/*!40000 ALTER TABLE `film_operators` ENABLE KEYS */;

-- Dumping data for table my-hit.film_painters: ~2 rows (приблизно)
/*!40000 ALTER TABLE `film_painters` DISABLE KEYS */;
INSERT INTO `film_painters` (`film_painter_id`, `film_id`, `star_id`) VALUES
	(1, 1, 5),
	(2, 2, 5),
	(3, 3, 5);
/*!40000 ALTER TABLE `film_painters` ENABLE KEYS */;

-- Dumping data for table my-hit.film_producers: ~2 rows (приблизно)
/*!40000 ALTER TABLE `film_producers` DISABLE KEYS */;
INSERT INTO `film_producers` (`film_producer_id`, `film_id`, `star_id`) VALUES
	(1, 1, 3),
	(2, 2, 3),
	(3, 3, 3);
/*!40000 ALTER TABLE `film_producers` ENABLE KEYS */;

-- Dumping data for table my-hit.film_scenarios: ~2 rows (приблизно)
/*!40000 ALTER TABLE `film_scenarios` DISABLE KEYS */;
INSERT INTO `film_scenarios` (`film_scenarios_id`, `film_id`, `star_id`) VALUES
	(1, 1, 2),
	(2, 2, 2),
	(3, 3, 2);
/*!40000 ALTER TABLE `film_scenarios` ENABLE KEYS */;

-- Dumping data for table my-hit.film_stars: ~6 rows (приблизно)
/*!40000 ALTER TABLE `film_stars` DISABLE KEYS */;
INSERT INTO `film_stars` (`film_star_id`, `film_id`, `star_id`) VALUES
	(1, 1, 7),
	(2, 1, 8),
	(3, 2, 7),
	(4, 3, 7),
	(5, 2, 8),
	(6, 3, 8);
/*!40000 ALTER TABLE `film_stars` ENABLE KEYS */;

-- Dumping data for table my-hit.film_сomposers: ~2 rows (приблизно)
/*!40000 ALTER TABLE `film_сomposers` DISABLE KEYS */;
INSERT INTO `film_сomposers` (`film_сomposer_d`, `film_id`, `star_id`) VALUES
	(1, 1, 6),
	(2, 2, 6),
	(3, 3, 6);
/*!40000 ALTER TABLE `film_сomposers` ENABLE KEYS */;

-- Dumping data for table my-hit.genres: ~2 rows (приблизно)
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` (`genre_id`, `genre_name`, `genre_link`) VALUES
	(1, 'Фантастика', 'aa'),
	(2, 'Боевик', 'ab'),
	(3, 'Приключения', 'a1');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;

-- Dumping data for table my-hit.migrations: ~6 rows (приблизно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2021_09_14_134024_create_sessions_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table my-hit.password_resets: ~0 rows (приблизно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table my-hit.personal_access_tokens: ~0 rows (приблизно)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table my-hit.pictures: ~3 rows (приблизно)
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` (`picture_id`, `film_id`, `picture_type`, `picture_link`, `picture_views`) VALUES
	(1, 1, 1, '/site/1544111_500x800x250.jpg', NULL),
	(2, 2, 1, '/site/1544111_500x800x250.jpg', NULL),
	(3, 3, 1, '/site/1544111_500x800x250.jpg', NULL),
	(4, 1, 2, '/site/1401501_220x220x50x1.jpg', NULL);
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;

-- Dumping data for table my-hit.picture_types: ~2 rows (приблизно)
/*!40000 ALTER TABLE `picture_types` DISABLE KEYS */;
INSERT INTO `picture_types` (`picture_type_id`, `picture_type_name`) VALUES
	(1, 'постер'),
	(2, 'фан-арт'),
	(3, 'кадр'),
	(4, 'обои'),
	(5, 'съёмки'),
	(6, 'флаер');
/*!40000 ALTER TABLE `picture_types` ENABLE KEYS */;

-- Dumping data for table my-hit.sessions: ~1 rows (приблизно)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('l81t3ROqKnrXmIJOeBM6dyQyjM4Vp7BgSWnK4iYo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.44', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN3VkaGppRHRNV3p5MXo0OWs4UU5HVE52Wnk3VmhqVFRwbExSUUZXcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTM6Imh0dHA6Ly9teS1oaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjIzOiJodHRwOi8vbXktaGl0L2Rhc2hib2FyZCI7fX0=', 1631627834);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping data for table my-hit.stars: ~8 rows (приблизно)
/*!40000 ALTER TABLE `stars` DISABLE KEYS */;
INSERT INTO `stars` (`star_id`, `star_type`, `star_name`, `star_original_name`, `star_date`, `star_height`, `star_birthplace`, `star_about`, `star_photo`) VALUES
	(1, 1, 'Алан Тейлор', 'Alan Taylor', '0', '0', NULL, NULL, NULL),
	(2, 2, 'Лаета Калогридис', '0', '0', '0', NULL, NULL, NULL),
	(3, 3, 'Дэвид Эллисон', 'David Ellison', '09.01.1983', '0', NULL, NULL, NULL),
	(4, 4, 'Крамер Моргенто', 'Kramer Morgenthau', '0', '0', NULL, NULL, NULL),
	(5, 5, 'Нил Спайсэк', 'Neil Spisak', '0', '0', NULL, NULL, NULL),
	(6, 6, 'Лорни Бэлфи', 'Lorne Balfe', '23.02.1976', '0', NULL, NULL, NULL),
	(7, 7, 'Эмилия Кларк', 'Emilia Clarke', '01.05.1987', '157 см.', 'Лондон, Великобритания', 'Британская актриса театра и кино.', '/site/1227430_210x300x50x2.jpg'),
	(8, 7, 'Арнольд Шварценеггер', 'Arnold Schwarzenegger', '30.07.1947', '188 см.', 'Австрия, Таль', '"Железный Арни", как привыкли величать Шварценеггера его фанаты по всему миру, родился 30 июля 1947 года в небольшом австрийском городке Грац. С детства мальчик питал слабость к спорту, любил участвовать в различных соревнованиях, его отец даже хотел, чтобы Арнольд стал профессиональным футболистом. Но судьба распорядилась иначе и, покинув местную футбольную команду, Арни занялся бодибилдингом. На этом поприще удача постоянно сопутствовала молодому атлету и Шварценеггер многократно становился "Мистером Вселенная", "Мистером Олимпия", побеждал на многих других соревнованиях и в результате вошел в историю спорта как один из самых успешных культуристов мира.', '/site/185042_500x800x250.jpg'),
	(9, 8, 'Роджер Бартон', '0', '0', '0', NULL, NULL, NULL);
/*!40000 ALTER TABLE `stars` ENABLE KEYS */;

-- Dumping data for table my-hit.star_types: ~6 rows (приблизно)
/*!40000 ALTER TABLE `star_types` DISABLE KEYS */;
INSERT INTO `star_types` (`star_type_id`, `star_type_name`) VALUES
	(1, 'Режисер'),
	(2, 'Сценарий'),
	(3, 'Продюсеры'),
	(4, 'Оператор'),
	(5, 'Художник'),
	(6, 'Композитор'),
	(7, 'Актер'),
	(8, 'Монтажеры');
/*!40000 ALTER TABLE `star_types` ENABLE KEYS */;

-- Dumping data for table my-hit.techinfo: ~2 rows (приблизно)
/*!40000 ALTER TABLE `techinfo` DISABLE KEYS */;
INSERT INTO `techinfo` (`techinfo_id`, `film_id`, `release`, `duration`, `status`) VALUES
	(1, 1, '2021-09-27', '156', 1),
	(2, 2, '2020-08-22', '244', 1),
	(3, 3, '2022-10-31', '92', 0);
/*!40000 ALTER TABLE `techinfo` ENABLE KEYS */;

-- Dumping data for table my-hit.techinfo_statuses: ~0 rows (приблизно)
/*!40000 ALTER TABLE `techinfo_statuses` DISABLE KEYS */;
INSERT INTO `techinfo_statuses` (`techinfo_status_id`, `techinfo_status_name`) VALUES
	(1, 'Выпущен'),
	(2, 'Не выпущен');
/*!40000 ALTER TABLE `techinfo_statuses` ENABLE KEYS */;

-- Dumping data for table my-hit.trivias: ~4 rows (приблизно)
/*!40000 ALTER TABLE `trivias` DISABLE KEYS */;
INSERT INTO `trivias` (`trivia_id`, `film_id`, `trivia_text`) VALUES
	(1, 1, 'Рабочее название фильма — «Vista», что является отсылкой к известной фразе «Hasta la vista, baby».'),
	(2, 1, 'Режиссером фильма могли стать: Джастин Лин, Энг Ли, Райан Джонсон и Дени Вильнёв.'),
	(3, 1, 'Эмилия Кларк стала второй актрисой из сериала «Игра престолов» (2011), исполнившей роль Сары Коннор. Несколько лет назад мать спасителя человечества играла Лина Хиди в сериале «Терминатор: Битва за будущее» (2008-2009).'),
	(4, 1, 'Джай Кортни мог выбыть из актерского состава фильма, т. к. съёмочный график совпадал с производством сиквела фильма «Дивергент» (2014). Но контракт был составлен таким образом, чтобы он смог сняться в обоих фильмах.'),
	(5, 2, 'Создатели фильма рассматривали в качестве претендентов на роль Дэнни Дайсона актеров Джона Бойегу и Дайо Окенийи. Первый в итоге отклонил предложение сам ради участия в седьмом эпизоде «Звездных войн» и роль Дайсона досталась Окенийи.');
/*!40000 ALTER TABLE `trivias` ENABLE KEYS */;

-- Dumping data for table my-hit.users: ~0 rows (приблизно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'LeonardoOleg', 'leonardooleg2@gmail.com', NULL, '$2y$10$Tn/TFv1V6/.FWKEqNd.GBul8V3pZJBdQCVZcxuOsXwwC9OPlUTuZi', NULL, NULL, NULL, NULL, NULL, '2021-09-30 14:35:43', '2021-09-30 14:35:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table my-hit.videos: ~2 rows (приблизно)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`video_id`, `film_id`, `video_name`, `video_type`, `video_link`, `video_kadr`) VALUES
	(1, 1, 'Терминатор: Генезис (2015) - фрагмент', 2, '21_420x236x50.jpg', '21_420x236x50.jpg'),
	(2, 1, 'Терминатор: Генезис (2015) - трейлер', 1, '21_420x236x50.jpg', '1000014_90x90x30.jpg');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

-- Dumping data for table my-hit.video_types: ~3 rows (приблизно)
/*!40000 ALTER TABLE `video_types` DISABLE KEYS */;
INSERT INTO `video_types` (`video_type_id`, `video_type_name`) VALUES
	(1, 'трейлеры'),
	(2, 'фрагменты'),
	(3, 'промо'),
	(4, 'клипы'),
	(5, 'интервью'),
	(6, 'съёмки');
/*!40000 ALTER TABLE `video_types` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
