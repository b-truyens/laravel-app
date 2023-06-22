@props([
    'breadcrumbs' => [],
])

<header
    {{ $attributes->class([
        'filament-main-topbar border-0 sticky top-16 z-0 flex h-16 w-full shrink-0 items-center bg-gradient-to-r from-success-400/25 to-primary-400',
        'dark:from-teal-900 dark:to-primary-600/25' => config('filament.dark_mode'),
    ]) }}>
    <div class="flex w-full items-center px-2 sm:px-4 md:px-6 lg:px-8 ">

        

        <div class="flex flex-1 items-center justify-between">
            <x-filament::layouts.app.topbar.breadcrumbs :breadcrumbs="$breadcrumbs" />

            @livewire('filament.core.global-search')

            @livewire('filament.core.notifications')

            @if (Route::has('login'))
                @auth
                    <!-- If the user is logged in -->

                    <span class="z-20 visible sm:hidden">
                        <x-filament::layouts.app.topbar.user-menu />
                    </span>
                @else

                @endauth
            @endif

        </div>
    </div>
</header>
