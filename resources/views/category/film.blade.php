@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <div class="container"
         style="background-color: #ffffff; padding-top: 18px; min-height: 1000px; padding-bottom: 18px;">
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar-nav">
                    <ul class="nav nav-list">
                        <li><b>Выбранные фильтры:</b></li>
                        <li class="nav-header">Жанр :</li>
                        <li><a href="/film/"><i class="icon-minus-sign-alt"></i>
                                Фэнтези</a></li>
                    </ul>
                </div>
                <br>
                <style>.filter-list-year {
                        width: 490px;
                    }

                    .filter-list-year > li {
                        width: 80px;
                        float: left;
                    }

                    .filter-list-country {
                        width: 490px;
                    }

                    .filter-list-country > li {
                        width: 160px;
                        float: left;
                    }</style>
                <div class="sidebar-nav">
                    <ul class="nav nav-list">
                        <li><b>Фильтры для выбора:</b></li>
                        <li class="nav-header">Жанр :</li>
                        <li><a href="/film/a7-av/"><i
                                    class="icon-plus-sign-alt"></i> Биография</a></li>
                        <li><a href="/film/a7-ab/"><i
                                    class="icon-plus-sign-alt"></i> Боевик</a></li>
                        <li><a href="/film/a7-az/"><i
                                    class="icon-plus-sign-alt"></i> Вестерн</a></li>
                        <li><a href="/film/a7-at/"><i
                                    class="icon-plus-sign-alt"></i> Военный</a></li>
                        <li><a href="/film/a7-aj/"><i
                                    class="icon-plus-sign-alt"></i> Детектив</a></li>
                        <li><a href="/film/a2-a7/"><i
                                    class="icon-plus-sign-alt"></i> Детский</a></li>
                        <li><a href="/film/a7-ag/"><i
                                    class="icon-plus-sign-alt"></i> Документальный</a></li>
                        <li><a href="/film/a7-ad/"><i
                                    class="icon-plus-sign-alt"></i> Драма</a></li>
                        <li><a href="/film/a7-aq/"><i
                                    class="icon-plus-sign-alt"></i> Исторический</a></li>
                        <li><a href="/film/a6-a7/"><i
                                    class="icon-plus-sign-alt"></i> Комедия</a></li>
                        <li><a href="/film/a7-af/"><i
                                    class="icon-plus-sign-alt"></i> Криминал</a></li>
                        <li><a href="/film/a7-al/"><i
                                    class="icon-plus-sign-alt"></i> Мелодрама</a></li>
                        <li><a href="/film/a7-ak/"><i
                                    class="icon-plus-sign-alt"></i> Мистика</a></li>
                        <li><a href="/film/a7-a8/"><i
                                    class="icon-plus-sign-alt"></i> Музыка</a></li>
                        <li><a href="/film/a7-a9/"><i
                                    class="icon-plus-sign-alt"></i> Мультфильм</a></li>
                        <li><a href="/film/a7-ac/"><i
                                    class="icon-plus-sign-alt"></i> Мюзикл</a></li>
                        <li><a href="/film/a1-a7/"><i
                                    class="icon-plus-sign-alt"></i> Приключения</a></li>
                        <li><a href="/film/a1b-a7/"><i
                                    class="icon-plus-sign-alt"></i> Психологический</a></li>
                        <li><a href="/film/a2k-a7/"><i
                                    class="icon-plus-sign-alt"></i> Разное</a></li>
                        <li><a href="/film/a18-a7/"><i
                                    class="icon-plus-sign-alt"></i> Романтический</a></li>
                        <li><a href="/film/a3-a7/"><i
                                    class="icon-plus-sign-alt"></i> Семейный</a></li>
                        <li><a href="/film/a7-ap/"><i
                                    class="icon-plus-sign-alt"></i> Спорт</a></li>
                        <li><a href="/film/a7-ai/"><i
                                    class="icon-plus-sign-alt"></i> Триллер</a></li>
                        <li><a href="/film/a7-ah/"><i
                                    class="icon-plus-sign-alt"></i> Ужасы</a></li>
                        <li><a href="/film/a7-aa/"><i
                                    class="icon-plus-sign-alt"></i> Фантастика</a></li>
                        <li class="nav-header">Год :</li>
                        <li><a href="/film/a7-i1jz/"><i
                                    class="icon-plus-sign-alt"></i> 2015</a></li>
                        <li><a href="/film/a7-i1jy/"><i
                                    class="icon-plus-sign-alt"></i> 2014</a></li>
                        <li><a href="/film/a7-i1jx/"><i
                                    class="icon-plus-sign-alt"></i> 2013</a></li>
                        <li><a href="/film/a7-i1jw/"><i
                                    class="icon-plus-sign-alt"></i> 2012</a></li>
                        <li><a href="/film/a7-i1jv/"><i
                                    class="icon-plus-sign-alt"></i> 2011</a></li>
                        <li><a href="/film/a7-i1ju/"><i
                                    class="icon-plus-sign-alt"></i> 2010</a></li>
                        <li><a href="/film/a7-i1jt/"><i
                                    class="icon-plus-sign-alt"></i> 2009</a></li>
                        <li><a href="/film/a7-i1js/"><i
                                    class="icon-plus-sign-alt"></i> 2008</a></li>
                        <li><a href="/film/a7-i1jr/"><i
                                    class="icon-plus-sign-alt"></i> 2007</a></li>
                        <li><a href="/film/a7-i1jq/"><i
                                    class="icon-plus-sign-alt"></i> 2006</a></li>
                        <li><a href="/film/a7-i1jp/"><i
                                    class="icon-plus-sign-alt"></i> 2005</a></li>
                        <li class="dropdown"><a data-toggle="dropdown" href="#">Показать все</a>
                            <ul class="dropdown-menu filter-list-year">
                                <li><a href="/film/a7-i1jz/"><i
                                            class="icon-plus-sign-alt"></i> 2015</a></li>
                                <li><a href="/film/a7-i1jy/"><i
                                            class="icon-plus-sign-alt"></i> 2014</a></li>
                                <li><a href="/film/a7-i1jx/"><i
                                            class="icon-plus-sign-alt"></i> 2013</a></li>
                                <li><a href="/film/a7-i1jw/"><i
                                            class="icon-plus-sign-alt"></i> 2012</a></li>
                                <li><a href="/film/a7-i1jv/"><i
                                            class="icon-plus-sign-alt"></i> 2011</a></li>
                                <li><a href="/film/a7-i1ju/"><i
                                            class="icon-plus-sign-alt"></i> 2010</a></li>
                                <li><a href="/film/a7-i1jt/"><i
                                            class="icon-plus-sign-alt"></i> 2009</a></li>
                                <li><a href="/film/a7-i1js/"><i
                                            class="icon-plus-sign-alt"></i> 2008</a></li>
                                <li><a href="/film/a7-i1jr/"><i
                                            class="icon-plus-sign-alt"></i> 2007</a></li>
                                <li><a href="/film/a7-i1jq/"><i
                                            class="icon-plus-sign-alt"></i> 2006</a></li>
                                <li><a href="/film/a7-i1jp/"><i
                                            class="icon-plus-sign-alt"></i> 2005</a></li>
                                <li><a href="/film/a7-i1jo/"><i
                                            class="icon-plus-sign-alt"></i> 2004</a></li>
                                <li><a href="/film/a7-i1jn/"><i
                                            class="icon-plus-sign-alt"></i> 2003</a></li>
                                <li><a href="/film/a7-i1jm/"><i
                                            class="icon-plus-sign-alt"></i> 2002</a></li>
                                <li><a href="/film/a7-i1jl/"><i
                                            class="icon-plus-sign-alt"></i> 2001</a></li>
                                <li><a href="/film/a7-i1jk/"><i
                                            class="icon-plus-sign-alt"></i> 2000</a></li>
                                <li><a href="/film/a7-i1jj/"><i
                                            class="icon-plus-sign-alt"></i> 1999</a></li>
                                <li><a href="/film/a7-i1ji/"><i
                                            class="icon-plus-sign-alt"></i> 1998</a></li>
                                <li><a href="/film/a7-i1jh/"><i
                                            class="icon-plus-sign-alt"></i> 1997</a></li>
                                <li><a href="/film/a7-i1jg/"><i
                                            class="icon-plus-sign-alt"></i> 1996</a></li>
                                <li><a href="/film/a7-i1jf/"><i
                                            class="icon-plus-sign-alt"></i> 1995</a></li>
                                <li><a href="/film/a7-i1je/"><i
                                            class="icon-plus-sign-alt"></i> 1994</a></li>
                                <li><a href="/film/a7-i1jd/"><i
                                            class="icon-plus-sign-alt"></i> 1993</a></li>
                                <li><a href="/film/a7-i1jc/"><i
                                            class="icon-plus-sign-alt"></i> 1992</a></li>
                                <li><a href="/film/a7-i1jb/"><i
                                            class="icon-plus-sign-alt"></i> 1991</a></li>
                                <li><a href="/film/a7-i1ja/"><i
                                            class="icon-plus-sign-alt"></i> 1990</a></li>
                                <li><a href="/film/a7-i1j9/"><i
                                            class="icon-plus-sign-alt"></i> 1989</a></li>
                                <li><a href="/film/a7-i1j8/"><i
                                            class="icon-plus-sign-alt"></i> 1988</a></li>
                                <li><a href="/film/a7-i1j7/"><i
                                            class="icon-plus-sign-alt"></i> 1987</a></li>
                                <li><a href="/film/a7-i1j6/"><i
                                            class="icon-plus-sign-alt"></i> 1986</a></li>
                                <li><a href="/film/a7-i1j5/"><i
                                            class="icon-plus-sign-alt"></i> 1985</a></li>
                                <li><a href="/film/a7-i1j4/"><i
                                            class="icon-plus-sign-alt"></i> 1984</a></li>
                                <li><a href="/film/a7-i1j3/"><i
                                            class="icon-plus-sign-alt"></i> 1983</a></li>
                                <li><a href="/film/a7-i1j2/"><i
                                            class="icon-plus-sign-alt"></i> 1982</a></li>
                                <li><a href="/film/a7-i1j1/"><i
                                            class="icon-plus-sign-alt"></i> 1981</a></li>
                                <li><a href="/film/a7-i1j0/"><i
                                            class="icon-plus-sign-alt"></i> 1980</a></li>
                                <li><a href="/film/a7-i1iz/"><i
                                            class="icon-plus-sign-alt"></i> 1979</a></li>
                                <li><a href="/film/a7-i1iy/"><i
                                            class="icon-plus-sign-alt"></i> 1978</a></li>
                                <li><a href="/film/a7-i1ix/"><i
                                            class="icon-plus-sign-alt"></i> 1977</a></li>
                                <li><a href="/film/a7-i1iw/"><i
                                            class="icon-plus-sign-alt"></i> 1976</a></li>
                                <li><a href="/film/a7-i1iv/"><i
                                            class="icon-plus-sign-alt"></i> 1975</a></li>
                                <li><a href="/film/a7-i1iu/"><i
                                            class="icon-plus-sign-alt"></i> 1974</a></li>
                                <li><a href="/film/a7-i1it/"><i
                                            class="icon-plus-sign-alt"></i> 1973</a></li>
                                <li><a href="/film/a7-i1is/"><i
                                            class="icon-plus-sign-alt"></i> 1972</a></li>
                                <li><a href="/film/a7-i1ir/"><i
                                            class="icon-plus-sign-alt"></i> 1971</a></li>
                                <li><a href="/film/a7-i1iq/"><i
                                            class="icon-plus-sign-alt"></i> 1970</a></li>
                                <li><a href="/film/a7-i1ip/"><i
                                            class="icon-plus-sign-alt"></i> 1969</a></li>
                                <li><a href="/film/a7-i1io/"><i
                                            class="icon-plus-sign-alt"></i> 1968</a></li>
                                <li><a href="/film/a7-i1in/"><i
                                            class="icon-plus-sign-alt"></i> 1967</a></li>
                                <li><a href="/film/a7-i1im/"><i
                                            class="icon-plus-sign-alt"></i> 1966</a></li>
                                <li><a href="/film/a7-i1il/"><i
                                            class="icon-plus-sign-alt"></i> 1965</a></li>
                                <li><a href="/film/a7-i1ik/"><i
                                            class="icon-plus-sign-alt"></i> 1964</a></li>
                                <li><a href="/film/a7-i1ij/"><i
                                            class="icon-plus-sign-alt"></i> 1963</a></li>
                                <li><a href="/film/a7-i1ii/"><i
                                            class="icon-plus-sign-alt"></i> 1962</a></li>
                                <li><a href="/film/a7-i1ih/"><i
                                            class="icon-plus-sign-alt"></i> 1961</a></li>
                                <li><a href="/film/a7-i1ig/"><i
                                            class="icon-plus-sign-alt"></i> 1960</a></li>
                                <li><a href="/film/a7-i1if/"><i
                                            class="icon-plus-sign-alt"></i> 1959</a></li>
                                <li><a href="/film/a7-i1ie/"><i
                                            class="icon-plus-sign-alt"></i> 1958</a></li>
                                <li><a href="/film/a7-i1id/"><i
                                            class="icon-plus-sign-alt"></i> 1957</a></li>
                                <li><a href="/film/a7-i1ic/"><i
                                            class="icon-plus-sign-alt"></i> 1956</a></li>
                                <li><a href="/film/a7-i1ib/"><i
                                            class="icon-plus-sign-alt"></i> 1955</a></li>
                                <li><a href="/film/a7-i1ia/"><i
                                            class="icon-plus-sign-alt"></i> 1954</a></li>
                                <li><a href="/film/a7-i1i9/"><i
                                            class="icon-plus-sign-alt"></i> 1953</a></li>
                                <li><a href="/film/a7-i1i8/"><i
                                            class="icon-plus-sign-alt"></i> 1952</a></li>
                                <li><a href="/film/a7-i1i7/"><i
                                            class="icon-plus-sign-alt"></i> 1951</a></li>
                                <li><a href="/film/a7-i1i6/"><i
                                            class="icon-plus-sign-alt"></i> 1950</a></li>
                                <li><a href="/film/a7-i1i5/"><i
                                            class="icon-plus-sign-alt"></i> 1949</a></li>
                                <li><a href="/film/a7-i1i4/"><i
                                            class="icon-plus-sign-alt"></i> 1948</a></li>
                                <li><a href="/film/a7-i1i3/"><i
                                            class="icon-plus-sign-alt"></i> 1947</a></li>
                                <li><a href="/film/a7-i1i2/"><i
                                            class="icon-plus-sign-alt"></i> 1946</a></li>
                                <li><a href="/film/a7-i1i1/"><i
                                            class="icon-plus-sign-alt"></i> 1945</a></li>
                                <li><a href="/film/a7-i1i0/"><i
                                            class="icon-plus-sign-alt"></i> 1944</a></li>
                            </ul>
                        </li>
                        <li class="nav-header">Качество :</li>
                        <li><a href="/film/a7-j3/"><i
                                    class="icon-plus-sign-alt"></i> Высокое</a></li>
                        <li><a href="/film/a7-j2/"><i
                                    class="icon-plus-sign-alt"></i> Среднее</a></li>
                        <li><a href="/film/a7-j1/"><i
                                    class="icon-plus-sign-alt"></i> Низкое</a></li>
                        <li class="nav-header">Страна :</li>
                        <li><a href="/film/a7-f3/"><i
                                    class="icon-plus-sign-alt"></i> США</a></li>
                        <li><a href="/film/a7-fo/"><i
                                    class="icon-plus-sign-alt"></i> Россия</a></li>
                        <li><a href="/film/a7-fq/"><i
                                    class="icon-plus-sign-alt"></i> СССР</a></li>
                        <li><a href="/film/a7-f2z/"><i
                                    class="icon-plus-sign-alt"></i> Индия</a></li>
                        <li><a href="/film/a7-fj/"><i
                                    class="icon-plus-sign-alt"></i> Франция</a></li>
                        <li><a href="/film/a7-fn/"><i
                                    class="icon-plus-sign-alt"></i> Япония</a></li>
                        <li><a href="/film/a7-fx/"><i
                                    class="icon-plus-sign-alt"></i> Китай</a></li>
                        <li><a href="/film/a7-fe/"><i
                                    class="icon-plus-sign-alt"></i> Великобритания</a></li>
                        <li><a href="/film/a7-f4/"><i
                                    class="icon-plus-sign-alt"></i> Испания</a></li>
                        <li><a href="/film/a7-fv/"><i
                                    class="icon-plus-sign-alt"></i> Италия</a></li>
                        <li><a href="/film/a7-f7/"><i
                                    class="icon-plus-sign-alt"></i> Канада</a></li>
                        <li class="dropdown"><a data-toggle="dropdown" href="#">Показать все</a>
                            <ul class="dropdown-menu filter-list-country">
                                <li><a href="/film/a7-f3/"><i
                                            class="icon-plus-sign-alt"></i> США</a></li>
                                <li><a href="/film/a7-fo/"><i
                                            class="icon-plus-sign-alt"></i> Россия</a></li>
                                <li><a href="/film/a7-fq/"><i
                                            class="icon-plus-sign-alt"></i> СССР</a></li>
                                <li><a href="/film/a7-f2z/"><i
                                            class="icon-plus-sign-alt"></i> Индия</a></li>
                                <li><a href="/film/a7-fj/"><i
                                            class="icon-plus-sign-alt"></i> Франция</a></li>
                                <li><a href="/film/a7-fn/"><i
                                            class="icon-plus-sign-alt"></i> Япония</a></li>
                                <li><a href="/film/a7-fx/"><i
                                            class="icon-plus-sign-alt"></i> Китай</a></li>
                                <li><a href="/film/a7-fe/"><i
                                            class="icon-plus-sign-alt"></i> Великобритания</a></li>
                                <li><a href="/film/a7-f4/"><i
                                            class="icon-plus-sign-alt"></i> Испания</a></li>
                                <li><a href="/film/a7-fv/"><i
                                            class="icon-plus-sign-alt"></i> Италия</a></li>
                                <li><a href="/film/a7-f7/"><i
                                            class="icon-plus-sign-alt"></i> Канада</a></li>
                                <li><a href="/film/a7-f1i/"><i
                                            class="icon-plus-sign-alt"></i> Швеция</a></li>
                                <li><a href="/film/a7-ff/"><i
                                            class="icon-plus-sign-alt"></i> Дания</a></li>
                                <li><a href="/film/a7-f1/"><i
                                            class="icon-plus-sign-alt"></i> Германия</a></li>
                                <li><a href="/film/a7-f2f/"><i
                                            class="icon-plus-sign-alt"></i> Корея</a></li>
                                <li><a href="/film/a7-f93/"><i
                                            class="icon-plus-sign-alt"></i> Южная Корея</a></li>
                                <li><a href="/film/a7-f2b/"><i
                                            class="icon-plus-sign-alt"></i> Мексика</a></li>
                                <li><a href="/film/a7-f31/"><i
                                            class="icon-plus-sign-alt"></i> Украина</a></li>
                                <li><a href="/film/a7-f16/"><i
                                            class="icon-plus-sign-alt"></i> Турция</a></li>
                                <li><a href="/film/a7-f27/"><i
                                            class="icon-plus-sign-alt"></i> Польша</a></li>
                            </ul>
                        </li>
                        <li class="nav-header">MPAA :</li>
                        <li><a href="/film/a7-d1/"><i
                                    class="icon-plus-sign-alt"></i> G</a></li>
                        <li><a href="/film/a7-d5/"><i
                                    class="icon-plus-sign-alt"></i> NC-17</a></li>
                        <li><a href="/film/a7-d2/"><i
                                    class="icon-plus-sign-alt"></i> PG</a></li>
                        <li><a href="/film/a7-d3/"><i
                                    class="icon-plus-sign-alt"></i> PG-13</a></li>
                        <li><a href="/film/a7-d4/"><i
                                    class="icon-plus-sign-alt"></i> R</a></li>
                        <li class="nav-header">Бюджет :</li>
                        <li><a href="/film/a7-c4/"><i
                                    class="icon-plus-sign-alt"></i> от 200 млн.</a></li>
                        <li><a href="/film/a7-c3/"><i
                                    class="icon-plus-sign-alt"></i> 150 - 200 млн.</a></li>
                        <li><a href="/film/a7-c2/"><i
                                    class="icon-plus-sign-alt"></i> 100 - 150 млн.</a></li>
                        <li><a href="/film/a7-c1/"><i
                                    class="icon-plus-sign-alt"></i> 50 - 100 млн.</a></li>
                        <li><a href="/film/a7-c0/"><i
                                    class="icon-plus-sign-alt"></i> до 50 млн.</a></li>
                        <li class="nav-header">Кассовые сборы :</li>
                        <li><a href="/film/a7-g3/"><i
                                    class="icon-plus-sign-alt"></i> от 750 млн.</a></li>
                        <li><a href="/film/a7-g2/"><i
                                    class="icon-plus-sign-alt"></i> 500 - 750 млн.</a></li>
                        <li><a href="/film/a7-g1/"><i
                                    class="icon-plus-sign-alt"></i> 250 - 500 млн.</a></li>
                        <li><a href="/film/a7-g0/"><i
                                    class="icon-plus-sign-alt"></i> до 250 млн.</a></li>
                    </ul>
                </div>
                <br>
                <div id="ambn504847" style="width:160px; height:600px; overflow: hidden; margin: 8px auto 0;"></div>

            </div>
            <div class="col-sm-10 col-md-8" itemscope="" itemtype="" style="background-color: #ffffff;">
                <ul class="breadcrumb">
                    <li class="active"><h2>Фильмы</h2></li>
                </ul>
                <h1>Каталог фильмов</h1>
                <div class="alert alert-success" style="padding-top: 8px; padding-bottom: 8px;"><b>Выбранные
                        фильтры:</b>&nbsp;жанр&nbsp;-&nbsp;<a href="/film/">Фэнтези</a>.
                </div>
                <div class="row">
                    <div class="col-sm-3"><b>Фильмов:</b> 1844 (1-24)</div>
                    <div class="col-sm-9 text-right">
                        <div class="btn-group text-left"><a class="btn btn-default btn-sm active" role="button"
                                                            href="./"><i class="icon-calendar"></i> Новые</a>
                            <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="./?s=21">По дате релиза</a></li>
                                <li><a href="./?s=17">По дате добавления</a></li>
                                <li><a href="./?s=19">По дате обновления</a></li>
                                <li class="active"><a href="./">По дате добавления файлов</a></li>
                            </ul>
                        </div>&nbsp;<div class="btn-group text-left"><a role="button" class="btn btn-default btn-sm"
                                                                        href="./?s=3"><i class="icon-eye-open"></i>
                                Популярные</a>
                            <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="./?s=3">За сутки</a></li>
                                <li><a href="./?s=23">За неделю</a></li>
                                <li><a href="./?s=5">За месяц</a></li>
                                <li><a href="./?s=7">За всё время</a></li>
                            </ul>
                        </div>&nbsp;<div class="btn-group text-left"><a role="button" class="btn btn-default btn-sm"
                                                                        href="./?s=11"><i class="icon-thumbs-up"></i>
                                Рекомендуемые</a>
                            <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="./?s=9">За сутки</a></li>
                                <li><a href="./?s=11">За неделю</a></li>
                                <li><a href="./?s=13">За месяц</a></li>
                                <li><a href="./?s=15">За всё время</a></li>
                            </ul>
                        </div>&nbsp;<div class="btn-group text-left"><a role="button" class="btn btn-default btn-sm"
                                                                        href="./?s=25"><i class="icon-money"></i> Бюджет</a>
                            <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="./?s=25"><i class="icon-sort-by-attributes-alt"></i> Бюджет</a></li>
                                <li><a href="./?s=27"><i class="icon-sort-by-attributes-alt"></i> Кассовые сборы</a>
                                </li>
                            </ul>
                        </div>&nbsp;<div class="btn-group text-left"><a class="btn btn-default btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown" href="./"><i
                                    class="icon-th"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="btn-film-list-as" href="./" data-list-as="2" data-s="1" data-p="1"><i
                                            class="icon-th"></i> Плиткой</a></li>
                                <li class="active"><a class="btn-film-list-as" href="./" data-list-as="1" data-s="1"
                                                      data-p="1"><i class="icon-list"></i> Списком</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="film-list" id="film-list">

                    @foreach ($films as $film)
                        <div class="row">
                            <div class="col-sm-3 text-center"><a title="{{$film->film_name}}"
                                                                 href="/film/{{$film->film_id}}/">
                                    <div class="div-film-poster text-center" data-film-id="{{$film->film_id}}"><img
                                            class="img-rounded img-responsive"
                                            src="/storage/site/1544111_500x800x250.jpg"
                                            alt="">
                                        <button class="btn btn-default btn-xs btn-watch-want" title="Хочу посмотреть"
                                                data-toggle="modal" data-remote="/user/login_form/"
                                                data-target="#defaultModal"><i class="icon-time icon-2x"></i></button>
                                        <button class="btn btn-default btn-xs btn-watch-watched" title="Смотрел"
                                                data-toggle="modal" data-remote="/user/login_form/"
                                                data-target="#defaultModal"><i class="icon-check icon-2x"></i></button>
                                    </div>
                                </a>
                                <div style="margin-top: 8px;"><a href="/film/{{$film->film_id}}/"><b>Смотреть
                                            онлайн »</b></a></div>
                            </div>
                            <div class="col-sm-9"><span class="pull-right text-right"><b>Добавлен: 08.09.2021</b><ul
                                        class="list-unstyled text-right"><li><b
                                                title="Рейтинг за всё время">Рейтинг:</b><span
                                                style="color: #008000; font-weight: bold;"> 55,9%</span></li><li><b>Качество:</b> HDRip</li><li><b>Звук:</b> <span
                                                title="Профессиональный многоголосый">ПМ</span></li></ul></span><b><a
                                        title="{{$film->film_name}} (2015) - смотреть онлайн"
                                        href="/film/{{$film->film_id}}/">{{$film->film_name}} /
                                        {{$film->film_oroginal_name}}</a></b>
                                <ul class="list-unstyled">
                                    <li><b>Жанр:</b>&nbsp;<a
                                            href="/film/a7/">Фэнтези</a>, <a
                                            href="/film/ab/">Боевик</a>, <a
                                            href="/film/a1/">Приключения</a>.
                                    </li>
                                    <li><b>Год:</b>&nbsp;<a
                                            href="/film/i1jz/">2015</a>.
                                    </li>
                                    <li><b>Страна:</b>&nbsp;<a
                                            href="/film/f3/">США</a>.
                                    </li>
                                    <li><b>Режиссер:</b>&nbsp;<a href="/star/458428/">Энн
                                            К. Блэк</a>.
                                    </li>
                                    <li style="line-height: 1.42857;"><b>Краткое описание:</b>&nbsp;<p
                                            style="text-align: justify;">{{$film->film_description}}</p></li>
                                    <li><b>В ролях:</b>&nbsp;<a href="/star/3516400/">Мелани
                                            Стоун</a>, <a href="/star/36848/">Адам
                                            Джонсон</a>, <a href="/star/1805508/">Джейк
                                            Стормоен</a>, <a href="/star/742522/">Никки
                                            Поснер</a>, <a href="/star/787377/">Роки
                                            Майерс</a>, <a href="/star/9392/">Кристофер
                                            Робин Миллер</a>, <a href="/star/16616/">Кевин
                                            Сорбо</a>, <a href="/star/14566/">Роберт
                                            Джэйн</a>, <a href="/star/3531771/">Larissa
                                            Beck</a>, <a href="/star/3516430/">Дэйв
                                            Бреснахэн</a> <a
                                            href="/film/287332/star/">...&nbsp;»</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                    @endforeach

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3"><b>Фильмов:</b> 1844 (1-24)</div>
                    <div class="col-sm-9 text-right" style="margin-top: 0px;">
                        <ul class="pagination">
                            <li class="disabled"><a href="/film/a7/">« Назад</a>
                            </li>
                            <li class="active"><a href="/film/a7/">1</a></li>
                            <li><a href="/film/a7/?p=2">2</a></li>
                            <li><a href="/film/a7/?p=3">3</a></li>
                            <li><a href="/film/a7/?p=4">4</a></li>
                            <li><a href="/film/a7/?p=5">5</a></li>
                            <li><a href="/film/a7/?p=6">6</a></li>
                            <li><a href="/film/a7/?p=7">7</a></li>
                            <li><a href="/film/a7/?p=8">8</a></li>
                            <li><a href="/film/a7/?p=9">9</a></li>
                            <li><a href="/film/a7/?p=2">Вперед »</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 hidden-xs hidden-sm">
                <noindex>


                    <div id="MarketGidScriptRootC573574" class="tizer-right-block">
                        <iframe style="display: none;" allow="autoplay 'self'; fullscreen 'self'"></iframe>
                        <div id="MarketGidComposite355751" style="overflow: visible; visibility: visible;">
                            <style id="ssp_doubleclick_10704" class="MarketGidC355751"
                                   type="text/css">.MarketGidDButton355751 {
                                    display: inline-block;
                                    width: 80px;
                                    height: 80px;
                                    background-color: RGBA(0, 0, 0, 0.4);
                                    border: 2px solid white;
                                    border-radius: 999px;
                                    color: white !important;
                                    font: normal 500 24px/80px "Sans", sans-serif;
                                    transform: scale3d(0.0001, 0.0001, 0.0001);
                                    text-align: center;
                                    text-shadow: none;
                                    position: absolute;
                                    text-decoration: none !important;
                                    transition: all 1s;
                                }

                                .MarketGidDLayout355751 {
                                    height: 100%;
                                    width: 100% !important;
                                    position: absolute !important;
                                    top: 0px;
                                    left: 0px;
                                    background-color: rgba(0, 0, 0, 0.5);
                                    z-index: 99999;
                                }

                                #MarketGidComposite355751 .mgline {
                                    position: relative
                                }</style>
                            <style id="main_10704" class="MarketGidC355751" type="text/css"> @font-face {
                                    font-family: 'PFDinDisplayProRegular';
                                    src: url('https://web.archive.org/web/20200521103143/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.eot');
                                    src: url('https://web.archive.org/web/20200521103143/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.eot?#iefix') format('embedded-opentype'), url('https://web.archive.org/web/20200521103143/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.woff') format('woff'), url('https://web.archive.org/web/20200521103143/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.ttf') format('truetype'), url('https://web.archive.org/web/20200521103143/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.svg#PFDinDisplayProRegular') format('svg');
                                }

                                #MarketGidComposite355751 .mgbox {
                                    padding: 0 !important;
                                    background-color: #fff9f2;
                                    position: relative !important;
                                    text-align: center;
                                    vertical-align: top !important;
                                    margin: 0 auto;
                                    border-style: solid;
                                    width: 100%;
                                    border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    -webkit-border-radius: 4px;
                                    min-width: 120px;
                                    border-width: 0px;
                                    display: -ms-flexbox;
                                    display: -webkit-flex;
                                    display: flex;
                                    -webkit-flex-direction: row;
                                    -ms-flex-direction: row;
                                    flex-direction: row;
                                    -webkit-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                }

                                #MarketGidComposite355751 div.mcimg {
                                    padding: 0px;
                                    text-align: center;
                                    margin: 0 auto;
                                    max-width: 150px;
                                }

                                #MarketGidComposite355751 img.mcimg {
                                    border-style: solid;
                                    border-width: 0px;
                                    width: 100%;
                                    max-width: 150px;
                                    height: auto;
                                    border-radius: 6px;
                                    -moz-border-radius: 6px;
                                    -webkit-border-radius: 6px;
                                }

                                #MarketGidComposite355751 .mctitle a {
                                    font-weight: bold !important;
                                    font-size: 14px;
                                    font-style: normal;
                                    text-decoration: none;
                                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                                    color: #063fc8;
                                }

                                #MarketGidComposite355751 .mgbox .text-elements {
                                    text-align: center;
                                }

                                #MarketGidComposite355751 div.mctitle {
                                    margin-top: 3px;
                                }

                                #MarketGidComposite355751 .mgline:hover .mctitle a {
                                    text-decoration: underline;
                                }

                                #MarketGidComposite355751 .mgline {
                                    background: none repeat scroll 0 0;
                                    display: -ms-flexbox;
                                    display: -webkit-flex;
                                    display: flex;
                                    -webkit-flex-direction: row;
                                    -ms-flex-direction: row;
                                    flex-direction: row;
                                    -webkit-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                    width: 100%;
                                    display: inline-block !important;
                                    vertical-align: top;
                                    min-width: 120px;
                                    margin-bottom: 10px;
                                    padding: 0 5px !important;
                                }

                                /* Pricebox */
                                div.mcprice {
                                    text-align: center;
                                }

                                #MarketGidComposite355751 div.mcprice span {
                                    font-size: 12px;
                                    font-weight: bold;
                                    font-style: normal;
                                    color: #ff0000;
                                }

                                #MarketGidComposite355751 div.mcprice > span {
                                    text-decoration: none;
                                }

                                #MarketGidComposite355751 span.mcpriceold {
                                    text-decoration: line-through !important;
                                } </style>
                        </div>
                    </div>
                </noindex>

                <br>
                <ul class="nav nav-list tizer-right-block"
                    style="min-height: 100px; text-align: left; padding-top: 10px; line-height: 150%;">
                    <li class="nav-header">Сейчас смотрят:</li>
                    <li style="margin-bottom: 10px; margin-top:5px; font-weight: bold;" class="text-center"><a
                            title="Страшные сказки (2015) - смотреть онлайн"
                            href="/film/349624/"><img
                                class="img-rounded img-responsive text-center"
                                src="/storage/site/1590142_210x300x50x2.jpg" alt=""
                                style="max-width: 100%;"></a><a title="Страшные сказки (2015) - смотреть онлайн"
                                                                href="/film/349624/">Страшные
                            сказки (2015)</a></li>
                    <li><a title="Мифика: Тёмные времена (2015) - смотреть онлайн"
                           href="/film/287332/">Мифика: Тёмные времена (2015)</a>
                    </li>
                    <li><a title="В лабиринте молчания (2014) - смотреть онлайн"
                           href="/film/415101/">В лабиринте молчания (2014)</a>
                    </li>
                    <li><a title="Z – значит Захария (2015) - смотреть онлайн"
                           href="/film/334004/">Z – значит Захария (2015)</a></li>
                    <li><a title="Зомби-насильники: Похоть мертвецов&nbsp;2 (2013) - смотреть онлайн"
                           href="/film/415099/">Зомби-насильники: Похоть мертвецов&nbsp;2
                            (2013)</a></li>
                    <li><a title="Ультраамериканцы (2015) - смотреть онлайн"
                           href="/film/369331/">Ультраамериканцы (2015)</a></li>
                    <li><a title="Женщины против мужчин (2015) - смотреть онлайн"
                           href="/film/414582/">Женщины против мужчин (2015)</a>
                    </li>
                    <li><a title="Вне себя (2015) - смотреть онлайн"
                           href="/film/274980/">Вне себя (2015)</a></li>
                    <li><a title="Левша (2015) - смотреть онлайн"
                           href="/film/285217/">Левша (2015)</a></li>
                    <li><a title="Страшные сказки (2015) - смотреть онлайн"
                           href="/film/349624/">Страшные сказки (2015)</a></li>
                    <li><a title="Каникулы (2015) - смотреть онлайн"
                           href="/film/414888/">Каникулы (2015)</a></li>
                    <li><a href="/film/?s=3">Еще фильмы ... »</a></li>
                </ul>
                <br>
                <ul class="nav nav-list tizer-right-block"
                    style="min-height: 100px; text-align: left; padding-top: 10px; line-height: 120%;">
                    <li class="nav-header">Горячие темы:</li>
                    <li><a href="/forum/1/topic/485/"
                           style="overflow: hidden; word-wrap: break-word;" title="ФЛУДИЛКА">ФЛУДИЛКА</a>
                        <p style="text-indent: 0;"><small>1,478 ответов, 14 минут назад</small></p></li>
                    <li><a href="/forum/17/topic/558/"
                           style="overflow: hidden; word-wrap: break-word;"
                           title="НЕ ПОГОВОРИМ О БОГЕ, попытаемся разобраться в его замыслах">НЕ ПОГОВОРИМ О
                            БОГЕ,...</a>
                        <p style="text-indent: 0;"><small>4,406 ответов, 14 минут назад</small></p></li>
                    <li><a href="/forum/18/topic/105/"
                           style="overflow: hidden; word-wrap: break-word;" title="Обращения к Администрации портала">Обращения
                            к Администрации...</a>
                        <p style="text-indent: 0;"><small>876 ответов, час назад</small></p></li>
                    <li><a href="/forum/3/topic/154/"
                           style="overflow: hidden; word-wrap: break-word;" title="Отгадайте фильм по кадру.">Отгадайте
                            фильм по кадру.</a>
                        <p style="text-indent: 0;"><small>783 ответа, три часа назад</small></p></li>
                    <li><a href="/forum/17/topic/379/"
                           style="overflow: hidden; word-wrap: break-word;"
                           title="===+++ Бар &quot;Пьяный Пират&quot; +++===">===+++ Бар "Пьяный...</a>
                        <p style="text-indent: 0;"><small>289 ответов, 9 часов назад</small></p></li>
                    <li><a href="/forum/19/topic/141/"
                           style="overflow: hidden; word-wrap: break-word;" title="Оскорбления пользователей">Оскорбления
                            пользователей</a>
                        <p style="text-indent: 0;"><small>178 ответов, сегодня в 05:40</small></p></li>
                    <li><a href="/forum/17/topic/450/"
                           style="overflow: hidden; word-wrap: break-word;" title="Анегдоты-разные(желательно смешные)">Анегдоты-разные(желательно...</a>
                        <p style="text-indent: 0;"><small>130 ответов, вчера в 20:24</small></p></li>
                    <li><a href="/forum/hot/">Еще темы ... »</a></li>
                </ul>
                <br><br><br></div>
        </div>
    </div>
@endsection
