import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap'
import '../css/app.css';

// Progress Animation 
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
});



// Progress Animation 
router.on('start', () => {
    NProgress.start()
})

router.on('finish', () => {
    NProgress.done()
})
