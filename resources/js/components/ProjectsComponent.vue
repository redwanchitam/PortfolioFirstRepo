<template>
    <div>
        <div class="">
            <h3>A bref look at some of my current projects :</h3>
            <!-- projectsDetails Pop Up -->
            <div id="modalPD">
                <button @click="getModal">Show Modal</button>
                <!-- use the modal component, pass in the prop -->
                <projectDetails 
                        v-if="showModal"
                        :project-details="projectDetails"
                        @close="killModal"
                        class="d-flex projectDetailsBg justify-content-center align-items-center" >
                </projectDetails>
            </div>
            <div class="row justify-content-between projects">
                <project v-for="(project, index) in projects"
                        v-bind:project="project"
                        v-bind:title="project.title"
                        v-bind:category="project.category"
                        v-bind:index="index"
                        v-bind:key="project.id" 
                        class="container">
                </project>
            </div>
        </div>
    </div>
</template>

<script>
    import project from './ProjectComponent';
    import projectDetails from './ProjectDetailsComponent';
    export default {
        components : {
            project,
            projectDetails
        },
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                projects: [
                    { id: 2, title: "WORK 2", category: "category 2", description: "this is a short description about project 2",builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                    { id: 1, title: "WORK 1", category: "category 1", description: "this is a short description about project 1",builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                    { id: 3, title: "WORK 3", category: "category 3", description: "this is a short description about project 3",builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                    { id: 4, title: "WORK 4", category: "category 4", description: "this is a short description about project 4",builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                    { id: 5, title: "WORK 5", category: "category 5", description: "this is a short description about project 5",builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                    { id: 6, title: "WORK 6", category: "category 6", description: "this is a short description about project 6",builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                ],
                projectDetails: [
                     { id: 3, title: "WORK 3", category: "category 3", description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                ],
                showModal: false,
                iniScrollTop : 0
            }
        },
        methods: {
            getModal: function (event) {
                this.showModal = true;
                this.iniScrollTop = $("html").scrollTop();
                $("html").scrollTop(0);
                $("body").css("overflow", "hidden");
            },
            killModal: function() {
                this.showModal = false;
                $("body").css("overflow", "scroll");
                $("html").scrollTop(this.iniScrollTop);
            }
        }
    }
</script>