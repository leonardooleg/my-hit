<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CategoryFilmController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

#Route::get('/user/login_form/', [UserController::class, 'index'])->name('login');

Route::get('film/a{id}', [CategoryFilmController::class, 'show']);
Route::get('film/{id}/star', [FilmController::class, 'star']);
Route::get('film/{id}/trivia', [FilmController::class, 'trivia']);
Route::get('film/{id}/techinfo', [FilmController::class, 'techinfo']);
Route::get('film/{id}/download', [FilmController::class, 'download']);
Route::get('film/{id}/video/fragment', [FilmController::class, 'fragment']);
Route::get('film/{id}/video/trailer', [FilmController::class, 'trailer']);
Route::get('film/{id}/video/filming', [FilmController::class, 'filming']);
Route::get('film/{id}/video/promo', [FilmController::class, 'promo']);
Route::get('film/{id}/video/clip', [FilmController::class, 'clip']);
Route::get('film/{id}/video/interview', [FilmController::class, 'interview']);
Route::get('film/{id}/video/{video_id}', [FilmController::class, 'video']);
Route::get('film/{id}/video', [FilmController::class, 'videos']);
Route::get('film/{id}/picture/filming', [FilmController::class, 'filming_picture']);
Route::get('film/{id}/picture/wall', [FilmController::class, 'wall']);
Route::get('film/{id}/picture/frame', [FilmController::class, 'frame']);
Route::get('film/{id}/picture/poster', [FilmController::class, 'poster']);
Route::get('film/{id}/picture/flyer', [FilmController::class, 'flyer']);
Route::get('film/{id}/picture/fan-art', [FilmController::class, 'fan_art']);
Route::get('film/{id}/picture/{picture_id}', [FilmController::class, 'picture']);
Route::get('film/{id}/picture', [FilmController::class, 'pictures']);
Route::get('film/{id}', [FilmController::class, 'show']);

