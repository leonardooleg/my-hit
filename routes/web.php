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
Route::get('film/{id}/video', [FilmController::class, 'video']);
Route::get('film/{id}', [FilmController::class, 'show']);

