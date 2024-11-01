<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Site Title -->
    <title>@inertiaHead</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('guest/img/favicon.png')}}">

    <!-- Ziggy routes for JavaScript -->
    @routes
    
    <!-- Include your CSS files -->
    @php
        // Get the current request path to determine which assets to load
        $currentPath = request()->path();
    @endphp

<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <!-- Include the global app.js -->
    @vite(['resources/js/app.js'])


    <!-- Conditionally load assets based on the current view -->
    @if (str_contains($currentPath, 'admin'))
        @vite([
            'resources/js/assets/dashboard/css/vendor.min.css',
            'resources/js/assets/dashboard/css/icons.min.css',
            'resources/js/assets/dashboard/css/app.min.css',
            'resources/js/assets/dashboard/js/config.js',
            'resources/js/assets/dashboard/js/vendor.js',
            'resources/js/assets/dashboard/js/app.js',
            'resources/js/assets/dashboard/vendor/jsvectormap/js/jsvectormap.min.js',
            'resources/js/assets/dashboard/vendor/jsvectormap/maps/world-merc.js',
            'resources/js/assets/dashboard/vendor/jsvectormap/maps/world.js',
            'resources/js/assets/dashboard/js/pages/dashboard.js',
        ])
    @elseif (str_contains($currentPath, 'seller'))
        @vite([
            'resources/js/assets/dashboard/css/vendor.min.css',
            'resources/js/assets/dashboard/css/icons.min.css',
            'resources/js/assets/dashboard/css/app.min.css',
            'resources/js/assets/dashboard/js/config.js',
            'resources/js/assets/dashboard/js/vendor.js',
            'resources/js/assets/dashboard/js/app.js',
            'resources/js/assets/dashboard/vendor/jsvectormap/js/jsvectormap.min.js',
            'resources/js/assets/dashboard/vendor/jsvectormap/maps/world-merc.js',
            'resources/js/assets/dashboard/vendor/jsvectormap/maps/world.js',
            'resources/js/assets/dashboard/js/pages/dashboard.js',
        ])
    @else
        @vite([
            'resources/js/assets/guest/css/bootstrap.min.css',
            'resources/js/assets/guest/css/fontawesome.min.css',
            'resources/js/assets/guest/css/venobox.min.css',
            'resources/js/assets/guest/css/odometer.min.css',
            'resources/js/assets/guest/css/nice-select.css',
            'resources/js/assets/guest/css/swiper.min.css',
            'resources/js/assets/guest/css/main.css',
            'resources/js/assets/guest/js/vendor/jquary-3.6.0.min.js',
            'resources/js/assets/guest/js/vendor/bootstrap-bundle.js',
            'resources/js/assets/guest/js/vendor/imagesloaded-pkgd.js',
            'resources/js/assets/guest/js/vendor/waypoints.min.js',
            'resources/js/assets/guest/js/vendor/venobox.min.js',
            'resources/js/assets/guest/js/vendor/odometer.min.js',
            'resources/js/assets/guest/js/vendor/meanmenu.js',
            'resources/js/assets/guest/js/vendor/smooth-scroll.js',
            'resources/js/assets/guest/js/vendor/jquery.isotope.js',
            'resources/js/assets/guest/js/vendor/countdown.js',
            // 'resources/js/assets/guest/js/vendor/wow.min.js',
            'resources/js/assets/guest/js/vendor/swiper.min.js',
            'resources/js/assets/guest/js/vendor/nice-select.js',
            'resources/js/assets/guest/js/ajax-form.js',
            'resources/js/assets/guest/js/contact.js',
            'resources/js/assets/guest/js/main.js',
        ])
    @endif
</head>

<body>
    @php
        // Get the current request path
        $currentPath = request()->path();
    @endphp

    <header id="app-header">
        <template v-if="$page.component === 'Seller/Dashboard'">
            <SellerHeader />
        </template>
        <template v-else-if="$page.component === 'Admin/Dashboard'">
            <AdminHeader />
        </template>
        <template v-else>
            <GuestHeader />
        </template>
    </header>

    <main>
        @inertia
    </main>



    <!-- Include your JS files -->
</body>

</html>
