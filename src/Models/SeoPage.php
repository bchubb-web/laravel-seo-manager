<?php

namespace Bchubbweb\SeoManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class SeoPage extends Model
{
    public static function for(string|Route $route): self
    {
        if ($route instanceof Route) {
            $route = $route->getName();
        }

        return static::firstOrCreate(['route' => $route], [
            'title' => config('seo-manager.default_page_title', 'CHANGE ME'),
        ]);
    }
}
