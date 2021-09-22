<?php

namespace Exolnet\VueData\Tests\Integration;

use Exolnet\VueData\VueDataServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            VueDataServiceProvider::class,
        ];
    }
}
