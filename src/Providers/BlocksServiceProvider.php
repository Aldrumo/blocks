<?php

namespace Aldrumo\Blocks\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BlocksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootMigrations();
        $this->bootViews();
    }

    protected function bootMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    protected function bootViews()
    {
        Blade::componentNamespace('Aldrumo\\Blocks\\View\\Components', 'Blocks');

        $this->loadViewsFrom(
            __DIR__ . '/../../resources/views',
            'Blocks'
        );
    }
}
