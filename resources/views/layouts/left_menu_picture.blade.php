<div class="col-sm-2">
    <div class="sidebar-nav">
        <ul class="nav nav-list">
            <li><a href="/film/{{$film->film_id}}/">{{$film->film_name}}</a>
            </li>

            <li class="nav-divider"></li>

            @if($count_p['pictures']>=1)<li><a href="/film/{{$film->film_id}}/picture/">Все фото ({{$count_p['pictures']}})</a></li>@else
                <li class="disabled"><span>Все фото</span></li>@endif
            <li class="nav-divider"></li>
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

            <li class="nav-divider"></li>
            <li class="nav-header">Знаменитости</li>
            @foreach($star_pictures as $star)
                <li><a href="/film/190409/post/s12456/">{{$star->star_name}} (3)</a></li>
            @endforeach


            <li class="nav-divider"></li>
        </ul>
    </div>
    <div id="ambn504847" style="width:160px; height:600px; overflow: hidden; margin: 8px auto 0;"></div>

</div>
