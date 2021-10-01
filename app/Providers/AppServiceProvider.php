<?php

namespace App\Providers;

use App\Repositories\Contracts\CinemasRepository;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\FormatFilmsRepository;
use App\Repositories\Contracts\UsersRepository;
use App\Repositories\Eloquents\CinemasEloquentRepository;
use App\Repositories\Eloquents\FilmsEloquentRepository;
use App\Repositories\Eloquents\FormatFilmsEloquentRepository;
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
