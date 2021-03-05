<?php

namespace App\Providers;

use App\Services\CodeGenerator;
use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\OtpService', function ($app) {
            return new \App\Services\OtpService(new CodeGenerator);
        });
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
