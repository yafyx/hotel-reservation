<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Config::get('app.name') }} - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>

    <div class="bg-white">
        @include('home.layouts.components.navbar')


        <main role="main" class="main-content">
            @yield('content')
            @include('home.layouts.components.modal')
            @include('home.layouts.components.footer')
        </main>
    </div>
    @stack('js')
</body>

</html>
