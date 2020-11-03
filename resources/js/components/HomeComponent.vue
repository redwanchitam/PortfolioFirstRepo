<template>
    <div class="">
        <div class="row justify-content-center align-items-center coverPage">
            <div class="ml-auto col-lg-5 col-md-5 col-sm-12">
                <div class="row align-items-center">
                    <h1>Welcome dear ..</h1>
                    <p>Make yourself at home.</p>
                    <h5>do not hesitate to <router-link class="twinkle" to="contactMe"> get in touch.</router-link></h5>
                </div>
            </div>
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