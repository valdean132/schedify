<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ url('images/logo.png') }}">

    <title>{{ $title ?? 'Schedify' }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('/css/definitions.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-pry w-100 min-vh-100 d-flex">

    @if (Request::segment(1) == 'app')
        <x-ui.siderbar active="{{ Request::segment(2) }}" />
    @endif

    {{ $slot }}

    @persist('scripts')
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

        {{-- AlpineJs --}}
        <!-- Alpine Plugins -->
        <script defer src="{{ asset('js/sort-3.14.3.js') }}"></script>
        <!-- Alpine Core -->
        {{-- <script defer src="{{ asset('js/alpinejs-3.14.3.js') }}"></script> --}}
    
        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endpersist
    

</body>
</html>
