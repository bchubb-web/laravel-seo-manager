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
            '--tag' => 'laravel-seo-manager-migrations',
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'laravel-seo-manager-config',
        ]);

        $this->comment('All done');
        return self::SUCCESS;
    }
}