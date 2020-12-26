<template>
    <div class="d-flex">
        <div class="d-flex flex-column justify-content-center align-items-center projectDetails" style="position: relative">
            <!-- projectDetails Header-->
            <div class="px-3 sticky-top w-100 d-flex align-items-baseline projectDetailsHeader">
                <!-- projectDetails Title & Category-->
                <div class="ml-2 my-2 d-flex flex-column">
                    <h1 class="prjTitle">&lt; {{ projectDetails.title}} &gt;</h1>
                    <h3 class="prjCateg"><span>&bull; </span>{{projectDetails.category}}</h3>
                </div>
                <button type="button" class="ml-auto close" @click="$emit('close')"> <span>x</span></button>
            </div>
            <!-- projectDetails Body-->
            <div class="p-2 justify-content-center align-items-center projectDetailsBody">
                <div class="m-3">
                    <!-- projectDetails Image-->
                    <div class="prjDetImg">
                        <img v-bind:src="projectDetails.imgPath" class="prjImg" v-bind:alt="projectDetails.imgPath">
                    </div>
                    <!-- projectDetails Text-->
                    <div class="px-2">
                        <!-- projectDetails Description-->
                        <div class="row justify-content-center">
                            <div class="row w-100">
                                <!-- projectDetails About-->
                                <div class="col-12 col-xl-8 col-lg-8">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="sectionTitle">About Work</h2>
                                        <p>{{projectDetails.description}}</p>
                                    </div>
                                </div>
                                <!-- projectDetails BuiltWith-->
                                <div class="col-12 col-xl-4 col-lg-4">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="sectionTitle">BuiltWith</h2>
                                        <ul class="list-group list-group-flush tagList skillsList">
                                            <li class="builtWithItem"
                                                v-for="builtWithItem in projectDetails.builtWithItems"
                                                v-bind:key="builtWithItem.id">
                                                <div class="d-flex m-0">
                                                    <span class="colorDash" v-bind:style="'background-color:'+ builtWithItem.color +';'"></span>
                                                    <h5>{{builtWithItem.name}}</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100">
                                <!-- projectDetails Comments-->
                                <div class="col-12 col-xl-8 col-lg-8">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="sectionTitle">Comments</h2>
                                        <ul class="list-group list-group-flush tagList">
                                            <comment v-for="(comment, index) in comments"
                                                    v-bind:comment="comment"
                                                    v-bind:index="index"
                                                    v-bind:key="comment.id">
                                            </comment>
                                        </ul>
                                    </div>
                                </div>
                                <!-- projectDetails Rating-->
                                <div class="col-12 col-xl-4 col-lg-4">
                                    <div class="m-2 p-3 descriptionSection">
                                        <h2 class="sectionTitle">Rating</h2>
                                        <div class="ml-0 row w-100 align-items-end">
                                            <div class="pl-0 col-sm-6 col-lg-12 col-xl-12 col-md-12">
                                                <h5 class="">interaction(62)</h5>
                                            </div>
                                            <div class="pl-0 col-sm-6 col-lg-12 col-xl-12 col-md-12">
                                                <div class="d-flex box">
                                                    <div id="ratingSlot" class="d-flex ratingSlot">
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
                            <div class="commentInputCont">
                                <textarea class="px-2 py-1 tagInput commentInput" placeholder="Wanna leave a comment .."> </textarea>
                            </div>
                            <button type="button" v-on:click="turnTheWheel(8,3,350)" class="tagButton commentButton"><span>send</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import comment from './CommentComponent';
    export default {
        components : {
            comment
        },
        mounted() {
            console.log('Component mounted.')
        },
        props: ['projectDetails'],
        methods: {
            wait(x,delay) { 
                return new Promise(resolve => {
                    setTimeout(() => {
                    resolve(x);
                    }, delay);
                });
            },
            affect: async function (value,leftORright,delay) {
                let tours=-1;
                let currentTour;
                let shouldBreak;
                currentTour=0;
                shouldBreak=false;
                do {
                tours=Math.floor(Math.random()*10);
                } while (tours>1);
                do {
                    let index=0;
                    do {
                        var x = await this.wait(index,delay);
                        switch (leftORright) {
                            case "l":
                                $("#leftDigit").html(x);
                                $("#leftDigit").addClass("slotNumberAnimate");
                                if(currentTour==tours+1){
                                    if(index===value){
                                        $("#leftDigit").removeClass("slotNumberAnimate");
                                        shouldBreak=true;
                                    }
                                }
                                break;
                            case "r":
                                $("#rightDigit").html(x);
                                $("#rightDigit").addClass("slotNumberAnimate");
                                if(currentTour==tours+1){
                                    if(index===value){
                                        $("#rightDigit").removeClass("slotNumberAnimate");
                                        shouldBreak=true;
                                    }
                                }
                                break;
                        }
                        index++;
                    } while (index!=10 && !shouldBreak);
                    currentTour++;
                } while (currentTour!=tours+2 && !shouldBreak);
            },
            affectRightDigit(value,delay){
                this.affect(value,"r",delay)
            },
            affectLeftDigit(value,delay){
                this.affect(value,"l",delay);
            },
            turnTheWheel : function(leftValue,rightValue,delay){
                let leftORright="";
                this.affectLeftDigit(Math.floor(Math.random()*10),delay);
                this.affectRightDigit(Math.floor(Math.random()*10),delay);
            }
        },
        data() {
            return{
                comments: [
                    {
                        id: 1,
                        date: "13/11/2020",
                        text: "heaven is a place on earth with you.",
                        profil: {
                            id: 1,
                            name: "Lana Del Rey",
                            picPath: "img/lanaDelRey.jpg",
                            email: "",
                            password: ""
                        }
                    },
                    {
                        id: 2,
                        date: "21/11/2020",
                        text: "winter is coming ..",
                        profil: {
                            id: 2,
                            name: "Jon Snow",
                            picPath: "img/jonSnow.jpg",
                            email: "",
                            password: ""
                        }
                    },
                    {
                        id: 3,
                        date: "18/12/2020",
                        text: "hi, i'm Rafiq Boubker and you know ..",
                        profil: {
                            id: 3,
                            name: "Rafiq Boubker",
                            picPath: "img/rafiqBoubker.jpg",
                            email: "",
                            password: ""
                        }
                    }
                ]
            }
        }
    }
</script>