import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/itc-slider.css',
                'resources/css/kartohka.css',
                'resources/css/katalog.css',
                'resources/css/korzina.css',
                'resources/css/style.css',

                'resources/js/bootstrap.js',
                'resources/js/code.js',
                'resources/js/itc-slider.js',
                'resources/js/kartohka.js',
                'resources/js/korzina.js',
                'resources/js/script.js',
                'resources/js/scriptburg.js',
                'resources/js/zagruz.js'
            ],
            refresh: true,
        }),
    ],
});
