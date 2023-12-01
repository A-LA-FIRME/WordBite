import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/css/app.min.css', 'public/js/app.min.js'],
            refresh: true,
        }),
    ],
});
