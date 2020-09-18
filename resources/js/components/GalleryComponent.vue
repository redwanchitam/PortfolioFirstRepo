<template>
    <div>
        <div class="container">
            <h1>projects :</h1>
            <div class="row justify-content-around projects">
                <project 
                        v-for="(project, index) in projects"
                        v-bind:project="project"
                        v-bind:title="project.title"
                        v-bind:description="project.description"
                        v-bind:index="index"
                        v-bind:key="project.id">
                </project>
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                    projects: [
                        { id: 1, title: "prj1", description: "this is a short description about prorect 1"},
                        { id: 2, title: "prj2", description: "this is a short description about project 2"},
                        { id: 3, title: "prj3", description: "this is a short description about project 3"}
                    ]
                }
            }
        }
  
</script>