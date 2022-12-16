<div class="col-sm-2">
    <div class="sidebar-nav">
        <ul class="nav nav-list">
            <li><a href="/film/{{$film->film_id}}/">{{$film->film_name}}</a>
            </li>
            <li class="nav-divider"></li>
            <li class="nav-header">Обзор</li>
            <li><a href="/film/{{$film->film_id}}/star/">Создатели</a></li>
            @if($trivias->first()) <li><a href="/film/{{$film->film_id}}/trivia/">Знаете ли вы, что...</a></li>@else
                <li class="disabled"><span>Знаете ли вы, что...</span></li>@endif
            <li class="disabled"><span>Киноляпы</span></li>
            <li class="disabled"><span>Цитаты</span></li>
            <li class="disabled"><span>Связи</span></li>
            <li class="disabled"><span>Часто задаваемые вопросы</span></li>
            <li class="disabled"><span>Премьеры и релизы</span></li>
            <li class="disabled"><span>Для родителей</span></li>
            <li class="disabled"><span>Дополнительная информация</span></li>
            <li><a href="/film/{{$film->film_id}}/techinfo/">Техническая<br>информация</a>
            </li>

            <li><a href="/film/{{$film->film_id}}/download/">Скачать</a></li>
            <li class="nav-divider"></li>
            <li class="nav-header">Видео</li>
            @if($count_v['interview']>=1) <li><a href="/film/{{$film->film_id}}/video/interview/">Интервью ({{$count_v['interview']}})</a></li>@else
                <li class="disabled"><span>Интервью</span></li>@endif
            @if($count_v['clip']>=1)<li ><a href="/film/{{$film->film_id}}/video/clip/">Клипы ({{$count_v['clip']}})</a></li>@else
                <li class="disabled"><span>Клипы</span></li>@endif
            @if($count_v['promo']>=1)<li><a href="/film/{{$film->film_id}}/video/promo/">Промо ({{$count_v['promo']}})</a></li>@else
                <li class="disabled"><span>Промо</span></li>@endif
            @if($count_v['filming']>=1)<li><a href="/film/{{$film->film_id}}/video/filming/">Съёмки ({{$count_v['filming']}})</a></li>@else
            <li class="disabled"><span>Съёмки</span></li>@endif
            @if($count_v['trailer']>=1)<li><a href="/film/{{$film->film_id}}/video/trailer/">Трейлеры ({{$count_v['trailer']}})</a></li>@else
                <li class="disabled"><span>Трейлеры</span></li>@endif
            @if($count_v['fragment']>=1)<li><a href="/film/{{$film->film_id}}/video/fragment/">Фрагменты ({{$count_v['fragment']}})</a></li>@else
            <li class="disabled"><span>Фрагменты (0)</span></li>@endif
            @if($count_v['videos']>=1) <li><a href="/film/{{$film->film_id}}/video/">Всё видео ({{$count_v['videos']}})</a></li>@else
                <li class="disabled"><span>Всё видео</span></li>@endif

            <li class="nav-divider"></li>
            <li class="nav-header">Фото</li>
            @if($count_p['frame']>=1)<li><a href="/film/{{$film->film_id}}/picture/frame/">Кадры ({{$count_p['frame']}})</a></li>@else
                <li class="disabled"><span>Кадры</span></li>@endif
            @if($count_p['wall']>=1)<li><a href="/film/{{$film->film_id}}/picture/wall/">Обои ({{$count_p['wall']}})</a></li>@else
                <li class="disabled"><span>Обои</span></li>@endif
            @if($count_p['poster']>=1)<li><a href="/film/{{$film->film_id}}/picture/poster/">Постеры ({{$count_p['poster']}})</a></li>@else
                <li class="disabled"><span>Постеры</span></li>@endif
            @if($count_p['filming']>=1)<li><a href="/film/{{$film->film_id}}/picture/filming/">Съёмки ({{$count_p['filming']}})</a></li>@else
                <li class="disabled"><span>Съёмки</span></li>@endif
            @if($count_p['fan-art']>=1)<li><a href="/film/{{$film->film_id}}/picture/fan-art/">Фан-арт ({{$count_p['fan-art']}})</a></li>@else
                <li class="disabled"><span>Фан-арт</span></li>@endif
            @if($count_p['flyer']>=1)<li><a href="/film/{{$film->film_id}}/picture/flyer/">Флаеры ({{$count_p['flyer']}})</a></li>@else
                <li class="disabled"><span>Флаеры</span></li>@endif
            @if($count_p['pictures']>=1)<li><a href="/film/{{$film->film_id}}/picture/">Все фото ({{$count_p['pictures']}})</a></li>@else
                <li class="disabled"><span>Все фото</span></li>@endif
            <li class="nav-divider"></li>
            <li class="nav-header">Посты</li>
            <li class="disabled"><span>Новости кино (0)</span></li>
            <li class="disabled"><span>Премьера (0)</span></li>
            <li class="disabled"><span>Репортаж (0)</span></li>
            <li class="disabled"><span>Рецензия (0)</span></li>
            <li class="disabled"><span>Статья (0)</span></li>
            <li class="disabled"><span>﻿Интервью (0)</span></li>
            <li class="disabled"><span>Все посты (0)</span></li>
            <li class="nav-divider"></li>
        </ul>
    </div>
    <div id="ambn504847" style="width:160px; height:600px; overflow: hidden; margin: 8px auto 0;"></div>

</div>
