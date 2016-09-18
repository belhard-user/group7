<?php

namespace App\Providers;

use Cart;
use Illuminate\Support\ServiceProvider;

class CompoerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cart::instance()->getQuantity()
        \View::composer('partials.nav', function($view){
            $view->with('total', Cart::instance()->getQuantity())
                ->with('amount', Cart::instance()->total);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
