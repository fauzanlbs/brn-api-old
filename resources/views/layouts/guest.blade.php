<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @stack('title')</title>
    @include('layouts.assets.font')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Scripts --}}
    <script src="{{ asset('js/onturbo.js') }}"></script>
</head>

<body>
    <div class="font-sans antialiased text-gray-900">
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gradient-to-t from-gray-100 to-gray-200"></div>
            <div class="container h-full px-4 mx-auto">
                <div class="flex items-center content-center justify-center h-full">
                    <div class="w-full px-4 sm:w-8/12 md:w-7/12 lg:w-6/12 xl:w-4/12">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <x-auth.footer />
        </section>
    </div>
</body>

</html>
