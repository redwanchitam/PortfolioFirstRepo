<template>
    <div>
        <div class="container">
            <h3>A bref look at some of my current projects :</h3>
            <div class="row justify-content-between projects">
                <project v-for="(project, index) in projects"
                        v-bind:project="project"
                        v-bind:title="project.title"
                        v-bind:description="project.description"
                        v-bind:index="index"
                        v-bind:key="project.id" class="container">
                </project>
            </div>
            
        </div>
    </div>
</template>

<script>
    import project from './ProjectComponent';
    export default {
        components : {
            project
        },
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                projects: [
                    { id: 1, title: "prj1", description: "this is a short description about project 1"},
                    { id: 2, title: "prj2", description: "this is a short description about project 2"},
                    { id: 3, title: "prj3", description: "this is a short description about project 3"},
                    { id: 4, title: "prj4", description: "this is a short description about project 4"},
                    { id: 5, title: "prj5", description: "this is a short description about project 5"},
                    { id: 6, title: "prj6", description: "this is a short description about project 6"},
                ]
            }
        }
    }
</script>