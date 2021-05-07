<template>
    <base-card>
        <form @submit.prevent="submitForm">
            <div class="title">
                <h1>Login</h1>
            </div>
            <div>
                <!-- <p style="color:red">email hoặc mật khẩu của bạn không đúng. xin vui lòng thử lại!</p> -->
            </div>
            <div class="formLogin">
                <div class="form">
                    <i class="fas fa-user"></i><input type="text" placeholder="Email" required ref="emailInput">
                </div>
                <div class="form">
                    <i class="fas fa-lock"></i><input type="password" placeholder="Password" ref="passInput">
                </div>
                
            </div>
            <div class="btn">
                <base-button>Login</base-button>
                <base-button><router-link to="/register">Register</router-link></base-button>
            </div>
        </form>
    </base-card>
</template>
<script>
export default {
    inject:['users'],
    data(){
        return{
           
            isValid:false,
        }
    },
    methods:{
        submitForm(){
            const emailInput = this.$refs.emailInput.value;
            const passInput = this.$refs.passInput.value;
            console.log(emailInput,passInput)
            const isExist = this.users.find(user => user.email === emailInput && user.password === passInput)
            if(!isExist){
                this.isExist = true;
                return;
            }
            else{
                this.isExist = false;
                this.$router.push('/main');
                this.isSucess =true;
            }
        }
    }
}
</script>
<style scoped>
form{
    padding:0px;
    width:100%;
    height: 100%;
    border-radius: 30px;
}
.title{
    width: 100%;
    height:60px;
    background-color:lightgrey;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    margin-top:-21px;
}
.title h1{
    text-align: center;
    line-height: 60px;
    color:grey;
}
.formLogin{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    
}
.form input{
    border: hidden;
    line-height: 30px;
    margin-left:10px;
    margin-top:5px;
}

.form i {
     margin-left:10px;
     color:grey;
}

.form{
    border: 1px solid #333;
    height: 40px;
    width: 300px;
}
.btn{
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
}
</style>