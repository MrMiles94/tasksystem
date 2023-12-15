<template>
    <div class="signup-page container-fluid flex-col just-center align-center">
            <form @submit.prevent="login" class="input-form flex-col">
                <h3>Login</h3>
                <input type="email" 
                name="email" 
                v-model="email"
                placeholder="Email"
                @input="enableButton">
    
                <input type="password" name="password" 
                v-model="password"
                placeholder="Password"
                @input="enableButton">
    
                <label for="checkbox">
                    <input type="checkbox" name="autoRegister" 
                    v-model="autoRegister" id="checkbox">
                    <span>Remember me</span>
                    <p>Don't have an account?  <router-link to="/signup">Sign up.</router-link></p>
                </label>
                
                <button :disabled="activateButton">Submit</button>
            </form>
        
    </div>
</template>
<script>
import connect from '../helpers'
export default{
    data(){
        return{
            email:'',
            password:'',
            autoRegister:false,
            activateButton:false,
        }
    },
    methods:{
       login(){
            const loginData ={
                email:this.email,
                password:this.password,
                autoRegister:this.autoRegister
            }
            if(this.email && this.password){
                connect(loginData,'signIn.php')
                this.email=''
                this.password=''
                this.autoRegister=false
            }else{
                console.log('enter your data first!')
            }
        },
        async submit(){
            
        },
        enableButton(){
            if(this.email&& this.password){
                this.activateButton =false;
            }else{
                this.activateButton =true;
            }
        }
    },
    created() {
        this.enableButton()
    },
}
</script>
<style scoped>
.container-fluid{
background-color: #00ff0000;
min-height: 400px;
}
.input-form{
    width: 60%;
    padding: 4%;
    padding-top: 1%;
    border: 1px solid #3434343a;
    border-radius: 20px;

}
h3{
    text-align: center;
    font-size: x-large;
    margin:1% 0%;
}
form>input,button{
    display: block;
    margin: 10px 0%;
    padding: 1%;
    font-size: medium;
    border: 1px solid#15141449;
    border-radius: 5px;
}
button{
    background-color: darkred;
    color:white;
    border: 1px solid #00000000;
}
button:disabled{
    background-color: rgba(139, 0, 0, 0.621);
}
form>input::placeholder{
    color: rgba(139, 0, 0, 0.443);
}
label{
    font-size: medium;
    width: 100%;
}
#checkbox{
}
</style>