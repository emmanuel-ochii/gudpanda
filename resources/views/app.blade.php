<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Gudpanda </title>

    @vite([
        'resources/js/app.js',
        'resources/frontend/css/bootstrap.min.css',
        'resources/frontend/css/fontawesome.min.css',
        'resources/frontend/css/venobox.min.css',
        'resources/frontend/css/odometer.min.css',
        'resources/frontend/css/nice-select.css',
        'resources/frontend/css/swiper.min.css',
        // 'resources/frontend/css/main.css',
        ])

    @inertiaHead
</head>

<body>

    @inertia


    @vite([
        'resources/frontend/js/vendor/jquary-3.6.0.min.js',
        'resources/frontend/js/vendor/bootstrap-bundle.js',
        'resources/frontend/js/vendor/imagesloaded-pkgd.js',
        'resources/frontend/js/vendor/waypoints.min.js',
        'resources/frontend/js/vendor/venobox.min.js',
        'resources/frontend/js/vendor/odometer.min.js',
        'resources/frontend/js/vendor/meanmenu.js',
        'resources/frontend/js/vendor/smooth-scroll.js',
        'resources/frontend/js/vendor/jquery.isotope.js',
        'resources/frontend/js/vendor/countdown.js',
        'resources/frontend/js/vendor/wow.min.js',
        'resources/frontend/js/vendor/swiper.min.js',
        'resources/frontend/js/vendor/nice-select.js',
        'resources/frontend/js/ajax-form.js',
        'resources/frontend/js/contact.js',
        'resources/frontend/js/main.js',
        ])
</body>

</html>
