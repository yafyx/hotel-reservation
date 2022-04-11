<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Config::get('app.name') }} - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</head>

<body>

    <div class="bg-white">
        @include('home.layouts.components.navbar')
        <main role="main" class="main-content">
            @yield('content')
            @include('home.layouts.components.footer')
        </main>
    </div>
    <script>
        function app() {
            return {
                step: 1,
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @livewire('livewire-ui-modal')
    <script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
    @stack('js')
</body>

</html>
