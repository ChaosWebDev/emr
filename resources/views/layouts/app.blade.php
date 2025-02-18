<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme='dark'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @vite(['resources/styles/app.scss', 'resources/scripts/app.js'])
</head>

<body>
    @auth
        @livewire('components.menu')
    @endauth
    {{ $slot }}
</body>

</html>
