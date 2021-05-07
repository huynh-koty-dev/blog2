<template>
      <div class="wrapper clearfix">
            <players
            v-bind:activePlayer="activePlayer"
            v-bind:scoresPlayer="scoresPlayer"
            v-bind:currentScore="currentScore"
            
            />
            
            <controls
            v-bind:isPlaying="isPlaying"
            v-bind:finalScore="finalScore"
            v-on:changeFinalScore="changeFinalScore"
            v-on:handleNewGame="handleNewGame"
            v-on:handleRollDice="handleRollDice"
            v-on:handleHoldScore="handleHoldScore"
            />
            
            <dices v-bind:dices="dices"/>
            <popup-rule 
            v-bind:isOpenPopup="isOpenPopup"
            v-on:handleConfirm="handleConfirm"
            />
        </div>
</template>

<script>
import PopupRule from './components/PopupRule.vue';
import Dices from './components/Dices.vue';
import Controls from './components/Controls.vue';
import Players from './components/Players.vue';
export default {
  name: 'app',
  data () {
    return {
      isOpenPopup:false,
      isPlaying:false,
      activePlayer:1,
      scoresPlayer:[13,30],
      currentScore:30,
      dices:[1,5],
      finalScore:100,
    }
  },
  components:{
    Players,
    Controls,
    Dices,
    PopupRule,
  },
  computed:{
    isWinner(){
      let {scoresPlayer,finalScore}=this;

      if(scoresPlayer[0] >= finalScore || scoresPlayer[1] >= finalScore){
        this.isPlaying = false;
        return true;
      }
      return false;
    }
  },
  methods:{
    changeFinalScore(e){
      var number = parseInt(e.target.value);
      if(isNaN(number)){
        this.finalScore='';
      }else{
        this.finalScore=number;
      }
      
    },
    handleHoldScore(){
      console.log('hold scores in App.vue');
      if(this.isPlaying){
          this.scoresPlayer[this.activePlayer] = this.scoresPlayer[this.activePlayer] + this.currentScore;
         if(!this.isWinner){
           
           this.currentScore=0;
           this.activePlayer = this.activePlayer===0?1:0;
         }
          
      }else{
        alert('moi nhan vao nut new game or roll dice');
      }
    },
    handleConfirm(){
      this.isPlaying = true;
      this.isOpenPopup =false;
      this.scoresPlayer=[0,0];
      this.currentScore = 0;
      this.activePlayer = 0;
      this.dices=[2,2],
      console.log('confirm close');
    },
    handleNewGame(){
      this.isOpenPopup=true;
      // console.log('day la App.vue');
    },
    handleRollDice(){
      console.log(' roll dice in App.vue')
      if(this.isPlaying ==true){
        //xoay xuc xac
        let dice1 =Math.floor(Math.random() * 6)+1;
        let dice2 = Math.floor(Math.random() * 6)+1;
        this.dices=[dice1,dice2];
        
        if(dice1 ===1 || dice2 === 1){
          let activePlayer = this.activePlayer;
           setTimeout(()=>{
            alert(`rat tiec ban player ${activePlayer +1} qua quay trung so 1`);
          },10);
          this.activePlayer = this.activePlayer===0?1:0;
          this.currentScore =0;
        }else{
          this.currentScore=dice2+dice1;
        }
      }else{
          alert('moi nhan vao nut new game');
      }
    }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

body {
    background-image: linear-gradient(rgba(62, 20, 20, 0.4), rgba(62, 20, 20, 0.4)), url('/public/assets/back.jpg');
    background-size: cover;
    background-position: center;
    font-family: Lato;
    font-weight: 300;
    position: relative;
    height: 100vh;
    color: #555;
}

.wrapper {
    width: 1000px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}




/**********************************************
*** PLAYERS
**********************************************/






</style>
