<template>
    <div class="container">
        <!-- projectsDetails Pop Up -->
        
        <div id="modalPD">
            <projectDetails 
                    v-if="this.$store.state.showModal"
                    v-bind:projectDetails="this.$store.state.clickedProject"
                    @close="killModal()"
                    class="d-flex projectDetailsBg justify-content-center align-items-center" >
            </projectDetails>
        </div>

        <div id="projectList">
            <h3>A bref look at some of my current projects :</h3>
            <div class="row justify-content-between projects">

                <project v-for="(project, index) in this.$store.state.projects"
                        v-bind:project="project"
                        v-bind:index="index"
                        v-bind:key="project.id"
                        >
                </project>

            </div>
        </div>
        
    </div>
</template>

<script>
    import project from './ProjectComponent';
    import projectDetails from './ProjectDetailsComponent';
    import Vue from 'vue';
    import Vuex from 'vuex';
    Vue.use(Vuex);
    const store = new Vuex.Store({
        state: {
            showModal: false,
            clickedProject: null,
            iniScrollTop : 0,
            projects: [
                {   id: 2, 
                    imgPath: "img/projectImg2.jpg", 
                    title: "WORK 2", 
                    category: "category 2", 
                    description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                    builtWithItems:[
                        {   id: 4,
                            name: "Js/Jquery",
                            color: "rgb(204, 198, 14)",
                            proficiency:"14%"
                        },
                        {
                            id: 6,
                            name: "Laravel",
                            color: "rgb(211, 14, 14)",
                            proficiency:"55%"
                        },
                        {   id: 8,
                            name: "SQL",
                            color: "rgb(245, 195, 29)",
                            proficiency:"45%"
                        }
                    ]
                },
                {   id: 1, 
                    imgPath: "img/projectImg1.jpg", 
                    title: "WORK 1", 
                    category: "category 1", 
                    description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                    builtWithItems:[
                        {   id: 4,
                            name: "Js/Jquery",
                            color: "rgb(204, 198, 14)",
                            proficiency:"14%"
                        },
                        {
                            id: 6,
                            name: "Laravel",
                            color: "rgb(211, 14, 14)",
                            proficiency:"55%"
                        },
                        {   id: 8,
                            name: "SQL",
                            color: "rgb(245, 195, 29)",
                            proficiency:"45%"
                        }   
                    ]
                },
                {   id: 3, 
                    imgPath: "img/projectImg3.jpg", 
                    title: "WORK 3", 
                    category: "category 3", 
                    description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                    builtWithItems:[
                        {   id: 4,
                            name: "Js/Jquery",
                            color: "rgb(204, 198, 14)",
                            proficiency:"14%"
                        },
                        {
                            id: 6,
                            name: "Laravel",
                            color: "rgb(211, 14, 14)",
                            proficiency:"55%"
                        },
                        {   id: 8,
                            name: "SQL",
                            color: "rgb(245, 195, 29)",
                            proficiency:"45%"
                        }        
                    ]
                },
                {   id: 4, 
                    imgPath: "img/projectImg4.jpg", 
                    title: "WORK 4", 
                    category: "category 4", 
                    description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                    builtWithItems:[
                        {   id: 4,
                            name: "Js/Jquery",
                            color: "rgb(204, 198, 14)",
                            proficiency:"14%"
                        },
                        {
                            id: 6,
                            name: "Laravel",
                            color: "rgb(211, 14, 14)",
                            proficiency:"55%"
                        },
                        {   id: 8,
                            name: "SQL",
                            color: "rgb(245, 195, 29)",
                            proficiency:"45%"
                        }        
                    ]
                },
                {   id: 5, 
                    imgPath: "img/projectImg5.jpg", 
                    title: "WORK 5", 
                    category: "category 5", 
                    description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                    builtWithItems:[
                        {   id: 4,
                            name: "Js/Jquery",
                            color: "rgb(204, 198, 14)",
                            proficiency:"14%"
                        },
                        {
                            id: 6,
                            name: "Laravel",
                            color: "rgb(211, 14, 14)",
                            proficiency:"55%"
                        },
                        {   id: 8,
                            name: "SQL",
                            color: "rgb(245, 195, 29)",
                            proficiency:"45%"
                        }        
                    ]
                },
                {   id: 6, 
                    imgPath: "img/projectImg6.jpg", 
                    title: "WORK 6", 
                    category: "category 6", 
                    description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                    builtWithItems:[
                        {   id: 4,
                            name: "Js/Jquery",
                            color: "rgb(204, 198, 14)",
                            proficiency:"14%"
                        },
                        {
                            id: 6,
                            name: "Laravel",
                            color: "rgb(211, 14, 14)",
                            proficiency:"55%"
                        },
                        {   id: 8,
                            name: "SQL",
                            color: "rgb(245, 195, 29)",
                            proficiency:"45%"
                        }        
                    ]
                },
            ]
        },
        mutations: {
            getModal : (state,clickedProject) => {
                state.clickedProject = clickedProject;
                state.showModal = true;
                state.iniScrollTop = $("html").scrollTop();
                $("nav").addClass("blur");
                $("#projectList").addClass("blur");
                $("html").scrollTop(0);
                $("body").css("overflow","hidden");
            },
            killModal: function(state) {
                state.showModal = false;
                $("html").scrollTop(state.iniScrollTop);
                $("nav").removeClass("blur");
                $("#projectList").removeClass("blur");
                $("body").css("overflow","auto");
            }
            
        }
    });
    export default {
        store,
        components : {
            project,
            projectDetails
        },
        methods: {
            killModal() {
                this.$store.commit('killModal')
            },
        }
    }
</script>