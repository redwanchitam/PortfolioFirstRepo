require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Navbar menu components
import Home from './components/HomeComponent.vue';
import WhoAmI from './components/WhoAmIComponent.vue';
import ContactMe from './components/ContactMeComponent.vue';
import Projects from './components/ProjectsComponent.vue';
import ProjectDetails from './components/ProjectDetailsComponent.vue';

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
        path : '/projects',
        component : Projects
    }
] ;

const navRouter = new VueRouter({routes});
const main = new Vue({
    el: '#main',
    router: navRouter
});

const prjRoutes =[
    {
        path : '/projectDetails',
        component : ProjectDetails
    }
]


function slotNumber(){
    $(".slotChild.isNumber h3").animate({top: '-35px',color: 'rgb(22, 19, 19)', opacity : '0.5'}, "slow");
    $(".slotChild.isNumber h3").animate({top: '0px',color: 'white', opacity : '1'}, "slow");
    $(".slotChild.isNumber h3").animate({top: '35px',color: 'rgb(22, 19, 19)', opacity : '0.5'}, "slow");
    $(".slotChild.isNumber h3").animate({top: '70px',color: 'rgb(22, 19, 19)', opacity : '0'}, "slow");
};


// slotNumber();