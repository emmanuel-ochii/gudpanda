import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: {
                guest: [
                    'resources/assets/guest/css/bootstrap.min.css',
                    'resources/assets/guest/css/fontawesome.min.css',
                    'resources/assets/guest/css/venobox.min.css',
                    'resources/assets/guest/css/odometer.min.css',
                    'resources/assets/guest/css/nice-select.css',
                    'resources/assets/guest/css/swiper.min.css',
                    'resources/assets/guest/css/main.css',
                    'resources/assets/guest/js/vendor/jquary-3.6.0.min.js',
                    'resources/assets/guest/js/vendor/bootstrap-bundle.js',
                    'resources/assets/guest/js/vendor/imagesloaded-pkgd.js',
                    'resources/assets/guest/js/vendor/waypoints.min.js',
                    'resources/assets/guest/js/vendor/venobox.min.js',
                    'resources/assets/guest/js/vendor/odometer.min.js',
                    'resources/assets/guest/js/vendor/meanmenu.js',
                    'resources/assets/guest/js/vendor/smooth-scroll.js',
                    'resources/assets/guest/js/vendor/jquery.isotope.js',
                    'resources/assets/guest/js/vendor/countdown.js',
                    'resources/assets/guest/js/vendor/wow.min.js',
                    'resources/assets/guest/js/vendor/swiper.min.js',
                    'resources/assets/guest/js/vendor/nice-select.js',
                    'resources/assets/guest/js/ajax-form.js',
                    'resources/assets/guest/js/contact.js',
                    'resources/assets/guest/js/main.js',
                ],
                seller: [
                    'resources/assets/dashboard/libs/jsvectormap/css/jsvectormap.min.css',
                    'resources/assets/dashboard/css/css/icons.min.css',
                    'resources/assets/dashboard/css/css/app.min.css',
                    'resources/assets/dashboard/libs/simplebar/simplebar.min.js',
                    'resources/assets/dashboard/libs/lucide/umd/lucide.min.js',
                    'resources/assets/dashboard/libs/@frostui/tailwindcss/frostui.js',
                    'resources/assets/dashboard/js/app.js',
                ],
                admin: [
                    'resources/assets/dashboard/libs/jsvectormap/css/jsvectormap.min.css',
                    'resources/assets/dashboard/css/css/icons.min.css',
                    'resources/assets/dashboard/css/css/app.min.css',
                    'resources/assets/dashboard/libs/simplebar/simplebar.min.js',
                    'resources/assets/dashboard/libs/lucide/umd/lucide.min.js',
                    'resources/assets/dashboard/libs/@frostui/tailwindcss/frostui.js',
                    'resources/assets/dashboard/js/app.js',
                ],
            },
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});


