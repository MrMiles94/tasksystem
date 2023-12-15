<template>
    <div class="signup-page container-fluid flex-col just-center align-center">
            <form @submit.prevent="login" class="input-form flex-col">
                <h3>Sign Up</h3>

                <input type="text" name="firstName" 
                placeholder="First Name" v-model="firstName"
                @input="enableButton"
                required>
                <input type="text" name="lastName" 
                placeholder="Last Name" v-model="lastName"
                @input="enableButton"
                required>

                <input type="email" 
                name="email" 
                v-model="email"
                placeholder="Email"
                @input="enableButton"
                required>
    
                <input type="password" name="password" 
                v-model="password"
                placeholder="Password"
                @input="enableButton"
                required>
                
                <input type="password" 
                name="confirmPassword" 
                placeholder="Confirm Password"
                v-model="confirmPassword"
                @input="enableButton"
                required>
    
                <label >
                    <span>Had an account with us?  </span>
                    <router-link to='/signin'>Sign in</router-link>
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
            firstName:'',
            lastName:'',
            email:'',
            password:'',
            confirmPassword:'',
            activateButton:false,
        }
    },
    methods:{
        login(){
            const signUpData ={
                firstName:this.firstName,
                lastName:this.lastName,
                email:this.email,
                password:this.password,

            }
            if(this.checkInputs()){
                this.submit(signUpData, 'signUp.php')
                this.firstName='',
                this.lastName='',
                this.email=''
                this.password=''
                this.confirmPassword=''
            }else{
                console.log('Try feeling up the forms!')
            }
        },
        checkInputs(){
            if(this.email && this.password &&this.firstName &&this.lastName && (this.password===this.confirmPassword)){
                return true
            }
            else{
                return false
            }
        },
        submit(data,location){
            connect(data, location)
        },
        enableButton(){
            if(this.checkInputs()){
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
input{
    text-indent: 2%;
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