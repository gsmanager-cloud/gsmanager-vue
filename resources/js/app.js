// 1. Подключаем глобальные SCSS стили (включая Bootstrap 5)
import '../sass/app.scss'
import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap

// 2. Импорты Vue / Inertia / Ziggy
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js'

// 3. Подключаем layout по умолчанию
import AppLayout from './Layouts/AppLayout.vue'

// 4. Resolve компоненты страниц автоматически
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'

// 5. Инициализация Inertia App
createInertiaApp({
    // 👇 добавим defaultTitle
    title: (title) => title ? `${title} | GSManager` : 'GSManager',

    resolve: async (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue')
        const page = await resolvePageComponent(`./Pages/${name}.vue`, pages)
        page.default.layout ??= AppLayout
        return page
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)
    },
})

