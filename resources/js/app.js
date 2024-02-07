import './bootstrap';
import '../css/app.css';

// template custom css
import '../assets/css/bundles.css';
import '../assets/css/style.css';


import VueClipboard from 'vue3-clipboard'

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(VueClipboard,{
                autoSetContainer: true,
                appendToBody: true,
            })
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4b0082',
    },
});
