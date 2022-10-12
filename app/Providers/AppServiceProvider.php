<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::pushMeta([
            new HtmlString('<meta name="description" content="Share office, desk or table to work together">'),
        ]);
        Filament::serving(function () {
            // ...
            Filament::registerStyles([
                asset('filament/assets/css/leaflet.css'),
                asset('filament/assets/css/geosearch.css'),
            ]);
            Filament::registerScripts([
                asset('filament/assets/js/leaflet.js'),
                asset('filament/assets/js/geosearch.umd.js'),
            ], true);
            // ...
        });
    }
}
