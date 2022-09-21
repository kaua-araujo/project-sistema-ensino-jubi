<?php

namespace App\Providers\Registration;

use App\Repositories\Registration\RegistrationRepository;
use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RegistrationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            RegistrationRepositoryInterface::class,
            RegistrationRepository::class
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
