<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Dynamic Site Title -->
    <title>@inertiaHead</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">

    {{-- CSS Files --}}
    @vite(['resources/css/app.css'])

    {{-- @inertiaHead --}}

</head>

<body>
    @inertia



    <!-- Scripts -->
    @vite('resources/js/app.js')
</body>

</html>
