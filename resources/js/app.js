
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
window.Vue.use(VueRouter)

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import CodePage from './components/CodePage'
import IssuesPage from './components/IssuesPage'
import IssuePage from './components/IssuePage'

const router = new VueRouter({
    mode: 'history',

    routes: [
        { path: '/', redirect: '/code' },
        { path: '/code', component: CodePage },
        { path: '/issues', component: IssuesPage },
        { path: '/issue', component: IssuePage },
    ],
})

const app = new Vue({
    router,

    el: '#app'
});
