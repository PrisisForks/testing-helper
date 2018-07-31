<?php
declare(strict_types=1);

use Narrowspark\CS\Config\Config;

$config = new Config();
$config->getFinder()
    ->files()
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'src')
    ->exclude('build')
    ->exclude('vendor')
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;
