<template>
    <div class="list-user">
        <User v-for="user in ListUser" 
        v-bind:key="user.id"
        v-bind:user="user"
        v-on:deleteUser="deleteUser"
        />
    </div>
    
</template>
<script>
import User from './Users.vue';
export default {
    name: 'list-users',
    props:{
        ListUser:{
            type:Array,
            default:[]
        }
    },
    data(){
        return {
            text:'user'
        }
    },
    components:{
        User
    },
    methods:{
        deleteUser(data){
            // console.log('deleteUser in ListUsers.vue',data);
            this.$emit('deleteUserEvent',data)
        }
    }
}
</script>

<style>
    
</style>