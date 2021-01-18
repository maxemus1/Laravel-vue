import Vue from 'vue'
import Router from 'vue-router'
import layout from '../layout'

Vue.use(Router)

export default new Router({
    linkExactActiveClass: 'active',
    scrollBehavior: () => ({y: 0}),
    mode: 'history',
    routes: [
        {
            path: '/',
            component: layout,
            children: [
                {
                    path: '',
                    name: 'dashboard',
                    component: () => import('@/pages/dashboard')
                }
            ]
        },
    ]
})
