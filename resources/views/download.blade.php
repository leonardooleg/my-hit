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
                     <li><a href="/film/{{$film->film_id}}/">{{$film->film_name}}</a></li>
                    <li class="active"><h2>Создатели</h2></li>
                </ul>
                <h1>{{$film->film_name}} (<a
                        href="/film/{{substr($techinfo->release, 0, 4)  }}/">{{substr($techinfo->release, 0, 4)  }}</a>)
                </h1>
                <h3>Скачать бесплатно</h3>

                <div class="row"><div class="col-sm-3"><b>Файлы:</b> 5 (1-5)</div><div class="col-sm-9 text-right"></div></div>
                <hr>
                <div class="download" id="download-49239"><div class="row"><div class="col-sm-12"><span class="pull-right"><small><i class="icon-calendar"></i> 04.09.2015 в 11:09</small></span><b><a href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1589944.torrent">Файл №49239</a></b></div></div><div class="row"><div class="col-sm-6"><ul class="list-unstyled"><li><b>Качество:</b>  HDTVRip</li><li><b>Аудио #1:</b> Русский, Профессиональный дублированный, Присутствуют вшитые корейские субтитры и 5 минут вставок звука с TS!</li><li><b>Аудио #2:</b> Английский, Оригинальный</li></ul></div><div class="col-sm-6"><ul class="list-unstyled"><li><b>Файлы:</b></li><li><b>#1:</b> 5riklucheniya.Elektron1ka.2015.D.HDTV.720p.uniongang.mkv (<b>3.43 GB</b>)</li></ul></div></div><div class="row"><div class="col-sm-6"><a role="button" class="btn btn-sm btn-success" href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1589944.torrent">Скачать</a>&nbsp;<button class="btn btn-sm btn-default btn-raskadr-show" data-download-id="49239" data-film-id="190409">Раскадровка</button>&nbsp;<a role="button" class="btn btn-sm btn-default" data-toggle="modal" href="./49239/mediainfo/" data-target="#defaultModal">MediaInfo</a></div></div><div class="row"><div class="col-sm-12" id="raskadr-49239" style="display:none;"></div></div><div class="row"><hr></div></div>
                <div class="download" id="download-48359"><div class="row"><div class="col-sm-12"><span class="pull-right"><small><i class="icon-calendar"></i> 08.08.2015 в 08:22</small></span><b><a href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1576569.torrent">Файл №48359</a></b></div></div><div class="row"><div class="col-sm-6"><ul class="list-unstyled"><li><b>Качество:</b> WEB-DLRip</li><li><b>Аудио #1:</b> Русский, Профессиональный дублированный, Звук с TS</li><li><b>Аудио #2:</b> Английский, Оригинальный</li></ul></div><div class="col-sm-6"><ul class="list-unstyled"><li><b>Файлы:</b></li><li><b>#1:</b> TErm1naT0r.Genes1s.2015.D.Korsub.HDTVRip.2100MB.avi (<b>2.05 GB</b>)</li></ul></div></div><div class="row"><div class="col-sm-6"><a role="button" class="btn btn-sm btn-success" href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1576569.torrent">Скачать</a>&nbsp;<button class="btn btn-sm btn-default btn-raskadr-show" data-download-id="48359" data-film-id="190409">Раскадровка</button>&nbsp;<a role="button" class="btn btn-sm btn-default" data-toggle="modal" href="./48359/mediainfo/" data-target="#defaultModal">MediaInfo</a></div></div><div class="row"><div class="col-sm-12" id="raskadr-48359" style="display:none;"></div></div><div class="row"><hr></div></div>
                <div class="download" id="download-48112"><div class="row"><div class="col-sm-12"><span class="pull-right"><small><i class="icon-calendar"></i> 18.07.2015 в 09:31</small></span><b><a href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1565590.torrent">Файл №48112</a></b></div></div><div class="row"><div class="col-sm-6"><ul class="list-unstyled"><li><b>Качество:</b> TS</li><li><b>Аудио #1:</b> Русский, Профессиональный дублированный, С кинотеатра</li></ul></div><div class="col-sm-6"><ul class="list-unstyled"><li><b>Файлы:</b></li><li><b>#1:</b> 9enes1s.2015.D.TS.avi (<b>1.46 GB</b>)</li></ul></div></div><div class="row"><div class="col-sm-6"><a role="button" class="btn btn-sm btn-success" href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1565590.torrent">Скачать</a>&nbsp;<button class="btn btn-sm btn-default btn-raskadr-show" data-download-id="48112" data-film-id="190409">Раскадровка</button>&nbsp;<a role="button" class="btn btn-sm btn-default" data-toggle="modal" href="./48112/mediainfo/" data-target="#defaultModal">MediaInfo</a></div></div><div class="row"><div class="col-sm-12" id="raskadr-48112" style="display:none;"></div></div><div class="row"><hr></div></div>
                <div class="download" id="download-47912"><div class="row"><div class="col-sm-12"><span class="pull-right"><small><i class="icon-calendar"></i> 08.07.2015 в 15:46</small></span><b><a href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1560650.torrent">Файл №47912</a></b></div></div><div class="row"><div class="col-sm-6"><ul class="list-unstyled"><li><b>Качество:</b> CAMRip</li><li><b>Аудио #1:</b> Русский, Профессиональный дублированный, звук с CAMRip</li></ul></div><div class="col-sm-6"><ul class="list-unstyled"><li><b>Файлы:</b></li><li><b>#1:</b> TePM1Hat0P.GeHe31C.2015.D.CAMRip.PROPER.1.45Gb.avi (<b>1.46 GB</b>)</li></ul></div></div><div class="row"><div class="col-sm-6"><a role="button" class="btn btn-sm btn-success" href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1560650.torrent">Скачать</a>&nbsp;<button class="btn btn-sm btn-default btn-raskadr-show" data-download-id="47912" data-film-id="190409">Раскадровка</button>&nbsp;<a role="button" class="btn btn-sm btn-default" data-toggle="modal" href="./47912/mediainfo/" data-target="#defaultModal">MediaInfo</a></div></div><div class="row"><div class="col-sm-12" id="raskadr-47912" style="display:none;"></div></div><div class="row"><hr></div></div>
                <div class="download" id="download-47839"><div class="row"><div class="col-sm-12"><span class="pull-right"><small><i class="icon-calendar"></i> 01.07.2015 в 20:15</small></span><b><a href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1557263.torrent">Файл №47839</a></b></div></div><div class="row"><div class="col-sm-6"><ul class="list-unstyled"><li><b>Качество:</b> CAMRip</li><li><b>Аудио #1:</b> Русский, Профессиональный дублированный, С кинотеатра</li></ul></div><div class="col-sm-6"><ul class="list-unstyled"><li><b>Файлы:</b></li><li><b>#1:</b> Terminator.Genesis.2015.D.CAMRip.1.46GB.avi (<b>1.46 GB</b>)</li></ul></div></div><div class="row"><div class="col-sm-6"><a role="button" class="btn btn-sm btn-success" href="/web/20150929062621/https://my-hit.org/storage/torrent/[my-hit.org]_1557263.torrent">Скачать</a>&nbsp;<button class="btn btn-sm btn-default btn-raskadr-show" data-download-id="47839" data-film-id="190409">Раскадровка</button>&nbsp;<a role="button" class="btn btn-sm btn-default" data-toggle="modal" href="./47839/mediainfo/" data-target="#defaultModal">MediaInfo</a></div></div><div class="row"><div class="col-sm-12" id="raskadr-47839" style="display:none;"></div></div></div>

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
