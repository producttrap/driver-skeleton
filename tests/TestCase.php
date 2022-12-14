<?php

declare(strict_types=1);

namespace ProductTrap\skeleton\Tests;

use ProductTrap\ProductTrapServiceProvider;
use ProductTrap\Skeleton\SkeletonServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [ProductTrapServiceProvider::class, SkeletonServiceProvider::class];
    }
}
