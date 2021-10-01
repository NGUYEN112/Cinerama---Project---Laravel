<?php

use App\Http\Controllers\admin\AdminCinemaController;
use App\Http\Controllers\admin\AdminFilmController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\clients\FilmController;
use App\Http\Controllers\clients\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[HomeController::class,'clientHomePage']);
Route::get('/films',[FilmController::class,'clientFilmPage'])->name('client.films');

Route::group(['prefix'=> 'auth'], function() {
    Route::get('login',[AuthController::class,'loginPage']);
    Route::post('login',[AuthController::class,'login']);

    Route::get('register',[AuthController::class,'registerPage']);
    Route::post('register',[AuthController::class,'register']);
});
Route::group(['prefix' => 'admin','middleware' => 'checkpermission'], function () {
    Route::get('/',[AdminHomeController::class,'adminHomePage']);

    //Cinema Controller
    Route::group(['prefix' => 'cinemas'], function() {
        Route::get('/',[AdminCinemaController::class,'listCinemaPage']);
        Route::get('/create',[AdminCinemaController::class,'createCinemaPage']);
        Route::post('/create',[AdminCinemaController::class,'createCinema']);
        Route::get('/edit/{id}',[AdminCinemaController::class,'editCinemaPage']);
        Route::post('/edit/{id}',[AdminCinemaController::class,'updateCinema']);
    });
    //Film Controller
    Route::group(['prefix' => 'films'], function() {
        Route::get('/',[AdminFilmController::class,'listFilmPage']);
        Route::get('/create',[AdminFilmController::class,'addFilmPage']);
        Route::post('/create',[AdminFilmController::class,'storeFilm']);
        Route::get('/edit/{id}',[AdminFilmController::class,'editFilmPage']);
        Route::post('/edit/{id}',[AdminFilmController::class,'updateFilm']);
    });

    
    
});

