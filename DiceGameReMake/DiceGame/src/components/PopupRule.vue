<template>
    <div class="wrapper-popup " v-bind:class="getClassPopup">
        <div class="rule">
            <h3>Luat choi</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Perspiciatis amet voluptatum sunt! Architecto dignissimos 
                officia aliquid saepe ea unde sed repellendus harum ab atque 
                reiciendis natus porro, eligendi eum impedit?</p>
            <button 
            v-on:click="confirm"
            class="confirm">Da hieu</button>
        </div>
    </div>
    
</template>
<script>
export default {
    name:'rules',
    data(){
        return {

        }
    },
    computed:{
        getClassPopup:function(){
            return{
                'open-popup':this.isOpenPopup
            }
        }
    },
    props:{
        isOpenPopup:{type:Boolean, default: false }
    },
    methods:{
        confirm(){ 
            console.log('day la popupRule confirm');
            this.$emit('handleConfirm');
            
        }
    }
}
</script>
<style>
   .wrapper-popup{
       position: fixed;
       top:0;
       left:0;
       right: 0;
       bottom: 0;
       background-color: rgba(0, 0, 0, 0.4);
       opacity: 0;
       visibility: hidden;
       transition: all .3s ease;
   } 
   .wrapper-popup.open-popup{
       opacity: 1;
       visibility: visible;
   }
   .rule{
       background-color: #fff;
       padding: 20px;
       top:50%;
       left:50%;
       transform: translate(-50%,-50%) scale(1.2);
       position: absolute;
       width: 350px;
       font-family: Arial, Helvetica, sans-serif;
       transition: all .3s ease;
   }
   .open-popup .rule{
       transform: translate(-50%,-50%) scale(1);
   }
   .rule h3{
       margin-bottom: 10px;
   }
    .rule .confirm{
        cursor: pointer;
        border: 2px solid #333;
        background-color: #fff;
        padding: 8px 15px;
        margin-top:20px;
        transition: all .3s ease;
    }
    .rule .confirm:hover{
        color: #fff;
        background-color: #333;
    }
</style>