<template>
    <base-card>
        <form @submit.prevent="submitForm">
            <div class="title">
                <h1>Register</h1>
            </div>
            
            <div class="formLogin">
                <div class="form">
                    <i class="fas fa-user"></i><input type="text" placeholder="UserName" required ref="nameInput">
                </div>
                <div class="form">
                    <i class="fas fa-user"></i><input type="text" placeholder="Email" required ref="emailInput">
                </div>
                <div class="form">
                    <i class="fas fa-lock"></i><input type="password" placeholder="Password" ref="passInput">
                </div>
                 <div class="form">
                    <i class="fas fa-lock"></i><input type="password" placeholder="comfirm password" ref="repassInput">
                </div>
            </div>
            <div class="btn">
                <base-button>Register</base-button>
            </div>
        </form>
    </base-card>
</template>
<script>
export default {
    inject:['users'],
    methods:{
        submitForm(){
            const nameInput = this.$refs.nameInput.value;
            const emailInput = this.$refs.emailInput.value;
            const password = this.$refs.passInput.value;
            const comfirmPass = this.$refs.repassInput.value;
            if(password!==comfirmPass){
                return;
            }
            else{
                const user =  this.users.push({
                    id: new Date().toISOString(),
                    nameUser: nameInput,
                    email: emailInput,
                    password: password
                });
                console.log(user);
                this.$router.push('/login');
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
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
}
</style>