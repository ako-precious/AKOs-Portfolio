import { createApp, h } from '../../node_modules/vue'
import { createInertiaApp } from '@inertiajs/vue3'
// import { createApp, h } from "vue";
// import { createInertiaApp, Link } from "@inertiajs/vue3";
// import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
 
// createInertiaApp({
//   resolve: async (name) => {
//     const pages = import.meta.glob('./Pages/**/*.vue')

//     return (await pages[`./Pages/${name}.vue`]())
//   },
//   setup({ el, App, props, plugin }) {
//     createApp({ render: () => h(App, props) })
//       .use(plugin)
//       .mount(el)
//   },
//  })
createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
