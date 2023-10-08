import "./bootstrap";
import "animate.css";
import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./pages/**/*.vue", { eager: true });
        return pages[`./pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        app.component("Link", Link);

        app.config.globalProperties.$api = {
            auth: {
                login: "/api/login",
            },
        };

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
