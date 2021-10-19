<?php

use App\Http\Controllers\admin\AdminCinemaController;
use App\Http\Controllers\admin\AdminComboController;
use App\Http\Controllers\admin\AdminDiscountController;
use App\Http\Controllers\admin\AdminFilmController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminRemarkableController;
use App\Http\Controllers\admin\AdminRoomController;
use App\Http\Controllers\admin\AdminScreeningController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\clients\FilmController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\OrderTicketController;
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

    Route::get('logout',[AuthController::class,'logout']);

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

    //Room Controller
    Route::group(['prefix' => 'rooms'], function() {
        Route::get('/',[AdminRoomController::class,'listRoomPage']);
        Route::get('/create',[AdminRoomController::class,'createRoomPage']);
        Route::post('/create',[AdminRoomController::class,'storeRoom']);
        Route::get('/edit/{id}',[AdminRoomController::class,'editRoomPage']);
        Route::post('/edit/{id}',[AdminRoomController::class,'updateRoom']);
    });

    //Combo Controller
    Route::group(['prefix' => 'combos'], function() {
        Route::get('/',[AdminComboController::class,'listComboPage']);
        Route::get('/create',[AdminComboController::class,'createComboPage']);
        Route::post('/create',[AdminComboController::class,'storeCombo']);
        Route::get('/edit/{id}',[AdminComboController::class,'editComboPage']);
        Route::post('/edit/{id}',[AdminComboController::class,'updateCombo']);
    });

    //Screening Controller
    Route::group(['prefix' => 'screenings'], function() {
        Route::get('/',[AdminScreeningController::class,'listScreeningPage']);
        Route::get('/create',[AdminScreeningController::class,'createScreeningPage']);
        Route::post('/create',[AdminScreeningController::class,'storeScreening']);
        Route::get('/edit/{id}',[AdminScreeningController::class,'editScreeningPage']);
        Route::post('/edit/{id}',[AdminScreeningController::class,'updateScreening']);
    });
    
    //Discount COntroller
    Route::group(['prefix' => 'discounts'], function() {
        Route::get('/',[AdminDiscountController::class,'listDiscountPage']);
        Route::get('/create',[AdminDiscountController::class,'createDiscountPage']);
        Route::post('/create',[AdminDiscountController::class,'storeDiscount']);
        Route::get('/edit/{id}',[AdminDiscountController::class,'editDiscountPage']);
        Route::post('/edit/{id}',[AdminDiscountController::class,'updateDiscount']);
    });

    //Remarkable Controller
    Route::group(['prefix' => 'remarkables'], function() {
        Route::get('/',[AdminRemarkableController::class,'listRemarkPage']);
        Route::get('/create',[AdminRemarkableController::class,'createRemarkPage']);
        Route::post('/create',[AdminRemarkableController::class,'storeRemark']);
        Route::get('/edit/{id}',[AdminRemarkableController::class,'editRemarkPage']);
        Route::post('/edit/{id}',[AdminRemarkableController::class,'updateRemark']);
        
    });
});

Route::get('/change-status/{id}/{status}',[AdminRemarkableController::class,'changeStatus']);
Route::get('/get-remark',[HomeController::class,'getRemark']);
Route::get('/get-cinema',[OrderTicketController::class,'getCinema']);
Route::get('/get-film',[OrderTicketController::class,'getFilm']);
Route::get('/get-all-film',[OrderTicketController::class,'getFilmForRemark']);
Route::get('/get-combo',[OrderTicketController::class,'getCombo']);
Route::get('/get-discount',[AdminDiscountController::class,'getDiscount']);
Route::get('/get-date/{cinema_id}/{film_id}',[OrderTicketController::class,'getDate']);
Route::get('/get-time/{cinema_id}/{film_id}/{date}',[OrderTicketController::class,'getTime']);






