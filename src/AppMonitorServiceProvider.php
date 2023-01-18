<?php

namespace NeoNiche\AppMonitor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NeoNiche\AppMonitor\Commands\AppMonitorCommand;

class AppMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-app-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-app-monitor_table')
            ->hasCommand(AppMonitorCommand::class);
    }
}
