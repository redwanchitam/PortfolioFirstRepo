<template>
    <div class="container mt-5 ">
        <div class="row justify-content-center align-items-center coverPage">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="row align-items-center">
                    <h1>Glad that you arrived here ..</h1>
                    <h5>feel free to express yours toughts  ...</h5>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                 <form @submit.prevent="Contact">
                    <!-- CROSS Site Request Forgery Protection -->
                    <div class="d-flex flex-column contactMeSection tagShadow">
                        <div class="mt-4 ">
                            <label>Name</label>
                            <input
                                v-model="fields.name"
                                placeholder="enter your full name .."
                                class="form-control tagInput form-control"
                                type="text"
                                name="name"
                                id="name">
                            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                        </div>
                        <div class="mt-4 ">
                            <label>EMAIL</label>
                            <input
                                v-model="fields.email"
                                placeholder="enter your email .."
                                class="form-control tagInput form-control"
                                type="email"
                                name="email"
                                id="email">
                            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
                        </div>
                        <div class="mt-4 ">
                            <label>PHONE</label>
                            <input
                                v-model="fields.phone"
                                placeholder="enter your full phone number .."
                                class="form-control tagInput form-control"
                                type="text"
                                name="phone"
                                id="phone">
                            <div v-if="errors && errors.phone" class="text-danger">{{ errors.phone[0] }}</div>
                        </div>
                        <div class="mt-4 ">
                            <label>MESSAGE</label>
                            <textarea
                                v-model="fields.message"
                                placeholder="i can't wait to hear from you .."
                                class="form-control tagInput messageInput form-control"
                                name="message"
                                id="message">
                            </textarea>
                            <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
                        </div>
                        <div class="mt-4 d-flex justify-content-end">
                            <input tag="button" type="submit" class="tagButton sendButton" name="send" value="Submit"/>
                        </div>
                    </div>
                </form>     
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
            fields: {},
            errors: {},
            }
        },
        methods: {
            Contact() {
            this.errors = {};
            axios.post('/contactMe', this.fields).then(response => {
                alert('Message sent!');
            }).catch(error => {
                if (error.response.status === 422) {
                this.errors = error.response.data.errors || {};
                }
            });
            },
        }
    }
</script>

