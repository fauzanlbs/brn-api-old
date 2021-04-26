<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | {{ $header }}</title>
    <meta name="turbolinks-cache-control" content="no-cache">
    @include('layouts.assets.font')

    {{-- Style --}}
    @include('layouts.assets.css')
    @livewireStyles
    <!-- Scripts  -->
    @livewireScripts
    @include('layouts.assets.script')
</head>


<body class="font-sans antialiased bg-gray-100">
    <x-nav.left-menu />
    <div class="relative md:ml-64">
        <x-nav.top-menu />
        <div class="relative pt-5 pb-32 bg-gradient-to-t from-blue-400 to-blue-600 md:pt-32">
            <div class="w-full h-16 mx-auto md:px-8">
                @stack('page-header')
            </div>
        </div>
        <div x-data="{ show:false, loading:false, footer:false}"
            x-on:show-content.window="show = true, loading = false, footer = true"
            x-on:close-content.window="show = false , setTimeout(() => loading = true, 750),footer = false">
            {{-- page loading --}}
            <div x-show="loading" class="transition-all " x-transition:enter="ease-out duration-500"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-500"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                style="display:none;margin-top:90px">
                <span class="relative block w-0 h-0 mx-auto my-0 text-green-500 top-1/2" style="top: 50%;">
                    <div class="dot-overtaking"></div>
                </span>
            </div>

            <div class="md:px-8 mx-auto w-full {{ $margin ?? '-mt-44' }}">
                <!-- Page Content -->
                <main class="relative ">
                    <div x-show="show" class="transition-all " style="display: none"
                        x-transition:enter="transform ease-out duration-150"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        {{ $slot ?? '' }}
                    </div>
                </main>

                {{-- page footer --}}
                <div x-show="footer" class="transition-all " x-transition:enter="ease-out duration-150"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100">
                    @include('layouts.app-footer')
                </div>
            </div>
        </div>

        @stack('action')
    </div>

    <livewire:layouts.offline-state />
    <x-alert.show data-turbolinks-permanent id="app_alert" />
    <script>
        document.addEventListener("turbolinks:load", function() {
            window.dispatchEvent(new CustomEvent('show-content'));
        })
        document.addEventListener("turbolinks:before-visit", function() {
            window.dispatchEvent(new CustomEvent('close-m-nav'));
            window.dispatchEvent(new CustomEvent('close-content'));
        })

    </script>
    @stack('js')
</body>

</html>
