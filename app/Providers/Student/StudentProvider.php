<?php

namespace App\Providers\Student;

use App\Repositories\Student\StudentRepository;
use App\Repositories\Interfaces\Student\StudentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class StudentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            StudentRepositoryInterface::class,
            StudentRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
