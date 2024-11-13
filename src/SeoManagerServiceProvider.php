<?php

namespace Bchubbweb\SeoManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bchubbweb\SeoManager\Commands\SeoManagerCommand;

class SeoManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-seo-manager')
            ->hasConfigFile()
            ->hasViews('seo-manager')
            ->hasMigration('create_laravel_seo_manager_table')
            ->hasCommand(SeoManagerCommand::class);
    }
}
