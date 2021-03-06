<?php

namespace Aldrumo\Blocks\Tests;

use Aldrumo\Blocks\Providers\BlocksServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BlocksServiceProvider::class,
        ];
    }
}
