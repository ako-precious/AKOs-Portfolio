import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
// import  inertiaVue from './node_modules/vue/dist/vue.esm-bundler.js';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/scrollbar.js",
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,

                    includeAbsolute: false,
                },
            },
        }),
        
    ],
    resolve: {
        dedupe: ["vue"],
    },
    build: {
        /** If you set esmExternals to true, this plugins assumes that 
              all external dependencies are ES modules */

        commonjsOptions: {
            esmExternals: true,
        },

        rollupOptions: {
            // make sure to externalize deps that shouldn't be bundled
            // into your library
            external: ["vue", "./node_modules/vue/dist/vue.esm-bundler.js"],
            output: {
              // Provide global variables to use in the UMD build
              // for externalized deps
              globals: {
                vue: 'Vue',
              },
            },
          },
    },
    
});
