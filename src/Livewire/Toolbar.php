<?php

namespace Bchubbweb\SeoManager\Livewire;

use Bchubbweb\SeoManager\Models\SeoPage;
use Livewire\Component;
use Illuminate\Support\Facades\Route;


class Toolbar extends Component
{
    public function render()
    {
        $seoPage = SeoPage::for(Route::getCurrentRoute());

        return view('seo-manager::livewire.toolbar', [
            'current_route' => Route::getCurrentRoute()->getName(),
            'edit_page' => route('filament.manage.resources.seo-pages.edit', $seoPage->id),
        ]);
    }
}

