<template>
    <div class="container">
        <!-- projectsDetails Pop Up -->
        
        <div id="modalPD">
            <button class="tagButton mainButton" v-on:click="increment()" >increment</button>
            <button class="tagButton mainButton" v-on:click="getModal(this.$store.state.projects[3])" >Show Modal</button>

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