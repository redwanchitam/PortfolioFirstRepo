<template>
    <div class="container">
        <!-- projectsDetails Pop Up -->
        <div id="modalPD">
            <button class="tagButton mainButton" @click="getModal">Show Modal</button>
            <projectDetails 
                    v-if="showModal"
                    :project-details="projectDetails"
                    :imgPath="projectDetails.imgPath"
                    @close="killModal"
                    class="d-flex projectDetailsBg justify-content-center align-items-center" >
            </projectDetails>
        </div>
        <div id="projectList">
            <h3>A bref look at some of my current projects :</h3>
            <div class="row justify-content-between projects">
                <project v-for="(project, index) in projects"
                        v-bind:project="project"
                        v-bind:imgPath="project.imgPath"
                        v-bind:title="project.title"
                        v-bind:category="project.category"
                        v-bind:index="index"
                        v-bind:key="project.id" 
                        class="">
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
                    {   id: 2, 
                        imgPath: "projectImg2.jpg", 
                        title: "WORK 2", 
                        category: "category 2", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                    {   id: 1, 
                        imgPath: "projectImg1.jpg", 
                        title: "WORK 1", 
                        category: "category 1", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                    {   id: 3, 
                        imgPath: "projectImg3.jpg", 
                        title: "WORK 3", 
                        category: "category 3", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                    {   id: 4, 
                        imgPath: "projectImg4.jpg", 
                        title: "WORK 4", 
                        category: "category 4", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                    {   id: 5, 
                        imgPath: "projectImg5.jpg", 
                        title: "WORK 5", 
                        category: "category 5", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                    {   id: 6, 
                        imgPath: "projectImg6.jpg", 
                        title: "WORK 6", 
                        category: "category 6", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","techUsed2","UsedTech3"]},
                ],
                projectDetails: [
                    {   id: 2, 
                        imgPath: "projectImg2.jpg", 
                        title: "WORK 2", 
                        category: "category 2", 
                        description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",
                        builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                ],
                showModal: false,
                iniScrollTop : 0
            }
        },
        methods: {
            getModal: function (event) {
                this.showModal = true;
                this.iniScrollTop = $("html").scrollTop();
                $("nav").addClass("blur");
                $("#projectList").addClass("blur");
                $("html").scrollTop(0);
                $("body").css("overflow","hidden");
            },
            killModal: function() {
                this.showModal = false;
                $("html").scrollTop(this.iniScrollTop);
                $("nav").removeClass("blur");
                $("#projectList").removeClass("blur");
                $("body").css("overflow","auto");
            }
        }
    }
</script>