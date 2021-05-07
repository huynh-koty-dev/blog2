<template>
    <div class="user" >{{user.email}}
        <button
        v-on:click="handleDelete"
         class="delete">delete {{user.id}}</button>
    </div>
    
</template>
<script>
export default {
    name: 'users',
    props:{
        user:Object
    },
    data(){
        return {
            text:'user'
        }
    },
    methods:{
        handleDelete(e){
            var data={
                id: this.user.id
            };
            // console.log('handleDelete in Users.vue');
            this.$emit('deleteUser',data)
            
        }
    }
}
</script>

<style>
    .user{
        line-height: 100px;
        width: 300px;
        height: 100px;
        border: 1px solid black;
        box-sizing: border-box;
        margin-left: 50px;
        margin-top: 30px;
        position:relative;
    }
    .user .delete{
        position: absolute;
        right: 0;
        top: 0;
    }
</style>