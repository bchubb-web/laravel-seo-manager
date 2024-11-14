<header
    id="seo-toolbar"
    class="fixed top-0 left-0 w-full z-50 bg-white border-b border-gray-200 text-xs h-8"
    style="position: fixed; top: 0px; left: 0px; z-index: 50; height: 2rem; width: 100%; border-bottom-width: 1px; --tw-border-opacity: 1; border-color: rgb(229 231 235 / var(--tw-border-opacity)); --tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); font-size: 0.75rem; line-height: 1rem;">
    <div
        class="mx-auto flex justify-between items-center py-1 px-4 md:px-6 lg:px-8"
        style="margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: space-between; padding: 0.25rem 1rem;">
        <div class="flex items-center gap-2" style="display: flex; align-items: center; gap: 0.5rem;">
            <span
                class="h-6 px-1 text-zinc-900 bg-gray-100 rounded-md flex justify-center items-center"
                style="display: flex; height: 1.5rem; align-items: center; justify-content: center; border-radius: 0.375rem; --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity)); padding-left: 0.25rem; padding-right: 0.25rem; --tw-text-opacity: 1; color: rgb(24 24 27 / var(--tw-text-opacity));">
                <x-heroicon-o-globe-europe-africa
                    class="w-5 h-5 mr-1"
                    style="margin-right: 0.25rem; height: 1.25rem; width: 1.25rem;">
                    {{ app()->getLocale() }}
                </x-heroicon-o-globe-europe-africa>
            </span>

            <span
                class="px-2 py-1 bg-gray-100 rounded-md flex justify-center items-center"
                style="display: flex; align-items: center; justify-content: center; border-radius: 0.375rem; --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity)); padding: 0.25rem 0.5rem; --tw-text-opacity: 1; color: rgb(24 24 27 / var(--tw-text-opacity));">
                route: {{ request()->route()->getName() }}
            </span>
        </div>
        <div class="flex items-center gap-2" style="display: flex; align-items: center; gap: 0.5rem;">
            <a
                href="{{ $edit_page }}"
                class="size-6 text-gray-50 bg-amber-500 hover:bg-amber-600 rounded-md flex justify-center items-center transition-all duration-75 ease-in-out"
                style="color: rgb(249 250 251 / var(--tw-text-opacity)); text-decoration: inherit; display: flex; align-items: center; justify-content: center; border-radius: 0.375rem; --tw-bg-opacity: 1; background-color: rgb(245 158 11 / var(--tw-bg-opacity)); --tw-text-opacity: 1; transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 75ms;">
                <x-heroicon-o-pencil class="w-4 h-4" style="height: 1rem; width: 1rem;"></x-heroicon-o-pencil>
            </a>
            <a
                href="{{ route('filament.manage.pages.dashboard') }}"
                class="size-6 text-zinc-900 bg-white hover:bg-gray-200 rounded-md flex justify-center items-center transition-all duration-75 ease-in-out"
                style="color: rgb(24 24 27 / var(--tw-text-opacity)); text-decoration: inherit; display: flex; align-items: center; justify-content: center; border-radius: 0.375rem; --tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); --tw-text-opacity: 1; transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 75ms;">
                <x-heroicon-o-cog class="w-5 h-5" style="height: 1.25rem; width: 1.25rem;"></x-heroicon-o-cog>
            </a>
        </div>
    </div>
</header>
