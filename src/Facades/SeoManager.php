<?php

namespace Bchubbweb\SeoManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bchubbweb\SeoManager\SeoManager
 */
class SeoManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bchubbweb\SeoManager\SeoManager::class;
    }
}
