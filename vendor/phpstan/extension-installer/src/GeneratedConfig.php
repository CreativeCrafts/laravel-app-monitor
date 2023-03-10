<?php declare(strict_types = 1);

namespace PHPStan\ExtensionInstaller;

/**
 * This class is generated by phpstan/extension-installer.
 * @internal
 */
final class GeneratedConfig
{

	public const EXTENSIONS = array (
  'nesbot/carbon' => 
  array (
    'install_path' => '/Users/prince/Projects/NeoNiche/laravel-app-monitor/vendor/nesbot/carbon',
    'relative_install_path' => '../../../nesbot/carbon',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
      ),
    ),
    'version' => '2.65.0',
  ),
  'nunomaduro/larastan' => 
  array (
    'install_path' => '/Users/prince/Projects/NeoNiche/laravel-app-monitor/vendor/nunomaduro/larastan',
    'relative_install_path' => '../../../nunomaduro/larastan',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
      ),
    ),
    'version' => '2.4.0',
  ),
  'phpstan/phpstan-deprecation-rules' => 
  array (
    'install_path' => '/Users/prince/Projects/NeoNiche/laravel-app-monitor/vendor/phpstan/phpstan-deprecation-rules',
    'relative_install_path' => '../../phpstan-deprecation-rules',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'rules.neon',
      ),
    ),
    'version' => '1.1.1',
  ),
  'phpstan/phpstan-phpunit' => 
  array (
    'install_path' => '/Users/prince/Projects/NeoNiche/laravel-app-monitor/vendor/phpstan/phpstan-phpunit',
    'relative_install_path' => '../../phpstan-phpunit',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.3.3',
  ),
);

	public const NOT_INSTALLED = array (
);

	private function __construct()
	{
	}

}
