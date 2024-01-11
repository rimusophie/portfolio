import { createRouter, createWebHistory } from 'vue-router';
import Index from './components/Index.vue';
import SkillsIndex from './components/SkillsIndex.vue';
import NotFound from './components/NotFound.vue';

const routes = [
    {
        path: '/',
        name: 'index',
        component: Index,
    },
    {
        path: '/skills-index',
        name: 'skills-index',
        component: SkillsIndex,
    },
    {
        // 該当なし
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;