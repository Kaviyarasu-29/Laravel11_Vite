import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import react from '@vitejs/plugin-react';
import manifestSRI from 'vite-plugin-manifest-sri';

export default defineConfig({
    plugins: [
        laravel({
            buildDirectory: 'bundle_Build_Namechange',
            hotFile: 'storage/vite.hot',
            input: [
                'resources/sass/app.scss',
                // 'resources/js/app.js',
                'resources/js/components/Welcome.vue',
                'resources/js/app.jsx',
                'resources/js/components/Welcome.jsx',
            ],
            refresh: true,
        }),
        manifestSRI(),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsotute: false
                }
            }
        }),
        react(),
    ],
    build: {
        manifest: 'namechange_manifest.json'
    },
    resolve: {
        alias: [
            // method 2
            {
                find: '@',
                replacement: '/resources/js/components/shared',
            },
            {
                find: '@css',
                replacement: '/resources/css',
            },
            {
                find: '@comp',
                replacement: '/resources/js/components',
            },
            {
                find: '@rct',
                replacement: '/resources/js/components/react_files',
            },
            {
                find: '@img',
                replacement: '/resources/images',
            }
        ]
    }
});

