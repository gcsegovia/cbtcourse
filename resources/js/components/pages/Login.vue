<template>
    <div>
        <!-- Content
        ================================================== -->
        <div uk-height-viewport class="uk-flex uk-flex-middle">
            <div class="uk-width-2-3@m uk-width-1-2@s m-auto rounded">
                <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-grey" uk-grid>

                    <!-- column one -->
                    <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
                        <i class=" uil-graduation-hat icon-large"></i>
                        <h3 class="mb-4"> Courseplus</h3>
                        <p>The Place You can learn Every Thing. </p>
                    </div>

                    <!-- column two -->
                    <div class="uk-card-default p-5 rounded">
                        <div class="mb-4 uk-text-center">
                            <h3 class="mb-0"> Welcome back</h3>
                            <p class="my-2">Login to manage your account.</p>
                        </div>

                            <div class="uk-form-group">
                                <label class="uk-form-label"> Username</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-mail"></i>
                                    </span>
                                    <input class="uk-input" type="text" placeholder="Enter username" v-model="form.username">
                                </div>

                            </div>

                            <div class="uk-form-group">
                                <label class="uk-form-label"> Password</label>

                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-lock"></i>
                                    </span>
                                    <input class="uk-input" type="password" placeholder="********" v-model="form.password">
                                </div>

                            </div>

                            <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-auto@s">
                                    <button type="submit" @click="submit" class="btn btn-default d-block">Login</button>
                                </div>
                            </div>

                    </div><!--  End column two -->

                </div>
            </div>
        </div>
        <!-- Content -End
        ================================================== -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: {
                username: null,
                password: null,
            }
        }
    },
    methods: {
        submit() {
            axios.post(BASE_URL + '/auth', this.form).then(response => {
                if (response.data[0].type == 'error') {
                        	
                } else {
                    window.location = '/';
                }
            }).catch(error => {

            });
        }
    },
}
</script>

