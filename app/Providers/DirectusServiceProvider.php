<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Directus;

class DirectusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Directus::class, function ($app) {
            return new Directus();
        });
    }
}