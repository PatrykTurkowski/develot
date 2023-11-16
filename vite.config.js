import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/sass/thankYou.scss", "resources/js/app.js", "resources/js/thankYou.js"], // add scss file
            refresh: true,
        }),
    ],
});
