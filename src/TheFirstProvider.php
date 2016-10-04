<?php

namespace Devpa\TheFirst;

use Illuminate\Support\ServiceProvider;

class TheFirstProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Devpa\TheFirst\FirstController');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'firstview');
    }
}
