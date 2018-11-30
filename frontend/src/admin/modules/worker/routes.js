export default [{
    path: 'workers',
    component: () => import('../../../App.vue'),
    children: [{
        path: '/',
        name: 'admin.worker',
        component: () => import('./List')
    }]
}]
