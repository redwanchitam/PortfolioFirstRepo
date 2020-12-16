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
];

function coverPage(){
    $("body").css("overflow","hidden");
    alert("done");
};

$(document).ready(function(){
    $("#home").on("click",function(){
        $("body").css("overflow","hidden");
    });
    $("#contactMe").on("click",function(){
        $("body").css("overflow","hidden");
    });
    $("#projects").on("click",function(){
        $("body").css("overflow","auto");
    });
    $("#whoAmI").on("click",function(){
        $("body").css("overflow","auto");
    });

});

