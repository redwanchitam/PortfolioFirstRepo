<template>
    <div class="my-3 d-flex col-lg-4 col-md-4 col-sm-10 " >
        <div class=" d-flex flex-column prj">
            <div class="prjHeader" v-on:click="getModal()">
                <img v-bind:src="project.imgPath" class="prjImg" v-bind:alt="project.title">
                <div class="overlay py-2 d-flex flex-column align-items-center justify-content-center prjBody">
                    <p class="prjButton" >Go on, take a look</p>
                </div>
            </div>
            <div class="prjFooter">
                <div class="" v-on:click="getModal()" ><h5 class="prjTitle">{{project.title}}</h5></div>
                <router-link to="" class=""><small class="prjCateg">{{project.category}}</small></router-link>
            </div>
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