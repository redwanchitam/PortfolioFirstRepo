require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Navbar menu components
import Home from './components/HomeComponent.vue';
import WhoAmI from './components/WhoAmIComponent.vue';
import ContactMe from './components/ContactMeComponent.vue';
import Gallery from './components/GalleryComponent.vue';

const routes = [
    {
        path : '/',
        component : Home
    },
    {
        path : '/whoAmI',
        component : WhoAmI
    }
    ,{
        path : '/contactMe',
        component : ContactMe
    }
    ,{
        path : '/gallery',
        component : Gallery
    }
] ;

const router = new VueRouter({routes});

const main = new Vue({
    el: '#main',
    router: router
});

Vue.component(
    'project',
    require('./components/ProjectComponent.vue').default
);
