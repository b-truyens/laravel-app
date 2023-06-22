@props([
    'breadcrumbs' => [],
])

<header
    {{
        $attributes->class([
            'filament-main-topbar border-0 sticky top-0 z-0 flex h-16 w-full shrink-0 items-center bg-gradient-to-l from-primary-400 to-success-300',
            'dark:to-indigo-800' => config('filament.dark_mode'),
        ])
    }}
>
    <div class="flex w-full items-center px-2 sm:px-4 md:px-6 lg:px-8">


        <div class="flex flex-1 items-center justify-between">
            <x-filament::layouts.app.topbar.breadcrumbs
                :breadcrumbs="$breadcrumbs"
            />

            @livewire('filament.core.global-search')

            @livewire('filament.core.notifications')

            <span class="z-20 visible sm:hidden">
                <x-filament::layouts.app.topbar.user-menu />
            </span>        
        </div>
    </div>
</header>
