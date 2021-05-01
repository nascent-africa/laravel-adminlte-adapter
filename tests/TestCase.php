<?php

namespace NascentAfrica\LaravelAdminlteAdapter\Tests;

use NascentAfrica\LaravelAdminlteAdapter\LaravelAdminlteAdapterServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAdminlteAdapterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
