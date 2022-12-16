<?php

namespace App\Providers\Composers;

use App\Models\Films;
use App\View\Composers\FilmComposer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;



class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        // Use following code if you want to use callback
        // Based view composer instead of class based view composer
        View::composer('layouts.left_menu', function ($view) {

            $id=$view->film->film_id;
            $count_p['pictures']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->count();
            $count_p['frame']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',3)->count();
            $count_p['wall']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',4)->count();
            $count_p['poster']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',1)->count();
            $count_p['filming']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',5)->count();
            $count_p['fan-art']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',2)->count();
            $count_p['flyer']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',6)->count();
            $count_v['videos'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->count();
            $count_v['interview'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type_id','=',5)->count();
            $count_v['clip'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type_id','=',4)->count();
            $count_v['promo'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type_id','=',3)->count();
            $count_v['filming'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type_id','=',6)->count();
            $count_v['trailer'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type_id','=',1)->count();
            $count_v['fragment'] = DB::table('videos')->join('video_types', 'video_types.video_type_id','=', 'videos.video_type')->where('film_id','=',$id)->where('video_type_id','=',2)->count();

            $trivias = DB::table('trivias')->where('film_id','=',$id)->limit(3)->get();
           // $stars = DB::table('film_stars')->join('stars', 'film_stars.star_id','=', 'stars.star_id')->join('star_types', 'star_types.star_type_id','=', 'stars.star_type')->where('film_stars.film_id','=',$id)->limit(20)->get();

            $view->with('count_p', $count_p);
            $view->with('count_v', $count_v);
            $view->with('trivias', $trivias);
           // $view->with('stars', $stars);
        });
        View::composer('layouts.left_menu_picture', function ($view) {

            $id=$view->film->film_id;
            $count_p['pictures']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->count();
            $count_p['frame']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',3)->count();
            $count_p['wall']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',4)->count();
            $count_p['poster']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',1)->count();
            $count_p['filming']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',5)->count();
            $count_p['fan-art']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',2)->count();
            $count_p['flyer']= DB::table('pictures')->join('picture_types', 'pictures.picture_type','=', 'picture_types.picture_type_id')->where('pictures.film_id','=',$id)->where('pictures.picture_type','=',6)->count();

            $trivias = DB::table('trivias')->where('film_id','=',$id)->limit(3)->get();
            $star_pictures = DB::table('film_stars')
                ->select('stars.*','pictures.*', DB::raw("count(picture_stars.picture_id) as count"))
                ->leftJoin('stars', 'film_stars.star_id','=', 'stars.star_id')
                ->leftJoin('picture_stars', 'picture_stars.star_id','=', 'stars.star_id')
                ->leftJoin('pictures', 'pictures.picture_id','=', 'picture_stars.picture_id')
                ->where('stars.star_type','=',7)
                ->groupBy('picture_stars.picture_star_id', 'stars.star_id', 'pictures.picture_id')
                    ->get();





            $view->with('count_p', $count_p);
            $view->with('trivias', $trivias);
            $view->with('star_pictures', $star_pictures);
           // $view->with('stars', $stars);
        });
    }



}
