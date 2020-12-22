<template>
    <div class="container">
        <div class="row justify-content-center align-items-center coverPage">
            <div class="ml-auto col-lg-6 col-md-6 col-sm-12">
                <div class="row align-items-center">
                    <h1>Hi dear, <br>i'm Redwan</h1>
                    <p>A frontend, Backend, web developer / Designer <br>
                    feel free to <router-link class="twinkle" to="contactMe"> get in touch.</router-link></p>
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
        methodes: {
            removeScroll: function(){
                $("html").scrollTop(0);
                $("body").css("overflow","hidden");
            }
        }
    }
</script>