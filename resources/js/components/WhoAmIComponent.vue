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
                            <diplomat v-for="(diplomat, index) in diplomats"
                                    v-bind:diplomat="diplomat"
                                    v-bind:index="index"
                                    v-bind:key="diplomat.id">
                            </diplomat>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
   import skill from './SkillComponent';
   import diplomat from './DiplomatComponent';
    export default {
        components : {
            skill,
            diplomat
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
                    
                ],
                diplomats: [
                    {
                        id: 1,
                        designation: "Bachlor in economic and legal siences",
                        date: "2020",
                        institution: {
                            name: "Ibn zohr universityHigher Institute of Applied Technologies",
                            location: "Morocco"
                        }

                    },
                    {
                        id: 2,
                        designation: "Associate's degree in development",
                        date: "2019",
                        institution: {
                            name: "Higher Institute of Applied Technologies",
                            location: "Morocco"
                        }

                    },
                    {
                        id: 3,
                        designation: "Technician's certificate in informatique maintenance and networking",
                        date: "2017",
                        institution: {
                            name: "Higher Institute of Applied Technologies",
                            location: "Morocco"
                        }

                    },
                    {
                        id: 4,
                        designation: "Baccalaureate in physics siences",
                        date: "2015",
                        institution: {
                            name: "Hassan the 2nd, high school",
                            location: "Morocco"
                        }

                    }
                ]
            }
        }
    }
</script>