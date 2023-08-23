import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import Layout from "./components/Layout.vue";
import Head from "./components/Head.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./pages/**/*.vue", { eager: true });
        return pages[`./pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });

        app.component("layout", Layout);
        app.component("Head", Head);

        app.config.globalProperties.$api = {
            target: "/api/target",
        };

        app.config.globalProperties.$active = "text-slate-950 bg-white";

        app.config.globalProperties.$filters = {
            status(data = null) {
                if (data == 1) return "Aktif";
                if (data == 0) return "Nonaktif";
            },
        };

        app.use(plugin);
        app.mount(el);
    },
});
