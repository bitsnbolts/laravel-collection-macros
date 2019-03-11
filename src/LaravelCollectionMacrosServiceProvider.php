<?php

namespace Bitsnbolts\LaravelCollectionMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Bitsnbolts\LaravelCollectionMacros\Macros\ReplaceInKeys;

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
