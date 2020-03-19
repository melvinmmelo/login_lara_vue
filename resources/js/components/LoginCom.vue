<template>
    <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <form>
               
                <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form>
                    <div class="input-group mb-3" :class="{'has-error' : errorsEmail}">
                    <input type="email" id="email" name="email" v-model="loginDetails.email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                        
                    </div>
                    <span v-if="errorsEmail" class="help-block">
                            <strong>{{ emailError }}</strong>
                        </span>


                    <div class="input-group mb-3" :class="{'has-error' : errorsPassword}">
                        <input type="password" id="password" v-model="loginDetails.password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <span v-if="errorsPassword" class="help-block">
                            <strong>{{passwordError}}</strong>
                        </span>
                    <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                        
                     

                        <input type="checkbox" v-model="loginDetails.remember"  name="remember" > 
                        <label for="remember">Remember Me   </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" @click.prevent="loginPost" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="#">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
                </div>
                <!-- /.login-card-body -->
                </form>
            </div>
            </div>
            <!-- /.login-box -->

</template>

<script>
    export default {
        data(){
            return{
            loginDetails:{
                email:'',
                password:'',
                remember:true
            },
            errorsEmail: false,
            errorsPassword: false,
            emailError:null,
            passwordError:null
            }
        },
        methods:
            {
            loginPost(){
            let vm = this;
            axios.post('/login', vm.loginDetails)
                .then(function (response) {
                    window.location.href = "/home"
            })
            .catch(function (error) {
                var errors = error.response
                if(errors.statusText === 'Unprocessable Entity'){
                    if(errors.data){
                        
                        if(errors.data.errors.email){
                           vm.errorsEmail = true
                           vm.emailError = _.isArray(errors.data.errors.email) ? errors.data.errors.email[0]: errors.data.errors.email
                        }else{
                             vm.errorsEmail = true
                             vm.emailError = null
                        }
                        if(errors.data.errors.password){
                           vm.errorsPassword = true
                           vm.passwordError = _.isArray(errors.data.errors.password) ? errors.data.errors.password[0] : errors.data.errors.password
                        }else{
                             vm.errorsPassword = true
                             vm.passwordError = null
                        }

                        
                    }
                }
            });
        }
        },
        mounted() {
        }
    }
</script>
