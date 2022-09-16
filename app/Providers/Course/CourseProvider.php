<?php

namespace App\Providers\Course;

use App\Repositories\Course\CourseRepository;
use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CourseProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CourseRepositoryInterface::class,
            CourseRepository::class
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
