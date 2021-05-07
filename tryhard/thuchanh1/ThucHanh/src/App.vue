<template>
  <div id="app">
    <the-header></the-header>
    <router-view></router-view>
  </div>
</template>

<script>
import TheHeader from './components/layout/TheHeader.vue';

export default {
  components:{
    TheHeader
  },
  data(){
    return{
      
      users:[
      {
        id:0,
        nameUser: 'huynh',
        email: 'huynh@gmail.com',
        password: '123'
      },
      {
        id:1,
        nameUser: 'huynh2',
        email: 'huynh2@gmail.com',
        password: '123'
      }
      ]
    }
  },
  provide(){
    return{
      users:this.users
    }
  }
}
</script>

<style>

</style>
