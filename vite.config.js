import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/scss/app.scss', 
                'resources/js/app.js',

                // All Projects:
                'resources/css/worksPagesCSS/app.css',
                // Project - Natours:
                'resources/scss/worksPagesSCSS/natours/app.scss', 
                // Project - Trillo:
                'resources/scss/worksPagesSCSS/trillo/app.scss', 
                // Project - Nexter:
                'resources/scss/worksPagesSCSS/nexter/app.scss', 
            ],
            refresh: true,
        }),
    ],
});
