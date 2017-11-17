<?php

namespace Ollywarren\ShoppingCart;

use Illuminate\Support\ServiceProvider;
use ShoppingCart;

class ShoppingCartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Define the Config Publish Location
        $this->publishes([
            __DIR__ . '/config/shopping-cart.php' => config_path('shopping-cart.php')
        ], 'config');

        // Define the Assets Publish Location
        $this->publishes([
            __DIR__ . '/resources/sass/shopping-cart.scss' => resource_path('/assets/sass'),
            __DIR__ . '/resources/js/components' => resource_path('/assets/js/components/shopping-cart'),
        ], 'resources');
        
        // Define the Routes Location
        $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
        
        // Define Migrations Path
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ShoppingCart', function ($app) {
            return new ShoppingCart();
        });
    }
}