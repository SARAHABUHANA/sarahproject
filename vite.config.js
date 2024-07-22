import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/profile.css',
                'resources/js/profile.js',
                'resources/css/reg.css',
                'resources/css/single.css',
                'resources/css/users.css',
                'resources/css/challenge.css',
                'resources/css/dashboard.css',
                'resources/js/dashboard.js',

                'resources/js/app.js',
                'resources/js/reg.js',
            ],
            refresh: true,
        })
    ],
});
