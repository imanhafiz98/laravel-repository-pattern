<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Student\StudentInterface;
use App\Repositories\Student\StudentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserInterface::class,UserRepository::class);
        $this->app->bind(StudentInterface::class,StudentRepository::class);
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
