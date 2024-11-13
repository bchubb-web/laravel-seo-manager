<?php

namespace Bchubbweb\SeoManager\Livewire;

use Bchubbweb\SeoManager\Models\SeoPage;
use Barryvdh\Debugbar\Facades\Debugbar;
use Livewire\Component;
use Illuminate\Support\Facades\Route;


class Toolbar extends Component
{
    public function render()
    {
        $seoPage = SeoPage::for(Route::getCurrentRoute());

        return view('seo-manager::livewire.toolbar', [
            'current_route' => Route::getCurrentRoute()->getName(),
            'edit_page' => route('filament.admin.resources.seo.pages.edit', $seoPage->id),
        ]);
    }
}

