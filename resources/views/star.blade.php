@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <div class="container"
         style="background-color: #ffffff; padding-top: 18px; min-height: 1000px; padding-bottom: 18px;">
        <div class="row">
            @include('layouts.left_menu')
            <div class="col-sm-10 col-md-8" itemscope="" itemtype="" style="balllckground-color: #ffffff;">
                <ul class="breadcrumb">
                    <li><a href="/film/">Фильмы</a></li>
                    <li><a href="/film/{{$film->film_id}}/">Терминатор: Генезис</a></li>
                    <li class="active"><h2>Создатели</h2></li>
                </ul>
                <h1>{{$film->film_name}} (<a href="/film/{{substr($techinfo->release, 0, 4)  }}/">{{substr($techinfo->release, 0, 4)  }}</a>)</h1>
                <h3>Создатели</h3>
                <div class="alert alert-warning"><b>Быстрый переход: </b><a href="#department_1">Актеры</a>, <a
                        href="#department_7">Композиторы</a>, <a href="#department_20">Монтажеры</a>, <a
                        href="#department_4">Операторы</a>, <a href="#department_12">Продюсеры</a>, <a
                        href="#department_9">Режиссеры</a>, <a href="#department_18">Сценаристы</a>, <a
                        href="#department_3">Художники</a></div>
                <a name="department_1"></a>
                <h3>Актеры</h3>
                <div class="row">
                    @foreach ($stars as $star)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$star->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($star->star_photo)){{$star->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$star->star_name}}</a></b></div>
                    @endforeach

                </div>
                <br>
                <div class="row"></div>
                <a name="department_7"></a>
                <h3>Композиторы</h3>
                <div class="row">
                    @foreach ($сomposers as $сomposer)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$сomposer->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($сomposer->star_photo)){{$сomposer->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$сomposer->star_name}}</a></b></div>
                    @endforeach


                </div>
                <a name="department_20"></a>
                <h3>Монтажеры</h3>
                <div class="row">
                    @foreach ($editors as $editor)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$editor->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($editor->star_photo)){{$editor->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$editor->star_name}}</a></b></div>
                    @endforeach


                </div>
                <a name="department_4"></a>
                <h3>Операторы</h3>
                <div class="row">
                    @foreach ($operators as $operator)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$operator->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($operator->star_photo)){{$operator->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$operator->star_name}}</a></b></div>
                    @endforeach

                </div>
                <a name="department_12"></a>
                <h3>Продюсеры</h3>
                <div class="row">
                    @foreach ($producers as $producer)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$producer->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($producer->star_photo)){{$producer->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$producer->star_name}}</a></b></div>
                    @endforeach
                </div>
                <br>

                <a name="department_9"></a>
                <h3>Режиссеры</h3>
                <div class="row">
                    @foreach ($directors as $director)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$director->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($director->star_photo)){{$director->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$director->star_name}}</a></b></div>
                    @endforeach
                </div>
                <a name="department_18"></a>
                <h3>Сценаристы</h3>
                <div class="row">
                    @foreach ($scenarios as $scenario)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$scenario->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($scenario->star_photo)){{$scenario->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$scenario->star_name}}</a></b></div>
                    @endforeach
                </div>
                <a name="department_3"></a>
                <h3>Художники</h3>
                <div class="row">
                    @foreach ($painters as $painter)
                        <div class="col-sm-2 text-center"><a
                                href="/star/{{$painter->star_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/@if(isset($painter->star_photo)){{$painter->star_photo}}@else/site/photo.png @endif" alt=""></a><b><a
                                    href="/star/3446974/">{{$painter->star_name}}</a></b></div>
                    @endforeach

                </div>

            </div>
            <div class="col-sm-2 col-md-2 hidden-xs hidden-sm">
                <noindex>


                    <div id="MarketGidScriptRootC573574" class="tizer-right-block">
                        <iframe style="display: none;" allow="autoplay 'self'; fullscreen 'self'"></iframe>
                        <div id="MarketGidComposite355751" style="overflow: visible; visibility: visible;">
                            <style id="ssp_doubleclick_1134c" class="MarketGidC355751"
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
                            <style id="main_1134c" class="MarketGidC355751" type="text/css"> @font-face {
                                    font-family: 'PFDinDisplayProRegular';
                                    src: url('https://web.archive.org/web/20200521135849/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.eot');
                                    src: url('https://web.archive.org/web/20200521135849/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.eot?#iefix') format('embedded-opentype'), url('https://web.archive.org/web/20200521135849/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.woff') format('woff'), url('https://web.archive.org/web/20200521135849/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.ttf') format('truetype'), url('https://web.archive.org/web/20200521135849/https://cdn.marketgid.com/fonts/pfdindisplaypro-regular-webfont.svg#PFDinDisplayProRegular') format('svg');
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
                            title="В первый раз (2015) - смотреть онлайн"
                            href="/film/415129/"><img
                                class="img-rounded img-responsive text-center"
                                src="/storage/1606079_210x300x50x2.jpg" alt=""
                                style="max-width: 100%;"></a><a title="В первый раз (2015) - смотреть онлайн"
                                                                href="/film/415129/">В
                            первый раз (2015)</a></li>
                    <li><a title="Стажер (2015) - смотреть онлайн"
                           href="/film/414944/">Стажер (2015)</a></li>
                    <li><a title="Прогулка по Миссисипи (2015) - смотреть онлайн"
                           href="/film/415029/">Прогулка по Миссисипи (2015)</a>
                    </li>
                    <li><a title="Миссия невыполнима: Племя изгоев (2015) - смотреть онлайн"
                           href="/film/414236/">Миссия невыполнима: Племя изгоев
                            (2015)</a></li>
                    <li><a title="Эшби (2015) - смотреть онлайн"
                           href="/film/415044/">Эшби (2015)</a></li>
                    <li><a title="Бегущий в лабиринте: Испытание огнём (2015) - смотреть онлайн"
                           href="/film/414694/">Бегущий в лабиринте: Испытание
                            огнём (2015)</a></li>
                    <li><a title="Прогулка с мертвецами (2015) - смотреть онлайн"
                           href="/film/346163/">Прогулка с мертвецами (2015)</a>
                    </li>
                    <li><a title="В первый раз (2015) - смотреть онлайн"
                           href="/film/415129/">В первый раз (2015)</a></li>
                    <li><a title="Эверест (2015) - смотреть онлайн"
                           href="/film/244544/">Эверест (2015)</a></li>
                    <li><a title="Мисс Переполох (2014) - смотреть онлайн"
                           href="/film/413693/">Мисс Переполох (2014)</a></li>
                    <li><a title="Лила и Ева (2015) - смотреть онлайн"
                           href="/film/257367/">Лила и Ева (2015)</a></li>
                    <li><a href="/film/?s=3">Еще фильмы ... »</a></li>
                </ul>
                <br>
                <ul class="nav nav-list tizer-right-block"
                    style="min-height: 100px; text-align: left; padding-top: 10px; line-height: 120%;">
                    <li class="nav-header">Горячие темы:</li>
                    <li><a href="/forum/17/topic/558/"
                           style="overflow: hidden; word-wrap: break-word;"
                           title="НЕ ПОГОВОРИМ О БОГЕ, попытаемся разобраться в его замыслах">НЕ ПОГОВОРИМ О
                            БОГЕ,...</a>
                        <p style="text-indent: 0;"><small>5,975 ответов, 18 минут назад</small></p></li>
                    <li><a href="/forum/1/topic/485/"
                           style="overflow: hidden; word-wrap: break-word;" title="ФЛУДИЛКА">ФЛУДИЛКА</a>
                        <p style="text-indent: 0;"><small>1,984 ответа, два часа назад</small></p></li>
                    <li><a href="/forum/17/topic/647/"
                           style="overflow: hidden; word-wrap: break-word;" title="ART / LIFE">ART / LIFE</a>
                        <p style="text-indent: 0;"><small>315 ответов, два часа назад</small></p></li>
                    <li><a href="/forum/17/topic/379/"
                           style="overflow: hidden; word-wrap: break-word;"
                           title="===+++ Бар &quot;Пьяный Пират&quot; +++===">===+++ Бар "Пьяный...</a>
                        <p style="text-indent: 0;"><small>358 ответов, 8 часов назад</small></p></li>
                    <li><a href="/forum/1/topic/76/"
                           style="overflow: hidden; word-wrap: break-word;" title="Тамтам*********************">Тамтам*********************</a>
                        <p style="text-indent: 0;"><small>143 ответа, 8 часов назад</small></p></li>
                    <li><a href="/forum/18/topic/105/"
                           style="overflow: hidden; word-wrap: break-word;" title="Обращения к Администрации портала">Обращения
                            к Администрации...</a>
                        <p style="text-indent: 0;"><small>989 ответов, 9 часов назад</small></p></li>
                    <li><a href="/forum/17/topic/377/"
                           style="overflow: hidden; word-wrap: break-word;" title="Поговорим о Боге.">Поговорим о
                            Боге.</a>
                        <p style="text-indent: 0;"><small>3,083 ответа, вчера в 17:21</small></p></li>
                    <li><a href="/forum/hot/">Еще темы ... »</a></li>
                </ul>
                <br><br><br></div>
        </div>
    </div>

@endsection
