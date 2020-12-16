<template>
    <div class="my-3 d-flex col-lg-4 col-md-4 col-sm-10 ">
        <div class=" d-flex flex-column prj">
            <div class="" tag="button" @click="getModal">
                <img v-bind:src="'img/' + imgPath" class="prjImg" v-bind:alt="title">
                <div class="overlay">
                    <div class="py-2 d-flex flex-column align-items-center justify-content-center prjBody">
                        <p class="prjButton" >Go on, take a look</p>
                    </div>
                </div> 
            </div>
            <router-link to="" class="tagButton" tag="button"><h5 class="mt-1 mb-0 prjTitle">{{title}}</h5></router-link>
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
        data() {
            return {
                projectDetails: [
                     { id: 3, imgPath: "img/projectImg3.jpg", title: "WORK 3", category: "category 3", description: "Cerasa is composed of an established team of Italian master craftsmen that produces and puts up bathrooms undisputed of exceptional  Made in Italy quality. Cerasa collections are designed to satisfy the most diverse housing styles, fit the style of the house and its inhabitants.",builtWith:["UsedTech1","UsedTech2","UsedTech3"]},
                ],
                showModal: false,
                iniScrollTop : 0
            }
        },
        methods: {
            getModal: function (event) {
                this.showModal = true;
                this.iniScrollTop = $("html").scrollTop();
                $("html").scrollTop(0);
            },
            killModal: function() {
                this.showModal = false;
                $("html").scrollTop(this.iniScrollTop);
            }
        },
        props: ['title','category','imgPath']
    }
</script>