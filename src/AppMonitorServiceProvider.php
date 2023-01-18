<?php

namespace NeoNiche\AppMonitor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NeoNiche\AppMonitor\Commands\AppMonitorCommand;

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
