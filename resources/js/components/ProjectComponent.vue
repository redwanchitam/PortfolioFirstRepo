<template>
    <div class="d-flex col-lg-4 col-md-4 col-sm-10">
        <div class="prjImg">
            <img src="img/project1.jpg" class="card-img-top" alt="project1">
        </div>
        <div class="prjBody">
            <h5 class="prjTitle">{{title}}</h5>
            <p class="prjDescription">{{description}}</p>
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