<?php

namespace NeoNiche\AppMonitor;

use NeoNiche\AppMonitor\Commands\AppMonitorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AppMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-app-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk_monitor_logs_table')
            ->hasCommand(AppMonitorCommand::class);
    }
}
