<template>
    <div>
        <li class="leftLine tagShadow diplomatItem">
            <!-- <div class="ball"></div> -->
            <div class="onWave ">
                <div class="d-flex m-0 ">
                    <h5 class="sectionSubTitle">{{diplomat.date}}</h5>
                </div>
                <div class="">
                    <div class="d-flex m-0">
                        <h5>{{diplomat.designation}}</h5>
                    </div>
                    <div class="d-flex m-0">
                        <h6>{{diplomat.institution.name}} - {{diplomat.institution.location}}</h6>
                    </div>
                </div>
            </div>
        </li>
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['diplomat']
    }
</script>