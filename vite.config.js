import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import gsmanager from 'laravel-vite-plugin'
import path from 'path'

// Плагины для авто-компонентов и SVG-иконок
import Icons from 'unplugin-icons/vite'
import Components from 'unplugin-vue-components/vite'
import IconsResolver from 'unplugin-icons/resolver'

export default defineConfig({
    plugins: [
        gsmanager({
            input: ['resources/js/app.js'],
            refresh: true,
        }),

        vue(),

        Components({
            // Автоматическое подключение Vue-компонентов
            dirs: ['resources/js/Components'],
            extensions: ['vue'],
            deep: true,
            dts: 'resources/js/components.d.ts',
            resolvers: [
                IconsResolver({
                    prefix: '',
                    alias: {
                        hero: 'heroicons-outline',
                    },
                }),
            ],
        }),

        Icons({
            compiler: 'vue3',
            autoInstall: true,
        }),
    ],

    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
            ziggy: path.resolve('vendor/tightenco/ziggy'),
        },
    },
})
