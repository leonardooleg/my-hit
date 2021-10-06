<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MY-HIT энциклопедия кино | Фильмы онлайн, скачать бесплатно') }}</title>
    <meta name="keywords"
          content="смотреть фильмы онлайн, фильмы онлайн в хорошем качестве, кино смотреть онлайн, my-hit, май хит">
    <meta name="description"
          content="Смотреть фильмы онлайн бесплатно на кинопортале MY-HIT. Наслаждайтесь фильмами онлайн в хорошем качестве. Скачать фильмы бесплатно.">

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/favicon.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <script src="https://use.fontawesome.com/c87025ea8d.js"></script>
    <link rel="StyleSheet" href="/css/pack.css?v34" type="text/css">
    <link rel="StyleSheet" href="/branding/js/branding-5.css" type="text/css">
    <script type="text/javascript" src="/js/pack.js?v=20"></script>
    <style>
        #flash_header{
            height:200px;
            width:100%;
            background:#000;
            overflow:hidden;
            margin-top:-20px;
        }
        #branding_flash{
            position:relative;
            left:50%;
            margin-left:-675px;
        }

    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v3.2.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>
<body style="min-width: 700px;">
    <div id="app">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="/"><img
                            style="margin-top:-11px;margin-bottom:-6px;height:30px;" src="/images/logo.svg"
                            alt=""> MY-HIT</a></div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown" style="margin-left: 30px;"><a href="/film/" class="dropdown-toggle"
                                                                           data-toggle="dropdown">Фильмы <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu navbar-list-multi">
                                <li><a href="/film/av/">Биография</a></li>
                                <li><a href="/film/ab/">Боевик</a></li>
                                <li><a href="/film/az/">Вестерн</a></li>
                                <li><a href="/film/at/">Военный</a></li>
                                <li><a href="/film/aj/">Детектив</a></li>
                                <li><a href="/film/a2/">Детский</a></li>
                                <li><a href="/film/ag/">Документальный</a></li>
                                <li><a href="/film/ad/">Драма</a></li>
                                <li><a href="/film/aq/">Исторический</a></li>
                                <li><a href="/film/a6/">Комедия</a></li>
                                <li><a href="/film/af/">Криминал</a></li>
                                <li><a href="/film/al/">Мелодрама</a></li>
                                <li><a href="/film/ak/">Мистика</a></li>
                                <li><a href="/film/a8/">Музыка</a></li>
                                <li><a href="/film/a9/">Мультфильм</a></li>
                                <li><a href="/film/ac/">Мюзикл</a></li>
                                <li><a href="/film/a1/">Приключения</a></li>
                                <li><a href="/film/a1b/">Психологический</a></li>
                                <li><a href="/film/a2k/">Разное</a></li>
                                <li><a href="/film/a18/">Романтический</a></li>
                                <li><a href="/film/a3/">Семейный</a></li>
                                <li><a href="/film/ap/">Спорт</a></li>
                                <li><a href="/film/ai/">Триллер</a></li>
                                <li><a href="/film/ah/">Ужасы</a></li>
                                <li><a href="/film/aa/">Фантастика</a></li>
                                <li><a href="/film/a7/">Фэнтези</a></li>
                                <li class="nav-divider"></li>
                                <li><a href="/film/i1k3/">2019</a></li>
                                <li><a href="/film/i1k2/">2018</a></li>
                                <li><a href="/film/i1k1/">2017</a></li>
                                <li class="nav-divider"></li>
                                <li><a href="/film/">Новые</a></li>
                                <li><a href="/film/?s=3">Популярные</a></li>
                                <li><a href="/selection/film/">Подборки</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/serial/" class="dropdown-toggle" data-toggle="dropdown">Сериалы <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu navbar-list-multi">
                                <li><a href="/serial/av/">Биография</a></li>
                                <li><a href="/serial/ab/">Боевик</a></li>
                                <li><a href="/serial/az/">Вестерн</a></li>
                                <li><a href="/serial/at/">Военный</a></li>
                                <li><a href="/serial/aj/">Детектив</a></li>
                                <li><a href="/serial/a2/">Детский</a></li>
                                <li><a href="/serial/ag/">Документальный</a></li>
                                <li><a href="/serial/ad/">Драма</a></li>
                                <li><a href="/serial/aq/">Исторический</a></li>
                                <li><a href="/serial/a6/">Комедия</a></li>
                                <li><a href="/serial/af/">Криминал</a></li>
                                <li><a href="/serial/al/">Мелодрама</a></li>
                                <li><a href="/serial/ak/">Мистика</a></li>
                                <li><a href="/serial/a8/">Музыка</a></li>
                                <li><a href="/serial/a9/">Мультфильм</a></li>
                                <li><a href="/serial/ac/">Мюзикл</a></li>
                                <li><a href="/serial/a1/">Приключения</a></li>
                                <li><a href="/serial/a1b/">Психологический</a></li>
                                <li><a href="/serial/a2k/">Разное</a></li>
                                <li><a href="/serial/a18/">Романтический</a></li>
                                <li><a href="/serial/a3/">Семейный</a></li>
                                <li><a href="/serial/ap/">Спорт</a></li>
                                <li><a href="/serial/ai/">Триллер</a></li>
                                <li><a href="/serial/ah/">Ужасы</a></li>
                                <li><a href="/serial/aa/">Фантастика</a></li>
                                <li><a href="/serial/a7/">Фэнтези</a></li>
                                <li class="nav-divider"></li>
                                <li><a href="/serial/i1k3/">2019</a></li>
                                <li><a href="/serial/i1k2/">2018</a></li>
                                <li><a href="/serial/i1k1/">2017</a></li>
                                <li class="nav-divider"></li>
                                <li><a href="/serial/">Новые</a></li>
                                <li><a href="/serial/?s=3">Популярные</a></li>
                                <li><a href="/selection/serial/">Подборки</a></li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Медиа <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/video/">Видео</a></li>
                                <li><a href="/soundtrack/">Саундтреки</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown">Общение <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/forum/">Форум</a></li>
                                <li><a href="/comment/">Последние отзывы</a></li>
                                <li><a href="/post/">Посты</a></li>
                                <li><a href="/user/list/">Пользователи</a></li>
                                <li><a href="/post/36/">Стол заказов</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="col-md-3 hidden-md hidden-sm hidden-xs">
                        <form class="navbar-form" action="/search/" method="get">
                            <div class="input-group"><input type="text" class="form-control" name="q" placeholder="Поиск"
                                                            id="search-navbar-q" autocomplete="off"><span
                                    class="input-group-btn"><button class="btn btn-warning" type="submit"><i
                                            class="icon-search icon-white"></i></button></span></div>
                        </form>
                    </div>
                    <div class="col-xs-1 visible-md visible-sm visible-xs navbar-form"><a role="button" class="btn btn-warning"
                                                                                          href="/search/"><i
                                class="icon-search icon-white"></i></a></div>
                    <ul class="nav navbar-nav navbar-right navbar-form">
                        <li>
                            <button class="btn btn-success" data-toggle="modal" data-remote="/user/login_form/"
                                    data-target="#defaultModal">Войти
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main class="">
            @yield('content')
        </main>
    </div>
    <div class="page-footer">
        <div class="container"><br>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="col-xs-2" style="width: 20%;">
                        <ul class="list-unstyled">
                            <li><b>СМОТРЕТЬ</b>
                            <li>
                            <li><a href="/film/?s=21">Новинки</a></li>
                            <li><a href="/film/">Фильмы</a></li>
                            <li><a href="/serial/">Сериалы</a></li>
                            <li><a href="/film/a9/">Мультфильмы</a></li>
                            <li><a href="/selection/">Подборки</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-2" style="width: 20%;">
                        <ul class="list-unstyled">
                            <li><b>РАЗДЕЛЫ</b>
                            <li>
                            <li><a href="/search/">Поиск</a></li>
                            <li><a href="/video/">Видео</a></li>
                            <li><a href="/picture/">Фото</a></li>
                            <li><a href="/post/">Посты</a></li>
                            <li><a href="/soundtrack/">Саундтреки</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-2" style="width: 20%;">
                        <ul class="list-unstyled">
                            <li><b>В СОЦСЕТЯХ</b>
                            <li>
                            <li><a href="http://vk.com/myhit_official" rel="nofollow">ВКонтакте</a></li>
                            <li><a href="https://www.facebook.com/myhit.official" rel="nofollow">Facebook</a></li>
                            <li><a href="http://www.odnoklassniki.ru/myhit.official" rel="nofollow">Одноклассники</a></li>
                            <li><a href="https://twitter.com/myhit_official" rel="nofollow">Twitter</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-2" style="width: 20%;">
                        <ul class="list-unstyled">
                            <li><b>ИНФОРМАЦИЯ</b>
                            <li>
                            <li><a href="/forum/19/">Помощь</a></li>
                            <li><a href="/forum/18/">Пожелания</a></li>
                            <li><a href="/post/86/">Правила</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-2" style="width: 20%;">
                        <ul class="list-unstyled">
                            <li><b>MY-HIT</b>
                            <li>
                            <li><a href="mailto:info@my-hit.org">info@my-hit.org</a></li>
                            <li>Copyright © 2008-2019</li>
                            <li>16+</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br></div>
    </div>
    <script type="text/javascript">if ((self.parent && !(self.parent === self)) && (self.parent.frames.length != 0)) {
            self.parent.location = document.location
        }
        $(document).ready(function () {
            $('#search-navbar-q').autocomplete({serviceUrl: '/search/live/', width: '400'});
        });
        $(function () {
            $.scrollUp({
                scrollName: 'scrollUp',
                scrollDistance: 800,
                animation: 'none',
                scrollText: '<i class="icon-chevron-up"></i> Наверх',
                scrollTitle: 'Наверх',
            });
        });</script>
    <div id="defaultModal" class="modal" role="dialog" aria-hidden="true" tabindex="-1"></div>
</body>
</html>
