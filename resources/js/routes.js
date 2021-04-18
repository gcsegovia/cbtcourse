import VueRouter from 'vue-router';

import Dashboard from './components/pages/Dashboard';

const routes = [
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'dashboard',
        meta: {
            title: 'Dashboard'
        }
    }
]

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;

