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
        sourcemap: false,
        minify: true,
        outDir: "public/build",
        commonjsOptions: {
            esmExternals: true,
          },
          rollupOptions: {
            
            output: {
              // Generate separate chunks for code that is imported dynamically
              chunkFileNames: "/js/[name]-[hash].js",
              globals: {
                vue: 'Vue',
              },
      
            },
          },
    },
});
