<template>
    <div class="my-3 d-flex col-lg-4 col-md-4 col-sm-10 ">
        <div class=" d-flex flex-column">
            <div class="prj">
                <router-link to="">
                    <img src="img/project1.jpg" class="prjImg" alt="project1">
                    <div class="overlay">
                        <div class="py-2 d-flex flex-column align-items-center justify-content-center prjBody">
                            <p class="prjButton" >take a look, it costs nothing</p>
                        </div>
                    </div> 
                </router-link>   
            </div>
            <router-link to="" class="tagButton" tag="button"><h5 class="mt-1 mb-0 prjTitle">{{title}}</h5></router-link>
            <router-link to="" class="tagButton" tag="button"><small class="my-0 prjCateg d-flex justify-content-center">category</small></router-link>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['title','description']
    }
</script>