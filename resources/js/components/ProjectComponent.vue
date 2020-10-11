<template>
    <div class="my-3 d-flex col-lg-4 col-md-4 col-sm-10 ">
        <div class=" d-flex flex-column">
            <div class="prj">
                <router-link to="">
                    <img src="img/project1.jpg" class="prjImg" alt="project1">
                    <div class="overlay">
                        <div class="py-2 d-flex flex-column align-items-center justify-content-center prjBody">
                            <p class="prjButton" >Go on, take a look</p>
                        </div>
                    </div> 
                </router-link>   
            </div>
            <router-link to="" class="tagButton" tag="button"  @click="showModal = true"><h5 class="mt-1 mb-0 prjTitle">{{title}}</h5></router-link>
            <router-link to="" class="tagButton" tag="button"><small class="my-0 prjCateg d-flex justify-content-center">{{category}}</small></router-link>
        </div>
    </div>
</template>

<script>
    import projectDetails from './ProjectDetailsComponent';
    export default {
        components : {
            projectDetails
        },
        mounted() {
            console.log('Component mounted.')
        },
        props: ['title','category'],
        data() {
            return {
                showModal: false
            }
        }
    }
</script>