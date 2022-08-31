import { createRouter, createWebHistory } from "vue-router";

import productIndex from "../components/products/ProductIndex.vue";

import NotFound from "../components/NotFound.vue";

const routes = [
    {
        path: "/",
        component: productIndex,
    },
    {
        path: "/:pathMatch(.*)*",
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
