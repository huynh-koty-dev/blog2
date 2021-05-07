<template>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <img :src="img" alt="..."   >
       </div>
       <div class="col-sm-6">
           <div class="row">
               <h2>{{title}}</h2>
           </div>
           <div class="row">
               <p>{{description}}</p>
           </div>
           <div class="row">
               <h3>{{price}}</h3>
           </div>
           <div class="row">
               <p>số lượng</p>
               <div>
                   <button @click="increase">-</button><input  type="text" v-model="counter"><button @click="increament">+</button>
               </div>
           </div><br>
           <div >
               <button class="btn btn-success" @click="addToCart">Thêm vào giỏ</button>
           </div>
       </div>
      </div>
    </div>
</template>
<script>
export default {
inject:['products','addProductToCart'],
   props:['teamId','img','title','price','description'],
   data(){
       return{
           proDetail:[],
           counter:1
       }
   },
   methods:{
       loadDetailProduct(teamId){
           const selectedPro = this.products.find(pro => pro.id === teamId);
           this.img = selectedPro.img;
           this.title = selectedPro.title;
           this.price=selectedPro.price;
           this.description= selectedPro.description;
       },
       increase(){
           this.counter--;
           if(this.counter<1){
               this.counter=1;
           }
       },
       increament(){
           this.counter++;
       },
       addToCart() {
        this.addProductToCart({
        id: this.id,
        img: this.img,
        title: this.title,
        price: this.price,
        description:this.description,
        qty: this.counter
      });
    },
   },
   created(){
        this.loadDetailProduct(this.teamId);
    },
    watch:{
        teamId(id){
            this.loadDetailProduct(id);
    }
  }
    
}
</script>
<style  scoped>
input{
    width:30px;
    text-align: center;
}
</style>