// vite.config.js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import commonjs from "vite-plugin-commonjs";

export default defineConfig({
    plugins: [
        vue(),
        commonjs,
        laravel(["resources/css/app.css", "resources/js/app.js"]),
    ],
});
