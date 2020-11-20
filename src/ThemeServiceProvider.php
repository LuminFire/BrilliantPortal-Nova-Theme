<?php

namespace BrilliantPackages\BrilliantPortalNovaTheme;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::theme(asset('/brilliant-packages/brilliant-portal-nova-theme/theme.css'));
        });

        $this->publishes([
            __DIR__.'/../resources/css' => public_path('brilliant-packages/brilliant-portal-nova-theme'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
