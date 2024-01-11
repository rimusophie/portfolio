import './bootstrap.js';

import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router.ts';

const app = createApp(App);
app.use(router);
app.mount('#app');

const id: number = 1;
console.log(id);