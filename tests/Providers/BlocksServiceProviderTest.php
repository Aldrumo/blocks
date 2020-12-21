<?php

namespace Aldrumo\Blocks\Tests\Providers;

use Aldrumo\Blocks\Providers\BlocksServiceProvider;
use Aldrumo\Blocks\Tests\TestCase;

class BlocksServiceProviderTest extends TestCase
{
    /** @test */
    public function test_blocks_provider_loaded()
    {
        $this->assertTrue(
            $this->app->providerIsLoaded(BlocksServiceProvider::class)
        );
    }
}
