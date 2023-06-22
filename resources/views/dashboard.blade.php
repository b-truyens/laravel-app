<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight shadow-x2">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-300  text-gray-900 dark:text-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            <br><br>
            <div class="bg-gray-100 dark:bg-gray-300  text-gray-900 dark:text-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            <br><br>
            <div class="bg-gray-100 dark:bg-gray-300  text-gray-900 dark:text-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>

    </div>
</x-app-layout>
