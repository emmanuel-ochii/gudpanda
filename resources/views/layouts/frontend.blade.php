<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Site Title -->
    <title> Gudpanda | Official Site </title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">

    {{-- CSS Files --}}
    @vite([
        'resources/frontend/css/bootstrap.min.css',
        'resources/frontend/css/fontawesome.min.css',
        'resources/frontend/css/venobox.min.css',
        'resources/frontend/css/odometer.min.css',
        'resources/frontend/css/nice-select.css',
        'resources/frontend/css/swiper.css',
        // 'resources/frontend/css/main.css',
    ])

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @inertiaHead

</head>

<body>
    @inertia

</body>

</html>
