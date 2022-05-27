
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import VueRouter from 'vue-router'
import App from "./views/App";



window.Vue.use(VueRouter);


import Home from "./pages/Home";
import About from "./pages/About";
import Contact from "./pages/Contact";
import Posts from "./pages/Posts";
import NotFound from "./pages/NotFound";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about-us',
            name: 'about-us',
            component: About
        },
        {
            path: '/contact-us',
            name: 'contact',
            component: Contact
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
        {
            path: '/not-found',
            name: 'not-found',
            component: NotFound
        }]
});

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
