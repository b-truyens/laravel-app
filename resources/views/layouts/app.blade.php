@props([
    'breadcrumbs' => [],
])

<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        @if (config('filament.dark_mode'))
        <script>
            const theme = localStorage.getItem('theme')

            if (
                theme === 'dark' ||
                (!theme &&
                    window.matchMedia('(prefers-color-scheme: dark)')
                        .matches)
            ) {
                document.documentElement.classList.add('dark')
            }
        </script>
    @endif

    </head>
    <body class="font-sans antialiased bg-slate-200 ">
        <x-banner />

        <div class="min-h-screen dark:bg-gray-700 bg-gray-200">

<div class="">

            <x-compact-nav />

            <x-filament::topbar />

</div>
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-slate-300 dark:bg-slate-600  bg-opacity-25 shadow-x2">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main  class="bg-gradient-to-b from-slate-200 to-gray-300 dark:from-slate-500 dark:to-gray-700 shadow antialiased">
                {{ $slot }}
                <div class="max-w-7xl mx-auto p-6 lg:p-8">

                    <x-footer />
                
                </div>
            </main>


            
        </div>

        @livewire('notifications')

        @stack('modals')

        @stack('scripts')

        @livewireScripts
    </body>
</html>
