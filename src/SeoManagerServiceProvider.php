<?php

namespace Bchubbweb\SeoManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bchubbweb\SeoManager\Commands\SeoManagerCommand;

class SeoManagerServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        \Livewire\Livewire::component('seo-manager:toolbar', Livewire\Toolbar::class);
    }
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-seo-manager')
            ->hasConfigFile('seo-manager')
            ->hasViews('seo-manager')
            ->hasMigration('create_seo_pages_table')
            ->hasCommand(SeoManagerCommand::class);
    }
}
