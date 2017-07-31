<?php

namespace App\Modules\Adminpanel\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'adminpanel');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'adminpanel');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'adminpanel');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
