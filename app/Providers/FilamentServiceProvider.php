<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            // Using Vite
            Filament::registerViteTheme('resources/css/filament.css');
         
        });
        
        Filament::registerScripts([
            asset('resources/js/filament.js'),
        ]);
         
        Filament::registerStyles([
            'https://unpkg.com/tippy.js@6/dist/tippy.css',
            asset('resources/css/colours.css'),
        ]);
    }
}





 
