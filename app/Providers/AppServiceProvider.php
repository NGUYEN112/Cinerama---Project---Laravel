<?php

namespace App\Providers;

use App\Repositories\Contracts\CinemasRepository;
use App\Repositories\Contracts\CombosRepository;
use App\Repositories\Contracts\DiscountsRepository;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\FormatFilmsRepository;
use App\Repositories\Contracts\RemarkablesRepository;
use App\Repositories\Contracts\RoomsRepository;
use App\Repositories\Contracts\ScreeningsRepository;
use App\Repositories\Contracts\UsersRepository;
use App\Repositories\Eloquents\CinemasEloquentRepository;
use App\Repositories\Eloquents\CombosEloquentRepository;
use App\Repositories\Eloquents\DiscountsEloquentRepository;
use App\Repositories\Eloquents\FilmsEloquentRepository;
use App\Repositories\Eloquents\FormatFilmsEloquentRepository;
use App\Repositories\Eloquents\RemarkablesEloquentRepository;
use App\Repositories\Eloquents\RoomsEloquentRepository;
use App\Repositories\Eloquents\ScreeningsEloquentRepository;
use App\Repositories\Eloquents\UsersEloquentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UsersRepository::class       , UsersEloquentRepository::class);
        $this->app->bind(FilmsRepository::class       , FilmsEloquentRepository::class);
        $this->app->bind(FormatFilmsRepository::class , FormatFilmsEloquentRepository::class);
        $this->app->bind(CinemasRepository::class     , CinemasEloquentRepository::class);
        $this->app->bind(RemarkablesRepository::class , RemarkablesEloquentRepository::class);
        $this->app->bind(CombosRepository::class      , CombosEloquentRepository::class);
        $this->app->bind(ScreeningsRepository::class  , ScreeningsEloquentRepository::class);
        $this->app->bind(RoomsRepository::class       , RoomsEloquentRepository::class);
        $this->app->bind(CombosRepository::class      , CombosEloquentRepository::class);
        $this->app->bind(DiscountsRepository::class   , DiscountsEloquentRepository::class);


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
