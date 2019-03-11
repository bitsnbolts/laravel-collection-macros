<?php

namespace Bitsnbolts\LaravelCollectionMacros\Tests;

class ExampleTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Bitsnbolts\LaravelCollectionMacros\LaravelCollectionMacrosServiceProvider'];
    }
    /** @test */
    public function it_can_replace_values_in_collection_keys()
    {
        $collection = collect(['foo_bar' => 'foo', 'bar' => 'baz'])
            ->replaceInKeys('_', 'LOREM');

        $this->assertEquals($collection->get('fooLOREMbar'), 'foo');
    }
}
