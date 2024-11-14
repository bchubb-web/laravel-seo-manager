<?php

namespace Bchubbweb\SeoManager\Commands;

use Illuminate\Console\Command;

class SeoManagerCommand extends Command
{
    public $signature = 'seo:install';

    public $description = 'My command';

    public function handle(): int
    {
        // publish this package
        $this->call('vendor:publish', [
            '--tag' => 'seo-manager-migrations',
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'seo-manager-config',
        ]);

        $this->info('Creating Admin Resource');

        $this->call('make:filament-resource', [
            'name' => 'SeoPage',
            '--model-namespace' => 'Bchubbweb\SeoManager\Models',
        ]);

        $this->comment('All done');
        return self::SUCCESS;
    }
}
