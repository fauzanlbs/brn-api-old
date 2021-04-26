<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $header }}</title>
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
        <x-nav.top-menu header="{{ $header }}" />
        <div class="relative pt-5 pb-32 bg-gradient-to-t from-blue-400 to-blue-600 md:pt-32">
            <div class="w-full h-16 mx-auto md:px-8">
                @stack('page-header')
            </div>
        </div>
        <div class="md:px-8 mx-auto w-full {{ $margin ?? '-mt-44' }}">
            <!-- Page Content -->
            <main class="relative ">
                <div class="pb-32">
                    @yield('body')
                </div>
            </main>
            <div data-turbolinks-permanent id="app_footer">
                @include('layouts.app-footer')
            </div>
        </div>
        @stack('action')
    </div>

    <script>
        window.Gauge = @json(\TobiasDierich\ Gauge\ Gauge::scriptVariables());

    </script>
    @stack('js')
</body>

</html>
