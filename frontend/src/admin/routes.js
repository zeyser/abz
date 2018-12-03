import { routes as worker } from './modules/worker'

export default [{
    path: '/admin',
    component: () => import ('./Main'),
    children: [
        ...worker,
    ],
}]
