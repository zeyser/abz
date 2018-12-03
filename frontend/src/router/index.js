import Vue from 'vue'
import Router from 'vue-router'
import { routes as admin } from '../admin'

Vue.use(Router);

const AppRoute = {
    path: '/',
    component: () => import('../App.vue'),
    children: [...admin],
};

const routes = [AppRoute];

const router = new Router({
    routes,
    mode: 'history',
});

export default router