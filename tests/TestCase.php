<?php

namespace NeoNiche\AppMonitor\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use NeoNiche\AppMonitor\AppMonitorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'NeoNiche\\AppMonitor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            AppMonitorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //config()->set('database.default', 'testing');
        Schema::dropAllTables();

        $migration = include __DIR__.'/../database/migrations/create_disk_monitor_logs_table.php';
        $migration->up();
    }
}
