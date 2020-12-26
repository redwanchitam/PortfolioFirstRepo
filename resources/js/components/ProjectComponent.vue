<template>
    <div class="my-3 d-flex col-lg-4 col-md-4 col-sm-10 " >
        <div class=" d-flex flex-column prj" v-on:click="getModal()">
            <div class="">
                <div class="" style="position:relative;">
                    <img v-bind:src="project.imgPath" class="prjImg" v-bind:alt="project.title">
                </div>
                <div class="overlay">
                    <div class="py-2 d-flex flex-column align-items-center justify-content-center prjBody">
                        <p class="prjButton" >Go on, take a look</p>
                    </div>
                </div> 
            </div>
            <router-link to="" class="tagButton" tag="button"><h5 class="mt-1 mb-0 prjTitle">{{project.title}}</h5></router-link>
            <router-link to="" class="tagButton" tag="button"><small class="my-0 prjCateg d-flex justify-content-center">{{project.category}}</small></router-link>
        </div>
    </div>
</template>

<script>

    export default {
        methods: {
            getModal : function() {
                this.$store.commit('getModal',this.project);
                console.log("getmodal");
            }
        },
        props: ['project']
    }
</script>