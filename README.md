# A simple way to monitor laravel application disk usage and other resources.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/neoniche/laravel-app-monitor.svg?style=flat-square)](https://packagist.org/packages/neoniche/laravel-app-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/neoniche/laravel-app-monitor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/neoniche/laravel-app-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/neoniche/laravel-app-monitor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/neoniche/laravel-app-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/neoniche/laravel-app-monitor.svg?style=flat-square)](https://packagist.org/packages/neoniche/laravel-app-monitor)

This package will help monitor a laravel application disk metrics.

## Installation

You can install the package via composer:

```bash
composer require neoniche/laravel-app-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="app-monitor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="app-monitor-config"
```

This is the contents of the published config file:

```php
return [
  /**
     * The name of the disk you want to monitor.
     * default: 'local'
     */
    'disk_names' => [
        'local',
    ],
];
```
You should set up a schedule to run the command `app-monitor:log` to record the disk metrics.

```php
// app/Console/Kernel.php
use Neoniche\AppMonitor\Commands\AppMonitorCommand;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(AppMonitorCommand::class)->daily();
    }
}
```
Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="app-monitor-views"
```

## Usage

```bash
If you wish to view the statistics that is logged to the database in a browser. You should add the macro below to your routes file.

```php

// in a routes files

Route::appMonitor('custom-monitor-url');

Now, you can see all statics when browsing /custom-monitor-url/disk-file-logs. You can change the custom-monitor-url to whatever suits you. We highly recommand using the auth middleware for this route, so guests can't see any data regarding your disks.
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Godspower Oduose](https://github.com/rockblings)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
