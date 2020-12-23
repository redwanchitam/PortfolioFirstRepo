<template>
    <div>
        <li class="my-3 d-flex align-items-start tagList">
            <div class="commentProfilPic">
                <img v-bind:src="comment.profil.picPath" class="prjImg" v-bind:alt="comment.profil.name">
            </div>
            <div class="ml-3">
                <div class="d-flex align-items-baseline">
                    <h4 class="commentProfilName">{{comment.profil.name}} </h4> 
                    <small class="mx-2">&lt; {{comment.date}} &gt;</small>
                </div>
                <p class="commentP leftLine">{{comment.text}}</p>
            </div>
        </li>
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['comment']
    }
</script>