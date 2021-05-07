<template>
    <div class="demo-slot">
        <comp-tabs title="tieu de cua Tab">
            <ul class="tabs-header" >
                <li v-for="tab in tabHeaders" 
                v-bind:key="tab.id"
                v-on:click="setActiveTabs(tab.id)"
                v-bind:class="{active: tabActive == tab.id}">
                {{tab.text}}
                </li>
            </ul>
            <div class="tab-content tab1" v-if="tabActive===0">
                <p>Tab1 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident voluptatem voluptates in atque praesentium? Accusamus quis, nostrum natus consequuntur quisquam ipsa autem velit nam labore earum perferendis. Quo, commodi aliquid!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, omnis placeat sequi accusamus ad saepe minus quibusdam repudiandae, necessitatibus exercitationem non quidem architecto? Libero totam officiis doloremque, iure dicta pariatur!</p>
            </div>
            <div class="tab-content tab2" v-if="tabActive===1">
                <p>Tab2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vero repellendus quos cumque dignissimos, illo vitae quisquam repellat aperiam rem dolorem rerum perferendis voluptas ipsam illum at id, consectetur doloremque.</p>
            </div>
            <div class="tab-content tab3" v-if="tabActive===2">
                <p>Tab3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus assumenda accusantium harum est et magnam? Perferendis exercitationem voluptas, sit reprehenderit pariatur doloribus praesentium voluptatem quo rem saepe modi officiis.</p>
            </div>
        </comp-tabs>
       
    </div>
</template>
<script>
import CompTabs from './CompTabs.vue';
export default {
    name:"demo-slot",
    data(){
        return{
            tabHeaders:[
                {id:0, text:'tab1'},
                {id:1, text:'tab2'},
                {id:2, text:'tab3'},
            ],
            tabActive:0
        }
    },
   methods:{
     setActiveTabs(index){
         this.tabActive =index;
     }   
   },
    components:{
        CompTabs,
    }
}
</script>
<style>
    .demo-slot{
        margin-top:100px;
        padding:100px 30px;
        border:1px solid black;
    }
    
</style>