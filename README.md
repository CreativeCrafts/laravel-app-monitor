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
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="app-monitor-views"
```

## Usage

```php
$appMonitor = new NeoNiche\AppMonitor();
echo $appMonitor->echoPhrase('Hello, NeoNiche!');
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
