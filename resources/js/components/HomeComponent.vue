<template>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Welcome dear ..</h1>
            <h2>Make yourself at home.</h2>
            <h3>do not hesitate to <router-link to="contactMe"> get in touch.</router-link></h3>
            
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>