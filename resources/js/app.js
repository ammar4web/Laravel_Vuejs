import "./bootstrap";

import router from "./router";

import App from "./components/App.vue";

import { createApp } from "vue";

createApp(App).use(router).mount("#app");
