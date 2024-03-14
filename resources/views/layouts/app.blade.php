<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full font-sans antialiased">
    <!-- Page Content -->
    <div class="bg-white">
        <div x-data="{ open: false }" @keydown.window.escape="open = false">
            <div class="relative z-50 lg:hidden" aria-modal="true" x-show="open"
                x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog">
                <div class="fixed inset-0 bg-gray-900/80" x-show="open"
                    x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."></div>
                <div class="fixed inset-0 flex">
                    <div class="relative mr-16 flex w-full max-w-xs flex-1" x-show="open"
                        x-transition:enter="transition ease-in-out duration-300 transform"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300 transform"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                        @click.away="open = false">
                        <div class="absolute left-full top-0 flex w-16 justify-center pt-5" x-show="open"
                            x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            x-description="Close button, show/hide based on off-canvas menu state.">
                            <button class="-m-2.5 p-2.5" type="button" @click="open = false">
                                <span class="sr-only">Close sidebar</span>
                                <svg class="h-6 w-6 text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <!--Sidebar for mobile -->
                        @include('layouts.aside.mobile')
                    </div>
                </div>
            </div>
            <!-- Sidebar for desktop -->
            @include('layouts.aside.desktop')

            <div class="lg:pl-72">
                <!-- Navigation -->
                @include('layouts.navigation')
                <main class="py-10">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="mx-auto">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
