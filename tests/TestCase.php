<?php

namespace Tests;

use Revolution\Laravel\Mixins\StrMixinsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            StrMixinsServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        //
    }
}
