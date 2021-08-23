require('./bootstrap');

import Vue from 'vue';
// window.Vue = require('vue');
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

// $(document).ready(function(){
//     $("#home").on("click",function(){
//         $("html").scrollTop(0);
//         $("body").css("overflow","hidden");
//     });
//     $("#contactMe").on("click",function(){
//         $("html").scrollTop(0);
//     });
//     $("#projects").on("click",function(){
//         $("body").css("overflow","auto");
//     });
//     $("#whoAmI").on("click",function(){
//         $("body").css("overflow","auto");
//     });
// });

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

////moveTheBall
// const flightPath = {
//     curviness: 1.25,
//     autoRotate: true,
//     values: [
//         {x: 200, y:150},
//         {x: 500, y:100},
//         {x: 300, y:50},
//         {x: 150, y:100},
//         {x: 0, y:0},
//     ]
// };

// const tween = new TimelineLite();

// tween.add(
//     TweenLite.to(".ball", 2, {
//         bezier: flightPath,
//         ease: Power1.easeInOut
//     })
// );

// const controller = new ScrollMagic.Controller();
// const scene = new ScrollMagic.Scene({
//     triggerElement: '.ball',
//     duration: 1000,
//     triggerHook: 1
// })
// .setTween(tween)
// .addIndicators()
// // .setPin(".ball")
// .addTo(controller);

