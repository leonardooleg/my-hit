@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <div class="container"
         style="background-color: #ffffff; padding-top: 18px; min-height: 1000px; padding-bottom: 18px;">
        <div class="row">
            @include('layouts.left_menu')
            <div class="col-sm-10 col-md-8" itemscope="" itemtype="http://schema.org/Movie"
                 style="background-color: #ffffff;">
                <ul class="breadcrumb">
                    <li><a href="/film/">Фильмы</a></li>
                    <li class="active"><h2>{{$film->film_name}} - смотреть онлайн</h2></li>
                </ul>
                <meta itemprop="name" content="{{$film->film_name}} - смотреть онлайн">
                <meta itemprop="inLanguage" content="ru">
                <div class="col-sm-6 pull-right" style="margin: 0px; padding-left:20px;background-color: #ffffff;">
                    <div class="row text-center" style="margin-left: 0px;" id="rating_display_{{$film->film_id}}">
                        <div class="col-sm-6" style="margin: 0px;"><i class="icon-thumbs-up"></i> <b class="plus">44</b>
                            - нравится
                        </div>
                        <div class="col-sm-6 pull-right" style="margin: 0px;"><i class="icon-thumbs-down"></i> <b
                                class="minus">57</b> - не нравится
                        </div>
                        <div class="col-sm-8" style="margin-left: 0px; margin-top: 9px;">
                            <div class="progress" style="height: 8px; margin-bottom: 2px;">
                                <div class="progress-bar progress-bar-success ratio_plus" style="width: 44%;"></div>
                                <div class="progress-bar progress-bar-danger ratio_minus" style="width: 56%;"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-left: 0px; margin-top: -4px;"><span
                                style="color: #D9534F; font-size: 22px;" class="ratio_color"><b
                                    class="ratio_str">43,6%</b></span></div>
                    </div>
                    <div class="text-center div-film-poster" data-film-id="{{$film->film_id}}"><img
                            class="img-rounded img-responsive"
                            src="/storage/{{$poster->picture_link}}"
                            alt="{{$film->film_name}}" title="{{$film->film_name}}" style="margin: 0 auto;"
                            itemprop="image">
                        <button class="btn btn-default btn-xs btn-watch-want" title="Хочу посмотреть"
                                data-toggle="modal" data-remote="/user/login_form/" data-target="#defaultModal"><i
                                class="icon-time icon-2x"></i></button>
                        <button class="btn btn-default btn-xs btn-watch-watched" title="Смотрел" data-toggle="modal"
                                data-remote="/user/login_form/" data-target="#defaultModal"><i
                                class="icon-check icon-2x"></i></button>
                    </div>
                </div>
                <h1>{{$film->film_name}} (<a href="/film/{{substr($techinfo->release, 0, 4)  }}/">{{substr($techinfo->release, 0, 4)  }}</a>)</h1>
                <h4 itemprop="alternativeHeadline">{{$film->film_oroginal_name}}</h4>
                <ul class="list-unstyled">
                    <li><b>Продолжительность:</b>&nbsp;108 мин.</li>
                    <br>

                    <li><b>Жанр:</b>&nbsp;
                        @foreach ($genres as $genre)
                            <a href="/film/{{$genre->genre_link}}/" itemprop="genre">{{$genre->genre_name}}</a>.
                        @endforeach
                    </li>
                    <li><b>Страна:</b>&nbsp;
                        @foreach ($countries as $country)
                            <a href="/film/{{$country->country_url}}/" >{{$country->country_name}}</a>.
                        @endforeach
                      </li>
                    <li><b>Режиссер:</b>&nbsp;
                        @foreach ($directors as $director)
                            <a href="/star/{{$director->star_id}}/" >{{$director->star_name}}</a>.
                        @endforeach
                    </li>
                    <li><b>Сценарий:</b>&nbsp;
                        @foreach ($scenarios as $scenario)
                            <a href="/star/{{$scenario->star_id}}/" >{{$scenario->star_name}}</a>.
                        @endforeach
                        <a  href="/film/{{$film->film_id}}/star/">...&nbsp;»</a>
                    </li>
                    <li><b>Продюсеры:</b>&nbsp;
                        @foreach ($producers as $producer)
                            <a href="/star/{{$producer->star_id}}/" >{{$producer->star_name}}</a>.
                        @endforeach
                       <a href="/film/{{$film->film_id}}/star/">...&nbsp;»</a></li>
                    <li><b>Оператор:</b>&nbsp;
                        @foreach ($operators as $operator)
                            <a href="/star/{{$operator->star_id}}/" >{{$operator->star_name}}</a>.
                        @endforeach

                    </li>
                    <li><b>Художник:</b>&nbsp;
                        @foreach ($painters as $painter)
                            <a href="/star/{{$painter->star_id}}/" >{{$painter->star_name}}</a>.
                        @endforeach

                    </li>
                    <li><b>Композитор:</b>&nbsp;
                        @foreach ($сomposers as $сomposer)
                            <a href="/star/{{$сomposer->star_id}}/" >{{$сomposer->star_name}}</a>.
                        @endforeach

                    </li>
                    <li><b>В ролях:</b>&nbsp;
                        @foreach ($stars as $star)
                            <a href="/star/{{$star->star_id}}/" >{{$star->star_name}}</a>,
                        @endforeach
                         <a href="/film/{{$film->film_id}}/star/">...&nbsp;»</a></li>
                    <li><b>Бюджет:</b>&nbsp;{{$film->film_budget}} .</li>
                    <li><b>Премьера в США:</b>&nbsp;{{$techinfo->release}}&nbsp;<a href="/film/{{$film->film_id}}/premiere/">... »</a></li>
                    <li><b>Премьера в России:</b>&nbsp;{{$techinfo->release}}&nbsp;<a href="/film/{{$film->film_id}}/premiere/">... »</a></li>
                    <li><b>Премьера в Украине:</b>&nbsp;{{$techinfo->release}}&nbsp;<a href="/film/{{$film->film_id}}/premiere/">... »</a></li>

                    <li><b>Качество:</b>&nbsp;{{$film->film_quality}}</li>
                    <li><b>Звук:</b>&nbsp;{{$film->film_sound}}<br>
                        <b>Краткое описание: </b>
                        <div itemprop="description"><p style="text-align: justify;">{{$film->film_description}}</p>
                        </div>
                    </li>
                </ul>
             {{--   <div class="row">
                    <div class="col-sm-12">
                        <script type="text/javascript"
                                src="https://yandex.st/share/share.js"
                                charset="utf-8"></script>
                        <div class="yashare-auto-init b-share_theme_counter" data-yasharel10n="ru"
                             data-yasharequickservices="vkontakte,facebook,twitter,odnoklassniki,gplus,moimir,yaru"
                             data-yasharetheme="counter" data-yasharelink="/film/{{$film->film_id}}/"><span
                                class="b-share"><span class="b-share-btn__wrap"><a rel="nofollow" target="_blank"
                                                                                   title="ВКонтакте"
                                                                                   class="b-share__handle b-share__link b-share-btn__vkontakte"
                                                                                   href="https://share.yandex.net/go.xml?service=vkontakte&amp;url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;title=%D0%9C%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%3A%20%D0%A2%D1%91%D0%BC%D0%BD%D1%8B%D0%B5%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0%20(2015)%20-%20%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B5%D1%82%D1%8C%20%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD"
                                                                                   data-service="vkontakte"><span
                                            class="b-share-icon b-share-icon_vkontakte"></span><span
                                            class="b-share-counter"></span></a></span><span class="b-share-btn__wrap"><a
                                        rel="nofollow" target="_blank" title="Facebook"
                                        class="b-share__handle b-share__link b-share-btn__facebook"
                                        href="https://share.yandex.net/go.xml?service=facebook&amp;url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;title=%D0%9C%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%3A%20%D0%A2%D1%91%D0%BC%D0%BD%D1%8B%D0%B5%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0%20(2015)%20-%20%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B5%D1%82%D1%8C%20%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD"
                                        data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span><span
                                            class="b-share-counter"></span></a></span><span class="b-share-btn__wrap"><a
                                        rel="nofollow" target="_blank" title="Twitter"
                                        class="b-share__handle b-share__link b-share-btn__twitter"
                                        href="https://share.yandex.net/go.xml?service=twitter&amp;url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;title=%D0%9C%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%3A%20%D0%A2%D1%91%D0%BC%D0%BD%D1%8B%D0%B5%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0%20(2015)%20-%20%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B5%D1%82%D1%8C%20%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD"
                                        data-service="twitter"><span
                                            class="b-share-icon b-share-icon_twitter"></span><span
                                            class="b-share-counter"></span></a></span><span class="b-share-btn__wrap"><a
                                        rel="nofollow" target="_blank" title="Одноклассники"
                                        class="b-share__handle b-share__link b-share-btn__odnoklassniki"
                                        href="https://share.yandex.net/go.xml?service=odnoklassniki&amp;url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;title=%D0%9C%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%3A%20%D0%A2%D1%91%D0%BC%D0%BD%D1%8B%D0%B5%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0%20(2015)%20-%20%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B5%D1%82%D1%8C%20%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD"
                                        data-service="odnoklassniki"><span
                                            class="b-share-icon b-share-icon_odnoklassniki"></span><span
                                            class="b-share-counter"></span></a></span><span class="b-share-btn__wrap"><a
                                        rel="nofollow" target="_blank" title="Google Plus"
                                        class="b-share__handle b-share__link b-share-btn__gplus"
                                        href="https://share.yandex.net/go.xml?service=gplus&amp;url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;title=%D0%9C%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%3A%20%D0%A2%D1%91%D0%BC%D0%BD%D1%8B%D0%B5%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0%20(2015)%20-%20%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B5%D1%82%D1%8C%20%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD"
                                        data-service="gplus"><span class="b-share-icon b-share-icon_gplus"></span><span
                                            class="b-share-counter"></span></a></span><span class="b-share-btn__wrap"><a
                                        rel="nofollow" target="_blank" title="Мой Мир"
                                        class="b-share__handle b-share__link b-share-btn__moimir"
                                        href="https://share.yandex.net/go.xml?service=moimir&amp;url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;title=%D0%9C%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%3A%20%D0%A2%D1%91%D0%BC%D0%BD%D1%8B%D0%B5%20%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0%20(2015)%20-%20%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B5%D1%82%D1%8C%20%D0%BE%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD"
                                        data-service="moimir"><span
                                            class="b-share-icon b-share-icon_moimir"></span><span
                                            class="b-share-counter"></span></a></span><iframe style="display: none"
                                                                                              src="https://yastatic.net/share/ya-share-cnt.html?url=https%3A%2F%2Fmy-hit.org%2Ffilm%2F{{$film->film_id}}%2F&amp;services=vkontakte,facebook,twitter,odnoklassniki,gplus,moimir,yaru"></iframe></span>
                        </div>
                        <br>
                        <div class="btn-group">
                            <button class="btn btn-info" data-toggle="modal" data-remote="/user/login_form/"
                                    data-target="#defaultModal"><i class="icon-thumbs-up icon-white"></i> Нравится
                            </button>
                            <button class="btn btn-info" data-toggle="modal" data-remote="/user/login_form/"
                                    data-target="#defaultModal"><i class="icon-thumbs-down icon-white"></i></button>
                        </div>&nbsp;<button class="btn btn-info" data-toggle="modal" data-remote="/user/login_form/"
                                            data-target="#defaultModal"><i class="icon-time icon-white"></i> Хочу
                            посмотреть
                        </button>&nbsp;<button class="btn btn-info" data-toggle="modal" data-remote="/user/login_form/"
                                               data-target="#defaultModal"><i class="icon-check icon-white"></i> Смотрел
                        </button>
                    </div>
                </div>--}}
                <br>
                <div class="row">
                    <div class="text-center b_tz_on_top" style="overflow: hidden" id="b_tz_172"
                         onmouseup="window.event.cancelBubble=true"></div>
                </div>
                <h3>Смотреть онлайн</h3>
                <div class="row">
                    <div class="col-sm-12 center-block" style="max-width: 760px;">
                        <div style="margin-bottom: 6px;" class="text-center"><strong>Смотреть онлайн Мифика: Тёмные
                                времена (2015) в хорошем качестве</strong></div>
                        <div class="player" id="hitplayer_inner"
                             style="width: 100%; height: 414px; visibility: visible;">Вставить Плеер</div>

                    </div>
                </div>
                <h3>Актеры</h3>
                <div class="row">
                    @foreach ($stars as $star)
                        <div class="col-sm-3 text-center" style="width: 20%;"><a title="{{$star->star_name}}"  href="/star/{{$star->star_id}}/">
                                <img class="img-rounded img-responsive" src="/storage/{{$star->star_photo}}" alt="{{$star->star_name}}" title="{{$star->star_name}}"></a>
                            <b><a title="{{$star->star_name}}"   href="/star/{{$star->star_id}}/">{{$star->star_name}}</a></b>
                        </div>
                        @if($loop->iteration==5)
                            @break
                        @endif
                    @endforeach
                </div>
                <br><a class="btn btn-default" href="/film/{{$film->film_id}}/star/">Все
                    актеры ... »</a>

                <h3>Знаете ли вы, что...</h3>
                <ul class="list-unstyled">
                    @foreach ($trivias as $trivia)
                        <li><blockquote style="text-align: justify; margin-left: 5px;">{{$trivia->trivia_text}}</blockquote> </li>
                    @endforeach
                </ul>
                <a class="btn btn-default" href="/film/{{$film->film_id}}/trivia/">Все факты ... »</a>

                <h3>Видео</h3>



                <div class="row">
                    @foreach ($videos as $video)

                        <div class="col-sm-3 text-center"><a
                                href="/film/{{$video->film_id}}/video/{{$video->video_id}}/"><img
                                    class="img-rounded img-responsive"
                                    src="/storage/site/kadr/{{$video->film_id}}/{{$video->video_kadr}}"
                                    alt="{{$film->film_name}} ({{substr($techinfo->release, 0, 4)  }}) - {{$video->video_type_name}}"
                                    title="{{$film->film_name}} ({{substr($techinfo->release, 0, 4)  }}) - {{$video->video_type_name}}"></a><b><a
                                    href="/film/{{$film->film_id}}/video/{{$video->video_id}}/"
                                    title="{{$film->film_name}} ({{substr($techinfo->release, 0, 4)  }}) - {{$video->video_type_name}}">{{$film->film_name}} ({{substr($techinfo->release, 0, 4)  }}) -
                                    {{$video->video_type_name}}</a></b><br><small>0 - просмотров</small></div>
                    @endforeach

                </div>
                <div class="row">

                </div>
                <a class="btn btn-default" href="/film/{{$film->film_id}}/video/">Всё видео ... »</a>


                <h3>Скачать бесплатно</h3>

                <div class="download" id="download-49308">
                    <div class="row">
                        <div class="col-sm-12"><span class="pull-right"><small><i class="icon-calendar"></i> 07.09.2015 в 22:05</small></span><b><a
                                    title="{{$film->film_name}} (2015) - скачать бесплатно"
                                    href="/storage/torrent/[my-hit.org]_1591488.torrent">Файл
                                    №49308</a></b></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled">
                                <li><b>Качество:</b> HDRip</li>
                                <li><b>Аудио #1:</b> Русский, Профессиональный многоголосый</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled">
                                <li><b>Файлы:</b></li>
                                <li><b>#1:</b> DEMO-DEMO.DEMO.DEMO.2015.P.HDRip.avi (<b>1.46 GB</b>)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><a title="{{$film->film_name}} (2015) - скачать бесплатно" role="button"
                                                 class="btn btn-sm btn-success"
                                                 href="/storage/torrent/[my-hit.org]_1591488.torrent">Скачать</a>&nbsp;<button
                                class="btn btn-sm btn-default btn-raskadr-show" data-download-id="49308"
                                data-film-id="{{$film->film_id}}">Раскадровка
                            </button>&nbsp;<a role="button" class="btn btn-sm btn-default" data-toggle="modal"
                                              href="./download/49308/mediainfo/" data-target="#defaultModal"
                                              rel="nofollow">MediaInfo</a></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="raskadr-49308" style="display:none;"></div>
                    </div>
                </div>
                <script type="text/javascript"
                        src="/js/user.js?v=13"></script>
                <h3>Отзывы</h3>
                <div id="comment_list" data-module="film" data-key-a="1" data-key-b="{{$film->film_id}}" data-at-page="20">
                    <div class="row row-comment-total-count">
                        <div class="col-sm-3" style="margin-bottom: 10px;"><b>Отзывов:</b> <span
                                class="span-comment-total-count">30</span></div>
                    </div>

                    @foreach ($comments as $comment)


                        <div class="comment" id="comment_{{$comment->comment_id}}">
                            <div class="user"><a href="/user/{{$comment->user_id}}/"
                                                 target="_blank"><img class="img-rounded img-responsive center-block"
                                                                      src="/storage/site/1606631_90x90x30.jpg"
                                                                      width="90" alt=""></a></div>
                            <div class="body">
                                <div class="pull-right"></div>
                                <a href="/user/{{$comment->user_id}}/" target="_blank"><b>{{$comment->name}}</b></a>
                                <img
                                    src="/files/shared/images/system/profile/gender_female.png"
                                    class="sex"> • {{$comment->comment_time}} • <span
                                    class="label @if($comment->comment_type==2) label-danger">Отрицательный@elseif($comment->comment_type==1) label-success">Положительный@else"> @endif</span><br>
                                <p> {{$comment->comment_text}}</p></div>
                        </div>

                    @endforeach





                    <div class="row" id="comment-list-replace" style="margin-top: 12px;">
                        <div class="text-center">
                            <button class="btn btn-primary btn-comment-list" data-skip="20"><i
                                    class="icon-caret-down icon-white"></i> Показать еще отзывы
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                @if (!isset($user))
                    <div class="alert alert-info">Для добавления отзывов, необходимо зарегистрироваться и войти на сайт.</div>
                @endif



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
