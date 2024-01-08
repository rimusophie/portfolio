import './bootstrap';

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './components/App.vue';
import IndexComponent from './components/IndexComponent.vue';

const routes = [
    {
        path: '/',
        name: 'index',
        component: IndexComponent,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');