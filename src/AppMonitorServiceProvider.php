<?php

namespace NeoNiche\AppMonitor;

use Illuminate\Support\Facades\Route;
use NeoNiche\AppMonitor\Commands\AppMonitorCommand;
use NeoNiche\AppMonitor\Http\Controllers\DiskFileLogController;
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

    public function packageRegistered(): void
    {
        Route::macro('appMonitor', function (string $prefix = 'app-monitor') {
            Route::prefix($prefix)->group(function () {
                Route::get('/disk-file-logs', [DiskFileLogController::class, 'index']);
            });
        });
    }
}
