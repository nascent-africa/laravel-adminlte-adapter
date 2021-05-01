<?php

namespace NascentAfrica\LaravelAdminlteAdapter;

use Illuminate\Support\ServiceProvider;

class LaravelAdminlteAdapterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../../../resources/lang', 'laravel-adminlte-adapter');
        // $this->loadViewsFrom(__DIR__.'/../../../resources/views', 'laravel-adminlte-adapter');
        // $this->loadMigrationsFrom(__DIR__.'/../../../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../../config/config.php' => config_path('laravel-adminlte-adapter.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../../../resources/views' => resource_path('views/vendor/laravel-adminlte-adapter'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../../../resources/assets' => public_path('vendor/laravel-adminlte-adapter'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../../../resources/lang' => resource_path('lang/vendor/laravel-adminlte-adapter'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../../config/config.php', 'laravel-adminlte-adapter');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-adminlte-adapter', function () {
            return new LaravelAdminlteAdapter;
        });
    }
}
