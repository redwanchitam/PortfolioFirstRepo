<template>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mb-4">
            <div class="tagShadow skillSection" >  
                <h4 class="sectionSubTitle">{{skill.title}}</h4>
                <ul class="list-group list-group-flush tagList skillsList">
                    <li class="skillsItem"
                        v-for="skillItem in skill.skillItems"
                        v-bind:key="skillItem.id">
                        <div class="d-flex m-0">
                            <span class="colorDash" v-bind:style="'background-color:'+ skillItem.color +';'"></span>
                            <h5>{{skillItem.name}}</h5>
                        </div>
                    </li>
                </ul>
                <div class="proficiencyBoxOut">
                    <h6 class="profMsg twinkle">hover on here !</h6>
                    <div class="proficiencyBox">
                        <div class="proficiency d-flex justify-content-center" 
                            v-for="skillItem in skill.skillItems"
                            v-bind:key="skillItem.id"
                            v-bind:style="'width:'+ skillItem.proficiency +'; background-color:'+ skillItem.color +';'">
                            <div class="profPercentageBox d-flex justify-content-center align-items-center">
                                <h6 class="profPercentage d-flex align-items-center">{{skillItem.proficiency}}</h6>
                            </div>
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
        props: ['skill']
    }
</script>