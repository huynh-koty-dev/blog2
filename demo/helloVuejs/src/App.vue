<template>
  <div id="app">
    <div class="container">
      <p>Props down</p>
      <button v-on:click="title ='lập trình VueJS'"> change title from Components App.vue</button>
      <CompHeader v-bind:titleheader="title"
        v-on:changeTitle="handleTitle"
       />
       <p>Event Up</p>
      <list-users 
      v-bind:ListUser="ListUser"
      v-on:deleteUserEvent = "handDeleteUser"
      />
      <p>Ref</p>
      <demo-ref/>
      <p>Slot</p>
      <demo-slot/>
      <CompFooter/>
    </div>
    
  </div>
</template>

<script>
import demoSlot from './components/demoSlot.vue'
import demoRef from './components/demoRef.vue';
import ListUsers from './components/ListUsers.vue';
import CompHeader from './components/CompHeader.vue';
import CompFooter from './components/CompFooter.vue';
export default {
  name: 'app',
  data () {
    return {
     title:'hello vuejs - header ...',
     ListUser:[
       {id:0,email: 'email@gmai.com',active:true},
       {id:1,email: 'email1@gmai.com',active:false},
       {id:2,email: 'email2@gmai.com',active:false},
      //  {id:3,email: 'email3@gmai.com',active:true},
      //  {id:4,email: 'email4@gmai.com',active:true},
      //  {id:5,email: 'email5@gmai.com',active:false},
     ]
    }
  },
  components:{
    CompHeader,
    CompFooter, 
    ListUsers,
    demoRef,
    demoSlot,
  },
  methods:{
    handleTitle(data){
        this.title=data.titleheader;
    },
    handDeleteUser(data){
      var indexDel = -1;
      this.ListUser.forEach((u,idx) => {
        // console.log(u.id,idx, data.id)
        if(u.id == data.id){
          indexDel = idx;
        }
      });
      if(indexDel!=-1){
        
        this.ListUser.splice(indexDel,1);
1      }
    //  console.log('handDeleteUser in App.vue',data);
    }
  }
}
</script>

<style>
*{
  box-sizing: border-box;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.container{
  max-width: 1170px;
  margin: 0px auto;
  min-height: 1000px;
}
p{
  color:red;
}
</style>
