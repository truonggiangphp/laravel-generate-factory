<?php

namespace Webike\Factory\Tests;

use Webike\Factory\FactoryGeneratorServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [
            FactoryGeneratorServiceProvider::class
        ];
    }

}
