<?php

namespace BitsnBolts\LaravelCollectionMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use BitsnBolts\LaravelCollectionMacros\Macros\ReplaceInKeys;

class LaravelCollectionMacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Collection::macro('replaceInKeys', app(ReplaceInKeys::class)());
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
