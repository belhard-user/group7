<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // app()
        $this->app->singleton('test', function($app){
            // dd(array_get($app, 'config.mail.host2'), ':)');
            $names = ['Tank', 'Morpheus', 'Trinity', 'Dozer', 'Neo'];
            return new \App\My\Test( collect($names)->random() );
        });
    }
}
