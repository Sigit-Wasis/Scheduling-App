<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\TeacherRepository;
use App\Repositories\EloquentTeacher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TeacherRepository::class, EloquentTeacher::class);
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
