<template>
    <div class="container">
        <div class="pt-5 row">
            <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                <div class="whoAmISection">
                    <h2 class="sectionTitle mb-4">About Me :</h2>
                    <div class="tagShadow aboutMeSection">
                        <p>i'm Redwan, a fullstack web developer, with an innate attraction for therms of art and simplicity.
                        <br>i'm interested in building responsive apps and design illustrations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                <div class="whoAmISection">
                    <h2 class="sectionTitle mb-4">Skills :</h2>
                    <div class="d-flex">
                        <div class="w-100 row justify-content-around">
                            <skill v-for="(skill, index) in skills"
                                    v-bind:skill="skill"
                                    v-bind:index="index"
                                    v-bind:key="skill.id">
                            </skill>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                <div class=" whoAmISection">
                    <h2 class="sectionTitle mb-4">Education and diplomats :</h2>
                    <div class="">
                        <ul class="list-group list-group-flush tagList">
                            
                            <li class="leftLine tagShadow diplomatItem">
                                <!-- <div class="ball"></div> -->
                                <div class="onWave ">
                                    <div class="d-flex m-0 ">
                                        <h5 class="sectionSubTitle">2020</h5>
                                    </div>
                                    <div class="">
                                        <div class="d-flex m-0">
                                            <h5>Bachlor in economic and legal siences</h5>
                                        </div>
                                        <div class="d-flex m-0">
                                            <h6>Ibn zohr university - Morocco</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="leftLine tagShadow diplomatItem ">
                                <div class="wave"></div>
                                <div class="onWave">
                                    <div class="d-flex m-0">
                                        <h5 class="sectionSubTitle">2019</h5>
                                    </div>
                                    <div class="">
                                        <div class="d-flex m-0">
                                            <h5>Associate's degree in development</h5>
                                        </div>
                                        <div class="d-flex m-0">
                                            <h6>Higher Institute of Applied Technologies - Morocco</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="leftLine tagShadow diplomatItem ">
                                <div class="wave"></div>
                                <div class="onWave">
                                    <div class="d-flex m-0">
                                        <h5 class="sectionSubTitle">2017</h5>
                                    </div>
                                    <div class="">
                                        <div class="d-flex m-0">
                                            <h5>Technician's certificate in informatique maintenance and networking</h5>
                                        </div>
                                        <div class="d-flex m-0">
                                            <h6>Higher Institute of Applied Technologies - Morocco</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="leftLine tagShadow diplomatItem ">
                                <div class="wave"></div>
                                <div class="onWave">
                                    <div class="d-flex m-0">
                                        <h5 class="sectionSubTitle">2015</h5>
                                    </div>
                                    <div class="">
                                        <div class="d-flex m-0">
                                            <h5>Baccalaureate in phisics siences</h5>
                                        </div>
                                        <div class="d-flex m-0">
                                            <h6>Hassan the 2nd, high school- Morocco</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
   import skill from './SkillComponent';
    export default {
        components : {
            skill
        },
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                skills: [
                    {   id: 1,  
                        title: "FrontEnd",
                        skillItems:[
                            {   name: "HTML",
                                color: "rgb(223, 87, 57)",
                                proficiency:"27%"
                            },
                            {   name: "CSS",
                                color: "rgb(10, 87, 230)",
                                proficiency:"24%"
                            },
                            {   name: "Bootstrap",
                                color: "rgb(66, 16, 167)",
                                proficiency:"21%"
                            },
                            {   name: "Js/Jquery",
                                color: "rgb(204, 198, 14)",
                                proficiency:"14%"
                            },
                            {   name: "VueJs",
                                color: "rgb(49, 194, 114)",
                                proficiency:"14%"
                            },
                        ]
                    },
                    {   id: 2,  
                        title: "BackEnd",
                        skillItems:[
                            {   name: "Laravel",
                                color: "rgb(211, 14, 14)",
                                proficiency:"55%"
                            },
                            {   name: "DotNetFramework",
                                color: "rgb(70, 22, 167)",
                                proficiency:"45%"
                            },
                        ]
                    },
                    {   id: 3,  
                        title: "DataBase",
                        skillItems:[
                            {   name: "SQL",
                                color: "rgb(245, 195, 29)",
                                proficiency:"45%"
                            },
                            {   name: "MySQL",
                                color: "rgb(34, 146, 232)",
                                proficiency:"40%"
                            },
                            {   name: "SQLLite",
                                color: "rgb(18, 62, 128)",
                                proficiency:"15%"
                            },
                        ]
                    },
                    {   id: 4,  
                        title: "Design",
                        skillItems:[
                            {   name: "Adobe Illustrator",
                                color: "rgb(195, 81, 14)",
                                proficiency:"65%"
                            },
                            {   name: "Adobe Xd",
                                color: "rgb(141, 26, 148)",
                                proficiency:"35%"
                            },
                        ]
                    },
                    
                ]
            }
        }
    }
</script>