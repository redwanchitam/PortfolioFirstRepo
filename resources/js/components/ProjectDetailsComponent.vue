<template>
    <div class="d-flex">
        <div class="justify-content-center align-items-center projectDetails" style="position: relative">
            <!-- projectDetails Header-->
            <div class="px-3 sticky-top w-100 d-flex align-items-baseline projectDetailsHeader">
                <!-- projectDetails Title & Category-->
                <div class="ml-2 my-2 d-flex flex-column">
                    <h1 class="prjTitle">&lt; {{ projectDetails[0].title}} &gt;</h1>
                    <h3 class="prjCateg"><span>&bull; </span>{{projectDetails[0].category}}</h3>
                </div>
                <button type="button" class="ml-auto close" @click="$emit('close')"> <span>&times;</span></button>
            </div>
            <!-- projectDetails Body-->
            <div class="p-2 justify-content-center align-items-center projectDetailsBody">
                <div class="m-3">
                    <!-- projectDetails Image-->
                    <div class="prjDetImg">
                        <img src="img/project1.jpg" class="prjImg popup-img" alt="project1">
                    </div>
                    <!-- projectDetails Text-->
                    <div class="px-2">
                        <!-- projectDetails Description-->
                        <div class="row ">
                            <!-- projectDetails About-->
                            <div class="col-12 d-flex">
                                <div class="m-2 p-1 col-xl-10 col-lg-10" style="">
                                    <h2>About Work</h2>
                                    <p>{{projectDetails[0].description}}</p>
                                </div>
                            </div>
                            <!-- projectDetails BuiltWith-->
                            <div class="col-12 col-xl-6 col-lg-6">
                                <div class="m-2 p-1 " style="">
                                    <h2 class="">BuiltWith</h2>
                                    <ul class="list-group list-group-flush builtWith"
                                        v-for="builtWith in projectDetails[0].builtWith"
                                        v-bind:key="builtWith">
                                        <li class="">{{builtWith}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- projectDetails Somthing Else-->
                            <div class="col-12 col-xl-6 col-lg-6">
                                <div class="m-2 p-1" style="">
                                    <h2>Comments</h2>
                                    <div class="my-3 d-flex flex-column">
                                        <div style="border-left: black 1px solid;padding-left: 1rem;">
                                            <h4>Jockovish</h4>
                                            <p> bla bla bla, bla .. bla bla </p>
                                        </div>
                                    </div>
                                    <div class="my-3 d-flex flex-column">
                                        <div style="border-left: black 1px solid;padding-left: 1rem;">
                                            <h4>Marlin Monro</h4>
                                            <p> bla bla bla, bla .. bla bla </p>
                                        </div>
                                    </div>
                                    <div class="my-3 d-flex flex-column">
                                        <div style="border-left: black 1px solid;padding-left: 1rem;">
                                            <h4>John wick</h4>
                                            <p> bla bla bla, bla .. bla bla </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- projectDetails Footer-->
            <div class="px-3 fixed-bottom w-100 d-flex align-items-around projectDetailsFooter">
                <div class="row w-100">
                    <!-- projectDetails FeedBack-->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 px-1 d-flex justify-content-center">
                        <input type="range" class="tagInput">
                    </div>
                    <!-- projectDetails Comment-->
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 px-1 d-flex justify-content-center">
                        <div class="d-flex justify-content-around">
                            <!-- <input type="text" class="w-50 tagInput" placeholder="Leave a comment"> -->
                            <textarea class="px-2 tagInput" placeholder="wanna leave a comment !" cols="auto"> </textarea>
                            <button type="button" class="tagButton"><span>SEND</span></button>
                        </div>
                    </div>
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
        props: ['project-details','builtWith']
    }
</script>