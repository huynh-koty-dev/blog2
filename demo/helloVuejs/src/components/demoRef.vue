<template>
    <div class="demo-ref">
        <h1>Demo Ref</h1>
        <button 
        v-on:click="handleClickInputFile"
        class="avatar">Thay doi avatar</button>
        <input 
        type="file" 
        style="display:none"
        ref="fileInputAvatar"
        >
    </div>
</template>

<script>
export default {
    name:'demo-ref',
    data(){
        return{

        }
    },
    methods:{
        handleClickInputFile(e){
            this.$refs.fileInputAvatar.click();
        }
    }
}
</script>
<style>
    .demo-ref{
        margin-top:100px;
        padding:100px 30px;
        border:1px solid black;
    }
    .avatar{
        color:#fff;
        padding: 12px 15px;
        border: 2px solid #333;
        background-color: #333;
        transition: all .3s ease;
    }
    .avatar:hover{
        background-color: #fff;
        color:#333;
    }
</style>