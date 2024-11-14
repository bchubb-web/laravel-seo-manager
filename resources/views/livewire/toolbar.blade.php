<header id="seo-toolbar" class="fixed top-0 left-0 w-full z-50 bg-white border-b border-gray-200 text-xs h-8">
    <div class="mx-auto flex justify-between items-center py-1 px-4 md:px-6 lg:px-8">
        <div class="flex items-center gap-2">
            <span class="
                h-6 px-1
                text-zinc-900 bg-gray-100
                rounded-md
                flex justify-center items-center
            ">
                <x-heroicon-o-globe-europe-africa class="w-5 h-5 mr-1" />
                {{ app()->getLocale() }}
            </span>

            <span class="
                px-2 py-1
                bg-gray-100
                rounded-md
                flex justify-center items-center
            ">
                route:
                {{ request()->route()->getName() }}
            </span>
        </div>
        <div class="flex items-center gap-2">
            <a
                href="{{ $edit_page }}"
                class="
                    size-6
                    text-gray-50 bg-amber-500 hover:bg-amber-600
                    rounded-md
                    flex justify-center items-center
                    transition-all duration-75 ease-in-out
                "
            >
                <x-heroicon-o-pencil class="w-4 h-4" />
            </a>
            <a
                href="{{ route('filament.manage.pages.dashboard') }}"
                class="
                    size-6
                    text-zinc-900 bg-white hover:bg-gray-200
                    rounded-md
                    flex justify-center items-center
                    transition-all duration-75 ease-in-out
                "
            >
                <x-heroicon-o-cog class="w-5 h-5" />
            </a>
        </div>
    </div>
</header>

