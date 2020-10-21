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
                                                <div class="box">
                                                    <!-- <div class="percent">
                                                        <svg viewBox="0 0 176 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="undraw_all_the_data_h4ki 1">
                                                                <g id="pieChart">
                                                                    <g id="full">
                                                                        <path id="full1" d="M87.9993 0V22C101.053 22 113.814 25.8708 124.667 33.123C135.521 40.3751 143.98 50.6829 148.976 62.7428C153.971 74.8028 155.278 88.0732 152.732 100.876C150.185 113.679 143.899 125.439 134.669 134.669L150.225 150.225C162.532 137.918 170.914 122.238 174.309 105.168C177.705 88.0976 175.962 70.4037 169.301 54.3238C162.641 38.2439 151.362 24.5002 136.89 14.8307C122.418 5.16109 105.404 -1.28779e-06 87.9993 0V0Z" fill="#161313"/>
                                                                        <path id="full2" d="M150.226 150.225L134.67 134.669C123.386 145.955 108.394 152.769 92.4711 153.849C76.5482 154.928 60.7735 150.2 48.0695 140.541L34.7536 158.061C51.6952 170.938 72.7289 177.239 93.9595 175.798C115.19 174.357 135.18 165.272 150.226 150.225Z" fill="#161313"/>
                                                                    </g>
                                                                    <path id="empty" d="M22.0001 88C22.0001 70.4957 28.9537 53.7083 41.3312 41.331C53.7087 28.9536 70.4962 22 88.0006 22V4.16088e-09C69.5786 -0.000179087 51.6212 5.78093 36.6594 16.5285C21.6976 27.276 10.4859 42.448 4.60484 59.9058C-1.27627 77.3636 -1.53027 96.2269 3.87862 113.837C9.28752 131.447 20.0865 146.915 34.7535 158.061L48.0694 140.541C39.9617 134.391 33.3886 126.447 28.8657 117.331C24.3427 108.216 21.9928 98.1761 22.0001 88V88Z" fill="white"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <div class="number">
                                                            <h5 class="">8</h5>
                                                        </div>
                                                    </div> -->
                                                    <div class="ratingSlot">
                                                        <div>
                                                            <span>0</span>
                                                        </div>
                                                        <div>
                                                            <span>.</span>
                                                        </div>
                                                        <div>
                                                            <span>0</span>
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
                            <button type="button" class="tagButton commentButton"><span>send</span></button>
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