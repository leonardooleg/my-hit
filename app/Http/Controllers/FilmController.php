<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo '$_REQUEST[]';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        global $show_menu;
        $film = DB::table('films')->where('film_id','=',$id)->first();
        $countries = DB::table('countries')->where('country_id','=',$film->film_country)->get();
        $directors = DB::table('film_directors')->join('stars', 'film_directors.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_directors.film_id','=',$id)->limit(3)->get();
        $stars = DB::table('film_stars')->join('stars', 'film_stars.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_stars.film_id','=',$id)->limit(20)->get();
        $operators = DB::table('film_operators')->join('stars', 'film_operators.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_operators.film_id','=',$id)->limit(3)->get();
        $painters = DB::table('film_painters')->join('stars', 'film_painters.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_painters.film_id','=',$id)->limit(3)->get();
        $producers = DB::table('film_producers')->join('stars', 'film_producers.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_producers.film_id','=',$id)->limit(3)->get();
        $scenarios = DB::table('film_scenarios')->join('stars', 'film_scenarios.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_scenarios.film_id','=',$id)->limit(3)->get();
        $сomposers = DB::table('film_сomposers')->join('stars', 'film_сomposers.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_сomposers.film_id','=',$id)->limit(3)->get();
        $genres = DB::table('film_genres')->join('genres', 'film_genres.genre_id','=', 'genres.genre_id')->where('film_genres.film_id','=',$id)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $poster = DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',1)->first();
         $trivias = DB::table('trivias')->where('film_id','=',$id)->limit(3)->get();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->limit(4)->get();
    $comments = DB::table('comments')->join('users', 'users.id','=', 'comments.user_id')->where('film_id','=',$id)->limit(10)->get();




        return view('film', [
            'film' => $film,
            'countries' => $countries,
            'directors' => $directors,
            'operators' => $operators,
            'stars' => $stars,
            'painters' => $painters,
            'producers' => $producers,
            'scenarios' => $scenarios,
            'сomposers' => $сomposers,
            'genres' => $genres,
            'techinfo' => $techinfo,
            'poster' => $poster,
            'trivias' => $trivias,
            'videos' => $videos,
            'comments' => $comments,
        ]);

    }



    public function picture($id,$picture_id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();

        $picture = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('film_id','=',$id)->where('picture_id','=',$picture_id)->first();

        return view('picture', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'picture' => $picture,
            'techinfo' => $techinfo,

        ]);
    }

    public function pictures($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();

        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('film_id','=',$id)->get();

        return view('pictures', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function flyer($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();

        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('picture_type','=',6)->where('film_id','=',$id)->get();

        return view('flyer', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function fan_art($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();
        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('picture_type','=',2)->where('film_id','=',$id)->get();

        return view('fan_art', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function filming_picture($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();
        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('picture_type','=',5)->where('film_id','=',$id)->get();

        return view('filming_picture', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function poster($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('picture_type','=',1)->where('film_id','=',$id)->get();

        return view('poster', [
            'film' => $film,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function wall($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();
        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('picture_type','=',4)->where('film_id','=',$id)->get();

        return view('wall', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function frame($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();
        $star_pictures = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $pictures = DB::table('pictures')->join('picture_types', 'picture_types.picture_type_id','=', 'pictures.picture_type')->where('picture_type','=',3)->where('film_id','=',$id)->get();

        return view('frame', [
            'film' => $film,
            'star_pictures' => $star_pictures,
            'pictures' => $pictures,
            'techinfo' => $techinfo,
        ]);
    }

    public function video($id,$video_id){
        $film = DB::table('films')->where('film_id','=',$id)->first();

        $star_videos = DB::table('film_stars')
            ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
            ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
            ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
            ->where('stars.star_type','=',7)->get();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $stars = DB::table('film_stars')->join('stars', 'film_stars.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')
            ->where('film_stars.film_id','=',$id)->limit(5)->get();

        $video = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_id','=',$video_id)->first();

        return view('video', [
            'film' => $film,
            'star_videos' => $star_videos,
            'video' => $video,
            'techinfo' => $techinfo,
            'stars' => $stars,
        ]);
    }


    public function videos($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();

        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->get();

        return view('videos', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }
    public function fragment($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();

        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();

        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type','=',2)->get();

        return view('fragment', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }

    public function trailer($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type','=',1)->get();
        return view('trailer', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }

    public function filming($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type','=',6)->get();
        return view('filming', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }

    public function promo($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type','=',3)->get();
        return view('promo', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }

    public function clip($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type','=',4)->get();
        return view('clip', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }

    public function interview($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
       $star_videos = DB::table('film_stars')
           ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
           ->leftJoin('video_stars', 'video_stars.star_id','=', 'stars.star_id')
           ->leftJoin('videos', 'videos.video_id','=', 'video_stars.video_id')
           ->where('stars.star_type','=',7)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type','=',5)->get();
        return view('interview', [
            'film' => $film,
            'star_videos' => $star_videos,
            'videos' => $videos,
            'techinfo' => $techinfo,
        ]);
    }

    public function star($id)
    {

        $film = DB::table('films')->where('film_id','=',$id)->first();

        $directors = DB::table('film_directors')->join('stars', 'film_directors.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_directors.film_id','=',$id)->get();
        $stars = DB::table('film_stars')->join('stars', 'film_stars.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_stars.film_id','=',$id)->get();
        $operators = DB::table('film_operators')->join('stars', 'film_operators.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_operators.film_id','=',$id)->get();
        $painters = DB::table('film_painters')->join('stars', 'film_painters.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_painters.film_id','=',$id)->get();
        $producers = DB::table('film_producers')->join('stars', 'film_producers.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_producers.film_id','=',$id)->get();
        $scenarios = DB::table('film_scenarios')->join('stars', 'film_scenarios.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_scenarios.film_id','=',$id)->get();
        $сomposers = DB::table('film_сomposers')->join('stars', 'film_сomposers.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_сomposers.film_id','=',$id)->get();
        $editors = DB::table('film_editors')->join('stars', 'film_editors.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_editors.film_id','=',$id)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $trivias = DB::table('trivias')->where('film_id','=',$id)->limit(3)->get();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->limit(4)->get();

        return view('star', [
            'film' => $film,
            'editors' => $editors,
            'directors' => $directors,
            'operators' => $operators,
            'stars' => $stars,
            'painters' => $painters,
            'producers' => $producers,
            'scenarios' => $scenarios,
            'сomposers' => $сomposers,
            'techinfo' => $techinfo,
            'trivias' => $trivias,
            'videos' => $videos,
        ]);
    }

    public function trivia($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
        $genres = DB::table('film_genres')->join('genres', 'film_genres.genre_id','=', 'genres.genre_id')->where('film_genres.film_id','=',$id)->get();
        $techinfo = DB::table('techinfo')->where('film_id','=',$id)->first();
        $poster = DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',1)->first();
        $trivias = DB::table('trivias')->where('film_id','=',$id)->get();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->limit(1)->get();

        return view('trivia', [
            'film' => $film,
            'genres' => $genres,
            'techinfo' => $techinfo,
            'poster' => $poster,
            'trivias' => $trivias,
            'videos' => $videos,
        ]);
    }
    public function techinfo($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
        $genres = DB::table('film_genres')->join('genres', 'film_genres.genre_id','=', 'genres.genre_id')->where('film_genres.film_id','=',$id)->get();
        $techinfo = DB::table('techinfo')->join('techinfo_statuses', 'techinfo_statuses.techinfo_status_id','=', 'techinfo.status')->where('film_id','=',$id)->first();
        $poster = DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',1)->first();
        $trivias = DB::table('trivias')->where('film_id','=',$id)->get();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->limit(1)->get();

        return view('techinfo', [
            'film' => $film,
            'genres' => $genres,
            'techinfo' => $techinfo,
            'poster' => $poster,
            'trivias' => $trivias,
            'videos' => $videos,
        ]);
    }
    public function download($id)
    {
        $film = DB::table('films')->where('film_id','=',$id)->first();
        $genres = DB::table('film_genres')->join('genres', 'film_genres.genre_id','=', 'genres.genre_id')->where('film_genres.film_id','=',$id)->get();
        $techinfo = DB::table('techinfo')->join('techinfo_statuses', 'techinfo_statuses.techinfo_status_id','=', 'techinfo.status')->where('film_id','=',$id)->first();
        $poster = DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',1)->first();
        $trivias = DB::table('trivias')->where('film_id','=',$id)->get();
        $videos = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->limit(1)->get();

        return view('download', [
            'film' => $film,
            'genres' => $genres,
            'techinfo' => $techinfo,
            'poster' => $poster,
            'trivias' => $trivias,
            'videos' => $videos,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
