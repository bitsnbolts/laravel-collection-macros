<?php

namespace BitsnBolts\LaravelCollectionMacros\Macros;

use Illuminate\Support\Collection;

/**
 * Do a str_replace on all the keys of the collection.
 *
 * @param string $search
 * @param string $replace
 *
 * @mixin \Illuminate\Support\Collection
 *
 * @return mixed
 */
class ReplaceInKeys
{
    public function __invoke()
    {
        /**
         * @param $search
         * @param $replace
         * @return Collection
         */
        return function ($search, $replace) {
            return $this->mapWithKeys(function ($value, $key) use ($search, $replace) {
                return [str_replace($search, $replace, $key) =>  $value];
            });
        };
    }
}
