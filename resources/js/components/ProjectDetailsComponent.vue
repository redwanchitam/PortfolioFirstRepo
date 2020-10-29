<template>
    <div class="d-flex">
        <div class="d-flex flex-column justify-content-center align-items-center projectDetails" style="position: relative">
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
                        <div class="row justify-content-center">
                            <div class="row w-100">
                                <!-- projectDetails About-->
                                <div class="col-12 col-xl-8 col-lg-8">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="descriptionSectionTitle">About Work</h2>
                                        <p>{{projectDetails[0].description}}</p>
                                    </div>
                                </div>
                                <!-- projectDetails BuiltWith-->
                                <div class="col-12 col-xl-4 col-lg-4">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="descriptionSectionTitle">BuiltWith</h2>
                                        <ul class="list-group list-group-flush builtWithList">
                                            <li class=""
                                            v-for="builtWith in projectDetails[0].builtWith"
                                            v-bind:key="builtWith">{{builtWith}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100">
                                <!-- projectDetails Comments-->
                                <div class="col-12 col-xl-8 col-lg-8">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="descriptionSectionTitle">Comments</h2>
                                        <div class="my-3 d-flex flex-column justify-content-center leftLine">
                                            <h4>Jockovish</h4>
                                            <p class="commentP"> bla bla bla, bla .. bla bla . digg digg digg, digg .. digg digg</p>
                                        </div>
                                        <div class="my-3 d-flex flex-column leftLine">
                                            <h4>Marlin Monro</h4>
                                            <p class="commentP"> bla bla bla, bla .. bla bla . digg digg digg, digg .. digg digg </p>
                                        </div>
                                        <div class="my-3 d-flex flex-column leftLine">
                                            <h4>John wick</h4>
                                            <p class="commentP"> bla bla bla, bla .. bla bla . digg digg digg, digg .. digg digg </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- projectDetails Rating-->
                                <div class="col-12 col-xl-4 col-lg-4">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="descriptionSectionTitle">Rating</h2>
                                        <div class="ml-0 row w-100 align-items-end">
                                            <div class="pl-0 col-6">
                                                <h5 class="">interaction(62)</h5>
                                            </div>
                                            <div class="col-6 leftLine">
                                                <div class="d-flex box">
                                                    <div class="d-flex ratingSlot">
                                                        <div class="d-flex slotChild isNumber">
                                                            <h3 id="leftDigit" class="">0</h3>
                                                        </div>
                                                        <div class="d-flex slotChild isNotNumber">
                                                            <h3 class="">.</h3>
                                                        </div>
                                                        <div class="d-flex slotChild isNumber">
                                                            <h3 id="rightDigit" class="">0</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- projectDetails Footer-->
            <div class="p-2 fixed-bottom w-100 d-flex align-items-around projectDetailsFooter">
                <div class="row w-100">
                    <!-- projectDetails FeedBack-->
                    <div class="col-3 d-flex justify-content-center">
                        <input type="range" class="w-100 tagInput">
                    </div>
                    <!-- projectDetails Comment-->
                    <div class="col-9 d-flex justify-content-center">
                        <div class="pl-3 d-flex w-100 align-items-center" >
                            <textarea class="px-2 py-1 tagInput commentInput" placeholder="Wanna leave a comment .."> </textarea>
                            <button type="button" v-on:click="turnTheWheel(7)" class="tagButton commentButton"><span>send</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import { set } from 'vue/types/umd';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['project-details','builtWith'],
        methods: {
            turnTheWheel : function(leftValue){
                let tours;
                let currentTour;
                let shouldBreak;

                function affectLeftDigit(l){
                    currentTour=0;
                    shouldBreak=false;
                    do {
                    tours=Math.floor(Math.random()*10);
                    } while (tours<3);
                    do {
                        let index=0;
                        do {
                            $("#leftDigit").html(index);
                            if(currentTour==tours+1){
                                if(index===l){
                                    shouldBreak=true;
                                }
                            }
                            index++;
                        } while (index!=10 && !shouldBreak);
                        currentTour++;
                    } while (currentTour!=Tour+2 && !shouldBreak);
                }
                affectLeftDigit(leftValue);
                // setTimeout(function(){ $("#leftDigit").html(3); }, 1000);
            }
        }
    }
</script>