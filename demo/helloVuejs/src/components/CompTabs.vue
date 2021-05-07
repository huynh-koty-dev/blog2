<template>
    <div class="comp-tabs">
        <div class="tabs-title">
                <span>{{title}}</span>
                <ion-icon name="heart"></ion-icon>
        </div>
         <div class="tabs-contents">
            <slot></slot>
        </div>
    </div>
</template>
<script>
export default {
    name:'comp-tabs',
    data(){
        return{

        }
    },
     props:{
        title:String
    },    
}
</script>
<style>
    .tabs-title{
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        border: 2px solid #000;
    }
    .tabs-contents{
        margin-top: 2px;
        padding: 2px;
        border: 2px solid blue;
    }
    .tabs-contents .tabs-header {
        margin:0px;
        padding:0px;
        list-style: none;
        display: flex;
    }
    .tabs-header li{
        padding: 8px 15px;
        background-color: #ccc;
        transition: all .3s ease;
    }
    .tabs-header li:hover{
        color:#fff;
        background-color: #333;
    }
    .tabs-header .active{
        background-color: orange;
    }
    .tabs-header .active:hover{
        color:#333;
        background-color:#fff;
    }
    .tab-content{
        padding: 15px;
        border: 2px solid green;
        text-align: left;
    }
</style>