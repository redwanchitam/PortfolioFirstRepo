<template>
    <div class="my-3 d-flex col-lg-4 col-md-4 col-sm-10 ">
        <div class="project">
            <img src="img/project1.jpg" class="prjImg" alt="project1">
            <div class="overlay">
                <div class="p-2 prjBody">    
                    <h5 class="ml-2 prjTitle text">{{title}}</h5>
                    <p class="prjDescription text">{{description}}</p>
                </div>
            </div>
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