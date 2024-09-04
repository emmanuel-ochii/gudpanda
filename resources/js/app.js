import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
// import FrontendLayout from '@/Layouts/FrontendLayout.vue'

// Importing vendor JS files
import '../frontend/js/vendor/jquary-3.6.0.min';
import '../frontend/js/vendor/bootstrap-bundle.js';
import '../frontend/js/vendor/imagesloaded-pkgd.js';
import '../frontend/js/vendor/waypoints.min.js';
import '../frontend/js/vendor/venobox.min.js';
import '../frontend/js/vendor/odometer.min.js';
import '../frontend/js/vendor/meanmenu.js';
import '../frontend/js/vendor/smooth-scroll.js';
import '../frontend/js/vendor/jquery.isotope.js';
import '../frontend/js/vendor/countdown.js';
// import '../frontend/js/vendor/wow.min.js';
import '../frontend/js/vendor/swiper.min.js';
import '../frontend/js/vendor/nice-select.js';
import '../frontend/js/ajax-form.js';
import '../frontend/js/contact.js';
import '../frontend/js/main.js';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        return pages[`./Pages/${name}.vue`];

        // const page =  pages[`./Pages/${name}.vue`];
        // page.default.layout = page.default.layout || FrontendLayout

        // return page
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
